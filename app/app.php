<?php
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/Anagram.php";
	
	$app = new Silex\Application();
	
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../views'
	));
	
	$app->get("/", function() use ($app){
		return $app['twig']->render('home_form.html.twig');
	});
	
	$app->get("/view_anagram", function() use ($app) {
		$anagram_check = new Anagram;
		$word = $_GET['word'];
		$list_to_compare = explode(" ", $_GET['list']);
		$list_of_anagrams = $anagram_check->checkAnagram($word, $list_to_compare);
		return $app['twig']->render('list_of_anagrams.html.twig', array('result' => $list_of_anagrams));
	});
	
	return $app;
?>