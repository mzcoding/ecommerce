<?php

/* admin/editArticle.tpl */
class __TwigTemplate_f70c7aae117dbdeda68775e3301085db5ca79088f191d37b8346f553eea3a7ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("admin/header.tpl")->display($context);
        // line 2
        echo "<script>
 \$(function(){
  \$(\".date\").click(function(){
    \$('input[name=\"created_at\"]').val(\"";
        // line 5
        echo (isset($context["date"]) ? $context["date"] : null);
        echo "\");
  });
  \$('input[name=\"pay\"]').click(function(){
   if(\$('input[name=\"pay\"]').prop(\"checked\")){
     \$(\".payment\").show();
   }else{
     \$(\".payment\").hide();
   }
  });
 });
</script>
<div id=\"main\">
        <div class=\"header\">
            <h2>Редактировать статью</h2>
        </div>

        <div class=\"content\">
        <form method=\"post\" class=\"pure-form\">
         <p>Заголовок категории:<br>
         <input type=\"text\" name=\"title\" value=\"";
        // line 24
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array());
        echo "\" size=\"35\" required>
         </p>
         <p>Укажите ключевые слова:<br>
         <input type=\"text\" name=\"keywords\" value=\"";
        // line 27
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "keywords", array());
        echo "\" size=\"35\">
         </p>
         <p>Выбрать категорию:<br>
          <select name=\"category[]\"  multiple>
          ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["all"]) {
            // line 32
            echo "            <option value=\"";
            echo $this->getAttribute((isset($context["all"]) ? $context["all"] : null), "idcategory", array());
            echo "\">";
            echo $this->getAttribute((isset($context["all"]) ? $context["all"] : null), "title", array());
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['all'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "          </select>
         </p>
         <p>Текст статьи:<br>
         <textarea name=\"text\" id=\"text\" cols=\"45\" rows=\"7\">";
        // line 37
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "text", array());
        echo "</textarea>
         <script>CKEDITOR.replace('text');</script>
         </p>
            <p>Укажите дату добовления:<br>
         <input type=\"text\" name=\"created_at\" placeholder=\"";
        // line 41
        echo (isset($context["date"]) ? $context["date"] : null);
        echo "\" value=\"";
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "created_at", array());
        echo "\" size=\"35\"> &nbsp; <a href='javascript:void(0);' class='date'>Текущая дата</a>
         </p>
         <p>Платная статья:<br>
         <input type=\"checkbox\" name='pay' value=\"1\" ";
        // line 44
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "pay", array()) == 1)) {
            echo " checked ";
        }
        echo ">
         </p>
         <div class='payment' style='display:none;'>
         <p>Укажите цену статьи:<br>
         <input type=\"text\" name=\"price\" value=\"";
        // line 48
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "\" size=\"15\">
         </p>
         </div>
         <br>
         <button type=\"submit\" class=\"pure-button pure-button-success\">Редактировать статью</button>
        </form>
        </div></div>
";
        // line 55
        $this->env->loadTemplate("admin/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "admin/editArticle.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 55,  105 => 48,  96 => 44,  88 => 41,  81 => 37,  76 => 34,  65 => 32,  61 => 31,  54 => 27,  48 => 24,  26 => 5,  21 => 2,  19 => 1,);
    }
}
