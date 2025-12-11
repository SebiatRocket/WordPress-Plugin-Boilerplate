<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include components only when Oxygen Builder is active
if ( class_exists( 'OxyEl' ) ) {
    require_once 'form-component.php';
    require_once 'input-component.php';
    require_once 'text-input.php';
    require_once 'email-input.php';
    require_once 'textarea-input.php';
    require_once 'dropdown-input.php';
}
