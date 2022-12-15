
@extends('layouts.admin',['req'=>true,'file_upload'=>true])
@section('content')
    <div class="row mt-5" style="font-size: 14px">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">
                        افزودن {{$title}}
                    </h4>
                </div>
                <div class="card-body">
                    {{Form::open(array('route' => array('admin.content.update' , $item->id ), 'method' => 'PATCH','files'=>true)) }}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>اسلاگ صفحه</label>
                                <select name="page_id" class="form-control form-control-lg">
                                    @foreach(\App\Models\Page::where('status','active')->get(['id','title']) as $page)
                                        <option value="{{$page->id}}" {{$item->page_id==$page->id?'selected':''}}>{{$page->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>وضعیت</label>
                                <select name="status" class="form-control form-control-lg">
                                    <option value="active" {{$item->status=='active'?'selected':''}}>فعال</option>
                                    <option value="pending" {{$item->status=='pending'?'selected':''}}>غیرفعال</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('title', ' عنوان h3')}}
                                {{Form::text('title', $item->title, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('sort', ' اندازه فلکس باکس ')}}
                                <select name="sort" class="form-control form-control-lg">
                                    <option value="3" {{$item->sort=='3'?'selected':''}}>1/4 عرض صفحه</option>
                                    <option value="4" {{$item->sort=='4'?'selected':''}}>1/3 عرض صفحه</option>
                                    <option value="6" {{$item->sort=='6'?'selected':''}}>1/2 عرض صفحه</option>
                                    <option value="8" {{$item->sort=='8'?'selected':''}}>2/3 عرض صفحه</option>
                                    <option value="9" {{$item->sort=='9'?'selected':''}}>3/4 عرض صفحه</option>
                                    <option value="12" {{$item->sort=='12'?'selected':''}}>1 واحد کامل</option>
                                </select>
                                {{-- {{Form::number('sort', $item->sort, array('class' => 'form-control','required'))}} --}}
                            </div>
                        </div>
                        
                        {{-- <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('pic', 'تصویر ')}}
                                {{Form::file('pic', array('class' => 'dropify'))}}
                            </div>
                            @if ($item->pic)
                                <a href="{{url('$item->pic')}}" class="mt-2" target="_blank">نمایش تصویر</a>
                            @endif
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('short_text', ' متن زیر تصاویر ')}}
                                {{Form::text('short_text', $item->short_text, array('class' => 'form-control'))}}
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('video', 'ویدئو ')}}
                                {{Form::file('video', array('class' => 'dropify'))}}
                            </div>
                            @if ($item->video)
                                <a href="{{url('$item->video')}}" class="mt-2" target="_blank">نمایش ویدئو</a>
                            @endif
                        </div> --}}
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('link', ' متن اکاردیون سکشن ۱ ')}}
                                {{Form::text('link', $item->link, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{Form::label('section', ' سکشن ')}}
                                <select name="section" class="form-control form-control-lg">
                                    <option value="1" {{$item->section==1?'selected':''}}>آکاردیون بالای صفحه</option>
                                    <option value="2" {{$item->section==2?'selected':''}}>محتوای داخل صفحه</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{Form::label('part', ' ترتیب ')}}
                                {{Form::number('part', $item->part, array('class' => 'form-control','required'))}}
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                {{Form::label('description', ' توضیحات ')}}
                                {{Form::textarea('description', $item->description, array('class' => 'form-control textarea'))}}
                            </div>
                        </div>
                        
                        <div class="col-12 text-left">
                            <hr/>
                            {{Form::submit('ویرایش',array('class'=>'btn btn-primary'))}}
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
