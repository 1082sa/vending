<?php 
	require 'get_value.php';
	$val = new get_value;
	$val->setven_num($_REQUEST['ven_num']);
	$val->setlocation_Latitude($_REQUEST['location_Latitude']);
    $val->setlocation_Longitude($_REQUEST['location_Longitude']);
    
    $status = $val->updateMachineWithLatLng();
    
	if($status == true) {
		echo "Updated...";
	} else {
		echo "Failed...";
	}
?>