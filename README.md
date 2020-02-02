

# Projet PHP/Symfony - Angular 2k20 CIR3 MB/CH


## API Rest
### Ramène l’ensemble des trajets pour tous les utilisateurs
`/api/trajet`
```javascript
{
    "dateDepart": { // Date Depart
        "date": "2020-01-01 00:00:00.000000",
        "timezone_type": 3,
        "timezone": "Europe/Berlin"
    },
    "heureDepart": {  //  Heure depart
        "date": "1970-01-01 09:15:38.000000",
        "timezone_type": 3,
        "timezone": "Europe/Berlin"
    },
    "nbPlace": 5, // Nombre de place disponible pour le trajet
    "duree": 3.3, // Durée du trajet
    "commentaire": "un commentaire", // Commentaire sur le trajet
    "nbKm": 30, // nombre de Km
    "id": 1, // ID du Trajet
    "ville_depart_trajet": { // Information sur la ville de depart
        "codeInsee": "29019",
        "ville": "Brest",
        "codePostal": "29200",
        "dep": "29",
        "id": 1
    },
    "ville_arrivee_trajet": { // Information sur la ville d'arrivée
        "codeInsee": "35238",
        "ville": "Renne",
        "codePostal": "35000",
        "dep": "35",
        "id": 2
    },
    "type_trajet_trajet": { // type de trajet
        "typeTrajet": "Ponctuel",
        "id": 1
    },
    "possede_trajet": { // Information sur le Vehicule et Utilisateur
        "immatriculation": "528AGM29",
        "nbPlace": 5,
        "id": 1,
        "utilisateur_possede": { //iformation Utilisateur
            "mail": "mail@mail.com",
            "nom": "nom",
            "prenom": "prenom",
            "password": "$2y$10$sJgKqB.zFB0CUUseFst7VuVXGjjyXWX2nqGTD2g1Kn6CzEhdQ4V4m",
            "telephone": "0700000000",
             "adresse": "X rue xxxxxx",
            "id": 1,
            "ville_utilisateur": {
                "codeInsee": "29019",
                "ville": "Brest",
                "codePostal": "29200",
                "dep": "29",
                "id": 1
            },
            "categorie_utilisateur": {
                "categorie": "etudiant",
                "id": 1
            }
        },
        "voiture_possede": { // Information sur le Vehicule du trajet
            "modele": "modele",
            "id": 1,
            "marque_voiture": {
                "marque": "Renaud",
                "id": 1
            },
            "type_vehicule_voiture": {
                "type": "4x4",
                "id": 1
            }
        }
    }
}
```
(Même type de données renvoyées pour les autres)
### Ramène un trajet en particuliers en fournissant son ID (passé en paramètre)
`/api/trajet/{id}`

### Crée un nouveau trajet (methode POST)
`/api/trajet/new`

### Ramène l’ensemble des covoiturages pour tous les utilisateurs
`/api/covoiturage`

### Crée un nouveau covoiturage (methode POST)
`/api/covoiturage/new`

### Ramène l’ensemble des covoiturages associer a un utilisateurs 
`/api/covoiturage/utilisateur/{id_utilisateur}`

### Ramène l’ensemble des possedes associer a un utilisateurs 
`/api/possede/utilisateur/{id_utilisateur}`

### Ramène l’ensemble des utilisateurs 
`/api/utilisateur`

### Ramène un utilisateur en particulier 
`/api/utilisateur/{id}`

### Modifie un utilisateur en particulier  (Methode POST)
`/api/utilisateur/modify`



## Base de données
Le script de la base de données se trouve ici [cir3-prjsymj-BM-CH.sql](https://github.com/RitchyGhan/Covoiturage/blob/master/cir3-prjsymj-BM-CH.sql)
Le nom de la Base, Utilisateur et Mot de passe sont à changer dans `Symfony/CovoitSymf/app/config/parameters.yml`
