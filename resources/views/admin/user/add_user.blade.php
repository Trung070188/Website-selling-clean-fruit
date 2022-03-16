@extends('admin_layout')
@section('admin_content')
<div class="col-md-12">
    <form action="{{URL::to('/save_store')}}" method="post" class="form-horizontal">
        {{csrf_field()}}
        <div class="card">
            <div class="card-header card-header-rose card-header-text">
                <div class="card-text">
                    <h4 class="card-title">{{__('Thêm Nhân Viên')}}</h4>
                </div>
                <span class="" style="margin-left: 800px;">
                    <?php
                    $message = Session::get('message');
                    if ($message) {
                        echo '<span class="badge badge-pill badge-danger" >' . $message . '</span>';
                        Session::put('message', null);
                    }
                    ?>
                </span>
            </div>
            <br>
            <br>
            {{-- validate --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card-body ">
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{__('Name')}} :</label>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <input class="form-control" type="text" name="admin_name" placeholder="{{__('Nhập Tên ')}}" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{__('Email')}} :</label>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <input class="form-control" type="email" name="admin_email" class="form-control" placeholder="{{__('Nhập Email')}}" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{__('Password')}} :</label>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <input class="form-control" type="password" name="admin_password" id="pass" placeholder="{{__('Password')}}" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{__('Phone')}} :</label>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <input class="form-control" type="number" name="admin_phone" id="phone" placeholder="{{__('phone')}}" />
                        </div>
                    </div>
                </div>
              
                <div class="">
                    <center>
                        <button type="submit" class="btn btn-rose" name="add_category_product">{{__('Thêm Nhân Viên')}}</button>
                    </center>
                </div>
    </form>
</div>
@endsection