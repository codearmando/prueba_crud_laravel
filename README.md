Pasos para ejecutar el crud en laravel:
1. debe tener Instalado la ultima version de xampp (8.2.12)
2. Instalar composer. Al instalar composer se le va a solicitar seleccionar el xampp donde desea instalar composer, una vez seleccionado continua con la instalacion
3. compruebe si tiene instalado composer con el comando composer -v
4. alojar el proyecto en la carpeta htdoc de xampp
5. instalar postgre version 14 o 15
6. conexion a la bd: debe tener la contraseña del 1 al 7 "1234567"
7. Crear un archivo ".env" en la raiz del proyecto , es decir dentro de la carpeta del proyecto y copiar todo el codigo del archivo ".env.example" al archivo ".env" creado
8. la base de datos de datos debe tener como nombre "productos"
9. ultimos pasos: ejecutar el comando "php artisan migrate" para migrar las tablas creadas que tiene el proyecto
10. luego acceder a la carpeta del proyecto : C:\xampp\htdocs\Productos_crud y ejecutar el comando "php artisan serve"
11. una vez ejecutado este ultimmo comando podra tener acceso al aplicativo e interactuar con el mismo
