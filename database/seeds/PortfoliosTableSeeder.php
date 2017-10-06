<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolios')->delete();
        
        \DB::table('portfolios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tasômetro',
                'slug' => 'tasometro',
                'agency' => 'Donaranha',
                'link' => 'http://www.tasometro.com.br',
                'order' => 1,
                'month' => '09',
                'year' => '2015',
                'description' => 'Modelagem de dados
Programação Back-end
Configuração de servidor - AWS
Painel Administrativo',
                'media' => NULL,
                'created_at' => '2017-09-29 15:06:17',
                'updated_at' => '2017-10-03 17:22:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ernesto Varela Upload',
                'slug' => 'ernesto-varela-upload',
                'agency' => 'Donaranha',
                'link' => 'http://ernestovarela.com.br/',
                'order' => 3,
                'month' => '10',
                'year' => '2016',
                'description' => 'Programação Back-end
Custom Post Types
Custom Fields
Integração com o front-end',
                'media' => NULL,
                'created_at' => '2017-09-29 22:46:30',
                'updated_at' => '2017-10-03 17:22:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Thiago Bitar',
                'slug' => 'thiago-bitar',
                'agency' => 'Donaranha',
                'link' => 'http://www.thiagobitar.com/',
                'order' => 10,
                'month' => '11',
                'year' => '2015',
                'description' => 'Programação Back-end
Modelagem de dados
Manutenção no Back-end e no Front-end
Painel Administrativo',
                'media' => NULL,
                'created_at' => '2017-09-29 23:02:39',
                'updated_at' => '2017-10-03 17:41:07',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ACSP',
                'slug' => 'acsp',
                'agency' => 'Donaranha',
                'link' => 'http://www.acsp.com.br/',
                'order' => 11,
                'month' => '12',
                'year' => '2014',
                'description' => 'Programação Back-end do site institucional
Modelagem de dados
Painel Administrativo',
                'media' => NULL,
                'created_at' => '2017-09-29 23:40:32',
                'updated_at' => '2017-10-03 17:41:15',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Diário do Comércio',
                'slug' => 'diario-do-comercio',
                'agency' => 'Donaranha',
                'link' => 'http://dcomercio.com.br/',
                'order' => 8,
                'month' => '11',
                'year' => '2014',
                'description' => 'Programação Back-end
Modelagem de dados
Painel Administrativo',
                'media' => NULL,
                'created_at' => '2017-09-29 23:53:26',
                'updated_at' => '2017-10-03 17:40:39',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Risadaria',
                'slug' => 'risadaria',
                'agency' => 'Donaranha',
                'link' => 'http://risadaria.com.br/',
                'order' => 2,
                'month' => '05',
                'year' => '2015',
                'description' => 'Programação Back-end
Modelagem de dados
Manutenção do Back-end e do Front-end
Configuração de servidor - AWS
Painel Administrativo',
                'media' => NULL,
                'created_at' => '2017-09-30 00:26:44',
                'updated_at' => '2017-10-03 17:39:52',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Jogo Humano do Amanhã',
                'slug' => 'jogo-humano-do-amanha',
                'agency' => 'Donaranha',
                'link' => NULL,
                'order' => 6,
                'month' => '10',
                'year' => '2015',
                'description' => 'Programação Back-end
Configuração do servidor',
                'media' => '<a href="https://museudoamanha.org.br/pt-br/que-humanos-seremos-amanha" target="_blank" class="link">https://museudoamanha.org.br/pt-br/que-humanos-seremos-amanha</a>',
                'created_at' => '2017-09-30 01:08:30',
                'updated_at' => '2017-10-03 17:22:23',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Aplicativo do filme Zoom',
                'slug' => 'aplicativo-do-filme-zoom',
                'agency' => 'Donaranha',
                'link' => NULL,
                'order' => 5,
                'month' => '03',
                'year' => '2016',
                'description' => 'Aplicativo do facebook
Programação Back-end
Modelagem de dados',
                'media' => '<a href="http://www.cinemasim.com.br/filme-zoom-ganha-aplicativo-zoomyourself/" target="_blank" class="link">http://www.cinemasim.com.br/filme-zoom-ganha-aplicativo-zoomyourself/</a>
<a href="http://www.o2filmes.com/noticias/3184/zoom-aplicativo-zoomyourself/" target="_blank" class="link">http://www.o2filmes.com/noticias/3184/zoom-aplicativo-zoomyourself/</a>',
                'created_at' => '2017-09-30 01:27:12',
                'updated_at' => '2017-10-03 17:40:15',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Brincaixa',
                'slug' => 'brincaixa',
                'agency' => NULL,
                'link' => 'brincaixa.com.br',
                'order' => 4,
                'month' => '08',
                'year' => '2017',
                'description' => 'PSD para HTML
Programação Front-end e Back-end
Modelagem de dados
Integração com PagSeguro - checkout transparente
Painel Administrativo',
                'media' => NULL,
                'created_at' => '2017-09-30 02:26:01',
                'updated_at' => '2017-10-03 17:40:03',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Método Daya',
                'slug' => 'metodo-daya',
                'agency' => NULL,
                'link' => 'metododaya.com.br',
                'order' => 9,
                'month' => '06',
                'year' => '2017',
                'description' => 'Criação de tema personalizado
Programação Front-end e Back-end
Modelagem de dados
Custom Post Types
Custom Fields',
                'media' => NULL,
                'created_at' => '2017-09-30 02:38:24',
                'updated_at' => '2017-10-03 17:40:56',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'BRF Sadia #JOGAPRAMIM',
                'slug' => 'brf-sadia-jogapramim',
                'agency' => 'Digipronto',
                'link' => NULL,
                'order' => 7,
                'month' => '04',
                'year' => '2014',
                'description' => 'Programação Back-end do siteda promoção
Programação Back-end do site para consultas do callcenter
Modelagem de dados
Painel Administrativo',
                'media' => '<a href="http://www.propaganda.blog.br/felipao-promove-promocao-jogapramim-da-sadia/#axzz4uAYoEZTY" target="_blank" class="link">http://www.propaganda.blog.br/felipao-promove-promocao-jogapramim-da-sadia</a>',
                'created_at' => '2017-09-30 10:51:01',
                'updated_at' => '2017-10-03 17:40:28',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Avon Loucas Por Batom - 2ª edição',
                'slug' => 'avon-loucas-por-batom-2a-edicao',
                'agency' => 'Digipronto',
                'link' => NULL,
                'order' => 12,
                'month' => '03',
                'year' => '2014',
                'description' => 'Programação Back-end do site da promoção
Modelagem de dados
Painel Administrativo',
                'media' => '<a href="http://glamurama.uol.com.br/atencao-meninas-avon-lanca-promocao-loucas-por-batom-saiba-tudo/" target="_blank" class="link">http://glamurama.uol.com.br/atencao-meninas-avon-lanca-promocao-loucas-por-batom-saiba-tudo/</a>
<a href="https://falandodebeleza.com.br/2014/04/25/avon-lanca-a-2a-edicao-da-promocao-loucas-por-batom-e-vai-presentear-consumidoras-com-10-mil-premios/" target="_blank" class="link">https://falandodebeleza.com.br/2014/04/25/avon-lanca-a-2a-edicao-da-promocao-loucas-por-batom-e-vai-presentear-consumidoras-com-10-mil-premios/</a>',
                'created_at' => '2017-09-30 11:02:25',
                'updated_at' => '2017-10-03 17:41:24',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Tudo Junto e Misturado - Mid e Fit',
                'slug' => 'tudo-junto-e-misturado-mid-e-fit',
                'agency' => 'Digipronto',
                'link' => NULL,
                'order' => 13,
                'month' => '01',
                'year' => '2014',
                'description' => 'Programação Back-end
Modelagem de dados
Painel Administrativo',
                'media' => NULL,
                'created_at' => '2017-09-30 11:25:25',
                'updated_at' => '2017-10-03 17:41:38',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Avon Loucas Por Batom - 1ª edição',
                'slug' => 'avon-loucas-por-batom-1a-edicao',
                'agency' => 'MKT Virtual',
                'link' => NULL,
                'order' => 20,
                'month' => '02',
                'year' => '2013',
                'description' => 'Desenvolvimento dos aplicativos Beijometria, Mostre seu Beijo e selo
Loucas por Batom.',
                'media' => NULL,
                'created_at' => '2017-10-03 15:29:40',
                'updated_at' => '2017-10-03 17:35:53',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Instituto Ayrton Senna - Construindo um novo planeta',
                'slug' => 'instituto-ayrton-senna-construindo-um-novo-planeta',
                'agency' => 'MKT Virtual',
                'link' => NULL,
                'order' => 17,
                'month' => '08',
                'year' => '2012',
                'description' => 'Programação Back-end
Modelagem de dados
Painel Administrativo',
                'media' => NULL,
                'created_at' => '2017-10-03 16:49:33',
                'updated_at' => '2017-10-03 17:42:11',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'LEGO - Concurso Crie e Ganhe',
                'slug' => 'lego-concurso-crie-e-ganhe',
                'agency' => 'MKT Virtual',
                'link' => 'https://www.facebook.com/crieeganhelego',
                'order' => 14,
                'month' => '07',
                'year' => '2012',
                'description' => 'Programação Back-end
Modelagem de dados
Blog
Painel Administrativo',
                'media' => NULL,
                'created_at' => '2017-10-03 16:55:41',
                'updated_at' => '2017-10-03 17:41:46',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Cosmopaulistanos',
                'slug' => 'cosmopaulistanos',
                'agency' => 'MKT Virtual',
                'link' => 'Cosmopaulistanos',
                'order' => 19,
                'month' => '05',
                'year' => '2012',
                'description' => 'Programação Back-end
Modelagem de dados
Painel Administrativo',
                'media' => NULL,
                'created_at' => '2017-10-03 16:57:50',
                'updated_at' => '2017-10-03 17:42:26',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Instituto Querô',
                'slug' => 'instituto-quero',
                'agency' => 'MKT Virtual',
                'link' => NULL,
                'order' => 18,
                'month' => '04',
                'year' => '2012',
                'description' => 'Programação Front-end
Modelagem de dados
Programação Back-end',
                'media' => NULL,
                'created_at' => '2017-10-03 16:59:35',
                'updated_at' => '2017-10-03 17:42:19',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Torra Torra',
                'slug' => 'torra-torra',
                'agency' => 'MKT Virtual',
                'link' => 'http://www.torratorra.com.br/',
                'order' => 21,
                'month' => '09',
                'year' => '2012',
                'description' => 'Programação Back-end
Modelagem de dados
Painel Administrativo
Blog',
                'media' => NULL,
                'created_at' => '2017-10-03 17:01:50',
                'updated_at' => '2017-10-03 17:42:38',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Rede VTV – Afiliada do SBT',
                'slug' => 'rede-vtv-afiliada-do-sbt',
                'agency' => 'MKT Virtual',
                'link' => 'http://www.vtv.com.br/',
                'order' => 16,
                'month' => '01',
                'year' => '2012',
                'description' => 'Programação Back-end
Modelagem de dados
Painel Administrativo',
                'media' => NULL,
                'created_at' => '2017-10-03 17:16:29',
                'updated_at' => '2017-10-03 17:42:03',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Antiqueda',
                'slug' => 'antiqueda',
                'agency' => 'MKT Virtual',
                'link' => 'http://www.antiqueda.com.br/',
                'order' => 15,
                'month' => '09',
                'year' => '2011',
                'description' => 'Programação Back-end
Modelagem de dados
Painel Administrativo',
                'media' => NULL,
                'created_at' => '2017-10-03 17:20:54',
                'updated_at' => '2017-10-03 17:41:55',
            ),
        ));
        
        
    }
}