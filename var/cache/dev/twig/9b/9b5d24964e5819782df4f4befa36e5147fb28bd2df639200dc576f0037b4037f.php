<?php

/* CommandeBundle:LigneDeCommande:afficherCommande.html.twig */
class __TwigTemplate_cfcdeb09fd3ac52a79197c435d0e3d2a0dda655379bd10c28d3c4ac4d2bac3e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "CommandeBundle:LigneDeCommande:afficherCommande.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab7cf71d1148e1a803483c2e4c951f7462f143dac2fc81cf0082a7b8b7cc7574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7cf71d1148e1a803483c2e4c951f7462f143dac2fc81cf0082a7b8b7cc7574->enter($__internal_ab7cf71d1148e1a803483c2e4c951f7462f143dac2fc81cf0082a7b8b7cc7574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:LigneDeCommande:afficherCommande.html.twig"));

        $__internal_21c193a331dd6987ed208e7a64fe006a8d68fc2ef623185e03c84fa0ea9a863c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c193a331dd6987ed208e7a64fe006a8d68fc2ef623185e03c84fa0ea9a863c->enter($__internal_21c193a331dd6987ed208e7a64fe006a8d68fc2ef623185e03c84fa0ea9a863c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:LigneDeCommande:afficherCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab7cf71d1148e1a803483c2e4c951f7462f143dac2fc81cf0082a7b8b7cc7574->leave($__internal_ab7cf71d1148e1a803483c2e4c951f7462f143dac2fc81cf0082a7b8b7cc7574_prof);

        
        $__internal_21c193a331dd6987ed208e7a64fe006a8d68fc2ef623185e03c84fa0ea9a863c->leave($__internal_21c193a331dd6987ed208e7a64fe006a8d68fc2ef623185e03c84fa0ea9a863c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7fb76b4ae6ce7d0ce9d4b4cf7381f962f9215d8f5602680b9691a8105ddd643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7fb76b4ae6ce7d0ce9d4b4cf7381f962f9215d8f5602680b9691a8105ddd643->enter($__internal_c7fb76b4ae6ce7d0ce9d4b4cf7381f962f9215d8f5602680b9691a8105ddd643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b45d36d8021954f381a186923031429e2e00165a3c261f0ce783daa1017d3bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45d36d8021954f381a186923031429e2e00165a3c261f0ce783daa1017d3bcd->enter($__internal_b45d36d8021954f381a186923031429e2e00165a3c261f0ce783daa1017d3bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\">
                                <h1>Commande(s)</h1>
                                <table class=\"table table-hover\" border=\"1\" style=\"width:100% ;\" >
                                    <tr>
                                        <th>ID Commande</th>
                                        <th style=\"width: 150px\">Date Commande</th>
                                        <th>Mes lignes de commande</th>
                                    </tr>

                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["commande"]);
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 21
            echo "                                       <tr class=\"aaa\" >
                                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCommande", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                           <td>
                                                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ligne_commande_aff", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\">Afficher les ligne de commande</a>
                                               </td>
                                           </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/functions.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Switch Plugin -->
<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/components/bs-switches.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
/*\$('tr.aaa').click(function () {
window.location.replace('/SoukLemdina2/web/commande/afflc');
});*/
</script>
    ";
        
        $__internal_b45d36d8021954f381a186923031429e2e00165a3c261f0ce783daa1017d3bcd->leave($__internal_b45d36d8021954f381a186923031429e2e00165a3c261f0ce783daa1017d3bcd_prof);

        
        $__internal_c7fb76b4ae6ce7d0ce9d4b4cf7381f962f9215d8f5602680b9691a8105ddd643->leave($__internal_c7fb76b4ae6ce7d0ce9d4b4cf7381f962f9215d8f5602680b9691a8105ddd643_prof);

    }

    public function getTemplateName()
    {
        return "CommandeBundle:LigneDeCommande:afficherCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 48,  119 => 46,  112 => 42,  108 => 41,  95 => 30,  84 => 25,  79 => 23,  75 => 22,  72 => 21,  68 => 20,  49 => 3,  40 => 2,  11 => 1,);
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
{% block body %}
    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\">
                                <h1>Commande(s)</h1>
                                <table class=\"table table-hover\" border=\"1\" style=\"width:100% ;\" >
                                    <tr>
                                        <th>ID Commande</th>
                                        <th style=\"width: 150px\">Date Commande</th>
                                        <th>Mes lignes de commande</th>
                                    </tr>

                                    {% for commande in commande %}
                                       <tr class=\"aaa\" >
                                            <td>{{ commande.id }}</td>
                                            <td>{{ commande.dateCommande|date('Y-m-d') }}</td>
                                           <td>
                                                <a href=\"{{ path('ligne_commande_aff',{'id':commande.id}) }}\">Afficher les ligne de commande</a>
                                               </td>
                                           </tr>

                                    {% endfor %}
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"{{ asset('Template/js/jquery.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('Template/js/plugins.js') }}\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"{{ asset('Template/js/functions.js') }}\"></script>
<!-- Bootstrap Switch Plugin -->
<script type=\"text/javascript\" src=\"{{ asset('Template/js/components/bs-switches.js') }}\"></script>
<script type=\"text/javascript\">
/*\$('tr.aaa').click(function () {
window.location.replace('/SoukLemdina2/web/commande/afflc');
});*/
</script>
    {% endblock %}

", "CommandeBundle:LigneDeCommande:afficherCommande.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/CommandeBundle/Resources/views/LigneDeCommande/afficherCommande.html.twig");
    }
}
