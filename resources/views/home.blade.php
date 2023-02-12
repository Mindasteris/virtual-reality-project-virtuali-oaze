@extends('layouts.master')

@section('content')

    <div class="p-4 text-center">
        <div class="mb-20">
            <h1 class="text-teal-300">Virtualus Rojus</h1>
            <h2 class="my-5">Jūsų rankose</h2>
        </div>

        <div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <p class="text-2xl md:text-3xl my-4">Sveiki atvykę: <span class="text-red-500 font-bold">{{ Auth::user()->name }}</span></p>
        </div>
    </div>
@endsection
