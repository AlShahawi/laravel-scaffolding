@extends('adminlte::layout.main', ['title' => trans('users.actions.edit')])

@section('content')
    @component('adminlte::page', ['title' => trans('users.actions.edit'), 'breadcrumb' => ['dashboard.users.edit', $user]])
        @component('adminlte::box', ['title' => trans('users.singular')])
            @php(BsForm::resource('users'))

            {{ BsForm::putModel($user, route('dashboard.users.update', $user),['files' => true]) }}

            @include('dashboard.users.partials.form')

            {{ BsForm::submit(trans('dashboard.forms.update')) }}

            {{ BsForm::close() }}
        @endcomponent
    @endcomponent
@endsection
