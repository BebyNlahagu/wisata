<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinasisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
    DB::table('destinasis')->insert([
        // Pantai
        ['nama' => 'Pantai Kuta', 'aktivitas' => 'pantai', 'harga' => 150000, 'durasi' => 3, 'img' => 'pantai_kuta.jpg'],
        ['nama' => 'Pantai Sanur', 'aktivitas' => 'pantai', 'harga' => 100000, 'durasi' => 3, 'img' => 'pantai_sanur.jpg'],
        ['nama' => 'Pantai Parangtritis', 'aktivitas' => 'pantai', 'harga' => 50000, 'durasi' => 2, 'img' => 'pantai_parangtritis.jpg'],
        ['nama' => 'Pantai Tanjung Tinggi', 'aktivitas' => 'pantai', 'harga' => 120000, 'durasi' => 3, 'img' => 'pantai_tanjung_tinggi.jpg'],
        ['nama' => 'Pantai Dreamland', 'aktivitas' => 'pantai', 'harga' => 480000, 'durasi' => 2, 'img' => 'pantai_dreamland.jpg'],
        ['nama' => 'Pantai Nusa Dua', 'aktivitas' => 'pantai', 'harga' => 550000, 'durasi' => 3, 'img' => 'pantai_nusa_dua.jpg'],
        ['nama' => 'Pantai Tanjung Benoa', 'aktivitas' => 'pantai', 'harga' => 600000, 'durasi' => 4, 'img' => 'pantai_tanjung_benoa.jpg'],
        ['nama' => 'Pantai Gili Trawangan', 'aktivitas' => 'pantai', 'harga' => 750000, 'durasi' => 5, 'img' => 'pantai_gili_trawangan.jpg'],
        ['nama' => 'Pantai Balian', 'aktivitas' => 'pantai', 'harga' => 200000, 'durasi' => 3, 'img' => 'pantai_balian.jpg'],
        ['nama' => 'Pantai Labuan Bajo', 'aktivitas' => 'pantai', 'harga' => 300000, 'durasi' => 4, 'img' => 'pantai_labuan_bajo.jpg'],

        // Gunung
        ['nama' => 'Gunung Bromo', 'aktivitas' => 'gunung', 'harga' => 200000, 'durasi' => 5, 'img' => 'gunung_bromo.jpg'],
        ['nama' => 'Gunung Rinjani', 'aktivitas' => 'gunung', 'harga' => 250000, 'durasi' => 7, 'img' => 'gunung_rinjani.jpg'],
        ['nama' => 'Gunung Merapi', 'aktivitas' => 'gunung', 'harga' => 180000, 'durasi' => 4, 'img' => 'gunung_merapi.jpg'],
        ['nama' => 'Gunung Gede', 'aktivitas' => 'gunung', 'harga' => 600000, 'durasi' => 4, 'img' => 'gunung_gede.jpg'],
        ['nama' => 'Gunung Ciremai', 'aktivitas' => 'gunung', 'harga' => 700000, 'durasi' => 5, 'img' => 'gunung_ciremai.jpg'],
        ['nama' => 'Gunung Semeru', 'aktivitas' => 'gunung', 'harga' => 800000, 'durasi' => 6, 'img' => 'gunung_semeru.jpg'],
        ['nama' => 'Gunung Batur', 'aktivitas' => 'gunung', 'harga' => 300000, 'durasi' => 3, 'img' => 'gunung_batur.jpg'],
        ['nama' => 'Gunung Ijen', 'aktivitas' => 'gunung', 'harga' => 500000, 'durasi' => 5, 'img' => 'gunung_ijen.jpg'],
        ['nama' => 'Gunung Agung', 'aktivitas' => 'gunung', 'harga' => 450000, 'durasi' => 4, 'img' => 'gunung_agung.jpg'],
        ['nama' => 'Gunung Cikuray', 'aktivitas' => 'gunung', 'harga' => 400000, 'durasi' => 3, 'img' => 'gunung_cikuray.jpg'],

        // Laut
        ['nama' => 'Pulau Komodo', 'aktivitas' => 'laut', 'harga' => 300000, 'durasi' => 4, 'img' => 'pulau_komodo.jpg'],
        ['nama' => 'Pulau Bali', 'aktivitas' => 'laut', 'harga' => 250000, 'durasi' => 6, 'img' => 'pulau_bali.jpg'],
        ['nama' => 'Pulau Derawan', 'aktivitas' => 'laut', 'harga' => 400000, 'durasi' => 5, 'img' => 'pulau_derawan.jpg'],
        ['nama' => 'Pulau Belitung', 'aktivitas' => 'laut', 'harga' => 200000, 'durasi' => 3, 'img' => 'pulau_belitung.jpg'],
        ['nama' => 'Pulau Weh', 'aktivitas' => 'laut', 'harga' => 350000, 'durasi' => 3, 'img' => 'pulau_weh.jpg'],
        ['nama' => 'Pulau Gili Trawangan', 'aktivitas' => 'laut', 'harga' => 950000, 'durasi' => 4, 'img' => 'pulau_gili_trawangan.jpg'],
        ['nama' => 'Pulau Derawan', 'aktivitas' => 'laut', 'harga' => 400000, 'durasi' => 5, 'img' => 'pulau_derawan.jpg'],
        ['nama' => 'Pulau Belitung', 'aktivitas' => 'laut', 'harga' => 200000, 'durasi' => 3, 'img' => 'pulau_belitung.jpg'],
        ['nama' => 'Pulau Moyo', 'aktivitas' => 'laut', 'harga' => 600000, 'durasi' => 5, 'img' => 'pulau_moyo.jpg'],
        ['nama' => 'Pulau Seribu', 'aktivitas' => 'laut', 'harga' => 150000, 'durasi' => 2, 'img' => 'pulau_seribu.jpg'],

        // Hutan
        ['nama' => 'Taman Nasional Bromo Tengger Semeru', 'aktivitas' => 'hutan', 'harga' => 180000, 'durasi' => 5, 'img' => 'taman_nasional_bromo.jpg'],
        ['nama' => 'Taman Nasional Ujung Kulon', 'aktivitas' => 'hutan', 'harga' => 120000, 'durasi' => 4, 'img' => 'taman_nasional_ujung_kulon.jpg'],
        ['nama' => 'Taman Nasional Gunung Leuser', 'aktivitas' => 'hutan', 'harga' => 150000, 'durasi' => 6, 'img' => 'taman_nasional_gunung_leuser.jpg'],
        ['nama' => 'Taman Nasional Bukit Duabelas', 'aktivitas' => 'hutan', 'harga' => 500000, 'durasi' => 5, 'img' => 'taman_nasional_bukit_duabelas.jpg'],
        ['nama' => 'Taman Nasional Baluran', 'aktivitas' => 'hutan', 'harga' => 300000, 'durasi' => 4, 'img' => 'taman_nasional_baluran.jpg'],
        ['nama' => 'Taman Nasional Meru Betiri', 'aktivitas' => 'hutan', 'harga' => 400000, 'durasi' => 5, 'img' => 'taman_nasional_meru_betiri.jpg'],
        ['nama' => 'Taman Nasional Alas Purwo', 'aktivitas' => 'hutan', 'harga' => 350000, 'durasi' => 5, 'img' => 'taman_nasional_alas_purwo.jpg'],
        ['nama' => 'Taman Nasional Tanjung Puting', 'aktivitas' => 'hutan', 'harga' => 700000, 'durasi' => 6, 'img' => 'taman_nasional_tanjung_puting.jpg'],
        ['nama' => 'Taman Nasional Kerinci Seblat', 'aktivitas' => 'hutan', 'harga' => 550000, 'durasi' => 7, 'img' => 'taman_nasional_kerinci_seblat.jpg'],
        ['nama' => 'Taman Nasional Way Kambas', 'aktivitas' => 'hutan', 'harga' => 600000, 'durasi' => 6, 'img' => 'taman_nasional_way_kambas.jpg'],
    ]);

   }
}
