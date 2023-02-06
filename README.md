# Task_2_notebook
<p>Задание было выполнено с использованием программы Docker, необходимые действия для запуска:</p>

<b>cd src</b><br>
<b>composer install</b><br>
<b>cp .env.example .env</b><br>

<p>Отредактировать файл .env:</p>
DB_CONNECTION=mysql<br>
DB_HOST=mysql<br>
DB_PORT=3306<br>
DB_DATABASE=homestead<br>
DB_USERNAME=homestead<br>
DB_PASSWORD=secret<br><br>

<b>docker-compose build</b><br>
<b>docker-compose up -d</b><br>
<b>docker-compose exec php php /var/www/html/artisan key:generate</b><br>
<b>docker-compose exec php php /var/www/html/artisan optimize</b><br>
<b>docker-compose exec php php /var/www/html/artisan migrate</b><br>
<b>docker-compose exec php php /var/www/html/artisan storage:link</b><br>
<b>docker-compose exec php php /var/www/html/artisan db:seed</b><br>

И перейти: <b>http://localhost:8080/</b>

<h1>Само задание:</h1>

![image](https://user-images.githubusercontent.com/112812361/216950921-86ee3174-cb89-4fad-bd0e-6cc31910ada2.png)

<br>
<h1>Моя реализация:</h1>
<p>(для объектов сидирования все данные определяются рандомно, а фото обновляется при каждом новом запуске программы)</p>

![image](https://user-images.githubusercontent.com/112812361/216951280-af2dbb37-ffb9-420d-b244-a13fb5363cf0.png {width=140px})
![image](https://user-images.githubusercontent.com/112812361/216951410-a37a6189-6663-4dd1-8f4b-070ee9224f6e.png)
![image](https://user-images.githubusercontent.com/112812361/216952512-fcecb084-4a70-493e-a671-658c0d71867a.png)
![image](https://user-images.githubusercontent.com/112812361/217028077-9fc5706b-8115-4eeb-94f0-faa96c091374.png)


