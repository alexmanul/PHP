<?php
echo getenv('REMOTE_ADDR');
?>

<?php
define('ST_T', microtime());//начало

echo '<p>Контент страницы, скрипты и т.п.</p>';

printf('Страница сгенерирована за %.5f сек.', microtime()-ST_T);//конец
?>

