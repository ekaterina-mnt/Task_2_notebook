@extends('layout')

@section('title')
Create
@endsection('title')

@section('content')
<h1>Fill the form:</h1>

<br>

<form action="/notebook/store" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}

    <label>FIO*</label>
    <input type="text" name="fio" value="{{ old('fio') }}">
    <br>
    @error('fio')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
    <br>


    <label>Company</label>
    <input type="text" name="company" value="{{ old('company') }}">
    <br><br>


    <label>Phone number*</label>
    <input type="text" name="number" value="{{ old('number') }}">
    <br>
    @error('number')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
    <br>


    <label>Email*</label>
    <input type="text" name="email" value="{{ old('email') }}">
    <br>
    @error('email')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
    <br>


    <label>Birthday</label>
    <input type="date" name="birthday" value="{{ old('birthday') }}">
    <br><br>


    <label>Photo</label>
    <input type="file" name="photo" accept=".png,.jpeg,.jpg" value="{{ old('photo') }}">
    <br>
    @error('photo')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
    <br>

    <input type="submit">

</form>
<br><br>

<a href="/">Back to main page</a>