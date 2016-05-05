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
                <section class="contact">
                    <div class="container  well1 ins2">
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
                                                            <div class="box_cnt__no-flow">
                                                                <a href="mailto:<?php get_wording('page_home_email');?>"><?php get_wording('page_home_email');?></a>
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