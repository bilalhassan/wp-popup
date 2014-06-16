<?php
/*
 * * 
 * @author bilal hassan <info@smartcatdesign.net>
 * 
 */
?>
<div id="sc-popup-dim">
    <div id="sc-popup">
        <div id="sc-close"><img src="<?php echo plugins_url(); ?>/wp-timed-popup/images/close.png"/></div>
        <div class="sc-popup">
            <div class="sc-popup-title">
                <?php echo get_option('sc_popup_title'); ?>
            </div>

            <div class="sc-popup-media left width50">
                <iframe width="560" height="315" src="//www.youtube.com/embed/666y56PpwoQ" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="left width50">
                <div class="sc-popup-subtitle">
                    <?php echo get_option('sc_popup_subtitle'); ?>
                </div>              
            </div>
            
            <div class="clear"></div>

            <div class="sc-popup-form">
                <?php echo do_shortcode('[mc4wp_form]'); ?>
            </div>

            <div class="sc-popup-cta">
                <a href="<?php echo get_option('sc_popup_cta_url'); ?>" class="button"><?php echo get_option('sc_popup_cta_text'); ?></a>
            </div>  


        </div>
    </div>
</div>