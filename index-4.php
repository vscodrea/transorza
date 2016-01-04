<!DOCTYPE html>
<html lang="en">
  <?php 
	include_once('./libs/autoload.php');
	include_once "./includes/header.tpl";
			
	?>
  
  <body>
    <div class="page">
      <!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
      <header>
        <?php
			include_once "./includes/title.tpl";
			include_once "./includes/top_menu.tpl";
			
		?>  
        
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
		 <section class="contact">
          <div class="container hr well1 ins2">
            <div class="row">
              <div class="grid_6">
                <div class="video" style="height: 400px;">
					<!-- <div id="google-map" class="map_model"></div>
					 <ul class="map_locations">
						<li data-y="47.831313" data-x="23.936792">
							<p>437160 Comuna Giulesti nr 450 Jud. Maramures</p>
						</li>
					</ul> -->
					<iframe width="640" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
						src="https://maps.google.fr/maps?f=q&source=s_q&hl=ro&geocode=&q=Giulesti, Romania, Trans Orza&ll=47.831313,23.936792&sspn=0.010484,0.01929&ie=UTF8&aq=&sll=47.831313,23.936792&t=m&z=14&iwloc=&output=embed">
					</iframe>
                </div>
              </div>
              <div class="grid_6">
                <h3><?php get_wording('page_contact_title');?></h3>
                <div class="row">
                  <div class="grid_3">
                    <dl class="info">
                      <dt><?php get_wording('page_contact_label_company_name');?></dt>
                      <dd>SC TRANS ORZA SRL</dd>
                      <dt><?php get_wording('page_contact_label_company_address');?></dt>
                      <dd><?php get_wording('page_contact_text_company_address');?></dd>
                      <dt><?php get_wording('page_contact_label_company_zipcode');?></dt>
                      <dd>437160</dd>
                    </dl>
                  </div>
                  <div class="grid_3">
                    <dl class="info">
                      <dt><?php get_wording('page_contact_label_company_phone_email');?></dt>
                      <dd>
                         <ul class="row contact-list">
							  <li class="grid_4">
								<div class="box">
									<div class="box_aside">
										<div class="icon2 fa-envelope"></div>
									</div>
									<div class="box_cnt__no-flow"><a href="mailto:#">info@transorza.ro</a></div>
								</div>
								<div class="box">
									<div class="box_aside">
										<div class="icon2 fa-phone"></div>
									</div>
									<div class="box_cnt__no-flow"><a href="callto:#">800-2345-6789</a></div>
								</div>
								<div class="box">
								  <div class="box_aside">
									<div class="icon2 fa-fax"></div>
								  </div>
								  <div class="box_cnt__no-flow"><a href="callto:#">800-2345-6790</a></div>
								</div>
							  </li>
                        </ul>
                      </dd>
                    </dl>
                  </div>
                </div>
				
              </div>
            </div>
          </div>
        </section>
		<!--<iframe width="640" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;geocode=&amp;q=15+All%C3%A9e+du+Mail,+La+Rochelle&amp;ll=46.155611,-1.165962&amp;sspn=0.010484,0.01929&amp;ie=UTF8&amp;aq=&amp;sll=46.155611,-1.165962&amp;t=m&amp;z=14&amp;iwloc=&amp;output=embed">
                                    </iframe>
		-->
        
        <section class="well1">
          <div class="container">
            <h2><?php get_wording('page_contact_label_contact_form');?></h2>
            <form method="post" action="bat/rd-mailform.php" class="mailform off2">
              <input type="hidden" name="form-type" value="contact">
              <fieldset class="row">
                <label class="grid_4">
                  <input type="text" name="name" placeholder="Numele dumneavoastra:" data-constraints="@LettersOnly @NotEmpty">
                </label>
                <label class="grid_4">
                  <input type="text" name="phone" placeholder="Telefon:" data-constraints="@Phone">
                </label>
                <label class="grid_4">
                  <input type="text" name="email" placeholder="Email:" data-constraints="@Email @NotEmpty">
                </label>
                <label class="grid_12">
                  <textarea name="message" placeholder="Mesaj:" data-constraints="@NotEmpty"></textarea>
                </label>
                <div class="mfControls grid_12">
                  <button type="submit" class="btn"><?php get_wording('page_contact_label_submit_form');?></button>
                </div>
              </fieldset>
            </form>
          </div>
        </section>
      </main>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      <footer>
        <section>
          <div class="container">
             <div class="copyright">Trans Orza S.R.L © <span id="copyright-year"></span>.&nbsp;&nbsp;<a href="index-5.php">Politica de Confidentialitate</a>
            </div>
          </div>
        </section>
      </footer>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>