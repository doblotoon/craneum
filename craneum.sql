-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2019 às 18:47
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
(7, 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis eros et ipsum ullamcorper placerat. Nullam gravida turpis at dapibus pharetra. Pellentesque elementum libero lectus. Aenean lobortis at leo sollicitudin congue. Suspendisse non dolor dignissim, ornare nibh sed, mollis ipsum. In consequat mattis porta. Proin ultricies dui fermentum, vestibulum mauris et, malesuada eros. Etiam dui erat, pharetra quis mollis vitae, tincidunt quis dolor. Nam sed orci rhoncus, scelerisque ligula consectetur, ornare neque. Nam ut posuere libero. Sed elementum sed odio eu porttitor.\n\nSuspendisse eu euismod urna, quis ultricies tortor. In varius aliquam mi at maximus. Cras et quam dictum, iaculis erat sed, semper felis. Vivamus lacus turpis, tempor sit amet ex et, feugiat pretium nunc. Phasellus orci neque, bibendum et cursus dignissim, fringilla eget lorem. Cras cursus leo lectus, vitae malesuada lorem tincidunt eget. Nunc quis purus leo. Donec metus arcu, malesuada at sodales at, fermentum quis ex.\n\nIn tristique mi eleifend enim lacinia, eget ultricies quam rhoncus. Morbi mollis aliquet lorem vel viverra. Sed massa eros, iaculis lobortis porta vitae, hendrerit a velit. Maecenas quis pellentesque lorem, nec molestie lorem. Donec porta, est vitae facilisis ultrices, mauris leo faucibus urna, in condimentum ipsum justo eu risus. Mauris elementum magna id egestas fringilla. Proin vel nunc ante. Praesent auctor mauris et hendrerit elementum. Vestibulum dignissim bibendum risus, vel feugiat erat interdum non. In non ultricies dui. Curabitur lobortis tempus nisl eu malesuada. Morbi a arcu ligula. Curabitur vel sollicitudin est, ac pellentesque lacus. Mauris rhoncus faucibus ipsum auctor maximus. Maecenas posuere quis odio pretium posuere.\n\nInteger enim dolor, feugiat non dictum id, scelerisque quis leo. Proin ut tellus eleifend, molestie nisl eget, ultricies turpis. Sed vel leo feugiat, mollis nisi non, sodales odio. Duis in dignissim mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut blandit consectetur massa scelerisque rhoncus. Duis est libero, tristique vitae urna nec, hendrerit maximus odio. Aliquam quis lectus non eros convallis molestie. Nulla id metus tortor. Nullam at tempor sapien. Aliquam id lacus nec justo tempus facilisis ut vel mi. Maecenas ac libero vel leo lobortis semper nec a diam. Pellentesque mollis, tortor efficitur facilisis porta, enim leo egestas odio, sit amet eleifend libero ante eu metus. Suspendisse iaculis a erat eu molestie.\n\nVivamus sodales maximus est at cursus. Phasellus tempus tristique enim. Quisque nec ultrices mi. Pellentesque maximus consequat turpis eu efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam efficitur felis ante, eget vulputate nibh vestibulum ac. Vivamus tincidunt felis nunc, id tristique neque dapibus pretium. Etiam accumsan ligula ante, sed elementum nulla gravida sit amet. Nam feugiat lectus in eros sodales luctus. Donec nunc leo, accumsan eu massa vitae, egestas consectetur lorem. Suspendisse potenti. Nulla quis diam vulputate magna tincidunt condimentum in eu elit.\n\nDonec ac nibh sed neque aliquet vestibulum eget id dui. Sed hendrerit accumsan lectus, non tincidunt orci commodo id. Etiam est nibh, vestibulum sit amet metus nec, porta sollicitudin diam. Morbi id felis viverra, consequat turpis id, pretium enim. Pellentesque vestibulum mi id ante consequat elementum. Fusce a lorem lacus. Integer nisl ligula, sodales non elementum in, feugiat a lectus. Aliquam quis vestibulum odio, ac rhoncus sem. Donec tempor neque arcu, a viverra elit tempus id. Maecenas maximus arcu metus, at tincidunt sem ultrices eu. Cras dolor ipsum, aliquam vitae lectus vitae, semper sagittis felis. Praesent vehicula ex eu lacus tempor, ac suscipit nisl sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin scelerisque, nibh sed scelerisque accumsan, diam justo consequat lectus, quis tincidunt est sapien in neque. Phasellus viverra in mauris non tempor. Aliquam fermentum sodales nisl eget venenatis.\n\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vel ante non magna tempus venenatis. In hac habitasse platea dictumst. Donec eu eros ipsum. In nibh nisi, porttitor eu risus eget, dignissim tincidunt sem. Maecenas fringilla sed nunc a pellentesque. Phasellus accumsan nibh quis diam dapibus viverra. Aenean scelerisque vitae lacus quis molestie. Aliquam vitae nunc ante. Sed ut tempor massa, tincidunt lacinia nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus leo ipsum, pulvinar vitae erat sed, blandit porttitor est. Donec tortor massa, laoreet ut ex commodo, pellentesque tincidunt nunc. Suspendisse quis placerat urna. Pellentesque ut ante nulla. Fusce quis nulla id urna vehicula porta vel vitae nulla.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at auctor velit. Aliquam eu tristique ipsum. In congue erat vitae luctus iaculis. Praesent auctor in nunc a bibendum. Donec pharetra vel nisi in eleifend. Cras mattis metus volutpat neque accumsan scelerisque.\n\nCurabitur non molestie risus. Duis faucibus mauris turpis, quis cursus dolor molestie id. Donec nec sapien vitae arcu rutrum scelerisque at ut quam. Praesent condimentum eget nibh quis pharetra. Etiam arcu ipsum, pharetra et ultrices sit amet, sagittis ut augue. Aenean nec aliquet quam. Pellentesque quis interdum leo, sed vehicula tortor. Praesent justo enim, fringilla vitae euismod eget, faucibus vel ex.\n\nAliquam aliquam libero nulla, nec ornare ex sodales quis. Suspendisse potenti. Sed ullamcorper at felis eu tempus. Sed at risus sed felis mollis sodales quis et nibh. Nunc arcu lorem, rhoncus quis placerat ac, rhoncus eget odio. Pellentesque at risus id lectus ullamcorper tristique. Etiam vitae massa pellentesque augue lacinia commodo eget nec sem. Nullam vel nisi massa. Duis et sagittis velit. Proin facilisis ex metus, vel pellentesque sapien tristique eget. Donec odio justo, finibus at fringilla sed, egestas iaculis nunc. Praesent eu feugiat massa. Donec non varius tortor.\n\nAliquam consequat finibus odio, non iaculis odio laoreet id. Pellentesque pharetra non nunc sed dictum. Suspendisse tincidunt in arcu nec fringilla. Phasellus ante nibh, rhoncus non est ac, iaculis mattis libero. Pellentesque hendrerit efficitur ipsum, sed ornare arcu semper eget. Quisque et sem est. Nunc ac imperdiet purus, ut faucibus quam. Pellentesque semper arcu in volutpat vehicula. Donec mattis non ante a venenatis. Quisque pellentesque augue id enim luctus, at sagittis tortor aliquam. Cras nec facilisis magna, tempor iaculis lorem.\n\nAenean eleifend rutrum volutpat. Nunc lacinia nec massa et scelerisque. Proin a dolor vitae odio iaculis rhoncus. Etiam accumsan, magna dignissim finibus tristique, nisi dolor efficitur orci, nec eleifend enim ante non lorem. Morbi ullamcorper ac diam at sagittis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec egestas ullamcorper finibus. Aenean eget ligula nibh. Praesent nisl lacus, luctus quis ex in, consequat vehicula metus. Nulla facilisi. Aenean sodales placerat finibus. Suspendisse pellentesque orci justo, eu pulvinar massa hendrerit in. Nullam in nibh felis. Phasellus libero elit, pellentesque nec metus nec, fermentum fringilla arcu. Aliquam erat volutpat.\n\nInteger dui tellus, aliquet condimentum mi ac, mattis volutpat urna. Aenean vestibulum iaculis nunc, in mollis lorem aliquet ac. Nunc eu orci pretium, cursus ipsum in, volutpat purus. Fusce sagittis massa vel nulla dictum, nec commodo turpis imperdiet. Morbi ac orci sit amet neque suscipit mollis. Etiam efficitur nunc leo, id tempor nisi dapibus sit amet. Cras feugiat nisl mauris, eget rutrum ante ultricies eu. Ut varius molestie eros eget ullamcorper. In non dolor egestas, egestas risus non, porttitor massa.\n\nVivamus a dignissim quam, at tempor purus. Curabitur sit amet maximus est. Etiam sapien erat, convallis in erat at, porttitor scelerisque massa. Fusce dictum, lacus at semper tincidunt, magna nunc pharetra quam, id fringilla quam neque nec urna. Vestibulum imperdiet lacus odio, eget volutpat tortor porttitor non. Quisque ac lacus purus. Curabitur eget purus egestas, posuere erat non, dapibus sem. Mauris vel vulputate lectus, vitae commodo turpis.\n\nQuisque luctus porta aliquet. Nam faucibus quam at tempus ultrices. Pellentesque sit amet ligula posuere sapien fermentum laoreet. Nullam vulputate libero a nisl sodales lacinia. Pellentesque et nulla eu nulla mollis laoreet sit amet sed nibh. Vivamus posuere scelerisque lectus vitae pharetra. Nulla facilisi. Ut sit amet sapien ac sem auctor scelerisque faucibus at ex. Pellentesque ut dolor elit. Donec dui mi, rhoncus vel nisl ultrices, iaculis rhoncus nunc. Cras id elit nec tortor consectetur sollicitudin eget quis turpis. Donec egestas ligula felis, eget congue dui finibus ac. Duis sem ex, pellentesque sit amet dui dapibus, malesuada varius massa. Nam blandit erat cursus, rutrum odio a, laoreet eros. Suspendisse vitae tellus vitae magna facilisis porttitor.\n\nSuspendisse placerat blandit tortor id vestibulum. Maecenas eleifend leo ligula. Quisque vitae enim eget tortor interdum porttitor. Cras turpis sapien, finibus in aliquet at, convallis ut libero. Ut malesuada ligula a risus maximus ultrices. Duis et gravida nulla. Pellentesque et augue ac lacus tincidunt tincidunt ut sed purus. Nullam molestie arcu sit amet lectus viverra, egestas pharetra quam ullamcorper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed a elementum elit, quis consectetur lacus.\n\nMauris magna diam, porta ac placerat ut, ultrices at urna. Suspendisse auctor, augue lacinia luctus iaculis, turpis turpis maximus magna, sit amet dapibus ex nulla ut sapien. Proin lobortis fringilla tortor, sit amet condimentum erat maximus tincidunt. Donec laoreet nulla neque, porta feugiat urna faucibus id. Vivamus malesuada nibh non ornare consectetur. Proin eu pretium purus. Vestibulum vel eros eu urna volutpat aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Nulla eu erat scelerisque metus congue rutrum eget et libero. Donec quis nisl laoreet lectus ultrices elementum ut ac ex.\n\nIn sit amet mi faucibus, suscipit nulla at, fermentum velit. Pellentesque accumsan sem ipsum, a iaculis lectus sagittis id. Donec ligula nulla, sodales ac ornare eu, sodales sed erat. Maecenas neque ante, fringilla eget rhoncus id, aliquet ac lectus. Nullam eu commodo odio. Quisque vel risus ut orci malesuada fringilla sollicitudin nec velit. Nullam a metus condimentum, convallis ante in, finibus eros. Sed tempus fermentum nibh vitae vulputate. Maecenas venenatis orci sed aliquam dictum. Morbi vestibulum ante et tellus interdum blandit. Nam scelerisque nisl mattis, consequat elit sed, sollicitudin sapien. Sed sed diam a lacus pretium consequat sed vitae nunc. Curabitur commodo massa quis leo consectetur pharetra et eleifend felis.\n\nQuisque venenatis risus volutpat, feugiat urna vitae, posuere lacus. Suspendisse lobortis neque a ante interdum, et condimentum ante feugiat. Pellentesque felis ligula, aliquet ut ex non, mollis condimentum libero. Nulla laoreet, leo in posuere fermentum, nisi nunc rutrum arcu, ac cursus dolor ipsum quis ligula. Aliquam libero erat, tempor sit amet ex vitae, tincidunt sollicitudin nunc. Pellentesque auctor varius pretium. Nullam dignissim faucibus arcu, non facilisis risus varius vel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam elementum mi ac mauris dignissim auctor. Phasellus facilisis nunc eget velit tincidunt luctus. Etiam posuere, purus eget egestas mollis, orci mauris porta dolor, tempor porta urna orci vulputate nisi. Aenean magna justo, sodales eu dolor at, tristique vulputate dui. Donec mattis tortor at ullamcorper hendrerit. Aenean varius porttitor ultrices. Praesent iaculis, urna commodo ultricies accumsan, odio nisl scelerisque turpis, accumsan ultricies enim sapien ut quam. Quisque id pulvinar diam.\n\nMauris sit amet consequat purus, sed lacinia quam. Sed porta arcu sem, in tempus libero pharetra quis. Pellentesque congue turpis ipsum, in mattis ante tempus nec. Ut a ante laoreet dolor luctus imperdiet id et tortor. Nullam enim augue, condimentum eu porta ac, iaculis at arcu. Morbi leo eros, bibendum ac pretium sit amet, sagittis id dui. Nam interdum erat in lobortis viverra. In id lectus volutpat, commodo justo ac, sodales odio. Suspendisse mollis turpis ut mauris euismod, vitae efficitur tortor hendrerit. Praesent dignissim dolor eu ex commodo, at aliquet ex convallis. Quisque et gravida velit, sit amet rhoncus lectus. Cras neque tellus, lobortis et tempor sodales, mollis vel libero.\n\nPhasellus sapien lorem, consequat a varius eget, congue a lorem. Maecenas magna nisi, tincidunt at est a, blandit vestibulum libero. Suspendisse dictum ipsum at sem ultricies, consequat volutpat augue fermentum. Fusce elementum, nisi et fermentum venenatis, odio nibh mollis magna, non imperdiet arcu orci at nulla. Vestibulum sit amet lectus mi. Nullam accumsan arcu metus, vitae vehicula massa aliquet ac. Suspendisse aliquet lacinia tempus. Phasellus ultrices dignissim augue vitae sollicitudin. Nam aliquet neque non metus sollicitudin sagittis. Fusce vitae risus ultrices, finibus felis quis, porttitor arcu. Proin dolor ligula, gravida eu elit at, convallis sodales lectus. Vestibulum euismod risus at lectus lacinia dictum. Praesent sodales lobortis augue eget aliquet. Nulla varius a mi eget tempus. Ut nec sollicitudin turpis.\n\nPellentesque in massa dictum quam commodo ultrices et ut sapien. Morbi lobortis consectetur ex vel accumsan. Curabitur a metus odio. Mauris dictum risus vel sem blandit sodales. Etiam pretium blandit purus, non rhoncus odio varius at. Donec consequat turpis vel nibh placerat tristique. Nullam et vulputate tellus, vel volutpat mauris. Cras et magna lacus. Donec ut tellus vel augue ultrices dignissim nec ac diam.\n\nSed mollis luctus felis interdum venenatis. Morbi ullamcorper ullamcorper lectus, placerat tincidunt libero sagittis a. Nullam ultrices facilisis dictum. Integer sed sapien justo. Duis quis odio mollis, vulputate libero elementum, rhoncus tortor. In lacus arcu, consectetur at nisl sit amet, aliquet ullamcorper diam. Proin eu mi vitae lacus lacinia ultrices sit amet eu sapien. Maecenas commodo luctus mauris, aliquam rutrum quam dapibus nec. Aenean nisi turpis, ullamcorper quis odio eget, molestie laoreet sapien. Nullam hendrerit sem ac metus pellentesque, in venenatis augue venenatis. Cras a felis cursus, mattis dui vel, tristique massa. Nam velit diam, dapibus non mauris vitae, porta volutpat risus. Maecenas est arcu, ullamcorper in nunc et, tristique dapibus erat. In eleifend dolor vitae arcu blandit commodo.\n\nNulla velit justo, mattis vitae ornare vel, sagittis ac mi. Nunc nisl ante, fringilla ullamcorper turpis at, lobortis pharetra orci. Cras gravida at odio a rutrum. Morbi at porttitor tortor. Donec consectetur condimentum orci id sollicitudin. Aenean eu dolor non dolor varius pellentesque sed accumsan neque. Etiam fermentum feugiat dolor, ac molestie ante lobortis viverra. Praesent lectus justo, viverra at rutrum vel, ultrices nec eros. Etiam ornare, mauris in aliquet aliquam, dolor metus iaculis magna, sed rutrum est tellus a lorem.', '0000-00-00 00:00:00', 'capa1.png', 1),
(19, 'titulo 1.0', '<h2><span style=\"font-family:Comic Sans MS,cursive\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet auctor orci eget bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam luctus ex nec lectus imperdiet eleifend. Ut id velit lacinia, lobortis mauris a, eleifend augue. Nunc finibus, ligula at commodo finibus, dui quam tincidunt velit, a placerat ante risus quis enim. Duis vitae blandit mauris. Integer tincidunt leo non lorem rhoncus egestas. Nulla lacus odio, pulvinar ut leo nec, dictum ullamcorper leo. Donec lorem orci, sollicitudin vel commodo vitae, posuere et quam.</span></h2>\r\n\r\n<p><span class=\"marker\">Nunc gravida arcu non felis luctus faucibus. Proin dignissim metus et turpis dictum rhoncus. Integer lobortis lacinia metus, eu eleifend tellus rutrum quis. Duis erat justo, malesuada eu varius ut, interdum sed lorem. Donec facilisis purus nec ante elementum porta. Nunc purus ex, vulputate viverra vehicula sed, rhoncus ac nulla. Ut iaculis pharetra accumsan.<img alt=\"\" src=\"../assets/images//uploads/IMG_20180917_143039333.jpg\" style=\"float:right; height:96px; margin:5px; width:128px\" /></span></p>\r\n\r\n<p>Nam luctus malesuada hendrerit. Integer et congue turpis. Maecenas fringilla neque ut ante ultrices tristique. Sed suscipit magna ac elementum mattis. Mauris commodo sed enim tincidunt bibendum. Aenean hendrerit odio nec tincidunt pharetra. Sed luctus at dolor eu bibendum. Aenean tempor aliquet odio, venenatis vestibulum mi dignissim ac. Cras vel dolor ac velit ultrices suscipit venenatis ac odio.</p>\r\n\r\n<p>Vestibulum molestie faucibus dolor quis molestie. Donec quis dapibus arcu, ac gravida lacus. Vivamus ultricies enim vitae orci tempus, quis lacinia tellus sodales. Fusce cursus dignissim massa, nec dapibus nibh mattis et. Praesent pulvinar augue erat, ut finibus ligula condimentum at. Nam ut lorem ligula. Nulla vel vulputate odio, eu placerat massa. Aliquam metus enim, mollis in sapien id, luctus luctus massa. Integer porttitor sollicitudin enim, eu accumsan urna elementum fringilla. Nulla lobortis porta elit eget efficitur.</p>\r\n\r\n<p><span style=\"color:#3498db\"><u><em>ARQUIVO</em></u></span></p>\r\n\r\n<p>Etiam pretium pellentesque molestie. Suspendisse posuere leo at nisi blandit ultricies. Etiam fringilla accumsan magna, eu pellentesque augue porta vestibulum. Fusce fermentum auctor lectus eu pulvinar. Praesent sed viverra tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras eleifend mi eu orci dictum porta.</p>\r\n', '2019-08-17 10:37:43', '../assets/images/capas/IMG_20180827_14482711017082019103743.jpg', 1),
(102, 'TEsteaaa', '<p><a href=\"../assets/files/o-que-e-o-projeto-politico-pedagogico-ppppdf.pdf\" class=\"modalDoc\" onclick=\"return false;\">../assets/files/o-que-e-o-projeto-politico-pedagogico-ppppdf.pdf</a></p>\r\n\r\n<p><a href=\"../assets/files/orientaÃ§oes para o gestor entender, criar e revisar o ppp.pdf\" class=\"modalDoc\" onclick=\"return false;\">aaaaaaaaaa</a></p>\r\n', '2019-09-09 20:59:22', '../assets/images/capas/49a7a777eb6725f98971a0ed38b887d209092019205922.jpg', 1),
(103, 'Teste funcional', '<p><strong>ISSO</strong> <em>&Eacute;</em> <u>UM</u> <s>TESTE</s> <sub>FUNCIONAL</sub> <sup>DESSE</sup> <span style=\"font-family:Comic Sans MS,cursive\">SITE</span></p>\r\n\r\n<p><a href=\"../assets/files/_Colecao_Os_Pensadores__Vol_01.pdf\" class=\"modalDoc\" onclick=\"return false;\"><span style=\"font-family:Courier New,Courier,monospace\"><span style=\"font-size:48px\">ISSO &Eacute; UM LINK DE UM ARQUIVO</span></span><img alt=\"\" src=\"../assets/images//uploads/49a7a777eb6725f98971a0ed38b887d2.jpg\" style=\"float:left; height:480px; margin:7px; width:240px\" /></a></p>\r\n', '2019-09-10 14:55:17', '../assets/images/capas/e4103355ab7d2da9768ac9dad090518710092019145517.jpg', 1),
(136, 'vamo ve se funciona', '<p><em><strong>aaaaaaaaaaaaaaaaaaaa</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"font-family:Georgia,serif\">BBBBBBBBBBBBBBBBBBBBBB</span></h1>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">agasgasgagsaggasgsfsafsa asjgasgkjas s asjkghajsghjksah&nbsp; kjahsgjkas&nbsp; a as g sag as gas gskjgjak&nbsp; &nbsp;jha jkh jkhkjahg hadgkhdjg&nbsp; &nbsp;jkhgkdsjhgsk hfk&nbsp; hkkj hkj jkah kjashkjas&nbsp; kj hgasjkhgas gkashgkj haskj kjsh gsakh asjkhgkjshgkashgjkjsahkg saj haskjhkasghk gasjkhg akgsh kja gkajhg kjash gjkash gjakshg jsah kjashg ka jkash kajshg jk gakjg sk gaksjg haskj ghkjash&nbsp;agasgasgagsaggasgsfsafsa asjgasgkjas s asjkghajsghjksah&nbsp; kjahsgjkas&nbsp; a as g sag as gas gskjgjak&nbsp; &nbsp;jha jkh jkhkjahg hadgkhdjg&nbsp; &nbsp;jkhgkdsjhgsk hfk&nbsp; hkkj hkj jkah kjashkjas&nbsp; kj hgasjkhgas gkashgkj haskj kjsh gsakh asjkhgkjshgkashgjkjsahkg saj haskjhkasghk gasjkhg akgsh kja gkajhg kjash gjkash gjakshg jsah kjashg ka jkash kajshg jk gakjg sk gaksjg haskj ghkjash</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span class=\"marker\"><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\"><a class=\"modalDoc\" href=\"../assets/files/declaracao_2017323145.pdf\" class=\"modalDoc\" onclick=\"return false;\" onclick=\"return false;\">DOCUMENTO</a></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span class=\"marker\"><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\"><img alt=\"\" src=\"../assets/images//uploads/FB_IMG_1514837051053.jpg\" style=\"float:left; height:501px; width:512px\" /></span></span></span></p>\r\n', '2019-11-01 16:02:05', '../assets/images/capas/FB_IMG_151575917609605112019235924.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudodisciplina`
--

CREATE TABLE `conteudodisciplina` (
  `fk_cd_idDisciplina` int(11) NOT NULL,
  `fk_cd_idConteudo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
('2019-11-14 20:00:00', 19, 20133145);

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
(2, 136),
(49, 136);

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
(7, 'não aconteceu bem dessa maneira', 0, 0, '2020-05-19 16:15:09', 1, 7);

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
('askjaslkgjas', 46),
('askjg', 47),
('aaaaaaaaaaaaaaaaaaaa', 48),
('cafe', 49),
('ai deus', 50),
('Igreja Lutherana', 51),
('aleluia', 52),
('foi porra', 53),
('ai mano', 54);

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
('../assets/images/usuarios/vitao.png', '0', 'vitao@gmail.com', 'Vitao', 1, 4),
('../assets/fotoPerfil/vitao.png', '0', 'victorhugonass@gmail.com', 'Victor Hugo', 11, 4),
('../assets/images/usuarios/FB_IMG_151773482907717112019161029.jpg', '$2y$10$E.HyoCekrErbmkBgZGRkb.sbU9pLQ6CB0wOhcWvr6sTgPJqMJpvqy', 'profNormal@gmail.com', 'professor normal', 7654321, 2),
('../assets/images/usuarios/IMG-20180129-WA001413082019212932.jpg', '$2y$10$MXsDvEmVf1dSAquQoBWjL.aWNiRwQZJ0d9HJLLszTwC9aA95Mv9ea', 'odeioprog@gmail.com', 'Admin Não Tão Normal', 20133145, 4),
('../assets/images/usuarios/FB_IMG_151550896301501112019204806.jpg', '$2y$10$.eYNgXjz1A9aRdLsBChSl.cQJeHPJhVl.A526g.6cheQwHpJZTrhm', 'fodas@fodas.com', 'Galo De Calça', 20178559, 1),
('../assets/images/usuarios/FB_IMG_151575917609607112019024608.jpg', '$2y$10$9iMdFwk6HJeyqwFjJsjYOOavt7/V06iQ2NWb2FBMxOIaO7Cz9ETTG', 'aluno@gmail.com', 'aluno', 1234567890, 1),
('../assets/images/usuarios/FB_IMG_151456944453717112019160525.jpg', '$2y$10$IPWcp/0UwA8.cx067TlAg.FX.yUOsrROoUej6i7fwRWZpaK28oFaa', 'usu@gmail.com', 'usuario normal', 2019101010, 1);

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
  MODIFY `idConteudo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `idDisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `duvida`
--
ALTER TABLE `duvida`
  MODIFY `idDuvida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `resposta`
--
ALTER TABLE `resposta`
  MODIFY `idResposta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tag`
--
ALTER TABLE `tag`
  MODIFY `idTag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
