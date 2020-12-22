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
            <section class="projects-form">
               <h1>UPLOAD</h1>
                <form action="addProject" method="POST" ENCTYPE="multipart/form-data">
                    <?php if(isset($messages))
                    {
                        foreach ($messages as $message) {
                            echo $messages;
                        }
                    }
                    ?>
                    <input name="title" type="text" placeholder="title">
                    <textarea name="description" rows="5" placeholder="description"></textarea>
                    <input type="file" name="file">
                    <button type="submit">send</button>
                </form>
                
            </section>
        </main>
    </div>
</body>