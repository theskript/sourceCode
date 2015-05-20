class sourceCode
{
	function view($url)
	{
		$lines = file($url);
		foreach ($lines as $line_num => $line) 
		{ 
			$output .= "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br>\n";
		}
		return $output;
	}
}

$page = new sourceCode;
echo $page->view($_GET['url']);
