 <?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([['name'=>'사장','description'=>'임원'],
        			  ['name'=>'이사','description'=>'임원'],
        			  ['name'=>'부장','description'=>'부서장'],
        			  ['name'=>'차장','description'=>'부서장'],
        			  ['name'=>'과장','description'=>'부서장'],
        			  ['name'=>'사원','description'=>'사원']
       			     ]);
    }
}
