<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HolaMundo extends CI_Controller {

    /**
     *@abstract Controlador HolaMundo
     */
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper(array("url", "form"));
        //$this->load->helper("url");
        //$this->load->helper("form");
        $this->load->library("form_validation");
    }

    public function index()
    {
        echo "Hola, esto es CodeIgniter";
    }
    
    
    public function variablesoperadores()
    {
        $x = 5;
        $y = 3;
        $z = $x + $y;
        echo "<h2>Variables y operadores</h2>";
        echo "<br/>x=$x";
        echo "<br/>y=$y";
        echo "<br/>Suma=<strong>$z</strong>";
    }

    public function parametrosurl($filas=0, $dato=0)
    {
        $tabla = "";
        $tabla .= "<table border='1'>";
        $tabla .= "<tr>";
        $tabla .= "<th>Fila N°</th>";
        $tabla .= "<th>Dato * Número</th>";
        $tabla .= "</tr>";

        for($i = 1; $i <= $filas; $i++)
        {
            $operacion = $dato * $i; 
            $tabla .= "<tr>";
            $tabla .= "<td>$i</td>";
            $tabla .= "<td>$operacion</td>";
            $tabla .= "</tr>";
        }

        $tabla .= "</table>";
        echo $tabla;
    }
    
    public function inicio()
    {
        $this->load->view('vistainicio');
    }
    
    public function mostrarvista()
    {
        $this->load->view('vistapersona');
    }
    
    public function porcentajesalario()
    {
        $this->load->view('vistaporcentajesalario');
    }
    
    public function calcularporcentaje()
    {
        $this->form_validation->set_rules('txtSalario', 'Salario', 'trim|required|min_length[2]|max_length[20]|numeric|greater_than[10]|less_than[1000000]');
        $this->form_validation->set_rules('nbrPorcentaje', 'Porcentaje', 'trim|required|greater_than_equal_to[0]|less_than_equal_to[100]');
        
        $this->form_validation->set_message('required', 'El %s es requerido');
        $this->form_validation->set_message('numeric', 'El %s debe ser numérico');
        $this->form_validation->set_message('min_length', 'La longitud de %s es muy corta');

        if($this->form_validation->run() == FALSE)
        {
            $arrayRespuesta = [
                'mensaje' => 'Validación de datos'
            ];            
        }
        else
        {
            $salario = $this->input->post('txtSalario');
            $porcentaje = $this->input->post('nbrPorcentaje');
            
            $valorPorcentaje = $salario * $porcentaje / 100;
            
            $arrayRespuesta = [
                "mensajeExitoso" => "Valor porcentaje calculado",
                "valorPorcentaje" => $valorPorcentaje
                
            ];
        }
        $this->load->view('vistaporcentajesalario', $arrayRespuesta);
    }

    
    public function mostrardatos()
    {
        echo "Nombre: " . $this->input->post('txtNombre');
        echo "<br/>";
        echo "Edad: " . $this->input->post('txtEdad');
    }

}
















