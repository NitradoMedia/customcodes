<?php
/**
 * Header & Footer Custom Codes
 * https://raselkhan.net
 * https://github.com/immdraselkhan
 */
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function header_footer_custom_codes_config() {
	$configarray = array(
    	"name" => "Header & Footer Custom Codes", // Display name for your module
    	"description" => "This module provides you to add custom HTML, CSS and JS codes to a WHMCS client area easily.", // Description displayed within the admin interface
    	"version" => "1.0 beta", // Version number
    	"author" => "<a href='https://github.com/immdraselkhan' target='_blank'>Md Rasel Khan</a>", // Module author name
    	"language" => "english", // Default language
    	"fields" => array(
    	        // a text field type allows for single line text input
                "head" => array (
                    "FriendlyName" => "Code in between &lt;head&gt;&lt;/head&gt; tag.", 
                    "Type" => "textarea", 
                    "Rows" => "10",
                    "Cols" => "100", 
                    "Description" => "Example: Google Analytics, Facebook Pixel, Live Chat code, etc.", 
                    "Default" => "", 
                ),
                "body" => array (
                    "FriendlyName" => "Code in between &lt;body&gt;&lt;/body&gt; tag.", 
                    "Type" => "textarea", 
                    "Rows" => "10",
                    "Cols" => "100", 
                    "Description" => "Example: Facebook Messenger Chat code, etc.", 
                    "Default" => "", 
                ),
                "footer" => array (
                    "FriendlyName" => "Code in between &lt;footer&gt;&lt;/footer&gt; tag.", 
                    "Type" => "textarea", 
                    "Rows" => "10",
                    "Cols" => "100", 
                    "Description" => "Example: Pinterest Developer code, etc.", 
                    "Default" => "", 
                ),
                "head-enable" => array (
                    "FriendlyName" => "Enable code in head?", 
                    "Type" =>  "yesno", 
                    "Size" => "55", 
                    "Description" => "A quick way to enable or disable the head code on your website.", 
                    "Default" => "yes", 
                ),
                "body-enable" => array (
                    "FriendlyName" => "Enable code in body?", 
                    "Type" =>  "yesno", 
                    "Size" => "55", 
                    "Description" => "A quick way to enable or disable the body code on your website.", 
                    "Default" => "yes", 
                ),
                "footer-enable" => array (
                    "FriendlyName" => "Enable code in footer?", 
                    "Type" =>  "yesno", 
                    "Size" => "55", 
                    "Description" => "A quick way to enable or disable the footer code on your website.", 
                    "Default" => "yes", 
                )
        	)
    );
	return $configarray;
}