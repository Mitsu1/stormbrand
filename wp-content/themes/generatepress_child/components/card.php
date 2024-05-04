<?php
    function card($params){

        $default = array('id'=> '', 'text'=>'', 'icon' => '', 'class' => '');

        $atts_for_card = array_intersect_key($params, $default);        
        $card_content = shortcode_atts($default, $atts_for_card);

        $card_form = "
            <div id = '{$card_content['id']}' class = 'card {$card_content['class']}'>
                <div class = 'card-content'>
                    <div class = 'card-icon'>
                        <span>
                            <i class='{$card_content['icon']} fa-xl'></i>
                        </span>
                    </div>
                    <div class = 'card-title'><strong>LOREM IPSUM DOLOR</strong></div>
                    <div class = 'card-text'>{$card_content['text']}</div>
                </div>
            </div>
        ";
        return $card_form;
    }
    add_shortcode('wp_card','card');
?>