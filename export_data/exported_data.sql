INSERT INTO `users` VALUES 
(1,'giorgos','georzaza','__someone__@gmail.com',NULL,'$2y$10$OQ/qgk.b2W1tmswD0lSxx.FHg5pR/u7jdoiVxbriFoUV4MCKKcqMe',NULL,'2021-12-13 10:03:52','2021-12-13 10:03:52'),
(2,'queen elisabeth','TheQueen','queen@queen.queen',NULL,'$2y$10$TkA.kbDQWNmodZefVhkGDOxFbpPQlcn5xqH5IbOpXjuzlQ2CZtXDG',NULL,'2021-12-15 15:51:01','2021-12-15 15:51:01'),
(3,'JohnTheRipper','Johny','john@ripper',NULL,'$2y$10$RkZklBVo06ToBherbfJv9.TkmI9AGFScCGIFHRrjRbmFLRRhFc0S.',NULL,'2021-12-15 15:52:05','2021-12-15 15:52:05'),
(4,'King George','the King','king@king',NULL,'$2y$10$z4pGfHfANhAiJS.Br/vqe.lEQT0yd4ypVFWm6cnPdFJNghmU1pzZS',NULL,'2021-12-15 15:52:47','2021-12-15 15:52:47'),
(5,'Alexander The Great','Alex The Great','alex@great',NULL,'$2y$10$kUVRUjJw8Ok/Ps.Gexk/r.RH787dx5a0EIMV/iYTsWEtkKPXoMGiK',NULL,'2021-12-15 15:53:58','2021-12-15 15:53:58'),
(6,'Fake Admin','fake_admin','fake@admin',NULL,'$2y$10$al5osRZXAEDF2GYCyR.sX.M6aPtALJC8thf5DqNAsBkG52kKna5fO',NULL,'2021-12-15 15:54:41','2021-12-15 15:54:41'),
(7,'lemon','lemon','lemon@lemon',NULL,'$2y$10$DtnI35PVqHJSu49Qn8Zq/eY0UYQ.C5MVCUowa44JVr8THZO3xp81a',NULL,'2022-01-07 10:20:30','2022-01-07 10:20:30');


INSERT INTO `products` VALUES
(1,'2022-01-02 11:34:52','2022-01-02 11:34:52','Αυγά','2021-01-30','12',NULL,'φρέσκα χωριού'),
(2,'2022-01-02 11:35:23','2022-01-02 11:39:41','Γιαούρτι','2021-01-13','1','2',NULL),
(3,'2022-01-02 11:35:48','2022-01-02 11:35:48','Μακαρόνια','2021-07-09','3',NULL,'σπαγγέτι'),
(4,'2022-01-02 11:36:08','2022-01-02 11:36:08','Γάλα','2021-01-29','2','1',NULL),
(5,'2022-01-02 11:36:28','2022-01-02 11:36:28','Γάλα','2021-02-05','4',NULL,'σοκολατούχο'),
(6,'2022-01-02 11:37:18','2022-01-02 11:37:18','Μοτσαρέλα','2021-02-04','15','0.5','φέτες τόστ'),
(7,'2022-01-02 11:37:46','2022-01-02 11:37:46','Γαλοπούλα','2021-02-04','15','0.5','φέτες τόστ'),
(8,'2022-01-02 11:38:21','2022-01-02 11:38:21','Καρότα','2021-02-25','30',NULL,NULL),
(9,'2022-01-02 11:38:57','2022-01-02 11:39:07','Κοτόπουλο','2021-01-28','2','0.2','σνίτσελ'),
(10,'2022-01-02 11:39:31','2022-01-02 11:39:31','Κοτόπουλο','2021-01-29','1','1.5','ολόκληρο');


