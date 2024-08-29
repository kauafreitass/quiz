<?php 

require_once 'C:\xampp\htdocs\quiz\model\SelectRandomModel.php';

class SelectRandom {
    
    public $selectRandomModel;

    public function __construct($pdo)
    {
        $this->selectRandomModel = new SelectRandomModel($pdo);
    }

    public function selectAnswerRandom() {
        $this->selectRandomModel->selectAnswerRandom();
    }
}