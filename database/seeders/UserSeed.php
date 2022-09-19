<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $items = [
            //admin uses
            ['first_name' => 'Admin','last_name' => 'User','email' => 'admin@admin.com','password' => '$2y$10$LyIImkT4Ey/YxzE4fdgfO.pgDxmKSh1dwvEqUnNXamcZ8yUwLe56W','role_id' => 1],
            //dummy users
            ['first_name' => $faker->firstName,'last_name' => $faker->lastName,'email' => $faker->unique()->safeEmail,'password' => '$2y$10$LyIImkT4Ey/YxzE4fdgfO.pgDxmKSh1dwvEqUnNXamcZ8yUwLe56W','role_id' => 2,'dob' => '2000-12-01','gender'=>'female','annual_income'=>50000,'occupation'=>'Private job','family_type'=>'Joint family','manglik_status'=>0,'expected_annual_income_min'=>250000,'expected_annual_income_max'=>500000,'expected_occupation'=>'Private job','expected_family_type'=>'Joint family','expected_manglik_status'=>0],
            ['first_name' => $faker->firstName,'last_name' => $faker->lastName,'email' => $faker->unique()->safeEmail,'password' => '$2y$10$LyIImkT4Ey/YxzE4fdgfO.pgDxmKSh1dwvEqUnNXamcZ8yUwLe56W','role_id' => 2,'dob' => '2000-09-01','gender'=>'male','annual_income'=>100000,'occupation'=>'Government job','family_type'=>'Nuclear family','manglik_status'=>1,'expected_annual_income_min'=>10000,'expected_annual_income_max'=>100000,'expected_occupation'=>'Government job','expected_family_type'=>'Nuclear family','expected_manglik_status'=>1],
            ['first_name' => $faker->firstName,'last_name' => $faker->lastName,'email' => $faker->unique()->safeEmail,'password' => '$2y$10$LyIImkT4Ey/YxzE4fdgfO.pgDxmKSh1dwvEqUnNXamcZ8yUwLe56W','role_id' => 2,'dob' => '2000-08-01','gender'=>'female','annual_income'=>90000,'occupation'=>'Business','family_type'=>'Joint family','manglik_status'=>0,'expected_annual_income_min'=>45000,'expected_annual_income_max'=>900000,'expected_occupation'=>'Business','expected_family_type'=>'Joint family','expected_manglik_status'=>0],
            ['first_name' => $faker->firstName,'last_name' => $faker->lastName,'email' => $faker->unique()->safeEmail,'password' => '$2y$10$LyIImkT4Ey/YxzE4fdgfO.pgDxmKSh1dwvEqUnNXamcZ8yUwLe56W','role_id' => 2,'dob' => '2001-12-01','gender'=>'male','annual_income'=>80000,'occupation'=>'Private job','family_type'=>'Nuclear family','manglik_status'=>1,'expected_annual_income_min'=>10000,'expected_annual_income_max'=>100000,'expected_occupation'=>'Government job','expected_family_type'=>'Nuclear family','expected_manglik_status'=>1],
            ['first_name' => $faker->firstName,'last_name' => $faker->lastName,'email' => $faker->unique()->safeEmail,'password' => '$2y$10$LyIImkT4Ey/YxzE4fdgfO.pgDxmKSh1dwvEqUnNXamcZ8yUwLe56W','role_id' => 2,'dob' => '2002-12-01','gender'=>'female','annual_income'=>70000,'occupation'=>'Government job','family_type'=>'Joint family','manglik_status'=>0,'expected_annual_income_min'=>35000,'expected_annual_income_max'=>100000,'expected_occupation'=>'Private job','expected_family_type'=>'Joint family','expected_manglik_status'=>0],
            ['first_name' => $faker->firstName,'last_name' => $faker->lastName,'email' => $faker->unique()->safeEmail,'password' => '$2y$10$LyIImkT4Ey/YxzE4fdgfO.pgDxmKSh1dwvEqUnNXamcZ8yUwLe56W','role_id' => 2,'dob' => '2003-12-01','gender'=>'male','annual_income'=>60000,'occupation'=>'Private job','family_type'=>'Joint family','manglik_status'=>0,'expected_annual_income_min'=>60000,'expected_annual_income_max'=>120000,'expected_occupation'=>'Private job','expected_family_type'=>'Nuclear family','expected_manglik_status'=>0],
            ['first_name' => $faker->firstName,'last_name' => $faker->lastName,'email' => $faker->unique()->safeEmail,'password' => '$2y$10$LyIImkT4Ey/YxzE4fdgfO.pgDxmKSh1dwvEqUnNXamcZ8yUwLe56W','role_id' => 2,'dob' => '2005-12-01','gender'=>'female','annual_income'=>50000,'occupation'=>'Government job','family_type'=>'Joint family','manglik_status'=>0,'expected_annual_income_min'=>50000,'expected_annual_income_max'=>100000,'expected_occupation'=>'Business','expected_family_type'=>'Joint family','expected_manglik_status'=>0],
            ['first_name' => $faker->firstName,'last_name' => $faker->lastName,'email' => $faker->unique()->safeEmail,'password' => '$2y$10$LyIImkT4Ey/YxzE4fdgfO.pgDxmKSh1dwvEqUnNXamcZ8yUwLe56W','role_id' => 2,'dob' => '2004-12-01','gender'=>'male','annual_income'=>40000,'occupation'=>'Private job','family_type'=>'Nuclear family','manglik_status'=>1,'expected_annual_income_min'=>20000,'expected_annual_income_max'=>120000,'expected_occupation'=>'Government job','expected_family_type'=>'Nuclear family','expected_manglik_status'=>0],
            ['first_name' => $faker->firstName,'last_name' => $faker->lastName,'email' => $faker->unique()->safeEmail,'password' => '$2y$10$LyIImkT4Ey/YxzE4fdgfO.pgDxmKSh1dwvEqUnNXamcZ8yUwLe56W','role_id' => 2,'dob' => '2008-12-01','gender'=>'female','annual_income'=>110000,'occupation'=>'Government job','family_type'=>'Joint family','manglik_status'=>0,'expected_annual_income_min'=>30000,'expected_annual_income_max'=>160000,'expected_occupation'=>'Private job','expected_family_type'=>'Joint family','expected_manglik_status'=>1],
            ['first_name' => $faker->firstName,'last_name' => $faker->lastName,'email' => $faker->unique()->safeEmail,'password' => '$2y$10$LyIImkT4Ey/YxzE4fdgfO.pgDxmKSh1dwvEqUnNXamcZ8yUwLe56W','role_id' => 2,'dob' => '1992-12-01','gender'=>'male','annual_income'=>120000,'occupation'=>'Private job','family_type'=>'Nuclear family','manglik_status'=>0,'expected_annual_income_min'=>40000,'expected_annual_income_max'=>80000,'expected_occupation'=>'Business','expected_family_type'=>'Nuclear family','expected_manglik_status'=>0],
            ['first_name' => $faker->firstName,'last_name' => $faker->lastName,'email' => $faker->unique()->safeEmail,'password' => '$2y$10$LyIImkT4Ey/YxzE4fdgfO.pgDxmKSh1dwvEqUnNXamcZ8yUwLe56W','role_id' => 2,'dob' => '1993-12-01','gender'=>'female','annual_income'=>130000,'occupation'=>'Business','family_type'=>'Nuclear family','manglik_status'=>1,'expected_annual_income_min'=>50000,'expected_annual_income_max'=>100000,'expected_occupation'=>'Government job','expected_family_type'=>'Joint family','expected_manglik_status'=>0],
        ];

        foreach ($items as $item) {
            \App\Models\User::create($item);
        }
    }
}
