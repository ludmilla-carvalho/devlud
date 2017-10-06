@extends('layouts.site')

@push('styles')

@endpush

@section('content')
    <section id="me">
        <div class="up"></div>
        <div class="cont">
            <div class="container ">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Sobre</h2>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 sobre">
                        <p>Iniciei meus estudos em programação como autodidata em 1999. Na época fazia Biblioteconomia na ECA/USP e comecei aprendendo HTML.</p>
                        <p>Em 2002, após ter abandonado o curso de Biblioteconomia 1 ano antes, comecei a fazer Tecnologia em Processamento de Dados na Fatec/Baixada Santista e pouco tempo depois já estava estagiando na área.</p>

                        <h3>Onde trabalhei:</h3>

                        <div class="jobs">
                            <div class="time">10/2014 a 10/2016 - <span class="place">Donaranha Estúdio de Design</span></div>
                            <div class="job">Programadora Web</div>
                            <div class="description">
                                Desenvolvimento e manutenção de sites codificados em PHP, utilizando os frameworks CakePHP e Code Igniter, Git, APIs de redes sociais, Wordpress, JavaScript, jQuery, MySQL, CSS, SASS e HTML 5. Análise de requisitos e modelagem de dados.
                            </div> 
                        </div>

                        <div class="jobs">
                            <div class="time">10/2013 a 06/2014 - <span class="place">Digipronto C.E.S. de Informática</span></div>
                            <div class="job">Programadora PHP</div>
                            <div class="description">
                                Desenvolvimento e manutenção de sites codificados em PHP, utilizando os frameworks Code Igniter, Yii e CakePHP, Git, APIs e aplicativos de redes sociais, Wordpress, Magento, JavaScript, jQuery, MySQL, CSS, SASS e HTML 5. Análise de requisitos e modelagem de dados.
                            </div> 
                        </div>

                        <div class="jobs">
                            <div class="time">08/2010 a 10/2013 - <span class="place">MKT Virtual</span></div>
                            <div class="job">Programadora PHP</div>
                            <div class="description">
                                Desenvolvimento e manutenção de sites codificados em PHP, utilizando o framework CakePHP, Git, APIs e aplicativos de redes sociais, Wordpress, Joomla, JavaScript, jQuery, MySQL, CSS e HTML 5. Modelagem de dados.
                            </div> 
                        </div>

                        <div class="jobs">
                            <div class="time">03/2008 a 06/2010 - <span class="place">Arpiglias do Brasil/Wapja.net</span></div>
                            <div class="job">Analista Programadora</div>
                            <div class="description">
                                Desenvolvimento e manutenção de Mobile Sites utilizando PHP, otimizado para diferentes tamanhos de telas e modelos. Desenvolvimento para web e gerenciamento da equipe de estagiários. Análise de requisitos e modelagem de dados.
                            </div> 
                        </div>

                        <div class="jobs">
                            <div class="time">07/2007 a 02/2008 - <span class="place">Digipix Serv. de Tecnologia Digital</span></div>
                            <div class="job">Analista Programadora</div>
                            <div class="description">
                                Desenvolvimento melhoria nos serviços de revelação digital, confecção de fotolivros e fotoprodutos de lojas online como Submarino, Americanas.com, Speedy, Fotóptica, Fotoregistro, Extra.com, etc. 
                            </div> 
                        </div>

                        <div class="jobs">
                            <div class="time">10/2006 a 08/2007 - <span class="place">Yavox Latin America</span></div>
                            <div class="job">Analista Programadora</div>
                            <div class="description">
                                Desenvolvimento sistemas internos. Desenvolvimento de aplicações para clientes: Motorola: LA (Large Accont) 6686 em diversas operadoras (SMS) e Wap Push (Claro), WSDL – Webservice para envio de SMS (NuSOAP), Portal Mymoto: Envio de fotos (MMS) através do LA 3686 (Tim); Cellbroker: Envio de mensagens SMS; Petrobras: Campeão Petrobras (campanha comemorativa dos Jogos Pan-americanos). Desenvolvimento de Produtos: m-Sender: Envio de SMS para contatos e grupos de contatos (envio imediato, envio agendado, personalização das mensagens e importação/exportação de contatos em arquivos .csv, etc). Modelagem de dados.
                            </div> 
                        </div>

                        <div class="jobs">
                            <div class="time">08/2006 a 10/2006 - <span class="place">IBM – Terceirizada pela Systemplan</span></div>
                            <div class="job">Web Builder</div>
                            <div class="description">
                                Responsável pela atualização, manutenção e criação de novas páginas web e participação em projetos internos envolvendo RSS.
                            </div> 
                        </div>

                        <div class="jobs">
                            <div class="time">12/2005 a 04/2006 - <span class="place">EmailTI/EBPC (Grupo EB)</span></div>
                            <div class="job">Programadora PHP</div>
                            <div class="description">
                                Principais atividades: Desenvolvimento de sites em PHP, utilizando MySQL/Postgress, abstração de banco de dados (ADODB class), CSS e JavaScript. Análise de requisitos e modelagem de dados.
                            </div> 
                        </div>

                        <div class="jobs">
                            <div class="time">03/200 a 06/2005 - <span class="place">Agência Metropolitana da Baixada Santista (AGEM-BS)</span></div>
                            <div class="job">Estagiária</div>
                            <div class="description">
                                Desenvolvimento de sistemas internos, suporte técnico a funcionários, instalação e atualizações de softwares.<br/>
                                Execução do projeto navegar (Navegação Metropolitana através de mapas da Região Metropolitana da Baixada Santista – Sistema Cartográfico Metropolitano).
                            </div> 
                        </div>

                        <h3>Hobbies:</h3>
                        <p>Felizmente minha vida não se resume a códigos :)</p>
                        <p>Dentre as outras coisas que eu gosto de fazer posso destacar:</p>
                        <p><b>Música:</b> gosto muito de ouvir e a alguns anos voltei a tocar contra-baixo.</p>
                        <p><b>Viagens:</b> quase todo final de semana vou pra Baixada Santista. Também gosto de viajar pra ir em shows e festivais com bandas que eu gosto.</p>
                        <p><b>Culinária/Gastronomia:</b> gosto de conhecer novos lugares e comidas diferentes. Não "alta gastronomia", minha preferência é comida de boteco, comidas típicas e lanches. Também gosto de preparar minha própria comida quando estou em casa.</p>
                        <p><b>Reparos domésticos:</b> é, eu já tive problemas com obra/reforma também! Então pra me livrar de mais problemas aprendi a fazer várias coisas: consertar rachadura na parede, passar massa corrida, lixar e pintar paredes e portas, passar rejunte, etc. Enfim, quando precisa eu viro pedreira aqui em casa.</p>
                        <p><b>Filmes e séries:</b> sempre estou vendo! Geralmente antes de dormir, é a hora do descanso!</p>
                        </p>


                    </div>
                    
                </div>
            </div>
        </div>
        <div class="down-single"></div>
    </section>

    
@endsection

@push('scripts')
    
@endpush