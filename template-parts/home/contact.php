<section class="contact-form">
	<div class="container">
		<h2 id="kontaktformular" name="kontaktformular">Kontaktformular</h2>
		<form id="contact-form" action="" method="post" enctype="multipart/form-data">
			<div class="form-groups">
				<div class="form-group">
					<label for="name">Name<sup>*</sup></label>
					<input type="text" id="name" name="name" required />
				</div>
				<div class="form-group">
					<label for="email">E-Mail<sup>*</sup></label>
					<input type="email" id="email" name="email" required />
				</div>
			</div>
			<div class="form-groups">
				<div class="form-group">
					<label for="phone">Telefonnummer<sup>*</sup></label>
					<input type="tel" id="phone" name="phone" required />
				</div>
				<div class="form-group">
					<label for="service">Services<sup>*</sup></label>
					<select name="service">
						<option value="service1">Service 1</option>
						<option value="service2">Service 2</option>
						<option value="service3">Service 3</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="message">Nachricht</label>
				<textarea name="message" id="message"></textarea>
			</div>
			<div class="form-group upload-file">
				<input type="hidden" id="file-url" name="file-url" />
				<div id="file-drag-drop-area" class="file-drag-drop-area-container">
					Dateien hochladen (z.B. deinen Lebenslauf hochladen, Zeugnisse,..)
				</div>
			</div>
			<div class="form-information">
				<ul>
					<li>Mit <span class='required'>(*)</span> markierte Felder sind Pflichtfelder.</li>
					<li>Mit dem Absenden bestätige ich die <span class='required'>Datenschutzinformation</span> gelesen
						zu haben und bestätige diese.</li>
				</ul>
			</div>
			<button type="submit">Jetz Anfragen</button>
			<div id="contact-form-message" class="message hidden">
				<p></p>
			</div>
			<?php wp_nonce_field( 'contact_form', 'contact_form_nonce' ); ?>

		</form>
	</div>
</section>