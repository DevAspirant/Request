# Request
This project is describe the REQUEST  in PHP

يستخدم الامر &#x202b; request  لجلب معلومات سواء ب post or get فهو لا يفرق بيناتهم 

&#x202b; طريقة استخدام الامر 

```
 if(count($_REQUEST)){
            foreach($_REQUEST as $key => $getValues){
                echo "<div> $key : $getValues </div>";
            }
        }
```        
