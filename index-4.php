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
		 
		       
        <section class="well1">
          <div class="container">
            <h2><?php get_wording('page_contact_label_contact_form');?></h2>
			<h3><?php get_wording('page_contact_label_contact_form_subtitle');?></h3>
            <form method="post" action="bat/rd-mailform.php" class="mailform off2">
              <input type="hidden" name="form-type" value="contact">
              <fieldset class="row">
                <label class="grid_4">
                  <input type="text" name="name" placeholder="<?php get_wording('page_form_name_field');?>:" data-constraints="@LettersOnly @NotEmpty">
                </label>
                <label class="grid_4">
                  <input type="text" name="phone" placeholder="<?php get_wording('page_form_phone_field');?>:" data-constraints="@Phone">
                </label>
                <label class="grid_4">
                  <input type="text" name="email" placeholder="<?php get_wording('page_form_email_field');?>:" data-constraints="@Email @NotEmpty">
                </label>
                <label class="grid_12">
                  <textarea name="message" placeholder="<?php get_wording('page_form_message_field');?>:" data-constraints="@NotEmpty"></textarea>
                </label>
				 <label class="grid_12 borcan" style="display: none;">
                  <input type="text" class="borcan" name="borcan" >
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
     <?php
      	include_once "./includes/footer.tpl"; 
	?>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>