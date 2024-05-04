<?php
    include_once('api.php');

    function gallery($params){
        $default = array('title' => '', 'class' => '', 'total_grid' => 0, 'category' => '');
        
        $atts_for_gallery = array_intersect_key($params, $default);        
        $gallery_content = shortcode_atts($default, $atts_for_gallery);
        $images = pexels_api(array('total_pages'=> $gallery_content['total_grid'], 'id'=> $gallery_content['class'],'size'=>'portrait','category' => $gallery_content['category']));
        
        $gallery = "
            <div class = 'gallery'>
                <div id = '{$gallery_content['class']}' class = 'gallery-content'>
                    <div class = '{$gallery_content['title']}'>
                        <img src='{$images[$gallery_content['class']]['image_path']}' alt='{$gallery_content['class']}' class = 'gallery-image'>
                    </div>
                </div>
            </div>";
        return $gallery;
    }
    add_shortcode('wp_gallery','gallery');
?>