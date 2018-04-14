<?php

/* WorkshopBundle:Workshop:AfficheProfile.html.twig */
class __TwigTemplate_46bb8cbfe2b99cbc84b677195bdf51dbed421be61205c58989194d8088468e1a extends Twig_Template
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
        $__internal_ed3e95a8673d85e6a2293323bb38f2b78e73654a4bb94b480d48f8bffc281326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3e95a8673d85e6a2293323bb38f2b78e73654a4bb94b480d48f8bffc281326->enter($__internal_ed3e95a8673d85e6a2293323bb38f2b78e73654a4bb94b480d48f8bffc281326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:AfficheProfile.html.twig"));

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
        
        $__internal_ed3e95a8673d85e6a2293323bb38f2b78e73654a4bb94b480d48f8bffc281326->leave($__internal_ed3e95a8673d85e6a2293323bb38f2b78e73654a4bb94b480d48f8bffc281326_prof);

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
        return array (  83 => 29,  75 => 26,  69 => 23,  63 => 20,  60 => 19,  58 => 18,  54 => 17,  49 => 15,  45 => 14,  41 => 13,  37 => 11,  33 => 10,  22 => 1,);
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
