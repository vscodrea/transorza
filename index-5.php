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
	   </header>
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
        <section class="well1">
          <div class="container">
            <h2><?php get_wording('page_terms_cond_title');?>Politica de confidentialitate</h2>
            <h3 class="off1 primary"><?php get_wording('page_terms_cond_text');?></h3>
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
    <script src="js/script.js"></script><!-- coded by Kirk -->
  </body>
</html>