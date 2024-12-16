<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * 1. Administrateur
         * 2. Formateur
         * 3. Apprenant
         * php artisan db:seed --class=RoleSeeder
        */
        
        /* $role1 = new Role();
        $role1->libelle = "Administrateur";
        $role1->save();

        $role2 = new Role();
        $role2->libelle = "Formateur";
        $role2->save();

        $role3 = new Role();
        $role3->libelle = "Apprenant";
        $role3->save(); */

    }
}
