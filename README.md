# Quiz PHP

Una simple demo de un simple cuestionario en PHP orientado al objeto y con algo de jQuery y bootstrap (más que nada para no gastar tiempo en el CSS y centrarme en el PHP). A diferencia del proyecto del quiz de Javascript este guarda las preguntas del lado del servidor. Hipotéticamente las respuestas se podrían almacenar, en este caso sólo se cuentan las respuestas correctas. 

Puede servir de ejemplo para empezar un pequeño proyecto desde cero. Emplea bootstrap, JSON para guardar los objetos (fácilmente reemplazable por una base de datos, la clave está en modificar save_to_DAO() en CreateQuizController), jQuery para mostrar las preguntas. 

En la config.php se puede especificar [una contraseña bcrypt](https://bcrypt-generator.com) y utilizarla. Obviamente esto en condiciones normales iría en una base de datos.

Para utilizar esta aplicación basta con sólo clonarla y cambiar los datos de config.php con un usuario y el hash bcrypt como contraseña. En este caso el usuario es admin y la contraseña 123456.

-----

/CreateQuiz.php permite administrar el cuestionario.

/Quiz.php permite contestar el cuestionario. 