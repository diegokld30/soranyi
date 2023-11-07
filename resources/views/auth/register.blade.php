@extends('layouts.app')

@section('titulo')
    pagina de registrar
@endsection

@section('contenido')
<div class="md:flex">
    <div class="md:w-6/12 p-5" >
        <img class="rounded-lg" src="{{ asset('img/registrar.jpg') }}"
         alt="Imagen de registro">
    </div>

    <div class="md:w-4/12 bg-white rounded-lg shadow-xl p-6 ">
        <form action="" method="post">
            @csrf 
            <div class="mb-5" >
                <label for="name" class="mb-2 block uppercase text-gray-500
                font-bold">Nombre</label>
                <input type="text" name="name" id="name" class="border p-3
                w-full rounded-lg" placeholder="Nombre">
            @error('name')
            <p class="bg-red-500 text-white rounded-lg my-2 text-sm text-center">{{ $message }}</p>
            @enderror
            </div>
            
            <div class="mb-5" >
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">username</label>
                <input type="text" name="username" id="username" class=" border p-3 w-full rounded-lg" placeholder="Username">
                @error('username')
            <p class="bg-red-500 text-white rounded-lg my-2 text-sm text-center">{{ $message }}</p>
            @enderror
            </div>
            <div class="mb-5" >
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">E-mail</label>
                <input type="email" name="email" id="email" class="border p-3 w-full rounded-lg" placeholder="Email">
                @error('email')
            <p class="bg-red-500 text-white rounded-lg my-2 text-sm text-center">{{ $message }}</p>
            @enderror
            </div>
            <div class="mb-5" >
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">password</label>
                <input type="password" name="password" id="password" class="border p-3 w-full rounded-lg" placeholder="Password">
                @error('password')
            <p class="bg-red-500 text-white rounded-lg my-2 text-sm text-center">{{ $message }}</p>
            @enderror
            </div>
            <div class="mb-5" >
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repite password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="border p-3 w-full rounded-lg" placeholder="Repite Password">
            </div>

            <input type="submit" value="Crear cuenta" class="bg-sky-500 hover:bg-sky-700 transition-color 
            cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>
@endsection

