<?php

/* StockBundle::produits.html.twig */
class __TwigTemplate_8b5fc6874ce21fc9e9c752444763ca19007dccaacd479bba43679abd8af793ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "StockBundle::produits.html.twig", 1);
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
        $__internal_a07ee3f2047f89a2e46aeeb4fc329fa845017e4ead33d21682cdec6519fc653c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07ee3f2047f89a2e46aeeb4fc329fa845017e4ead33d21682cdec6519fc653c->enter($__internal_a07ee3f2047f89a2e46aeeb4fc329fa845017e4ead33d21682cdec6519fc653c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a07ee3f2047f89a2e46aeeb4fc329fa845017e4ead33d21682cdec6519fc653c->leave($__internal_a07ee3f2047f89a2e46aeeb4fc329fa845017e4ead33d21682cdec6519fc653c_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_94b028e09da58673624f79d8fff3d65e15a2afe086b89a6110288143f7369569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b028e09da58673624f79d8fff3d65e15a2afe086b89a6110288143f7369569->enter($__internal_94b028e09da58673624f79d8fff3d65e15a2afe086b89a6110288143f7369569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<title>Produits</title>


 ";
        
        $__internal_94b028e09da58673624f79d8fff3d65e15a2afe086b89a6110288143f7369569->leave($__internal_94b028e09da58673624f79d8fff3d65e15a2afe086b89a6110288143f7369569_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d43ee8cbf3abd2cac11100993e4266a07935220381239d8b9c00c921529931c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43ee8cbf3abd2cac11100993e4266a07935220381239d8b9c00c921529931c5->enter($__internal_d43ee8cbf3abd2cac11100993e4266a07935220381239d8b9c00c921529931c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        <section id=\"page-title\">

            <div class=\"container clearfix\">
                <h1>Nos produits</h1>
                <span>Un vaste choix de produits</span>

                <form class=\"navbar-form navbar-right\" action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherche_produits");
        echo "\" method=\"post\"><input type=\"text\" class=\"form-control\"
                                                              placeholder=\"Tapez votre texte...\"
                                                               name=\"motcle\" id=\"motcle\">
                </form>
                <div class=\"clear bottommargin-sm\"></div>
                <div class=\"center\"></div>
                <a class=\"button button-border button-circle button-dark\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout_produit");
        echo "\">Ajouter un
                    nouveau produit</a></form>
            </div>
        </section>
        <section id=\"content\">

            <div class=\"content-wrap\">

                <div class=\"container clearfix\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "                        <div class=\"alert alert-success\"><center>";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</center></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    <!-- Post Content
                    ============================================= -->
                    <div class=\"postcontent nobottommargin col_last\">
                        ";
        // line 34
        $context["a"] = 0;
        $context["b"] = 0;
        $context["c"] = 0;
        $context["d"] = 0;
        $context["e"] = 0;
        $context["f"] = 0;
        // line 35
        echo "                        <!-- Shop
                        ============================================= -->
                        <div id=\"content1\">
                            <div id=\"shop\" class=\"shop product-3 grid-container clearfix\">
                                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 40
            echo "
                                    <div class=\"product sf-dress clearfix\">
                                        <div class=\"product-image\">
                                            <div class=\"thumbnail\">
                                                <img data-src=\"holder.js/300x200\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", array()), "html", null, true);
            echo "\" style=\"height: 180px; width: 100%;display: block;\"
                                                     alt=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
            echo "\" ></div>



                                            ";
            // line 49
            if (($this->getAttribute($context["produit"], "categorie", array()) == "Arts de la table")) {
                // line 50
                echo "                                                ";
                $context["a"] = ((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) + 1);
                // line 51
                echo "                                            ";
            }
            // line 52
            echo "                                            ";
            if (($this->getAttribute($context["produit"], "categorie", array()) == "Habillement")) {
                // line 53
                echo "                                                ";
                $context["b"] = ((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")) + 1);
                // line 54
                echo "                                            ";
            }
            // line 55
            echo "                                            ";
            if (($this->getAttribute($context["produit"], "categorie", array()) == "Bijoux")) {
                // line 56
                echo "                                                ";
                $context["c"] = ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) + 1);
                // line 57
                echo "                                            ";
            }
            // line 58
            echo "                                            ";
            if (($this->getAttribute($context["produit"], "categorie", array()) == "Produits du Terroire")) {
                // line 59
                echo "                                                ";
                $context["d"] = ((isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")) + 1);
                // line 60
                echo "                                            ";
            }
            // line 61
            echo "                                            ";
            if (($this->getAttribute($context["produit"], "categorie", array()) == "Maroquinerie")) {
                // line 62
                echo "                                                ";
                $context["e"] = ((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")) + 1);
                // line 63
                echo "                                            ";
            }
            // line 64
            echo "                                            ";
            if (($this->getAttribute($context["produit"], "categorie", array()) == "Décoration")) {
                // line 65
                echo "                                                ";
                $context["f"] = ((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")) + 1);
                // line 66
                echo "                                            ";
            }
            // line 67
            echo "


                                            ";
            // line 70
            if (($this->getAttribute($context["produit"], "promotion", array()) != 0)) {
                // line 71
                echo "                                                <div class=\"sale-flash\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "promotion", array()), "html", null, true);
                echo "% Off*</div>
                                            ";
            }
            // line 73
            echo "                                            <div class=\"product-overlay\">
                                                <!--  <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supp_produits", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Add to Cart</span></a> -->
                                                <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modif_produits", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"
                                                   class=\"add-to-cart\"><i
                                                            class=\"icon-wrench\"></i><span> Modifier</span></a>
                                                <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supp_produits", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"
                                                   class=\"add-to-cart\" onclick=\"return confirm('Are you sure?')\"><i
                                                            class=\"icon-filter\"></i><span> supprimer</span></a>

                                            </div>
                                        </div>
                                        <div class=\"product-desc\">
                                            <div class=\"product-title\"><h3><a
                                                            href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_produit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
            echo "</a>
                                                </h3></div>
                                            ";
            // line 88
            if (($this->getAttribute($context["produit"], "promotion", array()) != 0)) {
                // line 89
                echo "                                                <div class=\"product-price\">
                                                    <del>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " DT ";
                if (($this->getAttribute($context["produit"], "type", array()) == "Sur Commande")) {
                    echo " / Kg  ";
                }
                echo "</del>
                                                    <ins>";
                // line 91
                echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) - (($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "promotion", array())) / 100)), "html", null, true);
                echo "DT";
                if (($this->getAttribute($context["produit"], "type", array()) == "Sur Commande")) {
                    echo "  / Kg  ";
                }
                // line 92
                echo "                                                    </ins>
                                                </div>
                                            ";
            } else {
                // line 95
                echo "                                                <div class=\"product-price\">
                                                    ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " DT ";
                if (($this->getAttribute($context["produit"], "type", array()) == "Sur Commande")) {
                    echo "  / Kg ";
                }
                // line 97
                echo "                                                </div>
                                            ";
            }
            // line 99
            echo "
                                            <div class=\"product-rating\">
                                                <i class=\"icon-star3\"></i>
                                                <i class=\"icon-star3\"></i>
                                                <i class=\"icon-star3\"></i>
                                                <i class=\"icon-star3\"></i>
                                                <i class=\"icon-star-half-full\"></i>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
                            </div>
                            <!-- #shop end -->
                        </div>
                    </div><!-- .postcontent end -->
                    <div class=\"sidebar nobottommargin\">
                        <div class=\"sidebar-widgets-wrap\">

                            <div class=\"widget widget-filter-links clearfix\">

                                <h4>Sélectionner une catégorie</h4>
                                <ul  id=\"cat\">
                                    <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("art_produits");
        echo "\" >Arts de la table</a> <span>";
        echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
        echo "</span></li>
                                    <li><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("habillement_produits");
        echo "\" >Habillement</a><span>";
        echo twig_escape_filter($this->env, (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "html", null, true);
        echo "</span></li>
                                    <li><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bijoux_produits");
        echo "\" >Bijoux</a><span> ";
        echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
        echo "</span></li>
                                    <li><a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("territoire_produits");
        echo "\" >Produits du Terroire</a><span>";
        echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "html", null, true);
        echo "</span></li>
                                    <li><a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("maroquinerie_produits");
        echo "\" >Maroquinerie</a><span>";
        echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "html", null, true);
        echo "</span></li>
                                    <li><a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("decoration_produits");
        echo "\" >Décoration</a><span>";
        echo twig_escape_filter($this->env, (isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "html", null, true);
        echo "</span></li>
                                </ul>

                            </div>

                            <div class=\"widget widget-filter-links clearfix\">

                                <h4>Trier par</h4>
                                <ul class=\"shop-sorting\">
                                    <li class=\"widget-filter-reset active-filter\"><a href=\"#\"
                                                                                     data-sort-by=\"original-order\">Clear</a>
                                    </li>
                                    <li><a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("libsort_produits");
        echo "\" >Nom</a></li>
                                    <li><a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixasc_produits");
        echo "\" >Prix: ascendant</a></li>
                                    <li><a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixdesc_produits");
        echo "\" >Prix: descendant</a></li>
                                </ul>

                            </div>

                        </div>
                    </div><!-- .sidebar end -->
                </div>
            </div>
        </section>



        ";
        // line 154
        $this->displayBlock('javascripts', $context, $blocks);
        // line 161
        echo "
    ";
        
        $__internal_d43ee8cbf3abd2cac11100993e4266a07935220381239d8b9c00c921529931c5->leave($__internal_d43ee8cbf3abd2cac11100993e4266a07935220381239d8b9c00c921529931c5_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_953544b712070ce1917692d7f1fda547572431ae113f445b6ea1fbc5dc395ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953544b712070ce1917692d7f1fda547572431ae113f445b6ea1fbc5dc395ca9->enter($__internal_953544b712070ce1917692d7f1fda547572431ae113f445b6ea1fbc5dc395ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        echo "            <script>
                \$document.ready(function () {
                });
            </script>

        ";
        
        $__internal_953544b712070ce1917692d7f1fda547572431ae113f445b6ea1fbc5dc395ca9->leave($__internal_953544b712070ce1917692d7f1fda547572431ae113f445b6ea1fbc5dc395ca9_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle::produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 155,  384 => 154,  376 => 161,  374 => 154,  358 => 141,  354 => 140,  350 => 139,  333 => 127,  327 => 126,  321 => 125,  315 => 124,  309 => 123,  303 => 122,  289 => 110,  273 => 99,  269 => 97,  263 => 96,  260 => 95,  255 => 92,  249 => 91,  241 => 90,  238 => 89,  236 => 88,  229 => 86,  218 => 78,  212 => 75,  208 => 74,  205 => 73,  199 => 71,  197 => 70,  192 => 67,  189 => 66,  186 => 65,  183 => 64,  180 => 63,  177 => 62,  174 => 61,  171 => 60,  168 => 59,  165 => 58,  162 => 57,  159 => 56,  156 => 55,  153 => 54,  150 => 53,  147 => 52,  144 => 51,  141 => 50,  139 => 49,  132 => 45,  127 => 44,  121 => 40,  117 => 39,  111 => 35,  104 => 34,  99 => 31,  90 => 29,  86 => 28,  74 => 19,  65 => 13,  57 => 7,  51 => 6,  36 => 2,  11 => 1,);
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
 {% block head %}<title>Produits</title>


 {% endblock %}
    {% block body %}
        <section id=\"page-title\">

            <div class=\"container clearfix\">
                <h1>Nos produits</h1>
                <span>Un vaste choix de produits</span>

                <form class=\"navbar-form navbar-right\" action=\"{{ path('recherche_produits') }}\" method=\"post\"><input type=\"text\" class=\"form-control\"
                                                              placeholder=\"Tapez votre texte...\"
                                                               name=\"motcle\" id=\"motcle\">
                </form>
                <div class=\"clear bottommargin-sm\"></div>
                <div class=\"center\"></div>
                <a class=\"button button-border button-circle button-dark\" href=\"{{ path('ajout_produit') }}\">Ajouter un
                    nouveau produit</a></form>
            </div>
        </section>
        <section id=\"content\">

            <div class=\"content-wrap\">

                <div class=\"container clearfix\">
                    {% for flashMessage in app.session.flashBag.get('success') %}
                        <div class=\"alert alert-success\"><center>{{ flashMessage }}</center></div>
                    {% endfor %}
                    <!-- Post Content
                    ============================================= -->
                    <div class=\"postcontent nobottommargin col_last\">
                        {% set a=0 %}{% set b=0 %}{% set c=0 %}{% set d=0 %}{% set e=0 %}{% set f=0 %}
                        <!-- Shop
                        ============================================= -->
                        <div id=\"content1\">
                            <div id=\"shop\" class=\"shop product-3 grid-container clearfix\">
                                {% for produit in produits %}

                                    <div class=\"product sf-dress clearfix\">
                                        <div class=\"product-image\">
                                            <div class=\"thumbnail\">
                                                <img data-src=\"holder.js/300x200\" src=\"{{ asset('uploads/images/') }}{{ produit.image }}\" style=\"height: 180px; width: 100%;display: block;\"
                                                     alt=\"{{ produit.libelle }}\" ></div>



                                            {% if produit.categorie=='Arts de la table' %}
                                                {% set a=a+1 %}
                                            {% endif %}
                                            {% if produit.categorie=='Habillement' %}
                                                {% set b=b+1 %}
                                            {% endif %}
                                            {% if produit.categorie=='Bijoux' %}
                                                {% set c=c+1 %}
                                            {% endif %}
                                            {% if produit.categorie=='Produits du Terroire' %}
                                                {% set d=d+1 %}
                                            {% endif %}
                                            {% if produit.categorie=='Maroquinerie' %}
                                                {% set e=e+1 %}
                                            {% endif %}
                                            {% if produit.categorie=='Décoration' %}
                                                {% set f=f+1 %}
                                            {% endif %}



                                            {% if produit.promotion!=0 %}
                                                <div class=\"sale-flash\">{{ produit.promotion }}% Off*</div>
                                            {% endif %}
                                            <div class=\"product-overlay\">
                                                <!--  <a href=\"{{ path('supp_produits',{'id':produit.id}) }}\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Add to Cart</span></a> -->
                                                <a href=\"{{ path('modif_produits',{'id':produit.id}) }}\"
                                                   class=\"add-to-cart\"><i
                                                            class=\"icon-wrench\"></i><span> Modifier</span></a>
                                                <a href=\"{{ path('supp_produits',{'id':produit.id}) }}\"
                                                   class=\"add-to-cart\" onclick=\"return confirm('Are you sure?')\"><i
                                                            class=\"icon-filter\"></i><span> supprimer</span></a>

                                            </div>
                                        </div>
                                        <div class=\"product-desc\">
                                            <div class=\"product-title\"><h3><a
                                                            href=\"{{ path('view_produit',{'id':produit.id}) }}\">{{ produit.libelle }}</a>
                                                </h3></div>
                                            {% if produit.promotion!=0 %}
                                                <div class=\"product-price\">
                                                    <del>{{ produit.prix }} DT {% if produit.type=='Sur Commande' %} / Kg  {% endif %}</del>
                                                    <ins>{{ produit.prix-((produit.prix*produit.promotion)/100) }}DT{% if produit.type=='Sur Commande' %}  / Kg  {% endif %}
                                                    </ins>
                                                </div>
                                            {% else %}
                                                <div class=\"product-price\">
                                                    {{ produit.prix }} DT {% if produit.type=='Sur Commande' %}  / Kg {% endif %}
                                                </div>
                                            {% endif %}

                                            <div class=\"product-rating\">
                                                <i class=\"icon-star3\"></i>
                                                <i class=\"icon-star3\"></i>
                                                <i class=\"icon-star3\"></i>
                                                <i class=\"icon-star3\"></i>
                                                <i class=\"icon-star-half-full\"></i>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}

                            </div>
                            <!-- #shop end -->
                        </div>
                    </div><!-- .postcontent end -->
                    <div class=\"sidebar nobottommargin\">
                        <div class=\"sidebar-widgets-wrap\">

                            <div class=\"widget widget-filter-links clearfix\">

                                <h4>Sélectionner une catégorie</h4>
                                <ul  id=\"cat\">
                                    <li><a href=\"{{ path('art_produits') }}\" >Arts de la table</a> <span>{{ a }}</span></li>
                                    <li><a href=\"{{ path('habillement_produits') }}\" >Habillement</a><span>{{ b }}</span></li>
                                    <li><a href=\"{{ path('bijoux_produits') }}\" >Bijoux</a><span> {{ c }}</span></li>
                                    <li><a href=\"{{ path('territoire_produits') }}\" >Produits du Terroire</a><span>{{ d }}</span></li>
                                    <li><a href=\"{{ path('maroquinerie_produits') }}\" >Maroquinerie</a><span>{{ e }}</span></li>
                                    <li><a href=\"{{ path('decoration_produits') }}\" >Décoration</a><span>{{ f }}</span></li>
                                </ul>

                            </div>

                            <div class=\"widget widget-filter-links clearfix\">

                                <h4>Trier par</h4>
                                <ul class=\"shop-sorting\">
                                    <li class=\"widget-filter-reset active-filter\"><a href=\"#\"
                                                                                     data-sort-by=\"original-order\">Clear</a>
                                    </li>
                                    <li><a href=\"{{ path('libsort_produits') }}\" >Nom</a></li>
                                    <li><a href=\"{{ path('prixasc_produits') }}\" >Prix: ascendant</a></li>
                                    <li><a href=\"{{ path('prixdesc_produits') }}\" >Prix: descendant</a></li>
                                </ul>

                            </div>

                        </div>
                    </div><!-- .sidebar end -->
                </div>
            </div>
        </section>



        {% block javascripts %}
            <script>
                \$document.ready(function () {
                });
            </script>

        {% endblock %}

    {% endblock %}", "StockBundle::produits.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/StockBundle/Resources/views/produits.html.twig");
    }
}
