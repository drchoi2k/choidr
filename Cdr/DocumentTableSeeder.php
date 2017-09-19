<?php

use Illuminate\Database\Seeder;
use App\Document;

class DocumentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Document::insert([['email'=>'drchoi2k@naver.com','readCount'=>'1','commentCount'=>'2','title'=>'우리들의 이야기','content'=>'마을의 한 젊은이가 큰 뜻을 품고']]);
    }
}
