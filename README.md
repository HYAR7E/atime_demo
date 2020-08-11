# ATIME DEMO

### DEMO ONLINE
Un demo online se estará hosteando entre los días 10 y 12 de Agosto del 2020.<br>
Se hará uso de la aplicación **ngrok** para tunelar el sistema a travez de internet. <br>
Para acceder al demo ingrese a la siguiente dirección: http://06b7c1bbacc5.ngrok.io <br>
**El link anterior es dinámico y será actualizado a medida que cambie** (periodos de 12 horas aprox.)

### Instalacion
Pasos para la correcta instalación y ejecución del proyecto.
Ejecutar los siguientes pasos desde una interfaz de linea de comandos
Como requisitos se debe tener instalado los siguientes programas:
- git
- php v.7.2 +
- gestor de DB SQL v.14 + (mysql, workbench, etc)


1. Obtener codigo del proyecto
    crear e ingresar a la carpeta donde se desee alojar el proyecto
    ```
    git init
    git clone https://github.com/HYAR7E/atime_demo
    ```
2. Instalar dependencias del proyecto
    ```
    php composer.phar install
    ```
3. Iniciar el servicio de base de datos "mysql"
    Ejemplo en linux:
    ```
    sudo service mysql start
    ```
4. Iniciar el proyecto
    ```
    php artisan serve
    ```
5. Abrir la pagina web: en un navegador web ingrese a la dirección **127.0.0.1:8000**

6. Ingresar al sistema. Por defecto hay 3 cuentas *testing*
    Administrador: test123@test123 | test123test123
    Docente: teacher123@teacher123 | teacher123teacher123
    Alumno: student123@student123 | student123student123
