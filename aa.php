SELECT * FROM `prestataire`,`annonce_prestataire`,`reserver`,`exp` WHERE annonce_prestataire.id=reserver.id_annonce and exp.id=reserver.id_res and prestataire.id=annonce_prestataire.id_user and reserver.id=1