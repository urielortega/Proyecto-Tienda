<div class="sidebar shadow">
    <div class="seccion-ar">
        <div class="logo">
            <img src= "{{url('static/images/logo.png')}}" class="im-fluid">
        </div>
        <div class="user">
            <span class="side_name">Hola: </span>
            <div class="nombre">
                {{-- {{Auth::user()->nombre}} {{Auth::user()->apellido_paterno}} --}}
                <a href="{{url('/logout')}}"><ion-icon name="exit"></ion-icon></a>
            </div>
        </div>
    </div>
    <div class="main">
        <ul>
            <li>
                <a href="{{url('/admin')}}"><ion-icon name="home"></ion-icon>Dashboard</a>
            </li>
            <li>
                <a href="{{url('/admin/usuario')}}"><ion-icon name="person-circle"></ion-icon>Usuarios</a>
            </li>
            <li>
                <a href="{{url('/admin/productos')}}"><ion-icon name="bag"></ion-icon>Productos</a>
            </li>
            <li>
                <a href="{{url('/admin/transacciones')}}"><ion-icon name="cash"></ion-icon>Transacciones</a>
            </li>
            <li>
                <a href="{{url('/admin/propuestas')}}"><ion-icon name="bulb"></ion-icon>Propuestas</a>
            </li>
            <li>
                <a href="{{url('/admin/categorias')}}"><ion-icon name="apps"></ion-icon>Categorias</a>
            </li>
        </ul>
    </div>
</div>