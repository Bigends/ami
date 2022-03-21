-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 21 mars 2022 à 15:06
-- Version du serveur : 10.1.48-MariaDB-0ubuntu0.18.04.1
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `HI-907728-CB_AMI`
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
(8, 'La borne de commande', 'La solution pour digitaliser votre restaurant !<br>\r\nBiborne dispose d’une solution innovante qui permet d’accroître votre productivité et votre chiffre d’affaires en peu de temps.<br><br>\r\n\r\nGrâce à la borne de commande Biborne, vos clients prennent commande en quelques secondes. De ce fait, fini les longues files d’attente devant les caisses. Ainsi, vos clients choisissent en liberté leurs repas du jour et payent directement sur la borne de commande.<br><br>\r\n\r\nPar conséquent, plus besoin de passer au comptoir !', '1647621617.jpg', 'BIBORNE'),
(9, 'SPIN15 - Caisse Pi', 'Diagonale d\'écran de 38cm, processeur Intel Arm9. 6 imprimantes connectables. 3 ports USB, 3 ports COM (RS-232), Ethernet. Lecteur de clé PPI (reconnaissance utilisateurs). Seule ou en réseau (avec d’autres SPIN 15, SPIN 8, SPIN PAD). Gestions des tables, plan de salle, séparation de table et de note. Gestion des règlements et différent mode de paiement, 3 niveaux de prix et gestion horaire des prix, Gestion des réservations, Comptes clients, Gestion des stocks, Lecteur de bande magnétique', '1647625107.jpg', 'Pi ELECTRONIQUE'),
(11, 'SPIN12 - Caisse Pi', 'Une performance sans faille.<br>\r\nL\'écran tactile rapide, en verre blindé, peut être manipulé au doigt ou au stylo, et ne craint pas l’humidité.<br>\r\n\r\nSpécialement conçue pour une utilisation professionnelle, la Spin 12 est donc particulièrement robuste et adaptée à un environnement de travail intensif.<br>\r\n\r\nLa caisse Spin 12 est dotée d’un lecteur de clé à puce et d’un lecteur d’empreintes pour identifier les utilisateurs.<br>\r\n\r\nElle est équipée des logiciels SPIN MANF certifiés NF525, et garantie totalement insensible aux virus.', '1647626067.jpg', 'PI ELECTRONIQUE'),
(12, 'SPIN8 - Caisse Pi', 'La Spin en concentré<br>\r\nRetrouvez toutes les fonctionnalités des caisses Spin dans un format très compact.<br>\r\n\r\nIdéale pour les établissements ayant un espace réduit.<br>\r\nSpécialement conçue pour une utilisation professionnelle, la caisse SPIN 8 est particulièrement robuste et adaptée à un environnement de travail intensif.<br>\r\n\r\nDe surcroît, son écran tactile en verre durci, peut être manipulé au doigt ou au stylo, et ne craint pas l’humidité.', '1647626238.jpg', 'Pi ELECTRONIQUE'),
(13, 'SPIN CHEF - Caisse Pi', 'Une robustesse à l’épreuve des cuisines<br>\r\nConstruite en inox, avec un grand écran tactile insensible à l’eau et à l’humidité, nous avons créé la Spin Chef spécialement pour les environnements des cuisines et des passes.<br>\r\nVisualisez en temps réel les commandes à envoyer, et les temps depuis les réclames.<br>\r\n\r\nGrâce à la fonction \"On Enlève\", la salle est immédiatement avertie des commandes prêtes.<br>\r\nAffichage continu des quantités commandées et celles disponibles.<br>\r\n\r\nLes produits en rupture sont instantanément bloqués à la vente, la salle est aussitôt informée sur les caisses et les Spin Pad.', '1647626364.jpg', 'Pi ELECTRONIQUE'),
(14, 'SPINPAD - Mini', 'Un énorme gain de temps<br>\r\nCommandes, réclames, notes et encaissements sans quitter les tables : économisez un temps précieux.<br>\r\n\r\nLes fonctions manager vous permettent de suivre les tables en attente, les retards et les oublis.<br>\r\nPetit, discret, mais puissant, il se loge au creux de la main, et son écran tactile répond au doigt et au stylo.<br>\r\n\r\nAvec plus de 10 heures d’autonomie en continu, le Spin Pad assume plusieurs services dans la journée.<br>\r\n\r\nCréé avec des matériaux renforcés et un verre blindé, le Spin Pad ne craint pas les éclaboussures et supporte des environnements extrêmes, à la mer comme en montagne.', '1647626541.jpg', 'Pi ELECTRONIQUE');

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
(4, 'PAX A77', 'Les points clés de l\'A77 : Android 8.1 OS 4G + WiFi + Bluetooth Sans contact + carte à puce + bande magnétique Ecran couleur tactile 5.5 pouces capacitif Batterie rechargeable 3.8V/5250mAh  Caméra frontale 2MP et caméra arrière 5MP avec plus haute résolution en option En option: scanner pro  port de chargement USB type-C  PCI PTS 5.x. SRED', '1647870459.jpg', 'Mini POS Android'),
(5, 'PAX A80', 'Les éléments clés du A80 : \r\nAndroid 6.0\r\nProcesseur cortex A53 \r\n4G/3G + WiFi + Bluetooth + Ethernet + Dial \r\nSans contact + chip & PIN + piste magnétique \r\nEcran tactile HD 4 pouces\r\nClavier à touches\r\nCaméra\r\nImprimante\r\nEn option: batterie\r\nPCI PTS 5.x. Disponible en blanc ou noir.', '1647432905.jpg', 'Terminal fixe Android'),
(6, 'PAX A60', 'Les points clés du A60 : \r\nGPS intégré\r\nLecteur carte hybride\r\nProcesseur Cortex A7\r\n4G + WiFi + Bluetooth (BLE)\r\nPCI PTS 5.x & et sans contact intégral\r\nEcran tactile 5 pouces / PIN sur écran\r\nCamera arrière & caméra avant en option\r\nEn option: Base support avec imprimante & ports multiples.  Avec la base BP60A, vous pouvez connecter votre A60 en Wi-fi ou en Bluetooth, et imprimer le ticket avec l\'imprimante massicot automatique.', '1647433143.jpg', '​Lecteur hybride (carte et piste)'),
(11, 'PAX S920', 'Le S920 de poche et agile, avec une version PCI 5 maintenant également disponible, est un appareil de paiement mobile préféré pour l\'industrie de l\'hôtellerie et de la restauration. Il offre la portabilité et la facilité d\'utilisation pour le personnel du commerçant et les clients.', '1647436134.jpg', 'Mobile'),
(12, 'PAX Q25', 'Certifié PCI PTS 5.x et SRED, le pinpad Q25 de Pax Technology est un boitier client qui peut être couplé avec le TPE fixe A80 ou fonctionner seul en monétique centralisée (intégrée) en le reliant directement au logiciel caisse (monétique centralisée).', '1647436640.jpg', 'Pindpad');

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
(6, 'Digifood', 'Toutes les fonctionnalités nécessaires à votre restaurant : complète et intuitive. Gagnez en efficacité en améliorant la communication salle-cuisine. Envoyez vos plats en cuisine en 1 étape. Gérez les profils et accès de vos employés simplement depuis votre Back-Office. Gardez toujours un oeil sur vos niveaux de stocks et ne vous retrouvez jamais en rupture avec notre système d’alerte.', '1647438465.jpg', 'LOGICIEL DE CAISSE');

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
(9, 'CASHDRO 5', 'CashDro5 est l\'équipement idéal pour les entreprises où une grande vitesse est requise dans la validation ou la distribution des billets lors de la collecte, du changement ou du chargement.', '1647620680.jpg', 'MONNAYEUR'),
(10, 'CASHDRO 3', 'CashDro3 est l\'équipement idéal pour les entreprises où une grande vitesse est requise dans la validation ou la distribution des billets lors de la collecte, du changement ou du chargement.', '1647868900.jpg', 'MONNAYEUR'),
(11, 'Borne de commande T-QUIOSK 1', 'Convient pour la restauration rapide, les restaurants, les magasins spécialisés, les gymnases et les centres sportifs, les hôtels, la billetterie, les jardineries, les glaciers, le paiement des documents, etc.<br><br>\r\n\r\nCPU Android intégré RK3288 2 Go de RAM 8 Go HD<br>\r\nÉcran tactile capacitif multipoint TFT LED 21’5 ”<br>\r\nConnexion WiFi<br>\r\nImprimante thermique avec coupe- papier automatique 80 mm Lecteur<br>\r\nlecteur codes à barres et codes QR<br>\r\nlecteur RFID<br>\r\nTélécommande pour allumer et éteindre l’équipement.', '1647622183.jpg', 'T-QUIOSK'),
(12, 'TQ232 – Borne de commande', 'Processeur et communications<br>\r\nCPU Android RK3288, Quad Core, up to 1.8GHz 2GB DDR3<br>\r\nSDRAM 8GB eMMC<br>\r\nÉcran tactile LED 32” FHD Display (16:9), 500 nits<br>\r\nNº píxels 1920 x 1080<br>\r\nPanneau tactile Type capacitif multi-touch<br>\r\nSystème d’exploitation Android 5.1<br>\r\nI/O 2 x USB 2.0 host type A, Micro USB 2.0 OTG,<br>\r\n1 x RJ45 type, Ethernet 100/100Mbps<br>\r\nWireless Wi-Fi 802.11 b/g/n, Bluetooth 4.0<br>\r\nScanner de codes à barres et de codes QR Oui.', '1647622871.jpg', 'T-QUIOSK'),
(13, 'TQ230 – Borne de commande', 'Encaissement par carte de crédit et en espèces\r\nVous pouvez payer par carte de crédit ou en espèces les produits demandés dans le T-Quiosk<br>\r\n\r\nPossibilité d\'incorporer des accessoires\r\nVous pouvez intégrer différents appareils dans votre T-Quiosk, par exemple: lecteur RFID, lecteur de codes-barres et codes QR entre autres accessoires disponibles.<br>\r\n\r\nCompatible Android ou Windows\r\nAvec T-Quiosk vous pouvez choisir entre deux S.O qui correspondent le mieux aux caractéristiques de votre entreprise.<br>\r\n\r\n2 écrans tactile grand format pour guider l\'utilisateur\r\nT-Quiosk dispose de deux écrans tactiles de 32 \"avec lesquels l\'utilisateur peut interagir et se déplacer librement entre différents produits et / ou services.<br>\r\n\r\nFonctionne de manière autonome et ininterrompue.', '1647623080.jpg', 'T-QUIOSK'),
(14, 'TQ202 – Borne de commande', 'Encaissement des produits ou services par carte de crédit.<br>\r\n\r\nPossibilité d\'incorporer des accessoires\r\nVous pouvez intégrer différents appareils dans votre T-Quiosk, par exemple: lecteur RFID, lecteur de codes-barres et codes QR parmi d\'autres accessoires disponibles.<br>\r\n\r\nSupport logiciel Android ou Windows\r\nAvec T-Quiosk vous pouvez choisir entre deux S.O qui correspondent le mieux aux caractéristiques de votre entreprise.<br>\r\n\r\n2 Écrans tactiles grand format\r\nT-Quiosk dispose d\'une écran tactile de 32 \"avec lesquels l\'utilisateur peut interagir et se déplacer librement entre différents produits et / ou services.<br>\r\n\r\nFonctionnement autonome et continu.', '1647623352.jpg', 'T-QUIOSK'),
(15, 'TQ200 – Borne de commande', 'Encaissement des produits ou services par carte de crédit.<br>\r\n\r\nPossibilité d\'incorporer des accessoires\r\nVous pouvez intégrer différents appareils dans votre T-Quiosk, par exemple: lecteur RFID, lecteur de codes-barres et codes QR parmi d\'autres accessoires disponibles.<br>\r\n\r\nSupport logiciel Android ou Windows\r\nAvec T-Quiosk vous pouvez choisir entre deux S.O qui correspondent le mieux aux caractéristiques de votre entreprise.<br>\r\n\r\nÉcran tactile grand format\r\nT-Quiosk dispose d\'une écran tactile de 32 \"avec lesquels l\'utilisateur peut interagir et se déplacer librement entre différents produits et / ou services.<br>\r\n\r\nFonctionnement autonome et continu.<br>', '1647623481.jpg', 'T-QUIOSK'),
(16, 'PI Kiosk | Mono, duo, ou mini', 'Avec un très grand écran tactile lumineux et un TPE intégré, les kiosk PI se déclinent en version murale ou sur pied.<br>\r\nIls peuvent même se mettre dos à dos sur un pied, pour gagner en place et en efficacité.<br>\r\nEt pour une optimisation maximale de l\'espace, nous l\'avons réalisé aussi en \"mini\", à poser sur un comptoir.<br>', '1647625875.jpg', 'PI ELECTRONIQUE');

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
(86, 'iWL250 G/3G', 'L’iWL 250 (TELIUM 2) succède à l’EFT 930 (TELIUM 1). La gamme iWL200 a été conçue pour devenir la plateforme de paiement portable par excellence. Intégrant les technologies les plus abouties ainsi qu’une gestion efficace de la consommation, elle assure une autonomie de fonctionnement au-delà d’une journée d’utilisation dans les conditions les plus intensives.', '1647375557.jpg', 'INGENICO'),
(87, 'Lecteur de carte vitale | Olaqin', 'Lecteur de carte vitale Olaqin Sesam SET 2 : LA solution parfaitement adaptée aux besoins de facturation en cabinet : \r\nÉcran Graphique réflectif 128 x 32 pixels\r\nClavier 15 touches, pavé de navigation 5 touches\r\nAlimentation Connexion USB\r\nInterfaces cartes 2\r\nCartes supportées Cartes Vitale 1 et 2\r\nCartes Professionnel de Santé\r\nHomologations: SESAM-Vitale TL-LEC-v04.00.</br>\r\nCe lecteur de carte vitale Ingenico SESAM VITALE SET-2 s’adapte à l’environnement de logiciels des professionnels de santé.', '1647607657.jpg', 'INGENICO'),
(88, 'iPP 315', 'Ce Pinpad iPP 315 est le clavier client conçu pour les TPE Desk/5000 Ingenico. Ce Pinpad a la particularité d’être multi-paiement, acceptant les cartes bancaires, cartes à puce et à bande magnétique. Grâce à son support du sans contact et du NFC pour les smartphones (Apple Pay, Google Wallet), il permet à vos clients un passage en caisse accélérer. Nouvelle gamme de Pinpad sans contact, il accompagne les terminaux de paiement fixes TETRA d’Ingenico.', '1647621157.jpg', 'INGENICO'),
(89, 'Pinpad DESK 1500', 'Le clavier Pinpad Ingenico DESK 1500 est conçu pour accompagner un terminal de paiement de comptoir, TPE Ingenico Desk-5000, afin d’accélérer le passage en caisse. Agréable à prendre en main, il procure une meilleure expérience d’achat au comptoir et possède toutes les options de paiement en vigeur. Nouvelle gamme de Pinpad sans contact, il est le clavier rallonge pour les lecteurs de cartes bancaires TETRA d’Ingenico.', '1647623786.jpg', 'INGENICO');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `centralise`
--
ALTER TABLE `centralise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `encaissement`
--
ALTER TABLE `encaissement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `monnayeur`
--
ALTER TABLE `monnayeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tpe`
--
ALTER TABLE `tpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
