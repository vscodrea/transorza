<!DOCTYPE html>
<html lang="en">
  <?php 
	include_once('./libs/autoload.php');
	include_once "./includes/header.tpl"; 
	?>
  <body>
	<!-- Core CSS file -->
	<link rel="stylesheet" href="css/photoswipe/photoswipe.css"> 

	<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
     In the folder of skin CSS file there are also:
     - .png and .svg icons sprite, 
     - preloader.gif (for browsers that do not support CSS animations) -->
	<link rel="stylesheet" href="css/photoswipe/default-skin/default-skin.css"> 

	<!-- Core JS file -->
	<script src="js/photoswipe/photoswipe.min.js"></script> 

	<!-- UI JS file -->	
	<script src="js/photoswipe/photoswipe-ui-default.min.js"></script> 
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
		 <?php
			
			include_once "./includes/photo_gallery.tpl";
		?> 
	  
		

        <section class="well1 ins2 mobile-center">
          <div class="container">
            <h2><?php get_wording('page_photo_gallery_title');?></h2>
			<br />
			<br />
			<div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
				<div class="row off2">
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_01.jpg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_01.jpg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_02.jpg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_02.jpg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_03.jpg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_03.jpg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_04.jpg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_04.jpg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_05.jpeg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_05.jpeg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_06.jpeg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_06.jpeg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					  <a href="images/gallery/image_07.jpg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_07.jpg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
					  <figcaption itemprop="caption description">Image caption 2</figcaption>
					</figure>
					
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					  <a href="images/gallery/image_08.jpg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_08.jpg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
					  <figcaption itemprop="caption description">Image caption 3</figcaption>
					</figure>
					
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					  <a href="images/gallery/image_09.jpg" itemprop="contentUrl" data-size="806x888">
							<img src="images/gallery/image_09.jpg" style="height: 130px;width: 87px;" itemprop="thumbnail" alt="Image description" />
						</a>
					  <figcaption itemprop="caption description">Image caption 4</figcaption>
					</figure>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_10.jpg" itemprop="contentUrl" data-size="806x888">
							<img src="images/gallery/image_10.jpg" style="height: 130px; width: 87px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_11.jpg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_11.jpg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_12.jpg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_12.jpg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_13.jpg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_13.jpg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_14.jpg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_14.jpg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_15.jpg" itemprop="contentUrl" data-size="806x888">
							<img src="images/gallery/image_15.jpg" style="height: 130px; width: 87px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="images/gallery/image_16.jpg" itemprop="contentUrl" data-size="806x888">
							<img src="images/gallery/image_16.jpg" style="height: 130px; width: 87px;" itemprop="thumbnail" alt="Image description" />
						</a>
						<figcaption itemprop="caption description">Image caption  1</figcaption>
					</figure>
					
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					  <a href="images/gallery/image_17.jpg" itemprop="contentUrl" data-size="806x888">
							<img src="images/gallery/image_17.jpg" style="height: 130px; width: 87px;" itemprop="thumbnail" alt="Image description" />
						</a>
					  <figcaption itemprop="caption description">Image caption 2</figcaption>
					</figure>
					
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					  <a href="images/gallery/image_18.jpg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_18.jpg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
					  <figcaption itemprop="caption description">Image caption 3</figcaption>
					</figure>
					
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					  <a href="images/gallery/image_19.jpg" itemprop="contentUrl" data-size="1334x888">
							<img src="images/gallery/image_19.jpg" style="width: 200px;" itemprop="thumbnail" alt="Image description" />
						</a>
					  <figcaption itemprop="caption description">Image caption 4</figcaption>
					</figure>
				</div>
			</div>
			<script type="text/javascript" src="js/photo_gallery.js" ></script>
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