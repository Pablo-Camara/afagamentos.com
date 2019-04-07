<!-- Footer Area -->
<footer class="footer_area">
    <div class="container">
        <div class="footer_row row">
            <div class="col-sm-4 footer_about">
                <h2>A nossa empresa</h2>
                <h1 style="padding: 0;margin: 0;font-size: 20px; color: #FFFFFF;">
                    <span style="color: #f6b60b">Afagamentos</span>.com
                </h1>
                <p>Mais de 20 anos de experiência no mercado a servir os nossos clientes com grande prazer!</p>
                <ul class="socail_icon">
                    <li><a href="https://www.facebook.com/Afagamentoscom-Empresa-de-Afagar-Chão-Afagamentos-e-Envernizamentos-424626244772566/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="col-sm-4 footer_about">
                <h2>Entre em Contacto!</h2>
                <address>
                    <p>Se tiver alguma dúvida, ou precisar de qualquer esclarecimento, não hesite em contactar-nos:</p>
                    <ul class="my_address">
                        <li><a href="mailto:info@afagamentos.com" onClick="gtag_report_conversion_mail('mailto:info@afagamentos.com')"><i class="fa fa-envelope" aria-hidden="true"></i>info@afagamentos.com</a></li>
                        <li><a href="tel:00351967215705" onClick="gtag_report_conversion_tel('tel:00351967215705')"><i class="fa fa-phone" aria-hidden="true"></i>+ (351) 967 215 705</a></li>
                        <li><a href="https://goo.gl/maps/FaeFJhNuVzr" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>R. Dona Mafalda 25, 2605-657 Belas</a></li>
                    </ul>
                </address>
            </div>

            <div class="col-sm-4 footer_about">
              <h2>Links úteis</h2>
              <ul class="quick_link">
                  <li><a href="/afagar-chao.php"><i class="fa fa-chevron-right"></i>Afagar chão</a></li>
                  <li><a href="/afagar-e-envernizar-chao.php"><i class="fa fa-chevron-right"></i>Afagar e Envernizar chão</a></li>
                  <li><a href="/afagar-chao-preco-m2.php"><i class="fa fa-chevron-right"></i>Afagar chão Preço m2</a></li>
              </ul>
            </div>
        </div>
    </div>
    <div class="copyright_area">
        Copyright @ <?= date('Y') ?> Todos os direitos reservados.
    </div>
</footer>
<!-- End Footer Area -->



<!-- jQuery JS -->
<script src="js/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Animate JS -->
<script src="vendors/animate/wow.min.js"></script>
<!-- Camera Slider -->
<script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
<script src="vendors/camera-slider/camera.min.js"></script>
<!-- Isotope JS -->
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<!-- Progress JS -->
<script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
<script src="vendors/Counter-Up/waypoints.min.js"></script>
<!-- Owlcarousel JS -->
<script src="vendors/owl_carousel/owl.carousel.min.js"></script>
<!-- Stellar JS -->
<script src="vendors/stellar/jquery.stellar.js"></script>
<!-- Theme JS -->
<script src="js/theme.js"></script>
<?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') === 'index'): ?>
  <script src="js/slider_home.js"></script>
<?php endif; ?>

<?php  if(basename($_SERVER["SCRIPT_FILENAME"], '.php') === 'portfolio'): ?>
  <script src="js/slider_portfolio.js"></script>
<?php endif; ?>
</body>
</html>
