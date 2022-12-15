<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use App\Models\Slider;
use App\Models\Report;
use App\Models\About;
use App\Models\ContactInfo;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Project;
use App\Models\Category;
use App\Models\TopCity;
use App\Models\Article;
use App\Models\Locale;
use App\Notifications\Test;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::where('type', 'about')->first();
        $footer = Footer::orderBy('id')->first();
        $categories = Category::where('type', 'article')->orderBy('id', 'DESC')->get();
        $projects = Project::with('city:id,name')->latest()->take(10)->get();
        $sliders = Slider::query()->where('type',2)->get();
        $TopCities  = TopCity::all();
        $services = Article::where('type', 'service')->take(10)->get();
        $locales = Locale::all();
        $articleProjects = Article::where('type', 'project')->latest()->take(10)->get();

        return view('front.index', compact('locales','footer','about','categories','projects','sliders','TopCities','services','articleProjects'),
            ['title' => 'صفحه اصلی']);
    }


    public function seen($tbl, $id)
    {
        $link = '';
        if ($tbl == 'banner') {
            $item = Banner::find($id);
            $link = $item->link;
        } elseif ($tbl == 'ad') {
            $item = Ad::find($id);
            $link = $item->link;
        } elseif ($tbl == 'slider') {
            $item = Slider::find($id);
            $link = $item->link;
        }
        if (!$link) {
            return redirect()->back()->with('err_message', 'لینک یافت نشد');
        }
        $item->seen += 1;
        $item->update();
        return redirect($link);
    }

    public function about()
    {
        $about = About::where('type', 'about')->first();
        $sliders = $about->photos;
        $footer = Footer::orderBy('id')->first();
        return view('front.about', compact('footer','sliders', 'about'), ['title' => 'درباره ما']);
    }

    public function contact(Request $request)
    {
        try {
            $item = new Contact();
            $item->name = $request->name ?? '---';
            $item->email = $request->email ?? '---';
            $item->phone = $request->phone ?? '---';
            $item->message = $request->message ?? '---';
            $item->description = serialize($request->all());
            $item->save();

            return redirect()->back()->with('flash_message', 'پیام شما با موفقیت ارسال شد');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('err_message', 'مشکلی در ارسال پیام بوجود آمده،مجددا تلاش کنید');
        }
    }

    public function contact_info()
    {
        $contact = ContactInfo::first();
        $footer = Footer::orderBy('id')->first();

        return view('front.contact', compact('footer', 'contact',
        ), ['title' => 'تماس با ما']);
    }

    public function exchange()
    {
        $about = About::where('type', 'about')->first();
        $footer = Footer::orderBy('id')->first();
        return view('front.exchange', compact('footer', 'about'), ['title' => 'صرافی']);
    }


    public function team()
    {
        $about = About::where('type', 'about')->first();
        $footer = Footer::orderBy('id')->first();
        return view('front.team', compact('footer', 'about'), ['title' => 'تیم ما']);
    }

    public function send_email(Request $request)
    {
        try {
            $user = User::find(1);
            $user->notify(new Test( $request->name, $request->number, $request->email, $request->description ));
            return redirect()->back()->with('flash_message', 'پیام شما با موفقیت ارسال شد');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('err_message', 'مشکلی در ارسال پیام بوجود آمده،مجددا تلاش کنید');
        }
    }
}
