@extends('layouts.app')

@section('content')



    <div class="m-auto w-4/5 py-24">

        <h1 class="text-center m-auto text-blue-500 w-4/5 py-10 text-6xl">
            Your Courses</h1>
        <p class="text-center m-auto text-blue-900 w-3/5 py-26 text-7xl">
            {{ Auth::user()->name }}</p>

        @forelse ($user->courses as $course)
            <div class="float-right">
                <form action="/courseusers/{{ $course->id }}/{{ $user->id }}" method="POST" class="pt-3">
                    @csrf
                    @method('delete')
                    <button
                        type="submit"
                        class="border-b-2 pb-2 border-dotted italic text-red-500">
                        Delete from my list&rarr;
                    </button>
                </form>
            </div>
            <a href="/courses/{{ $course->id }}">
                <img
                    src="{{ asset('images/' . $course->image_path) }}"
                    class="w-2/12 mb-8 shadow-xl">
            </a>
            <a href="/courses/{{ $course->id }}">
                <h1 class="text-3xl uppercase bold">
                    {{ $course->title }}
                </h1>
            </a>
            <div class="py-8">
                <div class="m-auto">
                        <span class="uppercase text-blue-500 font-bold text-xs italic">
                            Added in:{{ $course->added_in }}
                        </span>

                    <p class="text-lg text-gray-700 py-6">
                        {{ $course->description }}
                    </p>
                    <hr class="mt-6 mb-10">
                </div>
                @empty
                    <p>No rent courses</p>
                @endforelse


            </div>
@endsection
