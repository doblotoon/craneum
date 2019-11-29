-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2019 às 02:57
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `craneum`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `idConteudo` int(11) NOT NULL,
  `titulo` varchar(256) NOT NULL,
  `conteudo` text NOT NULL,
  `dataPostagem` datetime NOT NULL,
  `fotoCapa` varchar(256) NOT NULL,
  `fk_cont_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`idConteudo`, `titulo`, `conteudo`, `dataPostagem`, `fotoCapa`, `fk_cont_idUsuario`) VALUES
(144, 'Polímeros Naturais e o Meio Ambiente', '<p dir=\"ltr\" style=\"text-align:justify\">A borracha da seringueira, polissacar&iacute;deos como o amido da batata e a celulose das plantas verdes, prote&iacute;nas como a queratina das unhas e o col&aacute;geno da pele, e os &aacute;cidos nucleicos s&atilde;o exemplos de pol&iacute;meros naturais org&acirc;nicos. Pol&iacute;meros formados durante o ciclo de crescimento de organismos vivos s&atilde;o, ent&atilde;o, denominados pol&iacute;meros naturais.&nbsp;Estes pol&iacute;meros n&atilde;o causam dano ao meio ambiente por serem biodegrad&aacute;veis. Pesquisas mais recentes indicam, inclusive, que esses pol&iacute;meros podem minimizar ou solucionar os problemas ambientais causados pelos pol&iacute;meros sint&eacute;ticos, que podem demorar at&eacute; 400 anos para se decompor. Ainda, determinados tipos de pol&iacute;meros sint&eacute;ticos podem causar disfun&ccedil;&otilde;es na sa&uacute;de humana e causar at&eacute; mesmo c&acirc;ncer.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Sua s&iacute;ntese envolve, geralmente, rea&ccedil;&otilde;es catalisadas por enzimas e rea&ccedil;&otilde;es de crescimento de cadeia a partir de mon&ocirc;meros ativados, que s&atilde;o formados dentro das c&eacute;lulas por processos metab&oacute;licos complexos.&nbsp;O amido, um polissacar&iacute;deo, por exemplo tem sido utilizado disperso em uma matriz polim&eacute;rica n&atilde;o-biodegrad&aacute;vel, usualmente polietileno (PE), para facilitar a acessibilidade dos microrganismos ao pol&iacute;mero sint&eacute;tico. Sendo assim, ele pode ser adicionado como aditivo, sendo degradado facilmente por microrganismos, provocando a degrada&ccedil;&atilde;o parcial da matriz.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Poli&eacute;steres naturais, que s&atilde;o produzidos por uma grande variedade de bact&eacute;rias, como materiais de reserva intracelular, t&ecirc;m sido alvo de muita aten&ccedil;&atilde;o para aplica&ccedil;&otilde;es comerciais, como pol&iacute;meros biodegrad&aacute;veis, vantajosamente produzidos por fontes renov&aacute;veis.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:center\"><iframe frameborder=\"0\" height=\"300\" scrolling=\"no\" src=\"https://www.youtube.com/embed/_3euIEYZHa0\" width=\"500\"></iframe></p>\r\n', '2019-11-22 17:00:44', '../assets/images/capas/images(2)22112019170044.jpg', 2017312160),
(145, 'Arquitetura Barroca', '<p>&nbsp;</p>\r\n\r\n<p>A&nbsp;arquitetura barroca&nbsp;est&aacute; entre as principais formas de manifesta&ccedil;&atilde;o da contrarreforma religiosa cat&oacute;lica por meio da arte. Esta manifesta&ccedil;&atilde;o integra o movimento barroco, que come&ccedil;ou em Roma em 1600 e espalhou-se por toda a Europa e Am&eacute;rica Latina. Al&eacute;m de sua contribui&ccedil;&atilde;o para a arte, a arquitetura barroca representou uma verdadeira revolu&ccedil;&atilde;o urban&iacute;stica.</p>\r\n\r\n<p>A arquitetura barroca integrava o movimento de contrarreforma da Igreja Cat&oacute;lica na arte. Entre os objetivos do movimento estava o transporte do observador para a cena demonstrada. &Eacute; por isso que a arquitetura barroca &eacute; observada principalmente em igrejas, catedrais e monast&eacute;rios. Isso ocorria para demonstrar a impon&ecirc;ncia da arte crist&atilde;. H&aacute; exemplos tamb&eacute;m em edif&iacute;cios particulares, especialmente mans&otilde;es urbanas ou rurais em uma clara demonstra&ccedil;&atilde;o do pensamento religioso. Tamb&eacute;m nesta &eacute;poca h&aacute; a cria&ccedil;&atilde;o de parques e jardins a circundar pr&eacute;dios residenciais importantes.</p>\r\n\r\n<p>Em consequ&ecirc;ncia da disposi&ccedil;&atilde;o desses edif&iacute;cios, o reordenamento urbano come&ccedil;a a exigir um planeamento ainda n&atilde;o existente. Para os arquitetos barrocos, os edif&iacute;cios eram uma esp&eacute;cie de escultura.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Caracter&iacute;sticas:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Extravag&acirc;ncia</li>\r\n	<li>\r\n	<p>Incomum e irregular</p>\r\n	</li>\r\n	<li>\r\n	<p>Uso do movimento</p>\r\n	</li>\r\n	<li>\r\n	<p>Proximidade do real</p>\r\n	</li>\r\n	<li>\r\n	<p>Aplica&ccedil;&atilde;o da curva em oposi&ccedil;&atilde;o &agrave; ideia est&aacute;tica dos pr&eacute;dios</p>\r\n	</li>\r\n	<li>\r\n	<p>As igrejas do per&iacute;odo barroco s&atilde;o marcadas por ab&oacute;badas, arcos e contrafortes</p>\r\n	</li>\r\n	<li>\r\n	<p>Tentativa de levar o observador a se imaginar no infinito</p>\r\n	</li>\r\n	<li>\r\n	<p>Efeitos cenogr&aacute;ficos teatrais</p>\r\n	</li>\r\n	<li>\r\n	<p>Mistura da pintura e da escultura</p>\r\n	</li>\r\n	<li>\r\n	<p>Manipula&ccedil;&atilde;o da luz</p>\r\n	</li>\r\n</ul>\r\n', '2019-11-22 17:06:15', '../assets/images/capas/basilica22112019170615.jpg', 2017312160),
(146, 'A Ditadura Militar no Brasil', '<p style=\"text-align:justify\">A&nbsp;ditadura militar no Brasil&nbsp;durou 21 anos, teve 5 mandatos&nbsp;militares&nbsp;e instituiu 16 atos institucionais &ndash; mecanismos legais que se sobrepunham &agrave;&nbsp;constitui&ccedil;&atilde;o. Nesse per&iacute;odo houve restri&ccedil;&atilde;o &agrave; liberdade, repress&atilde;o aos opositores do regime e censura. Antes de entender o per&iacute;odo militar brasileiro, &eacute; preciso compreender os eventos que levaram at&eacute; ele &ndash; os antecedentes do golpe militar de 1964.&nbsp;O primeiro momento &eacute; marcado por&nbsp;J&acirc;nio Quadro<a href=\"https://www.politize.com.br/presidentes-brasileiros-renunciaram/\" rel=\"noopener\" target=\"_blank\">s</a>&nbsp;&ndash; que assumiu a presid&ecirc;ncia em 1961 e nesse mesmo ano&nbsp;<strong>renunciou</strong>&nbsp;ao cargo. A partir disso, seu vice &ndash;&nbsp;<strong>Jo&atilde;o Goulart</strong>&nbsp;&ndash; foi quem assumiu seu lugar. A quest&atilde;o &eacute; que&nbsp;<strong>J&acirc;nio Quadros e Jo&atilde;o Goulart</strong>&nbsp;eram de partidos pol&iacute;ticos diferentes e tinham&nbsp;<strong>projetos opostos para o pa&iacute;s.&nbsp;</strong>O projeto de Jango &ndash; apelido por qual era conhecido o novo presidente &ndash; estava apoiado em&nbsp;<strong>&ldquo;reformas de base&rdquo;</strong>&nbsp;&ndash; como fiscal, administrativa, universit&aacute;ria e, principalmente, agr&aacute;ria. Al&eacute;m disso, o presidente era um representante&nbsp;trabalhista, do legado de&nbsp;Get&uacute;lio Vargas.</p>\r\n\r\n<p style=\"text-align:justify\">Assim, como mencionado, a&nbsp;<strong>reforma agr&aacute;ria</strong>&nbsp;era uma das principais propostas do governo Jango e tamb&eacute;m a que mais gerava pol&ecirc;mica. Afinal, era combatida pelos&nbsp;<strong>grandes latifundi&aacute;rios</strong>&nbsp;e por grande parte dos&nbsp;<strong>parlamentares&nbsp;</strong>no&nbsp;Congresso Nacional.</p>\r\n\r\n<p style=\"text-align:justify\">Assim, esse foi um momento de bastante efervesc&ecirc;ncia e&nbsp;<strong>polariza&ccedil;&atilde;o pol&iacute;tica</strong>&nbsp;entre a popula&ccedil;&atilde;o. Houve apoio de parte da popula&ccedil;&atilde;o para a derrubada do governo &ndash; principalmente dos setores mais&nbsp;conservadores&nbsp;da sociedade e de partes da classe m&eacute;dia. &Eacute; por esse motivo, inclusive, que muitas vezes o termo&nbsp;<strong>ditadura civil-militar</strong>&nbsp;&eacute; utilizado.</p>\r\n\r\n<p style=\"text-align:justify\">Vale lembrar ainda que eram tempos de&nbsp;Guerra Fria&nbsp;e havia medo de um suposto &ldquo;perigo&nbsp;comunista&rdquo;. Assim, no conflito que&nbsp;come&ccedil;ou logo ap&oacute;s o final da&nbsp;Segunda Guerra Mundial&nbsp;e foi respons&aacute;vel pela bipolariza&ccedil;&atilde;o ideol&oacute;gica &ndash; em que os&nbsp;<strong>Estados Unidos</strong>&nbsp;&ndash; defensores do capitalismo &ndash; e a&nbsp;<strong>Uni&atilde;o Sovi&eacute;tica</strong>&nbsp;&ndash; defensora do socialismo &ndash; disputavam hegemonia econ&ocirc;mica, pol&iacute;tica e militar no mundo.</p>\r\n\r\n<p style=\"text-align:justify\">Nesse cen&aacute;rio, os Estados Unidos, com medo da expans&atilde;o socialista &ndash; principalmente depois da Revolu&ccedil;&atilde;o Cubana &ndash; passou a intervir ativamente nos pa&iacute;ses da Am&eacute;rica Latina para impedir o crescimento das ideias consideradas comunistas. As&nbsp;ditaduras&nbsp;militares na regi&atilde;o foram ent&atilde;o mecanismos para frear esses movimentos e tanto no Brasil, quanto em outros pa&iacute;ses latino americanos, foram&nbsp;<strong>apoiadas pelos Estados Unidos.</strong></p>\r\n\r\n<p style=\"text-align:justify\">Em 2014,&nbsp;documentos liberados pelos Estados Unidos&nbsp;&ndash; e investigados pela Comiss&atilde;o Nacional da Verdade &ndash; revelaram que mais de 300 militares passaram uma temporada na Escola das Am&eacute;ricas (o instituto de guerra dos Estados Unidos no Panam&aacute;). L&aacute;, entre 1954 e 1996, os militares brasileiros tiveram aulas te&oacute;ricas e pr&aacute;ticas sobre tortura.</p>\r\n\r\n<p style=\"text-align:justify\">Al&eacute;m disso,&nbsp;grava&ccedil;&otilde;es liberadas pela Casa Branca&nbsp;das conversas entre o ex-presidente John Kennedy e o embaixador do Brasil no momento &ndash; Lincoln Gordon &ndash; comprovam o envolvimento estadunidense na ditadura militar brasileira.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><a class=\"modalDoc\" href=\"../assets/files/Constitucionalismo sob a ditadura.pdf\" class=\"modalDoc\" onclick=\"return false;\" onclick=\"return false;\"><strong><u>LEIA O LIVRO: &quot;CONSTITUCIONALISMO SOB A DITADURA</u><u>&quot; CLICANDO NESTE LINK</u></strong></a></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', '2019-11-22 17:24:14', '../assets/images/capas/ditadura22112019172414.jpg', 2017312160),
(147, 'História e Significado do Flamenco', '<p style=\"text-align:justify\">Roupas chamativas, m&uacute;sica, dan&ccedil;a atraente,&nbsp;<strong>castanhola</strong>,&nbsp;<strong>Espanha</strong>. Com essas palavras pode-se resumir&nbsp;<strong>o flamenco</strong>. Por tr&aacute;s desse pequeno resumo, essa t&iacute;pica&nbsp;<strong>dan&ccedil;a espanhola</strong>&nbsp;esconde uma hist&oacute;ria e um significado, n&atilde;o s&oacute; para o povo espanhol, mas tamb&eacute;m para os mouras, judeus e, principalmente, ciganos. O passado do flamenco &eacute; regado de dor, persegui&ccedil;&atilde;o e sofrimento. Fortemente influenciado pela cultura cigana, e com ra&iacute;zes na cultura mourisca e &aacute;rabe, o flamenco surgiu em uma fus&atilde;o dessas culturas em um momento hist&oacute;rico dif&iacute;cil para eles. Para aliviarem o seu sofrimento, refletiam na&nbsp;<strong>m&uacute;sica flamenca</strong>&nbsp;o esp&iacute;rito desesperado das lutas, esperan&ccedil;a, orgulho e festas daquela &eacute;poca.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Essa, at&eacute; ent&atilde;o, m&uacute;sica espanhola, consistia apenas no canto. Somente depois que os outros elementos, como a guitarra, palmas, sapateado, inclusive a castanhola e dan&ccedil;a, foram acrescentados, transformando-o tamb&eacute;m em uma dan&ccedil;a muito t&iacute;pica e apreciada por todos. Atualmente, diferente do passado, pode-se at&eacute; t&ecirc;-lo somente com dan&ccedil;a e toque (guitarra), sendo tudo muito marcante: express&atilde;o facial, m&atilde;os e sapateado. A&nbsp;<strong>roupa flamenca</strong>&nbsp;era composta por um vestido modesto, de maneira parecida como se vestiam as camponesas, al&eacute;m de usarem bijouterias ou pulseiras vistosas e uma flor no cabelo. Hoje, com a moderniza&ccedil;&atilde;o e a influ&ecirc;ncia francesa, pode-se perceber acess&oacute;rios e vestidos com cores bem vivas e atraentes. Muito se v&ecirc; do vermelho. Os vestidos s&atilde;o muito justos e com grandes babados nas pontas. O penteado tamb&eacute;m &eacute; fundamental para a composi&ccedil;&atilde;o do todo, deixando o conjunto mais completo.</p>\r\n\r\n<p style=\"text-align:justify\">Com seus altos e baixos, ele viveu sua &eacute;poca de ouro nos anos de 1869 e 1910, em que foram criados &quot;caf&eacute;s cantantes&quot;, onde as pessoas cantavam e dan&ccedil;avam ao som da&nbsp;<strong>m&uacute;sica flamenca</strong>. Com a fama destes locais, os guitarristas se solidificaram nesse meio, e tornaram-se essenciais na composi&ccedil;&atilde;o do mesmo, criando assim a atual&nbsp;<strong>guitarra flamenca</strong>. A sua hist&oacute;ria foi perdida com o tempo, j&aacute; que os ciganos tinham uma cultura bastante oral e, para completar, a persegui&ccedil;&atilde;o era muito intensa. Sendo assim, fica dif&iacute;cil dizer ao certo, qual a origem da palavra, que at&eacute; hoje ainda &eacute; meio confusa e sem uma defini&ccedil;&atilde;o concreta. Da mesma maneira, o local da sua dissemina&ccedil;&atilde;o tamb&eacute;m ainda &eacute; contestado. Por&eacute;m, a maioria afirma ter sido nos arredores de Sevilha, Jerez e C&aacute;diz. Outra curiosidade &eacute; que&nbsp;<strong>o flamenco espanhol</strong>&nbsp;n&atilde;o &eacute; considerado uma arte por todos. Alguns alegam que, por n&atilde;o conter uma raiz &uacute;nica, n&atilde;o pode ser considerado, por exemplo, uma dan&ccedil;a folcl&oacute;rica.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">O flamenco espanhol se divide em 3 categorias:&nbsp;<strong>Flamenco</strong>&nbsp;<strong>Jondo</strong>&nbsp;ou Antigo, que &eacute; o mais tradicional;&nbsp;<strong>Flamenco</strong>&nbsp;<strong>Cl&aacute;ssico</strong>, o mais moderno e que utiliza novas t&eacute;cnicas; e&nbsp;<strong>o Flamenco Contempor&acirc;neo</strong>, uma mistura dos outros dois j&aacute; citados , adicionando a eles o jazz e o fusion. Essas categorias se subdividem&nbsp;em palos. Os&nbsp;palos s&atilde;o estruturas r&iacute;tmicas caracter&iacute;sticas do flamenco.&nbsp;<strong>O flamenco no Brasil</strong>&nbsp;surgiu nos anos 50, quando os imigrantes espanh&oacute;is come&ccedil;aram a chegar no pa&iacute;s. Com mais de 4 gera&ccedil;&otilde;es de artistas de origem brasileira, ele ainda busca seu espa&ccedil;o no territ&oacute;rio, tendo ainda pouca visibilidade e apoio, mas com uma crescente aceita&ccedil;&atilde;o e dissemina&ccedil;&atilde;o. Fica evidente que o flamenco &eacute; a mais verdadeira e harm&ocirc;nica integra&ccedil;&atilde;o entre arte, cultura e teatralidade na Espanha. Ela, por si s&oacute;, contagia e faz lembrar de um passado distante, por&eacute;m marcante, de um povo que, para aliviar a dor, usou a m&uacute;sica como a mais bela forma de arte e desabafo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><iframe frameborder=\"0\" height=\"300\" scrolling=\"no\" src=\"https://www.youtube.com/embed/cm9IYSDxagc\" width=\"500\"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">Hoje o flamengo consegue sobreviver atrav&eacute;s de adapta&ccedil;&otilde;es art&iacute;sticas que o modernizaram para os dias atuais:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><iframe align=\"middle\" frameborder=\"0\" height=\"300\" scrolling=\"no\" src=\"https://www.youtube.com/embed/p_4coiRG_BI\" width=\"500\"></iframe></p>\r\n', '2019-11-24 11:19:48', '../assets/images/capas/flamenco24112019111948.jpg', 2017312160),
(148, 'Tudo sobre a Revolução Industrial: Causas, Impactos, Etapas, Marcos e Avanços. Trabalho Artesanal X Manufatura', '<p style=\"text-align:justify\">A&nbsp;<strong>Revolu&ccedil;&atilde;o industrial</strong>&nbsp;foi um conjunto de mudan&ccedil;as que aconteceram na Europa nos s&eacute;culos XVIII e XIX. A principal particularidade dessa revolu&ccedil;&atilde;o foi a substitui&ccedil;&atilde;o do trabalho artesanal pelo assalariado e com o uso das m&aacute;quinas. At&eacute; o final do s&eacute;culo XVIII a maioria da popula&ccedil;&atilde;o europeia vivia no campo e produzia o que consumia. De maneira artesanal o produtor dominava todo o processo produtivo. Apesar de a produ&ccedil;&atilde;o ser predominantemente artesanal, pa&iacute;ses como a Fran&ccedil;a e a Inglaterra, possu&iacute;am manufaturas. As&nbsp;<strong>manufaturas</strong>&nbsp;eram grandes oficinas onde diversos artes&atilde;os realizavam as tarefas manualmente, entretanto subordinados ao propriet&aacute;rio da manufatura.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">A Inglaterra foi precursora na Revolu&ccedil;&atilde;o Industrial devido a diversos fatores, entre eles: possuir uma rica burguesia, o fato do pa&iacute;s possuir a mais importante zona de livre com&eacute;rcio da Europa, o &ecirc;xodo rural e a localiza&ccedil;&atilde;o privilegiada junto ao mar o que facilitava a explora&ccedil;&atilde;o dos mercados ultramarinos. Como muitos empres&aacute;rios ambicionavam lucrar mais, o oper&aacute;rio era explorado sendo for&ccedil;ado a trabalhar at&eacute; 15 horas por dia em troca de um sal&aacute;rio baixo. Al&eacute;m disso, mulheres e crian&ccedil;as tamb&eacute;m eram obrigadas a trabalhar para sustentarem suas fam&iacute;lias. Diante disso, alguns trabalhadores se revoltaram com as p&eacute;ssimas condi&ccedil;&otilde;es de trabalho oferecidas, e come&ccedil;aram a sabotar as m&aacute;quinas, ficando conhecidos como &ldquo;<strong>os quebradores de m&aacute;quinas</strong>&ldquo;. Outros movimentos tamb&eacute;m surgiram nessa &eacute;poca com o objetivo de defender o trabalhador.<br />\r\nO trabalhador em raz&atilde;o deste processo perdeu o conhecimento de todo a t&eacute;cnica de fabrica&ccedil;&atilde;o passando a executar apenas uma etapa.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>A Primeira etapa da Revolu&ccedil;&atilde;o Industrial</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Entre 1760 a 1860, a&nbsp;<strong>Revolu&ccedil;&atilde;o Industrial</strong>&nbsp;ficou limitada, primeiramente, &agrave; Inglaterra. Houve o aparecimento de ind&uacute;strias de tecidos de algod&atilde;o, com o uso do tear mec&acirc;nico. Nessa &eacute;poca o aprimoramento das m&aacute;quinas a vapor contribuiu para a continua&ccedil;&atilde;o da Revolu&ccedil;&atilde;o.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>A Segunda Etapa da Revolu&ccedil;&atilde;o Industrial</strong></h2>\r\n\r\n<p style=\"text-align:justify\">A segunda etapa ocorreu no per&iacute;odo de 1860 a 1900, ao contr&aacute;rio da primeira fase, pa&iacute;ses como Alemanha, Fran&ccedil;a, R&uacute;ssia e It&aacute;lia tamb&eacute;m se industrializaram. O emprego do a&ccedil;o, a utiliza&ccedil;&atilde;o da energia el&eacute;trica e dos combust&iacute;veis derivados do petr&oacute;leo, a inven&ccedil;&atilde;o do motor a explos&atilde;o, da locomotiva a vapor e o desenvolvimento de produtos qu&iacute;micos foram as principais inova&ccedil;&otilde;es desse per&iacute;odo.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>A Terceira Etapa da Revolu&ccedil;&atilde;o Industrial</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Alguns historiadores t&ecirc;m considerado os avan&ccedil;os tecnol&oacute;gicos do s&eacute;culo XX e XXI como a terceira etapa da Revolu&ccedil;&atilde;o Industrial. O computador, o fax, a engenharia gen&eacute;tica, o celular seriam algumas das inova&ccedil;&otilde;es dessa &eacute;poca.</p>\r\n', '2019-11-24 11:53:11', '../assets/images/capas/063_original_7035-jpg24112019115311.jpg', 1517527),
(150, 'A Origem dos Esportes', '<p style=\"text-align:justify\">Voc&ecirc; tem alguma no&ccedil;&atilde;o de quando o Esporte surgiu? Pois &eacute;, realmente &eacute; dif&iacute;cil relatar uma data exata sobre tal surgimento. Dizem que o Esporte surgiu h&aacute; muitos e muitos anos, o que n&atilde;o nos permite apontar uma data t&atilde;o precisa para esse acontecimento. H&aacute; quem diz que desde a era dos seres primitivos j&aacute; ocorria &agrave; pr&aacute;tica do esporte, quando para sobreviver precisavam lutar, correr, saltar, lan&ccedil;ar objetos, praticar o arco e flecha, nadar, entre outras atividades as quais hoje possuem modalidades esportivas espec&iacute;ficas. Nessa mesma &eacute;poca relacionavam-se os esportes aos rituais e pr&aacute;ticas religiosas, os cultos aos deuses.<br />\r\n<br />\r\n<strong>Alguns ind&iacute;cios sobre o in&iacute;cio da realiza&ccedil;&atilde;o de algumas pr&aacute;ticas esportivas:</strong><br />\r\n<br />\r\nPor volta de 1850 a.C., foi descoberto no Egito, na Necr&oacute;pole de Beni-Hassan, um mural com imagens que mostravam a luta em v&aacute;rios movimentos. Na Irlanda ocorreram arremessos em 1830 a.C. e salto em altura em 1160 a.C. Vest&iacute;gios dos primeiros esquiadores s&atilde;o apontados na Noruega e dos primeiros remadores e pescadores na R&uacute;ssia.<br />\r\n<br />\r\n<strong>Outros importantes ind&iacute;cios s&atilde;o retratados por Duarte (2003, p. 13):</strong><br />\r\n<br />\r\nEm 1500 a.C., em Creta, praticava-se o pugilismo. Em 1300 a.C. a 800 a.C. j&aacute; havia o jogo da pelota. Homero, em 1200 a.C., faz versos para retratar os Jogos F&uacute;nebres, no Canto XXIII da Il&iacute;ada [&hellip;] Em 776 a.C. temos os Jogos Ol&iacute;mpicos gregos, com import&acirc;ncia local e regional, que depois passam a ser o pr&oacute;prio calend&aacute;rio, pois eram disputados de quatro em quatro anos. As primeiras &lsquo;corridas de fundo&rsquo;, com 4 mil metros e 164 cent&iacute;metros, s&atilde;o disputadas em 720 a.C. A luta e o pentatlo (corrida, disco, luta, salto em dist&acirc;ncia e dardo) est&atilde;o nos Jogos de 708 a.C. Em 648 a.C. entra o puligismo, e em 632 a.C. ocorrem as competi&ccedil;&otilde;es para juniores (16 a 18 anos) e as corridas de quadrigas.<br />\r\n<br />\r\nData-se que o profissionalismo no esporte foi considerado a partir de 580 a.C., onde ocorreu a institui&ccedil;&atilde;o de pr&ecirc;mios em dinheiro aos campe&otilde;es, tais campe&otilde;es recebiam premia&ccedil;&otilde;es de 500 dracmas e &acirc;nforas de &oacute;leo.<br />\r\n<br />\r\n&ldquo;De 75 d.C. a 83 d.C., o esporte ganhou mais destaque, e novas competi&ccedil;&otilde;es ocorreram na Gr&eacute;cia e em Roma&rdquo; (DUARTE, 2003, p. 14).<br />\r\n<br />\r\nEm 1336 e 1492 apresentam-se as not&iacute;cias iniciais sobre o alpinismo. Praticavam-se o sum&ocirc;, por volta de 754 a.D., nos templos Shinto. Em 1684 &eacute; conhecida a arena circular.<br />\r\n<br />\r\nAponta-se que o esqui surgiu na Finl&acirc;ndia e na Su&eacute;cia em 1771. Em 1603 a nata&ccedil;&atilde;o torna-se obrigat&oacute;ria no Jap&atilde;o.<br />\r\n<br />\r\nE finalmente, n&atilde;o deixar&iacute;amos de comentar sobre um dos esportes mais inspiradores para os brasileiros. N&atilde;o &eacute; t&atilde;o dif&iacute;cil adivinhar a que estamos nos referindo! Sim, isso mesmo, a nossa paix&atilde;o nacional, o Futebol. Veja alguns relatos que j&aacute; d&atilde;o in&iacute;cio a esse esporte.</p>\r\n\r\n<p style=\"text-align:justify\">Na China, em 2600 a.C. surge o kemari, uma inven&ccedil;&atilde;o do sr. Yang-Ts&eacute;. O kemari era composto por oito jogadores de cada lado em um campo quadrado de 14m separado por um fio de seda amarrado em duas estacas fincadas no ch&atilde;o. Os jogadores deviam passar a bola de 22 cm de di&acirc;metro, al&eacute;m das estacas, com os p&eacute;s, sem deixar a bola cair. A bola era preenchida com cabelos para que ficasse cheia. Pensa-se que o futebol surgiu a partir desse acontecimento, mas h&aacute; muitas d&uacute;vidas e pol&ecirc;micas.<br />\r\n<br />\r\nNa Gr&eacute;cia antiga havia um jogo disputado com bola, a bola era feita de bexiga de boi e revestida por uma capa de couro. Surgiu em 1488 o esporte chamado c&aacute;lcio florentino, considerado por muitos como o &ldquo;pai do futebol&rdquo;. Seu surgimento deu-se precisamente em 15 de fevereiro de 1488, na Pra&ccedil;a Santa Croce, de Floren&ccedil;a. Era composto por duas equipes, Brancos X Verdes, e cada equipe possu&iacute;a mais de 25 jogadores, com defensores, passadores e corredores. H&aacute; relatos de que em 1660 iniciaram os regulamentos no futebol, como o n&uacute;mero de participantes no jogo e o tamanho do terreno (80 m x 120 m). Tamb&eacute;m surgem os gols, inicialmente chamados de arcos. O pioneirismo do futebol &eacute; disputado entre Franceses e Ingleses, mas h&aacute; quem afirma que a organiza&ccedil;&atilde;o &eacute; inglesa.<br />\r\n<br />\r\nDe acordo com Duarte (2003, p. 214 &ndash; 215) &ldquo;O jogo come&ccedil;ou a ser organizado h&aacute; 150 anos [&hellip;] Em 1868 surge a figura do &aacute;rbitro [&hellip;] Em 1891 aparecem as redes&rdquo;.<br />\r\n<br />\r\n&ldquo;Em 1907 temos a lei do impedimento, alterada em 1926.O futebol como &eacute; hoje conhecido chegou &agrave; Fran&ccedil;a em 1872, &agrave; Su&iacute;&ccedil;a, em 1879, &agrave; B&eacute;lgica, em 1880; &agrave; Alemanha, Dinamarca e Holanda, em 1889; &agrave; It&aacute;lia em 1893; aos pa&iacute;ses da Europa Central, em 1900. Em 1904, surge a Federa&ccedil;&atilde;o de Futebol Association (FIFA)&rdquo;. (DUARTE, 2003, p. 215).<br />\r\n<br />\r\nHistoriadores relatam que o futebol surgiu no Brasil atrav&eacute;s dos marinheiros de navios ingleses, holandeses e franceses que na segunda metade do s&eacute;culo XIX vinham ao nosso pa&iacute;s. &ldquo;Eles jogavam em nossas praias, durante as paradas dos seus navios, iam embora e levavam a bola&rdquo;. (DUARTE, 2003, p. 215). Outros historiadores informam que foi em Jundia&iacute;, em 1882, que o futebol come&ccedil;ou a ser jogado no Brasil, mais precisamente pelos funcion&aacute;rios da S&atilde;o Paulo Railway, e na mesma &eacute;poca funcion&aacute;rios da Estrada de Ferro Leopoldina come&ccedil;am a jogar o futebol no Rio de Janeiro.<br />\r\n<br />\r\n<strong>Mas ent&atilde;o surge uma d&uacute;vida, no Brasil, qual foi o primeiro esporte moderno praticado?</strong><br />\r\n<br />\r\nH&aacute; relatos de que o primeiro esporte moderno praticado em nosso pa&iacute;s foi o turfe, na cidade do Rio de Janeiro. Podemos considerar o turfe, basicamente, como as corridas de cavalos. O turfe data seu in&iacute;cio em meados de 1810, e era organizado pelos comerciantes ingleses, na Praia de Botafogo.<br />\r\n<br />\r\nPor&eacute;m, antes disso, bem antes disso, esportes diversos j&aacute; eram praticados pelos povos ind&iacute;genas, como arco e flecha, canoagem, nata&ccedil;&atilde;o, corridas, entre v&aacute;rios outros. &Eacute; not&oacute;rio que na &eacute;poca n&atilde;o eram considerados atividades esportivas, visto que sua utiliza&ccedil;&atilde;o era pela necessidade e utilitarismo.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>No Brasil Imperial (1822 &ndash; 1889) surge a pr&aacute;tica da capoeira, atividade trazida pelos africanos</strong><br />\r\n<br />\r\nNa segunda metade do s&eacute;culo XIX, os alem&atilde;es, n&atilde;o s&oacute; apresentaram, mas trouxeram a gin&aacute;stica ao nosso pa&iacute;s. Fundaram sociedades de gin&aacute;stica, em 1888 a Uni&atilde;o de Gin&aacute;stica Alem&atilde;, em S&atilde;o Paulo e em 1892 a Sociedade Turnerbund, em Porto Alegre. A Miss&atilde;o Militar Francesa participou, em 1909, na forma&ccedil;&atilde;o da primeira escola de Educa&ccedil;&atilde;o F&iacute;sica no Brasil, a For&ccedil;a P&uacute;blica de S&atilde;o Paulo.<br />\r\n<br />\r\nEm 1955, o Tiro com Arco chegou ao Brasil trazido pelo comiss&aacute;rio de Voo da Panair do Brasil, Sr. Adolpho Porta, quando em Lisboa, Portugal, conheceu o marceneiro Arlindo, que possu&iacute;a um stand de tiro com arco. Arlindo, vendo Sr. Adolpho interessado no esporte, convidou-o a ser s&oacute;cio do Gl&oacute;ria Atl&eacute;tico Clube, local onde praticava o Tiro. Em 1991, foi criada a Confedera&ccedil;&atilde;o Brasileira de Tiro com Arco.<br />\r\n<br />\r\nO remo foi considerado o principal esporte brasileiro na segunda metade do s&eacute;culo XIX at&eacute; o in&iacute;cio do s&eacute;culo XX, surgindo a cria&ccedil;&atilde;o de diversos clubes no Rio de Janeiro, em S&atilde;o Paulo e no Rio Grande do Sul.<br />\r\n<br />\r\nTamb&eacute;m nessa mesma &eacute;poca introduziram no Brasil a nata&ccedil;&atilde;o competitiva, o basquete, o t&ecirc;nis, a esgrima, e o j&aacute; citado futebol. Interessante citar um dos marcos do futebol: a ruptura do futebol elitizado visto o alcance da primeira divis&atilde;o do futebol carioca pelo Vasco da Gama com uma equipe formada por alguns jogadores negros.<br />\r\n<br />\r\nInstitucionalmente falando, a hist&oacute;ria do esporte brasileiro iniciou em 1937, pela cria&ccedil;&atilde;o, atrav&eacute;s da Lei n&ordm; 378 de 13/03/1937, da Divis&atilde;o de Educa&ccedil;&atilde;o F&iacute;sica do Minist&eacute;rio da Educa&ccedil;&atilde;o e Cultura, onde teve como diretores: Major Jo&atilde;o Barbosa Leite, Coronel Caio M&aacute;rio de Noronha Miranda, Professor Alfredo Colombo, General Ant&ocirc;nio Pires de Castro Filho, Coronel Genival de Freitas e Coronel Arthur Orlando da Costa Ferreira.<br />\r\n<br />\r\nNo ano de 1970, tal divis&atilde;o foi transformada no Departamento de Educa&ccedil;&atilde;o F&iacute;sica e Desportos do Minist&eacute;rio da Educa&ccedil;&atilde;o e Cultura, compondo sua dire&ccedil;&atilde;o o Coronel Eric Tinoco Marques e o Coronel Osny Vasconcellos.<br />\r\n<br />\r\nEm 1978 o departamento transformou-se em Secretaria de Educa&ccedil;&atilde;o F&iacute;sica e Desporto, ainda pertencente ao Minist&eacute;rio da Educa&ccedil;&atilde;o. Permaneceu assim at&eacute; 1989, quando ent&atilde;o ocorreu, em 1990 sob presid&ecirc;ncia de Fernando Collor de Melo, a extin&ccedil;&atilde;o da Secretaria ligada ao Minist&eacute;rio da Educa&ccedil;&atilde;o e cria&ccedil;&atilde;o da Secretaria de Desportos da Presid&ecirc;ncia da Rep&uacute;blica. Esta secretaria teve como secret&aacute;rios Arthur Antunes Coimbra &ndash; Zico, de mar&ccedil;o de 1991 a abril de 1991 e Bernad Rajzman, de abril de 1991 a outubro de 1992.<br />\r\n<br />\r\nEm 1992, ap&oacute;s a sa&iacute;da de Collor da presid&ecirc;ncia, o v&iacute;nculo do esporte voltou ao Minist&eacute;rio da Educa&ccedil;&atilde;o, com a Secretaria de Desportos, possuindo os seguintes secret&aacute;rios: M&aacute;rcio Baroukel de Souza, de 1992 a 1994, e Marcos Andr&eacute; da Costa Berenguer, de 1994 a 1995.<br />\r\n<br />\r\nEm 1955 foi criado o Minist&eacute;rio de Estado Extraordin&aacute;rio do Esporte, pelo ent&atilde;o presidente Fernando Henrique Cardoso, e &agrave; Secretaria de Desporto do Minist&eacute;rio da Educa&ccedil;&atilde;o coube a presta&ccedil;&atilde;o do apoio t&eacute;cnico administrativo.<br />\r\n<br />\r\nNo m&ecirc;s de mar&ccedil;o de 1955, a secretaria transforma-se no Instituto Nacional de Desenvolvimento do Desporto (INDESP), passando a ser subordinado ao Minist&eacute;rio Extraordin&aacute;rio do Esporte.<br />\r\n<br />\r\nEm 31 de dezembro de 1988 cria-se o Minist&eacute;rio do Esporte e Turismo, ainda por Fernando Henrique Cardoso, atrav&eacute;s da Medida Provis&oacute;ria n&ordm; 1.794-8. O INDESP passa ent&atilde;o a subordinar-se a esse novo Minist&eacute;rio.<br />\r\n<br />\r\nEm 2000 surge a Secretaria Nacional de Esporte, promovendo a extin&ccedil;&atilde;o do INDESP. Em 2003, o presidente Luiz In&aacute;cio Lula da Silva separa o Minist&eacute;rio do Esporte e Turismo, o esporte passa a ter um minist&eacute;rio pr&oacute;prio, assumido pelo deputado federal Agnelo Queiroz, que posteriormente foi substitu&iacute;do, em 2006, pelo secret&aacute;rio executivo, Orlando Silva Junior. Em 2011 quem toma a posse &eacute; o ministro Aldo Rebelo.</p>\r\n', '2019-11-24 12:02:21', '../assets/images/capas/139052-004-B14ACD7624112019120221.jpg', 1517527),
(151, 'Future Continuous', '<p style=\"text-align:justify\">O&nbsp;<em>Future Continuous or Progressive</em>&nbsp;(Futuro Cont&iacute;nuo ou Progressivo) &eacute; um tempo verbal usado para&nbsp;<strong>indicar a&ccedil;&otilde;es que estar&atilde;o ocorrendo no futuro</strong>. Ou seja, ele descreve um fato que acontecer&aacute; num momento espec&iacute;fico no futuro. O future continuous &eacute; comumente usado nas suposi&ccedil;&otilde;es, avisos, perguntas ou falas sobre planos para o futuro e ainda, para indicar promessas. Por ser um tempo verbal que expressa a&ccedil;&otilde;es futuras, muitas vezes &eacute; acompanhado por express&otilde;es de tempo.</p>\r\n\r\n<p style=\"text-align:justify\">As mais utilizadas s&atilde;o: tomorrow (amanh&atilde;); tomorrow morning (amanh&atilde; de manh&atilde;); next week (pr&oacute;xima semana); next month (pr&oacute;ximo m&ecirc;s); next year (pr&oacute;ximo ano), etc.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3>Forma&ccedil;&atilde;o do Future Continuous</h3>\r\n\r\n<p>O Future Continuous &eacute; formado pelo simple future do verbo to be (will be) + ger&uacute;ndio (-ing) do verbo principal.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Forma Afirmativa (<em>Affirmative</em>&nbsp;<em>Form</em>)</h3>\r\n\r\n<p>Para a forma&ccedil;&atilde;o de frases afirmativas no future continuous segue-se o padr&atilde;o de constru&ccedil;&atilde;o abaixo:</p>\r\n\r\n<p style=\"text-align:center\"><strong>Sujeito+simple future do verbo to be (will be)+verbo principal com &ndash;ing+ complemento</strong></p>\r\n\r\n<p><strong>Exemplo</strong>: You will be reading in the library. (Voc&ecirc; estar&aacute; lendo na biblioteca)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Forma Negativa (<em>Negative</em>&nbsp;<em>Form</em>)</h3>\r\n\r\n<p>Para construir frases negativas no future continuous acrescenta-se o &ldquo;not&rdquo; ap&oacute;s o auxiliar &ldquo;will&rdquo;:</p>\r\n\r\n<p style=\"text-align:center\"><strong>Sujeito+ verbo auxiliar will + not+to be+verbo principal com &ndash;ing+ complemento</strong></p>\r\n\r\n<p><strong>Exemplo</strong>: You will not be reading in the library. (Voc&ecirc; n&atilde;o estar&aacute; lendo na biblioteca)</p>\r\n\r\n<p><strong>Obs</strong>: Lembre-se que o verbo auxiliar e o not podem aparecer na forma contra&iacute;da:</p>\r\n\r\n<p style=\"text-align:center\">Will+not: W&rsquo;ont</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h3>Forma Interrogativa (<em>Interrogative</em>&nbsp;<em>Form</em>)</h3>\r\n\r\n<p>Para construir perguntas com o future continuous o verbo auxiliar will vem antes do sujeito e no in&iacute;cio da frase:</p>\r\n\r\n<p style=\"text-align:center\"><strong>Verbo auxiliar will+sujeito+verbo to be+verbo principal com &ndash;ing+complemento</strong></p>\r\n\r\n<p><strong>Exemplo</strong>: Will you be reading in the library? (Voc&ecirc; estar&aacute; lendo na biblioteca?)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Future Continuous x Future Perfect</h2>\r\n\r\n<p>O uso dos tempos futuros no ingl&ecirc;s pode gerar muita confus&atilde;o. Confira abaixo as diferen&ccedil;as entre eles:</p>\r\n\r\n<p><strong>Future Continuous</strong>: &eacute; usado para indicar uma a&ccedil;&atilde;o ou evento que vai acontecer num momento do futuro. &Eacute; formado pelo simple future do verbo to be (will be) + ger&uacute;ndio (-ing) do verbo principal.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Exemplos:</p>\r\n\r\n<ul>\r\n	<li><strong>Affirmative Form</strong>: I will be running in the lake. (Eu estarei correndo no lago)</li>\r\n	<li><strong>Negative Form</strong>: I will not be running in the lake. (Eu n&atilde;o estarei correndo no lago)</li>\r\n	<li><strong>Interrogative Form</strong>: Will I be running in the lake? (Eu estarei correndo no lago?)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Future Perfect</strong>: &eacute; usado para indicar que algo vai ter terminado num momento do futuro. &Eacute; formado pelo verbo auxiliar to have no simple future (will have) + o partic&iacute;pio do verbo principal.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Exemplos:</p>\r\n\r\n<ul>\r\n	<li><strong>Affirmative Form</strong>: I will have run in the lake. (Eu correrei no lago)</li>\r\n	<li><strong>Negative Form</strong>: I will not have run in the lake (Eu n&atilde;o correrei no lago)</li>\r\n	<li><strong>Interrogative Form</strong>: Will I have run in the lake? (Eu correrei no lago?)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Future Perfect Continuous</h2>\r\n\r\n<p>Al&eacute;m do Future Perfect, h&aacute; o&nbsp;Future Perfect Continuous&nbsp;(Futuro Perfeito Cont&iacute;nuo). Esse tempo verbal, expressa a continua&ccedil;&atilde;o de a&ccedil;&otilde;es que ser&atilde;o terminadas em determinado tempo no futuro.</p>\r\n\r\n<p>&Eacute; formado pelo verbo to have (will have) + verbo to be (been) conjugado no past perfect (passado perfeito) + ger&uacute;ndio (-ing) do verbo principal.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Exemplos:</p>\r\n\r\n<ul>\r\n	<li><strong>Affirmative Form</strong>: She will have been running in the lake. (Ela estar&aacute; correndo no lago)</li>\r\n	<li><strong>Negative Form</strong>: She will not have been running in the lake. (Ela n&atilde;o estar&aacute; correndo no lago)</li>\r\n	<li><strong>Interrogative Form</strong>: Will she have been running in the lake. (Ela estar&aacute; correndo no lago?)</li>\r\n</ul>\r\n', '2019-11-24 12:08:36', '../assets/images/capas/AdobeStock_113126262-Converted_800x53324112019120836.jpg', 1517527),
(152, 'Romantismo: O que foi?', '<p style=\"text-align:justify\">O&nbsp;<strong>Romantismo&nbsp;</strong>foi um movimento art&iacute;stico que surgiu na Europa no s&eacute;culo XVIII e durou at&eacute; meados do s&eacute;culo XIX. Ele influenciou a literatura, a pintura, a m&uacute;sica e a arquitetura. Oposto ao classicismo, racionalismo e Iluminismo, esse movimento chegou ao Brasil em finais do s&eacute;culo XVIII.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">Contexto Hist&oacute;rico</h3>\r\n\r\n<p style=\"text-align:justify\">Como escola liter&aacute;ria, as bases do sentimentalismo rom&acirc;ntico e do escapismo pelo suic&iacute;dio foram estabelecidas pelo romance &quot;<em>Os sofrimentos do jovem Werther</em>&quot;, de Goethe, publicado na Alemanha em 1774.</p>\r\n\r\n<p style=\"text-align:justify\">Na Inglaterra, o Romantismo se manifesta nos primeiros anos do s&eacute;culo XIX, com destaque para a poesia ultra-rom&acirc;ntica de&nbsp;Lord&nbsp;Byron&nbsp;e para o romance hist&oacute;rico&nbsp;<em>Ivanho&eacute;</em>, de Walter Scott. Tamb&eacute;m figuram entre as primeiras obras do in&iacute;cio da revolu&ccedil;&atilde;o rom&acirc;ntica na Europa os livros&nbsp;<em>Manon Lescut</em>, do &aacute;rabe Pr&eacute;vost (1731), e a&nbsp;<em>Hist&oacute;ria de Tom Joses</em>, de Henry Fielding (1749).</p>\r\n\r\n<p style=\"text-align:justify\">O romance, contudo, j&aacute; era utilizado no Imp&eacute;rio Romano, cuja palavra&nbsp;<em>romano&nbsp;</em>era aplicada para designar as l&iacute;nguas usadas pelos povos sob o seu dom&iacute;nio. Tais idiomas eram, na verdade, uma forma popular do latim. As composi&ccedil;&otilde;es de cunho popular e folcl&oacute;rico escritas em latim vulgar, em prosa ou em verso e que relatavam fantasias e aventuras, tamb&eacute;m eram chamadas de romance. E foi no s&eacute;culo XVIII, que tomou o sentido atual, ap&oacute;s passar pelas formas de &quot;romance de cavalaria, romance sentimental, romance pastoral&quot;, na Europa. O romance pode ser considerado o sucessor da&nbsp;epopeia.</p>\r\n\r\n<h3 style=\"text-align:justify\">&nbsp;</h3>\r\n\r\n<h3 style=\"text-align:justify\">Principais Caracter&iacute;sticas</h3>\r\n\r\n<p style=\"text-align:justify\">Na literatura, as principais caracter&iacute;sticas do romantismo s&atilde;o:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Oposi&ccedil;&atilde;o ao modelo cl&aacute;ssico;</li>\r\n	<li style=\"text-align:justify\">Estrutura do texto em prosa, longo;</li>\r\n	<li style=\"text-align:justify\">Desenvolvimento de um n&uacute;cleo central;</li>\r\n	<li style=\"text-align:justify\">Narrativa ampla refletindo uma sequ&ecirc;ncia de tempo;</li>\r\n	<li style=\"text-align:justify\">O indiv&iacute;duo passa a ser o centro das aten&ccedil;&otilde;es;</li>\r\n	<li style=\"text-align:justify\">Surgimento de um p&uacute;blico consumidor (folhetim);</li>\r\n	<li style=\"text-align:justify\">Uso de versos livres e versos brancos;</li>\r\n	<li style=\"text-align:justify\">Exalta&ccedil;&atilde;o do nacionalismo, da natureza e da p&aacute;tria;</li>\r\n	<li style=\"text-align:justify\">Idealiza&ccedil;&atilde;o da sociedade, do amor e da mulher;</li>\r\n	<li style=\"text-align:justify\">Cria&ccedil;&atilde;o de um her&oacute;i nacional;</li>\r\n	<li style=\"text-align:justify\">Sentimentalismo e supervaloriza&ccedil;&atilde;o das emo&ccedil;&otilde;es pessoais;</li>\r\n	<li style=\"text-align:justify\">Subjetivismo e egocentrismo;</li>\r\n	<li style=\"text-align:justify\">Saudades da inf&acirc;ncia;</li>\r\n	<li style=\"text-align:justify\">Fuga da realidade.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">Oposi&ccedil;&atilde;o ao Cl&aacute;ssico</h3>\r\n\r\n<p style=\"text-align:justify\">No in&iacute;cio, todos os movimentos em oposi&ccedil;&atilde;o ao cl&aacute;ssico eram considerados rom&acirc;nticos. Dessa maneira, os modelos da Antiguidade Cl&aacute;ssica foram substitu&iacute;dos pelos da Idade M&eacute;dia quando surgiu a burguesia.&nbsp;A arte, que antes era de car&aacute;ter nobre e erudita, passa a valorizar o folcl&oacute;rico e o nacional. Ela extrapola as barreiras impostas pela Corte e come&ccedil;a a ganhar a aten&ccedil;&atilde;o do povo. A arte rom&acirc;ntica, ao romper as muralhas da Corte e ganhar as ruas, liberta-se das exig&ecirc;ncias dos nobres que pagavam sua produ&ccedil;&atilde;o e passa a ter um p&uacute;blico an&ocirc;nimo. &Eacute; o surgimento do p&uacute;blico consumidor, impulsionado no Brasil pelo&nbsp;<em>folhetim</em>, uma literatura mais acess&iacute;vel. Na prosa, o aspecto formal do Classicismo &eacute; deixado de lado. O mesmo ocorre com a poesia, com os&nbsp;versos livres, sem m&eacute;trica e sem estrofa&ccedil;&atilde;o. A poesia tamb&eacute;m &eacute; caracterizada pelo&nbsp;verso branco, sem rima.</p>\r\n', '2019-11-24 12:15:14', '../assets/images/capas/img_romantismo_o_que_e_e_como_surgiu_20059_60024112019121514.jpg', 1517527),
(153, 'Recursividade em PHP', '<p style=\"text-align:justify\">Ainda falando de fun&ccedil;&otilde;es, existe um recurso chamado recursividade, este nome &eacute; dado quando ocorre uma chamada de determinada fun&ccedil;&atilde;o a ela mesma, isso ocorre at&eacute; que determinada condi&ccedil;&atilde;o seja atingida. Antes de continuarmos, a sugest&atilde;o de solu&ccedil;&atilde;o para o exerc&iacute;cio proposto no post anterior:</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://gist.github.com/RodriAndreotti/7601ac3092062413af55c83442e2365b\" rel=\"noopener\" target=\"_blank\">https://gist.github.com/RodriAndreotti/7601ac3092062413af55c83442e2365b</a></p>\r\n\r\n<p style=\"text-align:justify\">Funciona de forma semelhante a um la&ccedil;o de repeti&ccedil;&atilde;o, por&eacute;m a recurs&atilde;o tem um custo computacional mais elevado, ou seja, utiliza mais processamento e gasta mais tempo para ser executado, que um la&ccedil;o&nbsp;<em>while</em>&nbsp;(itera&ccedil;&atilde;o ou la&ccedil;o de repeti&ccedil;&atilde;o), isso ocorre devido a necessidade de a fun&ccedil;&atilde;o manter seu estado anterior para poder continuar de onde parou quando chamou novamente a fun&ccedil;&atilde;o.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Todo problema computacional que fa&ccedil;a uso de uma fun&ccedil;&atilde;o recursiva pode ser substitu&iacute;do por um la&ccedil;o de repeti&ccedil;&atilde;o, por&eacute;m existem problemas computacionais que s&atilde;o basicamente recursivos por defini&ccedil;&atilde;o, por exemplo, uma &aacute;rvore de dados (que &eacute; uma estrutura de dados muito importante em programa&ccedil;&atilde;o). Vale a pena uma an&aacute;lise mais aprofundada do problema em foco para chegar a uma conclus&atilde;o se o uso de uma fun&ccedil;&atilde;o recursiva seria mais vi&aacute;vel que uma itera&ccedil;&atilde;o,&nbsp;este post&nbsp;do Stackoverflow Brasil tr&aacute;s uma discuss&atilde;o muito interessante sobre o tema.</p>\r\n\r\n<p style=\"text-align:justify\">Existem rotinas mais corriqueiras, onde a recursividade pode ser &uacute;til, a constru&ccedil;&atilde;o de um menu com n&iacute;veis infinitos vindo do banco de dados, por exemplo, a ordena&ccedil;&atilde;o de dados dentro de um array com subarrays ou objetos ou at&eacute; mesmo o c&aacute;lculo de um fatorial. Tomando o exemplo do c&aacute;lculo de um fatorial, este &eacute; por defini&ccedil;&atilde;o recursivo, veja a regra de neg&oacute;cio:</p>\r\n\r\n<p style=\"text-align:justify\">Suponhamos que precisemos do valor fatorial de 4!</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">Condi&ccedil;&atilde;o de parada</h3>\r\n\r\n<p style=\"text-align:justify\">&Eacute; importante tamb&eacute;m ter definido de forma bem clara a condi&ccedil;&atilde;o para que esta fun&ccedil;&atilde;o deixe de ser executada, caso contr&aacute;rio &eacute; poss&iacute;vel que entremos em um loop infinito e causemos uma parada do sistema com um erro fatal, ou, dependendo das configura&ccedil;&otilde;es do servidor web, travemos o servidor. No exemplo acima, conseguimos notar que a fun&ccedil;&atilde;o s&oacute; chama a si mesma novamente caso a vari&aacute;vel $numFatorial seja maior que 1, ent&atilde;o, quando a vari&aacute;vel atinge o valor 1, a fun&ccedil;&atilde;o para de ser executada e o valor &eacute; retornado.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">Considera&ccedil;&otilde;es finais</h3>\r\n\r\n<p style=\"text-align:justify\">Outra coisa a se levar em considera&ccedil;&atilde;o &eacute; o custo computacional para a execu&ccedil;&atilde;o tanto das itera&ccedil;&otilde;es quanto das fun&ccedil;&otilde;es recursivas, pois apesar de ambos conseguirem atingir o mesmo resultado, em determinados casos &eacute; mais vi&aacute;vel o uso de uma fun&ccedil;&atilde;o recursiva, e em outros &eacute; mais vi&aacute;vel a itera&ccedil;&atilde;o.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Este conceito tamb&eacute;m poder&aacute; sem aplicado mais adiante quando estivermos trabalhando com orienta&ccedil;&atilde;o a objetos. Espero que este post tenha esclarecido um pouco o uso da recursividade.</p>\r\n', '2019-11-24 12:23:11', '../assets/images/capas/1_appBwh6_RtvocVxwqpplHA24112019122311.jpeg', 5547982);
INSERT INTO `conteudo` (`idConteudo`, `titulo`, `conteudo`, `dataPostagem`, `fotoCapa`, `fk_cont_idUsuario`) VALUES
(154, 'Condutores e Isolantes', '<p>Condutores e isolantes s&atilde;o materiais el&eacute;tricos que se comportam de maneiras opostas no que respeita &agrave; passagem de corrente el&eacute;trica. Enquanto os condutores permitem a movimenta&ccedil;&atilde;o dos el&eacute;trons, os isolante dificultam essa movimenta&ccedil;&atilde;o, ou seja, a passagem da eletricidade. &Eacute; o mesmo que dizer que os condutores conduzem as cargas, ou facilitam, a sua passagem e que os isolantes a isolam. Isso acontece em decorr&ecirc;ncia da estrutura at&ocirc;mica das subst&acirc;ncias, ou melhor, dos el&eacute;trons que os materiais apresentam na sua&nbsp;camada de val&ecirc;ncia. A camada de val&ecirc;ncia &eacute; aquela que fica mais distante do n&uacute;cleo at&ocirc;mico.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Condutores</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nos materiais condutores, as cargas el&eacute;tricas se movimentam com mais liberdade em fun&ccedil;&atilde;o dos el&eacute;trons livres presentes na sua camada de val&ecirc;ncia.</p>\r\n\r\n<p>A liga&ccedil;&atilde;o dos el&eacute;trons livres com o n&uacute;cleo at&ocirc;mico &eacute; bastante fraca. Assim, esses el&eacute;trons t&ecirc;m tend&ecirc;ncia para serem doados, movimentam-se e espalham-se facilitando a passagem da eletricidade.</p>\r\n\r\n<p>S&atilde;o exemplos de condutores el&eacute;tricos os metais em geral, tais como cobre, ferro, ouro e prata.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3 style=\"text-align:center\"><strong>Tipos de condutores</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>S&oacute;lidos</strong>&nbsp;- tamb&eacute;m chamados de condutores met&aacute;licos, caracterizam-se pelo movimento dos el&eacute;trons livres e pela forte tend&ecirc;ncia de doar el&eacute;trons;</li>\r\n	<li><strong>L&iacute;quidos</strong>&nbsp;- tamb&eacute;m chamados de condutores eletrol&iacute;ticos, caracterizam-se pelo movimento de cargas positivas (c&aacute;tions) e negativas (&acirc;nions). Essa movimenta&ccedil;&atilde;o, em sentidos opostos, cria a corrente el&eacute;trica;</li>\r\n	<li><strong>Gasosos</strong>&nbsp;- tamb&eacute;m chamados de condutores de terceira classe, caracterizam-se pelo movimento de c&aacute;tions e &acirc;nions. Mas, ao contr&aacute;rio dos condutores l&iacute;quidos, a energia &eacute; produzida atrav&eacute;s do choque entre as cargas e n&atilde;o de forma isolada.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Isolantes</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nos materiais isolantes, tamb&eacute;m chamados de diel&eacute;tricos, verifica-se a aus&ecirc;ncia ou pouca presen&ccedil;a de el&eacute;trons livres. Isso faz com que os el&eacute;trons dos isolantes estejam fortemente ligados ao n&uacute;cleo, o que inibe a sua movimenta&ccedil;&atilde;o. S&atilde;o exemplos de isolante el&eacute;tricos: borracha, isopor, l&atilde;, madeira, pl&aacute;stico e papel, v&aacute;cuo, vidro.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Semicondutores</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Os materiais semicondutores s&atilde;o aqueles que podem se comportam como um condutor ou como um isolante mediante as condi&ccedil;&otilde;es f&iacute;sicas. Os exemplos mais comuns de semicondutores s&atilde;o sil&iacute;cio e o germ&acirc;nio.</p>\r\n', '2019-11-24 12:35:58', '../assets/images/capas/images24112019123558.jpg', 5547982),
(155, 'Classificação dos Triângulos', '<p>Tri&acirc;ngulo &eacute; um pol&iacute;gono de tr&ecirc;s lados e tr&ecirc;s &acirc;ngulos. H&aacute; sete tipos de tri&acirc;ngulos e sua classifica&ccedil;&atilde;o depende da disposi&ccedil;&atilde;o dos &acirc;ngulos podendo ser: is&oacute;sceles, equil&aacute;tero, escaleno, ret&acirc;ngulo, obtuso, agudo ou equi&acirc;ngulo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Propriedades do Tri&acirc;ngulo</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Os tri&acirc;ngulos s&atilde;o compostos por tr&ecirc;s v&eacute;rtices;</li>\r\n	<li>A base pode ser qualquer um dos lados para o c&aacute;lculo da &aacute;rea do tri&acirc;ngulo. Quando &eacute; um tri&acirc;ngulo is&oacute;sceles, a base pode ser considerada o lado desigual;</li>\r\n	<li>A altura representa a perpendicular a partir do v&eacute;rtice oposto;</li>\r\n	<li>Como existem tr&ecirc;s bases poss&iacute;veis, existem tamb&eacute;m tr&ecirc;s alturas poss&iacute;veis;</li>\r\n	<li>A mediana de um tri&acirc;ngulo &eacute; a linha a partir do v&eacute;rtice para o ponto m&eacute;dio do lado oposto;</li>\r\n	<li>As tr&ecirc;s medianas intersectam-se em um &uacute;nico ponto denominado centro do tri&acirc;ngulo;</li>\r\n	<li>O lado mais curto &eacute; sempre o oposto ao menor &acirc;ngulo interior;</li>\r\n	<li>O lado mais longo &eacute; sempre oposto ao maior &acirc;ngulo interior.</li>\r\n</ul>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>Propriedades comuns a todos os tri&acirc;ngulos</h2>\r\n\r\n<ul>\r\n	<li>A soma dos &acirc;ngulos internos de um tri&acirc;ngulo sempre somam 180&ordm;;</li>\r\n	<li>A soma dos &acirc;ngulos externos sempre resultam em 360&ordm;;</li>\r\n	<li>As v&eacute;rtices do tri&acirc;ngulo s&atilde;o representadas por letras mai&uacute;sculas, A, B, e C. J&aacute; os lados s&atilde;o representados por letras min&uacute;sculas, a, b, c.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Tipos de Tri&acirc;ngulo</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Os tri&acirc;ngulos podem ser classificados de duas formas: pelos lados e pelos &acirc;ngulos internos. Independente da classifica&ccedil;&atilde;o, os tri&acirc;ngulos podem ser mais de um tipo ao mesmo tempo. Por exemplo, um tri&acirc;ngulo escaleno cujo &acirc;ngulo reto interior mede 90&ordm; pode ser chamado de tri&acirc;ngulo ret&acirc;ngulo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4 style=\"text-align:center\"><strong>Tri&acirc;ngulo Is&oacute;sceles</strong></h4>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"../assets/images//uploads/images.jpg\" style=\"height:212px; width:200px\" /></p>\r\n\r\n<p style=\"text-align:center\">Tem dois lados iguais e um diferente. O lado desigual &eacute;, em geral, utilizado como refer&ecirc;ncia de base.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h4 style=\"text-align:center\"><strong>Tri&acirc;ngulo Equil&aacute;tero</strong></h4>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"../assets/images//uploads/triangulo-equilatero-2.png\" style=\"height:194px; width:200px\" /></p>\r\n\r\n<p style=\"text-align:center\">Todos os lados s&atilde;o iguais.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h4 style=\"text-align:center\"><strong>Tri&acirc;ngulo Escaleno</strong></h4>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"../assets/images//uploads/triangulo-escaleno.png\" style=\"height:107px; width:200px\" /></p>\r\n\r\n<p style=\"text-align:center\">Nenhum dos lados &eacute; igual</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h4 style=\"text-align:center\"><strong>Tri&acirc;ngulo Ret&acirc;ngulo</strong></h4>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"../assets/images//uploads/images.png\" style=\"height:137px; width:200px\" /></p>\r\n\r\n<p style=\"text-align:center\">Um dos &acirc;ngulos forma 90&ordm;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h4 style=\"text-align:center\"><strong>Tri&acirc;ngulo Obtuso</strong></h4>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"../assets/images//uploads/triangulo-obtusangulo.png\" style=\"height:120px; width:200px\" /></p>\r\n\r\n<p style=\"text-align:center\">Um dos &acirc;ngulos &eacute; maior que 90&ordm;</p>\r\n', '2019-11-24 12:42:00', '../assets/images/capas/abstract_texture_various_colorful_triangles_design_682617724112019124200.jpg', 5547982),
(157, 'O que é Estética na Filosofia?', '<p style=\"text-align:justify\">A Est&eacute;tica, tamb&eacute;m chamada de Filosofia da Arte, &eacute; uma das &aacute;reas de conhecimento da filosofia. Tem sua origem na palavra grega&nbsp;<em>aisthesis</em>, que significa &quot;apreens&atilde;o pelos sentidos&quot;, &quot;percep&ccedil;&atilde;o&quot;. &Eacute; uma forma de conhecer (apreender) o mundo atrav&eacute;s dos cinco sentidos (vis&atilde;o, audi&ccedil;&atilde;o, paladar, olfato e tato). Importante saber que o estudo da est&eacute;tica, tal como &eacute; concebido hoje, tem sua origem na Gr&eacute;cia antiga. Entretanto, desde sua origem, os seres humanos mostram possuir um cuidado est&eacute;tico em suas produ&ccedil;&otilde;es.</p>\r\n\r\n<p style=\"text-align:justify\">Das pinturas rupestres, e os primeiros registros de atividade humana, ao&nbsp;<em>design</em>&nbsp;ou &agrave; arte contempor&acirc;nea, a capacidade de avaliar as coisas esteticamente parece ser uma constante. Mas, foi por volta de 1750, que o fil&oacute;sofo Alexander Baumgarten (1714-1762) utilizou e definiu o termo &quot;est&eacute;tica&quot; como sendo uma &aacute;rea do conhecimento obtida atrav&eacute;s dos sentidos (conhecimento sens&iacute;vel). A est&eacute;tica passou a ser entendida, ao lado da l&oacute;gica, como uma forma de&nbsp;<strong>conhecer pela sensibilidade</strong>.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p>Desde ent&atilde;o, a est&eacute;tica se desenvolveu como &aacute;rea de conhecimento. Hoje, &eacute; compreendida como o estudo das formas de arte, dos processos de cria&ccedil;&atilde;o de obras (de arte) e em suas rela&ccedil;&otilde;es sociais, &eacute;ticas e pol&iacute;ticas.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>A Beleza entre os Gregos</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">A filosofia grega, a partir de seu per&iacute;odo antropol&oacute;gico, buscou perceber os motivos pelos quais as atividades humanas possuem um comprometimento com um valor est&eacute;tico: a beleza. Desde o in&iacute;cio dos tempos, a ideia de beleza e de bem fazer est&atilde;o interligadas &agrave; produ&ccedil;&atilde;o e transforma&ccedil;&atilde;o da natureza. Com isso, o fil&oacute;sofo grego Plat&atilde;o (427-347) buscou relacionar a utilidade com a ideia da beleza. Ele afirmou a exist&ecirc;ncia do &quot;belo em si&quot;, uma ess&ecirc;ncia, presente no &quot;mundo das ideias&quot;, respons&aacute;vel por tudo o que &eacute; belo.</p>\r\n\r\n<p style=\"text-align:justify\">Muitos dos di&aacute;logos plat&ocirc;nicos t&ecirc;m como discuss&atilde;o o belo, sobretudo&nbsp;<em>O Banquete</em>. Nele, Plat&atilde;o se refere ao belo como uma meta a ser alcan&ccedil;ada por todo o tipo de produ&ccedil;&atilde;o. Entretanto, o fil&oacute;sofo une o belo &agrave; sua utilidade e ataca a poesia e o teatro grego. No pensamento plat&ocirc;nico, esse tipo de atividade n&atilde;o possu&iacute;a utilidade e gerava confus&atilde;o acerca dos deuses e dos objetivos das a&ccedil;&otilde;es humanas.&nbsp;Em seu livro&nbsp;<em>A Rep&uacute;blica</em>, Plat&atilde;o deixa claro que na formula&ccedil;&atilde;o de sua cidade ideal, a poesia grega seria afastada da forma&ccedil;&atilde;o dos homens por desvirtuar os indiv&iacute;duos.</p>\r\n', '2019-11-28 23:07:58', '../assets/images/capas/images(3)28112019230758.jpg', 2015423),
(158, 'Democracia Ateniense', '<p style=\"text-align:justify\">A&nbsp;<strong>Democracia Ateniense&nbsp;</strong>foi um regime pol&iacute;tico criado e adotado em Atenas, no per&iacute;odo da Gr&eacute;cia Antiga. Ela foi essencial para a organiza&ccedil;&atilde;o pol&iacute;tica das cidades-estados grega, sendo o primeiro governo democr&aacute;tico da hist&oacute;ria. O termo &ldquo;Democracia&rdquo; &eacute; formado pelo radical grego &ldquo;<em>demo</em>&rdquo; (povo) e de &ldquo;<em>kratia</em>&rdquo; (poder), que significa &ldquo;poder do povo&rdquo;.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Anterior a implementa&ccedil;&atilde;o da Democracia em Atenas, a cidade-estado era controlada por uma elite aristocr&aacute;tica olig&aacute;rquica denominada de &ldquo;eup&aacute;tridas&rdquo; ou &ldquo;bem nascidos&rdquo;, os quais detinham o poder pol&iacute;tico e econ&ocirc;mico na&nbsp;polis grega. Entretanto, com o surgimento de outras classes sociais (comerciantes, pequenos propriet&aacute;rios de terra, artes&atilde;os, camponeses, etc.), as quais pretendiam participar da vida pol&iacute;tica, a aristocracia resolve rever a organiza&ccedil;&atilde;o pol&iacute;tica das cidades-estados, o que mais tarde resultou na implementa&ccedil;&atilde;o da &ldquo;Democracia&rdquo;.</p>\r\n\r\n<p style=\"text-align:justify\">De tal maneira, por volta de 510 a.C. a democracia surge em Atenas atrav&eacute;s da vit&oacute;ria do pol&iacute;tico aristocrata grego Cl&iacute;stenes. Considerado o &quot;Pai da Democracia&quot;, ele liderou uma revolta popular contra o &uacute;ltimo tirano grego, H&iacute;pias, que governou entre 527 a.C. e 510 a.C.. Ap&oacute;s esse evento, Atenas foi dividida em dez unidades denominadas chamadas &ldquo;demos&rdquo;, que era o elemento principal dessa reforma e, por esse motivo, o novo regime passou a se chamar &ldquo;<em>demokratia</em>&rdquo;. Atenas possu&iacute;a uma democracia direta, onde todos os cidad&atilde;os atenienses participavam diretamente das quest&otilde;es pol&iacute;ticas da polis.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">De tal modo, Cl&iacute;stenes, baseada nas legisla&ccedil;&otilde;es anteriormente apresentadas por Dracon e Solon, iniciou reformas de ordem pol&iacute;tica e social que resultariam na consolida&ccedil;&atilde;o da democracia em Atenas. Como forma de garantir o processo democr&aacute;tico na cidade, Cl&iacute;stenes adotou o &ldquo;ostracismo&rdquo;, onde os cidad&atilde;os que demostrassem amea&ccedil;as ao regime democr&aacute;tico sofreriam um ex&iacute;lio de 10 anos. Isso impediu a prolifera&ccedil;&atilde;o de tiranos no governo grego.</p>\r\n\r\n<p style=\"text-align:justify\">Sendo assim, o poder n&atilde;o estava somente concentrado na m&atilde;o dos eup&aacute;tridas. Com isso, os demais cidad&atilde;os livres maiores de 18 anos e nascidos em Atenas poderiam participar das Assembleias (Ecl&eacute;sia ou Assembleia do Povo), embora as mulheres, estrangeiros (metecos) e escravos estavam exclu&iacute;dos. Diante disso, podemos intuir que a democracia ateniense n&atilde;o era para todos os cidad&atilde;os sendo, portanto, limitada, excludente e elitista. Estima-se que somente 10% da popula&ccedil;&atilde;o desfrutavam dos direitos democr&aacute;ticos.</p>\r\n\r\n<p style=\"text-align:justify\">Al&eacute;m de Cl&iacute;stenes, P&eacute;ricles deu continuidade &agrave; pol&iacute;tica democr&aacute;tica. Ele foi um importante democrata ateniense que permitiu ampliar o leque de possibilidades para os cidad&atilde;os menos favorecidos. Por volta de 404 a.C., a democracia ateniense sofreu grande decl&iacute;nio, quando Atenas foi derrotada por Esparta na&nbsp;Guerra do Peloponeso, evento que durou cerca de 30 anos.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2>Diferen&ccedil;as entre a Democracia Grega e Democracia Atual</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">A democracia ateniense foi um modelo pol&iacute;tico que fora copiado por v&aacute;rias sociedades antigas, e que influencia at&eacute; hoje o&nbsp;conceito de democracia&nbsp;no mundo. No entanto, a democracia atual &eacute; um modelo mais avan&ccedil;ado e moderno da democracia ateniense, em que todos os cidad&atilde;os (maiores de 16 ou 18 anos), inclusive mulheres, podem votar e aceder a cargos p&uacute;blicos, sem que seja excludente e limitada.</p>\r\n\r\n<p style=\"text-align:justify\">Al&eacute;m disso, na democracia ateniense, os cidad&atilde;os tinham uma participa&ccedil;&atilde;o direta na aprova&ccedil;&atilde;o das leis e nos &oacute;rg&atilde;os pol&iacute;ticos da polis, enquanto na democracia atual (democracia representativa) os cidad&atilde;os elegem um representante.</p>\r\n', '2019-11-28 23:11:00', '../assets/images/capas/images(4)28112019231100.jpg', 2015423),
(159, 'Tipos de Clima', '<p style=\"text-align:justify\"><strong>Clima&nbsp;</strong>&eacute; o termo utilizado para definir as condi&ccedil;&otilde;es atmosf&eacute;ricas que caracterizam uma regi&atilde;o. Existem&nbsp;<strong>dez tipos&nbsp;</strong>principais de clima em todo o mundo e s&atilde;o influenciados pela press&atilde;o atmosf&eacute;rica, correntes mar&iacute;timas, circula&ccedil;&atilde;o de massas de ar, latitude, altitude, precipita&ccedil;&atilde;o pluviom&eacute;trica e inclina&ccedil;&atilde;o solar &ndash; a quantidade de luz que incide sobre a superf&iacute;cie terrestre.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"../assets/images//uploads/images (5).jpg\" style=\"height:210px; width:400px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\">Principais Tipos de Clima</h2>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">A sobreposi&ccedil;&atilde;o de uma caracter&iacute;stica sobre as demais &eacute; que define o tipo de clima de uma determinada regi&atilde;o. Os dez principais tipos de clima s&atilde;o: equatorial, tropical, subtropical, des&eacute;rtico, temperado, mediterr&acirc;neo, semi-&aacute;rido, continental &aacute;rido, frio da montanha e polar.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Clima Equatorial</strong></h3>\r\n\r\n<p style=\"text-align:justify\">&Eacute; registrado nas zonas pr&oacute;ximas ao Equador, como partes da &Aacute;frica e do Brasil. &Eacute; quente e &uacute;mido. Tem pouca varia&ccedil;&atilde;o t&eacute;rmica durante o ano, em m&eacute;dia de 25&ordm;C. No clima Equatorial, h&aacute; chuva abundante durante todo o ano.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Clima Tropical</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Ocorre nas zonas pr&oacute;ximas aos tr&oacute;picos de C&acirc;ncer e Capric&oacute;rnio. A temperatura m&eacute;dia anual &eacute; de 20&ordm;C. A principal caracter&iacute;stica &eacute; a clara defini&ccedil;&atilde;o de duas esta&ccedil;&otilde;es no ano, que s&atilde;o o inverno &ndash; seco &ndash; e o ver&atilde;o &ndash; chuvoso. Dependendo da regi&atilde;o, pode variar em clima tropical seco ou clima tropical chuvoso. &Eacute; dividido em clima tropical equatorial; tropical de mon&ccedil;&otilde;es; tropical &uacute;mido ou de savana e clima tropical de altitude. Este clima e suas varia&ccedil;&otilde;es, s&atilde;o encontrados no Brasil, Cingapura, regi&otilde;es da &Iacute;ndia, Sri Lanka, Hava&iacute;, Honolulu, M&eacute;xico, e Austr&aacute;lia.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Clima Subtropical</strong></h3>\r\n\r\n<p style=\"text-align:justify\">O clima subtropical marca as regi&otilde;es abaixo do tr&oacute;pico de Capric&oacute;rnio. &Eacute; mercado pela diferencia&ccedil;&atilde;o t&eacute;rmica durante o ano porque tem quatro esta&ccedil;&otilde;es bem definidas. Os principais extremos de temperatura ocorrem no ver&atilde;o, com varia&ccedil;&atilde;o de 20&ordm;C a 25&ordm;, e no inverno, quando os term&ocirc;metros podem marcar entre 0&ordm;C e 10&ordm;C. As chuvas nas regi&otilde;es atingidas por este clima variam de 1 mil a 1,5 mil mil&iacute;metros anuais. S&atilde;o Paulo, o sul de Mato Grosso do Sul, Paran&aacute;, Santa Catarina e o Rio Grande do Sul sofrem a influ&ecirc;ncia do clima Subtropical.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Clima Temperado</strong></h3>\r\n\r\n<p style=\"text-align:justify\">As quatro esta&ccedil;&otilde;es bem definidas tamb&eacute;m s&atilde;o caracter&iacute;sticas nas regi&otilde;es de clima temperado. &Eacute; registrado nas regi&otilde;es localizadas no meio dos tr&oacute;picos e dos c&iacute;rculos polares dos hemisf&eacute;rios sul e hemisf&eacute;rio norte. &Eacute; dividido em quatro tipos: temperado mediterr&acirc;neo, temperado continental e temperado oce&acirc;nico. Este &eacute; o clima de regi&otilde;es como a Europa, Am&eacute;rica do Norte e &Aacute;sia.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Clima Mediterr&acirc;neo</strong></h3>\r\n\r\n<p style=\"text-align:justify\">&Eacute; caracterizado por invernos curtos e de temperaturas baixas, variando entre 0&ordm;C e 15&ordm;C. J&aacute; o ver&atilde;o &eacute; longo, registrando temperaturas que oscilam entre 18&ordm;C e 25&ordm;. O per&iacute;odo chuvoso &eacute; o de inverno e o seco ocorre no ver&atilde;o. Embora o inverno seja breve e o ver&atilde;o longo, as quatro esta&ccedil;&otilde;es ano s&atilde;o bem definidas. &Eacute; encontrado nas regi&otilde;es localizadas junto ao mar Mediterr&acirc;neo.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Clima Des&eacute;rtico</strong></h3>\r\n\r\n<p style=\"text-align:justify\">No clima des&eacute;rtico, o calor com m&eacute;dias de 30&ordm;C de temperatura como a principal caracter&iacute;stica. As chuvas s&atilde;o escassas, quase insignificantes, podendo haver anos em que n&atilde;o chegam a ocorrer. Em consequ&ecirc;ncia, a umidade do ar &eacute; baixa, chegando a 15%. As altas temperaturas ocorrem durante o dia, mas podem ser negativas durante o inverno. As esta&ccedil;&otilde;es do ano s&atilde;o diferenciadas pela varia&ccedil;&atilde;o de temperatura. Este tipo de clima &eacute; encontrado no&nbsp;deserto do Saara, na &Aacute;frica; Oriente M&eacute;dio; Oeste norte-americano, na regi&atilde;o de Sonora, no norte Mexicano; no Atacama, que fica no litoral do Chile e Peru; na Austr&aacute;lia e &Iacute;ndia.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Clima Semi&aacute;rido</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Chuvas irregulares e escassas, altas temperaturas e baixa umidade relativa do ar s&atilde;o as principais caracter&iacute;sticas do clima semi&aacute;rido. A temperatura m&eacute;dia anual chega a 27&ordm;C e as chuvas variam em, no m&aacute;ximo, 750 mil&iacute;metros ao ano. Al&eacute;m de escassas, as chuvas s&atilde;o irregulares e mal distribu&iacute;das. &Eacute; registrado na regi&atilde;o Nordeste brasileira.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Clima Continental &Aacute;rido</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Este tipo de clima &eacute; marcado pela baixa umidade relativa do ar, em consequ&ecirc;ncia da densidade pluviom&eacute;trica m&eacute;dia de 250 mil&iacute;metros ao ano. Al&eacute;m de seco, tem como caracter&iacute;stica a grande varia&ccedil;&atilde;o de temperatura entre o ver&atilde;o (17&ordm;) e o inverno (20&ordm; negativos). &Eacute; observado em regi&otilde;es como a &Aacute;sia Central, Montanhas Rochosas norte-americanas e na Patag&ocirc;nia.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Frio de Montanha</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Tamb&eacute;m chamado de Clima de Altitude, este tipo de clima tem baixas temperaturas durante todo o ano. Em m&eacute;dia, os term&ocirc;metros registram 0&ordm; durante o ano, mas inverno, &eacute; esperada queda de temperatura para &iacute;ndices negativos. As chuvas nas regi&otilde;es chega a 1,5 mil mil&iacute;metros anuais.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Clima Polar</strong></h3>\r\n\r\n<p style=\"text-align:justify\">&Eacute; o clima de temperaturas negativas mais extremas, com term&ocirc;metros sempre abaixo de 0&ordm;C, com m&eacute;dia de 30&ordm;C negativos e que podem cair a 50&ordm;C negativos no inverno. Al&eacute;m da&nbsp;amplitude t&eacute;rmica, a umidade do ar &eacute; elevada, mesmo com baixa incid&ecirc;ncia de chuvas. Tem como caracter&iacute;stica tamb&eacute;m a presen&ccedil;a de neve cobrindo o solo durante todo o ano, com cerca de 100 mil&iacute;metros registrados durante o ano. Ocorre em regi&otilde;es como a costas eurasianas do &Aacute;rtico, sendo o clima da Groenl&acirc;ndia, norte do Canad&aacute;, Alasca e na Ant&aacute;rtida.</p>\r\n', '2019-11-28 23:26:09', '../assets/images/capas/Planets_Earth_44052828112019232609.jpg', 2015423);

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
(8, 144),
(13, 144),
(21, 147),
(10, 147),
(21, 145),
(20, 148),
(15, 148),
(15, 146),
(9, 151),
(2, 153),
(1, 153),
(18, 154),
(12, 150),
(16, 157),
(15, 158),
(16, 158),
(20, 159),
(22, 152),
(17, 155);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudosalvo`
--

