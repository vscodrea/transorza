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
        <section class="camera_container">
          <div id="camera" class="camera_wrap">
            <div data-src="images/slider/page-1_slide01.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6"><!--Helping with any of your business needs!--></div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="images/slider/page-1_slide02.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6"><!--The best strategies to attract new business--></div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="images/slider/page-1_slide03.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6"><!--A wide range of global business information--></div>
                  </div>
                </div>
              </div>
            </div>
			<div data-src="images/slider/page-1_slide04.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6"><!--A wide range of global business information--></div>
                  </div>
                </div>
              </div>
            </div>
			<div data-src="images/slider/page-1_slide05.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6"><!--A wide range of global business information--></div>
                  </div>
                </div>
              </div>
            </div>
			
          </div>
        </section>
		<!--
        <section>
          <div class="container banner_wr">
            <ul class="banner">
              <li>
                <div class="fa-globe"></div>
                <h3>Global<br/>research</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
              <li>
                <div class="fa-lightbulb-o"></div>
                <h3>Creative<br/>ideas</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
              <li>
                <div class="fa-cog"></div>
                <h3>New<br/>services</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
              <li>
                <div class="fa-briefcase"></div>
                <h3>Pro<br/>management</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
            </ul>
          </div>
        </section> -->
		<!--
        <section class="well ins1">
          <div class="container hr">
            <ul class="row product-list">
              <li class="grid_6">
                <div class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-comments"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Incididunt ut labore et dolore</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.2s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-calendar-o"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Incididunt ut labore et dolore</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
              </li>
              <li class="grid_6">
                <div data-wow-delay="0.3s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-group"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Incididunt ut labore et dolore</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.4s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-thumbs-up"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Incididunt ut labore et dolore</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
	-->
        <section class="well1">
          <div class="container">
            <div class="row">
				<div class="grid_4_2">
					<h2><?php get_wording('page_home_title');?></h2>
					<?php get_wording('page_home_subtitle');?>
					<hr />
					<img src="images/page-1_img011.jpg" alt="">
					<p><?php get_wording('page_home_text');?>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					<a href="#" class="btn"><?php get_wording('page_home_continue_button');?></a>
				</div>
				<div class="grid_4">
					<div class="info-box">
						<ul class="row contact-list">
							<li class="grid_4">
								<div class="box">
									<div class="box_aside">
										<div class="icon2 fa-map-marker"></div>
									</div>
									<div class="box_cnt__no-flow">
										<address>Giulesti nr 450, Jud. Maramures, Romania<br/> D04 89GR</address>
									</div>
								</div>
								<div class="box">
									<div class="box_aside">
										<div class="icon2 fa-envelope"></div>
									</div>
									<div class="box_cnt__no-flow"><a href="mailto:#">info@demolink.org</a></div>
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
								<div class="box">
									<div class="box_aside">
										<div class="icon2 fa-facebook"></div>
									</div>
									<div class="box_cnt__no-flow"><a href="#">Follow on facebook</a></div>
								</div>
							</li>
						</ul>
                    </div>
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