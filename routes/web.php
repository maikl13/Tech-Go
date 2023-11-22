<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Blog;
use App\Project;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/admin', function() {
    return redirect('/admin/home');
});
Route::get('/admin/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/admin/employees/categories', 'Employees@categories')->middleware('auth');
Route::get('/admin/employees/categories/create', 'Employees@CreateCategories')->middleware('auth');
Route::get('/admin/employees/categories/{id}/delete', 'Employees@deleteCategory')->middleware('auth');
Route::post('/admin/employees/categories', 'Employees@StoreCategories')->middleware('auth');
Route::resource('/admin/employees', 'Employees')->middleware('auth');
Route::get('/admin/employees/{id}/delete', 'Employees@destroy')->middleware('auth');
Route::resource('/admin/faq', 'FAQController')->middleware('auth');
Route::get('/admin/faq/{id}/delete', 'FAQController@destroy')->middleware('auth');
Route::get('/admin/faq/{id}/switch', 'FAQController@switch')->middleware('auth');
Route::post('/admin/faq/update', 'FAQController@update')->middleware('auth');
Route::resource('/admin/ads', 'AdsController')->middleware('auth');
Route::resource('/admin/settings', 'SettingsController')->middleware('auth');
Route::resource('/admin/contact_us', 'ContactUsController')->middleware('auth');
Route::resource('/admin/pages', 'PagesController')->middleware('auth');
Route::resource('/admin/users', 'UsersController')->middleware('auth');
Route::get('/admin/users/edit_user_password/{id}', 'UsersController@edit_user_password')->middleware('auth');
Route::post('/admin/users/update_user_password', 'UsersController@update_user_password')->middleware('auth');
Route::get('/admin/about', 'Dashboard@about')->middleware('auth');
Route::post('/admin/about/update', 'Dashboard@updateAbout')->middleware('auth');
Route::get('/admin/videos', 'Dashboard@videosIndex')->middleware('auth');
Route::get('/admin/videos/create', 'Dashboard@createVideo')->middleware('auth');
Route::get('/admin/videos/{id}/edit', 'Dashboard@editVideo')->middleware('auth');
Route::get('/admin/videos/{id}/delete', 'Dashboard@deleteVideo')->middleware('auth');
Route::post('/admin/videos/create', 'Dashboard@storeVideo')->middleware('auth');
Route::post('/admin/videos/update', 'Dashboard@updateVideo')->middleware('auth');
Route::get('/admin/gallery', 'Dashboard@galleryIndex')->middleware('auth');
Route::get('/admin/gallery/create', 'Dashboard@createGallery')->middleware('auth');
Route::get('/admin/gallery/{id}/edit', 'Dashboard@editGallery')->middleware('auth');
Route::get('/admin/gallery/{id}/delete', 'Dashboard@deleteGallery')->middleware('auth');
Route::get('/admin/gallery/image/{id}/delete', 'Dashboard@deleteGalleryImage')->middleware('auth');
Route::get('/admin/gallery/image/{id}/update', 'Dashboard@updateGalleryImage')->middleware('auth');
Route::post('/admin/gallery/create', 'Dashboard@storeGallery')->middleware('auth');
Route::post('/admin/gallery/update', 'Dashboard@updateGallery')->middleware('auth');
Route::get('/admin/messages', 'Dashboard@messages')->middleware('auth');
Route::get('/admin/messages/{id}/delete', 'Dashboard@deleteMessage')->middleware('auth');
Route::get('/admin/blog', 'OthersController@blog_index')->middleware('auth');
Route::get('/admin/blog/create', 'OthersController@blog_create')->middleware('auth');
Route::post('/admin/blog/store', 'OthersController@blog_store')->middleware('auth');
Route::get('/admin/blog/{id}/edit', 'OthersController@blog_edit')->middleware('auth');
Route::post('/admin/blog/update', 'OthersController@blog_update')->middleware('auth');
Route::get('/admin/blog/{id}/delete', 'OthersController@blog_delete')->middleware('auth');
Route::get('/admin/teams', 'OthersController@teams_index')->middleware('auth');
Route::get('/admin/teams/create', 'OthersController@teams_create')->middleware('auth');
Route::post('/admin/teams/store', 'OthersController@teams_store')->middleware('auth');
Route::get('/admin/teams/{id}/edit', 'OthersController@teams_edit')->middleware('auth');
Route::post('/admin/teams/update', 'OthersController@teams_update')->middleware('auth');
Route::get('/admin/teams/{id}/delete', 'OthersController@teams_delete')->middleware('auth');
Route::resource('/admin/services', 'Services')->middleware('auth');
Route::get('/admin/services/{id}/delete', 'Services@destroy')->middleware('auth');
Route::resource('/admin/steps', 'Steps')->middleware('auth');
Route::get('/admin/steps/{id}/delete', 'Steps@destroy')->middleware('auth');
Route::resource('/admin/projects', 'Projects')->middleware('auth');
Route::get('/admin/projects/{id}/delete', 'Projects@destroy')->middleware('auth');
Route::resource('/admin/seo', 'SeoController')->middleware('auth');
Route::get('/admin/seo/{id}/delete', 'SeoController@destroy')->middleware('auth');
Route::get('/admin/newsletter', 'Dashboard@newsletter')->middleware('auth');
Route::get('/admin/newsletter/{id}/delete', 'Dashboard@deleteNewsletter')->middleware('auth');
Route::post('/admin/newsletter/send', 'Dashboard@newsletterSend')->middleware('auth');
Route::get('/admin/smtp', 'SMTP@index')->middleware('auth');
Route::post('/admin/smtp', 'SMTP@update')->middleware('auth');
Route::get('/admin/logout', 'UsersController@logout')->middleware('auth');
Route::resource('/admin/sliders', 'SlidersController')->middleware('auth');
Route::post('/admin/sliders/update', 'SlidersController@update')->middleware('auth');
Route::get('/admin/sliders/{id}/delete', 'SlidersController@delete')->middleware('auth');


