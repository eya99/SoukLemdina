<?php

/* CommandeBundle:Panier:afficherPanier.html.twig */
class __TwigTemplate_e9b78df7a63f7b18e989054b7914e367ace4df25f307dbc258330c0fc7a00382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "CommandeBundle:Panier:afficherPanier.html.twig", 1);
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
        $__internal_699d943039b14381d68ea7bde45d36de6a852b6b54f14a455a168f3e84d17fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699d943039b14381d68ea7bde45d36de6a852b6b54f14a455a168f3e84d17fcb->enter($__internal_699d943039b14381d68ea7bde45d36de6a852b6b54f14a455a168f3e84d17fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Panier:afficherPanier.html.twig"));

        $__internal_3b38910996137a8edcdd2556329ce4734fb7a31fc901f66e73d7b439f33d6867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b38910996137a8edcdd2556329ce4734fb7a31fc901f66e73d7b439f33d6867->enter($__internal_3b38910996137a8edcdd2556329ce4734fb7a31fc901f66e73d7b439f33d6867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Panier:afficherPanier.html.twig"));

        // line 2
        $context["totalHT"] = 0;
        // line 3
        $context["totalTTC"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_699d943039b14381d68ea7bde45d36de6a852b6b54f14a455a168f3e84d17fcb->leave($__internal_699d943039b14381d68ea7bde45d36de6a852b6b54f14a455a168f3e84d17fcb_prof);

        
        $__internal_3b38910996137a8edcdd2556329ce4734fb7a31fc901f66e73d7b439f33d6867->leave($__internal_3b38910996137a8edcdd2556329ce4734fb7a31fc901f66e73d7b439f33d6867_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c49eee6b7b71a1c64fde7fc8e7a4a6bb9103c4de27ac839c2120334f2bbae5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49eee6b7b71a1c64fde7fc8e7a4a6bb9103c4de27ac839c2120334f2bbae5e0->enter($__internal_c49eee6b7b71a1c64fde7fc8e7a4a6bb9103c4de27ac839c2120334f2bbae5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18a8543891528f8e64b39d2f792daf0eef5a89d88cb5094b971db7149fb20e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a8543891528f8e64b39d2f792daf0eef5a89d88cb5094b971db7149fb20e3c->enter($__internal_18a8543891528f8e64b39d2f792daf0eef5a89d88cb5094b971db7149fb20e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Mon Panier</h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Acceuil</a></li>
                <li><a href=\"#\">Boutique</a></li>
                <li class=\"active\">Panier</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"container clearfix\">

                <div class=\"table-responsive bottommargin\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 29
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    <table class=\"table cart\">
                        <thead>
                        <tr>
                            <th class=\"cart-product-remove\">&nbsp;</th>
                            <th class=\"cart-product-thumbnail\">&nbsp;</th>
                            <th class=\"cart-product-name\">Article</th>
                            <th class=\"cart-product-price\">Prix sans reduction</th>
                            <th class=\"cart-product-price\">Prix</th>

                            <th class=\"cart-product-quantity\">Quantité</th>
                            <th class=\"cart-product-subtotal\">Total</th>
                        </tr>
                        </thead>
                        <tbody>

    ";
        // line 48
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 49
            echo "        <tr>
            <td colspan=\"4\" data-center=\"true\">Aucun articles dans votre panier</td>
        </tr>
    ";
        }
        // line 53
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 54
            echo "
        <tr class=\"cart_item\">
            <form action=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">

            <td class=\"cart-product-remove\">
                                <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" class=\"remove\" title=\"Remove this item\"><i class=\"icon-trash2\"></i></a>
                            </td>

                            <td class=\"cart-product-thumbnail\">
                                <a href=\"#\"><img width=\"64\" height=\"64\" src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", array()), "html", null, true);
            echo "\" alt=\"Pink Printed Dress\"></a>
                            </td>

                            <td class=\"cart-product-name\">
                                <a href=\"#\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
            echo "</a>
                            </td>

                            <td class=\"cart-product-price\">
                                <span class=\"amount\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</span>
                            </td>
                <td class=\"cart-product-price\">
                    <span class=\"amount\">";
            // line 74
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) - (($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "promotion", array())) / 100)), "html", null, true);
            echo "</span>
                </td>

                            <td class=\"cart-product-quantity\">
                                <div class=\"quantity clearfix\">
                                    <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["produit"], "quqntite", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 81
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                                    </select>&nbsp;
                               <!--     <input type=\"button\" value=\"-\" class=\"minus\" id=\"negative\">
                                    <input type=\"text\" name=\"quantity\" value=\"2\" id=\"qte\" class=\"qty\" onChange=\"this.form.submit()\" />
                                    <input type=\"button\" value=\"+\" class=\"plus\" id=\"positive\"> !-->
                                </div>
                            </td>


                            <td class=\"cart-product-subtotal\">
                                <span name=\"prixtotal\" class=\"amount\">";
            // line 92
            echo twig_escape_filter($this->env, (($this->getAttribute($context["produit"], "prix", array()) - (($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "promotion", array())) / 100)) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo "</span>
                            </td>
            </form>
                        </tr>
        ";
            // line 96
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + (($this->getAttribute($context["produit"], "prix", array()) - (($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "promotion", array())) / 100)) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 97
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "


                        </tbody>

                    </table>

                </div>

                <div class=\"row clearfix\">
                    <div class=\"col-md-6 clearfix\">

                    </div>

                    <div class=\"col-md-6 clearfix\">
                        <div class=\"table-responsive\">
                            <h4>Cart Totals</h4>

                            <table class=\"table cart\">
                                <tbody>

                                <tr class=\"cart_item\">
                                    <td class=\"cart-product-name\">
                                        <strong>Shipping</strong>
                                    </td>

                                    <td class=\"cart-product-name\">
                                        <span class=\"amount\">Free Delivery</span>
                                    </td>
                                </tr>
                                <tr class=\"cart_item\">
                                    <td class=\"cart-product-name\">
                                        <strong>Total</strong>
                                    </td>
                                    ";
        // line 133
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 134
            echo "
                                    <td class=\"cart-product-name\">
                                        <span id=\"total\" class=\"amount color lead\"><strong>";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo " DT</strong></span>
                                    </td>
                                    ";
        }
        // line 139
        echo "                                <tr class=\"cart_item\">
                                    <td colspan=\"6\">
                                        <div class=\"row clearfix\">
                                            <div class=\"col-md-4 col-xs-4 nopadding\">

                                            </div>
                                            <div class=\"col-md-8 col-xs-8 nopadding\">
                                                <a href=\"#\" class=\"button button-3d nomargin fright\">Continuer mes achats</a>
                                                <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commander_produit", array("id" => (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")))), "html", null, true);
        echo "\" class=\"button button-3d notopmargin fright\">Acheter</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tr>
                                </form>

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- #content end -->
    <!-- External JavaScripts
