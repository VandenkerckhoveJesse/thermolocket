<div class="container">
        <div>
            <div class="row">
                <div class="col-12 col-xl-5">
                    <form class="select-image-form" action="#">
                        <p>Selecteer een afbeelding:</p>
                       <select class="form-control image-direction mr-1">
                            <option value="left">Left</option>
                            <option value="right">Right</option>
                        </select>
                        <input type="text" class="image-number form-control" placeholder="afbeeldingsnummer">
                    </form>
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
                        <ul class="list-inline house-image-list"></ul>
                    </div>
                </div>

                <div class="col-12 col-xl-7">
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
                                            >
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
                                                        <input id="address-input" name="gegevens[straat]" class="multisteps-form__input form-control" type="text" 
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
                                                        <input id="city-input" name="gegevens[gemeente]" class="multisteps-form__input form-control" type="text"
                                                            placeholder="Gemeente"/>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                        <input id="postcode-input" name="gegevens[postcode]" class="multisteps-form__input form-control" type="text"
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
                                                    <button data-list-name="verwarming" class="btn btn-dark add-item" type="button" title="Toevoegen">+ Nieuw item toevoegen</button>
                                                </div>
                                                <div class="form-row verwarming">
                                                    <div class="col-12 addable-list-verwarming">
                                                        <div class="list-item">
                                                      <div class="d-flex">
                                                        <select  name="gegevens[verwarming][eigenschappen][]" class="pick-animation__select form-control has-custom-input">
                                                            <option value="gelijkvloers-verwarmd">gelijkvloers is verwarmd</option>
                                                            <option value="gelijkvloers-niet-verwarmd">gelijkvloers is niet verwarmd</option>
                                                            <option value="1ste-verdiep-verwarmd">1ste verdiep is verwarmd</option>
                                                            <option value="1ste-verdiep-verwarmd">1ste verdiep is indirect verwarmd</option>
                                                            <option value="hellend-verwarmd">Ruimte onder hellend dak is verwarmd</option>
                                                            <option value="hellend-dak-niet-verwarmd">Ruimte onder hellend dak is niet verwarmd</option>
                                                            <option value="bepaalde-ruimtes-verwarmd">Slechts bepaalde ruimtes worden verwarmd</option>
                                                            <option value="custom">Andere zelf te specificeren tekstueel</option>
                                                        </select>
                                                        <button type="button" disabled class="btn btn-danger ml-2 remove-item"><i class="fas fa-trash-alt"></i></button>
                                                        </div>
                                                        <input type="text" class="d-none w-100 my-2 custom-input" name="gegevens[verwarming][eigenschappen-custom][]">
                                                       
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="button-row d-flex mt-4">
                                            
                                                <button class="btn btn-dark ml-auto js-btn-next" type="button"
                                                    title="Next">Volgende</button>
                                            </div>
                                        </div>

                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white gevel"
                                            >
                                            <h3 class="multisteps-form__title">Gevel</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">
                                                    <p>Kunnen we verwarmingsgerelateerde zaken terugvinden?</p>
                                                    <div class="col-12">
                                                        <input type="checkbox" id="optie1" name="gevel[eigenschappen][]" value="Verwarmingslichaam duidelijk waarneembaar"> 
                                                        <label for="optie1">Verwarmingslichaam duidelijk waarneembaar</label>
                                                        <br>
                                                        <input type="checkbox" id="optie2" name="gevel[eigenschappen][]" value="fvoer van de ketel is waarneembaar">
                                                        <label for="optie2">Afvoer van de ketel is waarneembaar</label>
                                                        <br>
                                                        <input type="checkbox" id="optie3" name="gevel[eigenschappen][]" value="Schoorsteen was in werking">
                                                        <label for="optie3">Schoorsteen was in werking</label>
                                                        <br>
                                                        <input type="checkbox" id="optie4" name="gevel[eigenschappen][]" value="Leidingen van de verwarming waarneembaar">
                                                        <label for="optie4">Leidingen van de verwarming waarneembaar</label>
                                                        <br>
                                                        <input type="checkbox" id="optie5" name="gevel[eigenschappen][]" value="Afvoer decentrale verwarming waarneembaar">
                                                        <label for="optie5">Afvoer decentrale verwarming waarneembaar</label>
                                                        <br>

                                                        <input type="text" class=" w-100 my-2 custom-input" name="gevel[eigenschappen][]" placeholder="Geef zelf een eigenschap op (optioneel)">
                                                         
                                                    </div>
                                                </div>
                                                <div class="button-row d-flex mt-4">
                                                <button class="btn btn-Light btn-outline-secondary js-btn-prev" type="button"
                                                    title="Prev">Vorige</button>
                                                <button class="btn btn-dark ml-auto js-btn-next" type="button"
                                                    title="Next">Volgende</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white openingen"
                                            >
                                            <h3 class="multisteps-form__title mb-4">Openingen</h3>
                                            <div class="multisteps-form__content">
                                                <div class="row">
                                                    <div>
                                                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                                            <a class="nav-item nav-link active" id="nav-ramen-tab"
                                                                data-toggle="tab" href="#nav-ramen" role="tab"
                                                                aria-controls="nav-ramen" aria-selected="true">Ramen</a>
                                                            <a class="nav-item nav-link" id="nav-dakramen-tab"
                                                                data-toggle="tab" href="#nav-dakramen" role="tab"
                                                                aria-controls="nav-dakramen"
                                                                aria-selected="false">Dakramen</a>
                                                            <a class="nav-item nav-link" id="nav-deuren-tab"
                                                                data-toggle="tab" href="#nav-deuren" role="tab"
                                                                aria-controls="nav-deuren"
                                                                aria-selected="false">Deuren</a>
                                                            <a class="nav-item nav-link" id="nav-poorten-tab"
                                                                data-toggle="tab" href="#nav-poorten" role="tab"
                                                                aria-controls="nav-poorten-tab"
                                                                aria-selected="false">Poorten</a>
                                                            <a class="nav-item nav-link" id="nav-brievenbus-tab"
                                                                data-toggle="tab" href="#nav-brievenbus" role="tab"
                                                                aria-controls="nav-brievenbus"
                                                                aria-selected="false">Brievenbus</a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-content" id="nav-tabContent">

                                                        <div class="tab-pane fade show active" id="nav-ramen"
                                                            role="tabpanel" aria-labelledby="nav-ramen-tab">
                                                            <div class="form-row mt-4">
                                                                 <button data-list-name="ramen" class="btn btn-dark add-item" type="button" title="Toevoegen">+ Nieuw item toevoegen</button>
                                                            </div>
                                                            <div class="form-row addable-list-ramen fixed-height-scrollable">
                                                               <div class="list-item">
                                                                <div class="col-12 mb-2">
                                                                   <div class="d-flex">
                                                                    <select
                                                                        name="openingen[ramen][eigenschappen][]"
                                                                        class="picky-animation__select form-control has-custom-input">
                                                                        <option value="sterke-geleiding">De ramen tonen een sterke geleiding van warmte, de woning bevat nog oude beglazing.</option>
                                                                        <option value="vernieuwd">De ramen zijn vernieuwd</option>
                                                                        <option value="rolluiken-extra-bescherming">De ramen bevatten rolluiken en geven extra bescherming</option>
                                                                        <option value="afwerking-rolluikkasten">De afwerking van de rolluikkasten op vlak van isolatie en luchtdichtheid</option>
                                                                        <option value="afwerking-dagkanten">De afwerking van de dagkanten van de ramen</option>
                                                                        <option value="luchttoevoerroosters">De luchttoevoerroosters zijn waarneembaar op de foto</option>
                                                                        <option value="raam-open">Raam stond open tijdens onze gevelscan</option>
                                                                        <option value="sterke-infiltraties">Oude ramen hebben sterke infiltraties (geen of versleten dichtingen)</option>
                                                                        <option value="custom">Andere zelf te specificeren tekstueel</option>
                                                                    </select>
                                                                     <button type="button" disabled class="btn btn-danger ml-2 remove-item"><i class="fas fa-trash-alt"></i></button>
                                                                   </div>
                                                                </div>
                                                                <div class="col-12 mb-2">
                                                                    <select name="openingen[ramen][waarnemingen][]" class="pick-animation__select form-control waarneming-box">
                                                                        <option value="schitterend">schitterend</option>
                                                                        <option value="mooi-resultaat">mooi-resultaat
                                                                        </option>
                                                                        <option value="goed-op-weg">goed-op-weg</option>
                                                                        <option value="aanpakken">aanpakken</option>
                                                                        <option value="dringend-aanpakken">dringend-aanpakken</option>
                                                                        <option value="niet-van-toepassing">niet-van-toepassing</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-12 mb-4">
                                                                   <input type="text" class="d-none w-100 my-2 custom-input" name="openingen[ramen][eigenschappen-custom][]">
                                                                   </div>
                                                               </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="nav-dakramen" role="tabpanel"
                                                            aria-labelledby="nav-dakramen-tab">
                                                            <div class="form-row mt-4">
                                                                 <button data-list-name="dakramen" class="btn btn-dark add-item" type="button" title="Toevoegen">+ Nieuw item toevoegen</button>
                                                            </div>
                                                            <div class="form-row addable-list-dakramen fixed-height-scrollable">
                                                                <div class="list-item">
                                                                    <div class="col-12 mb-2">
                                                                   <div class="d-flex">
                                                                    <select name="openingen[dakramen][eigenschappen][]"
                                                                        class="picky-animation__select form-control has-custom-input">
                                                                        <option value="metalen-frame">Het dakraam bestaat uit een metalen frame met enkele beglazing
                                                                        </option>
                                                                        <option value="hedendaags">Het dakraam is hedendaags</option>
                                                                        <option value="bepaalde-ruimte-verwarmd">één bepaalde ruimte
                                                                            verwarmd</option>
                                                                            <option value="custom">Andere zelf te specificeren tekstueel</option>
                                                                    </select>
                                                                    <button type="button" disabled class="btn btn-danger ml-2 remove-item"><i class="fas fa-trash-alt"></i></button>
                                                                   </div>
                                                                </div>
                                                                <div class="col-12 mb-2">
                                                                    <select name="openingen[dakramen][waarnemingen][]" class="pick-animation__select form-control waarneming-box">
                                                                        <option value="schitterend">schitterend</option>
                                                                        <option value="mooi-resultaat">mooi-resultaat
                                                                        </option>
                                                                        <option value="goed-op-weg">goed-op-weg</option>
                                                                        <option value="aanpakken">aanpakken</option>
                                                                        <option value="dringend-aanpakken">dringend-aanpakken</option>
                                                                        <option value="niet-van-toepassing">niet-van-toepassing</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-12 mb-4">
                                                                   <input type="text" class="d-none w-100 my-2 custom-input" name="openingen[dakramen][eigenschappen-custom][]">
                                                                   </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="nav-deuren" role="tabpanel"
                                                            aria-labelledby="nav-deuren-tab">
                                                            <div class="form-row mt-4">
                                                                <button data-list-name="deuren" class="btn btn-dark add-item" type="button" title="Toevoegen">+ Nieuw item toevoegen</button>
                                                            </div>
                                                            <div class="form-row addable-list-deuren fixed-height-scrollable">
                                                                <div class="list-item">
                                                                    <div class="col-12 mb-2">
                                                                   <div class="d-flex">
                                                                    <select
                                                                        name="openingen[deuren][eigenschappen][]"
                                                                        class="picky-animation__select form-control has-custom-input">
                                                                        <option value="dagkanten">De afwerking van de dagkanten van de deur
                                                                        </option>
                                                                        <option value="glas-sterke-geleiding">De deur bevat glas met een sterke geleiding</option>
                                                                        <option value="paneel-sterke-geleiding">De deur bevat een paneel met sterke geleiding</option>
                                                                        <option value="deuren-vernieuwd">De deur(en) zijn vernieuwd</option>
                                                                        <option value="deuren-verouderd">De deur(en) zijn verouderd</option>
                                                                        <option value="deuren-infiltraties">Infiltraties via de deur</option>
                                                                        <option value="custom">Andere zelf te specificeren tekstueel</option>
                                                                    </select>
                                                                     <button type="button" disabled class="btn btn-danger ml-2 remove-item"><i class="fas fa-trash-alt"></i></button>
                                                                     </div>
                                                                    
                                                                </div>
                                                                <div class="col-12 mb-2">
                                                                    <select name="openingen[deuren][waarnemingen][]" class="pick-animation__select form-control waarneming-box">
                                                                        <option value="schitterend">schitterend</option>
                                                                        <option value="mooi-resultaat">mooi-resultaat
                                                                        </option>
                                                                        <option value="goed-op-weg">goed-op-weg</option>
                                                                        <option value="aanpakken">aanpakken</option>
                                                                        <option value="dringend-aanpakken">dringend-aanpakken</option>
                                                                        <option value="niet-van-toepassing">niet-van-toepassing</option>
                                                                    </select>
                                                                </div>

                                                                
                                                                <div class="col-12 mb-4">
                                                                   <input type="text" class="d-none w-100 my-2 custom-input" name="openingen[deuren][eigenschappen-custom][]">
                                                                   </div>
                                                            



                                                                </div>
                                                            </div>

                                                            </div>

                                                            

                                                             <div class="tab-pane fade" id="nav-poorten" role="tabpanel"
                                                            aria-labelledby="nav-porten-tab">
                                                            <div class="form-row mt-4">
                                                               <button data-list-name="poorten" class="btn btn-dark add-item" type="button" title="Toevoegen">+ Nieuw item toevoegen</button>
                                                            </div>
                                                            
                                                                <div class="form-row addable-list-poorten fixed-height-scrollable">
                                                                    <div class="list-item">
                                                                <div class="col-12 mb-2">
                                                                    <div class="d-flex">
                                                                    <select
                                                                        name="openingen[poorten][eigenschappen][]"
                                                                        class="picky-animation__select form-control has-custom-input">
                                                                        <option value="infiltratie-poort">Sterke infiltraties via de poort</option>
                                                                        <option value="poort-sluit-niet-goed">De poort sluit niet zo goed</option>
                                                                        <option value="afwerking-dagkanten-ontbreekt">De afwerking van de dagkanten ontbreekt</option>
                                                                        <option value="poort-toont-sterke-geleiding">De poort vertoond een sterke geleiding</option>
                                                                        <option value="geen-afsluiting-spow">Er is geen afsluiting t.o.v. de spouw, groot warmteverlies</option>
                                                                        <option value="poort-geïsoleerd">De poort is geïsoleerd</option>
                                                                        <option value="poort-niet-geïsoleerd">De poort is niet geïsoleerd</option>
                                                                        <option value="poort-vernieuwd">De poort is vernieuwd</option>
                                                                        <option value="custom">Andere zelf te specificeren tekstueel</option>
                                                                        </select>
                                                                          <button type="button" disabled class="btn btn-danger ml-2 remove-item"><i class="fas fa-trash-alt"></i></button></div>
                                                                      
                                                                </div>
                                                                <div class="col-12 mb-2">
                                                                    <select name="openingen[poorten][waarnemingen][]" class="pick-animation__select form-control waarneming-box">
                                                                        <option value="schitterend">schitterend</option>
                                                                        <option value="mooi-resultaat">mooi-resultaat
                                                                        </option>
                                                                        <option value="goed-op-weg">goed-op-weg</option>
                                                                        <option value="aanpakken">aanpakken</option>
                                                                        <option value="dringend-aanpakken">dringend-aanpakken</option>
                                                                        <option value="niet-van-toepassing">niet-van-toepassing</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-12 mb-4">
                                                                   <input type="text" class="d-none w-100 my-2 custom-input" name="openingen[poorten][eigenschappen-custom][]">
                                                                   </div>

                                                                
                                                            </div>
                                                            </div>
                                                        </div>


                                                        <div class="tab-pane fade" id="nav-brievenbus" role="tabpanel"
                                                            aria-labelledby="nav-brievenbus-tab">
                                                            
                                                            <div class="form-row mt-4">
                                                               <button data-list-name="brievenbus" class="btn btn-dark add-item" type="button" title="Toevoegen">+ Nieuw item toevoegen</button>
                                                            </div>
                                                            
                                                                <div class="form-row addable-list-brievenbus fixed-height-scrollable">
                                                                    <div class="list-item">
                                                                <div class="col-12 mb-2">
                                                                  <div class="d-flex">
                                                                    <select
                                                                         name="openingen[brievenbus][eigenschappen][]"
                                                                        class="picky-animation__select form-control has-custom-input">
                                                                        <option value="brieven-aanwezig">Brieven aanwezig in de deur</option>
                                                                        <option value="brievenbus-muur">Brievenbus op de muur gemonteerd</option>
                                                                        <option value="grote-infiltraties">Grote infiltraties</option>
                                                                        <option value="brievenbus-ingewerkt-muur">Brievenbus ingewerkt in de muur</option>
                                                                        <option value="custom">Andere zelf te specificeren tekstueel</option>
                                                                        </select>
                                                                        <button type="button" disabled class="btn btn-danger ml-2 remove-item"><i class="fas fa-trash-alt"></i></button></div>
                                                                      
                                                                </div>
                                                                <div class="col-12 mb-2">
                                                                    <select name="openingen[brievenbus][waarnemingen][]" class="pick-animation__select form-control waarneming-box">
                                                                        <option value="schitterend">schitterend</option>
                                                                        <option value="mooi-resultaat">mooi-resultaat
                                                                        </option>
                                                                        <option value="goed-op-weg">goed-op-weg</option>
                                                                        <option value="aanpakken">aanpakken</option>
                                                                        <option value="dringend-aanpakken">dringend-aanpakken</option>
                                                                        <option value="niet-van-toepassing">niet-van-toepassing</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-12 mb-4">
                                                                   <input type="text" class="d-none w-100 my-2 custom-input" name="openingen[poorten][eigenschappen-custom][]">
                                                                   </div>

                                                                
                                                            </div>
                                                            </div>
                                                        </div>
