<?php
    function banner($params){

        $default = array('images' => '');
        $img_path = "/stormbrand/wp-content/uploads/2024/05";

        $atts_for_banner = array_intersect_key($params, $default);        
        $banner_content = shortcode_atts($default, $atts_for_banner);
        $images = explode('*',$banner_content['images']);

        $banner_form = "
            <div class = 'banner'>
            <div class = 'banner-content'>";
            foreach($images as $image){
                $banner_form .= "<img src ='$img_path/$image.png' alt = '$image' class = 'banner-image'/>";
            }
            $banner_form .=  "
                </div>
            </div>";
        return $banner_form;
    }
    add_shortcode('wp_banner','banner');
?>