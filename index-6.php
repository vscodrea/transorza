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
      <main class="mobile-center">
        <section>
          <div class="container hr well1 ins2">
            <div class="row">
              <div class="grid_6">
                <div class="video">
                  <iframe src="//player.vimeo.com/video/37582125?wmode=transparent" allowfullscreen></iframe>
                </div>
              </div>
              <div class="grid_6">
                <h2><?php get_wording('page_about_us_film_title');?></h2>
                <div class="row">
                  <div class="grid_3">
                    <dl class="info">
                    <?php get_wording('page_about_us_film_description');?>                    
                    </dl>
                  </div>
                
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="well1">
          <div class="container">
            <div class="row">
             
            </div>
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