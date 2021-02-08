-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 09:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `synopsis` varchar(5000) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `studios` varchar(500) DEFAULT NULL,
  `genre` varchar(500) DEFAULT NULL,
  `episodes` varchar(500) DEFAULT NULL,
  `duration` varchar(500) DEFAULT NULL,
  `firstDate` varchar(500) DEFAULT NULL,
  `finalDate` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `seasons` varchar(500) DEFAULT NULL,
  `rating` varchar(500) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `price` varchar(500) DEFAULT NULL,
  `availability` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `synopsis`, `date`, `studios`, `genre`, `episodes`, `duration`, `firstDate`, `finalDate`, `status`, `seasons`, `rating`, `thumbnail`, `price`, `availability`) VALUES
(1, 'Fullmetal Alchemist: Brotherhood', 'Alchemy is bound by this Law of Equivalent Exchange—something the young brothers Edward and Alphonse Elric only realize after attempting human transmutation: the one forbidden act of alchemy. They pay a terrible price for their transgression—Edward loses his left leg, Alphonse his physical body. It is only by the desperate sacrifice of Edward\'s right arm that he is able to affix Alphonse\'s soul to a suit of armor. Devastated and alone, it is the hope that they would both eventually return to their original bodies that gives Edward the inspiration to obtain metal limbs called \"automail\" and become a state alchemist, the Fullmetal Alchemist. Three years of searching later, the brothers seek the Philosopher\'s Stone, a mythical relic that allows an alchemist to overcome the Law of Equivalent Exchange. Even with military allies Colonel Roy Mustang, Lieutenant Riza Hawkeye, and Lieutenant Colonel Maes Hughes on their side, the brothers find themselves caught up in a nationwide conspiracy that leads them not only to the true nature of the elusive Philosopher\'s Stone, but their country\'s murky history as well. In between finding a serial killer and racing against time, Edward and Alphonse must ask themselves if what they are doing will make them human again... or take away their humanity.', '2009 - 2010', 'Bones', 'Action, Military, Adventure, Comedy, Drama, Magic, Fantasy, Shounen', '64', '24 min. per episode', 'April 5, 2009', 'July 4, 2010', 'Finished airing', '5', 'R - 17+ (violence & profanity)', NULL, 'RM 120', NULL),
(2, 'Hunter X Hunter', 'Hunter x Hunter is set in a world where Hunters exist to perform all manner of dangerous tasks like capturing criminals and bravely searching for lost treasures in uncharted territories. Twelve-year-old Gon Freecss is determined to become the best Hunter possible in hopes of finding his father, who was a Hunter himself and had long ago abandoned his young son. However, Gon soon realizes the path to achieving his goals is far more challenging than he could have ever imagined.  Along the way to becoming an official Hunter, Gon befriends the lively doctor-in-training Leorio, vengeful Kurapika, and rebellious ex-assassin Killua. To attain their own goals and desires, together the four of them take the Hunter Exam, notorious for its low success rate and high probability of death. Throughout their journey, Gon and his friends embark on an adventure that puts them through many hardships and struggles. They will meet a plethora of monsters, creatures, and characters—all while learning what being a Hunter truly means.', '2011 - 2014', 'Madhouse', 'Action, Adventure, Fantasy, Shounen, Super Power', '148', '23 min per episode', 'October 2, 2011', 'September 24, 2014', 'Finished airing', '6', 'PG-13 - Teens 13 or older', NULL, 'RM 120', NULL),
(3, 'Steins;Gate', 'The self-proclaimed mad scientist Rintarou Okabe rents out a room in a rickety old building in Akihabara, where he indulges himself in his hobby of inventing prospective \"future gadgets\" with fellow lab members: Mayuri Shiina, his air-headed childhood friend, and Hashida Itaru, a perverted hacker nicknamed \"Daru.\" The three pass the time by tinkering with their most promising contraption yet, a machine dubbed the \"Phone Microwave,\" which performs the strange function of morphing bananas into piles of green gel. Though miraculous in itself, the phenomenon doesn\'t provide anything concrete in Okabe\'s search for a scientific breakthrough; that is, until the lab members are spurred into action by a string of mysterious happenings before stumbling upon an unexpected success—the Phone Microwave can send emails to the past, altering the flow of history. Adapted from the critically acclaimed visual novel by 5pb. and Nitroplus, Steins;Gate takes Okabe through the depths of scientific theory and practicality. Forced across the diverging threads of past and present, Okabe must shoulder the burdens that come with holding the key to the realm of time.', '2011', 'White Fox', 'Psychological thriller, Sci-Fi', '24', '24 min per episode', 'April 6, 2011', 'September 14, 2011', 'Unconfirmed', '1', 'PG-13 - Teens 13 or older', NULL, 'RM 100', NULL),
(4, 'Gintama\'', 'Gintoki, Shinpachi, and Kagura return as the fun-loving but broke members of the Yorozuya team! Living in an alternate-reality Edo, where swords are prohibited and alien overlords have conquered Japan, they try to thrive on doing whatever work they can get their hands on. However, Shinpachi and Kagura still haven\'t been paid... Does Gin-chan really spend all that cash playing pachinko? Meanwhile, when Gintoki drunkenly staggers home one night, an alien spaceship crashes nearby. A fatally injured crew member emerges from the ship and gives Gintoki a strange, clock-shaped device, warning him that it is incredibly powerful and must be safeguarded. Mistaking it for his alarm clock, Gintoki proceeds to smash the device the next morning and suddenly discovers that the world outside his apartment has come to a standstill. With Kagura and Shinpachi at his side, he sets off to get the device fixed; though, as usual, nothing is ever that simple for the Yorozuya team. Filled with tongue-in-cheek humor and moments of heartfelt emotion, Gintama\'s fourth season finds Gintoki and his friends facing both their most hilarious misadventures and most dangerous crises yet.', '2006', 'Sunrise(#1-265)\r\nBandai Namco Pictures(#266-367)\r\n', 'Action, Comedy, Historical, Parody, Samurai, Sci-Fi, Shounen', '367 + 6 OVA', '24 min. per episode', 'April 4, 2006', 'October 7, 2018', 'Finished airing', '8', 'PG-13 - Teens 13 or older', NULL, 'RM 160', NULL),
(5, 'Death Note', 'In the dark, desolate world of shinigamis (death gods), a bored shinigami named Ryuk decides to come to the human world. There, he drops his Death Note, a book that shinigamis use to kill people. Anyone who\'s name is written in the Death Note will die within 40 seconds, and the time, place, and method of death can also be controlled. Ryuk\'s Death Note is soon found by Light Yagami, an intelligent but insensitive high school student. Since Light touched the Death Note, Ryuk becomes visible to him. Ryuk explains to Light how to use the Death Note (all the instructions are also written in the book itself), and Light decides to use the Death Note\'s power to cleanse the world of all criminals and create a new, \"perfect\" world. Secretly, and unbeknown to anyone, even his father who\'s a police officer, Light looks up every criminal he can find and uses the Death Note to kill them. After a while, authorities from around the world take notice of the mysterious mass deaths of their criminals and decide that someone must be behind it all. The unknown murderer, nicknamed \"Kira,\" becomes a major news item, heralding both people who support and are against his \"divine punishment\" of criminals. The police force finally decides to hire the legendary detective L to figure out exactly who Kira is. Kira\'s whereabouts are traced back to Japan and Light\'s father becomes chief of the police force that is investigating Kira, totally unaware that his own son is the very person he\'s seeking. A battle of wits ensues between Light and L, as Light becomes more obsessed with the Death Note\'s power and continues to baffle the world with his mysterious, discreet murders, and L keeps getting closer and closer to discovering Kira\'s true identity. But in spite of L\'s wits being a good match for his own, Light remains confident in his task of using the Death Note to abolish evil in the world and create a new world with him as the \"god.\" Even when new obstacles arise, such as Misa, a hyperactive supermodel who also has a Death Note and a huge crush on Light, the Yotsuba company who are after Kira too, Mikami Teru, a man who believes Kira is \"god\" and he is meant to serve Kira\'s wishes, and the SPK, another detective agency lead by Near who is meant to follow in L\'s footsteps. But even with all these complications that arise, Light\'s amazing intelligence continues to keep him one step ahead of his pursers. However, as he becomes more obsessed with the power of the Death Note, he seems to lose his own humanity. When he\'s able to unfaltering kill anyone who may be a threat to his plans, even if they haven\'t done anything wrong, it becomes obvious that the Death Note is the one controlling Light instead of vice versa. Light\'s original intention of creating a pure world turns into an ego trip for him with the people around him as pawns. Light\'s actions and further descent into obsession with the Death Note brings up the question of whether a single human being should ever be in possession of such non-human power.', '2006-2007', 'Madhouse', 'Mystery, Psychological thriller, Supernatural thriller, Crime, Horror', '37', '24 min. per episode', 'October 3, 2006', 'June 27, 2007', 'Ongoing', '1', 'PG-13 - Teens 13 or older', NULL, 'RM 100', NULL),
(6, 'Fruit Basket', 'When high school student Tohru Honda\'s mother dies in a car crash, Tohru decides to live with her grandfather. Renovations on the house and unsupportive and unkind family members cause her to move out of her grandfather\'s house temporarily, and, since she has nowhere else to go, Tohru begins living in a tent and supporting herself.However, after discovering a nearby home inhabited by her popular classmate Yuki Soma and his cousin Shigure, and following a landslide that destroys her tent, Tohru moves into the Soma house; on her first day living there, she meets Kyo, Yuki and Shigure\'s orange haired cousin, who crashes through the ceiling and challenges Yuki to a fight.Tohru tries to stop him, and - accidentally falling into him - causes him to transform into a cat in front of her, discovering the Soma family curse; that twelve members of the family, excluding Kyo, are possessed by the spirits of the Chinese zodiac (十二支, Jūnishi), and turn into their zodiac animal when they are weak, under stress, embarrassed, or when hugged by someone of the opposite gender. When Tohru discovers the Somas\' secret, she promises not to tell anyone, and is allowed to keep living with them. Although the Somas\' curse stretches far deeper and darker than Tohru initially thinks, her presence and her acceptance of them soon becomes a large, positive influence on those possessed by the zodiac. She sets out to break the curse and, on the way, meets and discovers the Soma\'s vengeful zodiac spirits, including their leader, Akito, who occupies the position of \"God\" in the Chinese legend, and whom both keeps the family together and chains them to their spirits.\r\n               ', '2019 - Present', 'TMS Entertainment', 'Animation, Romance, Comedy, Supernatural, Fantasy, Drama ', '50', '24 min. per episode', 'April 6, 2019', 'Premiere in 2021', 'Ongoing', '3', 'PG-13 - Teens 13 or older', NULL, 'RM 120', NULL),
(7, 'Re:Zero', 'Subaru Natsuki is a NEET who does nothing but play games. One night, after visiting a convenience store, he is suddenly summoned to another world. With no sign of who summoned him, he soon befriends a silver-haired half-elf girl who introduces herself as Satella, and her companion Puck. Satella mentions that her insignia was stolen by a thief named Felt. When he and \"Satella\" are mysteriously killed, Subaru awakens and discovers that he has acquired an ability which he names \"Return by Death,\" enabling him to reverse time by dying. He greets \"Satella\" again, only for her to be offended at being addressed by the name \"Satella,\" which in fact refers to the \"Witch of Envy,\" and is considered a taboo. With the help of Reinhard (a knight) in another timeline, Subaru saves \"Satella\'s\" life from the assassin Elsa; she reveals that her real name is Emilia, and as a token of gratitude, Felt returns the insignia to her. While recovering at the margrave Roswaal\'s mansion, the mage Beatrice drains Subaru\'s mana. After waking up, he meets the twin maids Ram and Rem, as well as Roswaal, who hires him as a butler at Subaru\'s request. Roswaal reveals that Emilia needed the insignia to qualify as a candidate in the upcoming royal election. After mysteriously dying again, Subaru decides to investigate the circumstances leading to his death, and tries to recreate these events. Following a series of traumatic deaths and revivals, he learns that a curse had been placed on him, then deduces it came from a village he had visited earlier, while also resolving Rem\'s intense hatred for witches. Eventually, the village is threatened by creatures known as mabeasts, demonic beasts that are rumored to have been created by a witch to wipe out humanity, so Subaru, Rem and Ram have to rescue the villagers. However, everytime Subaru dies in every fight he has been, he will immediately reawakens to a familiar scene—confronted by the same group of thugs, meeting Satella all over again—the enigma deepens as history inexplicably repeats itself.\r\n				', '2016 - Present', 'White Fox', 'Animation, Romance, Adventure, Supernatural, Fantasy, Drama, Action', '38', '25 min. per episode', 'April 4, 2016', 'Premiere in 2021', 'Ongoing', '2', 'R - 17+ (violence & profanity)', NULL, 'RM 125', NULL),
(8, 'Fairy Tail', 'In the mystical land of Fiore, magic exists as an essential part of everyday life. Countless magic guilds lie at the core of all magical activity, and serve as venues for like-minded mages to band together and take on job requests. Among them, Fairy Tail stands out from the rest as a place of strength, spirit, and family. Lucy Heartfilia is a young mage searching for celestial gate keys, and her dream is to become a full-fledged wizard by joining this famous guild. In her search, she runs into Natsu Dragneel and his partner Happy, who are on a quest to find Natsu\'s foster father, the dragon Igneel. Upon being tricked by a man, Lucy falls under an abduction attempt, only to be saved by Natsu. To her shock, he reveals that he is a member of Fairy Tail and invites her to join them. There, Lucy meets the guild\'s strange members, such as the ice wizard Gray Fullbuster and magic swordswoman Erza Scarlet. Together as a family, they battle the forces of evil, help those in need, and gain new friends, all the while enjoying the never-ending adventure that is Fairy Tail.\r\n				', '2009 - 2019', 'A-1 Pictures Satelight(#1-175)\r\nBridge(#176-328)\r\nCloverWorks(#278-328)', 'Animation, Adventure, Fantasy, Drama, Action', '328', '24 min. per episode', 'October 12, 2009', 'September 29, 2019', 'Finished airing', '9', 'PG-13 - Teens 13 or older', NULL, 'RM 165', NULL),
(9, 'Cannon Busters', 'Sam is a friendship robot who was separated from her best friend, Prince Kelby of Bodica, when Bodica was attacked by powerful invaders. She seeks to reunite with him at Garas Keep, a traditional safe point for the Bodican royal family. Along the way, she befriends the maintenance \'bot Casey and the wanted outlaw Philly the Kid, much to the latter\'s chagrin. While Kelby travels to the keep under the protection of Royal Guard Captain Odin, Philly unwillingly finds himself transporting Sam and Casey in the same general direction. The world is a dangerous place even if your method of transport is a huge car that can turn into a bull-themed mecha by inserting four quarters into its slot, but Philly has an extra ace up his sleeve: he\'s immortal thanks to a sorcerer\'s curse. There\'s also more to Sam than meets the eye, and woe to anyone who endangers one of her new friends!', '2019', 'Satelight, Yumeta Company', 'Action, Sci-Fi, Adventure, Fantasy, Mecha', '12', '24 min. per episode', 'August 15, 2019', '-', 'Ongoing', '1', 'R - 17+ (violence and profanity)', NULL, 'RM 100', NULL),
(10, 'The Rising of The Shield Hero', 'The Four Cardinal Heroes are a group of ordinary men from modern-day Japan summoned to the kingdom of Melromarc to become its saviors. Melromarc is a country plagued by the Waves of Catastrophe that have repeatedly ravaged the land and brought disaster to its citizens for centuries. The four heroes are respectively bestowed a sword, spear, bow, and shield to vanquish these Waves. Naofumi Iwatani, an otaku, becomes cursed with the fate of being the \"Shield Hero.\" Armed with only a measly shield, Naofumi is belittled and ridiculed by his fellow heroes and the kingdom\'s people due to his weak offensive capabilities and lackluster personality.\r\n\r\nWhen the heroes are provided with resources and comrades to train with, Naofumi sets out with the only person willing to train alongside him, Malty Melromarc. He is soon betrayed by her, however, and becomes falsely accused of taking advantage of her. Naofumi then becomes heavily discriminated against and hated by the people of Melromarc for something he didn\'t do. With a raging storm of hurt and mistrust in his heart, Naofumi begins his journey of strengthening himself and his reputation. Further along however, the difficulty of being on his own sets in, so Naofumi buys a demi-human slave on the verge of death named Raphtalia to accompany him on his travels.\r\n\r\nAs the Waves approach the kingdom, Naofumi and Raphtalia must fight for the survival of the kingdom and protect the people of Melromarc from their ill-fated future.', '2019', 'Kinema Citrus', 'Action, Adventure, Drama, Fantasy', '25', '24 min. per episode', 'January 9, 2019', 'June 26, 2019', 'Finished Airing', '1', 'PG-13 - Teens or older', NULL, 'RM 90', NULL),
(11, 'Hanebado!', 'After her crushing defeat of 21-0 at the National Junior Badminton Tournament, Nagisa Aragaki\'s love for her sport begins to distort. Unable to deal with the shame of loss, she starts to terrorize the members of her high school badminton club. Her grueling drills bring some to the verge of tears while others quit the club outright. With the team losing members and new prospects being too terrified to join, the future of the badminton club looks exceptionally grim.\r\n\r\nThat is, until Kentarou Tachibana joins as the new head coach. Not only is he an Olympic-level player, but he also comes bearing a secret weapon: Ayano Hanesaki, the girl who defeated Nagisa six months ago. However, Ayano is not the rival Nagisa remembers, but a girl with conflicted feelings wanting to distance herself from badminton. With her future in sports now on the line, Nagisa must find a way to face her fears of inadequacy, heal her rival\'s troubled heart, and bring victory to Kitakomachi High School\'s badminton club.', '2018', 'LIDENFILMS', 'Seinen, Sports', '13', '24 min. per episode', 'July 2, 2018', 'October 1, 2018', 'Finished airing', '1', 'PG-13 - Teens or older', NULL, 'RM 80', NULL),
(12, 'Lost Song', 'Lost Song tells the stories of the cheerful Rin and the reserved Finis, two songstresses who are capable of performing magical songs. Rin grew up in a remote village with her family and was taught to keep her power secret, while Finis lives and performs in the royal palace.\r\n\r\nRin\'s happy and peaceful life is shattered after she saves an injured knight named Henry Leobort with her song of healing. She was seen by soldiers who proceeded to attack her village in hopes of capturing her. With nowhere else to go, she and her inventor brother Al begin a journey to the capital.\r\n\r\nFinis finds herself falling in love with Henry and, knowing that the greedy and spiteful Prince Lood Bernstein IV desires her, must hide their relationship. She wants to help people with her songs, but with war on the horizon, she worries that Lood will order her to cast her magic in the battlefield. Only time will tell how her destiny and Rin\'s will intersect, as the two of them struggle to find their paths.\r\n', '2018', 'Dwango, LIDENFILMS', 'Drama Fantasy', '12', '23 min. per episode', 'April 8, 2018', 'June 16, 2018', 'Finished airing', '1', 'PG-13 - Teens or older', NULL, 'RM 100', NULL),
(13, 'Last Hope', 'The series is set in a near-future world where the boundary between human being and AI is vague. A rapid biological evolution, similar to \"Cambrian Explosion,\" is caused by one incident. This incident turns into the genesis of a new jostle for supremacy, and the influence of the evolution goes beyond biological framework and spreads to various kinds of materials and technologies. The era of massive evolution involving diverse existences, such as human, machines, and biotechnologies, is coming. Characters fight an existential war in such a world.', '2018', 'Satelight', 'Sci-Fi, Mecha', '26', '23 min. per episode', 'March 29, 2018', 'Sep 20, 2018', 'Finished airing', '1', 'PG-13 - Teens and older', NULL, 'RM 100', NULL),
(14, 'Violet Evergarden', 'The Great War finally came to an end after four long years of conflict; fractured in two, the continent of Telesis slowly began to flourish once again. Caught up in the bloodshed was Violet Evergarden, a young girl raised for the sole purpose of decimating enemy lines. Hospitalized and maimed in a bloody skirmish during the War\'s final leg, she was left with only words from the person she held dearest, but with no understanding of their meaning.\r\n\r\nRecovering from her wounds, Violet starts a new life working at CH Postal Services after a falling out with her new intended guardian family. There, she witnesses by pure chance the work of an \"Auto Memory Doll,\" amanuenses that transcribe people\'s thoughts and feelings into words on paper. Moved by the notion, Violet begins work as an Auto Memory Doll, a trade that will take her on an adventure, one that will reshape the lives of her clients and hopefully lead to self-discovery.', '2018', 'Kyoto Animation', 'Romance, Slice of Life, Drama, Fantasy', '13', '24 min. per episode', 'January 11, 2018', 'April 5, 2018', 'Finished airing', '1', 'PG-13 - Teens or older', NULL, 'RM 90', NULL),
(15, 'B:The Beginning', 'On the islands of Cremona, a vigilante runs amok. Celebrated by some and hunted by others, the notorious \"Killer B\" takes justice into his own hands, armed with a sharp blade and superhuman abilities. Unable to apprehend this renegade, the Royal Investigation Service (RIS) calls upon the expertise of Keith Flick, a seasoned, yet eccentric detective who was relegated to the Archives Department following a personal loss. As crimes in Cremona begin to escalate, from stealthy executions of wrongdoers to sophisticated strikes on public figures, it soon becomes clear that there is more than one person responsible.\r\n\r\nWith the help of his impulsive sidekick Lily Hoshina, and unexpected aid from the elusive Killer B himself, Keith begins to unravel plots involving secret organizations, domestic terrorism, and human experiments. When the involvement of the RIS extends beyond the scope of justice, the extent of the government\'s corruption—as well as the trustworthiness of close allies—are thrown into question.', '2018', 'Production of I.G', 'Action, Mystery, Police, Psychological, Supernatural, Thriller', '12', '23 min.per episode', 'March 2, 2018', 'Unconfirmed', 'Ongoing', '1', 'R - 17+ (Violence and profanity)', NULL, 'RM 100', NULL),
(16, 'Japan Sinks 2020', 'The Mutou family leads a peaceful life: Kouichirou works at a construction site and his wife Mari is returning from an overseas trip. Their daughter Ayumu has just finished her track practice while their son Gou is playing video games at home. However, life as they know it is flipped upside down when a calamitous earthquake strikes the entire Japanese archipelago—obliterating the face of the country in an instant.\r\n\r\nWith society crumbling around them and their nation gradually sinking into the ocean, the Mutou family must band together to survive the catastrophe. Treading the near-apocalyptic setting, they struggle not only to stay alive, but also to learn the difficulty of coping with loss.', '2020', 'Science SARU', 'Drama, Sci-Fi', '10', '25 min.per episode', 'July 9, 2020', '-', 'Finsihed airing', '1', 'R - 17+ (Violence and profanity)', NULL, 'RM 80', NULL),
(17, 'No Game No Life', 'No Game No Life is a surreal comedy that follows Sora and Shiro, shut-in NEET siblings and the online gamer duo behind the legendary username \"Blank.\" They view the real world as just another lousy game; however, a strange e-mail challenging them to a chess match changes everything—the brother and sister are plunged into an otherworldly realm where they meet Tet, the God of Games.\r\n\r\nThe mysterious god welcomes Sora and Shiro to Disboard, a world where all forms of conflict—from petty squabbles to the fate of whole countries—are settled not through war, but by way of high-stake games. This system works thanks to a fundamental rule wherein each party must wager something they deem to be of equal value to the other party\'s wager. In this strange land where the very idea of humanity is reduced to child\'s play, the indifferent genius gamer duo of Sora and Shiro have finally found a real reason to keep playing games: to unite the sixteen races of Disboard, defeat Tet, and become the gods of this new, gaming-is-everything world.', '2014', 'Madhouse', 'Game, Adventure, Comedy, Supernatural, Ecchi, Fantasy', '12', '23 min. per episode', 'April 9, 2014', 'June 25, 2014', 'Finished airing', '1', 'PG-13 - Teens or older', NULL, 'RM 120', NULL),
(18, 'Kakegurui', 'Unlike many schools, attending Hyakkaou Private Academy prepares students for their time in the real world. Since many of the students are the children of the richest people in the world, the academy has its quirks that separate it from all the others. By day, it is a normal school, educating its pupils in history, languages, and the like. But at night, it turns into a gambling den, educating them in the art of dealing with money and manipulating people. Money is power; those who come out on top in the games stand at the top of the school.\r\n\r\nYumeko Jabami, a seemingly naive and beautiful transfer student, is ready to try her hand at Hyakkaou\'s special curriculum. Unlike the rest, she doesn\'t play to win, but for the thrill of the gamble, and her borderline insane way of gambling might just bring too many new cards to the table.', '2017', 'MAPPA', 'Game, Mystery, Psychological, Drama, School, Shounen', '12', '24 min. per episode', 'July 1, 2017', 'September 23, 2017', 'Finished airing', '1', 'R - 17+ (Violence & profanity)', NULL, 'RM 120', NULL),
(19, 'Attack on Titan', 'Centuries ago, mankind was slaughtered to near extinction by monstrous humanoid creatures called titans, forcing humans to hide in fear behind enormous concentric walls. What makes these giants truly terrifying is that their taste for human flesh is not born out of hunger but what appears to be out of pleasure. To ensure their survival, the remnants of humanity began living within defensive barriers, resulting in one hundred years without a single titan encounter. However, that fragile calm is soon shattered when a colossal titan manages to breach the supposedly impregnable outer wall, reigniting the fight for survival against the man-eating abominations.\r\n\r\nAfter witnessing a horrific personal loss at the hands of the invading creatures, Eren Yeager dedicates his life to their eradication by enlisting into the Survey Corps, an elite military unit that combats the merciless humanoids outside the protection of the walls. Based on Hajime Isayama\'s award-winning manga, Shingeki no Kyojin follows Eren, along with his adopted sister Mikasa Ackerman and his childhood friend Armin Arlert, as they join the brutal war against the titans and race to discover a way of defeating them before the last walls are breached.', '2013', 'Wit Studio', 'Action, Military, Mystery, Superpower, Drama, Fantasy, Shounen', '59', '24 min. per episode', 'April 7, 2013', 'Unconfirmed', 'Ongoing', '5', 'R - 17+ (Violence & profanity)', NULL, 'RM 180', NULL),
(20, 'Tokyo Ghoul', 'Tokyo has become a cruel and merciless city—a place where vicious creatures called “ghouls” exist alongside humans. The citizens of this once great metropolis live in constant fear of these bloodthirsty savages and their thirst for human flesh. However, the greatest threat these ghouls pose is their dangerous ability to masquerade as humans and blend in with society.\r\n\r\nBased on the best-selling supernatural horror manga by Sui Ishida, Tokyo Ghoul follows Ken Kaneki, a shy, bookish college student, who is instantly drawn to Rize Kamishiro, an avid reader like himself. However, Rize is not exactly who she seems, and this unfortunate meeting pushes Kaneki into the dark depths of the ghouls\' inhuman world. In a twist of fate, Kaneki is saved by the enigmatic waitress Touka Kirishima, and thus begins his new, secret life as a half-ghoul/half-human who must find a way to integrate into both societies.\r\n', '2014', 'Studio Pierrot', 'Action, Mystery, Horror, Psychological, Supernatural, Drama, Seinen', '48', '24 min. per episode', 'July 4, 2014', 'December 25, 2018', 'Finished airing', '4', 'R - 17+ (Violence & profanity)', NULL, 'RM 190', NULL),
(21, 'Sword Art Online', 'In the year 2022, virtual reality has progressed by leaps and bounds, and a massive online role-playing game called Sword Art Online (SAO) is launched. With the aid of \"NerveGear\" technology, players can control their avatars within the game using nothing but their own thoughts.\r\n\r\nKazuto Kirigaya, nicknamed \"Kirito,\" is among the lucky few enthusiasts who get their hands on the first shipment of the game. He logs in to find himself, with ten-thousand others, in the scenic and elaborate world of Aincrad, one full of fantastic medieval weapons and gruesome monsters. However, in a cruel turn of events, the players soon realize they cannot log out; the game\'s creator has trapped them in his new world until they complete all one hundred levels of the game.\r\n\r\nIn order to escape Aincrad, Kirito will now have to interact and cooperate with his fellow players. Some are allies, while others are foes, like Asuna Yuuki, who commands the leading group attempting to escape from the ruthless game. To make matters worse, Sword Art Online is not all fun and games: if they die in Aincrad, they die in real life. Kirito must adapt to his new reality, fight for his survival, and hopefully break free from his virtual hell.', '2012', 'A-1 Pictures', 'Action, Game, Adventure, Romance, Fantasy', '96', '24 min. per episode', 'July 8, 2012', 'September 19, 2020', 'Finished airing', '3', 'PG-13 - Teens or older', NULL, 'RM 140', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phoneNumber` int(12) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `creditCardNo` int(16) DEFAULT NULL,
  `CCName` varchar(100) DEFAULT NULL,
  `CCExpiry` varchar(10) DEFAULT NULL,
  `CCValidationCode` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phoneNumber`, `address`, `creditCardNo`, `CCName`, `CCExpiry`, `CCValidationCode`) VALUES
(93, 'PlayerThere', 'haha@haha.com', '1a1dc91c907325c69271ddf0c944bc72', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Table structure for table `discount_coupon`
--

CREATE TABLE `discount_coupon` (
  `id` int(6) UNSIGNED NOT NULL,
  `discount_code` varchar(32) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount_coupon`
--

INSERT INTO `discount_coupon` (`id`, `discount_code`, `price`) VALUES
(1, 'PROMO10', 10),
(2, 'PROMO30', 30),
(3, 'PROMO50', 50),
(4, 'PROMO70', 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_coupon`
--
ALTER TABLE `discount_coupon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
