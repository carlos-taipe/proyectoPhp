<header>
    <h1>Edicas</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active': ''}}" >Home</a>
            </li>
            <li><a href="{{route('productos.index')}}" class="{{request()->routeIs('productos.*') ? 'active': ''}}">Productos</a>
            </li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active': ''}}">Nosotros</a>
            </li>
            <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos') ? 'active': ''}}">Contáctanos</a>
            </li>
        </ul>
    </nav>
</header>