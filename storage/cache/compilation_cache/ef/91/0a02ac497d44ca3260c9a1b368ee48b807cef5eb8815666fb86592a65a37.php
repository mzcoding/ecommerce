<?php

/* admin/users.tpl */
class __TwigTemplate_ef910a02ac497d44ca3260c9a1b368ee48b807cef5eb8815666fb86592a65a37 extends Twig_Template
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
        $this->env->loadTemplate("admin/header.tpl")->display($context);
        // line 2
        echo "<div id=\"main\">
        <div class=\"header\">
            <h2>Список пользователей</h2>
        </div>

        <div class=\"content\">
     
       
        <br><br>
        <table width=\"100%\"><tr>
        <th>#ID</th><th>Логин</th><th>E-mail</th><th>Действия</th>
        </tr>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "          <tr>
           <td>";
            // line 16
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "idusers", array());
            echo "</td>
           <td>";
            // line 17
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "login", array());
            echo "</td>
           <td>";
            // line 18
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array());
            echo "</td>
           <td><a href='javascript:void(0)' class=\"delete_user\" rel=\"";
            // line 19
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "idusers", array());
            echo "\">Удалить</a></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </table>
        </div></div>
";
        // line 24
        $this->env->loadTemplate("admin/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "admin/users.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 24,  63 => 22,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  39 => 15,  35 => 14,  21 => 2,  19 => 1,);
    }
}
