<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        @php
        
        class animais{
            public $id;
            public $nome;
            public $especie;
            public $idade;
        
            public function comer(){
                echo $this->especie. " " .$this->nome. " " ."Esta comendo <br>";
            }
            
            public function andar(){
                echo $this->especie. " " .$this->nome. " " ."Esta andando <br>";
            }

            public function dormir(){
                echo $this->especie. " " .$this->nome. " " ."Esta dormindo <br>";
            }

            public function confirmIdade(){
                if ($this->idade <=2) {
                    echo "sua idade é"." "  .$this->idade. " " ."seu estado é filhote";
                }if ($this->idade >=8 ) {
                    echo "sua idade é" ." "   . $this->idade. " " . "seu estado é jovem";
                }
                if($this->idade > 8) {
                    echo "seu estado é idoso";
                }
            }
        
        }
        
        
        class cachorro extends animais{
        }
    
        $cachorro = new cachorro();
        $cachorro->id="002";
        $cachorro->nome="vampira";
        $cachorro->especie="cachorro";
        $cachorro->comer();

        $cachorro = new cachorro();
        $cachorro->id="002";
        $cachorro->nome="vampira";
        $cachorro->especie="cachorro";
        $cachorro->andar();

        $cachorro = new cachorro();
        $cachorro->id="002";
        $cachorro->nome="vampira";
        $cachorro->especie="cachorro";
        $cachorro->dormir();


        $cachorro = new cachorro();
        $cachorro->id="002";
        $cachorro->nome="vampira";
        $cachorro->especie="cachorro";
        $cachorro->idade="2";
        $cachorro->confirmIdade();


        echo "<br>";
        echo "<br>";

        class girafa extends animais  {
        }
        
        $girafa = new girafa();
        $girafa->id="002";
        $girafa->nome="lole";
        $girafa->especie="girafa";
        $girafa->comer();

        $girafa = new girafa();
        $girafa->id="002";
        $girafa->nome="lole";
        $girafa->especie="girafa";
        $girafa->andar();
        
        $girafa = new girafa();
        $girafa->id="002";
        $girafa->nome="lole";
        $girafa->especie="girafa";
        $girafa->dormir();

        $girafa = new girafa();
        $girafa->idade="2";
        $girafa->confirmIdade();
        
        echo "<br>";
        echo "<br>";

        class elefante extends animais {

        }

        $elefante = new elefante();
        $elefante->id="002";
        $elefante->nome="buda";
        $elefante->especie="elefante";
        $elefante->comer();

        $elefante = new elefante();
        $elefante->id="002";
        $elefante->nome="buda";
        $elefante->especie="elefante";
        $elefante->andar();

        $elefante = new elefante();
        $elefante->id="002";
        $elefante->nome="buda";
        $elefante->especie="elefante";
        $elefante->dormir();

        
        $elefante = new elefante();
        $elefante->idade="2";
        $elefante->confirmIdade();
        @endphp
    </body>
</html>

</body>
</html>