# CRUD 3C - Gerenciamento de Usuários

Aplicação CRUD (Create, Read, Update e Delete) desenvolvida para praticar a comunicação entre **frontend e backend separados**, utilizando uma arquitetura baseada em API REST e containers Docker.

O projeto possui um frontend responsável pela interface do usuário e um backend responsável pelas regras de negócio e persistência dos dados.

---

## 🚀 Tecnologias utilizadas

### Frontend

- JavaScript (ES Modules)
- Vite
- HTML5
- CSS3
- Bootstrap
- Fetch API

### Backend

- API REST
- Docker
- Banco de dados (configurado no backend)

### Infraestrutura

- Docker
- Docker Compose
- Containers separados para frontend e backend

---

## 📌 Funcionalidades

- ✅ Criar usuários
- ✅ Listar usuários
- ✅ Editar usuários
- ✅ Atualização completa (PUT)
- ✅ Atualização parcial (PATCH)
- ✅ Excluir usuários
- ✅ Validação de erros
- ✅ Comunicação via API REST

---

## 🏗️ Arquitetura do projeto

A aplicação é dividida em dois serviços independentes:

```
crud-3c/
│
├── frontend/
│   ├── Interface da aplicação
│   ├── Vite
│   └── Comunicação com API
│
├── backend/
│   ├── API REST
│   └── Regras de negócio
│
└── compose.yaml
```

Fluxo da aplicação:

```
Usuário
   |
   v
Frontend (Vite)
   |
   | HTTP Requests
   |
   v
Backend (API)
   |
   v
Banco de dados
```

---

# 🐳 Executando com Docker

## Pré-requisitos

Tenha instalado:

- Docker
- Docker Compose

Verifique:

```bash
docker --version
docker compose version
```

---

## Clonar o projeto

```bash
git clone <URL_DO_REPOSITORIO>

cd crud-3c
```

---

## Subir os containers

Na raiz do projeto:

```bash
docker compose up --build
```

Ou em segundo plano:

```bash
docker compose up -d --build
```

O Docker irá criar:

- Container do frontend
- Container do backend
- Rede interna entre os serviços

---

## Acessar a aplicação

Frontend:

```
http://localhost:8080
```

Backend:

```
http://localhost:8000
```

---

# 🔧 Configuração da API

O frontend utiliza uma variável para definir o endereço da API.

Arquivo:

```
frontend/.env
```

Exemplo:

```env
VITE_API_URL=http://localhost:8000/api/users
```

Em uma rede local:

```env
VITE_API_URL=http://192.168.1.X:8000/api/users
```

---

# 📂 Estrutura do Frontend

```
frontend/
│
├── src/
│   ├── app.js
│   └── styles/
│       ├── reset.css
│       └── style.css
│
├── scripts/
│   ├── api/
│   │   ├── create.js
│   │   ├── delete.js
│   │   ├── read.js
│   │   └── update.js
│   │
│   └── dom/
│       └── render.js
│
├── Dockerfile
└── package.json
```

---

# 🧩 Endpoints utilizados

Exemplo:

| Método | Endpoint          | Descrição           |
| ------ | ----------------- | ------------------- |
| GET    | `/api/users`      | Lista usuários      |
| POST   | `/api/users`      | Cria usuário        |
| PUT    | `/api/users/{id}` | Atualiza usuário    |
| PATCH  | `/api/users/{id}` | Atualização parcial |
| DELETE | `/api/users/{id}` | Remove usuário      |

---

# 🧠 Objetivos do projeto

Este projeto foi desenvolvido com foco em:

- Aprender consumo de APIs REST;
- Separação entre frontend e backend;
- Organização de código JavaScript;
- Uso de Docker para ambientes isolados;
- Comunicação entre containers;
- Boas práticas de desenvolvimento.

---

# 📌 Próximas melhorias

- [ ] Autenticação de usuários
- [ ] Melhor tratamento de loading
- [ ] Testes automatizados
- [ ] CI/CD
- [ ] Deploy em servidor
- [ ] Nginx como proxy reverso
- [ ] Melhor gerenciamento de variáveis de ambiente

---

## Autor

Desenvolvido por **Felipe Domareski**.

Projeto criado para estudos e evolução em desenvolvimento web.
