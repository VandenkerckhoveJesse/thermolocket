<div class="multisteps-form__panel shadow p-4 rounded bg-white gevel">
    <h3 class="multisteps-form__title"><?php echo $categorie->getTitel()?></h3>
    <div class="multisteps-form__content">
        <div class="form-row mt-4">
            <p>Kunnen we verwarmingsgerelateerde zaken terugvinden?</p>
            <div class="col-12">
                <?php foreach($categorie->getEigenschappen() as $eigenschap) : ?>
                <input type="checkbox" id="<?php echo $eigenschap->getId() ?>" name="<?php echo $eigenschap->getId() ?>" value="true">
                <label for="<?php echo $eigenschap->getId() ?>"><?php echo $eigenschap->getBeschrijving() ?></label>
                <br>
                <?php endforeach;?>


                <input type="text" class=" w-100 my-3 custom-input" name="custom_<?php echo $categorie->getId()?>" placeholder="Geef zelf een eigenschap op (optioneel)">

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