</div>
                                                </div>
                                                <div class="row">
                                                    <div class="button-row d-flex mt-4 col-12">
                                                    <button class="btn btn-Light btn-outline-secondary js-btn-prev" type="button"
                                                    title="Prev">Vorige</button>
                                                <button class="btn btn-dark ml-auto js-btn-next" type="button"
                                                    title="Next">Volgende</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white muur"
                                            >
                                            <h3 class="multisteps-form__title">Muur</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">
                                                <button data-list-name="muren" class="btn btn-dark add-item" type="button" title="Toevoegen">+ Nieuw item toevoegen</button>
                                                </div>
                                                <div class="form-row mt-2 addable-list-muren fixed-height-scrollable">
                                                    <div class="list-item">
                                                        <div class="col-12 mb-2">
                                                       <div class="d-flex">
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
                                                          <button type="button" disabled class="btn btn-danger ml-2 remove-item"><i class="fas fa-trash-alt"></i></button></div>
                                                    </div>
                                                    <div class="col-12 mb-2">
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
                                                                   <input type="text" class="d-none w-100 my-2 custom-input" name="muren[eigenschappen-custom][]">
                                                                   </div>


                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="button-row d-flex mt-4 col-12">
                                                    <button class="btn btn-Light btn-outline-secondary js-btn-prev" type="button"
                                                    title="Prev">Vorige</button>
                                                <button class="btn btn-dark ml-auto js-btn-next" type="button"
                                                    title="Next">Volgende</button>
                                                    </div>
                                                </div>


                                            </div>
                                            </div>
                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white dak"
                                            >
                                            <h3 class="multisteps-form__title">Dak</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">
                                                     <button data-list-name="daken" class="btn btn-dark add-item" type="button" title="Toevoegen">+ Nieuw item toevoegen</button>
                                                </div>
                                                <div class="form-row mt-2 addable-list-daken fixed-height-scrollable">
                                                    <div class="list-item">
                                                        <div class="col-12 mb-2">
                                                      <div class="d-flex">
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
                                                         <button type="button" disabled class="btn btn-danger ml-2 remove-item"><i class="fas fa-trash-alt"></i></button></div>
                                                    </div>
                                                    <div class="col-12 mb-2">
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
                                                                   <input type="text" class="d-none w-100 my-2 custom-input" name="daken[eigenschappen-custom][]">
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
                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white energie"
                                            >
                                            <h3 class="multisteps-form__title">Hernieuwbare energie</h3>
                                            <div class="multisteps-form__content">
                                                <div class="form-row mt-4">
                                                    <button data-list-name="energie" class="btn btn-dark add-item" type="button" title="Toevoegen">+ Nieuw item toevoegen</button>
                                                </div>
                                                <div class="form-row mt-2 addable-list-energie fixed-height-scrollable">
                                                    <div class="list-item">
                                                        <div class="col-12 mb-2">
                                                     <div class="d-flex">
                                                        <select name="energiebronnen[eigenschappen][]" class="pick-animation__select form-control has-custom-input">
                                                            <option value="gratis-zonne-energie">Geen hernieuwbare energie vastgesteld, investeer en geniet van de gratis zonne energie, uw dak leunt zich tot zonnepanelen en zonneboiler</option>
                                                            <option value="aanwezig-ander-dakdeel">Geen hernieuwbare energie vastgesteld, maar is wel aanwezig op een andere dakdeel                                                      </option>
                                                            <option value="zonnepanelen">Zonnepanelen zijn waarneembaar op het dak
                                                            </option>
                                                            <option value="zonneboiler">Zonneboiler is waarneembaar op het dak</option>
                                                            <option value="custom">Andere zelf te specificeren tekstueel</option>
                                                        </select>
                                                         <button type="button" disabled class="btn btn-danger ml-2 remove-item"><i class="fas fa-trash-alt"></i></button></div>
                                                    </div>
                                                    <div class="col-12 mb-2">
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
                                                                   <input type="text" class="d-none w-100 my-2 custom-input" name="energiebronnen[eigenschappen-custom][]">
                                                                   </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-none house-images-input-container"></div>
                                            <div class="button-row d-flex mt-5">
                                            <button class="btn btn-Light js-btn-prev btn-outline-secondary" type="button"
                                                    title="Prev">Vorige</button>
                                                <div class="ml-auto">
                                                <button class="btn btn-dark submit-form">Opslaan</button>
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
