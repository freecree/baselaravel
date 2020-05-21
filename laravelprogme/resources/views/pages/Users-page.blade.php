@extends('pages.base')

@section('title', '/ users')
@section('content')
<div class="users" style = "margin: 20px 0">
    <div class="container">
        <h2>Last users visited the site</h2>
        @foreach($usersobj->getusers() as $key => $val )
            <div>{{"User $key : "}}</div>
            @foreach($val as $k => $v)
                @if($k != "password")
                    <div>{{"  $k :  $v"}}</div>
                @else
                    <div>{{"  $k :  ****"}}</div>
                @endif
            @endforeach
        @endforeach
    </div>
</div>
@endsection
