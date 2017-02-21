<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <?php   
        include './NCentralAPI.php';
        $server = 'rmm.cloudnet.services';
        $username = ; //Removed for demo purposes
        $password = ; //Removed for demo purposes
        $api = new NCentralAPI($username, $password, $server);
        
        var_dump($api->getDevices()) // This works, shows devices for ID with 50, which is the current user.
        
        ?>
    </body>
</html>
