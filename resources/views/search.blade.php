@extends('layouts.app')

@section('content')

<!-- <input  class="form-control"  name="name"> -->

    @foreach($users as $user)

        {{$user->name}} <br/>


    @endforeach

@endsection
