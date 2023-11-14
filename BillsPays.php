<?php
    class BillsPays extends Conn {

        public object $conn;

        public function list() :array {
            $this->conn = $this->conectar();
            $query = "SELECT b.* FROM bills_pays b ORDER BY name";
            $result = $this->conn->prepare($query);
            $result->execute();
            $retorno = $result->fetchAll();
            //var_dump($retorno);
            return $retorno;
        }
    }