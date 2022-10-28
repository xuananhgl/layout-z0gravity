<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;
class BarsTable extends Table
{
    public function initialize(array $config)
    {


        $this->addBehavior('Translate', ['fields' => ['ENTREPRISES', 'SECTEUR', 'PROPOS','CONTACT', 'BLOG'],
        'allowEmptyTranslations' => false
         ]);


}
}
