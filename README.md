# Instalação

## [Conheça o Laravel](https://laravel.com/docs/13.x#meet-laravel)

Laravel é um framework para aplicações web com sintaxe expressiva e elegante. Um framework web fornece uma estrutura e um ponto de partida para a criação da sua aplicação, permitindo que você se concentre em criar algo incrível enquanto nós cuidamos dos detalhes.

O Laravel se esforça para proporcionar uma experiência de desenvolvimento incrível, oferecendo ao mesmo tempo recursos poderosos como injeção de dependência completa, uma camada de abstração de banco de dados expressiva, filas e tarefas agendadas, testes de unidade e integração, e muito mais.

Seja você um iniciante em frameworks PHP ou um desenvolvedor experiente, o Laravel é um framework que cresce com você. Nós o ajudaremos a dar seus primeiros passos como desenvolvedor web ou a impulsionar sua expertise para o próximo nível. Mal podemos esperar para ver o que você vai criar.

### [Por que Laravel?](https://laravel.com/docs/13.x#why-laravel)

Existem diversas ferramentas e frameworks disponíveis para o desenvolvimento de aplicações web. No entanto, acreditamos que o Laravel seja a melhor escolha para criar aplicações web modernas e completas.

#### Uma estrutura progressiva

Gostamos de chamar o Laravel de framework "progressivo". Com isso, queremos dizer que o Laravel cresce com você. Se você está dando seus primeiros passos no desenvolvimento web, a vasta biblioteca de documentação, guias e [tutoriais em vídeo](https://laracasts.com/) do Laravel o ajudará a aprender o básico sem se sentir sobrecarregado.

Se você é um desenvolvedor sênior, o Laravel oferece ferramentas robustas para [injeção de dependência](https://laravel.com/docs/13.x/container) , [testes unitários](https://laravel.com/docs/13.x/testing) , [filas](https://laravel.com/docs/13.x/queues) , [eventos em tempo real](https://laravel.com/docs/13.x/broadcasting) e muito mais. O Laravel é otimizado para a construção de aplicações web profissionais e está pronto para lidar com cargas de trabalho corporativas.

#### Uma estrutura escalável

O Laravel é incrivelmente escalável. Graças à natureza amigável ao escalonamento do PHP e ao suporte integrado do Laravel para sistemas de cache distribuídos e rápidos como o Redis, o escalonamento horizontal com o Laravel é muito fácil. De fato, aplicações Laravel já foram facilmente escaladas para lidar com centenas de milhões de requisições por mês.

Precisa de escalabilidade extrema? Plataformas como [o Laravel Cloud](https://cloud.laravel.com/) permitem que você execute seu aplicativo Laravel em uma escala praticamente ilimitada.

#### Uma estrutura pronta para agentes

As convenções bem definidas e a estrutura precisa do Laravel o tornam um framework ideal para [desenvolvimento assistido por IA,](https://laravel.com/docs/13.x/ai) utilizando ferramentas como Cursor e Claude Code. Quando você pede a um agente de IA para adicionar um controlador, ele sabe exatamente onde colocá-lo. Quando você precisa de uma nova migração, as convenções de nomenclatura e os locais dos arquivos são previsíveis. Essa consistência elimina as suposições que frequentemente atrapalham as ferramentas de IA em frameworks mais flexíveis.

Além da organização de arquivos, a sintaxe expressiva e a documentação abrangente do Laravel fornecem aos agentes de IA o contexto necessário para gerar código preciso e idiomático. Recursos como relacionamentos Eloquent, requisições de formulário e middleware seguem padrões que os agentes podem entender e replicar com segurança. O resultado é um código gerado por IA que parece ter sido escrito por um desenvolvedor Laravel experiente, e não apenas uma junção de trechos genéricos de PHP.

Para saber mais sobre por que o Laravel é a escolha perfeita para desenvolvimento assistido por IA, confira nossa documentação sobre [desenvolvimento agético](https://laravel.com/docs/13.x/ai) .

#### Uma estrutura comunitária

O Laravel combina os melhores pacotes do ecossistema PHP para oferecer o framework mais robusto e amigável para desenvolvedores disponível. Além disso, milhares de desenvolvedores talentosos do mundo todo contribuíram [para o framework](https://github.com/laravel/framework) . Quem sabe, talvez você até se torne um colaborador do Laravel.

## [Criando uma aplicação Laravel](https://laravel.com/docs/13.x#creating-a-laravel-project)

### [Instalando o PHP e o instalador do Laravel](https://laravel.com/docs/13.x#installing-php)

Antes de criar sua primeira aplicação Laravel, certifique-se de que sua máquina local tenha [o PHP](https://php.net/) , [o Composer](https://getcomposer.org/) e [o instalador do Laravel](https://github.com/laravel/installer) instalados. Além disso, você deve instalar o [Node e o NPM](https://nodejs.org/) ou [o Bun](https://bun.sh/) para poder compilar os recursos de front-end da sua aplicação.

Se você não tiver o PHP e o Composer instalados em sua máquina local, os seguintes comandos instalarão o PHP, o Composer e o instalador do Laravel no macOS, Windows ou Linux:

macOSWindows PowerShellLinux

```
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"
```

Após executar um dos comandos acima, você deve reiniciar a sessão do terminal. Para atualizar o PHP, o Composer e o instalador do Laravel após instalá-los via `npm install` `php.new`, você pode executar o comando novamente no terminal.

Se você já tiver o PHP e o Composer instalados, poderá instalar o instalador do Laravel via Composer:

```
composer global require laravel/installer
```

Para uma experiência completa de instalação e gerenciamento de PHP com interface gráfica, confira o [Laravel Herd](https://laravel.com/docs/13.x#installation-using-herd) .

### [Criando um aplicativo](https://laravel.com/docs/13.x#creating-an-application)

Após instalar o PHP, o Composer e o instalador do Laravel, você estará pronto para criar uma nova aplicação Laravel. O instalador do Laravel solicitará que você selecione sua estrutura de testes, banco de dados e kit inicial preferidos:

```
laravel new example-app
```

Após a criação da aplicação, você pode iniciar o servidor de desenvolvimento local do Laravel, o worker da fila e o servidor de desenvolvimento Vite usando o `dev`script do Composer:

```cd example-app
npm install && npm run build
composer run dev

```
