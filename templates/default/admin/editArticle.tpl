{% include 'admin/header.tpl'%}
<script>
 $(function(){
  $(".date").click(function(){
    $('input[name="created_at"]').val("{{date}}");
  });
  $('input[name="pay"]').click(function(){
   if($('input[name="pay"]').prop("checked")){
     $(".payment").show();
   }else{
     $(".payment").hide();
   }
  });
 });
</script>
<div id="main">
        <div class="header">
            <h2>Редактировать статью</h2>
        </div>

        <div class="content">
        <form method="post" class="pure-form">
         <p>Заголовок категории:<br>
         <input type="text" name="title" value="{{article.title}}" size="35" required>
         </p>
         <p>Укажите ключевые слова:<br>
         <input type="text" name="keywords" value="{{article.keywords}}" size="35">
         </p>
         <p>Выбрать категорию:<br>
          <select name="category[]"  multiple>
          {% for all in list  %}
            <option value="{{all.idcategory}}">{{all.title}}</option>
          {% endfor %}
          </select>
         </p>
         <p>Текст статьи:<br>
         <textarea name="text" id="text" cols="45" rows="7">{{article.text}}</textarea>
         <script>CKEDITOR.replace('text');</script>
         </p>
            <p>Укажите дату добовления:<br>
         <input type="text" name="created_at" placeholder="{{date}}" value="{{article.created_at}}" size="35"> &nbsp; <a href='javascript:void(0);' class='date'>Текущая дата</a>
         </p>
         <p>Платная статья:<br>
         <input type="checkbox" name='pay' value="1" {% if article.pay == 1%} checked {% endif %}>
         </p>
         <div class='payment' style='display:none;'>
         <p>Укажите цену статьи:<br>
         <input type="text" name="price" value="{{price}}" size="15">
         </p>
         </div>
         <br>
         <button type="submit" class="pure-button pure-button-success">Редактировать статью</button>
        </form>
        </div></div>
{% include 'admin/footer.tpl'%}