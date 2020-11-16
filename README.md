# Gemini

## Projeto Gemini
O Projeto consiste na criação de um software de cadastro a fim de possibilitar a unificação de todos os canais digitais das lojas bemol. o site possibilida o cadastro de novos usuarios e um ambiente para que seja facil a navegação pelos canais.

## Instruções para funcionamento
Para desenvolvimento do software foi utilizado tecnologias como o Laravel, Bootstrap e javascript, assim como o ambiente servidor XAMPP, para manipulação do banco MySQL foi usado HeidiSQL versão (11.1_32_Portable). Para manipulação do projeto e versionamento foi utilizado o VSCode e GitHub. O esquema das tabelas do banco de dados utilizado encontra-se no caminho:
>\gemini\SGBD\masterbemol.zip

>Nome do esquema do banco: masterbemol.sql

O Banco de dados esta configurado com usuarios e senhas padrão:  
>usuário = root  
>senha = “” (vazio)

Para o funcionamento do projeto tambem é necessário a instalação e configuração de variáveis de ambiente da linguagem PHP. Para o start do servidor (com o xampp devidamente instalado e iniciado) deve-se navegar até a pasta do projeto via CMD e executar o comando:  
> php artisan serve  

Sem Fechar o CMD ou parar a execução do servidor, o sistema passará a responder no endereço do navegador:

>http://127.0.0.1:8000 ou http://127.0.0.1:8000/login