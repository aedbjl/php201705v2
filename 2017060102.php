<?php
//include 'sql2.php';
//$pdo = new pdo($dsn, $user, $password, $opt);
//$sql = "insert into food (fid,fname,tel,addr,memo) values (?,?,?,?,?)";
//$json = file_get_contents(
//    "http://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx");
//$root = json_decode($json);
//foreach ($root as $row){
//    $fid = $row->ID;
//    $fname = $row->Name;
//    $tel = $row->Tel;
//    $addr = $row->Address;
//    $memo = $row->HostWords;
//    $pdo->prepare($sql)->execute([$fid,$fname,$tel,$addr,$memo]);
//}


include 'sql2.php';
$pdo=@ new pdo($dsn,$user,$password,$opt);
$sql= 'insert into food3(a,b,c) values(?,?,?)';
$json=file_get_contents('http://data.coa.gov.tw/Service/OpenData/FromM/FarmerMarketData.aspx');
$root=json_decode($json);

foreach($root as $row){
   $a=$row->縣市;
   $b=$row->市集名稱;
    $c=$row->市集介紹;


    $pdo->prepare($sql)->execute([$a,$b,$c]);
}

//$json='{
//"id":"123",
//"name":"789",
//"lang":[{
//"name":"ooo",
//"level":"1"
//},{
//"name":"ooo1",
//"level":"2"
//},{
//"name":"ooo2",
//"level":"3"
//},{
//"name":"ooo3",
//"level":"4"
//}]
//}';
//
//$root=json_decode($json);
////var_dump($root);
//echo "{$root->lang[0]->name}:{$root->lang[0]->level}";