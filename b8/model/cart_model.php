<?php
// dinh nghia mang du lieu

function getAllDataProduct()
{
	$data = [
		[
			'id' => 1,
			'name' => 'Iphone 5',
			'price' => 10000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/190322/iphone-xs-max-256gb-white-600x600.jpg',
			'qty' => 5
		],
		[
			'id' => 2,
			'name' => 'Iphone 6',
			'price' => 12000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/190322/iphone-xs-max-256gb-white-600x600.jpg',
			'qty' => 10
		],
		[
			'id' => 3,
			'name' => 'Iphone 7',
			'price' => 13000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/190322/iphone-xs-max-256gb-white-600x600.jpg',
			'qty' => 6
		],
		[
			'id' => 4,
			'name' => 'Iphone 8',
			'price' => 20000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/190322/iphone-xs-max-256gb-white-600x600.jpg',
			'qty' => 12
		]
	];

	return $data;
}