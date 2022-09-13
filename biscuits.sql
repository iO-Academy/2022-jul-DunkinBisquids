# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.39)
# Database: biscuits
# Generation Time: 2022-09-12 13:01:45 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table biscuits
# ------------------------------------------------------------

DROP TABLE IF EXISTS `biscuits`;

CREATE TABLE `biscuits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `RDT` int(11) DEFAULT NULL,
  `desc` varchar(1000) DEFAULT NULL,
  `wikipedia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `biscuits` WRITE;
/*!40000 ALTER TABLE `biscuits` DISABLE KEYS */;

INSERT INTO `biscuits` (`id`, `name`, `img`, `RDT`, `desc`, `wikipedia`)
VALUES
	(1,'Digestive','https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg',5,'A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that originated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to aid digestion.','https://en.wikipedia.org/wiki/Digestive_biscuit'),
	(2,'Ginger Nut','https://peasepudding.files.wordpress.com/2010/05/gingernut.jpg',3,'A Ginger Nut is a globally popular biscuit flavoured with ginger. Ginger snaps are flavoured with powdered ginger and a variety of other spices, most commonly cinnamon, molasses and clove.','https://en.wikipedia.org/wiki/Ginger_snap'),
	(3,'Fig Roll','https://upload.wikimedia.org/wikipedia/commons/c/c9/Fig-Newtons-Stacked.jpg',4,'The fig roll or fig bar is a cookie or biscuit consisting of a rolled cake or pastry filled with fig paste.','https://en.wikipedia.org/wiki/Fig_roll'),
	(4,'Rich Tea','http://www.freeimageslive.com/galleries/food/dessert/pics/foodbiscuit00061g.jpg',4,'Rich tea is a type of sweet biscuit; the ingredients generally include wheat flour, sugar, vegetable oil and malt extract. Originally called Tea Biscuits, they were developed in the 17th century in Yorkshire, England for the upper classes as a light snack between full-course meals.','https://en.wikipedia.org/wiki/Rich_Tea'),
	(5,'Custard Cream','https://d11fdyfhxcs9cr.cloudfront.net/templates/184807/myimages/custard_cream_1.jpg',8,'A custard cream is a type of sandwich biscuit popular in the United Kingdom and Republic of Ireland filled with a creamy, custard-flavoured centre. Traditionally, the filling was buttercream but nowadays cheaper fats have replaced butter in mass-produced biscuits.','https://en.wikipedia.org/wiki/Custard_cream'),
	(6,'Garibaldi','http://everybodylikessandwiches.com/app/uploads/2014/07/biscuits7.jpg',5,'The Garibaldi biscuit consists of currants squashed and baked between two thin oblongs of biscuit dough?a sort of currant sandwich. The biscuits are similar to Eccles cake as well as the Golden Raisin Biscuits once made by Sunshine Biscuits.','https://en.wikipedia.org/wiki/Garibaldi_biscuit'),
	(7,'Choc Chip Cookie','https://pediaa.com/wp-content/uploads/2015/12/Difference-Between-Cookies-and-Biscuits-image-1-1024x680.jpg',6,'A chocolate chip cookie is a drop cookie that features chocolate chips or chocolate morsels as its distinguishing ingredient. Chocolate chip cookies originated in the United States around 1938, when Ruth Graves Wakefield chopped up a Nestlé semi-sweet chocolate bar and added the chopped chocolate to a cookie recipe.','https://en.wikipedia.org/wiki/Chocolate_chip_cookie'),
	(8,'Hobnob','https://upload.wikimedia.org/wikipedia/commons/9/95/Hobnobs.jpg',9,'Hobnobs is the brand name of a commercial biscuit. They are made from rolled oats and jumbo oats, similar to a flapjack-digestive biscuit hybrid, and are among the most popular British biscuits. McVitie\'s launched Hobnobs in 1985 and a milk chocolate variant in 1987.','https://en.wikipedia.org/wiki/Hobnob_biscuit'),
	(9,'Malted Milk','https://www.telegraph.co.uk/content/dam/food-and-drink/2016/05/26/20_Malts_trans_NvBQzQNjv4BqqVzuuqpFlyLIwiB6NTmJwfSVWeZ_vEN7c6bHu2jJnT8.jpg?imwidth=450',6,'The malted milk is a type of biscuit, first produced by Elkes Biscuits of Uttoxeter (now owned by Fox\'s Biscuits) in 1924. They are named after their malt flavouring and milk content.','https://en.wikipedia.org/wiki/Malted_milk_(biscuit)'),
	(10,'Chocolate Digestive','https://i.guim.co.uk/img/media/5a8429150cec3c15ea91652e6e080a1cbb0c9ba8/196_249_5452_3273/master/5452.jpg?width=700&quality=85&auto=format&fit=max&s=d60ac1a07b4f09ee5f38cd8f5437e1c6',4,'Digestive biscuits which are coated on the bottom with milk, dark or white chocolate are also available. Originally produced by McVitie\'s in 1925 in the UK as the Chocolate Homewheat Digestive, other varieties include the basic biscuit with chocolate shavings throughout, or a layer of caramel.','https://en.wikipedia.org/wiki/Digestive_biscuit#Chocolate_digestives'),
	(11,'Chocolate Hobnob','https://i2-prod.mirror.co.uk/incoming/article3614584.ece/ALTERNATES/s615/Two-Chocolate-Hobnobs.jpg',8,'Hobnobs is the brand name of a commercial biscuit. They are made from rolled oats and jumbo oats, similar to a flapjack-digestive biscuit hybrid, and are among the most popular British biscuits. McVitie\'s launched Hobnobs in 1985 and a milk chocolate variant in 1987.','https://en.wikipedia.org/wiki/Hobnob_biscuit'),
	(12,'Jammie Dodger','http://ichef.bbci.co.uk/news/976/cpsprodpb/168D8/production/_88667329_alamy_jammie976.jpg',8,'Jammie Dodgers are a popular British biscuit, made from shortbread with a raspberry or strawberry flavoured jam filling. They are currently produced by Burton\'s Biscuit Company at its factory in Llantarnam. In 2009, Jammie Dodgers were the most popular children\'s sweet biscuit brand in the United Kingdom, with 40% of the year\'s sales consumed by adults.','https://en.wikipedia.org/wiki/Jammie_Dodgers'),
	(13,'Shortbread','https://www.christinascucina.com/wp-content/uploads/2014/01/fullsizeoutput_e3eb-735x490.jpeg',7,'Shortbread is a traditional Scottish biscuit usually made from one part white sugar, two parts butter, and three to four parts plain wheat flour. Other ingredients such as rice flour or cornflour are often added or part-substitute the flour to alter the texture.','https://en.wikipedia.org/wiki/Shortbread'),
	(14,'Bourbon','http://3.bp.blogspot.com/-iubUP6LCPfM/U--ECQ-u_JI/AAAAAAAAK14/OpLgWbiPiow/s1600/bourbons.jpg',7,'The Bourbon biscuit is a sandwich style biscuit consisting of two thin rectangular dark chocolate-flavoured biscuits with a chocolate buttercream filling.','https://en.wikipedia.org/wiki/Bourbon_biscuit'),
	(15,'Oreo','https://hips.hearstapps.com/del.h-cdn.co/assets/15/23/3200x2381/gallery-1433469460-oreo-plate.jpg?resize=1200:*',3,'Oreo is an American sandwich cookie consisting of two (usually chocolate) wafers with a sweet crème filling. Introduced on March 6, 1912, Oreo is the best selling cookie brand in the United States.','https://en.wikipedia.org/wiki/Oreo'),
	(16,'Nice','https://i.dailymail.co.uk/i/pix/2017/10/24/09/45A04E4400000578-5011415-image-a-1_1508832107666.jpg',4,'A Nice biscuit is a plain or coconut-flavoured biscuit. It is thin, rectangular in shape, with rounded bumps on the edges, and lightly covered with a scattering of large sugar crystals, often with the word \'NICE\' imprinted on top in sans-serif capital letters.','https://en.wikipedia.org/wiki/Nice_biscuit'),
	(17,'Party Ring','https://slummysinglemummy.com/wp-content/uploads/2018/04/DSC_0054.jpg',5,'The party ring is a British biscuit first made by Fox\'s Biscuits in 1983.[1] It is a circular biscuit with a central finger-sized hole. On top of this is a layer of hard, coloured icing with \'wiggly\' lines in a different colour.','https://en.wikipedia.org/wiki/Fox%27s_Biscuits'),
	(18,'Penguin','https://img.taste.com.au/i9iqAA6s/w1200-h630-cfill/taste/2020/07/penguin-unwrapped-163736-1.jpg',5,'Penguins are milk chocolate covered biscuit bars filled with chocolate cream. They are produced by Pladis\'s manufacturing division McVitie\'s at their Stockport factory.','https://en.wikipedia.org/wiki/Penguin_(biscuit)'),
	(19,'Tim Tam','https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Tim_Tams.jpg/440px-Tim_Tams.jpg',10,'Tim Tam is a brand of chocolate biscuit introduced by the Australian biscuit company Arnott\'s in 1964. It consists of two malted biscuits separated by a light hard chocolate cream filling and coated in a thin layer of textured chocolate.','https://en.wikipedia.org/wiki/Tim_Tam');

/*!40000 ALTER TABLE `biscuits` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
