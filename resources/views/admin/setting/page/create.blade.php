
@extends('layouts.admin',['req'=>true,'file_upload'=>true])
@section('content')
    <div class="row mt-5" style="font-size: 14px">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">
                        {{$title}} افزودن
                    </h4>
                </div>
                <div class="card-body ">
                    {{Form::open(array('route' => array('admin.page.store'), 'method' => 'POST','files'=>true)) }}
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                {{Form::label('title', '  اسلاگ *')}}
                                {{Form::text('title', null, array('class' => 'form-control','required'))}}
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="form-group">
                                <label>وضعیت</label>
                                <select name="status" class="form-control form-control-lg">
                                    <option value="active" selected>فعال</option>
                                    <option value="pending">غیرفعال</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 text-left">
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





