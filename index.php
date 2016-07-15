<?php 
    include_once('./libs/autoload.php');
?>  
<!DOCTYPE html>
<html lang="<?php echo get_language();?>">
    <?php
        $metaDescriptionText = get_wording('meta_description_home', false);
        $pageTitle = get_wording('page_title_home', false);
        include_once "./includes/header.tpl"; 
    ?>
    <body>
        <?php 
            include_once('./includes/analyticstracking.php');
        ?>  
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

            <section class="well1">
              <div class="container">
                <div class="row">
                                    <div class="grid_4_2">
                                            <h2><?php get_wording('page_home_title');?></h2>
                                            <h3><?php get_wording('page_home_subtitle');?></h3>
                                            <img src="images/page-1_img011.jpg" alt="">
                                            <p class="txt-justify"><?php get_wording('page_home_text');?></p>
                                            <a href="about-us" class="btn"><?php get_wording('page_home_continue_button');?></a>
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
                                                                                    <address><?php get_wording('page_home_address');?></address>
                                                                            </div>
                                                                    </div>
                                                                    <div class="box">
                                                                            <div class="box_aside">
                                                                                    <div class="icon2 fa-envelope"></div>
                                                                            </div>
                                                                            <div class="box_cnt__no-flow">
                                                                                    <a href="mailto:<?php get_wording('page_home_email');?>">
                                                                                            <?php get_wording('page_home_email');?>
                                                                                    </a>
                                                                            </div>
                                                                    </div>
                                                                    <div class="box">
                                                                            <div class="box_aside">
                                                                                    <div class="icon2 fa-phone"></div>
                                                                            </div>
                                                                            <div class="box_cnt__no-flow">
                                                                                    <a href="tel:<?php get_wording('page_home_phone1');?>">
                                                                                            <?php get_wording('page_home_phone1');?>
                                                                                    </a>
                                                                                    <br />
                                                                                    <a href="tel:<?php get_wording('page_home_phone2');?>">
                                                                                            <?php get_wording('page_home_phone2');?>
                                                                                    </a>
                                                                            </div>
                                                                    </div>
                                                                    <div class="box">
                                                                            <div class="box_aside">
                                                                                    <div class="icon2 fa-fax"></div>
                                                                            </div>
                                                                            <div class="box_cnt__no-flow">
                                                                                    <a href="tel:<?php get_wording('page_home_phone3');?>">
                                                                                            <?php get_wording('page_home_phone3');?><br />(fax)
                                                                                    </a>
                                                                            </div>
                                                                    </div>
                                                                    <div class="box">
                                                                            <div class="box_aside">
                                                                                    <div class="icon2 fa-facebook"></div>
                                                                            </div>
                                                                            <div class="box_cnt__no-flow"><a href="https://www.facebook.com/transorza"><?php get_wording('page_home_fb_text');?></a></div>
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
            <?php
            include_once "./includes/footer.tpl"; 
            ?>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>