@extends('layouts.backend')

@section('meta-title')
    Editing User "{{ $user->name }}"
@endsection

@section('page-title')
    Editing User "{{ $user->name }}"
@endsection

@section('breadcrumb-title')
    Edit User
@endsection

@section('content')
    <form role="form" action="{{ route('admin.users.update', $user->id) }}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">

        @include('errors.formErrors')

        <div class="form-group">
            <input type="text" name="name" placeholder="Name" value="{{ old('name', $user->name) }}" class="form-control">
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" value="{{ $user->email }}" class="form-control" disabled="disabled">
            <input type="hidden" name="email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@endsection
