<?php

/* index.tpl */
class __TwigTemplate_2a50ab69f9b34f9f3f59828d43ddc703caeec70149d84fd9ebfd7d85b630da42 extends Twig_Template
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
     <center>
      ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 6
            echo "       <h2 style=\"color:red\">
       ";
            // line 7
            echo (isset($context["error"]) ? $context["error"] : null);
            echo "
       </h2>
     ";
        } elseif ((isset($context["success"]) ? $context["success"] : null)) {
            // line 10
            echo "    
       <h2 style=\"color:green\">
       ";
            // line 12
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
       </h2>
   
       ";
        }
        // line 15
        echo " 
    
     </center>
        <div>
              <!-- A wrapper for all the blog posts -->
            <div class=\"posts\">
                <h1 class=\"content-subhead\">Статьи</h1>
        
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allArticles"]) ? $context["allArticles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 24
            echo "      
                <!-- A single blog post -->
                <section class=\"post\">
                    <header class=\"post-header\">
                        <img class=\"post-avatar\" alt=\"Tilo Mitra&#x27;s avatar\" height=\"48\" width=\"48\" src=\"/public/img/common/tilo-avatar.png\">

                        <h2 class=\"post-title\"><a href=\"/articles/show/";
            // line 30
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
            // line 43
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "short_text", array());
            echo "
                        </p>
                    </div>
                </section>
            
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "           
           </div>

";
        // line 52
        $this->env->loadTemplate("footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 52,  101 => 49,  89 => 43,  71 => 30,  63 => 24,  59 => 23,  49 => 15,  42 => 12,  38 => 10,  32 => 7,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
