<?php

/* CommandeBundle:Panier:modifierPanier.html.twig */
class __TwigTemplate_dbfc18698fe962e382f693d8b3dca90fc58987b832f370b50c58dfbf2ee7b1aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "CommandeBundle:Panier:modifierPanier.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1b5cad8761ad418d7a5224f9ba7dc89a3c408d6b324bde6f98a001e965a1fd1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b5cad8761ad418d7a5224f9ba7dc89a3c408d6b324bde6f98a001e965a1fd1d->enter($__internal_1b5cad8761ad418d7a5224f9ba7dc89a3c408d6b324bde6f98a001e965a1fd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Panier:modifierPanier.html.twig"));

        $__internal_0eeb350dab3a3c9678942b89389b9b59292848a07a9367282cdb5d689bb884b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eeb350dab3a3c9678942b89389b9b59292848a07a9367282cdb5d689bb884b8->enter($__internal_0eeb350dab3a3c9678942b89389b9b59292848a07a9367282cdb5d689bb884b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Panier:modifierPanier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b5cad8761ad418d7a5224f9ba7dc89a3c408d6b324bde6f98a001e965a1fd1d->leave($__internal_1b5cad8761ad418d7a5224f9ba7dc89a3c408d6b324bde6f98a001e965a1fd1d_prof);

        
        $__internal_0eeb350dab3a3c9678942b89389b9b59292848a07a9367282cdb5d689bb884b8->leave($__internal_0eeb350dab3a3c9678942b89389b9b59292848a07a9367282cdb5d689bb884b8_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfeba3ba084cda4e8041ceef043678e463260388db3b8f7e7efa0ecccf41955b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfeba3ba084cda4e8041ceef043678e463260388db3b8f7e7efa0ecccf41955b->enter($__internal_bfeba3ba084cda4e8041ceef043678e463260388db3b8f7e7efa0ecccf41955b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_76f3acebeacf25437c08f58b4b1c27ff13060385fa55282fb6374bf35d0865bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f3acebeacf25437c08f58b4b1c27ff13060385fa55282fb6374bf35d0865bd->enter($__internal_76f3acebeacf25437c08f58b4b1c27ff13060385fa55282fb6374bf35d0865bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <title>Panier - ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()) . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array())), "html", null, true);
        echo "</title>
