<?php

    function headband($params){
        $default = array('title' => '', 'text' => '');

        $atts_for_headband = array_intersect_key($params, $default);        
        $headband_content = shortcode_atts($default, $atts_for_headband);
        $headband = "
            <div class = 'headband'>
                <h4 class = 'headband-title'>
                    <strong>
                        {$headband_content['title']}
                    </strong>
                </h4>
                <div class = 'headband-text-container'>
                    <p class = 'headband-text'>{$headband_content['text']}</p>
                </div>
            </div>
        ";
        return $headband;
    }
    add_shortcode('wp_headband','headband');
?>