<div id="stuck_container" class="stuck_container">
    <div class="container">
         <nav class="nav">
            <ul data-type="navbar" class="sf-menu">
				<li <?php if ('index.php' == $scriptName){?>class="active"<?php };?>>
					<a href="./">Acasa</a>
                </li>
                <li <?php if ('index-1.php' == $scriptName){?>class="active"<?php };?>>
					<a href="index-1.php">Despre noi</a>
					<ul>
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
					</ul>
                </li>
                <li <?php if ('index-2.php' == $scriptName){?>class="active"<?php };?>><a href="index-2.php">Galerie foto</a>
                </li>
                <li <?php if ('index-3.php' == $scriptName){?>class="active"<?php };?>><a href="index-3.php">Servicile noastre</a>
                </li>
                <li <?php if ('index-4.php' == $scriptName){?>class="active"<?php };?>><a href="index-4.php">Contact</a>
                </li>
              </ul>
			  <ul class="language_menu">
				<li class="current_language">
					<a href="#" class="language_menu_caption"><span class="language_menu_label">Deutsch</span> <img src="images/de-flag-icon.png"></a>
					<ul>
						<li>
							<a href="http://localhost/transorza/index-3.php" class="language_menu_caption"><span class="language_menu_label">English </span><img src="images/uk-flag-icon.png"></a>
						</li>
						<li>
							<a href="#" class="language_menu_caption"><span class="language_menu_label">Deutsch </span><img src="images/de-flag-icon.png"></a>
						</li>
						<li>
							<a href="#" class="language_menu_caption"><span class="language_menu_label">Română </span><img src="images/ro-flag-icon.png"></a>
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