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
                <a href="{{url('/supervisor')}}"><ion-icon name="home"></ion-icon>Dashboard</a>
            </li>
            <li>
                <a href="{{url('/supervisor/usuario')}}"><ion-icon name="person-circle"></ion-icon>Usuarios</a>
            </li>
            <li>
                <a href="{{url('/supervisor/categories')}}"><ion-icon name="apps"></ion-icon>Categorias</a>
            </li>
            <li>
                <a href="{{url('/supervisor/products')}}"><ion-icon name="bag"></ion-icon>Productos</a>
            </li>
            <li>
                <a href="{{url('/supervisor/transacciones')}}"><ion-icon name="cash"></ion-icon>Transacciones</a>
            </li>
            <li>
                <a href="{{url('/supervisor/propuestas')}}"><ion-icon name="bulb"></ion-icon>Propuestas</a>
            </li>
        </ul>
    </div>
</div>