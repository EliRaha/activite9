<?php

$nums =[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$suites = ["♦", "♣", "♥", "♠"];
$deck = [];
$sub_deck1 = [];
$sub_deck2 = [];
$shuffel_deck = [];

$deckCount=0;
for ($i=0; $i<count($suites); $i++){

for ($j=0; $j<count($nums); $j++ ){
    $deck[$deckCount] = $nums[$j]."-".$suites[$i] ;
    echo "$deck[$deckCount] ";
    $deckCount++;
    
    }
   echo "<br>";
}
echo "<br> <br> <br>";
for ($i=0; $i<52; $i++)
{
	if ($i<26){
		$sub_deck1[$i] =$deck[$i];
        echo "$sub_deck1[$i]  ";
        $j=($i+1) % 13;
        if ($j == 0)
        	{ echo "<br>";}
        if ($i == 25)
        	{echo "<br>";}
	}else{
    	$j=$i-26;
        $sub_deck2[$j] =$deck[$i];
        echo "$sub_deck2[$j]  ";
        $k=($i+1) % 13;
        if ($k == 0)
        	{ echo "<br>";}
	}
}
echo "<br> <br> <br>";
echo "la brassage dynamique :  <br>";
$sd1=0;
$sd2=0;
$temp=0;
for ($i=0; $i<52; $i++)
{	
	if ($sd1<26)
	{	
        $j=rand(rand(1,2),rand(1,4));
    	for ($x=1;$x<=$j;$x++)
   		{
			$temp=$sd1+$x;
            if ($temp<=26){
   		 		array_push($shuffel_deck,$sub_deck1[$sd1]);
    			$sd1++;   
				$i++;
			}
  		}
    	if ($sd2==26){$i--;}
    }
    
    if ($sd2<26)
	{	
    	$j=rand(rand(1,2),rand(1,4));
    	for ($x=1;$x<=$j;$x++)
    	{
        	$temp=$sd2+$x;
    		if ($temp<=26){
				array_push($shuffel_deck,$sub_deck2[$sd2]);
    			$sd2++;
				$i++;
			}
    	}
		$i--;
	}
}
/*echo "	La brassage regulare : <br>";
for ($i=0; $i<26; $i++)
{
	
   		 	array_push($shuffel_deck,$sub_deck1[$i]);
    
    		array_push($shuffel_deck,$sub_deck2[$i]);
    	
}
*/
for ($i=0;$i<52;$i++)
{
	echo "$shuffel_deck[$i]  ";
    $k=($i+1) % 13;
        if ($k == 0)
        	{ echo "<br>";}
}

?>