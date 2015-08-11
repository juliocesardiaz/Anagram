<?php 
	class Anagram
	{
		function checkAnagram($word, $listOfPossibleAnagrams)
		{
			$confirmed_anagrams = array();
			foreach ($listOfPossibleAnagrams as $possible_anagram)
			{
				if ($possible_anagram == $word)
				{
					array_push($confirmed_anagrams, "No anagrams");
				}
			}
			return $confirmed_anagrams;
		}
	}
?>