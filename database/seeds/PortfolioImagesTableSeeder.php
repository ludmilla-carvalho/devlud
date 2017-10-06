<?php

use Illuminate\Database\Seeder;

class PortfolioImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_images')->delete();
        
        \DB::table('portfolio_images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'portfolio_id' => 1,
                'image' => 'tasometro1.png',
                'created_at' => '2017-09-29 19:49:40',
                'updated_at' => '2017-09-29 19:49:40',
            ),
            1 => 
            array (
                'id' => 2,
                'portfolio_id' => 1,
                'image' => 'tasometro2.png',
                'created_at' => '2017-09-29 19:49:40',
                'updated_at' => '2017-09-29 19:49:40',
            ),
            2 => 
            array (
                'id' => 3,
                'portfolio_id' => 1,
                'image' => 'tasometro3.png',
                'created_at' => '2017-09-29 19:49:40',
                'updated_at' => '2017-09-29 19:49:40',
            ),
            3 => 
            array (
                'id' => 4,
                'portfolio_id' => 1,
                'image' => 'tasometro4.png',
                'created_at' => '2017-09-29 19:49:40',
                'updated_at' => '2017-09-29 19:49:40',
            ),
            4 => 
            array (
                'id' => 5,
                'portfolio_id' => 1,
                'image' => 'tasometro5.png',
                'created_at' => '2017-09-29 19:49:41',
                'updated_at' => '2017-09-29 19:49:41',
            ),
            5 => 
            array (
                'id' => 6,
                'portfolio_id' => 1,
                'image' => 'tasometro6.png',
                'created_at' => '2017-09-29 19:49:41',
                'updated_at' => '2017-09-29 19:49:41',
            ),
            6 => 
            array (
                'id' => 7,
                'portfolio_id' => 1,
                'image' => 'tasometro7.png',
                'created_at' => '2017-09-29 19:49:41',
                'updated_at' => '2017-09-29 19:49:41',
            ),
            7 => 
            array (
                'id' => 8,
                'portfolio_id' => 2,
                'image' => 'varela1.png',
                'created_at' => '2017-09-29 22:46:30',
                'updated_at' => '2017-09-29 22:46:30',
            ),
            8 => 
            array (
                'id' => 9,
                'portfolio_id' => 2,
                'image' => 'varela2.png',
                'created_at' => '2017-09-29 22:46:31',
                'updated_at' => '2017-09-29 22:46:31',
            ),
            9 => 
            array (
                'id' => 10,
                'portfolio_id' => 2,
                'image' => 'varela3.png',
                'created_at' => '2017-09-29 22:46:31',
                'updated_at' => '2017-09-29 22:46:31',
            ),
            10 => 
            array (
                'id' => 11,
                'portfolio_id' => 2,
                'image' => 'varela4.png',
                'created_at' => '2017-09-29 22:46:31',
                'updated_at' => '2017-09-29 22:46:31',
            ),
            11 => 
            array (
                'id' => 12,
                'portfolio_id' => 2,
                'image' => 'varela5.png',
                'created_at' => '2017-09-29 22:46:31',
                'updated_at' => '2017-09-29 22:46:31',
            ),
            12 => 
            array (
                'id' => 13,
                'portfolio_id' => 2,
                'image' => 'varela6.png',
                'created_at' => '2017-09-29 22:46:31',
                'updated_at' => '2017-09-29 22:46:31',
            ),
            13 => 
            array (
                'id' => 14,
                'portfolio_id' => 2,
                'image' => 'varela7.png',
                'created_at' => '2017-09-29 22:46:31',
                'updated_at' => '2017-09-29 22:46:31',
            ),
            14 => 
            array (
                'id' => 15,
                'portfolio_id' => 3,
                'image' => 'bitar1.png',
                'created_at' => '2017-09-29 23:02:39',
                'updated_at' => '2017-09-29 23:02:39',
            ),
            15 => 
            array (
                'id' => 16,
                'portfolio_id' => 3,
                'image' => 'bitar2.png',
                'created_at' => '2017-09-29 23:02:39',
                'updated_at' => '2017-09-29 23:02:39',
            ),
            16 => 
            array (
                'id' => 17,
                'portfolio_id' => 3,
                'image' => 'bitar3.png',
                'created_at' => '2017-09-29 23:02:39',
                'updated_at' => '2017-09-29 23:02:39',
            ),
            17 => 
            array (
                'id' => 18,
                'portfolio_id' => 3,
                'image' => 'bitar4.png',
                'created_at' => '2017-09-29 23:02:39',
                'updated_at' => '2017-09-29 23:02:39',
            ),
            18 => 
            array (
                'id' => 19,
                'portfolio_id' => 3,
                'image' => 'bitar5.png',
                'created_at' => '2017-09-29 23:02:40',
                'updated_at' => '2017-09-29 23:02:40',
            ),
            19 => 
            array (
                'id' => 20,
                'portfolio_id' => 4,
                'image' => 'acsp1.png',
                'created_at' => '2017-09-29 23:40:32',
                'updated_at' => '2017-09-29 23:40:32',
            ),
            20 => 
            array (
                'id' => 21,
                'portfolio_id' => 4,
                'image' => 'acsp2.png',
                'created_at' => '2017-09-29 23:40:32',
                'updated_at' => '2017-09-29 23:40:32',
            ),
            21 => 
            array (
                'id' => 22,
                'portfolio_id' => 4,
                'image' => 'acsp3.png',
                'created_at' => '2017-09-29 23:40:32',
                'updated_at' => '2017-09-29 23:40:32',
            ),
            22 => 
            array (
                'id' => 23,
                'portfolio_id' => 4,
                'image' => 'acsp4.png',
                'created_at' => '2017-09-29 23:40:33',
                'updated_at' => '2017-09-29 23:40:33',
            ),
            23 => 
            array (
                'id' => 24,
                'portfolio_id' => 4,
                'image' => 'acsp5.png',
                'created_at' => '2017-09-29 23:40:33',
                'updated_at' => '2017-09-29 23:40:33',
            ),
            24 => 
            array (
                'id' => 25,
                'portfolio_id' => 5,
                'image' => 'dc1.png',
                'created_at' => '2017-09-29 23:53:26',
                'updated_at' => '2017-09-29 23:53:26',
            ),
            25 => 
            array (
                'id' => 26,
                'portfolio_id' => 5,
                'image' => 'dc2.png',
                'created_at' => '2017-09-29 23:53:26',
                'updated_at' => '2017-09-29 23:53:26',
            ),
            26 => 
            array (
                'id' => 27,
                'portfolio_id' => 5,
                'image' => 'dc3.png',
                'created_at' => '2017-09-29 23:53:26',
                'updated_at' => '2017-09-29 23:53:26',
            ),
            27 => 
            array (
                'id' => 28,
                'portfolio_id' => 5,
                'image' => 'dc4.png',
                'created_at' => '2017-09-29 23:53:26',
                'updated_at' => '2017-09-29 23:53:26',
            ),
            28 => 
            array (
                'id' => 29,
                'portfolio_id' => 5,
                'image' => 'dc5.png',
                'created_at' => '2017-09-29 23:53:26',
                'updated_at' => '2017-09-29 23:53:26',
            ),
            29 => 
            array (
                'id' => 30,
                'portfolio_id' => 6,
                'image' => 'ris1.png',
                'created_at' => '2017-09-30 00:26:44',
                'updated_at' => '2017-09-30 00:26:44',
            ),
            30 => 
            array (
                'id' => 31,
                'portfolio_id' => 6,
                'image' => 'ris2.png',
                'created_at' => '2017-09-30 00:26:44',
                'updated_at' => '2017-09-30 00:26:44',
            ),
            31 => 
            array (
                'id' => 32,
                'portfolio_id' => 6,
                'image' => 'ris3.png',
                'created_at' => '2017-09-30 00:26:44',
                'updated_at' => '2017-09-30 00:26:44',
            ),
            32 => 
            array (
                'id' => 33,
                'portfolio_id' => 6,
                'image' => 'ris4.png',
                'created_at' => '2017-09-30 00:26:44',
                'updated_at' => '2017-09-30 00:26:44',
            ),
            33 => 
            array (
                'id' => 34,
                'portfolio_id' => 6,
                'image' => 'ris5.png',
                'created_at' => '2017-09-30 00:26:45',
                'updated_at' => '2017-09-30 00:26:45',
            ),
            34 => 
            array (
                'id' => 35,
                'portfolio_id' => 6,
                'image' => 'ris6.png',
                'created_at' => '2017-09-30 00:26:45',
                'updated_at' => '2017-09-30 00:26:45',
            ),
            35 => 
            array (
                'id' => 42,
                'portfolio_id' => 7,
                'image' => 'humano1.png',
                'created_at' => '2017-09-30 01:14:49',
                'updated_at' => '2017-09-30 01:14:49',
            ),
            36 => 
            array (
                'id' => 43,
                'portfolio_id' => 7,
                'image' => 'humano2.png',
                'created_at' => '2017-09-30 01:14:49',
                'updated_at' => '2017-09-30 01:14:49',
            ),
            37 => 
            array (
                'id' => 44,
                'portfolio_id' => 7,
                'image' => 'humano3.png',
                'created_at' => '2017-09-30 01:14:49',
                'updated_at' => '2017-09-30 01:14:49',
            ),
            38 => 
            array (
                'id' => 45,
                'portfolio_id' => 7,
                'image' => 'humano4.png',
                'created_at' => '2017-09-30 01:14:49',
                'updated_at' => '2017-09-30 01:14:49',
            ),
            39 => 
            array (
                'id' => 46,
                'portfolio_id' => 7,
                'image' => 'humano5.png',
                'created_at' => '2017-09-30 01:14:49',
                'updated_at' => '2017-09-30 01:14:49',
            ),
            40 => 
            array (
                'id' => 47,
                'portfolio_id' => 7,
                'image' => 'humano6.png',
                'created_at' => '2017-09-30 01:14:49',
                'updated_at' => '2017-09-30 01:14:49',
            ),
            41 => 
            array (
                'id' => 48,
                'portfolio_id' => 7,
                'image' => 'humano7.png',
                'created_at' => '2017-09-30 01:14:49',
                'updated_at' => '2017-09-30 01:14:49',
            ),
            42 => 
            array (
                'id' => 49,
                'portfolio_id' => 8,
                'image' => 'zoom1.png',
                'created_at' => '2017-09-30 01:27:12',
                'updated_at' => '2017-09-30 01:27:12',
            ),
            43 => 
            array (
                'id' => 50,
                'portfolio_id' => 8,
                'image' => 'zoom2.png',
                'created_at' => '2017-09-30 01:27:12',
                'updated_at' => '2017-09-30 01:27:12',
            ),
            44 => 
            array (
                'id' => 51,
                'portfolio_id' => 9,
                'image' => 'brinc1.png',
                'created_at' => '2017-09-30 02:26:01',
                'updated_at' => '2017-09-30 02:26:01',
            ),
            45 => 
            array (
                'id' => 52,
                'portfolio_id' => 9,
                'image' => 'brinc2.png',
                'created_at' => '2017-09-30 02:26:01',
                'updated_at' => '2017-09-30 02:26:01',
            ),
            46 => 
            array (
                'id' => 53,
                'portfolio_id' => 9,
                'image' => 'brinc3.png',
                'created_at' => '2017-09-30 02:26:01',
                'updated_at' => '2017-09-30 02:26:01',
            ),
            47 => 
            array (
                'id' => 54,
                'portfolio_id' => 9,
                'image' => 'brinc4.png',
                'created_at' => '2017-09-30 02:26:01',
                'updated_at' => '2017-09-30 02:26:01',
            ),
            48 => 
            array (
                'id' => 55,
                'portfolio_id' => 9,
                'image' => 'brinc5.png',
                'created_at' => '2017-09-30 02:26:01',
                'updated_at' => '2017-09-30 02:26:01',
            ),
            49 => 
            array (
                'id' => 56,
                'portfolio_id' => 9,
                'image' => 'brinc6.png',
                'created_at' => '2017-09-30 02:26:01',
                'updated_at' => '2017-09-30 02:26:01',
            ),
            50 => 
            array (
                'id' => 57,
                'portfolio_id' => 9,
                'image' => 'brinc7.png',
                'created_at' => '2017-09-30 02:26:01',
                'updated_at' => '2017-09-30 02:26:01',
            ),
            51 => 
            array (
                'id' => 58,
                'portfolio_id' => 9,
                'image' => 'brinc8.png',
                'created_at' => '2017-09-30 02:26:01',
                'updated_at' => '2017-09-30 02:26:01',
            ),
            52 => 
            array (
                'id' => 59,
                'portfolio_id' => 10,
                'image' => 'daya1.png',
                'created_at' => '2017-09-30 02:38:24',
                'updated_at' => '2017-09-30 02:38:24',
            ),
            53 => 
            array (
                'id' => 60,
                'portfolio_id' => 10,
                'image' => 'daya2.png',
                'created_at' => '2017-09-30 02:38:24',
                'updated_at' => '2017-09-30 02:38:24',
            ),
            54 => 
            array (
                'id' => 61,
                'portfolio_id' => 10,
                'image' => 'daya3.png',
                'created_at' => '2017-09-30 02:38:24',
                'updated_at' => '2017-09-30 02:38:24',
            ),
            55 => 
            array (
                'id' => 62,
                'portfolio_id' => 10,
                'image' => 'daya4.png',
                'created_at' => '2017-09-30 02:38:24',
                'updated_at' => '2017-09-30 02:38:24',
            ),
            56 => 
            array (
                'id' => 63,
                'portfolio_id' => 10,
                'image' => 'daya5.png',
                'created_at' => '2017-09-30 02:38:24',
                'updated_at' => '2017-09-30 02:38:24',
            ),
            57 => 
            array (
                'id' => 64,
                'portfolio_id' => 11,
                'image' => 'sadia1.png',
                'created_at' => '2017-09-30 10:51:01',
                'updated_at' => '2017-09-30 10:51:01',
            ),
            58 => 
            array (
                'id' => 65,
                'portfolio_id' => 11,
                'image' => 'sadia2.png',
                'created_at' => '2017-09-30 10:51:01',
                'updated_at' => '2017-09-30 10:51:01',
            ),
            59 => 
            array (
                'id' => 66,
                'portfolio_id' => 11,
                'image' => 'sadia3.png',
                'created_at' => '2017-09-30 10:51:01',
                'updated_at' => '2017-09-30 10:51:01',
            ),
            60 => 
            array (
                'id' => 67,
                'portfolio_id' => 12,
                'image' => 'avon1.png',
                'created_at' => '2017-09-30 11:02:25',
                'updated_at' => '2017-09-30 11:02:25',
            ),
            61 => 
            array (
                'id' => 68,
                'portfolio_id' => 12,
                'image' => 'avon2.png',
                'created_at' => '2017-09-30 11:02:25',
                'updated_at' => '2017-09-30 11:02:25',
            ),
            62 => 
            array (
                'id' => 69,
                'portfolio_id' => 12,
                'image' => 'avon3.png',
                'created_at' => '2017-09-30 11:02:25',
                'updated_at' => '2017-09-30 11:02:25',
            ),
            63 => 
            array (
                'id' => 70,
                'portfolio_id' => 12,
                'image' => 'avon4.png',
                'created_at' => '2017-09-30 11:02:25',
                'updated_at' => '2017-09-30 11:02:25',
            ),
            64 => 
            array (
                'id' => 71,
                'portfolio_id' => 13,
                'image' => 'mid1.png',
                'created_at' => '2017-09-30 11:28:43',
                'updated_at' => '2017-09-30 11:28:43',
            ),
            65 => 
            array (
                'id' => 72,
                'portfolio_id' => 13,
                'image' => 'mid2.png',
                'created_at' => '2017-09-30 11:28:43',
                'updated_at' => '2017-09-30 11:28:43',
            ),
            66 => 
            array (
                'id' => 73,
                'portfolio_id' => 14,
                'image' => 'avon1.png',
                'created_at' => '2017-10-03 15:29:40',
                'updated_at' => '2017-10-03 15:29:40',
            ),
            67 => 
            array (
                'id' => 74,
                'portfolio_id' => 14,
                'image' => 'avon2.png',
                'created_at' => '2017-10-03 15:29:41',
                'updated_at' => '2017-10-03 15:29:41',
            ),
            68 => 
            array (
                'id' => 75,
                'portfolio_id' => 15,
                'image' => 'senna1.png',
                'created_at' => '2017-10-03 16:49:33',
                'updated_at' => '2017-10-03 16:49:33',
            ),
            69 => 
            array (
                'id' => 76,
                'portfolio_id' => 15,
                'image' => 'senna2.png',
                'created_at' => '2017-10-03 16:49:33',
                'updated_at' => '2017-10-03 16:49:33',
            ),
            70 => 
            array (
                'id' => 77,
                'portfolio_id' => 16,
                'image' => 'lego1.png',
                'created_at' => '2017-10-03 16:55:41',
                'updated_at' => '2017-10-03 16:55:41',
            ),
            71 => 
            array (
                'id' => 78,
                'portfolio_id' => 16,
                'image' => 'lego2.png',
                'created_at' => '2017-10-03 16:55:41',
                'updated_at' => '2017-10-03 16:55:41',
            ),
            72 => 
            array (
                'id' => 79,
                'portfolio_id' => 16,
                'image' => 'lego3.png',
                'created_at' => '2017-10-03 16:55:41',
                'updated_at' => '2017-10-03 16:55:41',
            ),
            73 => 
            array (
                'id' => 80,
                'portfolio_id' => 16,
                'image' => 'lego4.png',
                'created_at' => '2017-10-03 16:55:41',
                'updated_at' => '2017-10-03 16:55:41',
            ),
            74 => 
            array (
                'id' => 81,
                'portfolio_id' => 16,
                'image' => 'lego5.png',
                'created_at' => '2017-10-03 16:55:41',
                'updated_at' => '2017-10-03 16:55:41',
            ),
            75 => 
            array (
                'id' => 82,
                'portfolio_id' => 16,
                'image' => 'lego6.png',
                'created_at' => '2017-10-03 16:55:41',
                'updated_at' => '2017-10-03 16:55:41',
            ),
            76 => 
            array (
                'id' => 83,
                'portfolio_id' => 17,
                'image' => 'cosmo1.png',
                'created_at' => '2017-10-03 16:57:51',
                'updated_at' => '2017-10-03 16:57:51',
            ),
            77 => 
            array (
                'id' => 84,
                'portfolio_id' => 17,
                'image' => 'cosmo2.png',
                'created_at' => '2017-10-03 16:57:51',
                'updated_at' => '2017-10-03 16:57:51',
            ),
            78 => 
            array (
                'id' => 85,
                'portfolio_id' => 17,
                'image' => 'cosmo3.png',
                'created_at' => '2017-10-03 16:57:51',
                'updated_at' => '2017-10-03 16:57:51',
            ),
            79 => 
            array (
                'id' => 86,
                'portfolio_id' => 18,
                'image' => 'quero1.png',
                'created_at' => '2017-10-03 16:59:35',
                'updated_at' => '2017-10-03 16:59:35',
            ),
            80 => 
            array (
                'id' => 87,
                'portfolio_id' => 18,
                'image' => 'quero2.png',
                'created_at' => '2017-10-03 16:59:35',
                'updated_at' => '2017-10-03 16:59:35',
            ),
            81 => 
            array (
                'id' => 88,
                'portfolio_id' => 18,
                'image' => 'quero3.png',
                'created_at' => '2017-10-03 16:59:35',
                'updated_at' => '2017-10-03 16:59:35',
            ),
            82 => 
            array (
                'id' => 89,
                'portfolio_id' => 19,
                'image' => 'torra1.png',
                'created_at' => '2017-10-03 17:01:50',
                'updated_at' => '2017-10-03 17:01:50',
            ),
            83 => 
            array (
                'id' => 90,
                'portfolio_id' => 19,
                'image' => 'torra2.png',
                'created_at' => '2017-10-03 17:01:50',
                'updated_at' => '2017-10-03 17:01:50',
            ),
            84 => 
            array (
                'id' => 91,
                'portfolio_id' => 19,
                'image' => 'torra3.png',
                'created_at' => '2017-10-03 17:01:51',
                'updated_at' => '2017-10-03 17:01:51',
            ),
            85 => 
            array (
                'id' => 92,
                'portfolio_id' => 19,
                'image' => 'torra4.png',
                'created_at' => '2017-10-03 17:01:51',
                'updated_at' => '2017-10-03 17:01:51',
            ),
            86 => 
            array (
                'id' => 93,
                'portfolio_id' => 20,
                'image' => 'vtv1.png',
                'created_at' => '2017-10-03 17:27:49',
                'updated_at' => '2017-10-03 17:27:49',
            ),
            87 => 
            array (
                'id' => 94,
                'portfolio_id' => 20,
                'image' => 'vtv2.png',
                'created_at' => '2017-10-03 17:27:49',
                'updated_at' => '2017-10-03 17:27:49',
            ),
            88 => 
            array (
                'id' => 95,
                'portfolio_id' => 20,
                'image' => 'vtv3.png',
                'created_at' => '2017-10-03 17:27:49',
                'updated_at' => '2017-10-03 17:27:49',
            ),
            89 => 
            array (
                'id' => 96,
                'portfolio_id' => 20,
                'image' => 'vtv4.png',
                'created_at' => '2017-10-03 17:27:50',
                'updated_at' => '2017-10-03 17:27:50',
            ),
            90 => 
            array (
                'id' => 97,
                'portfolio_id' => 20,
                'image' => 'vtv5.png',
                'created_at' => '2017-10-03 17:27:50',
                'updated_at' => '2017-10-03 17:27:50',
            ),
            91 => 
            array (
                'id' => 98,
                'portfolio_id' => 21,
                'image' => 'antiqueda1.png',
                'created_at' => '2017-10-03 17:32:04',
                'updated_at' => '2017-10-03 17:32:04',
            ),
            92 => 
            array (
                'id' => 99,
                'portfolio_id' => 21,
                'image' => 'antiqueda2.png',
                'created_at' => '2017-10-03 17:32:04',
                'updated_at' => '2017-10-03 17:32:04',
            ),
            93 => 
            array (
                'id' => 100,
                'portfolio_id' => 21,
                'image' => 'antiqueda3.png',
                'created_at' => '2017-10-03 17:32:04',
                'updated_at' => '2017-10-03 17:32:04',
            ),
            94 => 
            array (
                'id' => 101,
                'portfolio_id' => 21,
                'image' => 'antiqueda4.png',
                'created_at' => '2017-10-03 17:32:04',
                'updated_at' => '2017-10-03 17:32:04',
            ),
            95 => 
            array (
                'id' => 102,
                'portfolio_id' => 21,
                'image' => 'antiqueda5.png',
                'created_at' => '2017-10-03 17:32:04',
                'updated_at' => '2017-10-03 17:32:04',
            ),
        ));
        
        
    }
}