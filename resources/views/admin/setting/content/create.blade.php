
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
                    {{Form::open(array('route' => array('admin.content.store'), 'method' => 'POST','files'=>true)) }}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>اسلاگ صفحه</label>
                                <select name="page_id" class="form-control form-control-lg">
                                    @foreach(\App\Models\Page::where('status','active')->get(['id','title']) as $page)
                                        <option value="{{$page->id}}">{{$page->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>وضعیت</label>
                                <select name="status" class="form-control form-control-lg">
                                    <option value="active" selected>فعال</option>
                                    <option value="pending">غیرفعال</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('title', ' عنوان h3')}}
                                {{Form::text('title', null, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('sort', ' اندازه فلکس باکس ')}}
                                <select name="sort" class="form-control form-control-lg">
                                    <option value="3">1/4 عرض صفحه</option>
                                    <option value="4">1/3 عرض صفحه</option>
                                    <option value="6" selected>1/2 عرض صفحه</option>
                                    <option value="8">2/3 عرض صفحه</option>
                                    <option value="9">3/4 عرض صفحه</option>
                                    <option value="12">1 واحد کامل</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('pic', 'تصویر ')}}
                                {{Form::file('pic', array('class' => 'dropify'))}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('short_text', ' متن زیر تصاویر ')}}
                                {{Form::text('short_text', null, array('class' => 'form-control'))}}
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('video', 'ویدئو ')}}
                                {{Form::file('video', array('class' => 'dropify'))}}
                            </div>
                        </div> --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                {{Form::label('link', '  متن اکاردیون سکشن ۱ ')}}
                                {{Form::text('link', null, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                {{Form::label('section', ' سکشن ')}}
                                <select name="section" class="form-control form-control-lg">
                                    <option value="1">آکاردیون بالای صفحه</option>
                                    <option value="2" selected>محتوای داخل صفحه</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                {{Form::label('part', ' ترتیب ')}}
                                {{Form::number('part', null, array('class' => 'form-control','required'))}}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                {{Form::label('description', ' توضیحات ')}}
                                {{Form::textarea('description', null, array('class' => 'form-control textarea'))}}
                            </div>
                        </div>
                        <div class="col-12 text-left">
                            <hr/>
                            {{Form::submit('ذخیره',array('class'=>'btn btn-primary'))}}
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
