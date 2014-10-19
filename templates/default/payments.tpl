{% include 'header.tpl' %}
{% include 'sidebar.tpl' %}
    <div class="content pure-u-1 pure-u-md-3-4">
    <h2>Выбрать способ оплаты</h2><br>
    <script>
     var flag = false;
     function sendData(form){
      var system = $("input[name='system']").val();
      var artid = {{artid}};
      $.post("/application/ajax/init.php", {system:system, artid:artid}, function(){
        flag = true;
        $(form).submit();
      });
     }
     function sendRobo(){
       var system = "robokassa";
      var artid = {{artid}};
       $.post("/application/ajax/init.php", {system:system, artid:artid}, function(){
        flag = true;
        location.reload('{{robokassa}}');
      });
     }
     $("form[name='yandex']").on("submit", function(e){
       if(!flag){
         e.preventDefault();
         sendData(this);
       }
       
     });
     $(".robo").on("click", function(e){
      if(!flag){
       e.preventDefault();
       sendRobo();
      }
     });
    </script>
    <p>
     <strong>Яндекс деньги:</strong> &nbsp; <img src="https://money.yandex.ru/i/b-arrow-logo__img.2.ru.png">
     <br>
     <form class="pure-form" name='yandex' method="post" action="https://money.yandex.ru/quickpay/confirm.xml">
      <input type="hidden" name="receiver" value="41001490055622">
      <input type="hidden" name="formcomment" value="Оплата, №{{artid}} статьи ">
      <input type="hidden" name="short-dest" value="Оплата, №{{artid}} статьи ">
      <input type="hidden" name="quickpay-form" value="small">
      <input type="hidden" name="targets" value="Оплата, №{{artid}} статьи ">
      <input type="hidden" name="sum" value="{{price}}">
      <p><strong>Со счета в Яндекс:</strong> &nbsp; <input type="radio" name="paymentType" value="PC" checked>  </p>
      <p><strong>С банковской карты:</strong> &nbsp; <input type="radio" name="paymentType" value="AC">  </p>
      <input type="hidden" name="label" value="">
      <input type="email" name="need-email" placeholder="Ваш email" required>
      <button class="pure-button pure-button-primary" type="submit">Оплатить</button>
      <input type="hidden" name="system" value="yandex">
     </form>
    </p>
 
    <p><strong>Оплата с помощью Робокасса:</strong> &nbsp; <img src="http://doruchenko.ru/wp-content/uploads/2013/04/ROBOKASSA2.jpg">
    <br>
 <a href="{robokassa}}" class="robo">
      <button type="submit" class="pure-button pure-button-primary">Оплатить</button>
    </a> 
    </p>
    </div>
    
    
{% include 'footer.tpl' %}