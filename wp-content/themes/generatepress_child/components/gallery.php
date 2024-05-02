<?php

    function gallery($params){
        $img_path = "/stormbrand/wp-content/uploads/2024/05";
        $default = array('title' => '', 'text' => '');

        $atts_for_gallery = array_intersect_key($params, $default);        
        $gallery_content = shortcode_atts($default, $atts_for_gallery);
        $gallery = "
            <div class = 'gallery-content'>
                <div class = 'gallery-left'>
                    <img src='$img_path/grid_left.jpg' alt='Izquierda' class = 'gallery-image'>
                </div>
                <div class = 'gallery-center'>
                    <div class = 'gallery-top-left'>
                        <div class = 'gtr-left' >
                            <img src='$img_path/grid_right.jpg' alt='Top left' class = 'gallery-image'></div>
                        <div class = 'gbr-left'>
                            <img src='$img_path/grid_right.jpg' alt='Bottom left' class = 'gallery-image'></div>
                        </div>
                    </div>
                </div>
                <div class = 'gallery-right'>
                    <div class = 'gallery-top-right'>
                        <div class = 'gtr-right'>
                            <img src='$img_path/grid_right.jpg' alt='Top right' class = 'gallery-image'></div></div>
                        <div class = 'gbr-right'>
                            <img src='$img_path/grid_right.jpg' alt='Bottom right' class = 'gallery-image'></div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        return $gallery;
    }
    add_shortcode('wp_gallery','gallery');
?>