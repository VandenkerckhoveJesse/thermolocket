<div class="tab-pane fade" id="nav-<?php echo $subcategorie->getTitel()?>"
     role="tabpanel" aria-labelledby="nav-ramen-tab">
    <div class="form-row mt-4">
        <button data-list-name="ramen" class="btn btn-dark add-item" type="button" title="Toevoegen">+ Nieuw item toevoegen</button>
    </div>
    <div class="form-row addable-list-ramen fixed-height-scrollable">
        <div class="list-item">
            <div class="col-12 mb-2">
                <div class="d-flex">
                    <select name="eigenschappen[<?php echo $subcategorie->getId()?>][]" class="picky-animation__select form-control has-custom-input">
                        <?php foreach($subcategorie->getEigenschappen() as $eigenschap) : ?>
                            <option value="<?php echo $eigenschap->getId() ?>">
                                <?php echo $eigenschap->getBeschrijving()?>
                            </option>
                        <?php endforeach;?>
                        <option value="custom">Andere zelf te specificeren tekstueel</option>
                    </select>
                    <button type="button" disabled class="btn btn-danger ml-2 remove-item"><i class="fas fa-trash-alt"></i></button>
                </div>
                <div class="col-12">
                    <input type="text" class="d-none w-100 my-3 custom-input" name="custom[<?php echo $subcategorie->getId()?>][]">
                </div>
            </div>
            <div class="col-12 mb-2">
                <select name="waarnemingen[<?php echo $subcategorie->getId()?>][]" class="pick-animation__select form-control waarneming-box">
                    <?php foreach($waarneming_types as $waarneming_type):?>
                        <option value="<?php echo $waarneming_type->getId() ?>"><?php echo $waarneming_type->getTitel() ?></option>
                    <?php endforeach;?>
                </select>
            </div>

        </div>
    </div>
</div>