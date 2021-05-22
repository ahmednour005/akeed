<?php

use App\Http\Controllers\Front\aboutController;
use App\Http\Controllers\Front\contactController;
use App\Http\Controllers\Front\faqController;
use App\Http\Controllers\Front\homeController;
use App\Http\Controllers\Front\policyController;
use App\Http\Controllers\Front\projectsController;
use App\Http\Controllers\Front\serviceController;
use App\Http\Controllers\Front\servicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutCompanyController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\CompanyAchievementsController;
use App\Http\Controllers\CompanyDateController;
use App\Http\Controllers\CompanyServicesController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CourceController;
use App\Http\Controllers\Front\TrainningController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TrainningInfoController;
use Illuminate\Support\Facades\Auth;


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

Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashboard/maincategory',MainCategoryController::class);
    Route::resource('dashboard/products', ProductController::class);
    Route::resource('dashboard/positions', PositionController::class);
    Route::resource('dashboard/people', PeopleController::class);
    Route::resource('dashboard/aboutus',AboutUsController::class);
    Route::resource('dashboard/questions',QuestionsController::class);
    Route::resource('dashboard/services',ServicesController::class);
    Route::resource('dashboard/company_date',CompanyDateController::class);
    Route::resource('dashboard/aboutcompany',AboutCompanyController::class);
    Route::resource('dashboard/admin',AdminController::class);
    Route::resource('dashboard/companyservice',CompanyServicesController::class);
    Route::resource('dashboard/clientreview',ClientReviewController::class);
    Route::resource('dashboard/achievements',CompanyAchievementsController::class);
    Route::resource('dashboard/contactInfo',ContactInfoController::class);
    Route::resource('dashboard/sliders',SliderController::class);
    Route::resource('dashboard/cources',TrainningInfoController::class);
    Route::resource('dashboard/course',CourceController::class);
    Route::resource('dashboard/blogs',BlogController::class);

 });
 Route::resource('dashboard/contactus', ContactUsController::class);

Route::get('/', [homeController::class,'index'])->name('home');
Route::get('/about', [aboutController::class,'index'])->name('about');
Route::get('/contactUs', [contactController::class,'index'])->name('contactUs');
Route::get('/faq', [faqController::class,'index'])->name('faq');
Route::get('/policy', [policyController::class,'index'])->name('policy');
Route::get('/projects', [projectsController::class,'index'])->name('projects');
Route::get('/projects/{id}', [projectsController::class,'show'])->name('projects.show');
Route::get('/services', [servicesController::class,'index'])->name('services');
Route::get('/services/{id}', [servicesController::class,'show'])->name('services.show');
Route::get('/blogs', [blogController::class,'index'])->name('blogs');
Route::get('/blogs/{id}', [blogController::class,'show'])->name('blogs.show');
Route::get('/trainning', [TrainningController::class,'index'])->name('trainning.show');
Route::post('/trainning', [TrainningController::class,'store'])->name('trainning.store');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.index');