INSERT INTO `recipes` VALUES 
(1,1,0,10,'Κυρίως Γεύμα','Όχι','Παστίτσιο με κοτόπουλο','test','2022-01-02 08:43:24','2022-01-02 10:54:31'),
(2,2,0,20,'Ορεκτικό','Χορτοφαγικά','Τυρόπιτα με τραχανά','Βράζουμε το γάλα σε μια κατσαρόλα και προσθέτουμε τον τραχανά, ανακατεύοντας συνεχώς σε χαμηλή φωτιά με ξύλινη κουτάλα. Αφού βράσει ο τραχανάς, αποσύρουμε την κατσαρόλα από τη φωτιά κι αφήνουμε λίγο να κρυώσει.\r\n    Προσθέτουμε το βούτυρο, την τριμμένη φέτα και το γαλοτύρι Ηπείρου.\r\n    Αλατοπιπερώνουμε αφού δοκιμάσουμε, γιατί τα τυριά έχουν ήδη αρκετό αλάτι.\r\n    Χτυπάμε σε ένα μπώλ τα αυγά και τα προσθέτουμε στη γέμιση.\r\n    Ανακατεύουμε πολύ καλά.\r\n    Σε ένα ρηχό ταψί για πίτα στρώνουμε ακτινωτά 3 φύλλα, λαδώνοντάς τα ενδιάμεσα, και αδειάζουμε τη γέμιση.\r\n    Σκεπάζουμε την πίτα με τα υπόλοιπα λαδωμένα φύλλα.\r\n    Μπήγουμε τις άκρες προς τα μέσα.\r\n    Χαράζουμε ελαφρώς την επιφάνεια των φύλλων και τη ραντίζουμε με λίγο νερό.\r\n    Ψήνουμε για περίπου 1 ώρα, σε καλά προθερμασμένο φούρνο στους 180°C,  μέχρι να ροδίσει καλά η επιφάνεια και να ξεκολλήσει η πίτα από το ταψί.','2022-01-02 10:54:12','2022-01-02 10:54:12'),
(3,3,0,30,'Κυρίως Γεύμα','Όχι','Μπριζόλες με σάλτσα','Πλένουμε και στέγνωνουμε καλά τις μπριζόλες με χαρτί\r\n    Αλατοπιπέρωνουμε όλες τις πλευρές.\r\n    Ζεσταίνουμε μια κουταλιά λάδι σε ένα μεγάλο τηγάνι.\r\n    Βάζουμε τις μπριζόλες να ψηθούν σε δυνατή φωτιά για τρία λεπτά από την κάθε πλευρά.\r\n    Τις βάζουμε σε ένα πιάτο.\r\n    Ρίχνουμε το υπόλοιπο λάδι στο τηγάνι και προσθέτουμε τα κολοκυθάκια με αλάτι να σοταριστούν για δύο λεπτά.\r\n    Προσθέτουμε και το σκόρδο λιωμένο και τσιγάριζουμε για δύο λεπτά.\r\n    Ρίχνουμε στο τηγάνι το βαλσάμικο και ανακάτεψε καλά τα υλικά.\r\n    Προσθέτουμε στο φαγητό τη σάλτσα ντομάτας και αλατοπίπερο και άφηνουμε να πάρει βράση.\r\n    Μόλις ξεκινήσει ο βρασμός βάζουμε ξανά τις μπριζόλες στο τηγάνι.\r\n    Τις σκεπάζουμε με τη σάλτσα και τις αφήνουμε να μαγειρευτούν με το καπάκι για περίπου επτά λεπτά.\r\n    Πασπαλίζουμε με τον ψιλοκομμένο κόλιανδρο και σερβίρουμε.','2022-01-02 11:10:17','2022-01-02 11:10:17'),
(4,4,0,40,'Ορεκτικό','Βίγκαν','Μανιταρόσουπα','Σε μία κατσαρόλα σοτάρουμε το κρεμμύδι και το φρέσκο κρεμμυδάκι.\r\n    Μόλις βγάλουν τα αρώματά τους, ρίχνουμε και τα μανιτάρια.\r\n    Συνεχίζουμε το σοτάρισμα για 10 περίπου λεπτά, χαμηλώνοντας την φωτιά.\r\n    Ρίχνουμε 1,5 λίτρο ζεστό νερό, αλάτι, πιπέρι και το μοσχοκάρυδο.\r\n    Αφήνουμε να βράσει σε μέτρια φωτιά για 20- 25 λεπτά.\r\n    Σερβίρουμε με φρεσκοτριμμένο πιπέρι.','2022-01-02 11:14:20','2022-01-02 11:14:20'),
(5,5,0,50,'Κυρίως Γεύμα','Βίγκαν','Αρακάς','Ζεσταινουμε το μισό ελαιόλαδο στην κατσαρόλα και σοτάρουμε τα κρεμμυδάκια μας.\r\n    Προσθέτουμε τον αρακά,το καρότο,το πελτέ, αλάτι και πιπέρι.\r\n    Προσθέτουμε νερό ώστε να σκεπάζει τα μισά υλικά μας.\r\n    Σκεπάζουμε και σιγοβραζουμε για 20\'.\r\n    Προσθέτουμε το ελαιόλαδο, τον άνηθο και τις πατάτες.\r\n    Βράζουμε μέχρι να μαλακώσουν οι πατατες και να απορροφηθούν τα πολλά υγρά.','2022-01-02 11:19:28','2022-01-02 11:19:28'),
(6,6,0,60,'Κυρίως Γεύμα','Όχι','Σπαγγέτι Μαρινάρα','Σε ένα φαρδύ και βαθύ τηγάνι βάζουμε το ελαιόλαδο να ζεσταθεί και προσθέτουμε το κρεμμύδι ψιλοκομμένο. Σωτάρουμε ως να γυαλίσει το κρεμμύδι σε μέτρια φωτιά.Όταν το κρεμμύδι γυαλίσει, προσθέτουμε τις δυο σκελίδες σκόρδο όπως είναι με την φλούδα τους αφού πρώτα τις πατήσουμε με την παλάμη μας να τις \"τσακίσουμε\". Με αυτό τον τρόπο το σκόρδο θα απελευθερώσει όλα του τα αρώματα αλλά χωρίς να βαρύνει το φαγητό. Αν σας αρέσει το σκόρδο πολύ! τότε ψιλοκόψτε και σκόρδο και προσθέστε το στην σάλτσα σας. Σωτάρουμε για άλλα 2-3 λεπτά να βγάλει και το σκόρδο τα αρώματά του.\r\n\r\nΠροσθέτουμε στο τηγάνι μας τις ντομάτες πομοντόρο κομμένες σε κυβάκια.\r\nΠροσθέτουμε, αλάτι, πάπρικα και θυμάρι και μαγειρεύουμε ως να πιεί η ντομάτα τα υγρά της και βγάλει όλα τα αρώματά της.Σβήνουμε με το κρασί και αφήνουμε να εξατιμστεί.Μόλις μείνει με το λαδάκι προσθέτουμε την σάλστα ντομάτας,Και τα θαλασσινά και αφήνουμε την σάλτσα σε χαμηλή φωτιά να δέσει.Στο μεταξύ σε φαρδιά κατσαρόλα, σε άφθονο αλατισμένο νερό βράζουμε τα μακαρόνια. Τα βράζουμε 1-2 λεπτά λιγότερο από την προτεινόμενη στην συσκευασία ώρα.Μόλις δέσει η σάλτσα μας προσθέτουμε και λίγο ψιλοκομμένο μαϊντανό.Όταν τα μακαρόνια μας βράσουν με μια τσιμπίδα τα αποσύρρουμε από την κατσαρόλα και τα ρίχνουμε μέσα στο τηγάνι μεταφέροντας και λίγο από το πλούσιο σε άμυλο νερό μέσα στο οποίο έβρασαν. Αυτό θα βοηθήσει να \"κολλήσει\" η σάλτσα στα μακαρόνια μας και να γίνει κρεμώδης (αν θυμάστε η σάλτσα ντομάτας που βάλαμε είναι ελάχιστη, τόσο - όσο)Σε χαμηλή φωτιά ανακατεύουμε καλά να πάει παντού κι αν χρειάζεται προσθέτουμε λίγο ακόμη νεράκι από αυτό που έβρασαν τα ζυμαρικά.Σερβίρουμε πασπαλίζοντας με λίγο ακόμη ψιλοκομμένο μαϊντανό. Εγώ προσωπικά δεν προτιμώ το τυρί στις μαρινάρες, αλλά αν εσάς σας αρέσει μπορείτε να πασπαλίσετε με λίγη ή και πολύ παρμεζάνα και φυσικά μπόλικο φρεσκοτριμμένο πιπέρι.','2022-01-02 11:26:45','2022-01-02 11:26:45'),
(7,2,0,70,'Κυρίως Γεύμα','Χορτοφαγικά','Πατάτες ογκρατέν','Προθερμαίνουμε τον φούρνο στους 200°c.\r\n    Σε ένα τηγάνι λιώνουμε το βούτυρο και τσιγαρίζουμε με αυτό το σκόρδο για 1 λεπτό περίπου.\r\n    Προσθέτουμε το αλεύρι και το ανακατεύουμε για 2 λεπτά.\r\n    Χαμηλώνουμε τη θερμοκρασία και προσθέτουμε σιγά σιγά το γάλα ανακατεύοντας καλά.\r\n    Προσθέτουμε αλάτι και πιπέρι και ανακατεύουμε μέχρι να πήξει η κρέμα μας.\r\n    Λαδώνουμε ένα ταψί και απλώνουμε μια στρώση πατάτες.\r\n    Ρίχνουμε την μισή κρέμα μας και καλύπτουμε με τη μισή ποσότητα από τη μοτσαρέλλα και την παρμεζάνα.\r\n    Στρώνουμε τις υπόλοιπες πατάτες,την κρέμα και καλύπτουμε με τα υπόλοιπα τυριά.\r\n    Καλύπτουμε το ταψί με αλουμινόχαρτο και ψήνουμε για 40 λεπτά.\r\n    Αφαιρούμε το αλουμινόχαρτο και ψήνουμε για 30 λεπτά ακόμα μέχρι να πάρει χρώμα.\r\n    Γαρνίρουμε με τα κρεμμυδάκια','2022-01-02 11:30:42','2022-01-02 11:30:42'),
(8,3,0,80,'Γλυκό','Όχι','Κέικ σοκολάτα','Προθερμαίνουμε τον φούρνο στους 180ο C στον αέρα.\r\n    Στον κάδο του μίξερ βάζουμε το βούτυρο, τη ζάχαρη, τη βανίλια, το αλάτι και χτυπάμε με το σύρμα για 5-6 λεπτά σε δυνατή ταχύτητα μέχρι να αφρατέψει.\r\n    Σε ένα μπολ βάζουμε το κακάο, το αλεύρι και ανακατεύουμε.\r\n    Βάζουμε στον κάδο του μίξερ 2-3 κ.σ. από το μείγμα των στερεών, συνεχίζουμε να χτυπάμε και προσθέτουμε ένα ένα τα αυγά.\r\n    Προσθέτουμε 3 κ.σ. από τα στερεά υλικά, το γάλα και συνεχίζουμε να χτυπάμε.\r\n    Αφαιρούμε τον κάδο, προσθέτουμε τα υπόλοιπα στερεά υλικά και ανακατεύουμε με μία κουτάλα μέχρι να ομογενοποιηθούν τα υλικά.\r\n    Βουτυρώνουμε και πασπαλίζουμε με κακάο μία φόρμα κέικ 28 εκ. με τρύπα και βάζουμε το μείγμα.\r\n    Ψήνουμε για 1 ώρα. Αφαιρούμε και αφήνουμε να κρυώσει σε σχάρα.\r\n    Σερβίρουμε με κακάο, άχνη ζάχαρη και λιωμένη κουβερτούρα.','2022-01-02 11:33:55','2022-01-02 11:33:55'),
(9,4,0,110,'Γλυκό','Βίγκαν','Ταχινόπιτα','Ζύμη:\r\nΣε ένα βαθύ μπολ ή στον κάδο του μίξερ ανακατεύουμε τα δύο άλευρα, το αλάτι, τη ζάχαρη, τη μαγιά, την κανέλα, τη μαστίχα και το μαχλέπι. \r\nΠροσθέτουμε λίγο λίγο το νερό και ζυμώνουμε μέχρι να γίνει ένα απαλό (όχι πολύ σφιχτό) ζυμάρι. Όσο ζυμώνουμε κόβουμε το ζυμάρι σε κομμάτια και το ξαναζυμώνουμε για να ενωθούν καλύτερα τα υλικά μας και τα αρώματα.\r\nΣκεπάζουμε με πετσέτα και αφήνουμε στην άκρη, για περίπου 30 λεπτά, να φουσκώσει.\r\n\r\nΓέμιση:\r\nΧτυπάμε όλα τα υλικά στο μίξερ για 2-3 λεπτά μέχρι να ασπρίσει λίγο το ταχίνι. Κρατάμε λίγη από τη γέμιση για να αλείψουμε τις πίτες μας πριν από το ψήσιμο.\r\n\r\nΤαχινόπιτες:\r\nΧωρίζουμε τη ζύμη σε 10-14 κομμάτια και τα πλάθουμε σε μπαλίτσες. Σκεπάζουμε με βαμβακερή πετσέτα το ζυμάρι να μη στεγνώσει.','2022-01-07 09:44:31','2022-01-07 09:44:31'),
(10,4,0,5,'Κοκτέιλ','Χωρίς ζάχαρη','Alexander','Γεμίζουμε ένα σέικερ με παγάκια και βάζουμε όλα τα υλικά, εκτός από το μοσχοκάρυδο.\r\nΧτυπάμε δυνατά τουλάχιστον για 30”, ώστε να σιγουρευτούμε ότι έχει ενσωματωθεί καλά η κρέμα και το ποτό έχει αποκτήσει μια παχύρρευστη, βελούδινη υφή.\r\nΣουρώνουμε σε παγωμένο ποτήρι του μαρτίνι. Πασπαλίζουμε με λίγο τριμμένο μοσχοκάρυδο και σερβίρουμε με ένα μικρό καλαμάκι.','2022-01-07 10:03:03','2022-01-07 10:03:03'),
(11,4,0,85,'Ορεκτικό','Χορτοφαγικά','Κολοκυθοκεφτέδες','Αλατίζουμε καλά τα τριμμένα κολοκύθια και τα αφήνουμε σε σουρωτήρι για 45 λεπτά.\r\nΤα στύβουμε καλά να φύγουν όλα τα υγρά.\r\n Τα ανακατεύουμε με όλα τα υπόλοιπα υλικά. Πλάθουμε 20-23 κεφτέδες και τους αλευρώνουμε.\r\nΖεσταίνουμε άφθονο ελαιόλαδο σε βαθύ σκεύος, σε μέτρια φωτιά, και τηγανίζουμε τους κεφτέδες σε δόσεις μέχρι να χρυσίσουν. \r\nΤους στραγγίζουμε σε χαρτί κουζίνας.\r\nΣυνοδεύουμε με φέτα μαλακή ή δροσερό γιαούρτι.','2022-01-07 10:06:48','2022-01-07 10:16:12'),
(12,3,0,150,'Κυρίως Γεύμα','Χωρίς γαλακτοκομικά','Τσιγαριαστό','Για να φτιάξουμε τσιγαριστό, βάζουμε, σε μια βαθιά και φαρδιά κατσαρόλα (πλασοτέ) το ελαιόλαδο να ζεσταθεί πολύ καλά και ρίχνουμε το αρνί.\r\n    Σοτάρουμε σε μέτρια προς δυνατή φωτιά για περίπου 5 λεπτά, από όλες τις πλευρές.\r\n    Ρίχνουμε τα κρεμμύδια και συνεχίζουμε το σοτάρισμα για 3-4 λεπτά ακόμα, μέχρι να γυαλίσουν.\r\n    Βάζουμε αλάτι, πιπέρι, ελάχιστη κανέλα και χαμηλώνουμε τη φωτιά.\r\n    Το αρνί θα αρχίσει να βγάζει στα υγρά του, αν όμως δούμε ότι σώνεται το ζουμί στην κατσαρόλα, χαμηλώνουμε κι άλλο τη φωτιά.\r\n    Συνεχίζουμε το μαγείρεμα για περίπου 15 λεπτά και προσθέτουμε το κρασί.\r\n    Αφήνουμε να εξατμιστεί το αλκοόλ για 1-2 λεπτά, ρίχνουμε τη δάφνη και περίπου 100 ml νερό και σκεπάζουμε με το καπάκι.\r\n    Χαμηλώνουμε τη φωτιά και σιγομαγειρεύουμε το αρνί για περίπου 2 ώρες, μέχρι να μαλακώσει αρχικά και ύστερα να μελώσει. Το αρνί είναι έτοιμο όταν θα έχει πιει το ζουμί του και θα παραμένει ελαφρώς ελαστικό και πεντανόστιμο.\r\n    Σερβίρουμε το τσιγαριαστό με παχουλές τηγανητές πατάτες.','2022-01-07 10:10:21','2022-01-07 10:10:21'),
(13,3,0,20,'Σαλάτα','Βίγκαν','Ταμπουλέ','Σε ένα βαθύ μπολ βάζουμε το πλιγούρι. Ρίχνουμε βραστό νερό τόσο ώστε να το καλύψει.\r\n    Το αφήνουμε στην άκρη για τουλάχιστον 15 λεπτά, μέχρι να μαλακώσει.\r\n    Το στραγγίζουμε καλά, το αδειάζουμε σε σαλατιέρα και το αφρατεύουμε με ένα πιρούνι.\r\n    Προσθέτουμε όλα τα υπόλοιπα υλικά και ανακατεύουμε να αναμειχθούν.','2022-01-07 10:13:28','2022-01-07 10:36:25'),
(14,2,0,150,'Συνοδευτικά','Όχι','Πατατοκροκέτες','Για τις πατατοκροκέτες, σε κατσαρόλα ρίχνουμε τις πατάτες, λίγο αλάτι και νερό τόσο ώστε να τις καλύπτει και βράζουμε σε μέτρια φωτιά για 40-45 λεπτά, μέχρι να μαλακώσουν.\r\n    Τις στραγγίζουμε, τις ξεφλουδίζουμε όσο είναι ακόμα ζεστές (αλλά να μπορούμε να τις πιάσουμε) και τις πολτοποιούμε με το πιρούνι ή τις περνάμε από τον μύλο λαχανικών.\r\n    Τις αδειάζουμε σε μπολ και τις ανακατεύουμε με όλα τα υπόλοιπα υλικά. Πλάθουμε το μείγμα σε μικρά μπαλάκια, σε μέγεθος μικρού καρυδιού, και τα αφήνουμε στο ψυγείο για 1 ώρα, να σφίξουν.\r\n    Σε ένα μπολ ρίχνουμε το αλεύρι, σε άλλο τα ασπράδια και σε τρίτο τη φρυγανιά. Περνάμε κάθε κροκέτα πρώτα από το αλεύρι, μετά από το ασπράδι και τέλος από τη φρυγανιά, έτσι ώστε να καλυφθεί καλά. Τινάζουμε να φύγει το περιττό.\r\n    Ρίχνουμε τόσο λάδι σε ένα τηγάνι, ώστε να καλύψει τα 2/3 του σκεύους. Ζεσταίνουμε σε δυνατή φωτιά και τηγανίζουμε τις κροκέτες σε δόσεις, για 3-4 λεπτά, μέχρι να χρυσίσουν καλά από όλες τις πλευρές. Βγάζουμε με τρυπητή κουτάλα και αφήνουμε σε απορροφητικό χαρτί να στραγγίξουν.','2022-01-07 10:19:43','2022-01-07 10:19:43'),
(15,7,0,30,'Κυρίως Γεύμα','Όχι','Χοιρινή τηγανιά με πιπεριές','Για τη χοιρινή τηγανιά με πιπεριές, ζεσταίνουμε, σε ένα μεγάλο τηγάνι ή σε μια ρηχή κατσαρόλα, σε δυνατή φωτιά τη μισή ποσότητα από το ελαιόλαδο και σοτάρουμε τα κρεμμυδάκια, τις πιπεριές και το καρότο για περίπου 3 - 4 λεπτά, μέχρι να μαλακώσουν λίγο, αλλά χωρίς να λιώσουν.\r\n    Τα αδειάζουμε σε ένα μπολ και τα αφήνουμε στην άκρη.\r\n    Αλατοπιπερώνουμε το κρέας και το σοτάρουμε στο ίδιο τηγάνι (που χρησιμοποιήσαμε πιο πάνω) στο υπόλοιπο ελαιόλαδο σε δυνατή φωτιά για περίπου 2 - 3 λεπτά από κάθε πλευρά, μέχρι να ροδίσει.\r\n    «Σβήνουμε» με το κρασί και συνεχίζουμε το σοτάρισμα για περίπου άλλα 2 - 3 λεπτά, μέχρι να εξατμιστεί το αλκοόλ.\r\n    Προσθέτουμε τα λαχανικά και τα μυρωδικά, περιχύνουμε με τη σάλτσα σόγιας, ανακατεύουμε με ξύλινη κουτάλα και μαγειρεύουμε για άλλα 1 - 2 λεπτά, ίσα να αναμειχθούν τα αρώματα.\r\n    Αποσύρουμε από τη φωτιά και σερβίρουμε τη χοιρινή τηγανιά με αφράτο πιλάφι, γιαούρτι και ντοματοσαλάτα με βασιλικό.','2022-01-07 10:24:13','2022-01-07 10:24:13'),
(16,7,0,45,'Πρωινό','Χωρίς γλουτένη','Μπανανόψωμο με καρύδα','Σε ένα μπολ ανακατεύουμε τη σκόνη αμυγδάλου, την καρύδα και το μπέικιν πάουντερ.\r\n    Σε άλλο μπολ χτυπάμε με το μίξερ χειρός τα αυγά, τον κρόκο και το γιαούρτι για περίπου 30 δευτερόλεπτα. Προσθέτουμε το μείγμα από σκόνες και όλα τα υπόλοιπα υλικά και χτυπάμε μέχρι να ενωθούν όλα τα υλικά σε ενιαίο μείγμα.\r\n    Απλώνουμε αντικολλητικό χαρτί (ή βουτυρώνουμε) σε ένα ορθογώνιο ταψάκι 35 x 25 εκ. ή σε μια ευρύχωρη μακρόστενη φόρμα του κέικ. Προθερμαίνουμε τον φούρνο στους 180°C.\r\n    Αδειάζουμε το μείγμα στο σκεύος και ψήνουμε για 30 λεπτά. Δοκιμάζουμε αν είναι έτοιμο, βυθίζοντας στο κέντρο του ένα μαχαίρι: πρέπει να βγει στεγνό.\r\n    Το σερβίρουμε σε κομμάτια ή φέτες.','2022-01-07 10:32:36','2022-01-07 10:32:36'),
(17,5,0,10,'Σνακ','Χωρίς ζάχαρη','Παγωτό μπανάνα-σοκολάτα','Βγάζουμε τις μπανάνες από την κατάψυξη, τις σπάμε σε κομμάτια και τις ρίχνουμε στο μπλέντερ. Χτυπάμε για 10 δευτερόλεπτα, μέχρι να κομματιαστούν.\r\n    Προσθέτουμε το φιστικοβούτυρο και το κακάο και χτυπάμε μέχρι να γίνει ένα παγωμένο πυκνό και ομοιογενές μείγμα.\r\n    Σε αυτό το στάδιο το παγωτό μας θα έχει υφή σαν παγωτό μηχανής (αν το θέλετε πιο παγωμένο για να το σερβίρετε με σκουπ, δείτε το «Μυστικό»). Το σερβίρουμε κατευθείαν σε μπολ.','2022-01-07 10:43:10','2022-01-07 10:43:10'),
(18,5,0,10,'Ροφήματα','Χωρίς ζάχαρη','Smoothie φράουλας','Χτυπάμε τις φράουλες με το γάλα στο μπλέντερ για 2 λεπτά.\r\n    Προσθέτουμε το γιαούρτι και συνεχίζουμε το χτύπημα για 1 λεπτό ακόμη.\r\n    Βάζουμε λίγο σπασμένο πάγο σε δύο ποτήρια και τα απογεμίζουμε με το smoothie.','2022-01-07 10:45:44','2022-01-07 10:45:44');


