<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 * Page d'accueil pour le site en HTML5
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region, below the main menu (if any).
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<div id="page">

 <?php
$theme_path = drupal_get_path('theme', 'zend7_cg');
include ($theme_path.'/templates/includes/header.inc');
?>
  <div id="main">
<!-- ______________________ LAYOUT HOMEPAGE PANORAMIQUE C.GRAWITZ_______________________ -->
 <!-- ______________________ CONTENU _______________________ -->
	
            <div class="container-hp">
                
 
          <?php if (!empty($page['content_top'])): ?>
           <div id="content-top" class="row-fluid content-top"> <?php print render($page['content_top']); ?> </div><!-- /#content-top -->
          <?php endif; ?>

<?php
$theme_path = drupal_get_path('theme', 'cyranod7_cg');
include ($theme_path.'/includes/inc_drupalMMHT.php');
?>          

   <!-- ______________________ ZONE DIAPO PANORAMIQUE _______________________ -->
 <div id="zone-dipao">
           <?php if (!empty($page['DiapoHP'])): ?>
                 <div id="HPDiapo"><?php print render ($page['DiapoHP']); ?></div>
              <?php endif; ?>
</div>

        
            
<!-- ______________________ PARTIE BAS GAUCHE _______________________ -->
<div  id="BasGaucheHP">
                 <?php if (!empty($page['HPBasGauche'])): ?>
                 <?php print render ($page['HPBasGauche']); ?>
              <?php endif; ?>


</div>

<!-- ______________________ PARTIE BAS DROITE _______________________ -->
<div id="BasDroitHP">

<?php if (!empty($page['HPBasDroit'])): ?>
  <?php print render ($page['HPBasDroit']); ?>
        <?php endif; ?>
</div>
 

     
	<!-- ______________________ CONTENU BAS _______________________ -->
   <div id="zone-bas">
    <?php if (!empty($page['content_bottom_home'])): ?>
    <div id="content-bottom-home">
      <?php print render ($page['content_bottom_home']); ?>
        <?php //print $feed_icons; ?>
         <?php endif; ?>


    </div><!-- /#content-bottom -->
</div>        

</div><!-- /container -->
	 

  </div><!-- /#main -->

 <?php
$theme_path = drupal_get_path('theme', 'zend7_cg');
include ($theme_path.'/templates/includes/footer.inc');
?>

</div><!-- /#page -->

<?php print render($page['bottom']); ?>
