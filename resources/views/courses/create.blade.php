@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create course
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/courses" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="block">
                <input
                    type="file"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="image">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="title"
                    placeholder="Course title..." value="{{ old('title') }}">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="added_in"
                    placeholder="Course added_in..." value="{{ old('added_in') }}">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="description"
                    placeholder="Course description..." value="{{ old('description') }}">
                <button type="submit" class="bg-green-700 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>

    </div>
    @if($errors->any())
        <div class="w-4/8 m-auto text-center">
            @foreach($errors->all() as $error)
                <li class="text-red-500 list-none">
                    {{ $error }}
                </li>
            @endforeach

        </div>
    @endif
@endsection
