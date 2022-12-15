<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Models\ContactInfo;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Spatie\Permission\Models\Permission;
class ContactController extends Controller
{
    public function controller_title($type)
    {
        switch ($type)
        {
            case 'index':
                return 'تماس با ما';
                break;
            case 'create':
                return 'افزودن  ندارد';
                break;
            case 'edit':
                return 'ویرایش تماس با ما';
                break;
            case 'url_back':
                return route('admin.contact.index');
                break;
            default:
                return '';
                break;
        }
    }
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $items=ContactInfo::orderBy('id')->get();
        return view('admin.setting.contact.index', compact('items'), ['title' => $this->controller_title('index')]);
    }
    public function show($id)
    {

    }
    public function create()
    {

    }
    public function store(ContactRequest $request)
    {

    }
    public function edit($id)
    {
        $url_back=$this->controller_title('url_back');
        $item=ContactInfo::findOrFail($id);
        return view('admin.setting.contact.edit',compact('url_back','item'), ['title' => $this->controller_title('edit')]);
    }
    public function update(ContactRequest $request,$id)
    {
        $item=ContactInfo::findOrFail($id);
        try {
            $item->update([
                'title' => $request->title,
                'address_iframe' => $request->address_iframe,
                'address' => $request->address,
                'phone' => $request->phone,
                'mobile' => $request->mobile,
                'fax' => $request->fax,
                'email' => $request->email,
                'telegram' => $request->telegram,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'whatsapp' => $request->whatsapp,
                'whatsapp_group' => $request->whatsapp_group,
                'links' => $request->links,
            ]);
            if ($request->hasFile('pic')) {
                if (is_file($item->pic)) {
                    File::delete($item->pic);
                }
                $item->pic = file_store($request->pic, 'source/assets/uploads/setting/contact/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'pic-');
                $item->update();
            }
            return redirect($this->controller_title('url_back'))->with('flash_message', 'اطلاعات با موفقیت ویرایش شد');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('err_message', 'برای ویرایش به مشکل خوردیم، مجدد تلاش کنید');
        }
    }
    public function destroy($id)
    {

    }

    public function msg()
    {
        $items = Contact::all();
        return view('admin.setting.contact.msg', compact('items'), ['title' => $this->controller_title('index')]);
    }
}
