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
          <div class="row">
            <div class="col-12 col-lg-6">
              <h2 class="username mb-4">Johndoe</h2>
              <form
                class="edit-user-details"
                action="/update-user"
                method="POST"
              >
                <label for="username">Gebruikersnaam aanpassen:</label>
                <input class="d-block w-50" type="text" id="username" />

                <label for="email">Email aanpassen:</label>
                <input class="mb-3 w-50" type="text" id="email" />

                <label for="password">Wachtwoord aanpassen:</label>
                <input class="mb-3" type="password" id="password" placeholder="Wachtwoord" />
                <input
                  class="mb-3"
                  type="password"
                  id="repeat-password"
                  placeholder="Herhaal wachtwoord"
                />

                <label for="status">Status: </label>
                <input
                  type="radio"
                  name="status"
                  value="enabled"
                  id="status-enabled"
                />
                <label class="d-inline-block mr-2" for="status-enabled"
                  >Enabled</label
                >
                <input
                  type="radio"
                  name="status"
                  value="disabled"
                  id="status-disabled"
                />
                <label class="d-inline-block mb-4" for="status-disabled"
                  >Disabled</label
                >

                <input class="mb-4 d-block" type="submit" class="d-block" value="Opslaan" />
              </form>
            </div>
            <div class="col-12 col-lg-6">
              <h2 class="mb-4">Gemeentes</h2>
              <p>Deze gebruiker heeft toegang tot volgende gemeentes:</p>
              <form action="#">
                <input
                  class="mb-2 search-current-town"
                  type="text"
                  name="search"
                  placeholder="gemeente zoeken"
                />
              </form>
              <ul class="current-towns mb-3">
                <li id="8000"><a>Brugge (8000)</a></li>
                <li id="8490"><a>a Jabbeke (8490)</a></li>
                <li id="8370"><a>Blankenberge (8370)</a></li>
                <li id="8420"><a>De Haan (8420)</a></li>
                <li id="9031"><a>Drongen (9031)</a></li>
                <li id="3501"><a>Wimmertingen (3501)</a></li>
                <li id="8000"><a>Brugge (8000)</a></li>
                <li id="8490"><a>Jabbeke (8490)</a></li>
                <li id="8370"><a>Blankenberge (8370)</a></li>
                <li id="8420"><a>De Haan (8420)</a></li>
                <li id="9031"><a>Drongen (9031)</a></li>
                <li id="3501"><a>Wimmertingen (3501)</a></li>
              </ul>

              <button class="mb-4">Opslaan</button>

              <h2>Gemeentes Toevoegen</h2>
              <form action="#">
                <input
                  class="mb-2 search-town"
                  type="text"
                  name="search"
                  placeholder="gemeente zoeken"
                />
              </form>

              <ul class="towns">
                <li>
                  <input
                    type="checkbox"
                    name="brugge-8000"
                    id="brugge-8000"
                    value="brugge-8000"
                  />
                  <label for="brugge-8000">Brugge (8000)</label>
                </li>

                <li>
                  <input
                    type="checkbox"
                    name="hasselt-3500"
                    id="hasselt-3500"
                    value="hasselt-3500"
                  />
                  <label for="hasselt-3500">Hasselt (3500)</label>
                </li>
              </ul>
              <button>Voeg geselecteerde gemeentes toe</button>
            </div>
          </div>
        </div>
      </div>
    </div>