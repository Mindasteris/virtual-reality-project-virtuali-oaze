@extends('layouts.master')

@section('title', 'Registracija')

@section('content')
<div class="text-center">
            <div class="text-3xl font-bold mb-10">{{ __('Registracija') }}</div>

                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="pb-4">
                            <label for="name">{{ __('Vardas') }}</label>

                            <div>
                                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>

                               <div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                               </div>
                            </div>
                        </div>

                        <div class="pb-4">
                            <label for="email">{{ __('El. paštas') }}</label>

                            <div>
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

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

                        <div class="pb-4">
                            <label for="password-confirm">{{ __('Pakartoti slaptažodį') }}</label>

                            <div>
                                <input id="password-confirm" type="password" name="password_confirmation">
                            </div>
                        </div>

                        <div>
                            <button type="submit">
                                {{ __('Registruotis') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
