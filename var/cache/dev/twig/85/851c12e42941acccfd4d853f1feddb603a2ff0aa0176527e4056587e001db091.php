<?php

/* StockBundle::notification_list.html.twig */
class __TwigTemplate_37f2a0023fa70b37c4c0596311e8f2d87cb4ebc1cc90153e3cb6fd2c978a1933 extends Twig_Template
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
        $__internal_276a7683730dd00109ed5d10890a84e4f7ce8743180a1c2ef80617e79dc48229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276a7683730dd00109ed5d10890a84e4f7ce8743180a1c2ef80617e79dc48229->enter($__internal_276a7683730dd00109ed5d10890a84e4f7ce8743180a1c2ef80617e79dc48229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::notification_list.html.twig"));

        $__internal_bcbbdb36117c85c19c56cb4719066030bdf536c6e4ab89652fe128f1dd0250b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbbdb36117c85c19c56cb4719066030bdf536c6e4ab89652fe128f1dd0250b7->enter($__internal_bcbbdb36117c85c19c56cb4719066030bdf536c6e4ab89652fe128f1dd0250b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::notification_list.html.twig"));

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
        
        $__internal_276a7683730dd00109ed5d10890a84e4f7ce8743180a1c2ef80617e79dc48229->leave($__internal_276a7683730dd00109ed5d10890a84e4f7ce8743180a1c2ef80617e79dc48229_prof);

        
        $__internal_bcbbdb36117c85c19c56cb4719066030bdf536c6e4ab89652fe128f1dd0250b7->leave($__internal_bcbbdb36117c85c19c56cb4719066030bdf536c6e4ab89652fe128f1dd0250b7_prof);

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
        return array (  57 => 18,  52 => 14,  42 => 10,  38 => 8,  34 => 7,  29 => 4,  25 => 1,);
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
