<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name'=>'kiran',
            'email'=>'kiran@gmail.com',
            'contact'=>'89668',
            'place'=>'okfnnbx',
        ]);
    
    Customer::create([
        'name'=>'meera',
        'email'=>'meera@gmail.com',
        'contact'=>'00998099',
        'place'=>'nbvcx',
    ]);
       }

}
