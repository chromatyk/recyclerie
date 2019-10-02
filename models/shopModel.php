<?php

class shop extends dataBase {

    public $id = 0;
    public $name = '';
    public $description = '';
    public $mainPicture = '';
    public $addDate = '';
    public $idWorker = '';
    public $idCategorie = '';

    public function __construct() {
        parent::__construct();
    }
    public function allProducts() {
        $allProducts = $this->db->query('SELECT `id`,`name`, `description`, `mainPicture`, `addDate`, `idWorker`, `idCategorie` FROM `products`');
        $allProducts->execute();
        return $allProducts = $allProducts->fetchAll(PDO::FETCH_OBJ);
    }
    public function __destruct() {

    }

}

?>
