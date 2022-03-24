@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Update course
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/courses/{{ $course->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="block">
                <input
                    type="file"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="image">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="title"
                    placeholder="Course title..."
                    value="{{ $course->title }}">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="added_in"
                    placeholder="Course founded..."
                    value="{{ $course->added_in }}">

                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="description"
                    placeholder="Course description..."
                    value="{{ $course->description }}">
                <button type="submit" class="bg-green-700 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
