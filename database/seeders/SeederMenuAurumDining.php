<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederMenuAurumDining extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu_aurum_dining')->insert([
            [
                'nama_menu' => 'Truffle Infused Fried Rice',
                'deskripsi_menu' => 'Nasi goreng premium dengan aroma truffle oil dan taburan wagyu slice.',
                'harga' => 125000,
                'asset' => 'img/aurum-dining/menu/truffle-fried-rice.jpg',
            ],
            [
                'nama_menu' => 'Foie Gras Satay',
                'deskripsi_menu' => 'Sate modern berbahan foie gras panggang, dilumuri saus kacang khas Perancis.',
                'harga' => 185000,
                'asset' => 'img/aurum-dining/menu/foie-gras-satay.jpg',
            ],
            [
                'nama_menu' => 'Wagyu Beef Consommé',
                'deskripsi_menu' => 'Sup kaldu bening dengan potongan wagyu A5, disajikan dengan garnish edible flower.',
                'harga' => 210000,
                'asset' => 'img/aurum-dining/menu/wagyu-consomme.jpg',
            ],
            [
                'nama_menu' => 'Lobster Thermidor Noodles',
                'deskripsi_menu' => 'Mie buatan tangan disajikan dengan lobster thermidor creamy dan keju gruyère.',
                'harga' => 275000,
                'asset' => 'img/aurum-dining/menu/lobster-thermidor-noodles.jpg',
            ],
            [
                'nama_menu' => 'Golden Soto Essence',
                'deskripsi_menu' => 'Soto ayam versi gourmet dengan kaldu saffron, telur onsen, dan daging ayam organik.',
                'harga' => 160000,
                'asset' => 'img/aurum-dining/menu/golden-soto.jpg',
            ],
            [
                'nama_menu' => 'Rendang Wagyu Royale',
                'deskripsi_menu' => 'Interpretasi modern rendang Minang dengan daging wagyu slow-cooked 12 jam.',
                'harga' => 320000,
                'asset' => 'img/aurum-dining/menu/rendang-wagyu-royale.jpg',
            ],
            [
                'nama_menu' => 'Caviar Crispy Chicken',
                'deskripsi_menu' => 'Ayam goreng tepung ultra-crispy dengan topping caviar beluga dan saus aioli.',
                'harga' => 190000,
                'asset' => 'img/aurum-dining/menu/caviar-chicken.jpg',
            ],
            [
                'nama_menu' => 'Signature Gado-Gado Velvet',
                'deskripsi_menu' => 'Salad sayur segar dengan saus kacang velvet-style, tambahan quail egg & parmesan crisp.',
                'harga' => 140000,
                'asset' => 'img/aurum-dining/menu/gado-gado-velvet.jpg',
            ],
        ]);
    }
}
