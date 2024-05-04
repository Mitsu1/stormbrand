<?php

function pexels_api($params){

    $base_url = 'https://api.pexels.com/v1/';
    
    $query = $params['category'];// Type of images
    $total_grid = $params['id']; //Img tag destination
    $per_page = $params['total_pages'];// Number of results per page
    $size = $params['size'];// Number of results per page
    $request_url = $base_url . 'search?query=' . urlencode($query) . '&per_page=' . $per_page . '&page=' . rand($per_page, 20);
    
    $headers = array(
        'Authorization' => 'C9DCogTCZ7zRc8zBite6R8OLpzaR6DqFyHBi0ZRhuDx2NkTNWtUa8RwE',
    );
    
    $images = array();
    $response = wp_remote_get($request_url, array('headers' => $headers));
    
    if (!is_wp_error($response) && $response['response']['code'] === 200) {
                
        $data = json_decode(wp_remote_retrieve_body($response), true);
            
        do  {
            foreach ($data['photos'] as $photo) {
                $images[$total_grid] =  array("image_path" => esc_url($photo['src'][$size]), "alt" => esc_attr($photo['id']));
            }
        } while(empty($data['photos']));
    } else {
        $images = array("error_msg" => 'Error to get data from Pexels.');
    }
    

    return $images;
}
?>
