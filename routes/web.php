<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\FaqController;
use App\Http\Controllers\website\BlogController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\AboutController;
use App\Http\Controllers\website\PhotoController;
use App\Http\Controllers\website\TermsController;
use App\Http\Controllers\website\VideoController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\website\ContactController;
use App\Http\Controllers\website\PrivacyController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminPhotoController;
use App\Http\Controllers\Admin\AdminVideoController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminFeatureController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\website\SignupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*

/*    website */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/post/{id}', [BlogController::class, 'post'])->name('post');
Route::get('/photo_gallery', [PhotoController::class, 'index'])->name('photo');
Route::get('/video_gallery', [VideoController::class, 'index'])->name('video');
Route::get('/FAQ', [FaqController::class, 'index'])->name('faq');
Route::get('/terms', [TermsController::class, 'index'])->name('terms');
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/sign-up', [SignupController::class, 'index'])->name('signup');
// Route::get('/cart', [CartController::class, 'index'])->name('cart');
// Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
// Route::get('/payment', [PaymentController::class, 'index'])->name('payment');



/* Admin */

Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('/admin/edite-profile', [AdminProfileController::class, 'index'])->name('admin_profile')->middleware('admin:admin');
Route::post('/admin/edite-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');

//slide section
Route::get('/admin/slide/view', [AdminSliderController::class, 'index'])->name('admin_slider_view')->middleware('admin:admin');
Route::get('/admin/slide/add', [AdminSliderController::class, 'creat'])->name('admin_slider_add')->middleware('admin:admin');
Route::post('/admin/slide/store', [AdminSliderController::class, 'store'])->name('admin_slide_store')->middleware('admin:admin');
Route::get('/admin/slide/edit/{id}', [AdminSliderController::class, 'edit'])->name('admin_slider_edit')->middleware('admin:admin');
Route::post('/admin/slide/update/{id}', [AdminSliderController::class, 'update'])->name('admin_slider_update')->middleware('admin:admin');
Route::get('/admin/slide/delete/{id}', [AdminSliderController::class, 'delete'])->name('admin_slider_delete')->middleware('admin:admin');

//feature section
Route::get('/admin/feature/view', [AdminFeatureController::class, 'index'])->name('admin_feature_view')->middleware('admin:admin');
Route::get('/admin/feature/add', [AdminFeatureController::class, 'creat'])->name('admin_feature_add')->middleware('admin:admin');
Route::post('/admin/feature/store', [AdminFeatureController::class, 'store'])->name('admin_feature_store')->middleware('admin:admin');
Route::get('/admin/feature/edit/{id}', [AdminFeatureController::class, 'edit'])->name('admin_feature_edit')->middleware('admin:admin');
Route::post('/admin/feature/update/{id}', [AdminFeatureController::class, 'update'])->name('admin_feature_update')->middleware('admin:admin');
Route::get('/admin/feature/delete/{id}', [AdminFeatureController::class, 'delete'])->name('admin_feature_delete')->middleware('admin:admin');

//testimonial section
Route::get('/admin/testimonial/view', [AdminTestimonialController::class, 'index'])->name('admin_testimonial_view')->middleware('admin:admin');
Route::get('/admin/testimonial/add', [AdminTestimonialController::class, 'creat'])->name('admin_testimonial_add')->middleware('admin:admin');
Route::post('/admin/testimonial/store', [AdminTestimonialController::class, 'store'])->name('admin_testimonial_store')->middleware('admin:admin');
Route::get('/admin/testimonial/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('admin_testimonial_edit')->middleware('admin:admin');
Route::post('/admin/testimonial/update/{id}', [AdminTestimonialController::class, 'update'])->name('admin_testimonial_update')->middleware('admin:admin');
Route::get('/admin/testimonial/delete/{id}', [AdminTestimonialController::class, 'delete'])->name('admin_testimonial_delete')->middleware('admin:admin');

//post section
Route::get('/admin/post/view', [AdminPostController::class, 'index'])->name('admin_post_view')->middleware('admin:admin');
Route::get('/admin/post/add', [AdminPostController::class, 'creat'])->name('admin_post_add')->middleware('admin:admin');
Route::post('/admin/post/store', [AdminPostController::class, 'store'])->name('admin_post_store')->middleware('admin:admin');
Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin_post_edit')->middleware('admin:admin');
Route::post('/admin/post/update/{id}', [AdminPostController::class, 'update'])->name('admin_post_update')->middleware('admin:admin');
Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'delete'])->name('admin_post_delete')->middleware('admin:admin');


//photo galary section
Route::get('/admin/photo/view', [AdminPhotoController::class, 'index'])->name('admin_photo_view')->middleware('admin:admin');
Route::get('/admin/photo/add', [AdminPhotoController::class, 'creat'])->name('admin_photo_add')->middleware('admin:admin');
Route::post('/admin/photo/store', [AdminPhotoController::class, 'store'])->name('admin_photo_store')->middleware('admin:admin');
Route::get('/admin/photo/edit/{id}', [AdminPhotoController::class, 'edit'])->name('admin_photo_edit')->middleware('admin:admin');
Route::post('/admin/photo/update/{id}', [AdminPhotoController::class, 'update'])->name('admin_photo_update')->middleware('admin:admin');
Route::get('/admin/photo/delete/{id}', [AdminPhotoController::class, 'delete'])->name('admin_photo_delete')->middleware('admin:admin');

