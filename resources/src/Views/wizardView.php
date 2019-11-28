<div class="container">
        <div>
            <div class="row">
                <div class="col-12 col-xl-6">
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

                <div class="col-12 col-xl-6">
                    <div class="container overflow-hidden">
                        <div class="multisteps-form">
                            <div class="row progression-bar">
                                <div class="col-9 ml-auto mr-auto mb-4">
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
                                <div class="col-11 m-auto">
                                    <form class="multisteps-form__form" method="POST" action="">
                                        <div class="multisteps-form__panel shadow pb-4 px-4 rounded bg-white js-active gegevens"
                                            data-animation="scaleIn">
                                            <h3 class="multisteps-form__title">Basisgegevens</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <input name="gegevens[voornaam]" class="multisteps-form__input form-control" type="text"
                                                            placeholder="Voornaam"/>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <input name="gegevens[familienaam]" class="multisteps-form__input form-control" type="text"
                                                            placeholder="Famillienaam"/>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <input class="multisteps-form__input form-control" type="email"
                                                            placeholder="Email" name="gegevens[email]"/>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <input name="gegevens[telefoon]" class="multisteps-form__input form-control" type="text"
                                                            placeholder="Telefoon"/>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <select name="gegevens[verwantschap]" class="pick-animation__select form-control">
                                                            <option value="" disabled selected>Verwantschap woning
                                                            </option>
                                                            <option value="Eigenaar">Eigenaar</option>
                                                            <option value="Verhuurder">Verhuurder</option>
                                                            <option value="Huurder">Huurder</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <select name="gegevens[bouwjaar]" class="pick-animation__select form-control">
                                                            <option value="" disabled selected>Bouwjaar woning</option>
                                                            <option value="<1900"><1900-1950</option>
                                                            <option value="1950">1950-1970</option>
                                                            <option value="1970">1970-1980</option>
                                                            <option value="1980">1980-2000</option>
                                                            <option value="2000">2000-2006</option>
                                                            <option value="2006">2006-2008</option>
                                                            <option value="2008">2008-2011</option>
                                                            <option value="2011">2011-2019</option>
                                                            <option value=">2019">>2019</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <input name="gegevens[straat]" class="multisteps-form__input form-control" type="text"
                                                            placeholder="Straat"/>
                                                    </div>
                                                    <div class="col-12 col-sm-2 mt-2 mt-sm-0">
                                                        <input name="gegevens[nummer]" class="multisteps-form__input form-control" type="text"
                                                            placeholder="Nr"/>
                                                    </div>
                                                    <div class="col-12 col-sm-2 mt-2 mt-sm-0">
                                                        <input name="gegevens[bus]" class="multisteps-form__input form-control" type="text"
                                                            placeholder="Bus"/>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <input name="gegevens[gemeente]" class="multisteps-form__input form-control" type="text"
                                                            placeholder="Gemeente"/>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <input name="gegevens[postcode]" class="multisteps-form__input form-control" type="text"
                                                            placeholder="Postcode"/>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <p>Was de woning verwarmd:</p>
                                                    <div id="verwarmd" class="col-12 col-sm-6">
                                                        <input type="radio" name="gegevens[verwarmd]" id="verwarmd-true" value="true"><label for="verwarmd-true">Ja</label>
                                                        <input type="radio" name="gegevens[verwarmd]" id="verwarmd-false" value="false"><label for="verwarmd-false">Nee</label>
                                                    </div>

                                                </div>
                                                <div class="form-row mt-4">
                                                    <button class="btn btn-dark" type="button" title="Toevoegen">+
                                                        Toevoegen</button>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <select  name="gegevens[plaats-verwarming][]" class="pick-animation__select form-control">
                                                            <option value="gelijkvloers is verwarmd">gelijkvloers is verwarmd</option>
                                                            <option value="gelijkvloers is niet verwarmd">gelijkvloers is niet verwarmd</option>
                                                            <option value="1ste verdiep is verwarmd">1ste verdiep is verwarmd</option>
                                                            <option value="1ste verdiep is indirect verwarmd">1ste verdiep is indirect verwarmd</option>
                                                            <option value="Ruimte onder hellend dak is verwarmd">Ruimte onder hellend dak is verwarmd</option>
                                                            <option value="Ruimte onder hellend dak is niet verwarmd">Ruimte onder hellend dak is niet verwarmd</option>
                                                            <option value="Slechts bepaalde ruimtes worden verwarmd">Slechts bepaalde ruimtes worden verwarmd</option>
                                                            <option value="Andere zelf te specificeren tekstueel">Andere zelf te specificeren tekstueel</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="button-row d-flex mt-4">
                                            
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
                                                        <input type="checkbox" id="optie1" name="optie1" value="Verwarmingslichaam duidelijk waarneembaar"> 
                                                        <label for="optie1">Verwarmingslichaam duidelijk waarneembaar</label>
                                                        <br>
                                                        <input type="checkbox" id="optie2" name="optie2" value="fvoer van de ketel is waarneembaar">
                                                        <label for="optie2">Afvoer van de ketel is waarneembaar</label>
                                                        <br>
                                                        <input type="checkbox" id="optie3" name="optie3" value="Schoorsteen was in werking">
                                                        <label for="optie3">Schoorsteen was in werking</label>
                                                        <br>
                                                        <input type="checkbox" id="optie4" name="optie4" value="Leidingen van de verwarming waarneembaar">
                                                        <label for="optie4">Leidingen van de verwarming waarneembaar</label>
                                                        <br>
                                                        <input type="checkbox" id="optie5" name="optie5" value="Afvoer decentrale verwarming waarneembaar">
                                                        <label for="optie5">Afvoer decentrale verwarming waarneembaar</label>
                                                        <br>
                                                        <input type="checkbox" id="optie6" name="optie6" value="Andere zelf te specificeren tekstueel">
                                                        <label for="optie6">Andere zelf te specificeren tekstueel</label>
                                                         
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
                                                                    title="Toevoegen">+ Toevoegen</button>
                                                            </div>
                                                            <div class="form-row mt-4 ramen">
                                                                <div class="col-12 col-sm-6">
                                                                    <select
                                                                        class="picky-animation__select form-control">
                                                                        <option value="#">De ramen tonen een sterke geleiding van warmte, de woning bevat nog oude beglazing.</option>
                                                                        <option value="#">De ramen zijn vernieuwd </option>
                                                                        <option value="#">De ramen bevatten rolluiken en geven extra bescherming</option>
                                                                        <option value="#">De afwerking van de rolluikkasten op vlak van isolatie en luchtdichtheid</option>
                                                                        <option value="#">De afwerking van de dagkanten van de ramen</option>
                                                                        <option value="#">De luchttoevoerroosters zijn waarneembaar op de foto</option>
                                                                        <option value="#">Raam stond open tijdens onze gevelscan</option>
                                                                        <option value="#">Oude ramen hebben sterke infiltraties (geen of versleten dichtingen)</option>
                                                                        <option value="Anders">Andere zelf te specificeren tekstueel</option>
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
                                                                    title="Toevoegen">+ Toevoegen</button>
                                                            </div>
                                                            <div class="form-row mt-4 dakramen">
                                                                <div class="col-12 col-sm-6 ">
                                                                    <select
                                                                        class="picky-animation__select form-control">
                                                                        <option value="metalen-frame">Het dakraam bestaat uit een metalen frame met enkele beglazing
                                                                        </option>
                                                                        <option value="hedendaags">Het dakraam is hedendaags</option>
                                                                        <option value="Huurder">één bepaalde ruimte
                                                                            verwarmd</option>
                                                                        <option value="Anders">Andere zelf te specificeren tekstueel</option>
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
                                                                    title="Toevoegen">+ Toevoegen</button>
                                                            </div>
                                                            <div class="form-row mt-4 deuren">
                                                                <div class="col-12 col-sm-6">
                                                                    <select
                                                                        class="picky-animation__select form-control">
                                                                        <option value="dagkanten">De afwerking van de dagkanten van de deur
                                                                        </option>
                                                                        <option value="glas-sterke-geleiding">De deur bevat glas met een sterke geleiding</option>
                                                                        <option value="paneel-sterke-geleiding">De deur bevat een paneel met sterke geleiding</option>
                                                                        <option value="deuren-vernieuwd">De deur(en) zijn vernieuwd</option>
                                                                        <option value="deuren-verouderd">De deur(en) zijn verouderd</option>
                                                                        <option value="deuren-infiltraties">Infiltraties via de deur</option>
                                                                        <option value="Anders">Andere zelf te specificeren tekstueel</option>
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
                                                        Toevoegen</button>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-12 col-sm-6">
                                                        <select class="picky-animation__select form-control">
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
                                                            <option value="Anders">Andere zelf te specificeren tekstueel</option>

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
                                                    <button class="btn btn-dark" id="energie" type="button" title="Toevoegen">+ Toevoegen</button>
                                                </div>
                                                <div class="form-row mt-4 energie">
                                                    <div class="col-12 col-sm-6">
                                                        <select class="pick-animation__select form-control">
                                                            <option value="gratis-zonne-energie">Geen hernieuwbare energie vastgesteld, investeer en geniet van de gratis zonne energie, uw dak leunt zich tot zonnepanelen en zonneboiler</option>
                                                            <option value="aanwezig-ander-dakdeel">Geen hernieuwbare energie vastgesteld, maar is wel aanwezig op een andere dakdeel                                                      </option>
                                                            <option value="zonnepanelen">Zonnepanelen zijn waarneembaar op het dak
                                                            </option>
                                                            <option value="zonneboiler">Zonneboiler is waarneembaar op het dak</option>
                                                            <option value="Anders">Andere zelf te specificeren tekstueel</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <select name="energie-status" class="pick-animation__select form-control">
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
                                            <div class="button-row d-flex mt-5">
                                            <button class="btn btn-Light js-btn-prev" type="button"
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
