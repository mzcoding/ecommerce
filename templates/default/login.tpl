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
     <h2>Вход на сайт</h2>
     <br>
     <form class="pure-form" method="post">
      <p>Логин:<br>
       <input type="text" name="login" placeholder="Введите логин" size="35" required>
       </p>
    
       <p>Пароль:<br>
       <input type="password" name="password" placeholder="Введите пароль" size="35" required>
       </p>
      
       <button type="submit" class="pure-button">Войти  на сайт</button>
     </form>
     <br>
     <a href="/user/forget">Востановить пароль</a>
  {% include 'footer.tpl' %}   