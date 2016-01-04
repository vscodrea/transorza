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
        <section class="well1 ins3">
          <div class="container">
            <h2><?php get_wording('page_about_us_who_are_we_title');?></h2>
            <div class="row off1">
              <div class="grid_6">
                <h3><?php get_wording('page_about_us_about_us_subtitle');?></h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Suspendisse commodo tempor sagittis!<br/><br/>In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pellentesque vitae tortor id neque fermentum pretium.</p>
                <hr>
                <h3><?php get_wording('page_about_us_what_we_offer_subtitle');?></h3>
                <div class="row">
                  <div data-wow-delay="0.2s" class="grid_3 wow fadeInLeft"><img src="images/page-2_img01.jpg" alt=""></div>
                  <div class="grid_3 wow fadeInLeft"><img src="images/page-2_img02.jpg" alt=""></div>
                </div>
                <p>Nam justo elit, dictum id tempus a, ultricies tempus lacus. Nunc purus nibh; eleifend eget facilisis ac, sagittis non tortor. Vivamus eu enim a orci accumsan tincidunt ut ut elit. Vestibulum nisi orci, rutrum ac auctor non, viverra et magna?</p>
              </div>
              <div class="grid_6">
                <h3><?php get_wording('page_about_us_our_team_subtitle');?></h3>
                <div class="row">
                  <div class="grid_2 wow fadeInRight"><img src="images/page-2_img03.jpg" alt=""><img src="images/page-2_img06.jpg" alt=""></div>
                  <div data-wow-delay="0.2s" class="grid_2 wow fadeInRight"><img src="images/page-2_img04.jpg" alt=""><img src="images/page-2_img07.jpg" alt=""></div>
                  <div data-wow-delay="0.4s" class="grid_2 wow fadeInRight"><img src="images/page-2_img05.jpg" alt=""><img src="images/page-2_img08.jpg" alt=""></div>
                </div>
                <p>Curabitur facilisis pellentesque pharetra. Donec justo urna, malesuada a viverra ac, pellentesque vitae nunc. Aenean ac leo eget nunc fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum, justo eget ultrices.</p>
                </div>
            </div>
          </div>
        </section>
        <section class="well1">
          <div class="container">
            <div class="row">
              <div class="grid_4">
                <h2>Item1</h2>
                <p>Aenean ac leo eget nunc fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum, justo eget ultrices vestibulum, erat tortor venenatis risus, sit amet cursus dui augue a arcu.</p>
              </div>
              <div class="grid_4">
                <h2>Item 2</h2>
                <p>Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum, justo eget ultrices vestibulum, erat tortor venenatis risus, sit amet cursus dui augue a arcu. Quisque mauris risus, gravida a molestie eu, dictum.</p>
              </div>
              <div class="grid_4">
                <h2>Item 3</h2>
                <p>Quisque mauris risus, gravida a molestie eu, dictum ac augue. Integer sodales tempor lectus; sit amet dictum metus pharetra nec. Fusce bibendum dapibus pretium. Nunc eu sem vitae lacus laoreet elementum.</p>
              </div>
            </div>
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