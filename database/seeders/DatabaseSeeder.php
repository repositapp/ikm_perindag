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
            ProdukManualSeeder::class,
            ProdukGambarSeeder::class,
            ProdukSeeder::class,
            CityDistrictVillageSeeder::class,
            OngkirSeeder::class,
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
