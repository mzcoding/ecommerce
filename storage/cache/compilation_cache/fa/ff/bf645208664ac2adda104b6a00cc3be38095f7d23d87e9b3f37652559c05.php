<?php

/* profile.tpl */
class __TwigTemplate_faffbf645208664ac2adda104b6a00cc3be38095f7d23d87e9b3f37652559c05 extends Twig_Template
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
     <h2>Профиль пользователя</h2>
     <br>
     <form class=\"pure-form\" method=\"post\">
      <p>Логин:<br>
       <input type=\"text\" name=\"login\" disabled value=\"";
        // line 23
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "login", array());
        echo "\"  size=\"35\" required>
       </p>
    <p>E-mail:<br>
       <input type=\"email\" name=\"email\" value=\"";
        // line 26
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array());
        echo "\" size=\"35\" required>
       </p>
       <p>Пароль:<br>
       <input type=\"password\" name=\"password\"  size=\"35\" >
       <input type=\"hidden\" name=\"old_password\" value=\"";
        // line 30
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "password", array());
        echo "\">
       </p>
      <input type=\"hidden\" name=\"profile\" value=\"1\">
       <button type=\"submit\" class=\"pure-button\">Изменить профиль</button>
     </form>
     <br>
   
  ";
        // line 37
        $this->env->loadTemplate("footer.tpl")->display($context);
        echo "   ";
    }

    public function getTemplateName()
    {
        return "profile.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  72 => 30,  65 => 26,  59 => 23,  49 => 15,  42 => 12,  38 => 10,  32 => 7,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
