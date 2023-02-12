<div class="bg-black">
    {{-- Flex Container --}}
    <div class="p-8 mx-8 flex flex-col md:flex-row justify-between items-center text-center gap-16">
        <ul class="mobile-menu space-y-6">
            <li><a href="{{ route('index') }}">Pradžia</a></li>
            <li><a href="{{ route('vr') }}">Virtuali Realybė</a></li>
            <li><a href="{{ route('atsiliepimai.index') }}">Atsiliepimai</a></li>
            <li><a href="{{ route('aboutUs') }}">Apie mus</a></li>
            <li><a href="{{ route('contact.index') }}">Kontaktai</a></li>
        </ul>

        {{-- Subscribe --}}
            <form action="#" class="flex flex-col">
            <h2 class="text-xl">Jūsų el. paštas</h2>
                @csrf
                <input type="email" placeholder="Įveskite El. pašto adresą" required>
                <button>Prenumeruoti</button>
            </form>
    </div>

    {{-- Social --}}
    <div class="flex justify-center gap-8">
        <a href="#"><i class="fa-brands fa-facebook text-4xl hover:scale-125 transition duration-300"></i></a>
        <a href="#"><i class="fa-brands fa-youtube text-4xl hover:scale-125 transition duration-300"></i></a>
        <a href="#"><i class="fa-brands fa-twitch text-4xl hover:scale-125 transition duration-300"></i></a>
    </div>

    <p class="text-center pb-8 mt-10">&copy; Visos teisės saugomos {{ date('Y') }}. <br class="md:hidden"> Mindaugas Šunokas</p>
</div>