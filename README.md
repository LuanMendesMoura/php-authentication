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
