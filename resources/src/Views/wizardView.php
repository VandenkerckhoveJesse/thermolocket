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
                                    <!--CATEGORIES-->
                                    <button class="multisteps-form__progress-btn js-active gegevens-nav" type="button"
                                            title="Gegevens">Gegevens</button>
                                    <button class="multisteps-form__progress-btn gevel-nav" type="button"
                                            title="Gevel">Gevel</button>
                                    <button class="multisteps-form__progress-btn openingen-nav" type="button"
                                            title="Openingen">Openingen</button>
                                    <button class="multisteps-form__progress-btn muren-nav" type="button"
                                            title="Muren">Muren</button>
                                    <button class="multisteps-form__progress-btn dak-nav" type="button"
                                            title="Dark">Dak</button>
                                    <button class="multisteps-form__progress-btn energiebronnen-nav" type="button"
                                            title="Energiebronnen">Energiebronnen</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-11 m-auto">
                                <form class="multisteps-form__form" method="POST" action="create-dossier.php">
                                    <!--BASISGEGEVENS-->
                                    <div class="d-none house-images-input-container"></div>
                                    <?php
                                    $waarneming_types = WaarnemingType::getAll();
                                    $last = false;
                                    include("../resources/src/Views/templates/basisgegevens.php");
                                    ?>


                                    <!--GEVEL, Checkbox-->
                                    <?php
                                    $categorie = Categorie::getById(1);
                                    include("../resources/src/Views/templates/checkbox.php");
                                    ?>


                                    <!--OPENINGEN, subcategorie-->
                                    <?php
                                    $categorie = Categorie::getById(2);
                                    $subcategorieen = $categorie->getSubcategorieen();
                                    include("../resources/src/Views/templates/subcategorie.php")
                                    ?>

                                    <?php
                                    /*MUREN*/
                                    $categorie = Categorie::getById(8);
                                    include("../resources/src/Views/templates/selectie.php");

                                    /*DAK*/
                                    $categorie = Categorie::getById(9);
                                    include("../resources/src/Views/templates/selectie.php");

                                    /*ENERGIE*/
                                    $categorie = Categorie::getById(10);
                                    $last = true;
                                    include("../resources/src/Views/templates/selectie.php");
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </main>
        </div>