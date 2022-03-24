@extends('layouts/app')
@section('content')
    <main class="signup-form">
        <div class="container m-auto">
            <div class="m-auto w-4/8 py-24">
                <div class="col-md-4">
                    <h1 class="text-gray-700 text-5xl py-6 hover:text-gray-500 uppercase">registration</h1>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('register.custom') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="name"
                                           required autofocus value="{{ old('name') }}">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                                           name="email" required autofocus value="{{ old('email') }}">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                                           name="password" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="PasswordConfirmation" id="password_confirmation" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                                           name="password_confirmation" required>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember Me</label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="bg-blue-700 block shadow-5xl mb-10 p-2 w-40 font-bold">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
    </main>
@endsection
