@extends('layouts.master')

@section('content')
    <div>
        <div class="">{{ __('Patvirtinkite el. paštą') }}</div>

        <div>
            @if (session('resent'))
                <div role="alert">
                    {{ __('Nauja sugeneruota nuoroda išsiųsta jūsų el. paštu.') }}
                </div>
            @endif

            {{ __('Prieš pradedant. prašome patirkinti savo el. paštą su aktyvavimo nuoroda.') }}
            {{ __('Jeigu negavote laiško') }},
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit">{{ __('spausti čia kad gauti naują nuorodą') }}</button>.
            </form>
        </div>
    </div>
@endsection
