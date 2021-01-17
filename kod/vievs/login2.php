<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/logowanie.css">
    <link rel="stylesheet" type="text/css" href="../public/css/media.css">
    <link rel="stylesheet" type="text/css" href="../public/css/animacje.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8268307b19.js" crossorigin="anonymous"></script>
    <title>Login2</title>
</head>


<body>
<div class="container-background-image">
    <div class="container-grid">
        <div class="container-logo">
            <div class="logo-form">
                <img src="img/logo.svg">
            </div>

        </div>
            <div class="form">
                <form class="login" action="login" method="POST">
                    <div class="messages">
                        <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <label for="login">Login:
                        <input name="email" type="email" placeholder="email@email.com"" /></label></br>
                    <div class="border"></div>
                    <label for="password">Password:
                        <input name="password" type="password" placeholder="password" /></label></br>
                    <div class="border"></div>

                    <button type="submit">Zaloguj</button>
                    <button><a href="register" class="button">Stwórz konto</a></button>
                </form>
            </div>
        </div>

    </div>
</body>