<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function about()
    {
        $about_data = Page::where('id', 1)->first();
        return view('admin.page_about', compact('about_data'));
    }


    public function about_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'about_heading' => 'required',
                'about_content' => 'required'
            ]);
            $page->about_heading = $request->about_heading;
            $page->about_content = $request->about_content;
            $page->about_status = $request->about_status;
            $page->save();
            return redirect()->back()->with('success', 'about page have been Saved successfully');
        }
        $request->validate([
            'about_heading' => 'required',
            'about_content' => 'required'
        ]);
        $page->about_heading = $request->about_heading;
        $page->about_content = $request->about_content;
        $page->about_status = $request->about_status;
        $page->update();
        return redirect()->back()->with('success', 'about page have been updated successfully');
    }

    public function terms()
    {
        $terms_data = Page::where('id', 1)->first();
        return view('admin.page_terms', compact('terms_data'));
    }


    public function terms_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'terms_heading' => 'required',
                'terms_content' => 'required'
            ]);
            $page->terms_heading = $request->terms_heading;
            $page->terms_content = $request->terms_content;
            $page->terms_status = $request->terms_status;
            $page->save();
            return redirect()->back()->with('success', 'terms page have been Saved successfully');
        }
        $request->validate([
            'terms_heading' => 'required',
            'terms_content' => 'required'
        ]);
        $page->terms_heading = $request->terms_heading;
        $page->terms_content = $request->terms_content;
        $page->terms_status = $request->terms_status;
        $page->update();
        return redirect()->back()->with('success', 'terms page have been updated successfully');
    }

    public function privacy()
    {
        $privacy_data = Page::where('id', 1)->first();
        return view('admin.page_privacy', compact('privacy_data'));
    }


    public function privacy_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'privacy_heading' => 'required',
                'privacy_content' => 'required'
            ]);
            $page->privacy_heading = $request->privacy_heading;
            $page->privacy_content = $request->privacy_content;
            $page->privacy_status = $request->privacy_status;
            $page->save();
            return redirect()->back()->with('success', 'privacy page have been Saved successfully');
        }
        $request->validate([
            'privacy_heading' => 'required',
            'privacy_content' => 'required'
        ]);
        $page->privacy_heading = $request->privacy_heading;
        $page->privacy_content = $request->privacy_content;
        $page->privacy_status = $request->privacy_status;
        $page->update();
        return redirect()->back()->with('success', 'privacy page have been updated successfully');
    }

    public function contact()
    {
        $contact_data = Page::where('id', 1)->first();
        return view('admin.page_contact', compact('contact_data'));
    }


    public function contact_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'contact_heading' => 'required',
                'contact_map' => 'required'
            ]);
            $page->contact_heading = $request->contact_heading;
            $page->contact_map = $request->contact_map;
            $page->contact_status = $request->contact_status;
            $page->save();
            return redirect()->back()->with('success', 'contact page have been Saved successfully');
        }
        $request->validate([
            'contact_heading' => 'required',
            'contact_map' => 'required'
        ]);
        $page->contact_heading = $request->contact_heading;
        $page->contact_map = $request->contact_map;
        $page->contact_status = $request->contact_status;
        $page->update();
        return redirect()->back()->with('success', 'contact page have been updated successfully');
    }


    public function photo_gallery()
    {
        $photo_gallery_data = Page::where('id', 1)->first();
        return view('admin.page_photo_gallery', compact('photo_gallery_data'));
    }


    public function photo_gallery_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'photo_gallery_heading' => 'required',

            ]);
            $page->photo_gallery_heading = $request->photo_gallery_heading;

            $page->photo_gallery_status = $request->photo_gallery_status;
            $page->save();
            return redirect()->back()->with('success', 'photo_gallery page have been Saved successfully');
        }
        $request->validate([
            'photo_gallery_heading' => 'required',
        ]);
        $page->photo_gallery_heading = $request->photo_gallery_heading;
        $page->photo_gallery_status = $request->photo_gallery_status;
        $page->update();
        return redirect()->back()->with('success', 'photo_gallery page have been updated successfully');
    }

    public function video_gallery()
    {
        $video_gallery_data = Page::where('id', 1)->first();
        return view('admin.page_video_gallery', compact('video_gallery_data'));
    }


    public function video_gallery_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'video_gallery_heading' => 'required',

            ]);
            $page->video_gallery_heading = $request->video_gallery_heading;

            $page->video_gallery_status = $request->video_gallery_status;
            $page->save();
            return redirect()->back()->with('success', 'video_gallery page have been Saved successfully');
        }
        $request->validate([
            'video_gallery_heading' => 'required',
        ]);
        $page->video_gallery_heading = $request->video_gallery_heading;
        $page->video_gallery_status = $request->video_gallery_status;
        $page->update();
        return redirect()->back()->with('success', 'video_gallery page have been updated successfully');
    }

    public function faq()
    {
        $faq_data = Page::where('id', 1)->first();
        return view('admin.page_faq', compact('faq_data'));
    }


    public function faq_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'faq_heading' => 'required',

            ]);
            $page->faq_heading = $request->faq_heading;

            $page->faq_status = $request->faq_status;
            $page->save();
            return redirect()->back()->with('success', 'faq page have been Saved successfully');
        }
        $request->validate([
            'faq_heading' => 'required',
        ]);
        $page->faq_heading = $request->faq_heading;
        $page->faq_status = $request->faq_status;
        $page->update();
        return redirect()->back()->with('success', 'faq page have been updated successfully');
    }

    public function blog()
    {
        $blog_data = Page::where('id', 1)->first();
        return view('admin.page_blog', compact('blog_data'));
    }


    public function blog_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'blog_heading' => 'required',

            ]);
            $page->blog_heading = $request->blog_heading;

            $page->blog_status = $request->blog_status;
            $page->save();
            return redirect()->back()->with('success', 'blog page have been Saved successfully');
        }
        $request->validate([
            'blog_heading' => 'required',
        ]);
        $page->blog_heading = $request->blog_heading;
        $page->blog_status = $request->blog_status;
        $page->update();
        return redirect()->back()->with('success', 'blog page have been updated successfully');
    }

    public function cart()
    {
        $cart_data = Page::where('id', 1)->first();
        return view('admin.page_cart', compact('cart_data'));
    }


    public function cart_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'cart_heading' => 'required',

            ]);
            $page->cart_heading = $request->cart_heading;

            $page->cart_status = $request->cart_status;
            $page->save();
            return redirect()->back()->with('success', 'cart page have been Saved successfully');
        }
        $request->validate([
            'cart_heading' => 'required',
        ]);
        $page->cart_heading = $request->cart_heading;
        $page->cart_status = $request->cart_status;
        $page->update();
        return redirect()->back()->with('success', 'cart page have been updated successfully');
    }

    public function checkout()
    {
        $checkout_data = Page::where('id', 1)->first();
        return view('admin.page_checkout', compact('checkout_data'));
    }


    public function checkout_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'checkout_heading' => 'required',

            ]);
            $page->checkout_heading = $request->checkout_heading;

            $page->checkout_status = $request->checkout_status;
            $page->save();
            return redirect()->back()->with('success', 'checkout page have been Saved successfully');
        }
        $request->validate([
            'checkout_heading' => 'required',
        ]);
        $page->checkout_heading = $request->checkout_heading;
        $page->checkout_status = $request->checkout_status;
        $page->update();
        return redirect()->back()->with('success', 'checkout page have been updated successfully');
    }

    public function payment()
    {
        $payment_data = Page::where('id', 1)->first();
        return view('admin.page_payment', compact('payment_data'));
    }


    public function payment_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'payment_heading' => 'required'

            ]);
            $page->payment_heading = $request->payment_heading;
            $page->save();
            return redirect()->back()->with('success', 'payment page have been Saved successfully');
        }
        $request->validate([
            'payment_heading' => 'required'
        ]);
        $page->payment_heading = $request->payment_heading;
        $page->update();
        return redirect()->back()->with('success', 'payment page have been updated successfully');
    }


    public function sign_up()
    {
        $sign_up_data = Page::where('id', 1)->first();
        return view('admin.page_sign_up', compact('sign_up_data'));
    }


    public function sign_up_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'sign_up_heading' => 'required'

            ]);
            $page->sign_up_heading = $request->sign_up_heading;
            $page->sign_up_status = $request->sign_up_status;
            $page->save();
            return redirect()->back()->with('success', 'sign_up page have been Saved successfully');
        }
        $request->validate([
            'sign_up_heading' => 'required'
        ]);
        $page->sign_up_heading = $request->sign_up_heading;
        $page->sign_up_status = $request->sign_up_status;
        $page->update();
        return redirect()->back()->with('success', 'sign_up page have been updated successfully');
    }


    public function sign_in()
    {
        $sign_in_data = Page::where('id', 1)->first();
        return view('admin.page_sign_in', compact('sign_in_data'));
    }


    public function sign_in_update(Request $request)
    {
        $page = Page::where('id', 1)->first();
        if ($page == null) {
            $page = new Page();
            $request->validate([
                'sign_in_heading' => 'required'

            ]);
            $page->sign_in_heading = $request->sign_in_heading;
            $page->sign_in_status = $request->sign_in_status;
            $page->save();
            return redirect()->back()->with('success', 'sign_in page have been Saved successfully');
        }
        $request->validate([
            'sign_in_heading' => 'required'
        ]);
        $page->sign_in_heading = $request->sign_in_heading;
        $page->sign_in_status = $request->sign_in_status;

        $page->update();
        return redirect()->back()->with('success', 'sign_in page have been updated successfully');
    }
}
