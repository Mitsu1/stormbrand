<?php

    function gallery($params){
        $img_path = "/stormbrand/wp-content/uploads/2024/05";
        $default = array('title' => '', 'text' => '');

        $atts_for_gallery = array_intersect_key($params, $default);        
        $gallery_content = shortcode_atts($default, $atts_for_gallery);
        $gallery = "
        <div class = 'gallery'>
            <div class = 'gallery-content'>
                <div class = 'gallery-left'>
                    <img src='$img_path/grid_left.jpg' alt='Izquierda' class = 'gallery-image'>
                </div>
                
                <div class = 'gtr-left' >
                    <img src='$img_path/grid_left.jpg' alt='Top left' class = 'gallery-image'>
                    <img src='$img_path/grid_left.jpg' alt='Bottom left' class = 'gallery-image'>
                </div>
                <div class = 'gtr-right'>
                    <img src='$img_path/grid_left.jpg' alt='Top right' class = 'gallery-image'>
                    <img src='$img_path/grid_left.jpg' alt='Bottom right' class = 'gallery-image'>
                </div>
                </div>
        </div>
        ";
        return $gallery;
    }
    add_shortcode('wp_gallery','gallery');
?>