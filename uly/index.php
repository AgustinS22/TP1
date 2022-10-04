<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>asdasdasdasdasdsa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- CSS de Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css"> 
    </head>
    <body>
        <!-- Nav -->
        <?php require_once('_nav.php') ?>
        <!-- Header-->
        <header class="bg-rosa py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Nombre Shop</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Eslogan o lo que sea</p>
                </div>
            </div>
        </header>
        <!-- Carousel -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/1.png" class="d-block w-80" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="img/1.png" class="d-block w-80" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/1.png" class="d-block w-80" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        <!-- asdasd -->

        <section>
            <div class="d-flex center">
            <img src="img/1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos libero consequatur officia perspiciatis ullam ratione repellat unde enim consectetur eaque, aliquam architecto quidem facere expedita neque eveniet in ipsum culpa. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore mollitia vitae laudantium? Veniam nobis, nam, iste, minima repellendus eos nisi mollitia fugit deleniti esse excepturi similique quibusdam voluptate hic? Quas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. A suscipit dolorum officia earum cupiditate magni itaque, culpa quia, temporibus unde quidem! Facilis molestias est sit mollitia ad possimus. Eaque, impedit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident necessitatibus magni at earum quae repudiandae doloremque dolor, veritatis voluptates consectetur, optio suscipit autem ratione deleniti in neque doloribus? Dicta, deserunt.</p>
            </div>
            <div class="d-flex center derecha">
            <img src="img/1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos libero consequatur officia perspiciatis ullam ratione repellat unde enim consectetur eaque, aliquam architecto quidem facere expedita neque eveniet in ipsum culpa. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore mollitia vitae laudantium? Veniam nobis, nam, iste, minima repellendus eos nisi mollitia fugit deleniti esse excepturi similique quibusdam voluptate hic? Quas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. A suscipit dolorum officia earum cupiditate magni itaque, culpa quia, temporibus unde quidem! Facilis molestias est sit mollitia ad possimus. Eaque, impedit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident necessitatibus magni at earum quae repudiandae doloremque dolor, veritatis voluptates consectetur, optio suscipit autem ratione deleniti in neque doloribus? Dicta, deserunt.</p>
            </div>
        </section>

        <!-- Footer-->
        <?php require_once('_footer.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
