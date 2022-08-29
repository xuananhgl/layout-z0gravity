<?php
// src/Model/Table/GravityTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class GravityTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}