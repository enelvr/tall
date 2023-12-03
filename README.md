## Gestion de Portafolios en TALL
### Detalles
- Home
- Dashboard limpio
- Projectos [Listar, Crear, Editar, Eliminar, Filtrar por titulo].

### Documentación
- [Laravel](https://laravel.com/docs/10.x).
- [Livewire](https://livewire.laravel.com/docs).
- [Tailwincss](https://tailwindcss.com/).

## Instalación de Laravel 10 con Stack TALL

### Requisitos Previos

- "php": "^8.1",
- "Composer": "^2.3,
- "Node"

### instalación

- Clonar Repo
- Configurar la base de datos .env
- composer install
- npm install
- php artisan migrate:refresh -seed
- php artisan storage:link
- php artisan optimize



#### Data portafolio para demo "FACTORIES"

- php artisan db:seed --class=ProjectSeeder