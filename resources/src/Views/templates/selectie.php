<div class="multisteps-form__panel shadow p-4 rounded bg-white muur">
    <h3 class="multisteps-form__title"><?php echo $categorie->getTitel()?></h3>
    <div class="multisteps-form__content">
        <div class="form-row mt-4">
            <button data-list-name="muren" class="btn btn-dark add-item" type="button" title="Toevoegen">+
                Toevoegen
            </button>
        </div>
        <div class="form-row mt-4 addable-list-muren fixed-height-scrollable">
            <div class="list-item">
                <div class="col-12 mb-3">
                    <select name="muren[eigenschappen][]" class="picky-animation__select form-control has-custom-input">
                        <?php foreach($categorie->getEigenschappen() as $eigenschap) : ?>
                        <option value="<?php echo $eigenschap->getId() ?>">
                            <?php echo $eigenschap->getBeschrijving()?>
                        </option>
                        <?php endforeach; ?>
                        <option value="custom">Andere zelf te specificeren tekstueel</option>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <select name="" class="pick-animation__select form-control waarneming-box">
                        <?php foreach($waarneming_types as $waarneming_type):?>
                        <option value="<?php echo $waarneming_type->getId() ?>"><?php echo $waarneming_type->getTitel() ?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="col-12 mb-4">
                    <input type="text" class="d-none w-100 my-3 custom-input" name="custom_<?php echo $categorie->getId()?>">
                </div>


            </div>
        </div>
    </div>
</div>