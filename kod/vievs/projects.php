<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/projects.css">
    <script src="https://kit.fontawesome.com/8268307b19.js" crossorigin="anonymous"></script>
    <title>PROJECTS</title>
</head>

<body>
<div class="base-container">
    <nav>
        <img src="img/logo.svg">
        <ul>
            <li>
                <a hfer="#" class="button">Your Contacts</a>
            </li>
            <li>
                <a hfer="#" class="button">Your Work</a>
            </li>
            <li>
                <a hfer="#" class="button">History</a>
            </li>
            <li>
                <a hfer="#" class="button">Author</a>
            </li>
            <li>
                <a hfer="#" class="button">Contacts</a>
            </li>
        </ul>
    </nav>
    <main>
        <header>
            <div class="user">
                <i class="fas fa-user"></i>
            </div>
            <div class="search-bar">
                <form>
                    <input placeholder="search">
                </form>
            </div>
        </header>
        <section class="projects">
            <div id="project-1">
                <img src="public/uploads/<?=$project->getImage()?>">
                <div>
                    <h2><?=$project->getTitle()?></h2>
                    <p><?=$project->getDescription()?></p>
                    <div class="social">
                        <i class="fas fa-heart"> 600</i>
                        <i class="fas fa-minus-square"> 101</i>
                    </div>
                </div>
            </div>
            <div id="project-2">
                <img src="img/12.jpg">
                <div>
                    <h2>Title</h2>
                    <p>description</p>
                    <div class="social">
                        <i class="fas fa-heart"> 600</i>
                        <i class="fas fa-minus-square"> 101</i>
                    </div>
                </div>
            </div>
            <div> project 3</div>
            <div> project 4</div>

        </section>
    </main>
    </div>
</body>