@extends('adminlte::layout.main', ['title' => trans('users.actions.create')])

@section('content')
    @component('adminlte::page', ['title' => trans('users.actions.create'), 'breadcrumb' => 'dashboard.users.create'])
        @component('adminlte::box')
            @php(BsForm::resource('users'))
            {{ BsForm::post(route('dashboard.users.store'), ['files' => true]) }}

            @include('dashboard.users.partials.form')

            {{ BsForm::submit(trans('dashboard.forms.save')) }}
            {{ BsForm::close() }}
        @endcomponent
    @endcomponent
@endsection
