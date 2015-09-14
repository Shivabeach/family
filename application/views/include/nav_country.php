<h3>Locations of Known Relatives</h3>
<ul class="accent">
<?php
$this->load->database();
		$this->db->select("country");
		$this->db->distinct();
		$this->db->order_by("country", "asc");
		$query = $this->db->get("primary");
		if ($query->result())
		{
			foreach ($query->result() as $row)
			{
				echo "<li class='main-country'> $row->country </li>";
			}
		}?>		

</ul>
