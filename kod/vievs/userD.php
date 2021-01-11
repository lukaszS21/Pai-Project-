<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/8268307b19.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../public/js/search.js" defer></script>
    <title>Home7</title>
</head>


<body>
<div class="container-start blue-background">
    <nav>
        <div class="container-logo">
            <div class="logo">
            </div>
        </div>
        <ul>

            <li><a href="home10" class="button">Twoje Zadania</a></li>
            <li><a href="home9" class="button">Historia</a></li>
            <li><a href="home5" class="button">Kontakt</a></li>
            <li><a href="menu" class="button">Menu</a></li>
            <div class="search-bar">

                <input placeholder="search project">

            </div>
        </ul>
        <p><a href="logout" class="button">Wyloguj</a> </p>
    </nav>

    <div class="kontakt">
        <div class="flex">
            <p>Kontakts: </p>


        </div>
            <section class="userD">

                    <div class="flex">
                        <p><?= $user->getEmail(); ?></p>

                    </div>

            </section>
        </div>



</body>
