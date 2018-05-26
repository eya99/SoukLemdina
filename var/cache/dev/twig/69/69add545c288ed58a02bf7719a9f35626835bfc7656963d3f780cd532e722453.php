<?php

/* PdfBundle:Pdf:Pdf.html.twig */
class __TwigTemplate_7d448a77d27600dad6bb433b4f1b5cd6e5b2187c9fed3cb0cccef00c2c25001e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout2.html.twig", "PdfBundle:Pdf:Pdf.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_512e68f1e9d11c14c7787e4ba6660b3024246ed4cb878a07962828b2f876ea60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_512e68f1e9d11c14c7787e4ba6660b3024246ed4cb878a07962828b2f876ea60->enter($__internal_512e68f1e9d11c14c7787e4ba6660b3024246ed4cb878a07962828b2f876ea60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PdfBundle:Pdf:Pdf.html.twig"));

        $__internal_a5d3f54bd29ed18d6c03505d54a71a11972dcbdc8b3c5f1055ddced3dc317c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d3f54bd29ed18d6c03505d54a71a11972dcbdc8b3c5f1055ddced3dc317c42->enter($__internal_a5d3f54bd29ed18d6c03505d54a71a11972dcbdc8b3c5f1055ddced3dc317c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PdfBundle:Pdf:Pdf.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_512e68f1e9d11c14c7787e4ba6660b3024246ed4cb878a07962828b2f876ea60->leave($__internal_512e68f1e9d11c14c7787e4ba6660b3024246ed4cb878a07962828b2f876ea60_prof);

        
        $__internal_a5d3f54bd29ed18d6c03505d54a71a11972dcbdc8b3c5f1055ddced3dc317c42->leave($__internal_a5d3f54bd29ed18d6c03505d54a71a11972dcbdc8b3c5f1055ddced3dc317c42_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4c1b27b8d1dfdb507d848422df668cb3c0c7bb6fbc5e777f63e12ab16cfdc31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c1b27b8d1dfdb507d848422df668cb3c0c7bb6fbc5e777f63e12ab16cfdc31->enter($__internal_c4c1b27b8d1dfdb507d848422df668cb3c0c7bb6fbc5e777f63e12ab16cfdc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_646b2687270a3aad358dada21a7334fb06d31deeb544e0d0df7f2b83cf423f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646b2687270a3aad358dada21a7334fb06d31deeb544e0d0df7f2b83cf423f8c->enter($__internal_646b2687270a3aad358dada21a7334fb06d31deeb544e0d0df7f2b83cf423f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 style=\"position: fixed;left: 70%\">Souk El Madina</h1><br><br><br><br>

    <div>
        <fieldset>
            <h1>Facture</h1> <h2 ><br> N° ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id", array()), "html", null, true);
        echo " <br> Date ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "dateCommande", array()), "Y-m-d"), "html", null, true);
        echo "  </h2>
            <br>
        </fieldset>
    </div>
    <br>
    <div >
        <fieldset>
            <h2>
                ";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idUser", array()), "getGender", array()) == "Homme")) {
            // line 19
            echo "                    Mr
                ";
        }
        // line 21
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idUser", array()), "getGender", array()) == "Femme")) {
            // line 22
            echo "                    Mme
                ";
        }
        // line 24
        echo "                ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idUser", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idUser", array()), "lastname", array())), "html", null, true);
        echo "<br>
                ";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idUser", array()), "ville", array()) . ", Rue ") . $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idUser", array()), "rue", array())), "html", null, true);
        echo "</h2><br>
        </fieldset>
    </div>
    <table border=\"1\" style=\"width: 100% ;\">
        <tr>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Prix Unitaire</th>
            <th>Remise</th>
            <th>Total</th>
            <th>Adresse de livraison 1</th>
            <th>Adresse de livraison 2</th>

        </tr>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["lcommande"]);
        foreach ($context['_seq'] as $context["_key"] => $context["lcommande"]) {
            // line 40
            echo "
            <tr style=\"text-align: center\">
                <td>
                    ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lcommande"], "idProduit", array()), "getLibelle", array(), "method"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["lcommande"], "quntite", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 49
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["lcommande"], "idProduit", array()), "getPrix", array(), "method") - (($this->getAttribute($this->getAttribute($context["lcommande"], "idProduit", array()), "getPrix", array(), "method") * $this->getAttribute($this->getAttribute($context["lcommande"], "idProduit", array()), "getPromotion", array())) / 100)), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lcommande"], "idProduit", array()), "getPromotion", array(), "method"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 55
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["lcommande"], "idProduit", array()), "getPrix", array(), "method") - (($this->getAttribute($this->getAttribute($context["lcommande"], "idProduit", array()), "getPrix", array(), "method") * $this->getAttribute($this->getAttribute($context["lcommande"], "idProduit", array()), "getPromotion", array())) / 100)) * $this->getAttribute($context["lcommande"], "quntite", array())), "html", null, true);
            echo "
                </td>
                ";
            // line 57
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + (($this->getAttribute($this->getAttribute($context["lcommande"], "idProduit", array()), "getPrix", array(), "method") - (($this->getAttribute($this->getAttribute($context["lcommande"], "idProduit", array()), "getPrix", array(), "method") * $this->getAttribute($this->getAttribute($context["lcommande"], "idProduit", array()), "getPromotion", array())) / 100)) * $this->getAttribute($context["lcommande"], "quntite", array())));
            // line 58
            echo "
                <td>
                    ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["lcommande"], "adresse", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["lcommande"], "adresse2", array()), "html", null, true);
            echo "
                </td>
            </tr>
            <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lcommande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
    </table>
    <div style=\"text-align: right\">Total:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
        echo "</div><br><br><br>

