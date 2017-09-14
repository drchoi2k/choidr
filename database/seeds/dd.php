<?php

use Illuminate\Database\Seeder;
use App\Menu_layout;

class Menu_layoutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Menu_layout::insert([['menu_srl'=>'11','title'=>'홈','regdate'=>'0'],
        			  ['menu_srl'=>'12','title'=>'회사소개','regdate'=>'0'],
        			  ['menu_srl'=>'13','title'=>'성형사업','regdate'=>'0'],
        			  ['menu_srl'=>'14','title'=>'금형사업','regdate'=>'0'],
        			  ['menu_srl'=>'15','title'=>'조립사업','regdate'=>'0'],
        			  ['menu_srl'=>'16','title'=>'품질정책','regdate'=>'0'],
        			  ['menu_srl'=>'17','title'=>'고객센터','regdate'=>'0'],
        			  ['menu_srl'=>'41','title'=>'설비현황','regdate'=>'0'],
        			  ['menu_srl'=>'61','title'=>'인증서류','regdate'=>'0']
       			     ]);
    }
}
