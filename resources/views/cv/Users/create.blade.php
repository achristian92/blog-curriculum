@extends('layouts.app')
@section('content')
    @component('shared._form')
        @slot('icono','supervised_user_circle')
        @slot('header','Create Profile')
        @slot('content')
            <form method="POST" action="{{route('user.store')}}">
                @include('cv.users._fields')
                <button type="submit" class="btn btn-rose pull-right">Create</button>
                <div class="clearfix"></div>
            </form>
        @endslot
    @endcomponent
@endsection