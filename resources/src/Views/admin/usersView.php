<header class="w-100">
<h2 class="ml-3 p-3 mb-0">Thermoloket Admin panel</h2>
      </header>
<div class="container h-100">
      <div class="row h-100 ">
        <div class="col-4 col-lg-2 sidebar p-4">
          <nav>
            <ul>
              <li><a href="users.html">Gebruikers</a></li>
              <li><a href="rapporten">Gegevens aanpassen</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-8 col-lg-10 p-4">
          <h2 class="user-count mb-5">20</h2>

          <form action="#">
            <input class="mb-4" type="text" id="search-user" placeholder="Zoek een gebruiker">
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
                <th class="user-list-user-id" scope="row"><?echo $user->getId();?></th>
                <td class="user-list-username"><?echo $user->getName();?></td>
                <td class="user-list-last-login"><?echo $user->getLastLogin();?></td>
                <td><a href="edit-user.php?id=<?echo $user->getId();?>" class="button">Beheren</a></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>