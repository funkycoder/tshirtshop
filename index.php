<?php

// Include utility files
require_once 'include/config.php';
// Load ErrorHandler class
require_once BUSINESS_DIR.'ErrorHandler.php';
// Set the ErrorHandler
ErrorHandler::SetHandler();

// Load the app lication page template
require_once PRESENTATION_DIR . 'application.php';

// Load Smarty template file
$application = new Application();
// Display the page
$application->display('store_front.tpl');
// Try to load inexistent file
require_once 'inexistent_file.php';