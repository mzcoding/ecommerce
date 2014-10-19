{% include 'header.tpl' %}
{% include 'sidebar.tpl' %}
    <div class="content pure-u-1 pure-u-md-3-4">
       <center>
      {% if error %}
       <h2 style="color:red">
       {{error}}
       </h2>
     {% elseif success%}
    
       <h2 style="color:green">
       {{success}}
       </h2>
   
       {% endif %} 

     </center>
     <div>
     <h2>Профиль пользователя</h2>
     <br>
     <form class="pure-form" method="post">
      <p>Логин:<br>
       <input type="text" name="login" disabled value="{{user.login}}"  size="35" required>
       </p>
    <p>E-mail:<br>
       <input type="email" name="email" value="{{user.email}}" size="35" required>
       </p>
       <p>Пароль:<br>
       <input type="password" name="password"  size="35" >
       <input type="hidden" name="old_password" value="{{user.password}}">
       </p>
      <input type="hidden" name="profile" value="1">
       <button type="submit" class="pure-button">Изменить профиль</button>
     </form>
     <br>
   
  {% include 'footer.tpl' %}   