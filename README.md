# Device Activation System

Um sistema simples e eficiente para pareamento de dispositivos (ex: TV e Smartphone) via código numérico, desenvolvido em PHP.

## 📋 Sobre o Projeto

Este projeto simula um fluxo de "segunda tela" onde um dispositivo principal (Host) exibe um código de ativação e um dispositivo secundário (Cliente) insere esse código para estabelecer uma conexão. É ideal para cenários de autenticação de Smart TVs, painéis digitais ou quiosques.

### Funcionalidades
* **Geração de Código:** Criação automática de códigos numéricos aleatórios na tela principal.
* **Pareamento Seguro:** Validação do código no servidor com verificação de status.
* **Interface Responsiva:** Design moderno com *glassmorphism* e gradientes, adaptável a diferentes tamanhos de tela.
* **Feedback Visual:** Redirecionamento automático após conexão bem-sucedida.

## 🚀 Tecnologias Utilizadas

* **PHP 7.4+**
* **MySQL / MariaDB**
* **PDO** (PHP Data Objects) para segurança no banco de dados
* **HTML5 & CSS3**

## ⚙️ Instalação e Configuração

### 1. Banco de Dados
Crie um banco de dados MySQL e execute o seguinte script SQL para criar a tabela necessária:

```sql
CREATE TABLE device_codes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code INT NOT NULL,
    status VARCHAR(20) DEFAULT 'pending', -- Status inicial obrigatório
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
