<?php

/* article.tpl */
class __TwigTemplate_80121763eae1796605cbc254439a961671eeaf79a4f9a039359b8e6fc59b60f7 extends Twig_Template
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
    
        <div>
              <!-- A wrapper for all the blog posts -->
            <div class=\"posts\">
                <h1 class=\"content-subhead\">";
        // line 8
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array());
        echo "</h1>
        

      
                <!-- A single blog post -->
                <section class=\"post\">
                    <header class=\"post-header\">
                        <img class=\"post-avatar\" alt=\"Tilo Mitra&#x27;s avatar\" height=\"48\" width=\"48\" src=\"/public/img/common/tilo-avatar.png\">

                        <h2 class=\"post-title\"><a href=\"/article/show/";
        // line 17
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "idarticles", array());
        echo "\">";
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array());
        echo "</a></h2>

                        <p class=\"post-meta\">
                            Опубликовал админ в категории
                            
                             <a class=\"post-category post-category-design\" href=\"#\">css</a> 
                                                         
                            
                        </p>
                    </header>

                    <div class=\"post-description\">
                        <p>
                         ";
        // line 30
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "text", array());
        echo "
                        </p>
                    </div>
                </section>
            

           
           </div>

";
        // line 39
        $this->env->loadTemplate("footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "article.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 39,  60 => 30,  42 => 17,  30 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }
}
