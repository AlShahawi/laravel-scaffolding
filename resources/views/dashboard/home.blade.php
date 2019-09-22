@extends('adminlte::layout.main')

@section('content')
    @component('adminlte::page', ['title' => 'Home', 'breadcrumb' => 'dashboard.home'])
        @component('adminlte::box')
            You're logged in!
        @endcomponent
    @endcomponent
@endsection
