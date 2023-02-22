<?php
include("templates/header.php");
// include("bd.php")
// session_start();
?>
<link rel="shortcut icon" href="logo_prometalicos.png" type="image/x-icon">
<link rel="stylesheet" href="/css/estilos.css">
<!-- <img src="../logo_prometalicos.png" class="img-thumbnail" alt="..."> -->
<div class="container-fluid">
            <h6>Bienvenido:</h6>
           <!-- <?php echo  $_SESSION["solicitante"];?> -->
           <div class="row justify-content-center align-items-center g-2">
                        <div class="col"><h6>Solicitante<input type="text"></h6>
                        <div class="col"><h6>Nombre Solicitante<input type="text"></h6><div class="col"><h6>Sucursal<input type="text"></h6>
                        <div class="col"><h6>Departamento<input type="text"><br><input type="checkbox">Enviar Correo Electronico si se agrego pedido</h6><div class="col"><h6>Correo Electronico<input type="text"></h6></div></div>
                        </div></div>
                        </div>
                        
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"><h6>N°<input type="text"></h6>
                        <div class="col"><h6>Estado<input type="text"></h6><div class="col"><h6>Fecha Contabilizacion<input type="text"></h6>
                        <div class="col"><h6>Valido hasta<input type="text"></h6><div class="col"><h6>Fecha Documento<input type="text"></h6><div class="col"><h6>Fecha Necesaria<input type="text"></h6></div></div></div>
                        <button type="submit" class="btn btn-danger">Documento Referencia</button>
                        </div></div>
                        </div>
                    </div>
                
                                
      <div class="card-body">
            <div class="table-responsive-sm" >
                    <table class="table table-dark table-bordered" id="tablaid">
                        <thead>
                            <br>
                            <a name="" id="" class="btn btn-danger" href="./articulos.php" role="button">Ir a Articulos</a>
                            <tr>
                                <th scope="col">Descripcion</th>
                                <th scope="col">proveedor</th>
                                <th scope="col">Fecha necesaria</th>
                                <th scope="col">Cuenta mayor </th>
                                <th scope="col">precio_Info</th>
                                <th scope="col"> UEN</th>
                                <th scope="col">Linea</th>
                                <th scope="col">Sublinea</th>
                                <th scope="col">Nombre Cuenta Mayor</th>
                                <th scope="col">Proyecto</th>
                                <th scope="col">Porcentaje Descuento</th>
                                <th scope="col">Indicador Impuestos</th>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row"><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="date" name=""></td>
                                <td><input class="form-control" type="number" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <!-- <td><a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td> -->
                            </tr>
                            <tr class="">
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="date" name=""></td>
                                <td><input class="form-control" type="number" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <td><input class="form-control" type="" name=""></td>
                                <!-- <td><a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td> -->
                            </tr>
                        </tbody>
                    </table>
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col"><h6>Propietario<input type="text"></h6>
                        <div class="col"><h6>Comentario<input type="text"></h6></div>
                        </div>
                        
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"><h6>Total Antes del descuento<input type="text"></h6>
                        <div class="col"><h6>Gastos Adicionales<input type="text"></h6><div class="col"><h6>Impuesto<input type="text"></h6>
                        <div class="col"><h6>Total pago vencido<input type="text"></h6></div>
                        <button type="submit" class="btn btn-success">Enviar Solicitud</button>
                        </div></div>
                        </div>
                    </div>
                
                            
                
                </div>
        </div>
      
</div>
      <?php
      include("templates/footer.php");
      
    // print_r($_FILES);
    // $foto=(isset($_FILES['foto']['name']))?$_FILES['foto']['name']:"";
    // $pdf=(isset($_FILES['pdf']['name']))?$_FILES['pdf']['name']:"";
    // $fecha_foto=new DateTime();
    // $nombreArchivoFoto=($foto!='')? $fecha_foto->getTimestamp()." ".$_FILES["foto"]['name'];
    // $tmp_foto=$_FILES["foto"]['tmp_name'];
    // if ($tmp_foto!=""){
    //     move_uploaded_file($tmp_foto,"./".$nombreArchivoFoto);
    // }
    // $sentencia->bindParam(":foto",$nombreArchivoFoto);
    // $sentencia->bindParam(":pdf");
      ?>
      