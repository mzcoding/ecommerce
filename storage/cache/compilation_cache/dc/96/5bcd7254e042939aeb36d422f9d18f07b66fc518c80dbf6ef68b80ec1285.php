<?php

/* signup.tpl */
class __TwigTemplate_dc965bcd7254e042939aeb36d422f9d18f07b66fc518c80dbf6ef68b80ec1285 extends Twig_Template
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
     <h2>Регистрация</h2>
     <br>
     <form class=\"pure-form\" method=\"post\">
      <p>Логин:<br>
       <input type=\"text\" name=\"login\" placeholder=\"Введите логин\" size=\"35\" required>
       </p>
       <p>E-mail:<br>
       <input type=\"email\" name=\"email\" placeholder=\"Введите email\" size=\"35\" required>
       </p>
       <p>Пароль:<br>
       <input type=\"password\" name=\"password\" placeholder=\"Введите пароль\" size=\"35\" required>
       </p>
        <p>Повторите Пароль:<br>
       <input type=\"password\" name=\"repassword\" placeholder=\"Повторите пароль\" size=\"35\" required>
       </p>
       <button type=\"submit\" name='signup' class=\"pure-button\">Зарегестрироваться на сайте</button>
     </form>
  ";
        // line 36
        $this->env->loadTemplate("footer.tpl")->display($context);
        echo "   ";
    }

    public function getTemplateName()
    {
        return "signup.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 36,  49 => 15,  42 => 12,  38 => 10,  32 => 7,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
