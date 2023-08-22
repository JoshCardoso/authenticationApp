<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style2.css">
    <title>Usuario</title>
</head>

<body>

    <div>
        <nav>
            <div>devchallenger</div>
            <div class="miniprofile">
                <img src="" alt="">
                <p><?= $_SESSION['name']; ?></p>
                <ul>
                    <li>My Profile</li>
                    <li>Group Chat</li>
                    <li><a href="../handle_db/logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <section>
            <div>
                <div>
                    <a href="../views/usuario.php">&lt; Back</a>
                </div>
                <form action="../handle_db/edit_user.php" method="post" enctype="multipart/form-data">
                    <div class="conteudo">
                        <div class="margemCont">
                            <div>
                                <h2>Change info</h2>
                                <p>Changes will be reflected to every services</p>
                            </div>
                        </div>
                        <div class="imagem">
                            <div>
                                <img src="" alt="">
                                <input type="file" name="image" id="img">
                            </div>
                            <div class="category">
                                <p> CHANGE PHOTO</p>
                            </div>
                        </div>
                        <div class="margemCont">
                            <div>
                                <p>Name</p>
                            </div>
                            <div>
                                <input type="text" name='name' value="<?= $_SESSION['name']; ?>" class="name">
                            </div>
                        </div>
                        <div class="margemCont">
                            <div>
                                <p>Bio</p>
                            </div>
                            <div>
                                <input type="text" name='bio' value="<?= $_SESSION['bio']; ?>" class="bio">
                            </div>
                        </div>
                        <div class="margemCont">
                            <div>
                                <p>Phone</p>
                            </div>
                            <div>
                                <input type="text" name='phone' value="<?= $_SESSION['phone']; ?>" class="phone">
                            </div>
                        </div>
                        <div class="margemCont">
                            <div>
                                <p>Email</p>
                            </div>
                            <input type="email" name='email' value="<?= $_SESSION['email']; ?>" class="email">
                        </div>

                        <div class="margemCont">
                            <div>
                                <p>Password</p>
                            </div>
                            <div>
                                <input type="text" name='password' class="password">
                            </div>
                        </div>
                        <button type="submit">Save</button>
                    </div>

                </form>
            </div>
        </section>
    </div>

</body>

</html>