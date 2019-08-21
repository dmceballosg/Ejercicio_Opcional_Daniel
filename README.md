# Enunciado


Cree una aplicación web en php utilizando Laravel que permita realizar las siguientes acciones:

a. Acceder a la zona de inicio: para acceder a la zona de inicio se debe enviar por la URL el código:
A765. En caso de que el código sea válido se desplegarán 3 enlaces, el primero a “registrar
vehículos”, el segundo a “listar vehículos” y el tercero a “estadísticas vehículos”. En caso contrario
deberá desplegar un mensaje que diga zona prohibida.
b. Registrar vehículos: Cree un sistema que permita registrar tanto vehículos como dueños al mismo
tiempo. En un mismo formulario recoja todos los datos y registre los datos de las 2 tablas.
Nota: se recomienda registrar primero los datos de los dueños para evitar problemas de claves
foráneas inexistentes. Registre 2 vehículos y 2 dueños. Verifique únicamente que la marca sea
válida.
c. Listar vehículos: Liste todos los vehículos con los siguientes datos: placa y marca; para los
vehículos tipo Mazda muestre al lado de la placa un mensaje en verde que diga (“Los de Mazda
son los mejores”) y para los vehículos tipo Toyota muestra la placa en rojo y negrilla.
d. Estadísticas vehículos: Muestre cuántos vehículos de cada tipo existen registrados en el sistema
(por ejemplo: 3 Mazda, 2 Toyota, 0 Chevrolet).

# El proyecto contiene:

Dos controladores: Persona (Restricción de ingreso usando el código A765) y VehiculoController que contiene las funcionalidades de crear, listar y estadísticas de los vehículos.

Dos modelos: Persona y Vehículo. ambos relacionados con una relación de pertenencia uno a uno, y representan los datos del dueño y del vehículo.

Cuatro vistas: Zona de Inicio, registro de vehículos, listarVehiculos y estadísticas.

Como se indica en el enunciado, se accede con la url: http://localhost:8000/A765.

# Correr el proyecto:


1. Descargar el proyecto
2. Abrir el proyecto usando con un editor de código de su preferencia 
3. Modificar el archivo env.example por .env y configurarlo de acuerdo a su base de datos (usuario, contraseña, nombre de la base,         gestor de base de datos)
4. Crear una clave, usando el comando **php artisan key:generate** desde la terminal
5. Generar la migración para crear el esquema en la base de datos **php artisan migrate**
6. Iniciar el servidor con el comando **php artisan serve** en el terminal.
7. Ingresar al navegador, en la dirección que arroja la consola, generalmente: 127.0.0.1:8000 o localhost:8000
