<?php
require_once "bootstrap.php";

use VacationApartments\Api\Listing;

// TODO: replace this with your listing id
const VA_LISTING_ID = "225387";

/**
 * @return mixed
 */
function getData() {

    $listing = new Listing();
    $listing = $listing->get(VA_LISTING_ID);

    return $listing;
}


$data = getData();
var_dump($data);
