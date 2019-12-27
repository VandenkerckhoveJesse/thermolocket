<div class="tab-pane fade" id="nav-<?php echo $subcategorie->getTitel()?>" role="tabpanel"
     aria-labelledby="nav-dakramen-tab">
    <div class="form-row mt-4">
        <button data-list-name="dakramen" class="btn btn-dark add-item" type="button" title="Toevoegen">
            Toevoegen
        </button>
    </div>
    <div class="form-row mt-4 addable-list-dakramen fixed-height-scrollable">
        <div class="list-item">
            <div class="col-12 mb-3">
                <select name="eigenschappen[<?php echo $subcategorie->getId()?>][]" class="picky-animation__select form-control has-custom-input">
                    <?php foreach($subcategorie->getEigenschappen() as $eigenschap) : ?>
                        <option value="<?php echo $eigenschap->getId() ?>">
                            <?php echo $eigenschap->getBeschrijving()?>
                        </option>
                    <?php endforeach;?>
                    <option value="custom">Andere zelf te specificeren tekstueel</option>
                </select>
            </div>
            <div class="col-12 mb-3">
                <select name="waarnemingen[<?php echo $subcategorie->getId()?>][]" class="pick-animation__select form-control waarneming-box">
                    <?php foreach($waarneming_types as $waarneming_type):?>
                        <option value="<?php echo $waarneming_type->getId() ?>"><?php echo $waarneming_type->getTitel() ?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="col-12 mb-4">
                <input type="text" class="d-none w-100 my-3 custom-input" name="custom[<?php echo $subcategorie->getId()?>][]">
            </div>
        </div>
    </div>
</div>