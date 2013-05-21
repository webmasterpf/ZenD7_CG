<?php
/* 
 * Le header du site.Vient se placer après le <head>
 * Codé en HTML5
 * 
 */

?>
 <!-- ______________________ HEADER  CUSTOM_______________________ -->
    <header id="header">

		

        <div id="headHaut">

          <div id="logo-container">
	           <?php if (!empty($logo)): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
	          <?php endif; ?>
	       </div>

         <div id="menuImg">
              <?php if (!empty($page['navStatic'])): ?>
		           <?php print render ($page['navStatic']); ?>
	          <?php endif; ?>
          </div>

          </div><!-- /headHaut -->
		 <div id="headBas">

	 <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>

          
            <div id="search-container">
		  <?php if (!empty($page['search_box'])): ?>
		  <?php print render ($page['search_box']); ?>
		  <?php endif; ?>
		  </div><!-- /recherche -->

                 
          <nav id="menu-container">
     <?php if (!empty($page['menu_dyn'])): ?>
	   <?php print render ($page['menu_dyn']); ?>
      <?php endif; ?>
          </nav><!-- /menuHead -->


		</div><!-- /headBas -->

	       
    </header> <!-- /header -->