<!-- Buscador -->
<div class="container d-inline col-9 mt-1 pb-md-0 col-md-5 pb-lg-0  text-center">
    <form class="row border rounded shadow-lg" action="index.html" method="get">
        <!--Menu Selector-->
        <div class="dropdown col-5 col-md-4 col-lg-3 px-md-0">
            <a class="Categoria dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Categoria
            </a>
            <div class="dropdown-menu my-3" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Indumentaria</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Ferreteria</a>
            </div>
        </div>
        <!--Buscador con botón-->
        <input class="border col-5 col-md-6 col-lg-8 px-md-0 text-center" type="text" name="articulo"
            placeholder=" Articulo ID/Nombre">
        <button class="btn col-1 py-0" type="submit"><img src="/img/nav/buscar.svg" alt="Lupa" width="20vw"></button>
    </form>
</div>