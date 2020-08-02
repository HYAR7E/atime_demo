# ATIME DEMO

### Instalacion
Pasos para la correcta instalación y ejecución del proyecto.
Ejecutar los siguientes pasos desde una interfaz de linea de comandos

1. Obtener codigo del proyecto
    ```
    git clone https://github.com/HYAR7E/atime_demo
    ```
2. Instalar dependencias del proyecto
    ```
    composer install
    npm install
    ```
3. Iniciar el servicio de base de datos "mysql"
    Ejemplo en linux:
    ```
    sudo service mysql start
    ```
4. Iniciar el proyecto
    Ejemplo en linux:
    ```
    php artisan serve &; npm start;
    ```
5. Abrir la pagina web: en un navegador web ingrese a la dirección **127.0.0.1:8000**
