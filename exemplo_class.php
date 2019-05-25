<?php

class Animal
{
    private $nome = 'Macaco';


    //antes era assim
//    public function Animal()
//    {
//        echo $this->nome;
//    }

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return ($this->nome);
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

}

$b = 'd';
$fun = function ($n) use ($b) {
    return strtoupper($n) . '-' . $b;
};

$arr = [1, 2, 3, 4];


for ($i = 0; $i < count($arr); $i++) {
    //echo $arr[$i] . '<br>';
}

foreach ($arr as $item) {
   // echo $item . '<br>';
}
$i = 0;
while ($i < count($arr)) {
    $i++;
    echo $arr[$i] . '<br>';
}
array_filter($arr,
    function ($item) {
      //  echo $item . '<br>';
    });

$a = new Animal();
echo $a->getNome();
$a->setNome('Gato');
echo $fun($a->getNome());