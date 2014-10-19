{% include 'admin/header.tpl'%}
<div id="main">
        <div class="header">
            <h2>Список категорий</h2>
        </div>

        <div class="content">
        <div style='padding:15px; float:right;'>
        <a href="/category/create" class="pure-button pure-button-primary">Добавить новую категорию</a>
        </div>
       
        <br><br>
        {{list}}
        </div></div>
{% include 'admin/footer.tpl'%}