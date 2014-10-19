<?php

/* admin/editCategory.tpl */
class __TwigTemplate_9bcdc3997f159eeca890066e9d641fb38389f85462010271535bf9b601e02041 extends Twig_Template
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
        echo "<div id=\"main\">
        <div class=\"header\">
            <h2>Редактировать категорию</h2>
        </div>

        <div class=\"content\">
        <form method=\"post\" class=\"pure-form\">
         <p>Заголовок категории:<br>
         <input type=\"text\" name=\"title\" value=\"";
        // line 10
        echo $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title", array());
        echo "\" size=\"35\">
         </p>
         <p>Описание категори (макс: 255 символов):<br>
         <textarea name=\"description\" cols=\"45\" rows=\"7\">";
        // line 13
        echo $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description", array());
        echo "</textarea>
         </p>
         <br>
         <button type=\"submit\" class=\"pure-button pure-button-success\">Изменить категорию</button>
        </form>
        </div></div>
";
        // line 19
        $this->env->loadTemplate("admin/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "admin/editCategory.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 19,  37 => 13,  31 => 10,  21 => 2,  19 => 1,);
    }
}
