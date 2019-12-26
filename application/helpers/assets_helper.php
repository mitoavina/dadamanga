<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('img_destinations_url')){
    function img_destinations_url($fileName) {
        return base_url().'assets/img/destinations/'.$fileName.'.jpg';
    }
}

if(!function_exists('img_list_destination_url')){
    function img_list_destination_url($fileName) {
        return base_url().'assets/img/list_destination_page/'.$fileName.'.jpg';
    }
}

if(!function_exists('destination_url')){
    function destination_url($destinationName) {
        return base_url().'destinations/'.$destinationName;
    }
}

if(!function_exists('destination_url_carousel')){
    function destination_url_carousel($destinationName, $index) {
        return base_url().'assets/img/destination/'.$destinationName.'/carousel/'.$index.'.jpg';
    }
}

if(!function_exists('destination_url_multiple_cards')){
    function destination_url_multiple_cards($destinationName, $index) {
        return base_url().'assets/img/destination/'.$destinationName.'/multiple-cards/'.$index.'.jpg';
    }
}

if(!function_exists('destination_url_regions')){
    function destination_url_regions($destinationName, $regionName) {
        return base_url().'assets/img/destination/'.$destinationName.'/regions/'.$regionName.'.jpg';
    }
}

if(!function_exists('js_url')){
    function js_url($fileName) {
        return base_url().'assets/js/'.$fileName.'.js';
    }
}