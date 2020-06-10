<?php

if( $_GET['perms'] == 'basic' ){
    echo "<script>window.location = 'https://discordapp.com/oauth2/authorize?client_id=625777269134327848&permissions=104197185&scope=bot'</script>";
} else{
    echo "<script>window.location = 'https://discordapp.com/oauth2/authorize?client_id=625777269134327848&permissions=8&scope=bot'</script>";
}

?>