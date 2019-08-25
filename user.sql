-- MySQL dump 10.13  Distrib 5.6.44, for Linux (x86_64)
--
-- Host: localhost    Database: youtube
-- ------------------------------------------------------
-- Server version	5.6.44
CREATE DATABASE youtube;
USE youtube;

--
-- Table structure for table `users`
--


CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `users`
--


INSERT INTO `users` VALUES (4,'test','$2y$10$aQRhsrcZ/2r19r4x4PhNHeYg6qUFcMX4DrKPODRtUL.eBYJk8s0fm','admin');


--
-- Table structure for table `youtubes`
--

CREATE TABLE `youtubes` (
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `youtubes`
--

INSERT INTO `youtubes` VALUES ('東大受験に向けセンター試験を終えたオードリー春日だったが...','IAA1_9b1Mi8',1),('春日が引くスターのラインについて若林が反論！！！','sOZu-KyNCmg',2),('若林があの熱愛相手について春日に初公表！！','qEetCuhgxws',3),('春日が入国審査で疑われ大ピンチ! その時身を守ってくれた［ある動画］とは...','DAA4ZRvo3cA',4),('若林が重度の偏頭痛を治すため怪しいマッサージに行くが...','o19HbJ1J4Gg',5),('今まで１度だけ、オードリー若林が結婚しようと思った元カノの話','_onRmnYonTQ',6),('芸人だらけの結婚式に参加してひたすら恥ずかしい思いをするオードリーwww','8I5ttPn1Ab4',7),('縮んだTシャツを元に戻すために奮闘する若林だが...','94iPzMUtC8o',8),('君の名は。を観てRADWIMPSのあの曲を知った春日だったが...','hg0fD6SpLTY',9),('【ひらがな推し】ゲストにひらがなけやきが登場！井口の暴走を乗りこなすオードリーwww','c1WeLzg-Y_8',10),('くりぃむしちゅ〜上田の声マネでお祝いコメントを読む若林www','DFfX67Vbao0',11),('若林が破局報道直後のラジオで明かした本音とは...','lJPXjiQKUWI',12),('NHKニュース番組で暴走するも不発に終わる春日w','FBG4AEO3w0Y',13),('高校時代の旧友の豹変ぶりに当時イジり倒してた春日は...','O3309yzvrGg',14),('露天風呂に乱入してきた大学生に春日が怒りのクレーム!!!','ViSkGi1f63U',15),('ケチすぎる春日に番組ディレクターから苦情!!! ','m0WeOkNKx9E',16),('春日のお泊まり旅行での会話があのCMとシンクロwww','5o39WmijIj4',17),('【ひらがな推し】スナック眞緒伝説のラジオ版　春日の恋愛お悩み相談!!!','fX2ABwnj_sU',18),('若林が惚れ込んだキャバ嬢の夢がベタすぎるwww','ZymzdlfnM_0',19),('実際に録音した春日の寝言がヤバすぎるwww','M6aMUMWqWW8',20),('若林が惚れ込んだキャバ嬢とデートへ！！！','KCGw2BGCgRM',21),('春日への強烈なdisラップをかます若林&ENSHU！！！','e3CVfhyLB6A',22),('春日の初キスはプリクラで...///','D1s-WP6XZZE',23),('泥酔した春日と中川パラダイスがディズニーへ行った話','YQAxVXgOIMc',24),('激ダサだと思っていた春日は実はイケメンだったのかもしれない','oEP0v0Pyq-k',25),('春日はモテすぎてひらがなけやきが集まってくる','HeXs7aXahyI',26),('【放送事故】アイツがビタースイートサンバにノって登場！','Y6IJLAsk6Us',27),('【動画あり】春日が一番笑った若林のSASUKE不幸話www','ppZcSU-9a_A',28),('春日がドッキリに嵌められて精神崩壊するまで','20orQCfSYfo',29),('目の前で春日にMVS獲られて発狂する若林www','5p0_IMv9Qb4',30),('朝起きたらむつみ荘のドアがどこでもドアになってた話','obP6FN32gGA',31),('キン肉マンを習得した日向坂の頭を撫でる方法を知りたい若林','JrwhJDT_nbA',32),('春日は「表デルヤ」に改名します','rUX0YB0UT9s',33),('電車で頭ポンポン撫でてるカップルやってんなぁおぃ!!!','hmzs0cpqr-4',34),('病みすぎて仕事前に車中泊してる若林www','IdkuYJRvfCo',35),('春日が子供達のヒーローになった日','sTv8MBJ55KU',36),('少しでも明るく笑って欲しかったオードリーの漫才','ssH--vAQ0c0',37),('25年借りたものを絶対に返して欲しくない春日','hMceAQTl1wI',38),('子供がいるから日向坂46最年少上村ひなので泣いてしまう佐藤満春','KnNktgaN_CI',39),('泣くほど怖いB面のオードリー春日www','1B24rGbdrLo',40),('春日語にブチ切れる若林www','j8lGGNfi7FI',41),('若林が素人リスナーと絶対に負けられない大喜利対決をするが...','RS9VUvM6CdY',42),('【祝結婚】春日を愛し、若林を忌み嫌う女の恐怖のメール','d-jF7OsV-fk',43),('カスミン公開プロポーズ裏話とオードリーの今後について','r2FJoHyVHco',44),('フライデーを撮られた春日に激怒し鉄拳制裁する若林！！！','ajy64Mg3veA',45),('たった1人でラジオをすることになった春日www','rnuR9xd48qI',46),('若林のトイレが壊れてウ◯コ泥棒になった話','mbz_52F7NFc',47),('下積み時代に春日が死ぬほど落ち込んだ話','wvdd2tICrfM',48),('騒ぎの中、春日を励ましてくれたのは共に汗を流す同志だった','XbuC6rrn4Jk',49),('若林のイタすぎるモンゴル旅行www','BW82LWVMPa4',50),('乳首だけ切り抜かれたTシャツを守り抜きながら説教される春日www','0mzXeAPsLjY',51),('ドS若林の正論ツッコミで春日の心が折れたフィンスイミング大会の話','m1Mmk_lBjFM',52),('ラジオ史上最もありえない噛み方をした春日www','FiD216weGv8',53),('春日の相槌が不快すぎる若林執筆「ナナメの夕暮れ」の話','D7dchDYsOiE',54),('スマホの機種変がうまくできなくて超不機嫌な若林www','4Tnr152myrQ',55),('本気でセンター試験に挑んだ芸人 春日俊彰','OdYuZSExTSE',56),('春日が昔盗まれた50万円をテレビの力で取り返したい','deXTlILlUIM',57),('外国人が持つ「漫談チーム オドリ」の印象のお話','d8F5owhT-XA',58),('2018年度オードリーのオールナイトニッポン個人的No.1 綺麗なオチトーク','6Z77-YW1VQ8',59),('出演CMをバカにされて春日をぶっとばしたい若林www','-HPTgYVbvws',60),('あの超有名家族からオードリーへ応援メッセージ','Cv0S8DwuFr0',61),('春日の父親をメチャクチャ悪く言う若林www','SWVIr79ZIF4',62),('若林の汚い太ももにラジオへ苦情の電話が...','XmTuMwifc3Q',63),('ゲスト:アンガールズ田中!!! 嵐の40代婚活トーク','Any7cy-5g40',64),('誰も知らないパリピ地獄BBQに参加した春日www','4O099RG5INI',65),('春日さんが猛暑を全裸で乗り切ります','zWeNrb4swsQ',66);


-- Dump completed on 2019-08-25  3:58:15
