<?php

/* 404.tpl */
class __TwigTemplate_e4892d07eb0f23d67b8740f4258d818dc33667837f86b8611ed84622a483bf9d extends Twig_Template
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
        $this->env->loadTemplate("header.tpl")->display($context);
        // line 2
        echo "
<h1>Страница не найдена</h1>";
    }

    public function getTemplateName()
    {
        return "404.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
