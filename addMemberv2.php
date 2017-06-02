<script>

    var xmlhttp;

    if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    function precheck(){
        var account=document.getElementById('account').value;

        xmlhttp.onreadystatechange = callback;
        xmlhttp.open("GET", "2017060202.php?a="+account, true);
        xmlhttp.send();
    }

    function callback(){
        if (this.readyState == 4 && this.status == 200) {
            var result=this.responseText;
            if(result!='OK'){
                document.getElementById('crs').innerHTML='repeat';
            }else {
                document.getElementById('crs').innerHTML='OK';
            }
        }
    }



//    function test1() {
//
//        xmlhttp.onreadystatechange = function () {
//            if (this.readyState == 4 && this.status == 200) {
//                document.getElementById("demo").innerHTML = this.responseText;
//            }
//        };
//        xmlhttp.open("GET", "test.php", true);
//        xmlhttp.send();
//    }


</script>



<form action="addaccount.php" >
    account:<input id="account" name="account" onblur="precheck()"/>
    <span id="crs"></span><br>
    password:<input type="password" name="passwd"/><br>
    realname:<input name="realname"/><br>
    <input type="submit" value="submit"/>

</form>