============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/functions.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Switch Plugin -->
    <script type=\"text/javascript\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/components/bs-switches.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(window).load(function () {
            var swiperParent = new Swiper('.swiper-parent', {
                paginationClickable: false,
                slidesPerView: 4,
                grabCursor: true,
                prevButton: '#slider-arrow-left',
                nextButton: '#slider-arrow-right'
            });

            var swiperNested1 = new Swiper('.swiper-nested-1', {
                direction: 'vertical',
                paginationClickable: false,
                slidesPerView: 3,
                prevButton: '#sw1-arrow-top',
                nextButton: '#sw1-arrow-bottom'
            });

            var swiperNested2 = new Swiper('.swiper-nested-2', {
                direction: 'vertical',
                paginationClickable: false,
                slidesPerView: 2,
                prevButton: '#sw2-arrow-top',
                nextButton: '#sw2-arrow-bottom'
            });

            var swiperNested3 = new Swiper('.swiper-nested-3', {
                direction: 'vertical',
                paginationClickable: false,
                slidesPerView: 2,
                prevButton: '#sw3-arrow-top',
                nextButton: '#sw3-arrow-bottom'
            });
        });
       /* \$('td.cart-product-quantity').each(function () {
            \$('input.minus').click(function () {
            \$('input.qty').attr('value',parseInt(\$('input.qty').val())-1);
        })});
        \$('input.plus').click(function () {
            \$('input.qty').attr('value',parseInt(\$('input.qty').val())+1);
        });
*/
    </script>
