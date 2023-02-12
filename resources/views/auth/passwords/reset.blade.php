@extends('layouts.master')

@section('content')
<div class="text-center">

                <div class="text-3xl font-bold py-16">{{ __('Atstatyti slaptažodį') }}</div>

                <div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div>
                            <label for="email">{{ __('El. paštas') }}</label>

                            <div>
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autofocus>

                               <div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                               </div>
                            </div>
                        </div>

                        <div>
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

                        <div>
                            <label for="password-confirm">{{ __('Patvirtinti slaptažodį') }}</label>

                            <div>
                                <input id="password-confirm" type="password" name="password_confirmation">
                            </div>
                        </div>

                            <div>
                                <button type="submit">
                                    {{ __('Atstatyti slaptažodį') }}
                                </button>
                            </div>
                    </form>
                </div>
            </div>
@endsection
