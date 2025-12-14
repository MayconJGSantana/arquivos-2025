<?php require __DIR__ . "/header.php"; ?> <!-- Carrega uma página dentro de outra, mas todas devem ser .php. Vale ressaltar: live server não suporta esse método-->

<!-- slideshow -->
<section class="slideshow">

    <div class="container">

        <div class="carousel slide" id="carousel">

            <!-- /carousel-inner -->
            <div class="carousel-inner">

                <div class="carousel-item active"> <!-- active referencia -->

                    <img src="assets/images/banners/banner-1.jpg" alt="" class="d-block w-100">

                </div>

                <div class="carousel-item"> <!-- active referencia -->

                    <img src="assets/images/banners/banner-2.jpg" alt="" class="d-block w-100">

                </div>

            </div>
            <!-- /.carousel-inner -->
                
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">

                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>

            </button>
        </div>
    </div>
</section>
<!-- FIM slideshow -->


<!-- banner-->
<section class="banners mt-4">

    <div class="container">

        <div class="row">

            <div class="col-md-6 "> <!-- médio e superiores-->

                <img src="assets/images/banners/Parcelas 12x.png" alt="" class="d-block w-100">

            </div>

            <div class="col-md-6">

                <img src="assets/images/banners/Entrega todo Pais.png" alt="" class="d-block w-100">
            
            </div>

        </div>

    </div>
</section>
<!-- FIM banner-->


<!-- MAIS-POPULARES -->
<section class="mais-populares mt-5 text-center">

    <div class="container">

        <h2>

            Mais populares

        </h2>

    </div>

</section>
<!-- FIM MAIS-POPULARES -->


<!-- PRODUTOS -->
<main class="produtos">

    <div class="container">

            <div class="row">

                <!-- PRODUTO -->
                <div class="produto col-md-3">

                    <div class="card card-produto rounded-0 border-0">

                        <img src="assets/images/produtos/thumb/cropped-rosa.jpg" class="card-img-top rounded-0" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">Cropped rosa</h5>
                            <p class="card-text">

                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>

                            </p>

                            <p class="card-text">

                                R$ 59,90

                            </p>

                        </div>

                    </div>

                </div>
                <!-- FIM PRODUTO -->


                <!-- PRODUTO -->
                <div class="produto col-md-3">

                    <div class="card card-produto rounded-0 border-0">

                        <img src="assets/images/produtos/thumb/camiseta-manga-comprida.jpg" class="card-img-top rounded-0" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">Camiseta manga comprida</h5>
                            <p class="card-text">

                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>

                            </p>

                            <p class="card-text">

                                R$ 79,90

                            </p>

                        </div>

                    </div>

                </div>
                <!-- FIM PRODUTO -->


                <!-- PRODUTO -->
                <div class="produto col-md-3">

                    <div class="card card-produto rounded-0 border-0">

                        <img src="assets/images/produtos/thumb/camiseta-listrada.jpg" class="card-img-top rounded-0" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">Camiseta Listrada</h5>
                            <p class="card-text">

                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>

                            </p>

                            <p class="card-text">

                                R$ 49,90

                            </p>

                        </div>

                    </div>

                </div>
                <!-- FIM PRODUTO -->


                <!-- PRODUTO -->
                <div class="produto col-md-3">

                    <div class="card card-produto rounded-0 border-0">

                        <img src="assets/images/produtos/thumb/saia-plisada.jpg" class="card-img-top rounded-0" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">Saia plisada</h5>
                            <p class="card-text">

                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>

                            </p>

                            <p class="card-text">

                                R$ 179,90

                            </p>

                        </div>

                    </div>

                </div>
                <!-- FIM PRODUTO -->

            </div>
    </div>

</main>
<!-- FIM PRODUTOS--->

<!-- VEJA-MAIS -->
<section class="container veja-mais">

    <div class="container-botao d-flex justify-content-center my-4">

        <div class="btn btn-lg btn-warning rounded-pill px-4 text-uppercase">

            veja mais

        </div>

    </div>

</section>
<!-- FIM VEJA-MAIS -->

<?php require __DIR__ . "/footer.php"; ?>

