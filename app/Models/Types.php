<?php

namespace Pokemon\Models;

use PDO;
use Pokemon\utils\Database;
use Pokemon\Models\CoreModel;

class Types extends CoreModel
{
    private $name;
    private $color;

    public function findAllTypes()
    {
        $sql = "SELECT * FROM `type`
        ";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokemon\Models\Types');
        return $types;
    }

    public function findOneType(int $id)
    {
        $sql = "SELECT `pokemon_type`.*, `type`.`name` AS `type_name`, `type`.`color` AS `color`, `pokemon`.`nom` AS `nom`, `pokemon`.`numero` AS `numero`
        FROM `pokemon_type`
        INNER JOIN `pokemon` ON `pokemon_type`.`pokemon_numero` = `pokemon`.`numero`
        INNER JOIN `type` ON `pokemon_type`.`type_id` = `type`.`id`
        WHERE `type_id` = {$id}
        ";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $type = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokemon\Models\Types');
        return $type;
    }


    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
