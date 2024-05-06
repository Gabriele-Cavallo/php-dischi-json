<?php
$discs_json = file_get_contents('./dischi.json');
$discs = json_decode($discs_json, true);

header ('Content-Type: application/json');
echo json_encode($discs);
?>