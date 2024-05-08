<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function(){
        Route::get('categories', 'index');
        Route::post('/category/create', 'store')->name('storeCategory');
        Route::get('/category/edit/{category_id}', 'edit');
        Route::put('/category/update/{category_id}', 'update');
        Route::get('category/delete/{category_id}', 'delete');
    });

    // post routes
    Route::controller(App\Http\Controllers\Admin\PostController::class)->group(function(){
        Route::get('posts', 'index');
        Route::get('post/create', 'create');
        Route::post('post/create', 'store')->name('addpost');
        Route::get('post/edit/{post_id}', 'edit');
        Route::put('post/update/{post_id}', 'update');
        Route::get('post/delete/{post_id}', 'delete');
    });


    // banner post routes
    Route::controller(App\Http\Controllers\Admin\BannerPostController::class)->group(function(){
        Route::get('banner-posts', 'index');
        Route::get('banner/create', 'create');
        Route::post('banner-post/create', 'store')->name('addbannerpost');
        Route::get('banner-post/edit/{post_id}', 'edit');
        Route::put('banner-post/update/{post_id}', 'update');
        Route::get('banner-post/delete/{post_id}', 'delete');
    });


    // setting routes
    Route::controller(App\Http\Controllers\Admin\SettingController::class)->group(function(){
        Route::get('settings', 'index');
        Route::post('settings/save', 'store')->name('saveSettings');
    });

    // newsletter routes
    Route::controller(App\Http\Controllers\Admin\NewsletterController::class)->group(function(){
        Route::get('newsletter', 'index');
        Route::get('newsletter/delete/{newsletter_id}', 'delete');
    });

    // contact routes
    Route::controller(App\Http\Controllers\Admin\ContactController::class)->group(function(){
        Route::get('contacts', 'index');
        Route::get('contact/view/{contact_id}', 'view');
        Route::get('contact/delete/{contact_id}', 'delete');
    });


    // comments routes
    Route::controller(App\Http\Controllers\Admin\CommentController::class)->group(function(){
        Route::get('post/comments', 'viewComments');
        Route::get('comment/approve/{comment_id}', 'approveComment');
        Route::get('comment/disaprove/{comment_id}', 'disaproveComment');
        Route::get('comment/delete/{comment_id}', 'deleteComment');
    });

    // profile routes
    Route::controller(App\Http\Controllers\Admin\ProfileController::class)->group(function(){
        Route::get('profile', 'index');
        Route::get('profile/edit/{user_id}', 'edit');
        Route::put('profile/update/{user_id}', 'store');
        Route::get('profile/delete/{user_id}', 'delete');
        Route::get('password/{profile_id}', 'password');
        Route::put('password/update/{profile_id}', 'updatePassword');
    });

    // product category routes
    Route::controller(App\Http\Controllers\Admin\ProductCategoryController::class)->group(function(){
        Route::get('product-categories', 'index');
        Route::post('/product-category/create', 'store')->name('storeProductCategory');
        Route::get('/product-category/edit/{category_id}', 'edit');
        Route::put('/product-category/update/{category_id}', 'update');
        Route::get('product-category/delete/{category_id}', 'delete');
    });


    // event routes
    Route::controller(App\Http\Controllers\Admin\EventController::class)->group(function(){
        Route::get('events', 'index');
        Route::get('event/create', 'create');
        Route::post('event/create', 'store')->name('addevent');
        Route::get('event/edit/{event_id}', 'edit');
        Route::put('event/update/{event_id}', 'update');
        Route::get('event/delete/{event_id}', 'delete');
    });


    // advert routes
    Route::controller(App\Http\Controllers\Admin\AdController::class)->group(function(){
        Route::get('adverts', 'index');
        Route::get('advert/create', 'create');
        Route::post('advert/create', 'store')->name('storeAd');
        Route::get('advert/edit/{advert_id}', 'edit');
        Route::put('advert/update/{advert_id}', 'update');
        Route::get('advert/delete/{advert_id}', 'delete');
    });

    // gallery routes
    Route::controller(App\Http\Controllers\Admin\GalleryController::class)->group(function(){
        Route::get('gallery', 'index');
        Route::post('gallery/create', 'create')->name('storeImages');
        Route::get('gallery/delete/{image_id}', 'delete');
    });

    // teacher routes
    Route::controller(App\Http\Controllers\Admin\TeacherController::class)->group(function(){
        Route::get('teachers', 'index');
        Route::get('teacher/create', 'create');
        Route::post('teacher/create', 'store')->name('addteacher');
        Route::get('teacher/edit/{teacher_id}', 'edit');
        Route::put('teacher/update/{teacher_id}', 'update');
        Route::get('teacher/delete/{teacher_id}', 'delete');
    });
});





// frontend routes
Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/events', 'events');
    Route::get('/news', 'news');
    Route::get('/staff', 'staff');
    Route::get('/contact', 'contact');
    Route::get('/gallery', 'gallery');
    Route::get('/admission', 'admission');
    Route::get('/branch/gulaama', 'gulaama');
    Route::get('/branch/ham-mukasa', 'mukasa');
    Route::get('/branch/kasangalabi', 'kasangalabi');

    Route::get('event/{event_slug}', 'event');
    Route::get('news/{news_slug}', 'singleNews');

    Route::post('contact/submit', 'submitContact')->name('submitForm');

    // download file
    Route::get('file-download', 'download');
    Route::get('download/nursery-requirements', 'nursery');
    Route::get('download/primary-requirements', 'primary');
    Route::get('download/boarding-requirements', 'boarding');

    Route::get('school-policy', 'policy');
});
