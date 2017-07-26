<?php
$attention = "";
require('database.php');
function articles_add() {
		global $attention;	
		$article = R::dispense('article');
		$article->title = $_POST['title'];
		$article->date = $_POST['date'];
		$article->content = $_POST['content'];
		R::store($article);
		$attention = 'Статья добавлена!';
		return $attention;
}

function articles_edit() {
	global $article,$attention;
	$article->title = $_POST['title'];
	$article->date = $_POST['date'];
	$article->content = $_POST['content'];
	R::store($article);
	$attention = 'Статья изменена!';
	return $attention;
}

function articles_delete() {
	$articleDel = R::load('article', $_GET['id']);
	R::trash($articleDel);
	R::close();
}

function admin_table() {
	$count = R::count('article');  
	for($i = 1; $i <= $count; $i++)
	{
		$article = R::findOne('article', "`id` = ?", array($i));
		If ( isset($article) ) 
		{
			echo '<tr>';
			echo '<td>'.$article->date.'</td>'; 
			echo '<td>'.$article->title.'</td>'; 
			echo '<td><a href="index.php?action=edit&id='.$article->id.'">Редактировать</a></td>'; 
			echo '<td><a href="index.php?action=delete&id='.$article->id.'">Удалить</a></td>'; 
			echo '</tr>';
		}
		else 
		{
			$count++;				
		}
	}
}

function page() {
	global $art;
	global $pageW;
	$id = R::findLast('article');
	$numb = 0;
	$page = 1;
	for($i = $id->id; $i >= 0; $i--)
	{
		$article = R::findOne('article', "`id` = ?", array($i)); 
		if ( isset($article) ) 
		{
			if ( fmod($numb, 10) == 0 ) 
			{
				$pageW[] = '<a href="index.php?page='.$page.'">'.$page."  ".'</a>';
				$page++;
			}
			$numb++;
			$art[] = $article['id'];
		}
	}
	return $art;
	return $pageW;
}

function pageW() {
	global $pageW;
	if ( isset($pageW) )
	foreach ($pageW as $page) {
		echo $page;
	}
}

function article_many () {
	global $art;
	$id = R::findLast('article');
	if ( isset($_GET['page']) ) {
	$begin = ($_GET['page'] * 10) - 10;
	$end =  ($_GET['page'] * 10) - 1;
	}
	else {
		$begin = 0;
		$end = 9;
	}
	for($i = $begin; $i <= $end; $i++) {
		$article = R::findOne('article', "`id` = ?", array($art[$i])); 
		if ( isset($article) ) 
		{
			echo '<h3><a href="article.php?id='.$article->id.'">'.$article->title.'</a></h3><br>'; 
			echo '<em>Опубликовано: '.$article->date.'</em><br>';
			echo '<p>'.$article->content.'</p><br>';
		}
		else {
//			$end--;
		}
	}
}

function article_one() {
	$article = R::findOne('article', "`id` = ?", array($_GET['id']));
	echo '<h3>'.$article->title.'</h3>';
	echo '<em>Опубликовано: '.$article->date.'</em>;';
	echo '<p>'.$article->content.'</p>';
}


?>