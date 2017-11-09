<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<?php $medias = rwmb_meta( 'bg_img', 'type=image&size=Facebookvertical'); 
foreach ( $medias as $media )
                { ?>
         <section class="page-title parallax overlay" style="background-image: url(<?php echo $media['url'] ?>);">  
            <div class="page-title-content"> 
                <div class="container">   
                    <div class="col-sm-12 text-center">
                    <?php echo rwmb_meta( 'wander_bn_text');?>                                           
                    </div> 
                </div>
            </div>    
        </section>
    <?php   } ?> 