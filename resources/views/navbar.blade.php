<nav>
    <img src="{{ asset("img/cssc_logo02.png") }}" alt="" height="100%">
    <ul class="menu">
        <li class="menu-item"><a href="{{ url("") }}" class="active">Inicio</a></li>
        <li class="menu-item"><a href="">Nosotros</a></li>
        <li class="menu-item" id="btn-servicios">
            <a href="">Servicios</a>
            <ul class="submenu" id="submenu-servicios">
                <li class="submenu-item"><a href="{{ url("servicio-uno") }}">Servicio Uno</a></li>
                <li class="submenu-item"><a href="">Servicio Dos</a></li>
            </ul>
        </li>
        <li class="menu-item"><a href="{{ url("contacto") }}">Contacto</a></li>
    
    </ul>
</nav>