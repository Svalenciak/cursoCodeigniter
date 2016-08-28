<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Primera vista</title>
    </head>
    <body>
        <h2>Personas</h2>
        <p>Página para mostrar información de personas</p>
        
        <p>Seleccione una opción del menú</p>
<!--        <a href="http://localhost:8080/CodeIgniter-3.1.0/index.php/holamundo/inicio">Inicio</a>
        |
        <a href="http://localhost:8080/CodeIgniter-3.1.0/index.php/holamundo/mostrarvista">Personas</a>
        |-->
        <a href="<? echo base_url() ?>index.php/holamundo/inicio">Inicio</a>
        |
        <a href="<? echo base_url() ?>index.php/holamundo/mostrarvista">Personas</a>
        |
        <a href="<? echo base_url() ?>index.php/holamundo/porcentajesalario">Porcentaje salario</a>
        |
        <a href="#" onclick="alert('CodeIgniter')">Acerca de</a>
        
        <?php
            $saludo = "Hola gente";
            echo "<p>$saludo</p>";
        ?>
        
        <h3>Ingreso de datos</h3>
        <!--<form action="HolaMundo/mostrardatos">-->
        <?
        
        echo form_open('HolaMundo/mostrardatos');
        ?>
            <label for="txtNombre">Nombre</label>
            <input type="text" name="txtNombre" id="txtNombre" />
            <br/>
            <label for="txtEdad">Edad</label>
            <input type="text" name="txtEdad" id="txtEdad" />
            <br/>
            <input type="submit" value="Enviar datos" />
        <?
        echo form_close();
        //
        ?>
<!--        </form>-->
    </body>
</html>
