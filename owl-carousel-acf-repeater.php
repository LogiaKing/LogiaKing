<!---Slider repeater--->
<div class="container-fluid">
   <div class="row">
	   
       <ul id="owl-demo owl-demo-home" class="owl-carousel-global owl-carousel owl-theme" style="padding: 0px !important;">
	   
      <?php if(get_field('text_carousel')): ?>
	    <?php while(has_sub_field('text_carousel')): ?>
			 
            <li class="owl-slide d-flex" style="background-image: url('<?php the_sub_field('slide_image'); ?>')"></li>
		   
	    <?php endwhile; ?>
      <?php endif; ?>		
      
       </ul>
   </div>
</div>
<!----> 
