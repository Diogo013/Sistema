# 🚀 Sistema PHP & MySQL

<p align="center">
  <img src="https://img.shields.io/badge/PHP-7.4%2B%20%7C%208.0%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Version">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
</p>

Sistema web desenvolvido em **PHP** com persistência em banco de dados **MySQL**, criado com o objetivo de gerenciar dados, automatizar processos e aplicar boas práticas de desenvolvimento web.

---

## 📋 Índice

- [Sobre o Projeto](#-sobre-o-projeto)
- [Funcionalidades](#-funcionalidades)
- [Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [Pré-requisitos](#-pré-requisitos)
- [Como Rodar o Projeto (Instalação)](#-como-rodar-o-projeto-instalação)
- [Estrutura de Pastas](#-estrutura-de-pastas)
- [Autor](#-autor)

---

## 💡 Sobre o Projeto

Este projeto foi desenvolvido com foco em estruturação de rotas, segurança em conexões com banco de dados utilizando **PDO** e uma interface limpa, responsiva e funcional.

---

## ⚙️ Funcionalidades

- [x] **CRUD Completo:** Cadastro, listagem, edição e exclusão de registros.
- [x] **Conexão Segura:** Utilização de PDO para evitar ataques de Injeção de SQL.
- [x] **Interface Responsiva:** Layout adaptado para diferentes tamanhos de tela.

---

## 🛠️ Tecnologias Utilizadas

As seguintes ferramentas e tecnologias foram usadas na construção do projeto:

* **PHP** - Linguagem de script backend.
* **MySQL** - Banco de dados relacional.
* **HTML5 / CSS3 / JavaScript** - Estrutura e estilização do front-end.
* **Git & GitHub** - Controle de versão.
* **XAMPP / WampServer** - Ambiente de servidor local.

---

## 🧰 Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina:
* Git
* Um servidor local que suporte PHP e MySQL (recomendo o **XAMPP**).

---
## 🚀 Como Rodar o Projeto (Instalação)

1. **Clone o repositório:**
   Abra o seu terminal e execute o comando abaixo:
   
       git clone https://github.com/Diogo013/Sistema.git

2. **Mova a pasta para o diretório do seu servidor local:**
   * Se estiver usando o **XAMPP** no Windows, mova a pasta clonada para dentro de `C:\xampp\htdocs\`.
   * Se estiver no Linux (`/opt/lampp/htdocs/`), ajuste as permissões conforme necessário.

3. **Inicie o Servidor:**
   * Abra o painel de controle do **XAMPP** e clique em **Start** nos módulos **Apache** e **MySQL**.

4. **Configure o Banco de Dados:**
   * Abra o seu navegador e acesse o [phpMyAdmin](http://localhost/phpmyadmin).
   * Crie um novo banco de dados com o mesmo nome do seu projeto.
   * Importe o arquivo `.sql` correspondente localizado na pasta do repositório.

5. **Configure a Conexão com o Banco:**
   * Abra o arquivo responsável pela conexão (por exemplo, `conexao.php`, `conexao_banco.php` ou `db.php`) no seu editor de código e ajuste as credenciais:
   
       $host = "localhost";
       $usuario = "root";
       $senha = "";
       $banco = "nome_do_banco";

6. **Acesse o Sistema:**
   * Abra o navegador de sua preferência e acesse o endereço do projeto:
     `http://localhost/Sistema/`

## 📁 Estrutura de Pastas

O projeto está organizado da seguinte forma:

    Sistema/
    │
    ├── assets/          # Arquivos estáticos (CSS, JavaScript, imagens)
    ├── database/        # Scripts SQL e arquivos de banco de dados
    ├── includes/        # Componentes reutilizáveis (conexão, cabeçalho, rodapé)
    ├── index.php        # Página principal e ponto de entrada
    └── README.md        # Documentação do repositório

## ✍️ Autor

Feito com 💻 por **Diogo Rodrigues**.  
Entre em contato ou acompanhe meus outros projetos:

* **GitHub:** [Diogo013](https://github.com/Diogo013)
* **Likedin:** [Diogo Rodrigues](https://www.linkedin.com/in/diogo-rodrigues-de-lima/)
