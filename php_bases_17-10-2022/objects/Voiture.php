<?php

class Voiture {

    private $poids;
    private $puissance;
    private $couleur;
    private $immatriculation;
    private $capacite_reservoir;
    private $niveau_essence;
    private $nombre_places;
    private $assurance;
    private $message_tableau_bord;

    public function __construct(string $immatriculation, string $couleur, int $poids, int $puissance, float $capacite_reservoir, int $nombre_places) {
        $this->immatriculation = $immatriculation;
        $this->couleur = $couleur;
        $this->poids = $poids;
        $this->puissance = $puissance;
        $this->capacite_reservoir = $capacite_reservoir;
        $this->nombre_places = $nombre_places;
        $this->niveau_essence = 5;
        $this->assurance = false;
        $this->message_tableau_bord = "Votre niveau d'essence est $this->niveau_essence litres";
    }


    // fonctions getter

    public function getImmatriculation() {
        return $this->immatriculation;
    }

    public function getcouleur() {
        return $this->couleur;
    }

    public function getpoids() {
        return $this->poids;
    }

    public function getpuissance() {
        return $this->puissance;
    }

    public function getcapacite_reservoir() {
        return $this->capacite_reservoir;
    }

    public function getnombre_places() {
        return $this->nombre_places;
    }

    public function getniveau_essence() {
        return $this->niveau_essence;
    }

    public function getassurance() {
        return $this->assurance;
    }

    public function getmessage_tableau_bord() {
        return $this->message_tableau_bord;
    }

   // fonction setter

   public function setAssurance($boolean) {
    $this->assurance = $boolean;
    if($boolean){
        $this->message_tableau_bord .= " et votre vehicule est assuré<br>";
    } else {
        $this->message_tableau_bord .= " et votre vehicule n'est pas assuré";
    }
    
   }

   // methodes

   public function Repeindre($newColor) {
    if(isset($newColor)){
        
        if($this->couleur === $newColor) {
            echo "Merci pour ce rafraichissement de couleur!<br>";
        } else {
            $this->couleur = $newColor;
            echo "Superbe la nouvelle couleur!<br>";
        }

    } else {
        echo "Vous devez choisir une couleur<br>";
    }
       
   }

   public function Mettre_essence ($quantite) {
        if($quantite <= ($this->capacite_reservoir-$this->niveau_essence)) {
            $this->niveau_essence += $quantite;
            echo "Votre niveau d'essence est {$this->niveau_essence} litres<br>";
            echo $this->message_tableau_bord;
        } else {
            echo "\nCette quantité de carburant depasse la capacité de votre reservoir<br>";
        }
        
   }

   public function Se_deplacer ($distance, $vitesse_moyenne) {
            if($vitesse_moyenne < 50) {
                $consommation = 10 * $distance/100;
                if($consommation < $this->niveau_essence) {
                    $this->niveau_essence -= $consommation;
                    echo "Votre  trajet va consommer $consommation";
                } else {
                    echo "Ce trajet va consommer plus que votre niveau d'essence";
                };
                    
                
            } elseif ($vitesse_moyenne >= 50 && $vitesse_moyenne < 90) {
                $consommation = 5 * $distance/100;
                if($consommation < $this->niveau_essence) {
                    $this->niveau_essence -= $consommation;
                    echo "Votre  trajet va consommer $consommation";
                } else {
                    echo "Ce trajet va consommer plus que votre niveau d'essence";
                };
            } elseif ($vitesse_moyenne >= 90 && $vitesse_moyenne < 130) {
                $consommation = 8 * $distance/100;
                if($consommation < $this->niveau_essence) {
                    $this->niveau_essence -= $consommation;
                    echo "Votre  trajet va consommer $consommation";
                } else {
                    echo "Ce trajet va consommer plus que votre niveau d'essence";
                };
            } elseif ($vitesse_moyenne >= 130) {
                $consommation = 12 * $distance/100;
                if($consommation < $this->niveau_essence) {
                    $this->niveau_essence -= $consommation;
                    echo "Votre  trajet va consommer $consommation litres";
                } else {
                    echo "Ce trajet va consommer plus que votre niveau d'essence";
                };
            }
   }

   
}

;

