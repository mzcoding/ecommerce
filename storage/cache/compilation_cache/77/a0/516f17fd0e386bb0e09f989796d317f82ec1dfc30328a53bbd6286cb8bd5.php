<?php

/* payments.tpl */
class __TwigTemplate_77a0516f17fd0e386bb0e09f989796d317f82ec1dfc30328a53bbd6286cb8bd5 extends Twig_Template
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
    <h2>Выбрать способ оплаты</h2><br>
    
    <p>
     <strong>Яндекс деньги:</strong> &nbsp; <img src=\"https://money.yandex.ru/i/b-arrow-logo__img.2.ru.png\">
     <br>
     <form class=\"pure-form\" method=\"post\" action=\"https://money.yandex.ru/quickpay/confirm.xml\">
      <input type=\"hidden\" name=\"receiver\" value=\"41001490055622\">
      <input type=\"hidden\" name=\"formcomment\" value=\"Оплата, № статьи \">
      <input type=\"hidden\" name=\"short-dest\" value=\"Оплата, № статьи \">
      <input type=\"hidden\" name=\"quickpay-form\" value=\"small\">
      <input type=\"hidden\" name=\"targets\" value=\"Оплата, № статьи \">
      <input type=\"hidden\" name=\"sum\" value=\"";
        // line 15
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "\">
      <p><strong>Со счета в Яндекс:</strong> &nbsp; <input type=\"radio\" name=\"paymentType\" value=\"PC\" checked>  </p>
      <p><strong>С банковской карты:</strong> &nbsp; <input type=\"radio\" name=\"paymentType\" value=\"AC\">  </p>
      <input type=\"hidden\" name=\"label\" value=\"\">
      <input type=\"email\" name=\"need-email\" placeholder=\"Ваш email\" required>
      <button class=\"pure-button pure-button-primary\" type=\"submit\">Оплатить</button>
     </form>
    </p>
 
    <p><strong>Оплата с помощью Робокасса:</strong> &nbsp; <img src=\"http://doruchenko.ru/wp-content/uploads/2013/04/ROBOKASSA2.jpg\">
    <br>
     <form method=\"get\" action=\"{robokassa}}\">
      <button type=\"submit\" class=\"pure-button pure-button-primary\">Оплатить</button>
     </form>
    </p>
    </div>
    
    
";
        // line 33
        $this->env->loadTemplate("footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "payments.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 33,  37 => 15,  23 => 3,  21 => 2,  19 => 1,);
    }
}