";
        
        $__internal_18a8543891528f8e64b39d2f792daf0eef5a89d88cb5094b971db7149fb20e3c->leave($__internal_18a8543891528f8e64b39d2f792daf0eef5a89d88cb5094b971db7149fb20e3c_prof);

        
        $__internal_c49eee6b7b71a1c64fde7fc8e7a4a6bb9103c4de27ac839c2120334f2bbae5e0->leave($__internal_c49eee6b7b71a1c64fde7fc8e7a4a6bb9103c4de27ac839c2120334f2bbae5e0_prof);

    }

    public function getTemplateName()
    {
        return "CommandeBundle:Panier:afficherPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 177,  313 => 175,  306 => 171,  302 => 170,  276 => 147,  266 => 139,  260 => 136,  256 => 134,  254 => 133,  218 => 99,  211 => 97,  209 => 96,  202 => 92,  191 => 83,  176 => 81,  172 => 80,  163 => 74,  157 => 71,  150 => 67,  142 => 63,  135 => 59,  129 => 56,  125 => 54,  120 => 53,  114 => 49,  111 => 48,  94 => 32,  85 => 29,  82 => 28,  78 => 27,  54 => 5,  45 => 4,  35 => 1,  33 => 3,  31 => 2,  11 => 1,);
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
{% set totalHT = 0 %}
{% set totalTTC = 0%}
{% block body %}
    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Mon Panier</h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Acceuil</a></li>
                <li><a href=\"#\">Boutique</a></li>
                <li class=\"active\">Panier</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"container clearfix\">

                <div class=\"table-responsive bottommargin\">
                    {% for flashMessage in app.session.flashbag.get('success') %}
                        <div class=\"alert alert-success\">
                            {{ flashMessage }}
                        </div>
                    {% endfor %}
                    <table class=\"table cart\">
                        <thead>
                        <tr>
                            <th class=\"cart-product-remove\">&nbsp;</th>
                            <th class=\"cart-product-thumbnail\">&nbsp;</th>
                            <th class=\"cart-product-name\">Article</th>
                            <th class=\"cart-product-price\">Prix sans reduction</th>
                            <th class=\"cart-product-price\">Prix</th>

                            <th class=\"cart-product-quantity\">Quantité</th>
                            <th class=\"cart-product-subtotal\">Total</th>
                        </tr>
                        </thead>
                        <tbody>

    {#{{ for produit in produit }}#}
    {% if produits|length == 0 %}
        <tr>
            <td colspan=\"4\" data-center=\"true\">Aucun articles dans votre panier</td>
        </tr>
    {% endif %}
    {% for produit in produits %}

        <tr class=\"cart_item\">
            <form action=\"{{ path('ajouter', { 'id' : produit.id }) }}\" method=\"get\">

            <td class=\"cart-product-remove\">
                                <a href=\"{{ path('supprimer', { 'id' : produit.id }) }}\" class=\"remove\" title=\"Remove this item\"><i class=\"icon-trash2\"></i></a>
                            </td>

                            <td class=\"cart-product-thumbnail\">
                                <a href=\"#\"><img width=\"64\" height=\"64\" src=\"{{ asset('uploads/images/') }}{{ produit.image }}\" alt=\"Pink Printed Dress\"></a>
                            </td>

                            <td class=\"cart-product-name\">
                                <a href=\"#\">{{ produit.libelle }}</a>
                            </td>

                            <td class=\"cart-product-price\">
                                <span class=\"amount\">{{ produit.prix }}</span>
                            </td>
                <td class=\"cart-product-price\">
                    <span class=\"amount\">{{ produit.prix-produit.prix*produit.promotion/100 }}</span>
                </td>

                            <td class=\"cart-product-quantity\">
                                <div class=\"quantity clearfix\">
                                    <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                        {% for i in 1..produit.quqntite %}
                                            <option value=\"{{ i }}\" {% if i == panier[produit.id] %} selected=\"selected\" {% endif %}>{{ i }}</option>
                                        {% endfor %}
                                    </select>&nbsp;
                               <!--     <input type=\"button\" value=\"-\" class=\"minus\" id=\"negative\">
                                    <input type=\"text\" name=\"quantity\" value=\"2\" id=\"qte\" class=\"qty\" onChange=\"this.form.submit()\" />
                                    <input type=\"button\" value=\"+\" class=\"plus\" id=\"positive\"> !-->
                                </div>
                            </td>


                            <td class=\"cart-product-subtotal\">
                                <span name=\"prixtotal\" class=\"amount\">{{ (produit.prix-produit.prix*produit.promotion/100) * panier[produit.id] }}</span>
                            </td>
            </form>
                        </tr>
        {% set totalHT = totalHT + (produit.prix-(produit.prix*produit.promotion/100)) * panier[produit.id] %}

    {% endfor %}



                        </tbody>

                    </table>

                </div>

                <div class=\"row clearfix\">
                    <div class=\"col-md-6 clearfix\">

                    </div>

                    <div class=\"col-md-6 clearfix\">
                        <div class=\"table-responsive\">
                            <h4>Cart Totals</h4>

                            <table class=\"table cart\">
                                <tbody>

                                <tr class=\"cart_item\">
                                    <td class=\"cart-product-name\">
                                        <strong>Shipping</strong>
                                    </td>

                                    <td class=\"cart-product-name\">
                                        <span class=\"amount\">Free Delivery</span>
                                    </td>
                                </tr>
                                <tr class=\"cart_item\">
                                    <td class=\"cart-product-name\">
                                        <strong>Total</strong>
                                    </td>
                                    {% if produits|length != 0 %}

                                    <td class=\"cart-product-name\">
                                        <span id=\"total\" class=\"amount color lead\"><strong>{{ totalHT }} DT</strong></span>
                                    </td>
                                    {% endif %}
                                <tr class=\"cart_item\">
                                    <td colspan=\"6\">
                                        <div class=\"row clearfix\">
                                            <div class=\"col-md-4 col-xs-4 nopadding\">

                                            </div>
                                            <div class=\"col-md-8 col-xs-8 nopadding\">
                                                <a href=\"#\" class=\"button button-3d nomargin fright\">Continuer mes achats</a>
                                                <a href=\"{{ path('commander_produit',{'id':totalHT}) }}\" class=\"button button-3d notopmargin fright\">Acheter</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tr>
                                </form>

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- #content end -->
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
        jQuery(window).load(function () {
            var swiperParent = new Swiper('.swiper-parent', {
                paginationClickable: false,
                slidesPerView: 4,
                grabCursor: true,
                prevButton: '#slider-arrow-left',
                nextButton: '#slider-arrow-right'
            });

            var swiperNested1 = new Swiper('.swiper-nested-1', {
                direction: 'vertical',
                paginationClickable: false,
                slidesPerView: 3,
                prevButton: '#sw1-arrow-top',
                nextButton: '#sw1-arrow-bottom'
            });

            var swiperNested2 = new Swiper('.swiper-nested-2', {
                direction: 'vertical',
                paginationClickable: false,
                slidesPerView: 2,
                prevButton: '#sw2-arrow-top',
                nextButton: '#sw2-arrow-bottom'
            });

            var swiperNested3 = new Swiper('.swiper-nested-3', {
                direction: 'vertical',
                paginationClickable: false,
                slidesPerView: 2,
                prevButton: '#sw3-arrow-top',
                nextButton: '#sw3-arrow-bottom'
            });
        });
       /* \$('td.cart-product-quantity').each(function () {
            \$('input.minus').click(function () {
            \$('input.qty').attr('value',parseInt(\$('input.qty').val())-1);
        })});
        \$('input.plus').click(function () {
            \$('input.qty').attr('value',parseInt(\$('input.qty').val())+1);
        });
*/
    </script>
{% endblock %}


", "CommandeBundle:Panier:afficherPanier.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/CommandeBundle/Resources/views/Panier/afficherPanier.html.twig");
    }
}
