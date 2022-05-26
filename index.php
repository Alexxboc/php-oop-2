<!-- 

Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS: Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
Tips:
Qualora aveste bisogno di passare ad un metodo un tipo di dato particolare, come ad esempio un oggetto che avete creato voi, potete usarlo come facciamo di solito al posto di Type $variable.
Infondo anche le nostre classi sono dei tipi di dato.
Ad esempio
public function functionName( MyClass $variable, String $variable2, Int $variable3 ) {
# Implementazione
} 

 -->

<?php
/* Products */
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/DogEating.php";
require_once __DIR__ . "/Models/DogBed.php";
require_once __DIR__ . "/Models/Frisbee.php";
/* Users */
require_once __DIR__ . "/Models/User.php";
require_once __DIR__ . "/Models/Alessandro.php";
require_once __DIR__ . "/Models/Fabio.php";



//  $mongeMediumAdult = new DogEating('Monge Medium Adult', 'Mangiare per cane adulto', 29.90, 26.91, 10);
//  $geoFrisbeeTornado = new Frisbee('Geo frisbee Tornado', 'Frisbee di plastica', 15, 12, 20);
//  $cucciaDomus = new DogBed('Cuccia Domus', 'Cuccia di legno', 59.90, 41.93, 30);

$products = [
    new DogEating('Monge Medium Adult', 'Mangiare per cane adulto', 29.90, 'https://picsum.photos/id/237/400/300'),
    new Frisbee('Geo frisbee Tornado', 'Frisbee di plastica', 15,  'https://picsum.photos/id/237/400/300'),
    new DogBed('Cuccia Domus', 'Cuccia di legno', 59.90, 'https://picsum.photos/id/237/400/300')
];

$user_1 = new Alessandro('Alessandro', 'Boccardi', 'boccardi.alessandro@gmail.com', 'credit card', true, true);
    
$user_2 = new Fabio('Fabio', 'Pacifici', 'boccardi.fabio@gmail.com', 'credit card', false, false);



//var_dump($products, $users_1, $user_2);

foreach($products as $product) {
    var_dump($product->setDiscount($user_1));
    
}



