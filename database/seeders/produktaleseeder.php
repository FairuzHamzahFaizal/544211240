<?php
use	Illuminate\Database\Seeder;
class	produktaleseeder	extends	Seeder
{
public	function	run()
{
DB::table('produk')->insert(array(
['nama_produk'	=>	'Sabun	Lifebuoy',	'harga_jual'	=>	'2000'],
['nama_produk'	=>	'Shampoo	Sunsilk',	'harga_jual'	=>	'4000'],
['nama_produk' => 'Sabun Lifebuoy', 'harga_jual' => '2000', 'harga_beli' => '1500'],
['nama_produk' => 'Shampoo Sunsilk', 'harga_jual' => '4000', 'harga_beli' => '3000']
));
}
}