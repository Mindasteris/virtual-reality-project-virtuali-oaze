<nav>
    <div class="md:hidden flex items-center justify-between p-4">
        {{-- Logo --}}
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="vr-logo" class="w-32">
        </a>
        <!-- Mobile Menu Button -->
        <div>
            <button onclick="hideMenuIcon()" class="mobile-menu-button md:hidden"><img src="{{ asset('assets/menu.svg') }}" alt="menu" id="hamburger"></button>
            <button onclick="hideCloseIcon()" class="mobile-menu-close md:hidden"><img src="{{ asset('assets/close.svg') }}" alt="close" id="close" class="hidden"></button>
        </div>
    </div>
        
        <!-- Mobile Navigation Links -->
        <div class="hidden mobile-menu mobile-close">
            <ul class="py-4 text-center space-y-4">
                <li><a href="{{ route('index') }}">Pradžia</a></li>
                <li><a href="{{ route('vr') }}">Virtuali Realybė</a></li>
                <li><a href="{{ route('atsiliepimai.index') }}">Atsiliepimai</a></li>
                <li><a href="{{ route('aboutUs') }}">Apie mus</a></li>
                <li><a href="{{ route('contact.index') }}">Kontaktai</a></li>
            </ul>

            <!-- Authentication Links -->
            <ul class="flex justify-center items-center gap-8 py-4">
                @guest
                    @if (Route::has('login'))
                        <li>
                            <a href="{{ route('login') }}">{{ __('Prisijungti') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Registruotis') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a href="/profilis">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <div>
                        <a href="/atsijungti"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('atsijungti') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
            </ul>
        </div>

        {{-- Desktop --}}
        <div class="hidden md:flex justify-between items-center py-4 lg:px-10">
            {{-- Logo --}}
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/logo.png') }}" alt="vr-logo" class="w-40">
            </a>

            {{-- Desktop Navigation Links --}}
                <ul class="desktop-menu">
                    <li><a href="{{ route('index') }}">Pradžia</a></li>
                    <li><a href="{{ route('vr') }}">Virtuali Realybė</a></li>
                    <li><a href="{{ route('atsiliepimai.index') }}">Atsiliepimai</a></li>
                    <li><a href="{{ route('aboutUs') }}">Apie mus</a></li>
                    <li><a href="{{ route('contact.index') }}">Kontaktai</a></li>
                </ul>

                <!-- Authentication Links -->
                <ul class="desktop-menu md:flex-col lg:flex-row">
                    @guest
                        @if (Route::has('login'))
                            <li class="border-2 py-2 px-4 rounded-xl">
                                <a href="{{ route('login') }}">{{ __('Prisijungti') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="border-2 py-2 px-4 rounded-xl">
                                <a href="{{ route('register') }}">{{ __('Registruotis') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a href="/profilis">
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <div>
                            <a href="/atsijungti" class="hover:text-red-500"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('atsijungti') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>   
                    @endguest
                </ul>
            </div>

    {{-- Mobile Menu Script --}}
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");
        const btnCloseMenu = document.querySelector("button.mobile-menu-close");
        const closeMenuX = document.querySelector(".mobile-close");

        btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
		});

        btnCloseMenu.addEventListener("click", () => {
					closeMenuX.classList.toggle("hidden");
		});

        function hideMenuIcon()
        {
            menuIcon = document.getElementById("hamburger");
            menuIcon.style.display = 'none';

            closeIcon = document.getElementById("close");
            closeIcon.style.display = 'block';
        }

        function hideCloseIcon()
        {
            menuIcon = document.getElementById("hamburger");
            menuIcon.style.display = 'block';

            closeIcon = document.getElementById("close");
            closeIcon.style.display = 'none';
        }

    </script>
</nav>