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
            <p><a href="home1" class="button">Wyloguj</a> </p>
        </nav>

        <div class="kontakt">
            <div class="flex">
                <p>Kontakts: </p>
                <p class="dodaj">
                    <a href="addProject" class="button">Dodaj osobę</a>
                </p>
                <p><a href="home8" class="button">Dodaj firmę</a> </p>
            </div>
            <div class="flex none">
                <d></d>
                <d>Kontakt: </d>
                <d>Imie </d>
                <d class="phone">Telefony</d>
            </div>

            <div id="project-1">
                <section class="projects">
                    <?php foreach($projects as $project): ?>
                        <div id="project-1">

                            <div class="flex">
                                <img src="../public/uploads/<?= $project->getImage(); ?>" width="100px" height="100px"
                                     style="border-radius: 50%;" />
                                <p><?= $project->getEmail(); ?></p>
                                <k><?= $project->getName(); ?></k>

                                <j><?= $project->getPhone(); ?></j>

                            </div>

                        </div>

                    <?php endforeach; ?>
                </section>
            </div>
        </div>


</body>
<div id="project-1">


    <template id="project-template">
        <div id="">

            <div class="flex">
                <img src="" width="100px" height="100px"
                style="border-radius: 50%;" />

                <p>email</p>
                <k>name</k>
                <j>phone</j>

            </div>
        </div>
    </template>