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
                <a hfer="home5" class="button">Your Contacts</a>
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
        <section class="projects-form">
            <h1>UPLOAD</h1>
            <form class="addProject" action="addProject" method="POST" ENCTYPE="multipart/form-data">
                <?php if(isset($messages))
                {
                    foreach ($messages as $message) {
                        echo $messages;
                    }
                }
                ?>
                <input name="name" type="text" placeholder="name">
                <input name="email" type="text" placeholder="email">
                <input type="file" name="file">
                <input name="phone" type="text" placeholder="phone">
                <textarea name="description" rows="5" placeholder="description"></textarea>

                <button type="submit">send</button>
            </form>

        </section>
    </main>
</div>
</body>