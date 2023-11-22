<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Video;
use App\Branch;
use App\Story;
use App\Feature;
use App\News;
use App\Number;
use App\Gallery;
use App\MedicalRequest;
use App\SuperCategories;
use App\Service;
use App\GalleryImage;
use App\Newsletter;
use App\Config;

class Dashboard extends Controller
{

    public function newsletter() {
        $data = Newsletter::orderBy("id","desc")->get();
        return view("dashboard.newsletter")->with(["data" => $data]);
    }

    public function deleteNewsletter($id) {
        Newsletter::find($id)->delete();
        return redirect()->back();
    }

    public function newsletterSend(Request $request) {
        $emails = Newsletter::pluck("email")->toArray();
        foreach($emails as $email) {
            $details = [
                'title' =>  env('MAIL_FROM_NAME'),
                'body' => $request->message
                ];
                \Mail::to($email)->send(new \App\Mail\NewsletterMail($details));
                
        }
        return redirect()->back();
    }

    public function about() {
        $about = About::first();
        if(!$about) {
            $about = new About;
            $about->save();
        }
        return view('dashboard.about')->with(['about' => $about]);
    }

    public function updateAbout(Request $request) {
        $about = About::first();
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . "." . $extension;
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['banner_image'] = $image;
        } 
        if ($request->has('image_en')) {
            $filenameWithExt = $request->file('image_en')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image_en')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . "." . $extension;
            $path = $request->file('image_en')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['banner_image_en'] = $image;
        } 
        if ($request->has('logo')) {
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . "." . $extension;
            $path = $request->file('logo')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['about_logo'] = $image;
        } 
        if ($request->has('video')) {
            $filenameWithExt = $request->file('video')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('video')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . "." . $extension;
            $path = $request->file('video')->storeAs('public/videos', $t);
            $image = str_replace("public/videos/", "", $path);
            $data['about_video'] = $image;
        } 
        if ($request->has('video_en')) {
            $filenameWithExt = $request->file('video_en')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('video_en')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . "." . $extension;
            $path = $request->file('video_en')->storeAs('public/videos', $t);
            $image = str_replace("public/videos/", "", $path);
            $data['about_video_en'] = $image;
        } 
        $about->fill($data)->save();
        return redirect()->back(); 
    }

    public function videosIndex() {
        $videos = Video::all();

        return view("dashboard.videos")->with(["data" => $videos]);
    }

    public function createVideo() {
       
        return view("dashboard.create-video");
    }

    public function storeVideo(Request $request) {
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['image'] = $image;
        } 
        if ($request->has('video')) {
            $filenameWithExt = $request->file('video')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('video')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('video')->storeAs('public/videos', $t);
            $image = str_replace("public/videos/", "", $path);
            $data['source'] = $image;
        } 
        Video::create($data);
        return redirect("/admin/videos");
    }
    
    public function editVideo($id) {
        $video = Video::find($id);
     
        return view("dashboard.edit-video")->with(["video" => $video]);
    }

    public function updateVideo(Request $request) {
        $video = Video::find($request->id);
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['image'] = $image;
        } 
        if ($request->has('video')) {
            $filenameWithExt = $request->file('video')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('video')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('video')->storeAs('public/videos', $t);
            $image = str_replace("public/videos/", "", $path);
            $data['source'] = $image;
        } 
        $video->fill($data)->save();
        return redirect()->back();
    }

    public function deleteVideo($id) {
        Video::find($id)->delete();
        return redirect()->back();
    }
    
    public function branchesIndex() {
        $data = Branch::all();
        return view('dashboard.branches')->with(["data" => $data]);
    }

    public function createBranch() {
        return view('dashboard.create-branch');
    }

    public function storeBranch(Request $request) {
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['image'] = $image;
        } 
        Branch::create($data);
        return redirect("/admin/branches");

    }

    public function editBranch($id) {
        $branch = Branch::find($id);
        return view('dashboard.edit-branch')->with(["branch" => $branch]);
    }

    public function updateBranch(Request $request) {
        $branch = Branch::find($request->id);
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['image'] = $image;
        } 
        $branch->fill($data)->save();
        return redirect()->back();

    }

    public function deleteBranch($id) {
        Branch::find($id)->delete();
        return redirect()->back();
    }

    public function storiesIndex() {
        $stories = Story::all();
        return view('dashboard.stories')->with(['data' => $stories]);
    }

    public function createStory() {
        return view('dashboard.create-story');
    }

    public function storeStory(Request $request) {
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['image'] = $image;
        } 
        Story::create($data);
        return redirect("/admin/stories");
    }

    public function editStory($id) {
        $story = Story::find($id);
        return view('dashboard.edit-story')->with(["story" => $story]);
    }

    public function updateStory(Request $request) {
        $story = Story::find($request->id);
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['image'] = $image;
        } 
        $story->fill($data)->save();
        return redirect()->back();
    }

    public function deleteStory($id) {
        Story::find($id)->delete();
        return redirect()->back();
    }

    // ########### Features ################ //

    public function featuresIndex() {
        $features = Feature::all();
        return view('dashboard.features')->with(['data' => $features]);
    }

    public function createFeature() {
        return view('dashboard.create-feature');
    }

    public function storeFeature(Request $request) {
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['image'] = $image;
        } 
        Feature::create($data);
        return redirect("/admin/features");
    }

    public function editFeature($id) {
        $feature = Feature::find($id);
        return view('dashboard.edit-feature')->with(["feature" => $feature]);
    }

    public function updateFeature(Request $request) {
        $feature = Feature::find($request->id);
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['image'] = $image;
        } 
        $feature->fill($data)->save();
        return redirect()->back();
    }

    public function deleteFeature($id) {
        Feature::find($id)->delete();
        return redirect()->back();
    }

    public function newsIndex() {
        $reviews = News::all();
        return view('dashboard.news')->with(['data' => $reviews]);
    }

    public function createNews() {
    
        return view('dashboard.create-news');
    }

    public function storeNews(Request $request) {
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . "." . $extension;
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['image'] = $image;
        } 
        News::create($data);
        return redirect("/admin/news");
    }

    public function editNews($id) {
        $review = News::find($id);
        return view('dashboard.edit-news')->with(["news" => $review]);
    }

    public function updateNews(Request $request) {
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . "." . $extension;
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['banner_image'] = $image;
        } 
        $review = News::find($request->id);
        $review->fill($data)->save();
        return redirect()->back();
    }

    public function deleteNews($id) {
        News::find($id)->delete();
        return redirect()->back();
    }

    public function numbersIndex() {
        $data = Number::all();
        return view('dashboard.numbers')->with(['data' => $data]);
    }

    public function createNumber() {
        return view('dashboard.create-number');
    }

    public function storeNumber(Request $request) {
        if($request->id) {
            $number = Number::find($request->id);
        }else {
            $number = new Number;
        }
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['image'] = $image;
        } 
        $number->fill($data)->save();
        if($request->id) {
            return redirect()->back();
        }else {
            return redirect('/admin/numbers');
        }
    }

    public function editNumber($id) {
        $number = Number::find($id);
        return view('dashboard.edit-number')->with(['number' => $number]);
    }

    public function deleteNumber($id) {
        Number::find($id)->delete();
        return redirect()->back();
    }

    public function galleryIndex() {
        $gallery = Gallery::all();
        return view('dashboard.gallery')->with(['data' => $gallery]);
    }

    public function createGallery() {
   
        return view('dashboard.create-gallery');
    }

    public function storeGallery(Request $request) {
        $data = $request->all();
        if ($request->has('short_image')) {
            $filenameWithExt = $request->file('short_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('short_image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('short_image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['short_image'] = $image;
        }

        $gallery = Gallery::create($data);


        return redirect("/admin/gallery");
    }

    public function editGallery($id) {
        $gallery = Gallery::find($id);
   
     
        return view("dashboard.edit-gallery")->with(["gallery" => $gallery]);
    }

    public function updateGallery(Request $request) {
        $gallery = Gallery::find($request->id);
        $data = $request->all();
        if ($request->has('short_image')) {
            $filenameWithExt = $request->file('short_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('short_image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
            $path = $request->file('short_image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['short_image'] = $image;
        }
        $gallery->fill($data)->save();

        
        if($request->images) {
            foreach($request->images as $key => $img) {
                $new_name = time() . $img->getClientOriginalName();
                $img->move('uploads/gallery/', $new_name);
                $g_image = new GalleryImage;
                $g_image->image = $new_name;
                $g_image->description_ar = $request['descriptions_ar'][$key];
                $g_image->description_en = $request['descriptions_en'][$key];
                $g_image->gallery_id = $gallery->id;
                $g_image->save();
            }
        }
        return redirect()->back();
    }

    public function deleteGalleryImage($id) {
        GalleryImage::find($id)->delete();
        return response()->json(['status' => true]);
    }

    public function updateGalleryImage() {
        $image = GalleryImage::find(request()->get('id'));
        $content = request()->get('content');
        if(request()->get('field') == "description_ar") {
            $image->description_ar = $content;
        }else {
            $image->description_en = $content;
        }
        $image->save();
        return response()->json(['status' => true]);
    }

    public function deleteGallery($id) {
        Gallery::find($id)->delete();
        return redirect()->back();
    }

    public function messages() {
        $messages = MedicalRequest::orderBy("id","desc")->get();
        return view("dashboard.medical-requests")->with(["data" => $messages]);
    }

    public function deleteMessage($id) {
        $medical = MedicalRequest::find($id);
        $medical->delete();
        return redirect()->back();
    }
    
}
