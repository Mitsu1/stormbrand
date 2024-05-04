<?php 

include_once('api.php');

function show_slider($params){

    $default = array(
        'slides' => '', 
    );
    $atts_for_swipper = array_intersect_key($params, $default);        
    $swipper_content = shortcode_atts($default, $atts_for_swipper);
    $slides = json_decode($swipper_content['slides'],true);
    
    $html_out = "
    <div class='swiper swiper-hero'>
    <div class='swiper-wrapper'>";
    
    foreach($slides as $slide){
        $category = $slide['category'];
        $class = $slide['class'];
        $title = $slide['title'];
        $text = $slide['text'];
        $images = pexels_api(array('total_pages'=> 1, 'id'=> $title,'size' => 'portrait','category' => $category));

        $html_out .="
            <div id = '$class-$category' class='swiper-slide' img_path = '{$images[$title]['image_path']}' alt='placeholder'>
                <div class = '$class-content'>
                    <h3 class = '$class-title'>$title</h3>
                    <p class = 'content-$class-text'>$text</p>
                </div>
            </div>";
    }
    $html_out .= "</div>
                <div class='swiper-pagination'></div>
            </div>";
    return $html_out;
    
        
}
add_shortcode('wp_slider','show_slider');
?>

