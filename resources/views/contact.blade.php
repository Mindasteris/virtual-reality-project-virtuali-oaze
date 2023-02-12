@extends('layouts.master')

@section('title', 'Kontaktai')

@section('content')
    <div>
        <h1 class="mb-10">Susisiekite</h1>

        {{-- Contact Message --}}
        @if (Session::has('success-contact-message'))
            <div class="success">
                <span>{{ Session('success-contact-message') }}</span>
            </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}" class="comment-create-form text-center">
            @csrf
            <div class="pb-4">
                <label for="contact_name">Vardas</label>
                <input type="text" name="contact_name" class="@error('contact_name') is-invalid @enderror" placeholder="Vardas">

                <div>
                    @error('contact_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="pb-4">
                <label for="contact_email">El. paštas</label>
                <input type="email" name="contact_email" class="@error('contact_email') is-invalid @enderror" placeholder="El. paštas">

                <div>
                    @error('contact_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="pb-4">
                <label for="favorite_vr_brand">Mėgstamiausia VR Įranga</label>
                <select name="favorite_vr_brand">
                    <option selected value="none">none</option>
                    <option value="Meta Quest 2">Meta Quest 2</option>
                    <option value="Meta Quest Pro">Meta Quest Pro</option>
                    <option value="Oculus Rift">Oculus Rift</option>
                    <option value="Oculus Rift S">Oculus Rift S</option>
                    <option value="Valve Index">Valve Index</option>
                    <option value="HTC Vive">HTC Vive</option>
                    <option value="HTC Vive Pro">HTC Vive Pro</option>
                    <option value="HTC Vive Pro 2">HTC Vive Pro 2</option>
                    <option value="HTC Vive Cosmos">HTC Vive Cosmos</option>
                    <option value="HP Reverb G2">HP Reverb G2</option>
                    <option value="Sony Playstation VR">Sony Playstation VR</option>
                    <option value="Samsung Odyssey+">Samsung Odyssey+</option>
                    <option value="Pico 4">Pico 4</option>
                </select>
            </div>
            <div class="pb-4">
                <label for="contact_message">Jūsų žinutė</label>
                <textarea name="contact_message" rows="10" class="@error('contact_message') is-invalid @enderror" placeholder="Jūsų žinutė"></textarea>
                
                <div>
                    @error('contact_message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="text-center">
                <button type="submit">Siųsti</button>
            </div>
        </form>
    </div>
@endsection