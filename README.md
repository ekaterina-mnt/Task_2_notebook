# Task_2_notebook
<p>Задание было выполнено с использованием программы Docker, необходимые действия для запуска:</p>

<p><b>cd src</b></p>
<p><b>compose install</b></p>
<p><b>cp .env.example .env</b></p>

<p>Отредактировать файл .env:</p>
DB_CONNECTION=mysql<br>
DB_HOST=mysql //<br>
DB_PORT=3306<br>
DB_DATABASE=homestead //<br>
DB_USERNAME=homestead //<br>
DB_PASSWORD=secret //<br>

<p><b>docker-compose build</b></p>
<p><b>docker-compose up -d</b></p>
<p><b>docker-compose exec php php /var/www/html/artisan key:generate</b></p>
<p><b>docker-compose exec php php /var/www/html/artisan migrate</b></p>
<p><b>docker-compose exec php php /var/www/html/artisan optimize</b></p>
<p><b>docker-compose exec php php /var/www/html/artisan db:seed</b></p>

И перейти: <b>http://localhost:8080/</b>

<h1>Само задание:</h1>

![image](https://user-images.githubusercontent.com/112812361/216949640-c8017fd3-24f1-4c98-aca6-00403c63c530.png)

<br>
<h1>Моя реализация:</h1>
<p>(фото загружается рандомно при каждом новом запуске программы)</p>
