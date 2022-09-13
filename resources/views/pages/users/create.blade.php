@extends('layouts.index')
@section('content')
<div class="container my-5">
<form action="/createuser" method="post" enctype="multipart/form-data">
    @csrf

    <label for="">Email</label>
    <input type="email" name="email" id="">

    <label for="">Nickname</label>
    <input type="text" name="nickname" id="">
{{--
    <label for="">profil_id</label>
    <input type="text" name="profil_id" id=""> --}}


    <label for="">Name</label>
    <input type="text" name="name" id="">

    <label for="">Age</label>
    <input type="number" name="age" id="">

    <label for="">Phone</label>
    <input type="number" name="phone" id="">

    <button class="btn btn-outline-primary" type="submit">Add</button>
</form>
</div>
@endsection


