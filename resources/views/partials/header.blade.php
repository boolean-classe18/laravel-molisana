<header>
    <div id="logo">
        <img src="{{ asset('images/la-molisana-logo.png') }}" alt="La Molisana - logo">
    </div>
    <div id="main-menu">
        <nav>
            <ul>
                <li>
                    <a
                        class="{{ Request::route()->getName() == 'homepage' ? 'active' : '' }}"
                        href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a
                        class="{{ Request::route()->getName() == 'pagina-prodotti' ? 'active' : '' }}"
                        href="{{ route('pagina-prodotti') }}">
                        Prodotti
                    </a>
                </li>
                <li>
                    <a
                        class="{{ Request::route()->getName() == 'pagina-news' ? 'active' : '' }}"
                        href="{{ route('pagina-news') }}">
                        News
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
