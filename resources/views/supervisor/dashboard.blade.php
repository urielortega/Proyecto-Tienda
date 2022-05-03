@extends('supervisor.basedashboard')
@section('titulo','Dashboard')
@section('subtitulo','Dashboard')
@section('contenido')
<div class="main">

    <div class="cardBox">
        <div class="tarjeta">
            <div>
                <div class="numero">10</div>
                <div class="nombre">Número de ventas Diarias</div>
            </div>
            <div class="Tarjeta_iconos">
                <ion-icon name="pricetags-outline"></ion-icon>
            </div>
        </div>


        <div class="tarjeta">
            <div>
                <div class="numero">120</div>
                <div class="nombre">Número de ventas de este mes</div>
            </div>
            <div class="Tarjeta_iconos">
                <ion-icon name="basket-outline"></ion-icon>
            </div>
        </div>
        <div class="tarjeta">
            <div>
                <div class="numero">70%</div>
                <div class="nombre">Porcentaje de ventas esperadas</div>
            </div>
            <div class="Tarjeta_iconos">
                <ion-icon name="cellular-outline"></ion-icon>
            </div>
        </div>

    </div>


    <div class="Detalle">
        <div class="Ventas_recientes">
            <div class="Tarjeta_detalle">
                <h2>Ventas recientes</h2> 
            </div>
            <table>
                <thead>
                    <tr>
                        <td>Producto</td>
                        <td>Precio</td>
                        <td>Estado</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Multimetro Digital</td>
                        <td>$ 415</td>
                        <td><span class="estatus">Entregado</span>
                    </tr>
                    <tr>
                        <td>Batería Ion para Roti</td>
                        <td>$ 550</td>
                        <td><span class="estatus">Espera</span>
                    </tr>
                    <tr>
                        <td>Juego de herramientas</td>
                        <td>$ 1,015</td>
                        <td><span class="estatus">Enviado</span>
                    </tr>
                    <tr>
                        <td>Taladro Inalambrico</td>
                        <td>$ 775</td>
                        <td><span class="estatus">Entregado</span>
                    </tr>
                    <tr>
                        <td>Juego de pinzas</td>
                        <td>$ 325</td>
                        <td><span class="estatus">Entregado</span>
                    </tr>
                    <tr>
                        <td>Fumigador 5 Lts</td>
                        <td>$ 335</td>
                        <td><span class="estatus">Entregado</span>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection