<?php

namespace App\Http\Controllers;

use App\Clinic;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\MedicalRecord;
use App\MedicalRecordAttachment;
use App\User;
use Illuminate\Support\Facades\Storage;

class MedicalRecordsController extends Controller
{

    public function index()
    {
        $records = MedicalRecord::orderBy("id", "desc")->get();
        foreach ($records as $item) {
            if ($item->patient_id) {
                $patient = User::find($item->patient_id);
                $item->patient = $patient;
            }
            $user = User::find($item->user_id);
            $item->user = $user;
        }
        return view("medical_records.index", ["data" => $records]);
    }

    public function create()
    {
        return view("medical_records.create");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request["patient_national_id"]) {
            $patient = User::where("id_number", $request["patient_national_id"])->first();
            if ($patient) {
                $data["patient_id"] = $patient->id;
                $this->sendNotification($patient->firebase_token, " مرحبا, " . $patient->name, "تم اضافة سجل طبي لك");
                $notification = new Notification;
                $notification->user_id = $patient->id;
                $notification->title = " مرحبا, " . $patient->name;
                $notification->body = "تم اضافة سجل طبي لك";
                $notification->type = "patient_add_medical_record";
                $notification->save();
            }
        }
        $data["user_id"] = auth()->user()->id;
        MedicalRecord::create($data);
        return redirect("/admin/medical_records");
    }

    function sendNotification($firebase, $title, $message)
    {


        $path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';

        $server_key = "AAAA_g8gfNo:APA91bEluR3vkbhK1_bT-gJIx5ZWV4VRHCMN7KB8zCGAHHKD5ECSGDLV0oTWXX4dlIRA-AWFP2a6t_QjiIqMNkiq2LNVp48mhNDLVA0wp8aGSZukmGHBoZ6OHcpcmJMBU4GiK5dmI5aR";
        $fields = array(
            'to' => $firebase,
            'notification' => array('title' => $title, 'body' => $message, 'sound' => 'default',
                'click_action' => 'notification_order',
                'show_in_foreground' => true),
            'data' => array('message' => $message,
                'value' => 'value',
                'id' => 0,
                'vibrate' => 1));
        $headers = array(
            'Authorization:key=' . $server_key,
            'Content-Type:application/json'
        );
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $path_to_firebase_cm);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        $result = curl_exec($ch);

        curl_close($ch);


    }

    public function edit($id)
    {
        $record = MedicalRecord::find($id);
        return view("medical_records.edit")->with(["r" => $record]);
    }

    public function update(Request $request)
    {
        $record = MedicalRecord::find($request->id);
        $data = $request->all();
        if ($request["patient_national_id"] != $record->patient_national_id) {
            $patient = User::where("id_number", $request["patient_national_id"])->first();
            if ($patient) {
                $data["patient_id"] = $patient->id;
            }
        }
        $record->fill($data)->save();
        return redirect()->back()->withSuccess("تم الحفظ بنجاح");
    }

    public function attachmentsIndex($id)
    {
        $attachments = MedicalRecordAttachment::where("record_id", $id)->orderBy("id", "asc")->get();
        $record = MedicalRecord::find($id);
        return view("medical_records.attachments", ["data" => $attachments, "record" => $record]);
    }

    public function createAttachment($id)
    {
        $record = MedicalRecord::find($id);
        return view("medical_records.create_attachment", ["r" => $record]);
    }

    public function storeAttachment(Request $request)
    {
        $item = $request->file("file");


        $type = "";
        if ($item->getClientOriginalExtension() == "png" || $item->getClientOriginalExtension() == "jpg" || $item->getClientOriginalExtension() == "jpeg" || $item->getClientOriginalExtension() == "gif") {

            $type = "image";

        } elseif ($item->getClientOriginalExtension() == "pdf" || $item->getClientOriginalExtension() == "doc" || $item->getClientOriginalExtension() == "docx") {
            $type = "file";


        } else {
            return redirect()->back()->withSucces("الملف غير مدعوم");
        }

        $small_image = Storage::disk('public_uploads')->putFile("/attachments", $item);
        $small_image = str_replace("attachments/", "", $small_image);

        $attachment = new MedicalRecordAttachment;
        $attachment->type = $type;
        $attachment->name = basename($small_image);
        $attachment->record_id = $request->id;
        $attachment->save();

        return redirect("/admin/medical_records/" . $request->id . "/attachments");
    }

    public function deleteAttachment($id)
    {
        MedicalRecordAttachment::find($id)->delete();
        return redirect()->back();
    }

    public function deleteMedicalRecord($id)
    {
        MedicalRecordAttachment::where("record_id", $id)->delete();
        MedicalRecord::find($id)->delete();
        return redirect()->back();
    }

    public function API_save(Request $request)
    {
        $patient_id = "0";
        if ($request["patient_national_id"]) {
            $patient = User::where("id_number", $request["patient_national_id"])->first();
            if ($patient) {
                $patient_id = $patient->id;
                $this->sendNotification($patient->firebase_token, " مرحبا, " . $patient->name, "تم اضافة سجل طبي لك");
                $notification = new Notification;
                $notification->user_id = $patient->id;
                $notification->title = " مرحبا, " . $patient->name;
                $notification->body = "تم اضافة سجل طبي لك";
                $notification->type = "patient_add_medical_record";
                $notification->save();
            }
        }
        $medical = new MedicalRecord();
        $medical->patient_name = $request->patient_name;
        $medical->description = $request->description;
        $medical->doctor_notes = $request->doctor_notes;
        $medical->patient_national_id = $request->patient_national_id;
        $medical->is_public = $request->is_public;
        $medical->patient_id = $patient_id;
        $medical->user_id = $request->user()->id;
        $save = $medical->save();
        if ($save) {
            if ($request->has("file")) {
                foreach ($request->file("file") as $file) {
                    $item = $file;
                    $type = "";
                    if ($item->getClientOriginalExtension() == "png" || $item->getClientOriginalExtension() == "jpg" || $item->getClientOriginalExtension() == "jpeg" || $item->getClientOriginalExtension() == "gif") {
                        $type = "image";

                    } elseif ($item->getClientOriginalExtension() == "pdf" || $item->getClientOriginalExtension() == "doc" || $item->getClientOriginalExtension() == "docx") {
                        $type = "file";


                    } else {
                        return redirect()->back()->withSucces("الملف غير مدعوم");
                    }

                    $small_image = Storage::disk('public_uploads')->putFile("/attachments", $item);
                    $small_image = str_replace("attachments/", "", $small_image);

                    $attachment = new MedicalRecordAttachment;
                    $attachment->type = $type;
                    $attachment->name = basename($small_image);
                    $attachment->record_id = $medical->id;
                    $attachment->save();
                }
            }

            if ($request->has("images")) {
                foreach ($request->file("images") as $image) {
                    $item = $image;
                    $type = "";
                    if ($item->getClientOriginalExtension() == "png" || $item->getClientOriginalExtension() == "jpg" || $item->getClientOriginalExtension() == "jpeg" || $item->getClientOriginalExtension() == "gif") {
                        $type = "image";

                    } elseif ($item->getClientOriginalExtension() == "pdf" || $item->getClientOriginalExtension() == "doc" || $item->getClientOriginalExtension() == "docx") {
                        $type = "file";


                    } else {
                        return redirect()->back()->withSucces("الملف غير مدعوم");
                    }

                    $small_image = Storage::disk('public_uploads')->putFile("/attachments", $item);
                    $small_image = str_replace("attachments/", "", $small_image);

                    $attachment = new MedicalRecordAttachment;
                    $attachment->type = $type;
                    $attachment->name = basename($small_image);
                    $attachment->record_id = $medical->id;
                    $attachment->save();
                }
            }
        }
        return response()->json(["status" => "true"]);
    }

    public function API_update(Request $request)
    {
        $record = MedicalRecord::find($request->id);
        $data = $request->all();
        if ($request["patient_national_id"] != $record->patient_national_id) {
            $patient = User::where("id_number", $request["patient_national_id"])->first();
            if ($patient) {
                $data["patient_id"] = $patient->id;
                $this->sendNotification($patient->firebase_token, " مرحبا, " . $patient->name, "تم اضافة سجل طبي لك");
                $notification = new Notification;
                $notification->user_id = $patient->id;
                $notification->title = " مرحبا, " . $patient->name;
                $notification->body = "تم اضافة سجل طبي لك";
                $notification->type = "patient_add_medical_record";
                $notification->save();
            }
        }
        $record->fill($data)->save();
        return response()->json(["status" => "true"]);
    }

    public function API_delete_record(Request $request)
    {
        MedicalRecordAttachment::where("record_id", $request->id)->delete();
        MedicalRecord::find($request->id)->delete();
        return response()->json(["status" => "true"]);
    }

    public function API_store_attachment(Request $request)
    {
        $item = $request->file("file");
        $type = "";
        if ($item->getClientOriginalExtension() == "png" || $item->getClientOriginalExtension() == "jpg" || $item->getClientOriginalExtension() == "jpeg" || $item->getClientOriginalExtension() == "gif") {

            $type = "image";

        } elseif ($item->getClientOriginalExtension() == "pdf" || $item->getClientOriginalExtension() == "doc" || $item->getClientOriginalExtension() == "docx") {
            $type = "file";


        } else {
            return response()->json(["status" => "false"]);
        }
        $small_image = Storage::disk('public_uploads')->putFile("/attachments", $item);
        $small_image = str_replace("attachments/", "", $small_image);
        $attachment = new MedicalRecordAttachment;
        $attachment->type = $type;
        $attachment->name = basename($small_image);
        $attachment->record_id = $request->id;
        $attachment->save();
        return response()->json(["status" => "true"]);
    }

    public function API_delete_attachment(Request $request)
    {
        MedicalRecordAttachment::find($request->attachment_id)->delete();
        return response()->json(["status" => "true"]);
    }

    public function API_get_medical_records(Request $request)
    {
        $data = MedicalRecord::where("user_id", $request->user()->id)->orderBy("id", "asc")->get();
        foreach ($data as $item) {
            $attachments = MedicalRecordAttachment::where("record_id", $item->id)->orderBy("id", "asc")->get();
            $item->attachments = $attachments;
        }
        return response()->json(["status" => "true", "data" => $data]);
    }

    public function API_public_medical_records(Request $request)
    {
        $data = MedicalRecord::where([["is_public", 1]])->orderBy("id", "asc")->get();
        foreach ($data as $item) {
            $attachments = MedicalRecordAttachment::where("record_id", $item->id)->orderBy("id", "asc")->get();
            $item->attachments = $attachments;
        }
        return response()->json(["status" => "true", "data" => $data]);
    }

    public function API_search_medical_records(Request $request)
    {
        $data = MedicalRecord::where([["is_public", 1], ["patient_national_id", $request->id_number]])->orderBy("id", "asc")->get();
        foreach ($data as $item) {
            $attachments = MedicalRecordAttachment::where("record_id", $item->id)->orderBy("id", "asc")->get();
            $item->attachments = $attachments;
        }
        return response()->json(["status" => "true", "data" => $data]);
    }
}
