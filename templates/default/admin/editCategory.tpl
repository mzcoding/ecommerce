{% include 'admin/header.tpl'%}
<div id="main">
        <div class="header">
            <h2>Редактировать категорию</h2>
        </div>

        <div class="content">
        <form method="post" class="pure-form">
         <p>Заголовок категории:<br>
         <input type="text" name="title" value="{{category.title}}" size="35">
         </p>
         <p>Описание категори (макс: 255 символов):<br>
         <textarea name="description" cols="45" rows="7">{{category.description}}</textarea>
         </p>
         <br>
         <button type="submit" class="pure-button pure-button-success">Изменить категорию</button>
        </form>
        </div></div>
{% include 'admin/footer.tpl'%}