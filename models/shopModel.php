<?php

class shop extends dataBase {

    public $id = 0;
    public $name = '';
    public $description = '';
    public $mainPicture = '';
    public $addDate = '';
    public $idWorker = '';
    public $idCategorie = '';
    public $idProduct = 1;

    public function __construct() {
        parent::__construct();
    }
    public function allProducts() {
        $allProducts = $this->db->query('SELECT `id`,`name`, `description`, `mainPicture`, `addDate`, `idWorker`, `idCategorie` FROM `products`');
        $allProducts->execute();
        return $allProducts = $allProducts->fetchAll(PDO::FETCH_OBJ);
    }
    public function productInfos() {

        $query = 'SELECT `products`.`id` AS `id`,`products`.`name` AS `name`, `products`.`description` AS `description`, `products`.`mainPicture` AS `mainPicture`, `products`.`addDate`  AS `addDate`, `products`.`idWorker` AS `idWorker`, `products`.`idCategorie` AS `idCategorie`, `worker`.`firstname` AS `firstName`, `worker`.`lastName` AS `lastName` FROM `products` LEFT JOIN `worker` ON `worker`.`id` = `products`.`idWorker` WHERE `products`.`id` = :id';
        $productInfos = $this->db->prepare($query);
        $productInfos->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $productInfos->execute();
        return $productInfos = $productInfos->fetch(PDO::FETCH_OBJ);
    }
    public function allPictures() {
        $query = 'SELECT `id`,`name`, `idProduct` FROM `pictures` WHERE `idProduct` = :idProduct';
        $productInfos = $this->db->prepare($query);
        $productInfos->bindValue(':idProduct', $this->idProduct, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $productInfos->execute();
        return $productInfos = $productInfos->fetchAll(PDO::FETCH_OBJ);
    }
    public function lastTenproducts() {
        $allProducts = $this->db->query('SELECT `id`,`name`, `description`, `mainPicture`, `addDate`, `idWorker`, `idCategorie` FROM `products` ORDER BY `addDate` DESC LIMIT 10');
        $allProducts->execute();
        return $allProducts = $allProducts->fetchAll(PDO::FETCH_OBJ);
    }
    public function __destruct() {

    }

}

?>
