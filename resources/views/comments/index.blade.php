@extends('layouts.master')

@section('title', 'Atsiliepimai')

@section('content')
    <div>
        <h1>Atsiliepimai</h1>
        <div class="text-center text-2xl py-20 space-y-8">
            <h2>Mums labai svarbi jūsų nuomonė</h2>
            <div>
                <a href="{{ route('atsiliepimai.create') }}" class="border-2 border-teal-600 hover:bg-teal-600 p-2 rounded-lg transition duration-300"> <button>Palikti atsiliepimą</button></a>
            </div>
        </div>

        {{-- Message Success --}}
        @if (Session::has('success'))
            <div class="success">
                <span>{{ Session('success') }}</span>
            </div>
            @endif

        {{-- Message Edit --}}
        @if (Session::has('edit'))
            <div class="edit">
                <span>{{ Session('edit') }}</span>
            </div>
        @endif

         {{-- Message Delete --}}
        @if (Session::has('delete'))
            <div class="delete">
                <span>{{ Session('delete') }}</span>
            </div>
        @endif

        {{-- Comments --}}
        <div class="text-center">
            @if ($comments->count() == 0)
                <h2 class="text-3xl mx-4 md:mx-0">Nėra atsiliepimų. Būk pirmas ir pasidalink įspūdžiais.</h2>
            @endif
        </div>
            <div class="flex flex-col lg:flex-row flex-wrap justify-start items-center gap-10">
                @foreach ($comments as $comment)
                    <div class="p-4 space-y-4 bg-gray-200 text-black w-full max-w-[400px] rounded-lg">
                        <h2 class="text-4xl">{{ $comment->comment_name }}</h2>
                        <p class="text-sm italic text-gray-500">{{ $comment->updated_at }}</p>
                        <p class="text-xl font-bold font-mono">{{ $comment->comment_subject }}</p>
                        <p class="text-xl">{{ $comment->comment_message}}</p>
                        <div class="flex items-center gap-4 text-2xl">
                            <a href="{{ route('atsiliepimai.edit', $comment->id) }}"><i class="fa-solid fa-pen-to-square text-blue-600"></i></a>
                            <form action="{{ route('atsiliepimai.destroy', $comment->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="delete-button" type="submit" onclick="return confirm('Ar tikrai norite ištrinti?')"><i class="fa-solid fa-trash text-red-600"></i></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
@endsection