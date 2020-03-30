


@extends('layouts.admin')

@section('admin_content')

        @can('access-users')
        <list-users-component></list-users-component>
        @endcan


@endsection

