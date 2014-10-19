<?php

/* hello.tpl */
class __TwigTemplate_a8c347d3294b4e0790193470d98e9a93f3ee3b929e545883b362fa040fe85743 extends Twig_Template
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
        echo "Привет..апвва";
    }

    public function getTemplateName()
    {
        return "hello.tpl";
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
