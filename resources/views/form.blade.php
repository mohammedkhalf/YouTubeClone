@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <form action="{{route('users.store')}}" method="post" id="form">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" name="user_name"><br/>
                     @captcha
                    <input type="submit" class="btn btn-success">
            </form>

        </div>
    </div>

    <script>
       //console.log("hello");
       // $(document).ready(function () {
       //     $('#form').submit();
       // })
    </script>

@endsection

