<?php

/* @Evenement/Evenement/affTabEv.html.twig */
class __TwigTemplate_330dc2f73d70f0c27160f981b87dcf8d38e1986b542f11abdf7434aadf530921 extends Twig_Template
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
        $__internal_2e7d72cee8ae212bf653e94ea32db846a37c896640fc51262f9f503f2f204afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7d72cee8ae212bf653e94ea32db846a37c896640fc51262f9f503f2f204afc->enter($__internal_2e7d72cee8ae212bf653e94ea32db846a37c896640fc51262f9f503f2f204afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Evenement/Evenement/affTabEv.html.twig"));

        // line 1
        echo "<table class=\"table table-bordered table-striped\">
    <thead>
    <tr>
        <th> nom de l'événement</th>
        <th> Date</th>
        <th> Informations supplémentaires</th>
    </tr>
    </thead>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 10
            echo "        <tbody>

        <tr class=\"success\">
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nomEvenement", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateDebut", array()), "m/d/Y"), "html", null, true);
            echo "</td>
            <td href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_DetailsEvent", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\"> Description</td>

            ";
            // line 17
            if (($this->getAttribute($this->getAttribute($context["event"], "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 18
                echo "                    <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_UpdateEvent", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\">
                            Modifier votre événement</a>
                    </td>
                    <td><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_DeleteEvent", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette publication ?')\">
                            Supprimer l'événement</a>
                    </td>
            ";
            }
            // line 25
            echo "
        </tr>
        </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</table>
";
        
        $__internal_2e7d72cee8ae212bf653e94ea32db846a37c896640fc51262f9f503f2f204afc->leave($__internal_2e7d72cee8ae212bf653e94ea32db846a37c896640fc51262f9f503f2f204afc_prof);

    }

    public function getTemplateName()
    {
        return "@Evenement/Evenement/affTabEv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  70 => 25,  63 => 21,  56 => 18,  54 => 17,  49 => 15,  45 => 14,  41 => 13,  36 => 10,  32 => 9,  22 => 1,);
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
        <th> nom de l'événement</th>
        <th> Date</th>
        <th> Informations supplémentaires</th>
    </tr>
    </thead>
    {% for event in e %}
        <tbody>

        <tr class=\"success\">
            <td>{{ event.nomEvenement }}</td>
            <td>{{ event.dateDebut | date(\"m/d/Y\") }}</td>
            <td href=\"{{ path('_DetailsEvent',{'id':event.id}) }}\"> Description</td>

            {% if event.idUser.id == app.user.id %}
                    <td><a href=\"{{ path('_UpdateEvent',{'id':event.id}) }}\">
                            Modifier votre événement</a>
                    </td>
                    <td><a href=\"{{ path('_DeleteEvent',{'id':event.id}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette publication ?')\">
                            Supprimer l'événement</a>
                    </td>
            {% endif %}

        </tr>
        </tbody>
    {% endfor %}
</table>
", "@Evenement/Evenement/affTabEv.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/EvenementBundle/Resources/views/Evenement/affTabEv.html.twig");
    }
}
