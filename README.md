# ENGENHARIA DE SOFTWARE 2025/02 | UNIVERSIDADE FEDERAL DO TOCANTINS

**Curso: Ciência da Computação**

**Professor: Dr. Edeílson Milhomem**

**Equipe:**

| Nome                           | Perfil GitHub                                 |
|--------------------------------|----------------------------------------------|
| Tiago Barbosa de Castro Souza  | [TiagoBrs](https://github.com/TiagoBrs)     |
| Vitor Kawan Barbosa Borges     | [KawanVitor1](https://github.com/KawanVitor1)|
| Lucas Monteiro de Carvalho     | [lucas-mcarvalho](https://github.com/lucas-mcarvalho)|
| Matheus Silva Pontes           | [matheuspontes01](https://github.com/matheuspontes01)|
| Bruno Henrique Frota Sobral    | [Bruno-uft](https://github.com/Bruno-uft)  |

# VÍDEO DO PROJETO
(Clique na miniatura do vídeo abaixo)
[![Assista ao vídeo](https://img.youtube.com/vi/CXWk26p7s_Q/maxresdefault.jpg)](https://www.youtube.com/watch?v=CXWk26p7s_Q)


# PROJETO 1 - DESCRIÇÃO

Para a realização desse projeto, escolheu-se a implementação de um CRUD para o gerenciamento de cadastro de usuários de uma provedora de internet
fictícia: "SkyNet". A aplicação realizará operações que envolvem: criação de usuários, leitura dos dados dos usuários, deleção de usuários e atualização
de suas informações.

# REQUISITOS

**REQUISITO 1: Cadastro de Usuário**

**DESCRIÇÃO**: O sistema deverá ser capaz de criar novos usuários e armazená-los em um banco de dados. Cada usuário possuirá os seguintes atributos:

* nome   - Nome completo do usuário(STRING).
* cpf    - Cpf do usuário(11 dígitos formato XXX.XXX.XXX-XX).
* plano  - Plano que o usuário contratou: Simples, Médio, Terminator.
* status - Indica se o usuário está com o plano ativado(Valores possíveis: 'Ativo' ou  'Inativo')



**REQUISITO 2: VISUALIZAÇÃO DE USUÁRIOS**

**DESCRIÇÃO**: O sistema deverá exibir uma tabela contendo todos os usuários cadastrados, com seus respectivos atributos organizados por linha.
Para cada registro, deverão estar disponíveis os seguintes botões de ação:

* ATUALIZAR: permite modificar os atributos do usuário.
* DELETAR: remove o usuário do banco de dados.



**REQUISITO 3: ATUALIZAÇÃO**

**DESCRIÇÃO**: O sistema deverá permitir a atualização dos atributos de um usuário cadastrado.
A atualização deve ser realizada por meio de uma interface que possibilite alterar os seguintes campos:

* nome   - Nome completo do usuário.
* cpf    - Cpf do usuário(mantendo a formato válido).
* plano  - Plano contrado.
* status - 'Ativo' ou  'Inativo'.

  Após a confirmação, o sistema deverá salvar as alterações no banco de dados.



**REQUISITO 4: DELEÇÃO**

**DESCRIÇÃO**: O sistema deverá permitir a deleção de usuários, mantendo a consistência na visualização e no Banco de Dados.


**REQUISITO 5: TELA DE LOGIN**

**DESCRIÇÃO**: A aplicação deve fazer pussuir um tela de login para que apenas administradores possam acessar o gerenciamento de cadastros SkyNet.

# ARQUITETURA MVC (MODEL–VIEW–CONTROLLER)
A aplicação segue o padrão MVC, que organiza a estrutura em três camadas principais:

**Model**

* Responsável pela representação e manipulação dos dados.

* Contém as regras de negócio e a lógica de acesso a persistência (ex.: banco de dados).

**View**

* Camada de apresentação, responsável por exibir as informações ao usuário.

* Não contém regras de negócio, apenas lógica de exibição.

**Controller**

* Camada intermediária que recebe as requisições do usuário.

* Interpreta os comandos, aciona os Models correspondentes e seleciona a View adequada.

# FERRAMENTAS

Para a realização deste projeto as seguintes ferramentas foram utilizadas:

* PHP uma linguagem interpretada usada para executar comandos do lado do servidor(comunicação com bancos de dados, gerenciamento de rotas etc).

* Para o Front-End, utilizou-se HTML para estruturação do conteúdo e CSS para estilização e responsividade.

* A aplicação é servida por um Banco de Dados MySQL, que realiza a persistência dos dados dos usuários cadastrados.

* XAMMP: um ambiente de desenvolvimento web que inclui o sevidor Apache(necessário para processamento do código em PHP) e integração com MySQL.




# GUIA DE INSTALAÇÃO LOCAL DO PROJETO

Para Windows:

* Baixar a pasta do projeto. Instale o git e clone o projeto com git clone https://github.com/TiagoBrs/AtividadeAP1_ENGSW.git.
  Desse modo a pasta do projeto ficará no repositório corrente. Ou, se prefereir, é posssível obter a pasta do projeto sem a instalação do git,
  baixando o arquivo zip no ícone code(cor verde).

* Instalar o XAMPP: XAMPP é um acrônimo que representa quatro tecnologias: Apache, MySQL, PHP e Perl. Esse pacote de software livre oferece uma
  solução completa para criar e gerenciar servidores web locais. Ele fornece o server e outros utilitários que permitem que o projeto funcione
  efetivamente. A instalação pode ser feita no site oficial: https://www.apachefriends.org/pt_br/download.html. Instale a versão 8.2.12. de windows.

* Criando pasta de instalação: Crie uma pasta em no disco local C do seu sistema onde a instalação do XAMPP será realizada. Neste guia
  usaremos o nome XAMPP para se referir a essa pasta criada(pode ser qualquer outro nome).

* Setup de instalação: Clique com botão direito do mouse sobre o programa e clique em executar como administrador. Ao abrir o instalador você pode prosseguir
  com todas as opções marcadas. Na próxima tela assegure-se de que a instalação será feita na pasta que você criou. Depois aperte para prosseguir
  até iniciar a instalação. O firewall do windows pode fazer alguma notificação, apenas clique em permitir.

* Acessando serviço: Após isso, mova a pasta do projeto do github para C:\XAMPP\htdocs. No painel de controle do XAMPP dê start nos serviços MySQL e Apache.
  Se o firewall do windows lançar algum alerta apenas clique em permitir. Depois basta acessar seu navegador com o link: http://localhost/AtividadeAP1_ENGSW/public/
  onde AtividadeAP1_ENGSW é a pasta do projeto baixada do github. Com isso você pode acessar a aplicação normalmente.

  Login do admin: admin@gmail.com
  
  Senha do admin: admin123

  
Para Linux:

* Baixar a pasta do projeto. Instale o git e clone o projeto com git clone https://github.com/TiagoBrs/AtividadeAP1_ENGSW.git.
  Desse modo a pasta do projeto ficará no repositório corrente. Ou, se prefereir, e posssível obter a pasta do projeto sem a instalação do git,
  baixando o arquivo zip no ícone code(cor verde).

* Instalar o XAMPP: XAMPP é um acrônimo que representa quatro tecnologias: Apache, MySQL, PHP e Perl. Esse pacote de software livre oferece uma
  solução completa para criar e gerenciar servidores web locais. Ele fornece o server e outros utilitários que permitem que o projeto funcione
  efetivamente. A instalação pode ser feita no site oficial: https://www.apachefriends.org/pt_br/download.html. Instale a versão 8.2.12. de linux.

* Setup de instalação: Para executar o programa é necessário fornecer permissão de execução. Entre no diretório onde está o arquivo xampp-linux-x64-8.2.12-0-installer.run
  e faça: sudo chmod a+x xampp-linux-x64-8.2.12-0-installer.run. Com isso você pode executar o intalador normalmente com sudo ./xampp-linux-x64-8.2.12-0-installer.run.
  Feito isso basta clicar em forward até a instalação ser iniciada. Por padrão ele será instalado em /opt/lampp.

* Acessando serviço: Completada a instalação, mova a pasta do projeto do github para /opt/lampp/htdocs com o comando:
  sudo mv AtividadeAP1_ENGSW /opt/lampp/htdocs (Execute o comando enstando na pasta corrente de AtividadeAP1_ENGSW). Para iniciar o XAMPP você deve
  ir como usuário root em /opt/lampp/ e fazer o comando ./manager-linux-x64.run. Vá na aba manage servers e clique em start all. Depois basta acessar
  seu navegador com o link: http://localhost:8000/AtividadeAP1_ENGSW/public/. Com isso você pode acessar a aplicação normalmente.

  Login do admin: admin@gmail.com
  
  Senha do admin: admin123


  # DEPLOY

  Se não optar por instalação local você podê conferir o projeto em: http://18.228.17.85/AtividadeAP1_ENGSW/public/







  





























