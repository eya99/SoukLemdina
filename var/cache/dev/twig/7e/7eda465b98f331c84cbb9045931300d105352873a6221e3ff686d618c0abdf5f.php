<?php

/* WorkshopBundle:Workshop:AfficheProfile.html.twig */
class __TwigTemplate_5553dee75ac9b2e582139f0cb64d540bfed2507b320844283c37c6f133b7e7df extends Twig_Template
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
        $__internal_b862f3c01fdc605b6964c1bb9d826014f5263eac7047d7f03853368687d1ecfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b862f3c01fdc605b6964c1bb9d826014f5263eac7047d7f03853368687d1ecfb->enter($__internal_b862f3c01fdc605b6964c1bb9d826014f5263eac7047d7f03853368687d1ecfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:AfficheProfile.html.twig"));

        $__internal_c2e893d30a1a1211ff9886fa927d91783fe62f0ce3cd821977572808087c1be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e893d30a1a1211ff9886fa927d91783fe62f0ce3cd821977572808087c1be3->enter($__internal_c2e893d30a1a1211ff9886fa927d91783fe62f0ce3cd821977572808087c1be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:AfficheProfile.html.twig"));

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
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["w"]) ? $context["w"] : $this->getContext($context, "w"))));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 11
            echo "        <tbody>
        <tr class=\"active\">
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "nomWorkshop", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["work"], "dateDebut", array()), "m/d/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["work"], "dateFin", array()), "m/d/Y"), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_Redirect", array("id" => $this->getAttribute($context["work"], "id", array()))), "html", null, true);
            echo "\">Accéder à La page du Workshop </a></td>
            ";
            // line 18
            if (($this->getAttribute($this->getAttribute($context["work"], "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 19
                echo "                <td>
                    <code><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_UpdateWorkshop", array("id" => $this->getAttribute($context["work"], "id", array()))), "html", null, true);
                echo "\">Modifier</a></code>
                </td>
                <td>
                    <code><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_DeleteWorkshop", array("id" => $this->getAttribute($context["work"], "id", array()))), "html", null, true);
                echo "\">Supprimer</a></code>
                </td>
            ";
            }
            // line 26
            echo "        </tr>
        </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</table>";
        
        $__internal_b862f3c01fdc605b6964c1bb9d826014f5263eac7047d7f03853368687d1ecfb->leave($__internal_b862f3c01fdc605b6964c1bb9d826014f5263eac7047d7f03853368687d1ecfb_prof);

        
        $__internal_c2e893d30a1a1211ff9886fa927d91783fe62f0ce3cd821977572808087c1be3->leave($__internal_c2e893d30a1a1211ff9886fa927d91783fe62f0ce3cd821977572808087c1be3_prof);

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
        return array (  86 => 29,  78 => 26,  72 => 23,  66 => 20,  63 => 19,  61 => 18,  57 => 17,  52 => 15,  48 => 14,  44 => 13,  40 => 11,  36 => 10,  25 => 1,);
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
