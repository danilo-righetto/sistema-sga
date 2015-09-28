<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Sga_dao extends CI_Model{
    
   public function insere($tabela=NULL, $dados=NULL){
   
       if($tabela == 'cliente'): 
           $insere = $this->db->insert($tabela, $dados);
       endif;       
       if($insere):
                   $id = $this->db->insert_id();
                   return $id;
        endif;
        
        if($tabela == 'aluno'):
           $insere = $this->db->insert($tabela, $dados);
        redirect('cliente/cadastro_aluno/'.$dados['cli_aluno']);
        if($insere):
            redirect('cliente/teste/'.$dados['cli_aluno']); 
        endif;
        endif;           
       
   }
   
   
   
}
