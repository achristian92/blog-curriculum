@extends('layouts.app')
@section('content')
    @component('shared._form')
        @slot('icono','supervised_user_circle')
        @slot('header','Update Profile')
        @slot('content')
            <form method="POST" action="{{route('user.update',$user->id)}}">
                @method('PATCH')
                @include('cv.users._fields')
                <button type="submit" class="btn btn-rose pull-right">Update</button>
                <div class="clearfix"></div>
            </form>
        @endslot
    @endcomponent
@endsection