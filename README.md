
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


<h1 align="center">
  🚀️ API do GzDevs
</h1>

<p align="center">
  <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/SandroAlmeidaDev/GzDevs">

  <img alt="GitHub top language" src="https://img.shields.io/github/languages/top/SandroAlmeidaDev/GzDevs?logo=typescript">

  <img alt="GitHub repo size in bytes" src="https://img.shields.io/github/repo-size/SandroAlmeidaDev/GzDevs?color=green">

  <br>
</p>


# Indice

- :rocket: [Sobre o Projeto](#rocket-sobre-o-projeto)
- 👨‍💻️ [Tecnogias utilizadas](#%EF%B8%8F-tecnogias-utilizadas)
- 📦️ [Como utilizar o projeto](#%EF%B8%8F-como-utilizar-o-projeto)
- 🤔️ [Como contribuir](#%EF%B8%8F-como-contribuir)

---

## :rocket: Sobre o Projeto
Esse projeto é uma API no padrão RESTful para cadastro de desenvolvedores e seus hobbies.
---

## 👨‍💻️ Tecnogias utilizadas

O projeto foi desenvolvido utilizando as seguintes tecnologias:

- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)

### Padronização de código

  - :mouse: [Editor Config](https://editorconfig.org/)

### IDE

  - [Visual Studio Code](https://code.visualstudio.com/)

---

## 📦️ Como utilizar o projeto

Para copiar o projeto, utilize os comandos:

```bash
  # Clonar o repositório
  ❯ git clone https://github.com/SandroAlmeidaDev/GzDevs.git

  # Entrar no diretório
  ❯ cd GzDevs
```

### Banco de Dados

[Docker](https://www.docker.com/)

Depois de instalado o Docker, instale uma instancia do postgres:
```bash
docker run --name postgres -e POSTGRES_PASSWORD=docker -p 5432:5432 -d postgres
docker start postgres
```

### Migrations

Para instalar as dependências e iniciar o projeto, utilizar o composer:

**Utilizando composer**

```bash
  # Instalar as dependências
  ❯ composer install

  # Rodar migrations
   ❯ php artisan migrate
  # Iniciar o projeto
  ❯ php artisan serve
```

## 🤔️ Como contribuir

1. Faça o `fork` deste repositório
2. Crie uma branch com sua feature:
   - `$ git checkout -b minha_feature`
3. Confirme sua branch:
   - `$ git commit -m "feature: Meu novo recurso"`
4. Envie sua branch:
   - `$ git push origin minha_feature`

---

<h4 align="center">
  Feito com carinho <a href="mailto:sandro.almeida.silva17@gmail.com">Entre em contato!</a>
</h4>
<p align="center">
  <a href="https://www.linkedin.com/in/sandro-almeida-09664513a/">
    <img alt="Sandro Almeida da Silva" src="https://img.shields.io/badge/sandro-almeida-09664513a?style=flat&logoColor=white&logo=linkedin">
  <a href="https://twitter.com/jerpbtu">
    <img alt="Sandro Almeida da Silva" src="https://img.shields.io/twitter/follow/sanndro?style=flat&logoColor=white&logo=Twitter">
  </a>
</p>
