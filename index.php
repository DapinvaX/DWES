<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
      #formulario{
        margin-top: 1.4cm;
        margin-left: 1cm;
      }
      #botones{
        margin-top: 3.7mm;
      }
      #titulo{
        margin-left: 15cm;
      }
      label{
        font-weight: bold;
        font-style: oblique;
        text-decoration: underline;
        margin-top: 5mm;
      }
    </style>
  </head>
  <body>
    <script>

        function mostrarInfoPaciente(id) {
        
          if (id== "") {
        
            document.getElementById("informacion").innerHTML = "";
        
            return;
        
          } else {
        
            var xmlhttp = new XMLHttpRequest();
        
            xmlhttp.onreadystatechange = function() {
        
              if (this.readyState == 4 && this.status == 200) {
        
                document.getElementById("informacion").innerHTML = this.responseText;
        
              }
            };

            xmlhttp.open("GET","getpaciente.php?id="+id,true);
            xmlhttp.send();
        
          }
        
        }

        
        
        </script>
        <h1 id="titulo"><b>Formulario</b></h1>
      
          
            
            <div id="botones">
              <button id="btnInsertar" name="Insertar" type="button" class="btn btn-primary">Insertar</button>
             <!--  <button id="btnModificar" name="Modificar" type="button" class="btn btn-primary" onclick="modificarPaciente()">Modificar</button>-->
             <!--  <button id="btnEliminar" name="Eliminar" type="button" class="btn btn-primary" onclick="eliminarPaciente()">Eliminar</button>-->
            </div>
          
          </form>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>