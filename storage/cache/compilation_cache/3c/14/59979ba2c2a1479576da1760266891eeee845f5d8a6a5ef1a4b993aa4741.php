<?php

/* admin/newCategory.tpl */
class __TwigTemplate_3c1459979ba2c2a1479576da1760266891eeee845f5d8a6a5ef1a4b993aa4741 extends Twig_Template
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
            <h2>Добавить категорию</h2>
        </div>

        <div class=\"content\">
        <form method=\"post\" class=\"pure-form\">
         <p>Заголовок категории:<br>
         <input type=\"text\" name=\"title\" placeholder=\"Введите заголовок\" size=\"35\">
         </p>
         <p>Описание категори (макс: 255 символов):<br>
         <textarea name=\"description\" cols=\"45\" rows=\"7\"></textarea>
         </p>
         <br>
         <button type=\"submit\" class=\"pure-button pure-button-success\">Добавить категорию</button>
        </form>
        </div></div>
";
        // line 19
        $this->env->loadTemplate("admin/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "admin/newCategory.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 19,  21 => 2,  19 => 1,);
    }
}
