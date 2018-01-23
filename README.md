## ETAPE 5 COMMUNICATION AVEC DES "RAW QUERIES"

### Attendu :
* Une page contenant la ​listes des boissons​ de la BDD
* Une page contenant le ​nom et prix d’une boisson

### Etapes de réalisation :
* new laravel \<nom du projet\>
* cp .env.example .env
* Modifier .env

      DB_DATABASE=\<myDatabase\>
      DB_USERNAME=\<userName\>
      DB_PASSWORD=\<password\>
* Création du controller
        
      php artisan make:controller BoissonsController