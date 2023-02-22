<?php
include("templates/header.php");
// include("bd.php")
// session_start();
?>
<link rel="shortcut icon" href="logo_prometalicos.png" type="image/x-icon">
<link rel="stylesheet" href="/css/stilo.css">
<div class="container-fluid">

    <!-- <div class="p-5 mb-4 bg-light rounded-3"> -->
        <!-- <div class="container-fluid py-5"> -->
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
        <div class="scrollable">
            <!-- <style>
                .scrollable{
                    height: 450px;
                    overflow-x: auto;
                    position: relative;
                    border-color: red;
                    border-radius: 0px;
                    /* width: 1300px;
                    height: 500px; */
                }
                .scrollable::-webkit-scrollbar{
                    width: 0px;
                    border-radius: 40px;
                    border-color: red;
                }
                .scrollable::-webkit-scrollbar-thumb{
                    background-color: black;
                    width: 5px;
                    border-radius: 40px;
                    color: white;
                }
            </style> -->
            
            <div class="table-responsive-sm" >
                <table class="table table-dark table-bordered" id="tablaid">
                <a name="" id="" class="btn btn-danger" href="./index.php" role="button">Ir a Servicios</a>
                    <thead>
                        <div class="">
                        
                            
                        
                        <tr>
                            <th scope="col"># Articulo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">proveedor</th>
                            <th scope="col">Fecha necesaria</th>
                            <th scope="col">Cantidad </th>
                            <th scope="col">Porcentaje Descuento</th>
                            <th scope="col">Indicador Impuestos</th>
                            <th scope="col">Total</th>
                            <th scope="col"> UEN</th>
                            <th scope="col">Linea</th>
                            <th scope="col">Sublinea</th>
                            <th scope="col">Grupo de Productos</th>
                            <th scope="col">Codigo Unidad Medida</th>
                            <th scope="col">pais</th>
                            <th scope="col">Concepto Entrada</th>
                            <th scope="col">Concepto salida</th>
                            <th scope="col">Crea Diferido</th>
                            <th scope="col">Digito Verificacion Mandante</th>
                            <th scope="col">Documento Mandante</th>
                            <th scope="col">Tipo Ingreso Mandante</th>
                            <th scope="col">Dato Maestro</th>
                            <th scope="col">Documento Entrada</th>
                            <th scope="col">Id contrato mandante</th>
                            <th scope="col">Fecha Contrato</th>
                            <th scope="col">NIT 1</th>
                            <th scope="col">NIT 2</th>
                            <th scope="col">precio_Info</th>
                            <th scope="col">Matricula Mercantil Mandante 1</th>
                            <th scope="col">Matricula Mercantil Mandante 2</th>
                            <th scope="col">Primer Nombre Representante Legal</th>
                            <th scope="col">Segundo Nombre Representante Legal</th>
                            <th scope="col">Apellidos Representante Legal</th>
                            <th scope="col">Razon de Descuento</th>
                            <th scope="col">Imprimir</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Tipo Precio Referencia</th>
                            <th scope="col">Base Instalada</th>
                            <th scope="col">Vigencia Desde</th>
                            <th scope="col">vigencia Hasta</th>
                            <th scope="col">Cuotas Diferido</th>
                            <th scope="col">Codigo Articulo</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Unidad de Molde</th>
                            <th scope="col">Empleado</th>
                            <th scope="col">Fecha Modificacion</th>
                            <th scope="col">Unidades Producidas</th>
                            <th scope="col">Fecha Entrega</th>
                            <th scope="col">Socio de Negocio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--class=" table-light"> -->
                        <tr class="">
                            <td scope="row"><input class="form-control" type="number" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td><input class="form-control" type="date" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="number" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="number" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="date" name=""></td>
                            <td scope="row"><input class="form-control" type="number" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="number" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="number" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="date" name=""></td>
                            <td scope="row"><input class="form-control" type="date" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="date" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>
                            <td scope="row"><input class="form-control" type="date" name=""></td>
                            <td scope="row"><input class="form-control" type="text" name=""></td>

                            <!-- <td><a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td> -->
                        </tr>
                    </tbody>
                </div>
            </table>
        </div>
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
      