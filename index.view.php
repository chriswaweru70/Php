<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta animal="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

     header {
         background: #e3e3e3;
         padding: 2em;
         text-align: center;
     }
   </style>
</head>

<body>
    
    <header>
            <h1>
                <?php 

                $animal = $_GET['animal'];
                echo  "Hello,$animal"; 
                ?>
                </h1>

                <h1>
                <?= $greeting; ?>
                <h1>

                <ol>
                        <?php
                        foreach ($animals as $animal) {
                           echo "<li>$animal</li>";
                        }

                        ?>

                        

                        <?php 
                            foreach ($animals as $animal): ?>
                            
                               <li> <?= $animal; ?> </li>
                    <?php endforeach; ?>

                </ol>
            </header>
</body>
</html>