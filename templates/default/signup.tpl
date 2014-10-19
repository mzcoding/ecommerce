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
     <h2>Регистрация</h2>
     <br>
     <form class="pure-form" method="post">
      <p>Логин:<br>
       <input type="text" name="login" placeholder="Введите логин" size="35" required>
       </p>
       <p>E-mail:<br>
       <input type="email" name="email" placeholder="Введите email" size="35" required>
       </p>
       <p>Пароль:<br>
       <input type="password" name="password" placeholder="Введите пароль" size="35" required>
       </p>
        <p>Повторите Пароль:<br>
       <input type="password" name="repassword" placeholder="Повторите пароль" size="35" required>
       </p>
       <button type="submit" name='signup' class="pure-button">Зарегестрироваться на сайте</button>
     </form>
  {% include 'footer.tpl' %}   