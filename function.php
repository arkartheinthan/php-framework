<?php
    function db_connect()
    {
        try {
            return $pdo = new PDO("mysql:host=localhost; dbname=test", "arkar", "arkar191066");
            // echo "Connected";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function query($pdo)
    {
        $statement = $pdo->prepare("select * from users");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }