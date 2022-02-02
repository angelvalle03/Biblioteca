# Biblioteca
solucion a prueba técnica 
El entorno de desarrollo de esta solucion fue implementado con
-Laravel 8
-Vue.js
-Visual studio code
-xampp
-Base de datos mysql

PASOS PARA EJECUTAR LA APP CORRECTAMENTE

-Clone el repositorio

-Vaya a la consola y la ruta de la carpeta donde clono el repositorio e ingrese lo siguiente

-composer install

luego

-npm install

luego

-abrir la carpeta y duplicar el archivo .env.example
crear un nuevo archivo .env y pegar lo que se copio de .env.example e incluir los datos de conexion a la base de datos
	 
luego

-en la consola de comandos en la ruta de la carpeta generar una clave para generarla en el .env de la siguiente forma

-php artisan key:generate
		 
Luego

-Despues de haber generado la clave pasamos a ejecutar las migraciones

-php artisan migrate o php artisan migrate:fresh en caso de crear nuevas migraciones
