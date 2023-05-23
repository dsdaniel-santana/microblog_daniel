# microblog_daniel
 Exemplo de Site dinâmico de notícias

# Sobre as áreas do site

## PÚBLICA
Páginas que ***não precisam de autenticação*** para o acesso.
São as páginas na raíz do projeto: index, noticia, login e resultado.

## ADMINISTRATIVA

Páginas que ***precisam de autenticação*** para acesso, sendo que algumas delas tem privilégios de acesso diferenciado.

São as páginas vontidas na pasta ***admin*** do projeto:
index, usuarios, usuarios-insere, usuario-atualiza,
usuario-exclui, noticia-insere, noticia-atualiza, noticia-excluiu e não autorizado

### Privilegeos de acesso 

Usuários do tipo **admin**, podem acessar/modificar **TUDO**.
Usuários do tipo **editor**, podem acessar/modificar **somente** seus próprios dados e suas próprias notícias. Ou seja **não podem** por exemplo, administrar outros usuários.

