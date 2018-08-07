# Quiz PHP

A simple no database JSON based quiz maker using PHP and some Bootstrap and Jquery (no PHP framework used this time). I made a Javascript quiz a few days before but this program allows you to also write questions through a form instead of messing with .js files. Hypotetically, answers could be saved (answers and score) but right now the quiz only shows the right answer (remember at the moment there's no database but a JSON file).

This little thingy could be an example template to begin a small project from scratch. It uses Bootstrap, JSON to save the objects (easily replaceable with a database, it'd be enough to modify save_to_DAO and few parameters in CreateQuizController). It uses jQuery and JS to render questions from the JSON and to make AJAX requests. 

You might want to add a [bcrypt password](https://bcrypt-generator.com) and use it with the project. The default user is admin and the password 123456. 

/CreateQuiz.php manages the quiz 

/Quiz allows to answer the quiz


----

Una simple demo de un simple cuestionario en PHP orientado al objeto y con algo de jQuery y bootstrap (más que nada para no gastar tiempo en el CSS y centrarme en el PHP). A diferencia del proyecto del quiz de Javascript este guarda las preguntas del lado del servidor. Hipotéticamente las respuestas se podrían almacenar, en este caso sólo se cuentan las respuestas correctas. 

Puede servir de ejemplo para empezar un pequeño proyecto desde cero. Emplea bootstrap, JSON para guardar los objetos (fácilmente reemplazable por una base de datos, la clave está en modificar save_to_DAO() en CreateQuizController), jQuery para mostrar las preguntas. 

En la config.php se puede especificar [una contraseña bcrypt](https://bcrypt-generator.com) y utilizarla. Obviamente esto en condiciones normales iría en una base de datos.

Para utilizar esta aplicación basta con sólo clonarla y cambiar los datos de config.php con un usuario y el hash bcrypt como contraseña. En este caso el usuario es admin y la contraseña 123456.

-----

/CreateQuiz.php permite administrar el cuestionario.

/Quiz.php permite contestar el cuestionario. 