<?php

define('ROOT', dirname(__FILE__));
require ROOT . '/Classes/Autoloader.php';

if ($_POST)
{
	try
	{
		$fileUploader = new FileUploader($_FILES['sudoku_image']);
		$fileUploader->doUpload();
		$image = $fileUploader->getImage();
	
		$imageParser = new ImageParser($image);
		$imageParser->parse();
		$numbers = $imageParser->getNumbers();

		$sudoku = new Sudoku();
		foreach ($numbers as $number)
		{
			$sudoku->addNumber($number);
		}
		$sudoku->solve();
	}
	catch (Exception $e)
	{
		// Present error msg
		die();
	}
	$sudoku->display();
}

?>
<html> blablabla </html>
