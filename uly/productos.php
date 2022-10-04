<?php  
    $lista = array(
        array(
            'nombre'=> 'A', 'estrellas' => 5, 'precio' => 123, 'descuento' => 0, 'stock' => 0
        ),
        array(
            'nombre'=> 'B', 'estrellas' => 1, 'precio' => 123, 'descuento' => 0, 'stock' => 1
        ),
        array(
            'nombre'=> 'C', 'estrellas' => 5, 'precio' => 123, 'descuento' => 10, 'stock' => 1
        ),
        array(
            'nombre'=> 'D', 'estrellas' => 4, 'precio' => 123, 'descuento' => 10, 'stock' => 1
        ),
        array(
            'nombre'=> 'E', 'estrellas' => 1, 'precio' => 123, 'descuento' => 10, 'stock' => 1
        ),
        array(
            'nombre'=> 'F', 'estrellas' => 2, 'precio' => 123, 'descuento' => 10, 'stock' => 1
        ),
        array(
            'nombre'=> 'G', 'estrellas' => 3, 'precio' => 123, 'descuento' => 10, 'stock' => 1
        ),
        array(
            'nombre'=> 'H', 'estrellas' => 1, 'precio' => 123, 'descuento' => 10, 'stock' => 1
        )
    )


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <?php require_once('_nav.php') ?>
        <p>MATERIAL, TALLE Y PRECIO DE FILTROS</p>
        <section class="py-5 bg-claro">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php if (count($lista) > 0){  ?>
                    <?php foreach($lista as $items) {  if ($items['stock'] > 0) { ?>
                    <div class="col mb-5">
                    <div class="card h-100">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">En venta</div>
                    <?php  } else { ?>
                    <div class="col mb-5">
                    <div class="card h-100 bg-s">
                    <div class="badge text-white position-absolute bg-nav" style="top: 0.5rem; right: 0.5rem">Sin stock</div>
                    <?php  } ?>               
                            <!-- Imagen del producto -->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Detalles del producto -->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Nombre del producto -->
                                    <h5 class="fw-bolder"> <?php echo $items['nombre']  ?> </h5>
                                    <!-- Valoracion de producto -->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <?php for($i = 0; $i < $items['estrellas']; $i++) {?>
                                        <div class="bi-star-fill"></div>
                                        <?php } ?>
                                    </div>
                                    <!-- Precio de producto -->
                                    <?php if ($items['descuento'] == 0){?>
                                    <span> <?php echo $items['precio']; } else {?> </span>
                                    <span class="text-muted text-decoration-line-through">
                                     <?php echo $items['precio'];?></span> <span><?php echo $items['precio'] - $items['descuento']; }?></span>

                                </div>
                            </div>
                            <!-- Acciones de producto -->
                            <?php  if ($items['stock'] > 0) { ?>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn bordes mt-auto" href="#">Añadir al carro</a></div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php }; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php require_once('_footer.php') ?>
</body>
</html>