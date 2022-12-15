<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Models\User;
use App\Http\Requests\ProfileRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller {

    public function show() {
        $item=User::findOrFail(Auth::user()->id);
        return view('admin.setting.profile.show', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = User::findOrFail($id);
        $this->validate($request, [
            'username' => 'required|min:4|max:20',
            'password' => 'nullable|min:6|confirmed'
        ]);
        try {
            $item->username = $request->input('username');
            if ($request->input('password') != null and $request->input('password') != '') {
                $item->password = $request->input('password');
            }
            $item->update();
            return redirect()->back()->with('flash_message', 'اطلاعات با موفقیت ویرایش شد');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('err_message', 'برای ویرایش به مشکل خوردیم، مجدد تلاش کنید');
        }
    }


}
