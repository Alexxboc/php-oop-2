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
require_once __DIR__ . "/Models/CreditCard.php";
require_once __DIR__ . "/Models/Payment.php";





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
    $product->setDiscount($user_1);
    var_dump($product);
    
}

$userCard = new CreditCard('123123123122', '113', '06', '22');

$payment = new Payment($user_2, $userCard);
$payment->order($userCard);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap cdn Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row row-cols-3">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card_product border border-light">
                        <div class="img">
                            <img src="<?= $product->poster; ?>" alt="<?= $product->name; ?>" class="img-fluid">
                        </div>
                        <!-- /.img -->

                        <div class="card_body text-center">
                            <h5 class="product_name">
                            <?= $product->name; ?>
                            </h5>
                            <!-- /.product_name -->
                            <div class="price">
                                <span class="official_price me-2">
                                <?= $product->price; ?>
                                </span>
                                <!-- /.official_price -->
                                <span class="discount_price text-danger">
                                <?= $product->discount; ?>
                                </span>
                                <!-- /.discount_price -->
                            </div>
                            <!-- /.price -->
                            <p class="description">
                            <?= $product->description; ?>
                            </p>
                            <!-- /.description -->
                        </div>
                        <!-- /.card_body -->

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            <?php endforeach; ?>
        </div>
        <!-- /.row row-cols-3 -->
    </div>
</body>



