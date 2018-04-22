<?php

/* EvenementBundle:Evenement:AfficheProfil.html.twig */
class __TwigTemplate_c221fadbf4548a3a656188a299a09f9363f752b7bc7e68fc14df1cf06d639218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "EvenementBundle:Evenement:AfficheProfil.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3ad3f5d50b0a32f902f6c4d449fbd79a64354bab0483445989e27670528dcc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ad3f5d50b0a32f902f6c4d449fbd79a64354bab0483445989e27670528dcc4->enter($__internal_f3ad3f5d50b0a32f902f6c4d449fbd79a64354bab0483445989e27670528dcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:AfficheProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3ad3f5d50b0a32f902f6c4d449fbd79a64354bab0483445989e27670528dcc4->leave($__internal_f3ad3f5d50b0a32f902f6c4d449fbd79a64354bab0483445989e27670528dcc4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7436baac0fca513f727ffb9861f12accb6d6c756705797175435d2f0863e7c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7436baac0fca513f727ffb9861f12accb6d6c756705797175435d2f0863e7c13->enter($__internal_7436baac0fca513f727ffb9861f12accb6d6c756705797175435d2f0863e7c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7436baac0fca513f727ffb9861f12accb6d6c756705797175435d2f0863e7c13->leave($__internal_7436baac0fca513f727ffb9861f12accb6d6c756705797175435d2f0863e7c13_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_252bc95dfb5bbd781caf68d3d5e4a1740d7afc1ddb4c219977206c8d20a38b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252bc95dfb5bbd781caf68d3d5e4a1740d7afc1ddb4c219977206c8d20a38b98->enter($__internal_252bc95dfb5bbd781caf68d3d5e4a1740d7afc1ddb4c219977206c8d20a38b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_252bc95dfb5bbd781caf68d3d5e4a1740d7afc1ddb4c219977206c8d20a38b98->leave($__internal_252bc95dfb5bbd781caf68d3d5e4a1740d7afc1ddb4c219977206c8d20a38b98_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff8fb6bf2b20ffb4421c0ec5c06e7ead6476d929d07059292d6e4651fd52b889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8fb6bf2b20ffb4421c0ec5c06e7ead6476d929d07059292d6e4651fd52b889->enter($__internal_ff8fb6bf2b20ffb4421c0ec5c06e7ead6476d929d07059292d6e4651fd52b889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <table class=\"table\">
        <thead>
        <tr style=\"background-color:#ff9c2c\">
            <th> nom de l'événement</th>
            <th> Date</th>
            <th> Informations supplémentaires</th>
        </tr>
        </thead>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 16
            echo "            <tbody>

            <tr class=\"success\">
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nomEvenement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_DetailsEvent", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\"> Description</td>

                ";
            // line 23
            if (($this->getAttribute($this->getAttribute($context["event"], "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 24
                echo "
                    <code>
                        <td href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_UpdateEvent", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-block btn-lg\">
                            Modifier votre événement
                        </td>
                        ></code>
                    <code>
                        <td href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_DeleteEvent", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-block btn-lg\">
                            Supprimer l'événement
                        </td>
                    </code>
                ";
            }
            // line 36
            echo "
            </tr>

            </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </table>

";
        
        $__internal_ff8fb6bf2b20ffb4421c0ec5c06e7ead6476d929d07059292d6e4651fd52b889->leave($__internal_ff8fb6bf2b20ffb4421c0ec5c06e7ead6476d929d07059292d6e4651fd52b889_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eddbc4710b0ca55eaa299be2e0a9a49ea44fae1073c180c4259a5d1a53704276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eddbc4710b0ca55eaa299be2e0a9a49ea44fae1073c180c4259a5d1a53704276->enter($__internal_eddbc4710b0ca55eaa299be2e0a9a49ea44fae1073c180c4259a5d1a53704276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/functions.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_eddbc4710b0ca55eaa299be2e0a9a49ea44fae1073c180c4259a5d1a53704276->leave($__internal_eddbc4710b0ca55eaa299be2e0a9a49ea44fae1073c180c4259a5d1a53704276_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Evenement:AfficheProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 54,  152 => 50,  148 => 49,  145 => 48,  139 => 47,  130 => 41,  120 => 36,  112 => 31,  104 => 26,  100 => 24,  98 => 23,  93 => 21,  89 => 20,  85 => 19,  80 => 16,  76 => 15,  65 => 6,  59 => 5,  48 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SUserBundle::layout.html.twig\" %}

{% block head %}{% endblock %}
{% block stylesheets %}{% endblock %}
{% block body %}

    <table class=\"table\">
        <thead>
        <tr style=\"background-color:#ff9c2c\">
            <th> nom de l'événement</th>
            <th> Date</th>
            <th> Informations supplémentaires</th>
        </tr>
        </thead>
        {% for event in e %}
            <tbody>

            <tr class=\"success\">
                <td>{{ event.nomEvenement }}</td>
                <td>{{ event.dateDebut | date('d/m/Y')}}</td>
                <td href=\"{{ path('_DetailsEvent',{'id':event.id}) }}\"> Description</td>

                {% if event.idUser.id == app.user.id %}

                    <code>
                        <td href=\"{{ path('_UpdateEvent',{'id':event.id}) }}\" class=\"btn btn-warning btn-block btn-lg\">
                            Modifier votre événement
                        </td>
                        ></code>
                    <code>
                        <td href=\"{{ path('_DeleteEvent',{'id':event.id}) }}\" class=\"btn btn-danger btn-block btn-lg\">
                            Supprimer l'événement
                        </td>
                    </code>
                {% endif %}

            </tr>

            </tbody>
        {% endfor %}
    </table>

{% endblock %}



{% block javascripts %}

    <script type=\"text/javascript\" src=\"{{ asset('Template/js/jquery.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/plugins.js') }}\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/functions.js') }}\"></script>


{% endblock %}", "EvenementBundle:Evenement:AfficheProfil.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/EvenementBundle/Resources/views/Evenement/AfficheProfil.html.twig");
    }
}
