<?php

#@license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

defined('_JEXEC') or die;

?>

<div class="flexslider">
  <ul class="slides">
  	<?php
  		foreach($listofimages as $item){
  			echo $item;
  		}
  	?>
  </ul>
</div>

<script type="text/javascript" charset="utf-8">
  jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
       <?php if($params->get('fadeorslide') == 0){?> animation: "slide", <?php } else if ($params->get('fadeorslide') == 1){ ?> animation: "fade", <?php } ?>
    	 <?php if($params->get('directionNav') == 1){?> directionNav: true, <?php } else if ($params->get('directionNav') == 0){ ?> directionNav: false, <?php } ?>
    	 <?php if($params->get('controlNav') == 1){?> controlNav: true, <?php } else if ($params->get('controlNav') == 0){ ?> controlNav:false, <?php } ?>
    	 <?php if($params->get('keyboardNav') == 1){?> keyboardNav: true, <?php } else if ($params->get('keyboardNav') == 0){ ?> keyboardNav:false, <?php } ?>
       <?php if($params->get('direction') == 0){?> direction: "horizontal", <?php } else if ($params->get('direction') == 1){ ?> direction: "vertical", <?php } ?>
       <?php if($params->get('slidespeed')){ echo "slideshowSpeed:".$params->get('slidespeed')."," ;} else { ?> slideshowSpeed: 7000, <?php } ?>
       <?php if($params->get('animatespeed')){ echo "animationSpeed:".$params->get('animatespeed')."," ;} else { ?> animationSpeed: 600, <?php } ?>
       <?php if($params->get('randomorder') == 0){?> randomize: false <?php } else if ($params->get('randomorder') == 1){ ?> randomize: true <?php } ?>
    });
  });
</script>
