## tarea Nº 4 de ayudantia ISW

Se trata de un sistema de administracion de bases de datos que contempla el manejo de las tablas Bodega y Producto en el motor de bases de datos PostgresSQL.

## INSTALACION

Debe descargar todo el contenido del repositorio.


Para el correcto funcionamiento del sistema se necesitan los requisitos mínimos del framework laravel en conjunto con el motor de bases de datos PostgresSql, el cual puede correr en apache2 o un servidor similar.


Dadas las características del sistema, y dependiendo del sistema donde se va a correr, se necesitan permisos de administrador para algunos archivos, principalmente la carpeta vendor.


Si su sistema esta basado en UNIX, debe dar permisos de escritura, lectura y ejecucion a la carpeta vendor de la siguiente manera (varía dependiendo de los usuarios existentes en su alojamiento).


sudo chmod 777 -R /carpeta/de/alojamiento/en/su/equipo/ayudantiafinal/vendor


Abra el archivo database.php con su editor de textos a través de un superusuario (solo si el framework quedó alojado en un fichero donde necesite tales permisos), la ruta de este archivo es ayudantiafinal/app/config/database.php, donde modificando las siguientes líneas:

línea 29: 'default' => 'pgsql',

línea 66 en adelante: 
'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'ayudantia',
			'username' => 'usuario',
			'password' => 'contraseña',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),

En las últimas líneas reemplazará 'usuario' por un usuario que tenga configurado con permisos de creacion y modificación de la base de datos, asimismo 'contraseña', por la contraseña de este usuario.

En este punto tiene dos alternativas para correr la base de datos, una es a través de los comandos artisan que pertenecen al framework, y la otra es a través del scrip sql denominado 'tarea ayudantia.sql'

En el primer caso, creará una base de datos llamada ayudantia en el gestor postgresql, se ubicará a través de consola en la carpeta donde se aloja el proyecto, y correrá los siguientes comandos:

php artisan migrate:install
php artisan migrate

Por otro lado puede ejecutar directamente a traves de postgresql el script, sin la necesidad de crear la base de datos con antelación.

Ahora ejecutará el siguiente comando, para el correcto funcionamiento de la lógica del framework:

php artisan serve

Lo que le proveerá de un servidor de desarrollo en la url:localhost:8000, y es donde correrá la aplicación.

## utilización

Para comprobar el correcto funcionamiento, abra su navegador en la url antes mencionada y verá el inicio de la aplicación.

## rutas

Las rutas principales de la aplicación son: 

'/' (ruta vacía que lo llevará al controlador BodegaController)

'/bodega' (ruta principal del controlador BodegaController)

'/producto' (ruta principal del controlador ProductoController)

## Funcionamiento

Con las rutas antes mencionadas accederá a los dos controladores en uso del sistema.

El controlador BodegaController.php es un controlador RESTfull para el manejo de los datos de las bodegas, mientras el controlador ProductoController.php es un controlador RESTfull de la tabla productos, ambos heredan sus atributos de BaseController que es uno de los controladores nativos del framework.

La lógica de la base de datos es manejada por los modelos Bodega.php y Producto.php respectivamente, los cuales integran la herencia de Elocuent (clase nativa de Laravel para el manejo de tablas). Es en estos modelos donde el framework se relaciona con las tablas.


Para más información visite la documentación oficial de Laravel.





## Laravel PHP Framework

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
