<?php
	session_start();
	if(isset($_POST["send"])) {
		$name = htmlspecialchars(trim($_POST["name"]));
		echo "Имя: " . $name . "</br>";
		$surname = htmlspecialchars(trim($_POST["surname"]));
		echo "Фамилия: " . $surname . "</br>";
		$sex = $_POST["sex"];
		echo "Пол: " . $sex . "</br>";
		$age = htmlspecialchars(trim($_POST["age"]));
		echo "Возраст: " . $age . "</br>";
		$friend = $_POST["friend"];
		echo $friend . "</br>";
		$born = htmlspecialchars(trim($_POST["born"]));
		echo "Дата рождения: " . $born . "</br>";
		$status = htmlspecialchars(trim($_POST["status"]));
		echo "Семейное положение: " . $status . "</br>";
		$soc = htmlspecialchars(trim($_POST["soc"]));
		echo "Социальный статус: " . $soc . "</br>";
		$from = htmlentities(trim($_POST["from"]));
		echo "Место жительства: " . $location . "</br>";
		$hobby = $_POST["hobby"];
			$length_hobby = count($hobby);
			for ($i=0; $i < $length_hobby; $i++) { 
				echo "Занятие: " . $hobby[$i] . "</br>";
			};
		$book = $_POST["book"];
		echo "Книга: " . $book . "</br>";
		$books_num = $_POST["books-num"];
		echo "Прочитано книг: " . $book_num . "</br>";
		$comments = htmlspecialchars(trim($_POST["comments"]));
		echo "Коментарии: " . $comments . "</br>";
		$position = $_POST["position"];
		echo "Позиция " . $position . "</br>";
		$email = htmlspecialchars(trim($_POST["email"]));
		echo "Email " . $email . "</br>";
		$spam = $_POST["spam"];
			$length_spam = count($spam);
			for ($i=0; $i < $length_spam; $i++) { 
				echo "Подписки: " . $spam[$i] . "</br>";
			};
		$quest = $_POST["quest"];
		echo "Сложность: " . $quest  . "</br>";

		$_SESSION["name"] = $name;
		$_SESSION["surname"] = $surname;
		$_SESSION["age"] = $age;
		$_SESSION["born"] = $born;
		$_SESSION["status"] = $status;
		$_SESSION["soc"] = $soc;
		$_SESSION["from"] = $from;
		$_SESSION["comments"] = $comments;
		$_SESSION["email"] = $email;
		$error_name = "";
		$error_surname = "";
		$error_email = "";
		$error = false;
		if (strlen($name) <= 2) {
			$error_name = "Ввведите имя";
			$error = true;
		}
		if (strlen($surname) <= 2) {
			$error_surname = "Ввведите фамилию";
			$error = true;
		}
		if (strlen($email) <= 3) {
			$error_email = "Ввведите email";
			$error = true;
		}
		$db = mysql_connect("localhost", "root", "") or die("Error: ".mysql_error());;
		mysql_select_db("homework", $db);
		$insert_sql = "INSERT INTO forms (name, surname, sex, age, friend, born, status, soc, from, hobby, book, books-num, comments, position, email, spam, quest)" .
		"VALUES('$name', '$surname', '$sex', '$age', '$friend', '$born', '$status', '$soc', '$from', '$hobby', '$book', '$books-num', '$comments', '$position', '$email', '$spam', '$quest');";
		$result = mysql_query($insert_sql);
		if ($result = 'true'){
	    echo "<b>Информация занесена в базу данных!</b>";
		}else{
	    echo "<b>Информация не занесена в базу данных!</b>";
	} 
}
?>