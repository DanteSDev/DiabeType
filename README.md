
Diabetype1

Este proyecto, es un proyecto personal, en donde se creó un programa, que me apoya y me ayuda con mi enfermedad, ya que padezco de Diabetes tipo l, al realizar este proyecto busque que fuera un recurso de mucho apoyo, que me ayude en general, para ver como voy en promedio en mis glucosas, que es lo que puedo mejorar, como puedo controlarme mejor con las glucosas que se introduzcan etc. 

La problemática que he yo he visto y he tenido recientemente, es que en lo personal ya estoy tan acostumbrada a mi rutina de chequeo a lo largo de estos 15 años con la enfermedad, que muchas veces no me pongo a analizar, que es todo lo que puedo hacer y ver para estar mucho mas controlada de lo que ya estoy, ya que para mi siempre lo primordial ha sido mi salud, pero siempre quiero mejorar y ver en que estoy fallando, al igual lo que veo mucho en la actualidad y en la sociedad, es que a gente no toma en cuenta su salud, y no la cuida, y es algo muy importante es algo de lo que vas a vivir y de la que dependes. 

Como yo ya estoy tan acostumbrada a mi rutina de la enfermedad, de chequeo, aplicación de insulina, dietas, etc. no me pongo a analizar que es en lo que puedo mejorar porque, así como hay días buenos en la enfermedad, hay días malos, para eso quiero crear el programa para ayudarme a mi misma, y la solución va a constar así. 

Este programa me dara la solución de poder ver como es que voy en promedio de mis glucosas, que es lo que tengo que mejorar conforme a los promedios que la aplicación me arroje, me permitira tener una sesión, poder registrarme, si es que aun no tengo mi usuario, me permitira introducir mis glucosas para poder hacer un calculo y yo vea un rango de como ando de controlada de mis glucosas, y al final poder cerra mi sesion y que la aplicacion sea segura para que mis datos no corran peligro.

Arquitectura de software

La arquitectura de software que se utilizo en esta aplicacion es la Modelo-vista-controlador.
Es el conocido MVC, que divide una aplicación interactiva en tres partes (modelo, vista, controlador) encargadas de contener la funcionalidad, mostrar la información al usuario y manejar su entrada, se crearon las vistas que es la parte gráfica el frontend, y se creo el controlador (usuariosController.php) donde se desarrollo el código que permite que haya un correcto funcionamiento del programa con su respectivo modelo.

Requerimientos: 

Servidor de la aplicación -> el servidor con el que cuenta la aplicación es de manera local se accede mediante el localhost que es: http://127.0.0.1:8000/login
Base de datos -> Cuenta con una base de datos (Diabetype) en MySQLWorkbench donde se manejan las siguientes tablas: Glucosas, migrations, promedios, usuarios.
Paquetes adicionales -> algunos de los paquetes adicionales que se integraron fueron el sweetalert, bootstrap, etc.

Para el desarrollo del codigo se uso el lenguaje PHP junto con Laravel Framework 8.37.0 y sus dependencias con composer, para poder desarrollar el frontend se utilizaron lenguajes como bootstrap, CSS, HTML. 

Instalación:

¿Cómo instalar el ambiente de desarrollo? no se necesita ninguna instalación,ya que esta aplicacion es con un servidor de manera local por lo cual se puede acceder mediante http://127.0.0.1:8000/login.

¿Cómo ejecutar pruebas manualmente? Para poder ejecutar pruebas manualmente simplemente se necesita accesar al programa seguir con los pasos que se hacen que es iniciar sesión, si no proceder a registrarte siguiendo las condicionales que se pusieron ej: si no aceptan un usuario con menos de 8 caracteres, etc.

¿Cómo implementar la solución en producción en un ambiente local o en la nube como Heroku? para poder implementar la solución o llevarla a cabo solo basta con acceder a la liga de la aplicación y hacer uso de ella. 

Configuración:

Configuración del producto (archivos de configuración) -> No se necesita ninguna configuración para poder instalar o llevar a cabo la aplicación, pero sin embargo para poder desarrollar la aplicación si se necesito conifgurar varias cosas para poder instalar el laravel mediante la terminal de la Mac, el composer, para poder instalar la base de datos MySQLWorkbench, etc.

Configuración de los requerimientos. Para la configuración de los requerimientos primero se necesito instalar Laravel Framework 8.37.0 con sus lineas de comando en la terminal de la mac, al igual se instalo mediante la terminal con sus comandos la depencia de PHP composer, se instalaron los comandos en la terminal para poder tener MySQL.

Uso:

Sección de referencia para usuario final. 
Manual que se hará referencia para usuarios finales -> Como es una aplicación que se desarrollo para uso personal, no hya un manual de referencia para usuarios finales, ya que la aplicación esta desarrollada de manera sencilla y amigable para el usuario, simplemente se necesita saber, que para un usuario que no cuenta con una sesión necesita registrase en la página mediante los lineamientos que vienen ahi mismo, de que tipo de caracteres acepta, de que lonigtud se requiere para la contraseña, usuario, etc. Todo viene especificado para el usuario mediante pantallas emergentes, avisos, etc. al.
Al entrar esta la pantalla inicial, con una barra de menu donde al seleccionarlo te lleva a las vistas, la primera es la de inicio donde da la bienvenida, la segunda la de captura donde capturas tus glucosas, y la ultima donde introduces las fechas de inicio y fin, para poder calcular el promedio de las glucosas en rango.

Sección de referencia para usuario administrador -> Para el usuario administrador no se cuenta con una sección de referncia ya que como lo comentaba es una aplicación personal y yo conozco como funciona exactamente ya que fue desarrollada por mi. 

Contribución:

Guía de contribución para usuarios
Debe contar con pasos específicos para clonar repositorio, crear un nuevo branch, enviar el pull request, esperar a hacer el merge.

Para poder realizar una correctara contribución se recomienda seguir todos los pasos siguientes
https://docs.qgis.org/3.10/es/docs/documentation_guidelines/first_contribution.html

Roadmap:

Requerimientos que se implementarán en un futuro -> Como es una aplicación muy sencilla y pequeña no muy laboriosa de uso personal no requiere que se implmente algo nuevo a futuro. 





