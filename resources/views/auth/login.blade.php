@extends('layouts/app')
@section('content')
    <main class="login-form">
        <div class="container m-auto">
            <div class="m-auto w-4/8 py-24">
                <div class="col-md-8 mt-10">
                    <h1 class="text-gray-700 text-5xl py-6 hover:text-gray-500 uppercase">login</h1>

                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="row mb-3>
                                    <div class="col-md-6">
                                    <input type="text" placeholder="Email" id="email" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 " name="email" required
                                           autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="row mb-3">

                                    <div class="col-md-6">
                                        <input type="password" placeholder="Password" id="password" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 " name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check-input">
                                            <input type="checkbox" name="remember">
                                            <label class="form-check-label">
                                                 Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="bg-blue-700 block shadow-5xl mb-10 p-2 w-40 font-bold">
                                        Signin
                                    </button>






                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
