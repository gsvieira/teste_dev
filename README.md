# teste_dev

#Eng. Rodolfo Romão

Desenvolver uma aplicação simples utilizando a linguagem de programação PHP usando uma framework (Laravel ou Codeigniter).
O objetivo desta avaliação é medir o nível de conhecimento do candidato nas áreas em que a vaga será exigida.

***** CASO VOCÊ NÃO TENHA CONHECIMENTO SOBRE LINUX OU DOCKER, FAVOR INICIAR O PROJETO USANDO A ESTRUTURA DE SUA PREFERÊNCIA.

************ Você poderá desenvolver o código inteiro e somente depois tentar configura o docker.

****************** Não vá para entrevista sem código algum dizendo que não sabe mexer com linux ou docker.

****************** Nesse repositório não tem código, assim não use código de outra pessoa, pois é bem fácil de detectar a "xerox".

#Escopo:
Deve-se criar uma aplicação em PHP para resolver o problema descrito abaixo, utilizando framework Laravel ou codeigniter. Fique a vontade para explorar todo o seu conhecimento em automação de tarefas, CSS e Javascript com JQuery ou qualquer outra ferramenta.

#Cenário fictício:
Prof. Jobim está lançando uma nova plataforma de ensino online. Nesta plataforma, desejamos realizar a matrícula de alunos em cursos através de um painel administrativo.

#Requisitos:
Um aluno pode ser matriculado em mais de um curso
O administrador do sistema que realizará as matrículas. Não é necessário desenvolver tela para alunos.
A consulta pelo nome, e-mail e/ou materia é requisito funcional.
É necessário desenvover tela de login / autenticação.
CRUD de Áreas de Cursos
Criar um gerenciamento aonde seja possível Criar, Listar, Editar e Visualizar uma área de curso (Biologia, Química, Física, por exemplo).

#Atributos de um Curso são:
título (obrigatório)
descrição
CRUD de Alunos
Criar um gerenciamento aonde seja possível Criar, Listar, Editar e Visualizar um Aluno.

Atributos de um Aluno são:
nome (obrigatório)
email (obrigatório)
data de nascimento

#CRUD de Matrículas
Criar um gerenciamento aonde seja possível Criar, Listar, Editar e Visualizar uma matrícula.

#REST API
Deixe um webservice pronto para ser chamado que somente requisição com usuário e senha poderão utilizar tal serviço.

#Instruções:
Faça fork desse repositório envie-nos um Pull Request quando estiver pronto.
Deve ser utilizado:
    1) o Laravel ou codeigniter como framework PHP.
    2) o Composer para gerenciar as dependências da aplicação.
    3) docker em um ambiente linux para rodar a aplicação que será demosntrada via call.
    4) o código deve ser versionado no github.
       5.1) utilizar o git para subir cada funcionalidade, demonstrando que você sabe utiliza-lo.
       5.2) Gerar TAG após a conclusão de etapas/sptrints, para que seja possível realizar a rastreabilidade do desenvolvimento.
    5) apartir da data e hora do envio do e-mail (previamente combinado) o candidato terá extamente 24 horas para realizar o commit final.
       6.1) Caso o candidato realize somente um commit após o prazo estipulado (24hrs), o valor do teste será reduzido a metade.
    6) o candidato poderá criar/utilizar uma base de dados pessoal ou da internet para demonstrar os conhecimentos em SQL Server.
    7) A nota somente terá valor integral caso o avaliado explique todos os passos realizados durante a entrevista que ocorrerá após a execução da avaliação.
    
Crie um README com orientações para a instalação do sistema.


#Plus ++
Cubra pelo menos 3 recursos de seu código com testes unitários.
Utilize as melhores práticas da Orientação a Objetos.
As tabelas do banco de dados criadas através de migrations.
Pretendemos conectar um aplicativo mobile nesta nova plataforma.
Observações:
Será avaliado é a qualidade do código não a velocidade de desenvolvimento.
Se não for possível terminar todas as funcionalidades, não tem problema.

Você pode optar por templates para o frontend.

Não precisa ser complexo, com varias lib’s e etc. O legal é usar o necessário para ter um código de qualidade e de fácil evolução.

Lembrando código de qualidade, você pode e deve fazer o que achar necessário para isso, mesmo que não esteja listado aqui.

#Links para ajuda

Docker - Ambiente APACHE + PHP X: https://hub.docker.com/_/php
SQL Server Execute Online -  https://www.jdoodle.com/execute-sql-online/

#Em caso de dúvidas, envie-nos um e-mail para rodolforomao@gmail.com



Instruções de operação.
É necessário o uso do banco de dados SQL server, no meu caso executei via docker

docker run -e "ACCEPT_EULA=Y" -e "MSSQL_SA_PASSWORD=Pass#967" -p 1433:1433 --name sql1 --hostname sql1 -d mcr.microsoft.com/mssql/server:2025-latest

além disso é necessário executar composer install para instalar o as dependencias do laravel 12.x
seguido de npm install

após isso deve ser feito a migration com seed com o comando 
php artisan migrate --seed
e depois servir a aplicação.




