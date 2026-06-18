
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"

        />
        <style>
         body{
            margin: 0;
         }

         ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 130px;
            background-color:white;
            position: fixed;
            height: 100%;
            overflow: auto;
            margin-top: 50px;
         }


         li a{
            color: black;
            display: block;
            text-decoration: none;
            padding: 8px 16px;
         }

       li a.active{
        background-color:rgb(203, 203, 248) ;
        color: blue;
       }

       li a:hover:not(.active){
        background-color: #f1f1f1;
        color: blue ;
       }


        </style>














    </head>

    <body style="background-color: rgb(241, 240, 240);">
        <header>
            <nav class="navbar navbar-expand navbar-light bg-dark fixed-top">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="#" aria-current="page"
                        >Home <span class="visually-hidden">(current)</span></a
                    >
                    <a class="nav-item nav-link" href="#">Home</a>

                   <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

          </div>


    
<a href="" style="color: white;margin-left: 1000px;">aqui</a>
            </nav>
         

        </header>


        <main>

           <ul>
              <li><a class="active" href="http://localhost/portafolio2/proyectos/tienda/app/index.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z"/>
</svg> Inicio</a></li>
              <li><a href="">Cliente</a></li>
              <li><a href="">Productos</a></li>
              <li><a href="">Facturacion</a></li>

           </ul>

              <div style="margin-left: 130px;padding: 1px 16px; height: 1000px;padding-top: 100px;">



               <div
                class="container"
               >


            <div
                class="container"
                style="margin-top: 50px;"
            >
               
            
              
<?php
$conexion= mysqli_connect("localhost", "root", "", "tienda")or die ("problema con la conexion");

 $registros= mysqli_query($conexion,"SELECT email FROM suscripciones") or die("problema de select: " . mysqli_error($conexion));
 while($reg=mysqli_fetch_array($registros)){
?>

 
 <div class='card '>
 
 <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-clipboard-data-fill' viewBox='0 0 16 16'>
  <path d='M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z'/>
  <path d='M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1'/>
</svg>

 
 
 <h4 class='card-title'> Nuevos Suscriptores </h4>
 <p class='card-text'>Correo:"; </p>
 
 <?php echo $reg['email'] ?> 
 
 <?php echo "<br>" ?>

 <?php echo "<hr>" ?>
 
<?php
 }
 mysqli_close($conexion);

?>


                











              </div>







        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
