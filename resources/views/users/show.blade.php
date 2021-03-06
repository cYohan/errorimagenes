@extends('layouts.app')

@section('title', $user->name)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="card-img-top" src="{{ $user->avatar }}" alt="{{ $user->name }}">
                <div class="card border-0 bg-light shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card border-0 bg-light shadow-sm">
                    <div class="card-body">
                        <!--
                                        <status-list url="#"></status-list>
                                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
