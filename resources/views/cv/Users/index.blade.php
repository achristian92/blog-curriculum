@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon"><i class="material-icons">assignment</i></div>
                <h4 class="card-title ">List Users</h4>
                <hr>
                @include('shared._notification')
                <a class="btn btn-default btn-fill " data-toggle="collapse" href="#collapseFilter" role="button" aria-expanded="false"><i class="material-icons">filter_list</i></a>
                @unless($has_profile)
                <a class="btn btn-primary btn-fill pull-right" href="{{route('user.create')}}">New User</a>
                @endunless
                <div class="collapse" id="collapseFilter">
                    @include('cv.users._filter')
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary text-center">
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Birthdate</th>
                        <th>Celular</th>
                        <th>Actions</th>
                        </thead>
                        <tbody class="text-center">
                        @each('cv.users._row', $users, 'user','cv.users._empty')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection