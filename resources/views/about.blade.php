@extends('layouts.master')

@section('title', 'Apie mus')

@section('content')
    <div class="p-4">
        <h1>Apie Mus</h1>
        <div class="mt-10 max-w-[800px] mx-auto">
            <p>VR Oazė tai smagiausia virtualios realybės vieta Lietuvoje, skirta tiek vaikams tiek suaugusiems. Platus asortimentas bei nuostabios patalpos jums išsklaidys visas abejones, pas mus norėsite sugrįžti vėl ir vėl. 
                Nepamirštami pojūčiai garantuoti!
            </p>
        </div>

        {{-- Image --}}
        <div class="my-10">
            <img class="mx-auto w-[900px]" src="{{ asset('assets/girl-vr.jpg') }}" alt="girl-beat-saber">
        </div>

        {{-- VR Manufacture --}}
        <h1 class="mt-20">Projektas</h1>
        {{-- Text --}}
        <div class="my-10 max-w-[800px] mx-auto">
            <p>Projektas nieko nesiūlo ir nieko neparduoda. Šis projektas sukurtas tik kaip pavyzdys, papildant savo portfolio arsenalą.
                Internetinis puslapis sukurtas naudojant PHP Laravel karkasą, MySql duomenų bazę ir Tailwind CSS stilių.
            </p>
        </div>
        {{-- Laravel --}}
        <div class="project-resources">
            <img src="{{ asset('assets/laravel.png') }}" alt="laravel-logo">
            <img src="{{ asset('assets/mysql.png') }}" alt="mysql-logo">
            <img src="{{ asset('assets/tailwind.png') }}" alt="tailwindcss-logo">
        </div>
    </div>
@endsection