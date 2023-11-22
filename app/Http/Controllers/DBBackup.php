<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class DBBackup extends Controller
{
    public function downloadImages() {


        if(!\File::exists(public_path("/archives"))) {
            \File::makeDirectory(public_path("/archives"));
        }
        if(!\File::exists(public_path("/archives/uploads"))) {
            \File::makeDirectory(public_path("/archives/uploads"));
        } 
        if(!\File::exists(public_path("/archives/uploads/cv"))) {
            \File::makeDirectory(public_path("/archives/uploads/cv"));
        }  
        if(!\File::exists(public_path("/archives/uploads/teams"))) {
            \File::makeDirectory(public_path("/archives/uploads/teams"));
        }          
        if(!\File::exists(public_path("/archives/blog_images"))) {
            \File::makeDirectory(public_path("/archives/blog_images"));
        }
        if(!\File::exists(public_path("/archives/teams_images"))) {
            \File::makeDirectory(public_path("/archives/teams_images"));
        }
        if(!\File::exists(public_path("/archives/storage"))) {
            \File::makeDirectory(public_path("/archives/storage"));
        } 

        if(!\File::exists(public_path("/archives/storage/images"))) {
            \File::makeDirectory(public_path("/archives/storage/images"));
        } 
        $disk   = Storage::disk('archive');
        $images = $disk->files("/uploads/cv");
        foreach($images as $img) {
           
            $file = public_path($img);
          
            if($file) {
                $name  = str_replace("uploads/cv/", '', $img);
                $copy_to_archive = \File::copy($file,public_path("/archives/uploads/cv/" . $name));
            }
        }

        $teams = $disk->files("/uploads/teams");
        foreach($teams as $img) {
           
            $file = public_path($img);
          
            if($file) {
                $name  = str_replace("uploads/teams/", '', $img);
                $copy_to_archive = \File::copy($file,public_path("/archives/uploads/teams/" . $name));
            }
        }

        $blog = $disk->files("/blog_images");
        foreach($blog as $img) {
           
            $file = public_path($img);
          
            if($file) {
                $name  = str_replace("blog_images/", '', $img);
                $copy_to_archive = \File::copy($file,public_path("/archives/blog_images/" . $name));
            }
        }

        $blog = $disk->files("/teams_images");
        foreach($blog as $img) {
           
            $file = public_path($img);
          
            if($file) {
                $name  = str_replace("teams_images/", '', $img);
                $copy_to_archive = \File::copy($file,public_path("/archives/teams_images/" . $name));
            }
        }

        $storage   = Storage::disk('public');
        $images = $storage->files("/public/images");
       
        foreach($images as $img) {
           
            $file = storage_path("app/" . $img);
           
            if($file) {
                $name  = str_replace("public/images/", '', $img);
                $copy_to_archive = \File::copy($file,public_path("/archives/storage/images/" . $name));
            }
        }

        // $small_image = $disk->files("public/" . $id . "/small_image");
        // foreach($small_image as $img) {
        //     $file = storage_path("app/" . $img);
        //     if($file) {
        //         $name  = str_replace("public/" . $id . "/small_image/", '', $img);
        //         $copy_to_archive = \File::copy($file,public_path("/archives/" . $id . "/small_image/" . $name));
        //     }
        // }

        $zip = new ZipArchive;
   
        $fileName =  public_path("/archives/" . 'backup.zip');
      
        if ($zip->open(public_path("/archives/" . 'backup.zip'), ZipArchive::CREATE) === TRUE)
        {
            $cvs       = \File::files(public_path("/archives/uploads/cv"));
            $teams       = \File::files(public_path("/archives/uploads/teams"));
            $blog      = \File::files(public_path("/archives/blog_images"));
            $team_images = \File::files(public_path("/archives/teams_images"));
            $storage_images = \File::files(public_path("/archives/storage/images"));
            // $small_image  = \File::files(public_path('/archives/' . $id . "/small_image"));

   
            foreach ($cvs as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, "uploads/cv/" . $relativeNameInZipFile);
            }

            foreach ($teams as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, "uploads/teams/" . $relativeNameInZipFile);
            }

            foreach ($blog as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, "blog_images/" . $relativeNameInZipFile);
            }

            foreach ($team_images as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, "teams_images/" . $relativeNameInZipFile);
            }

            foreach ($storage_images as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, "storage/images/" . $relativeNameInZipFile);
            }
            // foreach ($small_image as $key => $value) {
            //     $relativeNameInZipFile = basename($value);
            //     $zip->addFile($value, "small_image/" . $relativeNameInZipFile);
            // }
             
            $zip->close();
        }else {
            return "error";
        }
    
        return response()->download($fileName);
    }
    public function index() {
        // if(!request()->get('pass')) {
        //     return redirect("/admin/backups/login");
        // }
        // if(request()->get('pass') != env('BACKUP_PASSWORD')) {
        //     return redirect("/admin/backups/login");
        // }
        $disk = Storage::disk('backup');
        $files = $disk->files('/'.env('APP_NAME').'/');
        $backups = [];
        foreach ($files as $k => $f) {
           if (substr($f, -4) == '.zip' && $disk->exists($f)) {
               $backups[] = [
               'file_path' => $f,
               'file_name' => str_replace(config('laravel-backup.backup.name') . env('APP_NAME') .'/', '', $f),
               'file_size' => $disk->size($f),
               'last_modified' => $disk->lastModified($f),
                ];
           }
        }
	    $backups = array_reverse($backups);

        return view('backups.index')->with(["backups" => $backups]);
    }

    public static function humanFileSize($size,$unit="") {
        if( (!$unit && $size >= 1<<30) || $unit == "GB")
             return number_format($size/(1<<30),2)."GB";
        if( (!$unit && $size >= 1<<20) || $unit == "MB")
             return number_format($size/(1<<20),2)."MB";
        if( (!$unit && $size >= 1<<10) || $unit == "KB")
             return number_format($size/(1<<10),2)."KB";
        return number_format($size)." bytes";
  }

    public function download($file_name) {
        $file = config('laravel-backup.backup.name') .'/'.env('APP_NAME').'/'. $file_name;
        $disk = Storage::disk('backup');

        if ($disk->exists($file)) {
            $fs = Storage::disk('backup')->getDriver();
            $stream = $fs->readStream($file);

            return \Response::stream(function () use ($stream) {
                fpassthru($stream);
            }, 200, [
                "Content-Type" => $fs->getMimetype($file),
                "Content-Length" => $fs->getSize($file),
                "Content-disposition" => "attachment; filename=\"" . basename($file) . "\"",
            ]);
        } else {
            abort(404, "Backup file doesn't exist.");
        }
    }

    //  public function delete($file_name){
    //     $disk = Storage::disk('backup');
    //       if ($disk->exists(config('laravel-backup.backup.name') . '/'.env('APP_NAME').'/' . $file_name)) {
    //            $disk->delete(config('laravel-backup.backup.name') . '/'.env('APP_NAME').'/' . $file_name);
    //            return redirect()->back()->withSuccess("تم حذف النسخة الاحتياطية بنجاح");
           
    //       } else {
    //            abort(404, "Backup file doesn't exist.");
    //       }
    //  }

    public function login() {
        return view("backups.auth");
    }

    public function checkLogin(Request $request) {
        if($request->password == env('BACKUP_PASSWORD')) {
            return redirect("/admin/backups?pass=" . $request->password);
        }else {
            return redirect()->back()->withSuccess("بيانات الدخول غير صحيحة");
        }
    }

    public function getBackup()
    {
        // if(!request()->get('pass')) {
        //     return redirect("/admin/backups/login");
        // }
        // if(request()->get('pass') != env('BACKUP_PASSWORD')) {
        //     return redirect("/admin/backups/login");
        // }
        $parameters = [];
        $outputBuffer = null;        
        $b = \Artisan::queue('backup:run --only-db --disable-notifications',  $parameters, $outputBuffer);

        return redirect()->back()->withSuccess("تم انشاء النسخة الاحتياطية");
    }

    public function restore(Request $request) {
        // if($request->password != env("BACKUP_PASSWORD")) {
        //     return redirect("/admin/backups/login");

        // }
        if($request->hasFile("file")) {
            $sql_file = $request->file;
            \DB::unprepared(file_get_contents($sql_file));
            return redirect()->back()->withSuccess("تم استعادة النسخة الاحتياطية");
        }else {
            return redirect()->back()->withSuccess("فشل استعادة النسخة");
        }
    }
}