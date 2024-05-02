<?php
    include('api.php');

    function gallery($params){
        $image_left = pexels_api(array('total_pages'=> 1,'size' =>'large','id'=>['gallery-left'],));
        $images = pexels_api(array('total_pages'=> 4,'size' =>'medium', 'id'=> ['gallery-top-left','gallery-bottom-left','gallery-top-right','gallery-bottom-right']));

        $default = array('title' => '', 'text' => '');
        $atts_for_gallery = array_intersect_key($params, $default);        
        $gallery_content = shortcode_atts($default, $atts_for_gallery);

        $gallery = "
        <div class = 'gallery'>
            <div class = 'gallery-content'>
                <div class = 'gallery-left'>
                    <img src='{$image_left['gallery-left']['image_path']}' alt='Left' class = 'gallery-image'>
                </div>
                
                <div class = 'gtr-left' >
                    <img src='{$images['gallery-top-left']['image_path']}' alt='Top left' class = 'gallery-top-left gallery-image'>
                    <img src='{$images['gallery-bottom-left']['image_path']}' alt='Bottom left' class = 'gallery-bottom-left gallery-image'>
                </div>
                <div class = 'gtr-right'>
                    <img src='{$images['gallery-top-right']['image_path']}' alt='Top right' class = 'gallery-top-right gallery-image'>
                    <img src='{$images['gallery-bottom-right']['image_path']}' class = 'gallery-bottom-right gallery-image'>
                </div>
                </div>
        </div>
        ";
        return $gallery;
    }
    add_shortcode('wp_gallery','gallery');
?>