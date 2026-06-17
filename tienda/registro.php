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
    </head>

    <body>
        <header>
             <?php include 'header.php'  ?>
        </header>
        <main>

       <div
        class="container"
       >
        <h2>Crear una cuenta:</h2>
       
        <div
            class="card border-dark"
            style="width:600px;margin-left:300px;    background-color:#f1f1f1"
        >
           
            <div class="card-body">
                
           <p>¿Ya tiene una cuenta? <a href="sesion.php"style=" text-decoration: none;">¡Inicie sesión!</a></p>

         <form class="row g-3">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Nombre">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="text" class="form-control" id="inputPassword2" placeholder="">

    
  </div>

     




  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Apellidos">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="text" class="form-control" id="inputPassword2" placeholder="">
  </div>
  

<div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="correo">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="text" class="form-control" id="inputPassword2" placeholder="">
  </div>
  



<div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Contraseña">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
 



<div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Fecha de nacimiento">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="date" class="form-control" id="inputPassword2" placeholder="">
    <div class="mb-3 form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> Recibir ofertas de nuestros socios</label>
  </div>
 
  <div class="mb-3 form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Acepto las condiciones </label>
  </div>
 
  <div class="mb-3 form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Suscribirse</label>
  </div>
 
  <div class="mb-3 form-check" >
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Privacidad de los datos</label>
  </div>
  </div>
 

 <button type="sumit" class="btn btn-primary" style="margin-left:385px;width:200px">GUARDAR</button>


</form>
          


       </div>
       


























        </main>
        <footer style="margin-top:0px">
             <?php include 'footer.php'  ?>
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
