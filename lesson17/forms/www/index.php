<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Forms</title>
		<style type="text/css">
   			li { list-style-type: none}
   			#about li {margin: 15px 0}
   			ul {padding: 0; margin: 0}
   			fieldset {margin: 20px 0}
   			select {width: 165px}
   			span {display: block;}
   			.error {
   				color: red;
   				display: inline;
   			}
   			#position {margin-bottom: 18px}
   			#small {font-size: 12px}
   			.book-num {margin-bottom: 18px}
 		</style>
	</head>
	<body>
		<header>
			<h1>
				Урок "Формы": теги и их атрибуты.
			</h1>
			<h2>
				Расскажите немного о себе...
			</h2>
			<p>
				Попробуйте создать аналогичную форму. Для целей демонстрации вполне подойдут и вымышленые.
			</p>
		</header>
		<main>
			<form action="form_send.php" name="MyForm" method="POST">
		        <fieldset id="about">
		            <legend><b>Коротко о себе</b></legend>
		            <ul>
		                <li>
		                    <label for="name">Имя: </label>
		                    <input id="name" type="text" name="name" value="<?=$_SESSION["name"]?>" size="30">
		                    <span class="error"><?=$error_name?></span>
		                </li>
		                <li>
		                    <label for="surname">Фамилия: </label>
		                    <input id="surname" type="text" name="surname" value="<?=$_SESSION["surname"]?>" size="30">
		                    <span class="error"><?=$error_surname?></span>
		                </li>
		                <li>
		                    Пол: <input id="sex" type="radio" name="sex" value="male">мужской
		                    <input type="radio" name="sex" value="female">женский
		                </li>
		                <li>
		                    <label for="age">Возраст: </label>
		                    <input id="age" type="text" name="age" value="<?=$_SESSION["age"]?>" size="3"> лет
		                </li>
		            </ul>
		        </fieldset>
		        <fieldset>
		            <legend><b>Подробнее о себе</b></legend>
		            <ul id="small">
		                <li>
		                    <input type="radio" name="friend" value="friend">Молодой человек
		                </li>
		                <li>
		                    <input type="radio" name="friend" value="girlfriend">Девушка
		                </li>
		                <li>
		                    <input id="born" type="text" name="born" value="<?=$_SESSION["born"]?>" size="15">
		                    <label for="born">Дата рождения</label>
		                </li>
		                <li>
		                    <input id="status" type="text" name="status" value="<?=$_SESSION["status"]?>" size="15">
		                    <label for="status">Семейное положение</label>
		                </li>
		                <li>
		                    <input id="soc" type="text" name="soc" value="<?=$_SESSION["soc"]?>" size="15">
		                    <label for="soc">Социальный статус</label>
		                </li>
		                <li>
		                    <input id="from" type="text" name="from" value="<?=$_SESSION["from"]?>" size="15">
		                    <label for="from">Местожительство</label>
		                </li>
		            </ul>
		            <p>
		                <b>Что вы обычно делаете на выходных:</b>
		            </p>
		            <ul>
		                <li>
		                    <input id="sleep" type="checkbox" name="hobby[]" value="hobby1">
		                    <label for="sleep">Сплю</label>
		                </li>
		                <li>
		                    <input id="walking" type="checkbox" name="hobby[]" value="hobby2">
		                    <label for="walking">Гуляю с друзьями</label>
		                </li>
		                <li>
		                    <input id="fishing" type="checkbox" name="hobby[]" value="hobby3">
		                    <label for="fishing">Хожу на рыбалку</label>
		                </li>
		                <li>
		                    <input id="games" type="checkbox" name="hobby[]" value="hobby4">
		                    <label for="games">Играю в игры</label>
		                </li>
		            </ul>
		            <span>Рассказать о формах в книгах, посвященной HTML:</span>
		            <select id="book" name="book">
		                <option disabled selected>Site frequency:</option>
		                <option value="action">ACTION</option>
		                <option value="method">METHOD</option>
		                <option value="enctype">ENCTYPE</option>
		            </select>
		            <span>Сколько книг вы прочитали за свою жизнь:</span>
		            <ul class="books">
		                <li>
		                    <input type="radio" name="books_num" value="1">0-10
		                </li>
		                <li>
		                    <input type="radio" name="books_num" value="2">11-20
		                </li>
		                <li>
		                    <input type="radio" name="books_num" value="3">21-50
		                </li>
		                <li>
		                    <input type="radio" name="books_num" value="4">50+
		                </li>
		            </ul>
		            <ul class="books">
		                <li>
		                    <span>Ваши коментарии:</span>
		                    <textarea id="comments" rows="10" cols="55" name="comments"><?=$_SESSION["comments"]?></textarea>
		                </li>
		            </ul>
		            <select id="position" name="position" size="3">
		                <option value="first">Первая позиция</option>
		                <option value="second" selected>Вторая позиция</option>
		                <option value="third">Третья позиция</option>
		            </select>
		        </fieldset>
		        <fieldset>
		            <legend><b>И в заключении</b></legend>
		            <input class="book" type="text" name="pole" value="Это поле было введено до вас" disabled size="30">
		            <ul class="book">
		                <li>
		                    <label for="email"><b>Email:</b><br></label>
		                    <input id="email" type="email" name="email" value="<?=$_SESSION["email"]?>" size="30">
		                    <span class="error"><?=$error_email?></span>
		                </li>
		            </ul>
		            <p>
		                <b>Хотите подписаться на самую модную рассылку спама?</b><br><i>Выберите категории</i>
		            </p>
		            <ul>
		                <li>
		                    <input type="checkbox" name="spam[]" value="spam1">Обрудование
		                </li>
		                <li>
		                    <input type="checkbox" name="spam[]" value="spam2">Как приготить обеды
		                </li>
		                <li>
		                    <input type="checkbox" name="spam[]" value="spam3">Заработай миллион за два дня
		                </li>
		            </ul>
		            <p>
		                <b>На сколько сложная задача:</b>
		            </p>
		            <ul>
		                <li>
		                    <input type="radio" name="quest" value="quest1">Совсем нет
		                </li>
		                <li>
		                    <input type="radio" name="quest" value="quest2">Так себе
		                </li>
		                <li>
		                    <input type="radio" name="quest" value="quest3">Еле справились
		                </li>
		            </ul>
		        </fieldset>
        		<input id="submit" type="submit" value="Отправить" name="send">
    		</form>
		</main>
	</body>
</html>