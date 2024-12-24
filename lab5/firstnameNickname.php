<?php
    if(isset($_POST['submit']))
    {
        $filename = $_POST['fileName'];
        $text = file($filename);
        foreach($text as $tr_data){
            $col=1;
            $array_word = explode(",",$tr_data);
            foreach($array_word as $value){
                $value = trim($value);
                if ($col == 1) {
                    echo $value;
                }
                else{
                    if($value=="Robert") echo "Dick";
                    elseif($value=="Dick") echo "Robert";
                    elseif($value=="William") echo "Bill";
                    elseif($value=="Bill") echo "William";
                    elseif($value=="James") echo "Jim";
                    elseif($value=="Jim") echo "James";
                    elseif($value=="John") echo "Jack";
                    elseif($value=="Jack") echo "John";
                    elseif($value=="Margaret") echo "Peggy";
                    elseif($value=="Peggy") echo "Margaret";
                    elseif($value=="Edward") echo "Ed";
                    elseif($value=="Ed") echo "Edward";
                    elseif($value=="Sarah") echo "Sally";
                    elseif($value=="Sally") echo "Sarah";
                    elseif($value=="Andrew") echo "Andy";
                    elseif($value=="Andy") echo "Andrew";
                    elseif($value=="Anthony") echo "Tony";
                    elseif($value=="Tony") echo "Anthony";
                    elseif($value=="Deborah") echo "Debbie";
                    elseif($value=="Debbie") echo "Deborah";
                    else echo "Don't see your name";

                }
            $col++;
            }
        }

    }else{
    ?>
        <html>
        <head>
            <title>firstnameNickname.php</title>
        </head>
        <body>
        <form method="post" action="firstnameNickname.php">
            <table align="center" width="400">
                <tr>
                    <td colspan="2" align="center">
                        <h1>firstnameNickname.php</h1>
                    </td>
                </tr>
                <tr>
                    <td>File name  </td>
                    <td><input type="text" name="fileName" size="40" value=""/> </td>
                </tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value=" SUBMIT " />
                    <input type="reset" name="reset" value=" RESET " />
                </td>
    <?php
    }
    ?>
    </center>
</body>
</html>