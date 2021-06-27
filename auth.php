<?php

if($_COOKIE["User"]=="այո"){
    setcookie("User","այո",time()-3600,"/");
}
    else{
        setcookie("User","այո",time()+3600,"/");
    }




header("Location: /")
?>