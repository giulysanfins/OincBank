@extends('layouts.site.app', ['activePage' => '', 'title' => '- Termos de Uso', 'navName' => '', 'activeButton' => ''])




@section('content')

    {{-- <section class="promo">
        <div class="promo-slider">
            <div class="promo-slider__item promo-slider__item--style-1">
                <picture>
                    <source srcset="{{ asset('helpo-theme') }}/img/tos.jpeg" media="(min-width: 835px)" />
                    <source srcset="{{ asset('helpo-theme') }}/img/tos.jpeg" media="(min-width: 376px)" /><img
                        class="img--bg" src="{{ asset('helpo-theme') }}/img/375promo_1.jpg" alt="img" />
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="align-container">
                                <div class="align-container__item">
                                    <div class="promo-slider__wrapper-1">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- promo socials start-->
        <ul class="promo-socials">
            <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fab fa-instagram"
                        aria-hidden="true"></i></a></li>
            <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fab fa-google-plus"
                        aria-hidden="true"></i></a></li>
            <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fab fa-twitter"
                        aria-hidden="true"></i></a></li>
            <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fab fa-facebook"
                        aria-hidden="true"></i></a></li>
        </ul>
        <!-- promo socials end-->

    </section> --}}
    <section class="section causes">
        {{-- <img class="causes__bg" src="{{ asset('helpo-theme') }}/img/causes_img.png"
            alt="img" /> --}}
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-12">
                    <div class="heading heading--primary"><span class="heading__pre-title">Termos e Condições de Uso</span>
                        <h2 class="heading__title"> <span>Termos e Condições de Uso</span></h2>

                        <div>
                            <p>
                                Por meio dos presentes Termos e Condições de Uso, doravante simplesmente denominados Termos,
                                de um lado OINCBANK LTDA, pessoa jurídica de direito privado devidamente inscrita no CNPJ
                                sob o n.º 39.791.515/0001-92, doravante simplesmente denominado OincBank, e de outro você,
                                usuário, celebram os termos e condições de uso do Site OincBank
                                (<a href="https://oincbank.com.br/" target="_blank">www.oincbank.com.br/</a>),
                                conforme itens a seguir, dando a tudo ciência e com tudo concordando para que surtam todos
                                os legais e jurídicos efeitos.
                            </p>
                            <h5>1- Discordância</h5>
                            <p>
                                EM CASO DE DISCORDÂNCIA, O USUÁRIO DEVERÁ IMEDIATAMENTE ABSTER-SE DE CONSENTIR COM OS
                                PRESENTES TERMOS E CONSEQUENTEMENTE ABSTER-SE DE UTILIZAR O SITE OINCBANK.
                            </p>
                            <h5>2- Definições e Glossário</h5>
                            <p>Para os fins previstos nestes Termos, interpretar-se-á conforme abaixo:</p>
                            {{-- tabela --}}
                            <style type="text/css">
                                .tg {
                                    border-collapse: collapse;
                                    border-spacing: 0;
                                }

                                .tg td {
                                    border-color: black;
                                    border-style: solid;
                                    border-width: 1px;
                                    font-family: Arial, sans-serif;
                                    font-size: 14px;
                                    overflow: hidden;
                                    padding: 10px 5px;
                                    word-break: normal;
                                }

                                .tg th {
                                    border-color: black;
                                    border-style: solid;
                                    border-width: 1px;
                                    font-family: Arial, sans-serif;
                                    font-size: 14px;
                                    font-weight: normal;
                                    overflow: hidden;
                                    padding: 10px 5px;
                                    word-break: normal;
                                }

                                .tg .tg-1wig {
                                    font-weight: bold;
                                    text-align: left;
                                    vertical-align: top
                                }

                                .tg .tg-0lax {
                                    text-align: left;
                                    vertical-align: top
                                }

                            </style>
                            <table class="tg">
                                <thead>
                                    <tr>
                                        <th class="tg-0lax"><span style="font-weight:bold">Apoiador</span></th>
                                        <th class="tg-0lax"><span style="font-weight:400;font-style:normal">Todo Usuário
                                                cadastrado no Site OincBank que realiza Apoio para um Cofrinho.</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tg-0lax"><span style="font-weight:bold">Apoio</span></td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">A realização de
                                                um pagamento em benefício de algum Cofrinho ativo no Site OincBank, mediante
                                                a utilização de Meios de Pagamento.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-0lax"><span style="font-weight:bold">Beneficiário</span></td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Todo Usuário
                                                cadastrado no Site OincBank que possua um Cofrinho cadastrado no Site em seu
                                                benefício.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">CNPJ</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Cadastro
                                                Nacional de Pessoas Jurídicas da Receita Federal do Brasil.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">Cofrinho</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Conta de
                                                registro financeiro aberta por um Usuário para um Beneficiário, utilizada
                                                para registro de Apoios recebidos, pelo qual realiza-se a campanha de
                                                arrecadação por meio do Site;</span><br></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">CPF</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Cadastro de
                                                Pessoa Física da Receita Federal do Brasil.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">Encargos</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Conjunto de
                                                Taxas e Tarifas incidentes sobre os Apoios e/ou Saque.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">Meios de Pagamento</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Meio de
                                                pagamento a ser escolhido por um Participante para a realização do Apoio,
                                                que poderá consistir em (i) boleto bancário; (ii) cartões de crédito
                                                emitidos no Brasil; (iii) PIX - transferências bancárias advindas de contas
                                                correntes; ou (iv) cartões de crédito emitidos no exterior.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">Saque</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">É a retirada de
                                                recursos depositados nos Cofrinhos, realizada mediante transferência de
                                                recursos a uma conta-corrente de titularidade do Beneficiário do
                                                Cofrinho.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">Site</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Página de
                                                internet disponibilizada pela OincBank a fim de viabilizar os Cofrinhos,
                                                conforme item 4 destes Termos.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">Tarifa de Boleto</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Possui
                                                significado a ele atribuído no item 8.1 destes Termos.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">Tarifa de Manutenção</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Possui
                                                significado a ele atribuído no item 8.1 destes Termos.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">Tarifa de Saque</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Possui
                                                significado a ele atribuído no item 8.1 destes Termos.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">Tarifa por Apoio</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Possui
                                                significado a ele atribuído no item 8.1 destes Termos.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">Taxa de Desconto</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Possui
                                                significado a ele atribuído no item 8.1 destes Termos.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">Termos</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Presentes Termos
                                                e Condições de Uso do Site OincBank.</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig">Usúario</td>
                                        <td class="tg-0lax"><span style="font-weight:400;font-style:normal">Pessoa física ou
                                                jurídica que utiliza o Site OincBank como Apoiador ou como Beneficiário de
                                                uma Vaquinha. *Um Usuário pode ser de forma concomitante Apoiador e
                                                Beneficiário no Site OincBank.</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            {{-- fim da tabela --}}

                            <h5>3- Aceitação dos Termos e Condições</h5>
                            <p>
                                Conforme já previsto nestes Termos, o acesso ao Site e sua efetiva utilização sujeita o
                                Usuário aos termos e condições ora previstos.
                            </p>
                            <p>
                                O aceite também será formalizado por meio de seleção positiva correspondente à opção “Aceito
                                os Termos e Condições de Uso do Site” na aba de cadastro do Usuário, oportunidade na qual o
                                Usuário manifestará sem dúvidas seu consentimento livre, expresso e informado com relação
                                aos presentes Termos.
                            </p>
                            <p>
                                O Usuário se declara, ainda, pessoa física maior de 18 anos de idade, em gozo de capacidade
                                compatível com as atividades a serem nele desenvolvidas, ou pessoa jurídica devidamente
                                representada nos termos de seu contrato social, e de acordo com as regras nele previstas.
                                Declara, também, expressa ciência quanto à PROIBIDA UTILIZAÇÃO DO SITE POR CRIANÇAS E
                                ADOLESCENTES.
                            </p>

                            <h5>4- Objeto e informações sobre o Site</h5>
                            <p>
                            <p>4.1. O Site OincBank é uma plataforma virtual que objetiva viabilizar a criação de campanhas
                                virtuais para arrecadação de valores, denominados Cofrinhos conforme definição
                                supramencionada, bem como possibilita o gerenciamento desses Cofrinhos pelos Beneficiários,
                                funcionando também como ferramenta de controle e gerenciamento de saques. Por meio do Site,
                                também, os usuários Apoiadores podem registrar e efetivar seus atos de Apoio voluntário para
                                os Cofrinhos abertos e disponíveis, de acordo com os Meios de Pagamento escolhidos e
                                disponsibilizados pelos parceiros do Site.</p>
                            <p>4.2. Por meio do Site, a equipe OincBank realiza a gestão dos Cofrinhos e dos Apoios
                                registrados. A gestão realizada, por sua vez não se traduz em qualquer tipo de controle
                                financeiro, de conteúdo ou de mérito sobre os motivos das campanhas, que são de única,
                                exclusiva e integral responsabilidade dos próprios Usuários Beneficiários ou donos dos
                                Cofrinho, limitando-se a OincBank a prover os meios necessários para que o Usuário os crie
                                ou os apoie, conforme o caso.</p>
                            <p>4.3. Para o acesso ao Site, o Usuário deverá possuir os meios necessários incluindo
                                dispositivo conectado à internet, provedor de conexão à internet, equipamentos, sistemas
                                operacionais, acessórios e softwares atualizados e que preencham os requisitos necessários,
                                sendo o único responsável pela obtenção, manutenção e custeio dos equipamentos, conexões e
                                demais itens citados nesta cláusula.</p>
                            <p>4.4. A OincBank mantém suporte técnico e operacional ao Site, além de Atendimento ao
                                Usuário, permitindo acesso às informações, dúvidas, reclamações e manutenção de
                                funcionamento e operacionalidade do Site.</p>
                            </p>

                            <h5>5- Cadastro de Usúarios e criação de Cofrinhos</h5>
                            <p>
                            <p>5.1. O acesso e a navegação pelas áreas irrestritas do Site são garantidos a todo e qualquer
                                internauta, mas a efetiva participação como dono ou Beneficiário dos Cofrinhos dependerá da
                                realização pelo Usuário de cadastro, por meio do qual deverá criar/fornecer: (i) nome de
                                usuário; (ii) senha pessoal e intransferível para acesso; (iii) endereço de e-mail vinculado
                                à conta; e (iv) demais dados essenciais de cadastro.</p>
                            <p>5.2. O Site OincBank poderá permitir que o cadastro seja realizado por meio de perfil de
                                usuário em rede social parceira do OincBank, concordando desde já o Usuário que os dados
                                pessoais coletados e armazenados pelo parceiro sejam compartilhados com a OincBank, sem
                                prejuízo do requerimento de complementação dos dados essenciais para o cadastro junto a
                                OincBank, por motivos de segurança e de exigências para cumprimento da sua finalidade.</p>
                            <p>5.3. Realizado o cadastro, o Usuário estará apto para criar Cofrinhos ou Apoiar Cofrinhos
                                disponíveis no site. A criação de Cofrinhos deverá ser pautada nos presentes Termos, bem
                                como estar de acordo com a Política de Privacidade e todas as leis brasileiras quanto à sua
                                legalidade, moralidade e atendimento a princípios éticos. O Usuário poderá realizar Apoios
                                sem efetivar o cadastro completo, desde que preencha o formulário específico de Apoio com
                                aceitação dos presentes Termos e Política de Privacidade.</p>
                            <p>5.4. Apesar de não possuir ingerência sobre cada um dos Cofrinhos, a equipe OincBank se
                                reserva ao direito de proibir, suspender, retirar do ar momentaneamente ou até mesmo excluir
                                o Cofrinho aberto pelo Usuário em caso de desrespeito à cláusula 5.3. acima.</p>
                            <p>5.5. Suspeitas de práticas ilegais, ilícitas, criminosas ou indevidas serão comunicadas às
                                autoridades competentes, nos termos da lei. Os Apoios concedidos poderão ser procedidos de
                                análise para prevenção à lavagem de dinheiro e atitudes igualmente reprováveis.</p>
                            <p>5.6. O aceite aos presentes Termos é declaração expressa e inequívoca de ciência pelo
                                Usuário de que é o único e exclusivamente responsável por todas as informações fornecidas
                                quando de seu acesso, cadastramento, criação de Cofrinhos e registro de Apoios no Site,
                                responsabilizando-se perante a OincBank e terceiros por todo e qualquer dano ou prejuízo
                                decorrente de informações incorretas, incompletas ou inverídicas, isentando por completo a
                                OincBank de qualquer responsabilidade, mesmo que decorrente de ato culposo ou de erro de
                                digitação.</p>
                            <p>5.7. Nos termos do Código Penal Brasileiro: “ESTELIONATO - Art. 171 - Obter, para si ou para
                                outrem, vantagem ilícita, em prejuízo alheio, induzindo ou mantendo alguém em erro, mediante
                                artifício, ardil, ou qualquer outro meio fraudulento: Pena - reclusão, de um a cinco anos, e
                                multa, de quinhentos mil réis a dez contos de réis.”</p>
                            <p>5.8. Nos termos do Código Penal Brasileiro: “FALSIDADE IDEOLÓGICA - Art. 299 - Omitir, em
                                documento público ou particular, declaração que dele devia constar, ou nele inserir ou fazer
                                inserir declaração falsa ou diversa da que devia ser escrita, com o fim de prejudicar
                                direito, criar obrigação ou alterar a verdade sobre fato juridicamente relevante: Pena -
                                reclusão, de um a cinco anos, e multa, se o documento é público, e reclusão de um a três
                                anos, e multa, de quinhentos mil réis a cinco contos de réis, se o documento é particular.”
                            </p>
                            <p>5.9. Ante a suspeita de prática dos crimes acima previstos, ou de qualquer outro, os dados
                                fornecidos pelo Usuário ou coletados pela OincBank serão comunicados à autoridade competente
                                para averiguação dos fatos, nos termos da lei.</p>
                            <p>5.10. Ante a suspeita de fraudes, ou por medidas básicas e preventivas de segurança, a
                                OincBank se resguarda ao direito de exigir o envio de documentos que comprovem a veracidade
                                das informações inseridas em cadastro pelo Usuário, sem prejuízo de outras exigências que se
                                considerem necessárias.</p>
                            <p>5.11. É vedado ao Usuário possuir mais de uma conta vinculada a um CPF, CNPJ ou e-mail de
                                identificação.</p>
                            <p>5.12. Os dados pessoais informados e coletados serão tratados conforme Política de
                                Privacidade do Site OincBank, disponível no site (<a
                                    href="https://oincbank.com.br/politica-de-privacidade"
                                    target="_blank">www.oincbank.com.br/politica-de-privacidade </a>), do que o Usuário
                                declara
                                possuir pleno conhecimento e informação, tendo lido e achado concorde com todos os termos
                                ali expostos. Em caso de discordância quanto às Políticas de Privacidade, tanto quanto aos
                                presentes Termos, deverá o Usuário abster-se da utilização e navegação no Site.</p>
                            <p>5.13. O Usuário é o único responsável pelas suas atividades no Site, inclusive pela
                                realização de Apoios e criação de Cofrinhos por meio de sua conta, obrigando-se à
                                comunicação imediata de todo e qualquer evento suspeito, além da imediata necessidade de
                                proceder às medidas disponibilizadas para alteração de senha de acesso.</p>
                            <p>5.14. O Site e os Cofrinhos não poderão ser utilizados como meio de pagamento para
                                transações comerciais, sendo que eventual contraprestação ou promessa de vantagem em
                                contrapartida ao Apoio NUNCA OCORRERÃO SOB A RESPONSABILIDADE DA OINCBANK.</p>
                            <p>5.15. Na criação de Cofrinhos, bem como no cadastro do Usuário, este se obriga a utilizar
                                imagens e/ou vídeos de sua autoria e propriedade intelectual, ou dos quais detenha os
                                devidos direitos de utilização, sendo possibilitado à OincBank, em caso de desrespeito às
                                regras de propriedade de direito intelectual ou de direitos de imagem, a retirada do ar ou
                                suspensão do Cofrinho até que as irregularidades sejam sanadas.</p>
                            <p>5.16. Ao criar Cofrinhos, o Usuário deverá prestar as informações pertinentes à campanha,
                                informando título do Cofrinho, meta de Apoios, prazo para a realização de Apoios, sugestão
                                de montante mínimo para o Apoio, e outras informações que entenda pertinente.</p>
                            <p>5.17. O Cofrinho poderá ser aberto com prazo determinado ou indeterminado, de acordo com sua
                                meta e seus objetivos.</p>
                            <p>5.18. Uma vez iniciado o Cofrinho, o Usuário detentor ou Beneficiário será o único
                                responsável por sua administração, pedidos de saque, atualização de informações, prazos,
                                metas e objetivos, responsabilizando-se perante os Apoiadores em caso de alterações
                                essenciais e que venham a deturpar o objetivo inicial do Cofrinho. Nesse sentido, a OincBank
                                aconselha que em caso de novos objetivos e metas, o Usuário constitua novo Cofrinho,
                                evitando assim transtornos e desentendimento na utilização do Site.</p>
                            <p>5.19. Usuários que causem transtorno aos Apoiadores e à OincBank devido à má utilização do
                                Site, mesmo que devidamente cadastrados, poderão ser excluídos do Site e impedidos de novo
                                cadastro.</p>
                            </p>

                            <h5>6- Dos Apoios</h5>
                            <p>
                            <p>6.1. Após a realização e validação do Cadastro de Usuário, este poderá Apoiar os Cofrinhos
                                abertos no Site conforme melhor lhes aprouver, desde que respeitadas as Políticas e os
                                Termos do Site. O Usuário poderá realizar Apoios sem efetivar o cadastro completo, desde que
                                preencha o formulário específico de Apoio com aceitação dos presentes Termos e Política de
                                Privacidade.</p>
                            <p>6.2. Os Apoios poderão ser realizados conforme Meios de Pagamento disponíveis no Site,
                                sempre em moeda corrente nacional.</p>
                            <p>6.3. Para efetivação dos Apoios, a OincBank poderá se valer de ferramenta de pagamento de
                                fornecedor independente, sendo inclusive possível o cadastro de Apoio recorrente mensal
                                conforme o caso, e sempre mediante requerimento do Apoiador.</p>
                            <p>6.4. O Usuário poderá, a qualquer momento, verificar seu histórico e extrato de Apoios
                                diretamente no Site, dentro de sua área restrita de Usuário, em aba específica, após a
                                efetivação do cadastro.</p>
                            <p>6.5. Os Apoios estarão sujeitos ao limite mínimo de R$ 10,00 (dez reais) e ao limite máximo
                                de R$ 50.000,00 (cinquenta mil reais), para cada Apoiador. Eventuais recolhimentos de
                                impostos decorrentes do Apoio, principalmente o Imposto por Doação, é de única e exclusiva
                                responsabilidade das partes doadoras e donatárias nos termos de cada legislação estadual,
                                inexistindo qualquer responsabilidade da OincBank seja no controle, da declaração ao fisco
                                ou na contabilização de tais transações voluntárias.</p>
                            <p>6.6. A OincBank não é responsável, garante, avaliza ou endossa qualquer transação realizada
                                por meio do Site, não assumindo qualquer obrigação ou responsabilidade solidária ou
                                subsidiária pela capacidade financeira dos Apoiadores em honrar com os Apoios realizados
                                pelos Meios de Pagamento disponibilizados. Também não será de responsabilidade da OincBank o
                                estorno de valores utilizados em Apoio aos Cofrinhos de terceiros por qualquer que seja a
                                razão.</p>
                            <p>6.7. A OincBank se reserva ao direito de, quando obrigada por decisão judicial à estornar
                                valores dedicados aos Cofrinhos aos Apoiadores, descontar tais valores do saldo de créditos
                                que o dono do Cofrinho teria direito a levantar.</p>
                            <p>6.8. Em caso de Apoios suspeitos, cumprindo com o objetivo do tratamento dos dados pessoais
                                e no melhor interesse de todos os envolvidos, incluindo o titular dos dados, para garantir a
                                segurança de todos os Usuários do Site contra atividades ilícitas, duvidosas ou ilegais a
                                OincBank se reserva ao direito de, respeitada a Política de Privacidade do Site, entrar em
                                contato com o Apoiador para confirmar tais operações.</p>
                            </p>

                            <h5>7- Dos Meios de Pagamento, dos Saques, Cancelamentos e Reembolsos</h5>
                            <p>
                            <p>7.1. Os Apoiadores, ao realizar suas operações de Apoio, poderão utilizar-se de quaisquer
                                dos Meios de Pagamento disponíveis na parceria do Site com o sistema de pagamento vigente.
                            </p>
                            <p>7.2. Cada Meio de Pagamento possui sua tabela de taxas, tarifas e descontos, conforme
                                publicado pelo OincBank neste Site (inserir link), sendo certo que ao escolher o Meio de
                                Pagamento que melhor lhe aprouver, o Apoiador estará concordando expressamente com a Tabela
                                e demais condições do Meio de Pagamento escolhido.</p>
                            <p>7.3. Independente do Meio de Pagamento escolhido para o Apoio, o sistema processará a Tarifa
                                de Apoio em acréscimo ao valor declarado para Apoio. A Taxa de Desconto será deduzida do
                                valor bruto disponível para Saque no momento em que este seja realizado. (E a taxa de
                                boleto).</p>
                            <p>7.4. O valor declarado para Apoio será contabilizado no Cofrinho apoiado em até 07 dias após
                                a confirmação do pagamento, independente do prazo de carência para o saque pelo
                                Beneficiário. O saldo dos Cofrinhos poderão ser consultados pelos Beneficiários por meio do
                                Site da OincBank.</p>
                            <p>7.5. Os prazos para recebimento e liberação do Apoio para Saque do Beneficiário poderão
                                variar de acordo com os Meios de Pagamento escolhidos pelos Apoiadores, e das efetivas
                                compensações bancárias das transações, conforme seguinte: Cartão de Crédito – 14 dias;
                                Boleto Bancário – 07 dias; Pix – 07 dias.</p>
                            <p>7.6. O saque dos valores pelo Beneficiário dependerá de completa informação sobre a
                                conta-bancária de destino dos valores, sendo proibido qualquer outro tipo de Saque, que não
                                por meio de depósito bancário em conta por ele mantida.</p>
                            <p>7.7. A depender do tamanho, apelo, alcance, ou probabilidade de geração de questionamentos
                                por parte dos Apoiadores, poderá a equipe OincBank determinar a retenção de até 20% (vinte
                                por cento) do saldo havido no Cofrinho pelo prazo de segurança de até 90 (noventa) dias a
                                partir do requerimento de primeiro saque.</p>
                            <p>7.8. Os Beneficiários declaram expressamente ter conhecimento de todos os encargos aplicados
                                sobre os Apoios formalizados, inclusive a Tarifa de Saque, aconselhando-se a realização do
                                mínimo número de operações possível para o devido atendimento das necessidades do
                                Beneficiário. Ainda, fica desde já esclarecido que os encargos serão sempre deduzidos do
                                saldo a ser sacado pelo Beneficiário.</p>
                            <p>7.9. Os Apoiadores poderão, até o encerramento do Cofrinho e desde que antes do saque pelo
                                beneficiário, requerer o cancelamento de sua contribuição através de pedido específico por
                                meio do Site, que será procedido dentro do prazo de até 03 (três) dias úteis. É vedado de
                                forma expressa e conhecida pelo Apoiador requerer o cancelamento e o reembolso do Apoio após
                                o seu saque pelo Beneficiário, pois a tradição torna ato perfeito e completa o contrato de
                                doação realizado por meio virtual, entre Beneficiário (donatário) e Apoiador (doador).
                                Questões de erro, dolo ou coação deverão sempre ser remetidas ao poder judiciário por meio
                                dos órgãos competentes, não havendo responsabilidade da OincBank por qualquer estorno de
                                valores ou dela se exigindo qualquer conduta diferente, por ser mera viabilizadora da
                                operação.</p>
                            <p>7.10. Para as contribuições feitas por meio de cartão de crédito, o reembolso será feito no
                                prazo de até 60 (sessenta) dias, de acordo com prazos e regras da própria prestadora do
                                cartão de crédito, mediante estorno nas próximas faturas do cartão. Se o pagamento tiver
                                sido feito através de boleto bancário ou PIX, o reembolso será realizado através de depósito
                                na conta bancária indicada pelo Usuário e de sua titularidade ou na conta de débito do
                                boleto.</p>
                            <p>7.11. Independente do motivo do reembolso, os valores estornados serão deduzidos de todos os
                                encargos imputáveis ao saque pelo Beneficiário, com exceção da Tarifa de Saque.</p>
                            <p>7.12. No mesmo prazo do pedido de cancelamento do Apoio, o Apoiador também poderá requerer,
                                em uma única vez, a portabilidade de seu Apoio para outro Cofrinho.</p>
                            <p>7.13. Na hipótese de exclusão/cancelamento do Cofrinho pela equipe OincBank, em atenção aos
                                presentes Termos e a sua Política de Privacidade, esta se obriga a emitir comunicado à todos
                                os Apoiadores, por meio de sistema de notificações dentro do próprio Site ou por e-mail, de
                                acordo com as permissões concedidas, contendo breve razão da exclusão/cancelamento,
                                procedendo ao reembolso dos Apoios formalizados, dos quais serão deduzidos os encargos
                                imputáveis ao saque pelo Beneficiário, com exceção da Tarifa de Saque.</p>
                            <p>7.14. Em caso de irregularidades operacionais sob responsabilidade do Site, o reembolso dos
                                valores dos Apoios será feito de forma integral, sem qualquer dedução.</p>
                            <p>7.15. Os valores dos Apoios, tanto para operações de Saque quanto para Reembolso não
                                sofrerão qualquer tipo de correção, capitalização, incidência de juros ou atualização,
                                resguardando seus valores de face independente do tempo transcorrido entre a efetivação do
                                Apoio e a operação de Saque/Reembolso.</p>
                            <p>7.16. Os Cofrinhos com saldo positivo permanecerão à disposição para o Saque pelo
                                Beneficiário por prazo indeterminado, sendo certo que Cofrinhos com Saldo e sem movimentação
                                pelo Beneficiário por mais de 06 (seis) meses incidirão em Taxa de Manutenção, cobrada
                                mensalmente, podendo inclusive ter seu saldo zerado, não havendo que se falar em cobrança de
                                Taxa de Manutenção aos Cofrinhos com saldo nulo. O débito mensal das Taxas de Manutenção se
                                equivalerão ao Saque dos Apoios para fins de reembolso.</p>
                            </p>

                            <h5>8- Dos Encargos</h5>

                            <p>
                            <p>8.1. São os encargos para qualquer Apoio e Saques dos saldos disponíveis nos Cofrinhos:</p>
                            <p>i. Tarifa de Boleto (Apoio):</p>
                            <p>ii. Tarifa de Manutenção (Cofrinho):</p>
                            <p>iii. Tarifa de Saque (Cofrinho):</p>
                            <p>iv. Tarifa por Apoio (Cofrinho):</p>
                            <p>v. Taxa de Desconto (Apoio/Cofrinho):</p>
                            <p>8.2. A OincBank poderá, a seu critério, reajustar os Encargos, sempre mediante prévia
                                comunicação ao Usuário, obrigando-se a manter atualizados os presentes Termos e sua
                                publicidade.</p>
                            <p>8.3. A OincBank poderá, a seu critério, e a qualquer momento, ofertar condições promocionais
                                para Apoios e Saques, citando-se sem prejuízo de outras condições: redução dos Encargos,
                                bonificações de remunerações, períodos de isenção total ou parcial sobre qualquer dos
                                Encargos e ofertas de brindes. Os termos de cada condição promocional serão sempre
                                divulgados no Site e deverão ser observados por todos os Usuários, vinculando a OincBank.
                            </p>
                            <p>8.4. Restando qualquer Usuário em inadimplência com a OincBank, poderá esta independente de
                                qualquer comunicação ou notificação prévia se valer de medidas extrajudiciais ou judiciais
                                para recebimento de seus créditos, devidamente acrescidos de juros de mora de 1% (um por
                                cento) ao mês e corrigidos monetariamente pro rata die até a data do efetivo pagamento, sem
                                prejuízo do apontamento negativo dos Dados do Usuário inadimplente aos órgãos de proteção ao
                                crédito ou cartórios de protesto.</p>
                            <p>8.5. A criação pelo Poder Público de novos tributos ou contribuições, alteração das
                                alíquotas expressas na Solicitação ou novas interpretações pelas autoridades fiscais quanto
                                à arrecadação de impostos serão refletidos de forma automática, majorando, conforme o caso,
                                o valor a ser deduzido dos Cofrinhos.</p>
                            </p>

                            <h5>9- Das Responsabilidades</h5>

                            <p>
                            <p>9.1. Sem prejuízo das demais isenções de responsabilidade indicadas nestes Termos e na
                                Política de Privacidade, o Usuário reconhece, assume e concorda que a OincBank não será
                                responsável:</p>
                            <p>i. Pelas obrigações tributárias decorrentes dos Apoios e Saques realizados pelos Usuários
                                por meio do Site.</p>
                            <p>ii. Por erros ou eventuais inconsistências na transmissão de dados, decorrentes de má
                                qualidade ou disponibilidade da conexão de Internet e que impeçam o adequado recebimento de
                                informações pela OincBank ou pelo Usuário;</p>
                            <p>iii. Pela inserção por terceiros de vírus ou demais elementos nocivos no Site, capazes de
                                causar alterações em seus sistemas de informática (software e hardware) e documentos
                                eletrônicos, e por eventuais danos e prejuízos por estes causados;</p>
                            <p>iv. Por eventuais links ou referências inseridas na descrição dos Cofrinhos mantidos pelos
                                Usuários no Site, não se responsabilizando também por qualquer conteúdo por estes inseridos
                                e/ou publicados;</p>
                            <p>v. Por eventuais danos e prejuízos decorrentes do conhecimento que terceiros possam ter
                                sobre os dados publicados pelo Usuário no Site, ou que que por eles foi adquirido em
                                decorrência de falha exclusivamente relacionada ao Usuário ou a terceiros razoavelmente fora
                                do controle da OincBank;</p>
                            <p>vi. Por eventuais indisponibilidades, erros e/ou falhas apresentados pelo Site, fraudes
                                cometidas por terceiro que atentem contra a o objetivo do Site, por sua falibilidade e seus
                                limites operacionais, nem por qualquer dificuldade que o Usuário apresente de acesso e/ou
                                navegação;</p>
                            <p>vii. Pela má utilização do Site por Usuários ou terceiros, nem por associações indevidas da
                                Marca e do Site OincBank a serviços e produtos não licenciados ou autorizados;
                            <p>viii. Pela utilização dos Usuários de material em desrespeito aos Direitos Autorais de
                                terceiros;</p>
                            <p>ix. Pelas denúncias realizadas por Usuários ou terceiros em relação aos Cofrinhos abertos no
                                Site, por citações contrárias e ou negativas realizadas por Usuários ou terceiros em relação
                                aos Cofrinhos abertos no Site em redes sociais, veículos de mídia, ou qualquer outros meios
                                externos e independentes.</p>
                            <p>9.2. Ainda, o Usuário declara-se ciente de que o Site da OincBank, os Apoios, Saques e
                                demais atividades realizadas no Site não são, e nem objetivam ser comparável aos serviços
                                financeiros oferecidos por instituições bancárias ou administradoras de cartão de crédito,
                                consistindo apenas em meio de viabilização virtual de campanhas de arrecadação, os
                                denominados Cofrinhos, entre os Usuários de forma voluntária, livre e isenta.</p>
                            <p>9.3 Os Usuários donos de Cofrinho ou deles Beneficiários obrigam-se a cumprir todas as
                                disposições legais e regulamentares aplicáveis à atividade, bem como os presentes Termos e a
                                Política de Privacidade do Site, em especial as referentes à proteção de dados pessoais,
                                obrigando-se a isentar a OincBank de qualquer responsabilidade que não decorra diretamente
                                de descumprimento por esta última das expressas ora dispostas e que por Direito lhe cabem.
                            </p>
                            <p>9.4 A OincBank não realiza atividades de monitoramento ou revisão das informações inseridas
                                nos Cofrinhos, exercendo, todavia fiscalização geral sobre as atividades e campanhas havidas
                                no Site por uma questão de segurança e para fazer valer os presentes Termos e a Política de
                                Privacidade. Na hipótese em que qualquer informação inserida no Site por qualquer Usuário ou
                                terceiro seja interpretada ou denunciada como violadoras da sistemática jurídica vigente,
                                destes Termos ou da Política de Privacidade, ou caso haja indício de fraude ou de outro
                                ilícito por parte dos Usuários, incluindo mas não se limitando a dano ou ameaça de dano à
                                imagem do Site OincBank, esta poderá, a seu exclusivo critério e sem necessidade de prévio
                                aviso, suspender, retirar do ar ou excluir, parcial ou integralmente, qualquer Cofrinho do
                                Site até que seja devidamente esclarecida a situação.</p>
                            <p>9.5. É de responsabilidade do Usuário e será por ele assumida toda responsabilidade civil e
                                criminal pelo descumprimento de suas obrigações, pela inexatidão das suas declarações e por
                                qualquer outra conduta ilícita, indenizando todos os afetados pelos seus malfeitos,
                                inclusive a OincBank por quaisquer prejuízos, inclusive despesas, honorários de advogado e
                                custas judiciais eventualmente incorridas.</p>
                            </p>

                            <h5>10- Das Vedações</h5>

                            <p>
                            <p>10.1. É vedado ao Usuário:</p>
                            <p>i. Infringir estes Termos ou qualquer outro disponibilizado pela OincBank;</p>
                            <p>ii. Violar qualquer lei, regulamento, decreto, portaria, ordem, decisão ou regulamentação
                                vigente, emitida por qualquer autoridade governamental no Brasil;</p>
                            <p>iii. Infringir os direitos autorais e de propriedade intelectual, de patente, de marca, de
                                segredo comercial ou confidencialidade, sujeitando-se as penas impostas pela legislação
                                especial, compreendendo que a utilização do Site não transfere para si qualquer direito o a
                                propriedade intelectual e os direitos autorais da OincBank;</p>
                            <p>iv. Agir de maneira difamatória, caluniosa, ameaçadora ou assediante;</p>
                            <p>v. Fornecer informações falsas, incompletas ou incorretas na utilização do Site;</p>
                            <p>vi. Utilizar o Site para simulação fraudulenta, ilícita ou indevida;</p>
                            <p>vii. Envolver-se em atividades e/ou transações potencialmente fraudulentas ou suspeitas;</p>
                            <p>viii. Desenvolver esquemas de “pirâmide financeira” ou deles participar ou incentivar a
                                participação;</p>
                            <p>viii. Não cooperar em eventuais investigações internas e/ou demais solicitações pela equipe
                                da OincBank quanto aos Cofrinhos nele mantidos;</p>
                            <p>ix. Contactar Usuários donos de Cofrinhos ou deles Beneficiários para estabelecer Apoios de
                                forma direta e sem utilizar o Site;</p>
                            <p>x. Utilizar o Site com intuito comercial ou para viabilizar transações comerciais envolvendo
                                bens e/ou serviços e quaisquer outros negócios jurídicos que não doações;</p>
                            <p>xi. Utilizar o Site de maneira potencialmente lesiva, que venha a trazer prejuízos à imagem
                                da OincBank ou que atraiam publicidade negativa, tudo de acordo com critérios próprios e
                                exclusivos da equipe OincBank.</p>
                            <p>xii. Associar-se ou tentar associar-se de qualquer maneira, salvo mediante autorização
                                prévia e por escrito, à marca OinkBank;</p>
                            <p>xiii. Desrespeitar a Política de Privacidade, especialmente buscando ou incentivando o
                                vazamento de dados pessoais de Usuários ou terceiros;</p>
                            <p>xiv. Disseminar ou facilitar a disseminação de vírus e/ou demais elementos nocivos no Site,
                                capazes de causar alterações em seus sistemas de informática (software e hardware) e
                                documentos eletrônicos;</p>
                            <p>xv. Atuar contra a boa-fé, os princípios éticos e morais.</p>
                            </p>

                            <h5>11- Cancelamento de Conta no Site OincBank</h5>

                            <p>
                            <p>11.1. A qualquer momento, poderá o Usuário pedir o cancelamento de sua conta no Site
                                OincBank, momento no qual seus dados pessoais serão, na medida do razoável e de acordo com
                                todas as responsabilidades assumidas pela OincBank, apagadas ou anonimizadas.</p>
                            <p>11.2. O Usuário, entretanto, não poderá pedir o cancelamento de sua conta no Site OincBank
                                enquanto mantiver Cofrinho aberto e com saldo positivo, devendo promover o Saque do saldo
                                disponível ou o cancelamento do Cofrinho antes de pedido de cancelamento da conta.</p>
                            <p>11.3. A inatividade superior a 01 (um) ano de conta sem Cofrinho a ela associada, ou havendo
                                Cofrinho esteja este com saldo nulo, será passível de cancelamento automático pela própria
                                equipe OincBank, em atenção à Política de Proteção de Dados Pessoais.</p>
                            </p>

                            <h5>12- Disposições Gerais</h5>

                            <p>
                                <p>12.1. Os presentes Termos, exceto no que se refere às complementações havidas pelos demais
                                documentos disponíveis no Site, constituem o acordo integral firmado entre a OincBank e o
                                Usuário em relação ao Site e às atividades nele desenvolvidas e a ele associadas,
                                prevalecendo sobre qualquer outro acordo oral ou escrito anteriormente firmado. Ainda, na
                                remota hipótese de algum item ou disposição nele contidos serem considerados nulos ou não
                                aplicável, manter-se-ão todos os demais no limite de sua aplicabilidade em pleno vigor e
                                efeito</p>
                                <p>12.2. As partes declaram expressamente, sejam pessoas físicas ou pessoas jurídicas, que as
                                atividades desenvolvidas no Site não objetivam e não tem a mínima capacidade de implicar
                                qualquer acordo, associação, joint venture, vínculo empregatício, contrato de prestação de
                                serviço, subordinação, representação, agenciamento ou parceria a qualquer título entre a
                                OincBank e o Usuário ou o Beneficiário, salvo instrumento jurídico próprio e firmado com
                                específico objetivo.</p>
                                <p>12.3. O Usuário e a OincBank observarão sempre as obrigações ora assumidas, eximindo-se
                                delas diante de caso fortuito ou de força maior devidamente documentada, certos de que o não
                                exercício de qualquer direito pela OincBank por ato de mera liberalidade não implicará
                                renúncia destes direitos que poderão ser exercidos a qualquer momento, nos limites da lei.
                                Tolerâncias da OincBank quanto a atrasos ou em fazer cumprir as obrigações ora assumidas não
                                constituirão a qualquer termo novação ou precedente contra si arguível, não prejudicando o
                                exercício dos direitos ou exigências de cumprimento de obrigações semelhantes em situação
                                futura.</p>
                                <p>12.4. Os presentes Termos, bem como toda a utilização do Site, os documentos nele contidos
                                ou dele extraídos e a relação entre as partes será sempre regulada pela Legislação
                                Brasileira em vigência, elegendo as partes o Foro da Comarca de Jundiaí/SP como único
                                competente para dirimir eventuais dúvidas, questões e demandas associadas aos presentes
                                Termos e à efetiva utilização do Site, atendendo-se aos termos da lei.</p>
                                <p>12.5. Questões excepcionais não previstas nestes Termos deverão ser submetidas à equipe
                                OincBank para estudo interno e deliberação não vinculante.</p>
                                <p>12.6. Os presentes Termos são datados de _____/_____/______.</p>
                            </p>
                            <div>
                                <div>
                                    <div class="skin_blank">
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
