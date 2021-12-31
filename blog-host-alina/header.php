<?php
$user = $_SESSION['_user'];
if (isset($user)) {
    $login_menu_item = "<span class='text-white'> Hello " . $user["user_full_name"] . ' </span> (<a class="nav-item text-white" href="logout.php">Logout</a>)';
}

?>

<link rel="stylesheet" href="https://bootswatch.com/5/cosmo/bootstrap.min.css">

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Blog-Host</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.php">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="addpost.php">Add Post
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                </ul>
                <form action="" class="d-flex">
                    <?php if (isset($login_menu_item)) : ?>
                        <?= $login_menu_item ?>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </nav>
</header>