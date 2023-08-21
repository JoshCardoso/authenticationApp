<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Usuario</title>
</head>

<body>
    
    <div>
        <nav>
            <div>devchallenger</div>
            <div class="miniprofile">
                <img src="" alt="">
                <p><?= $_SESSION['name'];?></p>
                <ul>
                    <li></li>
                    <li><a href="../handle_db/logout.php">Logout</a></li>
                    <li></li>
                </ul>
            </div>
        </nav>
        <section>
            <div>
                <h1>Personal info</h1>
                <p>Basic info, like your name and photo</p>
            </div>
            <div class="conteudo">
                <div>
                    <div>
                        <h2>Profile</h2>
                        <p>Some info may visible to other people</p>
                    </div>
                    <div class="bEdit"><a href="#">Edit</a></div>
                </div>
                <div class="list">
                    <div class="category">
                        <p>PHOTO</p>
                    </div>
                    <div><img src="" alt=""></div>
                </div>
                <div class="list">
                    <div class="category">
                        <p>NAME</p>
                    </div>
                    <div><?= $_SESSION['name'];?></div>
                </div>
                <div class="list">
                    <div class="category">
                        <p>BIO</p>
                    </div>
                    <div><?= $_SESSION['bio'];?></div>
                </div>
                <div class="list">
                    <div class="category">
                        <p>PHONE</p>
                    </div>
                    <div><?= $_SESSION['phone'];?></div>
                </div>
                <div class="list">
                    <div class="category">
                        <p>EMAIL</p>
                    </div>
                    <div><?= $_SESSION['email'];?></div>
                </div>
                <div class="list">
                    <div class="category">
                        <p>PASSWORD</p>
                    </div>
                    <div>************</div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>

<?php if($_SESSION == null){
    header('location: login.php');
}
?>