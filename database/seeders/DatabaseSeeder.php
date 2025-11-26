<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Aplikasi;
use App\Models\Biodata;
use App\Models\Kategori;
use App\Models\Kelompok;
use App\Models\Produk;
use App\Models\ProdukGambar;
use App\Models\Rekening;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@themesbrand.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'avatar' => 'users-images/1J7iwiUja9gMqtHL7eIzR6RbaH0rrzZ5buklDQLy.png',
            'role' => 'admin',
            'status' => '1',
            'created_at' => now(),
        ]);

        User::updateOrCreate([
            'name' => 'Marta Andika',
            'username' => 'users',
            'email' => 'user@themesbrand.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'avatar' => 'users-images/1J7iwiUja9gMqtHL7eIzR6RbaH0rrzZ5buklDQLy.png',
            'role' => 'user',
            'status' => '1',
            'created_at' => now(),
        ]);

        Aplikasi::updateOrCreate([
            'nama_toko' => 'IKM DISPERINDAG',
            'telepon' => '0401-221522',
            'email' => 'ikmdisperindagbuton@gmail.com',
            'instagram' => '-',
            'tiktok' => '-',
            'alamat' => 'Jl. Poros Pasar Wajo Wabula, Desa Dongkala, Kec. Ps. Wajo, Kabupaten Buton Sulawesi Tenggara 93754',
            'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.3423680786336!2d122.87079177572379!3d-5.516101154879823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da40fc0931ba0d1%3A0xcc8d1c71e9d6a974!2sTAKAWA!5e0!3m2!1sid!2sid!4v1763886109689!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'nama_pemilik' => 'Dinas Perindustrian dan Perdagangan Kab. Buton',
            'sidebar_lg' => 'IKM DISPERINDAG',
            'sidebar_mini' => 'IKM',
            'title_header' => 'Sistem Informasi Penjualan',
            'logo' => 'aplikasi-images/onlineshop.png',
        ]);

        Kategori::updateOrCreate([
            'name' => 'Sandang',
            'slug' => 'sandang',
            'image_kategori' => 'kategori-images/default.png',
        ]);
        Kategori::updateOrCreate([
            'name' => 'Pangan',
            'slug' => 'pangan',
            'image_kategori' => 'kategori-images/default.png',
        ]);

        Rekening::updateOrCreate([
            'nama_bank' => 'BRI',
            'rekening' => '1823717238123',
            'pemilik' => 'Galeri IKM Buton',
            'logo_bank' => 'bank-images/bri.png',
        ]);
        Rekening::updateOrCreate([
            'nama_bank' => 'BCA',
            'rekening' => '1823717238213',
            'pemilik' => 'Galeri IKM Buton',
            'logo_bank' => 'bank-images/bca.png',
        ]);
        Rekening::updateOrCreate([
            'nama_bank' => 'BSI',
            'rekening' => '3743717238123',
            'pemilik' => 'Galeri IKM Buton',
            'logo_bank' => 'bank-images/bsi.png',
        ]);
        Rekening::updateOrCreate([
            'nama_bank' => 'Mandiri',
            'rekening' => '1823713288123',
            'pemilik' => 'Galeri IKM Buton',
            'logo_bank' => 'bank-images/mandiri.webp',
        ]);

        Kelompok::updateOrCreate([
            'nama_ikm' => 'KELOMPOK SENTRA IKM KOHOLIMOBONO',
            'alamat' => 'DESA KOHOLIMOMBONO KECAMATAN WABULA',
            'nib' => '-',
            'izin_edar' => 'SERTIFIKAT BPOM RI MD',
        ]);
        Kelompok::updateOrCreate([
            'nama_ikm' => 'IKM PENGOLAHAN IKAN TERI ASAP ',
            'alamat' => 'DESA BONEATIRO KECAMATAN KAPONTORI',
            'nib' => '-',
            'izin_edar' => '-',
        ]);
        Kelompok::updateOrCreate([
            'nama_ikm' => 'KIOS ANES COFFEE',
            'alamat' => 'DESA KAONGKEONGKEA KECAMATAN ',
            'nib' => '-',
            'izin_edar' => 'SERTIFIKAT P-IRT',
        ]);
        Kelompok::updateOrCreate([
            'nama_ikm' => 'IKM OMA JAHE',
            'alamat' => 'DESA WAKOKO KECAMATAN PASARWAJO',
            'nib' => '-',
            'izin_edar' => '-',
        ]);
        Kelompok::updateOrCreate([
            'nama_ikm' => 'IKM PENGOLAHAN KACANG METE',
            'alamat' => 'DESA WAOLE KECAMATAN WOLOWA',
            'nib' => '-',
            'izin_edar' => '-',
        ]);
        Kelompok::updateOrCreate([
            'nama_ikm' => 'IKM PENGOLAHAN KEMIRI',
            'alamat' => 'DESA KAONGKEONGKEA KECAMATAN PASARWAJO',
            'nib' => '-',
            'izin_edar' => '-',
        ]);
        Kelompok::updateOrCreate([
            'nama_ikm' => 'IKM AQIL AQILLA JAYA',
            'alamat' => 'DESA SANGIA MANURU KECAMATAN SIOTAPINA',
            'nib' => '-',
            'izin_edar' => 'SERTIFIKAT P-IRT',
        ]);
        Kelompok::updateOrCreate([
            'nama_ikm' => 'KELOMPOK IKM WAGORONGGO',
            'alamat' => 'DESA KAONGKEONGKEA KECAMATAN PASARWAJO',
            'nib' => '-',
            'izin_edar' => '-',
        ]);
        Kelompok::updateOrCreate([
            'nama_ikm' => 'CEMILAN MAWADDAH',
            'alamat' => 'DESA WATUMOTOBE KECAMATAN KAPONTORI',
            'nib' => '-',
            'izin_edar' => 'SERTIFIKAT P-IRT',
        ]);
        Kelompok::updateOrCreate([
            'nama_ikm' => 'SENTRA IKM TENUN WABULA',
            'alamat' => 'DESA WABULA KECAMATAN WABULA',
            'nib' => '-',
            'izin_edar' => '-',
        ]);

        $this->call([
            ProdukSeeder::class,
            CityDistrictVillageSeeder::class,
            OngkirSeeder::class,
        ]);

        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 1,
            'kode_produk' => 'PRD-231125-0101',
            'nama_produk' => 'Ikan Tuna Asap',
            'brand' => 'Katapayi Holimombo Raya',
            'label_halal' => '-',
            'price' => '35000',
            'cost_price' => '30000',
            'stock' => '30',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 1,
            'kode_produk' => 'PRD-231125-0102',
            'nama_produk' => 'Abon Ikan Tuna Sangrai (Rasa Pedas)',
            'brand' => '-',
            'label_halal' => '-',
            'price' => '15000',
            'cost_price' => '12000',
            'stock' => '65',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 1,
            'kode_produk' => 'PRD-231125-0103',
            'nama_produk' => 'Abon Ikan Tuna Sangrai (Rasa Original)',
            'brand' => '-',
            'label_halal' => '-',
            'price' => '15000',
            'cost_price' => '12000',
            'stock' => '55',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 1,
            'kode_produk' => 'PRD-231125-0104',
            'nama_produk' => 'Abon Ikan Tuna (Rasa Oedas)',
            'brand' => 'LIPACU',
            'label_halal' => '-',
            'price' => '15000',
            'cost_price' => '12000',
            'stock' => '65',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 1,
            'kode_produk' => 'PRD-231125-0105',
            'nama_produk' => 'Abon Ikan Tuna (Rasa Original)',
            'brand' => 'LIPACU',
            'label_halal' => '-',
            'price' => '15000',
            'cost_price' => '12000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 1,
            'kode_produk' => 'PRD-231125-0106',
            'nama_produk' => 'Kerupuk Ikan TUna',
            'brand' => 'LIPACU',
            'label_halal' => '-',
            'price' => '25000',
            'cost_price' => '21000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 2,
            'kode_produk' => 'PRD-231125-0107',
            'nama_produk' => 'Ikan Teri Asap',
            'brand' => '-',
            'label_halal' => '-',
            'price' => '35000',
            'cost_price' => '30000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 3,
            'kode_produk' => 'PRD-231125-0108',
            'nama_produk' => 'Kopi Bubuk',
            'brand' => 'Anes Coffee',
            'label_halal' => '-',
            'price' => '87000',
            'cost_price' => '83000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 4,
            'kode_produk' => 'PRD-231125-0109',
            'nama_produk' => 'Jahe Merah',
            'brand' => 'Oma Oma',
            'label_halal' => '-',
            'price' => '15000',
            'cost_price' => '13000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 4,
            'kode_produk' => 'PRD-231125-0110',
            'nama_produk' => 'Jahe Putih',
            'brand' => 'Oma Oma',
            'label_halal' => '-',
            'price' => '15000',
            'cost_price' => '13000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 5,
            'kode_produk' => 'PRD-231125-0111',
            'nama_produk' => 'Kacang Mete',
            'brand' => 'Assifa Mete Waole',
            'label_halal' => '-',
            'price' => '45000',
            'cost_price' => '40000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 6,
            'kode_produk' => 'PRD-231125-0112',
            'nama_produk' => 'Kemiri',
            'brand' => '-',
            'label_halal' => '-',
            'price' => '45000',
            'cost_price' => '40000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 7,
            'kode_produk' => 'PRD-231125-0113',
            'nama_produk' => 'Kacang Telur',
            'brand' => 'Aqil Aqilla',
            'label_halal' => '-',
            'price' => '64000',
            'cost_price' => '59000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 7,
            'kode_produk' => 'PRD-231125-0114',
            'nama_produk' => 'Kue Nastar',
            'brand' => 'Aqil Aqilla',
            'label_halal' => '-',
            'price' => '55000',
            'cost_price' => '50000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 7,
            'kode_produk' => 'PRD-231125-0115',
            'nama_produk' => 'Keripik Wortel',
            'brand' => 'Aqil Aqilla',
            'label_halal' => '-',
            'price' => '25000',
            'cost_price' => '23000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 8,
            'kode_produk' => 'PRD-231125-0116',
            'nama_produk' => 'Keripik Talas (Rasa Balado Pedas Manis)',
            'brand' => 'Talakea',
            'label_halal' => '-',
            'price' => '27000',
            'cost_price' => '23000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 8,
            'kode_produk' => 'PRD-231125-0117',
            'nama_produk' => 'Keripik Talas (Rasa Balado)',
            'brand' => 'Talakea',
            'label_halal' => '-',
            'price' => '27000',
            'cost_price' => '23000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 8,
            'kode_produk' => 'PRD-231125-0118',
            'nama_produk' => 'Keripik Talas (Rasa Barbeque)',
            'brand' => 'Talakea',
            'label_halal' => '-',
            'price' => '27000',
            'cost_price' => '23000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 8,
            'kode_produk' => 'PRD-231125-0119',
            'nama_produk' => 'Keripik Talas (Rasa Ekstra Pedas)',
            'brand' => 'Talakea',
            'label_halal' => '-',
            'price' => '27000',
            'cost_price' => '23000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 8,
            'kode_produk' => 'PRD-231125-0120',
            'nama_produk' => 'Keripik Talas (Rasa Jagung Bakar)',
            'brand' => 'Talakea',
            'label_halal' => '-',
            'price' => '27000',
            'cost_price' => '23000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 8,
            'kode_produk' => 'PRD-231125-0121',
            'nama_produk' => 'Keripik Talas (Rasa Karamel)',
            'brand' => 'Talakea',
            'label_halal' => '-',
            'price' => '27000',
            'cost_price' => '23000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 8,
            'kode_produk' => 'PRD-231125-0122',
            'nama_produk' => 'Keripik Talas (Rasa Original)',
            'brand' => 'Talakea',
            'label_halal' => '-',
            'price' => '27000',
            'cost_price' => '23000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 9,
            'kode_produk' => 'PRD-231125-0123',
            'nama_produk' => 'Keripik Keju',
            'brand' => 'Mawaddah',
            'label_halal' => '-',
            'price' => '25000',
            'cost_price' => '21000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 9,
            'kode_produk' => 'PRD-231125-0124',
            'nama_produk' => 'Kue Sagu',
            'brand' => 'Mawaddah',
            'label_halal' => '-',
            'price' => '28000',
            'cost_price' => '21000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 2,
            'kelompok_id' => 9,
            'kode_produk' => 'PRD-231125-0125',
            'nama_produk' => 'Kacang Telur',
            'brand' => 'Mawaddah',
            'label_halal' => '-',
            'price' => '25000',
            'cost_price' => '22000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 1,
            'kelompok_id' => 10,
            'kode_produk' => 'PRD-231125-0126',
            'nama_produk' => 'Kain Tenun Pewarna Alam',
            'brand' => 'Wagaga',
            'label_halal' => '-',
            'price' => '150000',
            'cost_price' => '147000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        Produk::updateOrCreate([
            'kategori_id' => 1,
            'kelompok_id' => 10,
            'kode_produk' => 'PRD-231125-0127',
            'nama_produk' => 'Kain Tenun Pewarna Sintetis',
            'brand' => 'Wagaga',
            'label_halal' => '-',
            'price' => '150000',
            'cost_price' => '147000',
            'stock' => '45',
            'description' => '-',
            'discount' => 0,
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0101',
            'gambar' => 'produk-images/1.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0102',
            'gambar' => 'produk-images/2.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0103',
            'gambar' => 'produk-images/3.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0104',
            'gambar' => 'produk-images/4.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0105',
            'gambar' => 'produk-images/5.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0106',
            'gambar' => 'produk-images/6.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0107',
            'gambar' => 'produk-images/7.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0108',
            'gambar' => 'produk-images/8.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0109',
            'gambar' => 'produk-images/9.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0110',
            'gambar' => 'produk-images/10.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0111',
            'gambar' => 'produk-images/11.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0112',
            'gambar' => 'produk-images/12.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0113',
            'gambar' => 'produk-images/13.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0114',
            'gambar' => 'produk-images/14.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0115',
            'gambar' => 'produk-images/15.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0116',
            'gambar' => 'produk-images/16.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0117',
            'gambar' => 'produk-images/17.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0118',
            'gambar' => 'produk-images/18.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0119',
            'gambar' => 'produk-images/19.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0120',
            'gambar' => 'produk-images/20.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0121',
            'gambar' => 'produk-images/21.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0122',
            'gambar' => 'produk-images/22.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0123',
            'gambar' => 'produk-images/23.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0124',
            'gambar' => 'produk-images/24.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0125',
            'gambar' => 'produk-images/25.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0126',
            'gambar' => 'produk-images/26.jpg'
        ]);
        ProdukGambar::updateOrCreate([
            'kode_produk' => 'PRD-231125-0127',
            'gambar' => 'produk-images/27.jpg'
        ]);

        User::factory(1)->create();

        Biodata::updateOrCreate([
            'user_id' => 1,
            'nama_lengkap' => 'Administrator',
            'city_id' => 1,
            'district_id' => 8,
            'village_id' => 1,
            'alamat' => 'Jl. Moh. Husni Thamrin, Wale, Kec. Wolio, Kota Bau-Bau',
            'kode_pos' => '93711',
            'telepon' => '081222452210',
        ]);

        Biodata::updateOrCreate([
            'user_id' => 2,
            'nama_lengkap' => 'Marta Andika',
            'city_id' => 1,
            'district_id' => 8,
            'village_id' => 1,
            'alamat' => 'Jl. Moh. Husni Thamrin, Wale, Kec. Wolio, Kota Bau-Bau',
            'kode_pos' => '93711',
            'telepon' => '081222452210',
        ]);

        Biodata::factory(1)->create();

        $this->call(TransaksiSeeder::class);
    }
}
