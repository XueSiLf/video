<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDPHP framework]
 * |      Site: www.hdphp.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

use hdphp\database\Seeder;

class UsersTableSeeder extends Seeder {
	//执行
	public function up() {
		for ( $i = 0;$i < 100;$i ++ ) {
			Db::table( 'article' )->insert( [ 'title' => '后盾人' . md5( $i ) ] );
		}
	}

	//回滚
	public function down() {
		Schema::truncate('article');
	}
}