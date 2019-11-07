    <div class="container">
        <div>
            <div class="row">
                <div class="col-5">
                    <div class="house-image"></div>
                    <div class="form-row mt-4">
                        <div class="col-sm-4">
                            <button class="btn btn-outline-secondary ml-auto js-btn-next prev-image" type="button"
                                title="Next">Vorige</button>
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-dark ml-auto js-btn-next add-image" type="button"
                                title="Next">Toevoegen</button>
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-outline-secondary ml-auto js-btn-next next-image" type="button"
                                title="Next">Volgende</button>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <ul class="list-inline"></ul>
                    </div>
                </div>

                <div class="col-7">
                    <div class="container overflow-hidden">
                        <div class="multisteps-form">
                            <div class="row progression-bar">
                                <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                                    <div class="multisteps-form__progress">
                                        <button class="multisteps-form__progress-btn js-active" type="button"
                                            title="Gegevens">Gegevens</button>
                                        <button class="multisteps-form__progress-btn" type="button"
                                            title="Gevel">Gevel</button>
                                        <button class="multisteps-form__progress-btn" type="button"
                                            title="Openingen">Openingen</button>
                                        <button class="multisteps-form__progress-btn" type="button"
                                            title="Muren">Muren</button>
                                        <button class="multisteps-form__progress-btn" type="button"
                                            title="Dark">Dak</button>
                                        <button class="multisteps-form__progress-btn" type="button"
                                            title="Energiebronnen">Energiebronnen</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-10 m-auto">
                                    <form class="multisteps-form__form">
                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active gegevens"
                                            data-animation="scaleIn">
                                            <h3 class="multisteps-form__title">Basisgegevens</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Voornaam" />
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Famillienaam" />
                                                    </div>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <input class="multisteps-form__input form-control" type="email"
                                                            placeholder="Eamil" />
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Telefoon" />
                                                    </div>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <select class="pick-animation__select form-control">
                                                            <option value="" disabled selected>Verwantschap huis
                                                            </option>
                                                            <option value="Huurder">Huurder</option>
                                                            <option value="Eigenaar">Eigenaar</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <select class="pick-animation__select form-control">
                                                            <option value="" disabled selected>Bouwjaar woning</option>
                                                            <option value="1910">1910-1920</option>
                                                            <option value="1920">1920-1930</option>
                                                            <option value="1930">1930-1940</option>
                                                            <option value="1940">1940-1950</option>
                                                            <option value="1950">1950-1960</option>
                                                            <option value="1960">1960-1970</option>
                                                            <option value="1970">1970-1980</option>
                                                            <option value="1980">1980-1990</option>
                                                            <option value="1990">1990-2000</option>
                                                            <option value="2000">2000-2010</option>
                                                            <option value="2010">2010-2020</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Straat" />
                                                    </div>
                                                    <div class="col-12 col-sm-2 mt-2 mt-sm-0">
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Nr" />
                                                    </div>
                                                    <div class="col-12 col-sm-2 mt-2 mt-sm-0">
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Bus" />
                                                    </div>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Gemeente" />
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Postcode" />
                                                    </div>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <p>Was de woning verwarmd:</p>
                                                    <div class="col-12 col-sm-6">
                                                        <input type="radio" name="verwarming" value="ja"> Ja
                                                        <input type="radio" name="verwarming" value="nee"> Nee
                                                    </div>

                                                </div>
                                                <div class="form-row mt-4">
                                                    <button class="btn btn-dark" type="button" title="Toevoegen">+
                                                        Toevegen</button>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <select class="pick-animation__select form-control">
                                                            <option value="Huurder">gelijkvloers is verwarmd</option>
                                                            <option value="Eigenaar">1ste verdieping indirect verwarmd
                                                            </option>
                                                            <option value="Huurder">één bepaalde ruimte verwarmd
                                                            </option>
                                                            <option value="Huurder">zolder is niet</option>
                                                            <option value="Huurder">zolder indirect verwarmd</option>
                                                            <option value="Anders">Anders</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <select class="pick-animation__select form-control">
                                                            <option value="schitterend">schitterend</option>
                                                            <option value="mooi-resultaat">mooi-resultaat</option>
                                                            <option value="goed-op-weg">goed-op-weg</option>
                                                            <option value="aanpakken">aanpakken</option>
                                                            <option value="dringend-aanpakken">dringend-aanpakken
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn btn-Light js-btn-prev" type="button"
                                                    title="Prev">Vorige</button>
                                                <button class="btn btn-dark ml-auto js-btn-next" type="button"
                                                    title="Next">Volgende</button>
                                            </div>
                                        </div>

                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white gevel"
                                            data-animation="scaleIn">
                                            <h3 class="multisteps-form__title">Gevel</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">
                                                    <p>Kunnen we verwarmingsgerelateerde zaken terugvinden?</p>
                                                    <div class="col-12">
                                                        <input type="checkbox" name="optie1" value="optie1">
                                                        Verwarmingslichaam duidelijk waarneembaar.<br>
                                                        <input type="checkbox" name="optie2" value="optie2"> Afvoer van
                                                        de ketel is waarneembaar.<br>
                                                        <input type="checkbox" name="optie3" value="optie3"> Schoorsteen
                                                        was in werking.
                                                    </div>
                                                </div>
                                                <div class="button-row d-flex mt-4">
                                                    <button class="btn btn-Light js-btn-prev" type="button"
                                                        title="Prev">Vorige</button>
                                                    <button class="btn btn-dark ml-auto js-btn-next" type="button"
                                                        title="Next">Volgende</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white openingen"
                                            data-animation="scaleIn">
                                            <h3 class="multisteps-form__title">Openingen</h3>
                                            <div class="multisteps-form__content">
                                                <div class="row">
                                                    <div>
                                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                            <a class="nav-item nav-link active" id="nav-home-tab"
                                                                data-toggle="tab" href="#nav-home" role="tab"
                                                                aria-controls="nav-home" aria-selected="true">Ramen</a>
                                                            <a class="nav-item nav-link" id="nav-profile-tab"
                                                                data-toggle="tab" href="#nav-profile" role="tab"
                                                                aria-controls="nav-profile"
                                                                aria-selected="false">Dakramen</a>
                                                            <a class="nav-item nav-link" id="nav-contact-tab"
                                                                data-toggle="tab" href="#nav-contact" role="tab"
                                                                aria-controls="nav-contact"
                                                                aria-selected="false">Deuren</a>
                                                            <a class="nav-item nav-link" id="nav-contact-tab"
                                                                data-toggle="tab" href="#nav-contact" role="tab"
                                                                aria-controls="nav-contact"
                                                                aria-selected="false">Poorten</a>
                                                            <a class="nav-item nav-link" id="nav-contact-tab"
                                                                data-toggle="tab" href="#nav-contact" role="tab"
                                                                aria-controls="nav-contact"
                                                                aria-selected="false">Anders</a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-content" id="nav-tabContent">
                                                        <div class="tab-pane fade show active" id="nav-home"
                                                            role="tabpanel" aria-labelledby="nav-home-tab">
                                                            <div class="form-row mt-4">
                                                                <button class="btn btn-dark" type="button"
                                                                    title="Toevoegen">+ Toevegen</button>
                                                            </div>
                                                            <div class="form-row mt-4">
                                                                <div class="col-12 col-sm-6">
                                                                    <select
                                                                        class="picky-animation__select form-control">
                                                                        <option value="Huurder">gelijkvloers is verwarmd
                                                                        </option>
                                                                        <option value="Eigenaar">1ste verdieping
                                                                            indirect verwarmd</option>
                                                                        <option value="Huurder">één bepaalde ruimte
                                                                            verwarmd</option>
                                                                        <option value="Huurder">zolder is niet</option>
                                                                        <option value="Huurder">zolder indirect verwarmd
                                                                        </option>
                                                                        <option value="Anders">Anders</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                                    <select class="pick-animation__select form-control">
                                                                        <option value="schitterend">schitterend</option>
                                                                        <option value="mooi-resultaat">mooi-resultaat
                                                                        </option>
                                                                        <option value="goed-op-weg">goed-op-weg</option>
                                                                        <option value="aanpakken">aanpakken</option>
                                                                        <option value="dringend-aanpakken">
                                                                            dringend-aanpakken</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                                            aria-labelledby="nav-profile-tab">
                                                            <div class="form-row mt-4">
                                                                <button class="btn btn-dark" type="button"
                                                                    title="Toevoegen">+ Toevegen</button>
                                                            </div>
                                                            <div class="form-row mt-4">
                                                                <div class="col-12 col-sm-6">
                                                                    <select
                                                                        class="picky-animation__select form-control">
                                                                        <option value="Huurder">gelijkvloers is verwarmd
                                                                        </option>
                                                                        <option value="Eigenaar">1ste verdieping
                                                                            indirect verwarmd</option>
                                                                        <option value="Huurder">één bepaalde ruimte
                                                                            verwarmd</option>
                                                                        <option value="Huurder">zolder is niet</option>
                                                                        <option value="Huurder">zolder indirect verwarmd
                                                                        </option>
                                                                        <option value="Anders">Anders</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                                    <select class="pick-animation__select form-control">
                                                                        <option value="schitterend">schitterend</option>
                                                                        <option value="mooi-resultaat">mooi-resultaat
                                                                        </option>
                                                                        <option value="goed-op-weg">goed-op-weg</option>
                                                                        <option value="aanpakken">aanpakken</option>
                                                                        <option value="dringend-aanpakken">
                                                                            dringend-aanpakken</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                                            aria-labelledby="nav-contact-tab">
                                                            <div class="form-row mt-4">
                                                                <button class="btn btn-dark" type="button"
                                                                    title="Toevoegen">+ Toevegen</button>
                                                            </div>
                                                            <div class="form-row mt-4">
                                                                <div class="col-12 col-sm-6">
                                                                    <select
                                                                        class="picky-animation__select form-control">
                                                                        <option value="Huurder">gelijkvloers is verwarmd
                                                                        </option>
                                                                        <option value="Eigenaar">1ste verdieping
                                                                            indirect verwarmd</option>
                                                                        <option value="Huurder">één bepaalde ruimte
                                                                            verwarmd</option>
                                                                        <option value="Huurder">zolder is niet</option>
                                                                        <option value="Huurder">zolder indirect verwarmd
                                                                        </option>
                                                                        <option value="Anders">Anders</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                                    <select class="pick-animation__select form-control">
                                                                        <option value="schitterend">schitterend</option>
                                                                        <option value="mooi-resultaat">mooi-resultaat
                                                                        </option>
                                                                        <option value="goed-op-weg">goed-op-weg</option>
                                                                        <option value="aanpakken">aanpakken</option>
                                                                        <option value="dringend-aanpakken">
                                                                            dringend-aanpakken</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="button-row d-flex mt-4 col-12">
                                                        <button class="btn btn-Light js-btn-prev" type="button"
                                                            title="Prev">Vorige</button>
                                                        <button class="btn btn-dark ml-auto js-btn-next" type="button"
                                                            title="Next">Volgende</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white muur"
                                            data-animation="scaleIn">
                                            <h3 class="multisteps-form__title">Muur</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">

                                                </div>
                                                <div class="button-row d-flex mt-4">
                                                    <button class="btn btn-primary js-btn-prev" type="button"
                                                        title="Prev">Prev</button>
                                                    <button class="btn btn-success ml-auto" type="button"
                                                        title="Send">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white dak"
                                            data-animation="scaleIn">
                                            <h3 class="multisteps-form__title">Dak</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">
                                                    <button class="btn btn-dark" type="button" title="Toevoegen">+
                                                        Toevegen</button>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <select class="picky-animation__select form-control">
                                                            <option value="Huurder">gelijkvloers is verwarmd</option>
                                                            <option value="Eigenaar">1ste verdieping indirect verwarmd
                                                            </option>
                                                            <option value="Huurder">één bepaalde ruimte verwarmd
                                                            </option>
                                                            <option value="Huurder">zolder is niet</option>
                                                            <option value="Huurder">zolder indirect verwarmd</option>
                                                            <option value="Anders">Anders</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <select class="pick-animation__select form-control">
                                                            <option value="schitterend">schitterend</option>
                                                            <option value="mooi-resultaat">mooi-resultaat</option>
                                                            <option value="goed-op-weg">goed-op-weg</option>
                                                            <option value="aanpakken">aanpakken</option>
                                                            <option value="dringend-aanpakken">dringend-aanpakken
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn btn-Light js-btn-prev" type="button"
                                                    title="Prev">Vorige</button>
                                                <button class="btn btn-dark ml-auto js-btn-next" type="button"
                                                    title="Next">Volgende</button>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white energie"
                                            data-animation="scaleIn">
                                            <h3 class="multisteps-form__title">Hernieuwbare energie</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">
                                                    <button class="btn btn-dark" type="button" title="Toevoegen">+
                                                        Toevegen</button>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <select class="pick-animation__select form-control">
                                                            <option value="Huurder">gelijkvloers is verwarmd</option>
                                                            <option value="Eigenaar">1ste verdieping indirect verwarmd
                                                            </option>
                                                            <option value="Huurder">één bepaalde ruimte verwarmd
                                                            </option>
                                                            <option value="Huurder">zolder is niet</option>
                                                            <option value="Huurder">zolder indirect verwarmd</option>
                                                            <option value="Anders">Anders</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <select class="pick-animation__select form-control">
                                                            <option value="schitterend">schitterend</option>
                                                            <option value="mooi-resultaat">mooi-resultaat</option>
                                                            <option value="goed-op-weg">goed-op-weg</option>
                                                            <option value="aanpakken">aanpakken</option>
                                                            <option value="dringend-aanpakken">dringend-aanpakken
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn btn-Light js-btn-prev" type="button"
                                                    title="Prev">Vorige</button>
                                                <button class="btn btn-dark ml-auto js-btn-next" type="button"
                                                    title="Next">Volgende</button>
                                            </div>
                                        </div>




                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </main>
            </div>
