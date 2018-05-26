<?php

/* CommandeBundle:Panier:consulterPanier.html.twig */
class __TwigTemplate_da0a7fb8f192202d1f326e4f1166a0d8841174b2f13c01206e7edfeb89ac6f30 extends Twig_Template
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
        $__internal_f90dbe5aa7fd9bcb3ba56db87278b2c1aa856d5c6ebfa8dadd15b8c80273a00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f90dbe5aa7fd9bcb3ba56db87278b2c1aa856d5c6ebfa8dadd15b8c80273a00c->enter($__internal_f90dbe5aa7fd9bcb3ba56db87278b2c1aa856d5c6ebfa8dadd15b8c80273a00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Panier:consulterPanier.html.twig"));

        $__internal_3ffbdefd94495a09e7cac70afcd20c6cb35708d6495d7aec94131f45c06118da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffbdefd94495a09e7cac70afcd20c6cb35708d6495d7aec94131f45c06118da->enter($__internal_3ffbdefd94495a09e7cac70afcd20c6cb35708d6495d7aec94131f45c06118da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Panier:consulterPanier.html.twig"));

        // line 1
        echo "<h1>panier</h1>
<table border=\"1\">
    <tr>
        <th>Cathegorie</th>
        <th>Libelle</th>
        <th>Description</th>
        <th>Etat</th>
        <th>Quantité</th>
        <th>Remise</th>
        <th>Type</th>
        <th>Prix</th>
    </tr>
    <tr>
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["demande"]);
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["demande2"]);
            foreach ($context['_seq'] as $context["_key"] => $context["demande2"]) {
                // line 16
                echo "        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande2"], "categorie", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande2"], "libelle", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande2"], "description", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "etat", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "qte", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande2"], "promotion", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande2"], "type", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 23
                echo twig_escape_filter($this->env, ($this->getAttribute($context["demande2"], "prix", array()) * $this->getAttribute($context["demande"], "qte", array())), "html", null, true);
                echo "</td>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
</table>
";
        
        $__internal_f90dbe5aa7fd9bcb3ba56db87278b2c1aa856d5c6ebfa8dadd15b8c80273a00c->leave($__internal_f90dbe5aa7fd9bcb3ba56db87278b2c1aa856d5c6ebfa8dadd15b8c80273a00c_prof);

        
        $__internal_3ffbdefd94495a09e7cac70afcd20c6cb35708d6495d7aec94131f45c06118da->leave($__internal_3ffbdefd94495a09e7cac70afcd20c6cb35708d6495d7aec94131f45c06118da_prof);

    }

    public function getTemplateName()
    {
        return "CommandeBundle:Panier:consulterPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  86 => 25,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  49 => 16,  44 => 15,  40 => 14,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>panier</h1>
<table border=\"1\">
    <tr>
        <th>Cathegorie</th>
        <th>Libelle</th>
        <th>Description</th>
        <th>Etat</th>
        <th>Quantité</th>
        <th>Remise</th>
        <th>Type</th>
        <th>Prix</th>
    </tr>
    <tr>
{% for demande in demande %}
    {% for demande2 in demande2 %}
        <td>{{ demande2.categorie }}</td>
        <td>{{ demande2.libelle }}</td>
        <td>{{ demande2.description }}</td>
        <td>{{ demande.etat }}</td>
        <td>{{ demande.qte }}</td>
        <td>{{ demande2.promotion }}</td>
        <td>{{ demande2.type }}</td>
        <td>{{ demande2.prix*demande.qte }}</td>
     {% endfor %}
        </tr>
{% endfor %}

</table>
", "CommandeBundle:Panier:consulterPanier.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/CommandeBundle/Resources/views/Panier/consulterPanier.html.twig");
    }
}
