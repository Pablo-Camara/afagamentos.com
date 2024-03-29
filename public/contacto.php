<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

  if(isset($_POST['sendmsg'])){


    require 'vendors/PHPMailer/Exception.php';
    require 'vendors/PHPMailer/PHPMailer.php';
    require 'vendors/PHPMailer/SMTP.php';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->Host       = "smtp.migadu.com";
    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Username   = "info@afagamentos.com";
    $mail->Password   = "TFAfagamentos2019";


    //Recipients
    $mail->setFrom('info@afagamentos.com', 'Afagamentos.com | Tabela Florida');
    $mail->addAddress('info@afagamentos.com', 'Afagamentos.com - Tabela Florida');
    // Add a recipient
    $mail->addReplyTo(trim(strtolower($_POST['email'])), trim($_POST['name']));
    $mail->addBCC('pablo@camara.pt', 'Pablo Camara');


    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Nova mensagem: ' . $_POST['subject'];
    $mail->Body    = 'Você tem uma nova mensagem de Afagamentos.com<br/><br/>';
    $mail->Body    .= 'Mensagem de: <b>' . $_POST['name'] . '</b><br/>';
    $mail->Body    .= 'Contacto telefonico: <b>' . $_POST['phone'] . '</b><br/>';
    $mail->Body    .= 'Email: <b>' . $_POST['email'] . '</b><br/>';
    $mail->Body    .= 'Assunto: <b>' . $_POST['subject'] . '</b><br/>';
    $mail->Body    .= 'Mensagem:<br/><b>' . $_POST['message'] . '</b><br/>';

    $mail->send();
    $emailSent = true;
  }

$replace2ndTitle = true;
$title = 'Afagamentos e Envernizamentos | Contactar Empresa';
$metaDescription = 'Peça aqui o seu orçamento e saiba o preço por m2. Especialistas em Afagamentos e Envernizamentos, tratamento de pavimentos em madeira.';

require 'template/head.php'; ?>


<?php if(!isset($emailSent)): ?>

<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Contacto</h2>
    <ol class="breadcrumb">
        <li><a href="/">Início</a></li>
        <li><a href="contacto.php" class="active">Contacto</a></li>
    </ol>
</section>
<!-- End Banner area -->







<?php require 'template/call-area.php'; ?>

<!-- All contact Info -->
<section class="all_contact_info">
    <div class="container">
        <div class="row contact_row">

            <div class="col-12 contact_info send_message" style="padding: 10px" id="mensagem">
                <h2>Envie-nos uma mensagem</h2>
                <form class="form-inline contact_box" method="post" id="contactForm">
                    <input type="text" class="form-control input_box" name="name" placeholder="Nome" required>
                    <input type="tel" pattern="^[2,9][0-9]{8}$" class="form-control input_box" name="phone" placeholder="Contacto Telefonico" required>
                    <input type="email" class="form-control input_box" name="email" placeholder="O seu endereço de Email" required>
                    <input type="text" class="form-control input_box" name="subject" placeholder="Assunto" required>
                    <textarea class="form-control input_box" name="message" placeholder="O que é que necessita? Explique o mais detalhadamente possível" required></textarea>
                    <button type="submit" class="btn btn-default" name="sendmsg">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End All contact Info -->

<!-- Map -->
<div class="contact_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12439.262468865789!2d-9.321503969007281!3d38.79086107315474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ed1d2c01eaf99%3A0xba2f9bf7e850cb49!2sAv.+T%C3%ADlias+5%2C+2635-312+Rio+de+Mouro!5e0!3m2!1spt-PT!2spt!4v1556813456594!5m2!1spt-PT!2spt"></iframe>
</div>
<!-- End Map -->

<?php else: ?>
<div style="text-align:center; padding: 10px;"><h1>A sua mensagem foi enviada!</h1><p>Entraremos em contacto muito em breve, Agradecemos pela preferência! Até já</p></div>
<?php endif; ?>
<?php require 'template/foot.php'; ?>
