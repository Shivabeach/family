<ul>
<?php 
	$this->load->database();
	$this->db->select("relative")->from("primary")->order_by("id","desc");
	$query = $this->db->get();
	if ($query->result()) {
		foreach ($query->result() as $row){
		echo "<li class='bright'>". $row->relative . "</li>";
		}	
	}
?>
</ul>