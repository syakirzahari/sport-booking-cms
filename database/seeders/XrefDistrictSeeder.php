<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Xref\District;

class XrefDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_seeds = [
            /*
             * perlis - Perlis tiada daerah.
             */
            ['name' => 'Perlis', 'state_id' => 9],
            /*
             * kedah
             */
            ['name' => 'Kota Setar', 'state_id' => 2],
            ['name' => 'Kubang Pasu', 'state_id' => 2],
            ['name' => 'Padang Terap', 'state_id' => 2],
            ['name' => 'Langkawi', 'state_id' => 2],
            ['name' => 'Kuala Muda', 'state_id' => 2],
            ['name' => 'Yan', 'state_id' => 2],
            ['name' => 'Sik', 'state_id' => 2],
            ['name' => 'Baling', 'state_id' => 2],
            ['name' => 'Kulim', 'state_id' => 2],
            ['name' => 'Bandar Baharu', 'state_id' => 2],
            ['name' => 'Pendang', 'state_id' => 2],
            ['name' => 'Pokok Sena', 'state_id' => 2],
            /*
             * kelantan
             */
            ['name' => 'Bachok', 'state_id' => 3],
            ['name' => 'Kota Bharu', 'state_id' => 3],
            ['name' => 'Machang', 'state_id' => 3],
            ['name' => 'Pasir Mas', 'state_id' => 3],
            ['name' => 'Pasir Puteh', 'state_id' => 3],
            ['name' => 'Tanah Merah', 'state_id' => 3],
            ['name' => 'Tumpat', 'state_id' => 3],
            ['name' => 'Gua Musang', 'state_id' => 3],
            ['name' => 'Kuala Krai', 'state_id' => 3],
            ['name' => 'Jeli', 'state_id' => 3],
            ['name' => 'Kecil Lojing', 'state_id' => 3],
            /*
             * terengganu
             */
            ['name' => 'Besut', 'state_id' => 11],
            ['name' => 'Dungun', 'state_id' => 11],
            ['name' => 'Kemaman', 'state_id' => 11],
            ['name' => 'Kuala Terengganu', 'state_id' => 11],
            ['name' => 'Hulu Terengganu', 'state_id' => 11],
            ['name' => 'Marang', 'state_id' => 11],
            ['name' => 'Setiu', 'state_id' => 11],
            /*
             * pulau pinang
             */
            ['name' => 'Seberang Perai Tengah', 'state_id' => 7],
            ['name' => 'Seberang Perai Utara', 'state_id' => 7],
            ['name' => 'Seberang Perai Selatan', 'state_id' => 7],
            ['name' => 'Timor Laut', 'state_id' => 7],
            ['name' => 'Barat Daya', 'state_id' => 7],
            /*
             * perak
             */
            ['name' => 'Batang Padang', 'state_id' => 8],
            ['name' => 'Manjung', 'state_id' => 8],
            ['name' => 'Kinta', 'state_id' => 8],
            ['name' => 'Kerian', 'state_id' => 8],
            ['name' => 'Kuala Kangsar', 'state_id' => 8],
            ['name' => 'Larut & Matang', 'state_id' => 8],
            ['name' => 'Hilir Perak', 'state_id' => 8],
            ['name' => 'Hulu Perak', 'state_id' => 8],
            ['name' => 'Selama', 'state_id' => 8],
            ['name' => 'Perak Tengah', 'state_id' => 8],
            ['name' => 'Kampar', 'state_id' => 8],
            /*
             * pahang
             */
            ['name' => 'Bentong', 'state_id' => 6],
            ['name' => 'Cameron Highlands', 'state_id' => 6],
            ['name' => 'Jerantut', 'state_id' => 6],
            ['name' => 'Kuantan', 'state_id' => 6],
            ['name' => 'Lipis', 'state_id' => 6],
            ['name' => 'Pekan', 'state_id' => 6],
            ['name' => 'Raub', 'state_id' => 6],
            ['name' => 'Temerloh', 'state_id' => 6],
            ['name' => 'Rompin', 'state_id' => 6],
            ['name' => 'Maran', 'state_id' => 6],
            ['name' => 'Bera', 'state_id' => 6],
            /*
             * selangor
             */
            ['name' => 'Klang', 'state_id' => 10],
            ['name' => 'Kuala Langat', 'state_id' => 10],
            ['name' => 'Kuala Selangor', 'state_id' => 10],
            ['name' => 'Sabak Bernam', 'state_id' => 10],
            ['name' => 'Ulu Langat', 'state_id' => 10],
            ['name' => 'Ulu Selangor', 'state_id' => 10],
            ['name' => 'Petaling', 'state_id' => 10],
            ['name' => 'Gombak', 'state_id' => 10],
            ['name' => 'Sepang', 'state_id' => 10],
            /*
             * kuala lumpur - tiada daerah.
             */
            ['name' => 'W. P. Kuala Lumpur', 'state_id' => 14],
            /*
             * putrajaya
             */
            ['name' => 'W. P. Putrajaya', 'state_id' => 16],
            /*
             * negeri sembilan
             */
            ['name' => 'Jelebu', 'state_id' => 5],
            ['name' => 'Kuala Pilah', 'state_id' => 5],
            ['name' => 'Port Dickson', 'state_id' => 5],
            ['name' => 'Rembau', 'state_id' => 5],
            ['name' => 'Seremban', 'state_id' => 5],
            ['name' => 'Tampin', 'state_id' => 5],
            ['name' => 'Jempol', 'state_id' => 5],
            /*
             * melaka
             */
            ['name' => 'Melaka Tengah', 'state_id' => 4],
            ['name' => 'Jasin', 'state_id' => 4],
            ['name' => 'Alor Gajah', 'state_id' => 4],
            /*
             * johor
             */
            ['name' => 'Batu Pahat', 'state_id' => 1],
            ['name' => 'Johor Bahru', 'state_id' => 1],
            ['name' => 'Kluang', 'state_id' => 1],
            ['name' => 'Kota Tinggi', 'state_id' => 1],
            ['name' => 'Mersing', 'state_id' => 1],
            ['name' => 'Muar', 'state_id' => 1],
            ['name' => 'Pontian', 'state_id' => 1],
            ['name' => 'Segamat', 'state_id' => 1],
            ['name' => 'Kulaijaya', 'state_id' => 1],
            ['name' => 'Ledang', 'state_id' => 1],
            ['name' => 'Kulaijaya', 'state_id' => 1],
            ['name' => 'Ledang', 'state_id' => 1],
            /*
             * labuan - tiada daerah
             */
            ['name' => 'W. P. Labuan', 'state_id' => 15],
            /*
             * sabah
             */
            ['name' => 'Kota Kinabalu', 'state_id' => 12],
            ['name' => 'Papar', 'state_id' => 12],
            ['name' => 'Kota Belud', 'state_id' => 12],
            ['name' => 'Tuaran', 'state_id' => 12],
            ['name' => 'Kudat', 'state_id' => 12],
            ['name' => 'Ranau', 'state_id' => 12],
            ['name' => 'Sandakan', 'state_id' => 12],
            ['name' => 'Labuk & Sugut', 'state_id' => 12],
            ['name' => 'Kinabatangan', 'state_id' => 12],
            ['name' => 'Tawau', 'state_id' => 12],
            ['name' => 'Lahad Datu', 'state_id' => 12],
            ['name' => 'Semporna', 'state_id' => 12],
            ['name' => 'Keningau', 'state_id' => 12],
            ['name' => 'Tambunan', 'state_id' => 12],
            ['name' => 'Pensiangan', 'state_id' => 12],
            ['name' => 'Tenom', 'state_id' => 12],
            ['name' => 'Beaufort', 'state_id' => 12],
            ['name' => 'Kuala Penyu', 'state_id' => 12],
            ['name' => 'Sipitang', 'state_id' => 12],
            ['name' => 'Penampang', 'state_id' => 12],
            ['name' => 'Kota Marudu', 'state_id' => 12],
            ['name' => 'Pitas', 'state_id' => 12],
            ['name' => 'Kunak', 'state_id' => 12],
            ['name' => 'Tongod', 'state_id' => 12],
            ['name' => 'Putatan', 'state_id' => 12],
            /*
             * sarawak
             */
            ['name' => 'Kuching', 'state_id' => 13],
            ['name' => 'Sri Aman', 'state_id' => 13],
            ['name' => 'Sibu', 'state_id' => 13],
            ['name' => 'Miri', 'state_id' => 13],
            ['name' => 'Limbang', 'state_id' => 13],
            ['name' => 'Sarikei', 'state_id' => 13],
            ['name' => 'Kapit', 'state_id' => 13],
            ['name' => 'Samarahan', 'state_id' => 13],
            ['name' => 'Bintulu', 'state_id' => 13],
            ['name' => 'Mukah', 'state_id' => 13],
            ['name' => 'Betong', 'state_id' => 13],
        ];

        foreach ($data_seeds as $seed) {
            District::create($seed);
        }
    }
}
