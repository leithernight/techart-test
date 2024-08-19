<?php 

class News {

    public $conn = null;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "root", "task");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getAll($page) {
        $sql = "SELECT * FROM news ORDER BY date DESC LIMIT 4 OFFSET " . ($page - 1) * 4;
        $result = $this->conn->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getSingle($id) {
        $sql = "SELECT * FROM news WHERE id=$id";
        $result = $this->conn->query($sql);

        return $result->fetch_assoc();
    }

    public function getLast() {
        $sql = "SELECT * FROM news ORDER BY date DESC LIMIT 1";
        $result = $this->conn->query($sql);

        return $result->fetch_assoc();
    }

    public function getCount() {
        $sql = "SELECT COUNT(*) FROM news";
        $result = $this->conn->query($sql);
        $count = ceil(($result->fetch_column()) / 4);

        return $count;
    }
}