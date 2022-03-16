-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 16 mars 2022 à 21:41
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `articles`
--

-- --------------------------------------------------------

--
-- Structure de la table `caisse`
--

CREATE TABLE `caisse` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `caisse`
--

INSERT INTO `caisse` (`id`, `titre`, `contenu`, `images_name`, `price`) VALUES
(3, 'PAX E800', 'Les éléments clés de l\'E800 : \r\n4G + WiFi (5 Ghz) + Bluetooth (BLE) + Ethernet\r\nLecteur DIP Intégré PAX Q20 Hybrid \r\nSans contact PCI 5.x SRED & NFC \r\nImprimante super rapide, jusqu\'à 150 mm/s\r\nOptions de rechargement variées \r\nEcran tactile 15.6 pouces full HD IPS \r\nPorts périphériques multiples\r\nSupports WiFi probes\r\nCamera intégrée\r\nGPS intégré. Les caisses série-E sous Android vous donnent accès à tout un monde d\'applications et de solutions métier.\r\n\r\nLa caisse E800 traite tous les types de paiements, de la carte à puce/piste au sans contact, en passant par les porte-monnaies électroniques ou les QR codes.', '1647443348.jpg', 'Caisse Android'),
(4, 'PAX E700', 'Caisse et terminal de paiement tout-en-un. La E700 est idéale pour les boutiques, restaurants et les hôtels à la recherche d\'un matériel design, robuste et peu encombrant. \r\nLes éléments clés de la caisse E700 : \r\nCamera intégrée\r\nEcran 12.5 pouces HD, (IPS display)\r\n4G + 5G + WiFi + Bluetooth\r\nCapteur le luminosité automatique \r\nImprimante thermique rapide intégrée \r\nPCI 5.x SRED & Sans contact NFC\r\nProcesseur 1.8 Ghz Quad-core Cortex A53.', '1647450537.jpg', 'Caisse Android'),
(5, 'PAX E600', 'Avec la caisse E600 PAX, être portable ne signifie pas être moins complète. Cette caisse tout-en-un permet de procéder à une vente accompagnée sur n\'importe quel lieu dans le point de vente.\r\nCette caisse est une solution idéale pour la facturation mobile, les entreprises de livraison et les commerçants ambulants.\r\n\r\nEléments clés de l\'E600 : \r\nProcesseur cortex 1.4 Ghz Quad-core Cortex A53\r\n4G +WiFi + Bluetooth \r\nEcran côté vendeur tactile Dual HD 8 pouces + écran client  4.3 pouces \r\nDouble camera: caméra avant 5MP  + caméra arrière 0.3MP \r\nAuthentification biométrique optionnelle\r\nImprimante thermique rapide intégrée \r\nCapteur de luminosité automatique\r\nBase de chargement.', '1647451060.jpg', 'Caisse Android'),
(6, 'PAX E500', 'Cette caisse n\'est pas seulement compacte, elle est aussi design. Ce ne sont pas des termes que l\'on associe généralement aux caisses avec un TPE, mais la E500 est une vraie petite révolution, qui vous offre tous les bénéfices de la série E dans un design compact. Une combinaison d\'atouts puissante. Les éléments clés de l\'E500 :\r\n\r\nMémoire1GB DD, pouvant être upgradée à 8GB eMMC fast flash\r\nProcesseur Cortex quad-core-A53, capacité 1.2GHz\r\nLecteur hybride intégré PAX Q20\r\nPCI 5.x SRED & Sans contact NFC\r\nMémoire combinée 1+8 classic \r\nEcran 8 pouces HD IPS \r\n4G + WiFi + Bluetooth \r\nCaméra intégrée.', '1647451225.jpg', 'Caisse Android'),
(7, 'BIBORNE', 'La borne de commande est un outil efficace pour promouvoir les nouveautés du restaurant. Vous pouvez en mode veille, diffuser des vidéos de présentation d’un menu et mettre en avant votre enseigne. En fin de compte, cet outil permettra d’attiser la curiosité de vos clients et par la suite passer commande.<br/><br/>\r\n\r\nCette solution de magasin intelligent simplifie la vie des employés. En effet, son système innovant permet d’assurer la gestion des commandes lorsque le flux de travail est important.<br/><br/>\r\n\r\nAinsi, votre équipe pourra se concentrer pleinement sur la satisfaction des clients (prise en charge des commandes, qualité des plats, propreté du restaurant..).<br/><br/>\r\n\r\nEn ce qui concerne les erreurs de commande, vous constaterez un taux d’erreur beaucoup plus faible. En effet, la commande étant effectué par le client directement réduit le risque de se tromper grâce au borne de commande.', '1647452114.jpg', 'BORNE DE COMMANDE');

