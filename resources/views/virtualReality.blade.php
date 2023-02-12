@extends('layouts.master')

@section('title', 'VR')

@section('content')
    <div class="p-4">
        <h1>VR</h1>
        <div class="mt-10 max-w-[800px] mx-auto">
            <p><span class="font-bold">Virtuali realybė</span> – kompiuteriu sugeneruota interaktyvi trimatė aplinka, su kuria vartotojas sąveikauja naudodamas specialiąją techninę įrangą. Virtualioje realybėje, kitaip negu papildytoje realybėje, realaus pasaulio vaizdas yra nematomas, t. y. aplinka yra sudaryta tik iš kompiuterio sugeneruotos grafikos.</p>
        </div>

        {{-- Image --}}
        <div class="my-10">
            <img class="mx-auto w-[900px]" src="{{ asset('assets/beat-saber.png') }}" alt="girl-beat-saber">
        </div>

        {{-- VR Manufacture --}}
        <h1 class="mt-20">Gamintojai</h1>
        {{-- Text --}}
        <div class="my-10 max-w-[800px] mx-auto">
            <p>Didžiausi pasaulyje virtualios realybės akinių ir kitos įrangos gamintojai,
                daugybė žaidimų ir programų, kurie pripažinti visame pasaulyje.
                Visa tai pas mus, rezervuok, ateik ir nugalėk!
            </p>
        </div>
        {{-- Manufacturer --}}
        <div class="manufacturer">
            <img src="{{ asset('assets/oculus-logo.png') }}" alt="oculus">
            <img src="{{ asset('assets/htc-vive-logo.png') }}" alt="htc">
            <img src="{{ asset('assets/valve-index.png') }}" alt="valve">
            <img src="{{ asset('assets/hp-reverb.png') }}" alt="hp">
            <img src="{{ asset('assets/psvr.png') }}" alt="google">
        </div>
    </div>
@endsection