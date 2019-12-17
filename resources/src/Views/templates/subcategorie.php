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
                <!--ramen-->
                <div class="tab-pane fade show active" id="nav-ramen"
                     role="tabpanel" aria-labelledby="nav-ramen-tab">
                    <div class="form-row mt-4">
                        <button data-list-name="ramen" class="btn btn-dark add-item" type="button" title="Toevoegen">+
                            Toevoegen
                        </button>
                    </div>
                    <div class="form-row mt-4 addable-list-ramen fixed-height-scrollable">
                        <div class="list-item">
                            <div class="col-12 mb-3">
                                <select
                                        name="openingen[ramen][eigenschappen][]"
                                        class="picky-animation__select form-control has-custom-input">
                                    <option value="sterke-geleiding">De ramen tonen een sterke geleiding van warmte, de
                                        woning bevat nog oude beglazing.
                                    </option>
                                    <option value="vernieuwd">De ramen zijn vernieuwd</option>
                                    <option value="rolluiken-extra-bescherming">De ramen bevatten rolluiken en geven
                                        extra bescherming
                                    </option>
                                    <option value="afwerking-rolluikkasten">De afwerking van de rolluikkasten op vlak
                                        van isolatie en luchtdichtheid
                                    </option>
                                    <option value="afwerking-dagkanten">De afwerking van de dagkanten van de ramen
                                    </option>
                                    <option value="luchttoevoerroosters">De luchttoevoerroosters zijn waarneembaar op de
                                        foto
                                    </option>
                                    <option value="raam-open">Raam stond open tijdens onze gevelscan</option>
                                    <option value="sterke-infiltraties">Oude ramen hebben sterke infiltraties (geen of
                                        versleten dichtingen)
                                    </option>
                                    <option value="custom">Andere zelf te specificeren tekstueel</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <select name="openingen[ramen][waarnemingen][]"
                                        class="pick-animation__select form-control waarneming-box">
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
                                <input type="text" class="d-none w-100 my-3 custom-input"
                                       name="openingen[ramen][eigenschappen-custom][]">
                            </div>
                        </div>
                    </div>
                </div>
                <!--dakramen-->
                <div class="tab-pane fade" id="nav-dakramen" role="tabpanel"
                     aria-labelledby="nav-dakramen-tab">
                    <div class="form-row mt-4">
                        <button data-list-name="dakramen" class="btn btn-dark add-item" type="button" title="Toevoegen">
                            +
                            Toevoegen
                        </button>
                    </div>
                    <div class="form-row mt-4 addable-list-dakramen fixed-height-scrollable">
                        <div class="list-item">
                            <div class="col-12 mb-3">
                                <select name="openingen[dakramen][eigenschappen][]"
                                        class="picky-animation__select form-control has-custom-input">
                                    <option value="metalen-frame">Het dakraam bestaat uit een metalen frame met enkele
                                        beglazing
                                    </option>
                                    <option value="hedendaags">Het dakraam is hedendaags</option>
                                    <option value="bepaalde-ruimte-verwarmd">één bepaalde ruimte
                                        verwarmd
                                    </option>
                                    <option value="custom">Andere zelf te specificeren tekstueel</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <select name="openingen[dakramen][waarnemingen][]"
                                        class="pick-animation__select form-control waarneming-box">
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
                                <input type="text" class="d-none w-100 my-3 custom-input"
                                       name="openingen[dakramen][eigenschappen-custom][]">
                            </div>
                        </div>
                    </div>
                </div>
                <!--deuren-->
                <div class="tab-pane fade" id="nav-deuren" role="tabpanel"
                     aria-labelledby="nav-deuren-tab">
                    <div class="form-row mt-4">
                        <button data-list-name="deuren" class="btn btn-dark add-item" type="button" title="Toevoegen">+
                            Toevoegen
                        </button>
                    </div>
                    <div class="form-row mt-4 addable-list-deuren fixed-height-scrollable">
                        <div class="list-item">
                            <div class="col-12 mb-3">
                                <select
                                        name="openingen[deuren][eigenschappen][]"
                                        class="picky-animation__select form-control has-custom-input">
                                    <option value="dagkanten">De afwerking van de dagkanten van de deur
                                    </option>
                                    <option value="glas-sterke-geleiding">De deur bevat glas met een sterke geleiding
                                    </option>
                                    <option value="paneel-sterke-geleiding">De deur bevat een paneel met sterke
                                        geleiding
                                    </option>
                                    <option value="deuren-vernieuwd">De deur(en) zijn vernieuwd</option>
                                    <option value="deuren-verouderd">De deur(en) zijn verouderd</option>
                                    <option value="deuren-infiltraties">Infiltraties via de deur</option>
                                    <option value="custom">Andere zelf te specificeren tekstueel</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <select name="openingen[deuren][waarnemingen][]"
                                        class="pick-animation__select form-control waarneming-box">
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
                                <input type="text" class="d-none w-100 my-3 custom-input"
                                       name="openingen[deuren][eigenschappen-custom][]">
                            </div>


                        </div>
                    </div>

                </div>

                <!--poorten-->

                <div class="tab-pane fade" id="nav-poorten" role="tabpanel"
                     aria-labelledby="nav-porten-tab">
                    <div class="form-row mt-4">
                        <button data-list-name="poorten" class="btn btn-dark add-item" type="button" title="Toevoegen">+
                            Toevoegen
                        </button>
                    </div>

                    <div class="form-row mt-4  addable-list-poorten fixed-height-scrollable">
                        <div class="list-item">
                            <div class="col-12 mb-3">
                                <select
                                        name="openingen[poorten][eigenschappen][]"
                                        class="picky-animation__select form-control has-custom-input">
                                    <option value="infiltratie-poort">Sterke infiltraties via de poort</option>
                                    <option value="poort-sluit-niet-goed">De poort sluit niet zo goed</option>
                                    <option value="afwerking-dagkanten-ontbreekt">De afwerking van de dagkanten
                                        ontbreekt
                                    </option>
                                    <option value="poort-toont-sterke-geleiding">De poort vertoond een sterke
                                        geleiding
                                    </option>
                                    <option value="geen-afsluiting-spow">Er is geen afsluiting t.o.v. de spouw, groot
                                        warmteverlies
                                    </option>
                                    <option value="poort-geïsoleerd">De poort is geïsoleerd</option>
                                    <option value="poort-niet-geïsoleerd">De poort is niet geïsoleerd</option>
                                    <option value="poort-vernieuwd">De poort is vernieuwd</option>
                                    <option value="custom">Andere zelf te specificeren tekstueel</option>
                                </select>

                            </div>
                            <div class="col-12 mb-3">
                                <select name="openingen[poorten][waarnemingen][]"
                                        class="pick-animation__select form-control waarneming-box">
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
                                <input type="text" class="d-none w-100 my-3 custom-input"
                                       name="openingen[poorten][eigenschappen-custom][]">
                            </div>


                        </div>
                    </div>
                </div>
                <!--brievenbus-->

                <div class="tab-pane fade" id="nav-brievenbus" role="tabpanel"
                     aria-labelledby="nav-brievenbus-tab">

                    <div class="form-row mt-4">
                        <button data-list-name="brievenbus" class="btn btn-dark add-item" type="button"
                                title="Toevoegen">+
                            Toevoegen
                        </button>
                    </div>

                    <div class="form-row mt-4  addable-list-brievenbus fixed-height-scrollable">
                        <div class="list-item">
                            <div class="col-12 mb-3">
                                <select
                                        name="openingen[brievenbus][eigenschappen][]"
                                        class="picky-animation__select form-control has-custom-input">
                                    <option value="brieven-aanwezig">Brieven aanwezig in de deur</option>
                                    <option value="brievenbus-muur">Brievenbus op de muur gemonteerd</option>
                                    <option value="grote-infiltraties">Grote infiltraties</option>
                                    <option value="brievenbus-ingewerkt-muur">Brievenbus ingewerkt in de muur</option>
                                    <option value="custom">Andere zelf te specificeren tekstueel</option>
                                </select>

                            </div>
                            <div class="col-12 mb-3">
                                <select name="openingen[brievenbus][waarnemingen][]"
                                        class="pick-animation__select form-control waarneming-box">
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
                                <input type="text" class="d-none w-100 my-3 custom-input"
                                       name="openingen[poorten][eigenschappen-custom][]">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="button-row d-flex mt-4 col-12">
                <button class="btn btn-Light btn-outline-secondary js-btn-prev" type="button"
                        title="Prev">Vorige
                </button>
                <button class="btn btn-dark ml-auto js-btn-next" type="button"
                        title="Next">Volgende
                </button>
            </div>
        </div>
    </div>
</div>
