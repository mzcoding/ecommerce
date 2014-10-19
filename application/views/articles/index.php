<?php
$all = $model->allArticles();
$count = count($all);
$result = "";
for($i=0; $i < $count; $i++){
	$pay = ($all[$i]->pay) ? "Платно" : "Бесплатно";
	$result .= "<tr>
	            <td>".$all[$i]->idarticles."</td>
	            <td>".$all[$i]->title."</td>
	            <td>".$pay."</td>
	            <td><a href='/articles/edit/".$all[$i]->idarticles."'>Редактировать</a>
	            &nbsp;&nbsp;
	            <a href='javascript:void(0)' class='delete_article' rel='".$all[$i]->idarticles."'>Удалить</a></td>
	            </tr>";
}
tmp::params(array('list' => $result));
tmp::params($params);
tmp::init()->load('admin/articles');
