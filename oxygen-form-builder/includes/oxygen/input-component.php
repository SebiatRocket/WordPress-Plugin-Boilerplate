<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Oxy_Input_Component extends OxyEl {

    function button_place() {
        return "form_elements";
    }

    function controls() {

        $this->add_control(
            "name",
            array(
                "label" => __("Name", "oxygen-form-builder"),
                "type" => "textfield",
            )
        );

        $this->add_control(
            "placeholder",
            array(
                "label" => __("Placeholder", "oxygen-form-builder"),
                "type" => "textfield",
            )
        );

        $this->add_control(
            "required",
            array(
                "label" => __("Required", "oxygen-form-builder"),
                "type" => "radio",
                "value" => "no",
                "options" => array(
                    "yes" => __("Yes", "oxygen-form-builder"),
                    "no" => __("No", "oxygen-form-builder")
                )
            )
        );
    }
}
