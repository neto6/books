# Cenários de Testes

## Testes Funcionais

### 1 - Cadastrar Usuário
#### Pré-requisitos
- Não pode haver outro usuário com o mesmo e-mail
#### Passos
- Acessar o site do sistema através da página inicial
- Clicar em "Registrar-se"
- Preencher os dados solicitados
- Clicar em "Registrar"
#### Resultados esperados
- Usuário cadastrado no sistema
- Usuário redirecionado para seu painel

### 2 - Logar Usuário
#### Pré-requisitos
- Usuário estar cadastrado
#### Passos
- Acessar o site do sistema através da página inicial
- Preencher os dados de login solicitados
- Clicar em "Entrar"
#### Resultados esperados
- Usuário redirecionado para seu painel

### 3 - Cadastrar Livro
#### Pré-requisitos
- Usuário estar logado em seu painel
#### Passos
- No menu superior clicar em "Cadastrar Livro"
- Preencher os dados solicitados
- Clicar em "Cadastrar"
#### Resultados esperados
- Usuário redirecionado para a página do novo livro

### 4 - Marcar Livro Como Lido
#### Pré-requisitos
- Usuário estar logado em seu painel
- Livro deve estar cadastrado no sistema
#### Passos
- No menu superior preencher o campo de busca com o nome do livro desejado
- Clicar em "Buscar"
- Nos resultados da busca, clicar sobre o nome do livro desejado
- Agora na página do livro, clicar em "Já li"
#### Resultados esperados
- Usuário permanece na página do livro
- Livro é marcado como lido para o usuário no sistema

### 5 - Marcar Livro Favorito
#### Pré-requisitos
- Usuário estar logado em seu painel
- Livro deve estar cadastrado no sistema
- Usuário deve ter marcado como lido o livro que quer favoritar
#### Passos
- No menu superior preencher o campo de busca com o nome do livro desejado
- Clicar em "Buscar"
- Nos resultados da busca, clicar sobre o nome do livro desejado
- Agora na página do livro, clicar em "Favorito"
#### Resultados esperados
- Usuário permanece na página do livro
- Livro é marcado como favorito para o usuário no sistema

### 6 - Marcar Livro Que Possui
#### Pré-requisitos
- Usuário estar logado em seu painel
- Livro deve estar cadastrado no sistema
#### Passos
- No menu superior preencher o campo de busca com o nome do livro desejado
- Clicar em "Buscar"
- Nos resultados da busca, clicar sobre o nome do livro desejado
- Agora na página do livro, clicar em "Possuo"
#### Resultados esperados
- Usuário permanece na página do livro
- Livro é marcado como possuído para o usuário no sistema

### 7 - Marcar Livro Que Quer Ler
#### Pré-requisitos
- Usuário estar logado em seu painel
- Livro deve estar cadastrado no sistema
#### Passos
- No menu superior preencher o campo de busca com o nome do livro desejado
- Clicar em "Buscar"
- Nos resultados da busca, clicar sobre o nome do livro desejado
- Agora na página do livro, clicar em "Quero ler"
#### Resultados esperados
- Usuário permanece na página do livro
- Livro é marcado como quer ler para o usuário no sistema

### 8 - Avaliar Livro
#### Pré-requisitos
- Usuário estar logado em seu painel
- Livro deve estar cadastrado no sistema
- Usuário deve ter marcado o livro como lido
#### Passos
- No menu superior preencher o campo de busca com o nome do livro desejado
- Clicar em "Buscar"
- Nos resultados da busca, clicar sobre o nome do livro desejado
- Agora na página do livro, clicar em "Avaliar"
- Digitar uma nota de 1 a 5
- Clicar em "Avaliar"
#### Resultados esperados
- Usuário retorna à página do livro
- Avaliação do usuário é salva para o livro no sistema

### 9 - Adicionar Review Para Livro
#### Pré-requisitos
- Usuário estar logado em seu painel
- Livro deve estar cadastrado no sistema
#### Passos
- No menu superior preencher o campo de busca com o nome do livro desejado
- Clicar em "Buscar"
- Nos resultados da busca, clicar sobre o nome do livro desejado
- Agora na página do livro, escrever a review na caixa de texto
- Clicar em "Adicionar Review"
#### Resultados esperados
- Usuário retorna à página do livro
- Nova review agora é exibida na página do livro

### 10 - Buscar Livros
#### Pré-requisitos
- Usuário estar logado em seu painel
- Livro(s) procurados deve(m) estar cadastrado(s) no sistema
#### Passos
- No menu superior preencher o campo de busca com o nome do livro desejado ou trecho do nome
- Clicar em "Buscar"
#### Resultados esperados
- É exibida lista de livros que possuem o trecho digitado em seus nomes

### 11 - Criar Lista de Livros
#### Pré-requisitos
- Usuário estar logado em seu painel
#### Passos
- Em seu painel, nas listas, clicar em "Criar Lista"
- Preencher o campo com o nome da lista
- Clicar em "Criar"
#### Resultados esperados
- Lista é criada no sistema
- Usuário é redirecionado para a página da nova lista

### 12 - Adicionar Livros a Lista de Livros
#### Pré-requisitos
- Usuário estar logado em seu painel
- Livros estão cadastrados no sistema
#### Passos
- No menu superior preencher o campo de busca com o nome do livro desejado
- Clicar em "Buscar"
- Nos resultados da busca, clicar sobre o nome do livro desejado
- Clicar no botão "Adicionar a Lista ***"
#### Resultados esperados
- Livro é marcado para a lista no sistema
- Usuário é redirecionado para a página da lista