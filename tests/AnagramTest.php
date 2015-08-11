<?php 
	require_once "src/Anagram.php";
	
	class AnagramTest extends PHPUnit_Framework_TestCase
	{
		//test first spec
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
		//test second spec
		function testSelfMatch()
		{
			//Arrange
			$test = new Anagram;
			$inputWord = "An";
			$inputList = array("An");
			
			//Act
			$result = $test->checkAnagram($inputWord, $inputList);
			
			$answer = array("No anagrams");
			//Assert
			$this->assertEquals($answer, $result);			
		}
		//test third spec
		function testTwoLetter()
		{
			//Arrange
			$test = new Anagram;
			$inputWord = "Am";
			$inputList = array("Ma", "No");
			
			//Act
			$result = $test->checkAnagram($inputWord, $inputList);
			
			$answer = array("Ma");
			//Assert
			$this->assertEquals($answer, $result);
		}
		//test fourth spec
		function testThreeLetter()
		{
			//Arrange
			$test = new Anagram;
			$inputWord = "arm";
			$inputList = array("ram", "man", "the");
			
			//Act
			$result = $test->checkAnagram($inputWord, $inputList);
			
			$answer = array("ram");
			//Assert
			$this->assertEquals($answer, $result);
		}
		//test fifth spec
		function testFourLetter()
		{
			//Arrange
			$test = new Anagram;
			$inputWord = "laws";
			$inputList = array("slaw", "ears", "dogs");
			
			//Act
			$result = $test->checkAnagram($inputWord, $inputList);
			
			$answer = array("slaw");
			//Assert
			$this->assertEquals($answer, $result);
		}
		//test sixth spec
		function testMultipleLengthInput()
		{
			//Arrange
			$test = new Anagram;
			$inputWord = "cars";
			$inputList = array("scar", "ears", "dogs", "scars");
			
			//Act
			$result = $test->checkAnagram($inputWord, $inputList);
			
			$answer = array("scar");
			//Assert
			$this->assertEquals($answer, $result);
		}
		
		
	}
?>