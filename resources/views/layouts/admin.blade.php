@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ul class="list-group">
                    <li class="list-group-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="">Transactions</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('admin.vehicles') }}">Vehicles</a>
                    </li>
                   
                    <li class="list-group-item">
                        <a href="{{ route('admin.vehicles') }}">Requests</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('admin.vehicles') }}">Renevue</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-10">
                @yield('admin_content')
            </div>
        </div>
        </div>
    <div class="row">
        

    </div>
@endsection

@section('main-page')

@endsection

