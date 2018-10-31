-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.6.17 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.2.0.4967
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Export de données de la table church_admin.departement : ~7 rows (environ)
/*!40000 ALTER TABLE `departement` DISABLE KEYS */;
INSERT INTO `departement` (`dpmt_id`, `dpmt_lib`) VALUES
	(1, 'Commando'),
	(2, 'Service d\'ordre'),
	(3, 'Chantre'),
	(4, 'Groupe musicale'),
	(5, 'Protocole'),
	(6, 'Logistique'),
	(7, 'Delivrance');
/*!40000 ALTER TABLE `departement` ENABLE KEYS */;

-- Export de données de la table church_admin.eglise : ~0 rows (environ)
/*!40000 ALTER TABLE `eglise` DISABLE KEYS */;
/*!40000 ALTER TABLE `eglise` ENABLE KEYS */;

-- Export de données de la table church_admin.famille : ~0 rows (environ)
/*!40000 ALTER TABLE `famille` DISABLE KEYS */;
INSERT INTO `famille` (`famille_id`, `famille_nom`, `famille_local`, `famille_chef`) VALUES
	(1, 'Assoi', 'Niangon Nord, Niangon', 6);
/*!40000 ALTER TABLE `famille` ENABLE KEYS */;

-- Export de données de la table church_admin.matri : ~4 rows (environ)
/*!40000 ALTER TABLE `matri` DISABLE KEYS */;
INSERT INTO `matri` (`matri_id`, `matri_lib`) VALUES
	(1, 'Celibataire'),
	(2, 'FiancÃ©(e)'),
	(3, 'MariÃ©(e)'),
	(4, 'DivorcÃ©(e)'),
	(5, 'Veuf(ve)');
/*!40000 ALTER TABLE `matri` ENABLE KEYS */;

-- Export de données de la table church_admin.membre : ~3 rows (environ)
/*!40000 ALTER TABLE `membre` DISABLE KEYS */;
INSERT INTO `membre` (`membre_id`, `membre_nom`, `membre_prenom`, `membre_sexe`, `membre_email`, `membre_adresse`, `membre_datenais`, `membre_lieunais`, `membre_est_retraite`, `membre_est_baptise`, `membre_date_bapteme`, `membre_est_actif`, `membre_est_malade`, `membre_maladie`, `membre_maladie_duree`, `membre_ethnie`, `membre_nationalite`, `membre_profession`, `membre_departement`, `membre_origine`, `membre_contact1`, `membre_contact2`, `membre_eglise`, `membre_matri`, `membre_type`, `membre_famille`) VALUES
	(6, 'Assoi', 'Boris', 'Homme', 'boris.assoi@gmail.com', 'Niangon Nord, Yopougon', '1990-09-25', 'Korhogo', 'null', 'oui', '2017-11-11', 'oui', 'non', '', '0000-00-00', 'AttiÃ©', 'Ivoirien', 'Chef d\'entreprise', 'Commando', 'Meif-vie', '57322476', '42738355', NULL, 2, 7, 1),
	(7, 'Assoi', 'Boris', 'Homme', 'boris.assoi@gmail.com', 'Niangon Nord, Yopougon', '1990-09-25', 'Korhogo', 'null', 'oui', '2017-11-11', 'oui', 'non', '', '0000-00-00', 'AttiÃ©', 'Ivoirien', 'Chef d\'entreprise', 'Commando', 'Meif-vie', '57322476', '42738355', NULL, 2, 7, NULL),
	(8, 'Assoi', 'Boris', 'Homme', 'boris.assoi@gmail.com', 'Niangon Nord, Yopougon', '1990-09-25', 'Korhogo', 'null', 'oui', '2017-11-11', 'oui', 'oui', '', '0000-00-00', 'AttiÃ©', 'Ivoirien', 'Chef d\'entreprise', 'Commando', 'Meif-vie', '57322476', '42738355', NULL, 2, 7, NULL);
/*!40000 ALTER TABLE `membre` ENABLE KEYS */;

-- Export de données de la table church_admin.type_membre : ~7 rows (environ)
/*!40000 ALTER TABLE `type_membre` DISABLE KEYS */;
INSERT INTO `type_membre` (`type_id`, `type_lib`) VALUES
	(1, 'Pasteur'),
	(2, 'Diacre'),
	(3, 'Ancien'),
	(4, 'Chantre'),
	(5, 'Instrumentaliste'),
	(6, 'Ouvrier'),
	(7, 'Simple');
/*!40000 ALTER TABLE `type_membre` ENABLE KEYS */;

-- Export de données de la table church_admin.user : ~0 rows (environ)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
