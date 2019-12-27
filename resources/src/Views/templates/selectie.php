<div class="multisteps-form__panel shadow p-4 rounded bg-white muur">
    <h3 class="multisteps-form__title"><?php echo $categorie->getTitel()?></h3>
    <div class="multisteps-form__content">
        <div class="form-row mt-4">
            <button data-list-name="<?php echo $categorie->getTitel()?>" class="btn btn-dark add-item" type="button" title="Toevoegen">+
                Toevoegen
            </button>
        </div>
        <div class="form-row mt-4 addable-list-<?php echo $categorie->getTitel()?> fixed-height-scrollable">
            <div class="list-item">
                <div class="col-12 mb-3">
                    <select name="eigenschappen[<?php echo $categorie->getId()?>][]" class="picky-animation__select form-control has-custom-input">
                        <?php foreach($categorie->getEigenschappen() as $eigenschap) : ?>
                        <option value="<?php echo $eigenschap->getId() ?>">
                            <?php echo $eigenschap->getBeschrijving()?>
                        </option>
                        <?php endforeach; ?>
                        <option value="custom">Andere zelf te specificeren tekstueel</option>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <select name="waarnemingen[<?php echo $categorie->getId()?>][]" class="pick-animation__select form-control waarneming-box">
                        <?php foreach($waarneming_types as $waarneming_type):?>
                        <option value="<?php echo $waarneming_type->getId() ?>"><?php echo $waarneming_type->getTitel() ?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="col-12 mb-4">
                    <input type="text" class="d-none w-100 my-3 custom-input" name="custom[<?php echo $categorie->getId()?>][]">
                </div>
            </div>
        </div>
        <div class="button-row d-flex mt-4">
            <button class="btn btn-Light btn-outline-secondary js-btn-prev" type="button"
                    title="Prev">Vorige</button>
            <input class="btn btn-Light btn-outline-secondary" type="submit"
                    />
            <button class="btn btn-dark ml-auto js-btn-next" type="button"
                    title="Next">Volgende</button>
        </div>
    </div>
</div>