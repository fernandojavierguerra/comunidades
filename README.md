## Sistema de Gestion de Comunidades

### Pasos para desarrollo

1. Clonar repo
2. Ejecutar ```composer install```
3. Iniciar contenedor de postgreSQL
   ```docker compose up -d```

## Comandos utiles en desarrollo

### Crear entidad:
```symfony console make:entity```


### Crear CRUD para entidades:
```symfony console make:admin:crud```

### Generar migraciones:
```symfony console make:migration```

### Listar migraciones:
```symfony console doctrine:migrations:list```    

### Migrar:
```symfony console doctrine:migrations:migrate```

### Marcar migraciones como no realizadas:
```symfony console doctrine:migrations:version --delete --all```

### Marcar migracion como realizada:
```php bin/console doctrine:migrations:version YYYYMMDDHHMMSS --add```

### Cargar datos:
```symfony console doctrine:fixtures:load```

### Consultar datos:
```symfony console doctrine:query:sql 'select * from nombre_tabla'```

### Limpiar cache:
```php bin/console cache:clear```

### Variables en tiempo de ejecucion
```symfony var:export --multiline```
