<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProcessData extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

	public function index(){
        $data_rekrutmen = 'http://103.226.55.159/json/data_rekrutmen.json';
        $data_atribut = 'http://103.226.55.159/json/data_attribut.json';
        $konten_data_rekrutmen = file_get_contents($data_rekrutmen);
        $konten_data_atribut = file_get_contents($data_atribut);
        //decode json data dari server ke array asosiatif
        $array_data_rekrutmen = json_decode($konten_data_rekrutmen, true);
        $array_data_atribut = json_decode($konten_data_atribut,true);
        $data   = array(
            'data_rekrutment' => $array_data_rekrutmen['Form Responses 1'],
            'data_atribut' => $array_data_atribut,
        );
		$this->load->view('showData',$data);
	}
}
