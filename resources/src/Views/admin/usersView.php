<header class="w-100">
<h2 class="ml-3 p-3 mb-0">Thermoloket Admin panel</h2>
      </header>
<div class="container h-100">
      <div class="row h-100 ">
          <?php
          include_once("sidebar.php")
          ?>
        <div class="col-8 col-lg-10 p-4">
          <h2 class="user-count mb-5">20</h2>

          <form action="#">
            <a href="create-user.php" class="button">Maak een nieuwe gebruiker</a>
          </form>

          <table class="table users-list">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Gebruikersnaam</th>
                <th scope="col">Laatste login</th>
                <th scope="col">Acties</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user): ?>
              <tr>
                <th class="user-list-user-id" scope="row"><?php echo $user->getId();?></th>
                <td class="user-list-username"><?php echo $user->getNaam();?></td>
                <td class="user-list-last-login"><?php echo $user->getLaatsteLogin();?></td>
                <td><a href="edit-user.php?id=<?php echo $user->getId();?>" class="button">Beheren</a></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>