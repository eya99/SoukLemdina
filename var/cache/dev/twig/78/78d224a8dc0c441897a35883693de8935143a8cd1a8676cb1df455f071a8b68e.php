<?php

/* StockBundle::produits.html.twig */
class __TwigTemplate_9b9c5c69ab555a5abe73ddbd0b12251d4d4f4117269dfd28eedc5d7f6ee05b50 extends Twig_Template
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
        $__internal_8753c3f8f28aeb2bab3424d6690746291dab06c5549d319455ac945e5cd01485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8753c3f8f28aeb2bab3424d6690746291dab06c5549d319455ac945e5cd01485->enter($__internal_8753c3f8f28aeb2bab3424d6690746291dab06c5549d319455ac945e5cd01485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::produits.html.twig"));

        $__internal_e48046641c7c9d6699d64de6a8432dea30cf0987ba23b236ed33ecaabc135d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48046641c7c9d6699d64de6a8432dea30cf0987ba23b236ed33ecaabc135d9d->enter($__internal_e48046641c7c9d6699d64de6a8432dea30cf0987ba23b236ed33ecaabc135d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8753c3f8f28aeb2bab3424d6690746291dab06c5549d319455ac945e5cd01485->leave($__internal_8753c3f8f28aeb2bab3424d6690746291dab06c5549d319455ac945e5cd01485_prof);

        
        $__internal_e48046641c7c9d6699d64de6a8432dea30cf0987ba23b236ed33ecaabc135d9d->leave($__internal_e48046641c7c9d6699d64de6a8432dea30cf0987ba23b236ed33ecaabc135d9d_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_9649b1756251f3ad7de752683fc156465a750701ee461baf69488f565130b545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9649b1756251f3ad7de752683fc156465a750701ee461baf69488f565130b545->enter($__internal_9649b1756251f3ad7de752683fc156465a750701ee461baf69488f565130b545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0e92a54ddd2066c2e66a1ea7021a1c36081142403edc591294fa1ccd70233460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e92a54ddd2066c2e66a1ea7021a1c36081142403edc591294fa1ccd70233460->enter($__internal_0e92a54ddd2066c2e66a1ea7021a1c36081142403edc591294fa1ccd70233460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<title>Produits</title>


 ";
        
        $__internal_0e92a54ddd2066c2e66a1ea7021a1c36081142403edc591294fa1ccd70233460->leave($__internal_0e92a54ddd2066c2e66a1ea7021a1c36081142403edc591294fa1ccd70233460_prof);

        
        $__internal_9649b1756251f3ad7de752683fc156465a750701ee461baf69488f565130b545->leave($__internal_9649b1756251f3ad7de752683fc156465a750701ee461baf69488f565130b545_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_792ecb2e517919cdd5033da84bfe79f43fc15c37ca2094e3bb207d8df0ffd712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792ecb2e517919cdd5033da84bfe79f43fc15c37ca2094e3bb207d8df0ffd712->enter($__internal_792ecb2e517919cdd5033da84bfe79f43fc15c37ca2094e3bb207d8df0ffd712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_409ab00fb840918e501a708d351847830d32557b8610ce56a794cd3d569cf8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409ab00fb840918e501a708d351847830d32557b8610ce56a794cd3d569cf8de->enter($__internal_409ab00fb840918e501a708d351847830d32557b8610ce56a794cd3d569cf8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_409ab00fb840918e501a708d351847830d32557b8610ce56a794cd3d569cf8de->leave($__internal_409ab00fb840918e501a708d351847830d32557b8610ce56a794cd3d569cf8de_prof);

        
        $__internal_792ecb2e517919cdd5033da84bfe79f43fc15c37ca2094e3bb207d8df0ffd712->leave($__internal_792ecb2e517919cdd5033da84bfe79f43fc15c37ca2094e3bb207d8df0ffd712_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_385f152a5005e8d418ba1511a1f085802073108620b629a01e9085926a568d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385f152a5005e8d418ba1511a1f085802073108620b629a01e9085926a568d99->enter($__internal_385f152a5005e8d418ba1511a1f085802073108620b629a01e9085926a568d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d04b9caecf4bf30d28ae3f92f373de6cc9e71e4a79b0a8e3f8af829c9aca5331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04b9caecf4bf30d28ae3f92f373de6cc9e71e4a79b0a8e3f8af829c9aca5331->enter($__internal_d04b9caecf4bf30d28ae3f92f373de6cc9e71e4a79b0a8e3f8af829c9aca5331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        echo "            <script>
                \$document.ready(function () {
                });
            </script>

        ";
        
        $__internal_d04b9caecf4bf30d28ae3f92f373de6cc9e71e4a79b0a8e3f8af829c9aca5331->leave($__internal_d04b9caecf4bf30d28ae3f92f373de6cc9e71e4a79b0a8e3f8af829c9aca5331_prof);

        
        $__internal_385f152a5005e8d418ba1511a1f085802073108620b629a01e9085926a568d99->leave($__internal_385f152a5005e8d418ba1511a1f085802073108620b629a01e9085926a568d99_prof);

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
        return array (  412 => 156,  403 => 155,  392 => 162,  390 => 155,  374 => 142,  370 => 141,  366 => 140,  349 => 128,  343 => 127,  337 => 126,  331 => 125,  325 => 124,  319 => 123,  305 => 111,  289 => 100,  285 => 98,  279 => 97,  276 => 96,  271 => 93,  265 => 92,  257 => 91,  254 => 90,  252 => 89,  245 => 87,  234 => 79,  228 => 76,  224 => 75,  221 => 74,  215 => 72,  213 => 71,  208 => 68,  205 => 67,  202 => 66,  199 => 65,  196 => 64,  193 => 63,  190 => 62,  187 => 61,  184 => 60,  181 => 59,  178 => 58,  175 => 57,  172 => 56,  169 => 55,  166 => 54,  163 => 53,  160 => 52,  157 => 51,  155 => 50,  148 => 46,  142 => 44,  136 => 40,  132 => 39,  126 => 35,  119 => 34,  114 => 31,  105 => 29,  101 => 28,  89 => 19,  80 => 13,  72 => 7,  63 => 6,  42 => 2,  11 => 1,);
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
