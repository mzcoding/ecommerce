<?php

/* admin/articles.tpl */
class __TwigTemplate_1994c216ec8a66aff29f63272911e779b5e35b4796fad6ad92f13fb2753d568b extends Twig_Template
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
            <h2>Список статей</h2>
        </div>

        <div class=\"content\">
        <div style='padding:15px; float:right;'>
        <a href=\"/articles/create\" class=\"pure-button pure-button-primary\">Добавить новую статью</a>
        </div>
       
        <br><br>
        <table width=\"100%\"><tr>
        <th>#ID</th><th>Заголовок</th><th>Тип статьи</th><th>Действия</th>
        </tr>
        ";
        // line 16
        echo (isset($context["list"]) ? $context["list"] : null);
        echo "
        </table>
        </div></div>
";
        // line 19
        $this->env->loadTemplate("admin/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "admin/articles.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 19,  37 => 16,  21 => 2,  19 => 1,);
    }
}
