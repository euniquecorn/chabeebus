<?php

Class Database {
    private function connect() {
        try {
            $conn_string = DB_TYPE .":host=". DB_HOST .";dbname=". DB_NAME .";";
            return new PDO($conn_string, DB_USER, DB_PASS);
        } catch(PDOExeption $e) {
            die($e->getMessage());
        }
    }

    public function read($query, $data = []) {
        $db = $this->connect();
        $stm = $db->prepare($query);

        if (count($data) == 0) {
            $stm = $db->query($query);
            $check = 0;
            if ($stm) {
                $check = 1;
            }
        } else {
            $check = $stm->execute($data);
            show($check);
        }

        if($check) {
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function write($query, $data = []) {
        $db = $this->connect();
        $stm = $db->prepare($query);

        if (count($data) == 0) {
            $stm = $db->query($query);
            $check = 0;
            if ($stm) {
                $check = 1;
            }
        } else {
            $check = $stm->execute($data);
        }

        if($check) {
            return true;
        } else {
            return false;
        }
    }

    public function remove($query) {
        $db = $this->connect();
        $stm = $db->prepare($query);
        $check = $stm->execute($data);

        if($check) {
            return true;
        } else {
            return false;
        }
    }
}
