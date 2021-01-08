<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/8268307b19.js" crossorigin="anonymous"></script>
    <title>Home11</title>
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
            <li><a href="menu" class="button">Menu</a></li>
        </ul>
        <p><a href="home1" class="button">Wyloguj</a> </p>
    </nav>
        <div class="kontakt">
            <div class=flex2 >
                <p>Dodaj Zadanie:</p>
            </div>
            <form class="addProject_z" action="addProject_z" method="POST" ENCTYPE="multipart/form-data">
                <div class="flex2" >
                    <input name="name_z" type="text" placeholder="Nazwa zadania:">
                </div>
                <div class="flex2" >
                    <input name="data_z" type="text" placeholder="Na kiedy:">
                </div>
                <div class="flex2" >
                    <input type="text" placeholder="Kategoria:">
                </div>
                <div class="flex2" >
                    <p>Dodaj zdjecie:</p>
                </div>
                <div class="flex2" >
                    <input type="file" name="file">
                </div>
                <div class="flex2 ">
                    <textarea name="description" rows="5" placeholder="description"></textarea>
                </div>
                <div class="flex2" >
                    <button type="submit">send</button>
                </div>
            </form>
        </div>
    </div>
    </div>

</body>