CREATE TABLE `conteudosalvo` (
  `salvoEm` datetime NOT NULL,
  `fk_cs_idConteudo` int(11) NOT NULL,
  `fk_cs_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conteudosalvo`
--

INSERT INTO `conteudosalvo` (`salvoEm`, `fk_cs_idConteudo`, `fk_cs_idUsuario`) VALUES
('2019-11-24 15:42:42', 150, 5547982),
('2019-11-24 15:42:56', 148, 5547982),
('2019-11-24 15:43:08', 146, 5547982),
('2019-11-25 02:51:47', 154, 2017312160),
('2019-11-25 02:51:54', 153, 2017312160),
('2019-11-25 19:59:39', 155, 2017312160),
('2019-11-25 20:00:51', 150, 2017312160),
('2019-11-26 01:47:56', 154, 2018752185),
('2019-11-26 01:48:17', 147, 2018752185),
('2019-11-29 02:40:06', 158, 2015457890),
('2019-11-29 02:40:14', 153, 2015457890),
('2019-11-29 02:40:27', 154, 2015457890),
('2019-11-29 02:41:18', 147, 2015457890),
('2019-11-29 02:56:59', 158, 5547982);

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
(62, 144),
(63, 144),
(64, 144),
(65, 145),
(66, 145),
(67, 145),
(68, 146),
(69, 146),
(70, 146),
(71, 146),
(72, 147),
(73, 147),
(74, 147),
(75, 147),
(76, 147),
(77, 148),
(78, 148),
(79, 148),
(80, 150),
(81, 151),
(82, 151),
(83, 152),
(84, 152),
(85, 152),
(86, 153),
(87, 153),
(88, 154),
(89, 154),
(90, 154),
(91, 155),
(92, 155),
(93, 155),
(94, 157),
(95, 157),
(95, 158),
(92, 159),
(96, 159);

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
(22, 'Português');

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
(32, 'Como podemos notar a influência dos conceitos de estética para os gregos nas artes, por exemplo, na escultura?', 1, 1, '2019-11-28 23:31:50', 2018752185, 157),
(34, 'Como foi esse período no Brasil?', 1, 1, '2019-11-28 23:36:00', 2018752185, 152),
(35, 'Finalmente consegui entender esse assunto!', 0, 0, '2019-11-28 23:40:41', 2015457890, 154),
(36, 'Amei as referências! Estou encantada!', 0, 0, '2019-11-28 23:41:38', 2015457890, 147),
(37, 'Quais são os climas que podemos notar no Brasil?', 0, 0, '2019-11-28 23:42:03', 2015457890, 159),
(38, 'O mapa me ajudou a entender melhor o assunto', 0, 0, '2019-11-28 23:42:38', 2018752185, 159);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE `resposta` (
  `resposta` text NOT NULL,
  `dataResposta` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idResposta` int(11) NOT NULL,
  `fk_resp_idDuvida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `resposta`
--

INSERT INTO `resposta` (`resposta`, `dataResposta`, `idResposta`, `fk_resp_idDuvida`) VALUES
('A escultura, bem como as outras formas de expressão artística na Grécia Antiga, era utilizada para transmitir os valores e pensamentos da sociedade grega. Ainda, muitas dessas esculturas tinham função religiosa, são os ídolos que a bíblia cita e rejeita. Era para essas esculturas que as orações eram dirigidas e sua tamanha magnitude era capaz de fazer com que os fiéis se perguntassem se aquelas estátuas não eram, na verdade, os próprios deuses. \r\n\r\nA vitória do Cristianismo sobre o Paganismo apagou a maioria dos vestígios dessas estátuas famosas do mundo antigo sob a premissa de idolatria. Por isso, as esculturas que costumamos associar ao mundo antigo, nada mais são que reproduções produzidas no período romano para servir de souvenir e decoração para viajantes e colecionadores. Um exemplo é a escultura de Palas Atena que, segundo registros, era uma imagem gigante de madeira, com aproximadamente 11 metros de altura e coberta de materiais preciosos: armadura e vestes de ouro, pele de marfim e olhos feitos de pedras coloridas. Inspirava temor e reverência, sentimentos muito diferentes do que reprodução romana evoca. Imagens como essa estabeleciam uma concepção de divino que, apesar de sua magnitude, era associada à figura humana, a valorização desta e a sua força sendo características marcantes da arte grega.', '2019-11-28 22:34:08', 32, 32),
('O Romantismo no Brasil teve como marco inicial a publicação do livro de poemas de Gonçalves de Magalhães (1811-1882), intitulado \"Suspiros poéticos e saudades\", em 1836. Além dessa obra, a Revista Niterói, publicada nesse mesmo ano em Paris, também foi precursora do movimento romântico na Brasil. Esse período é caracterizado por manifestações culturais, artísticas e literárias iniciadas na Europa no século XVIII.', '2019-11-28 22:36:35', 33, 34);

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
('Meio Ambiente', 62),
('Polímeros', 63),
('Polímeros Naturais', 64),
('Arquitetura', 65),
('Movimento Barroco', 66),
('Urbanismo', 67),
('Ditadura Militar', 68),
('Brasil', 69),
('Totalitarismo', 70),
('Brasil República', 71),
('Flamenco', 72),
('Cultura', 73),
('Dança', 74),
('Música', 75),
('Espanha', 76),
('Revolução Industrial', 77),
('Inglaterra', 78),
('Revolução', 79),
('Esportes', 80),
('Gramática do Inglês', 81),
('Grammar', 82),
('Romantismo', 83),
('Literatura', 84),
('Movimento Literário', 85),
('PHP', 86),
('Recursividade', 87),
('Condutores', 88),
('Isolantes', 89),
('Eletrodinâmica', 90),
('Triângulos', 91),
('Classificação', 92),
('Geometria', 93),
('Estética', 94),
('Grécia', 95),
('Climas', 96);

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
('../assets/images/usuarios/brown-haired-girl-in-white-sleeveless-dress-standing-beside-756453(1)24112019144806.jpg', '$2y$10$55YtGeDFBcuKeDK/0yeFnefahVXmcxSK5gLWpCBQYGV/urx9nsk4O', 'vanessa_professora@gmail.com', 'Vanessa', 1517527, 2),
('../assets/images/usuarios/photo-of-woman-holding-mug-318464729112019020333.jpg', '$2y$10$yHviW6XcXFpd/67J8oTQkOyxoc25xcAx/.hqznknCtvZvEpIoAyti', 'juliana_professora@gmail.com', 'Juliana Nogueira', 2015423, 2),
('../assets/images/usuarios/man-wearing-knit-hat-and-collared-shirt-120540524112019151750.jpg', '$2y$10$3eN6FSXkEXDrbqYNVF57vOWl4Rgj.eztUd5xeLayOZs6kGXKjS.Gi', 'marcio_professor@gmail.com', 'Marcio da Silva Campos', 5547982, 2),
('../assets/images/usuarios/woman-sitting-next-to-table-and-right-hand-on-ear-132694629112019023953.jpg', '$2y$10$.GBSGosZ/yM4QaOeQkScVeoV2EWYlNnHJj4Jx2C/qelCBjboxOl1y', 'daniela_aluna@gmail.com', 'Daniela Ferreira', 2015457890, 1),
('../assets/images/usuarios/62250900_1529075780560610_8847370202963247104_n22112019173057.jpg', '$2y$10$SM3mx0YeRoExVxFcJ4ZsXuKu4rTN43Fx7qkAeZ5akwjER9IVMXqnG', 'pedro.canteli2001@gmail.com', 'Pedro A.', 2017312160, 4),
('../assets/images/usuarios/close-up-photography-of-a-man-1081188(1)25112019161533.jpg', '$2y$10$LWRLd8jaccI9uS9OnfnwT.kmdA50cpv8u/pcQjiY4X0TXo29poFM2', 'lucas_aluno@gmail.com', 'Lucas', 2018752185, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`idConteudo`),
  ADD KEY `fk_cont_idUsuario` (`fk_cont_idUsuario`);

--
-- Indexes for table `conteudodisciplina`
--
ALTER TABLE `conteudodisciplina`
  ADD KEY `fk_cd_idDisciplina` (`fk_cd_idDisciplina`),
  ADD KEY `fk_cd_idConteudo` (`fk_cd_idConteudo`);

--
-- Indexes for table `conteudosalvo`
--
ALTER TABLE `conteudosalvo`
  ADD KEY `fk_cs_idConteudo` (`fk_cs_idConteudo`),
  ADD KEY `fk_cs_idUsuario` (`fk_cs_idUsuario`);

--
-- Indexes for table `conteudotag`
--
ALTER TABLE `conteudotag`
  ADD KEY `fk_ct_idTag` (`fk_ct_idTag`),
  ADD KEY `fk_ct_idConteudo` (`fk_ct_idConteudo`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`idDisciplina`);

--
-- Indexes for table `duvida`
--
ALTER TABLE `duvida`
  ADD PRIMARY KEY (`idDuvida`),
  ADD KEY `fk_duv_idUsuario` (`fk_duv_idUsuario`),
  ADD KEY `fk_duv_idConteudo` (`fk_duv_idConteudo`);

--
-- Indexes for table `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`idResposta`),
  ADD KEY `fk_resp_idDuvida` (`fk_resp_idDuvida`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`idTag`);

--
-- Indexes for table `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_usu_idTipoUsuario` (`fk_usu_idTipoUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `idConteudo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `idDisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `duvida`
--
ALTER TABLE `duvida`
  MODIFY `idDuvida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `resposta`
--
ALTER TABLE `resposta`
  MODIFY `idResposta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `idTag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2018752186;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `conteudo`
--
ALTER TABLE `conteudo`
  ADD CONSTRAINT `conteudo_ibfk_1` FOREIGN KEY (`fk_cont_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `conteudodisciplina`
--
ALTER TABLE `conteudodisciplina`
  ADD CONSTRAINT `conteudodisciplina_ibfk_1` FOREIGN KEY (`fk_cd_idDisciplina`) REFERENCES `disciplina` (`idDisciplina`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conteudodisciplina_ibfk_2` FOREIGN KEY (`fk_cd_idConteudo`) REFERENCES `conteudo` (`idConteudo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `conteudosalvo`
--
ALTER TABLE `conteudosalvo`
  ADD CONSTRAINT `conteudosalvo_ibfk_1` FOREIGN KEY (`fk_cs_idConteudo`) REFERENCES `conteudo` (`idConteudo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conteudosalvo_ibfk_2` FOREIGN KEY (`fk_cs_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `conteudotag`
--
ALTER TABLE `conteudotag`
  ADD CONSTRAINT `conteudotag_ibfk_1` FOREIGN KEY (`fk_ct_idTag`) REFERENCES `tag` (`idTag`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conteudotag_ibfk_2` FOREIGN KEY (`fk_ct_idConteudo`) REFERENCES `conteudo` (`idConteudo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `duvida`
--
ALTER TABLE `duvida`
  ADD CONSTRAINT `duvida_ibfk_1` FOREIGN KEY (`fk_duv_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `duvida_ibfk_2` FOREIGN KEY (`fk_duv_idConteudo`) REFERENCES `conteudo` (`idConteudo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `resposta`
--
ALTER TABLE `resposta`
  ADD CONSTRAINT `resposta_ibfk_1` FOREIGN KEY (`fk_resp_idDuvida`) REFERENCES `duvida` (`idDuvida`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fk_usu_idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
