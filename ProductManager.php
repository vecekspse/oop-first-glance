<?php
class ProductManager {
  private $connection;

  public function __construct() {
        $db = new Database();
        $this->connection = $db->getConnection();
  }

  public function add(Product $product) {
      $stmt = $this->connection->prepare('INSERT INTO tricka VALUES (:id, :nazev, :barva, :velikost, :skladem);');
      $stmt->execute([':id' => NULL,
                      ':nazev' => $product->getNazev(),
                      ':barva' => $product->getBarva(),
                      ':velikost' => $product->getVelikost(),
                      ':skladem' => $product->getSkladem()]);

      if(!$stmt) {
          throw new Exception('Insert failed. Error number: ' . $stmt->errno);
      }
      $product = $product->setId($this->connection->lastInsertId());
      return $product;
  }

  public function edit(Product $product) {
          $stmt = $this->connection->prepare('UPDATE tricka SET nazev = :nazev, barva = :barva, velikost = :velikost, skladem = :skladem WHERE id = :id');
          $stmt->execute([':id' => $product->getId(),
              ':nazev' => $product->getNazev(),
              ':barva' => $product->getBarva(),
              ':velikost' => $product->getVelikost(),
              ':skladem' => $product->getSkladem()]);

          if(!$stmt){
              throw new Exception('Update failed. Error number: ' . $stmt->errno);
          }
          return $stmt->rowCount();
  }

  public function deleteById(Product $product) {
      $stmt = $this->connection->prepare('DELETE FROM tricka WHERE id = :id');
      $stmt->execute([':id' => $product->getId()]);
      if(!$stmt) {
          throw new Exception('Delete failed. Error number ' . $stmt->errno);
      }
      return $stmt->rowCount();
  }

  public function findAll(){
      $stmt = $this->connection->prepare('SELECT * FROM tricka');
      $stmt->execute();
      if($stmt->rowCount() === 0)
          return 0;
      $data = [];
      while($row = $stmt->fetch()) {
          $data[] = new Product($row['id'], $row['nazev'], $row['barva'], $row['velikost'], $row['skladem']);
      }
      return $data;
  }

  public function findById($id) {
      $stmt = $this->connection->prepare('SELECT * FROM tricka WHERE id = :id');
      $stmt->execute([':id' => $id]);
      if($stmt->rowCount() === 0)
        return 0;
      $row = $stmt->fetch();
      return new Product($row['id'], $row['nazev'], $row['barva'], $row['velikost'], $row['skladem']);
  }
  

}