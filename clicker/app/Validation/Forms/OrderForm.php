<?php

namespace Clicker\Validation\Forms;

use Respect\Validation\Validator as v;

class OrderForm
{
	public static function rules(){
		return [
			'email'=>v::email(),
			'name'=>v::alpha(' '),
			'address1'=>v::alnum(' '),
			'address2'=>v::optional(v::alnum(' -')),
			'city'=>v::alnum(' '),
			'post_code'=>v::alnum(' ')
		];
	}
}