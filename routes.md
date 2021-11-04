| URL           | Controller     | Titre                   | HTTP Méthode   | Méthode     | Description           |
| ------------- | -------------- | ----------------------- | -------------- | ----------- | --------------------- |
| '/'           | HomeController |                         | GET            | home        | Accueil liste oiseaux | 
| '/download'   | BirdController |                         | GET            | download    | Télécharge le file    |
| '/bird/{id}'  | BirdController |                         | GET            | show        | Détails d'un oiseau   |
| '/cart'       | CartController |                         | GET            | list        | Liste oiseau panier   |
| '/cart/{id}'  | CartController |                         | GET/POST       | add         | Ajoute oiseau panier  |
| '/api/'       | ApiController  |                         | GET            | list        | JSON route liste      |
| '/api/{id}'   | ApiController  |                         | GET            | show        | JSON route détails    |