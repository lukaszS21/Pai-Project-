<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/media.css">
    <link rel="stylesheet" type="text/css" href="../public/css/animacje.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/8268307b19.js" crossorigin="anonymous"></script>
    <title>Home12</title>
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
            <li><a href="home5" class="button">Kontakt</a></li>
            <li><a href="home9" class="button">Historia</a></li>
            <li><a href="menu" class="button">Menu</a></li>
            <li><a href="logout" class="button">Wyloguj</a></li>

        </ul>

    </nav>
    <div class="kontakt">
            <div class=flex >
                <p>Dodaj Osobę:</p>
            </div>
        <form class="addProject" action="addProject" method="POST" ENCTYPE="multipart/form-data">
            <div class="flex2" ">
                <input name="name" type="text" placeholder="name">
            </div>
              <div class="flex2" >
                <input name="email" type="text" placeholder="email">
            </div>
            <div class="flex2" >
                <input type="file" name="file">
            </div>
            <div class="flex2" ">
                <input name="phone" type="text" placeholder="phone">
            </div>
            <div class=flex2 >
                <input name="description" rows="3" placeholder="description"></input>
            </div>

            <div class="flex2" >
                <p><button type="submit">send</button> </p>
            </div>
        </form>
    </div>
</div>
</div>
</body>