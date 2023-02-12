@extends('layouts.master')

@section('title', 'Pradžia')

@section('content')
    <div>
        {{-- Image --}}
        <div class="bg-black pt-10 pb-1 rounded-lg md:mx-4">
            <h1 class="text-teal-400">VIRTUALI OAZĖ</h1>
            <br>
            <h1 class="text-transparent bg-clip-text bg-gradient-to-r p-1">Ateitis jau čia</h1>
    
            <div class="mt-8">
                <img class="mx-auto" src="{{ asset('assets/human1.png') }}" alt="human">
            </div>
        </div>

        {{-- Content --}}
        <div class="mt-20 p-4 md:p-0 max-w-[800px] mx-auto">
            <h2 class="py-5 text-2xl">Sveiki Atvykę</h2>
            <p><span class="font-bold">VR Oazė</span> - tai nepamirštamų pojūčių oazė, kuri kiekvienam iš jūsų suteiks nepamirštamų įspūdžių, begale džiaugsmo bei prisilietimo prie ateities virtualiame pasaulyje.</p>
            <p>Mūsų naujausia įranga leis pasinerti į virtualų pasaulį, kuris kupinas pavojų, nuotykių, veiksmo ir nežemiškų būtybių.
                Ar kada nors svajojai būti bet kuo ? Mūsų pasaulyje tu gali viską. Geriausios VR pramogos tik pas mus. Ateik ir išbandyk !
            </p>
            <p class="text-right">- Ateitis jau čia</p>
        </div>

        {{-- Image --}}
        <div class="mt-10 p-4">
                <img class="mx-auto w-[900px]" src="{{ asset('assets/vr1.jpg') }}" alt="vr1">
        </div>

        {{-- VR Games --}}
        <div class="p-4 mt-10">
            <h1 class="my-10">VR Žaidimai</h1>
            <h2 class="text-lg md:text-2xl text-center">Geriausi VR žaidimai ir dar daugiau. Visa tai pas mus!</h2>
            <div class="mt-10 text-xl text-center font-bold vr-games md:shadow-lg md:shadow-teal-300 rounded-lg">
                <figure>
                    <img loading='lazy' src="{{ asset('assets/hl-alyx.png') }}" alt="hl alyx">
                    {{-- <figcaption>Half-Life: Alyx</figcaption> --}}
                </figure>
                <figure>
                    <img loading='lazy' src="{{ asset('assets/wd-saints.png') }}" alt="walking dead">
                    {{-- <figcaption>Walking Dead: Saints & Sinners</figcaption> --}}
                </figure>
                <figure>
                    <img loading='lazy' src="{{ asset('assets/bs-logo.png') }}" alt="beat saber">
                    {{-- <figcaption>Beat Saber</figcaption> --}}
                </figure>
                <figure>
                    <img loading='lazy' src="{{ asset('assets/blade-sorcery.png') }}" alt="blade sorcery">
                    {{-- <figcaption>Blade And Sorcery</figcaption> --}}
                </figure>
                <figure>
                    <img loading='lazy' src="{{ asset('assets/boneworks.png') }}" alt="boneworks">
                    {{-- <figcaption>Boneworks</figcaption> --}}
                </figure>
                <figure>
                    <img loading='lazy' src="{{ asset('assets/skyrim.png') }}" alt="skyrim">
                    {{-- <figcaption>Skyrim VR</figcaption> --}}
                </figure>
                <figure>
                    <img loading='lazy' src="{{ asset('assets/pistol-whip.png') }}" alt="pistol whip">
                    {{-- <figcaption>Pistol Whip</figcaption> --}}
                </figure>
                <figure>
                    <img loading='lazy' src="{{ asset('assets/pop1.png') }}" alt="population one">
                    {{-- <figcaption>Population One</figcaption> --}}
                </figure>
                <figure>
                    <img loading='lazy' src="{{ asset('assets/lone-echo.png') }}" alt="lone echo">
                    {{-- <figcaption>Lone Echo</figcaption> --}}
                </figure>
                <figure>
                    <img loading='lazy' src="{{ asset('assets/superhot-vr.png') }}" alt="superhot">
                    {{-- <figcaption>Superhot VR</figcaption> --}}
                </figure>
            </div>
        </div>
        
        {{-- List --}}
        <div class="p-4 xl:mx-52 mt-10">
            <h1 class="my-10">Privalumai</h1>
            <ul class="list text-xl flex flex-col justify-center gap-8">
                <li><i class="fa-sharp fa-solid fa-circle-check text-teal-300 text-2xl"></i><span>Virtualios realybės kambarys yra paruoštas būtent šiai pramogai, todėl patirsite maksimalius VR teikiamus įspūdžius.</span></li>
                <li><i class="fa-sharp fa-solid fa-circle-check text-teal-300 text-2xl"></i><span>Virtualios realybės kambaryje yra ekranai ir sofos, todėl galite patogiai įsikurti ir stebėti žaidžiančius draugus.</span></li>
                <li><i class="fa-sharp fa-solid fa-circle-check text-teal-300 text-2xl"></i><span>Virtualios realybės kambaryje yra stalas, todėl galėsite atsinešti užkandžių, surengti vakarėlį ir kt. Privatumas garantuotas.</span></li>
                <li><i class="fa-sharp fa-solid fa-circle-check text-teal-300 text-2xl"></i><span>Laidai tvarkingai pakabinti lubose, nesimaišo po kojomis. Taip pat naudojame ir belaides technologijas.</span></li>
                <li><i class="fa-sharp fa-solid fa-circle-check text-teal-300 text-2xl"></i><span>Priskiriami asistentai, kurie visą pramogavimo laiką bus kartu su Jumis, padės išsirinkti žaidimus, pasaugos ir atsakys į rūpimus klausimus, kad pramoga praeitų sklandžiai.</span></li>
            </ul>
        </div>

        {{-- Image --}}
        <div>
            <img class="mx-auto w-72" src="{{ asset('assets/vr-bottom.png') }}" alt="vr headset">
        </div>
    </div>
@endsection