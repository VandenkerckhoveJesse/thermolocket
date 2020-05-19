<header class="w-100">
<h2 class="ml-3 p-3 mb-0">Thermoloket Admin panel</h2>
      </header>
<div class="container h-100">
      <div class="row h-100 ">
          <?php
          include_once("sidebar.php")
          ?>
        <div class="col-8 col-lg-10 p-4">
          <h2 class="mb-5">Dossiers: <?php echo sizeof($dossiers) ?></h2>

          <form
                method="post">
            <input class="mb-4" type="text" name="klantnaam" id="search-klant" placeholder="Voornaam Achternaam">
            <input type="submit" class="button" value="Zoeken" name="search"/>

          </form>

          <table class="table users-list">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Klant</th>
                <th scope="col">Adres</th>
                <th scope="col">Specialist</th>
                <th scope="col">Datum</th>
                <th scope="col">Genereer</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($dossiers as $dossier):
                $klant = Klant::getById($dossier->getKlantId());
                $woning = Woning::getById($dossier->getWoningId());
                $adres = $woning->getAdres();
                $gebruiker = Gebruiker::getById($dossier->getGebruikerId());

                ?>
              <tr>
                <th scope="row"><?php echo $dossier->getId();?></th>
                <td><?php echo $klant->getFullName();?></td>
                <td><?php echo $adres->getFullAdres();?></td>
                <td><?php echo $gebruiker->getNaam();?></td>
                <td><?php echo $dossier->getDatum();?></td>
                <td><a href="../genereer-pdf.php?id=<?php echo $dossier->getId();?>" class="button">Genereer PDF</a></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>