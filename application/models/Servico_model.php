<?php

#modelo que verifica usu�rio e senha e loga o usu�rio no sistema, criando as sess�es necess�rias

defined('BASEPATH') OR exit('No direct script access allowed');

class Servico_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('basico');
    }
       
    public function set_servico($data) {

        $query = $this->db->insert('Tab_Servico', $data);

        if ($this->db->affected_rows() === 0) {
            return FALSE;
        } else {
            #return TRUE;
            return $this->db->insert_id();
        }
    }    
    
    public function get_servico($data) {
        $query = $this->db->query('SELECT * FROM Tab_Servico WHERE idTab_Servico = ' . $data);
        $query = $query->result_array();

        return $query[0];
    }
    
    public function update_servico($data, $id) {

        unset($data['Id']);
        $query = $this->db->update('Tab_Servico', $data, array('idTab_Servico' => $id));
        /*
          echo $this->db->last_query();
          echo '<br>';
          echo "<pre>";
          print_r($query);
          echo "</pre>";
          exit ();
         */
        if ($this->db->affected_rows() === 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
	
	public function delete_servico($data) {        
		$query = $this->db->delete('Tab_Servico', array('idTab_Servico' => $data));

        if ($this->db->affected_rows() === 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
	
	public function lista_servico($x) {

        $query = $this->db->query('
            SELECT
                D.idTab_Servico,
                D.NomeServico,
				D.TipoServico,
                D.Convenio,
                D.ValorCompraServico,
				D.ValorVendaServico
            
            FROM
                Tab_Servico AS D
                    

            WHERE
                D.idSis_Usuario = ' . $_SESSION['log']['id'] . ' AND
                D.idTab_Modulo = ' . $_SESSION['log']['idTab_Modulo'] . '

            ORDER BY
                D.TipoServico DESC,
				D.Convenio DESC,
				D.NomeServico ASC
				
        ');

        /*
          echo $this->db->last_query();
          $query = $query->result_array();
          echo "<pre>";
          print_r($query);
          echo "</pre>";
          exit();
          */

        if ($query->num_rows() === 0) {
            return FALSE;
        } else {
            if ($x === FALSE) {
                return TRUE;
            } else {               
                $query = $query->result_array();
                return $query;
            }
        }
    }

    public function select_servico3($data = FALSE) {

        if ($data === TRUE) {
            $array = $this->db->query(
                'SELECT '
                    . 'idTab_Servico, '
                    . 'NomeServico, '
					. 'TipoServico, '
					. 'Convenio, '
					. 'ValorCompraServico '
                    . 'ValorVendaServico '
                    . 'FROM '
                    . 'Tab_Servico '
                    . 'WHERE '
                    . 'idSis_Usuario = ' . $_SESSION['log']['id'] . ' AND '
                    . 'idTab_Modulo = ' . $_SESSION['log']['idTab_Modulo'] );
        } else {
            $query = $this->db->query('SELECT idTab_Servico, NomeServico, TipoServico, ValorCompraServico, ValorVendaServico FROM Tab_Servico WHERE idSis_Usuario = ' . $_SESSION['log']['id']);
            
            $array = array();
            foreach ($query->result() as $row) {
                $array[$row->idTab_Servico] = $row->NomeServico;
            }
        }

        return $array;
    }

	public function select_servico2($data = FALSE) {

        if ($data === TRUE) {
            $array = $this->db->query(
                'SELECT                
				idTab_Servico,
				CONCAT(TipoServico, " --- ", Convenio, " --- ", NomeServico) AS NomeServico				
            FROM
                Tab_Servico
            WHERE
                idTab_Modulo = ' . $_SESSION['log']['idTab_Modulo'] . ' AND
                idSis_Usuario = ' . $_SESSION['log']['id'] . ' AND
                ORDER BY TipoServico DESC, Convenio DESC, NomeServico ASC'
    );
        } else {
            $query = $this->db->query(
                'SELECT                
				idTab_Servico,
				CONCAT(TipoServico, " --- ", Convenio, " --- ", NomeServico) AS NomeServico				
            FROM
                Tab_Servico
            WHERE
                idTab_Modulo = ' . $_SESSION['log']['idTab_Modulo'] . ' AND
                idSis_Usuario = ' . $_SESSION['log']['id'] . ' AND
                ORDER BY TipoServico DESC, Convenio DESC, NomeServico ASC'
    );

            $array = array();
            foreach ($query->result() as $row) {
                $array[$row->idTab_Servico] = $row->NomeServico;
            }
        }

        return $array;
    }
	
	public function select_servico($data = FALSE) {

        if ($data === TRUE) {
            $array = $this->db->query(
                'SELECT                
				idTab_Servico,
				CONCAT(TipoServico, " --- ", Convenio, " --- ", NomeServico, " --- R$", ValorCompraServico) AS NomeServico				
            FROM
                Tab_Servico
            WHERE
                idTab_Modulo = ' . $_SESSION['log']['idTab_Modulo'] . ' AND
                idSis_Usuario = ' . $_SESSION['log']['id'] . ' 
                ORDER BY TipoServico DESC, Convenio DESC, NomeServico ASC'
    );
        } else {
            $query = $this->db->query(
                'SELECT                
				idTab_Servico,
				CONCAT(TipoServico, " --- ", Convenio, " --- ", NomeServico, " --- R$", ValorCompraServico) AS NomeServico				
            FROM
                Tab_Servico
            WHERE
                idTab_Modulo = ' . $_SESSION['log']['idTab_Modulo'] . ' AND
                idSis_Usuario = ' . $_SESSION['log']['id'] . ' 
                ORDER BY TipoServico DESC, Convenio DESC, NomeServico ASC'
    );

            $array = array();
            foreach ($query->result() as $row) {
                $array[$row->idTab_Servico] = $row->NomeServico;
            }
        }

        return $array;
    }
    
}
