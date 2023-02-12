@extends('layouts.master')

@section('title', 'Prisijungti')

@section('content')
<div class="text-center">
            <div class="text-3xl font-bold mb-10">{{ __('Prisijungti') }}</div>

                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="pb-4">
                            <label for="email">{{ __('El. paštas') }}</label>

                            <div>
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>

                                <div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="pb-4">
                            <label for="password">{{ __('Slaptažodis') }}</label>

                            <div>
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password">

                                <div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                            <div class="w-[300px] mx-auto">
                                <input class="accent-teal-300" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label for="remember">
                                    {{ __('Prisiminti Mane') }}
                                </label>
                            </div>

                            <div class="pt-10">
                                @if (Route::has('password.request'))
                                    <a class="font-bold hover:text-teal-300" href="{{ route('password.request') }}">
                                        {{ __('Pamiršote slaptažodį ?') }}
                                    </a>
                                @endif
                            </div>

                            <div>
                                <button type="submit">
                                    {{ __('Prisijungti') }}
                                </button>
                            </div>
                    </form>
                </div>
            </div>
@endsection
