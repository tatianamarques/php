
<?php
echo "<select>";


for ($i=date("Y"); $i > date("Y") - 100 ; $i--) { 
	echo '<option value="'.$i.'">'.$i.'</opition>';
}
echo "</select>";
?>