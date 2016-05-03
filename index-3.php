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
        <section class="well bg-secondary2">
          <div class="container">
			<h2><?php get_wording('page_our_services_title');?></h2>
            <ul class="row product-list">
              <li class="grid_6">
                <div class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-star"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#"><?php get_wording('page_our_services_item1_title');?></a></h3>
                    <p><?php get_wording('page_our_services_item1_text');?></p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.3s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-star"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#"><?php get_wording('page_our_services_item2_title');?></a></h3>
                    <p><?php get_wording('page_our_services_item2_text');?></p>
                  </div>
                </div>
              </li>
              <li class="grid_6">
                <div data-wow-delay="0.2s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-star"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#"><?php get_wording('page_our_services_item3_title');?></a></h3>
                    <p><?php get_wording('page_our_services_item3_text');?></p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.4s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-star"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#"><?php get_wording('page_our_services_item4_title');?></a></h3>
                    <p><?php get_wording('page_our_services_item4_text');?></p>
                  </div>
                </div>
              </li>
            </ul>
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