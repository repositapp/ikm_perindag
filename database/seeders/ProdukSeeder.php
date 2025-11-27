<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\Produk;
use App\Models\ProdukGambar;
use App\Models\Kategori;
use App\Models\Kelompok;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Cek kategori dan kelompok
        $kategoriIds = Kategori::pluck('id')->toArray();
        $kelompokIds = Kelompok::pluck('id')->toArray();

        if (empty($kategoriIds) || empty($kelompokIds)) {
            $this->command->info('Kategori atau Kelompok belum tersedia.');
            return;
        }

        // 🎯 Daftar nama produk buatanmu
        $customNames = [
            'Kripik Tempe Sagu Crispy',
            'Makaroni Pipa Bantat NKS',
            'Aneka Snack Kacang Kemasan Toples 800 ML',
            'Pisang Kriuk Kering',
            'Kacang Goreng Bawang',
            'Keripik Pisang Coklat',
            'Keripik Ubi Ungu',
            'Keripik Kentang Keju',
            'Kacang Toples (Kacang Bawang, Koro Kulit, Koro Balado, Polong Ijo, Telur Atom)',
            'Keripik Olahan Singkong',
            'Citruk Spesial Pedas Asin',
            'Kecimpring Singkong Bawang Daun',
            'Keripik Nangka',
            'Kerupuk Kotak Rambak Tahu',
            'Keripik Pisang Gurih Renyah Original',
            'Kacang Tanah Caramel Pedas Manis',
            'Kacang Mete Goreng Patahan',
            'Keripik Kentang Dieng',
            'Basreng Bulat Pedas Daun Jeruk',
            'Kerupuk Putih Rasa Ikan',
            'Keripik Ikan Wader Crispy',
            'Kripset Kripik Singkong',
            'Keripik Pisang Koin Manis dan Gurih',
            'Pilus Kencur',
            'Pisang Sale',
            'Pisang Bollen Bolen',
            'Kue Kacang',
        ];

        $total = count($customNames);

        for ($i = 1; $i <= $total; $i++) {

            $name = $customNames[$i - 1];

            $kode = 'PRD-' . now()->format('dmy') . '-' . str_pad($i, 4, '0', STR_PAD_LEFT);

            $produk = Produk::create([
                'kategori_id' => 2,
                'kelompok_id' => $faker->randomElement($kelompokIds),
                'kode_produk' => $kode,
                'nama_produk' => $name,
                'brand' => 'PERINDAG',
                'label_halal' => '-',
                'price' => $faker->numberBetween(57000, 650000),
                'cost_price' => $faker->numberBetween(50000, 640000),
                'stock' => $faker->numberBetween(30, 100),

                // 🎯 deskripsi otomatis berdasarkan nama produk
                'description' => "Produk $name adalah salah satu produk unggulan IKM Kabupaten Buton yang diproduksi dengan kualitas terbaik untuk memenuhi kebutuhan konsumen.",

                'discount' => $faker->randomElement([0, 5, 10, 15, 20]),
            ]);

            ProdukGambar::create([
                'kode_produk' => $produk->kode_produk,
                'gambar' => 'produk-images/default.png'
            ]);
        }

        $this->command->info("✔️ {$total} Produk berhasil dibuat dengan nama dan deskripsi sesuai keinginan.");
    }
}
