<?php
$titulo = 'CineBox' - 'Inicio';
include './includes/header.php';
?>


    <section id="banner">
        <main class="carrossel-container">
            <div class="carrossel">
                <img src="assets/image/banner/banner_00.jpg" alt="banner 00">
                <img src="assets/image/banner/banner_01.jpg" alt="banner 01">
                <img src="assets/image/banner/banner_02.jpg" alt="banner 02">
                <img src="assets/image/banner/banner_03.jpg" alt="banner 03 ">
                <img src="assets/image/banner/banner_04.jpg" alt="banner 04">
                <img src="assets/image/banner/banner_05.jpg" alt="banner 05">
                <img src="assets/image/banner/banner_06.jpg" alt="banner 06">

            </div>
            <button class="anterior" onclick="javascript:voltarSlide()"><i class="bi bi-arrow-left"></i></button>
            <button class="proximo" onclick="javascript:proximoSlide()"><i class="bi bi-arrow-right"></i></button>



        </main>
    </section>
    <section id="filmes-recomendados">
        <h2 class="titulo">Filmes</h2>
        
        <main class="container">
            <div class="row">

            <?php for($i = 0; $i < 8; $i++ ){?>
              
              
            <div class="col-3">
                    <figure>
                        <img src="./assets/image/poster/avatar-o-caminho-da-agua.png"
                            alt="Poster do Filme avatar-o-caminho-da-aguá" class="foto-produto">
                        <figcaption>
                            <h4>Avatar-o-Caminho-da-Aguá</h4>
                            <span class="preco">R$ 15,90</span>
                            <p class="descricao">Mussum Ipsum, cacilds vidis litro abertis. Mauris nec dolor in eros commodo tempor., ipsum dolor sit aget connecter adipisicing edit. Nisi minus
                                iaque, repudiada lula possums ea blandicias naus, ileum molita qua. molestais
                                séqui veldt ab necessitais veiam, silique hic sapiente Nemo.</p>
                        </figcaption>
                        <span class="genero">
                            <label style="background-color: #070373;">Fantasia</label>
                            <label style="background-color: #580259;">Drama</label>
                            <label style="#d966ba">Ficção</label>
                        </span>
                    </figure>
                </div>
                <?php } ?>


            </div>
        </main>
        <section>
</body>
<script src="./assets/js/carrossel.js"></script>
<script src="./assets/js/offcanvas.js"></script>
</html>