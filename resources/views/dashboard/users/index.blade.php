@extends('adminlte::layout.main', ['title' => trans('users.plural')])

@section('content')
    @component('adminlte::page', ['title' => trans('users.plural'), 'breadcrumb' => 'dashboard.users.index'])
        @component('adminlte::table-box', ['collection' => $users])
            @slot('title') @endslot
            @slot('tools')
                <a href="{{ route('dashboard.users.create') }}" class="btn bg-olive btn-sm text-right">
                    <i class="fa fa-plus"></i>
                    @lang('users.actions.create')
                </a>
            @endslot
            <tr>
                <th>#</th>
                <th style="width: 90px;">{{ trans('users.attributes.avatar') }}</th>
                <th>{{ trans('users.attributes.name') }}</th>
                <th>{{ trans('users.attributes.email') }}</th>
                <th>...</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                        <img
                            src="https://s.gravatar.com/avatar/{{ md5(strtolower($user->email)) }}?s=80"
                            class="img img-circle img-bordered-sm"
                            style="width: 60px; height: 60px;"
                            alt="{{ $user->name }}">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @include('dashboard.users.partials.control', ['user' => $user])
                    </td>
                </tr>
            @endforeach
        @endcomponent
    @endcomponent
@endsection
