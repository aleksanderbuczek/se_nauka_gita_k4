<?php

function srednia_zwykla (a,b)
{
		return (a+b)/2;
}

function srednia_wazona (a,b,a_heavier = true)
{
	if(a_heavier)
	{
		return 0.4*a + 0.6*b;
	}
	else
	{
		return 0.3*a + 0.7*b;
	}
}


?>