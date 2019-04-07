<?php
$title = ' - Serviços';
require 'template/head.php'; ?>

<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Serviços</h2>
    <ol class="breadcrumb">
        <li><a href="index.php">Início</a></li>
        <li><a href="servicos.php" class="active">Serviços</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- About Us Area -->
<section class="about_us_area row">
    <div class="container">
        <div class="row about_row">
            <div class="who_we_area col-md-7 col-sm-6">
                <p style="padding-bottom: 5px">Temos mais de 20 anos de experiência e temos uma equipa técnica especializada em cada um dos seguintes serviços:</p>
                <ul>
                  <li>Afagamento e envernizamento.</li>
                  <li>Aplicação do Soalho.</li>
                  <li>Aplicação do flutuante.</li>
                  <li>Aplicação do deck.</li>
                  <li>Pequenas remodelações.</li>
                </ul>
            </div>
            <div class="col-md-5 col-sm-6 about_client">
                <img src="images/gallery/afagamento de chão.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End About Us Area -->



<?php

require 'template/call-area.php';
require 'template/featured-images.php';
require 'template/foot.php';
?>
