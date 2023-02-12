@extends('layouts.master')

@section('title', 'Palikti Atsiliepimą')

@section('content')
    <div>
        <h1 class="mb-10">Užpildykite formą</h1>

        <form method="POST" action="{{ route('atsiliepimai.index') }}" class="comment-create-form text-center">
            @csrf
            <div class="pb-4">
                <label for="comment_name">Vardas</label>
                <input type="text" name="comment_name" class="@error('comment_name') is-invalid @enderror" placeholder="Vardas">

                <div>
                    @error('comment_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="pb-4">
                <label for="comment_subject">Tema</label>
                <input type="text" name="comment_subject" class="@error('comment_subject') is-invalid @enderror" placeholder="Tema">
                
                <div>
                    @error('comment_subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="pb-4">
                <label for="comment_message">Komentaras</label>
                <textarea name="comment_message" rows="10" class="@error('comment_message') is-invalid @enderror" placeholder="Jūsų komentaras"></textarea>
                
                <div>
                    @error('comment_message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="text-center">
                <button type="submit">Publikuoti</button>
            </div>
        </form>
    </div>
@endsection