<?php


class ModelFactory
{

    public static function createAdres($gemeente_id, $straat, $nummer, $bus) {
        $adres = new Adres();
        $adres->setGemeenteId($gemeente_id);
        $adres->setStraat($straat);
        $adres->setNummer($nummer);
        $adres->setBus($bus);
        return $adres;
    }

    public static function createAfbeelding($woning_id, $folder, $richting, $nummer) {
        $afbeelding = new Afbeelding();
        $afbeelding->setWoningId($woning_id);
        $afbeelding->setFolder($folder);
        $afbeelding->setRichting($richting);
        $afbeelding->setNummer($nummer);
        return $afbeelding;
    }

    public static function createBouwjaar($top, $bottom) {
        $bouwjaar = new Bouwjaar();
        $bouwjaar->setTop($top);
        $bouwjaar->setBottom($bottom);
        return $bouwjaar;
    }

    public static function createCategorie($input_type_id, $titel, $gewicht, $geactiveerd) {
        $categorie = new Categorie();
        $categorie->setInputTypeId($input_type_id);
        $categorie->setTitel($titel);
        $categorie->setGewicht($gewicht);
        $categorie->setGeactiveerd($geactiveerd);
        return $categorie;
    }

    public static function createDossier($klant_id, $woning_id, $gebruiker_id, $verwantschap) {
        $dossier = new Dossier();
        $dossier->setKlantId($klant_id);
        $dossier->setWoningId($woning_id);
        $dossier->setGebruikerId($gebruiker_id);
        $dossier->setVerwantschap($verwantschap);
        return $dossier;
    }

    public static function createEigenschap($categorie_id, $beschrijving) {
        $eigenschap = new Eigenschap();
        $eigenschap->setCategorie_id($categorie_id);
        $eigenschap->setBeschrijving($beschrijving);
        return $eigenschap;
    }

    public static function createGebruiker($naam, $wachtwoord, $email, $ingeschakeld) {
        //todo Handle this exception
        $gebruiker = new Gebruiker();
        $gebruiker->setNaam($naam);
        $gebruiker->setWachtwoord($wachtwoord);
        $gebruiker->setEmail($email);
        $gebruiker->setIngeschakeld($ingeschakeld);
        return $gebruiker;
    }

    public static function createGemeente($naam, $postcode) {
        $gemeente = new Gemeente();
        $gemeente->setNaam($naam);
        $gemeente->setPostcode($postcode);
        return $gemeente;
    }

    public static function createInputType($titel) {
        $input_type = new InputType();
        $input_type->setTitel($titel);
        return $input_type;
    }

    public static function createKlant($voornaam, $famillienaam, $email, $telefoon) {
        $klant = new Klant();
        $klant->setVoornaam($voornaam);
        $klant->setFamillienaam($famillienaam);
        $klant->setEmail($email);
        $klant->setTelefoon($telefoon);
        return $klant;
    }

    public function createSessie($gebruikers_id) {
        $sessie = new Sessie();
        $sessie->setGebruikersId($gebruikers_id);
        return $sessie;
    }

    public static function createWaarneming($titel, $kleur) {
        $waarneming = new Waarneming();
        $waarneming->setTitel($titel);
        $waarneming->setKleur($kleur);
        return $waarneming;
    }

    public static function createWoning($adres_id, $bouwjaar) {
        $woning = new Woning();
        $woning->setAdresId($adres_id);
        $woning->setBouwjaarId($bouwjaar);
        return $woning;
    }


}