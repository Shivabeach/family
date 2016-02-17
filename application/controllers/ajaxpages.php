<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxpages extends CI_Controller {

	public function __construct()
       {
            parent::__construct();
            $this->load->database();
        }

	public function inDatabase()
	{
		echo $this->db->count_all('primary');
	}

	public function ages()
	{
		$q = $this->db->select_avg('year')->get('primary');
		foreach ($q->result_array() as $row)
		{
		    $reply = $row['year'];
		    echo round($reply);
		}
	}

	public function level()
	{
		//$query = $this->db->select_avg('year')->get('primary');
		$q = $this->db->select_avg('level')->get('primary');
		foreach ($q->result_array() as $row)
		{
		    $reply = $row['level'];
		    echo round($reply);
		}

	}

	public function country()
	{
		$this->db->select('country as Country');
		$this->db->select('Count(country) as Number');
		$this->db->group_by('Country');
		$this->db->order_by('Number', 'desc');
		$query = $this->db->get('primary');
		echo '<table id="country" class="pure-table">';
			echo "<tr>
				<th>Country</th>
				<th>Number</th>
			</tr>";
		foreach($query->result() as $row)
		{
			echo "<tr>
				<td>$row->Country </td>
				<td>$row->Number</td>
				</tr>";
		}
		echo "</table>";
	}
//$sql = "SELECT `year` as Birth Year, COUNT(`year`)as count FROM `primary` group by `year` ";
//SELECT `country` as Country, COUNT(`country`) as Number FROM `primary` group by `country` ORDER BY `Number` DESC
}/* End of file ajaxpages.php */


/* Location: ./application/controllers/ajaxpages.php */