<?php


class ModelFactory
{

    public function createAdres($gemeente_id, $straat, $nummer, $bus) {
        $adres = new Adres();
        $adres->setGemeenteId($gemeente_id);
        $adres->setStraat($straat);
        $adres->setNummer($nummer);
        $adres->setBus($bus);
    }

    public function createAfbeelding($woning_id, $folder, $richting, $nummer) {
        $afbeelding = new Afbeelding();
        $afbeelding->setWoningId($woning_id);
        $afbeelding->setFolder($folder);
        $afbeelding->setRichting($richting);
        $afbeelding->setNummer($nummer);
    }

    public function createBouwjaar($top, $bottom) {
        $bouwjaar = new Bouwjaar();
        $bouwjaar->setTop($top);
        $bouwjaar->setBottom($bottom);
    }

    public function createCategorie($input_type_id, $titel, $gewicht, $geactiveerd) {
        $categorie = new Categorie();
        $categorie->setInputTypeId($input_type_id);
        $categorie->setTitel($titel);
        $categorie->setGewicht($gewicht);
        $categorie->setGeactiveerd($geactiveerd);
    }

    public function createDossier($klant_id, $woning_id, $gebruiker_id, $verwantschap) {
        $dossier = new Dossier();
        $dossier->setKlantId($klant_id);
        $dossier->setWoningId($woning_id);
        $dossier->setGebruikerId($gebruiker_id);
        $dossier->setVerwantschap($verwantschap);
    }

    public function createEigenschap($categorie_id, $beschrijving) {
        $eigenschap = new Eigenschap();
        $eigenschap->setCategorie_id($categorie_id);
        $eigenschap->setBeschrijving($beschrijving);
    }

    public function createGebruiker($naam, $wachtwoord, $email, $ingeschakeld) {
        //todo Handle this exception
        $gebruiker = new Gebruiker();
        $gebruiker->setNaam($naam);
        $gebruiker->setWachtwoord($wachtwoord);
        $gebruiker->setEmail($email);
        $gebruiker->setIngeschakeld($ingeschakeld);
    }

    public function createGemeente($naam, $postcode) {
        $gemeente = new Gemeente();
        $gemeente->setNaam($naam);
        $gemeente->setPostcode($postcode);
    }

    public function createInputType($titel) {
        $input_type = new InputType();
        $input_type->setTitel($titel);
    }

    public function createKlant($voornaam, $famillienaam, $email, $telefoon) {
        $klant = new Klant();
        $klant->setVoornaam($voornaam);
        $klant->setFamillienaam($famillienaam);
        $klant->setEmail($email);
        $klant->setTelefoon($telefoon);
    }

    public function createSessie($gebruikers_id) {
        $sessie = new Sessie();
        $sessie->setGebruikersId($gebruikers_id);
    }

    public function createWaarneming($titel, $kleur) {
        $waarneming = new Waarneming();
        $waarneming->setTitel($titel);
        $waarneming->setKleur($kleur);
    }

    public function createWoning($adres_id, $bouwjaar) {
        $woning = new Woning();
        $woning->setAdresId($adres_id);
        $woning->setBouwjaar($bouwjaar);
    }


}