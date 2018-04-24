<?php

/* CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig */
class __TwigTemplate_9c20b8a809fa06e586934885a3b3f111cd1f9ccb68c597ea87163947bc4b4496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig", 1);
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
        $__internal_690a197b920fee0a87a23e2e6d3617e88b05c5210ea3d037f67c24430068a2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690a197b920fee0a87a23e2e6d3617e88b05c5210ea3d037f67c24430068a2af->enter($__internal_690a197b920fee0a87a23e2e6d3617e88b05c5210ea3d037f67c24430068a2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_690a197b920fee0a87a23e2e6d3617e88b05c5210ea3d037f67c24430068a2af->leave($__internal_690a197b920fee0a87a23e2e6d3617e88b05c5210ea3d037f67c24430068a2af_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_124df08f1ee77d6194ce4cde31af6795d1262bd5cefbf411a51d1695913ad13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124df08f1ee77d6194ce4cde31af6795d1262bd5cefbf411a51d1695913ad13f->enter($__internal_124df08f1ee77d6194ce4cde31af6795d1262bd5cefbf411a51d1695913ad13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\">
                                <h1>ligne(s) de commande(s)</h1>
                                <h5>Tout annulation de ligne de commande doit etre faite avant 24h</h5>
                                <table class=\"table table-hover\" border=\"1\" style=\"width:100% ;\" >
                                    <tr>
                                        <th style=\"width: 150px\">Prenom et Nom</th>
                                        <th>libelle</th>
                                        <th style=\"width: 150px\">description</th>
                                        <th>prix</th>
                                        <th>prix Total</th>
                                        <th style=\"width: 150px\">Date Livraison</th>
                                        <th>Adresse 1</th>
                                        <th>Adresse 2</th>
                                        <th>Ville</th>
                                        <th>Code Postal</th>
                                        <th>Numero De Telephone</th>
                                        <th>Modifier lieu de livraison</th>
                                        <th style=\"width: 200px\">Annuler</th>
                                    </tr>

                                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lst"]) ? $context["lst"] : $this->getContext($context, "lst")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 32
            echo "                                        <tr>
                                            <td>";
            // line 33
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array())), "html", null, true);
            echo "</td>
                                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "idProduit", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "idProduit", array()), "description", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "idProduit", array()), "prix", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "prixTotal", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateLivraison", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "adresse", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "adresse2", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "ville", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "codePostal", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "numTel", array()), "html", null, true);
            echo "</td>

                                            <td>

                                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ligne_commande_modifier", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>


                                            </td>
                                            <td>
                                                ";
            // line 52
            if ((twig_date_format_filter($this->env, (isset($context["datesys"]) ? $context["datesys"] : $this->getContext($context, "datesys")), "Y-m-d H:i:s") <= twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "idCommande", array()), "dateMax", array()), "Y-m-d H:i:s"))) {
                // line 53
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ligne_commande_supprimer", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">Annuler la ligne de commande</a>
                                                ";
            } else {
                // line 55
                echo "                                                   <a title=\"Vous avez depasser le delai maximum de 24h pour annuler votre commande\" data-icon=\"Icon List 1\" style=\"color: #ff0022\">Impossible d'annuler la ligne de commande</a>
                                                ";
            }
            // line 57
            echo "                                            </td>


                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_124df08f1ee77d6194ce4cde31af6795d1262bd5cefbf411a51d1695913ad13f->leave($__internal_124df08f1ee77d6194ce4cde31af6795d1262bd5cefbf411a51d1695913ad13f_prof);

    }

    public function getTemplateName()
    {
        return "CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 63,  144 => 57,  140 => 55,  134 => 53,  132 => 52,  124 => 47,  117 => 43,  113 => 42,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  81 => 34,  77 => 33,  74 => 32,  70 => 31,  40 => 3,  34 => 2,  11 => 1,);
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
                                <h1>ligne(s) de commande(s)</h1>
                                <h5>Tout annulation de ligne de commande doit etre faite avant 24h</h5>
                                <table class=\"table table-hover\" border=\"1\" style=\"width:100% ;\" >
                                    <tr>
                                        <th style=\"width: 150px\">Prenom et Nom</th>
                                        <th>libelle</th>
                                        <th style=\"width: 150px\">description</th>
                                        <th>prix</th>
                                        <th>prix Total</th>
                                        <th style=\"width: 150px\">Date Livraison</th>
                                        <th>Adresse 1</th>
                                        <th>Adresse 2</th>
                                        <th>Ville</th>
                                        <th>Code Postal</th>
                                        <th>Numero De Telephone</th>
                                        <th>Modifier lieu de livraison</th>
                                        <th style=\"width: 200px\">Annuler</th>
                                    </tr>

                                    {% for commande in lst %}
                                        <tr>
                                            <td>{{ app.user.firstname ~ ' '~ app.user.lastname }}</td>
                                            <td>{{ commande.idProduit.libelle }}</td>
                                            <td>{{ commande.idProduit.description }}</td>
                                            <td>{{ commande.idProduit.prix }}</td>
                                            <td>{{ commande.prixTotal }}</td>
                                            <td>{{ commande.dateLivraison|date('Y-m-d') }}</td>
                                            <td>{{ commande.adresse }}</td>
                                            <td>{{ commande.adresse2 }}</td>
                                            <td>{{ commande.ville }}</td>
                                            <td>{{ commande.codePostal }}</td>
                                            <td>{{ commande.numTel }}</td>

                                            <td>

                                                <a href=\"{{ path('ligne_commande_modifier',{'id':commande.id}) }}\">Modifier</a>


                                            </td>
                                            <td>
                                                {% if datesys|date (\"Y-m-d H:i:s\") <= commande.idCommande.dateMax|date (\"Y-m-d H:i:s\") %}
                                                    <a href=\"{{ path('ligne_commande_supprimer',{'id':commande.id}) }}\">Annuler la ligne de commande</a>
                                                {% else %}
                                                   <a title=\"Vous avez depasser le delai maximum de 24h pour annuler votre commande\" data-icon=\"Icon List 1\" style=\"color: #ff0022\">Impossible d'annuler la ligne de commande</a>
                                                {% endif %}
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
{% endblock %}
", "CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/CommandeBundle/Resources/views/LigneDeCommande/afficheLigneDeCommande.html.twig");
    }
}
