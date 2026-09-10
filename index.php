<?php

session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/base/reset.css">
    <link rel="stylesheet" href="css/base/variables.css">
    <link rel="stylesheet" href="css/base/sidebar.css">
    <link rel="stylesheet" href="css/modulos/dashboard.css">
    <link rel="stylesheet" href="css/base/spa.css">
    <link rel="stylesheet" href="css/modulos/productos.css">
    <link rel="stylesheet" href="css/modulos/categorias.css">
    <link rel="stylesheet" href="css/modulos/proveedore.css">
    <link rel="stylesheet" href="css/modulos/movimientos.css">
    <link rel="stylesheet" href="css/modulos/ventas.css">
    <link rel="stylesheet" href="css/modulos/compras.css">
    <link rel="stylesheet" href="css/modulos/alertas.css">
    <link rel="stylesheet" href="css/modulos/reportes.css">
    <link rel="stylesheet" href="css/modulos/usuarios.css">

    <title>InvenTrack</title>
</head>

<body>

    <div class="container">

        <!--SIDEBAR-->
        <section class="sidebar">

            <header>
                <div class="logo">
                    <img
                        src="assets/logo/logo_inventrack_blanco.png"
                        alt="InvenTrack">
                </div>
            </header>

            <div class="menu">

                <nav>

                    <a href="#dashboard"
                        class="menu-item active"
                        data-target="dashboard">

                        <li class="active">
                            <img
                                src="assets/iconos_sidebar/dashboard.svg"
                                alt="icono">

                            Dashboard
                        </li>

                    </a>


                    <a href="#productos"
                        class="menu-item"
                        data-target="productos">

                        <li>
                            <img
                                src="assets/iconos_sidebar/productos.svg"
                                alt="icono">

                            Productos
                        </li>

                    </a>


                    <a href="#categorias"
                        class="menu-item"
                        data-target="categorias">

                        <li>
                            <img
                                src="assets/iconos_sidebar/categorias.svg"
                                alt="icono">

                            Categorías
                        </li>

                    </a>


                    <a href="#proveedores"
                        class="menu-item"
                        data-target="proveedores">

                        <li>
                            <img
                                src="assets/iconos_sidebar/proveedores.svg"
                                alt="icono">

                            Proveedores
                        </li>

                    </a>


                    <a href="#movimientos"
                        class="menu-item"
                        data-target="movimientos">

                        <li>
                            <img
                                src="assets/iconos_sidebar/movimientos.svg"
                                alt="icono">

                            Movimientos
                        </li>

                    </a>


                    <a href="#ventas"
                        class="menu-item"
                        data-target="ventas">

                        <li>
                            <img
                                src="assets/iconos_sidebar/ventas.svg"
                                alt="icono">

                            Ventas
                        </li>

                    </a>


                    <a href="#compras"
                        class="menu-item"
                        data-target="compras">

                        <li>
                            <img
                                src="assets/iconos_sidebar/compras.svg"
                                alt="icono">

                            Compras
                        </li>

                    </a>


                    <a href="#alertas"
                        class="menu-item"
                        data-target="alertas">

                        <li>
                            <img
                                src="assets/iconos_sidebar/alertas.svg"
                                alt="icono">

                            Alertas
                        </li>

                    </a>


                    <a href="#reportes"
                        class="menu-item"
                        data-target="reportes">

                        <li>
                            <img
                                src="assets/iconos_sidebar/reportes.svg"
                                alt="icono">

                            Reportes
                        </li>

                    </a>


                    <a href="#usuarios"
                        class="menu-item"
                        data-target="usuarios">

                        <li>
                            <img
                                src="assets/iconos_sidebar/usuarios.svg"
                                alt="icono">

                            Usuarios
                        </li>

                    </a>

                    <a href="controllers/lagout.php"
                        class="cerrar_sesion"
                        data-target="cerrar_sesion">

                        <li>
                            <img
                                src="assets/iconos_sidebar/cerrar_sesion.svg"
                                alt="icono">

                            Cerrar sesión
                        </li>

                    </a>

                </nav>

            </div>

        </section>


        <!-- =====================================================
             CONTENIDO PRINCIPAL
        ====================================================== -->

        <main id="cont-principal">


            <!-- =================================================
                 DASHBOARD
            ================================================== -->

            <section
                id="dashboard"
                class="seccion active"
                data-module="dashboard"
                aria-hidden="false">

                <header>

                    <h2>Dashboard</h2>

                    <div class="cont-cuenta">

                        <span>ADMINISTRADOR</span>

                        <a
                            href="#"
                            class="cuenta"
                            data-target="cuenta">

                            <span>MP</span>

                        </a>

                    </div>

                </header>


                <div class="cont-dashboard">


                    <!-- CARDS DEL DASHBOARD -->

                    <div class="cont-cards">


                        <div class="cards">

                            <p>Total de productos</p>

                            <span class="total-prods">
                                1,248
                            </span>

                            <span class="estad">
                                +18 este mes
                            </span>

                        </div>


                        <div class="cards">

                            <p>Valor del inventario</p>

                            <span class="total-prods">
                                $86.4M
                            </span>

                            <span class="estad">
                                +4.2% vs. mes anterior
                            </span>

                        </div>


                        <div class="cards">

                            <p>Alertas activas</p>

                            <span class="total-prods">
                                7
                            </span>

                            <span class="alert">
                                3 productos agotados
                            </span>

                        </div>


                        <div class="cards">

                            <p>Ventas del día</p>

                            <span class="total-prods">
                                1,248
                            </span>

                            <span class="estad">
                                42 transacciones
                            </span>

                        </div>

                    </div>


                    <!-- VENTAS Y ALERTAS -->

                    <div class="resum-alertas">


                        <!-- VENTAS -->

                        <div class="cards-resum">

                            <h2>Ventas de la semana</h2>


                            <div class="cards-ventas">


                                <div class="barras-cont">


                                    <div class="barra">

                                        <span class="dia">
                                            Lun
                                        </span>

                                        <div class="barr-track">

                                            <div
                                                class="barr-fill"
                                                style="width: 65%;">
                                            </div>

                                        </div>

                                        <span class="valor">
                                            $1.4M
                                        </span>

                                    </div>


                                    <div class="barra">

                                        <span class="dia">
                                            Mar
                                        </span>

                                        <div class="barr-track">

                                            <div
                                                class="barr-fill"
                                                style="width: 35%;">
                                            </div>

                                        </div>

                                        <span class="valor">
                                            $1.4M
                                        </span>

                                    </div>


                                    <div class="barra">

                                        <span class="dia">
                                            Mié
                                        </span>

                                        <div class="barr-track">

                                            <div
                                                class="barr-fill"
                                                style="width: 45%;">
                                            </div>

                                        </div>

                                        <span class="valor">
                                            $1.4M
                                        </span>

                                    </div>


                                    <div class="barra">

                                        <span class="dia">
                                            Jue
                                        </span>

                                        <div class="barr-track">

                                            <div
                                                class="barr-fill"
                                                style="width: 75%;">
                                            </div>

                                        </div>

                                        <span class="valor">
                                            $1.4M
                                        </span>

                                    </div>


                                    <div class="barra">

                                        <span class="dia">
                                            Vie
                                        </span>

                                        <div class="barr-track">

                                            <div
                                                class="barr-fill"
                                                style="width: 85%;">
                                            </div>

                                        </div>

                                        <span class="valor">$1.4M</span>

                                    </div>


                                    <div class="barra">

                                        <span class="dia">
                                            Sab
                                        </span>

                                        <div class="barr-track">

                                            <div
                                                class="barr-fill"
                                                style="width: 55%;">
                                            </div>

                                        </div>

                                        <span class="valor">
                                            $1.4M
                                        </span>

                                    </div>


                                    <div class="barra">

                                        <span class="dia">
                                            Dom
                                        </span>

                                        <div class="barr-track">

                                            <div
                                                class="barr-fill" style="width: 25%;"></div>
                                        </div>

                                        <span class="valor">
                                            $1.4M
                                        </span>

                                    </div>


                                </div>


                                <!-- MOVIMIENTOS RECIENTES -->

                                <div class="mov-recient">

                                    <h2>
                                        Movimientos recientes
                                    </h2>


                                    <div class="tabla-mov">

                                        <table>

                                            <thead>

                                                <tr>

                                                    <th>
                                                        PRODUCTO
                                                    </th>

                                                    <th>
                                                        TIPO
                                                    </th>

                                                    <th>
                                                        CANTIDAD
                                                    </th>

                                                    <th>
                                                        USUARIO
                                                    </th>

                                                    <th>
                                                        HORA
                                                    </th>

                                                </tr>

                                            </thead>


                                            <tbody>


                                                <tr>

                                                    <td>
                                                        <span class="producto">Arroz Diana 500g</span>
                                                    </td>

                                                    <td>
                                                        <span class="tipo entrada">
                                                            Entrada
                                                        </span>
                                                    </td>

                                                    <td>
                                                        +120
                                                    </td>

                                                    <td>
                                                        C. Ramirez
                                                    </td>

                                                    <td>
                                                        10:42 am
                                                    </td>

                                                </tr>


                                                <tr>

                                                    <td>
                                                        <span class="producto">Arroz Diana 500g</span>
                                                    </td>

                                                    <td>
                                                        <span class="tipo salida">
                                                            Salida
                                                        </span>
                                                    </td>

                                                    <td>
                                                        +120
                                                    </td>

                                                    <td>
                                                        C. Ramirez
                                                    </td>

                                                    <td>
                                                        10:42 am
                                                    </td>

                                                </tr>


                                                <tr>

                                                    <td>
                                                        <span class="producto">Arroz Diana 500g</span>
                                                    </td>

                                                    <td>
                                                        <span class="tipo ajuste">
                                                            Ajuste
                                                        </span>
                                                    </td>

                                                    <td>
                                                        +120
                                                    </td>

                                                    <td>
                                                        C. Ramirez
                                                    </td>

                                                    <td>
                                                        10:42 am
                                                    </td>

                                                </tr>


                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- ALERTAS DE STOCK -->

                        <div class="alertas-stock">

                            <h2>
                                Alertas de stock
                            </h2>


                            <div class="tabla-alert">

                                <table>

                                    <tbody>


                                        <tr>

                                            <td class="prod">

                                                Leche Entera 1L

                                                <br>

                                                <span>
                                                    SKU-10234
                                                </span>

                                            </td>

                                            <td class="est">

                                                <span class="estado agotado">
                                                    Agotado
                                                </span>

                                            </td>

                                        </tr>


                                        <tr>

                                            <td class="prod">

                                                Detergente 3kg

                                                <br>

                                                <span>
                                                    SKU-10891
                                                </span>

                                            </td>

                                            <td class="est">

                                                <span class="estado stock-bajo">
                                                    Stock bajo
                                                </span>

                                            </td>

                                        </tr>


                                    </tbody>

                                </table>

                            </div>


                            <div class="ver-todas">

                                <button>
                                    Ver todas las alertas
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            <!-- =================================================
                 PRODUCTOS
            ================================================== -->

            <section
                id="productos"
                class="seccion"
                data-module="productos"
                aria-hidden="true">

                <header>

                    <h2>Productos</h2>

                    <div class="cont-cuenta">

                        <span>ADMINISTRADOR</span>

                        <a
                            href="#"
                            class="cuenta"
                            data-target="cuenta">

                            <span>MP</span>

                        </a>

                    </div>

                </header>

                <div class="cont-productos">

                    <div class="prod-header">

                        <form action="" method="GET">
                            <input type="search" name="buscar" placeholder="Buscar por nombre o SKU...">
                            <span class="icono-lupa"><img src="assets/iconos_productos/buscar.svg" alt=""></span>
                        </form>

                        <select name="categorias" id="categorias">
                            <option value="todas-las-categorias">Todas las categorias</option>
                        </select>

                        <button data-action="agg-producto" id="1"><span>+</span> Nuevo producto</button>

                    </div>

                    <div class="tabla-prods">
                        <table>

                            <thead>
                                <tr>
                                    <th>PRODUCTO</th>
                                    <th>SKU</th>
                                    <th>CATEGORÍA</th>
                                    <th>STOCK</th>
                                    <th>PRECIO VENTA</th>
                                    <th>ESTADO</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><span class="producto">Arroz Diana 500g</span></td>
                                    <td>SKU-10012</td>
                                    <td>Abarrotes</td>
                                    <td>184</td>
                                    <td>$3,200</td>
                                    <td><span class="estado activo">Activo</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button data-action="editar-prod" id="1">Editar</button>
                                            <button data-action="ver-prod" id="1">Ver</button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><span class="producto">Detergente 3kg</span></td>
                                    <td>SKU-10032</td>
                                    <td>Abarrotes</td>
                                    <td>0</td>
                                    <td>$4,100</td>
                                    <td><span class="estado agotado">Agotado</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button data-action="editar-prod" id="1">Editar</button>
                                            <button data-action="ver-prod" id="1">Ver</button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </section>


            <!-- =================================================
                 CATEGORÍAS
            ================================================== -->

            <section
                id="categorias"
                class="seccion"
                data-module="categorias"
                aria-hidden="true">

                <header>

                    <h2>Categorías</h2>

                    <div class="cont-cuenta">

                        <span>ADMINISTRADOR</span>

                        <a
                            href="#"
                            class="cuenta"
                            data-target="cuenta">

                            <span>MP</span>

                        </a>

                    </div>

                </header>

                <div class="cont-categorias">

                    <div class="categ-header">

                        <form action="" method="GET">
                            <input type="search" name="buscar" placeholder="Buscar categoría...">
                            <span class="icono-lupa"><img src="assets/iconos_productos/buscar.svg" alt=""></span>
                        </form>

                        <button data-action="nueva-categ" id="1"><span>+</span> Nueva categoría</button>

                    </div>

                    <div class="tabla-categ">

                        <table>

                            <thead>
                                <tr>
                                    <th>CATEGORÍA</th>
                                    <th>DESCRIPCIÓN</th>
                                    <th>PRODUCTOS ASOCIADOS</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Abarrotes</td>
                                    <td><span class="desc-categ">Arroz, aceite, panela, café, enlatados</span></td>
                                    <td>412 productos</td>
                                    <td>
                                        <div class="acciones">
                                            <button data-action="editar-categ" id="1">Editar</button>
                                            <button data-action="ver-categ" id="1">Ver</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>

            </section>


            <!-- =================================================
                 PROVEEDORES
            ================================================== -->

            <section
                id="proveedores"
                class="seccion"
                data-module="proveedores"
                aria-hidden="true">

                <header>

                    <h2>Proveedores</h2>

                    <div class="cont-cuenta">

                        <span>ADMINISTRADOR</span>

                        <a
                            href="#"
                            class="cuenta"
                            data-target="cuenta">

                            <span>MP</span>

                        </a>

                    </div>

                </header>

                <div class="cont-proveedores">

                    <div class="prove-header">

                        <form action="" method="GET">
                            <input type="search" name="buscar" placeholder="Buscar proveedor...">
                            <span class="icono-lupa"><img src="assets/iconos_productos/buscar.svg" alt=""></span>
                        </form>

                        <button data-action="nuevo-prove" id="1"><span>+</span> Nuevo proveedor</button>

                    </div>

                    <div class="tabla-prove">

                        <table>

                            <thead>
                                <tr>
                                    <th>PROVEEDOR</th>
                                    <th>NIT</th>
                                    <th>TELÉFONO</th>
                                    <th>CORREO</th>
                                    <th>PRODUCTOS</th>
                                    <th>ESTADO</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><span class="proveedor">Distribuidora La Central</span></td>
                                    <td>900.123.456-7</td>
                                    <td>+57 3212521176</td>
                                    <td>ventas@gmail.com</td>
                                    <td>84 productos</td>
                                    <td><span class="estado activo">Activo</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button data-action="editar-prove" id="1">Editar</button>
                                            <button data-action="ver-prove" id="1">Ver</button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><span class="proveedor">Alimentos Del Valle S.A.S.</span></td>
                                    <td>900.123.456-7</td>
                                    <td>+57 3212521176</td>
                                    <td>delvalle@gmail.com</td>
                                    <td>34 productos</td>
                                    <td><span class="estado inactivo">Inactivo</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button data-action="editar-prove" id="1">Editar</button>
                                            <button data-action="ver-prove" id="1">Ver</button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>
                </div>

            </section>


            <!-- =================================================
                 MOVIMIENTOS
            ================================================== -->

            <section
                id="movimientos"
                class="seccion"
                data-module="movimientos"
                aria-hidden="true">

                <header>

                    <h2>Movimientos</h2>

                    <div class="cont-cuenta">

                        <span>ADMINISTRADOR</span>

                        <a
                            href="#"
                            class="cuenta"
                            data-target="cuenta">

                            <span>MP</span>

                        </a>

                    </div>

                </header>

                <div class="cont-movimientos">
                    <div class="mov-header">

                        <nav class="filtros">
                            <button class="btn-filtros active-btn" data-action="todos">Todos</button>
                            <button class="btn-filtros" data-action="entradas">Entradas</button>
                            <button class="btn-filtros" data-action="salidas">Salidas</button>
                            <button class="btn-filtros" data-action="ajustes">Ajustes</button>
                        </nav>

                        <form action="" method="GET">
                            <input type="search" name="buscar" placeholder="Buscar por producto...">
                            <span class="icono-lupa"><img src="assets/iconos_productos/buscar.svg" alt=""></span>
                        </form>

                    </div>

                    <div class="tabla-prove">

                        <table>

                            <thead>
                                <tr>
                                    <th>PRODUCTO</th>
                                    <th>TIPO</th>
                                    <th>CANTIDAD</th>
                                    <th>MOTIVO/ORIGEN</th>
                                    <th>USUARIO</th>
                                    <th>FECHA</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td><span class="producto">Arroz Diana 500g</span></td>
                                    <td><span class="tipo entrada">Entrada</span></td>
                                    <td>+120</td>
                                    <td>Compra #00231</td>
                                    <td>Julián Gimenez</td>
                                    <td>02/08/2026 10:42am</td>
                                </tr>

                                <tr>
                                    <td><span class="producto">Arroz Diana 500g</span></td>
                                    <td><span class="tipo salida">Salida</span></td>
                                    <td>+120</td>
                                    <td>Compra #00231</td>
                                    <td>Julián Gimenez</td>
                                    <td>02/08/2026 10:42am</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </section>


            <!-- =================================================
                 VENTAS
            ================================================== -->

            <section
                id="ventas"
                class="seccion"
                data-module="ventas"
                aria-hidden="true">

                <header>

                    <h2>Ventas</h2>

                    <div class="cont-cuenta">

                        <span>ADMINISTRADOR</span>

                        <a
                            href="#"
                            class="cuenta"
                            data-target="cuenta">

                            <span>MP</span>

                        </a>

                    </div>

                </header>

                <div class="cont-ventas">

                    <div class="categ-header">

                        <form action="" method="GET">
                            <input type="search" name="buscar" placeholder="Buscar por ticket o vend...">
                            <span class="icono-lupa"><img src="assets/iconos_productos/buscar.svg" alt=""></span>
                        </form>

                        <button data-action="nueva-venta" id="1"><span>+</span> Nueva venta</button>

                    </div>

                    <div class="tabla-ventas">

                        <table>

                            <thead>
                                <tr>
                                    <th>TICKET</th>
                                    <th>VENDEDOR</th>
                                    <th>FECHA</th>
                                    <th>PRODUCTOS</th>
                                    <th>TOTAL</th>
                                    <th>ESTADO</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="ticket">#00482</td>
                                    <td>Daniela Eslava</td>
                                    <td>02/08/2026 10:32pm</td>
                                    <td>3 lineas</td>
                                    <td>$23.100</td>
                                    <td><span class="estado-venta confir">Confirmada</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button data-action="ver-venta" id="1">Ver</button>
                                            <button data-action="anular-venta" id="1">Anular</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>

            </section>


            <!-- =================================================
                 COMPRAS
            ================================================== -->

            <section
                id="compras"
                class="seccion"
                data-module="compras"
                aria-hidden="true">

                <header>

                    <h2>Compras</h2>

                    <div class="cont-cuenta">

                        <span>ADMINISTRADOR</span>

                        <a
                            href="#"
                            class="cuenta"
                            data-target="cuenta">

                            <span>MP</span>

                        </a>

                    </div>

                </header>

                </header>

                <div class="cont-compras">

                    <div class="categ-header">

                        <form action="" method="GET">
                            <input type="search" name="buscar" placeholder="Buscar por proveedor...">
                            <span class="icono-lupa"><img src="assets/iconos_productos/buscar.svg" alt=""></span>
                        </form>

                        <button data-action="nueva-venta" id="1"><span>+</span> Nueva compra</button>

                    </div>

                    <div class="tabla-compras">

                        <table>

                            <thead>
                                <tr>
                                    <th>PROVEEDOR</th>
                                    <th>REGISTRADA POR</th>
                                    <th>FECHA</th>
                                    <th>TOTAL</th>
                                    <th>ESTADO</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="provee">Distribuidora La Central</td>
                                    <td>Julian Bermudez</td>
                                    <td>02/08/2026 10:32pm</td>
                                    <td>$1,840,000</td>
                                    <td><span class="estado-compra confir">Confirmada</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button data-action="ver-compra" id="1">Ver</button>
                                            <button data-action="anular-compra" id="1">Anular</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>

            </section>


            <!-- =================================================
                 ALERTAS
            ================================================== -->

            <section
                id="alertas"
                class="seccion"
                data-module="alertas"
                aria-hidden="true">

                <header>

                    <h2>Alertas</h2>

                    <div class="cont-cuenta">

                        <span>ADMINISTRADOR</span>

                        <a
                            href="#"
                            class="cuenta"
                            data-target="cuenta">

                            <span>MP</span>

                        </a>

                    </div>

                </header>


                <div class="cont-alertas">

                    <div class="alert-header">

                        <nav class="filtros">
                            <button class="btn-filtros active-btn" data-action="activas">Activas</button>
                            <button class="btn-filtros" data-action="resueltas">Resueltas</button>
                            <button class="btn-filtros" data-action="todas">Todas</button>
                        </nav>

                        <form action="" method="GET">
                            <input type="search" name="buscar" placeholder="Buscar por producto...">
                            <span class="icono-lupa"><img src="assets/iconos_productos/buscar.svg" alt=""></span>
                        </form>

                    </div>

                    <div class="tabla-alertas">

                        <table>

                            <thead>
                                <tr>
                                    <th>PRODUCTO</th>
                                    <th>SKU</th>
                                    <th>TIPO DE ALERTA</th>
                                    <th>STOCK ACTUAL</th>
                                    <th>GENERADA</th>
                                    <th>ACCIÓN</th>
                                </tr>
                            </thead>

                            <tbody id="fila-alert" class="filas-alertas">
                                <tr>
                                    <td class="producto">Leche Entera 1L</td>
                                    <td>SKU-10234</td>
                                    <td><span class="tipo-alerta  agotado">Agotado</span></td>
                                    <td>0</td>
                                    <td>Hoy, 08:14 am</td>
                                    <td>
                                        <div class="acciones">
                                            <button data-action="marcar-resuelta" id="resol-alert">Marcar Resuelta</button>
                                            <span id="alert-resuelta" class="resuelta oculto">Resuelta ✓</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>

    </div>

    </section>


    <!-- =================================================
                 REPORTES
            ================================================== -->

    <section
        id="reportes"
        class="seccion"
        data-module="reportes"
        aria-hidden="true">

        <header>

            <h2>Reportes</h2>

            <div class="cont-cuenta">

                <span>ADMINISTRADOR</span>

                <a
                    href="#"
                    class="cuenta"
                    data-target="cuenta">

                    <span>MP</span>

                </a>

            </div>

        </header>


        <div class="cont-reportes">

            <div class="reportes-header">

                <nav class="filtros">
                    <button class="btn-filtros active-btn" data-report="valorizacion">Valorización</button>
                    <button class="btn-filtros" data-report="rotacion">Rotación</button>
                    <button class="btn-filtros" data-report="mas-vendidos">Más / menos vendidos</button>
                    <button class="btn-filtros" data-report="ventas-periodo">Ventas por periodo</button>
                </nav>

                <div class="reportes-acciones">
                    <select name="periodo" id="periodo">
                        <option value="hoy">Hoy</option>
                        <option value="semana">Esta semana</option>
                        <option value="mes" selected>Este mes</option>
                        <option value="personalizado">Personalizado</option>
                    </select>
                    <button data-action="exportar-pdf" id="1">Exportar PDF</button>
                    <button data-action="exportar-excel" id="1">Exportar Excel</button>
                </div>

            </div>

            <!-- Panel: Valorización (RF-32) -->
            <div class="reporte-panel active" data-panel="valorizacion">

                <div class="cont-cards-reporte">
                    <div class="cards-reporte">
                        <p>Valor total del inventario</p>
                        <span class="valor-reporte">$86.4M</span>
                    </div>
                    <div class="cards-reporte">
                        <p>Productos valorizados</p>
                        <span class="valor-reporte">1,248</span>
                    </div>
                    <div class="cards-reporte">
                        <p>Categoría con mayor valor</p>
                        <span class="valor-reporte">Abarrotes</span>
                    </div>
                </div>

                <div class="tabla-reporte">
                    <table>
                        <thead>
                            <tr>
                                <th>PRODUCTO</th>
                                <th>CATEGORÍA</th>
                                <th>STOCK</th>
                                <th>COSTO UNITARIO</th>
                                <th>VALOR TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="producto">Arroz Diana 500g</span></td>
                                <td>Abarrotes</td>
                                <td>184</td>
                                <td>$2,600</td>
                                <td>$478,400</td>
                            </tr>
                            <tr>
                                <td><span class="producto">Detergente 3kg</span></td>
                                <td>Abarrotes</td>
                                <td>0</td>
                                <td>$3,400</td>
                                <td>$0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- Panel: Rotación (RF-33) -->
            <div class="reporte-panel" data-panel="rotacion">

                <div class="cont-cards-reporte">
                    <div class="cards-reporte">
                        <p>Rotación promedio</p>
                        <span class="valor-reporte">4.2x</span>
                    </div>
                    <div class="cards-reporte">
                        <p>Producto de mayor rotación</p>
                        <span class="valor-reporte">Arroz Diana 500g</span>
                    </div>
                </div>

                <div class="tabla-reporte">
                    <table>
                        <thead>
                            <tr>
                                <th>PRODUCTO</th>
                                <th>UNIDADES VENDIDAS</th>
                                <th>STOCK PROMEDIO</th>
                                <th>ÍNDICE DE ROTACIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="producto">Arroz Diana 500g</span></td>
                                <td>612</td>
                                <td>145</td>
                                <td>4.2x</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- Panel: Más / menos vendidos (RF-34) -->
            <div class="reporte-panel" data-panel="mas-vendidos">

                <div class="cont-cards-reporte">
                    <div class="cards-reporte">
                        <p>Producto más vendido</p>
                        <span class="valor-reporte">Arroz Diana 500g</span>
                    </div>
                    <div class="cards-reporte">
                        <p>Producto menos vendido</p>
                        <span class="valor-reporte">Aceite Girasol 1L</span>
                    </div>
                </div>

                <div class="tabla-reporte">
                    <table>
                        <thead>
                            <tr>
                                <th>PRODUCTO</th>
                                <th>UNIDADES VENDIDAS</th>
                                <th>INGRESOS GENERADOS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="producto">Arroz Diana 500g</span></td>
                                <td>612</td>
                                <td>$1,959,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- Panel: Ventas por periodo (RF-35) -->
            <div class="reporte-panel" data-panel="ventas-periodo">

                <div class="cont-cards-reporte">
                    <div class="cards-reporte">
                        <p>Total de ventas del periodo</p>
                        <span class="valor-reporte">$24.8M</span>
                    </div>
                    <div class="cards-reporte">
                        <p>Transacciones</p>
                        <span class="valor-reporte">318</span>
                    </div>
                    <div class="cards-reporte">
                        <p>Ticket promedio</p>
                        <span class="valor-reporte">$78,000</span>
                    </div>
                </div>

                <div class="tabla-reporte">
                    <table>
                        <thead>
                            <tr>
                                <th>FECHA</th>
                                <th>TRANSACCIONES</th>
                                <th>TOTAL VENDIDO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>02/08/2026</td>
                                <td>42</td>
                                <td>$1,248,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </section>


    <!-- =================================================
                 USUARIOS
            ================================================== -->

    <section
        id="usuarios"
        class="seccion"
        data-module="usuarios"
        aria-hidden="true">

        <header>

            <h2>Usuarios</h2>

            <div class="cont-cuenta">

                <span>ADMINISTRADOR</span>

                <a
                    href="#"
                    class="cuenta"
                    data-target="cuenta">

                    <span>MP</span>

                </a>

            </div>

        </header>


        <div class="cont-usuarios">

            <div class="usuarios-header">

                <form action="" method="GET">
                    <input type="search" name="buscar" placeholder="Buscar por nombre o correo...">
                    <span class="icono-lupa"><img src="assets/iconos_productos/buscar.svg" alt=""></span>
                </form>

                <select name="rol" id="rol">
                    <option value="todos">Todos los roles</option>
                    <option value="administrador">Administrador</option>
                    <option value="vendedor">Vendedor / Cajero</option>
                    <option value="bodega">Encargado de bodega</option>
                </select>

                <button data-action="nuevo-usuario" id="1"><span>+</span> Nuevo usuario</button>

            </div>

            <div class="tabla-usuarios">
                <table>

                    <thead>
                        <tr>
                            <th>USUARIO</th>
                            <th>ROL</th>
                            <th>ESTADO</th>
                            <th>ÚLTIMA SESIÓN</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>
                                <span class="usuario">Mariana Pardo</span>
                                <br><span class="correo">mariana.pardo@inventrack.com</span>
                            </td>
                            <td><span class="rol administrador">Administrador</span></td>
                            <td><span class="estado activo">Activo</span></td>
                            <td>02/08/2026 08:02am</td>
                            <td>
                                <div class="acciones">
                                    <button data-action="editar-usuario" id="1">Editar</button>
                                    <button data-action="desactivar-usuario" id="1">Desactivar</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="usuario">Julián Gimenez</span>
                                <br><span class="correo">julian.gimenez@inventrack.com</span>
                            </td>
                            <td><span class="rol bodega">Encargado de bodega</span></td>
                            <td><span class="estado activo">Activo</span></td>
                            <td>02/08/2026 09:10am</td>
                            <td>
                                <div class="acciones">
                                    <button data-action="editar-usuario" id="1">Editar</button>
                                    <button data-action="desactivar-usuario" id="1">Desactivar</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="usuario">Daniela Eslava</span>
                                <br><span class="correo">daniela.eslava@inventrack.com</span>
                            </td>
                            <td><span class="rol vendedor">Vendedor / Cajero</span></td>
                            <td><span class="estado bloqueado">Bloqueado</span></td>
                            <td>28/07/2026 07:40pm</td>
                            <td>
                                <div class="acciones">
                                    <button data-action="editar-usuario" id="1">Editar</button>
                                    <button data-action="activar-usuario" id="1">Activar</button>
                                </div>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>

        </div>


    </section>


    </main>

    </div>

    <!--JAVA SCRIPT-->
    <script src="js/spa.js"></script>
    <script src="js/botones.js"></script>

</body>

</html>