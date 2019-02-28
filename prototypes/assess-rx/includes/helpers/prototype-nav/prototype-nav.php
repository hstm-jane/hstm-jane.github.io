
<?php

/*  =============================================================================
Create Site Start
========================================================================== */

function createPrototypeNav () {
	$list = array(); //main array
	

	 if ($handle = opendir('.')) {
    	while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
		 
		  $date = date ("m/d/y ", filemtime($file));
		 $thelist = array(
                'file' => $file, 
                'date' => $date);
                array_push($list, $thelist);
      }
		
		
    }
    closedir($handle);
  }
	
	//sort array by date column 
	$date = array();
	foreach ($list as $key => $row)
		{
			$date[$key] = strtotime($row['date']);
		}

	array_multisort($date, SORT_DESC, $list);
	
	

	
	
echo "<div class='nav-proto'>
<a href='#modal-proto' data-toggle='modal'><i class='fa fa-sitemap'></i></a>
<div id='modal-proto' class='modal fade'>
<div class='modal-dialog'>
<div class='modal-content'>
<div class='modal-header'>
<button type='button' class='close' data-dismiss='modal' aria-hidden='true'><i class='fa fa-times'></i></button>
<h4 class='modal-title'>Prototype Sitemap</h4>
</div>
<div class='modal-body'>
<label>Filter List</label>


<input type='text' placeholder='Type a word that would be in the URL (ex. admin, student, dev-ready)' class='filter-input-box form-control'>

<table class='prototype-directory' id='prototype-directory'>
<tbody>
<tr><th></th><th>Date Added</th></tr>";
	$count = count($list);
	
	 for($x = 0; $x < $count; $x++) { 

		 $string = "<tr>
	
					<td><a href='" . $list[$x]['file'] ."'>" .$list[$x]['file'] . "</a></td>
		
					<td class='mdate'>" . $list[$x]['date']. "</td>
		
				</tr>";
			 
	 		print_r($string);
		 
	 		};
			echo "
		
</tbody>
</table>
</div>
</div>

</div>

</div>

</div>";


}


?>