<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Server extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('server_model');
		$this->load->library('form_validation');
	}

	function index()
	{
		$data = $this->server_model->fetch_all();
		echo json_encode($data->result_array());
	}

	function insert()
	{
		$this->form_validation->set_rules('nama_ikan', 'nama_ikan', 'required');
		$this->form_validation->set_rules('jenis_ikan', 'jenis_ikan', 'required');
		$this->form_validation->set_rules('kualitas_air', 'kualitas_air', 'required');
		$this->form_validation->set_rules('perawatan', 'perawatan', 'required');
		$this->form_validation->set_rules('penyakit', 'penyakit', 'required');
		$this->form_validation->set_rules('pengobatan', 'pengobatan', 'required');
		if($this->form_validation->run())
		{
			$data = array(
				'nama_ikan'			=>	$this->input->post('nama_ikan'),
				'jenis_ikan'		=>	$this->input->post('jenis_ikan'),
				'kualitas_air'		=>	$this->input->post('kualitas_air'),
				'perawatan'			=>	$this->input->post('perawatan'),
				'penyakit'			=>	$this->input->post('penyakit'),
				'pengobatan'		=>	$this->input->post('pengobatan')
			);

			$this->server_model->insert_user($data);

			$array = array(
				'success'		=>	true
			);
		}
		else
		{
			$array = array(
				'error'					=>	true,
				'nama_ikan_error'		=>	form_error('nama_ikan'),
				'jenis_ikan_error'		=>	form_error('jenis_ikan'),
				'kualitas_air_error'	=>	form_error('kualitas_air'),
				'perawatan_error'		=>	form_error('perawatan'),
				'penyakit_error'		=>	form_error('penyakit'),
				'pengobatan_error'		=>	form_error('pengobatan')
			);
		}
		echo json_encode($array);
	}
	
	function fetch_single()
	{
		if($this->input->post('id'))
		{
			$data = $this->server_model->fetch_single_user($this->input->post('id'));

			foreach($data as $row)
			{
				$output['nama_ikan'] 	= $row['nama_ikan'];
				$output['jenis_ikan'] 	= $row['jenis_ikan'];
				$output['kualitas_air'] = $row['kualitas_air'];
				$output['perawatan'] 	= $row['perawatan'];
				$output['penyakit'] 	= $row['penyakit'];
				$output['pengobatan'] 	= $row['pengobatan'];
			}
			echo json_encode($output);
		}
	}

	function update()
	{
		$this->form_validation->set_rules('nama_ikan', 'nama_ikan', 'required');
		$this->form_validation->set_rules('jenis_ikan', 'jenis_ikan', 'required');
		$this->form_validation->set_rules('kualitas_air', 'kualitas_air', 'required');
		$this->form_validation->set_rules('perawatan', 'perawatan', 'required');
		$this->form_validation->set_rules('penyakit', 'penyakit', 'required');
		$this->form_validation->set_rules('pengobatan', 'pengobatan', 'required');
		if($this->form_validation->run())
		{	
			$data = array(
				'nama_ikan'			=>	$this->input->post('nama_ikan'),
				'jenis_ikan'		=>	$this->input->post('jenis_ikan'),
				'kualitas_air'		=>	$this->input->post('kualitas_air'),
				'perawatan'			=>	$this->input->post('perawatan'),
				'penyakit'			=>	$this->input->post('penyakit'),
				'pengobatan'		=>	$this->input->post('pengobatan')
			);

			$this->server_model->update_user($this->input->post('id'), $data);

			$array = array(
				'success'		=>	true
			);
		}
		else
		{
			$array = array(
				'error'						=>	true,
                'nama_ikan_error'		=>	form_error('nama_ikan'),
				'jenis_ikan_error'		=>	form_error('jenis_ikan'),
				'kualitas_air_error'	=>	form_error('kualitas_air'),
				'perawatan_error'		=>	form_error('perawatan'),
				'penyakit_error'		=>	form_error('penyakit'),
				'pengobatan_error'		=>	form_error('pengobatan')
			);
		}
		echo json_encode($array);
	}

	function delete()
	{
		if($this->input->post('id'))
		{
			if($this->server_model->delete_single_user($this->input->post('id')))
			{
				$array = array(

					'success'	=>	true
				);
			}
			else
			{
				$array = array(
					'error'		=>	true
				);
			}
			echo json_encode($array);
		}
	}

}
?>