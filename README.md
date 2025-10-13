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
