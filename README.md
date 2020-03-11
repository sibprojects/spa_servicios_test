# spa_servicios_test

How to test:

1. Download package
2. Setup your db access in file: .env 
3. In the root folder run command: php artisan migrate
4. Import spa.sql file in your db (use PhpMyAdmin ex.)
5. Setup root folder of your web server to /public/

Use this api commands:

- get all services:
http://yourdomain.com/api/spa/services

- get all services translated by language iso3:
http://yourdomain.com/api/spa/services/[lngIso3]
Ex.1: http://yourdomain.com/api/spa/services/eng
Ex.2: http://yourdomain.com/api/spa/services/rus

- get horarios
http://yourdomain.com/api/spa/services/horario/[date_from]-[date_to]

where dates in format dd.mm.YYYY, ex. 22.03.2020-25.03.2020,
Ex: http://yourdomain.com/api/spa/services/horario/22.03.2020-25.03.2020

- get reservas
http://yourdomain.com/api/spa/services/reserva

- add new reserva
http://yourdomain.com/api/spa/services/reserva/create
use method post and array(

    'service_id' => integer,
    
    'nombre' => string,
    
    'commentarios' => string,
    
    'dia' => date (YYYY-MM-DD),
    
    'hora' => integer,    
)

