# Curso_de_PHP
 Neste repositório estão todos os exercícios que fiz no decorrer do curso de PHP disponibilizado pela Secretaria de Ciência, Tecnologia e Educação Superior do Estado do Ceará

Execute cada um dos exercícios a seguir usando PHP através de xampp ou wamp:

Módulo 1:

Exercício 7: Digite 5 números e verifique qual é o maior. (use linguagem PHP)

Exercício 8: Digite várias idades. Exiba quantas pessoas são  maior  de  idade  (18  anos)  e  quantas  são menores. (use Linguagem PHP)

Exercício 9: Digite vários nomes. Exiba na tela todos os nomes digitados, porém de maneira invertida (do último para o primeiro, usando linguagem PHP).

Exercício 10: Digite uma data. Exiba separadamente o dia, o mês e o ano. (use linguagem PHP)

Módulo 3:

Exercício 6: Crie uma lista de usuários em um arquivo txt, que seja preenchida por meio da URL, via GET.

Exercício 7: Crie um formulário onde você ira digitar: Nome de Um produto, Quantidade e Preço. Salve em um arquivo txt, leia o arquivo e exiba os dados salvos numa tabela.

Exercício 9: Crie um sistema de login utilizando apenas as funções de manipulação de arquivos.

Exercício 10: Crie um cadastro e exiba os dados cadastrados em uma tabela, usando apenas manipulação de arquivos.

Módulo 4:

Exercício 6: Crie uma API que retorna os cursos cadastrados no banco de dados.

Exercício 7: Crie uma API que retorna os cursos cadastrados no banco de dados, com o status "Ativo", e exiba o json retornado.

Exercício 9: Crie uma conexão com o banco de dados. Faça um formulário onde seja possivel cadastrar um curso. Leia a tabela de cursos do banco de dados e exiba o retorno em um JSON formato para objetos ou array. Exiba em uma tabela.

Módulo 5:

Exercício 5: Crie um pequeno framework onde seja possível criar formulários automáticos.


Projeto_Final:

PROJETO: Criação de um sistema de controle de estoque com banco de dados

OBJETIVO GERAL: O sistema deve ter a capacidade de armazenar os produtos contidos no estoque, para que esses possam ser controlados individualmente. Outro detalhe importante na
criação do sistema é no cadastro do produto onde deverá ser possível armazenar a quantidade mínima que deverá ter desse produto no estoque. Além disso, os seguintes passos deverão ser seguidos:

1. Cada produto terá um fornecedor relacionado a ele, sendo possível controlar os produtos divididos por fornecedores.

2. Os produtos devem ser divididos por categoria, ou seja, cada produto terá uma categoria.

3. As entradas e saídas dos produtos deverão ser registradas no programa, para futuramente obtermos um histórico completo de todo o trajeto do produto dentro do centro de distribuição.

4. Na entrada do produto será necessário armazenar a data do pedido e a data de entrega da mercadoria, para depois podermos analisar quanto tempo o pedido demora a chegar ao estoque.

5. Na saída, obrigatoriamente será informada a loja para a qual a mercadoria foi enviada, pois ao final do mês devemos fazer o fechamento do faturamento para saber qual é a loja que mais obteve vendas.

6. Outra capacidade que o sistema deverá ter é calcular o peso total de uma entrada ou de uma saída.

7. No programa, devem-se apresentar os produtos nos quais a sua quantidade total em estoque é menor ou igual à quantidade mínima requerida em estoque definida previamente.

8. A transportadora será outro item importante na análise, pois devemos saber qual transportadora é mais utilizada para fazer a entrega dos produtos e qual é a mais utilizada para fazer a saída.

O banco de dados deverá ser criado no SGBD Phpmyadmin, seguindo a seguinte UML e devendo conter todas as tabelas descritas na UML, os seus relacionamentos, sendo livre sua tipagem.

As tabelas a serem criadas são: Produtos, Categorias, Fornecedores, cidade, ItensEntrada, ItensSaída, Entrada, Saída, Transportadoras e Lojas.
