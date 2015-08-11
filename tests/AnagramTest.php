<?php 
	require_once "src/Anagram.php";
	
	class AnagramTest extends PHPUnit_Framework_TestCase
	{
		function testSingleLetter()
		{
			//Arrange
			$test = new Anagram;
			$inputWord = "I";
			$inputList = array("I");
			
			//Act
			$result = $test->checkAnagram($inputWord, $inputList);
			
			$answer = array("No anagrams");
			//Assert
			$this->assertEquals($answer, $result);			
		}
	}
?>