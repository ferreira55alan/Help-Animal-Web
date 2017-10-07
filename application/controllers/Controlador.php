<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller{
    
    //Função que abre a pagina inicial do sistema.
    public function index(){
        $this->load->view("inicio");
    }
    public function adm(){
        $this->load->view("administrador");
    }
    
    
}





/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

