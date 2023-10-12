<?php

use Illuminate\Database\Seeder;
use App\Models\Users;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 清空数据集表
        Users::truncate();
//        生成100条记录
        factory(Users::class,100)->create();
//        更新id为1的用户为admin
        Users::where('id',1)->update(['username'=>'admin']);
    }
}
