<?php 
//Assuming that the pound symbol is a dollar sign
$first = ["archeNland Limtded",["$100",'-1','200','300','-700',678]];
$second = ["narnIa Geselmlchab","$530,-23,670,3,negative1299"];
$third = ["name"=>"loneIslands proprtieary","amount"=>"7568-39-49-37-3000-98"];
print_r($first);

function answer(){
$first1 = array(0=>"Archenland Ltd.");
$first2 = array_replace($first, $first1);
print_r($first2);
$first3 = array(1=> 100,-1,200,300,-700,678);
$first4 = array_replace($first, $first1, $first3);
$second1 = array(0=>"Narnia Gmb.");
$second2 = array(1=> 530,-23,670,3,"negative1299");
$second3 = array_replace($second, $second1, $second2);
$third1 = array("name"=>"Loneislands Pty.");
$third2 = array("amount"=> -7568,39,49,-37,3000,98);
$third3 = array_replace($third, $third1, $third2);
$archdebits = 1700;
$archbalance = 1278;
$narndebits = array(1299,3);
$narnbalance = 1223;
$lonedebits = array(37,7568);
$lonebalance = 3186;
$firstfinal = "Company = $first4[0]"."Amounts = $first4[1]"."Debits = $archdebits"."Balance = $archbalance /n";
$secondfinal = "Company = $second3[0]"."Amounts = $second3[1]"."Debits = $narndebits"."Balance = $narnbalance /n";
$thirdfinal = "Company = $third3[0]"."Amounts = $third3[1]"."Debits = $lonedebits"."Balance = $lonebalance /n";
}
echo answer();
 ?>
