<?php
include_once("../../resources/config.php");
include_once("../../resources/src/Controllers/UserController.php");
include_once("../../resources/src/Models/User.php");
include_once("../../resources/src/Models/Session.php");
include_once("../../resources/src/Database.php");
include_once("../../resources/src/Helper.php");

$pageTitle="Admin panel";
$cssFiles=["admin.css"];
$jsFiles=["editUser.js"];

$userController = new UserController();

if(isset($_POST['create']) && isPostValid()){
    $name = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $enabled = $_POST['status'];
    $userController->createUser($name, $password, $password, $email, $enabled);
}


function isPostValid() {
    return !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['status']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $pageTitle ?></title>
    <meta name="author" content="Vincent Elias" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/public_html/assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/public_html/assets/css/screen.css" />
    <link
        rel="stylesheet"
        href="<?php echo $cssLink?>bootstrap.min.css"
    />

    <?php


    if(isset($cssFiles)){


        foreach($cssFiles as $cssFile) { ?>
            <link rel="stylesheet" type="text/css" href="<?php echo $cssLink.$cssFile?>" />
        <?php }
    }

    ?>
</head>
<body>
<div class="container h-100">
    <div class="row h-100 ">
        <div class="col-8 col-lg-10 p-4">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2 class="username mb-4">Create new user</h2>
                    <form
                        class="edit-user-details"
                        action="create-user.php"
                        method="post"
                    >
                        <label for="username">Gebruikersnaam:</label>
                        <input name="username" class="d-block w-50" type="text" id="username" />

                        <label for="email">Email:</label>
                        <input name="email" class="mb-3 w-50" type="text" id="email" />

                        <label for="password">Wachtwoord:</label>
                        <input name="password" class="mb-3" type="password" id="password" placeholder="Wachtwoord" />
                        <input
                            class="mb-3"
                            type="password"
                            id="repeat-password"
                            placeholder="Herhaal wachtwoord"
                        />

                        <label for="status">Status:</label>
                        <input
                            type="radio"
                            name="status"
                            value="true"
                            id="status-enabled"
                        />
                        <label class="d-inline-block mr-2" for="status-enabled"
                        >Enabled</label
                        >
                        <input
                            type="radio"
                            name="status"
                            value="false"
                            id="status-disabled"
                        />
                        <label class="d-inline-block mb-4" for="status-disabled"
                        >Disabled</label
                        >

                        <input class="mb-4 d-block" type="submit" class="d-block" value="Opslaan" name="create" />
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>