@extends('layouts.app')

@section('titulo')
    Crear una nueva publicacion 
@endsection
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@section('contenido')
<div class="md:flex md:items-center">
    <div class="md:w-6/12 px-10" >
        <form method="POST" action="{{route('imagenes.store')}}" enctype="multipart/form-data" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
        @csrf
        </form>

    </div>

    <div class="md:w-6/12 px-10 bg-white rounded-lg shadow-xl ">
        <form action="{{route('register')}}" method="post" novalidate>
            @csrf 
            <div class="mb-5" >
                <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">titulo</label>
                <input type="text" id="titulo" placeholder="Titulo" class="border p-3 w-full rounded-lg @error('titulo') border-red-500
                @enderror" value="{{old('titulo')}}">
                @error('name')
                <p class="bg-red-500 text-white rounded-lg my-2 text-sm text-center">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5" >
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Descripcion de la publicacion</label>
                <textarea name="descripcion" id="descripcion" placeholder="Descripcion de la publicacion" class="border p-3 w-full rounded-lg 
                 @error('titulo') border-red-500 @enderror">{{old('titulo')}}</textarea>

                @error('name')
                <p class="bg-red-500 text-white rounded-lg my-2 text-sm text-center">{{ $message }}</p>
                @enderror
            </div>

            <input type="submit" value="Publicar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold
              p-3 w-full text-white rounded-lg "/>
        </form>
    </div>
</div>
@endsection