";
        
        $__internal_646b2687270a3aad358dada21a7334fb06d31deeb544e0d0df7f2b83cf423f8c->leave($__internal_646b2687270a3aad358dada21a7334fb06d31deeb544e0d0df7f2b83cf423f8c_prof);

        
        $__internal_c4c1b27b8d1dfdb507d848422df668cb3c0c7bb6fbc5e777f63e12ab16cfdc31->leave($__internal_c4c1b27b8d1dfdb507d848422df668cb3c0c7bb6fbc5e777f63e12ab16cfdc31_prof);

    }

    public function getTemplateName()
    {
        return "PdfBundle:Pdf:Pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 70,  167 => 68,  156 => 63,  150 => 60,  146 => 58,  144 => 57,  139 => 55,  133 => 52,  127 => 49,  121 => 46,  115 => 43,  110 => 40,  106 => 39,  89 => 25,  84 => 24,  80 => 22,  77 => 21,  73 => 19,  71 => 18,  58 => 10,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SUserBundle::layout2.html.twig\" %}

{% set totalHT = 0 %}

{% block body %}
    <h1 style=\"position: fixed;left: 70%\">Souk El Madina</h1><br><br><br><br>

    <div>
        <fieldset>
            <h1>Facture</h1> <h2 ><br> N° {{ commande.id }} <br> Date {{ commande.dateCommande|date (\"Y-m-d\") }}  </h2>
            <br>
        </fieldset>
    </div>
    <br>
    <div >
        <fieldset>
            <h2>
                {% if commande.idUser.getGender=='Homme' %}
                    Mr
                {% endif %}
                {% if commande.idUser.getGender=='Femme' %}
                    Mme
                {% endif %}
                {{ commande.idUser.firstname ~' '~ commande.idUser.lastname }}<br>
                {{ commande.idUser.ville ~', Rue '~commande.idUser.rue }}</h2><br>
        </fieldset>
    </div>
    <table border=\"1\" style=\"width: 100% ;\">
        <tr>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Prix Unitaire</th>
            <th>Remise</th>
            <th>Total</th>
            <th>Adresse de livraison 1</th>
            <th>Adresse de livraison 2</th>

        </tr>
        {% for lcommande in lcommande %}

            <tr style=\"text-align: center\">
                <td>
                    {{ lcommande.idProduit.getLibelle() }}
                </td>
                <td>
                    {{ lcommande.quntite }}
                </td>
                <td>
                    {{ lcommande.idProduit.getPrix()-(lcommande.idProduit.getPrix()*lcommande.idProduit.getPromotion/100) }}
                </td>
                <td>
                    {{ lcommande.idProduit.getPromotion() }}
                </td>
                <td>
                    {{ (lcommande.idProduit.getPrix()-(lcommande.idProduit.getPrix()*lcommande.idProduit.getPromotion/100))*lcommande.quntite }}
                </td>
                {% set totalHT = totalHT + (lcommande.idProduit.getPrix()-(lcommande.idProduit.getPrix()*lcommande.idProduit.getPromotion/100))*lcommande.quntite %}

                <td>
                    {{ lcommande.adresse }}
                </td>
                <td>
                    {{ lcommande.adresse2 }}
                </td>
            </tr>
            <br>
        {% endfor %}

    </table>
    <div style=\"text-align: right\">Total:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ totalHT }}</div><br><br><br>

{% endblock %}", "PdfBundle:Pdf:Pdf.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/PdfBundle/Resources/views/Pdf/Pdf.html.twig");
    }
}
