<?php
$discs_json = file_get_contents('./dischi.json');
$discs = json_decode($discs_json, true);

$response = $discs;

if(isset($_GET['discChoice'])) {
    $discIndex  = intval($_GET['discChoice']);
    $response = $discs[$discIndex];
}

header ('Content-Type: application/json');
echo json_encode($response);
?>