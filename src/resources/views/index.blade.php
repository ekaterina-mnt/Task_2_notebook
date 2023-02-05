@extends('layout')

@section('title')
Notebooks
@endsection('title')

@section('content')
<h1>List of noteboooks</h1>

<br>

@foreach ($notebooks as $notebook)

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
@endforeach

{{ $notebooks }}

<br><br>
<a href="/">Back to main page</a>

@endsection('content')