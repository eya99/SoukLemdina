<?php

/* CommandeBundle:Panier:panier.html.twig */
class __TwigTemplate_f29652ac97c7ddc82e1ae6077d5b3aea3b6f717edde619a750f61455bf9bf889 extends Twig_Template
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
        $__internal_5231c1b9b77da5aab31d6d0069c4c60bda55a4bf76492c0a733f95ddc741a4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5231c1b9b77da5aab31d6d0069c4c60bda55a4bf76492c0a733f95ddc741a4d9->enter($__internal_5231c1b9b77da5aab31d6d0069c4c60bda55a4bf76492c0a733f95ddc741a4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Panier:panier.html.twig"));

        $__internal_3785b7a5d396e0e730c5b28c1e6bf2eeaaf583aa62103873b39c7aa25232801b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3785b7a5d396e0e730c5b28c1e6bf2eeaaf583aa62103873b39c7aa25232801b->enter($__internal_3785b7a5d396e0e730c5b28c1e6bf2eeaaf583aa62103873b39c7aa25232801b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Panier:panier.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Panier</li>
        <li>
            <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">
                ";
        // line 6
        if (((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 0)) {
            // line 7
            echo "                    Aucun article dans votre panier
                ";
        } elseif ((        // line 8
(isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 1)) {
            // line 9
            echo "                    1 article dans votre panier
                ";
        } else {
            // line 11
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
            echo " articles dans votre panier
                ";
        }
        // line 13
        echo "            </a>
        </li>
    </ul>
</div>";
        
        $__internal_5231c1b9b77da5aab31d6d0069c4c60bda55a4bf76492c0a733f95ddc741a4d9->leave($__internal_5231c1b9b77da5aab31d6d0069c4c60bda55a4bf76492c0a733f95ddc741a4d9_prof);

        
        $__internal_3785b7a5d396e0e730c5b28c1e6bf2eeaaf583aa62103873b39c7aa25232801b->leave($__internal_3785b7a5d396e0e730c5b28c1e6bf2eeaaf583aa62103873b39c7aa25232801b_prof);

    }

    public function getTemplateName()
    {
        return "CommandeBundle:Panier:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  46 => 11,  42 => 9,  40 => 8,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Panier</li>
        <li>
            <a href=\"{{ path('panier') }}\">
                {% if articles == 0 %}
                    Aucun article dans votre panier
                {% elseif articles == 1 %}
                    1 article dans votre panier
                {% else %}
                    {{ articles }} articles dans votre panier
                {% endif %}
            </a>
        </li>
    </ul>
</div>", "CommandeBundle:Panier:panier.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/CommandeBundle/Resources/views/Panier/panier.html.twig");
    }
}
