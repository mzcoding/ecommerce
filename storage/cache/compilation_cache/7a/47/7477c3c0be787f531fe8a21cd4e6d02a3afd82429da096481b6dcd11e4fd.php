<?php

/* admin/sidebar.tpl */
class __TwigTemplate_7a477477c3c0be787f531fe8a21cd4e6d02a3afd82429da096481b6dcd11e4fd extends Twig_Template
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
        echo "<div id=\"layout\">
    <!-- Menu toggle -->
    <a href=\"#menu\" id=\"menuLink\" class=\"menu-link\">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id=\"menu\">
        <div class=\"pure-menu pure-menu-open\">
            <a class=\"pure-menu-heading\" href=\"#\">Навигация</a>

            <ul>
                <li ";
        // line 13
        if (((isset($context["type"]) ? $context["type"] : null) == "index")) {
            echo " class=\"menu-item-divided pure-menu-selected\" ";
        }
        echo "><a href=\"/admin\">Главная</a></li>
                <li ";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : null) == "category")) {
            echo " class=\"menu-item-divided pure-menu-selected\" ";
        }
        echo "><a href=\"/category\">Категории</a></li>

                <li ";
        // line 16
        if (((isset($context["type"]) ? $context["type"] : null) == "articles")) {
            echo " class=\"menu-item-divided pure-menu-selected\" ";
        }
        echo ">
                    <a href=\"/articles\">Статьи</a>
                </li>

                <li ";
        // line 20
        if (((isset($context["type"]) ? $context["type"] : null) == "users")) {
            echo " class=\"menu-item-divided pure-menu-selected\" ";
        }
        echo "><a href=\"/user/listusers\">Пользователи</a></li>
                <li ";
        // line 21
        if (((isset($context["type"]) ? $context["type"] : null) == "transaction")) {
            echo " class=\"menu-item-divided pure-menu-selected\" ";
        }
        echo "><a href=\"/transaction\">Транзакции</a></li>
            
            </ul>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "admin/sidebar.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  55 => 20,  46 => 16,  39 => 14,  33 => 13,  19 => 1,);
    }
}
