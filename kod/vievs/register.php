<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/logowanie.css">
    <link rel="stylesheet" type="text/css" href="../public/css/animacje.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8268307b19.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>Home2</title>
</head>


<body>
    <div class="container-background-image">
        <div class="container-grid">

            <div class="container-logo">

                <div class="logo-form">
                    <img src="img/logo.svg">
                    <div class="rectangle">
                    </div>
                </div>

            </div>
            <div class="form">
                <form class="register" action="register" method="POST">
                    <div class="messages">
                        <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <input name="email" type="text" placeholder="email@email.com">
                    <input name="password" type="password" placeholder="password">
                    <input name="confirmedPassword" type="password" placeholder="confirm password">
                    <input name="name" type="text" placeholder="name">
                    <input name="surname" type="text" placeholder="surname">
                    <input name="phone" type="text" placeholder="phone">

                    <div style="text-align:center">
                        <button type="submit">Create an account</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>