INSERT INTO `ingredients` VALUES 
(27,'Φύλλο χωριάτικο','1',2,'2022-01-02 10:54:12','2022-01-02 10:54:12'),
(28,'τραχανάς ξινός','0.3',2,'2022-01-02 10:54:12','2022-01-02 10:54:12'),
(29,'γαλοτύρι','0.2',2,'2022-01-02 10:54:12','2022-01-02 10:54:12'),
(30,'φέτα','0.3',2,'2022-01-02 10:54:12','2022-01-02 10:54:12'),
(31,'γάλα','1',2,'2022-01-02 10:54:12','2022-01-02 10:54:12'),
(32,'αυγά','5',2,'2022-01-02 10:54:12','2022-01-02 10:54:12'),
(33,'ελαιόλαδο','0.1',2,'2022-01-02 10:54:12','2022-01-02 10:54:12'),
(34,'αλάτι','0.01',2,'2022-01-02 10:54:12','2022-01-02 10:54:12'),
(35,'φρέσκο βούτηρο','0.02',2,'2022-01-02 10:54:12','2022-01-02 10:54:12'),
(36,'ελαιόλαδο','0.7',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(37,'μακαρόνια','0.4',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(38,'σκόρδο','0.3',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(39,'κρεμμύδι','1',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(40,'πιπέρι','0.005',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(41,'κοτόπουλο','0.5',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(42,'τσίλι','0.002',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(43,'πάπρικα','0.004',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(44,'κόλιανδρο','0.005',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(45,'γραβιέρα','0.3',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(46,'μπεσαμέλ','0.2',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(47,'μπαχάρι','0.1',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(48,'κεφαλοτύρι','0.1',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(49,'ντοματάκια','0.4',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(50,'κέτσαπ','0.01',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(51,'βούτηρο','0.01',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(52,'αυγά','4',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(53,'αλάτι','0.1',1,'2022-01-02 10:54:31','2022-01-02 10:54:31'),
(54,'μπριζόλες χοιρινές','4',3,'2022-01-02 11:10:17','2022-01-02 11:10:17'),
(55,'καλοκύθια σε φέτες','0.5',3,'2022-01-02 11:10:17','2022-01-02 11:10:17'),
(56,'σάλτσα ντομάτας','0.2',3,'2022-01-02 11:10:17','2022-01-02 11:10:17'),
(57,'σκόρδο','0.02',3,'2022-01-02 11:10:17','2022-01-02 11:10:17'),
(58,'ξύδι βαλσάμικο','0.01',3,'2022-01-02 11:10:17','2022-01-02 11:10:17'),
(59,'κόλιανδρο','0.01',3,'2022-01-02 11:10:17','2022-01-02 11:10:17'),
(60,'ελαιόλαδο','0.2',3,'2022-01-02 11:10:17','2022-01-02 11:10:17'),
(61,'αλάτι','0.01',3,'2022-01-02 11:10:17','2022-01-02 11:10:17'),
(62,'πιπέρι','0.01',3,'2022-01-02 11:10:17','2022-01-02 11:10:17'),
(63,'μανιτάρια λευκά','0.5',4,'2022-01-02 11:14:20','2022-01-02 11:14:20'),
(64,'φρέσκα κρεμμύδια','0.04',4,'2022-01-02 11:14:20','2022-01-02 11:14:20'),
(65,'ελαιόλαδο','0.03',4,'2022-01-02 11:14:20','2022-01-02 11:14:20'),
(66,'κρεμμύδι','0.2',4,'2022-01-02 11:14:20','2022-01-02 11:14:20'),
(67,'πιπέρι','0.01',4,'2022-01-02 11:14:20','2022-01-02 11:14:20'),
(68,'μοσχοκάρυδο','0.01',4,'2022-01-02 11:14:20','2022-01-02 11:14:20'),
(69,'αρακάς','0.5',5,'2022-01-02 11:19:28','2022-01-02 11:19:28'),
(70,'καρότα','0.05',5,'2022-01-02 11:19:28','2022-01-02 11:19:28'),
(71,'πατάτες','0.3',5,'2022-01-02 11:19:28','2022-01-02 11:19:28'),
(72,'κρεμμύδια φρέσκα','0.06',5,'2022-01-02 11:19:28','2022-01-02 11:19:28'),
(73,'πελτέ ντομάτας','0.02',5,'2022-01-02 11:19:28','2022-01-02 11:19:28'),
(74,'ελαιόλαδο','0.1',5,'2022-01-02 11:19:28','2022-01-02 11:19:28'),
(75,'άνηθος ψιλοκομμένο','0.05',5,'2022-01-02 11:19:28','2022-01-02 11:19:28'),
(76,'αλάτι','0.01',5,'2022-01-02 11:19:28','2022-01-02 11:19:28'),
(77,'πιπέρι','0.01',5,'2022-01-02 11:19:28','2022-01-02 11:19:28'),
(78,'μακαρονια','0.3',6,'2022-01-02 11:26:45','2022-01-02 11:26:45'),
(79,'θαλασσινά','0.2',6,'2022-01-02 11:26:45','2022-01-02 11:26:45'),
(80,'σάλτσα ντομάτας','0.1',6,'2022-01-02 11:26:45','2022-01-02 11:26:45'),
(81,'ντομάτες πομοντόρο','0.3',6,'2022-01-02 11:26:45','2022-01-02 11:26:45'),
(82,'σκόρδο','0.02',6,'2022-01-02 11:26:45','2022-01-02 11:26:45'),
(83,'κρεμμύδι','0.05',6,'2022-01-02 11:26:45','2022-01-02 11:26:45'),
(84,'ελαιόλαδο','0.05',6,'2022-01-02 11:26:45','2022-01-02 11:26:45'),
(85,'λευκό κρασί','0.05',6,'2022-01-02 11:26:45','2022-01-02 11:26:45'),
(86,'μαϊντανός','0.01',6,'2022-01-02 11:26:45','2022-01-02 11:26:45'),
(87,'αλάτι','0.01',6,'2022-01-02 11:26:45','2022-01-02 11:26:45'),
(88,'θυμάρι','0.02',6,'2022-01-02 11:26:45','2022-01-02 11:26:45'),
(89,'πάπρικα γλυκιά','0.05',6,'2022-01-02 11:26:45','2022-01-02 11:26:45'),
(90,'πατάτες','1.5',7,'2022-01-02 11:30:42','2022-01-02 11:30:42'),
(91,'μοτσαρέλλα','0.2',7,'2022-01-02 11:30:42','2022-01-02 11:30:42'),
(92,'παρμεζάνα','0.075',7,'2022-01-02 11:30:42','2022-01-02 11:30:42'),
(93,'βούτυρο','0.08',7,'2022-01-02 11:30:42','2022-01-02 11:30:42'),
(94,'σκόρδο  λιωμένο','0.02',7,'2022-01-02 11:30:42','2022-01-02 11:30:42'),
(95,'αλεύρι για όλες τις χρήσεις','0.04',7,'2022-01-02 11:30:42','2022-01-02 11:30:42'),
(96,'γάλα','0.4',7,'2022-01-02 11:30:42','2022-01-02 11:30:42'),
(97,'αλάτι','0.01',7,'2022-01-02 11:30:42','2022-01-02 11:30:42'),
(98,'πιπέρι','0.01',7,'2022-01-02 11:30:42','2022-01-02 11:30:42'),
(99,'κρεμμύδια φρέσκα','0.02',7,'2022-01-02 11:30:42','2022-01-02 11:30:42'),
(100,'βούτυρο','0.25',8,'2022-01-02 11:33:55','2022-01-02 11:33:55'),
(101,'ζάχατη κρυσταλλική','0.4',8,'2022-01-02 11:33:55','2022-01-02 11:33:55'),
(102,'εκχύλισμα βανίλιας','0.01',8,'2022-01-02 11:33:55','2022-01-02 11:33:55'),
(103,'αλάτι','0.005',8,'2022-01-02 11:33:55','2022-01-02 11:33:55'),
(104,'κακάο','0.1',8,'2022-01-02 11:33:55','2022-01-02 11:33:55'),
(105,'αλεύρι που φουσκώνει μόνο του','0.4',8,'2022-01-02 11:33:55','2022-01-02 11:33:55'),
(106,'γάλα','0.3',8,'2022-01-02 11:33:55','2022-01-02 11:33:55'),
(107,'αυγά','4',8,'2022-01-02 11:33:55','2022-01-02 11:33:55'),
(112,'Κονιάκ','20',10,'2022-01-07 10:03:03','2022-01-07 10:03:03'),
(113,'Λικέρ','20',10,'2022-01-07 10:03:03','2022-01-07 10:03:03'),
(114,'Κρέμα Γάλακτος','45',10,'2022-01-07 10:03:03','2022-01-07 10:03:03'),
(115,'Μοσχοκάρυδο','1',10,'2022-01-07 10:03:03','2022-01-07 10:03:03'),
(124,'Αρνί','1000',12,'2022-01-07 10:10:21','2022-01-07 10:10:21'),
(125,'Κρεμμύδια','3',12,'2022-01-07 10:10:21','2022-01-07 10:10:21'),
(126,'Κόκκινο κρασί','70',12,'2022-01-07 10:10:21','2022-01-07 10:10:21'),
(127,'Ελαιόλαδο','80',12,'2022-01-07 10:10:21','2022-01-07 10:10:21'),
(136,'Κολοκυθάκια','1800',11,'2022-01-07 10:16:12','2022-01-07 10:16:12'),
(137,'Ντομάτες','400',11,'2022-01-07 10:16:12','2022-01-07 10:16:12'),
(138,'Κρεμμύδι','150',11,'2022-01-07 10:16:12','2022-01-07 10:16:12'),
(139,'Δυόσμος','4',11,'2022-01-07 10:16:12','2022-01-07 10:16:12'),
(140,'Μαϊντανός','4',11,'2022-01-07 10:16:12','2022-01-07 10:16:12'),
(141,'Φρυγανιά','50',11,'2022-01-07 10:16:12','2022-01-07 10:16:12'),
(142,'Σκόρδο','1',11,'2022-01-07 10:16:12','2022-01-07 10:16:12'),
(143,'Αυγά','2',11,'2022-01-07 10:16:12','2022-01-07 10:16:12'),
(144,'Πατάτες','4',14,'2022-01-07 10:19:43','2022-01-07 10:19:43'),
(145,'Πεκορίνο','100',14,'2022-01-07 10:19:43','2022-01-07 10:19:43'),
(146,'Βούτυρο','50',14,'2022-01-07 10:19:43','2022-01-07 10:19:43'),
(147,'Αλεύρι','100',14,'2022-01-07 10:19:43','2022-01-07 10:19:43'),
(148,'Αυγά','2',14,'2022-01-07 10:19:43','2022-01-07 10:19:43'),
(149,'Φρυγανιά','100',14,'2022-01-07 10:19:43','2022-01-07 10:19:43'),
(150,'Χοιρινό ψαρονέφρι','700',15,'2022-01-07 10:24:13','2022-01-07 10:24:13'),
(151,'Κρεμμύδια','2',15,'2022-01-07 10:24:13','2022-01-07 10:24:13'),
(152,'Πιπεριά φλωρίνης','1',15,'2022-01-07 10:24:13','2022-01-07 10:24:13'),
(153,'Πιπεριές','2',15,'2022-01-07 10:24:13','2022-01-07 10:24:13'),
(154,'Καρότο','1',15,'2022-01-07 10:24:13','2022-01-07 10:24:13'),
(155,'Δυόσμος','0.5',15,'2022-01-07 10:24:13','2022-01-07 10:24:13'),
(156,'Σάλτσα σόγιας','50',15,'2022-01-07 10:24:13','2022-01-07 10:24:13'),
(157,'Κρασί','70',15,'2022-01-07 10:24:13','2022-01-07 10:24:13'),
(158,'Ελαιόλαδο','100',15,'2022-01-07 10:24:13','2022-01-07 10:24:13'),
(159,'Αμύγδαλα','200',16,'2022-01-07 10:32:36','2022-01-07 10:32:36'),
(160,'Καρύδα','60',16,'2022-01-07 10:32:36','2022-01-07 10:32:36'),
(161,'Μπέικιν Πάουντερ','1',16,'2022-01-07 10:32:36','2022-01-07 10:32:36'),
(162,'Αυγά','3',16,'2022-01-07 10:32:36','2022-01-07 10:32:36'),
(163,'Γιαούρτι','20',16,'2022-01-07 10:32:36','2022-01-07 10:32:36'),
(164,'Φυστικοβούτυρο','10',16,'2022-01-07 10:32:36','2022-01-07 10:32:36'),
(165,'Μέλι','10',16,'2022-01-07 10:32:36','2022-01-07 10:32:36'),
(166,'Μπανάνες','3',16,'2022-01-07 10:32:36','2022-01-07 10:32:36'),
(167,'Πλιγούρι','100',13,'2022-01-07 10:36:25','2022-01-07 10:36:25'),
(168,'Μαϊντανός','2',13,'2022-01-07 10:36:25','2022-01-07 10:36:25'),
(169,'Δυόσμος','1',13,'2022-01-07 10:36:25','2022-01-07 10:36:25'),
(170,'Λεμόνια','2',13,'2022-01-07 10:36:25','2022-01-07 10:36:25'),
(171,'Ντομάτες','6',13,'2022-01-07 10:36:25','2022-01-07 10:36:25'),
(172,'Φρέσκα Κρεμμυδάκια','6',13,'2022-01-07 10:36:25','2022-01-07 10:36:25'),
(173,'Αγγούρι','1',13,'2022-01-07 10:36:25','2022-01-07 10:36:25'),
(174,'Ελαιόλαδο','100',13,'2022-01-07 10:36:25','2022-01-07 10:36:25'),
(175,'Μπανάνες','2',17,'2022-01-07 10:43:10','2022-01-07 10:43:10'),
(176,'Φυστικοβούτυρο','15',17,'2022-01-07 10:43:10','2022-01-07 10:43:10'),
(177,'Κακάο','30',17,'2022-01-07 10:43:10','2022-01-07 10:43:10'),
(178,'Φράουλες','250',18,'2022-01-07 10:45:44','2022-01-07 10:45:44'),
(179,'Γάλα','240',18,'2022-01-07 10:45:44','2022-01-07 10:45:44'),
(180,'Γιαούρτι','230',18,'2022-01-07 10:45:44','2022-01-07 10:45:44'),
(181,'Ταχίνι','720',9,'2022-01-07 10:50:45','2022-01-07 10:50:45'),
(182,'Ζάχαρη','600',9,'2022-01-07 10:50:45','2022-01-07 10:50:45');

