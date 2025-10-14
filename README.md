Sistema de Gestion de Comunidades

Pasos para desarrollo

1. Clonar repo
2. Ejecutar composer install
3. Iniciar contenedor de postgreSQL
    docker compose up -d

Comandos utiles en desarrollo


Listar migraciones:
symfony console doctrine:migrations:list    

Migrar:
symfony console doctrine:migrations:migrate

Cargar datos:
symfony console doctrine:fixtures:load

Consultar datos:
symfony console doctrine:query:sql 'select * from nombre_tabla'

Crear CRUD para entidades:
symfony console make:admin:crud

Limpiar cache:
php bin/console cache:clear