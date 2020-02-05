<?php

$cities = [
    ['id' => 1, 'name' => 'Casablanca'],
    ['id' => 2, 'name' => 'Rabat'],
    ['id' => 3, 'name' => 'Agadir'],
    ['id' => 4, 'name' => 'Marrakech'],
    ['id' => 5, 'name' => 'Tanger'],
];

$regions = [
    ['id' => 1, 'name' => 'Region 11', 'city_id' => 1],
    ['id' => 2, 'name' => 'Region 12', 'city_id' => 1],
    ['id' => 3, 'name' => 'Region 13', 'city_id' => 1],
    ['id' => 4, 'name' => 'Region 14', 'city_id' => 1],
    ['id' => 5, 'name' => 'Region 21', 'city_id' => 2],
    ['id' => 6, 'name' => 'Region 22', 'city_id' => 2],
    ['id' => 7, 'name' => 'Region 23', 'city_id' => 2],
    ['id' => 8, 'name' => 'Region 24', 'city_id' => 2],
    ['id' => 9, 'name' => 'Region 31', 'city_id' => 3],
    ['id' => 10, 'name' => 'Region 32', 'city_id' => 3],
    ['id' => 11, 'name' => 'Region 33', 'city_id' => 3],
    ['id' => 12, 'name' => 'Region 34', 'city_id' => 3],
    ['id' => 13, 'name' => 'Region 41', 'city_id' => 4],
    ['id' => 14, 'name' => 'Region 42', 'city_id' => 4],
    ['id' => 15, 'name' => 'Region 43', 'city_id' => 4],
    ['id' => 16, 'name' => 'Region 44', 'city_id' => 4],
    ['id' => 17, 'name' => 'Region 51', 'city_id' => 5],
    ['id' => 18, 'name' => 'Region 52', 'city_id' => 5],
    ['id' => 19, 'name' => 'Region 53', 'city_id' => 5],
    ['id' => 20, 'name' => 'Region 54', 'city_id' => 5],
];

$sectors = [
    ['id' => 1, 'name' => 'Secteur 1'],
    ['id' => 2, 'name' => 'Secteur 2'],
    ['id' => 3, 'name' => 'Secteur 3'],
    ['id' => 4, 'name' => 'Secteur 4'],
];

$branches = [
    ['id' => 1, 'name' => 'Branche 11', 'sector_id' => 1],
    ['id' => 2, 'name' => 'Branche 12', 'sector_id' => 1],
    ['id' => 3, 'name' => 'Branche 13', 'sector_id' => 1],
    ['id' => 4, 'name' => 'Branche 21', 'sector_id' => 2],
    ['id' => 5, 'name' => 'Branche 22', 'sector_id' => 2],
    ['id' => 6, 'name' => 'Branche 23', 'sector_id' => 2],
    ['id' => 7, 'name' => 'Branche 31', 'sector_id' => 3],
    ['id' => 8, 'name' => 'Branche 32', 'sector_id' => 3],
    ['id' => 9, 'name' => 'Branche 33', 'sector_id' => 3],
    ['id' => 10, 'name' => 'Branche 41', 'sector_id' => 4],
    ['id' => 11, 'name' => 'Branche 42', 'sector_id' => 4],
    ['id' => 12, 'name' => 'Branche 43', 'sector_id' => 4],
];

$subBranches = [
    ['id' => 1, 'name' => 'Sous-branche 111', 'banch_id' => 1],
    ['id' => 2, 'name' => 'Sous-branche 112', 'banch_id' => 1],
    ['id' => 3, 'name' => 'Sous-branche 121', 'banch_id' => 2],
    ['id' => 4, 'name' => 'Sous-branche 122', 'banch_id' => 2],
    ['id' => 5, 'name' => 'Sous-branche 131', 'banch_id' => 3],
    ['id' => 6, 'name' => 'Sous-branche 132', 'banch_id' => 3],
    ['id' => 7, 'name' => 'Sous-branche 211', 'banch_id' => 4],
    ['id' => 8, 'name' => 'Sous-branche 212', 'banch_id' => 4],
    ['id' => 9, 'name' => 'Sous-branche 221', 'banch_id' => 5],
    ['id' => 10, 'name' => 'Sous-branche 222', 'banch_id' => 5],
    ['id' => 11, 'name' => 'Sous-branche 231', 'banch_id' => 6],
    ['id' => 12, 'name' => 'Sous-branche 232', 'banch_id' => 6],
    ['id' => 13, 'name' => 'Sous-branche 311', 'banch_id' => 7],
    ['id' => 14, 'name' => 'Sous-branche 312', 'banch_id' => 7],
    ['id' => 15, 'name' => 'Sous-branche 321', 'banch_id' => 8],
    ['id' => 16, 'name' => 'Sous-branche 322', 'banch_id' => 8],
    ['id' => 17, 'name' => 'Sous-branche 331', 'banch_id' => 9],
    ['id' => 18, 'name' => 'Sous-branche 332', 'banch_id' => 9],
    ['id' => 19, 'name' => 'Sous-branche 411', 'banch_id' => 10],
    ['id' => 20, 'name' => 'Sous-branche 412', 'banch_id' => 10],
    ['id' => 21, 'name' => 'Sous-branche 421', 'banch_id' => 11],
    ['id' => 22, 'name' => 'Sous-branche 422', 'banch_id' => 11],
    ['id' => 23, 'name' => 'Sous-branche 431', 'banch_id' => 12],
    ['id' => 24, 'name' => 'Sous-branche 432', 'banch_id' => 12],
];