-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 02:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piyush_madrid`
--
CREATE DATABASE IF NOT EXISTS `piyush_madrid` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `piyush_madrid`;

-- --------------------------------------------------------

--
-- Table structure for table `piyush_admin`
--

DROP TABLE IF EXISTS `piyush_admin`;
CREATE TABLE `piyush_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piyush_admin`
--

INSERT INTO `piyush_admin` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'piyush_aswani', 'aswanipiyush1234@gmail.com', '292529', '2024-06-11 10:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `piyush_femalecards`
--

DROP TABLE IF EXISTS `piyush_femalecards`;
CREATE TABLE `piyush_femalecards` (
  `gid` bigint(20) NOT NULL,
  `id` int(11) NOT NULL,
  `names` varchar(150) NOT NULL,
  `positions` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT 'active:1,deactive:2',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piyush_femalecards`
--

INSERT INTO `piyush_femalecards` (`gid`, `id`, `names`, `positions`, `image`, `status`, `created_at`) VALUES
(666, 1, '1 Maria', 'GK', '666c4a1e6ec27mass.png', 1, '2024-06-14 11:29:57'),
(666, 2, '13 Chavas', 'GK', '666c2adaddb5echavas.png', 1, '2024-06-14 11:34:50'),
(666, 3, '2 K.Robles', 'DEFEND', '666c2b0204d27robles.png', 1, '2024-06-14 11:35:30'),
(666, 4, '4 Dew', 'DEFEND', '666c2b140dc7fdew.png', 1, '2024-06-14 11:35:48'),
(666, 5, '5 Ivana', 'DEFEND', '666c2b2659c9divana.png', 1, '2024-06-14 11:36:06'),
(666, 6, '7 Olga', 'DEFEND', '666c2b3a44d6bolga.png', 1, '2024-06-14 11:36:26'),
(666, 7, '11 Oihane', 'DEFEND', '666c2b4ef29e0oihane.png', 1, '2024-06-14 11:36:46'),
(666, 8, '14 Kathellen', 'DEFEND', '666c2b6311f4bkathellen.png', 1, '2024-06-14 11:37:07'),
(666, 9, '23 Svana', 'DEFEND', '666c2b762f24fsvava.png', 1, '2024-06-14 11:37:26'),
(666, 10, '3 Teresa', 'MIDFIELD', '666c2bb37d637teresa.png', 1, '2024-06-14 11:38:27'),
(666, 11, '6 Toletti', 'MIDFIELD', '666c2bc4cc684toletti.png', 1, '2024-06-14 11:38:44'),
(666, 12, '8 M.Oroz', 'MIDFIELD', '666c2bf89c205oroz.png', 1, '2024-06-14 11:39:36'),
(666, 13, '10 Weir', 'MIDFIELD', '666c2c0e32b33weir.png', 1, '2024-06-14 11:39:58'),
(666, 14, '21 Zornoza', 'MIDFIELD', '666c2c21cb4aczornoza.png', 1, '2024-06-14 11:40:17'),
(666, 15, '24 Freja', 'MIDFIELD', '666c2c35ee44esiri.png', 1, '2024-06-14 11:40:37'),
(666, 16, '9 Bruun', 'FORWARD', '666c2c5eea935brunn.png', 1, '2024-06-14 11:41:18'),
(666, 17, '15 Satin', 'FORWARD', '666c2c71ca850satin.png', 1, '2024-06-14 11:41:37'),
(666, 18, '16 Moller', 'FORWARD', '666c2c83f292amoller.png', 1, '2024-06-14 11:41:55'),
(666, 19, '17 Camacho', 'FORWARD', '666c2c956eea8camacho.png', 1, '2024-06-14 11:42:13'),
(666, 20, '19 Cute', 'FORWARD', '666c2ca95ffcdcute.png', 1, '2024-06-14 11:42:33'),
(666, 21, '20 Feller', 'FORWARD', '666c2cbc0b17afeller.png', 1, '2024-06-14 11:42:52'),
(666, 22, '22 Athena', 'FORWARD', '666c2cd14795aAthena.png', 1, '2024-06-14 11:43:13'),
(666, 23, 'Alberto Toril', 'COACH', '666c2cf812f49alberto.png', 1, '2024-06-14 11:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `piyush_history`
--

DROP TABLE IF EXISTS `piyush_history`;
CREATE TABLE `piyush_history` (
  `gid` bigint(20) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1:-active,2:-deactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piyush_history`
--

INSERT INTO `piyush_history` (`gid`, `id`, `name`, `title`, `description`, `image`, `status`, `created_at`) VALUES
(666, 22, '2021-2030', '', '<p><strong>Real Madrid</strong> wrote a new chapter in football history by securing their 15th European Cup in 2024. The Whites reaffirmed their supremacy in this competition against Borussia Dortmund in London. Before that, in 2022, the team had already celebrated another historic milestone with La Decimocuarta, which they won in Paris against Liverpool. The first years of this decade have also yielded the 35th and 36th league titles, the fifth Uefa Super Cup, the eighth Club World Cup, the 20th Copa del Rey and two more Spanish Super Cups.</p>\r\n\r\n<p>Under Ancelotti&#39;s guidance, Real Madrid secured a 14th European Cup. In his second spell at the club, the Italian coach lifted the continental trophy again in 2022, after beating Liverpool in Paris courtesy of a goal from Vini Jr. It was the crowning glory of a spectacular 2021/22 season in which two more titles were won. First, the club&#39;s 12th Spanish Super Cup, beating Athletic in the final (0-2). And then, the 35th league title. With four games still to play, the team lifted the trophy in front of their fans after thumping Espanyol 4-0.</p>\r\n\r\n<p>Success followed at the start of the 2022/23 campaign with a Uefa Super Cup win over Eintracht Frankfurt (2-0). In February 2023, the Whites clinched their eighth Club World Cup with a 5-3 win over Al Hilal in the final in Rabat. And in May, Ancelotti&#39;s charges sealed their third trophy of the season by beating Osasuna in the final of the Copa del Rey courtesy of a Rodrygo brace.</p>\r\n\r\n<p><strong>Champions League, LaLiga and Spanish Super Cup triumphs</strong><br />\r\nLa Decimoquinta was the crowning glory of an excellent 2023/24 season. The madridistas beat Borussia Dortmund in the final at Wembley, ending the competition undefeated. Prior to that, Ancelotti&#39;s side clinched LaLiga number 36 and overcame Barcelona in the final for their 13th Spanish Super Cup.</p>\r\n', '666acd5a7a9f4champions_big.png', 1, '2024-06-13 10:43:38'),
(666, 23, '2011-2020', '', '<p>Real Madrid have once again defined an era in world football, winning four European Cups and four Club World Cup. In 2014, they lifted La D&eacute;cima, before winning the Club World Cup that same year. Zidane&#39;s first two seasons in the dugout were historic, clinching La Und&eacute;cima and La Duod&eacute;cima. What&#39;s more, 2017 became a record-breaking year when the team got their hands on five trophies: The European Cup, the Club World Cup, LaLiga and the European and Spanish Super Cups. La Decimotercera then came in 2018, when they came out on top against Liverpool in Kiev.</p>\r\n\r\n<p>In the first few years of this new decade three trophies were added to the cabinet by Jos&eacute; Mourinho&#39;s Real Madrid. The most notable was the 2011-12 Liga title, which they won with a record-breaking 100 points, the highest score achieved in the history of the championship at that stage, and 121 goals. They also beat Barcelona to clinch a Copa del Rey and a Supercopa de Espa&ntilde;a.</p>\r\n\r\n<p>In June 2013, Carlo Ancelotti arrived at Real Madrid. The Italian won four trophies with the Whites, the first coming in the shape of Real Madrid&#39;s nineteenth Copa del Rey, after beating Barcelona 1-2 in the final. On 24 May 2014, Madrid lifted the European Cup once again, claiming La D&eacute;cima with a 4-1 victory over Atl&eacute;tico in Lisbon. Goals from Ramos, Bale, Marcelo and Cristiano secured the triumph.</p>\r\n\r\n<p>Two further triumphs arrived in the second season under Ancelotti: The European Super Cup, against Sevilla and Real Madrid&rsquo;s first World Club Cup, against San Lorenzo. This meant Real Madrid capped of a historic year in their history in 2014, making it the year in which most trophies were won by the club. In June 2015, Rafa Ben&iacute;tez returned to the club where he cut his teeth, to take charge of the Whites. Then, in January 2016, Zidane made the step up to first team coach, following his legendary career as a player. His first season ended with the team lifting the La Und&eacute;cima trophy, against Atl&eacute;tico in Mil&aacute;n.</p>\r\n\r\n<p>The French tactician&#39;s second season in charge delivered a clutch of silverware. Real Madrid secured the Duod&eacute;cima, becoming the first-ever team to successfully defend their continental crown in the Champions League era. Alongside this success in Europe&#39;s elite club competition, the team also captured the 2016/17 LaLiga crown, the club&#39;s third UEFA Super Cup and a second Club World Cup, after overcoming Manchester United, as well as a 10th Spanish Super Cup. In December 2017, the Whites clinched another Club World Cup crown and this fifth piece of silverware saw the team set a new record for the number of titles claimed in a calendar year.</p>\r\n\r\n<p>The year 2018 is also part of the madridista legacy thanks to the club&#39;s Decimotercera, secured against Liverpool following victory in the showpiece in Kiev, whilst that year also yielded the club&#39;s seventh world club crown, won in the United Arab Emirates against Al Ain. Meanwhile, 2020 got up and running with an 11th Spanish Super Cup, which came on the back of victory over Atl&eacute;tico Madrid in Jeddah (Saudi Arabia). In July, Zinedine Zidane&#39;s men captured the club&#39;s 34th league crown.</p>\r\n', '666acdfd4428dchampions_big.png', 1, '2024-06-13 10:46:21'),
(666, 24, '2001-2010', '', '<p>In this decade Real Madrid made a proud return to triumph on the continent, winning its Ninth European Cup and its third Intercontinental Cup as well as five Ligas, among other titles. Also,&nbsp;<strong>Florentino P&eacute;rez</strong>&nbsp;reorganised the club&#39;s economy to make it the richest on the planet.</p>\r\n\r\n<p><strong>Vicente del Bosque</strong>&nbsp;stayed on as manager until 2003. His philosophy and brand of football made Madrid into a team of champions. During his time at the helm, the Whites celebrated another European Cup victory, another Intercontinental Cup, two domestic championships, a Supercup of Spain and a UEFA Super Cup. It was an era that is only comparable with the Real Madrid of the 50s and 60s.</p>\r\n\r\n<p>Florentino P&eacute;rez&#39;s management led to profound changes in the club&#39;s structure. He reorganised the institution&#39;s economy, making it the richest club in the world, and made far-reaching changes at the top of the organisation. He completely renovated the Santiago Bernab&eacute;u, created a new sports complex in Valdebebas and opened the Alfredo Di St&eacute;fano stadium. Meanwhile, on the pitch, he made the fans&#39; dreams come true by bringing in&nbsp;<strong>Zidane, Ronaldo</strong>&nbsp;and&nbsp;<strong>Beckham</strong>.</p>\r\n\r\n<p>In his second spell (2006), the president continued to delight the supporters, signing the best players and managers in the world. Great players such as&nbsp;<strong>Cristiano Ronaldo</strong>&nbsp;and&nbsp;<strong>Benzem&aacute;</strong>&nbsp;among others, were brought in, along with manager Jos&eacute; Mourinho. The Portuguese arrived in the Santiago Bernab&eacute;u a week after being crowned champions of Europe with Inter Milan in the same stadium.</p>\r\n', '666ace7b8debfchampions_big.png', 1, '2024-06-13 10:48:27'),
(666, 25, '1991-2001', '', '<p><strong>Jorge Valdano</strong>,&nbsp;<strong>Fabio Capello</strong>&nbsp;and&nbsp;<strong>Vicente del Bosque</strong>&nbsp;were the names to remember this decade. The three successful coaches took Real Madrid to the top in La Liga and in Europe and they were helped on their way by some superstars. Players such as&nbsp;<strong>Redondo</strong>,&nbsp;<strong>Laudrup,</strong>&nbsp;<strong>Seedorf</strong>,&nbsp;<strong>Suker</strong>,&nbsp;<strong>Mijatovic</strong>&nbsp;and&nbsp;<strong>Roberto Carlos</strong>&nbsp;all arrived at the club in the 90s.</p>\r\n\r\n<p>Having demonstrated his abilities at the helm of Tenerife, where his team played an attractive and efficient brand of football, Valdano returned to Real Madrid in 1994. With new signings&nbsp;<strong>Redondo, Laudrup</strong>, Amavisca and Ca&ntilde;izares, the Madrid side went on to win the league title. That same season, youth-academy player&nbsp;<strong>Ra&uacute;l&nbsp;</strong>made his debut. On the 29th&nbsp;of October at 17 years of age, the young player from Madrid filled in for&nbsp;<strong>Mart&iacute;n V&aacute;zquez&nbsp;</strong>in La Romareda, where he would put in a stunning performance. A new legend was born.</p>\r\n\r\n<p>Early in 1995, Valdano&#39;s Real Madrid beat Johan Cruyff&#39;s Bar&ccedil;a 5-0 in the Santiago Bernab&eacute;u. It was a magical game that was televised and followed by more than 10 million viewers. But the bad results in the 95-96 season forced Lorenzo Sanz to bring in Fabio Capello, one of the most sought-after coaches in European football. The Italian had a dream squad. The signings of Seedorf, Suker, Mijatovic and Roberto Carlos, together with Ra&uacute;l,&nbsp;<strong>Hierro</strong>&nbsp;and Redondo, took Madrid to a new league title.</p>\r\n\r\n<p>The 20th&nbsp;of May 1998 was a historic day for the club. After 32 years, and under the orders of Jupp Heynckes, Real Madrid conquered Europe once more by beating Juventus in the final of the Champions League. A goal from&nbsp;<strong>Pedja Mijatovic</strong>&nbsp;in the 66th&nbsp;minute brought number Seven from the Amsterdam Arena to the Santiago Bernab&eacute;u trophy room. In December that year, this time at the hands of Guus Hiddink, Madrid won its second Intercontinental Cup.</p>\r\n\r\n<p><br />\r\nIn 1999, and after a lifetime connected to the club as a player, Vicente del Bosque returned as the first-team manager. The man from Salamanca managed to instil a philosophy in the team that made them the best in the continent. His first title came in 2000: the Eighth European Cup. In the same year,&nbsp;<strong>Florentino P&eacute;rez</strong>&nbsp;(enlazar ficha) took over the presidency and signed one of the best players on the planet,&nbsp;<strong>Luis Figo</strong></p>\r\n', '666acee00a948champions_big.png', 1, '2024-06-13 10:50:08'),
(666, 26, '1981-1990', '', '<p>The 80s were dominated by a brilliant generation of youth-team players. &lsquo;Vulture&#39;s Cohort&rsquo;, led by&nbsp;<strong>Emilio Butrague&ntilde;o</strong>, made Real Madrid into one of the best teams in history. The goals of&nbsp;<strong>Hugo S&aacute;nchez&nbsp;</strong>also played an important role in this successful decade. The Whites won the first two UEFA Cups with some historic comebacks in Europe and magical nights in the Bernab&eacute;u.</p>\r\n\r\n<p>In 1983, Castilla was crowned champion of the Segunda Divisi&oacute;n under the orders of&nbsp;<strong>Amancio</strong>&nbsp;and with some stunning performances from five players:&nbsp;<strong>Pardeza, Sanch&iacute;s, M&iacute;chel, Mart&iacute;n V&aacute;zquez&nbsp;</strong>and Butrague&ntilde;o. These gems from the academy were a real discovery and&nbsp;<strong>Di St&eacute;fano</strong>&nbsp;did not hesitate to prepare them for the first team. The group made its breakthrough in 1985, winning five consecutive La Ligas and setting important records, such as the competition&#39;s top goal-scorer with 107</p>\r\n\r\n<p>Mexican striker Hugo S&aacute;nchez had a lot to do with this success. Together with veterans&nbsp;<strong>Juanito, Valdano</strong>&nbsp;and&nbsp;<strong>Santillana</strong>, he formed a &#39;Cohort&#39; that was close to perfection. In his seven seasons in white he scored 251 goals, and was the league&#39;s top goal-scorer in four of them. His famous front-flip celebrations are burned into the retinas of Madrid fans.</p>\r\n\r\n<p>In this decade Real Madrid also won its first UEFA title. It came in the 1984-85 season, in a two-legged final where they beat Videoton, a little-known team who had knocked out PSG, Partiz&aacute;n Belgrade and Manchester United. In the following campaign, the Whites successfully defended their title thanks to an unbelievable comeback. After losing the first leg 5-1 to Borussia M&ouml;nchengladbach, they won an epic tie in the return match with two goals from Valdano and another brace from Santillana to reach the quarters (4-0).</p>\r\n', '666acf2be65f5f_uefa.png', 1, '2024-06-13 10:51:23'),
(666, 27, '1971-1980', '', '<p>The decade in which the team won its sixth La Liga trophy to keep was also marked by the death of Santiago Bernab&eacute;u. Football was in mourning on the 2nd&nbsp;of June 1978 at the loss of the president who took Real Madrid to the top.&nbsp;<strong>Luis de Carlos&nbsp;</strong>replaced his best friend and mentor. He ran the Whites for seven years. In that time he was able to embody and transmit the values of the club, earning himself recognition around the world.</p>\r\n\r\n<p>The team proved to be very solid at home in the league in the 1978-79 season, with only five teams taking a point from the Bernab&eacute;u: Espanyol, Sevilla, H&eacute;rcules, Las Palmas and Atl&eacute;tico de Madrid.&nbsp;<strong>Molowny&nbsp;</strong>knew how to get the best out of his players, also making a difference on the road. The win in the Molin&oacute;n (0-1, with a goal from&nbsp;<strong>Santillana</strong>)&nbsp; was key to the&nbsp;<em>merengue&#39;s</em>&nbsp;sixth league title.</p>\r\n\r\n<p>The team&#39;s brilliant performances were tarnished by the death of the club&#39;s president. Real Madrid wanted to make a posthumous gesture of thanks to the late&nbsp;<strong>Santiago Bernab&eacute;u</strong>. The goal was for his great work at the club to live on in the collective memory. On the 31st&nbsp;of August 1979 the first edition of the tournament that bore his name was played. Four of continental football&#39;s great champions took part: Real Madrid, Ajax, Bayern Munich and Milan.</p>\r\n', '666acf6c6c5c3f_copa_rey.png', 1, '2024-06-13 10:52:28'),
(666, 28, '1961-1970', '', '<p>The team was going through a period of change. In Spain it was far superior, winning eight league championships, five of them on the trot and including and league-cup double. Overseas it won its Sixth European Cup, with the &lsquo;<em>y&eacute;-y&eacute;&rsquo;</em>&nbsp;team.</p>\r\n\r\n<p>In the 1961-62 season, Real Madrid again enjoyed an excellent campaign as they claimed a league and cup double, and were runners-up in the European Cup. On 18 March 1962, Madrid sealed another title win at their stadium, with two matches to spare. On 8 July 1962, the Whites beat Sevilla 2-1 in the cup final.</p>\r\n\r\n<p>They were the kings of Spain and of Europe. On the 11th&nbsp;of May 1966, Real Madrid were crowned champions of Europe once again, against Partiz&aacute;n (2-1). Without Di St&eacute;fano and Puskas, the most experienced player was&nbsp;<strong>Gento</strong>. The rest of the team was made up by Araquist&aacute;in, Pach&iacute;n, Pedro de Felipe, Sanch&iacute;s, Pirri, Zoco, Serena, Amancio, Grosso and Vel&aacute;zquez. After winning their Sixth European Cup, four of the players were photographed impersonating the Beatles. They then became known as the &lsquo;ye-y&eacute;&rsquo; Madrid because of the chorus of the English group&#39;s song &lsquo;She Loves You&rsquo;.</p>\r\n', '666acfcfeda6df_liga.png', 1, '2024-06-13 10:54:07'),
(666, 29, '1951-1960', '', '<p>This was a brilliant decade. A pleiad of players, led by Alfredo Di St&eacute;fano, put Real Madrid at the summit of football. The team that won five European Cups in a row amazed the world with its spectacular brand of football. An endless torrent of success made the club the most decorated in Europe. It was proclaimed the &#39;king of kings&#39; and it won the first edition of the Intercontinental Cup (1960) to put the icing on the cake.</p>\r\n\r\n<p>Football in Europe was being played at a high standard. Aware of this fact, at the start of the 50s, renowned French journalist Gabriel Hanot dreamed up a competition that would bring together the champions of each European league. His colleague Jacques Ferr&aacute;n joined the project. Between them they drew up some regulations that reached the headquarters of the Union of European Football Associations (UEFA). The proposal was much to the liking of the heads of French publication &lsquo;L&rsquo;Equipe&rsquo;<em>,</em>&nbsp;which organised the tournament.</p>\r\n\r\n<p>They named a commission that included Santiago Bernab&eacute;u as one of its vice presidents. The championship became a reality in 1956. Real Madrid won the first European Cup in history on the 13th&nbsp;of June that year. It was the first of the five consecutive cups it would win. This great feat was achieved at the hands of one of history&#39;s greatest footballers,&nbsp;<strong>Alfredo Di St&eacute;fano,</strong>&nbsp; and during Bernab&eacute;u&#39;s presidency.</p>\r\n\r\n<p>Madrid discovered Di St&eacute;fano in the club&#39;s fiftieth anniversary year (1952), when the team took on Millonarios (4-2). Since then the club had its sights set on him and the following year he made his debut as a Madrid player. He became the best footballer in the Whites&#39; history, receiving two Ballon d&#39;Ors (1957 and 1959) as one of the stars of the team that ruled Europe for five years in a row. Everyone was enchanted by his wizardry and he raised the bar for the rest.</p>\r\n\r\n<p>In the 1959-1960 season, ex-Madrid player&nbsp;<strong>Miguel Mu&ntilde;oz</strong>&nbsp;(enlazar ficha) took the reins of Real Madrid. He won the Fifth European Cup in his first season as manager, becoming the first footballer to win the European Cup as a player (three times) and as a manager. In 1960, the&nbsp;<em>merengues</em>&nbsp;were also crowned champions of the world as they won the first edition of the Intercontinental Cup (Real Madrid 5-1 Pe&ntilde;arol de Montevideo).</p>\r\n', '666ad07af2b81f_copa_europa.png', 1, '2024-06-13 10:56:58'),
(666, 30, '1941-1950', '', '<p>This period would give rise to the entity&#39;s future success stories and also to the rivalry with Barcelona. The Chamart&iacute;n stadium had to be rebuilt and a new team had to be put together and brought up to speed for competition. Thanks to&nbsp;<strong>Santiago Bernab&eacute;u</strong>, all these challenges were met with aplomb. It was in this decade that the foundations were set for what would later be recognised as the &lsquo;Best Club of the Twentieth Century&rsquo;.</p>\r\n\r\n<p>The Whites tried to alleviate the effects of the Civil War (1936-39), which left it without some of its most emblematic names. Some important players were brought in, such as Pruden, Corona and Ba&ntilde;&oacute;n. In 1943, in the semi-final of the cup, Real Madrid met Barcelona. In Les Corts, the eleven&nbsp;<em>azulgranas</em>&nbsp;won 3-0. In the return match, the Whites knocked out their opponent with an extraordinary comeback. Madrid won 11-1, and an eternal rivalry was born.</p>\r\n\r\n<p>On the 15th&nbsp;of December 1943,&nbsp;<strong>Santiago Bernab&eacute;u</strong>&nbsp;became the club&#39;s president. It was the start of the legendary mandate in which the club pulled off some great deeds. He took charge intent on building bridges between all the clubs. In 1948 he was named president of honour and merit of the Whites &ldquo;for his extraordinary work and continuing concern for the well-being of the Sociedad Real Madrid Club de F&uacute;tbol&rdquo;.</p>\r\n\r\n<p>Real Madrid faced Valencia in the final (June 9th&nbsp;1946), ten years after the team had won its previous Copa de Espa&ntilde;a. In the Montju&iuml;c stadium the Whites dominated the game, beating Valencia 3-1, to win the cup once more. The mayor of Madrid presented&nbsp;<strong>Ipi&ntilde;a</strong>&nbsp;with the Sports Medal of the City for his part in 237 official matches. Each player received a leather purse with a one thousand peseta (6&euro;) note.</p>\r\n', '666ad0e1b6bfcf_copa_general.png', 1, '2024-06-13 10:58:41'),
(666, 31, '1931-1940', '', '<p>The arrival of<strong>&nbsp;Ricardo Zamora</strong>&nbsp;was soon followed by that of&nbsp;<strong>Ciriaco</strong>&nbsp;and&nbsp;<strong>Quincoces</strong>. The trio formed the best defence in the world. The result was four titles in as many years (two in La Liga and two Copas). The seeds of Madrid&#39;s reputation as winners had been sown, but the outbreak of the Civil War was to cut their run short.</p>\r\n\r\n<p>Real Madrid had now accepted the fact that the success they craved would only be possible with the best players. With Zamora, Ciriaco, Quincoces, among others, the trophies came quickly. The 1931-1932 season was a great one for Lippo Hertza&#39;s team. The Whites finished the league as unbeaten champions. It was the start of an era of Madrid dominance.</p>\r\n\r\n<p>Just a month after the latest cup win (1936), civil war broke out. Real Madrid&#39;s finest hour on the pitch so far, was under threat and cut short by the military conflict. It led to many players ending their careers or leaving the country in exile. The club and team would not be reassembled until after the war.</p>\r\n', '666ad127395bcf_trofeo_mancomunado.png', 1, '2024-06-13 10:59:51'),
(666, 32, '1921-1930', '', '<p>In the early 20s, Real Madrid returned to its pioneering role in Spanish football. The team made a series of trips abroad, making it an international trailblazer. As a result of the club&#39;s growing stature, two more stadium changes were made in this period. First, to the Vel&oacute;dromo de Ciudad Lineal, and then Chamart&iacute;n was built. The latter hosted the first match in the recently created Campeonato de Liga (1928).</p>\r\n\r\n<p>What began as a project between football fans at the start of the century was starting to take on unimaginable proportions. The silver medal won by the national side in the Olympic Games in Antwerp (1920) further bolstered its following. The outlook for our club was looking optimistic.</p>\r\n\r\n<p>The Campeonato de Liga was born out of these circumstances and the enormous organisational problems in Spanish football were a thing of the past. The parties involved agreed that there should be three&nbsp;<em>divisiones</em>. The six champions of Spain, the three runners-up and the winner of a promotional tournament between the clubs in the&nbsp;<em>Segunda</em>&nbsp;would play in the&nbsp;<em>Primera</em>. It was a competition that would bring together teams from every corner of our country each year.</p>\r\n', '666ad1b3c5e53f_regional.png', 1, '2024-06-13 11:02:11'),
(666, 33, '1911-1920', '', '<p>Spanish football was going through a period of difficulty and uncertainty. Real Madrid was not completely unaffected by these problems, but it overcame them thanks to some good work from its directors. With a growing fanbase, they saw the need to change grounds in order to facilitate the number of visitors and obtain more money. The club moved to the O&rsquo;Donnell Stadium. It was then that the King of Spain&#39;s high steward granted Madrid the title &lsquo;Real&rsquo; (1920).</p>\r\n\r\n<p>It was thought that the constitution of a Federation would be a quick solution to the crisis, but it was not to be. Each company was looking out for its own interests, and while some supported the Federaci&oacute;n, others formed another organisation in parallel, the Uni&oacute;n de Clubes. The predominant feeling at Madrid was one of disappointment and disillusion. The board of directors even had to take action to avoid the &#39;resignation&#39; of the president,&nbsp;<strong>Adolfo Mel&eacute;ndez</strong>.</p>\r\n\r\n<p>The duplication of competitions and interests did nothing to undermine expectations in the world of&nbsp;<em>f&uacute;tbol</em>. The fans were still turning up to see their team. Madrid, with the move to O&rsquo;Donnell, had taken its first step towards professionalization. More spectators, more profit and more money to buy players. The new ground was better than that of Villa y Corte, with a capacity of 5,000.</p>\r\n\r\n<p>The duplication of competitions and interests did nothing to undermine expectations in the world of&nbsp;<em>f&uacute;tbol</em>. The fans were still turning up to see their team. Madrid, with the move to O&rsquo;Donnell, had taken its first step towards professionalization. More spectators, more profit and more money to buy players. The new ground was better than that of Villa y Corte, with a capacity of 5,000.</p>\r\n', '666ad2092143ff_regional.png', 1, '2024-06-13 11:03:37'),
(666, 34, '1902-1910', '', '<p>&nbsp;</p>\r\n\r\n<p>A new sport from England called football started to take a grip of our country. Its quick uptake meant that in the late nineteenth and early twentieth century the first organisations were created for its practice. One of them was the Madrid Football Club, a predecessor of Real Madrid.&nbsp;<strong>Juli&aacute;n Palacios</strong>&nbsp;was its first figurehead, but it was&nbsp;<strong>Juan Padr&oacute;s</strong>&nbsp;who formally constituted the institution (1902). Interest grew at such a rate that Madrid proposed a tournament in homage to king Alfonso XIII. The initiative became the Copa de Espa&ntilde;a.</p>\r\n\r\n<p>The figure of Juli&aacute;n Palacios was ever-present in the club&#39;s early years. It was he who, in 1900, called a general meeting to decide which players would form Madrid&#39;s first team. The Padr&oacute;s brothers took the reins shortly afterwards. Football was starting to generate a lot of attention and the number of members was growing in leaps and bounds. Its constitution as a company came on the 6th&nbsp;of March 1902, with a board of directors presided by Juan Padr&oacute;s.</p>\r\n\r\n<p>Those visionary directors made a proposal to the mayor of Madrid, Alberto Aguilera; the constitution of the first football tournament. The first competition was established in honour of king Alfonso XIII. Five companies registered for the tournament, which was held in the Hip&oacute;dromo. It was the beginnings of the Copa de Espa&ntilde;a and of what would become Madrid&#39;s hallmark, victory. The Whites won four titles from the first six editions.</p>\r\n', '666ad24f6a082f_copa_esp.png', 1, '2024-06-13 11:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `piyush_home`
--

DROP TABLE IF EXISTS `piyush_home`;
CREATE TABLE `piyush_home` (
  `gid` bigint(255) NOT NULL,
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1:-active,2:-deactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piyush_home`
--

INSERT INTO `piyush_home` (`gid`, `id`, `name`, `image`, `short_desc`, `status`, `created_at`) VALUES
(666, 1, 'UCL_Celebration ', '666c17774a741UCL.png', '<p>0-2:The Fifteenth</p>\r\n', 1, '2024-06-12 08:47:59'),
(666, 2, 'Ancelotti', '666ae62de39b8ancelotti_trophy.jpeg', '<p>Ancelotti: &#39;This Champions League was won with sacrifice and quality&#39;</p>\r\n', 1, '2024-06-12 08:52:01'),
(666, 4, 'Florentino Pérez', '666ae6885ce23Perez_trophy.jpeg', '<p>Florentino P&eacute;rez: &#39;This is a love story between Real Madrid and the European Cup&#39;</p>\r\n', 1, '2024-06-12 09:05:54'),
(666, 5, 'Carvajal ', '666ae70c34fe4trophy_celebration.jpeg', '<p>Carvajal named Champions League final MVP</p>\r\n', 1, '2024-06-12 09:08:26'),
(666, 6, 'Nacho,Modric,kroos', '666ae726d9308n,m,k.jpeg', '<p>Nacho, Modrić, Kroos and Carvajal have joined Gento in having won a record six European Cups</p>\r\n', 1, '2024-06-12 09:09:57'),
(666, 7, ' Vini Jr.', '666ae74e9ea5f10.png', '<p>Vini Jr.: &#39;It&#39;s an incredible thing, not everyone can win the Champions League so many times&#39;</p>\r\n', 1, '2024-06-12 09:13:48'),
(666, 8, 'Real Madrid', '666ae765e70ef66.png', '<p>Real Madrid to showcase La Decimoquinta today</p>\r\n', 1, '2024-06-12 09:14:42'),
(666, 9, ' dressing room celebrations', '666ae782eb04507.png', '<p>The dressing room celebrations</p>\r\n', 1, '2024-06-12 09:16:25'),
(666, 10, 'Barça-Real Madrid', '666ae79ee576856.png', '<p>Bar&ccedil;a-Real Madrid: all out for a place in the league final</p>\r\n', 1, '2024-06-12 09:17:15'),
(666, 11, 'Kroos Farewell', '666ae7c01fa3a71.png', '<p>Kroos bids farewell by collecting La Decimoquinta and 300 victories with Madrid: &#39;I&#39;m happy to be leaving like this&#39;</p>\r\n', 1, '2024-06-12 09:18:33'),
(666, 12, 'Nacho', '666ae7ed2294223.png', '<p>Nacho: &#39;It&#39;s hard to achieve these things and today is the happiest day of my life&#39;</p>\r\n', 1, '2024-06-12 09:19:44'),
(666, 13, ' Santiago Bernabéu', '666ae811db411d65.png', '<p>46 years without Santiago Bernab&eacute;u</p>\r\n', 1, '2024-06-12 09:20:22'),
(666, 14, 'Nacho and Modric', '666ae833be63bmn79.png', '<p>Nacho and Modrić, 26 trophies with Real Madrid</p>\r\n', 1, '2024-06-12 09:21:21'),
(666, 15, ' Santiago Bernabéu La Decimoquinta', '666ae8603372estd67.png', '<p>How the Santiago Bernab&eacute;u enjoyed La Decimoquinta</p>\r\n', 1, '2024-06-12 09:21:47'),
(666, 16, 'Velverde', '666ae88d86201vel22.png', '<p>Valverde: &ldquo;This club&#39;s values ​​provide the hunger to win&rdquo;</p>\r\n', 1, '2024-06-12 09:22:18'),
(666, 17, 'Courtois', '666ae8a6b7395co46.png', '<p>Courtois: 150 victories with Real Madrid</p>\r\n', 1, '2024-06-12 09:23:22'),
(666, 18, ' Chus Mateo', '666ae8c5ad01794.png', '<p>&nbsp;Chus Mateo: &ldquo;We have to be fully focused because winning in&nbsp;Barcelona is not easy&rdquo;</p>\r\n', 1, '2024-06-12 09:23:50'),
(666, 19, 'Taylor Swift ', '666ae8e513a6ft2.png', '<p>Taylor Swift&#39;s historic double-header concert at the Bernab&eacute;u</p>\r\n', 1, '2024-06-12 09:24:58'),
(666, 20, 'Women Fixtures ', '666ae8fcf1af1w4.png', '<p>Fixtures for the madridistas on international duty</p>\r\n', 1, '2024-06-12 11:35:32'),
(666, 21, 'Real Madrid Forbes', '666ae918080ddst1.png', '<p>Real Madrid named Forbes&#39; most valuable club in world football for the third consecutive year</p>\r\n', 1, '2024-06-12 11:37:24'),
(666, 22, 'Ancelotti', '666ae5b5e89fcancelotti_trophy.jpeg', '', 2, '2024-06-13 12:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `piyush_logo`
--

DROP TABLE IF EXISTS `piyush_logo`;
CREATE TABLE `piyush_logo` (
  `gid` bigint(20) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT 'active:1,deactive:2',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piyush_logo`
--

INSERT INTO `piyush_logo` (`gid`, `id`, `name`, `title`, `image`, `status`, `created_at`) VALUES
(666, 1, 'Real Madrid Logo', 'HONOURS', '666af69cd69bbhistory-logo.png', 1, '2024-06-13 13:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `piyush_malecards`
--

DROP TABLE IF EXISTS `piyush_malecards`;
CREATE TABLE `piyush_malecards` (
  `gid` bigint(20) NOT NULL,
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1:-active,2:-deactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piyush_malecards`
--

INSERT INTO `piyush_malecards` (`gid`, `id`, `name`, `position`, `image`, `status`, `created_at`) VALUES
(666, 1, '1 Courtois', 'GK', '666c5bbbead59COURTOIS.png', 1, '2024-06-14 15:03:23'),
(666, 2, 'Lunin', 'GK', '666c799176404LUNIN.png', 1, '2024-06-14 17:10:41'),
(666, 3, 'Kepa', 'GK', '666c79a70bd7eKEPA.png', 1, '2024-06-14 17:11:03'),
(666, 4, 'Carvajal', 'DEFEND', '666c79bdc8e96CARVAJAL.png', 1, '2024-06-14 17:11:25'),
(666, 5, 'Militão', 'DEFEND', '666c79d284baeMILITAO.png', 1, '2024-06-14 17:11:46'),
(666, 6, 'Alaba', 'DEFEND', '666c79e65d8fcALABA.png', 1, '2024-06-14 17:12:06'),
(666, 7, 'Vazquez', 'DEFEND', '666c79fd77152VAZQUEZ.png', 1, '2024-06-14 17:12:29'),
(666, 8, 'García', 'DEFEND', '666c7a3b5e8d9GARCIA.png', 1, '2024-06-14 17:13:31'),
(666, 9, 'Rudiger', 'DEFEND', '666c7a4f152e8RUDIGER.png', 1, '2024-06-14 17:13:51'),
(666, 10, 'Mendy', 'DEFEND', '666c7a646cc67MENDY.png', 1, '2024-06-14 17:14:12'),
(666, 11, 'Bellingham', 'MIDFIELD', '666c7a7dde351BELLINGHAM.png', 1, '2024-06-14 17:14:37'),
(666, 12, 'modric', 'MIDFIELD', '666c7ac11ed58MODRIC.png', 1, '2024-06-14 17:15:45'),
(666, 13, 'Camavinga', 'MIDFIELD', '666c7ad595b9aCAMAVINGA.png', 1, '2024-06-14 17:16:05'),
(666, 14, 'Valverde', 'MIDFIELD', '666c7c4f1c032VALVERDE.png', 1, '2024-06-14 17:22:23'),
(666, 15, 'Ceballos', 'MIDFIELD', '666c7c755d8e1CEBALLOS.png', 1, '2024-06-14 17:23:01'),
(666, 16, 'Güler', 'MIDFIELD', '666c7c979d820GULER.png', 1, '2024-06-14 17:23:35'),
(666, 17, 'Tchouaméni', 'MIDFIELD', '666c7cacb731fTCHOUAMENI.png', 1, '2024-06-14 17:23:56'),
(666, 18, 'Vinicius', 'FORWARD', '666c7cc51192dVINI.png', 1, '2024-06-14 17:24:21'),
(666, 19, 'Rodrygo', 'FORWARD', '666c7cd8368e3RODRYGO.png', 1, '2024-06-14 17:24:40'),
(666, 20, 'Joselu', 'FORWARD', '666c7cea51fb5JOSELU.png', 1, '2024-06-14 17:24:58'),
(666, 21, 'Brahim', 'FORWARD', '666c7cfb7d521BRAHIM.png', 1, '2024-06-14 17:25:15'),
(666, 22, 'Ancelotti', 'COACH', '666c7d127d2baancelotti.png', 1, '2024-06-14 17:25:38'),
(666, 23, 'Davide', 'COACH', '666c7d4fbb29dDAVIDE.png', 1, '2024-06-14 17:26:39'),
(666, 24, 'Francesco', 'COACH', '666c7d709bb7dFRANCESCO.png', 1, '2024-06-14 17:27:12'),
(666, 25, 'Pinto', 'COACH', '666c7d8107306pinto.png', 1, '2024-06-14 17:27:29'),
(666, 26, 'Fulco', 'COACH', '666c7d923659efulcoo.png', 1, '2024-06-14 17:27:46'),
(666, 27, 'Llopis', 'COACH', '666c7dad83f14llopiss.png', 1, '2024-06-14 17:28:13'),
(666, 28, 'Simone', 'COACH', '666c7dbe126ceSIMONE.png', 1, '2024-06-14 17:28:30'),
(666, 29, 'Parrales', 'COACH', '666c7dcdce13cPARRALES.png', 1, '2024-06-14 17:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `piyush_modalf`
--

DROP TABLE IF EXISTS `piyush_modalf`;
CREATE TABLE `piyush_modalf` (
  `gid` bigint(20) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `weight` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1:-active,2:-deactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piyush_modalf`
--

INSERT INTO `piyush_modalf` (`gid`, `id`, `name`, `birthplace`, `dob`, `weight`, `image`, `status`, `created_at`) VALUES
(666, 1, 'María Isabel Rodríguez Rivero', 'The Gran Canarian palms', '1999-07-22', '  68 Kg.', '666c49bc51caemass.png', 1, '2024-06-14 13:01:06'),
(666, 2, 'Mylene Chavas', 'Sainte-Colombe (France)', '1998-01-07', '63 kg.', '666c3ff3839c5chavas.png', 1, '2024-06-14 13:04:51'),
(666, 3, 'Vaitiare Kenti Robles Salas', 'Mexico City', '1991-02-15', '58 kg.', '666c40cc2ba83robles.png', 1, '2024-06-14 13:08:28'),
(666, 4, 'Rocío Gálvez Luna', 'Cordova', '1997-04-15', '68 kg.', '666c41236502bdew.png', 1, '2024-06-14 13:09:55'),
(666, 5, 'Ivana Andrés Sanz', 'Aielo de Malferit (Valencia)', '1994-07-13', '60 kg.', '666c4163d325aivana.png', 1, '2024-06-14 13:10:59'),
(666, 6, 'Olga Carmona García', 'Seville', '2000-06-12', '51 kg.', '666c41d42381colga.png', 1, '2024-06-14 13:12:52'),
(666, 7, 'Oihane Hernández Zurbano', 'Sopela (Biscay)', '2000-05-04', '59 kg.', '666c42115c271oihane.png', 1, '2024-06-14 13:13:53'),
(666, 8, 'Kathellen Sousa', 'Santos (Brazil)', '1996-04-26', '66 kg.', '666c425675b89kathellen.png', 1, '2024-06-14 13:15:02'),
(666, 9, 'Sofia Svava', 'Gentofte (Denmark)', '2000-08-11', '67 kg.', '666c4291df77asvava.png', 1, '2024-06-14 13:16:01'),
(666, 10, 'Teresa Abelleira Dueñas', 'Pontevedra', '1999-01-09', '59 kg.', '666c42d09a48ateresa.png', 1, '2024-06-14 13:17:04'),
(666, 11, 'Sandie Toletti', 'Bagnol-sur-Cèze (France)', '1995-07-13', '61 kg.', '666c4307acc12toletti.png', 1, '2024-06-14 13:17:59'),
(666, 12, 'Maite Oroz Areta', 'Huarte (Pamplona)', '1998-03-25', '49 kg.', '666c4345dacc8oroz.png', 1, '2024-06-14 13:19:01'),
(666, 13, 'Caroline Weir', 'Dunfermline (Scotland)', '1995-06-20', '62 kg.', '666c43953509aweir.png', 1, '2024-06-14 13:20:21'),
(666, 14, 'Claudia Zornoza Sánchez', 'Madrid', '1990-10-20', '57.5kg.', '666c43c9c55fczornoza.png', 1, '2024-06-14 13:21:13'),
(666, 15, 'Freja Olofsson', 'Örebro (Sweden)', '1998-05-24', '69 kg.', '666c444daff2esiri.png', 1, '2024-06-14 13:23:25'),
(666, 16, 'Signe Bruun', 'Randers (Denmark)', '1998-06-04', '68 kg.', '666c44a27b336brunn.png', 1, '2024-06-14 13:24:50'),
(666, 17, 'Hayley Raso', 'Brisbane (Australia)', '1994-05-09', '55 kg.', '666c462b5aa8dsatin.png', 1, '2024-06-14 13:31:23'),
(666, 18, 'Caroline Møller Hansen', 'Hobro (Denmark)', '1998-12-19', '64 kg.', '666c4666d4ae4moller.png', 1, '2024-06-14 13:32:22'),
(666, 19, 'Carla Camacho Carrillo', 'Madrid', '2005-02-05', '65 kg.', '666c4696df141camacho.png', 1, '2024-06-14 13:33:10'),
(666, 20, 'Linda Caicedo Alegría', 'Cali (Colombia)', '2005-02-22', '54 kg.', '666c46d1651d6cute.png', 1, '2024-06-14 13:34:09'),
(666, 21, 'Naomie Feller', 'Paris', '2001-06-11', '65 kg.', '666c47037e3b9feller.png', 1, '2024-06-14 13:34:59'),
(666, 22, 'Athenea del Castillo Beivide', 'Solares (Cantabria)', '2000-10-24', '52 kg.', '666c473a86234Athena.png', 1, '2024-06-14 13:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `piyush_modalm`
--

DROP TABLE IF EXISTS `piyush_modalm`;
CREATE TABLE `piyush_modalm` (
  `id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `birthplace` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `weight` varchar(50) NOT NULL,
  `matchplay` int(50) NOT NULL,
  `minuteplay` int(50) NOT NULL,
  `saves` int(50) NOT NULL,
  `goalaward` int(50) NOT NULL,
  `assist` int(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1:- active, 2:-deactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piyush_modalm`
--

INSERT INTO `piyush_modalm` (`id`, `image`, `name`, `birthplace`, `dob`, `weight`, `matchplay`, `minuteplay`, `saves`, `goalaward`, `assist`, `status`, `created_at`) VALUES
(1, '666c5d56e936aCOURTOIS2.png', 'Thibaut Courtois', 'Bree (Belgium)', '1992-05-11', '96 Kg.', 19, 423, 0, 5, 0, 1, '2024-07-01 11:36:50'),
(2, '666c5d56e936aCOURTOIS2.png', 'Andriy Lunin', 'Krasnograd (Ukraine)', '1999-02-11', '', 96, 2850, 32, 31, 0, 1, '2024-07-01 11:38:40'),
(3, '666c7ed144baeKEPA.png', 'Kepa Arrizabalaga', 'Onfarroa (Vizcaya)', '1994-10-03', '88 Kg. ', 5, 1767, 18, 20, 0, 1, '2024-07-01 11:42:49'),
(4, '666c7f1e0addfCARVAJAL.png', 'Daniel Carvajal Ramos', 'Leganes (Madrid)', '1991-01-11', '73.5 Kg.', 41, 3348, 0, 6, 5, 1, '2024-07-01 11:42:49'),
(5, '666c7f6b897baMILITAO.png', 'Éder Gabriel Militão', 'Sertãozinho (Brazil)', '1998-07-18', '78 Kg', 13, 509, 0, 0, 0, 1, '2024-07-01 11:46:29'),
(6, '666c7fbd2d178ALABA.png', 'David Alaba', 'Vienna (Austria)', '1992-06-24', '78 Kg.', 17, 1407, 0, 0, 2, 1, '2024-07-01 11:46:29'),
(7, '666c8003c758bVAZQUEZ.png', 'Lucas Vazquez Iglesias', 'Curtis (A Coruña)', '1991-07-01', '70.5 kg.', 38, 1783, 0, 3, 6, 1, '2024-07-01 11:49:21'),
(8, '666c811e422e0GARCIA.png', 'Francisco José García Torres', 'Bolaños de Calatrava (Ciudad Real)', '1999-08-14', '63 kg.', 31, 1689, 0, 1, 4, 1, '2024-07-01 11:49:21'),
(9, '666c815ccc645RUDIGER.png', 'Antonio Rudiger', 'Berlin (Germany)', '1993-03-03', '86 kg.', 48, 4076, 0, 2, 1, 1, '2024-07-01 11:52:00'),
(10, '666c81ae2e9bfMENDY.png', 'Ferland Mendy', 'Meulan-en-Yvelines (France)', '1995-06-08', '73 kg.', 37, 2874, 0, 1, 0, 1, '2024-07-01 11:52:00'),
(11, '666c8213b1ebfBELLINGHAM.png', 'Jude Bellingham', 'Stourbridge (England)', '2003-06-29', '75 kg.', 42, 3642, 0, 23, 10, 1, '2024-07-01 11:54:29'),
(12, '666c826e044fcMODRIC.png', 'Luka modric', 'Zadar (Croatia)', '1985-09-09', '66.2 kg.', 46, 2239, 0, 2, 4, 1, '2024-07-01 11:54:29'),
(13, '666c833138407CAMAVINGA.png', 'Eduardo Camavinga', 'Cabinda (Angola)', '2002-11-10', '68 kg.', 46, 2825, 0, 0, 2, 1, '2024-07-01 11:57:02'),
(14, '666c83948872aVALVERDE.png', 'Federico Santiago Valverde Dipetta', 'Montevideo (Uruguay)', '1998-07-22', '78 kg.', 54, 4279, 0, 3, 5, 1, '2024-07-01 11:57:02'),
(15, '666c841c72e80TCHOUAMENI.png', 'Aurélien Tchouaméni', 'Rouen (France)', '0000-00-00', '81 kg.', 38, 2811, 0, 3, 1, 1, '2024-07-01 12:05:57'),
(16, '666c848364a04CEBALLOS.png', 'Daniel Ceballos Fernandez', 'Utrera (Seville)', '1996-07-08', '70.5kg', 27, 862, 0, 1, 1, 1, '2024-07-01 12:05:57'),
(17, '666c84c6b057dGULER.png', 'Arda Güler', 'Ankara (Turkey)', '2005-02-25', '70 kg.', 12, 440, 0, 0, 0, 1, '2024-07-01 12:12:59'),
(18, '666c850be0ae4VINI.png', 'Vinicius Paixao de Oliveira Junior', 'São Gonçalo (Rio de Janeiro, Brazil)', '2000-12-07', '73 kg.', 39, 3080, 0, 24, 7, 1, '2024-07-01 12:12:59'),
(19, '666c85480fe60RODRYGO.png', 'Rodrygo Goes', 'Osasco (Brazil)', '2001-09-01', '64 kg.', 51, 3703, 0, 17, 6, 1, '2024-07-01 12:17:03'),
(20, '666c858973b0bJOSELU.png', 'Joselu Mato', 'Stuttgart (Germany)', '1990-03-27', '86 Kg.', 49, 2098, 0, 18, 1, 1, '2024-07-01 12:17:03'),
(21, '666c85c8a5ccaBRAHIM.png', 'Brahim Diaz', 'Malaga', '1999-08-03', '68 Kg.', 44, 2066, 0, 12, 6, 1, '2024-07-01 12:21:59'),
(22, '666c864f6cd42ancelotti.png', 'Carlo Ancelotti', 'Reggiolo (Italy)', '1959-10-06', '', 0, 0, 0, 0, 0, 1, '2024-07-01 12:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `piyush_register`
--

DROP TABLE IF EXISTS `piyush_register`;
CREATE TABLE `piyush_register` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` int(10) NOT NULL DEFAULT 1 COMMENT '1-Male,2-Female,3-none',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piyush_register`
--

INSERT INTO `piyush_register` (`id`, `name`, `email`, `password`, `gender`, `created_at`, `mobile`) VALUES
(2, 'Deepak', 'admin@deepak.com', '1234', 1, '2024-06-20 05:51:39', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `piyush_rmplay`
--

DROP TABLE IF EXISTS `piyush_rmplay`;
CREATE TABLE `piyush_rmplay` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `video` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT 'active:1,deactive:2',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piyush_rmplay`
--

INSERT INTO `piyush_rmplay` (`id`, `name`, `video`, `status`, `created_at`) VALUES
(4, 'Real Madrid - The Dream Season', '<iframe width=\"360\" height=\"315\" src=\"https://www.youtube.com/embed/WtmZ35y_SVg?si=sujSO_JU4Sq_GEkW\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-06-15 10:54:23'),
(5, 'ALL Champions League goals 2023/24 | Real Madrid', '<iframe width=\"360\" height=\"315\" src=\"https://www.youtube.com/embed/iQjPpM0dNck?si=qqpnlcskyzckeDKZ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-06-15 10:59:01'),
(6, 'BEHIND THE SCENES OF OUR 15TH EUROPEAN CUP! | Borussia Dortmund 0-2 Real Madrid', '<iframe width=\"360\" height=\"315\" src=\"https://www.youtube.com/embed/6-6_wLSaFuQ?si=dd7XT5843dIZwRF2\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-06-15 11:00:37'),
(7, 'GRACIAS, ISCO | Real Madrid legend', '<iframe width=\"360\" height=\"315\" src=\"https://www.youtube.com/embed/zCQnmOdivnE?si=AikN8HP6dRIj7caA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-06-15 11:01:27'),
(8, 'Emotional farewell for Kroos in our last league game of the season!', '<iframe width=\"360\" height=\"315\" src=\"https://www.youtube.com/embed/__UI2l4hsXY?si=7N9_HjUzhSRcmpOL\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-06-15 11:02:46'),
(9, 'GRACIAS, GARETH BALE | Real Madrid legend', '<iframe width=\"360\" height=\"315\" src=\"https://www.youtube.com/embed/1LUcVIM9wJI?si=jnCs-efDYroqM4iu\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-06-15 11:03:16'),
(10, 'THANK YOU, CRISTIANO RONALDO | Real Madrid Official Video', '<iframe width=\"360\" height=\"315\" src=\"https://www.youtube.com/embed/5hFd6zGkxLE?si=RCgZ5L03AN2hbo_I\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-06-15 11:04:04'),
(11, ' SERGIO RAMOS, 100 GOALS 1:25 The best moments of Ramos in Real Madrid / Los mejores momentos de Ramos en el Real Madrid 3:15   2:41 / 3:00  • Thank Y', '<iframe width=\"360\" height=\"315\" src=\"https://www.youtube.com/embed/X-Dp19wIKhE?si=6I-0LDnb44Y59lH4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-06-15 11:04:28'),
(12, 'THANK YOU, MARCELO | Real Madrid Legend', '<iframe width=\"360\" height=\"315\" src=\"https://www.youtube.com/embed/-B4orUurUP0?si=_vWoVBVsdq_OrcVx\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-06-15 11:06:29'),
(13, 'THANK YOU, BENZEMA | Real Madrid LEGEND', '<iframe width=\"360\" height=\"315\" src=\"https://www.youtube.com/embed/JW_Q2OB5VUI?si=tWOlwnUmcxjWciFo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-06-15 11:06:59'),
(14, 'THANK YOU, CASEMIRO | Real Madrid LEGEND', '<iframe width=\"360\" height=\"315\" src=\"https://www.youtube.com/embed/nnaYsRDJ7YM?si=LWbvWBB8vxeEG9ys\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-06-15 11:07:22'),
(15, 'ZIDANE, Thank you...', '<iframe width=\"360\" height=\"315\" src=\"https://www.youtube.com/embed/IiHpvwkvNxM?si=yA0drr36c47b3Kf2\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-06-15 11:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `piyush_stadium`
--

DROP TABLE IF EXISTS `piyush_stadium`;
CREATE TABLE `piyush_stadium` (
  `gid` bigint(20) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT 'active:1,deactive:2',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piyush_stadium`
--

INSERT INTO `piyush_stadium` (`gid`, `id`, `name`, `image`, `status`, `created_at`) VALUES
(666, 4, 'The Bernabéu Stadium', '666d44b9e6ba5TorreEuropa.png', 1, '2024-06-15 07:37:29'),
(666, 5, 'Stadium side angle', '666d44d886745estadio_Santiago_Bernab.png', 1, '2024-06-15 07:38:00'),
(666, 6, 'Stadium outside day-time', '666d44e9ac2eaThumb.png', 1, '2024-06-15 07:38:17'),
(666, 7, 'Stadium outside-night', '666d44f8c7344del_estadio_Santiago_Bernab.png', 1, '2024-06-15 07:38:32'),
(666, 8, 'Santiago Bernabéu', '666d45327bb88Thumb.png', 1, '2024-06-15 07:39:30'),
(666, 9, 'Santiago Bernabéu 2', '666d4557db979Santiago_Bernab_u_.png', 1, '2024-06-15 07:40:07'),
(666, 10, 'Santiago Bernabéu 3', '666d45742ce7aReforma_Santiago.png', 1, '2024-06-15 07:40:36'),
(666, 11, 'Santiago Bernabéu 4', '666d458cc1297estadio_Santiago_Bernab.png', 1, '2024-06-15 07:41:00'),
(666, 12, 'Santiago Bernabéu 5', '666d45a37ec4edel_estadio_Santiago_Bernab.png', 1, '2024-06-15 07:41:23'),
(666, 13, 'Santiago Bernabéu grass', '666d45bcade69stadium_grass.avif', 1, '2024-06-15 07:41:48'),
(666, 14, 'Santiago Bernabéu 6', '666d45d8a1cb9Reforma_Thumb.png', 1, '2024-06-15 07:42:16'),
(666, 15, 'Santiago Bernabéu 7', '666d45ee2eac4Santiago_Bernab2.png', 1, '2024-06-15 07:42:38'),
(666, 16, 'Santiago Bernabéu 8', '666d460422e57Santiago_Bernab.png', 1, '2024-06-15 07:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `piyush_trophy`
--

DROP TABLE IF EXISTS `piyush_trophy`;
CREATE TABLE `piyush_trophy` (
  `gid` bigint(20) NOT NULL,
  `id` int(11) NOT NULL,
  `names` varchar(150) NOT NULL,
  `titles` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `status` int(1) DEFAULT 1 COMMENT 'active:1,deactive:2',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piyush_trophy`
--

INSERT INTO `piyush_trophy` (`gid`, `id`, `names`, `titles`, `description`, `image`, `status`, `created_at`) VALUES
(666, 1, 'European_cup', 'European_cup', '<h3><strong>15</strong></h3>\r\n', '666af749bca3aEuropean_cup.png', 1, '2024-06-13 13:42:00'),
(666, 2, 'Fifa Club World Cups', 'Fifa Club World Cups', '<h3><strong>5</strong></h3>\r\n', '666af76ba48f9club_wc.png', 1, '2024-06-13 13:43:07'),
(666, 3, 'supercopas-de-europa', 'European Super Cups', '<h3><strong>4</strong></h3>\r\n', '666af798d1d82supercopas-de-europa.png', 1, '2024-06-13 13:43:52'),
(666, 4, 'National_league', 'National_league', '<h3><strong>5</strong></h3>\r\n', '666af7b4e1b36National_league.png', 1, '2024-06-13 13:44:20'),
(666, 5, 'copas-del-rey', 'Spanish Cups', '<h3><strong>20</strong></h3>\r\n', '666af7de48e16copas-del-rey.png', 1, '2024-06-13 13:45:02'),
(666, 6, 'supercopas-de-espana', 'Spanish Super Cups', '<h3><strong>13</strong></h3>\r\n', '666af80100aabsupercopas-de-espana.png', 1, '2024-06-13 13:45:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `piyush_admin`
--
ALTER TABLE `piyush_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piyush_femalecards`
--
ALTER TABLE `piyush_femalecards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piyush_history`
--
ALTER TABLE `piyush_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piyush_home`
--
ALTER TABLE `piyush_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piyush_logo`
--
ALTER TABLE `piyush_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piyush_malecards`
--
ALTER TABLE `piyush_malecards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piyush_modalf`
--
ALTER TABLE `piyush_modalf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piyush_modalm`
--
ALTER TABLE `piyush_modalm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piyush_register`
--
ALTER TABLE `piyush_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piyush_rmplay`
--
ALTER TABLE `piyush_rmplay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piyush_stadium`
--
ALTER TABLE `piyush_stadium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piyush_trophy`
--
ALTER TABLE `piyush_trophy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `piyush_admin`
--
ALTER TABLE `piyush_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `piyush_femalecards`
--
ALTER TABLE `piyush_femalecards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `piyush_history`
--
ALTER TABLE `piyush_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `piyush_home`
--
ALTER TABLE `piyush_home`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `piyush_logo`
--
ALTER TABLE `piyush_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `piyush_malecards`
--
ALTER TABLE `piyush_malecards`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `piyush_modalf`
--
ALTER TABLE `piyush_modalf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `piyush_modalm`
--
ALTER TABLE `piyush_modalm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `piyush_register`
--
ALTER TABLE `piyush_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `piyush_rmplay`
--
ALTER TABLE `piyush_rmplay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `piyush_stadium`
--
ALTER TABLE `piyush_stadium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `piyush_trophy`
--
ALTER TABLE `piyush_trophy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
