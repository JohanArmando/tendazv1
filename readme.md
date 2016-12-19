#PASOS PARA INSTALAR DESDE CERO

1)Composer update
2)npm install
3)gulp --production
4)crear .env file
5)php artisan key:generate
4)luego copiar variables de el env.example al .env
6)reemplzar variables de base de datos e emails
7)php artisan migrate --seed
8)bower install