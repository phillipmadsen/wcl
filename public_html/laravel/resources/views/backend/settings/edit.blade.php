@extends('layouts.backend')

@section('meta-title')
    Edit Settings
@endsection

@section('page-title')
    Edit Settings
@endsection

@section('breadcrumb-title')
    Edit Settings
@endsection

@section('content')
    <form role="form" action="{{ route('admin.settings.update') }}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">

        @include('errors.formErrors')

        <h1>TODO TODO TODO</h1>

        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@endsection
