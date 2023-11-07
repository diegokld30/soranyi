@extends('layouts.app')

@section('titulo')
    inicio de sesion
@endsection

@section('contenido')
<div class="md:flex">
    <div class="md:w-6/12 p-5" >
        <img class="rounded-lg" src="{{ asset('img/login.jpg') }}"
         alt="Imagen de registro">
    </div>

    <div class="md:w-3/12  bg-white rounded-lg shadow-xl p-10 ">
        <form action="{{ route('login') }}" method="post" novalidate>
            @csrf 

            @if (session('mensaje'))
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p>
            @endif
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

            <div class="mb-5">
                <input type="checkbox" name="remember"><label class="text-gray-500 text-sm" for="">Mantener mi sesion abierta</label>
            </div>
            <input type="submit" value="Iniciar Sesión" class="bg-sky-500 hover:bg-sky-700 transition-color 
            cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>
@endsection

