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
           <?php include 'header.php'  ?>
        </header>
        <main>


      <div
        class="container"
        style="margin-top:100px"
      >
        
      <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li
                data-bs-target="#carouselId"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="First slide"
            ></li>
            <li
                data-bs-target="#carouselId"
                data-bs-slide-to="1"
                aria-label="Second slide"
            ></li>
            <li
                data-bs-target="#carouselId"
                data-bs-slide-to="2"
                aria-label="Third slide"
            ></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img
                    src="img/1.jpg"
                    class="w-100 d-block"
                    alt="First slide"
                    style="height:450px"
                />
            </div>
            <div class="carousel-item">
                <img
                    src="img/2.jpg"
                    class="w-100 d-block"
                    alt="Second slide"
                     style="height:450px"
                />
            </div>
            <div class="carousel-item">
                <img
                    src="img/3.jpg"
                    class="w-100 d-block"
                    alt="Third slide"
                     style="height:450px"
                />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
      </div>


      </div>
      
      
<!-- ========== Start productos destcados ========== -->


<div
    class="container"
    style="margin-top:100px"
>


<h1 style="text-align:center">Productos Destacados</h1>

<div
    class="row "
>
    <div class="col-3">
      <div class="card" style="width: 18rem;">
  <img src="img/4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Camisa del mundial</h5>
    <p class="card-text">Compra antes del partido nnn</p>
    <a href="#" class="vista" data-bs-toggle="modal" data-bs-target="#modalId" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>  Vista rápida</a>
  </div>
</div>



    </div>
    <div class="col-3">Column</div>
    <div class="col-3">Column</div>
    <div class="col-3">Column</div>
</div>




</div>

<!-- ========== End productos destcados ========== -->



<!-- ========== Start publicidad de la tienda ========== -->

<div
    class="container"
    style="margin-top:200px"
>
    
<img
    src="img/6s.jpg"
    class="img-fluid rounded-top"
    alt=""
/>

<div
    class="card border-dark border1"
    
>
    
    <div class="card-body">
        <h4 class="card-title">Titulo publicitario</h4>
        <p class="card-text">aqui colocamos la publicidad personalizada del cliente</p>
    </div>
</div>







</div>







<!-- ========== End publicidad de la tienda ========== -->







































<!-- ========== Start model1 ========== -->

<!-- Modal trigger button -->


<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div
    class="modal fade"
    id="modalId"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    
    role="dialog"
    aria-labelledby="modalTitleId"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                   
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">

           <div
            class="row"
           >
            <div class="col">
           <img
            src="img/4.jpg"
            class="img-fluid rounded-top"
            alt=""
           />
           
            </div>
            <div class="col">
             <h2>Franela del mundial</h2>

           <h4>50€ <span class="span1">20% DE DESCUENTO</span></h4>  
           <p>Impuestos incluidos</p>
           <br>
           <p>Descripcion del producto ofrecido</p>

  <a href="">
           <button type="button" class="btn btn-primary button1"  ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
</svg> Comprar</button>
</a>





            </div>
            
           </div>
           




















            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>

<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(
        document.getElementById("modalId"),
        options,
    );
</script>





<!-- ========== End model1 ========== -->














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









       