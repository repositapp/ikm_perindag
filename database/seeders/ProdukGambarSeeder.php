<?php

namespace Database\Seeders;

use App\Models\Produk;
use App\Models\ProdukGambar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukGambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produks = Produk::all();
        $counter = 1; // Penomoran otomatis

        foreach ($produks as $produk) {
            // $filename = strtolower(str_replace(' ', '_', $produk->nama_produk)) . '.jpg';
            $filename = $counter . '.jpg'; // hasil: 1.jpg, 2.jpg, dst

            ProdukGambar::updateOrCreate(
                ['kode_produk' => $produk->kode_produk],
                ['gambar' => 'produk-images/' . $filename]
            );

            $counter++;
        }
    }
}