-- --------------------------------------------------------

--
-- Structure de la table `camera`
--

CREATE TABLE `camera` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` date NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `centralise`
--

CREATE TABLE `centralise` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `centralise`
--

INSERT INTO `centralise` (`id`, `titre`, `contenu`, `images_name`, `price`) VALUES
(3, 'PAX A50', 'Les points clés de l\'A50 : \r\nAndroid 8.1 OS \r\nProcesseur Cortex-A53, 1,4GHZ\r\nBatterie 3.8V, 2500 mAh\r\nEcran 4.5 pouces, couleur IPS\r\n4G + WiFi + Bluetooth 4.2\r\nCaméra arrière 2MP (en option: 5MP)\r\nEn option: caméra frontale 0.3MP \r\nPCI PTS 5.x. SRED\r\nGPS intégré. Avec son processeur puissant, une batterie qui dure toute la journée et les caméras intégrées, le A50 gère tous vos types de paiements, partout, tout le temps, et en un instant.', '1647432244.jpg', 'Mini POS Android'),
(5, 'PAX A80', 'Les éléments clés du A80 : \r\nAndroid 6.0\r\nProcesseur cortex A53 \r\n4G/3G + WiFi + Bluetooth + Ethernet + Dial \r\nSans contact + chip & PIN + piste magnétique \r\nEcran tactile HD 4 pouces\r\nClavier à touches\r\nCaméra\r\nImprimante\r\nEn option: batterie\r\nPCI PTS 5.x. Disponible en blanc ou noir.', '1647432905.jpg', 'Terminal fixe Android'),
(6, 'PAX A60', 'Les points clés du A60 : \r\nGPS intégré\r\nLecteur carte hybride\r\nProcesseur Cortex A7\r\n4G + WiFi + Bluetooth (BLE)\r\nPCI PTS 5.x & et sans contact intégral\r\nEcran tactile 5 pouces / PIN sur écran\r\nCamera arrière & caméra avant en option\r\nEn option: Base support avec imprimante & ports multiples.  Avec la base BP60A, vous pouvez connecter votre A60 en Wi-fi ou en Bluetooth, et imprimer le ticket avec l\'imprimante massicot automatique.', '1647433143.jpg', '​Lecteur hybride (carte et piste)'),
(7, 'BIBORNE', 'La borne de commande est un outil efficace pour promouvoir les nouveautés du restaurant. Vous pouvez en mode veille, diffuser des vidéos de présentation d’un menu et mettre en avant votre enseigne. En fin de compte, cet outil permettra d’attiser la curiosité de vos clients et par la suite passer commande.<br/><br/>\r\n\r\nCette solution de magasin intelligent simplifie la vie des employés. En effet, son système innovant permet d’assurer la gestion des commandes lorsque le flux de travail est important.<br/><br/>\r\n\r\nAinsi, votre équipe pourra se concentrer pleinement sur la satisfaction des clients (prise en charge des commandes, qualité des plats, propreté du restaurant..).<br/><br/>\r\n\r\nEn ce qui concerne les erreurs de commande, vous constaterez un taux d’erreur beaucoup plus faible. En effet, la commande étant effectué par le client directement réduit le risque de se tromper grâce au borne de commande.', '1647433363.jpg', 'BORNE DE COMMANDE'),
(8, 'PAX A920Pro', 'Eléments clés de l\'A920Pro : \r\nAndroid 8.1\r\nProcesseur cortex A53\r\nEcran tactile 5.5 pouces capacitive\r\n4G + WiFi + Bluetooth\r\nSans contact + chip & PIN + piste magnétique\r\nPIN sur écran\r\nCaméra arrière 5MP\r\nScanner professionel\r\nBatterie 5150mAh / 3V\r\nPCI PTS 5.x SRED. Le A920pro est une version augmentée du A920. Il bénéficie d\'un processeur plus rapide, d\'un scanner de codes barres et d\'un écran tactile haute résolution plus grand, tout cela bien sûr dans le même design élégant.', '1647433534.jpg', 'Terminal mobile Android'),
(10, 'PAX A930', 'Les éléments clés de l\'930 : Ecran tactile de 5.5 pouces capacitif, PIN sur écran PCI PTS 5.x SRED & NFC sans contact 4G + WiFi + Bluetooth Processeur cortex A53 Camera avant et caméra arrière GPS intégré Certifié ATEX.', '1647433810.jpg', 'TERMINAL MOBILE ANDROID'),
(11, 'PAX S920', 'Le S920 de poche et agile, avec une version PCI 5 maintenant également disponible, est un appareil de paiement mobile préféré pour l\'industrie de l\'hôtellerie et de la restauration. Il offre la portabilité et la facilité d\'utilisation pour le personnel du commerçant et les clients.', '1647436134.jpg', 'Mobile'),
(12, 'PAX Q25', 'Le Q25 est un clavier NIP activé et orienté client certifié PCI PTS 5.x qui prend en charge toutes les formes de paiement électronique, y compris les cartes à bande magnétique, les cartes à puce EMV, les cartes et téléphones sans contact NFC et les codes QR. Le design élégant et ergonomique du Q25 se prête à être monté sur un support/comptoir ou remis au consommateur.', '1647436640.jpg', 'Clavier PIN Pad');

-- --------------------------------------------------------

--
-- Structure de la table `encaissement`
--

CREATE TABLE `encaissement` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `encaissement`
--

INSERT INTO `encaissement` (`id`, `titre`, `contenu`, `images_name`, `price`) VALUES
(3, 'AirKitchen', 'Un logiciel pensé pour les restaurants traditionnels, les snacks, les fast food, les bars, les salons de thé ou encore les food trucks et les boulangeries. AirKitchen est la solution de caisse pour gérer votre établissement en termes de commandes, d\'encaissements, de gestion de stocks, d\'historique d’achats et de fidélité clients. Un modèle complet facile à prendre en main et adaptable.', '1647437529.jpg', 'LOGICIEL DE CAISSE'),
(4, 'RoverCash', 'Plus qu’une solution d’encaissement, RoverCash remplace votre caisse enregistreuse traditionnelle, faisant de votre tablette ou de votre smartphone un véritable outil de gestion. Derrière votre comptoir, au coeur des rayons, en déplacement, encaissez vos clients en quelques clics. Connecté à des TPE de dernière génération, RoverCash sécurisera vos transactions.', '1647437742.jpg', 'LOGICIEL DE CAISSE'),
(5, 'Clyo Systems', 'Le meilleur logiciel de caisse du marché pour le secteur de la restauration : Restaurant, Bar, Café, Brasserie, Pub, Restauration classique et Gastronomique. Il vous permet de gérer les commandes, l’encaissement, les stocks, l’inventaire, le service, vos données,vos employés et les relations clients. Toutes vos opérations apparaissent sur le même écran de la caisse enregistreuse pour réduire les erreurs et faciliter la gestion au quotidien. Vous pouvez utiliser notre logiciel de restauration avec ou sans connexion Internet.', '1647438112.jpg', 'LOGICIEL DE CAISSE'),
(6, 'Digifood', 'Toutes les fonctionnalités nécessaires à votre restaurant : complète et intuitive. Gagnez en efficacité en améliorant la communication salle-cuisine. Envoyez vos plats en cuisine en 1 étape. Gérez les profils et accès de vos employés simplement depuis votre Back-Office. Gardez toujours un oeil sur vos niveaux de stocks et ne vous retrouvez jamais en rupture avec notre système d’alerte.', '1647438465.jpg', 'LOGICIEL DE CAISSE'),
(7, 'BIBORNE', 'La borne de commande est un outil efficace pour promouvoir les nouveautés du restaurant. Vous pouvez en mode veille, diffuser des vidéos de présentation d’un menu et mettre en avant votre enseigne. En fin de compte, cet outil permettra d’attiser la curiosité de vos clients et par la suite passer commande.<br/><br/>\r\n\r\nCette solution de magasin intelligent simplifie la vie des employés. En effet, son système innovant permet d’assurer la gestion des commandes lorsque le flux de travail est important.<br/><br/>\r\n\r\nAinsi, votre équipe pourra se concentrer pleinement sur la satisfaction des clients (prise en charge des commandes, qualité des plats, propreté du restaurant..).<br/><br/>\r\n\r\nEn ce qui concerne les erreurs de commande, vous constaterez un taux d’erreur beaucoup plus faible. En effet, la commande étant effectué par le client directement réduit le risque de se tromper grâce au borne de commande.', '1647438737.jpg', 'BORNE DE COMMANDE'),
(8, 'LinéoSoft', 'LinéoSoft est un éditeur de logiciels de caisse à suivre de près. Nous ne pouvons pas vraiment en parler pour l\'instant, car les produits ne sont pas encore dévoilés au public, mais nous pouvons vous dire d\'ores et déjà que ce sont de véritables professionnels de la caisse, avec beaucoup d\'expérience sur le marché, et voulant sortir une nouvelle gamme de logiciels abordables, simples, et fiables.', '1647442778.jpg', 'LOGICIEL DE CAISSE');

-- --------------------------------------------------------

--
-- Structure de la table `monnayeur`
--

CREATE TABLE `monnayeur` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `monnayeur`
--

INSERT INTO `monnayeur` (`id`, `titre`, `contenu`, `images_name`, `price`) VALUES
(5, 'CASHDRO 7', 'CashDro7 est l\'équipement idéal pour les entreprises où la validation ou la distribution à grande vitesse des billets de banque est requise lors de la collecte, du changement ou du chargement.', '1647435431.jpg', 'Monnayeur'),
(6, 'CASHDRO 6', 'CashDro6 est l\'équipement idéal pour les entreprises où une grande vitesse est requise dans la validation ou la distribution des billets lors de la collecte, du changement ou du chargement.', '1647435512.jpg', 'Monnayeur'),
(7, 'BIBORNE', 'La borne de commande est un outil efficace pour promouvoir les nouveautés du restaurant. Vous pouvez en mode veille, diffuser des vidéos de présentation d’un menu et mettre en avant votre enseigne. En fin de compte, cet outil permettra d’attiser la curiosité de vos clients et par la suite passer commande.<br/><br/>\r\n\r\nCette solution de magasin intelligent simplifie la vie des employés. En effet, son système innovant permet d’assurer la gestion des commandes lorsque le flux de travail est important.<br/><br/>\r\n\r\nAinsi, votre équipe pourra se concentrer pleinement sur la satisfaction des clients (prise en charge des commandes, qualité des plats, propreté du restaurant..).<br/><br/>\r\n\r\nEn ce qui concerne les erreurs de commande, vous constaterez un taux d’erreur beaucoup plus faible. En effet, la commande étant effectué par le client directement réduit le risque de se tromper grâce au borne de commande.', '1647435553.jpg', 'BORNE DE COMMANDE'),
(8, 'CASHDRO 3', 'CashDro3 est l\'équipement idéal pour les entreprises où une grande vitesse est requise dans la validation ou la distribution des billets lors de la collecte, du changement ou du chargement.', '1647435618.jpg', 'Monnayeur');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tpe`
--

