<?php
session_start();
$file='allpublicityquery.pl';

$country=$_POST['state'];
$sex=$_POST[1];
$language=$_POST[2];
$budget=$_POST[3];
echo $cost=$_POST[10];
echo $frequency=$_POST[11];
echo $policy=$_POST[12];
echo "<br>";


//here we decide the publicy budget codes

$split=$cost.$frequency.$policy;
if($split=='000')
{
$tvbudget=0.6*$budget;
$internetbudget=0.3*$budget;
$radiobudget=0.05*$budget;
$newsbudget=0.05*$budget;


}
if($split=='001')
{
}
if($split=='010')
{
}
if($split=='011')
{
}
if($split=='100')
{
}
if($split=='101')
{
}
if($split=='110')
{
}
if($split=='111')
{
echo $tvbudget=.25*$budget;
echo "<br>";
echo $internetbudget=0.25*$budget;
echo "<br>";
echo $radiobudget=0.35*$budget;
echo "<br>";
echo $newsbudget=0.15*$budget;
echo "<br>";
}


//here we decide the publicy budget codes
$audience=$_POST['aud'];
$location=$_POST['loc'];
$s='[';
$d='[';
$num=count($audience);
$numloc=count($location);
$publicity='publicity:-';

for($numloc=0,$i=0;$location[$i]!=NULL;$i++)
	$numloc++;

//echo $numloc;

for($i=0;$i<$numloc;$i++)
	{
	//echo $location[$i];
		$d=$d.$location[$i];
		if($i<$numloc-1&$location[$i]!=NULL)
			$d=$d.',';
	}
	$d=$d.']';
	echo $d;


if($num==0)
	echo "Go Back and Select atleast 1 from target audience category";
else
{
	for($i=0;$i<$num;$i++)
	{
		$s=$s.$audience[$i];
		if($i<$num-1)
			$s=$s.',';
	}
	$s=$s.']';
	echo $s;


//	echo "<pre>"."<pre>";
	echo "THANKS FOR YOUR SUPPORT";
	echo "<pre>"."<pre>";
	
	$splitquery='split('.$tvbudget.','.$internetbudget.','.$radiobudget.','.$newsbudget.'),'.
	$tvquery='main('.$s.','.$sex.',M,N,'.$tvbudget.'),!,write(M),nl,write(N),';
	$fmquery='fm_query('.$s.','.$language.','.$country.','.$d.'),';
	$newsquery='main('.$s.','.$language.','.$country.','.$d.'),';
	$internetquery='main('.$s.','.$sex.',M,N,'.$internetbudget.'),!,write(M),nl,write(N).';
	echo $tvquery."<BR \>";
	echo $fmquery."<BR \>";
	echo $newsquery."<BR \>";
	echo $internetquery."<BR \>";
    file_put_contents($file,$publicity);
	file_put_contents($file,$splitquery, FILE_APPEND | LOCK_EX);
	file_put_contents($file,$tvquery, FILE_APPEND | LOCK_EX);
	file_put_contents($file,$fmquery, FILE_APPEND | LOCK_EX);
	file_put_contents($file,$newsquery, FILE_APPEND | LOCK_EX);
	file_put_contents($file,$internetquery, FILE_APPEND | LOCK_EX);
}
?>