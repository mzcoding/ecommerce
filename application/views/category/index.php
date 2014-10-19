<?php
$data = $model->listCategory();
$count = count($data);
$out = "<table width'100%'><tr><th>#ID</th><th>Заголовок</th><th>Описание</th><th>Действия</th></tr>";
for($i=0; $i < $count; $i++){
 $out .= "<tr>
   <td>". $data[$i]->idcategory."</td>
   <td>". $data[$i]->title."</td>
   <td>". mb_substr($data[$i]->description, 0, 155)."</td>
   <td><a href='/category/edit/".$data[$i]->idcategory."'>Редактировать</a><br> 
   <a href='javascript:void(0)' class='delete_category' rel='".$data[$i]->idcategory."'>Удалить</a></td>
 </tr>";	
}
$out .= "</table>";
tmp::params(array("list" => $out));
tmp::params($params);
tmp::init()->load('admin/listCategory');	