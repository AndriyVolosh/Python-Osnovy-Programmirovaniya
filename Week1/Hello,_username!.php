<?php
//проверяем существование post-переменной
if(filter_has_var(INPUT_POST, 'username')){
    //проверяем post-переменную
    $username = filter_input(INPUT_POST, 'username');
    //проверяем post-переменную на пустоту
    if(strlen($username) > 0){
        //записываем в переменную данные
        $str = 'Hello ' . $username . '!';
        $str.= "<br/>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello, %username!</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">    
            <div style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                <div class="panel panel-info" >
                <?php if($str):
                        //если есть данные, то выводим данные из переменной на экран; если нет, то выводим форму
                        echo $str; ?>
                        <a href="Hello,_username!.php">Ввести другое имя</a>
                <?php else: ?>
                        <form action="#" method="POST">
                            <label>Введите Ваше имя: <input type="text" name="username" autofocus required /></label>
                            <input type="submit" />
                        </form>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>
