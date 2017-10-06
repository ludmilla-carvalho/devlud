<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('skills')->delete();
        
        \DB::table('skills')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'PHP',
                'slug' => 'php',
                'description' => 'PHP5
PHP7
Orientação a Objeto
PSR\'s
Desing Patterns',
                'image' => 'php.svg',
                'order' => 1,
                'created_at' => '2017-09-29 02:17:06',
                'updated_at' => '2017-09-30 02:21:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Grunt',
                'slug' => 'grunt',
                'description' => 'Task Runner
Configuração
Criação de tarefas',
                'image' => 'grunt.svg',
                'order' => 19,
                'created_at' => '2017-09-29 02:22:18',
                'updated_at' => '2017-10-04 00:08:28',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'HTML5',
                'slug' => 'html5',
                'description' => 'HTML semântico
Código otimizado para SEO
Boas práticas',
                'image' => 'html.svg',
                'order' => 3,
                'created_at' => '2017-09-29 02:26:48',
                'updated_at' => '2017-09-30 02:21:04',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Apache',
                'slug' => 'apache',
                'description' => 'Instalação
Configuração
Virtual Hosts',
                'image' => 'apache.svg',
                'order' => 14,
                'created_at' => '2017-09-29 02:30:46',
                'updated_at' => '2017-10-04 00:08:10',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'CSS3',
                'slug' => 'css3',
                'description' => 'Pré processadores
Box Model
Reset
Sites responsivos',
                'image' => 'css.svg',
                'order' => 5,
                'created_at' => '2017-09-29 02:34:50',
                'updated_at' => '2017-09-30 02:21:18',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'MySQL',
                'slug' => 'mysql',
                'description' => 'Instalação e Configuração
Modelagem de dados
SQL',
                'image' => 'mysql.svg',
                'order' => 2,
                'created_at' => '2017-09-29 02:37:31',
                'updated_at' => '2017-09-30 02:21:04',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Laravel',
                'slug' => 'laravel',
                'description' => 'Laravel 5.1 -a 5.5
Lumen
Laravel Passport
Laravel Mix',
                'image' => 'laravel.svg',
                'order' => 7,
                'created_at' => '2017-09-29 02:45:25',
                'updated_at' => '2017-09-30 02:21:18',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Bootstrap',
                'slug' => 'bootstrap',
                'description' => 'Bootstrap 3
Bootstrap 4
Bootstrap Sass',
                'image' => 'bootstrap.svg',
                'order' => 6,
                'created_at' => '2017-09-29 02:46:01',
                'updated_at' => '2017-09-30 02:21:18',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Nginx',
                'slug' => 'nginx',
                'description' => 'Instalação
Configuração
Nginx com PHP-FPM',
                'image' => 'nginx.svg',
                'order' => 12,
                'created_at' => '2017-09-29 02:48:37',
                'updated_at' => '2017-10-04 00:08:09',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Sass',
                'slug' => 'sass',
                'description' => 'Mixins
Funções
Variáveis, Partials e Imports',
                'image' => 'sass.svg',
                'order' => 11,
                'created_at' => '2017-09-29 02:51:28',
                'updated_at' => '2017-10-04 00:08:09',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Wordpress',
                'slug' => 'wordpress',
                'description' => 'Criação de Temas
Custom Post Types
Custom Fields',
                'image' => 'wordpress.svg',
                'order' => 10,
                'created_at' => '2017-09-29 02:54:10',
                'updated_at' => '2017-10-04 00:08:09',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Composer',
                'slug' => 'composer',
                'description' => 'Configuração
Pacotes
Autoload',
                'image' => 'composer-logo.svg',
                'order' => 16,
                'created_at' => '2017-09-29 02:59:07',
                'updated_at' => '2017-10-04 00:08:10',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'JavaScript',
                'slug' => 'javascript',
                'description' => 'ES5 - ES6
Módulos
Babel
Bibliotecas',
                'image' => 'js.svg',
                'order' => 4,
                'created_at' => '2017-09-29 03:02:06',
                'updated_at' => '2017-09-30 02:21:17',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Docker',
                'slug' => 'docker',
                'description' => 'Docker Compose
Docker Machine
Volumes
Imagens',
                'image' => 'docker.svg',
                'order' => 20,
                'created_at' => '2017-09-29 03:05:12',
                'updated_at' => '2017-10-04 00:08:21',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'PagSeguro',
                'slug' => 'pagseguro',
                'description' => 'Checkout Transparente
Integração com PHP
Integração com Laravel',
                'image' => 'logo-pagseguro.svg',
                'order' => 21,
                'created_at' => '2017-09-29 03:07:45',
                'updated_at' => '2017-10-04 00:08:21',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'CakePHP',
                'slug' => 'cakephp',
                'description' => 'CakePHP 2.x
CakePHP 3.x
Bake',
                'image' => 'icon-cakephp.svg',
                'order' => 15,
                'created_at' => '2017-09-29 14:54:18',
                'updated_at' => '2017-10-04 00:08:10',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'jQuery',
                'slug' => 'jquery',
                'description' => 'Plugins
Ajax
Efeitos',
                'image' => 'jquery.svg',
                'order' => 13,
                'created_at' => '2017-09-29 17:02:59',
                'updated_at' => '2017-10-04 00:08:10',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Code Igniter',
                'slug' => 'code-igniter',
                'description' => 'Code Igniter 2.x -3.x',
                'image' => 'codeigniter.svg',
                'order' => 9,
                'created_at' => '2017-09-29 23:18:37',
                'updated_at' => '2017-10-04 00:08:09',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Gulp',
                'slug' => 'gulp',
                'description' => 'Task Runner
Configuração
Criação de tarefas',
                'image' => 'gulp.svg',
                'order' => 18,
                'created_at' => '2017-09-30 02:20:38',
                'updated_at' => '2017-10-04 00:08:28',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Git',
                'slug' => 'git',
                'description' => 'GitHub
Gitbucket',
                'image' => 'git.svg',
                'order' => 8,
                'created_at' => '2017-10-03 22:40:01',
                'updated_at' => '2017-10-04 00:08:05',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Vue',
                'slug' => 'vue',
                'description' => 'Vuex
Vue Resource',
                'image' => 'vue-logo.svg',
                'order' => 17,
                'created_at' => '2017-10-04 00:07:26',
                'updated_at' => '2017-10-04 00:08:27',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Webpack',
                'slug' => 'webpack',
                'description' => 'Plugins
Loaders',
                'image' => 'webpack.svg',
                'order' => 20,
                'created_at' => '2017-10-04 00:10:07',
                'updated_at' => '2017-10-04 00:10:25',
            ),
        ));
        
        
    }
}