Route::post("/message/send", "FrontEnd@storeMedicalRequest");
Route::post("/newsletter/submit", "FrontEnd@storeNewsletter");
Route::get("/whatsapp/contact", "FrontEnd@whatsappContact");

Route::get('genrate-sitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to('/ar'), time(), '1.0', 'daily');
    $sitemap->add(URL::to('/en'), time(), '1.0', 'daily');
    $sitemap->add(URL::to('/ar/blog'), time(), '0.9', 'monthly');
    $sitemap->add(URL::to('/en/blog'), time(), '0.9', 'monthly');

    // get all posts from db
    $blog = Blog::all();
    $projects = Project::where("type","project")->get();

    // add every post to the sitemap
    foreach ($blog as $item)
    {
        $sitemap->add(URL::to('/ar/blog/'.$item->id.'/show'), $item->updated_at, '1.0', 'daily');
        $sitemap->add(URL::to('/en/blog/'.$item->id.'/show'), $item->updated_at, '1.0', 'daily');
    }

    foreach ($projects as $item)
    {
        $sitemap->add(URL::to('/ar/projects/'.$item->id.'/show'), $item->updated_at, '1.0', 'daily');
        $sitemap->add(URL::to('/en/projects/'.$item->id.'/show'), $item->updated_at, '1.0', 'daily');
    }

    // generate your sitemap (format, filename)
    $sitemap->store('xml', 'sitemap');
    // this will generate file mysitemap.xml to your public folder

    return redirect(url('sitemap.xml'));
});

Route::get('/', function() {
    return redirect('/ar');
});


// Front Routes
Route::group(["prefix"=> '{locale}', "middleware" => ['language']], function() {
    
    Route::get("/", "FrontEnd@index")->name("home");
    
    Route::get("/services", "FrontEnd@services")->name('services');
    Route::get("/projects", "FrontEnd@projects")->name('explore_our_projects');
    Route::get("/projects/{id}/show", "FrontEnd@showProject")->name('projects_details');
    Route::get("/products", "FrontEnd@products")->name('our_products');
    Route::get("/products/{id}/show", "FrontEnd@showProject")->name('products_details');
    Route::get("/techs", "FrontEnd@techs")->name('our_tech');
    Route::get("/team", "FrontEnd@team")->name('team');
    Route::get("/blog", "FrontEnd@blog")->name('blog');
    Route::get("/blog/{id}/show", "FrontEnd@showSingleBlog")->name('blog_details');
    Route::post("/contact/submit", "FrontEnd@contactSubmit");

    Route::get("/projects/get", "FrontEnd@getProjects");
    Route::get('/theme', 'FrontEnd@switchTheme');
});



