<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Projeto Login</title>
</head>

<body>
    <div class="display">
        <div class="login ">
            <div class="conteudo">
                <p>devcharllenges</p>
                <h3 class="titulo1">Join thousands of learners from around the world</h3>
                <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
                <form action="../handle_db/save_user.php" method="post">
                    <div class="bkInput">
                        <label for="email">
                            <span class="material-symbols-outlined">
                                mail
                            </span>
                        </label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="bkInput">
                        <label for="password">
                            <span class="material-symbols-outlined">
                                lock
                            </span>
                        </label>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="firstButton">Start coding now </button>
                </form>
                <div class="infLogin">
                    <p>or continue with these social profile</p>
                    <div class="redeSociais">
                        <a class="redes" href="#"><i class="fa-brands fa-google" style="color: #525252;"></i></a>
                        <a class="redes" href="#">
                            <p><i class="fa-brands fa-facebook" style="color: #525252;"></i></p>
                        </a>
                        <a class="redes" href="#"><i class="fa-brands fa-twitter" style="color: #525252;"></i></a>
                        <a class="redes" href="#"><i class="fa-brands fa-github" style="color: #525252;"></i></a>
                    </div>
                    <p>Adready a member?<a href="./views/login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>