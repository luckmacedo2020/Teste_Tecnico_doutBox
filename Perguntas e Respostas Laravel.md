Nome : Luciano Da Costa Macedo

Perguntas e respostas sobre o framework Laravel:

1 O que são as rotas?

As rotas chamam as views, que são as representações gráficas das paginas;

podemos acessar paginas de projetos por meio delas;



2 oque são controllers?

os controles são a parte fundamental de toda aplicação em laravel;

geralmente condensam a maior parte da nossa logica;

Tem o papel de enviar e esperar resposta do banco de dados;

E também receber e enviar alguma reposta para as nossas views aonde ficam nossos templetes;

os controllers podem ser criados via artisan é muito comum retornar uma view ou redirecionar 

para uma Url através do controller;

3 O que são os models?

os model é responsável pela interação entre as requisições do banco de dados

A convenção para o Model é o nome da entidade em singular;

4 O que é MVC?

a sigla mvc é model views e controllers model modelagem de dados , controller controle e interação do site entre outras funçoes viws interação ;

5 Como podemos gerar rotas automática com Laravel

creio eu que seria passando pelos controllers

6 Explique o que é o Blade e quais as principais diretivas?

blade é onde fica nosso documento html mais podemos dizer que o blade é o templete engine do laravel 

Com ele vamos deixar as nossas views mais dinâmicas 

inserindo tags de html e também dados que são fornecidos pelo banco 

podemos dizer que a view serão responsabilidade do blade 

temos muitas diretivas mais como só o pedido 3 

temos a diretiva @php aonde fica o conteúdo php@@endphp.

temos a diretiva @foreach que percorre nossa array@endforeach

e por ultimo a diretiva @if aonde fica as famosas condições @endif



7.Explique detalhadamente o que é um guard?

Um guard é uma maneira de fornecer a lógica que é usada para identificar usuários autenticados. Laravel fornece diferentes guardas, como sessões e tokens. O protetor de sessão mantém o estado do usuário em cada solicitação por cookies e, por outro lado, o protetor de token autentica o usuário verificando um token válido em cada solicitação.‎

8 Qual a principal função do composer em um projeto Laravel?

O Composer é um gerenciador de pacotes **e uma das** funções dele é exatamente cuidar para que sua aplicação receba as atualizações dos módulos/pacotes necessários sem quebrar o seu projeto.

para usar o laravel tem que fazer sua instalação.

 9 Qual a principal função do Artisan em um projeto Laravel?

Ele é uma interface aonde você usa no terminal aonde você pode executar diversas operações diferentes no laravel e no seu projeto pode adicionar controllers pode adicionar models entre outros é muito útil para nossa aplicação e assim ganhamos tempos  pois é muito mais pratico.

10.Como funciona o Auth do Laravel?
seria a autenticação de usuario do nosso site criado por laravel  O arquivo de configuração da autenticação está localizado no diretório config/auth.php,


