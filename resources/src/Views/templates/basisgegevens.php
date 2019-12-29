<div class="multisteps-form__panel shadow pb-4 px-4 rounded bg-white js-active gegevens">
    <h3 class="multisteps-form__title">Basisgegevens</h3>
    <div class="multisteps-form__content">
        <div class="form-row mt-4">
            <div class="col-12 col-sm-6">
                <input name="basisgegevens[voornaam]" class="multisteps-form__input form-control" type="text"
                       placeholder="Voornaam" required/>
            </div>
            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                <input name="basisgegevens[familienaam]" required class="multisteps-form__input form-control" type="text"
                       placeholder="Famillienaam"/>
            </div>
        </div>
        <div class="form-row mt-4">
            <div class="col-12 col-sm-6">
                <input class="multisteps-form__input form-control" required type="email"
                       placeholder="Email" name="basisgegevens[email]"/>
            </div>
            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                <input name="basisgegevens[telefoon]" required class="multisteps-form__input form-control" type="text"
                       placeholder="Telefoon"/>
            </div>
        </div>
        <div class="form-row mt-4">
            <div class="col-12 col-sm-6">
                <select name="basisgegevens[verwantschap]" required class="pick-animation__select form-control">
                    <option value="" disabled selected>Verwantschap woning
                    </option>
                    <option value="Eigenaar">Eigenaar</option>
                    <option value="Verhuurder">Verhuurder</option>
                    <option value="Huurder">Huurder</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                <select name="basisgegevens[bouwjaar]" required class="pick-animation__select form-control">
                    <?php foreach(Bouwjaar::getAll() as $bouwjaar): ?>
                        <option value="<?php echo $bouwjaar->getId() ?>"><?php echo $bouwjaar->getBottom()."-".$bouwjaar->getTop() ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-row mt-4">
            <div class="col-12 col-sm-6">
                <input id="address-input" required name="basisgegevens[straat]" class="multisteps-form__input form-control" type="text"
                       placeholder="Straat"/>
            </div>
            <div class="col-12 col-sm-2 mt-2 mt-sm-0">
                <input name="basisgegevens[nummer]" required class="multisteps-form__input form-control" type="text"
                       placeholder="Nr"/>
            </div>
            <div class="col-12 col-sm-2 mt-2 mt-sm-0">
                <input name="basisgegevens[bus]" class="multisteps-form__input form-control" type="text"
                       placeholder="Bus"/>
            </div>
        </div>
        <div class="form-row mt-4">
            <div class="col-12 col-sm-6">
                <input id="city-input" required name="basisgegevens[gemeente]" class="multisteps-form__input form-control" type="text"
                       placeholder="Gemeente"/>
            </div>
            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                <input id="postcode-input" required name="basisgegevens[postcode]" class="multisteps-form__input form-control" type="text"
                       placeholder="Postcode"/>
            </div>
        </div>
        <div class="form-row mt-4">
            <p>Was de woning verwarmd:</p>
            <div id="verwarmd" class="col-12 col-sm-6">
                <input type="radio" name="basisgegevens[verwarmd]" id="verwarmd-true" value="true" required><label for="verwarmd-true">Ja</label>
                <input type="radio" name="basisgegevens[verwarmd]" id="verwarmd-false" value="false" required><label for="verwarmd-false">Nee</label>
            </div>
        </div>
        <div class="form-row mt-4">
            <button data-list-name="verwarming" class="btn btn-dark add-item" type="button" title="Toevoegen">+ Nieuw item toevoegen</button>
        </div>
        <div class="form-row verwarming">
            <div class="col-12 addable-list-verwarming">
                <div class="list-item">
                    <div class="d-flex">
                        <?php
                        $categorie = Categorie::getById(11);
                        ?>
                        <select name="eigenschappen[<?php echo $categorie->getId()?>][]"
                                class="pick-animation__select form-control has-custom-input">
                            <?php foreach($categorie->getEigenschappen() as $eigenschap) : ?>
                                <option value="<?php echo $eigenschap->getId() ?>">
                                    <?php echo $eigenschap->getBeschrijving()?>
                                </option>
                            <?php endforeach;?>
                            <option value="custom">Andere zelf te specificeren tekstueel</option>
                        </select>
                        <button type="button" disabled class="btn btn-danger ml-2 remove-item"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    <input type="text" class="d-none w-100 my-2 custom-input" name="custom[<?php echo $categorie->getId()?>][]">

                </div>
            </div>
        </div>
    </div>
    <div class="button-row d-flex mt-4">

        <button class="btn btn-dark ml-auto js-btn-next" type="button"
                title="Next">Volgende</button>
    </div>
</div>