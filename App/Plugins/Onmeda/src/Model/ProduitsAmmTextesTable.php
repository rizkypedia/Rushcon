<?php namespace Onmeda\Model;

use RushCon\Model\Model as BaseModel;
use RushCon\Core\Camelizer as camelizer;

class ProduitsAmmTextesTable extends BaseModel {
    
    private $__tableName;
    
    public function __construct($connection) {
        parent::__construct($connection);
        $this->__tableName = $this->parseTableClassName(__CLASS__);
    }
    
     public function find($additionals = array()) {
        $decamelized = camelizer::decamelize($this->__tableName);
        return $this->findAll($decamelized, $additionals);
    }
    
    
}


