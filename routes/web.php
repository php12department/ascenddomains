<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AdminOfferController;
use App\Http\Controllers\Admin\StaticPageController;
use App\Http\Controllers\Admin\DomainMediaController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\DomainCategoryController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\NewsletterController as AdminNewsletterController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('index');
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('index');


Route::get('admin-login', [AdminController::class, 'login_form'])->name('login.form')->middleware('redirect.admin.auth');
Route::post('login-functionality', [AdminController::class, 'login_functionality'])->name('login.functionality');
Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('adminlogout');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        // Domains
        Route::get('/domains', [DomainController::class, 'index'])->name('admin.domains');
        Route::get('/solddomains', [DomainController::class, 'solddoamin'])->name('admin.domainsold.index');
        Route::get('/admin/domains/{id}', [DomainController::class, 'show'])->name('admin.domains.show');
        Route::get('/admin/domains/{id}/edit', [DomainController::class, 'edit'])->name('admin.domains.edit');
        Route::put('/admin/domains/{id}', [DomainController::class, 'update'])->name('admin.domains.update');
        //Domain types
        Route::get('/admin/domain-types', [DomainController::class, 'domainTypes'])->name('admin.domain-types.index');
        // Domain Category
        Route::get('domaincategory', [DomainCategoryController::class, 'index'])->name('admin.domaincategories.index');
        Route::get('domaincategory/create', [DomainCategoryController::class, 'create'])->name('admin.domaincategories.create');
        Route::post('domaincategory', [DomainCategoryController::class, 'store'])->name('admin.domaincategories.store');
        Route::get('domaincategory/{domaincategory}/edit', [DomainCategoryController::class, 'edit'])->name('admin.domaincategories.edit');
        Route::put('domaincategory/{domaincategory}', [DomainCategoryController::class, 'update'])->name('admin.domaincategories.update');
        Route::delete('domaincategory/{domaincategory}', [DomainCategoryController::class, 'destroy'])->name('admin.domaincategories.destroy');

        // Static Page
        Route::get('/admin/staticpage', [StaticPageController::class, 'index'])->name('admin.StaticPage.index');
        Route::get('/admin/staticpage/{id}/edit', [StaticPageController::class, 'edit'])->name('admin.StaticPage.edit');
        Route::put('/admin/staticpage/{id}', [StaticPageController::class, 'update'])->name('admin.StaticPage.update');
        Route::get('/newsletter', [AdminNewsletterController::class, 'index'])->name('admin.newsletter.index');
        Route::get('/faqs', [AdminFaqController::class, 'index'])->name('admin.faq.index');
        Route::get('/faqs/create', [AdminFaqController::class, 'create'])->name('admin.faqs.create');
        Route::post('/faqs', [AdminFaqController::class, 'store'])->name('admin.faqs.store');
        Route::get('/admin/faqs/{faq}/edit', [AdminFaqController::class, 'edit'])->name('admin.faqs.edit');
        Route::put('/admin/faqs/{faq}', [AdminFaqController::class, 'update'])->name('admin.faqs.update');
        Route::delete('/admin/faqs/{faq}', [AdminFaqController::class, 'destroy'])->name('admin.faqs.destroy');
        // Blog
        Route::get('blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
        Route::get('blogs/create', [BlogController::class, 'create'])->name('admin.blogs.create');
        Route::post('blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
        Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
        Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('admin.blogs.update');
        Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');

        Route::get('my-account', [AccountController::class, 'show'])->name('admin.my-account.show');
        Route::put('my-account/update/{id}', [AccountController::class, 'update'])->name('admin.my-account.update');

        Route::get('/contact', [ContactController::class, 'index'])->name('admin.contacts.index');
        Route::get('/news', [NewsController::class, 'index'])->name('admin.news.index');
        Route::get('/news/create', [NewsController::class, 'create'])->name('admin.news.create');
        Route::post('/news', [NewsController::class, 'store'])->name('admin.news.store');
        Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
        Route::put('/news/{id}', [NewsController::class, 'update'])->name('admin.news.update');
        Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
        Route::get('/domain-media', [DomainMediaController::class, 'index'])->name('admin.domainmedia');
        Route::get('/domain-media/create', [DomainMediaController::class, 'create'])->name('admin.domainmedia.create');
        Route::post('/domain-media', [DomainMediaController::class, 'store'])->name('admin.domainmedia.store');
        Route::get('/domain-media/{id}/edit', [DomainMediaController::class, 'edit'])->name('admin.domainmedia.edit');
        Route::put('/domain-media/{id}', [DomainMediaController::class, 'update'])->name('admin.domainmedia.update');
        Route::delete('/domain-media/{id}', [DomainMediaController::class, 'destroy'])->name('admin.domainmedia.destroy');
        Route::get('/admin/domainmedia/{id}', [DomainMediaController::class, 'show'])->name('admin.domainmedia.show');

        // Offfer
        Route::get('/offers', [AdminOfferController::class, 'index'])->name('admin.offers.index');
        Route::put('/offers/{offerId}/{userId}/{domainId}/accept', [AdminOfferController::class, 'accept'])->name('admin.offers.accept');
        Route::put('/offers/{offer}/decline', [AdminOfferController::class, 'decline'])->name('admin.offers.decline');
        Route::get('/admin/offers/{offer}/', [AdminOfferController::class, 'show'])->name('admin.offers.show');

        Route::get('/faqcategories', [FaqCategoryController::class, 'index'])->name('admin.faqcategories.index');
        Route::get('/faqcategories/create', [FaqCategoryController::class, 'create'])->name('admin.faqcategories.create');
        Route::post('/faqcategories', [FaqCategoryController::class, 'store'])->name('admin.faqcategories.store');
        Route::get('/faqcategories/{faqcategory}/edit', [FaqCategoryController::class, 'edit'])->name('admin.faqcategories.edit');
        Route::put('/faqcategories/{faqcategory}', [FaqCategoryController::class, 'update'])->name('admin.faqcategories.update');
        Route::delete('/faqcategories/{faqcategory}', [FaqCategoryController::class, 'destroy'])->name('admin.faqcategories.destroy');


    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/myaccount', [App\Http\Controllers\HomeController::class, 'myaccount'])->name('myaccount');
Route::post('/update-account-info', [App\Http\Controllers\HomeController::class, 'updateaccountinfo'])->name('update-account-info');
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs.index');
Route::get('/faqs/{id}', [FaqController::class, 'show'])->name('faqs.show');
Route::get('/blog', [App\Http\Controllers\FrontController::class, 'blog'])->name('blog');
Route::get('/blog-detail/{id}', [App\Http\Controllers\FrontController::class, 'blogDetail'])->name('blogDetail');
Route::get('/search-blog', [App\Http\Controllers\FrontController::class, 'blogSearch'])->name('blog.search');
Route::get('/contactus', [App\Http\Controllers\FrontController::class, 'contactus'])->name('contactus');
Route::post('/submitContactForm', [App\Http\Controllers\FrontController::class, 'submitContactForm'])->name('submitContactForm');
Route::get('privacypolicy', [App\Http\Controllers\FrontController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('terms', [App\Http\Controllers\FrontController::class, 'terms'])->name('terms');
Route::post('ckeditor/staticpageupload', [ImageUploadController::class, 'StaticPageupload'])->name('ckeditor.staticpageupload');
Route::post('ckeditor/blogupload', [ImageUploadController::class, 'blogupload'])->name('ckeditor.blogupload');
Route::get('domainauctions', [App\Http\Controllers\FrontController::class, 'domainauctions'])->name('domainauctions');
Route::get('buydomain', [App\Http\Controllers\FrontController::class, 'buydomain'])->name('buydomain');
Route::get('selldomain', [App\Http\Controllers\FrontController::class, 'selldomain'])->name('selldomain');
Route::post('ckeditor/newsupload', [ImageUploadController::class, 'newsupload'])->name('ckeditor.newsupload');
Route::get('overview', [App\Http\Controllers\FrontController::class, 'overview'])->name('overview');
Route::get('recentnews/{id}/', [App\Http\Controllers\FrontController::class, 'recentnews'])->name('recentnews');
Route::get('premiumdomains', [App\Http\Controllers\FrontController::class, 'premiumdomains'])->name('premiumdomains');
Route::get('aboutus', [App\Http\Controllers\FrontController::class, 'aboutus'])->name('aboutus');
Route::get('domain-detail/{id}', [App\Http\Controllers\FrontController::class, 'singledomain'])->name('singledomain');
Route::get('domain-listing-type-wise/{type_id}', [App\Http\Controllers\FrontController::class, 'domainlist'])->name('domainlist');
Route::get('domain-listing', [App\Http\Controllers\FrontController::class, 'domainlistall'])->name('domainlistall');
Route::get('domain-listing-category-wise/{category_id}', [App\Http\Controllers\FrontController::class, 'domainlistcateory'])->name('domainlistcateory');
Route::get('/domains/search', [App\Http\Controllers\FrontController::class, 'search'])->name('domains.search');
Route::post('/domain/search', [App\Http\Controllers\FrontController::class, 'premiumdomainsearch'])->name('premiumdomain.search');
Route::get('/api-data/{id}', [ApiController::class, 'createsingledaazsecure'])->name('api-data')->middleware('auth');
Route::get('/submit_offer', [OfferController::class, 'submitOffer'])->name('submit_offer')->middleware('auth');
