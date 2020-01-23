<?php


class WizardController
{
    public function createDossier($obj) {
        $gegevens = $obj->basisgegevens;
        $userController = new UserController();
        $klant = $this->createKlant($gegevens);
        $woning = $this->createWoning($gegevens);
        //todo change this now$gebruiker = $userController->sessionLogin();
        $gebruiker = Gebruiker::getById(1);
        $dossier = ModelFactory::createDossier(
            $klant->getId(),
            $woning->getId(),
            $gebruiker->getId(),
            $gegevens->verwantschap
            );
        $dossier = $dossier->add();
        $this->coupleEigenschappen($obj->eigenschappen, $obj->waarnemingen, $woning->getId());
        $this->coupleCustomEigenschappen($obj->custom, $obj->waarnemingen, $woning->getId());
        return $dossier;
    }

    public function coupleEigenschappen($eigenschappen, $waarnemingen, $woning_id) {
        foreach($eigenschappen as $categorie_key => $categorie) {
            foreach ($categorie as $eigenschap_key => $eigenschap) {
                if($eigenschap === "custom") continue;
                
                    
               
                    $waarneming = isset($waarnemingen->$categorie_key) ?  $waarnemingen->$categorie_key[$eigenschap_key]: 6;
                    $new_waarneming = ModelFactory::createWaarneming($eigenschap, $woning_id, $waarneming);
                    $new_waarneming->add();
                
                
            }
        }
    }

    public function coupleCustomEigenschappen($custom_eigenschappen, $waarnemingen, $woning_id) {
        foreach($custom_eigenschappen as $categorie_key => $categorie) {
            foreach ($categorie as $eigenschap_key => $eigenschap) {
                if($eigenschap === "") continue;
                $waarneming = $waarnemingen->$categorie_key ?  $waarnemingen->$categorie_key[$eigenschap_key]: 6;
                $new_eigenschap = ModelFactory::createEigenschap($categorie_key, $eigenschap)->add();
                $new_waarneming = ModelFactory::createWaarneming(
                    $new_eigenschap->getId(),
                    $woning_id,
                    $waarneming
                    );
                $new_waarneming->add();
            }
        }
    }


    private function createKlant($gegevens) {
        return ModelFactory::createKlant(
            $gegevens->voornaam,
            $gegevens->familienaam,
            $gegevens->email,
            $gegevens->telefoon
        )->add();
    }

    private function createWoning($gegevens) {
        $adres = $this->createAdres($gegevens);
        $verwarmd = $gegevens->verwarmd === "true"? 1: 0;
        return ModelFactory::createWoning(
            $adres->getId(),
            $gegevens->bouwjaar,
            $verwarmd
        )->add();
    }

    private function createAdres($gegevens) {
        $gemeente = $this->createGemeente($gegevens);
        return ModelFactory::createAdres(
            $gemeente->getId(),
            $gegevens->straat,
            $gegevens->nummer,
            $gegevens->bus
        )->add();
    }

    private function createGemeente($gegevens) {
        $gemeente = $this->filterGemeenteByPostcode(Gemeente::getAll(), $gegevens->postcode);
        $gemeente = $gemeente ? $gemeente : ModelFactory::createGemeente(
            $gegevens->gemeente,
            $gegevens->postcode
        )->add();
        return $gemeente;
    }

    public function filterGemeenteByPostcode($gemeentes, $postcode) {
        foreach ($gemeentes as $gemeente) {
            if($gemeente->getPostcode() === $postcode){
                return $gemeente;
            }
        }
        return null;
    }

}