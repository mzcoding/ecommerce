<?php

/* admin/header.tpl */
class __TwigTemplate_43b554392b6564c75c4cdd5bb5402b57a08516058554ea2f7e9c7a401c3079fb extends Twig_Template
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
<html lang=\"en\">
<head>
 <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>";
        // line 6
        echo (isset($context["title"]) ? $context["title"] : null);
        echo " </title>
<link rel=\"stylesheet\" href=\"http://yui.yahooapis.com/pure/0.5.0/pure-min.css\">
<!--[if lte IE 8]>
   <link rel=\"stylesheet\" href=\"/public/admin/css/layouts/side-menu-old-ie.css\">
<![endif]-->
<!--[if gt IE 8]><!-->
   <link rel=\"stylesheet\" href=\"/public/admin/css/layouts/side-menu.css\">
<!--<![endif]-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/admin/css/jquery.noty.css\">

<script src=\"/public/admin/js/jquery.js\"></script>
<script src=\"/public/admin/js/jquery.noty.min.js\"></script>
<script src=\"/public/admin/spin.js\"></script>
<script src=\"/public/admin/functions.js\"></script>
<script src=\"/public/ckeditor/ckeditor.js\"></script>
</head>
<body>
";
        // line 23
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo " <script>success('";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "');</script>
";
        } elseif ((isset($context["error"]) ? $context["error"] : null)) {
            // line 26
            echo " <script>error('";
            echo (isset($context["error"]) ? $context["error"] : null);
            echo "');</script>
";
        }
        // line 28
        echo "<div id=\"loader\"></div>
";
        // line 29
        $this->env->loadTemplate("admin/sidebar.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "admin/header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 29,  60 => 28,  54 => 26,  48 => 24,  46 => 23,  96 => 55,  79 => 41,  70 => 34,  59 => 32,  55 => 31,  26 => 6,  21 => 2,  19 => 1,);
    }
}
