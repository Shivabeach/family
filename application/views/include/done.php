<ul>
<?php 
	$this->load->database();

	$this->db->select("relative")->from("primary")->order_by("relative","asc");
	$num_results = $this->db->count_all_results();
	
	$this->db->select("relative")->from("primary")->order_by("relative","asc");
	$query = $this->db->get();
	
	if ($query->result()) {
		echo "<div class='bright'>$num_results </div>";
		foreach ($query->result() as $row){
			echo "<li class='bright'> - ".  $row->relative . "</li>";
		}	
	}
?>
</ul>