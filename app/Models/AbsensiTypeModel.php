<?php namespace App\Models;

use CodeIgniter\Model;

class AbsensiTypeModel extends Model
{
    function getUserByUsername($username)
    {
        $db = \Config\Database::connect();
        $builder = $db->table("user_login u")
            ->select("u.user_id, u.username, e.employee_id, e.employee_name, r.role_id, r.role_name,
                , 50 as radius_verification_limit")
            ->join('user_role r', 'r.role_id = u.role_id')
            ->join('employee e', 'e.employee_id = u.employee_id')
            ->where('u.username', $username)
            ->where('u.is_active', 1);
        if ($row = $builder->get()->getRow()) {
            return $row;
        } else {
            return null;
        }
    }
}