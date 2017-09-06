<?php
class Comments
{
	private $name;
	private $comment_text;

	 public function __construct($name, $comment_text)
	{
		$this->name = $name;
		$this->comment_text = $comment_text;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getText()
	{
		return $this->comment_text;
	}
	
}



class News
{
	private $headline;
	private $article;

	public function __construct($headline, $article)
	{
		$this->headline = $headline;
		$this->article = $article;
	}

	public function getDate()
	{
		date_default_timezone_set('America/Chicago');
		$format = "l: F jS, Y h:i A";
		return date($format);
	}

	public function getHeadline()
	{
		return $this->headline;
	}

	public function getArticle()
	{
		return $this->article;
	}

	public function getComments()
	{
		$comment = [];
		$comment[] = new Comments ("Lucy", "Comments text #1");
		$comment[] = new Comments ("John", "Comments text #2");

		foreach($comment as $item)
		{
			echo $item->getName()."<br>";
			echo $item->getText()."<br>";
		}
	}
}

$news = [];

$news[] = new News("Headline for the News 1", "Article for the news 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");

$news[] = new News("Headline for the News 2", "Article for the news 2: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");

$news[] = new News("Headline for the News 3", "Article for the news 3: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>News</title>
</head>
<body>
<style>
	header {
		margin: 0 auto;
		background-color: #cccccc;
		text-align: center;
	}
	.news_content {
		width: 33.333%;
		float: left;
		text-align: center;
		background-color: #FFCB9F;
		box-sizing: border-box;
	}
	.news_content::after {
		content:"";
		display: block;
		clear: both;
	}
</style>
<header>
<h1>NEWS</h1>
<p>Today's Stories</p>
</header>
<article>

<?php foreach($news as $item): ?>
	<div class="news_content">
	<h2><?= $item->getHeadline() ?></h2>
	<time><?= $item->getDate() ?></time>
	<p><?= $item->getArticle() ?></p>
	<div><?= $item->getComments() ?></div>
	</div>
<?php endforeach; ?>

</article>
</body>
</html>