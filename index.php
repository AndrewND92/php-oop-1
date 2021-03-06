        <!-- GOAL: nell'ottica di quanto visto a lezione, generare una classe User definendo alcune variabili d'istanza che rappresentino alcune informazioni rilevanti nella registrazione di un utente in un qualsiasi sito a vostra scelta.
        Generare inoltre costruttore e metodo toString nelle modalita' viste in classe.
        Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString -->

<?php

class User {
  public $nome;
  public $cognome;
  public $nickName;
  public $dataNascita;

  public function __construct($nome, $cognome, $nickName, $dataNascita) {

    $this -> nome = $nome;
    $this -> cognome = $cognome;
    $this -> nickName = $nickName;
    $this -> dataNascita = $dataNascita;
  }

  public function __toString() {
    return "Utente" .'<br>'
    . "nome: " . $this -> nome . '<br>'
    . "cognome: " . $this -> cognome . '<br>'
    . "nickname: " . $this -> nickName . '<br>'
    . "data di nascita: " . $this -> dataNascita . '<br>'. '<br>';
  }

}

$user1 = new User('Andrea','Miranda','ND','18/09/92');
$user2 = new User('Giangianni','Lo vedo','guapo','04/12/98');
$user3 = new User('Luigio','Pandemonio','er mole','06/04/87');

echo $user1 . $user2 . $user3;

 ?>
