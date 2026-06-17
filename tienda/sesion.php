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
          <link rel="stylesheet" href="css/style.css">
      </head>
   
      <body>
         <header>
           <?php include 'header2.php'  ?>
         </header>
         <main class="body2">
       
         <div
            class="container"
         >
         
         <h2>Iniciar sesión con su cuenta</h2>

         <div
            class="card border-primary "
            style="width:600px; margin-top:50px;margin-left:350px;background-color: #f1f1f1;text-align:center"
            
         >
            <div class="card-body">
               <div class="mb-3">
               <label for="" class="form-label" >Dirección de correo electrónico: </label> 
                  <input
                     type="text"
                     class="form-control"
                     name=""
                     id=""
                     aria-describedby="helpId"
                     placeholder=""
                     style="width:300px;margin:auto; padding: auto;"
                  />
                 
               </div>
               </h4>
              

            <div class="mb-3">
               <label for="" class="form-label" >Contraseña: </label>
               <input
                  type="text"
                  class="form-control"
                  name=""
                  id=""
                  aria-describedby="helpId"
                  placeholder=""
                  style="width:300px;margin:auto; padding: auto;"
               />
               
            </div>
            
             <p><a href="password.php">¿Olvidó su contraseña?</a></p>
               <button
                  type="button"
                  name=""
                  id=""
                  class="btn btn-primary"
               >
                  INICIAR SESION
               </button>
            <hr>
            <p><a href="registro.php">¿No tiene una cuenta? Cree una aquí</a></p>
             
            </div>

         </div>
         </div>
         














         </main>
         <footer>
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
   