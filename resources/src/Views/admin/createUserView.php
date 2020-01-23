<header class="w-100">
<h2 class="ml-3 p-3 mb-0">Thermoloket Admin panel</h2>
      </header>

<div class="container h-100">
        
      <div class="row h-100 ">
          <?php
          include_once("sidebar.php")
          ?>
        <div class="col-8 col-lg-10 p-4">
          <div class="row">
            <div class="col-12 col-lg-6">
              

                 <h2 class="mb-4">Maak een nieuwe gebruiker aan</h2>
                    <form
                        class="edit-user-details"
                        action="create-user.php"
                        method="post"
                    >
                        <label for="username">Gebruikersnaam:</label>
                        <input name="username" class="d-block w-50" type="text" id="username" />

                        <label for="email">Email:</label>
                        <input name="email" class="mb-3 w-50" type="email" id="email" />

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