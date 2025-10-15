<?php
    #require_once __DIR__ . '/../../../conexionphp/database.php';
    require_once '/var/www/conexionphp/database.php';


    class VisitaModel {
        private $conn;
        private $table = "visitas";
        
        public function __construct() {
            $database = new Database();
            $this->conn = $database->getConnection();
        }
        
        public function crear($nombre, $email, $comentario) {
            $query = "INSERT INTO " . $this->table . " 
                    (nombre, email, comentario) 
                    VALUES (:nombre, :email, :comentario)";
            
            $stmt = $this->conn->prepare($query);
            
            $stmt->bindParam(":nombre", $nombre);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":comentario", $comentario);
            
            return $stmt->execute();
        }
        
        public function obtenerTodas() {
            $query = "SELECT * FROM " . $this->table . " ORDER BY fecha_visita DESC";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>