<?php
require_once 'partials/header-princ.php';


if (!empty($_POST)) {

  $errors = [];
  $post = [];

  foreach($_POST as $key => $value){
    $post[$key] = trim(strip_tags($value));
  }

  if(strlen($post['lastname']) < 2 || strlen($post['lastname']) > 30 || is_numeric($post['lastname'])){
    $errors[] = 'Votre prénom doit comporter entre 2 et 30 caractères et sans caractères numériques';
  }

  if(strlen($post['firstname']) < 2 || strlen($post['firstname']) > 30  || is_numeric($post['firstname'])){
    $errors[] = 'Votre nom de famille doit comporter entre 2 et 30 caractères et sans caractères numériques';
  }

  if(filter_var($post['email'], FILTER_VALIDATE_EMAIL) == false){
    $errors[] = 'Votre email est invalide';
  }

  if(strlen($post['subject']) < 2 || strlen($post['subject']) > 30){
    $errors[] = 'Votre sujet doit comporter entre 2 et 30 caractères';
  }

  if(strlen($post['message']) < 15){
    $errors[] = 'Votre message doit comporter 15 caractères minimum';
  }

  if(count($errors) > 0){
    $formValid = false;
  }
  else{
    $to = "guillaume.couget@gmail.com";
    $from = $post['email'];
    $lastname = $post['lastname'];
    $firstname = $post['firstname'];
    $csubject = $post['subject'];
    $cmessage = $post['message'];

    $headers = [
        'from'          => 'contact@guillaume-couget.fr',
        'Reply-To'      => $post['email'],
        'MIME-Version'  => "1.0",
        'Content-Type'  => 'text/html; charset=utf-8',
    ];


    $subject = "Nouveau message de ".$post['lastname'].' '.$post['firstname'].' du '.date('d/m/Y H:i');

    $logo = '';
    $link = '#';

    $message = "<!DOCTYPE html><html lang='fr'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
    $message .= "<table style='width: 100%;'>";
    $message .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    $message .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
    $message .= "</td></tr></thead><tbody><tr>";
    $message .= "<td style='border:none;'><strong>Name:</strong> {$lastname} {$firstname}</td>";
    $message .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
    $message .= "</tr>";
    $message .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
    $message .= "<tr><td></td></tr>";
    $message .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
    $message .= "</tbody></table>";
    $message .= "</body></html>";

    $send = mail($to, $subject, $message, $headers);

    $formValid = true;

  }



}


?>

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
    	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="banner_content text-center">
				<h2>CONTACTEZ MOI</h2>
				<div class="page_link">
					<a href="index.php">Home</a>
					<a href="contact.php">CONTACT</a>
				</div>

			</div>
		</div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="feature_item">
                    <?php if(isset($formValid) && $formValid == true):?>
                        <div class="alert alert-success text-center">
                            <p>Votre email a bien été envoyé!<br>
                            je vous répondrai dès que possible.<br>
                            En vous remerciant.</p>
                        </div>
                    <?php elseif(isset($formValid) && $formValid == false):?>
                        <div class="alert alert-danger text-center">
                            <?=implode('<br>', $errors);?>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <!--
        <div id="mapBox" class="mapBox"
            data-lat=""
            data-lon=""
            data-zoom=""
            data-info=""
            data-mlat=""
            data-mlon="">
        </div>
        -->
        <div class="row">
            <div class="col-lg-4">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>TOULOUSE et sa banlieue </h6>
                        <p>31650 SAINT-ORENS DE GAMEVILLE</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">guillaume.couget[at]gmail.com</a></h6>
                        <p>Pour toute demande d'information!!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="row contact_form" action="" method="post" id="contactForm" >
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Votre prénom">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse mail">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="30" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn submit_btn">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->

<?php
 require_once 'partials/footer.php';
?>
