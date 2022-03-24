@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="float-right">

            @if (Auth::user())
            <form action="/courseusers/{{ $course->id }}/{{ Auth::user()->id }}"  method="POST" class="pt-3">
                @csrf
                <button
                    type="submit"
                    class="border-b-2 pb-2 border-dotted italic text-green-500">
                    Add to my list&rarr;
                </button>
            </form>
            @else
                <div class="pt-10">
                    <a href="/login" class="border-b-2 pb-2 border-dotted italic text-gray-500">
                        Login to rent this course &rarr;
                    </a>
                </div>
            @endif
        </div>
        <img
            src="{{ asset('images/' . $course->image_path) }}"
            class="w-4/12 mb-8 shadow-xl">
        <div class="text-center">

            <h1 class="text-5xl uppercase bold">
                {{ $course->title }}
            </h1>
        </div>

        <div class="py-10 text-center">
                <div class="m-auto">
                    <span class="uppercase text-blue-500 font-bold text-xs italic">
                        Added in:{{ $course->added_in }}
                    </span>

                    <p class="text-lg text-gray-700 py-6">
                        {{ $course->description }}
                    </p>
                    <hr class="mt-4 mb-8">
                </div>
        </div>
@endsection
