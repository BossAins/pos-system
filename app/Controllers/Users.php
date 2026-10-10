<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'fullname' => 'John Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'fullname' => 'Maria Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'fullname' => 'Pedro Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'fullname' => 'Anna Reyes',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'fullname' => 'Mark Garcia',
                'role' => 'Staff'
            ]
        ];

        return view('users', $data);
    }
}