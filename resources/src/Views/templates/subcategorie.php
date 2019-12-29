<div class="multisteps-form__panel shadow p-4 rounded bg-white openingen">
    <h3 class="multisteps-form__title mb-4"><?php $categorie->getTitel()?></h3>
    <div class="multisteps-form__content">
        <div class="row">
            <div>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <?php
                    $first = true;
                    foreach ($subcategorieen as $subcategorie) {
                        $title = $subcategorie->getTitel();
                        $aria = $first ? "true" : "false";
                        $class = $first ? "active" : "";
                        echo
                        "<a class='nav-item nav-link $class'
                         id='nav-$title-tab'
                         data-toggle='tab'
                         href='#nav-$title'
                         role='tab'
                         aria-controls='nav-$title ?>'
                         aria-selected='$aria'>
                         $title
                         </a>";
                        $first = false;
                    }
                    ?>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <?php foreach ($subcategorieen as $subcategorie){
                    include("../resources/src/Views/templates/subcategorie/selectie.php");
                } ?>
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