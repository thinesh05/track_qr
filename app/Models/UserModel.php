<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class UserModel extends Model 
    {
        public function userLogin($username, $password) {
            $db = \Config\Database::connect();

            $query = $db->query("
                SELECT
                    tu.id as user_id,
                    tu.username,
                    tu.fullname,
                    tu.email,
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

        public function updateLastLogin($user_id) {
            $db = \Config\Database::connect();

            $query = $db->query("
                UPDATE
                    track_user
                SET
                    last_login = '".gmdate("Y-m-d H:i:s", time() + (8 * 3600))."'
                WHERE 
                    id = '".$user_id."'
                AND deleted_at IS NULL
            ");
        }
    }
?>