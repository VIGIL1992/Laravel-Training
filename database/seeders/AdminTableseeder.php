<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\admin;
use Hash;

class AdminTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('1234');
        $adminRecords = [
            ['username'=>'admin', 'password'=>$password],
        ];
        Admin::insert($adminRecords);
    }
}
