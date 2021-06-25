# feiradeciencias

## Para instalar e rodar o projeto

1. Fazer o clone do projeto
2. Rodar o comando `composer install`
3. Rodar o comando `npm install`
4. Rodar o comando `npm run watch` para poder realizar as alterações

## Para alterar o layout

Os arquivos de layout ficam na pasta `_assets`. Basta criar novos arquivos css se necessário e importar no arquivo css principal que é o `main.css` usando a sintaxe `@import 'seuarquivo.css';`

## Para adicionar imagens 

Você deve colocar as imagens na pasta `source/assets/images` perceba que aqui é na pasta sem o `_`!

Para referenciar a imagem no html você deve utilizar antes do nome da imagem o caminho: `/assets/images/`