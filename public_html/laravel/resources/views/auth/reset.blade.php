@extends('layouts.auth')

@section('content')
    <div class="login-box-body">
        <p class="login-box-msg">Reset your Password now</p>

        <form role="form" action="{{ route('admin.auth.reset') }}" method="POST">
            {!! csrf_field() !!}

            @include('errors.formErrors')

            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="{{ trans('app.email') }}" value="{{ old('email') }}">
                <i class="fa fa-envelope form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="{{ trans('app.password') }}">
                <i class="fa fa-lock form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password_confirmation" class="form-control" placeholder="{{ trans('app.password-confirm') }}">
                <i class="fa fa-lock form-control-feedback"></i>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('app.btn-submit') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
