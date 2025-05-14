# Authentication -> Autenticação 
Login / Validar a sua identidade p/ acessar o sistema

Credenciais
    email -> texto plano (puro) 
    senha -> precisa ser ofuscada

    validação 

Armazenar o usuario (Sessão de usuario)
    Basic (obsoleto)
        envia as credencias a cada requisição 

    Cookie
        o servidor armazena (em arquivo, banco de dados) o usuario logado 
        o cliente (navegador) envia a cada requisicao a chave da sessão

        quem usa?
            mais usado na web, sistema serverside  

    Tokens (JWT)
        forma mais moderna e robusta 
        o servidor gera um token de sessão unico e devolve ao cliente (não é salvo)
        o cliente envia a cada requisicao esse token 
        o servidor descripta o token para obter o usuario logado

        onde usa? 
            integração com API, sistema front / back separado, mobile 

## Cookies

- informações que ficam no navegador e são enviadas ao backend em toda requisição
- no navegador é enviado automatic automaticamente semq ue o programador precise intervir 
- são definidos por site (dominios)

https://www.php.net/manual/pt_BR/ref.session.php


# Authorization -> Autorização 
Validar se o usuario ja logado pode fazer a operação no sistema 

Funcionalidades
    Criar usuario
    Ver todos usuarios cadastrados
    Excluir usuario 
    Relatorio financeiro

1. Área Administrativa com Multiplos Usuários

  Crie um sistema de autenticação que permita o login de múltiplos usuários. Cada usuário deve ter um nível de acesso (administrador, gerente ou funcionario).

  - Após o login, redirecione o usuário para uma página personalizada conforme seu nível de acesso.
  - Exiba uma mensagem de boas vindas com o nome e o nível do usuário.
  - Utilize um array associativo com os dados dos usuários.

2. Controle de Tempo de Sessão

  Implemente um sistema de expiração automática da sessão por inatividade.

  - Após 5 minutos sem atividade, a sessão do usuário deve ser encerrada automaticamente.
  - Exiba uma mensagem informando o motivo do logout ao redirecionar para o login.
  - Use $_SESSION['ultima_interacao'] com a função time() para controlar o tempo.

3. Regeneração de ID de Sessão
    
  Implemente a regeneração do ID de sessão no momento do login.

  - Use a função session_regenerate_id(true) após autenticação bem-sucedida.
  - Explique por que essa prática aumenta a segurança da aplicação.
  - Teste o comportamento da sessão antes e depois da implementação e anote os resultados.

4. Bloqueio por Tentativas de Login Falhas

  Adicione uma funcionalidade que bloqueie o acesso após 3 tentativas de login incorretas.

  - Armazene o número de tentativas usando $_SESSION.
  - Após 3 tentativas, bloqueie o login por 2 minutos.
  - Exiba mensagens genéricas para o usuário com intenção de ofuscar informação em caso de ataque de força bruta.
