# INF_324_Primer_Parcial
Examen Primer Parcial INF-324

***Nota para base de datos***
Para hacer que funcione en otros equipos cambiar el host, user y password de las conexiones sql
Otro punto es que bd_asp.sql es el script sql para la base de datos Sql Server sumado a la consulta del ejercicio 4
Al igual que db_mysql.sql que es el script sql para la base de datos Mysql suamdo a la consulta del ejercicio 5.

***Version del Framework del Ejercicio 7***
Este ejercicio se hizo en la version de Framework 3.5, considerar en caso de pasar el proyecto a otro host.

***Notas para Ejercicio 7 Web Services***
El Windows Form consume con efectividad el Web Service, pero considerar que si en caso de ejecutar la aplicacion en otro
host, crear otro WebService pero con el codigo que esta dentro de WebService3 el cual es el que yo utilice para resolver el
ejercicio, dentro de WebService el fichero WebSite3/App_Code/Service.cs es donde contiene todas las operaciones de CRUD, en caso de que 
suceda esto eliminar del Windows Form el servicio de referencia y crear otro y este otro siendo el nuevo WebService con el 
codigo que esta en WebSite3/App_Code/Service.cs y nuevamente consumir el Web Service

