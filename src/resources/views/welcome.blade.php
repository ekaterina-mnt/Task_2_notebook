@extends('layout')

@section('title')
Main page
@endsection('title')

@section('content')
<h1>My Notebook Project</h1>

<br>

<p><b>View all notebooks: </b><a href="notebook">all notebooks</a></p>

<br>

<p><b>Create a new botebook: </b><a href="notebook/create">create</a></p>

<br>

<p><b>Find the notebook by id: </b></p>
<form method="POST" action="/notebook/find">
    
    {!! csrf_field() !!}
    <input name="id" placeholder="id">
    <input type="submit" value="find">
    <br>
    @error('idFind')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
</form>

<br>

<p><b>Delete the notebook by id: </b></p>
<form method="POST" action="/notebook/delete">
    @csrf
    <input name="id" placeholder="id">
    <input type="submit" value="delete">
    <br>
    @error('idDelete')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
</form>
@endsection('content')