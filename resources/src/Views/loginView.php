<div class="login-container d-flex justify-content-center">
      <div class="mx-auto p-5">
        <h1 class="mb-5">Thermoloket <br />login</h1>

        <form action="" method="POST">
            <?php if(isset($error)) : ?>
            <p class="alert alert-danger"><?php echo $error ?></p>
            <?php endif; ?>
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