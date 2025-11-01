# 🐘 Práctica: Arrays en PHP  

**Descripción**: Conjunto de ejercicios prácticos para aprender a crear, modificar y trabajar con arrays en PHP.  
La práctica está dividida en niveles de dificultad y cubre desde el uso básico de arrays hasta funciones avanzadas como `array_map()`, `array_filter()` y `array_reduce()`.

---

## 🛠 Tecnologías  
- **Lenguaje**: PHP  
- **Entorno**: XAMPP / Apache  
- **Editor recomendado**: Visual Studio Code o PHPStorm  

---

## 🚀 Instalación  
1. Clonar el repositorio:  
   ```bash
   git clone https://github.com/usuario/practica-arrays-php.git

   
2. Colocar los archivos dentro de la carpeta htdocs de XAMPP.

3. Abrir el navegador y acceder a: http://localhost/practica-arrays-php/


Cada ejercicio puede ejecutarse por separado (ejercici1.php, ejercici2.php, etc.).

🟢 Nivel 1
🧩 Ejercicio 1

Objetivo: Crear un array con 5 números enteros y mostrarlos uno por uno en pantalla.
Conceptos: Creación de arrays, bucle foreach, salida con echo.

🧩 Ejercicio 2

Objetivo: Trabajar con arrays indexados y comprender cómo gestionar su tamaño e índices.
Pasos:

Crear un array con 6 elementos.

Mostrar el número total de elementos (count()).

Eliminar un elemento array_pop().

Comprobar que los índices estén normalizados (array_values()).

Mostrar el tamaño y contenido final del array.

Conceptos: count(), array_pop, array_values(), print_r().

🧩 Ejercicio 3

Objetivo:
Crear una función que reciba un array de palabras y un carácter, y devuelva true si todas las palabras del array contienen ese carácter.

Descripción:
En este ejercicio se define una función llamada IsCharacter() que recorre un array de palabras y verifica si cada palabra contiene el carácter indicado.

Si todas las palabras lo contienen, devuelve true.

Si alguna no lo contiene, devuelve false.

La comprobación se realiza con la función str_contains() y se ignora si el carácter está en mayúscula o minúscula usando strtolower().


🧩 Ejercicio 4

Objetivo:
Crear un array asociativo que represente información personal.

Descripción:
Se construye un array con claves descriptivas y valores correspondientes, representando datos personales del usuario.