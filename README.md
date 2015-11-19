



**Lista Negra**
-----------


----------


>**Aplicação desenvolvida para cadeira de Desenvolvimento de Software.**

>O projeto proposto baseia-se na ideia de usar as informações fornecidas pelos hostels para alimentar um sistema central onde alem das informações dos hospedes conterá comentários dos estabelecimentos sobre os fatos ocorridos. Ainda existira a possibilidade de avisar os hostels sobre a tentativa de check in de hospede cadastrado no sistema.

Instruções instalação e teste:

1- Clone o repositório:

    git clone https://github.com/Altamir/listanegra.git

2- Entre no diretorio criado

3- Crie o arquivo .env :

![Imagen com estrutura de arquivos onde aparece o .env](http://i.imgur.com/kaMngdy.png)  *duplicar o .env.example e renomear para .env*

3-Instalar dependencias via composer:
		No diretório criado.

    sudo composer install
    
4- Criar chave:	

    php artisan key:generate

5- Rodar comando para resetar banco:

    php artisan migrate:refresh --seed
6-Rodar o servidor e testar:

    php artisan serve


No termina:
![Tela do terminam com a saida dos comandos](http://i.imgur.com/ECtshVx.png?1)
![enter image description here](http://i.imgur.com/KYA2QwJ.png)


7- Acessar no navegador endereço `
[localhost:8000](http://localhost:8000)





