# Request
this is for request 

يستخدم الامر &#x202b; request  لجلب معلومات سواء ب post or get فهو لا يفرق بيناتهم 

طريقة استخدام الامر 

```
 if(count($_REQUEST)){
            foreach($_REQUEST as $key => $getValues){
                echo "<div> $key : $getValues </div>";
            }
        }
```        
