<?php
class UserModel {
    // Database interactions

    function getUserData($db){
        try {
            // Select from users table
            $query = "SELECT * FROM users";
            $stmt = $db->query($query);
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $users;
    

        } catch (PDOException $e) {
            // Error handling
            die("Database query failed: " . $e->getMessage());
        }
    }
}
