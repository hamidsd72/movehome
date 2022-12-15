{{--{{dd($propertiesin)}}--}}
{{--{{dd($category,)}}--}}
{{--{{dd($citys , $category)}}--}}
{{--{{dd(json_decode($category->properties_in))}}--}}
{{--{{dd($cities)}}--}}
@extends('layouts.admin',['req'=>true,'file_upload'=>true])
@section('content')
    <div class="row mt-5" style="font-size: 14px">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">
                        {{$title}}
                    </h4>
                </div>

                <div class="card-body">

                    {{Form::open(array('route' => array('admin.villa-category-update' , $category->id ), 'method' => 'PATCH','files'=>true)) }}
                    <div class="row">
                        <div class="col-12 text-center py-4 my-5 text-primary">
                            <h2>اطلاعات کلی</h2>
                        </div>
                        <input type="hidden" name="type" value="villa">

                        <div class="col-xl-12 col-md-12 col-lg-12">
                            <div class="tab-menu-heading hremp-tabs p-0 ">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class="mr-4"><a href="#fa" class="active" data-toggle="tab">فارسی </a>
                                        </li>
                                        <li class="mr-4"><a href="#en" data-toggle="tab">انگلیسی</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="fa">
                                        <div class="card-body">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            {{Form::label('name_fa', '   نام پروژه *')}}
                                                            {{Form::text('name_fa', $category->name_fa, array('class' => 'form-control','required'))}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            {{ Form::label('status_fa', 'وضعیت') }}
                                                            {{ Form::select('status_fa', array('active' => 'فعال', 'pending' => 'پیش نمایش'), $category->status_en, array('class' => 'form-control')) }}
                                                        </div>
                                                    </div>
                                                    {{--                        <div class="col-lg-4 col-md-12 col-sm-12">--}}
                                                    {{--                            <div class="form-group">--}}
                                                    {{--                                {{Form::label('status_fa', '   وضعیت(فارسی) *')}}--}}
                                                    {{--                                <select name="status_fa" class="form-control form-control-lg">--}}
                                                    {{--                                    <option value="active" {{$category->status_fa == 'active' ? 'selected' : '' }}>انتشار</option>--}}
                                                    {{--                                    <option value="pending" {{$category->status_fa == 'pending' ? 'selected' : ''}} >پیش نویس</option>--}}

                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            {{Form::label('address_fa', '   آدرس  *')}}
                                                            {{Form::text('address_fa',$category->address_fa, array('class' => 'form-control','required'))}}
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            {{Form::label('brief_fa ', '   توضیحات کوتاه  *')}}
                                                            {{Form::textarea('brief_fa',$category->brief_fa, array('class' => 'form-control','required'))}}
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            {{Form::label('description_fa ', '    توضیحات  *')}}
                                                            {{Form::textarea('description_fa', $category->description_fa, array('class' => 'form-control textarea','required'))}}
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label> ویژگی اول</label>
                                                            <textarea class="form-control" rows="4" name="Property1_fa"
                                                                      placeholder="متن را اینجا درج کنید...">{!! $category->Property1_fa !!}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label> ویژگی دوم</label>
                                                            <textarea class="form-control" rows="4" name="Property2_fa"
                                                                      placeholder="متن را اینجا درج کنید...">{!! $category->Property2_fa !!}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label> ویژگی سوم</label>
                                                            <textarea class="form-control" rows="4" name="Property3_fa"
                                                                      placeholder="متن را اینجا درج کنید...">{!! $category->Property3_fa !!}</textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="en">
                                        <div class="card-body">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            {{Form::label('name_en', '   نام پروژه *')}}
                                                            {{Form::text('name_en', $category->name_en, array('class' => 'form-control'))}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            {{ Form::label('status_en', 'وضعیت') }}
                                                            {{ Form::select('status_en', array('active' => 'فعال', 'pending' => 'پیش نمایش'),  $category->status_en, array('class' => 'form-control')) }}
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            {{Form::label('address_en', '   آدرس  *')}}
                                                            {{Form::text('address_en', $category->address_en, array('class' => 'form-control'))}}
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            {{Form::label('brief_en ', '   توضیحات کوتاه  *')}}
                                                            {{Form::textarea('brief_en',$category->brief_en, array('class' => 'form-control'))}}
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            {{Form::label('description_en', '    توضیحات  *')}}
                                                            {{Form::textarea('description_en', $category->description_en, array('class' => 'form-control textarea'))}}
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label> ویژگی اول</label>
                                                            <textarea class="form-control" rows="4" name="Property1_fa"
                                                                      placeholder="متن را اینجا درج کنید...">{!! $category->Property1_en !!}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label> ویژگی دوم</label>
                                                            <textarea class="form-control" rows="4" name="Property2_fa"
                                                                      placeholder="متن را اینجا درج کنید...">{!! $category->Property2_en !!}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label> ویژگی سوم</label>
                                                            <textarea class="form-control" rows="4" name="Property3_fa"
                                                                      placeholder="متن را اینجا درج کنید...">{!! $category->Property3_en !!}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="form-group">
                                {{Form::label('slug', '   نامک *')}}
                                {{Form::text('slug', $category->slug, array('class' => 'form-control','required'))}}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('video', 'ویدئو ')}}
                                {{Form::file('video', array('class' => 'dropify' , 'data-default-file'=>is_file($category->video)?url($category->video):null))}}
                            </div>
                        </div>
                        <div class="col-12 text-center py-4 my-5 text-primary">
                            <h2>جزئیات کلی</h2>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>منطقه</label>
                                <select name="city_id" class="form-control form-control-lg">
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}"   {{$city->id == $category->city_id ? 'selected' : '' }}> {{$city->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
{{--                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>منطقه</label>--}}
{{--                                <select name="city_id" class="form-control form-control-lg">--}}

