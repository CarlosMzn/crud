## Crud de usuarios básico con laravel 10.24.0

## Contenido
1. [Información general](#información-general)
2. [Tecnologías](#tecnologías)
3. [Instalación](#instalación)
4. [Manual de usuario](#manual-de-usuario)
### Información general
***
El siguiente proyecto es un CRUD de usuarios que implementa las siguientes funciones: 
- Create (Crear)
- Read (Leer)
- Update (Actualizar)
- Delete (Eliminar)
  
Los registros se despliegan sobre una lista que facilitan su visualizacion, búsqueda y manipulación
![Vista general del CRUD](https://drive.google.com/uc?export=view&id=1DzhZ0ebrKXemKw_JN8uZpaDdm15qQVDd)
## Tecnologías
***
Las tecnologías utilizadas en el proyecto fueron las siguientes:
* [Laravel](https://laravel.com/docs/10.x/releases): Versión 10.24.0
* [PHP](https://www.php.net/releases/8_1_17.php): Versión 8.1.17
* [Xampp](https://www.apachefriends.org/es/download.html): Versión 8.1.17-0
* [Composer](https://getcomposer.org/download/): Versión 2.6.3
* [Bootstrap](https://getbootstrap.com/docs/5.0/getting-started/introduction/): Versión 5.0.2
* [Fontawesome](https://fontawesome.com/v5/docs): Versión 5.10.0
* [Datatables](https://datatables.net/examples/styling/bootstrap5.html): Versión 2.6.3
  
## Instalación
***
1. Instalar Xampp, el instalador lo puedes encontrar [aquí](https://www.apachefriends.org/es/download.html)
2. Instalar Composer con la configuración predeterminada y elegir el comand-line de PHP, el instalador lo puedes encontrar [aquí](https://getcomposer.org/download/)
3. Clonar el repositorio en el directorio deseado
```
git clone git@github.com:CarlosMzn/crud.git
cd .\crud\
```
4. Una vez clonado el repositiorio, abrir el proyecto en VisualStudio y modificar el nombre del archivo **.env.example** por **.env**
5. Correr el siguiente comando para importar paquetes faltantes y crear la carpeta del vendor
```
composer install
```
6. Correr el siguiente comando para generar un **APP_KEY**
```
php artisan key:generate
```
7. Iniciar el servidor con el siguiente comando, por default lo inicializará en la dirección http://127.0.0.1:8000/
```
php artisan serve
```
8. Activar Xampp con los servicios de **Apache** y **MySQL** y dentro del gestor de base de datos de **phpMyAdmin** crear una base de datos llamada **users_crud**
![Creacion de la base de datos](https://drive.google.com/uc?export=view&id=1-udcrgI1schZajzWQghRJVlIy0eWBhuL)

9. En la consola correr las migraciones con el siguiente comando:
```
php artisan migrate
```
10. Una vez finalizada la migración podrás visualizar el CRUD en la dirección **http://127.0.0.1:8000/**
![Vista inicial del CRUD](https://drive.google.com/uc?export=view&id=1_FKnDgokkyjUtBNauNQRgVqMzCcd3x7v)

11. Si asi lo deseas, puedes poblar la base de datos con el siguiente **seed**, es cual registrará usuarios con datos generados de forma aleatoria
```
php artisan db:seed --class=UserSeeder
```
![Vista inicial del CRUD con datos](https://drive.google.com/uc?export=view&id=10Gsq0ag0U4ciuOaWVuTAeqnaB5dOWZxW)


## Manual de usuario
***
### Agregar usuario
1. Presionar el botón de **Agregar usuario**
![Agregar usuario](https://drive.google.com/uc?export=view&id=1hvUMtxU-S3t81k1SnPCdwtaWxee1_aPy)
2. El boton te llevará a una vista con un formulario, el cual deberás de llenar con las instrucciones indicadas
![Agregar usuario form](https://drive.google.com/uc?export=view&id=1WMTjdVMhnn3xMcefIXU4uIIuzb_gCLCr)
3. Una vez llenado el formulario presionamos el botón de guardar
![Agregar usuario form](https://drive.google.com/uc?export=view&id=1RMU1PnoML2JbTdseUg35ud6v9knz0Noy)
4. El sistema nos redigirá a la pantalla principal con un mensaje de éxito y el nuevo usuario agregado
![Usuario agregado](https://drive.google.com/uc?export=view&id=1Fiwsytq50qtlzTETsgG3FDS1MZWoBaw2)

### Editar usuario
1. Presionar el botón de **Editar usuario** que se encuentra en la columna editar sobre el usuario que quieras editar
![Editar usuario](https://drive.google.com/uc?export=view&id=1ol1-BvOBJtMJpQetPXn5bdELsSw1mn7c)
2. El boton te llevará a una vista con un formulario, en el cual podrás modificar los campos que desees
![Editar usuario form](https://drive.google.com/uc?export=view&id=1s-_UxDzzwP5BCxaqH_y2MxduhbPuYl9p)
3. Una vez llenado el formulario presionamos el botón de actualizar
![Agregar usuario form](https://drive.google.com/uc?export=view&id=11ICBOLD62UbkDjKSxgQZa_xm3e-6zYba)
4. El sistema nos redigirá a la pantalla principal con un mensaje de éxito y el usuario actualizado
![Usuario agregado](https://drive.google.com/uc?export=view&id=1RA0OLXVQwy1jtbvBRvx4SKiuYvK2bQUf)

### Eliminar usuario
1. Presionar el botón de **Eliminar usuario** que se encuentra en la columna eliminar sobre el usuario que quieras eliminar
![Eliminar usuario](https://drive.google.com/uc?export=view&id=1v13K8naj98EJpAhZIZL3Iv5vnJPvl2nf)
2. El boton te llevará a una vista de confirmacion, en la cual decidirás si quieres eliminar el usuario
![Editar usuario form](https://drive.google.com/uc?export=view&id=19HSiviMspY2bgEu4pd2OAegmh8N_Du6F)
3. Presionar el botón de eliminar
![Agregar usuario form](https://drive.google.com/uc?export=view&id=1dMQQiOzK_rt-GYNcg3oMs8Ax1w9KbKzV)
4. El sistema nos redigirá a la pantalla principal con un mensaje de éxito y el usuario eliminado
![Usuario agregado](https://drive.google.com/uc?export=view&id=1HWnyNNhblbuldwmq8YweFIn9fs-EJrYO)
