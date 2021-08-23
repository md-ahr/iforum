<!doctype html>
<html lang="en">
  <head>
    <title>iForum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Custom CSS v1.0.0 -->
    <link rel="stylesheet" href="./css/app.css">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
          <div class="container">
            <a class="navbar-brand" href="<?= htmlentities($_SERVER['PHP_SELF']) ?>">iForum</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= htmlentities($_SERVER['PHP_SELF']) ?>">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= htmlentities($_SERVER['PHP_SELF']) ?>/about.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="">Action 1</a>
                            <a class="dropdown-item" href="">Action 2</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= htmlentities($_SERVER['PHP_SELF']) ?>/contact.php">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= htmlentities($_SERVER['PHP_SELF']) ?>/signup.php">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= htmlentities($_SERVER['PHP_SELF']) ?>/login.php">Login</a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>

    <main class="main-section container my-5 pb-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://source.unsplash.com/500x400/?computer" class="card-img-top" alt="image" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, quos expedita. Quaerat ipsum reprehenderit doloremque accusantium, aspernatur eaque! Illum tempora id dolor, temporibus optio pariatur atque eveniet? Molestiae, assumenda cumque.</p>
                        <button class="btn btn-info text-light fw-bold py-2 px-4">See Details</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://source.unsplash.com/500x400/?cofee" class="card-img-top" alt="image" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, quos expedita. Quaerat ipsum reprehenderit doloremque accusantium, aspernatur eaque! Illum tempora id dolor, temporibus optio pariatur atque eveniet? Molestiae, assumenda cumque.</p>
                        <button class="btn btn-info text-light fw-bold py-2 px-4">See Details</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://source.unsplash.com/500x400/?design" class="card-img-top" alt="image" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, quos expedita. Quaerat ipsum reprehenderit doloremque accusantium, aspernatur eaque! Illum tempora id dolor, temporibus optio pariatur atque eveniet? Molestiae, assumenda cumque.</p>
                        <button class="btn btn-info text-light fw-bold py-2 px-4">See Details</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://source.unsplash.com/500x400/?architecture" class="card-img-top" alt="image" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, quos expedita. Quaerat ipsum reprehenderit doloremque accusantium, aspernatur eaque! Illum tempora id dolor, temporibus optio pariatur atque eveniet? Molestiae, assumenda cumque.</p>
                        <button class="btn btn-info text-light fw-bold py-2 px-4">See Details</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://source.unsplash.com/500x400/?basic" class="card-img-top" alt="image" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, quos expedita. Quaerat ipsum reprehenderit doloremque accusantium, aspernatur eaque! Illum tempora id dolor, temporibus optio pariatur atque eveniet? Molestiae, assumenda cumque.</p>
                        <button class="btn btn-info text-light fw-bold py-2 px-4">See Details</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-info text-light py-2 position-fixed bottom-0 w-100">
        <p class="small text-center mb-0">&copy; 2021 <a href="https://www.iamhalim.com">iamhalim.com</a> all rights reserved</p>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="./js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="./js/app.js"></script>
  </body>
</html>