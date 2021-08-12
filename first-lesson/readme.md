1. Добейтесь корректной работы вашего сервера. Тщательно повторите
   шаги, которые мы делали на уроке. В случае затруднений - обращайтесь
   в чат поддержки!
2. Добавьте себе в закладки официальный мануал по языку [http://fi2.php.net/manual/ru/](http://fi2.php.net/manual/ru/)
3. В PHP есть функция var_dump($something), которая выводит подробную информацию о значениях и их типах. Попробуйте написать
   что-нибудь вроде var_dump(2*2); чтобы увидеть, как она работает.
   Изучите с помощью этой функции следующие выражения:
	-  3 / 1
	-  1 / 3
	-  '20cats' + 40
	-  18 % 4 (прочтите главу [http://fi2.php.net/manual/ru/language.operators.arithmetic.php](http://fi2.php.net/manual/ru/language.operators.arithmetic.php)
    чтобы узнать, что это такое)
4.  Говорят, что в PHP "всё является выражением". Интересно, что даже присваивание переменной какого-либо значения тоже является
    выражением! Изучите примеры ниже и дайте ответ - что же является
    значением выражения присваивания?
	-  echo ($a = 2);
	-  $x = ($y = 12) - 8; echo $x;
5.  В PHP имеется логический (boolean) тип, имеющий два значения - true (истина) и false (ложь). Изучите с помощью var_dump() следующие
    выражения и объясните их (прочитайте предварительно
    [http://fi2.php.net/manual/ru/language.operators.comparison.php](http://fi2.php.net/manual/ru/language.operators.comparison.php)
    ):    	    
	-  1 == 1.0
	-  1 === 1.0
	-  '02' == 2
	-  '02' === 2
	-  '02' == '2'
	 
 6. '*'   $x = true xor true;   var_dump($x);   Попробуйте объяснить результат