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