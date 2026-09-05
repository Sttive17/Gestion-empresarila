# Software de Gestión Empresarial

Proyecto de la asignatura Software de Gestión Empresarial - Cotecnova 2026.

---

## Requisitos

- Docker Desktop con WSL2 activado
- Git
- Visual Studio Code

---

## Clase 1 - Entorno con Docker

Clona el repositorio y levanta los contenedores:

```bash
git clone https://github.com/jamescanos/SoftwareGestionEmpresarial.git
cd SoftwareGestionEmpresarial
docker-compose up -d
```

Accesos:
- PHP/Apache: http://localhost:8080
- phpMyAdmin: http://localhost:8081 — usuario: `root`, contraseña: `root_password`
- Base de datos: host `db`, BD `seminario_db`

---

## Clase 2 - Instalación de Laravel

Se creó el proyecto Laravel en la carpeta `sge`:

```bash
composer create-project laravel/laravel sge
```

Para correr el servidor:

```bash
cd sge
php artisan serve
```

Disponible en http://127.0.0.1:8000.

> `vendor/` y `.env` están en `.gitignore` y no se suben al repositorio.

---

## Clase 3 - Base de datos y primera modificación

### Archivo .env

Contiene las variables de configuración del proyecto. No se sube al repositorio.

| Variable | Valor |
|---|---|
| APP_ENV | local |
| APP_DEBUG | true |
| APP_URL | http://localhost:8000 |
| DB_CONNECTION | sqlite |
| SESSION_DRIVER | database |

### Estructura del proyecto

```
sge/
├── app/          → lógica, modelos y controladores
├── config/       → configuraciones
├── database/     → migraciones
├── public/       → punto de entrada (index.php)
├── resources/    → vistas Blade, CSS, JS
├── routes/       → rutas de la aplicación
├── storage/      → logs y caché
└── tests/        → pruebas
```

### Flujo de una petición

```
Navegador → index.php → Router → Controller → Model → BD
                                                     ↓
                                              View (Blade) → Respuesta
```

### Migraciones ejecutadas

```bash
php artisan migrate
```

Tablas creadas: `users`, `sessions`, `cache`, `jobs`, `password_reset_tokens`

### Vista modificada

Se editó `resources/views/welcome.blade.php`:
- Título: `Bienvenidos al Seminario Laravel`
- Contenido modificado: `Este es nuestro primer proyecto con Laravel`

---

## Clase 4 - Autenticación y UI

En esta clase integramos autenticación completa e interfaz de usuario utilizando Laravel Breeze y Tailwind CSS para nuestra aplicación "Distribuidora Tecnológica".

### 1. Instalación de Laravel Breeze

Instalamos y publicamos el andamiaje de autenticación de Breeze:
```bash
composer require laravel/breeze --dev
php artisan breeze:install blade
npm install
npm run build
```

### 2. Creación del Usuario Administrador

Creamos el primer usuario administrador para poder acceder al sistema usando Tinker (`php artisan tinker`):
```php
$user = new \App\Models\User();
$user->name = 'Administrador';
$user->email = 'admin@distribuidora.com';
$user->password = bcrypt('password');
$user->save();
```

### 3. Personalización de UI (Tailwind CSS)

Realizamos las siguientes modificaciones para mejorar la estética del ERP:
- **Logo**: Se agregó el logo de "Distribuidora Tecnológica" en `public/img/logo.png`.
- **Login y Registro**: Se rediseñaron las vistas en `resources/views/auth/login.blade.php` y `register.blade.php` con un diseño moderno, íconos y sombras atractivas.
- **Layout Guest**: Se modificó `resources/views/layouts/guest.blade.php` para incluir un fondo degradado premium.
- **Dashboard**: En `resources/views/dashboard.blade.php` se implementó un mensaje de bienvenida dinámico y tarjetas (KPIs) para mostrar métricas clave como: Total de productos, Clientes, Ventas del día, y Bajo stock.
- **Layout App**: Se agregó un footer en `resources/views/layouts/app.blade.php` y en `navigation.blade.php` se personalizaron los enlaces del menú y el avatar del usuario.
- **Landing Page**: En `resources/views/welcome.blade.php` diseñamos un "Hero section" llamativo con botones claros para Iniciar Sesión y Crear Cuenta, mostrando los beneficios del sistema.

### 4. Protección de Rutas ERP

Protegimos las futuras rutas del ERP usando el middleware `auth` en `routes/web.php`:
```php
Route::middleware('auth')->group(function () {
    // Rutas protegidas (Productos, Categorías, Clientes, Ventas)
});
```