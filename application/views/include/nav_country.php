<h4 class="ten">Locations of Known Relatives</h4>
<p>This is a preliminary list of states that from Ancestry.com that we have positive proof of ancestry living in</p>
<ul>
<?php
$this->load->database();
		$this->db->select("country");
		$this->db->group_by("country", "asc");
		$query = $this->db->get("primary");
		if ($query->result())
		{
			foreach ($query->result() as $row)
			{
				echo "<li class='main-country'> $row->country </li>";
			}
		}?>		

</ul>
