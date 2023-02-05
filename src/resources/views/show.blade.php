@extends('layout')

@section('title')
Find via ID
@endsection('title')

@section('content')
<h1>Notebook</h1>
     <!-- with id={{ $notebook["id"] }}</h1> -->

<br>

<h3><b>{{ $notebook["fio"] }}</b></h3>

<p>id: {{ $notebook["id"] }}</p>

<p>company:
    @if ($notebook["company"])
    {{ $notebook["company"] }}
    @else
    -
    @endif
</p>

<p>phone number: {{ $notebook["number"] }}</p>

<p>email: {{ $notebook["email"] }}</p>

<p>birthday:
    @if ($notebook["birthday"])
    {{ $notebook["birthday"] }}
    @else
    -
    @endif
</p>

<p>photo:
    @if ($notebook["photo"])
    <br>
    <img src="{{ $notebook['photo'] }}" width=150>
    @else
    -
    @endif
</p>

<br><br>

<a href="/">Back to main page</a>
@endsection('content')