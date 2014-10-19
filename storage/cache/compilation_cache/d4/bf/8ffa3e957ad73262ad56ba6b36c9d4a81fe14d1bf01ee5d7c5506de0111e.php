<?php

/* admin/listCategory.tpl */
class __TwigTemplate_d4bf8ffa3e957ad73262ad56ba6b36c9d4a81fe14d1bf01ee5d7c5506de0111e extends Twig_Template
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
            <h2>Список категорий</h2>
        </div>

        <div class=\"content\">
        <div style='padding:15px; float:right;'>
        <a href=\"/category/create\" class=\"pure-button pure-button-primary\">Добавить новую категорию</a>
        </div>
       
        <br><br>
        ";
        // line 13
        echo (isset($context["list"]) ? $context["list"] : null);
        echo "
        </div></div>
";
        // line 15
        $this->env->loadTemplate("admin/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "admin/listCategory.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  34 => 13,  21 => 2,  19 => 1,);
    }
}