CREATE TABLE `tpe` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(255) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tpe`
--

INSERT INTO `tpe` (`id`, `titre`, `contenu`, `images_name`, `price`) VALUES
(78, 'Desk/5000', 'Le Desk 5000 est un terminal innovant sur lequel peuvent être chargées des applications \"métiers\" et qui peut se connecter aux environnements les plus variés. Il répond à de nombreux cas d\'usage, transformant ainsi le point de vente en point de service. Pin Pad compatible : IPP 310 (PCI PTS V3 uniquement) IPP 315', '1647373448.jpg', 'INGENICO'),
(79, 'iCT220', 'L\' ICT 220, terminal de comptoir, présente des fonctionnalités de sécurité sans précédent, permettant de sauvegarder les données sensibles de paiement. Sa plateforme de nouvelle génération constitue un support de sécurité qui assure une tranquillité d’esprit pour les commerçants comme pour les consommateurs. Pin Pad compatible :\r\n\r\nPP30 S\r\nP30\r\nP30 C\r\niPP220\r\niPP280\r\niPP310', '1647373596.jpg', 'INGENICO'),
(80, 'iCT220 G/3G', 'L\' ICT 220 est le premier terminal de comptoir certifié PCI 2.0. Il présente des fonctionnalités de sécurité sans précédent, permettant de sauvegarder les données sensibles de paiement. Sa plateforme de nouvelle génération constitue un support de sécurité qui assure une tranquillité d’esprit pour les commerçants comme pour les consommateurs.\r\n\r\nVersion iCT220 avec modem GPRS. Pin Pad compatible :\r\n\r\nPP30 S\r\nP30\r\nP30 C\r\niPP220\r\niPP280\r\niPP310', '1647373764.jpg', 'INGENICO'),
(81, 'iCT250', 'L’iCT250 offre un grand confort d’utilisation, pour le commerçant comme pour le client : faible encombrement, prise en main facile, larges touches rétro-éclairées, et un grand écran couleur qui permet une excellente lisibilité des messages de transaction et donne accès à des menus plus faciles à utiliser et à des messages plus riches. Pin Pad compatible :\r\n\r\nPP30 S\r\nP30\r\nP30 C\r\niPP220\r\niPP280\r\niPP310', '1647373961.jpg', 'INGENICO'),
(82, 'iCT250 G/3G', 'L’iCT250 offre un grand confort d’utilisation, pour le commerçant comme pour le client : faible encombrement, prise en main facile, larges touches rétro-éclairées, et un grand écran couleur qui permet une excellente lisibilité des messages de transaction et donne accès à des menus plus faciles à utiliser et à des messages plus riches.\r\n\r\nVersion iCT 250 avec Modem 3G//GPRS. Pin Pad compatible :\r\n\r\nPP30 S\r\nP30\r\nP30 C\r\niPP220\r\niPP280\r\niPP310', '1647374121.jpg', 'INGENICO'),
(83, 'MOVE/5000', 'Le Move 5000 révolutionne le terminal mobile en l\'ouvrant à un monde d\'appplication \"métiers\".\r\nExiste en versions avec :\r\n\r\nSans contact\r\n3G/GPRS\r\nBluetooth\r\nWifi\r\nIP Ethernet.\r\n\r\nLecteurs :\r\n\r\nCarte à puce contact\r\nCarte à piste magnétique\r\nSAM\r\nCarte à puce Sans contact (Option)', '1647374232.jpg', 'INGENICO'),
(84, 'iWL220', 'La gamme iWL200 a été conçue pour devenir la plateforme de paiement portable par excellence. Intégrant les technologies les plus abouties ainsi qu’une gestion efficace de la consommation, elle assure une autonomie de fonctionnement au delà d’une journée d’utilisation dans les conditions les plus intensives.\r\n\r\nBasée sur la technologie Telium2, iWL200 intègre également une imprimante ultra-rapide (jusqu\'à 30 lignes par secondes).', '1647374538.jpg', 'INGENICO'),
(85, 'iWL250 W', 'Les terminaux de la gamme\r\niWL 250 ont été conçus autour\r\nde la technologie innovante\r\nTelium 2 d’Ingenico et\r\nde son expertise en matière\r\nde sécurité.  Transformant le point de\r\nvente en un point d’interaction\r\net de services, l’iWL 250 offre\r\nune solution qui va bien au\r\ndelà des scénarios de paiement\r\ntraditionnels.', '1647375291.jpg', 'INGENICO'),
(86, 'iWL250 G/3G', 'L’iWL 250 (TELIUM 2) succède à l’EFT 930 (TELIUM 1). La gamme iWL200 a été conçue pour devenir la plateforme de paiement portable par excellence. Intégrant les technologies les plus abouties ainsi qu’une gestion efficace de la consommation, elle assure une autonomie de fonctionnement au-delà d’une journée d’utilisation dans les conditions les plus intensives.', '1647375557.jpg', 'INGENICO');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 0, 'admin', '12345', '2022-03-11 17:57:48');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `caisse`
--
ALTER TABLE `caisse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `centralise`
--
ALTER TABLE `centralise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `encaissement`
--
ALTER TABLE `encaissement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `monnayeur`
--
ALTER TABLE `monnayeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tpe`
--
ALTER TABLE `tpe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `caisse`
--
ALTER TABLE `caisse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `centralise`
--
ALTER TABLE `centralise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `encaissement`
--
ALTER TABLE `encaissement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `monnayeur`
--
ALTER TABLE `monnayeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tpe`
--
ALTER TABLE `tpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
