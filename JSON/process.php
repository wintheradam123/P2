<?php
$data = json_decode(file_get_contents("php://input"));
$name = (!empty($data->name)) ?$data->name:"err";
$address = (!empty($data->address))?$data->address:"err";
$city = (!empty($data->city))?$data->city:"err";
echo "data = ".$name." - ".$address. " - ".$city;
?>