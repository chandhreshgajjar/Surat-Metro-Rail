<?php 
	include ("connection.php");
		
		$track = $link->rawQuery("select * from track");
		
	$type = isset($_POST['type']) ? $_POST['type'] : "";
	
	if($link->count > 0){
		if($type == ""){
			foreach($track as $t){
				echo "<option value=".$t['line_id'].">" . $t['line_name'] . "</option>";
			}
		}
		else if($_POST['type'] == "stationName"){
			$station = $link->rawQuery("select * from stations where line_id=".$_POST['id']);
			foreach($station as $s){
				echo "<option value=" . $s['station_id'] . ">" . $s['station_name'] . "</option>";
			}
		}
	}
	
?>

