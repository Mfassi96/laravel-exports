# ***Exportando datos a una hoja de calculo con Laravel*** 📗

## 1.  Crear la conexion a la Base de datos
Cambiar el nombre del archivo **.env.example** a **.env** y cambiar los datos de conexion a la base de datos
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

## 2.  Crear las migraciones
  ```
php artisan migrate
```


## 4. Cargar datos con Factory y Sedeer

   ```
   php artisan db:seed
   ```
## 5. Instalar la biblioteca/libreria
   [phpspreadsheet](https://packagist.org/packages/phpoffice/phpspreadsheet) 
## 6 Ejecutar el servidor 
```
php artisan serve
```
