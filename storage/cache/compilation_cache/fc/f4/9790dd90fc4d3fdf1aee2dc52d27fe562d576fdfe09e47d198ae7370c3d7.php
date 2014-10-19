<?php

/* success.tpl */
class __TwigTemplate_fcf49790dd90fc4d3fdf1aee2dc52d27fe562d576fdfe09e47d198ae7370c3d7 extends Twig_Template
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
        $this->env->loadTemplate("sidebar.tpl")->display($context);
        // line 3
        echo "    <div class=\"content pure-u-1 pure-u-md-3-4\">
    <h2>Успешная оплата</h2><br>
    
    <p>
    <center><img src=\"/public/success.png\"></center>
    </p>
    </div>
    
";
        // line 11
        $this->env->loadTemplate("footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "success.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 11,  23 => 3,  21 => 2,  19 => 1,);
    }
}
