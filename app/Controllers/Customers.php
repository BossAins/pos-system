<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'fullname' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'fullname' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'fullname' => 'Pedro Reyes',
                'email' => 'pedro@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'fullname' => 'Anna Garcia',
                'email' => 'anna@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'fullname' => 'Carlo Mendoza',
                'email' => 'carlo@gmail.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers', $data);
    }
}