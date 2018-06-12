<?php

namespace common\components\models\enu;

abstract class CategoryType {


	public static $labels = [
	'news' => "news",
	'product' => "product",
	];

	const NEWS = 'news';
	const PRODUCT = 'product';
}