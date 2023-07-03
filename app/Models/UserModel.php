<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class UserModel extends Model 
    {
        public function userLogin($username, $password) {
            $db = \Config\Database::connect();

            $query = $db->query("
                SELECT
                    tu.username,
                    tr.name as role
                FROM track_user tu
                LEFT JOIN track_role tr ON tu.role_id = tr.id
                WHERE 
                    tu.username = '".$username."'
                AND tu.password = '".$password."'
                AND tu.deleted_at IS NULL
            ");
            
            $result = $query->getRowArray();
            $num_rows = $query->getNumRows();
            
            if($num_rows == 1) {
                return $result;
            } else {
                return false;
            }
        }
    }
?>