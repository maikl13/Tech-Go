<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Countries;
use App\FAQ;
use App\FaqAnswer;
use App\SuperCategories;
use App\User;
use App\QuestionnaireResult;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Illuminate\Support\Facades\Storage;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (User::find(Auth::id())->admin == "1") {
            $faq = FAQ::all();
            foreach($faq as $f) {
                $answers = FaqAnswer::where("faq_id", $f->id)->get();
                foreach($answers as $a) {
                    $count = QuestionnaireResult::where([["question_id", $f->id],["answer_id", $a->id]])->count();
                    $a->count = $count;
                }
                $f->answers = $answers;
            }
            return view('faq.index', ["faq" => $faq]);
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (User::find(Auth::id())->admin == "1") {
            return view('faq.create');
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (User::find(Auth::id())->admin == "1") {
            $faq = new FAQ();
            $faq->question_ar=$request->question_ar;
            $faq->question_en=$request->question_en;
            $s = $faq->save();
            if($request->answers_ar) {
                foreach($request->answers_ar as $key => $answer_ar){
                    $ans = new FaqAnswer;
                    $ans->answer_ar = $answer_ar;
                    if(isset($request->answers_en[$key])) {
                        $ans->answer_en = $request->answers_en[$key];
                    }
                    $ans->faq_id = $faq->id;
                    $ans->save();
                }
            }
            if ($s) {
                return redirect()->action('FAQController@index');
            } else {
                return redirect(url('/'));
            }
        } else {
            return redirect(url('/'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (User::find(Auth::id())->admin == "1") {
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (User::find(Auth::id())->admin == "1") {
            $faq = FAQ::find($id);
            
            $answers = FaqAnswer::where("faq_id", $faq->id)->get();
            
            return view('faq.edit', ["faq" => $faq, "answers" => $answers]);
        } else {
            return redirect(url('/'));
        }
    }

    public function getPriceCountry($id)
    {
        if (User::find(Auth::id())->admin == "1") {
            $countries = Countries::find($id);
            return $countries;
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        if (User::find(Auth::id())->admin == "1") {
            $faq = FAQ::find($request->id);
            $faq->question_ar=$request->question_ar;
            $faq->question_en=$request->question_en;
            FaqAnswer::where("faq_id", $faq->id)->delete();
            if($request->answers_ar) {
                foreach($request->answers_ar as $key => $answer_ar){
                    $ans = new FaqAnswer;
                    $ans->answer_ar = $answer_ar;
                    if(isset($request->answers_en[$key])) {
                        $ans->answer_en = $request->answers_en[$key];
                    }
                    $ans->faq_id = $faq->id;
                    $ans->save();
                }
            }
            $s = $faq->save();
            if ($s) {
                return redirect()->back();
            } else {
                return redirect(url('/'));
            }
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FAQ::find($id)->delete();
        return redirect()->back();
    }

    public function switch($id)
    {
        $faq = FAQ::find($id);
        if($faq->status == 1) {
            $faq->status = 0;
        }else {
            $faq->status = 1;
        }
        $faq->save();
        return redirect()->back();
    }

    public function status_active(Request $request)
    {
        if (User::find(Auth::id())->admin == "1") {
            $slide = Sliders::find($request->id);
            if ($request->has('active')) {
                if ($request->active == 'on') {
                    $slide->active = 'true';
                } else {
                    $slide->active = 'false ';
                }
            } else {
                $slide->active = 'false ';
            }
            $slide->save();
            return redirect("/admin/sliders");
        } else {
            return redirect(url('/'));
        }

    }

    public function getSocialMedia()
    {
        $settings = Setting::whereIn('key', array('facebook', 'instagram', 'whatsapp', 'messenger'))->get(['key', 'value']);
        return Response()->json($settings);
    }

    /**
     * API
     */
    public function getFAQ()
    {
        $faq = FAQ::get(['id','question','answer']);
        return response()->json($faq);
    }
}
