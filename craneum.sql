-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Set-2019 às 19:17
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `craneum`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `idConteudo` int(11) NOT NULL,
  `vizualizacoes` int(11) NOT NULL,
  `titulo` varchar(256) NOT NULL,
  `conteudo` text NOT NULL,
  `dataPostagem` datetime NOT NULL,
  `fotoCapa` varchar(256) NOT NULL,
  `fk_cont_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`idConteudo`, `vizualizacoes`, `titulo`, `conteudo`, `dataPostagem`, `fotoCapa`, `fk_cont_idUsuario`) VALUES
(1, 50, 'Sociologia de Bar', 'Muito mais do que apenas um lugar de \nO Bar é um local de experiências, onde há um anseio pela mudança, pelo novo, pelo diferente. Ao final, deixo vocês com uma renomada música do grupo de rock brasileiro, Engenheiros do Hawaii?-?Piano de Bar.', '0000-00-00 00:00:00', 'capa1.png', 1),
(2, 50, 'Um novo buraco negro nasceu!', 'Um novo buraco negro nasceu! Você teve uma ideia e resolveu colocá-la em prática. Nenhuma luz ou energia vai escapar. O seu tempo e espaço foi deformado. Uma singularidade foi formada. A emissão de radiação começou.\n\nPara fazer sua ideia ir para frente, você precisa de 1% de inspiração e 99% de transpiração.\nVocê precisar saber que ter uma ideia é a menor parte do processo. Trabalhar duro é a maior parte. O exagero entre as proporções de 1% de inspiração e 99% de transpiração, vem da argumentação de ideias serem baratas, pois todo mundo as tem e o que conta no final é \'fazer as coisas\'.\n\nJá fique sabendo que você vai \'suar muito\' e se quiser colocar sua ideia em prática, você já precisa se convencer que precisa estar bem fisicamente. Precisa se cuidar. Ninguém faz nada doente.\nPara fazer sua ideia ir para frente, você precisa de 49% de transpiração, 1% de inspiração e 50% de transpiração.\nVocê precisa saber a ordem que o processo acontece. Uma grande parte do trabalho começa bem antes de ter a inspiração. É preciso que você esteja trabalhando duro, estudando, pesquisando, perguntando, cutucando, errando, fracassando. aprendendo.\n\nCaro leitor, meu português é tão bom quanto o time do Vasco, mas coloquei as últimas sentenças no gerúndio para expressar que você precisa estar em movimento.\nNão pense que sem conhecimento e experiência, você terá inspiração. Não acredite que uma maça vai cai na sua cabeça e você terá uma inspiração súbita. Isso não acontece. Comece a fazer alguma coisa.\n\nPara fazer sua ideia ir para frente, você precisa de 49% de transpiração, 1% de inspiração, 49% de justificação e 1% de transpiração.\nHoje, depois de \'várias porradas\', considero as frases anteriores simplistas demais. Como diria John Nash: \'Incompletas\'. Estariam incorretas? Com certeza, não. Apenas acredito que elas deveriam ter um pouco mais de informação para quem vai encarar o buraco negro que é colocar uma ideia em prática.\n\nTalvez seja apenas um mais um \'preciosismo\'. Mas, hoje, entender a \'frase famosa\' com as duas alterações, me fez ter mais ideias e não abandoná-las quando a motivação inicial começa a perder força.\nJustificação. Vamos entender porque este conceito é importante. Começando por \'Todo mundo tem sua própria boa ideia.\'\n\nAté os medíocres têm ideias, porém não implementam. Se você está lendo até aqui é porque não quer ser um medíocre. Então, vamos lá.\nPara tirar sua ideia do papel é necessário convencer outras pessoas, muitas outras pessoas, i.e, alterar o estado mental do próximo para que este se alinhe com o seu estado mental. Sem dúvidas, é difícil. Muitas vezes não conseguimos nem alterar nosso próprio estado mental para fazer alguma coisa. Imagina de um terceiro.\n\nPara conseguir fazer isso, você tem que ser capaz de convencer (justificar bem) que sua ideia é boa o suficiente para que outra pessoa prefira investir o tempo dela na sua ideia e não na própria ideia?-?isso é uma arte. E, não para por ai, você precisa continuar justificando para que esta pessoa não desista.\n\nJustificação. s.f. (i) ato ou efeito de justificar(-se). (ii) conjunto de argumentos apresentados por alguém em sua defesa ou em favor de alguém ou ideia?-?esta última palavrinha em negrito eu incluí (na cara dura).\nAlém de uma boa justificativa para convencer as pessoas a te ajudar a implementar ideia, é preciso uma excelente justificativa para convencer outras pessoas comprarem o produto (resultado) da sua ideia. Esta segunda parte, acredite, é muito mais difícil.\n\nJustificar é uma parte da transpiração, logo ainda temos 99% de transpiração?-?concordo com a frase famosa. Mas acredito que a ordem (1ª alteração) e a adição deste novo conceito (2ª alteração) merecem sua atenção.\n\nAhh.se você gostou do textinho inicial sobre buracos negros, singularidade, tempo e espaço, não pesquise mais, fique apenas nisso. Sério, não vale a pena. Exceto, se você estiver com muito tempo livre ou bêbado?-?não estou utilizando nenhuma psicologia reversa aqui.', '0000-00-00 00:00:00', 'capa1.png', 2),
(3, 50, 'Programação funcional para iniciantes', 'Este é um texto para iniciantes, mas também para aqueles que pretendem entender os pilares da programação funcional (PF), porque ela é importante e exemplos um tanto reais de seu uso. Para exemplos de código, usarei JavaScript, pois é a linguagem que possuo mais familiaridade. Espero que você goste, e não esqueça de compartilhar a palavra.\n\nO que é Programação Funcional?\nÉ um paradigma de programação, tal como Programação Orientado a Objetos(POO) e Programação Imperativa (existem outros paradigmas, mas esses são os mais famosos). Entende-se como paradigma uma forma de fazer algo. Ou seja, paradigma de programação é o nome que se dá a maneira como se programa, a orientação que seus códigos irão ter. POO, por exemplo, vai me ensinar a modelar meus códigos e algoritmos pensando em entidades que possuem características e comportamentos, vulgo objetos. Em Imperativa, vamos dar ao nosso programa uma sequência de passos para resolver determinado problema. Mas o que seria o paradigma funcional? Quais orientações ele me dá na hora de desenvolver o código?\n\nNo paradigma funcional eu não dito ao meu código o que ele deve fazer, quando e como. Não irei desenvolvê-lo passo a passo. Eu penso meu código como uma sequência de funções e/ou passos, as quais de maneira composta irão resolver meu problema.\nDe maneira simples: código funcional é um código composto de múltiplas funções que se compõem para resolver um problema. Pense da seguinte forma: eu tenho um dado de entrada e preciso transformá-lo em um dado de saída. Usando PF eu vou abstrair as lógicas de transformações do meu código em funções, e usá-las no momento oportuno para transformar este meu dado.\n\nMas é só isso? Não meu pequeno gafanhoto, essa é só a ponta do Iceberg.\n\nImutabilidade, pra que te quero?\nLá vai a primeira orientação: não use variáveis, use constantes! Sim, isso mesmo que eu falei, você não vai ter código com uma pancada de variáveis, você vai ter um código mais sucinto com constantes que, via de regra, não irão mudar! Parece coisa de maluco, mas vou te dizer alguns motivos de porquê um código imutável pode ser tão bom.\n\nA imutabilidade faz sentido dentro da programação funcional pelo seu viés matemático. Nela, um número sempre será aquele valor, independente de onde esteja ou como está sendo usado. É importante também entender que nas expressões matemáticas, para um mesmo valor passado a uma variável, teremos o mesmo retorno da função. Ele nunca muda. Se você tem uma expressão como f(x) = x + 2, você pode passar o número 3 quantas vezes quiser, esta função sempre retornará 5. Um último ponto é que o número 3 passado para x, não irá mudar seu valor, ou seja, ele permanece inalterado após o seu uso na função.\nVamos a um pouco de código?\n\n\nNo código acima, nós podemos ver que a variável varMutable pode ser modificada por uma função. Por que isso ocorre? Entre inúmeros motivos, isso ocorre porque a variável está em um escopo compartilhado com a função, ela foi declarada com var, o que faz com que ela fique acessível por todo o código, em um escopo que outras funções terão acesso. Agora, apresento uma refatoração desse código, usando const e fazendo com que a função receba um valor e o retorne.\n\n\nNo código acima podemos ver que:\n\nnumbernão pode ser acessado fora da função.\npassei como parâmetro imutableVariable e assim, foi manipulado seu valor.\notherImutableVariable recebe o resultado da função pureFunction .\nMais a frente iremos ver o que são funções puras e impuras. Continuemos com a Imutabilidade.\n\nSem efeitos colaterais\nSim, chega de ficar que nem um maluco procurando aonde uma variável mudou o seu valor e tornou sua vida um Inferno! Em códigos pequenos, nos quais o pequeno gafanhoto está aprendendo a programar, não dão tanta dor de cabeça. Mas imagine um código Angular da vida com algumas dezenas de variáveis GLOBAIS, e você \'acidentalmente\' modifica uma delas. Maravilha neh?\n\nUm código imutável é um código sem efeitos colaterais. Ou seja, tendo constantes que não podem mudar, você não vai ficar retribuindo valores a variáveis e gerando efeitos colaterais mortais no seu código. Todavia, esse princípio tornou-se um dos motivos para que PF não \'engatasse\' tanto quanto Imperativa e POO. Motivo: uso de memória, que em programas desenvolvidos usando tal paradigma acabavam consumindo mais que seus \'concorrentes\'. Hoje, contudo, memória não é um problema. Na maioria dos cenários, é o que mais sobra. O que falta é utilizar o máximo possível do poder de processamento. E aí chegamos ao próximo ponto.\n\nImutabilidade significa previsibilidade\nQuando um programa é desenvolvido usando os princípios da PF, ele se torna previsível. Por que isso é importante? Se lembra que falei do processamento? Então, programas previsíveis significam programas que os processadores vão lidar melhor. Entenda comigo: se eu sei que, ao invocar essa função, eu terei um número de retorno, eu sei que irei lidar com números. E se eu for passar para um outra função um número, mas ela espera uma string, eu já logo acuso um erro. Isso faz com que seu programa se torne mais inteligente. ah, e processadores agradecem!\n\nUm cenário da vida real\nUltimamente tem crescido a adesão a chamada computação paralela, e consequentemente a programação paralela. Nossos processadores estão ficando cada vez mais rápidos, mas não o suficiente para acompanhar algumas evoluções, até mesmo dentro do setor econômico. Um exemplo disso é que algumas empresas tem optado por usar linguagens não bloqueantes, como por exemplo Node.js em seus projetos. Outras tem usados linguagens multi thread para lidar com a grande carga de processamento dos seus dados. Mas já imaginou a implementação de códigos paralelos? Pois bem, não vou me aprofundar no assunto, mas linguagens funcionais tendem a ser mais amigáveis quando o assunto é programação paralela, e um dos motivos é exatamente a imutabilidade! Por que? Códigos previsíveis e sem efeitos colaterais nos ajudam a desenvolver de forma que múltiplos pedaços do nosso sistema rode em múltiplos processadores, e não teremos muitas dores de cabeça.\n\nAbstração acima de tudo!\nAbstração é a capacidade de separar o essencial do que não é essencial.\nPrimeiramente, o que seria, em termos de código, uma abstração? Seria a implementação de uma função para um determinado bloco de código a ser utilizado e reutilizado. Quais as vantagens da abstração?\n\nPrimeiro, você estará reaproveitando código. Menos código com mais informações. Isso é bom.\nO processo todo em que as funções foram abstraídas irão fazer sentido para você. Isso, alinhado com um bom nome para as funções, deixarão o seu código muito legível e de fácil compreensão.\nE aí vem a parte legal. Se lembra que falei acerca da inteligência do código. Então, seu processador já vai saber que dado um número 6, ele terá como retorno um número 5. A previsibilidade aqui faz a festa.\nUm exemplo bobo, mas simples do uso de abstrações:\n\n\nPerceba que no código acima, eu abstraí as condições dos ifs para que até meu código se tornasse mais legível.\n\nPois bem, quando se fala de abstração, precisamos falar de funções. Agora entraremos no próximo tópico.\n\nFunções, funções, funções...\nNão é a toa que programação funcional é a programação \'orientada a funções\'. O conceito de função matemática permeia este paradigma, como expliquei quando falei de imutabilidade. Agora, se torna necessário eu trazer alguns conceitos importantes quando falamos de funções.\n\nFunções puras\nBem, o conceito de funções puras tem tudo a ver com a não existência de efeitos colaterais. Funções puras são funções que não modificam o escopo ao redor delas. Quando eu aprendi um pouco da Linguagem C, aprendi um conceito muito interessante: ponteiro. E aprendi que é através deles que as funções em C podiam modificar variáveis fora de seu escopo interno. Bem, nós já vimos um exemplo de uma função impura e também um exemplo de uma função pura. Mas quais os princípios por trás? Uma função pura:\n\nRecebe ao menos um parâmetro e trabalha com ele.\nEla retorna alguma coisa. É interessante que uma função, como nos ensinam, via de regra, é uma sequencia de procedimentos a serem executados. Até ai, tudo bem, porem, em programação funcional uma função sempre deve retornar um valor. Por que? Encadeamento de operações. É normal vermos algo como fn1(fn2(fn3(value))).Parece um tanto estranho isso, mas imagina o seguinte código.\n\nO que a função acima faz? O código legível nos ajuda a compreender as sequencias de passos bem definidos que a expressão acima tem. E além disso, sem as funções retornarem o valor, seria impossível haver esse encadeamento. Um outro motivo é que ao retornar um valor, eu exponho o que deve ser exposto e nunca modifico um escopo de fora, pois se torna necessário eu armazenar este novo valor em algum lugar.\n\nFunções de primeira classe?-?First Class Functions\nQuando uma linguagem possui first-class function, significa que funções podem ser usadas como valores, sendo passadas como parâmetros e recebidas como resultados. Em suma, uma first-class function é uma função que representa um valor no código, pode ser um array, um objeto.\n\n\nFunções de primeira ordem?-?High Order Functions\nUma linguagem que possui high-order functions, é aquela em que suas funções podem ter outras funções como parâmetros e retornar ou não, elas como resultado.\n\n\nCurrying, ah meu amado currying\nConfesso que num primeiro momento eu fiquei tentando entender porque \'cargas d\'água\' isto seria interessante. Até que comecei a trabalhar mais de perto com Vinicius Reis, ai ví que em praticamente tudo, ele usava este bendito currying. Mas que diachos é isso? Na wiki do Haskell, encontramos:\n\nCurrying is the process of transforming a function that takes multiple arguments into a function that takes just a single argument and returns another function if any arguments are still needed.\n\n\nVamos entender o código acima, nos atentando as funções getUidAuthorFromTopic e acceptOrder. Antes disso, tenha uma coisa em mente: as funções then e catch das Promises recebem uma função como argumento, tal função recebe como parâmetro o valor de retorno da promessa, seja com Promise.resolve(value) ou Promise.reject(error). Para uma compreensão melhor, leia mais aqui e aqui sobre promises.\n\nTendo essa ideia em mente, vamos as funções que citei anteriormente. A chave para compreensão de como tudo ocorre está na função curry do ramda.js. Tal função faz o que a frase acima, do wiki do Haskell diz. Mas o que quer dizer essa transformação? Vamos passo a passo:\n\nAs funções getUidAuthorFromTopic recebe três parâmetros. Dois parâmetros já foram passados na execução da função. O curry transforma a função que recebe três parâmetros, em uma função que recebe um, quando dois forem passados na hora da execução. O mesmo ocorre com a função acceptOrder, que recebe três parâmetros, mas como foi passado dois, retorna uma outra função que recebe um. Um outro passo a passo:\n\n\nSobre os assuntos que abordei, sugiro os seguintes conteúdos:\n\nEntendendo programação funcional de uma vez por todas com JS\nTalk de Vínicius Reis sobre o assunto\nIntrodução a Programação Funcional com JS\nProgramação funcional com JavaScript\nComeçando com cálculo lamba e programação funcional\nBom gente, esse foi mais um texto sobre tecnologia. Espero ter ajudado a sanar algumas dúvidas acerca da programação funcional e seus benefícios. E nunca esqueça: compartilhe a palavra.\n\nSou Emanuel, Desenvolvedor na decision6 e entusiasta de Inteligência Artificial. Maluco por séries e filmes. Amo programação e tudo que a cerca. Conheça meu trabalho no meu site emanuelgsouza.dev e em meu Github. May the force be with you!)\n\n', '0000-00-00 00:00:00', 'capa1.png', 2),
(4, 50, 'Um resumo do maior escândalo político da história dos EUA', 'Depois de um ano de investigação sem precedentes por parte do FBI e da própria imprensa, não há uma única prova que confirme a tese de conluio entre os russos e a campanha de Trump. Quatro pessoas próximas a Trump foram indiciados por crimes como lavagem de dinheiro e por mentir no depoimento, o que é sério mas não tem nada a ver com conluio.\n\n2) Por outro lado, abundam provas que o FBI agiu de forma política na investigação da então candidata Hillary Clinton sobre o uso de um servidor privado para tratar de assuntos do governo, o que a lei americana proíbe. Por exemplo, o então diretor do FBI, James Comey, já tinha escrito parte da sua decisão sobre o caso, inocentando Hillary, muito antes do final da investigação. Sob juramente, ele disse que recebeu ordens da então Procuradora Geral, Loretta Lynch, sua chefe, para tratar o tema como uma \'questão\' e não como uma investigação. Essa mesma procuradora se reuniu secretamente no seu avião com o ex-presidente Bill Clinton, marido de Hillary, semanas antes da decisão final de inocentar a candidata. Na investigação, assessores de Hillary receberam imunidade sem oferecer nada em troca, sendo que os seus laptops foram destruídos sem razão aparente. A própria Hillary testemunhou sem precisar fazer juramento de contar a verdade, entre outras atitudes extremamente não usuais para uma investigação do tipo.\n\n3) Andrew McCabe, vice-diretor do FBI que supervisionou a investigação de Hillary e fez parte da investigação sobre o \'conluio russo\' é casado com uma ex-candidata democrata ao Senado da Virgínia que recebeu US$ 600 mil do então governador do estado que vem a ser um dos melhores amigos de Bill Clinton. Um pequeno conflito de interesses.\n\n4) Um pouco após a eleição, surgiu na imprensa um dossiê falso pago pelo Partido Democrata, conforme confirmou a própria Hillary posteriormente, acusando Trump de estar nas mãos dos russos por ter feito sexo com prostitutas num hotel em Moscou, sendo filmado por câmeras escondidas, entre outras coisas esdrúxulas. Algumas passagens do dossiê são claramente falsas e não houve qualquer evidência que suporte o documento, como confirmou o próprio Comey em depoimento ao Congresso. Mesmo assim, tal dossiê foi utilizado pelo FBI para conseguir ordens judicias de escuta de membros da campanha de Trump.\n\n5) Uma investigação interna do FBI identificou um romance entre um ex-agente, Peter Strzok e uma advogada que trabalha para a agência que produziu farta troca de mensagens de textos entre eles, onde discutiam abertamente assuntos relacionados ao caso de Hillary e também no caso do \'conluio russo\'. Peter foi um dos principais agentes nos dois casos. Nessas mensagens, eles xingam Trump, torcem pela vitória de Hillary, falam sobre a importância de não ser \'muito duro\' com Hillary e chegam ao ponto de discutir uma \'apólice de seguro\' no caso de Trump ganhar a eleição, afirmando que discutiram tal \'apólice\' com o vice-diretor McCabe. Tal texto faz sugerir que a história do \'conluio russo\' seria essa apólice.\n\n6) Para completar, nos últimos dias da presidência de Obama, uma das suas colaboradoras mais próximas, Samantha Power, a então diplomata dos EUA na ONU, fez vários pedidos para a NSA, a agência que recolhe inteligência dentro do território americano para que nomes de americanos envolvidos nas investigações fossem revelados. Como a Constituição garante privacidade aos cidadãos americanos pegos em interceptações, tais pedidos são feitos em casos muito especiais. Pois Samantha demonstrou interesse exatamente nos casos que envolveram o monitoramento de membros da campanha de Trump.\n\nResumindo, nós temos o partido no poder utilizando a máquina do Estado, especialmente a Justiça, para proteger os seus membros e perseguir adversários. Isso é coisa de republiqueta bananeira. Mas podemos ver que a esquerda tem a capacidade de destruir as instituições democráticas de qualquer país, mesmo que seja os EUA.\n\nInfelizmente o viés esquerdista da imprensa americana faz com o que o caso seja abafado. A cobertura dos últimos desdobramentos, com pequenas nuances, é que tudo não passa de um movimento de Trump para despistar o público e obstruir a Justiça, que estaria chegando perto da confirmação do tal \'conluio russo\'.\n\nTalvez Trump tenha alguma culpa no cartório, apesar de nenhuma prova nesse sentido ter sido apresentada até agora. Mas com certeza graves crimes foram cometidos por servidores de alta patente na administração Obama, coisas que fazem o Watergate parecer brincadeira de criança.\n\nEm nome do combate ao conservadorismo de Trump e da proteção da imagem de Obama, o herói da esquerda, vale tudo, até mesmo abafar o maior escândalo político da história dos EUA.\n', '0000-00-00 00:00:00', 'capa1.png', 3),
(5, 50, 'A mentira previdenciária teve perna curta', 'A convite de meu caro Cassius, Chief Content Officer da TRENDR, escrevo um pouco sobre o relatório da CPI da Previdência que está em processo de votação.\n\nQuem acompanhou meus outros textos sabe que a Reforma da Previdência era uma proposta sem qualquer embasamento na realidade brasileira. O governo propôs regras inatingíveis de anos de contribuição e idades mínimas não condizentes com a expectativa de vida do brasileiro.\n\n(Para recapitular, dê um pulo aqui, onde a TRENDR organizou alguns textos sobre o assunto.)\n\nComo chegamos nisso?\nA fala do governo era clara: \'Existe um rombo na previdência e se não a reformarmos ela irá fechar as portas e parar de pagar benefícios, por isso, precisamos desta reforma.\'\n\nA grande mídia, no geral, comprou a ideia e replicou essa informação.\n\nContudo, alguns núcleos de resistência surgiram. Dentre eles, blogueiros, acadêmicos e servidores públicos.\n\nBlogueiros foram aqui colocados como aqueles que escrevem sem vínculos formais ou aqueles que escrevem para mídias independentes. Apesar da resistência que muitos ainda têm para consumir informações de mídias não-tradicionais, o peso dos fatos e das verdades apontadas fez o debate ganhar espaço.\n\nEstudiosos e especialistas apontavam para as incongruências e falácias no discurso do governo e apontavam as inúmeras falhas na reforma proposta. Os ataques de retaliação vieram na forma de um incentivo à polarização: \'ou você é a favor da Reforma ou você quer que o Brasil quebre.\'\n\nServidores públicos foram importantíssimos para que a verdade aparecesse. Sim, os mesmos servidores que estão sofrendo repetidos ataques do governo.\n\nA ANFIP (Associação Nacional dos Auditores Fiscais da Receita Federal) foi quem apresentou a Cartilha que desmente os argumentos apresentados pelo governo em relação ao tal \'rombo da previdência\'. A UNACON (Sindicato Nacional de Técnicos e Auditores de Finanças e Controle), além de apoiar os textos dessa série, como o texto \'O que não te contaram sobre a Reforma da Previdência\', também lançou o estudo do Auditor Federal Bráulio Cerqueira chamado \'Previdência: excluir para crescer ou crescer com inclusão?\'.\n\nPercebam que são associações de Auditores Fiscais e Auditores de Finanças e Controle que trabalham com o combate à corrupção na CGU, com a arrecadação e controle dos recursos públicos na Receita Federal e no Tesouro Nacional. São servidores federais, e que, portanto, já tiveram sua Reforma da Previdência com a Lei 12.618 em 2012, que limita sua aposentadoria ao teto do INSS e cria uma fundação onde o servidor pode contratar um plano de previdência complementar. Ou seja, praticamente nenhuma das novas regras se aplicaria a eles.\n\nO discurso do governo, contudo, tem sido o de desmoralizar e demonizar esses mesmos servidores alegando que os servidores \'têm benefícios e mordomias\', que a reforma \'extingue privilégios\' e por aí vai.\n\nChegaram ao ponto de defender a extinção da estabilidade dos servidores públicos. Quem defende isso ou não pensou sobre a matéria ou não tem boas intenções. Explico a seguir.\n\nÉ a estabilidade que permite aos servidores que entendem sobre as contas públicas desmentirem as afirmações dos ministros sem medo de serem mandados embora. É a estabilidade que permitiu aos servidores da CGU, órgão responsável pelo combate à corrupção, impedirem a entada no prédio de um ministro que aconselhava acusados da Lava-Jato. É a estabilidade que lhes dá o direito de dizer que não para uma ordem ilegal de um ministro que foi escolhido em negociações políticas.\n\nO Relatório da CPI da Previdência\nVencida toda essa discussão, o Brasil seguiu dividido sobre a Reforma Proposta. Diante das denúncias, o Senado instaura uma CPI para investigar a verdadeira situação da Previdência e da Seguridade Social no Brasil.\n\nO Relator apresentou seu relatório final com mais de 250 páginas. Nesse relatório, ele conclui aquilo que blogueiros, estudiosos e servidores já haviam anunciado: não existe um rombo na previdência brasileira.\n\nDe maneira didática, irei separar os pontos principais do relatório a seguir:\n\n1) Erros matemáticos\nIsso mesmo. As estimativas que foram utilizadas para elaborar a proposta da Reforma possuem erros e imprecisões. Uma das principais imprecisões é que foi utilizado como parâmetro o período de recessão. Ou seja, imaginou-se que o Brasil ficaria em recessão durante as próximas décadas, sem qualquer sinal de melhora na economia, o que certamente faz o futuro projetado ser tenebroso. Consideraram também um crescimento do PIB muito inferior à média histórica brasileira. Novamente, no que pode ser entendido como uma tentativa de pintar um futuro nebuloso e semi-apocalíptico para o país.\n\nAs projeções também levam em consideração um envelhecimento da população bastante exagerado, o que contribui na construção de um futuro hipotético que devemos temer.\n\n2) DRU\nDRU significa Desvinculação das Receitas da União. É um instrumento governamental que tira recursos de uma conta para colocar na outra.\n\nAgora, imagina de qual conta o governo está tirando dinheiro? Isso mesmo, da Previdência Social.\n\nE não é só isso, no segundo semestre de 2016 foi aprovado o aumento do percentual a ser retirado por DRU de 20% para 30%.\n\nOu seja, o governo afirma que existe um déficit na conta da Previdência, mas decide tirar mais dinheiro dessa conta para colocar em outras. Faz sentido pra você, caro(a) leitor(a)?\n\n3) Dívidas, Refis e perdão\nSe está faltando dinheiro, segundo o governo, na conta da previdência social, depois de retirar dinheiro dessa conta e passar pra outra, qual é a coisa menos intuitiva para se fazer em relação a essa conta? Acertou quem disse perdoar as dívidas.\n\nA legislação brasileira favorece grandes devedores corporativos, públicos e privados. O governo parcela (ou até perdoa) as dívidas de grandes empresas. Isso tem um impacto financeiro direto nas contas da seguridade social, pois trata-se de uma receita que deveria entrar na conta, mas da qual o governo abre mão para privilegiar determinado grupo social.\n\nConversa de maluco\nEm suma, a conta da Previdência Social deve sempre ser considerara como integrante da conta da Seguridade Social, que está superavitária. A análise do governo desconsidera essa informação e faz a leitura da conta da Previdência Social, depois de tirar até 30% da conta e depois de perdoar milhões e milhões em dívidas que entrariam nessa conta.\n\nImaginem fazer isso com o orçamento em sua casa. Suponha que eu ganho cerca de R$ 300 para alimentação, incluindo comida, bebida e sobremesa. Mas, como o governo, vou considerar apenas R$ 100 para comida. Desse valor, vou retirar R$ 30 para comprar outra coisa. E aqueles R$20 que emprestei para a \'Fulana\' eu não vou cobrar, pois quero muito que ela goste de mim.\n\nPronto. Tenho meus R$ 50 para comer. Imaginem minhas conversas caso eu seguisse a lógica do governo:\n\n\'Poxa vida, gastei R$ 68,90! Tenho um rombo em meu orçamento!\'\n\'Calma, você ainda tem saldo em seu vale alimentação, você não gastou R$ 200 com bebidas e sobremesas.\'\n\'Mas são contas diferentes!\'\n\'Na verdade, não são. Mas OK, então pede pra \'Fulana\' aqueles R$ 20.\'\n\'Nunca. Não posso fazer isso.\'\n\'Grr. Então pelo menos pare de tirar aqueles R$ 30 reais, aí sua conta fecha no final do mês, apesar de matematicamente incorreta.\'\n\'Não. A lei me permite tirar os 30%. Já sei, a culpa é dos restaurantes!\'\nA morte da PEC do Caixão (e já vai tarde)\nO relatório traz análises relevantes e vem para agregar na luta contra reformas prejudiciais ao nosso país. É provável que a aprovação do relatório encerre com os planos do governo de passar essa reforma.\n\nIdealmente, seria o momento de recolher o lixo e voltar para a oficina. Dessa vez, contudo, o governo poderia consultar blogueiros, acadêmicos, servidores e, o mais importante de todos, a sociedade, antes de apresentar uma nova proposta.\n\nEnquanto é óbvio que realidades sociais mudam com o passar dos anos e que isso traz a necessidade de mudanças, também é (ou deveria ser) óbvio que essas mudanças devem ser feitas considerando a nova realidade. Caso contrário, o que era pra ser uma solução, irá agravar ainda mais o problema.\n', '0000-00-00 00:00:00', 'capa1.png', 1),
(6, 50, 'De oceanógrafa para programadora', 'Nesta semana me pediram pra contar um pouco sobre como eu virei programadora (ou pelo menos estou no processo). Eu escrevi esse texto para contar um pouco mais sobre essa história.\n\nVamos começar do começo: sou oceanógrafa formada pela Universidade Federal de Santa Catarina em Dezembro de 2013. Bom, isso por si só, já costuma assustar as pessoas. Oceoque?\n\nA Oceanografia é linda e apaixonante. Aprendi muitas coisas interessantes e me apaixonei por muitas matérias que eram assustadoras. Logo no começo tivemos cálculos, físicas, e etc. Quando comecei a trabalhar na área eu transitei entre a oceanografia geológica e física até que, em 2011, consegui um estágio num instituto de pesquisa da Marinha e fui definitivamente para a Oceanografia Física, que é a área mais perto das exatas.\n\nNa oceanografia é muito comum trabalhar com dados matriciais e vetoriais e, para isso é comum utilizar um software chamado MATLAB. Por isso, durante o curso acabei aprendendo um pouco de MATLAB. Que é semelhante a uma linguagem de programação, com lógica de loops, condicionais e etc.\n\nNo entanto, quando eu cheguei na marinha, conheci dois oceanógrafos que trabalhavam com Python. Python? O que é isso? Tivemos várias discussões sobre como o MATLAB era um software pago e na faculdade usávamos a versão pirata, o que não era legal em ambos os sentidos da palavra, né? Nessa onda, eles começaram a me falar sobre como o Python seria o futuro da oceanografia, graças à sua maleabilidade, facilidade e, ainda por cima, era gratuito! Show de bola. Vamos aprender, né?\n\nE assim eu tive o meu primeiro contato com uma linguagem de programação mais propriamente dita. Os meus colegas foram muito espertos, sabe por quê? Todos os dias eles me desafiavam a algo novo. \'Duvido que você consiga ler esse txt\', \'Agora faça essa atividade com a menor quantidade de linhas possível\', e assim por diante. Eu achava aquilo fantástico! Como eles eram criativos! Tempos depois descobri que estava tudo online. Ok!\n\nNesse meio tempo também tive contato com Linux, acesso a distância, Ubuntu, terminais, etc. Um mundo novo foi aberto para mim, e era muito interessante!\n\nVoltando do estágio cai na dura realidade: ninguém trabalhava com python, ninguém usava ubuntu/linux e não tinha como mudar as coisas. Ok, MATLAB então. Uma das coisas que mais me desmotivou foi ter que aprender as coisas sozinha, travando nas minhas dúvidas e, ainda por cima, pra aprender algo que as pessoas não viam utilidade (dentro da nossa área).\n\nNo final da faculdade comecei a trabalhar numa multinacional com engenharia portuária e costeira. MATLAB e Windows na veia. Mas, teimosa que sou, comecei a colocar Python no que eu podia. Apesar de afastada dos estudos contínuos, eu gostava muito da linguagem e queria continuar aprendendo (desde que eu fizesse algo útil). Então eu usei Python pra automatizar a produção de mapas num software chamado ArcGIS, depois desenvolvi um software pra calcular o tamanho de um navio com base em umas tabelas internacionais e até me aventurei brevemente pela web com o Django.\n\nUm belo dia decidi fazer mestrado e ai tomei a decisão de que todos os pré e pós processamentos seriam com Python. Também escolhi um modelo numérico que só poderia ser utilizado em ambiente Linux. Ai eu me desafiei de verdade. Resolvi sair da preguiça e aprender! Nem que fosse sozinha! (Mas mas não foi!). Um amigo me ajudou muito e assim eu fui aprendendo ainda mais e gostando cada vez mais.\n\nNesse meio tempo o grupo da Python Floripa se formou. Na primeira reunião pedi pra um amigo ir comigo, porque tinha medo e vergonha de não saber o suficiente. Na última hora ele cancelou comigo! Acabei não desistindo e fui no encontro de qualquer forma. Eu era a única menina naquela primeira reunião e, pra melhorar, as palestras foram puramente sobre web. Eu não entendi nada, mas achei aquele mundo fantástico.\n\nDecidi não ir nos próximos encontros, porque eu assustei com o conteúdo e com o quanto eu não entendi as coisas. Mas ai aconteceu a \'mágica\' da comunidade Python. Os meninos repararam nesse problema e chamaram uma pessoa para dar uma palestra que fosse mais \'a minha cara\' (menos web e mais análise de dados). Quando a palestra ia acontecer vários deles me mandaram mensagens avisando e falando que eu deveria ir. Fantástico, né? Depois disso me engajei de verdade e comecei a me envolver com a organização do SciPy LA 2016, Python Brasil 12 e principalmente do Pyladies. Além disso, o Anitas estava se formando e conheci mulheres maravilhosas e engajadas. Enfim, em 6 meses tudo mudou e eu já tinha mudado minha vida completamente.\n\nE assim eu fui percebendo que eu gostava daquilo. Muito mesmo. Eu amava programar, Github, Python, Ubuntu, etc. Eu podia gastar horas estudando isso. Conforme eu me envolvia, eu percebi que poderia ser uma segunda opção. No entanto eu fiz o que a maioria de nós faz: pensei que nunca iria conseguir. \'Não sou boa o suficiente\', \'Jamais conseguiria me envolver totalmente nisso\', etc. Pensei mesmo. Não adianta, nós pensamos, e todos sabemos que sim. Mas mesmo pensando isso, não parei de tentar aprender e de me envolver nas coisas. Não era o objetivo mesmo! Ai um belo dia eu resolvi apresentar para aquele pessoal de web o que uma oceanógrafa estava fazendo indo nos encontros. Afinal, eu programava? Porque? Então apresentei um pouco dos meus resultados do mestrado, que tipo de dados eu trabalhava e um vídeozinho com uma onda de maré sendo propagada no meu modelo numérico.\n\nNo mesmo dia, a gerente de projetos de uma empresa havia dito que havia uma vaga aberta para backend em Python. No fim da noite me vi ao lado dela e resolvi saber mais sobre a vaga que ela havia comentado e começamos a conversar. O que disse no final foi: \'muito legal, mas infelizmente não posso concorrer para essa vaga\'. Ela me questionou o porquê e eu disse que sabia Python, mas o que eles trabalhavam era uma área totalmente diferente. E foi ai eu recebi uma resposta que eu não esperava ouvir: \'Não tem problema, o que você faz é tão complexo quanto, vem conversar com a gente com mais calma!\'\n\nE eu fui. Assim, em 3 semanas a minha vida mudou, eu pedi demissão da minha empresa para virar backend developer, onde estou hoje indo para a minha terceira semana.\n\nEnquanto eu avisava as pessoas que estava mudando de área, eu fiquei esperando receber um \'você está louca\'! Mas não foi isso que eu recebi. Eu recebi muito apoio e incentivo, principalmente das pessoas mais próximas que aguentaram minhas inseguranças durante todo o processo entre a primeira conversa até o meu primeiro dia de trabalho.\n\nNão vou mentir. Na noite anterior ao meu primeiro dia eu entrei em pânico. Chorei muito. O que eu estava fazendo? Eu não ia conseguir isso! Era uma loucura! O que eu tive não foi racional, foi puramente emocional e descontrolado. Liguei pra quem eu sabia que ia me acalmar e assim me joguei no dia seguinte, com muito medo e uma vontade enorme de querer dar certo.\n\nEntão eu gostaria de falar algumas coisas que eu aprendi no processo.\n\nA primeira coisa que eu aprendi é que eu não fiz essa mudança sem medo e sem insegurança. Isso não pode deixar a gente parar de fazer as coisas jamais! Recebi vários comentários dizendo que a minha coragem foi inspiradora e que eu era um exemplo. Eu não me considero exemplo de nada! Vocês não imaginam o medo que eu estava! Mas foi ai que eu percebi que os nossos exemplos também tem medo e isso não é problema nenhum. Faça com medo mesmo, mas faça!\n\nA segunda coisa é: faça as coisas com paixão. Descubra o que você gosta e faça! Independente se você tem perspectivas, mesmo que você ache que não sabe e que não vai conseguir. O importante é gostar de alguma coisa.\n\nE a última é: cerque-se e valorize as pessoas que te apoiam. Eu jamais teria alcançado tanta coisa e tido coragem de mudar a minha vida se eu não contasse com o apoio de inúmeros anjos, desde os primeiros que me esafiaram até os atuais que me apoiaram e continuam me apoiando.\n\nEsse é um lugar onde decidi compartilhar minha história e tentar ajudar meninas que tem vontade de aprender a programar. Entre, fique a vontade e eu espero que você se apaixone tanto quanto eu.\n', '0000-00-00 00:00:00', 'capa1.png', 2);
INSERT INTO `conteudo` (`idConteudo`, `vizualizacoes`, `titulo`, `conteudo`, `dataPostagem`, `fotoCapa`, `fk_cont_idUsuario`) VALUES
(7, 50, 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis eros et ipsum ullamcorper placerat. Nullam gravida turpis at dapibus pharetra. Pellentesque elementum libero lectus. Aenean lobortis at leo sollicitudin congue. Suspendisse non dolor dignissim, ornare nibh sed, mollis ipsum. In consequat mattis porta. Proin ultricies dui fermentum, vestibulum mauris et, malesuada eros. Etiam dui erat, pharetra quis mollis vitae, tincidunt quis dolor. Nam sed orci rhoncus, scelerisque ligula consectetur, ornare neque. Nam ut posuere libero. Sed elementum sed odio eu porttitor.\n\nSuspendisse eu euismod urna, quis ultricies tortor. In varius aliquam mi at maximus. Cras et quam dictum, iaculis erat sed, semper felis. Vivamus lacus turpis, tempor sit amet ex et, feugiat pretium nunc. Phasellus orci neque, bibendum et cursus dignissim, fringilla eget lorem. Cras cursus leo lectus, vitae malesuada lorem tincidunt eget. Nunc quis purus leo. Donec metus arcu, malesuada at sodales at, fermentum quis ex.\n\nIn tristique mi eleifend enim lacinia, eget ultricies quam rhoncus. Morbi mollis aliquet lorem vel viverra. Sed massa eros, iaculis lobortis porta vitae, hendrerit a velit. Maecenas quis pellentesque lorem, nec molestie lorem. Donec porta, est vitae facilisis ultrices, mauris leo faucibus urna, in condimentum ipsum justo eu risus. Mauris elementum magna id egestas fringilla. Proin vel nunc ante. Praesent auctor mauris et hendrerit elementum. Vestibulum dignissim bibendum risus, vel feugiat erat interdum non. In non ultricies dui. Curabitur lobortis tempus nisl eu malesuada. Morbi a arcu ligula. Curabitur vel sollicitudin est, ac pellentesque lacus. Mauris rhoncus faucibus ipsum auctor maximus. Maecenas posuere quis odio pretium posuere.\n\nInteger enim dolor, feugiat non dictum id, scelerisque quis leo. Proin ut tellus eleifend, molestie nisl eget, ultricies turpis. Sed vel leo feugiat, mollis nisi non, sodales odio. Duis in dignissim mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut blandit consectetur massa scelerisque rhoncus. Duis est libero, tristique vitae urna nec, hendrerit maximus odio. Aliquam quis lectus non eros convallis molestie. Nulla id metus tortor. Nullam at tempor sapien. Aliquam id lacus nec justo tempus facilisis ut vel mi. Maecenas ac libero vel leo lobortis semper nec a diam. Pellentesque mollis, tortor efficitur facilisis porta, enim leo egestas odio, sit amet eleifend libero ante eu metus. Suspendisse iaculis a erat eu molestie.\n\nVivamus sodales maximus est at cursus. Phasellus tempus tristique enim. Quisque nec ultrices mi. Pellentesque maximus consequat turpis eu efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam efficitur felis ante, eget vulputate nibh vestibulum ac. Vivamus tincidunt felis nunc, id tristique neque dapibus pretium. Etiam accumsan ligula ante, sed elementum nulla gravida sit amet. Nam feugiat lectus in eros sodales luctus. Donec nunc leo, accumsan eu massa vitae, egestas consectetur lorem. Suspendisse potenti. Nulla quis diam vulputate magna tincidunt condimentum in eu elit.\n\nDonec ac nibh sed neque aliquet vestibulum eget id dui. Sed hendrerit accumsan lectus, non tincidunt orci commodo id. Etiam est nibh, vestibulum sit amet metus nec, porta sollicitudin diam. Morbi id felis viverra, consequat turpis id, pretium enim. Pellentesque vestibulum mi id ante consequat elementum. Fusce a lorem lacus. Integer nisl ligula, sodales non elementum in, feugiat a lectus. Aliquam quis vestibulum odio, ac rhoncus sem. Donec tempor neque arcu, a viverra elit tempus id. Maecenas maximus arcu metus, at tincidunt sem ultrices eu. Cras dolor ipsum, aliquam vitae lectus vitae, semper sagittis felis. Praesent vehicula ex eu lacus tempor, ac suscipit nisl sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin scelerisque, nibh sed scelerisque accumsan, diam justo consequat lectus, quis tincidunt est sapien in neque. Phasellus viverra in mauris non tempor. Aliquam fermentum sodales nisl eget venenatis.\n\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vel ante non magna tempus venenatis. In hac habitasse platea dictumst. Donec eu eros ipsum. In nibh nisi, porttitor eu risus eget, dignissim tincidunt sem. Maecenas fringilla sed nunc a pellentesque. Phasellus accumsan nibh quis diam dapibus viverra. Aenean scelerisque vitae lacus quis molestie. Aliquam vitae nunc ante. Sed ut tempor massa, tincidunt lacinia nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus leo ipsum, pulvinar vitae erat sed, blandit porttitor est. Donec tortor massa, laoreet ut ex commodo, pellentesque tincidunt nunc. Suspendisse quis placerat urna. Pellentesque ut ante nulla. Fusce quis nulla id urna vehicula porta vel vitae nulla.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at auctor velit. Aliquam eu tristique ipsum. In congue erat vitae luctus iaculis. Praesent auctor in nunc a bibendum. Donec pharetra vel nisi in eleifend. Cras mattis metus volutpat neque accumsan scelerisque.\n\nCurabitur non molestie risus. Duis faucibus mauris turpis, quis cursus dolor molestie id. Donec nec sapien vitae arcu rutrum scelerisque at ut quam. Praesent condimentum eget nibh quis pharetra. Etiam arcu ipsum, pharetra et ultrices sit amet, sagittis ut augue. Aenean nec aliquet quam. Pellentesque quis interdum leo, sed vehicula tortor. Praesent justo enim, fringilla vitae euismod eget, faucibus vel ex.\n\nAliquam aliquam libero nulla, nec ornare ex sodales quis. Suspendisse potenti. Sed ullamcorper at felis eu tempus. Sed at risus sed felis mollis sodales quis et nibh. Nunc arcu lorem, rhoncus quis placerat ac, rhoncus eget odio. Pellentesque at risus id lectus ullamcorper tristique. Etiam vitae massa pellentesque augue lacinia commodo eget nec sem. Nullam vel nisi massa. Duis et sagittis velit. Proin facilisis ex metus, vel pellentesque sapien tristique eget. Donec odio justo, finibus at fringilla sed, egestas iaculis nunc. Praesent eu feugiat massa. Donec non varius tortor.\n\nAliquam consequat finibus odio, non iaculis odio laoreet id. Pellentesque pharetra non nunc sed dictum. Suspendisse tincidunt in arcu nec fringilla. Phasellus ante nibh, rhoncus non est ac, iaculis mattis libero. Pellentesque hendrerit efficitur ipsum, sed ornare arcu semper eget. Quisque et sem est. Nunc ac imperdiet purus, ut faucibus quam. Pellentesque semper arcu in volutpat vehicula. Donec mattis non ante a venenatis. Quisque pellentesque augue id enim luctus, at sagittis tortor aliquam. Cras nec facilisis magna, tempor iaculis lorem.\n\nAenean eleifend rutrum volutpat. Nunc lacinia nec massa et scelerisque. Proin a dolor vitae odio iaculis rhoncus. Etiam accumsan, magna dignissim finibus tristique, nisi dolor efficitur orci, nec eleifend enim ante non lorem. Morbi ullamcorper ac diam at sagittis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec egestas ullamcorper finibus. Aenean eget ligula nibh. Praesent nisl lacus, luctus quis ex in, consequat vehicula metus. Nulla facilisi. Aenean sodales placerat finibus. Suspendisse pellentesque orci justo, eu pulvinar massa hendrerit in. Nullam in nibh felis. Phasellus libero elit, pellentesque nec metus nec, fermentum fringilla arcu. Aliquam erat volutpat.\n\nInteger dui tellus, aliquet condimentum mi ac, mattis volutpat urna. Aenean vestibulum iaculis nunc, in mollis lorem aliquet ac. Nunc eu orci pretium, cursus ipsum in, volutpat purus. Fusce sagittis massa vel nulla dictum, nec commodo turpis imperdiet. Morbi ac orci sit amet neque suscipit mollis. Etiam efficitur nunc leo, id tempor nisi dapibus sit amet. Cras feugiat nisl mauris, eget rutrum ante ultricies eu. Ut varius molestie eros eget ullamcorper. In non dolor egestas, egestas risus non, porttitor massa.\n\nVivamus a dignissim quam, at tempor purus. Curabitur sit amet maximus est. Etiam sapien erat, convallis in erat at, porttitor scelerisque massa. Fusce dictum, lacus at semper tincidunt, magna nunc pharetra quam, id fringilla quam neque nec urna. Vestibulum imperdiet lacus odio, eget volutpat tortor porttitor non. Quisque ac lacus purus. Curabitur eget purus egestas, posuere erat non, dapibus sem. Mauris vel vulputate lectus, vitae commodo turpis.\n\nQuisque luctus porta aliquet. Nam faucibus quam at tempus ultrices. Pellentesque sit amet ligula posuere sapien fermentum laoreet. Nullam vulputate libero a nisl sodales lacinia. Pellentesque et nulla eu nulla mollis laoreet sit amet sed nibh. Vivamus posuere scelerisque lectus vitae pharetra. Nulla facilisi. Ut sit amet sapien ac sem auctor scelerisque faucibus at ex. Pellentesque ut dolor elit. Donec dui mi, rhoncus vel nisl ultrices, iaculis rhoncus nunc. Cras id elit nec tortor consectetur sollicitudin eget quis turpis. Donec egestas ligula felis, eget congue dui finibus ac. Duis sem ex, pellentesque sit amet dui dapibus, malesuada varius massa. Nam blandit erat cursus, rutrum odio a, laoreet eros. Suspendisse vitae tellus vitae magna facilisis porttitor.\n\nSuspendisse placerat blandit tortor id vestibulum. Maecenas eleifend leo ligula. Quisque vitae enim eget tortor interdum porttitor. Cras turpis sapien, finibus in aliquet at, convallis ut libero. Ut malesuada ligula a risus maximus ultrices. Duis et gravida nulla. Pellentesque et augue ac lacus tincidunt tincidunt ut sed purus. Nullam molestie arcu sit amet lectus viverra, egestas pharetra quam ullamcorper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed a elementum elit, quis consectetur lacus.\n\nMauris magna diam, porta ac placerat ut, ultrices at urna. Suspendisse auctor, augue lacinia luctus iaculis, turpis turpis maximus magna, sit amet dapibus ex nulla ut sapien. Proin lobortis fringilla tortor, sit amet condimentum erat maximus tincidunt. Donec laoreet nulla neque, porta feugiat urna faucibus id. Vivamus malesuada nibh non ornare consectetur. Proin eu pretium purus. Vestibulum vel eros eu urna volutpat aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Nulla eu erat scelerisque metus congue rutrum eget et libero. Donec quis nisl laoreet lectus ultrices elementum ut ac ex.\n\nIn sit amet mi faucibus, suscipit nulla at, fermentum velit. Pellentesque accumsan sem ipsum, a iaculis lectus sagittis id. Donec ligula nulla, sodales ac ornare eu, sodales sed erat. Maecenas neque ante, fringilla eget rhoncus id, aliquet ac lectus. Nullam eu commodo odio. Quisque vel risus ut orci malesuada fringilla sollicitudin nec velit. Nullam a metus condimentum, convallis ante in, finibus eros. Sed tempus fermentum nibh vitae vulputate. Maecenas venenatis orci sed aliquam dictum. Morbi vestibulum ante et tellus interdum blandit. Nam scelerisque nisl mattis, consequat elit sed, sollicitudin sapien. Sed sed diam a lacus pretium consequat sed vitae nunc. Curabitur commodo massa quis leo consectetur pharetra et eleifend felis.\n\nQuisque venenatis risus volutpat, feugiat urna vitae, posuere lacus. Suspendisse lobortis neque a ante interdum, et condimentum ante feugiat. Pellentesque felis ligula, aliquet ut ex non, mollis condimentum libero. Nulla laoreet, leo in posuere fermentum, nisi nunc rutrum arcu, ac cursus dolor ipsum quis ligula. Aliquam libero erat, tempor sit amet ex vitae, tincidunt sollicitudin nunc. Pellentesque auctor varius pretium. Nullam dignissim faucibus arcu, non facilisis risus varius vel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam elementum mi ac mauris dignissim auctor. Phasellus facilisis nunc eget velit tincidunt luctus. Etiam posuere, purus eget egestas mollis, orci mauris porta dolor, tempor porta urna orci vulputate nisi. Aenean magna justo, sodales eu dolor at, tristique vulputate dui. Donec mattis tortor at ullamcorper hendrerit. Aenean varius porttitor ultrices. Praesent iaculis, urna commodo ultricies accumsan, odio nisl scelerisque turpis, accumsan ultricies enim sapien ut quam. Quisque id pulvinar diam.\n\nMauris sit amet consequat purus, sed lacinia quam. Sed porta arcu sem, in tempus libero pharetra quis. Pellentesque congue turpis ipsum, in mattis ante tempus nec. Ut a ante laoreet dolor luctus imperdiet id et tortor. Nullam enim augue, condimentum eu porta ac, iaculis at arcu. Morbi leo eros, bibendum ac pretium sit amet, sagittis id dui. Nam interdum erat in lobortis viverra. In id lectus volutpat, commodo justo ac, sodales odio. Suspendisse mollis turpis ut mauris euismod, vitae efficitur tortor hendrerit. Praesent dignissim dolor eu ex commodo, at aliquet ex convallis. Quisque et gravida velit, sit amet rhoncus lectus. Cras neque tellus, lobortis et tempor sodales, mollis vel libero.\n\nPhasellus sapien lorem, consequat a varius eget, congue a lorem. Maecenas magna nisi, tincidunt at est a, blandit vestibulum libero. Suspendisse dictum ipsum at sem ultricies, consequat volutpat augue fermentum. Fusce elementum, nisi et fermentum venenatis, odio nibh mollis magna, non imperdiet arcu orci at nulla. Vestibulum sit amet lectus mi. Nullam accumsan arcu metus, vitae vehicula massa aliquet ac. Suspendisse aliquet lacinia tempus. Phasellus ultrices dignissim augue vitae sollicitudin. Nam aliquet neque non metus sollicitudin sagittis. Fusce vitae risus ultrices, finibus felis quis, porttitor arcu. Proin dolor ligula, gravida eu elit at, convallis sodales lectus. Vestibulum euismod risus at lectus lacinia dictum. Praesent sodales lobortis augue eget aliquet. Nulla varius a mi eget tempus. Ut nec sollicitudin turpis.\n\nPellentesque in massa dictum quam commodo ultrices et ut sapien. Morbi lobortis consectetur ex vel accumsan. Curabitur a metus odio. Mauris dictum risus vel sem blandit sodales. Etiam pretium blandit purus, non rhoncus odio varius at. Donec consequat turpis vel nibh placerat tristique. Nullam et vulputate tellus, vel volutpat mauris. Cras et magna lacus. Donec ut tellus vel augue ultrices dignissim nec ac diam.\n\nSed mollis luctus felis interdum venenatis. Morbi ullamcorper ullamcorper lectus, placerat tincidunt libero sagittis a. Nullam ultrices facilisis dictum. Integer sed sapien justo. Duis quis odio mollis, vulputate libero elementum, rhoncus tortor. In lacus arcu, consectetur at nisl sit amet, aliquet ullamcorper diam. Proin eu mi vitae lacus lacinia ultrices sit amet eu sapien. Maecenas commodo luctus mauris, aliquam rutrum quam dapibus nec. Aenean nisi turpis, ullamcorper quis odio eget, molestie laoreet sapien. Nullam hendrerit sem ac metus pellentesque, in venenatis augue venenatis. Cras a felis cursus, mattis dui vel, tristique massa. Nam velit diam, dapibus non mauris vitae, porta volutpat risus. Maecenas est arcu, ullamcorper in nunc et, tristique dapibus erat. In eleifend dolor vitae arcu blandit commodo.\n\nNulla velit justo, mattis vitae ornare vel, sagittis ac mi. Nunc nisl ante, fringilla ullamcorper turpis at, lobortis pharetra orci. Cras gravida at odio a rutrum. Morbi at porttitor tortor. Donec consectetur condimentum orci id sollicitudin. Aenean eu dolor non dolor varius pellentesque sed accumsan neque. Etiam fermentum feugiat dolor, ac molestie ante lobortis viverra. Praesent lectus justo, viverra at rutrum vel, ultrices nec eros. Etiam ornare, mauris in aliquet aliquam, dolor metus iaculis magna, sed rutrum est tellus a lorem.', '0000-00-00 00:00:00', 'capa1.png', 1),
(8, 50, 'Lorem ipsum dolor sit amet, consectetur viverra fusce.', 'Maecenas lobortis, sem et finibus tempor, arcu leo placerat sem, sed congue nibh lectus ac tellus. Curabitur molestie eros quis lorem sagittis, nec posuere diam convallis. Mauris laoreet augue at aliquet molestie. Cras congue tempus nunc, vel commodo felis. Mauris non nunc volutpat risus tristique feugiat. Curabitur et tellus ac leo placerat ultricies sed vel purus. Integer accumsan fermentum velit at ullamcorper. Donec vitae libero eget nulla placerat dictum non sit amet justo. Cras velit purus, pulvinar sed ultricies suscipit, venenatis a dui. Donec eu arcu laoreet, congue magna euismod, ornare diam. Pellentesque pulvinar quam nec dolor bibendum, ac luctus tellus commodo. Suspendisse nec lacus ac nunc hendrerit hendrerit ac quis magna.\n\nVivamus tellus enim, laoreet eget sagittis eget, faucibus vitae dui. Curabitur scelerisque augue sit amet vulputate convallis. Donec non condimentum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam a quam dignissim sem eleifend pharetra. Maecenas elementum vulputate tortor, vel facilisis sapien. Suspendisse diam elit, cursus sagittis arcu eu, porttitor aliquet nulla. Fusce condimentum at elit nec iaculis. Donec facilisis lorem vitae purus mattis pulvinar. Aliquam dignissim pharetra neque, vel fermentum urna. Maecenas nec blandit ante. In mauris neque, imperdiet eget facilisis sed, mollis eget dui.\n\nUt blandit porta ornare. Quisque et porta elit. Aenean aliquam sit amet arcu non gravida. Nulla leo ligula, malesuada vel nisl sit amet, luctus elementum nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc vitae mattis lacus, ut elementum nulla. Vivamus scelerisque augue eu lectus ultricies rhoncus. In euismod dui ut ipsum venenatis, sed mattis nulla elementum. Integer turpis dolor, ultrices nec elit sed, faucibus interdum velit. Proin tincidunt dui et nibh pharetra condimentum.\n\nDonec laoreet diam lacus, quis ultricies odio facilisis sit amet. In id lacus rutrum, imperdiet lorem porta, euismod mauris. Maecenas sollicitudin mi vel dictum cursus. Donec volutpat mi eget ipsum ullamcorper venenatis. Integer in erat ac dui dignissim laoreet. Curabitur elit mauris, accumsan sit amet justo vitae, mattis venenatis turpis. Aliquam ultrices mauris sapien, nec condimentum eros blandit eu. Vestibulum euismod fringilla dui, a vehicula erat. Nunc aliquet elit a tincidunt cursus. Morbi pulvinar neque metus, a mattis diam viverra quis.\n\nMauris quis augue dapibus, dapibus libero vel, fringilla mi. Praesent eu blandit diam. Fusce vehicula, odio ut volutpat rutrum, diam est laoreet purus, eu faucibus arcu arcu vitae enim. Fusce suscipit mi ac eros rhoncus, eget faucibus nibh tincidunt. Nulla ligula est, consequat at ullamcorper eget, ornare a nisl. Integer eget arcu et lectus finibus consequat. Curabitur viverra mollis enim nec aliquam. Integer pellentesque pretium libero, a fringilla turpis. Proin vel elit a sem sollicitudin consectetur nec quis nisl. Nullam tincidunt sagittis elit, quis volutpat dui varius ut. Etiam finibus mattis elit, non dictum ex accumsan a. Nam tristique consectetur hendrerit. Phasellus posuere nisi nisl, et mollis mauris mattis at. Suspendisse ac eros at tellus pharetra ullamcorper sed in nisl. Phasellus eu dignissim risus.\n\nVestibulum faucibus posuere mi, eget gravida erat lacinia in. Donec pharetra scelerisque facilisis. Nunc nec sollicitudin enim, ac semper metus. Suspendisse nec efficitur massa. Proin eu magna sagittis magna pulvinar viverra et eget ex. Etiam facilisis eget libero quis dictum. Donec vitae consectetur est, ut rutrum odio. Maecenas quis ligula odio. Suspendisse id sapien facilisis, auctor dolor vitae, porttitor tortor. Morbi scelerisque aliquet ligula, hendrerit sagittis ligula fringilla non.\n\nQuisque at mi eget lectus volutpat finibus. Phasellus fringilla eleifend bibendum. Vestibulum tempor sodales libero at posuere. Mauris nulla ex, ultricies id laoreet lobortis, ultricies eu ex. Curabitur euismod lacus nec ex interdum congue. Nam non nulla sapien. Aliquam molestie, diam vel mattis posuere, erat ex feugiat lacus, ac vulputate nisl sapien sit amet lorem.\n\nInteger vel nulla id sem porta cursus et id dolor. Fusce vel ex lectus. Cras eget facilisis enim, non posuere nisl. Fusce eget iaculis mauris. Phasellus ultrices felis vel orci vulputate, sit amet efficitur urna blandit. Sed in lectus in diam tristique eleifend. Maecenas ligula dui, facilisis a vulputate vel, hendrerit vitae neque. Fusce lacus nibh, ullamcorper vitae odio ut, interdum dignissim sapien. Proin eleifend fringilla sem varius consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla porttitor euismod elit a interdum. Donec posuere laoreet orci, ut malesuada nisi egestas vitae. Curabitur interdum rhoncus diam id suscipit. Nulla a massa ipsum.\n\nAenean non arcu in est dapibus luctus. Aliquam tortor erat, vulputate non justo mattis, placerat rhoncus risus. Integer lobortis pharetra nunc, quis dapibus lectus suscipit ac. Proin imperdiet, mauris ut semper gravida, quam neque viverra sapien, id blandit tellus mi nec est. Integer est urna, fermentum in dignissim sit amet, feugiat vitae neque. Proin libero felis, tempus et molestie nec, porta in magna. Quisque eleifend placerat blandit. Phasellus auctor dui sit amet dui luctus, rhoncus scelerisque sem vulputate. Nam pharetra justo vitae massa mollis, a congue velit sagittis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum interdum tincidunt lectus quis varius. Morbi ut justo tempus, fermentum tortor vitae, commodo orci. Phasellus et efficitur magna, sed efficitur purus. Fusce feugiat, tortor ac ultricies maximus, sapien lectus condimentum arcu, non aliquam tellus lorem id tellus. Maecenas quis viverra quam.\n\nCurabitur feugiat mi id ligula faucibus lobortis. Integer laoreet, elit hendrerit finibus maximus, nisl mauris convallis leo, ut commodo arcu sem quis odio. Donec ligula elit, tincidunt nec sodales eget, cursus ac nisi. Curabitur sed congue orci. Aliquam at ligula mauris. Nam vitae est id orci sagittis fermentum eu non lacus. Donec luctus maximus lorem, sit amet gravida felis sagittis vitae. Maecenas eu risus vel mi suscipit varius. Aliquam ut malesuada purus, id ullamcorper nibh. Nunc sed vehicula est. Proin interdum enim eu turpis imperdiet, eget tempor felis elementum. Pellentesque lobortis felis enim. Cras finibus tincidunt tortor, eget gravida velit rutrum quis. Nullam pretium quam augue, eget ullamcorper velit pretium ut. Mauris fringilla rutrum mi, vel tincidunt erat iaculis quis.\n\nNam et aliquam ipsum. In placerat velit lorem, at dapibus est lacinia ac. Quisque nibh velit, condimentum nec consectetur interdum, gravida in ipsum. Mauris eu ipsum quis libero ultricies semper quis at nibh. Vivamus a pharetra augue, eget rutrum sapien. In porta ut ligula in laoreet. Vestibulum in felis sit amet tellus vehicula luctus. Duis quis eros pharetra, placerat velit pulvinar, convallis felis. Cras ac magna dictum, interdum ex at, suscipit neque. Ut nisl ligula, porta sit amet augue id, facilisis efficitur lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at rutrum odio. Integer et velit pellentesque, dapibus ante non, lobortis nibh. Quisque tincidunt, quam id commodo placerat, tellus ipsum commodo arcu, sed pulvinar nulla ipsum ac orci.\n\nCurabitur tempus finibus scelerisque. Cras a tellus id mi tincidunt ultricies. In a gravida purus. Curabitur scelerisque sagittis libero, vitae pellentesque orci imperdiet a. Vivamus sed risus posuere, cursus purus quis, hendrerit nibh. Suspendisse lobortis luctus nunc, sit amet pellentesque libero congue a. Sed mattis, leo nec efficitur laoreet, nisi dolor posuere erat, nec varius sapien enim ac elit. Nullam blandit faucibus ante, quis dictum tellus feugiat quis. Vivamus non dolor ligula. Vestibulum sed erat vitae enim gravida pellentesque id sed elit. Nam id ex sed ex hendrerit ultricies at a arcu. Vivamus non tincidunt lectus, ut finibus nisl. Pellentesque et nisi vehicula, porta lacus at, iaculis quam. Curabitur pharetra ante magna, et pretium ligula porta et.\n\nDonec ut turpis a massa fermentum malesuada ac ut nulla. Sed turpis nisi, aliquam sed risus vitae, euismod dapibus risus. Proin non orci sed mauris eleifend vestibulum quis eget odio. Sed ornare mi sed metus ultrices aliquam. Donec cursus maximus magna nec vestibulum. Quisque ut magna nisl. Nunc eget tristique odio. Mauris velit neque, sodales vel imperdiet at, consequat vel purus. Nam id ornare lorem. Proin aliquet condimentum commodo. Praesent eu leo sem. Nunc in justo sit amet ligula convallis suscipit vitae vel sem. Ut eu condimentum risus. Nullam at libero cursus, feugiat diam at, auctor neque. Donec tempus nibh at maximus ornare.\n\nSed sed mattis nisl. Nam eget suscipit sem, ac laoreet quam. Morbi tempor aliquam lectus, vitae lobortis augue finibus ac. Suspendisse convallis aliquam metus, eu pellentesque turpis efficitur a. Suspendisse accumsan erat laoreet vestibulum hendrerit. Integer placerat lacus sed tincidunt scelerisque. Nulla nisi libero, bibendum non arcu vitae, elementum hendrerit elit.\n\nPhasellus scelerisque porta ante sed cursus. Donec et nisi in massa imperdiet cursus. Nulla facilisi. Phasellus bibendum enim dolor, a commodo metus condimentum ac. Donec ut urna id augue ultrices euismod porttitor ac magna. Proin nec volutpat ex, et dictum metus. Maecenas at malesuada orci. Aenean ullamcorper ac enim in gravida.\n\nIn eu eleifend enim. Nunc tempus eu diam vel ornare. Donec ante libero, feugiat ornare libero eu, finibus ultrices sem. Donec a aliquam mi. In fermentum justo at eros facilisis, ac dictum ex lacinia. Maecenas laoreet finibus dui eget euismod. Aliquam commodo feugiat turpis, non placerat nunc pretium ut. Integer ut mollis ante. Nulla eu urna ut enim molestie aliquam.\n\nVivamus vitae condimentum dolor. In euismod, neque ac aliquam iaculis, tortor nulla efficitur mauris, vitae venenatis eros orci id massa. Maecenas urna purus, bibendum nec accumsan vel, cursus ultrices dui. Vestibulum mattis orci in nisl posuere, sit amet mollis urna porttitor. Suspendisse malesuada sagittis diam eu pulvinar. Nulla ornare orci dictum sodales ornare. Donec nec dignissim erat, eu condimentum quam. Suspendisse bibendum bibendum nulla, et laoreet ligula vulputate ac. Curabitur tempor odio vel mauris commodo congue. Maecenas purus risus, facilisis vel pharetra bibendum, facilisis et elit. Nam sodales lectus sit amet tristique venenatis. Donec mollis, ligula ac sodales sagittis, eros libero maximus nulla, ac mattis libero dui a sem. Vivamus pretium commodo dui vel iaculis. Sed at quam lacinia, maximus quam ac, malesuada diam. Ut consequat egestas pretium.\n\nSuspendisse quam orci, sollicitudin sed eleifend pulvinar, gravida nec leo. Donec ac lorem ut nibh facilisis ultrices. Cras auctor condimentum dapibus. Nunc tempor ipsum erat, nec vestibulum lorem placerat in. Integer ligula felis, posuere vel efficitur vitae, congue vel augue. Suspendisse auctor sodales porta. Sed augue turpis, tincidunt vitae orci non, elementum ornare tellus. Integer pellentesque vel nisl vitae gravida. Proin velit eros, tempus nec luctus vel, tempor tristique quam. Maecenas cursus neque in suscipit cursus. Nullam eget nulla mattis, pharetra mauris sodales, maximus ligula. Integer vel ornare urna. Donec sed cursus felis, ut imperdiet mauris. Quisque venenatis tempor quam, ac hendrerit tellus mollis nec.\n\nNullam sit amet finibus sapien, vulputate molestie urna. Nullam tortor ligula, tristique ut dictum nec, suscipit a tellus. Donec pellentesque, turpis id ultricies maximus, sem lacus mattis nunc, ullamcorper consequat nunc nisi nec dolor. Donec lacinia sapien ac lorem pellentesque, at sodales erat cursus. Donec dictum velit quis tortor egestas, sit amet rhoncus libero lacinia. Praesent commodo sapien odio, porta lacinia ex rutrum a. Ut suscipit luctus tincidunt. Cras ac elit non arcu iaculis tincidunt vitae in sem. Suspendisse potenti. Phasellus eu consequat odio. Aenean cursus posuere turpis ac condimentum. Phasellus sollicitudin dapibus risus, a blandit ex dapibus sed. Morbi lacinia lorem sed urna consectetur tincidunt. Vivamus a convallis dui, in vestibulum risus. Praesent non arcu a odio ornare volutpat ac ac justo. Nam convallis convallis lectus, ac tristique tellus faucibus ut.\n\nAliquam pulvinar augue nunc, efficitur facilisis massa vulputate vel. Vestibulum auctor eu leo a consequat. Phasellus ultrices posuere tortor vitae tempor. Vivamus non nisi aliquam, euismod nunc et, sagittis ante. Nulla accumsan lectus eu felis semper, sed suscipit metus egestas. Nulla eu enim mauris. Mauris luctus nibh et justo finibus, sit amet viverra arcu congue. Aliquam maximus neque fermentum urna ultrices placerat. Sed eu nisi sollicitudin, imperdiet ligula non, cursus risus. Suspendisse non erat nec mauris dapibus interdum nec quis nulla. Nullam eget faucibus turpis. Etiam hendrerit mollis erat quis iaculis.\n\nNunc sit amet rutrum massa, a consectetur dui. Cras nec sapien leo. Quisque mollis tortor at tellus molestie euismod. Pellentesque eu ante magna. Mauris aliquam tincidunt iaculis. Sed feugiat urna quis est consequat sodales. Cras nibh nisi, tristique sagittis justo viverra, iaculis sollicitudin leo. Pellentesque mollis ac sem id cursus. Suspendisse in libero non turpis ultricies vestibulum nec non nunc. Mauris semper tortor magna. Quisque convallis purus vitae mi porttitor fringilla. Morbi in massa diam. Donec velit orci, interdum nec ligula a, bibendum euismod turpis. Etiam luctus lacus ac ex iaculis aliquet. Nulla in venenatis nibh. Nunc a nulla tempor, accumsan velit at, gravida quam.', '0000-00-00 00:00:00', 'capa1.png', 3),
(9, 50, 'ex eget ornare congue. Nunc porta mauris nulla, non condimentum magna mollis ut', 'Sed eget massa urna. Aliquam in interdum tortor, quis iaculis lacus. Cras gravida lectus urna, ac sagittis massa posuere id. Cras porttitor tortor nec sagittis facilisis. Nullam sed magna eleifend, pellentesque magna at, lacinia purus. Vestibulum convallis rhoncus velit, eget rutrum mauris ullamcorper nec. Maecenas sit amet pulvinar ipsum. Nunc ut molestie sapien, eu porta magna. Vestibulum auctor id elit vitae facilisis. Phasellus dignissim ligula quis est tincidunt, ut interdum erat varius. Ut luctus lobortis odio, in gravida neque faucibus et. Nunc euismod risus dolor, sit amet volutpat lacus dignissim in. Nam auctor quis ipsum id tempor. Vivamus a scelerisque neque, et fermentum urna. Pellentesque id mi venenatis, sollicitudin enim quis, pretium neque.\n\nPhasellus eget rhoncus ante. Maecenas vitae lacus eu urna tempus porta a sed eros. Fusce auctor leo non augue consectetur, non rutrum felis condimentum. Pellentesque vehicula est elit, sit amet consectetur turpis lobortis sit amet. Mauris at hendrerit est. Etiam in eros id nulla egestas condimentum non a lectus. Suspendisse potenti. Vivamus ut dolor id libero finibus sodales vitae eget sem. Nulla dignissim faucibus bibendum.\n\nMauris tincidunt, magna non suscipit hendrerit, nibh tellus porttitor neque, id aliquam magna erat ut orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In elit ante, tincidunt sed viverra at, congue id erat. Nunc venenatis felis diam, sed dictum lacus aliquet et. Nullam finibus nibh odio, vel blandit ex fermentum malesuada. Mauris quis odio tincidunt, cursus sapien in, fringilla justo. Curabitur mollis justo vitae massa aliquet, ultrices tristique nulla viverra. Integer et elementum ipsum, porta dignissim augue. Integer malesuada nulla nec lectus sagittis, imperdiet bibendum odio pulvinar. Vestibulum libero odio, imperdiet ac enim at, molestie egestas lorem. Nullam cursus, quam eget rhoncus porttitor, lorem nibh aliquam lacus, at pulvinar urna odio vitae magna. Integer velit justo, sollicitudin et posuere eget, pretium et arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi pulvinar mattis est.\n\nMaecenas ut sodales urna. Donec aliquam tempor lacus vitae ornare. Sed auctor ac nisl at dictum. Quisque a ligula eget sapien vehicula porta nec ut odio. Etiam mattis scelerisque massa, in eleifend ipsum facilisis eu. Suspendisse eu elementum magna. Phasellus pharetra quam ac porta aliquet. Donec facilisis dui nulla, et sagittis nibh fringilla et. Nulla molestie mattis justo, ac hendrerit metus pulvinar in. Cras condimentum venenatis tincidunt. Donec ullamcorper purus erat, quis semper tortor dignissim a. Mauris vulputate sapien turpis. In accumsan erat nunc, ut facilisis libero pretium vel. Maecenas sed sapien ut est ornare ornare. In at leo massa. Praesent interdum, velit nec iaculis condimentum, arcu odio ullamcorper mi, a facilisis nibh nulla in felis.\n\nNullam dictum porttitor finibus. Etiam in finibus turpis. Integer vitae imperdiet urna. In hac habitasse platea dictumst. Aliquam a interdum felis. Pellentesque magna ligula, mattis vel eros at, egestas faucibus eros. Aenean faucibus dolor quis diam dapibus, at iaculis dolor efficitur. Maecenas ac turpis a ante aliquet eleifend. Praesent feugiat ante magna, eu laoreet nibh euismod non. Quisque dapibus, ipsum id porttitor interdum, turpis elit ornare libero, ac sodales nibh dui sit amet elit. Sed pretium convallis posuere. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque ac tincidunt justo, eget faucibus lacus. Etiam rutrum lorem vel arcu posuere, vel feugiat massa efficitur. Phasellus ullamcorper leo et congue congue.\n\nDonec purus diam, bibendum in turpis eu, vehicula gravida elit. Mauris tellus justo, congue ut eros a, efficitur fermentum sem. Aenean sodales ipsum eu ultricies ultricies. In tempus ligula vitae libero semper fringilla. Maecenas sit amet urna id lectus condimentum hendrerit. Ut posuere orci a ex pretium luctus. Nulla cursus, justo quis semper scelerisque, ante lectus dignissim sapien, vel egestas ante enim sed massa. Nam in vestibulum lacus.\n\nMorbi aliquam orci vitae magna imperdiet rhoncus. Suspendisse ut velit quis ante pellentesque imperdiet a vel augue. Phasellus mi mauris, pellentesque quis fringilla et, dignissim nec leo. Phasellus volutpat enim id turpis euismod interdum. Nam dignissim, ipsum in pharetra dignissim, risus sem tempus nisl, eu tristique mi lacus nec tellus. Fusce purus eros, pulvinar condimentum auctor et, tristique et enim. Cras mollis nunc ut ex accumsan, non viverra velit sagittis. Quisque sagittis eros libero, non efficitur augue efficitur eget. Donec sed venenatis lacus, molestie auctor sapien. Vivamus et gravida eros, id volutpat nunc. Vestibulum malesuada at lectus ac convallis. Maecenas vehicula at magna ac vestibulum.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at enim eros. Maecenas et sodales leo, a iaculis risus. Donec dapibus convallis lectus, quis semper risus condimentum at. Curabitur vulputate libero non nulla porta viverra. Nullam a mauris convallis, vehicula dolor sit amet, sodales lorem. Duis maximus velit ac rhoncus faucibus. Proin sit amet fringilla tortor.\n\nPraesent in diam eget est ultricies blandit. Etiam sit amet nulla at urna consectetur eleifend at ut tellus. Morbi quis est in justo bibendum iaculis. Quisque auctor elit ac dolor laoreet scelerisque. Sed lacus tellus, consequat sed auctor at, consectetur eget lectus. Vestibulum mollis et sem mattis ullamcorper. Nullam ornare posuere varius. Donec suscipit eleifend velit, a tempus neque rutrum fringilla. Vivamus ex tortor, sodales ac commodo at, gravida eget orci. Aliquam consectetur erat non nisi tincidunt vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus.\n\nDonec convallis semper risus eu mattis. Vivamus accumsan ut ante auctor ullamcorper. In purus tellus, efficitur et viverra vitae, blandit eu enim. Praesent sollicitudin tortor a faucibus consequat. Fusce neque augue, sodales posuere ex eget, eleifend tristique velit. Proin euismod, lorem vitae tristique facilisis, nisi purus vulputate justo, quis finibus tellus turpis ut erat. Phasellus consequat tincidunt elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus egestas et odio eu ultricies. Nulla ultricies leo finibus, tincidunt dui ut, semper erat. Sed blandit urna a velit ullamcorper euismod at in sem. Proin nec arcu eget sem semper lacinia. Aenean sollicitudin tempus tortor in vestibulum. Donec eu laoreet eros.\n\nDonec pharetra elementum metus, sed hendrerit tellus. Phasellus bibendum laoreet felis ut ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eu nulla nec lectus convallis eleifend in vel urna. Maecenas ipsum velit, ornare quis viverra ac, fermentum in augue. Praesent vulputate lorem a justo condimentum mattis a in nunc. Phasellus ac finibus mi, non porttitor elit. Nulla nisl mi, porttitor in volutpat et, pharetra eget ligula. Etiam ut efficitur urna. Vestibulum eget ullamcorper eros.\n', '0000-00-00 00:00:00', 'capa1.png', 2);
INSERT INTO `conteudo` (`idConteudo`, `vizualizacoes`, `titulo`, `conteudo`, `dataPostagem`, `fotoCapa`, `fk_cont_idUsuario`) VALUES
(10, 50, 'maximus metus', 'Phasellus justo velit, imperdiet mollis iaculis sit amet, dapibus non massa. Pellentesque eget tortor a nisi bibendum eleifend et lobortis metus. Morbi at mollis quam. Nulla mollis imperdiet nisi, quis pellentesque mauris porttitor ut. Praesent neque enim, eleifend bibendum porttitor sit amet, aliquam ac magna. Duis sed ligula ex. Phasellus et mauris sit amet orci mollis accumsan.\n\nQuisque quis purus blandit, convallis purus vel, tempor tellus. Nunc porttitor imperdiet libero, a placerat neque dignissim sit amet. Sed egestas mattis neque vitae dapibus. Cras sit amet imperdiet odio. Nunc sollicitudin velit nec massa ultrices tempor. Mauris ac suscipit massa, vel luctus justo. Nam dolor eros, eleifend quis facilisis ac, fringilla sit amet orci. Aliquam a tempor erat.\n\nDonec mollis volutpat congue. Morbi quis consequat eros. Donec eu diam vel est rutrum tristique. Morbi vestibulum libero quis erat posuere porta. Nulla facilisi. Phasellus condimentum ultrices purus. Pellentesque efficitur mi quis ex aliquam elementum suscipit quis sem. Suspendisse feugiat pellentesque tincidunt. Sed id ante accumsan elit mattis tempor at in ipsum.\n\nNullam commodo ligula vitae dolor malesuada, vel porta sapien lobortis. Proin condimentum fermentum sem, et hendrerit quam auctor vel. Nulla ornare, lectus at lacinia fringilla, felis lacus mollis metus, et semper mi lorem non turpis. Pellentesque pellentesque semper mi, quis pulvinar risus rutrum et. Etiam magna ipsum, tempus sed ipsum sed, ornare ornare tortor. Nullam quis ligula eget ante malesuada convallis. Phasellus nec libero non diam mollis porttitor accumsan vitae erat. Sed vel odio at neque semper porttitor. Duis sit amet enim non dui maximus sollicitudin. Ut tincidunt enim in neque bibendum, id efficitur purus posuere. Cras lacinia leo ut ipsum vulputate, rhoncus lobortis turpis auctor. Vestibulum dapibus sem vitae ligula porttitor, sed ullamcorper ante aliquam. Nunc eu pharetra libero. Aliquam tempus elementum volutpat.\n\nPhasellus pharetra neque sed lectus volutpat luctus. Aenean eget velit vel justo imperdiet porttitor. Nam nec ligula purus. Etiam egestas leo a elit fringilla facilisis. Mauris porta ante vitae ipsum hendrerit ornare. Cras vitae dui quis sapien aliquam vehicula. Suspendisse eget turpis sed dolor rhoncus feugiat sed quis enim. Sed feugiat tempus aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue mi sed augue mattis, cursus bibendum magna fringilla. Proin quis tincidunt est. Aenean at consequat eros.\n\nDonec consectetur dui lacus, vel volutpat tellus laoreet ut. Etiam sit amet dui elit. Donec semper mauris sit amet vestibulum laoreet. Curabitur lacinia tempor ex ac condimentum. Cras hendrerit vulputate lectus in scelerisque. Phasellus tincidunt sodales orci pulvinar mollis. Phasellus metus nulla, varius in laoreet sit amet, rhoncus sed massa. Ut sit amet quam mauris.\n\nCras suscipit egestas ipsum, quis ultricies justo tristique quis. Aenean in nibh sem. Nullam sed tincidunt sem, quis imperdiet ipsum. Curabitur molestie id metus in consectetur. Cras rhoncus bibendum tortor at aliquam. Donec porta cursus mauris in sagittis. Praesent et purus et diam commodo feugiat. Vivamus eleifend arcu mauris, non hendrerit tortor sollicitudin id. Donec a mi eu libero tempus tempor sed id odio. Nunc id mattis dui. Nullam venenatis, nunc vel suscipit mollis, nisl ante cursus elit, a posuere mauris turpis vel lacus.\n\nNullam vel felis ut est fringilla euismod sed id felis. Vestibulum et porttitor lorem. Sed eros odio, accumsan et nulla sed, pretium luctus odio. Donec facilisis magna vel ex porta imperdiet. Vivamus tincidunt purus magna, ac dignissim odio viverra eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur non eros in nisi sagittis efficitur. Duis tellus tortor, scelerisque ut ex eget, tempor consequat libero. Proin at nunc lobortis, tempus ante vel, porttitor ante.\n\nNulla facilisi. Etiam libero nisi, placerat eu iaculis non, sodales sit amet lorem. Maecenas sit amet nulla vitae ipsum congue ultricies. Suspendisse nunc mauris, viverra sed ex nec, viverra placerat nibh. Sed eu sem iaculis, imperdiet neque ut, faucibus lacus. Maecenas at elementum mi. Mauris faucibus libero eget tellus tincidunt, id aliquet quam feugiat.\n\nSed molestie tristique congue. Etiam condimentum est vel efficitur posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend ac lorem pharetra eleifend. Mauris ligula arcu, euismod at pellentesque id, commodo vitae sem. Proin euismod libero ante, id ultrices lectus malesuada sit amet. Mauris sed felis sed magna lacinia rhoncus eu a lorem.\n\nDuis ornare volutpat arcu. Aliquam gravida diam nec sapien dapibus, venenatis dapibus arcu porta. Aenean vehicula diam at magna fermentum suscipit. Praesent purus nulla, ornare sit amet blandit eleifend, posuere eu mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ante ex, interdum ac blandit in, mollis nec dolor. Aliquam quis fermentum metus. Fusce facilisis consectetur purus eu facilisis. Etiam pulvinar est ac neque ornare, nec sollicitudin sapien fermentum. Nulla sit amet enim eros. Nullam rhoncus est vel nunc dictum cursus. Cras auctor sed sem sed elementum.\n\nAliquam elit metus, tincidunt non posuere vel, viverra eu mauris. Quisque nibh eros, tempus non hendrerit vitae, vehicula sed libero. Aliquam et nisi rutrum, finibus nulla in, maximus mi. Nam consectetur vel magna non maximus. Cras pharetra, diam quis volutpat consequat, arcu enim elementum risus, vitae posuere nunc nisl non tellus. Fusce sit amet pulvinar elit, et dignissim ante. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse at laoreet turpis. Pellentesque augue neque, tristique sit amet porttitor vel, lobortis non neque. Nullam dictum blandit porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus.\n\nSed ac eros rutrum, cursus risus quis, sollicitudin risus. Aliquam erat volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In interdum lectus arcu, at efficitur lacus faucibus nec. Fusce suscipit maximus neque et finibus. Quisque euismod iaculis consectetur. Vivamus eu nunc dolor. Quisque congue, massa in mattis finibus, arcu elit cursus dui, eu imperdiet justo ante ac arcu. Morbi mattis est dictum, lobortis metus in, condimentum ligula. Nunc lacinia sapien in urna placerat, ac consectetur turpis vehicula. Phasellus eleifend, sapien molestie pharetra molestie, quam quam pellentesque neque, lobortis semper quam erat in lacus. Vivamus pharetra tristique consectetur. Cras posuere eros eros, vel auctor lacus semper id. Fusce lobortis vel lacus iaculis congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\n\nProin et tellus lorem. Nunc vitae vestibulum sapien. In id nunc in nunc venenatis placerat nec vel elit. Duis eget ante mauris. Donec tempor lectus quis pharetra dapibus. Nulla posuere aliquet lectus, a elementum nisi. Nunc efficitur pellentesque bibendum. Aliquam libero nisi, pharetra dignissim dui at, facilisis feugiat sapien. Aenean id mauris in sapien hendrerit dapibus. Aenean finibus in dolor eget condimentum. Vivamus dapibus nunc vitae massa rutrum elementum. Nullam efficitur ligula gravida sem euismod, sit amet interdum arcu rhoncus. Praesent fermentum mauris et egestas tempus.\n\nPhasellus blandit, sapien non luctus interdum, turpis mi sodales nisl, finibus aliquet ligula orci eu erat. Nunc vitae enim volutpat, tristique diam et, ultrices est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis congue ex tristique, ultrices nisi vel, congue odio. Cras sagittis consequat sem. In ut eros congue, suscipit ipsum vel, rhoncus tortor. Sed nec tempor arcu, maximus luctus tortor. Integer ac tellus sed nibh finibus tincidunt. Duis pharetra mauris nisl, at interdum mi volutpat accumsan. Nullam finibus est arcu, in malesuada augue dignissim vel. Aenean quis mattis odio, at mollis nisl.\n\nNunc semper, ipsum non scelerisque lacinia, nibh odio consectetur diam, vitae vehicula orci nulla in nunc. Phasellus pharetra semper nunc sit amet rutrum. Pellentesque nunc urna, lacinia a sodales at, facilisis a mauris. Ut lectus tortor, volutpat ac hendrerit in, tempor facilisis est. Maecenas ullamcorper lacus eu augue faucibus aliquam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus vehicula, justo quis sollicitudin euismod, odio elit aliquet purus, in aliquam ligula nibh sed leo. Pellentesque consequat mi nibh, vitae blandit mauris tincidunt nec. Quisque ac nisl id ex fringilla aliquet non consectetur nisi. Suspendisse potenti. Aenean libero est, commodo et interdum a, porttitor sed enim. Nullam nunc lacus, dignissim a pulvinar semper, posuere nec lorem. Sed dolor diam, tincidunt sed dictum eu, consequat a libero.\n\nPellentesque eget luctus lectus, in vulputate ex. Praesent lacinia vel sem vel bibendum. In facilisis aliquam luctus. Mauris eget viverra erat. Sed justo mauris, tempus sed ultrices sit amet, lacinia at sem. Sed faucibus augue auctor, viverra risus a, eleifend massa. Maecenas vestibulum sem vitae vestibulum iaculis. Nam non purus at est venenatis pulvinar. Suspendisse eget elementum augue, sed scelerisque ligula. In eget sodales erat. Suspendisse vitae placerat turpis. Quisque lectus ligula, tempor et lacinia at, dictum non nibh. Aenean in commodo arcu. Donec enim arcu, lacinia eget finibus sed, semper a lacus.\n\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In magna ex, aliquam ut sem sit amet, lacinia luctus urna. Donec porta blandit erat, eget dapibus dui tristique mattis. Aliquam eget cursus sapien. Aenean consequat non erat sed iaculis. Proin nibh eros, tincidunt ut quam in, molestie accumsan metus. Ut nec nibh molestie, facilisis urna id, dictum ipsum. Nulla at finibus tellus. Quisque congue, mauris id semper viverra, quam nisi feugiat felis, id mollis tortor turpis vitae diam. Sed dapibus rhoncus felis et auctor. Nam quis dui turpis. Nulla iaculis urna vitae convallis pellentesque. Nam lacinia erat ac sagittis gravida.\n\nDonec quam tellus, ullamcorper et lacus eu, dapibus congue nunc. In elementum ligula at scelerisque commodo. Vivamus rhoncus lacus pharetra tellus pellentesque, eu faucibus leo bibendum. Vivamus tristique libero et odio aliquam dictum. Proin tellus augue, eleifend nec ligula vel, tincidunt dictum massa. In convallis lorem in ultrices porta. Mauris in arcu ac orci tincidunt suscipit quis a eros. Nulla fringilla, orci quis mollis dignissim, mauris lorem imperdiet massa, ut congue nulla erat id lectus. Duis fermentum vel odio sit amet cursus. Donec interdum ut sem at finibus. Curabitur elit mi, pulvinar non ex a, consectetur viverra urna. Duis interdum placerat arcu quis ultrices. Sed vehicula ex ut aliquet facilisis. Nam id diam quis purus tempus sodales tempor a lectus.\n\nMaecenas aliquet nisl sapien, sed blandit nulla interdum et. Donec auctor sit amet nibh quis eleifend. In pretium consectetur posuere. Maecenas pulvinar quam quam, id tempor metus venenatis a. Mauris suscipit magna in mi placerat efficitur. Sed mollis a magna a varius. Maecenas finibus elit dignissim, vestibulum odio ac, rhoncus ipsum. Mauris tincidunt quam convallis eros vulputate, eu euismod massa mattis. Nullam congue lorem neque, ac consequat felis lacinia quis.\n\nEtiam gravida mi leo, posuere volutpat augue iaculis a. Ut sit amet vestibulum purus, ut consequat nisi. Mauris scelerisque lectus felis, a facilisis tortor elementum a. Ut eget mauris turpis. Phasellus at consectetur libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ornare viverra laoreet. Sed condimentum diam quis est maximus, et feugiat tortor tempus. Fusce tincidunt felis vitae nulla suscipit consectetur ut non ligula. Cras eu libero diam. Duis ultricies dolor eu tincidunt ultrices.\n\nVivamus metus sapien, accumsan pulvinar dui in, convallis consequat augue. Nam pretium facilisis mi. Etiam iaculis fringilla erat a euismod. Duis fermentum convallis commodo. Donec non augue enim. Etiam interdum eros turpis, quis luctus purus iaculis ultrices. Curabitur placerat aliquet ornare. Proin in dolor vitae velit pretium consequat condimentum nec felis. Sed ac justo maximus, sodales ipsum quis, fermentum elit. Phasellus lectus tortor, consectetur at enim sed, tempor semper neque. In accumsan, dolor id accumsan cursus, metus leo ultricies eros, at egestas ipsum lectus et libero. Curabitur eu tincidunt neque, et scelerisque nunc. Maecenas feugiat, metus eget bibendum finibus, turpis ipsum sagittis risus, quis semper augue dolor eu lorem. Aenean nec nisi a elit finibus pulvinar nec in libero. Nunc sollicitudin nisl magna, id rutrum neque gravida nec.\n\nPellentesque eu tempor augue. Sed quis dapibus orci, et suscipit est. Sed a nulla quis lorem blandit pretium. Duis egestas orci vitae placerat ultricies. Sed porttitor quam nec bibendum lacinia. Donec turpis risus, viverra non elementum et, sagittis nec nibh. Donec pellentesque porttitor pellentesque. Integer tincidunt, augue id dictum posuere, lectus sem ultricies risus, at iaculis arcu felis in magna. Donec non tempus massa, ut blandit lacus. Morbi ante nisl, sagittis vitae velit sit amet, bibendum suscipit elit. Mauris purus arcu, ullamcorper porttitor leo non, tincidunt imperdiet augue. Vestibulum odio erat, hendrerit at orci vitae, laoreet porta felis.\n\nPhasellus vel mi mi. Integer in pellentesque orci. Duis sollicitudin lectus odio, id tempus lacus blandit sed. Duis porttitor velit a nulla vehicula cursus. Suspendisse eget elit id nulla pretium scelerisque. Vivamus aliquam faucibus velit ac tincidunt. Nam vestibulum eros eu tortor auctor, eu lobortis dui mattis. Ut at ex vel ligula lacinia posuere. Fusce quis maximus lectus, quis consectetur diam. Duis commodo commodo neque, eget dapibus nisi tempor a. Suspendisse tristique velit sagittis posuere porttitor. Aliquam fermentum varius mauris id auctor. Curabitur nec mi nec nisl consequat venenatis. Etiam efficitur nunc at luctus condimentum. Quisque convallis, lectus lobortis gravida ullamcorper, mi ligula laoreet justo, vel porttitor leo nulla vel nunc.\n\nDonec in mi lacinia, ultrices velit a, posuere diam. In eget suscipit purus. Mauris ante libero, ornare sed sem at, eleifend iaculis sem. Morbi varius arcu in tincidunt pulvinar. Nullam malesuada placerat volutpat. Aenean eu dolor eleifend, auctor nisl sit amet, placerat libero. Integer sed magna at nisl vestibulum efficitur. Vivamus in diam interdum, malesuada sem sed, tempus neque. Proin vitae turpis vitae ante mollis euismod commodo eu sapien. Quisque sodales tempus viverra. Morbi sollicitudin, lacus eu pretium suscipit, ex dolor congue ligula, id posuere nisl lacus ac massa.', '0000-00-00 00:00:00', 'capa1.png', 3),
(18, 0, 'teste1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare tortor tortor, eu tristique sem lobortis placerat. Aenean porta diam vitae ipsum pellentesque, et porta enim pulvinar. Donec semper, est egestas ultricies egestas, risus diam sagittis mauris, pretium ullamcorper dui arcu in sem. Fusce viverra, ante ac maximus suscipit, quam nibh porttitor nisi, sit amet pharetra justo leo nec enim. Praesent tristique, turpis a consequat luctus, est dui maximus erat, eget placerat mi sapien vitae leo. Donec porttitor vitae urna non imperdiet. Cras vitae lectus quis elit iaculis tempus id non velit. Aliquam erat volutpat. Pellentesque egestas, risus a dictum egestas, neque nisl fringilla risus, non molestie nulla eros vitae mi.\r\n\r\n    Donec placerat dui justo. In hac habitasse platea dictumst. Cras vel nisl et orci faucibus mattis. Phasellus et nisi sit amet diam vestibulum laoreet vitae ut diam. Morbi maximus neque massa, a ullamcorper tortor tempor at. Nulla vel iaculis ante, ac bibendum orci. Fusce rhoncus leo sed ipsum aliquam, sit amet condimentum quam tincidunt. Maecenas eu odio arcu. Nunc porttitor hendrerit justo, a malesuada odio sollicitudin quis. Fusce aliquet massa ac sapien cursus laoreet.', '2019-08-17 10:37:06', 'foto.png', 2),
(19, 0, 'titulo 1.0', '<h2><span style=\"font-family:Comic Sans MS,cursive\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet auctor orci eget bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam luctus ex nec lectus imperdiet eleifend. Ut id velit lacinia, lobortis mauris a, eleifend augue. Nunc finibus, ligula at commodo finibus, dui quam tincidunt velit, a placerat ante risus quis enim. Duis vitae blandit mauris. Integer tincidunt leo non lorem rhoncus egestas. Nulla lacus odio, pulvinar ut leo nec, dictum ullamcorper leo. Donec lorem orci, sollicitudin vel commodo vitae, posuere et quam.</span></h2>\r\n\r\n<p><span class=\"marker\">Nunc gravida arcu non felis luctus faucibus. Proin dignissim metus et turpis dictum rhoncus. Integer lobortis lacinia metus, eu eleifend tellus rutrum quis. Duis erat justo, malesuada eu varius ut, interdum sed lorem. Donec facilisis purus nec ante elementum porta. Nunc purus ex, vulputate viverra vehicula sed, rhoncus ac nulla. Ut iaculis pharetra accumsan.<img alt=\"\" src=\"../assets/images//uploads/IMG_20180917_143039333.jpg\" style=\"float:right; height:96px; margin:5px; width:128px\" /></span></p>\r\n\r\n<p>Nam luctus malesuada hendrerit. Integer et congue turpis. Maecenas fringilla neque ut ante ultrices tristique. Sed suscipit magna ac elementum mattis. Mauris commodo sed enim tincidunt bibendum. Aenean hendrerit odio nec tincidunt pharetra. Sed luctus at dolor eu bibendum. Aenean tempor aliquet odio, venenatis vestibulum mi dignissim ac. Cras vel dolor ac velit ultrices suscipit venenatis ac odio.</p>\r\n\r\n<p>Vestibulum molestie faucibus dolor quis molestie. Donec quis dapibus arcu, ac gravida lacus. Vivamus ultricies enim vitae orci tempus, quis lacinia tellus sodales. Fusce cursus dignissim massa, nec dapibus nibh mattis et. Praesent pulvinar augue erat, ut finibus ligula condimentum at. Nam ut lorem ligula. Nulla vel vulputate odio, eu placerat massa. Aliquam metus enim, mollis in sapien id, luctus luctus massa. Integer porttitor sollicitudin enim, eu accumsan urna elementum fringilla. Nulla lobortis porta elit eget efficitur.</p>\r\n\r\n<p><span style=\"color:#3498db\"><u><em>ARQUIVO</em></u></span></p>\r\n\r\n<p>Etiam pretium pellentesque molestie. Suspendisse posuere leo at nisi blandit ultricies. Etiam fringilla accumsan magna, eu pellentesque augue porta vestibulum. Fusce fermentum auctor lectus eu pulvinar. Praesent sed viverra tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras eleifend mi eu orci dictum porta.</p>\r\n', '2019-08-17 10:37:43', '../assets/images/capas/IMG_20180827_14482711017082019103743.jpg', 1),
(102, 0, 'TEsteaaa', '<p><a href=\"../assets/files/o-que-e-o-projeto-politico-pedagogico-ppppdf.pdf\" class=\"modalDoc\" onclick=\"return false;\">../assets/files/o-que-e-o-projeto-politico-pedagogico-ppppdf.pdf</a></p>\r\n\r\n<p><a href=\"../assets/files/orientaÃ§oes para o gestor entender, criar e revisar o ppp.pdf\" class=\"modalDoc\" onclick=\"return false;\">aaaaaaaaaa</a></p>\r\n', '2019-09-09 20:59:22', '../assets/images/capas/49a7a777eb6725f98971a0ed38b887d209092019205922.jpg', 1),
(103, 0, 'Teste funcional', '<p><strong>ISSO</strong> <em>&Eacute;</em> <u>UM</u> <s>TESTE</s> <sub>FUNCIONAL</sub> <sup>DESSE</sup> <span style=\"font-family:Comic Sans MS,cursive\">SITE</span></p>\r\n\r\n<p><a href=\"../assets/files/_Colecao_Os_Pensadores__Vol_01.pdf\" class=\"modalDoc\" onclick=\"return false;\"><span style=\"font-family:Courier New,Courier,monospace\"><span style=\"font-size:48px\">ISSO &Eacute; UM LINK DE UM ARQUIVO</span></span><img alt=\"\" src=\"../assets/images//uploads/49a7a777eb6725f98971a0ed38b887d2.jpg\" style=\"float:left; height:480px; margin:7px; width:240px\" /></a></p>\r\n', '2019-09-10 14:55:17', '../assets/images/capas/e4103355ab7d2da9768ac9dad090518710092019145517.jpg', 1),
(104, 0, 'lalalala', '<p>JKDSGJADLGJJKDGJADGALKD</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"../assets/files/antologia_dos_textos_filosoficos.pdf\" class=\"modalDoc\" onclick=\"return false;\">link documento</a></p>\r\n', '2019-09-10 15:38:45', '../assets/images/capas/JavaScript_certificate10092019153845.jpg', 1),
(105, 0, 'lalalala', '<p>JKDSGJADLGJJKDGJADGALKD</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"../assets/files/antologia_dos_textos_filosoficos.pdf\" class=\"modalDoc\" onclick=\"return false;\">link documento</a></p>\r\n', '2019-09-10 15:46:09', '../assets/images/capas/JavaScript_certificate10092019154609.jpg', 1),
(106, 0, 'lalalala', '<p>JKDSGJADLGJJKDGJADGALKD</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"../assets/files/antologia_dos_textos_filosoficos.pdf\" class=\"modalDoc\" onclick=\"return false;\">link documento</a></p>\r\n', '2019-09-10 15:46:29', '../assets/images/capas/JavaScript_certificate10092019154629.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudodisciplina`
--

