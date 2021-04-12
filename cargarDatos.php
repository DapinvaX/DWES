<?php
session_start();
 
include "../php/conexion.php";
 
$sqlCargar="select * from pacientes;";
$resultadoCargar = mysqli_query($conexion,$sqlCargar);
if($resultadoMarca -> num_rows>0){
    $comboMarca= "";
    while($filaMarca = mysqli_fetch_array($resultadoCargar,MYSQLI_ASSOC)){
        $comboMarca.= "<option value='".$filaMarca['nombre']."'>".$filaMarca['nombre']."</option>";
    }
 
}
 
?>
 
 
<script type="text/javascript">
 
    function cargaCombo(){
 
        var marca = document.lote.marca.value;
        var cont=0;
 
        <?php
        $sqlProductos = "select * from producto where marca='<script>document.write(marca)</script>';";
        $resultadoProductos = mysqli_query($conexion,$sqlProductos);
        if($resultadoProductos -> num_rows>0){
            while($filaProductos = mysqli_fetch_array($resultadoProductos,MYSQLI_ASSOC)){
        ?>
            var s = document.lote.productos;
            var option=document.createElement('option');
 
            option.value="<?php echo $filaProductos['nombre']; ?>"
            option.text="<?php echo $filaProductos['nombre']; ?>";
 
            s.appendChild(option);
 
            cont++;
        <?php
            }
        }
        ?>
 
 
    }
 
</script>
 
 
 
<form action="#" method="POST" name="lote" id="lote">
    C&oacute;digo : <input type="text" name="codigo"><br>
    Fecha de fabricaci&oacute;n : <input type="text" name="nombre"><br>
    Fecha de vencimiento : <input type="text" name="precio"><br>
    Cantidad : <input type="text" name="cantidad"> unidades.<br>
 
    Marca :
    <select name="marca" id="marca" onchange="cargaCombo()">
        <option value="null"></option>
        <?php echo $comboMarca; ?>
    </select>
 
 
    Producto :
    <select name="productos" id="productos">
    </select>
 
    <br><br>
    <input type="submit" value="registrar lote" name="registrarLote" class="btn btn-primary btn-large">
</form>