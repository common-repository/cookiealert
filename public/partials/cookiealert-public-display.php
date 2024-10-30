<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://prefectreturn.com
 * @since      1.0.0
 *
 * @package    Cookiealert
 * @subpackage Cookiealert/public/partials
 */
?>


<div class="js-cookie-consent wk-cookie-wrapper cookie-visible">

            <div class="wk-cookie-rt">
                <p>
				<?php 
				
				$message = str_replace('\\', '', $message);
				echo $message ; ?>
				<!-- We use cookies to personalize your experience. By continuing to visit this website you agree to our use of cookies. <a target="_blank" rel="noopener" href="#">Learn more about privacy policy</a> -->
				</p>
                <button class="wk-cookie-ok js-cookie-consent-agree"><?php echo $btn_text; ?></button>
            </div>
            <span class="wk-cookie-close"></span>
        </div>