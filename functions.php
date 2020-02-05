<?php

function getDataList($array, $key, $value)
{
    $results = array();

    if (!is_array($array)) return false;

    foreach ($array as $subarray) {
        if($subarray[$key] == $value) {
            $results[] = $subarray;
        }
    }
    return $results;
}

function getSingleData($id, $array) {
    if (!is_array($array)) return false;

    $result = false;

    foreach ($array as $elmt) {
        if($elmt['id'] == $id) {
            $result = $elmt;
            break;
        }
    }

    return $result;
}

function getCity($id) {
    if (!is_array($cities)) return false;

    $result = false;

    foreach ($cities as $city) {
        if($city['id'] == $id) {
            $result = $city;
            break;
        }
    }

    return $result;
}

function getRegion($id) {
    if (!is_array($regions)) return false;

    $result = false;

    foreach ($regions as $region) {
        if($region['id'] == $id) {
            $result = $region;
            break;
        }
    }

    return $result;
}