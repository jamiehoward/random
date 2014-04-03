<?php
function create_encryption_key($length = 32)
{
                if(isset($_GET['length']))
                {
                        $length = $_GET['length'];
                }
        $characters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',1,2,3,4,5,6,8,9,0,'!','@','#','$','%','^','&','*','+','-','_','~','?');

        $key = '';
        $i=0;
        while ($i <= $length)
        {
          shuffle($characters);
          $key .= $characters[rand(0,count($characters)-1)];
          $i++;
        }

        return $key;
}
?>

<html doctype="html">
<head>
        <title>Random string generator</title>
        <style type="text/css">
                .container { margin:15px; }
        </style>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
            <h1 class="title">Random string generator</h1>
            <h4>Simply refresh for a new key</h4>
            <h5>32-bit random strings:</h5>
            <ul class="list-unstyled">
                    <?php $i = 0;
                    while ( $i <= 10) {
                            echo "<li>" . create_encryption_key() . "</li>";
                            $i++;
                    }?>
            </ul>
            <h5>MD5 encrypted keys:</h5>
            <ul class="list-unstyled">
                    <?php $i = 0;
                    while ( $i <= 10) {
                            echo "<li>" . md5(create_encryption_key()) . "</li>";
                            $i++;
                    }?>
            </ul>
            <div class="footer">
                    <hr />
                    Thrown together by <a href="http://github.com/blackairplane">Jamie Howard</a>
                     <a href="https://twitter.com/share" class="twitter-share-button" data-via="JamieHoward">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>