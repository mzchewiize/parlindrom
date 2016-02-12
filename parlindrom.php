<?php

/*
author :: mzchewiize
Language PHP
Parlidrom is A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward. 
Allowances may be made for adjustments to capital letters, punctuation, and word dividers. 
Famous examples include "A man, a plan, a canal, Panama!", "Amor, Roma",
"race car", "stack cats", "step on no pets", "taco cat", "put it up", 
"Was it a car or a cat I saw?" and "No 'x' in Nixon".

This function going to check parmas is parlindrom (true / false)
*/

function is_parlindrom($params)
{
	$params = str_replace(' ','', $params); #incase params has space / also can use trim
	$params = str_replace('.','',$params); # incase prams has dot(.)
	$params = strtolower($params); #conver params to lower.
	return $params == strrev($params); #string in reverse
}

# example the words 
$word = "Amor";

echo (is_parlindrom($word) == true) ? "this is palindrom" : "this is not parlindrom";
?>