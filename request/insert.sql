INSERT INTO `carsat`.`answer` (`idanswer`, `answer`, `value`) VALUES (NULL, 'Oui tout à fait', '1');
INSERT INTO `carsat`.`answer` (`idanswer`, `answer`, `value`) VALUES (NULL, 'Plutôt oui', '1');
INSERT INTO `carsat`.`answer` (`idanswer`, `answer`, `value`) VALUES (NULL, 'Plutôt non', '0');
INSERT INTO `carsat`.`answer` (`idanswer`, `answer`, `value`) VALUES (NULL, 'Non pas du tout', '0');

INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Marchez-vous plus lentement depuis ces 3 derniers mois ? Ou vous a-t-on dit que vous marchiez plus lentement depuis ces 3 derniers mois ?', 'Somatique');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Etes-vous tombé(e) au cours de ces 3 derniers mois ?', 'Somatique');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Vous sentez-vous plus fatigué(e) depuis ces 3 derniers mois ?', 'Somatique');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Avez-vous peu d activités physiques ?', 'Somatique');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Vous estimez-vous en moins bonne santé depuis les trois derniers mois ? Etes-vous en moins bonne santé ?', 'Somatique');

INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Vous sentez-vous isolé(e) ?', 'Psychosociale');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Vous sentez-vous déprimé(e) ?', 'Psychosociale');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Vous sentez-vous anxieux(se) ?', 'Psychosociale');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Dormez-vous mal ?', 'Psychosociale');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Avez-vous besoin d aide au quotidien ?', 'Psychosociale');

INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Avez-vous perdu du poids récemment de manière involontaire ?', 'Nutritionnelle');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Avez-vous perdu l appétit ?', 'Nutritionnelle');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Avez-vous de mauvaises dents ou avez vous perdu le goût ?', 'Nutritionnelle');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Mangez-vous moins de 5 fois par semaine des protéines (œufs, viande, poisson) ?', 'Nutritionnelle');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Mangez-vous des fruits et des légumes tous les jours ?', 'Nutritionnelle');

INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Vous plaignez-vous de problèmes de mémoire ?', 'Cognitive');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Avez-vous des difficultés pour utiliser le téléphone ?', 'Cognitive');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Avez-vous des difficultés avec les papiers ?', 'Cognitive');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Avez-vous besoin d aide pour prendre les médicaments ?', 'Cognitive');
INSERT INTO `carsat`.`question` (`idquestion`, `question`, `category`) VALUES (NULL, 'Avez-vous besoin d aide pour utiliser seul(e) les moyens de transport ?', 'Cognitive');