<?php

/* sidebar.tpl */
class __TwigTemplate_f46a22273c325d3dd564528dea7cd6f08ae61e7239dd39523e66ff8fc23233f6 extends Twig_Template
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
        echo "<!--menu-->
<div id=\"layout\" class=\"pure-g\">
    <div class=\"sidebar pure-u-1 pure-u-md-1-4\">
        <div class=\"header\">
            <h1 class=\"brand-title\">Навигация</h1>


            <nav class=\"nav\">
                <ul class=\"nav-list\">
  
                ";
        // line 11
        if ((isset($context["isLogin"]) ? $context["isLogin"] : null)) {
            // line 12
            echo "                 <li class=\"nav-item\">
                        <a class=\"pure-button\" href=\"/user/profile\">Профиль</a>
                    </li>
                     <li class=\"nav-item\">
                        <a class=\"pure-button\" href=\"/user/logout\">Выход</a>
                    </li>
                ";
        } else {
            // line 19
            echo "                    <li class=\"nav-item\">
                        <a class=\"pure-button\" href=\"/user/signup\">Регистрация</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"pure-button\" href=\"/user/login\">Вход</a>
                    </li>
                    ";
        }
        // line 26
        echo "                </ul>
            </nav>
        </div>
    </div>
<!--End menu-->";
    }

    public function getTemplateName()
    {
        return "sidebar.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 26,  42 => 19,  33 => 12,  31 => 11,  19 => 1,);
    }
}
