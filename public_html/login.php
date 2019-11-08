<?php
include_once "../resources/config.php";
include_once "../resources/src/Controllers/UserController.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userController = new UserController();
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($userController->login($username, $password)){
        echo "succes";
        //var_dump(User::getByName($username));
    } else{
        echo "failed";
    };
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="login-container d-flex justify-content-center">
    <div class="mx-auto p-5">
        <h1 class="mb-5">Thermoloket <br />login</h1>
        <form action="login.php" method="post">
            <input
                id="username"
                name="username"
                type="text"
                placeholder="Gebruikersnaam"
                required
            />
            <input
                id="password"
                name="password"
                type="password"
                placeholder="Wachtwoord"
                required
            />
            <input type="submit" value="Login" />
        </form>
    </div>
</div>

</body>
</html>
