   
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guppy extends CI_Controller {

	function index()
	{
		$this->load->view('guppy_view');
	}

	function action()
	{
		if($this->input->post('data_action'))
		{
			$data_action = $this->input->post('data_action');

			if($data_action == "Delete")
			{
				$api_url = "http://localhost/Rest_Client/server/delete";

				$form_data = array(
					'id'		=>	$this->input->post('id')
				);

				$client = curl_init($api_url);

				curl_setopt($client, CURLOPT_POST, true);

				curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);

				curl_close($client);

				echo $response;
			}

			if($data_action == "Edit")
			{
				$api_url = "http://localhost/Rest_Client/server/update";

				$form_data = array(
					'nama_ikan'		=>	$this->input->post('nama_ikan'),
					'jenis_ikan'	=>	$this->input->post('jenis_ikan'),
					'kualitas_air'	=>	$this->input->post('kualitas_air'),
					'perawatan'		=>	$this->input->post('perawatan'),
					'penyakit'		=>	$this->input->post('penyakit'),
					'pengobatan'	=>	$this->input->post('pengobatan'),
					'id'		    =>	$this->input->post('id')
				);

				$client = curl_init($api_url);

				curl_setopt($client, CURLOPT_POST, true);

				curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);

				curl_close($client);

				echo $response;

			}

			if($data_action == "fetch_single")
			{
				$api_url = "http://localhost/Rest_Client/server/fetch_single";

				$form_data = array(
					'id'		=>	$this->input->post('id')
				);

				$client = curl_init($api_url);

				curl_setopt($client, CURLOPT_POST, true);

				curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);

				curl_close($client);

				echo $response;
			}

			if($data_action == "Insert")
			{
				$api_url = "http://localhost/Rest_Client/server/insert";
			

				$form_data = array(
					'nama_ikan'		=>	$this->input->post('nama_ikan'),
					'jenis_ikan'	=>	$this->input->post('jenis_ikan'),
					'kualitas_air'	=>	$this->input->post('kualitas_air'),
					'perawatan'		=>	$this->input->post('perawatan'),
					'penyakit'		=>	$this->input->post('penyakit'),
					'pengobatan'	=>	$this->input->post('pengobatan'),
				);

				$client = curl_init($api_url);

				curl_setopt($client, CURLOPT_POST, true);

				curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);

				curl_close($client);

				echo $response;


			}

			if($data_action == "fetch_all")
			{
				$api_url = "http://localhost/Rest_Client/server";

				$client = curl_init($api_url);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);

				curl_close($client);

				$result = json_decode($response);

				$output = '';

				if(count($result) > 0)
				{
					foreach($result as $row)
					{
						$output .= '
						<tr>
							<td>'.$row->nama_ikan.'</td>
							<td>'.$row->jenis_ikan.'</td>
							<td>'.$row->kualitas_air.'</td>
							<td>'.$row->perawatan.'</td>
							<td>'.$row->penyakit.'</td>
							<td>'.$row->pengobatan.'</td>
							<td><butto type="button" name="edit" class="btn btn-warning btn-xs edit" id="'.$row->id.'">Edit</button></td>
							<td><button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row->id.'">Delete</button></td>
						</tr>
						';
					}
				}
				else
				{
					$output .= '
					<tr>
						<td colspan="4" align="center">No Data Found</td>
					</tr>
					';
				}

				echo $output;
			}
		}
	}
	
}

?>