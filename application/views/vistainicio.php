<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
    </head>
    <body>
        <h1>Bienvenido</h1>
        <p>Seleccione una opción del menú</p>
<!--        <a href="http://localhost:8080/CodeIgniter-3.1.0/index.php/holamundo/inicio">Inicio</a>
        |
        <a href="http://localhost:8080/CodeIgniter-3.1.0/index.php/holamundo/mostrarvista">Personas</a>
        |-->
        <a href="<? echo base_url() ?>holamundo/inicio">Inicio</a>
        |
        <a href="<? echo base_url() ?>holamundo/mostrarvista">Personas</a>
        |
        <a href="<? echo base_url() ?>index.php/holamundo/porcentajesalario">Porcentaje salario</a>
        |
        <a href="#" onclick="alert('CodeIgniter')">Acerca de</a>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
