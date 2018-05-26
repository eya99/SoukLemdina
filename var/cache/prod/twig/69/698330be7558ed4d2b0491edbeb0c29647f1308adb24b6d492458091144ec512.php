<?php

/* CommandeBundle:LigneDeCommande:afficherCommande.html.twig */
class __TwigTemplate_8d5a4733cec67a151334ae3668a377434cf5bf67216130b2fcd80fb0235487f4 extends Twig_Template
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
        $__internal_ec3dc9c10e26924f070de0767e2bf78c5f6aeb3e97e0beaf514048cec13ec094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3dc9c10e26924f070de0767e2bf78c5f6aeb3e97e0beaf514048cec13ec094->enter($__internal_ec3dc9c10e26924f070de0767e2bf78c5f6aeb3e97e0beaf514048cec13ec094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:LigneDeCommande:afficherCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec3dc9c10e26924f070de0767e2bf78c5f6aeb3e97e0beaf514048cec13ec094->leave($__internal_ec3dc9c10e26924f070de0767e2bf78c5f6aeb3e97e0beaf514048cec13ec094_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_add7e5ee3767ebad97a31a58e7af7ed4de13f7b9ffc49555239d4af0e76fab31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add7e5ee3767ebad97a31a58e7af7ed4de13f7b9ffc49555239d4af0e76fab31->enter($__internal_add7e5ee3767ebad97a31a58e7af7ed4de13f7b9ffc49555239d4af0e76fab31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_add7e5ee3767ebad97a31a58e7af7ed4de13f7b9ffc49555239d4af0e76fab31->leave($__internal_add7e5ee3767ebad97a31a58e7af7ed4de13f7b9ffc49555239d4af0e76fab31_prof);

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
        return array (  115 => 48,  110 => 46,  103 => 42,  99 => 41,  86 => 30,  75 => 25,  70 => 23,  66 => 22,  63 => 21,  59 => 20,  40 => 3,  34 => 2,  11 => 1,);
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
