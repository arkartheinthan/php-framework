<?php
    class QueryBulider
    {
        protected $pdo;
        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
        public function all()
        {
            $statement = $this->pdo->prepare("select * from users");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }