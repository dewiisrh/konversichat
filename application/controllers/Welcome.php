<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	public function DataChat()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$tanggal=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('chat','tanggal',$tanggal)->row();
			$data['detail']['tanggal']= $tampil->tanggal;
            		$data['detail']['hari']= $tampil->hari;
            		$data['detail']['medsos']= $tampil->medsos;
            		$data['detail']['wa']= $tampil->wa;
            		$data['detail']['buy']= $tampil->buy;
            		$data['detail']['nobuy']= $tampil->nobuy;
			$data['content']='UpdateChat';
		}
		else
		{	
			$data['DataChat']=$this->MSudi->GetData('chat');
			$data['content']='Chat';
		}


		$this->load->view('VBackend',$data);
	}


	public function AddChat()
	{
		$data['content']='AddChat';
		$this->load->view('VBackend',$data);
	}
	public function AddDataChat()
	{
		 $add['tanggal']=$this->input->post('tanggal');
         	 $add['hari']= $this->input->post('hari');
         	 $add['medsos']= $this->input->post('medsos'); 
         	 $add['wa']= $this->input->post('wa'); 
         	 $add['buy']= $this->input->post('buy'); 
         	 $add['nobuy']= $this->input->post('nobuy');  
        	 $this->MSudi->AddData('chat',$add);
        	 redirect(site_url('Welcome/DataChat'));
	}



	public function UpdateDataChat()
	{
		 $tanggal=$this->input->post('tanggal');
		 $update['hari']= $this->input->post('hari');
         	 $update['medsos']= $this->input->post('medsos');
         	 $update['wa']= $this->input->post('wa');
         	 $update['buy']= $this->input->post('buy');
         	 $update['nobuy']= $this->input->post('nobuy');
          	 $this->MSudi->UpdateData('chat','tanggal',$tanggal,$update);
		 redirect(site_url('Welcome/DataChat'));
	}


	public function DeleteDataChat()
	{
		 $tanggal=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('chat','tanggal',$tanggal);
        	 redirect(site_url('Welcome/DataChat'));
	}

// 



	public function DataNobuy()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$no=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('nobuy','no',$no)->row();
			$data['detail']['no']= $tampil->no;
            		$data['detail']['tanggal']= $tampil->tanggal;
            		$data['detail']['hari']= $tampil->hari;
            		$data['detail']['alasan_nobuy']= $tampil->alasan_nobuy;
			$data['content']='Updatenobuy';
		}
		else
		{	
			$data['DataNobuy']=$this->MSudi->GetData('nobuy');
			$data['content']='nobuy';
		}


		$this->load->view('VBackend',$data);
	}


	public function AddNobuy()
	{
		$data['content']='AddNobuy';
		$this->load->view('VBackend',$data);
	}
	public function AddDataNobuy()
	{
		 $add['no']=$this->input->post('no');
         	 $add['tanggal']= $this->input->post('tanggal');
         	 $add['hari']= $this->input->post('hari'); 
         	 $add['alasan_nobuy']= $this->input->post('alasan_nobuy'); 
        	 $this->MSudi->AddData('nobuy',$add);
        	 redirect(site_url('Welcome/DataNobuy'));
	}



	public function UpdateDataNobuy()
	{
		 $no=$this->input->post('no');
		 $update['tanggal']= $this->input->post('tanggal');
         	 $update['hari']= $this->input->post('hari');
         	 $update['alasan_nobuy']= $this->input->post('alasan_nobuy');
          	 $this->MSudi->UpdateData('nobuy','no',$no,$update);
		 redirect(site_url('Welcome/DataNobuy'));
	}


	public function DeleteDataNobuy()
	{
		 $no=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('nobuy','no',$no);
        	 redirect(site_url('Welcome/DataNobuy'));
	}


	
	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}