//video galary section
Route::get('/admin/video/view', [AdminVideoController::class, 'index'])->name('admin_video_view')->middleware('admin:admin');
Route::get('/admin/video/add', [AdminVideoController::class, 'creat'])->name('admin_video_add')->middleware('admin:admin');
Route::post('/admin/video/store', [AdminVideoController::class, 'store'])->name('admin_video_store')->middleware('admin:admin');
Route::get('/admin/video/edit/{id}', [AdminVideoController::class, 'edit'])->name('admin_video_edit')->middleware('admin:admin');
Route::post('/admin/video/update/{id}', [AdminVideoController::class, 'update'])->name('admin_video_update')->middleware('admin:admin');
Route::get('/admin/video/delete/{id}', [AdminVideoController::class, 'delete'])->name('admin_video_delete')->middleware('admin:admin');


//FAQ section
Route::get('/admin/faq/view', [AdminFaqController::class, 'index'])->name('admin_faq_view')->middleware('admin:admin');
Route::get('/admin/faq/add', [AdminFaqController::class, 'creat'])->name('admin_faq_add')->middleware('admin:admin');
Route::post('/admin/faq/store', [AdminFaqController::class, 'store'])->name('admin_faq_store')->middleware('admin:admin');
Route::get('/admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin_faq_edit')->middleware('admin:admin');
Route::post('/admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('admin_faq_update')->middleware('admin:admin');
Route::get('/admin/faq/delete/{id}', [AdminFaqController::class, 'delete'])->name('admin_faq_delete')->middleware('admin:admin');

//about page section
Route::get('/admin/page/about', [AdminPageController::class, 'about'])->name('admin_page_about')->middleware('admin:admin');
Route::post('/admin/page/about/update', [AdminPageController::class, 'about_update'])->name('admin_page_about_update')->middleware('admin:admin');

//terms page section
Route::get('/admin/page/terms', [AdminPageController::class, 'terms'])->name('admin_page_terms')->middleware('admin:admin');
Route::post('/admin/page/terms/update', [AdminPageController::class, 'terms_update'])->name('admin_page_terms_update')->middleware('admin:admin');

//privacy page section
Route::get('/admin/page/privacy', [AdminPageController::class, 'privacy'])->name('admin_page_privacy')->middleware('admin:admin');
Route::post('/admin/page/privacy/update', [AdminPageController::class, 'privacy_update'])->name('admin_page_privacy_update')->middleware('admin:admin');

//contact page section
Route::get('/admin/page/contact', [AdminPageController::class, 'contact'])->name('admin_page_contact')->middleware('admin:admin');
Route::post('/admin/page/contact/update', [AdminPageController::class, 'contact_update'])->name('admin_page_contact_update')->middleware('admin:admin');

//photo_gallery page section
Route::get('/admin/page/photo_gallery', [AdminPageController::class, 'photo_gallery'])->name('admin_page_photo_gallery')->middleware('admin:admin');
Route::post('/admin/page/photo_gallery/update', [AdminPageController::class, 'photo_gallery_update'])->name('admin_page_photo_gallery_update')->middleware('admin:admin');

//video_gallery page section
Route::get('/admin/page/video_gallery', [AdminPageController::class, 'video_gallery'])->name('admin_page_video_gallery')->middleware('admin:admin');
Route::post('/admin/page/video_gallery/update', [AdminPageController::class, 'video_gallery_update'])->name('admin_page_video_gallery_update')->middleware('admin:admin');

//faq page section
Route::get('/admin/page/faq', [AdminPageController::class, 'faq'])->name('admin_page_faq')->middleware('admin:admin');
Route::post('/admin/page/faq/update', [AdminPageController::class, 'faq_update'])->name('admin_page_faq_update')->middleware('admin:admin');

//blog page section
Route::get('/admin/page/blog', [AdminPageController::class, 'blog'])->name('admin_page_blog')->middleware('admin:admin');
Route::post('/admin/page/blog/update', [AdminPageController::class, 'blog_update'])->name('admin_page_blog_update')->middleware('admin:admin');

//cart page section
Route::get('/admin/page/cart', [AdminPageController::class, 'cart'])->name('admin_page_cart')->middleware('admin:admin');
Route::post('/admin/page/cart/update', [AdminPageController::class, 'cart_update'])->name('admin_page_cart_update')->middleware('admin:admin');

//checkout page section
Route::get('/admin/page/checkout', [AdminPageController::class, 'checkout'])->name('admin_page_checkout')->middleware('admin:admin');
Route::post('/admin/page/checkout/update', [AdminPageController::class, 'checkout_update'])->name('admin_page_checkout_update')->middleware('admin:admin');

//payment page section
Route::get('/admin/page/payment', [AdminPageController::class, 'payment'])->name('admin_page_payment')->middleware('admin:admin');
Route::post('/admin/page/payment/update', [AdminPageController::class, 'payment_update'])->name('admin_page_payment_update')->middleware('admin:admin');


//sign up page section
Route::get('/admin/page/sign-up', [AdminPageController::class, 'sign_up'])->name('admin_page_sign_up')->middleware('admin:admin');
Route::post('/admin/page/sign-up/update', [AdminPageController::class, 'sign_up_update'])->name('admin_page_sign_up_update')->middleware('admin:admin');

//sign in page section
Route::get('/admin/page/sign-in', [AdminPageController::class, 'sign_in'])->name('admin_page_sign_in')->middleware('admin:admin');
Route::post('/admin/page/sign-in/update', [AdminPageController::class, 'sign_in_update'])->name('admin_page_sign_in_update')->middleware('admin:admin');
