@extends('welcome')
@section('title', 'Crear Usuario')

@section('body')

    <div class="container">
        <h1 class="text-center">
            Formulario
        </h1>
        <x-form :action="route('dashboard.users.store')">
            @method('post')
            @csrf
            <div class="row justify-content-center align-items-center">
                <div class="col-6">
                    <x-forms.input id="user-email" name="email" placeholder="Correo Electronico"/>
                </div>
                <div class="col-6">
                    <x-forms.input id="user-password" name="password" placeholder="Contraseña"/>
                    <x.btns.show-password/>
                </div>
                <div class="col-6">
                    <x-forms.input id="user-name" name="name" placeholder="Nombre"/>
                </div>
                <div class="col-6">
                    <x-forms.input id="user-phone" name="phone" placeholder="Telefono"/>
                </div>
                <div class="col-12">
                    <button class="btn btn-outline-primary btn-lg" type="submig">Bienvenido!</button>
                </div>
            </div>
        </x-form>
    </div>
    
@endsection