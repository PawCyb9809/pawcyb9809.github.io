<div id="content-div3">
<div class="containerform">
    <div class="">
        <div class="">
            <div class="">
                <div class="corpo_section_heading stripe">
                    <h2 class="section-title">Kontakt z nami</h2>
		            <div class="section-content">
		                <p>Jeżeli masz pytania co do naszej oferty, wypełnij poniższy formularz kontaktowy.<span style="color: #ff0000;"><p>
                         <!--   <strong> Pamiętaj, że wyceniamy auta jedynie poprzez nasz formularz wyceny, znajdujący się <span style="color: #ff0000;"><a style="color: #d42a2a;" href="">pod tym adresem.&nbsp;</a></span></strong></p></span>
                        -->
                        </p>
	                </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="">
            <div class="">
                <div role="form" class="wpcf7" id="wpcf7-f117-p97-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
<script src='https://www.google.com/recaptcha/api.js'></script>
                    <form action="pages/app.php" method="POST" class="wpcf7-form corpo-form">
                        <div style="display: none;">
                            <input type="hidden" name="hidden-value" value="117">
                        </div>
                        <div class="corpo_form_page_left">
                            <p><label> Imię </label><br>
                                <span class="wpcf7-form-control-wrap first-name"><input type="text" name="first-name" value="<?php
			if (isset($_SESSION['first_name']))
			{
				echo $_SESSION['first_name'];
				unset($_SESSION['first_name']);
			}
		?>"  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"></span></p>
                            <p><label> Nazwisko </label><br>
                                <span class="wpcf7-form-control-wrap last-name"><input type="text" name="last-name" value="<?php
			if (isset($_SESSION['last_name']))
			{
				echo $_SESSION['last_name'];
				unset($_SESSION['last_name']);
			}
		?>"  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"></span></p>
                            <p><label> Email </label><br>
                                <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="<?php
			if (isset($_SESSION['your_email']))
			{
				echo $_SESSION['your_email'];
				unset($_SESSION['your_email']);
			}
		?>"  class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required></span></p>
                            <p><label> Telefon </label><br>
                                <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="<?php
			if (isset($_SESSION['your_phone']))
			{
				echo $_SESSION['your_phone'];
				unset($_SESSION['your_phone']);
			}
		?>"  class="wpcf7-form-control wpcf7-text"></span></p>
                        </div>
                        <div class="corpo_form_page_right">
                            <p><label> Wiadomość </label><br>
                                <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" rows="8" class="wpcf7-form-control wpcf7-textarea" required><?php
			if (isset($_SESSION['your_message']))
			{
				echo $_SESSION['your_message'];
				unset($_SESSION['your_message']);
			}
		?></textarea></span></p>
                        <div class="acceptance" style="margin-top:10px;">
                          <!-- <span class="wpcf7-form-control-wrap your-consent"><span class="wpcf7-form-control wpcf7-acceptance"><span class="wpcf7-list-item"><label><input type="checkbox" name="your-consent" value="1" required checked="checked"><span class="wpcf7-list-item-label">Zapoznałem się z <a href="">informacją o administratorze i przetwarzaniu danych.</a></span></label></span></span></span>-->
                        <script>
                            grecaptcha.ready(function() {
                                grecaptcha.execute('6Lcg1ZgUAAAAAHhbiqJo14zG2jtCO3e76kdUXKmH', {action: '../index.php'}).then(function(token) {
                                    ...
                                });
                            });
                        </script>
                        </div>
                            <p><input type="submit" value="Wyślij" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
                    </div>
                        <div class="clearfix"></div>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>