<?php

use Illuminate\Database\Seeder;

class CertificatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('certificates')->delete();
        
        \DB::table('certificates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bootstrap 3',
                'slug' => 'bootstrap-3',
                'place' => 'Scholl of Net',
                'image' => 'certificate-bootstrap.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=e17e132e-58ee-4486-a74c-30fbdada1dd2',
                'created_at' => '2017-10-03 19:22:50',
                'updated_at' => '2017-10-03 19:22:50',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Composer',
                'slug' => 'composer',
                'place' => 'Scholl of Net',
                'image' => 'certificate-composer.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=0728c5d8-f40b-451d-bd4b-892da7b7bfa6',
                'created_at' => '2017-10-03 19:29:12',
                'updated_at' => '2017-10-03 19:29:12',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Desenvolvimento de APIs RESTFul com Laravel',
                'slug' => 'desenvolvimento-de-apis-restful-com-laravel',
                'place' => 'Scholl of Net',
                'image' => 'certificate-desenvolvimento-apis-restful-com-laravel.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=17d7da79-4e05-4b2f-83ae-0cb9c8e148a4',
                'created_at' => '2017-10-03 19:50:48',
                'updated_at' => '2017-10-03 19:50:48',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Desenvolvimento de temas para Wordpress',
                'slug' => 'desenvolvimento-de-temas-para-wordpress',
                'place' => 'Scholl of Net',
                'image' => 'certificate-desenvolvimento-de-temas-para-wordpress.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=85f34281-0dad-4a63-9155-ba245c5b1f68',
                'created_at' => '2017-10-03 19:53:44',
                'updated_at' => '2017-10-03 19:53:44',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ES6',
                'slug' => 'es6',
                'place' => 'Scholl of Net',
                'image' => 'certificate-es6.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=4d0e6e29-fb7b-496c-91d8-4c2fc6b7cd1b',
                'created_at' => '2017-10-03 22:49:08',
                'updated_at' => '2017-10-03 22:49:08',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Iniciando com Javascript',
                'slug' => 'iniciando-com-javascript',
                'place' => 'Scholl of Net',
                'image' => 'certificate-inciando-javascript.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=c5b8a37d-7d8d-480d-a685-43f5a3ea58e7',
                'created_at' => '2017-10-03 22:52:24',
                'updated_at' => '2017-10-03 22:52:24',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Iniciando com Docker',
                'slug' => 'iniciando-com-docker',
                'place' => 'Scholl of Net',
                'image' => 'certificate-iniciando-com-docker.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=ccb4bb7b-9214-4a4d-a2bc-9272e8d8d92e',
                'created_at' => '2017-10-03 22:58:20',
                'updated_at' => '2017-10-03 22:58:20',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Iniciando com Laravel',
                'slug' => 'iniciando-com-laravel',
                'place' => 'Scholl of Net',
                'image' => 'certificate-iniciando-com-laravel.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=3916f7d3-dc6c-4d41-851a-6a99564da6aa',
                'created_at' => '2017-10-03 23:01:14',
                'updated_at' => '2017-10-03 23:01:14',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Iniciando com Laravel 5.3',
                'slug' => 'iniciando-com-laravel-53',
                'place' => 'Scholl of Net',
                'image' => 'certificate-iniciando-com-laravel-5-3.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=b4c71d7f-4e66-43b7-b731-cab419df4bcc',
                'created_at' => '2017-10-03 23:05:43',
                'updated_at' => '2017-10-03 23:05:43',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Iniciando com Laravel 5.4',
                'slug' => 'iniciando-com-laravel-54',
                'place' => 'Scholl of Net',
                'image' => 'certificate-iniciando-com-laravel-54.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=009d37d9-619e-43e6-9b98-95bf55172761',
                'created_at' => '2017-10-03 23:09:20',
                'updated_at' => '2017-10-03 23:09:20',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Integrando PagSeguro com PHP Parte 1',
                'slug' => 'integrando-pagseguro-com-php-parte-1',
                'place' => 'Scholl of Net',
                'image' => 'certificate-integrando-pagseguro-com-php-parte1.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=9fbfa36e-5697-42ff-be17-9f0e4a79ec5c',
                'created_at' => '2017-10-03 23:11:59',
                'updated_at' => '2017-10-03 23:11:59',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Integrando PagSeguro com PHP Parte 2',
                'slug' => 'integrando-pagseguro-com-php-parte-2',
                'place' => 'Scholl of Net',
                'image' => 'certificate-integrando-pagseguro-com-php-pt2.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=51a4de71-fcd4-4994-9eaa-07beef6fc3d3',
                'created_at' => '2017-10-03 23:14:16',
                'updated_at' => '2017-10-03 23:14:16',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Javascript Avançado',
                'slug' => 'javascript-avancado',
                'place' => 'Scholl of Net',
                'image' => 'certificate-javascript-avancado.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=28915cd2-503c-44ce-b997-e08a53b9e053',
                'created_at' => '2017-10-03 23:16:31',
                'updated_at' => '2017-10-03 23:16:31',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'jQuery DataTables',
                'slug' => 'jquery-datatables',
                'place' => 'Scholl of Net',
                'image' => 'certificate-jquery-datatables.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=4312e569-6db2-45fb-9a2c-d389f2c1f4de',
                'created_at' => '2017-10-03 23:21:43',
                'updated_at' => '2017-10-03 23:21:43',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Laravel 5.3: Validações e Formulários',
                'slug' => 'laravel-53-validacoes-e-formularios',
                'place' => 'Scholl of Net',
                'image' => 'certificate-laravel-53-validacoes-e-formularios.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=b31a0aaf-e4c8-436e-a305-8c78dbabfbae',
                'created_at' => '2017-10-03 23:26:14',
                'updated_at' => '2017-10-03 23:26:14',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Laravel - Autenticação',
                'slug' => 'laravel-autenticacao',
                'place' => 'Scholl of Net',
                'image' => 'certificate-laravel-autenticacao.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=f46c78b5-2db2-4ef6-a5e0-f4b69e0f5582',
                'created_at' => '2017-10-03 23:29:23',
                'updated_at' => '2017-10-03 23:29:23',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Laravel - Eloquent',
                'slug' => 'laravel-eloquent',
                'place' => 'Scholl of Net',
                'image' => 'certificate-laravel-eloquent.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=886c37d1-5698-4ec5-8e68-e96de61dcca7',
                'created_at' => '2017-10-03 23:32:20',
                'updated_at' => '2017-10-03 23:32:20',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Laravel Mix',
                'slug' => 'laravel-mix',
                'place' => 'Scholl of Net',
                'image' => 'certificate-laravel-mix.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=9317ddc8-b89c-460a-899f-9d91a95882c1',
                'created_at' => '2017-10-03 23:35:07',
                'updated_at' => '2017-10-03 23:35:07',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Nginx: Instalando e configurando seu servidor web',
                'slug' => 'nginx-instalando-e-configurando-seu-servidor-web',
                'place' => 'Scholl of Net',
                'image' => 'certificate-nginx-instalando-e-configurando-seu-servidor-web.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=95bb50a7-36e1-4e0f-9d25-64e00b5da7f5',
                'created_at' => '2017-10-03 23:37:51',
                'updated_at' => '2017-10-03 23:37:51',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Novidades do Laravel 5.4',
                'slug' => 'novidades-do-laravel-54',
                'place' => 'Scholl of Net',
                'image' => 'certificate-novidades-do-laravel-54.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=f2ceafbc-748d-45a4-8234-225a5b0378fb',
                'created_at' => '2017-10-03 23:40:40',
                'updated_at' => '2017-10-03 23:40:40',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Novidades do Laravel 5.5',
                'slug' => 'novidades-do-laravel-55',
                'place' => 'Scholl of Net',
                'image' => 'certificate-novidades-do-laravel-55.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=0974928c-412f-4c28-a8a1-c3995f4e4b52',
                'created_at' => '2017-10-03 23:43:05',
                'updated_at' => '2017-10-03 23:43:05',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Orientação a Objetos com Javascript - ES5',
                'slug' => 'orientacao-a-objetos-com-javascript-es5',
                'place' => 'Scholl of Net',
                'image' => 'certificate-orientacao-objetos-com-javascript.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=30768e2c-7e9c-4ad3-993d-ff6faf73a247',
                'created_at' => '2017-10-03 23:45:38',
                'updated_at' => '2017-10-03 23:45:38',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'PHP - Avançando com OO',
                'slug' => 'php-avancando-com-oo',
                'place' => 'Scholl of Net',
                'image' => 'certificate-php-avancando-com-oo.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=77f7290e-62d7-4475-8a6a-d1d656a5914f',
                'created_at' => '2017-10-03 23:47:59',
                'updated_at' => '2017-10-03 23:47:59',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'PHP com MVC',
                'slug' => 'php-com-mvc',
                'place' => 'Scholl of Net',
                'image' => 'certificate-php-com-mvc.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=9566764d-9fb9-4b52-98f7-a3034795818f',
                'created_at' => '2017-10-03 23:53:23',
                'updated_at' => '2017-10-03 23:53:23',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Iniciando com OO',
                'slug' => 'iniciando-com-oo',
                'place' => 'Scholl of Net',
                'image' => 'certificate-php-iniciando-com-oo.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=4cc6d3fc-961d-4036-ade9-9d053efc6f70',
                'created_at' => '2017-10-03 23:55:46',
                'updated_at' => '2017-10-03 23:55:46',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'PSRs',
                'slug' => 'psrs',
                'place' => 'Scholl of Net',
                'image' => 'certificate-psrs.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=bf64f854-3832-4ae6-8e1b-ae1e2596aca3',
                'created_at' => '2017-10-03 23:58:13',
                'updated_at' => '2017-10-03 23:58:13',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Trabalhando com Laravel Passport',
                'slug' => 'trabalhando-com-laravel-passport',
                'place' => 'Scholl of Net',
                'image' => 'certificate-trabalhando-com-laravel-passport.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=88a437b9-1790-4947-9502-f22f5627b9a8',
                'created_at' => '2017-10-04 00:01:03',
                'updated_at' => '2017-10-04 00:01:03',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Twitter Bootstrap 4',
                'slug' => 'twitter-bootstrap-4',
                'place' => 'Scholl of Net',
                'image' => 'certificate-twitter-bootstrap-4.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=e93f90a7-0a22-47cd-8bd0-837c5d4abb43',
                'created_at' => '2017-10-04 00:03:47',
                'updated_at' => '2017-10-04 00:03:47',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Vue.js 2.0',
                'slug' => 'vuejs-20',
                'place' => 'Scholl of Net',
                'image' => 'certificate-vuejs-20.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=19642ad3-7810-463e-b3ee-e7efcf1e95c1',
                'created_at' => '2017-10-04 00:15:33',
                'updated_at' => '2017-10-04 00:15:33',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Vue 2.0 com VueX',
                'slug' => 'vue-20-com-vuex',
                'place' => 'Scholl of Net',
                'image' => 'certificate-vue-20-com-vuex.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=73e1a66a-22ed-480b-b88b-d4917a20e0f2',
                'created_at' => '2017-10-04 00:18:37',
                'updated_at' => '2017-10-04 00:18:37',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Vue.js 2 com Laravel',
                'slug' => 'vuejs-2-com-laravel',
                'place' => 'Scholl of Net',
                'image' => 'certificate-vuejs-com-laravel-54.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=63d152eb-59b1-4bab-9380-3f24175b90cc',
                'created_at' => '2017-10-04 00:20:58',
                'updated_at' => '2017-10-04 00:20:58',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Webpack 2',
                'slug' => 'webpack-2',
                'place' => 'Scholl of Net',
                'image' => 'certificate-webpack-2.jpg',
                'code' => 'https://www.schoolofnet.com/validar-certificado/?certificate=105f28ce-f1f6-4ef9-8b15-195175cf115c',
                'created_at' => '2017-10-04 00:24:25',
                'updated_at' => '2017-10-04 00:24:25',
            ),
        ));
        
        
    }
}