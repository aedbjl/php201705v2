<?php
  if(isset($_GET['acc'])){
      $acc=$_GET['acc'];
      $pasw=password_hash($_GET['pasw'],PASSWORD_DEFAULT);
      $realname=$_GET['realname'];
      $sql="insert into member(account,password,realname)"." values('{$acc}','{$pasw}','{$realname}')";
      $db=@ new mysqli('127.0.0.1','root','root','iii');
      $db->query($sql);
      header('Location:20170531 A&P.php');
  }

?>

<form>
    <table>
        <tr>
            <th>account</th>
            <td><input type="text" name="acc"></td>

        </tr>
        <tr>
            <th>password</th>
            <td><input type="password" name="pasw"></td>

        </tr>
        <tr>
            <th>name</th>
            <td><input type="text" name="realname"></td>

        </tr>
        <tr>

            <td colspan="2"><input type="submit" value="new"></td>

        </tr>

    </table>

</form>