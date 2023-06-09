<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Labase extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Persona');
    }
    public function index() 
    {
        $datos['personas'] = $this->Persona->seleccionar_todo();
        $this->load->view('base', $datos);
    }

    public function agregar()
    {
        $persona['nombre'] = $this->input->post('nombre');
        $persona['ap'] = $this->input->post('ap');
        $persona['am'] = $this->input->post('am');
        $persona['fn'] = $this->input->post('fn');
        $persona['genero'] = $this->input->post('genero');
        $this->Persona->agregar($persona);
        redirect('Labase');
    }

    public function eliminar($id_persona)
    {
        $this->Persona->eliminar($id_persona);
        redirect('Labase');
    }

    public function editar($id_persona)
    {
        $persona['nombre'] = $this->input->post('nombre');
        $persona['ap'] = $this->input->post('ap');
        $persona['am'] = $this->input->post('am');
        $persona['fn'] = $this->input->post('fn');
        $persona['genero'] = $this->input->post('genero');
	
        $this->Persona->actualizar($persona, $id_persona);
        redirect('Labase');
    }
}