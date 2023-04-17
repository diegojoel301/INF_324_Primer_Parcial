<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Persona;

class Personas extends Controller{
    public function index()
    {
        $persona = new Persona();
        $datos['personas'] = $persona->orderBy('ci', 'ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie_pagina'] = view('template/piepagina');

        return view('personas/listar', $datos);
    }
    public function create()
    {
        $datos['cabecera'] = view('template/cabecera');
        $datos['pie_pagina'] = view('template/piepagina');
        return view("personas/crear", $datos);
    }
    public function guardar()
    {
        

        $ci = $this->request->getVar('carnet_identidad');
        $nombre_completo = $this->request->getVar('nombre_completo');
        $fecha_nacimiento = $this->request->getVar('fecha_nacimiento');
        $telefono = $this->request->getVar('telefono');
        $departamento = $this->request->getVar('departamento');

        $dep = "";

        if($departamento ==  'Chuquisaca')
        {
            $dep = "01";
        }
		if($departamento == 'La Paz')
        {
            $dep = "02";
        }
		if($departamento == 'Cochabamba')
        {
            $dep = "03";
        }
		if($departamento == 'Oruro')
        {
            $dep = "04";
        }
		if($departamento == 'Potosi')
        {
            $dep = "05";
        }
		if($departamento == 'Tarija')
        {
            $dep = "06";
        }
		if($departamento == 'Santa Cruz')
        {
            $dep = "07";
        }
		if($departamento == 'Beni')
        {
            $dep = "08";
        }
		if($departamento == 'Pando')
        {
            $dep = "09";
        }

        $persona = new Persona();

        
        $datos=[
            'nombre_completo' => $nombre_completo,
            'fecha_nacimiento' => $fecha_nacimiento,
            'telefono' => $telefono,
            'departamento' => $dep,
            'ci' => $ci,
        ]; 
        print_r($datos);
        $sql = "INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('%s', '%s', '%s','%s','%s')";
        $sql_cmd = sprintf($sql, @trim($this->escape_string($ci)), @trim($this->escape_string($nombre_completo)), @trim($this->escape_string($fecha_nacimiento)), @trim($this->escape_string($telefono)), @trim($this->escape_string($dep)));
        $persona->query($sql_cmd);

        

    }

    public function borrar($ci = null)
    {
        $persona = new Persona();

        $persona->where('ci', $ci)->delete($ci);

        return $this->response->redirect(site_url('/listar'));
    }

    public function editar($ci = null)
    {
        $persona = new Persona();

        $datos['persona'] = $persona->where('ci', $ci)->first();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie_pagina'] = view('template/piepagina');

        return view('personas/editar', $datos);
    }

    public function actualizar()
    {
        
        $ci = $this->request->getVar('carnet_identidad');
        $nombre_completo = $this->request->getVar('nombre_completo');
        $fecha_nacimiento = $this->request->getVar('fecha_nacimiento');
        $telefono = $this->request->getVar('telefono');
        $departamento = $this->request->getVar('departamento');

        $dep = "";

        if($departamento ==  'Chuquisaca')
        {
            $dep = "01";
        }
		if($departamento == 'La Paz')
        {
            $dep = "02";
        }
		if($departamento == 'Cochabamba')
        {
            $dep = "03";
        }
		if($departamento == 'Oruro')
        {
            $dep = "04";
        }
		if($departamento == 'Potosi')
        {
            $dep = "05";
        }
		if($departamento == 'Tarija')
        {
            $dep = "06";
        }
		if($departamento == 'Santa Cruz')
        {
            $dep = "07";
        }
		if($departamento == 'Beni')
        {
            $dep = "08";
        }
		if($departamento == 'Pando')
        {
            $dep = "09";
        }

        $persona = new Persona();

        $datos = ['nombre_completo' => $nombre_completo,
                'fecha_nacimiento' => $fecha_nacimiento,
                'telefono' => $telefono,
                'departamento' => $dep];
        
        $persona->update($ci, $datos);

        return $this->response->redirect(site_url('/listar')); 

    }

    public function escape_string($param) {
        if(is_array($param))
            return array_map(__METHOD__, $param);
    
        if(!empty($param) && is_string($param)) {
            return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $param);
        }
    
        return $param;
    }
    
    
}