<!DOCTYPE html>
<html lang="sr">
<head>
	<title>Škola web dizajna</title>
	<meta charset="utf-8">
	<meta name="description" content="Ovde ide opis web strane do 160 karaktera sa ključnim rečima bitnim za pretragu">
	<link rel="stylesheet" href="css/main.css">
</head>
<body id="contact">
	<!-- Main Header -->
	<?php include("templates/main_header.php"); ?>
	<!-- Main Header END -->

	<main>
    <div class="container white-container">
      <h1>Kontakt</h1>
      <div class="clearfix">
        <div class="col-1-3">
          <div class="info">
            <h3>Krojačeva škola d.o.o.</h3>
            <p class="address">Nikolaja Ostrovskog 3, 11080 Zemun</p>
            <p>Tel: <a href="tel:+381113162710">+381 (0)11 3162 710</a></p>
            <p>Faks: <a href="tel:+381113162471">+381 (0)11 3162 471</a></p>
            <p><a href="mailto:info@krojacevaskola.com">info@krojacevaskola.com</a></p>
            <p class="hours">Radno vreme: 09-17č, pon-pet</p>
            <p>Matični broj: 20940115</p>
            <p>PIB: 108147131</p>
            <p>Tekući račun: 160-393767-41</p>
          </div>
        </div>
        <div class="col-2-3">
          <div class="map">
            <div class="videoWrapper">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.1256719098087!2d20.410856315897735!3d44.83937397909849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65a6e0376019%3A0xc2b2f83c5ddc7e0e!2zS3JvamHEjWV2YSDFoWtvbGE!5e0!3m2!1sen!2srs!4v1549270532123" width="600" height="450" allowfullscreen></iframe>
              <div class="see-map">
                <span>Pogledaj mapu</span>
              </div>
            </div>
        </div>
        </div>
      </div>

      <section class="contact">
        <h2>Pišite nam</h2>

        <div class="col-1-2">
          <!-- Poruka -->
          <div class="alert alert-success" style="display: none;">
        	   <strong>Poruka je uspešno prosleđena!</strong> Hvala na interesovanju.
           </div>
           <!-- Forma -->
           <form action="_send-email.php" method="post" id="contact-form">
             <div class="form-group">
                <label for="SenderName">Ime i prezime<span>*</span></label>
                <input type="text" name="SenderName" class="form-control" id="SenderName" required>
              </div>
              <div class="form-group">
                <label for="SenderEmail">E-mail<span>*</span></label>
                <input type="email" name="SenderEmail" class="form-control" id="SenderEmail" required>
              </div>
							<div class="form-group">
					        <label for="SenderPhone">Broj telefona</label>
					        <input type="text" name="Sender[Phone]" class="form-control" id="SenderPhone" required>
					    </div>
              <div class="form-group">
                <label for="SenderMessage">Poruka<span>*</span></label>
                <textarea name="SenderMessage" id="SenderMessage" class="form-control" required></textarea>
              </div>
              <button class="btn" type="submit">Pošalji</button>
            </form>
        </div>
      </section>

    </div>
	</main>

	<!-- Main Footer -->
	<footer class="main-footer">
		<!-- Container -->
		<div class="container clearfix">
			<ul class="soc-net list-reset">
				<li><a href="http://www.facebook.com" target="_blank" class="facebook">Facebook</a></li>
				<li><a href="http://www.twitter.com" target="_blank" class="twitter">Twitter</a></li>
				<li><a href="http://www.linkedin.com" target="_blank" class="linked-in">LinkedIn</a></li>
				<li><a href="http://plus.google.com" target="_blank" class="google-plus">Google Plus</a></li>
			</ul>
			<div class="col-2-3">
			<p><small>Ovaj sajt predstavlja jednu od prvih vežbi sa predavanja iz <a href="http://www.krojacevaskola.com" target="_blank">Krojačeve škole</a>. Svaki učenik nauči da izdizajnira i iskodira ovu stranu.</small></p>
			</div>
			<div class="col-1-3">
			<small>2016 &copy; Škola web dizajna. Sva prava zadržana.</small>
			</div>
		</div>
		<!-- Container END -->
	</footer>
	<!-- Main Footer END -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/messages_sr_lat.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
