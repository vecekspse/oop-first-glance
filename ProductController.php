<?php
class ProductController
{
    private $productManager;
    public $template;

    public function __construct() {
        $this->productManager = new ProductManager();
    }

    public function insertProduct($params) {
        if(isset($params['nazev'])) {
            $product = new Product(NULL, $params['nazev'], $params['barva'], $params['velikost'], $params['skladem']);
            $this->productManager->add($product);
            return 'index.php';
        }
    }

    public function getAllProducts() {
        return $this->productManager->findAll();
    }

    public function deleteProduct($id) {
        $product = $this->productManager->findById($id);
        if(!$product)
            throw new Exception('There is no such product');
        $this->productManager->deleteById($product);     
        return 'index.php';
    }


}