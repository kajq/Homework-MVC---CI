<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>CRUD con CodeIgniter</title>
    </head>
    <body>
        <h2>Crud con CodeIgniter</h2>
        <?php
        //Si existen las sesiones flasdata que se muestren
            if($this->session->flashdata('correcto'))
                echo $this->session->flashdata('correcto');
             
            if($this->session->flashdata('incorrecto'))
                echo $this->session->flashdata('incorrecto');
        ?>
<table border="1">
    <form action="<?=base_url("usuarios_controller/add");?>" method="post">
        <tr>
            <td><label>Id</label></td>
            <td><label>Email</label></td>
            <td><label>Contraseña</label></td>
            <td><label>Nombre</label></td>
            <td><label>Apellido</label></td>
        </tr>
        <tr>
            <td></td>
            <td>
               <input type="email" name="email"/>
            </td>
            <td>
               <input type="password" name="password"/>
            </td>
            <td>
                <input type="text" name="nombre"/>
            </td>
            <td>
                <input type="text" name="apellido"/>
            </td>
            <td>
                <input type="submit" name="submit" value="Añadir" />
            </td>
        
        </tr>
    </form>
<?php
foreach($ver as $fila){
?>
    <tr>
        <td>
            <?=$fila->id_usuario;?>
        </td>
        <td>
            <?=$fila->email;?>
        </td>
        <td>
            <?=$fila->password;?>
        </td>
        <td>
            <?=$fila->nombre;?>
        </td>
        <td>
            <?=$fila->apellido;?>
        </td>
        <td>
            <a href="<?=base_url("usuarios_controller/mod/$fila->id_usuario")?>">Modificar</a>
            <a href="<?=base_url("usuarios_controller/eliminar/$fila->id_usuario")?>">Eliminar</a>
        </td>
    </tr>
<?php
    
}
?>
</table>
    </body>
</html>