<?php
class AdvertisementModel {
    // Database interactions

    function getAllAdvertisements($db){
        try {
            // Select from advertisements and users table joined on same userid
            $query = "SELECT advertisements.title, users.name
                        FROM advertisements
                        INNER JOIN users ON advertisements.userid = users.id";
            $stmt = $db->query($query);
            $advertisements = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $advertisements;

        } catch (PDOException $e) {
            // Error handling
            die("Database query failed: " . $e->getMessage());
        }
    }
}
