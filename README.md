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


**REQUISITO 5: VALIDAÇÃO DOS DADOS**

**DESCRIÇÃO**: O sistema deverá fazer a validação dos dados de entrada para exibição seguindo os seguintes padrões:

CPF    - Apenas valore numéricos no Formato XXX.XXX.XXX-XX(Formato apenas na exibição. No banco de dados armazenar sem ponto e hífen).
PLANO  - Oferecer apenas as 3 opções possíveis: Simples, Médio ou Terminator.
STATUS - Oferecer apenas as 2 opções possíveis: Ativo ou Inativo.

# ARQUITETURA E FERRAMENTAS








  





























