<?php

/* StockBundle::produits.html.twig */
class __TwigTemplate_8fc97cdee2ba0f1c391bde941754cb3d212f61abaa867b3baac52d344eee0253 extends Twig_Template
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
        $__internal_f687f7cb686181c1601231909ba74c1a623b181c45ea35f2b805d69e5114ca76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f687f7cb686181c1601231909ba74c1a623b181c45ea35f2b805d69e5114ca76->enter($__internal_f687f7cb686181c1601231909ba74c1a623b181c45ea35f2b805d69e5114ca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f687f7cb686181c1601231909ba74c1a623b181c45ea35f2b805d69e5114ca76->leave($__internal_f687f7cb686181c1601231909ba74c1a623b181c45ea35f2b805d69e5114ca76_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_368360cae6fa328d1b980f933ac0fecb996cbc1550d4f84d801919cd3f989dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368360cae6fa328d1b980f933ac0fecb996cbc1550d4f84d801919cd3f989dde->enter($__internal_368360cae6fa328d1b980f933ac0fecb996cbc1550d4f84d801919cd3f989dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<title>Produits</title>


 ";
        
        $__internal_368360cae6fa328d1b980f933ac0fecb996cbc1550d4f84d801919cd3f989dde->leave($__internal_368360cae6fa328d1b980f933ac0fecb996cbc1550d4f84d801919cd3f989dde_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b795683a22281e0eb06c64f43c215ff5c195cfce0a80681ec14daa2d751ccc81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b795683a22281e0eb06c64f43c215ff5c195cfce0a80681ec14daa2d751ccc81->enter($__internal_b795683a22281e0eb06c64f43c215ff5c195cfce0a80681ec14daa2d751ccc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\"
                                                     style=\"height: 180px; width: 100%;display: block;\"
                                                     alt=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
            echo "\" ></div>



                                            ";
            // line 50
            if (($this->getAttribute($context["produit"], "categorie", array()) == "Arts de la table")) {
                // line 51
                echo "                                                ";
                $context["a"] = ((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) + 1);
                // line 52
                echo "                                            ";
            }
            // line 53
            echo "                                            ";
            if (($this->getAttribute($context["produit"], "categorie", array()) == "Habillement")) {
                // line 54
                echo "                                                ";
                $context["b"] = ((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")) + 1);
                // line 55
                echo "                                            ";
            }
            // line 56
            echo "                                            ";
            if (($this->getAttribute($context["produit"], "categorie", array()) == "Bijoux")) {
                // line 57
                echo "                                                ";
                $context["c"] = ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) + 1);
                // line 58
                echo "                                            ";
            }
            // line 59
            echo "                                            ";
            if (($this->getAttribute($context["produit"], "categorie", array()) == "Produits du Terroire")) {
                // line 60
                echo "                                                ";
                $context["d"] = ((isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")) + 1);
                // line 61
                echo "                                            ";
            }
            // line 62
            echo "                                            ";
            if (($this->getAttribute($context["produit"], "categorie", array()) == "Maroquinerie")) {
                // line 63
                echo "                                                ";
                $context["e"] = ((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")) + 1);
                // line 64
                echo "                                            ";
            }
            // line 65
            echo "                                            ";
            if (($this->getAttribute($context["produit"], "categorie", array()) == "Décoration")) {
                // line 66
                echo "                                                ";
                $context["f"] = ((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")) + 1);
                // line 67
                echo "                                            ";
            }
            // line 68
            echo "


                                            ";
            // line 71
            if (($this->getAttribute($context["produit"], "promotion", array()) != 0)) {
                // line 72
                echo "                                                <div class=\"sale-flash\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "promotion", array()), "html", null, true);
                echo "% Off*</div>
                                            ";
            }
            // line 74
            echo "                                            <div class=\"product-overlay\">
                                                <!--  <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supp_produits", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Add to Cart</span></a> -->
                                                <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modif_produits", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"
                                                   class=\"add-to-cart\"><i
                                                            class=\"icon-wrench\"></i><span> Modifier</span></a>
                                                <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supp_produits", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"
                                                   class=\"add-to-cart\" onclick=\"return confirm('Are you sure?')\"><i
                                                            class=\"icon-filter\"></i><span> supprimer</span></a>

                                            </div>
                                        </div>
                                        <div class=\"product-desc\">
                                            <div class=\"product-title\"><h3><a
                                                            href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_produit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
            echo "</a>
                                                </h3></div>
                                            ";
            // line 89
            if (($this->getAttribute($context["produit"], "promotion", array()) != 0)) {
                // line 90
                echo "                                                <div class=\"product-price\">
                                                    <del>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " DT ";
                if (($this->getAttribute($context["produit"], "type", array()) == "Sur Commande")) {
                    echo " / Kg  ";
                }
                echo "</del>
                                                    <ins>";
                // line 92
                echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) - (($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "promotion", array())) / 100)), "html", null, true);
                echo "DT";
                if (($this->getAttribute($context["produit"], "type", array()) == "Sur Commande")) {
                    echo "  / Kg  ";
                }
                // line 93
                echo "                                                    </ins>
                                                </div>
                                            ";
            } else {
                // line 96
                echo "                                                <div class=\"product-price\">
                                                    ";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " DT ";
                if (($this->getAttribute($context["produit"], "type", array()) == "Sur Commande")) {
                    echo "  / Kg ";
                }
                // line 98
                echo "                                                </div>
                                            ";
            }
            // line 100
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
        // line 111
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
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("art_produits");
        echo "\" >Arts de la table</a> <span>";
        echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
        echo "</span></li>
                                    <li><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("habillement_produits");
        echo "\" >Habillement</a><span>";
        echo twig_escape_filter($this->env, (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "html", null, true);
        echo "</span></li>
                                    <li><a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bijoux_produits");
        echo "\" >Bijoux</a><span> ";
        echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
        echo "</span></li>
                                    <li><a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("territoire_produits");
        echo "\" >Produits du Terroire</a><span>";
        echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "html", null, true);
        echo "</span></li>
                                    <li><a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("maroquinerie_produits");
        echo "\" >Maroquinerie</a><span>";
        echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "html", null, true);
        echo "</span></li>
                                    <li><a href=\"";
        // line 128
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
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("libsort_produits");
        echo "\" >Nom</a></li>
                                    <li><a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prixasc_produits");
        echo "\" >Prix: ascendant</a></li>
                                    <li><a href=\"";
        // line 142
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
        // line 155
        $this->displayBlock('javascripts', $context, $blocks);
        // line 162
        echo "
    ";
        
        $__internal_b795683a22281e0eb06c64f43c215ff5c195cfce0a80681ec14daa2d751ccc81->leave($__internal_b795683a22281e0eb06c64f43c215ff5c195cfce0a80681ec14daa2d751ccc81_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02d86769de8f3a68802912d11e93d7ab56ab2dfd36d87559d7775df99656b404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d86769de8f3a68802912d11e93d7ab56ab2dfd36d87559d7775df99656b404->enter($__internal_02d86769de8f3a68802912d11e93d7ab56ab2dfd36d87559d7775df99656b404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        echo "            <script>
                \$document.ready(function () {
                });
            </script>

        ";
        
        $__internal_02d86769de8f3a68802912d11e93d7ab56ab2dfd36d87559d7775df99656b404->leave($__internal_02d86769de8f3a68802912d11e93d7ab56ab2dfd36d87559d7775df99656b404_prof);

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
        return array (  391 => 156,  385 => 155,  377 => 162,  375 => 155,  359 => 142,  355 => 141,  351 => 140,  334 => 128,  328 => 127,  322 => 126,  316 => 125,  310 => 124,  304 => 123,  290 => 111,  274 => 100,  270 => 98,  264 => 97,  261 => 96,  256 => 93,  250 => 92,  242 => 91,  239 => 90,  237 => 89,  230 => 87,  219 => 79,  213 => 76,  209 => 75,  206 => 74,  200 => 72,  198 => 71,  193 => 68,  190 => 67,  187 => 66,  184 => 65,  181 => 64,  178 => 63,  175 => 62,  172 => 61,  169 => 60,  166 => 59,  163 => 58,  160 => 57,  157 => 56,  154 => 55,  151 => 54,  148 => 53,  145 => 52,  142 => 51,  140 => 50,  133 => 46,  127 => 44,  121 => 40,  117 => 39,  111 => 35,  104 => 34,  99 => 31,  90 => 29,  86 => 28,  74 => 19,  65 => 13,  57 => 7,  51 => 6,  36 => 2,  11 => 1,);
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
                                                <img data-src=\"holder.js/300x200\" src=\"{{ asset('uploads/images/') }}{{ produit.image }}\"
                                                     style=\"height: 180px; width: 100%;display: block;\"
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
