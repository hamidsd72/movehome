<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Models\Setting;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller {
    
    public function controller_title($type) {
        if ($type == 'sum') {
            return 'صفحات';
        } elseif ('single') {
            return 'صفحه';
        }
    }

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $items = Page::orderByDesc('id')->get();
        return view('admin.setting.page.index', compact('items'), ['title' => $this->controller_title('single'), 'title2' => $this->controller_title('sum')]);
    }

    public function create() {
        return view('admin.setting.page.create', ['title' => $this->controller_title('single'), 'title2' => $this->controller_title('sum')]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:250',
        ],
            [
                'title.required'  => 'لطفا نام صفحه را وارد کنید',
                'title.max' => 'نام نباید بیشتر از 250 کاراکتر باشد',
            ]);
        try {
            $item = new Page();
            $item->title                = $request->title;
            $item->status               = $request->status;
            $item->save();
            return redirect()->route('admin.page.index')->withInput()->with('flash_message', 'با موفقیت ایجاد شد.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('err_message', 'مشکلی در ایجاد بوجود آمده،مجددا تلاش کنید');
        }
    }

    public function edit($id) {
        $item = Page::find($id);
        return view('admin.setting.page.edit', compact('item'), ['title' => $this->controller_title('single'), 'title2' => $this->controller_title('sum')]);
    }

    public function update(Request $request, $sub_service) {
        $this->validate($request, [
            'title' => 'required|max:250',
        ],
            [
                'title.required'  => 'لطفا نام صفحه را وارد کنید',
                'title.max' => 'نام نباید بیشتر از 250 کاراکتر باشد',
            ]);
        $item = Page::findOrFail($sub_service);
        try {
            $item->title                = $request->title;
            $item->status               = $request->status;
            $item->update();
            return redirect()->route('admin.page.index')->withInput()->with('flash_message', 'موفقیت ویرایش شد.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('err_message', 'مشکلی در ویرایش بوجود آمده،مجددا تلاش کنید');
        }
    }

    public function destroy($id) {
        $page = Page::findOrFail($id);
        if ($page->contents()) {
            return redirect()->back()->withInput()->with('err_message', 'صفحه دارای محتواست, نمیتوان حذف کرد.');
        }
        $page->delete();
        return redirect()->back()->withInput()->with('flash_message', 'با موفقیت حذف شد.');
    }
    
}
