<?php

/* WorkshopBundle:Participant:ListeParticipant.html.twig */
class __TwigTemplate_fe0a84745f9f3fc7acb43684fd6e042a342bb2343d7d199df62533b67698e393 extends Twig_Template
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
        $__internal_8ad1f7ed868ec22c84f0305b32377e818baf2033eda4326741a3605e079e996b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad1f7ed868ec22c84f0305b32377e818baf2033eda4326741a3605e079e996b->enter($__internal_8ad1f7ed868ec22c84f0305b32377e818baf2033eda4326741a3605e079e996b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Participant:ListeParticipant.html.twig"));

        $__internal_7bbf1cb35957f6b9e7aad2cd758abf0f0b222942b13c5fba2bb3df581bd22e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbf1cb35957f6b9e7aad2cd758abf0f0b222942b13c5fba2bb3df581bd22e7a->enter($__internal_7bbf1cb35957f6b9e7aad2cd758abf0f0b222942b13c5fba2bb3df581bd22e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Participant:ListeParticipant.html.twig"));

        // line 1
        echo "<h1>Liste des Participants</h1>
<table border=\"1\">
    <tr>
        <th>
            Nom
        </th>
        <th>
            Prénom
        </th>
        <th>
            Date de naissance
        </th>
        <th>
            Num Telephone
        </th>
    </tr>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p"))));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 18
            echo "        <tr>
            <td>
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idUser", array()), "firstname", array()), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idUser", array()), "lastname", array()), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idUser", array()), "datenaiss", array()), "Y-m-d"), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idUser", array()), "phone", array()), "html", null, true);
            echo "
            </td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_Redirect", array("id" => (isset($context["w"]) ? $context["w"] : $this->getContext($context, "w")))), "html", null, true);
        echo "\">Retourner</a>

</table>
";
        
        $__internal_8ad1f7ed868ec22c84f0305b32377e818baf2033eda4326741a3605e079e996b->leave($__internal_8ad1f7ed868ec22c84f0305b32377e818baf2033eda4326741a3605e079e996b_prof);

        
        $__internal_7bbf1cb35957f6b9e7aad2cd758abf0f0b222942b13c5fba2bb3df581bd22e7a->leave($__internal_7bbf1cb35957f6b9e7aad2cd758abf0f0b222942b13c5fba2bb3df581bd22e7a_prof);

    }

    public function getTemplateName()
    {
        return "WorkshopBundle:Participant:ListeParticipant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 34,  69 => 29,  63 => 26,  57 => 23,  51 => 20,  47 => 18,  43 => 17,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Liste des Participants</h1>
<table border=\"1\">
    <tr>
        <th>
            Nom
        </th>
        <th>
            Prénom
        </th>
        <th>
            Date de naissance
        </th>
        <th>
            Num Telephone
        </th>
    </tr>
    {% for participant in p | sort %}
        <tr>
            <td>
                {{ participant.idUser.firstname }}
            </td>
            <td>
                {{ participant.idUser.lastname }}
            </td>
            <td>
                {{ participant.idUser.datenaiss|date('Y-m-d') }}
            </td>
            <td>
                {{ participant.idUser.phone }}
            </td>

        </tr>
    {% endfor %}
    <a href=\"{{ path('_Redirect',{'id':w}) }}\">Retourner</a>

</table>
", "WorkshopBundle:Participant:ListeParticipant.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/WorkshopBundle/Resources/views/Participant/ListeParticipant.html.twig");
    }
}
