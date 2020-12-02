<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="img/logo.svg">
        </div>
        <div class="login-container">

        
             <form class="login" action="login" method="POST">
                 <div class="message">
                     <?php if(isset($messages))
                         {
                             foreach ($messages as $message) {
                                 echo $messages;
                             }
                         }
                         ?>
                 </div>
                <input name="email" type="email" placeholder="email@email.com">
                <input name="password" type="password" placeholder="password">
                <button type="submit">LOGIN</button>
             </form>
         </div>
    </div>
</body>