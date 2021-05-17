DOBAR DAN IZ MOG POGLEDA<br />
<?php echo $this->viewbag["hello"]; ?><br />
<?php 
	foreach($this->viewbag["cars"] as $car){
		echo $car . "<br />";
	}
 ?>