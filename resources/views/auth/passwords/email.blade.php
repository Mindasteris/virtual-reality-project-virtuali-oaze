@extends('layouts.master')

@section('content')
<div class="text-center">
                <div class="text-3xl font-bold py-16">{{ __('Atstatyti slaptažodį') }}</div>

                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div>
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Siųsti Nuorodą') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
