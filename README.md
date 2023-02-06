# Task_2_notebook
<p>Задание было выполнено с использованием программы Docker, необходимые действия для запуска:</p>

<b>cd src</b><br>
<b>compose install</b><br>
<b>cp .env.example .env</b><br>

<p>Отредактировать файл .env:</p>
DB_CONNECTION=mysql<br>
DB_HOST=mysql //<br>
DB_PORT=3306<br>
DB_DATABASE=homestead //<br>
DB_USERNAME=homestead //<br>
DB_PASSWORD=secret //<br><br>

<b>docker-compose build</b><br>
<b>docker-compose up -d</b><br>
<b>docker-compose exec php php /var/www/html/artisan key:generate</b><br>
<b>docker-compose exec php php /var/www/html/artisan migrate</b><br>
<b>docker-compose exec php php /var/www/html/artisan optimize</b><br>
<b>docker-compose exec php php /var/www/html/artisan db:seed</b><br>

И перейти: <b>http://localhost:8080/</b>

<h1>Само задание:</h1>

![image](https://user-images.githubusercontent.com/112812361/216949947-1d4565e5-540a-4835-8970-2789a2bbd855.png)

<br>
<h1>Моя реализация:</h1>
<p>(фото загружается рандомно при каждом новом запуске программы)</p>
