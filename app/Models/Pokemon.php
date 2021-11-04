<?php 

namespace Pokemon\Models;

use PDO;
use Pokemon\utils\Database;
use Pokemon\Models\CoreModel;

class Pokemon extends CoreModel
{
    private $nom;
    private $pv;
    private $attaque;
    private $defense;
    private $attaque_spe;
    private $defense_spe;
    private $vitesse;
    private $numero;


    public function findAll($order="")
    {
        $sql = "SELECT*FROM `pokemon`";

        if (!empty($order)) {
            if ($order == 'pv') {
                $sql .= " ORDER BY `pv` DESC";
            } else if ($order == 'attaque') {
                $sql .= " ORDER BY `attaque` DESC";
            } else if ($order == 'defense') {
                $sql .= " ORDER BY `defense` DESC";
            } else if ($order == 'atkspe') {
                $sql .= " ORDER BY `attaque_spe` DESC";
            } else if ($order == 'defspe') {
                $sql .= " ORDER BY `defense_spe` DESC";
            } else if ($order == 'vitesse') {
                $sql .= " ORDER BY `vitesse` DESC";
            } else if ($order == 'alphabet') {
                $sql .= " ORDER BY `nom` ASC";
            }
        }

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $pokemons = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokemon\Models\Pokemon');
        //dd($pokemons);
        return $pokemons;

    }


    public function findOnePokemon(int $id)
    {
        $sql = "SELECT * FROM pokemon
        INNER JOIN pokemon_type ON pokemon.numero = pokemon_type.pokemon_numero
        INNER JOIN `type` ON pokemon_type.type_id = `type`.`id`
        WHERE `pokemon_numero` = {$id}";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $pokemon = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokemon\Models\Pokemon');
        //dd($pokemon);
        return $pokemon;

    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @return  self
     */ 
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     *
     * @return  self
     */ 
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get the value of attaque_spe
     */ 
    public function getAttaque_spe()
    {
        return $this->attaque_spe;
    }

    /**
     * Set the value of attaque_spe
     *
     * @return  self
     */ 
    public function setAttaque_spe($attaque_spe)
    {
        $this->attaque_spe = $attaque_spe;

        return $this;
    }

    /**
     * Get the value of defense_spe
     */ 
    public function getDefense_spe()
    {
        return $this->defense_spe;
    }

    /**
     * Set the value of defense_spe
     *
     * @return  self
     */ 
    public function setDefense_spe($defense_spe)
    {
        $this->defense_spe = $defense_spe;

        return $this;
    }

    /**
     * Get the value of vitesse
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @return  self
     */ 
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}