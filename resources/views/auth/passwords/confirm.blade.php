@extends('layouts.app')

@section('content')
<div class="text-center">

                <div class="text-3xl font-bold py-16">{{ __('Patvirtinti slaptažodį') }}</div>

                <div>
                    {{ __('Prašome patvirtinti slaptažodį prieš tęsiant.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

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
                            <button type="submit">
                                {{ __('Patvirtinti slaptažodį') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Pamiršote slaptažodį ?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
@endsection
