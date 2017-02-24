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
#User test mercadopago
<p>Cliente </p>
<p>"id" => 240378513</p>
<p>"nickname" => "TETE2512573"</p>
<p>"password" => "qatest1540"</p>
<p>"site_status" => "active"</p>
<p>"email" => "`test_user_65288166@testuser.com`"</p>
