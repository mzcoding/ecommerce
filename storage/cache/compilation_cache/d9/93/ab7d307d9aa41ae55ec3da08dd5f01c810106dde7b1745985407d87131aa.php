<?php

/* header.tpl */
class __TwigTemplate_d993ab7d307d9aa41ae55ec3da08dd5f01c810106dde7b1745985407d87131aa extends Twig_Template
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
        echo "<!doctype html>
<html>
<head>
  <meta charset=\"utf-8\">
 <title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>

<link rel=\"stylesheet\" href=\"http://yui.yahooapis.com/pure/0.5.0/pure-min.css\">



<!--[if lte IE 8]>
  
    <link rel=\"stylesheet\" href=\"http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css\">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel=\"stylesheet\" href=\"http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css\">
  
<!--<![endif]-->


  
    <!--[if lte IE 8]>
        <link rel=\"stylesheet\" href=\"/public/css/blog-old-ie.css\">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel=\"stylesheet\" href=\"/public/css/blog.css\">
    <!--<![endif]-->
  
</head>
<body>";
    }

    public function getTemplateName()
    {
        return "header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
