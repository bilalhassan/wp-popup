<?php
/*
 * * 
 * @author bilal hassan <info@smartcatdesign.net>
 * 
 */
$color = get_option('sc_popup_color');
?>
<style type="text/css">
    .sc-popup-title{
        background: <?php echo $color;?>;
    }
    .sc-popup-cta a{
        color: <?php echo $color;?>;
    }
    #sc-popup input[type='text']:focus,
    #sc-popup input[type='email']:focus{
        border: 1px solid <?php echo $color;?>;
        box-shadow: 0 0 3px <?php echo $color;?>;
        -moz-box-shadow: 0 0 3px <?php echo $color;?>;
        -webkit-box-shadow: 0 0 3px <?php echo $color;?>;
    }
    #sc-popup input[type='submit']{
        background: <?php echo $color;?>;
    }
</style>
<div id="sc-popup-dim">
    <div id="sc-popup">
        <div id="sc-close"><img src="<?php echo plugins_url(); ?>/wp-timed-popup/images/close.png"/></div>
        <div class="sc-popup">
            <div class="sc-popup-title">
                <?php echo get_option('sc_popup_title'); ?>
            </div>

            <?php if(get_option('sc_popup_media_type') == 'video') : ?>
                <div class="sc-popup-media left <?php echo get_option('sc_popup_media_type'); ?>">
                    <?php echo get_option('sc_popup_media_link'); ?>
                </div>
            <?php elseif(get_option('sc_popup_media_type') == 'image') : ?>
                <div class="sc-popup-media left <?php echo get_option('sc_popup_media_type'); ?>">
                    <img src="<?php echo get_option('sc_popup_media_link'); ?>"/>
                </div>
            <?php endif; ?>
            
            <div class="left <?php echo get_option('sc_popup_media_type'); ?>">
                <div class="sc-popup-subtitle <?php echo get_option('sc_popup_media_type'); ?>">
                    <?php echo get_option('sc_popup_subtitle'); ?>
                </div>              
            </div>
            
            <div class="clear"></div>

            <div class="sc-popup-form">
                <?php echo do_shortcode(get_option('sc_popup_shortcode')); ?>
            </div>

            <div class="sc-popup-cta">
                <a href="<?php echo get_option('sc_popup_cta_url'); ?>" class="button"><?php echo get_option('sc_popup_cta_text'); ?></a>
            </div>  
            
        </div>
    </div>
</div>