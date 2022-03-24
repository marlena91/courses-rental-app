@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Courses
            </h1>
        </div>
        @guest
        @else
            @if (Auth::user()->role === 'admin')
                <div class="pt-10">
                    <a href="courses/create" class="border-b-2 pb-2 border-dotted italic text-gray-500">
                        Add a new course &rarr;
                    </a>
                </div>
            @else
            @endif
        @endguest

        <div class="w-5/6 py-10">
            @foreach($courses as $course)
                <div class="m-auto">
                    @guest
                    @else
                        @if (Auth::user()->role === 'admin')
                            <div class="float-right">
                                <a
                                    class="border-b-2 pb-2 border-dotted italic text-green-500"
                                    href="courses/{{ $course->id }}/edit">
                                    Edit &rarr;
                                </a>
                                <form action="/courses/{{ $course->id }}" method="POST" class="pt-3">
                                    @csrf
                                    @method('delete')
                                    <button
                                        type="submit"
                                        class="border-b-2 pb-2 border-dotted italic text-red-500">
                                        Delete &rarr;
                                    </button>
                                </form>
                            </div>
                        @else
                        @endif
                    @endguest


                    <h2 class="text-gray-700 text-5xl py-6 hover:text-gray-500">
                        <a href="/courses/{{ $course->id }}">
                            {{ $course->title }}
                        </a>
                    </h2>
                    <a href="/courses/{{ $course->id }}">
                        <img
                            src="{{ asset('images/' . $course->image_path) }}"
                            class="w-2/12 mb-8 shadow-xl">
                    </a>

                    <span class="uppercase text-blue-500 font-bold text-xs italic">
                        Added in:{{ $course->added_in }}
                    </span>
                    <p class="text-lg text-gray-700 py-6">
                        {{ $course->description }}
                    </p>
                    <hr class="mt-4 mb-8">
                </div>
            @endforeach
        </div>
    </div>
@endsection