{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                {{Form::label('built_year', '    سال ساخت (نوساز = 0 یا سال را وارد نمایید)  *')}}
                                {{Form::text('built_year', $category->built_year, array('class' => 'form-control','required'))}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                {{Form::label('area', '  متراژ  *')}}
                                {{Form::text('area', $category->area, array('class' => 'form-control','required'))}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                {{Form::label('floor', '   تعداد واحد  *')}}
                                {{Form::number('floor', $category->floor, array('class' => 'form-control','required'))}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                {{Form::label('code', '   کد پروژه  *')}}
                                {{Form::text('code', $category->code, array('class' => 'form-control','required'))}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                {{Form::label('price', '    شروع قیمت از(دلار)   *')}}
                                {{Form::text('price', $category->price, array('class' => 'form-control'))}}
                            </div>
                        </div>
                       {{-- <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                {{Form::label('from_price', '    قیمت از(دلار)  *')}}
                                {{Form::text('from_price', $category->from_price, array('class' => 'form-control','required'))}}
                            </div>
                        </div>--}}
{{--                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>لایف استایل</label>--}}
{{--                                <select name="tpye" class="form-control form-control-lg">--}}
{{--                                    <option value="1">مرکز شهر</option>--}}
{{--                                    <option value="2">ساحل</option>--}}
{{--                                    <option value="3">ویلایی</option>--}}
{{--                                    <option value="4">دید جنگل</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                      {{--  <div class="col-lg-4 col-md-3 col-sm-7 col-8">
                            <div class="form-group">
                                {{Form::label('of_sea', '    فاصله از دریا *')}}
                                {{Form::text('of_sea', $category->of_sea, array('class' => 'form-control','required'))}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-7 col-8">
                            <div class="form-group">
                                {{Form::label('of_airport', '      فاصله از فرودگاه *')}}
                                {{Form::text('of_airport', $category->of_airport, array('class' => 'form-control','required'))}}
                            </div>
                        </div>--}}
                        <div class="col-12 text-center py-4 mb-5 text-primary">
                            <h2> منظره</h2>
                        </div>
                        <div class="col-12">
                            <div style="display: flex; justify-content: space-between;align-items: center;flex-wrap: wrap">
                                <div class="mx-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox"  name="villa_view[]" @if($category->villa_view != 'null') {{in_array(1,json_decode($category->villa_view)) ? 'checked' : ''}} @endif  id="inlineCheckbox1" value="1">
                                        <label class="form-check-label mx-1" for="inlineCheckbox1">دید جنگل</label>
                                    </div>
                                </div>
                                <div class="mx-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox"  name="villa_view[]"  id="inlineCheckbox2" value="3" @if($category->villa_view != 'null') {{in_array(3,json_decode($category->villa_view)) ? 'checked' : ''}} @endif>
                                        <label class="form-check-label mx-1" for="inlineCheckbox2">دید ساحل</label>
                                    </div>
                                </div>
                                <div class="mx-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox"  id="inlineCheckbox3" name="villa_view[]" value="4"  @if($category->villa_view != 'null')  {{in_array(4,json_decode($category->villa_view)) ? 'checked' : ''}}  @endif>
                                        <label class="form-check-label mx-1" for="inlineCheckbox3">دید دریا</label>
                                    </div>
                                </div>
                                <div class="mx-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="villa_view[]"    id="inlineCheckbox4" value="5"  @if($category->villa_view != 'null') {{in_array(5,json_decode($category->villa_view)) ? 'checked' : ''}} @endif>
                                        <label class="form-check-label mx-1" for="inlineCheckbox4">  شهر</label>
                                    </div>
                                </div>
                                <div class="mx-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5"  name="villa_view[]" value="6" @if($category->villa_view != 'null') {{in_array(6,json_decode($category->villa_view)) ? 'checked' : ''}} @endif>
                                        <label class="form-check-label mx-1" for="inlineCheckbox5">دید فضای سبز</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 text-center py-4 my-5 text-primary">
                            <h2> اطلاعات مکانی</h2>
                        </div>

                     {{--   <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="demo-example modal-example w-100">
                                <label for="modal-example"> امکانات داخلی</label>
                                <select id="modal-example1" name="properties_in[]'" multiple>
                                    @foreach($propertiesin as $row)
                                        @if(isset($category->properties_in))
                                        <option value="{{$row->id}}"  @if($category->properties_in != 'null') {{in_array($row->id,json_decode($category->properties_in)) ? 'selected' : ''}} @endif >{{$row->name}}</option>
                                        @endif
                                    @endforeach
                                        <option value="{{$row->id}}" >{{$row->name}}</option>

                                </select>
                            </div>
                        </div>



                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="demo-example modal-example w-100">
                                <label for="modal-example"> امکانات رفاهی</label>
                                <select id="modal-example2" name="properties_out[]" multiple>
                                    @foreach($propertiesout as $row)
                                        @if(isset($category->properties_out)  && json_decode($category->properties_out) != [] && json_decode($category->properties_out) != null)
                                        <option value="{{$row->id}}"  {{in_array($row->id,json_decode($category->properties_out)) ? 'selected' : ''}} >{{$row->name}}</option>
                                        @endif
                                            <option value="{{$row->id}}"   >{{$row->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="demo-example modal-example ">
                                <label for="modal-example">  دسترسی ها</label>
                                <select id="modal-example3" name="properties_access[]" multiple>
                                    @foreach($propertiesaccess as $row)
                                        @if(json_decode($category->properties_access) !== null)
                                        <option value="{{$row->id}}" {{in_array($row->id,json_decode($category->properties_access)) ? 'selected' : ''}}>{{$row->name}}</option>
                                        @endif
                                            <option value="{{$row->id}}" >{{$row->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>--}}



                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                {{Form::label('pic', ' تصویر شاخص ')}}
                                {{Form::file('pic', array('class' => 'dropify' ,'data-default-file'=>is_file($category->pic)?url($category->pic):null))}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('gallery', ' گالری ')}}
                                {{Form::file('gallery[]', array('class' => 'dropify','multiple'))}}
                            </div>
                            <div class="row mb-5">
                                @foreach($category->photos as $row)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                        <a href="{{route('admin.villa-category-photo-destroy',[$row->id])}}"> <div class="gallery-delete">x</div></a>
                                        <img src="{{url($row->path)}}"  class="img-thumbnail w-100" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12 my-5">
                            <div class="form-group">
                                {{Form::label('plan', 'پلن ها ')}}
                                {{Form::file('plan[]', array('class' => 'dropify','multiple' ))}}
                            </div>
                            <div class="row mb-5">
                                @foreach($category->plans as $row)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                        <a href="{{route('admin.villa-category-photo-destroy',[$row->id])}}"> <div class="gallery-delete">x</div></a>

                                        <img src="{{url($row->path)}}"  class="img-thumbnail w-100" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-12 text-center py-4  my-5  text-primary">
                            <h2>  اضافه کردن لینک</h2>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                {{Form::label('video_link1', '   لینک مستقیم ودیو1 ')}}
                                {{Form::text('video_link1', $category->video_link1, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                {{Form::label('video_link2', '      لینک مستقیم ودیو 2 *')}}
                                {{Form::text('video_link2', $category->video_link2, array('class' => 'form-control'))}}
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                {{Form::label('bird_youtub_link', '    لینک یوتیوب دید پرنده ')}}
                                {{Form::text('bird_youtub_link', $category->bird_youtub_link, array('class' => 'form-control',))}}
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                {{Form::label('youtub_link_1', '    لینک یوتیوب  1')}}
                                {{Form::text('youtub_link_1', $category->youtub_link_1, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                {{Form::label('youtub_link_2', '      لینک یوتیوب 2 ')}}
                                {{Form::text('youtub_link_2', $category->youtub_link_2, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                {{Form::label('google_driver_1', '    ویدئو گوگل درایو 1')}}
                                {{Form::text('google_driver_1', $category->google_driver_1, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                {{Form::label('google_driver_2', '    ویدئو گوگل درایو 2 ')}}
                                {{Form::text('google_driver_2', $category->google_driver_2, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                {{Form::label('map', '   لینک نقشه *')}}
                                {{Form::text('map', $category->map, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="col-md-12 text-left">
                            <hr/>
                            {{Form::submit('ذخیره',array('class'=>'btn btn-primary','onclick'=>"return confirm('برای ارسال فرم مطمئن هستید؟')"))}}
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>


@endsection
@push('in_tag_script')

    <link rel="stylesheet" type="text/css" href="{{url('css/example-styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/demo-styles.css')}}">
    <script type="text/javascript" src="{{url('js/jquery.multi-select.js')}}"></script>




    <script src="{{ url('assets/editor/laravel-ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('assets/editor/laravel-ckeditor/adapters/jquery.js') }}"></script>
    <script type="text/javascript">
        {{--        select--}}
        $(function(){

            $('#modal-example1').multiSelect({
                'modalHTML': '<div class="multi-select-modal">'
            });
            $('#modal-example2').multiSelect({
                'modalHTML': '<div class="multi-select-modal">'
            });
            $('#modal-example3').multiSelect({
                'modalHTML': '<div class="multi-select-modal">'
            });
        });
        //select
        var textareaOptions = {
            filebrowserImageBrowseUrl: '{{ url('filemanager?type=Images') }}',
            filebrowserImageUploadUrl: '{{ url('filemanager/upload?type=Images&_token=') }}',
            filebrowserBrowseUrl: '{{ url('filemanager?type=Files') }}',
            filebrowserUploadUrl: '{{ url('filemanager/upload?type=Files&_token=') }}',
            language: 'fa'
        };
        $('.textarea').ckeditor(textareaOptions);
    </script>
@endpush






