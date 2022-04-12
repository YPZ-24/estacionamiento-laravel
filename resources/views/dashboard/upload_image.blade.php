@extends('welcome')

@section('title', 'Formulario')

@section('body')
    <form enctype="multipart/form-data">
        <input type="email" name="email" id="" placeholder="Email">
        <input type="password" name="password" id="" placeholder="Password">
        <input type="text" name="name" id="" placeholder="Nombre">
        <input type="number" name="phone" id="" placeholder="Telefono">
        <input type="file" />
        <input type="submit" />
    </form>
@endsection