<?php

use App\Http\Controllers\Admin\AccountController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FaqController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Admin\StaticPageController;
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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('login-form', [AdminController::class, 'login_form'])->name('login.form')->middleware('redirect.admin.auth');
Route::post('login-functionality', [AdminController::class, 'login_functionality'])->name('login.functionality');
Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('adminlogout');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        // Domains
        Route::get('/domains', [DomainController::class, 'index'])->name('admin.domains');
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



    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/myaccount', [App\Http\Controllers\HomeController::class, 'myaccount'])->name('myaccount');
Route::post('/update-account-info', [App\Http\Controllers\HomeController::class, 'updateaccountinfo'])->name('update-account-info');
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs.index');
Route::get('/faqs/{id}', [FaqController::class, 'show'])->name('faqs.show');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/blog-detail/{id}', [App\Http\Controllers\HomeController::class, 'blogDetail'])->name('blogDetail');
Route::get('/search-blog', [App\Http\Controllers\HomeController::class, 'blogSearch'])->name('blog.search');


