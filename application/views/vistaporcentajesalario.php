<!DOCTYPE html>
<!--
Vista para mostrar un formulario para ingresar el salario
de un empleado y calcular el porcentaje que se especifique
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Porcentaje salarios</title>
    </head>
    <body>
        <h2>Porcentaje salarios</h2>
        <p>Página para calcular porcentajes de salarios</p>
        
        <p>Seleccione una opción del menú</p>
        <a href="<? echo base_url() ?>index.php/holamundo/inicio">Inicio</a>
        |
        <a href="<? echo base_url() ?>index.php/holamundo/mostrarvista">Personas</a>
        |
        <a href="<? echo base_url() ?>index.php/holamundo/porcentajesalario">Porcentaje salario</a>
        |
        <a href="#" onclick="alert('CodeIgniter')">Acerca de</a>
        
        
        <h3>Ingreso de datos</h3>
        
        <?
        
        $arrayInputSalario = array(
            'name' => 'txtSalario',
            'id' => 'txtSalario',
            'maxlength' => '20',
            'value' => set_value('txtSalario'),
            'placeholder' => 'Ingrese salario',
            'title' => 'Ingrese salario',
            'style' => 'text-align:right; color:green;'
        );
        
        $arraySubmit = [
            'name' => 'btnCalcular',
            'id' => 'btnCalcular',
            'value' => 'Calcular porcentaje',            
        ];
        
        echo form_open('HolaMundo/calcularporcentaje');
            echo form_label('Salario', 'txtSalario');
            echo form_input($arrayInputSalario);
            echo "<br/>";
            echo form_label('Porcentaje', 'nbrPorcentaje');
            ?>
        <input type="number" name="nbrPorcentaje" 
               id="nbrPorcentaje" value="<? echo set_value('nbrPorcentaje') ?>" style="text-align:right; color:green;"/>
            %
            <br/>
        <?
            echo form_submit($arraySubmit);
        echo form_close();
        
        if(!empty($mensaje))
            echo "<h3>$mensaje</h3>";
        
        
        echo "<p>". validation_errors() ."</p>";
        
        if(!empty($mensajeExitoso))
            echo "<h3>$mensajeExitoso: $valorPorcentaje</h3>";
     
        ?>

    </body>
</html>
