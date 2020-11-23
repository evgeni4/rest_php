<?php


class Product
{
    private $conn;
    private $table = 'product';
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $description;
    /**
     * @var float
     */
    public $price;
    /**
     * @var int
     */
    public $quantity;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read()
    {
        $query = 'SELECT  id, title, description, price, quantity FROM ' . $this->table;
        $em = $this->conn->prepare($query);
        $em->execute();
        return $em;
    }

    public function create()
    {
        $query = 'INSERT INTO ' . $this->table . ' SET title = :title, description = :description, price = :price, quantity = :quantity';

        $stmt = $this->conn->prepare($query);


        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->quantity = htmlspecialchars(strip_tags($this->quantity));

        $stmt->bindParam(':title',$this->title);
        $stmt->bindParam(':description',$this->description);
        $stmt->bindParam(':price',$this->price);
        $stmt->bindParam(':quantity',$this->quantity);
        if ($stmt->execute()){
            return true;
        }
        printf("Error %s\n",$stmt->error);
        return  false;
    }
    public function update()
    {
        $query = 'UPDATE ' . $this->table . '
                                SET title = :title, description = :description, price = :price, quantity = :quantity
                                WHERE id = :id';

        $em = $this->conn->prepare($query);

        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->quantity = htmlspecialchars(strip_tags($this->quantity));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $em->bindParam(':title',$this->title);
        $em->bindParam(':description',$this->description);
        $em->bindParam(':price',$this->price);
        $em->bindParam(':quantity',$this->quantity);
        $em->bindParam(':id',$this->id);

        if ($em->execute()) {
            return true;
        }
        printf("Error: %s.\n", $em->error);

        return false;
    }
    public function delete()
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        $em = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $em->bindParam(':id',$this->id);
        if ($em->execute()) {
            return true;
        }
        printf("Error: %s.\n", $em->error);

        return false;
    }

    public function singleProduct()
    {
        $query = 'SELECT id, title, description, price, quantity  
                    FROM ' . $this->table.' WHERE id = ? LIMIT 0,1';
        $em = $this->conn->prepare($query);

        $em->bindParam(1,$this->id);

        $em->execute();

        $row = $em->fetch(PDO::FETCH_ASSOC);

        $this->title=$row['title'];
        $this->description=$row['description'];
        $this->price=$row['price'];
        $this->quantity=$row['quantity'];
    }
}