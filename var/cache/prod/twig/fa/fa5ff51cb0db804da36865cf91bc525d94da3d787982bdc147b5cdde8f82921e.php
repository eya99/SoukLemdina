<?php

/* WorkshopBundle:Workshop:AfficheProfile.html.twig */
class __TwigTemplate_7a714a8b981a778cc30d8e3f7f4a721263889fb6c17b32fa82004eb642c98046 extends Twig_Template
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
        $__internal_cfc2c50563457490b1abda9d222655705780eec1f3bb0287968bbdf0cbc46c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc2c50563457490b1abda9d222655705780eec1f3bb0287968bbdf0cbc46c0a->enter($__internal_cfc2c50563457490b1abda9d222655705780eec1f3bb0287968bbdf0cbc46c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:AfficheProfile.html.twig"));

        // line 1
        echo "<table class=\"table table-bordered table-striped\">
    <thead>
    <tr>
        <th>Nom du workshop</th>
        <th>Date Début</th>
        <th>Date Fin</th>
        <th>Acceder au Workshop</th>
    </tr>

    </thead>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["w"]) ? $context["w"] : $this->getContext($context, "w"))));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 12
            echo "        <tbody>
        <tr class=\"active\">
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "nomWorkshop", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["work"], "dateDebut", array()), "m/d/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["work"], "dateFin", array()), "m/d/Y"), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_Redirect", array("id" => $this->getAttribute($context["work"], "id", array()))), "html", null, true);
            echo "\">Accéder à La page du Workshop </a></td>
            ";
            // line 19
            if (($this->getAttribute($this->getAttribute($context["work"], "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 20
                echo "                <td>
                    <code><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_UpdateWorkshop", array("id" => $this->getAttribute($context["work"], "id", array()))), "html", null, true);
                echo "\">Modifier</a></code>
                </td>
                <td>
                    <code><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_DeleteWorkshop", array("id" => $this->getAttribute($context["work"], "id", array()))), "html", null, true);
                echo "\">Supprimer</a></code>
                </td>
            ";
            }
            // line 27
            echo "        </tr>
        </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</table>";
        
        $__internal_cfc2c50563457490b1abda9d222655705780eec1f3bb0287968bbdf0cbc46c0a->leave($__internal_cfc2c50563457490b1abda9d222655705780eec1f3bb0287968bbdf0cbc46c0a_prof);

    }

    public function getTemplateName()
    {
        return "WorkshopBundle:Workshop:AfficheProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  76 => 27,  70 => 24,  64 => 21,  61 => 20,  59 => 19,  55 => 18,  50 => 16,  46 => 15,  42 => 14,  38 => 12,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-bordered table-striped\">
    <thead>
    <tr>
        <th>Nom du workshop</th>
        <th>Date Début</th>
        <th>Date Fin</th>
        <th>Acceder au Workshop</th>
    </tr>

    </thead>
    {% for work in w | sort %}
        <tbody>
        <tr class=\"active\">
            <td>{{ work.nomWorkshop }}</td>
            <td>{{ work.dateDebut | date(\"m/d/Y\") }}</td>
            <td>{{ work.dateFin | date(\"m/d/Y\") }}</td>
            <td>
                <a href=\"{{ path('_Redirect',{'id':work.id}) }}\">Accéder à La page du Workshop </a></td>
            {% if work.idUser.id == app.user.id %}
                <td>
                    <code><a href=\"{{ path('_UpdateWorkshop',{'id':work.id}) }}\">Modifier</a></code>
                </td>
                <td>
                    <code><a href=\"{{ path('_DeleteWorkshop',{'id':work.id}) }}\">Supprimer</a></code>
                </td>
            {% endif %}
        </tr>
        </tbody>
    {% endfor %}
</table>", "WorkshopBundle:Workshop:AfficheProfile.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/WorkshopBundle/Resources/views/Workshop/AfficheProfile.html.twig");
    }
}
