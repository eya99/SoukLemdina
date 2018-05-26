<?php

/* StockBundle::notification_list.html.twig */
class __TwigTemplate_7093f3b9b9227eaebdc05610c3797e50b2b57bb80a970fb7237621f108658923 extends Twig_Template
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
        $__internal_6a8afd9f274e4306fde893774f4f9c34ee91875cdd66e8343717c6a452ed437d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8afd9f274e4306fde893774f4f9c34ee91875cdd66e8343717c6a452ed437d->enter($__internal_6a8afd9f274e4306fde893774f4f9c34ee91875cdd66e8343717c6a452ed437d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::notification_list.html.twig"));

        // line 1
        echo "

    ";
        // line 4
        echo "

<marquee Class=\"Scroller\" behavior=\"scroll\" direction=\"left\" width=\"100%\" height=\"19\" scrollamount=\"15\" scrolldelay=\"0\" onmouseover=\"this.stop()\" onmouseout=\"this.start()\"><font color=\"#333399\"><strong>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notificationList"]) ? $context["notificationList"] : $this->getContext($context, "notificationList")));
        foreach ($context['_seq'] as $context["_key"] => $context["notificationItem"]) {
            // line 8
            echo "

    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["notificationItem"], 0, array(), "array"), "html", null, true);
            echo " &emsp; &emsp;&emsp;&emsp;&emsp;


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificationItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </strong></font></marquee>


    ";
        // line 18
        echo "
</nav>
";
        
        $__internal_6a8afd9f274e4306fde893774f4f9c34ee91875cdd66e8343717c6a452ed437d->leave($__internal_6a8afd9f274e4306fde893774f4f9c34ee91875cdd66e8343717c6a452ed437d_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle::notification_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  49 => 14,  39 => 10,  35 => 8,  31 => 7,  26 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

    {#{%  if  notificationItem.date|date('Y-m-d') < (\"now\" - 7) |date('Y-m-d')  %} #}


<marquee Class=\"Scroller\" behavior=\"scroll\" direction=\"left\" width=\"100%\" height=\"19\" scrollamount=\"15\" scrolldelay=\"0\" onmouseover=\"this.stop()\" onmouseout=\"this.start()\"><font color=\"#333399\"><strong>
        {% for notificationItem in notificationList %}


    {{ notificationItem[0] }} &emsp; &emsp;&emsp;&emsp;&emsp;


{% endfor %}
        </strong></font></marquee>


    {#  {% endif %} #}

</nav>
", "StockBundle::notification_list.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/StockBundle/Resources/views/notification_list.html.twig");
    }
}
