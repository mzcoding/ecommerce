{% include 'admin/header.tpl'%}
<div id="main">
        <div class="header">
            <h2>Список статей</h2>
        </div>

        <div class="content">
        <div style='padding:15px; float:right;'>
        <a href="/articles/create" class="pure-button pure-button-primary">Добавить новую статью</a>
        </div>
       
        <br><br>
        <table width="100%"><tr>
        <th>#ID</th><th>Заголовок</th><th>Тип статьи</th><th>Действия</th>
        </tr>
        {{list}}
        </table>
        </div></div>
{% include 'admin/footer.tpl'%}