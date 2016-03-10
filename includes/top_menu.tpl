<div id="stuck_container" class="stuck_container">
    <div class="container">
         <nav class="nav">
            <ul data-type="navbar" class="sf-menu">
				<li <?php if ('index.php' == $scriptName){?>class="active"<?php };?>>
					<a href="./"><?php get_wording('head_menu_home');?></a>
                </li>
                <li <?php if ('about-us' == $scriptName){?>class="active"<?php };?>>
					<a href="about-us"><?php get_wording('head_menu_about_us');?></a>
					<!--<ul>
						<li><a href="#">Lorem ipsum dolor</a></li>
						<li><a href="#">Conse ctetur adipisicing</a></li>
						<li>
							<a href="#">Elit sed do eiusmod
								<ul>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Conse adipisicing</a></li>
									<li><a href="#">Sit amet dolore</a></li>
								</ul>
							</a>
						</li>
						<li><a href="#">Incididunt ut labore</a></li>
						<li><a href="#">Et dolore magna</a></li>
						<li><a href="#">Ut enim ad minim</a></li>
					</ul>-->
                </li>
                <li <?php if ('photos' == $scriptName){?>class="active"<?php };?>><a href="photos"><?php get_wording('head_menu_photo_title');?></a>
                </li>
                <li <?php if ('our-services' == $scriptName){?>class="active"<?php };?>><a href="our-services"><?php get_wording('head_menu_our_services');?></a>
                </li>
                <li <?php if ('contact' == $scriptName){?>class="active"<?php };?>><a href="contact"><?php get_wording('head_menu_contact');?></a>
                </li>
              </ul>
			  <ul class="language_menu">
				<li class="current_language">
					<a href="#" class="language_menu_caption"><span class="language_menu_label"><?php get_wording('head_menu_language');?></span> <img src="images/<?php get_wording('head_menu_flag_path');?>"></a>
					<ul>
						<li>
							<a href="http://transorza.com" class="language_menu_caption"><span class="language_menu_label">English </span><img src="images/uk-flag-icon.png"></a>
						</li>
						<li>
							<a href="http://de.transorza.com#" class="language_menu_caption"><span class="language_menu_label">Deutsch </span><img src="images/de-flag-icon.png"></a>
						</li>
						<li>
							<a href="http://transorza.ro" class="language_menu_caption"><span class="language_menu_label">Română </span><img src="images/ro-flag-icon.png"></a>
						</li>
					</ul>
				</li>
			 </ul>
			<script type="text/javascript">
				$(document).ready(function() {
					$('.language_menu').dropit();
				});
			</script>
            </nav>
          </div>
</div>
