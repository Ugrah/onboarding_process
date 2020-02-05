<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('data.php');
require('functions.php');

if( isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strcasecmp($_SERVER['HTTP_X_REQUESTED_WITH'], 'xmlhttprequest') == 0) {

    // Get action request
    $action = $_POST['action'];

    // Get all cities
    if($action == 'getCities') {
        echo json_encode($cities);
    }

    // Get regions by city
    if($action == 'getRegionsCity') {
        $cityIndex = intval($_POST['cityID']);
        echo json_encode(getDataList($regions, 'city_id', $cityIndex));
    }

    // Get Activity Area
    if($action == 'getActivityArea') {
        echo json_encode($sectors);
    }

    // Get branch by activity area
    if($action == 'getBranch') {
        $activityAreaIndex = intval($_POST['activityAreaID']);

        echo json_encode(getDataList($branches, 'sector_id', $activityAreaIndex));
    }

    // Get sub branch by branch
    if($action == 'getSubBranch') {
        $branchIDIndex = intval($_POST['branchID']);

        echo json_encode(getDataList($subBranches, 'banch_id', $branchIDIndex));
    }
}