<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Models\Setting;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ContentController extends Controller {

    public function controller_title($type) {
        if ($type == 'sum') {
            return 'محتوای صفحات';
        } elseif ('single') {
            return 'محتوا صفحه';
        }
    }

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $items = Content::orderByDesc('id')->get();
        return view('admin.setting.content.index', compact('items'), ['title' => $this->controller_title('single'), 'title2' => $this->controller_title('sum')]);
    }

    public function show($id) {
        $items = Content::where('page_id',$id)->orderByDesc('id')->get();
        return view('admin.setting.content.index', compact('id','items'), ['title' => $this->controller_title('single'), 'title2' => $this->controller_title('sum')]);
    }

    public function create() {
        return view('admin.setting.content.create', ['title' => $this->controller_title('single'), 'title2' => $this->controller_title('sum')]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'page_id'     => 'required',
            'title'       => 'nullable|max:250',
            'short_text'  => 'nullable|max:250',
            'description' => 'nullable',
            'section'     => 'required',
            'part'        => 'required',
            'sort'        => 'required',
            'link'        => 'nullable|max:250',
            'pic'         => 'nullable|image|mimes:jpeg,jpg,png|max:5120',
            'video'       => 'nullable|mimes:mp4,mpeg|max:81920',
        ],
            [
                'page_id.required'  => 'لطفا آی دی صفحه را وارد کنید',
                'section.required'  => 'لطفا سکشن را وارد کنید',
                'part.required'     => 'لطفا بخش را وارد کنید',
                'sort.required'     => 'لطفا ترتیب را وارد کنید',
                'title.max'         => 'نام آیتم نباید بیشتر از 240 کاراکتر باشد',
                'short_text.max'    => 'متن کوتاه نباید بیشتر از 250 کاراکتر باشد',
                'link.max'          => 'لینک نباید بیشتر از 250 کاراکتر باشد',
                'pic.image'         => 'لطفا یک تصویر انتخاب کنید',
                'pic.mimes'         => 'لطفا یک تصویر با پسوندهای (png,jpg,jpeg) انتخاب کنید',
                'pic.max'           => 'لطفا حجم تصویر حداکثر 5 مگابایت باشد',
                'video.mimes'       => 'لطفا یک فایل با پسوند (mp4,mpeg) انتخاب کنید',
                'video.max'         => 'لطفا حجم ویدیو حداکثر 80 مگابایت باشد',
            ]);
        try {
            $item = new Content();
            $item->page_id      = $request->page_id;
            $item->title        = $request->title;
            $item->short_text   = $request->short_text;
            $item->description  = $request->description;
            $item->section      = $request->section;
            $item->part         = $request->part;
            $item->sort         = $request->sort;
            $item->link         = $request->link;
            $item->status       = $request->status;
            if ($request->hasFile('pic')) {
                $item->pic = file_store($request->pic, 'source/asset/uploads/item/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'pic_card-');
            }
            if ($request->hasFile('video')) {
                $item->video = file_store($request->video, 'source/asset/uploads/item/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'video_card-');
            }
            $item->save();
            return redirect()->route('admin.content.show',$item->page_id)->withInput()->with('flash_message', 'با موفقیت ایجاد شد.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('err_message', 'مشکلی در ایجاد بوجود آمده،مجددا تلاش کنید');
        }
    }

    public function edit($id) {
        $item = Content::findOrFail($id);
        return view('admin.setting.content.edit', compact('item'), ['title' => $this->controller_title('single'), 'title2' => $this->controller_title('sum')]);
    }

    public function update(Request $request, $sub_service) {
        $this->validate($request, [
            'page_id'     => 'required',
            'title'       => 'nullable|max:250',
            'short_text'  => 'nullable|max:250',
            'description' => 'nullable',
            'section'     => 'required',
            'part'        => 'required',
            'sort'        => 'required',
            'link'        => 'nullable|max:250',
            'pic'         => 'nullable|image|mimes:jpeg,jpg,png|max:5120',
            'video'       => 'nullable|mimes:mp4,mpeg|max:81920',
        ],
            [
                'page_id.required'  => 'لطفا آی دی صفحه را وارد کنید',
                'section.required'  => 'لطفا سکشن را وارد کنید',
                'part.required'     => 'لطفا بخش را وارد کنید',
                'sort.required'     => 'لطفا ترتیب را وارد کنید',
                'title.max'         => 'نام آیتم نباید بیشتر از 240 کاراکتر باشد',
                'short_text.max'    => 'متن کوتاه نباید بیشتر از 250 کاراکتر باشد',
                'link.max'          => 'لینک نباید بیشتر از 250 کاراکتر باشد',
                'pic.image'         => 'لطفا یک تصویر انتخاب کنید',
                'pic.mimes'         => 'لطفا یک تصویر با پسوندهای (png,jpg,jpeg) انتخاب کنید',
                'pic.max'           => 'لطفا حجم تصویر حداکثر 5 مگابایت باشد',
                'video.mimes'       => 'لطفا یک فایل با پسوند (mp4,mpeg) انتخاب کنید',
                'video.max'         => 'لطفا حجم ویدیو حداکثر 80 مگابایت باشد',
            ]);
        $item = Content::findOrFail($sub_service);
        try {
            $item->page_id      = $request->page_id;
            $item->title        = $request->title;
            $item->short_text   = $request->short_text;
            $item->description  = $request->description;
            $item->section      = $request->section;
            $item->part         = $request->part;
            $item->sort         = $request->sort;
            $item->link         = $request->link;
            $item->status       = $request->status;
            if ($request->hasFile('pic')) {
                if ($item->pic != null) {
                    File::delete($item->pic);
                }
                $item->pic = file_store($request->pic, 'source/asset/uploads/content/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'pic_card-');
            }
            if ($request->hasFile('video')) {
                if ($item->video != null) {
                    File::delete($item->video);
                }
                $item->video = file_store($request->video, 'source/asset/uploads/content/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'video_card-');
            }
            $item->update();
            return redirect()->route('admin.content.show',$item->page_id)->withInput()->with('flash_message', 'با موفقیت ویرایش شد.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('err_message', 'مشکلی در ویرایش بوجود آمده،مجددا تلاش کنید');
        }
    }

    public function destroy($id) {
        $item = Content::findOrFail($id);
        if ($item->pic != null) {
            File::delete($item->pic);
        }
        if ($item->video != null) {
            File::delete($item->video);
        }
        $item->delete();
        return redirect()->back()->withInput()->with('flash_message', 'محتوا با موفقیت حذف شد.');
    }
}

