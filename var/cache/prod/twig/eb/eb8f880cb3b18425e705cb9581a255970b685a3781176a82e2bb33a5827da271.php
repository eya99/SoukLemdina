<?php

/* StockBundle::produit.html.twig */
class __TwigTemplate_355c1015267002cd89c7ee885e162911864e92582b7e1513afa47f8fb3b5744c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StockBundle::layout.html.twig", "StockBundle::produit.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StockBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88f77dd7a393943800cdb9f6e59bfb94643af5d768214564d9b931738da2acfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f77dd7a393943800cdb9f6e59bfb94643af5d768214564d9b931738da2acfa->enter($__internal_88f77dd7a393943800cdb9f6e59bfb94643af5d768214564d9b931738da2acfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88f77dd7a393943800cdb9f6e59bfb94643af5d768214564d9b931738da2acfa->leave($__internal_88f77dd7a393943800cdb9f6e59bfb94643af5d768214564d9b931738da2acfa_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_9034366ced1db78c091504e2db0210eca1790fa92065b3f4f1622154ec4bd7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9034366ced1db78c091504e2db0210eca1790fa92065b3f4f1622154ec4bd7ed->enter($__internal_9034366ced1db78c091504e2db0210eca1790fa92065b3f4f1622154ec4bd7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<title>Produit</title>";
        
        $__internal_9034366ced1db78c091504e2db0210eca1790fa92065b3f4f1622154ec4bd7ed->leave($__internal_9034366ced1db78c091504e2db0210eca1790fa92065b3f4f1622154ec4bd7ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23489daee589391a7cee8d5f185c237348cc5a9e637bd7bdfe0ae00b62af2070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23489daee589391a7cee8d5f185c237348cc5a9e637bd7bdfe0ae00b62af2070->enter($__internal_23489daee589391a7cee8d5f185c237348cc5a9e637bd7bdfe0ae00b62af2070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <section id=\"page-title\">

            <div class=\"container clearfix\">
                <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle", array()), "html", null, true);
        echo "</h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Shop</a></li>
                    <li class=\"active\">Shop Single</li>
                </ol>
            </div>

        </section><!-- #page-title end -->
        <section id=\"content\">

            <div class=\"content-wrap\">

                <div class=\"container clearfix\">

                    <div class=\"single-product\">

                        <div class=\"product\">

                            <div class=\"col_two_fifth\">

                                <!-- Product Single - Gallery
                                ============================================= -->
                                <div class=\"product-image\" style=\"overflow: visible;\">
                                    <div id=\"oc-images\" class=\"owl-carousel image-carousel carousel-widget\" data-lightbox=\"gallery\" data-margin=\"0\" data-items=\"1\" data-pagi=\"false\" data-autoplay=\"6000\" data-loop=\"true\">
                                        <div class=\"oc-item\">
                                            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle", array()), "html", null, true);
        echo "\" data-lightbox=\"gallery-item\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "html", null, true);
        echo "\" alt=\"Pink Printed Dress\"></a>
                                        </div>

                                    </div>
                                    ";
        // line 38
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "promotion", array()) != 0)) {
            // line 39
            echo "                                        <div class=\"sale-flash\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "promotion", array()), "html", null, true);
            echo "% Off*</div>
                                    ";
        }
        // line 41
        echo "                                </div><!-- Product Single - Gallery End -->



                            </div>

                            <div class=\"col_two_fifth product-desc\">

                                <!-- Product Single - Price
                                ============================================= -->
                                ";
        // line 51
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "promotion", array()) != 0)) {
            // line 52
            echo "                                <div class=\"product-price\">
                                    <del>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), "html", null, true);
            echo " DT ";
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "type", array()) == "Sur Commande")) {
                echo " / Kg  ";
            }
            echo "</del>
                                    <ins>";
            // line 54
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()) - (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()) * $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "promotion", array())) / 100)), "html", null, true);
            echo "DT";
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "type", array()) == "Sur Commande")) {
                echo "  / Kg  ";
            }
            // line 55
            echo "                                    </ins>
                                </div>
                                ";
        } else {
            // line 58
            echo "                                <div class=\"product-price\">
                                    ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), "html", null, true);
            echo " DT ";
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "type", array()) == "Sur Commande")) {
                echo "  / Kg ";
            }
            // line 60
            echo "                                </div>
                                ";
        }
        // line 61
        echo "<!-- Product Single - Price End -->

                                <!-- Product Single - Rating
                                ============================================= -->
                                <div class=\"product-rating\">
                                  <a class=\"button button-3d button-rounded button-red\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout_wishlist", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
        echo "\" onclick=\"return confirm('Are you sure?')\">  <i class=\"icon-heart3\"></i> Wishlist</a>
                                </div><!-- Product Single - Rating End -->

                                <div class=\"clear\"></div>
                                <div class=\"line\"></div>

                                <!-- Product Single - Quantity & Cart Button
                                ============================================= -->
                                    <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
        echo "\" class=\"add-to-cart button nomargin\">Ajouter au panier</a>

                                <div class=\"clear\"></div>
                                <div class=\"line\"></div>

                                <!-- Product Single - Short Description
                                ============================================= -->
                                <p>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo ".</p>
                                <!-- Product Single - Short Description End -->

                                <!-- Product Single - Meta
                                ============================================= -->
                                <div class=\"panel panel-default product-meta\">
                                    <div class=\"panel-body\">
                                        <span itemprop=\"productID\" class=\"sku_wrapper\">SKU: <span class=\"sku\">8465415</span></span>
                                        <span class=\"posted_in\">Category: <a href=\"#\" rel=\"tag\">";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "html", null, true);
        echo "</a>.</span>
                                        <span class=\"tagged_as\">Tags: <a href=\"#\" rel=\"tag\">";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "type", array()), "html", null, true);
        echo "</a>.</span>
                                    </div>
                                </div><!-- Product Single - Meta End -->

                                <!-- Product Single - Share
                                ============================================= -->
                                <div class=\"si-share noborder clearfix\">
                                    <span>Share:</span>
                                    <div>
                                        <a href=\"#\" class=\"social-icon si-borderless si-facebook\">
                                            <i class=\"icon-facebook\"></i>
                                            <i class=\"icon-facebook\"></i>
                                        </a>
                                        <a href=\"#\" class=\"social-icon si-borderless si-twitter\">
                                            <i class=\"icon-twitter\"></i>
                                            <i class=\"icon-twitter\"></i>
                                        </a>
                                        <a href=\"#\" class=\"social-icon si-borderless si-pinterest\">
                                            <i class=\"icon-pinterest\"></i>
                                            <i class=\"icon-pinterest\"></i>
                                        </a>
                                        <a href=\"#\" class=\"social-icon si-borderless si-gplus\">
                                            <i class=\"icon-gplus\"></i>
                                            <i class=\"icon-gplus\"></i>
                                        </a>
                                        <a href=\"#\" class=\"social-icon si-borderless si-rss\">
                                            <i class=\"icon-rss\"></i>
                                            <i class=\"icon-rss\"></i>
                                        </a>
                                        <a href=\"#\" class=\"social-icon si-borderless si-email3\">
                                            <i class=\"icon-email3\"></i>
                                            <i class=\"icon-email3\"></i>
                                        </a>
                                    </div>
                                </div><!-- Product Single - Share End -->

                            </div>

                            <div class=\"col_one_fifth col_last\">

                                <a href=\"#\" title=\"Brand Logo\" class=\"hidden-xs\"><img class=\"image_fade\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/icons/avatar.jpg"), "html", null, true);
        echo "\"  alt=\"Brand Logo\" style=\"max-width: 84px;\"></a>

                                <div class=\"divider divider-center\"><i class=\"icon-circle-blank\"></i></div>

                                <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                    <div class=\"fbox-icon\">
                                        <i class=\"icon-thumbs-up2\"></i>
                                    </div>
                                    <h3>100% Original</h3>
                                    <p class=\"notopmargin\">We guarantee you the sale of Original Brands.</p>
                                </div>

                                <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                    <div class=\"fbox-icon\">
                                        <i class=\"icon-credit-cards\"></i>
                                    </div>
                                    <h3>Payment Options</h3>
                                    <p class=\"notopmargin\">We accept Visa, MasterCard and American Express.</p>
                                </div>

                                <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                    <div class=\"fbox-icon\">
                                        <i class=\"icon-truck2\"></i>
                                    </div>
                                    <h3>Free Shipping</h3>
                                    <p class=\"notopmargin\">Free Delivery to 100+ Locations on orders above \$40.</p>
                                </div>

                                <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                    <div class=\"fbox-icon\">
                                        <i class=\"icon-undo\"></i>
                                    </div>
                                    <h3>30-Days Returns</h3>
                                    <p class=\"notopmargin\">Return or exchange items purchased within 30 days.</p>
                                </div>

                            </div>

                            <div class=\"clear\"></div><div class=\"line\"></div>



                        </div>

                    </div>





            </div>

        </section><!-- #content end -->

    ";
        
        $__internal_23489daee589391a7cee8d5f185c237348cc5a9e637bd7bdfe0ae00b62af2070->leave($__internal_23489daee589391a7cee8d5f185c237348cc5a9e637bd7bdfe0ae00b62af2070_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle::produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 130,  201 => 90,  197 => 89,  186 => 81,  176 => 74,  165 => 66,  158 => 61,  154 => 60,  148 => 59,  145 => 58,  140 => 55,  134 => 54,  126 => 53,  123 => 52,  121 => 51,  109 => 41,  103 => 39,  101 => 38,  88 => 34,  59 => 8,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"StockBundle::layout.html.twig\" %}
 {% block head %}<title>Produit</title>{% endblock %}
    {% block body %}

        <section id=\"page-title\">

            <div class=\"container clearfix\">
                <h1>{{ produit.libelle }}</h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Shop</a></li>
                    <li class=\"active\">Shop Single</li>
                </ol>
            </div>

        </section><!-- #page-title end -->
        <section id=\"content\">

            <div class=\"content-wrap\">

                <div class=\"container clearfix\">

                    <div class=\"single-product\">

                        <div class=\"product\">

                            <div class=\"col_two_fifth\">

                                <!-- Product Single - Gallery
                                ============================================= -->
                                <div class=\"product-image\" style=\"overflow: visible;\">
                                    <div id=\"oc-images\" class=\"owl-carousel image-carousel carousel-widget\" data-lightbox=\"gallery\" data-margin=\"0\" data-items=\"1\" data-pagi=\"false\" data-autoplay=\"6000\" data-loop=\"true\">
                                        <div class=\"oc-item\">
                                            <a href=\"{{ asset('uploads/images/') }}{{ produit.image }}\" title=\"{{ produit.libelle }}\" data-lightbox=\"gallery-item\"><img src=\"{{ asset('uploads/images/') }}{{ produit.image }}\" alt=\"Pink Printed Dress\"></a>
                                        </div>

                                    </div>
                                    {% if produit.promotion!=0 %}
                                        <div class=\"sale-flash\">{{ produit.promotion }}% Off*</div>
                                    {% endif %}
                                </div><!-- Product Single - Gallery End -->



                            </div>

                            <div class=\"col_two_fifth product-desc\">

                                <!-- Product Single - Price
                                ============================================= -->
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
                                {% endif %}<!-- Product Single - Price End -->

                                <!-- Product Single - Rating
                                ============================================= -->
                                <div class=\"product-rating\">
                                  <a class=\"button button-3d button-rounded button-red\" href=\"{{ path('ajout_wishlist',{'id':produit.id}) }}\" onclick=\"return confirm('Are you sure?')\">  <i class=\"icon-heart3\"></i> Wishlist</a>
                                </div><!-- Product Single - Rating End -->

                                <div class=\"clear\"></div>
                                <div class=\"line\"></div>

                                <!-- Product Single - Quantity & Cart Button
                                ============================================= -->
                                    <a href=\"{{ path('ajouter',{'id': produit.id}) }}\" class=\"add-to-cart button nomargin\">Ajouter au panier</a>

                                <div class=\"clear\"></div>
                                <div class=\"line\"></div>

                                <!-- Product Single - Short Description
                                ============================================= -->
                                <p>{{ produit.description }}.</p>
                                <!-- Product Single - Short Description End -->

                                <!-- Product Single - Meta
                                ============================================= -->
                                <div class=\"panel panel-default product-meta\">
                                    <div class=\"panel-body\">
                                        <span itemprop=\"productID\" class=\"sku_wrapper\">SKU: <span class=\"sku\">8465415</span></span>
                                        <span class=\"posted_in\">Category: <a href=\"#\" rel=\"tag\">{{ produit.categorie }}</a>.</span>
                                        <span class=\"tagged_as\">Tags: <a href=\"#\" rel=\"tag\">{{ produit.type }}</a>.</span>
                                    </div>
                                </div><!-- Product Single - Meta End -->

                                <!-- Product Single - Share
                                ============================================= -->
                                <div class=\"si-share noborder clearfix\">
                                    <span>Share:</span>
                                    <div>
                                        <a href=\"#\" class=\"social-icon si-borderless si-facebook\">
                                            <i class=\"icon-facebook\"></i>
                                            <i class=\"icon-facebook\"></i>
                                        </a>
                                        <a href=\"#\" class=\"social-icon si-borderless si-twitter\">
                                            <i class=\"icon-twitter\"></i>
                                            <i class=\"icon-twitter\"></i>
                                        </a>
                                        <a href=\"#\" class=\"social-icon si-borderless si-pinterest\">
                                            <i class=\"icon-pinterest\"></i>
                                            <i class=\"icon-pinterest\"></i>
                                        </a>
                                        <a href=\"#\" class=\"social-icon si-borderless si-gplus\">
                                            <i class=\"icon-gplus\"></i>
                                            <i class=\"icon-gplus\"></i>
                                        </a>
                                        <a href=\"#\" class=\"social-icon si-borderless si-rss\">
                                            <i class=\"icon-rss\"></i>
                                            <i class=\"icon-rss\"></i>
                                        </a>
                                        <a href=\"#\" class=\"social-icon si-borderless si-email3\">
                                            <i class=\"icon-email3\"></i>
                                            <i class=\"icon-email3\"></i>
                                        </a>
                                    </div>
                                </div><!-- Product Single - Share End -->

                            </div>

                            <div class=\"col_one_fifth col_last\">

                                <a href=\"#\" title=\"Brand Logo\" class=\"hidden-xs\"><img class=\"image_fade\" src=\"{{  asset('Template/images/icons/avatar.jpg')}}\"  alt=\"Brand Logo\" style=\"max-width: 84px;\"></a>

                                <div class=\"divider divider-center\"><i class=\"icon-circle-blank\"></i></div>

                                <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                    <div class=\"fbox-icon\">
                                        <i class=\"icon-thumbs-up2\"></i>
                                    </div>
                                    <h3>100% Original</h3>
                                    <p class=\"notopmargin\">We guarantee you the sale of Original Brands.</p>
                                </div>

                                <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                    <div class=\"fbox-icon\">
                                        <i class=\"icon-credit-cards\"></i>
                                    </div>
                                    <h3>Payment Options</h3>
                                    <p class=\"notopmargin\">We accept Visa, MasterCard and American Express.</p>
                                </div>

                                <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                    <div class=\"fbox-icon\">
                                        <i class=\"icon-truck2\"></i>
                                    </div>
                                    <h3>Free Shipping</h3>
                                    <p class=\"notopmargin\">Free Delivery to 100+ Locations on orders above \$40.</p>
                                </div>

                                <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                    <div class=\"fbox-icon\">
                                        <i class=\"icon-undo\"></i>
                                    </div>
                                    <h3>30-Days Returns</h3>
                                    <p class=\"notopmargin\">Return or exchange items purchased within 30 days.</p>
                                </div>

                            </div>

                            <div class=\"clear\"></div><div class=\"line\"></div>



                        </div>

                    </div>





            </div>

        </section><!-- #content end -->

    {% endblock %}", "StockBundle::produit.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/StockBundle/Resources/views/produit.html.twig");
    }
}
