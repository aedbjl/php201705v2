<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<script>
    for (var j = 0; j < 3; j++) {
        (function (l) {
            setTimeout(function () {
                    {
                        $.post("123.php", {id: l}, function (data, status) {
                            $("#A1").html(data);
                        });
                    }
                }
                , 1000 + (1000 * l))
        })(j);
    }

    for (var j = 0; j < 3; j++) {
        (function (l) {
            setTimeout(function () {
                    {
                        $.post("123.php", {id: l}, function (data, status) {
                            $("#B1").html(data);
                        });
                    }
                }
                , 4000 + (1000 * l))
        })(j);
    }

    var sum = Number(0);
    for (var j = 0; j < 5; j++) {
        (function (l) {
            setTimeout(function () {
                    {
                        $.post("123.php", {id: l}, function (data, status) {
//                            $("#A2").html(data);
                            sum += Number(data);
                            $("#A2").html(sum);
                        });
                    }
                }
                , 7000 + (1000 * l))
        })(j);
    }

    //function test(l) {
    //    $.post("123.php", {id: l}, function (data, status) {
    //        $("#123").html(data);
    //    });
    //
    //}
    //    for (var i=0;i<=10;i++) {
    //        (function(l) {
    //            setTimeout(function(){console.log(l);}, 1000 + (3000 * l));
    //        })(i);
    //    }
    ////
    //    function test() {
    //        $.post("123.php", {id: temp}, function (data, status) {
    //            $("#123").html(data);
    //        });
    //    }
</script>
<form>

    <table width="100%" border="3px">
        <tr>
            <td id="A1"></td>
            <td id="A2"></td>
            <td id="A3"></td>
            <td id="A4"></td>
        </tr>
        <tr>
            <td id="B1"></td>
            <td id="B2"></td>
            <td id="B3"></td>
            <td id="B4"></td>
        </tr>
    </table>
</form>


</body>

