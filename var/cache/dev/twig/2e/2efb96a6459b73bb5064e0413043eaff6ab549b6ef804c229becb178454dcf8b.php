<?php

/* CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig */
class __TwigTemplate_afbc2ad3161bfa27dd9a35c87b9f49d2bb5ff53cc25f4d1e1c1491d43ec2cbd8 extends Twig_Template
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
        $__internal_189286db434ea4601f2ec4dd7b79ab1a5ec97bc074cc4b20cc857f624372d2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189286db434ea4601f2ec4dd7b79ab1a5ec97bc074cc4b20cc857f624372d2df->enter($__internal_189286db434ea4601f2ec4dd7b79ab1a5ec97bc074cc4b20cc857f624372d2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig"));

        $__internal_a0a314a4aea0c5091864d7d3ca0becf577d59c8682e15991fd80fcc54c1b6e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a314a4aea0c5091864d7d3ca0becf577d59c8682e15991fd80fcc54c1b6e9c->enter($__internal_a0a314a4aea0c5091864d7d3ca0becf577d59c8682e15991fd80fcc54c1b6e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_189286db434ea4601f2ec4dd7b79ab1a5ec97bc074cc4b20cc857f624372d2df->leave($__internal_189286db434ea4601f2ec4dd7b79ab1a5ec97bc074cc4b20cc857f624372d2df_prof);

        
        $__internal_a0a314a4aea0c5091864d7d3ca0becf577d59c8682e15991fd80fcc54c1b6e9c->leave($__internal_a0a314a4aea0c5091864d7d3ca0becf577d59c8682e15991fd80fcc54c1b6e9c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_45641bfe62cf761bc8bc441a4bf1faa50ed2d2ac4272d1004a8be33957ed4444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45641bfe62cf761bc8bc441a4bf1faa50ed2d2ac4272d1004a8be33957ed4444->enter($__internal_45641bfe62cf761bc8bc441a4bf1faa50ed2d2ac4272d1004a8be33957ed4444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f203b3d9ca823cd853bc19cde0c56c97f9442efa41c941ff394a8a940704960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f203b3d9ca823cd853bc19cde0c56c97f9442efa41c941ff394a8a940704960->enter($__internal_1f203b3d9ca823cd853bc19cde0c56c97f9442efa41c941ff394a8a940704960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1f203b3d9ca823cd853bc19cde0c56c97f9442efa41c941ff394a8a940704960->leave($__internal_1f203b3d9ca823cd853bc19cde0c56c97f9442efa41c941ff394a8a940704960_prof);

        
        $__internal_45641bfe62cf761bc8bc441a4bf1faa50ed2d2ac4272d1004a8be33957ed4444->leave($__internal_45641bfe62cf761bc8bc441a4bf1faa50ed2d2ac4272d1004a8be33957ed4444_prof);

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
        return array (  164 => 63,  153 => 57,  149 => 55,  143 => 53,  141 => 52,  133 => 47,  126 => 43,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  106 => 38,  102 => 37,  98 => 36,  94 => 35,  90 => 34,  86 => 33,  83 => 32,  79 => 31,  49 => 3,  40 => 2,  11 => 1,);
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
