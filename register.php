<script>

//XML
let xhttp = new XMLHttpRequest();
let isDataOK =false;

xhttp.onreadystatechange = function(){
    if (xhttp.readyState == 4 && xhttp.status ==200)
    {
        if (xhttp.responseText == 0){
            document.getElementById('mesg').innerHTML ='OK';
            isDataOK =true;
        }else{
            document.getElementById('mesg').innerHTML ='XX';
        }
    }
}

function isNewAccount(){
    let account = document.getElementById('account').value;
    //alert(account);
    xhttp.open('GET', 'isNewAccount.php?account='+ account, true);
    xhttp.send();
}
function isSubmit(){
    return isDataOK;
}

</script>



<form method='post' action= "register.php" onsubmit="return ture;" enctype="multipart/from-data">
    Account : <input type= "text" id ="account" name="account" onchange="isNewAccount()" /><br>
    <span id='mesg'> </span>
    <br>
    Password : <input type= "Password" name="Password" /><br>
    Realname: <input type= "text" name="Realname" /><br>
    icon: <input type= "file" name="icon" /><br>
    <input type= "submit" name="Register" />
</form>