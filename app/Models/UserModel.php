<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class UserModel extends Model 
    {
        public function userLogin($username, $password) {
            $query = $db->query('select * from track_user');
            
            $result = $query->getResult();

            return $result;
        }
    }
?>