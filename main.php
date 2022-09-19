<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая работа по PHP </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/ava.jpg" width="200" height="250">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город: ', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                        <?php  echo $age;   ?> года 
                    </p>

                    <div class="learning">
                        <?php 
                            echo ' - Мы научились создавать переменные ', '<br>';
                            echo ' - Изучили простые операции с ними ', '<br>';
                            echo ' - Научились подключать изображения ', '<br>';
                            echo ' - Научились вставлять ссылки на внешние ресурсы ', '<br>';
                            echo ' - И многое другое ';
                        ?>
                    </div>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>

                    <?php   echo $textProgress , '<br>';    
                            echo $porogressBar , '<br>';
                            echo "----next-----" , '<br>'?>               
                    <?php
                        $a = "Current ";
                        $b = "calculations ";
                        $c = $a . $b . "is:";
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo '* ' . $d;
                    ?> 

            </div>

            <div class="article">
                <div class="text">
                    <?php include 'text.inc.php' ?>   
                </div>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
