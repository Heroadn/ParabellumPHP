<head><link rel="stylesheet" href=""></head>

# Parabellum
  desenvolvido com o intuito de compreensão do funcionamento de um framework MVC

## Layout
 ```
├── app
│   ├── controller
│   │   └── IndexController.php
│   ├── core
│   │   ├── Application.php
│   │   ├── Assert.php
│   │   ├── Auth.php
│   │   ├── Controller.php
│   │   ├── Dao.php
│   │   ├── Db.php
│   │   ├── JWT.php
│   │   ├── Template.php
│   │   ├── Token.php
│   │   ├── Upload.php
│   │   └── View.php
│   ├── libs
│   │   ├── css
│   │   ├── img
│   │   ├── js
│   │   └── webfonts
│   ├── model
│   │   └── Usuarios.php
│   ├── template
│   │   ├── bootstrap
│   │   │   ├── Index.php
│   │   │   └── Nav.php
│   │   ├── config.php
│   │   └── Install
│   │       ├── index.php
│   │       └── Nav.php
│   └── view
│       ├── Index
│       │   └── Index.php
│       └── Install
│           ├── Controller_Model.php
│           ├── Controller.php
│           ├── Dao_Model.php
│           ├── Dao.php
│           ├── Template_Model.php
│           └── Template.php
├── AutoLoader.php
├── composer.json
├── config.php
└── index.php
  ```
   
## Config
configure o framework em config.php na raiz
rode o comando <code>composer install</code> na raiz do framework para criar arquivos de inicialização e instalar as libs necessarias]


