<div class="multisteps-form__panel shadow pb-4 px-4 rounded bg-white js-active gegevens">
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
                <input type="radio" name="gegevens[verwarmd]" id="verwarmd-true" value="true"><label
                        for="verwarmd-true">Ja</label>
                <input type="radio" name="gegevens[verwarmd]" id="verwarmd-false" value="false"><label
                        for="verwarmd-false">Nee</label>
            </div>

        </div>
        <div class="form-row mt-4">
            <button data-list-name="verwarming" class="btn btn-dark add-item" type="button" title="Toevoegen">+
                Toevoegen
            </button>
        </div>
        <div class="form-row mt-4 verwarming">
            <div class="col-12 addable-list-verwarming">
                <div class="list-item">
                    <select name="gegevens[verwarming][eigenschappen][]"
                            class="pick-animation__select form-control has-custom-input">
                        <option value="gelijkvloers-verwarmd">gelijkvloers is verwarmd</option>
                        <option value="gelijkvloers-niet-verwarmd">gelijkvloers is niet verwarmd</option>
                        <option value="1ste-verdiep-verwarmd">1ste verdiep is verwarmd</option>
                        <option value="1ste-verdiep-verwarmd">1ste verdiep is indirect verwarmd</option>
                        <option value="hellend-verwarmd">Ruimte onder hellend dak is verwarmd</option>
                        <option value="hellend-dak-niet-verwarmd">Ruimte onder hellend dak is niet verwarmd</option>
                        <option value="bepaalde-ruimtes-verwarmd">Slechts bepaalde ruimtes worden verwarmd</option>
                        <option value="custom">Andere zelf te specificeren tekstueel</option>
                    </select>
                    <input type="text" class="d-none w-100 my-3 custom-input"
                           name="gegevens[verwarming][eigenschappen-custom][]">

                </div>
            </div>
        </div>

    </div>
    <div class="button-row d-flex mt-4">

        <button class="btn btn-dark ml-auto js-btn-next" type="button"
                title="Next">Volgende
        </button>
    </div>
</div>