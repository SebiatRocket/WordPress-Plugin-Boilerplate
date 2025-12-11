<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Oxy_Dropdown_Input_Component extends Oxy_Input_Component {

    function name() {
        return __( 'Dropdown Input', 'oxygen-form-builder' );
    }

    function slug() {
        return 'dropdown-input';
    }

    function icon() {
        return CT_FW_URI . '/toolbar/UI/oxygen-icons/panel/layers.svg';
    }

    function render( $options, $defaults, $content ) {
        $name = isset( $options['name'] ) ? esc_attr( $options['name'] ) : '';
        $required = isset( $options['required'] ) && $options['required'] == 'yes' ? 'required' : '';

        echo "<select name='{$name}' {$required}>";

        if ( isset( $options['options'] ) && is_array( $options['options'] ) ) {
            foreach ( $options['options'] as $option ) {
                $value = isset( $option['value'] ) ? esc_attr( $option['value'] ) : '';
                $label = isset( $option['label'] ) ? esc_html( $option['label'] ) : '';
                echo "<option value='{$value}'>{$label}</option>";
            }
        }

        echo "</select>";
    }

    function controls() {
        // Add name and required controls
        parent::controls();
        // Remove placeholder, not needed for dropdowns
        $this->remove_control('placeholder');

        $this->add_control(
            "options",
            array(
                "label"   => __("Options", "oxygen-form-builder"),
                "type"    => "list",
                "sub_controls" => array(
                    array(
                        "label" => __("Option Name", "oxygen-form-builder"),
                        "name"  => "label",
                        "type"  => "textfield",
                    ),
                    array(
                        "label" => __("Option Value", "oxygen-form-builder"),
                        "name"  => "value",
                        "type"  => "textfield",
                    ),
                ),
            )
        );
    }
}

new Oxy_Dropdown_Input_Component();