CREATE TABLE `conteudodisciplina` (
  `fk_cd_idDisciplina` int(11) NOT NULL,
  `fk_cd_idConteudo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conteudodisciplina`
--

INSERT INTO `conteudodisciplina` (`fk_cd_idDisciplina`, `fk_cd_idConteudo`) VALUES
(14, 1),
(18, 2),
(1, 3),
(20, 4),
(20, 5),
(8, 6),
(5, 7),
(3, 8),
(7, 9),
(9, 10),
(14, 1),
(18, 2),
(1, 3),
(20, 4),
(20, 5),
(8, 6),
(5, 7),
(3, 8),
(7, 9),
(9, 10),
(14, 1),
(18, 2),
(1, 3),
(20, 4),
(20, 5),
(8, 6),
(5, 7),
(3, 8),
(7, 9),
(9, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudosalvo`
--

CREATE TABLE `conteudosalvo` (
  `fk_cs_idConteudo` int(11) NOT NULL,
  `fk_cs_idUsuario` int(11) NOT NULL,
  `salvoEm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudotag`
--

CREATE TABLE `conteudotag` (
  `fk_ct_idTag` int(11) NOT NULL,
  `fk_ct_idConteudo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conteudotag`
--

INSERT INTO `conteudotag` (`fk_ct_idTag`, `fk_ct_idConteudo`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(4, 2),
(3, 1),
(4, 1),
(5, 1),
(4, 3),
(3, 3),
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(4, 2),
(3, 1),
(4, 1),
(5, 1),
(4, 3),
(3, 3),
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(4, 2),
(3, 1),
(4, 1),
(5, 1),
(4, 3),
(3, 3),
(41, 102),
(42, 103),
(43, 103),
(44, 103),
(45, 104),
(46, 104),
(47, 104),
(45, 105),
(46, 105),
(47, 105),
(45, 106),
(46, 106),
(47, 106);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `idDisciplina` int(11) NOT NULL,
  `disciplina` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`idDisciplina`, `disciplina`) VALUES
(1, 'Programação'),
(2, 'Lógica de Programação'),
(3, 'Hardware e Sistemas Operacionais'),
(4, 'Fundamentos da Informática'),
(5, 'Engenharia de Software'),
(6, 'Multimídia'),
(7, 'Banco de Dados'),
(8, 'Biologia'),
(9, 'Língua Inglesa'),
(10, 'Língua Espanhola'),
(11, 'Projeto Integrador'),
(12, 'Educação Física'),
(13, 'Química'),
(14, 'Sociologia'),
(15, 'História'),
(16, 'Filosofia'),
(17, 'Matemática'),
(18, 'Física'),
(19, 'Desenvolvimento Web'),
(20, 'Geografia'),
(21, 'Artes'),
(22, 'Português'),
(23, 'Programação'),
(24, 'Lógica de Programação'),
(25, 'Hardware e Sistemas Operacionais'),
(26, 'Fundamentos da Informática'),
(27, 'Engenharia de Software'),
(28, 'Multimídia'),
(29, 'Banco de Dados'),
(30, 'Biologia'),
(31, 'Língua Inglesa'),
(32, 'Língua Espanhola'),
(33, 'Projeto Integrador'),
(34, 'Educação Física'),
(35, 'Química'),
(36, 'Sociologia'),
(37, 'História'),
(38, 'Filosofia'),
(39, 'Matemática'),
(40, 'Física'),
(41, 'Desenvolvimento Web'),
(42, 'Geografia'),
(43, 'Artes'),
(44, 'Português');

-- --------------------------------------------------------

--
-- Estrutura da tabela `duvida`
--

CREATE TABLE `duvida` (
  `idDuvida` int(11) NOT NULL,
  `duvida` text NOT NULL,
  `adendo` tinyint(1) NOT NULL,
  `respondido` tinyint(1) NOT NULL,
  `dataDuvida` datetime NOT NULL,
  `fk_duv_idUsuario` int(11) NOT NULL,
  `fk_duv_idConteudo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `duvida`
--

INSERT INTO `duvida` (`idDuvida`, `duvida`, `adendo`, `respondido`, `dataDuvida`, `fk_duv_idUsuario`, `fk_duv_idConteudo`) VALUES
(1, 'pq?', 0, 0, '2018-06-12 10:34:09', 2, 3),
(2, 'pq?', 0, 0, '2020-05-19 16:00:00', 2, 8),
(3, 'como?', 0, 0, '2020-05-19 16:12:00', 8, 9),
(4, 'por que eu tenho que aprender isso?', 0, 0, '2020-05-19 16:13:03', 7, 9),
(5, 'mas isso não faz nenhum sentido', 0, 0, '2020-05-19 16:13:53', 9, 6),
(6, 'acho que você cometeu um equívoco', 0, 0, '2020-05-19 16:13:53', 1, 1),
(7, 'não aconteceu bem dessa maneira', 0, 0, '2020-05-19 16:15:09', 1, 7),
(8, 'qual é a raiz quadrada de 39?', 0, 0, '2020-05-19 16:15:55', 2, 7),
(9, 'capitu traiu ou não bentinho?', 0, 0, '2020-05-19 16:16:37', 2, 10),
(10, 'cara pq eu to fzd tanta pergunta?', 0, 0, '2020-05-19 16:16:37', 10, 5),
(11, 'aaaaaaaaaa?', 0, 0, '2019-07-14 01:55:00', 6, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE `resposta` (
  `resposta` text NOT NULL,
  `dataResposta` datetime NOT NULL,
  `idResposta` int(11) NOT NULL,
  `fk_resp_idDuvida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tag`
--

CREATE TABLE `tag` (
  `tag` varchar(128) NOT NULL,
  `idTag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tag`
--

INSERT INTO `tag` (`tag`, `idTag`) VALUES
('Igreja Católica', 1),
('Arte Moderna', 2),
('Calorimetria', 3),
('Genética', 4),
('Fundamentos das Redes de Computadores', 5),
('PHP', 6),
('Figuras de Linguageml', 7),
('Matemática Básica', 8),
('Marxismo', 9),
('Idade Média', 10),
('Cinemática', 11),
('orange', 21),
('purple', 22),
('rosa', 25),
('teste n1', 35),
('teste n2', 36),
('teste n3', 37),
('tag nova 2.0', 38),
('Matemï¿½tica Bï¿½sica', 39),
('sweater', 40),
('vai 1 2 4', 41),
('TESTE FUNCIONAL', 42),
('teste funfando', 43),
('k', 44),
('kkk', 45),
('askjaslkgjas', 46),
('askjg', 47);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL,
  `tipo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `tipo`) VALUES
(1, 'usuario'),
(2, 'professor'),
(3, 'moderador'),
(4, 'administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `fotoPerfil` varchar(320) DEFAULT NULL,
  `senha` varchar(256) NOT NULL,
  `email` varchar(320) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fk_usu_idTipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`fotoPerfil`, `senha`, `email`, `nome`, `idUsuario`, `fk_usu_idTipoUsuario`) VALUES
('../assets/fotoPerfil/vitao.png', '0', 'vitao@gmail.com', 'Vitao', 1, 4),
('../assets/fotoPerfil/tanso.png', '0', 'pgabiattiguardini@gmail.com', 'Pedro Gabriel', 2, 4),
('../assets/fotoPerfil/calopsita_da_joelma.png', '0', 'pedro.canteli2001@gmail.com', 'Pedro Augusto', 3, 4),
('../assets/fotoPerfil/passiguera.png', 'beijar aquela boquinha comunista', 'aaaa@gmail', 'Paxiguera', 4, 3),
('../assets/fotoPerfil/dautera.png', 'comunismo, a solucao', 'revolucao_ja@gmail.com', 'Dautao', 5, 2),
('../assets/fotoPerfil/johnzin.png', '1XxjohnxX1', 'johnvictordosreis@gmail.com', 'John Victor', 6, 1),
('../assets/fotoPerfil/fota.png', 'sk888', 'flor@gmail.com', 'Gustavo', 7, 1),
('../assets/fotoPerfil/preguiçss.png', 'sjkkkkkjjj', 'sumik@gmail.com', 'Pedro Henrique', 8, 1),
('../assets/fotoPerfil/cabeca.png', '%s31inh4x3gur4%', 'quintino@gmail.com', 'Matheus Henrique', 9, 1),
('../assets/fotoPerfil/gabrielle.png', '!@E$DT%', 'gabrielle@gmail.com', 'Gabrielle Danebrock', 10, 1),
('../assets/fotoPerfil/vitao.png', '0', 'victorhugonass@gmail.com', 'Victor Hugo', 11, 4),
('../assets/fotoPerfil/tanso.png', '0', 'pgabiattiguardini@gmail.com', 'Pedro Gabriel', 12, 4),
('../assets/fotoPerfil/calopsita_da_joelma.png', '0', 'pedro.canteli2001@gmail.com', 'Pedro Augusto', 13, 4),
('../assets/fotoPerfil/passiguera.png', '123321', 'passigamer@gmail.com', 'Felipe', 14, 3),
('../assets/fotoPerfil/dautera.png', '1917', 'revolucao_ja@gmail.com', 'Dauto', 15, 2),
('../assets/fotoPerfil/johnzin.png', '1XxjohnxX1', 'johnvictordosreis@gmail.com', 'John Victor', 16, 1),
('../assets/fotoPerfil/fota.png', 'sk888', 'flor@gmail.com', 'Gustavo', 17, 1),
('../assets/fotoPerfil/preguiçss.png', 'sjkkkkkjjj', 'sumik@gmail.com', 'Pedro Henrique', 18, 1),
('../assets/fotoPerfil/cabeca.png', '%s31inh4x3gur4%', 'quintino@gmail.com', 'Matheus Henrique', 19, 1),
('../assets/fotoPerfil/gabrielle.png', '!@E$DT%', 'gabrielle@gmail.com', 'Gabrielle Danebrock', 20, 1),
('../assets/images/usuarios/IMG_20171229_19384822072019165650.jpg', '$2y$10$R74EhFqkzBvRXmH0whUe3OwsOPbEUdpjJhn0PcAhq4iP1n/X2QOqm', 'etg@gmail.com', 'tere', 252525, 1),
('../assets/images/usuarios/19072019000139.', '$2y$10$aQ/BTqlJcTrKwksWFd1xVuZgcOObAVDwoWNpVB8qc7ZmjQihZ4c7y', 'taind@gmail.com', 'taindo', 652314, 1),
('../assets/images/usuarios/IMG-20180129-WA001413082019212932.jpg', '$2y$10$MXsDvEmVf1dSAquQoBWjL.aWNiRwQZJ0d9HJLLszTwC9aA95Mv9ea', 'odeioprog@gmail.com', 'ok agora foi certo', 20133145, 1),
('../assets/images/usuarios/IMG_20180106_18582122072019072457.jpg', '123456', 'obrigado@deus.com', 'FINALMENTE FOI', 56565678, 1),
('../assets/images/usuarios/18072019235809.', '$2y$10$sX/1hYJdiwkDiaUj37XOM.e4FFA0Zm2YtBCDxPUIKKIjbRm9C39oa', 'umdois@gmail.com', 'umdoistres', 123123456, 1),
('teste.jpeg', '$2y$10$pY.6F0WcVUD57wgkzK47zOfom9cyuVaz0m5Qc8EcxEPxpSKJ3Ahjm', 'vamola@gmail.com', 'pedroooo', 201733145, 1),
('../assets/images/usuarios/18072019235507.', '$2y$10$za7XiM6ngmw0.bctJZ0IPOxAylM3XoM7W9R/RsK7ovi8IMUNxLBqy', 'tegabiatti@gmail.com', 'eliane gabiatti', 222200000, 1),
('teste.jpeg', '$2y$10$LuI8zNZICJZoIFKgult1VOux5U1kq3KHe1RM.ZvXnoWr7X7.5.Usu', 'teste@gmail.com', 'teste1', 2017323145, 1),
('../assets/images/usuarios/Screenshot_2018-06-20-20-53-2512072019072517.png', '$2y$10$ATBx5rr/IrMRxtC9Py3s0u4aRgyg8QSHMzd82VPYBsoj9TqXhMFfa', 'foi@gmail.com', 'pq deus?', 2019123321, 1),
('../assets/images/usuarios/Screenshot_2018-06-20-20-53-2512072019072606.png', '$2y$10$DA6lUHfwY1BesCfp1ePzTei3Z6cTP5yqHR.1cEWakErLOKmCQRIr6', 'deus@mesmo.com', 'deus??', 2019123329, 1),
('../assets/images/usuarios/IMG_20171229_19384812072019073113.jpg', '$2y$10$Y.Eiac.nTvCE0sd3eYcj.eOxqhRXwZbafvvvaKyZTK9UzbWPMT1V6', 'serissimo@teste.com', 'Isto Ã© um cadastro sÃ©rio', 2020123456, 1),
('../assets/images/usuarios/IMG_20180122_01212322072019164122.jpg', '$2y$10$nHKPw5VPuKeMO5OcdNOsMO6B2eaXSztTQMdYRAhI7eTBxBcolWuia', 'mudei@email.com', 'FOI MANE', 2147483647, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`idConteudo`),
  ADD KEY `fk_cont_idUsuario` (`fk_cont_idUsuario`);

--
-- Índices para tabela `conteudodisciplina`
--
ALTER TABLE `conteudodisciplina`
  ADD KEY `fk_cd_idDisciplina` (`fk_cd_idDisciplina`),
  ADD KEY `fk_cd_idConteudo` (`fk_cd_idConteudo`);

--
-- Índices para tabela `conteudosalvo`
--
ALTER TABLE `conteudosalvo`
  ADD KEY `fk_cs_idConteudo` (`fk_cs_idConteudo`),
  ADD KEY `fk_cs_idUsuario` (`fk_cs_idUsuario`);

--
-- Índices para tabela `conteudotag`
--
ALTER TABLE `conteudotag`
  ADD KEY `fk_ct_idTag` (`fk_ct_idTag`),
  ADD KEY `fk_ct_idConteudo` (`fk_ct_idConteudo`);

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`idDisciplina`);

--
-- Índices para tabela `duvida`
--
ALTER TABLE `duvida`
  ADD PRIMARY KEY (`idDuvida`),
  ADD KEY `fk_duv_idUsuario` (`fk_duv_idUsuario`),
  ADD KEY `fk_duv_idConteudo` (`fk_duv_idConteudo`);

--
-- Índices para tabela `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`idResposta`),
  ADD KEY `fk_resp_idDuvida` (`fk_resp_idDuvida`);

--
-- Índices para tabela `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`idTag`);

--
-- Índices para tabela `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_usu_idTipoUsuario` (`fk_usu_idTipoUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `idConteudo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `idDisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `duvida`
--
ALTER TABLE `duvida`
  MODIFY `idDuvida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `resposta`
--
ALTER TABLE `resposta`
  MODIFY `idResposta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tag`
--
ALTER TABLE `tag`
  MODIFY `idTag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `conteudo`
--
ALTER TABLE `conteudo`
  ADD CONSTRAINT `conteudo_ibfk_1` FOREIGN KEY (`fk_cont_idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Limitadores para a tabela `conteudodisciplina`
--
ALTER TABLE `conteudodisciplina`
  ADD CONSTRAINT `conteudodisciplina_ibfk_1` FOREIGN KEY (`fk_cd_idDisciplina`) REFERENCES `disciplina` (`idDisciplina`),
  ADD CONSTRAINT `conteudodisciplina_ibfk_2` FOREIGN KEY (`fk_cd_idConteudo`) REFERENCES `conteudo` (`idConteudo`);

--
-- Limitadores para a tabela `conteudosalvo`
--
ALTER TABLE `conteudosalvo`
  ADD CONSTRAINT `conteudosalvo_ibfk_1` FOREIGN KEY (`fk_cs_idConteudo`) REFERENCES `conteudo` (`idConteudo`),
  ADD CONSTRAINT `conteudosalvo_ibfk_2` FOREIGN KEY (`fk_cs_idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Limitadores para a tabela `conteudotag`
--
ALTER TABLE `conteudotag`
  ADD CONSTRAINT `conteudotag_ibfk_1` FOREIGN KEY (`fk_ct_idTag`) REFERENCES `tag` (`idTag`),
  ADD CONSTRAINT `conteudotag_ibfk_2` FOREIGN KEY (`fk_ct_idConteudo`) REFERENCES `conteudo` (`idConteudo`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `duvida`
--
ALTER TABLE `duvida`
  ADD CONSTRAINT `duvida_ibfk_1` FOREIGN KEY (`fk_duv_idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `duvida_ibfk_2` FOREIGN KEY (`fk_duv_idConteudo`) REFERENCES `conteudo` (`idConteudo`);

--
-- Limitadores para a tabela `resposta`
--
ALTER TABLE `resposta`
  ADD CONSTRAINT `resposta_ibfk_1` FOREIGN KEY (`fk_resp_idDuvida`) REFERENCES `duvida` (`idDuvida`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fk_usu_idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
