<?php

namespace App;

class CProducts
{
    public static function getProducts(int $limit)
    {
        $connection = new \PDO("mysql:host=localhost;dbname=vedita", "root", "");

        $stmt = $connection->prepare("SELECT * 
                                            FROM `products`
                                            WHERE `isHidden` = 0
                                            ORDER BY `DATE_CREATE` DESC
                                            LIMIT $limit");

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function hide(int $id)
    {
        $connection = new \PDO("mysql:host=localhost;dbname=vedita", "root", "");

        $stmt = $connection->prepare("UPDATE `products` 
                                            SET `isHidden` = 1 
                                            WHERE `id` = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }

    public static function changeProductQuantity(int $id, int $quantity)
    {
        $connection = new \PDO("mysql:host=localhost;dbname=vedita", "root", "");

        $stmt = $connection->prepare("UPDATE `products` 
                                            SET `PRODUCT_QUANTITY` = :quantity 
                                            WHERE `id` = :id");

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":quantity", $quantity);

        $stmt->execute();
    }
}