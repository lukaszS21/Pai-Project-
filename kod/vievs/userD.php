<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/user_d.css">
    <link rel="stylesheet" type="text/css" href="../public/css/animacje.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/8268307b19.js" crossorigin="anonymous"></script>

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
            <li><a href="projects" class="button">Twoje Kontakty</a></li>
            <li><a href="home10" class="button">Twoje Zadania</a></li>
            <li><a href="home9" class="button">Historia</a></li>
            <li><a href="home5" class="button">Kontakt</a></li>
            <li><a href="menu" class="button">Menu</a></li>
            <li><a href="logout" class="button">Wyloguj</a> </li>

        </ul>
       
    </nav>

    <div class="kontakt">
        <div class="flex">
            <p>Dane urzytkownika: </p>


        </div>
            <section class="userD">

                    <div class="flex3">
                        <v>Email:<?= $user->getEmail(); ?></v>
                        <v>Imie:<?= $user->getName(); ?></v>
                        <v>Nazwisko:<?= $user->getSurname(); ?></v>
                        <v>Telefon:<?= $user->getPhone(); ?></v>
                        <v>Twoje Id:<?= $user->getId(); ?></v>
                    </div>

            </section>
        </div>



</body>
