<?php

/* EvenementBundle:Evenement:recentEvents.html.twig */
class __TwigTemplate_62c1a90108b76cdf2ef63aae74dc30371e593daa0ed5c2eeb5791932e12b8943 extends Twig_Template
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
        $__internal_713ca12ab9afd9d1b80a12284f070c7deaf160a04dc983545d8d9cf656d9e2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713ca12ab9afd9d1b80a12284f070c7deaf160a04dc983545d8d9cf656d9e2e6->enter($__internal_713ca12ab9afd9d1b80a12284f070c7deaf160a04dc983545d8d9cf656d9e2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:recentEvents.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 2
            echo "
    <div id=\"post-list-footer\">
        <div class=\"spost clearfix\">
            <div class=\"entry-c\">
                <div class=\"entry-title\">
                    <h4>";
            // line 7
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["event"], "nomEvenement", array()) . " - ") . $this->getAttribute($this->getAttribute($context["event"], "idUser", array()), "firstname", array())) . " ") . $this->getAttribute($this->getAttribute($context["event"], "idUser", array()), "lastname", array())), "html", null, true);
            echo "</h4>
                </div>
                <ul class=\"entry-meta\">
                    <li>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateDebut", array()), "m/d/Y"), "html", null, true);
            echo "</li>
                    <li>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "Heure", array()), "h:m"), "html", null, true);
            echo "</li>

                </ul>
            </div>
        </div>


    </div>
    <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_713ca12ab9afd9d1b80a12284f070c7deaf160a04dc983545d8d9cf656d9e2e6->leave($__internal_713ca12ab9afd9d1b80a12284f070c7deaf160a04dc983545d8d9cf656d9e2e6_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Evenement:recentEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  39 => 10,  33 => 7,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for event in e | slice(0,3) %}

    <div id=\"post-list-footer\">
        <div class=\"spost clearfix\">
            <div class=\"entry-c\">
                <div class=\"entry-title\">
                    <h4>{{ event.nomEvenement ~ ' - ' ~ event.idUser.firstname ~ ' ' ~ event.idUser.lastname }}</h4>
                </div>
                <ul class=\"entry-meta\">
                    <li>{{ event.dateDebut | date(\"m/d/Y\") }}</li>
                    <li>{{ event.Heure | date(\"h:m\") }}</li>

                </ul>
            </div>
        </div>


    </div>
    <br>
{% endfor %}", "EvenementBundle:Evenement:recentEvents.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/EvenementBundle/Resources/views/Evenement/recentEvents.html.twig");
    }
}
