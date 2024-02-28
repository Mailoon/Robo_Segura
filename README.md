# Vinci The Final SENA projetc

Título: Vinci - Descubre Arte, Encuentra Talentos

Slogan: "Donde el arte encuentra su voz, y los talentos su camino."

Propósito: Vinci es una plataforma web dedicada a potenciar la visibilidad y oportunidades para artistas emergentes. Nuestro propósito es proporcionar a los artistas un espacio donde puedan crear y mostrar sus portafolios de arte, conectándolos con reclutadores y profesionales de la industria que buscan talento fresco y prometedor.

Descripción: Vinci es mucho más que una simple plataforma de portafolios de arte en línea. Es un ecosistema dinámico donde los artistas pueden destacar sus obras más creativas y originales, y donde los reclutadores pueden descubrir y contactar talentos emergentes con facilidad. Nuestra plataforma está diseñada con un enfoque en la experiencia del usuario, brindando herramientas intuitivas y una interfaz fluida para navegar por el arte y las habilidades de los creadores.

Lenguaje de Programación: Vinci está desarrollado utilizando el framework Laravel junto con Inertia.js y Vue.js, lo que garantiza un desarrollo eficiente y robusto del lado del servidor y del cliente. Estas tecnologías nos permiten crear una experiencia de usuario moderna y receptiva.

Base de Datos: Utilizamos MySQL como base de datos principal para almacenar y gestionar la información de los usuarios, los portafolios de arte y las interacciones entre artistas y reclutadores. MySQL nos proporciona la escalabilidad y la fiabilidad necesarias para gestionar grandes volúmenes de datos de manera eficiente.

Con Vinci, estamos comprometidos a democratizar el acceso al mundo del arte, brindando a los artistas emergentes la oportunidad de ser descubiertos y a los reclutadores la posibilidad de encontrar nuevos talentos excepcionales. Únete a nosotros en este viaje para celebrar la creatividad y el talento en todas sus formas.

## instalation in local

- Laravel v10.44.0
- PHP v8.2.13
- Composer
- Node 20.11
- MySql

clone the project from Github:

https://github.com/j-segura/vinci_final_project.git

run next commands:

    - composer install
    - npm install

copy .env.example, delete .example

    - php artisan key:generate

create a data base called: vinci_db

    - php artisan migrate --seed
    - npm run dev
    - php artisan serve --host vinci.com

## Authentication

for these we use laravel breeze

video youtube: https://www.youtube.com/watch?v=C98LvIbPSf0

composer require laravel/breeze --dev

php artisan breeze:install

others config...

## Authenticarion using Laravel Socialite

documentation here: https://laravel.com/docs/10.x/socialite

its a pakage that allow us to intagrate our single sing on with diferents providers in this case we use Google

composer require laravel/socialite

