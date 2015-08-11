<?php 
	class Anagram
	{
		function checkAnagram($word, $listOfPossibleAnagrams)
		{
			$confirmed_anagrams = array();
			foreach ($listOfPossibleAnagrams as $possible_anagram)
			{
				if ($possible_anagram != $word) {
					if(strlen($word) == strlen($possible_anagram)) {
						$main_word = str_split(strtolower($word));
						$possible_word = str_split(strtolower($possible_anagram));
						sort($main_word);
						sort($possible_word);
						if($main_word == $possible_word) {
							array_push($confirmed_anagrams, $possible_anagram);
						}
					} else {
						$main_word = str_split(strtolower($word));
						$possible_word = str_split(strtolower($possible_anagram));
						sort($main_word);
						sort($possible_word);
						if (array_intersect($main_word, $possible_word) == $main_word) {
							array_push($confirmed_anagrams, $possible_anagram);
						}
						
					}
				}
			}
			if(empty($confirmed_anagrams)) {
				array_push($confirmed_anagrams, "No anagrams");
			}
			return $confirmed_anagrams;
		}
	}
?>