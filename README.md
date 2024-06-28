<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requisitos Previos
- PHP `^8.0`
- Laravel `^8.0`
- Postgres `^16.3`

## Instalación y Configuración

 *Clonar el Repositorio:*
    ```bash
    git clone https://github.com/MalcoV1999/pruebalaravel.git
    ```
 *Instalar Dependencias de Composer:*
   ```bash
   composer install
   ```
 *Configurar el Archivo de Entorno:*
   - Copiar .env.example a .env
     ```bash
     cp .env.example .env
     ```
   - Editar .env con las configuraciones adecuadas

 *Generar Clave de Aplicación:*
   ```bash
   php artisan key:generate
   ```

## Información Adicional

- *Migraciones y Seeders:*
  - Ejecutar migraciones:
    ```bash
    php artisan migrate
    ```
  - Ejecutar seeders (si están disponibles):
    ```bash
    php artisan db:seed
    ```

