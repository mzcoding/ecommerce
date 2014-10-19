{% include 'admin/header.tpl'%}
<div id="main">
        <div class="header">
            <h2>Список пользователей</h2>
        </div>

        <div class="content">
     
       
        <br><br>
        <table width="100%"><tr>
        <th>#ID</th><th>Логин</th><th>E-mail</th><th>Действия</th>
        </tr>
        {% for user in list %}
          <tr>
           <td>{{user.idusers}}</td>
           <td>{{user.login}}</td>
           <td>{{user.email}}</td>
           <td><a href='javascript:void(0)' class="delete_user" rel="{{user.idusers}}">Удалить</a></td>
          </tr>
        {% endfor %}
        </table>
        </div></div>
{% include 'admin/footer.tpl'%}