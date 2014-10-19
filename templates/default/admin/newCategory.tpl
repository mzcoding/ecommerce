{% include 'admin/header.tpl'%}
<div id="main">
        <div class="header">
            <h2>Добавить категорию</h2>
        </div>

        <div class="content">
        <form method="post" class="pure-form">
         <p>Заголовок категории:<br>
         <input type="text" name="title" placeholder="Введите заголовок" size="35">
         </p>
         <p>Описание категори (макс: 255 символов):<br>
         <textarea name="description" cols="45" rows="7"></textarea>
         </p>
         <br>
         <button type="submit" class="pure-button pure-button-success">Добавить категорию</button>
        </form>
        </div></div>
{% include 'admin/footer.tpl'%}