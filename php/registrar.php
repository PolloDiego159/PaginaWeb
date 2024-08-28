<?php
include("con_db.php");
include("registro.html");

if (isset($_POST['resgistrar'])){
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['password']) >= 1
        ){
            $name = trim($_POST['nombre']);
            $correo = trim($_POST['correo']);
            $password = trim($_POST['password']);

            $consulta = "INSERT INTO datos(nombre, email, password)
                VALUES('$name', '$correo', '$password')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                <h3 class="ok">has inscripto correctamente!</h3>
                <?php
            }else {
                ?>
                <h3 class="bad">Ups ha ocurrido un error!</h3>
                <?php
            }
            }else{
            ?>
            <h3 class="bad">favor complete los campos!</h3>
            <?php
            }
}
    


?>