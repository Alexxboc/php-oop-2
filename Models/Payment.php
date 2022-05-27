<?php 

class Payment
{
  protected $user;
  protected $card;

  public function __construct($user, $card)
  {
    $this->user = $user;
    $this->card = $card;
  }

  public function getFullName()
  {
    return $this->user->name . ' ' . $this->user->lastName;
  }

  public function order(CreditCard $card)
  {

    #var_dump(date('m-y'));
    $current_year = date('y');
    $current_month = date('m');
    $name = $this->getFullName();
    if ($card->expirationYear > $current_year) {

      echo " $name grazie per il tuo ordine!";
    } else if (
      $card->expirationYear ==  $current_year &&
      $card->expirationMonth >= $current_month
    ) {
      echo " $name grazie per il tuo ordine!";
    } else {

      echo "$name la tua carta non è più valida!";
    }
  }
}