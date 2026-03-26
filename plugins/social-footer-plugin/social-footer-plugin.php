<?php
/**
 * Plugin Name: Social Footer Plugin
 * Description: Adds social media icons at the bottom of every post/page.
 * Version: 1.0
 * Author: Manthan
 */

// جلوگیری از دسترسی مستقیم
if (!defined('ABSPATH')) {
    exit;
}

// Add social icons after content
function sfp_add_social_icons($content) {

    if (is_single() || is_page()) {

        $social_html = '
        <div style="margin-top:20px; text-align:center;">
            <p><strong>Follow Us:</strong></p>

            <a href="https://facebook.com" target="_blank" style="margin:10px;">
                <img src="https://cdn-icons-png.flaticon.com/24/733/733547.png" alt="Facebook">
            </a>

            <a href="https://instagram.com" target="_blank" style="margin:10px;">
                <img src="https://cdn-icons-png.flaticon.com/24/733/733558.png" alt="Instagram">
            </a>

            <a href="https://twitter.com" target="_blank" style="margin:10px;">
                <img src="https://cdn-icons-png.flaticon.com/24/733/733579.png" alt="Twitter">
            </a>

            <a href="https://linkedin.com" target="_blank" style="margin:10px;">
                <img src="https://cdn-icons-png.flaticon.com/24/733/733561.png" alt="LinkedIn">
            </a>
        </div>
        ';

        return $content . $social_html;
    }

    return $content;
}

// Hook into content
add_filter('the_content', 'sfp_add_social_icons');