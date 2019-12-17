<div class="container">
        <div>
            <div class="row">
                <div class="col-12 col-xl-5">
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

                <div class="col-12 col-xl-7">
                    <div class="container overflow-hidden">
                        <div class="multisteps-form">
                            <div class="row progression-bar">
                                <div class="col-9 ml-auto mr-auto mb-4">
                                    <div class="multisteps-form__progress">
                                        <!--CATEGORIES-->
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

                                <div class="col-11 m-auto">
                                    <!--CATEGORIEEN CARDS--><form class="multisteps-form__form" method="POST" action="">


                                        <?php
                                        /*BASISGEGEVENS*/
                                        include_once("../resources/src/Views/templates/basisgegevens.php");


                                        /*GEVEL*/
                                        $categorie = Categorie::getById(1);
                                        include_once("../resources/src/Views/templates/checkbox.php");


                                        /*OPENINGEN*/

                                        ?>
                                        
                                        <!--Muren-->
                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white muur"
                                            >
                                            <h3 class="multisteps-form__title">Muur</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">
                                                <button data-list-name="muren" class="btn btn-dark add-item" type="button" title="Toevoegen">+
                                                        Toevoegen</button>
                                                </div>
                                                <div class="form-row mt-4 addable-list-muren fixed-height-scrollable">
                                                    <div class="list-item">
                                                        <div class="col-12 mb-3">
                                                        <select name="muren[eigenschappen][]" class="picky-animation__select form-control has-custom-input">
                                                            <option value="muren-onvoldoende-geïsoleerd">De muren hebben geen uniforme kleur, de muur is niet of onvoldoende geïsoleerd</option>
                                                            <option value="muren-geïsoleerd">De muren hebben een uniforme kleur en zijn geïsoleerd</option>
                                                            <option value="spouw-geïsoleerd">De muren kleuren uniform, de spouw werd na geïsoleerd d.m.v. spouwvulling</option>
                                                            <option value="muren-basisiolatie">De muren beschikken over een basisisolatie</option>
                                                            <option value="muren-variëren-stooktemperatuur">De kleur van de muren kan variëren in functie van stooktemperatuur</option>
                                                            <option value="aanpalende-ruimte-verwarmd">De kleur van de muren kan variëren als de aanpalende ruimte is verwarmd of niet </option>
                                                            <option value="warmtestromen-vastgesteld">Men kan warmtestromen vaststellen in de spouw</option>
                                                            <option value="muren-beplantingen">De muur is begroeid met beplantingen</option>
                                                            <option value="muren-vochtig">De muur is op bepaalde plaatsen vochtig</option>
                                                            <option value="afkoeling-wind">Er is een afkoeling van de muur door de wind</option>
                                                            <option value="binnenhoek-warmteuitstraling">Binnenhoek vertonen een grotere warmteuitstraling</option>
                                                            <option value="custom">Andere zelf te specificeren tekstueel</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <select name="muren[waarnemingen][]" class="pick-animation__select form-control waarneming-box">
                                                            <option value="schitterend">schitterend</option>
                                                            <option value="mooi-resultaat">mooi-resultaat</option>
                                                            <option value="goed-op-weg">goed-op-weg</option>
                                                            <option value="aanpakken">aanpakken</option>
                                                            <option value="dringend-aanpakken">dringend-aanpakken</option>
                                                                        <option value="niet-van-toepassing">niet-van-toepassing</option>
                                                        </select>
                                                    </div>

                                                      <div class="col-12 mb-4">
                                                                   <input type="text" class="d-none w-100 my-3 custom-input" name="muren[eigenschappen-custom][]">
                                                                   </div>


                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        <!--dak-->
                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white dak"
                                            >
                                            <h3 class="multisteps-form__title">Dak</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">
                                                     <button data-list-name="daken" class="btn btn-dark add-item" type="button" title="Toevoegen">+
                                                        Toevoegen</button>
                                                </div>
                                                <div class="form-row mt-4 addable-list-daken fixed-height-scrollable">
                                                    <div class="list-item">
                                                        <div class="col-12 mb-3">
                                                        <select name="daken[eigenschappen][]" class="picky-animation__select form-control has-custom-input">
                                                            <option value="dak-uniformekleur">Het dak heeft een uniforme kleur, dit impliceert wellicht een vorm van isolatie, hoe kouder het dak, hoe donkerder de kleur, hoe groter de isolatiewaarde</option>
                                                            <option value="dak-niet-verwarmd">De kleur van het dak dient men te interpreteren in functie van de onderliggende temperatuur, ruimte onder het dak is niet verwarmd
                                                            </option>
                                                            <option value="ruimte-onder-dak-verwarmd">De kleur van het dak dient men te interpreteren in functie van de onderliggende temperatuur, ruimte onder het dak is verwarmd
                                                            </option>
                                                            <option value="dakdeel-beter-geisoleerd">Één dakdeel is beter geïsoleerd dan het andere dakdeel</option>
                                                            <option value="geen-confromiteiten">De dakisolatie bevat niet conformiteiten (vb ontbrekende stukken isolatie, losgekomen isolatie, slecht geplaatste isolatie</option>
                                                            <option value="aansluiting-dakisolatie">De aansluiting van de dakramen aan de dakisolatie</option>
                                                            <option value="niet-geisoleerd">Het dak heeft geen uniforme kleur, het dak is waarschijnlijk niet geïsoleerd of de isolatie is slecht geplaatst</option>
                                                            <option value="warmteuitstraling">Warmteuitstraling (reflectie) van naast gelegen muur op het dakdeel</option>
                                                            <option value="refelcties-van-metalen">Reflecties van metalen delen zoals lood, zinkwerk, koper, …</option>
                                                            <option value="reflecties-glazuurde-pannen">Opgelet reflecties door glazuurde pannen, hierdoor lijkt het dak beter geïsoleerd</option>
                                                            <option value="custom">Andere zelf te specificeren tekstueel</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <select name="daken[waarnemingen][]" class="pick-animation__select form-control waarneming-box">
                                                            <option value="schitterend">schitterend</option>
                                                            <option value="mooi-resultaat">mooi-resultaat</option>
                                                            <option value="goed-op-weg">goed-op-weg</option>
                                                            <option value="aanpakken">aanpakken</option>
                                                            <option value="dringend-aanpakken">dringend-aanpakken</option>
                                                                        <option value="niet-van-toepassing">niet-van-toepassing</option>
                                                        </select>
                                                    </div>

                                                      <div class="col-12 mb-4">
                                                                   <input type="text" class="d-none w-100 my-3 custom-input" name="daken[eigenschappen-custom][]">
                                                                   </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                            <button class="btn btn-Light js-btn-prev btn-outline-secondary" type="button"
                                                    title="Prev">Vorige</button>
                                                <button class="btn btn-dark ml-auto js-btn-next" type="button"
                                                    title="Next">Volgende</button>
                                            </div>
                                        </div>
                                        <!--energie-->
                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white energie"
                                            >
                                            <h3 class="multisteps-form__title">Hernieuwbare energie</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">
                                                    <button data-list-name="energie" class="btn btn-dark add-item" type="button" title="Toevoegen">+
                                                        Toevoegen</button>
                                                </div>
                                                <div class="form-row mt-4 addable-list-energie fixed-height-scrollable">
                                                    <div class="list-item">
                                                        <div class="col-12 mb-3">
                                                        <select name="energiebronnen[eigenschappen][]" class="pick-animation__select form-control has-custom-input">
                                                            <option value="gratis-zonne-energie">Geen hernieuwbare energie vastgesteld, investeer en geniet van de gratis zonne energie, uw dak leunt zich tot zonnepanelen en zonneboiler</option>
                                                            <option value="aanwezig-ander-dakdeel">Geen hernieuwbare energie vastgesteld, maar is wel aanwezig op een andere dakdeel                                                      </option>
                                                            <option value="zonnepanelen">Zonnepanelen zijn waarneembaar op het dak
                                                            </option>
                                                            <option value="zonneboiler">Zonneboiler is waarneembaar op het dak</option>
                                                            <option value="custom">Andere zelf te specificeren tekstueel</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <select name="energiebronnen[waarnemingen][]" name="energie-status" class="pick-animation__select form-control waarneming-box">
                                                            <option value="schitterend">schitterend</option>
                                                            <option value="mooi-resultaat">mooi-resultaat</option>
                                                            <option value="goed-op-weg">goed-op-weg</option>
                                                            <option value="aanpakken">aanpakken</option>
                                                            <option value="dringend-aanpakken">dringend-aanpakken</option>
                                                                        <option value="niet-van-toepassing">niet-van-toepassing</option>
                                                        </select>
                                                    </div>

                                                     <div class="col-12 mb-4">
                                                                   <input type="text" class="d-none w-100 my-3 custom-input" name="energiebronnen[eigenschappen-custom][]">
                                                                   </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-5">
                                            <button class="btn btn-Light js-btn-prev btn-outline-secondary" type="button"
                                                    title="Prev">Vorige</button>
                                                <div class="ml-auto">
                                                <input class="btn btn-dark" type="submit" value="opslaan">
                                                <button disabled class="btn btn-dark save-form-button ml-2" type="button">Genereer PDF</button></div>
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
