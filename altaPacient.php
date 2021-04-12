<?php 


    require("conexion.php");
    require("cargarDatos.php");
    //Recupero las variables que me llegan por el metodo post
    //$nombre = $_POST['nombre];
    class datos{

        protected $nombre = $_POST['txnom'];
        protected $ape1 = $_POST['txape1'];
        protected $ape2 = $_POST['txape2'];
        protected $dni = $_POST['txdni'];
        protected $dir = $_POST['txdir'];
        protected $email = $_POST['txemail'];
        protected $tlf = $_POST['txtlf'];

        protected $accion = $_POST['accion'];

        function accionAlta(){
            if($accion=='alta'){


                altaPaciente();
        
            }
        }
    
        
    
            //$paciente = new Paciente ();
        //Accedo a la BD pacientes
        
    
        function altaPaciente(){
                //Saco los pacientes que ya están en la BD
                //$sql = "SELECT * FROM pacientes WHERE id=?";
    
    
                if (isset($nombre) and $nombre!="" and ($ape1) and $ape1!="" and ($ape2) and $ape2!="" and ($dni) and $dni!="" and $dir = $_POST['txdir'] and $email = $_POST['txemail'] and $tlf = $_POST['txtlf']){
    
    
    
                //Una vez obtenidos los registros de la tabla
    
                $sql = 'INSERT INTO pacientes (id, nom, ape1, ape2, dni);';
    
                }
        }
    
                /*
                
                //Validamos que hayan llegado estas variables, y que no esten vacias:
    if (isset($_POST["nombre"], $_POST["email"], $_POST["mensaje"]) and $_POST["nombre"] !="" and $_POST["email"]!="" and $_POST["mensaje"]!="" ){
    
    //traspasamos a variables locales, para evitar complicaciones con las comillas:
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    //Preparamos la orden SQL
    $consulta = "INSERT INTO mensajes
    (id,nombre,email,mensaje) VALUES ('0','$nombre','$email','$mensaje')";
    
    //Aqui ejecutaremos esa orden
    
    } else {
    
    echo '<p>Por favor, complete el <a href="formulario.html">formulario</a></p>';
                
                */ 
function modificarPaciente(){
                    $sql = "UPDATE pacientes WHERE id=?";
                }
            
function eliminarPaciente(){
                    $sql= "DELETE pacientes WHERE id=?";
                }
            
            }
        

?>