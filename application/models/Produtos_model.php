<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Produtos_model extends CI_Model{
    
    public function getProdutos(){
        $query = $this->db->get('produtos');
        return $query->result();
    }


}


?>