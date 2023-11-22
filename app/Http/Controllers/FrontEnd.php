<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sliders;
use App\About;
use App\Video;
use App\Branch;
use App\Story;
use App\Feature;
use App\News;
use App\Number;
use App\FAQ;
use App\FaqAnswer;
use App\Gallery;
use App\Blog;
use App\MedicalRequest;
use App\SuperCategories;
use App\Service;
use App\ProgramImage;
use App\Team;
use App\Setting;
use App\QuestionnaireResult;
use App\Job;
use App\JobApplicant;
use App\Employee;
use App\EmployeeCategory;
use App\Question;
use App\GalleryImage;
use App\Step;
use App\Project;
use App\Newsletter;
use App\Config;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class FrontEnd extends Controller
{

    public function whatsappContact() {
        // update clicks
        $views = Config::where("key","whatsapp_btn_clicks")->first();
        $old_views = (int) $views->value;
        $new_views = (int) $old_views + 1;
        $views->value = $new_views;
        $views->save();        
 
        return redirect(request()->get('url'));
    }

    public function switchTheme() {
        if(Cookie::get('dark_theme')) {
            Cookie::queue(Cookie::forget('dark_theme'));
        }else {
            Cookie::queue('dark_theme', 'dark', 525948);
        }
        return redirect()->back();
    }

    public function questions() {
        $data = Question::where("answer", "!=" ,"")->orderBy("id","desc")->get();
        return view("front.questions")->with(["data" => $data]);
    }

    public function storeQuestion(Request $request) {
        $data = $request->all();
        Question::create($data);
        return redirect()->back()->withSuccess("تم ارسال سؤالك بنجاح, سيتم الاجابة عليه من الادارة في اقرب وقت");
    }

    public function showQuestionnaire() {
        $questions = FAQ::where('status', 1)->orderBy("id","asc")->get();
        foreach($questions as $q) {
            $answers = FaqAnswer::where("faq_id", $q->id)->orderBy("id","asc")->get();
            $q->answers = $answers;
        }
        return view("front.questionnaire")->with(["questions" => $questions]);
    }

    public function saveQuestionnaire(Request $request) {
        $questions = FAQ::orderBy("id","asc")->get();
        foreach($questions as $q) {
            $results = new QuestionnaireResult;
            $results->question_id = $q->id;
            $results->answer_id   = $request[$q->id . '_answer'];
            $results->save();
        } 
        return redirect()->back()->withSuccess(__('lang.questionnaire_submitted'));
    }

    public function index() {
                // update views
                $views = Config::where("key","website_views")->first();
                $old_views = (int) $views->value;
                $new_views = (int) $old_views + 1;
                $views->value = $new_views;
                $views->save();
        $services = Service::limit(6)->get();
        $steps    = Step::all();
        $videos   = Video::all();
        $projects = Project::where('type', 'project')->orderBy("id","desc")->limit(9)->get();
        $products = Project::where('type', 'product')->orderBy("id","desc")->limit(9)->get();
        $partners = Team::orderBy("id","desc")->get();
        $techs    = Gallery::orderBy("id","asc")->limit(7)->get();
        // $partners = Team::orderBy("id","asc")->get();
        // $news     = News::orderBy("id","desc")->limit(3)->get();
        // $blog     = Blog::orderBy("id","desc")->limit(6)->get();
        // $setting  = Setting::all();
        $sliders_tablet  = Sliders::where("type","tablet")->orderBy("id","asc")->get();
        $sliders_mobile  = Sliders::where("type","mobile")->orderBy("id","asc")->get();
        return view('front.index')->with([
            "services" => $services,
            "steps"    => $steps,
            "videos"   => $videos,
            "projects" => $projects,
            "products" => $products,
            "partners" => $partners,
            "techs"    => $techs,
            "sliders_tablet" => $sliders_tablet,
            "sliders_mobile" => $sliders_mobile,
          
        ]);
    }

    public function services() {
                // update views
                $views = Config::where("key","website_views")->first();
                $old_views = (int) $views->value;
                $new_views = (int) $old_views + 1;
                $views->value = $new_views;
                $views->save();
        $services = Service::get();

        return view('front.services')->with([
            "services" => $services
        ]);
    }

    public function projects() {
                // update views
                $views = Config::where("key","website_views")->first();
                $old_views = (int) $views->value;
                $new_views = (int) $old_views + 1;
                $views->value = $new_views;
                $views->save();
        $projects = Project::where('type', 'project')->orderBy("id","desc")->get();

        return view('front.projects')->with([
            "projects" => $projects
        ]);
    }

    public function showProject($locale,$id) {
                // update views
                $views = Config::where("key","website_views")->first();
                $old_views = (int) $views->value;
                $new_views = (int) $old_views + 1;
                $views->value = $new_views;
                $views->save();
        $project = Project::find($id);
        if(!$project) {
            abort(404);
        }
        return view("front.project-details")->with(["item" => $project]);
    }

    public function products() {
                // update views
                $views = Config::where("key","website_views")->first();
                $old_views = (int) $views->value;
                $new_views = (int) $old_views + 1;
                $views->value = $new_views;
                $views->save();
        $products = Project::where('type', 'product')->orderBy("id","desc")->get();

        return view('front.products')->with([
            "products" => $products
        ]);
    }

    
    public function techs() {
                // update views
                $views = Config::where("key","website_views")->first();
                $old_views = (int) $views->value;
                $new_views = (int) $old_views + 1;
                $views->value = $new_views;
                $views->save();
        $techs    = Gallery::orderBy("id","asc")->get();

        return view('front.techs')->with([
            "techs" => $techs
        ]);
    }

    public function team() {
                // update views
                $views = Config::where("key","website_views")->first();
                $old_views = (int) $views->value;
                $new_views = (int) $old_views + 1;
                $views->value = $new_views;
                $views->save();
        $employees = Employee::orderBy("id","asc")->get();
        foreach($employees as $m) {
            $cat = EmployeeCategory::find($m->position_id);
            $m->cat = $cat;
        }
        return view("front.teams")->with(["team" => $employees]);
    }

    
    public function blog() {
                // update views
                $views = Config::where("key","website_views")->first();
                $old_views = (int) $views->value;
                $new_views = (int) $old_views + 1;
                $views->value = $new_views;
                $views->save();
        $blog     = Blog::paginate(8);
        $random   = Blog::inRandomOrder()->get();
        return view('front.blog')->with([
            'blog' => $blog,
            "random" => $random
        ]);
    }

    public function showSingleBlog($locale, $id) {
                // update views
                $views = Config::where("key","website_views")->first();
                $old_views = (int) $views->value;
                $new_views = (int) $old_views + 1;
                $views->value = $new_views;
                $views->save();
        $item = Blog::find($id);
        $random   = Blog::where("id", "!=", $id)->inRandomOrder()->get();
        return view('front.show-blog')->with([
            "p" => $item,
            "random" => $random
        ]);
    }

    public function storeNewsletter(Request $request) {
        $email = Newsletter::where("email", $request->email)->first();
        if(!$email) {
            $email =  new Newsletter;
            $email->email = $request->email;
            $email->save();
        }
        return "true";
    }

    public function news() {
        $news     = News::orderBy("id","desc")->get();
        return view("front.news")->with(["news" => $news]);
    }

    public function programs($lang,$type) {
        $programs = Program::where("type", $type)->orderBy("id","desc")->get();
        return view("front.".$type."_programs")->with(["programs" => $programs]);
    }

    public function about() {
        $about   = About::first()->toArray();
        return view('front.about')->with([
            "about" => $about
        ]);
    }

    public function storeMedicalRequest(Request $request) {
        $data = $request->all();
        MedicalRequest::create($data);
        return "true";
    }

    public function showSingleNews($locale, $id) {
        $item = News::find($id)->toArray();
        return view('front.single-news')->with([
            "item" => $item
        ]);
    }

    public function showSingleProgram($locale,$id) {
        $item = Program::find($id)->toArray();
        $sub_programs = Program::where("parent_id", $id)->get()->toArray();
        $blog  = Blog::where(function($query) use ($id) {
            
            $query->where("category_id", $id);
            
        })->limit(3)->get()->toArray();

        $gallery = Gallery::where("program_id", $id)->orderBy("id","asc")->get();
        foreach($gallery as $g) {
            $images = GalleryImage::where("gallery_id", $g->id)->orderBy("id","asc")->get()->toArray();
            $g->images = $images;
        }
        $gallery->toArray();
       
        return view('front.single-program')->with([
            "item" => $item,
            "gallery" => $gallery,
            "sub_programs" => $sub_programs,
            "single_program" => true,
            "blog" => $blog
        ]);
    }

    public function showSingleBranch($locale, $id) {
        $branch = Branch::find($id)->toArray();
        return view('front.single-branch')->with([
            "item" => $branch
        ]);
    }




    public function branches() {
        $branches = Branch::all()->toArray();
        return view('front.branches')->with([
            "branches" => $branches,
        ]);
    }

    public function stories() {
        $stories  = Story::all()->toArray();
        return view('front.stories')->with([
            "stories" => $stories, 
        ]);
    }

    public function gallery() {
        $gallery  = Gallery::all();
        return view('front.gallery')->with([
            "gallery" => $gallery, 
        ]);
    }

    public function faqs() {
        $faqs     = FAQ::all()->toArray();
        return view('front.faqs')->with([
            "faqs" => $faqs,
        ]);
    }


    public function contact() {
        return view('front.contact');
    }

    public function contactSubmit(Request $request) {
        $data = $request->all();
        MedicalRequest::create($data);
        return response()->json(['status' => 1 , "msg" => __('lang.success_msg')]);
    }

    public function showSingleStory($locale, $id) {
        $story = Story::find($id);
        return view('front.single-story')->with(["item" => $story]);
    }

    public function jobs() {
        $jobs = Job::orderBy("id","desc")->get()->toArray();
        return view("front.jobs")->with(["jobs" => $jobs]);
    }

    public function showJob($locale,$id) {
        $job = Job::find($id);
        if(!$job) {
            abort(404);
        }
        return view("front.show-job")->with(["item" => $job]);
    }

    public function saveJobApplication(Request $request) {
        $validator = Validator::make($request->all(), [
            'file' => 'mimes:jpg,jpeg,png,pdf,application/pdf,doc,docx|max:5000',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors([__('lang.file_not_supported')]);
        }
        $data = $request->all();
        if($request->hasFile('file')) {
            $new_name = time() . $request->file('file')->getClientOriginalName();
            $request->file->move('uploads/cv/', $new_name);
            $data['cv'] = $new_name;
        }
        JobApplicant::create($data);
        return redirect()->back()->withSuccess("ok");
    }



    public function videos() {
        $videos = Video::where(function($query) {
            if(request()->get('program_id')) {
                $query->where("program_id", request()->get('program_id'));
            }
        })->orderBy("id","asc")->get()->toArray();
        $programs = Program::get()->toArray();
        return view("front.videos")->with(["videos" => $videos, "programs" => $programs]);
    }
}
