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
            style="margin-top:50px"
        >
          <h4>¿Olvidó su contraseña?</h4>
           <div
            class="card border-primary"
           >
            
            <div class="card-body">

         Por favor, introduzca la dirección de correo electrónico que utilizó para registrarse. Recibirá un enlace temporal para restablecer su contraseña.
               
            <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Dirección de correo electrónico" aria-label="Recipient’s username" aria-describedby="basic-addon2">
  <span class="input-group-text bg-primary text-white" id="basic-addon2" type="button">ENVIAR ENLACE DE RESTABLECIMIENTO DE CONTRASEÑA</span>
</div>


            </div>
           </div>
           






        </div>
        














        </main>
        <footer    >




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
