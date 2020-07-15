<?php
class Usuarios {
    
    public function addMensagem($name, $email, $message) {
        
        global $pdo;
        $sql = $pdo->prepare("INSERT INTO usuarios SET name = :name, email = :email, message = :message");
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":message", $message);
        $sql->execute();
    }
}
