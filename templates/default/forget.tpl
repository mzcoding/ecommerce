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
     <h2>Восстановить пароль</h2>
     <br>
     <form class="pure-form" method="post">
      <p>E-mail:<br>
       <input type="text" name="email" placeholder="Введите email" size="35" required>
       </p>
 
      
       <button type="submit" class="pure-button">Восстановить пароль</button>
     </form>
     
  {% include 'footer.tpl' %}   
