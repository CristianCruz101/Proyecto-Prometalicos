<?php
session_start();
if($_POST){
    include("./bd.php");


    $sentencia=$conexion->prepare("SELECT *,count(*)as n_usuarios FROM usuarios WHERE solicitante=:solicitante AND password=:password");

    $solicitante=$_POST["solicitante"];
    $password=md5($_POST["password"]);

    $sentencia->bindParam(":solicitante",$solicitante);
    $sentencia->bindParam(":password", $password);
    $sentencia->execute();

    // $lista_usuarios=$sentencia->fetch(PDO::FETCH_LAZY);
    // print_r($lista_usuarios); 

    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    if($registro["n_usuarios">0]){
        
            $_SESSION["solicitante"]=$_registro["solicitante"];
        $_SESSION["logueado"]=true;
        header("location:index.php");
        }else{
        $mensaje="Error. El Usuario o la Contraseña son incorrectos.";
    }
}
?>

<!doctype html>
<html lang="en">
<div class="container-fluid">

    <head>
      <title>Inicio de Sesion</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS v5.2.1 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    </head>

    <body>
      <header>
        <!-- place navbar here -->
      </header>
      <main class="container">

        <div class="row">
        <div class="col-md-4">
        </div>
        <br><br>
        <div class="col-md-4">
            <div class="card">
                    <div class="card-header">
                        login
                    </div>
                    <div class="card-body">
                        <?php if(isset($mensaje)){ ?>
                            <div class="alert alert-danger" role="alert">
                                <strong><?php echo $mensaje; ?></strong>
                            </div>
                        <?php }?>
                        <form action="" method="post">
                            <div class="mb-3">
                              <label for="" class="form-label">Usuario</label>
                              <input type="text"
                                class="form-control" name="solicitante" id="solicitante"  placeholder="Escriba su Usuario">

                            <div class="mb-3">
                              <label for="" class="form-label">Contraseña</label>
                              <input type="password"
                                class="form-control" name="password" id="password" placeholder="Escriba su contraseña">
                                <br>
                                <button type="submit" class="btn btn-danger">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
      </main>
</div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>