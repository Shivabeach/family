<ul>
<?php
echo $statement;
foreach($done as $row){
	echo "<li>" . $row->relative - $row->family - $row->male - $row->female . "</li>";
}
echo "</ul>";