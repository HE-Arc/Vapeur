<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="public/css/general.css" rel="stylesheet">
</head>
<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index">Vapeur</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route("about")}}">About</a>
                </li>
            </ul>

            <?php
            /*
            // Show appropriate navbar icons based on whether or not the user is logged in.
            if (!isset($_SESSION['userId'])) {
            ?>
                <ul class="navbar-nav me-right mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="login">
                            <span class="bi bi-box-arrow-in-right"></span>
                            <span class="d-sm-none">Sign-in</span>
                        </a>
                    </li>
                </ul>
            <?php
            }
            else {
            ?>
                <ul class="navbar-nav me-right mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href=""><span class="bi bi-person"></span> <?= htmlentities($_SESSION['username']); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= handleActivePage($title, 'Cart'); ?>" href="cart">
                            <span class="bi bi-cart"></span>
                            <span class="d-sm-none">Cart</span>
                            <span class="badge rounded-pill bg-danger" id="unseenGamesBadge"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">
                            <span class="bi bi-box-arrow-right"></span>
                            <span class="d-sm-none">Sign-out</span>
                        </a>
                    </li>
                </ul>
            <?php
            } */
            ?>
        </div>
    </div>
</nav>

@yield("content")
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
