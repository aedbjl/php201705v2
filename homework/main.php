<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




</head>
<body>

<script>

//setTimeout("time2()",1000);
//
//
//    function time2() {
//        var id = 2;
//        test1(id);
//    }
//
//    function test1(id) {
//        $.post("123.php", {id:id}, function (data, status) {
//            $("#123").html(data);
//        })
//    }
//setTimeout("time()",5000);
//
//
//    function time() {
//        var id = 4;
//        test2(id);
//    }
//
//
//function test2(id) {
//    $.post("123.php", {id:id}, function (data, status) {
//        $("#456").html(data);
//    })
//
    function test(id) {
        $.post("123.php", {id: id}, function (data, status) {
            $("#123").html(data);
        });
    }
            for (j=2;j<5;j++) {
                var id = j;
                setTimeout("test(id)", 3000)
//                $(document).ready(function () {
//                    setTimeout("test(id)", 3000)
//                });

            }



</script>
<form>

    <table width="100%" border="3px">
        <tr>
            <td id="123"></td>
            <td></td>
            <td>5</td>
            <td>5</td>
        </tr>
        <tr>
            <td>5</td>
            <td>5</td>
            <td>5</td>
            <td>5</td>
        </tr>
    </table>
</form>


</body>


