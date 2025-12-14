<?php require __DIR__ . "/header.php"; ?> <!-- Carrega uma página dentro de outra, mas todas devem ser .php. Vale ressaltar: live server não suporta esse método-->

<main class="produto">

    <div class="container">

        <!-- CAMINHO ARQUIVO -->
        <nav aria-label="breadcrumb" class="mt-4">

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Camiseta Manga Comprida</li>

            </ol>

        </nav>
        <!-- FIM CAMINHO ARQUIVO -->

        
        <!-- IMAGEM E DESCRICAO -->
        <div class="row">

            <div class="col-md-7">

                <img src="assets/images/produtos/details/foto-carrinho-camiseta-manga-comprida.jpg" class="w-100" alt="">

            </div>

            <div class="col-md-5">

                <h1>

                    Camiseta de Manga Comprida

                </h1>
                
                <p>
                    
                    Todos os meses disponiblizamos uma grande variedade de looks que são hits e queridinhos do momento através de lançamentos exclusivos de moda Feminina.
                    
                </p>
                
                
                <p class="card-text">
                    
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    
                </p>
                
                <h5 class="mt-3 preco">
                    
                    R$ 79,90
                
                </h5>
                
                <span>
                    
                    Em até 12x sem juros
                    
                </span>
                
                <div class="comprar mt-3">
                    
                    <form action="">
                    
                        <label for="" class="form-label">Parcelas:</label>
                        <select class="form-select form-select-lg" name="" id="">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="11">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            
                        </select>
                        
                        <button type="submit" class="btn btn-success mt-4 w-100">
                            
                            Comprar
                        
                        </button>
                        
                    
                    </form>
                    
                </div>
                
            </div>

        </div>
        <!-- FIM IMAGEM E DESCRICAO -->

        <!-- COMENTARIOS -->
        <div class="comentarios row">
            
            <div class="col">
                
                <div class="fb-comments" 
                    data-href="https://www.seusite.com/sua-pagina" 
                    data-width="100%" 
                    data-numposts="5">
                </div>
                
            </div>
            
        </div>
        <!-- FIM COMENTARIOS -->
        
    </div>

</main>

<script async defer crossorigin="anonymous" 
    src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v19.0">
</script> <!-- Conexão com o facebook -->

<?php require __DIR__ . "/footer.php"; ?>

