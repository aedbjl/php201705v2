<?php
  session_start();
if(!isset($_GET['editid'])) header('Location:20170531 A&P.php');
      $editid=$_GET['editid'];

     $sql="select * from member where id={$editid}";
      $db=@ new mysqli('127.0.0.1','root','root','iii');
      $rs=$db->query($sql);
      $editObj=$rs->fetch_object();


?>

<form action="updateMember.php">
    <input type="hidden" name="id" value="<?php echo $editObj->id; ?>">
    <table>
        <tr>
            <th>account</th>
            <td><input type="text" name="account" value="<?php echo $editObj->account; ?>"></td>

        </tr>
        <tr>
            <th>password</th>
            <td><input type="password" name="password" value="<?php echo $editObj->password; ?>"></td>

        </tr>
        <tr>
            <th>name</th>
            <td><input type="text" name="name" value="<?php echo $editObj->name; ?>"></td>

        </tr>
        <tr>

            <td colspan="2"><input type="submit" value="new"></td>

        </tr>

    </table>

</form>