";
        
        $__internal_76f3acebeacf25437c08f58b4b1c27ff13060385fa55282fb6374bf35d0865bd->leave($__internal_76f3acebeacf25437c08f58b4b1c27ff13060385fa55282fb6374bf35d0865bd_prof);

        
        $__internal_bfeba3ba084cda4e8041ceef043678e463260388db3b8f7e7efa0ecccf41955b->leave($__internal_bfeba3ba084cda4e8041ceef043678e463260388db3b8f7e7efa0ecccf41955b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_32f8a23832c6265a4ed0645fc80c35676ca6475fe9cf2658a629d7622109bbc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32f8a23832c6265a4ed0645fc80c35676ca6475fe9cf2658a629d7622109bbc1->enter($__internal_32f8a23832c6265a4ed0645fc80c35676ca6475fe9cf2658a629d7622109bbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fa587f493c9c25c11881c8683b734506a49f7d0b10f33955db63ff97d2bfab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa587f493c9c25c11881c8683b734506a49f7d0b10f33955db63ff97d2bfab1->enter($__internal_6fa587f493c9c25c11881c8683b734506a49f7d0b10f33955db63ff97d2bfab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"tab-container\">
        <div class=\"tab-content clearfix\" id=\"tab-register\">
            <div class=\"panel panel-default nobottommargin\">
                <div class=\"panel-body\" style=\"padding: 40px;\">
                    <form name=\"f\" method=\"POST\" action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier_afficher");
        echo "\" class=\"nobottommargin\">
                        <table border=\"1\" >
                            <tr>
                                <th>Libelle</th>
                                <th>Remise</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Confirmer</th>


                            </tr>
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
            echo "                                <tr>
                                    <td><input value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\" name=\"id\"></td>
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "idProduit", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "idProduit", array()), "promotion", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["p"], "idProduit", array()), "prix", array()) * $this->getAttribute($context["p"], "qte", array())), "html", null, true);
            echo "</td>

                                    <td><select id='recherche' name='recherche'>
                                            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 31
                echo "                                                ";
                if (($this->getAttribute($context["p"], "qte", array()) == $context["i"])) {
                    // line 32
                    echo "                                                  <a href=\"\" > <OPTION selected=\"selected\"
                                                            name=\"q\" value='";
                    // line 33
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</OPTION></a>
                                                ";
                } else {
                    // line 35
                    echo "                                            <a href=\"\" > <OPTION name=\"q\" value='";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</OPTION></a>

                                                ";
                }
                // line 38
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
                                    <td class=\"button button-3d button-white\">
                                            <input type=\"submit\" value=\"Modifier Panier\" >
                                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier_afficher", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>

                                    </td>
                                    </select></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </table>
                    </form>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6fa587f493c9c25c11881c8683b734506a49f7d0b10f33955db63ff97d2bfab1->leave($__internal_6fa587f493c9c25c11881c8683b734506a49f7d0b10f33955db63ff97d2bfab1_prof);

        
        $__internal_32f8a23832c6265a4ed0645fc80c35676ca6475fe9cf2658a629d7622109bbc1->leave($__internal_32f8a23832c6265a4ed0645fc80c35676ca6475fe9cf2658a629d7622109bbc1_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5e69b2ef6829e30e46542b1b029e3edfad626959ae8d27bf72c85baa2c8eda4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e69b2ef6829e30e46542b1b029e3edfad626959ae8d27bf72c85baa2c8eda4->enter($__internal_e5e69b2ef6829e30e46542b1b029e3edfad626959ae8d27bf72c85baa2c8eda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8414fd26d914172f77a4f5397200eb34e2e72f0b4ab0d93786b3a71b17010fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8414fd26d914172f77a4f5397200eb34e2e72f0b4ab0d93786b3a71b17010fbb->enter($__internal_8414fd26d914172f77a4f5397200eb34e2e72f0b4ab0d93786b3a71b17010fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(\"recherche\").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open(\"GET\", \"\", true);
            xhttp.send();
        }
    </script>
";
        
        $__internal_8414fd26d914172f77a4f5397200eb34e2e72f0b4ab0d93786b3a71b17010fbb->leave($__internal_8414fd26d914172f77a4f5397200eb34e2e72f0b4ab0d93786b3a71b17010fbb_prof);

        
        $__internal_e5e69b2ef6829e30e46542b1b029e3edfad626959ae8d27bf72c85baa2c8eda4->leave($__internal_e5e69b2ef6829e30e46542b1b029e3edfad626959ae8d27bf72c85baa2c8eda4_prof);

    }

    public function getTemplateName()
    {
        return "CommandeBundle:Panier:modifierPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 57,  185 => 56,  168 => 48,  156 => 42,  151 => 39,  145 => 38,  136 => 35,  129 => 33,  126 => 32,  123 => 31,  119 => 30,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  98 => 23,  94 => 22,  80 => 11,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SUserBundle::layout.html.twig' %}
{% block head %}
    <title>Panier - {{ app.user.firstname ~ app.user.lastname }}</title>
{% endblock %}
{% block body %}

    <div class=\"tab-container\">
        <div class=\"tab-content clearfix\" id=\"tab-register\">
            <div class=\"panel panel-default nobottommargin\">
                <div class=\"panel-body\" style=\"padding: 40px;\">
                    <form name=\"f\" method=\"POST\" action=\"{{ path('panier_afficher') }}\" class=\"nobottommargin\">
                        <table border=\"1\" >
                            <tr>
                                <th>Libelle</th>
                                <th>Remise</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Confirmer</th>


                            </tr>
                            {% for p in panier %}
                                <tr>
                                    <td><input value=\"{{ p.id }}\" name=\"id\"></td>
                                    <td>{{ p.idProduit.libelle }}</td>
                                    <td>{{ p.idProduit.promotion }}</td>
                                    <td>{{ p.idProduit.prix*p.qte }}</td>

                                    <td><select id='recherche' name='recherche'>
                                            {% for i in 1..10 %}
                                                {% if p.qte==i %}
                                                  <a href=\"\" > <OPTION selected=\"selected\"
                                                            name=\"q\" value='{{ i }}'>{{ i }}</OPTION></a>
                                                {% else %}
                                            <a href=\"\" > <OPTION name=\"q\" value='{{ i }}'>{{ i }}</OPTION></a>

                                                {% endif %}
                                            {% endfor %}

                                    <td class=\"button button-3d button-white\">
                                            <input type=\"submit\" value=\"Modifier Panier\" >
                                        <a href=\"{{ path('panier_afficher',{'id':p.id}) }}\">Modifier</a>

                                    </td>
                                    </select></td>
                                </tr>
                            {% endfor %}
                        </table>
                    </form>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(\"recherche\").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open(\"GET\", \"\", true);
            xhttp.send();
        }
    </script>
{% endblock %}", "CommandeBundle:Panier:modifierPanier.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/CommandeBundle/Resources/views/Panier/modifierPanier.html.twig");
    }
}
