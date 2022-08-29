<?php
// src/Model/Entity/Gravity.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Gravity extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}