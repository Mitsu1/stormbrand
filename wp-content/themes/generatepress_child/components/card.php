<?php
    function card($params){

        $default = array('params' => '');

        $atts_for_card = array_intersect_key($params, $default);        
        $card_content = shortcode_atts($default, $atts_for_card);

        $card_form = "
            <div class = 'card'>
                <div class = 'card-content'>
                    <div class = 'card-icon'><img src ='' /></div>
                    <div class = 'card-title'><strong>LOREM IPSUM DOLOR</strong></div>
                    <div class = 'card-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vivamus nibh massa, laoreet non sagittis a, rutrum et ipsum. Duis dolor lacus, psuere at tellus eget, facilisis aliquam tellus. Ut vel nunc iaculis, commodo libero</div>
                </div>
            </div>
        ";
        return $card_form;
    }
    add_shortcode('wp_card','card');