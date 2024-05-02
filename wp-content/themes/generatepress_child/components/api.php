<?php

function pexels_api($params){

    $base_url = 'https://api.pexels.com/v1/';
    
    $query = 'nature';// Type of images
    $total_grid = $params['id']; //Img tag destination
    $per_page = $params['total_pages'];// Number of results per page
    $request_url = $base_url . 'search?query=' . urlencode($query) . '&per_page=' . $per_page . '&page=' . rand($per_page, 20);

    $headers = array(
        'Authorization' => 'pS5mChkG66DZPN1UCerdFxK0FYJaI3yQjRj2V4Nzns8ckDUWTXSRj6lg',
    );
    
    $counter = 0;
    $images = array();

    do {
        $response = wp_remote_get($request_url, array('headers' => $headers));
        if (!is_wp_error($response) && $response['response']['code'] === 200) {
            $data = json_decode(wp_remote_retrieve_body($response), true);
            if (!empty($data['photos'])) {
                foreach ($data['photos'] as $photo) {
                    $images[$total_grid[$counter]] =  array("image_path" => esc_url($photo['src']['portrait']), "alt" => esc_attr($photo['id']));
                    $counter++;
                }
            } else {
                sleep(5);
            }
        } else {
            $images = array("error_msg" => 'Error to get data from Pexels.');
        }
    } while (empty($images));

    return $images;
}
?>
