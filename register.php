<?php
    include_once 'sql.php';
    if (isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwd = $_REQUEST['passwd'];
        $realname = $_REQUEST['realname'];
        $passwd = password_hash($passwd , PASSWORD_DEFAULT); //加密
        
        $icon = null ;   //預設值
        if ($_FILES['icon']['error'] == 0){   //圖檔是否上傳
            file_get_contents($_FILES['icon']['tmp_name']);
        }
        $sql = "INSERT INTO member (account,passwd,realname,icon) VALUE " .
            "('{$account}','{$passwd}','{$realname}','{$icon}')";
        if ($mysqli->query($sql)){
            header('localhost','login.php');
            //echo '新增成功';
        }else{
            echo '新增失敗', $sql;
        }
    }
    
?>
 

<script>
    // XML Object
    let xhttp = new XMLHttpRequest();
    let isDataOK = false;
    xhttp.onreadystatechange = function(){
        if (xhttp.readyState == 4 && xhttp.status == 200){
            if (xhttp.responseText == 0){
                document.getElementById('mesg').innerHTML = '檢查ＯＫ';
                isDataOK = true;
            }else{
                document.getElementById('mesg').innerHTML = '檢查失敗';
            }
        }
    }
    function isNewAccount(){
        let account = document.getElementById('account').value;
        //alert(account);
        xhttp.open('GET', 'isNewAccount.php?account=' + account, true);
        xhttp.send();
    }
    function isSubmit(){
        return isDataOK;
    }
</script>

<form method='post' action="register.php" onsubmit="return isSubmit();" 
    enctype="multipart/form-data">
    Account: <input type="text" id="account" name="account" onchange="isNewAccount()" /><span id='mesg'></span>
    <br>
    Password: <input type="password" name="passwd" /><br>
    Realname: <input type="text" name="realname" /><br>
    Icon: <input type="file" name="icon" /><br>
    <input type="submit" value="Register" />
</form>