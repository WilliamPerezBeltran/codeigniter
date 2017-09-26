

<h1>asfadfds</h1>


<table border="1">
    <tr>
        <td>id</td>
        <td>nombre</td>
        <td>telefono</td>
        <td>celular</td>
        <td>correo</td>
        <td>direccion</td>
        <td>pasatiempo</td>
    </tr>
    
    <?php foreach ($listar as $arreglo) { ?>
    <tr>
        <?php var_dump($arreglo['ID'] );?>
        <td><?php echo $arreglo['ID'] ; ?></td>
        <td><?php echo $arreglo['nombre'] ; ?></td>
        <td><?php echo $arreglo['telefono'] ; ?></td>
        <td><?php echo $arreglo['celular'] ; ?></td>
        <td><?php echo $arreglo['correo'] ; ?></td>
        <td><?php echo $arreglo['direccion'] ; ?></td>
        <td><?php echo $arreglo['pasatiempo'] ; ?></td>
        <td><a href="<?php echo site_url('taller/eliminar/'.$arreglo['ID']); ?>"><button>eliminar</button></a></td>
        <td><a href="<?php echo site_url('taller/editar/'.$arreglo['ID']); ?>"><button>editar</button></a></td>
    </tr>
    <?php } ?>
    
</table>


