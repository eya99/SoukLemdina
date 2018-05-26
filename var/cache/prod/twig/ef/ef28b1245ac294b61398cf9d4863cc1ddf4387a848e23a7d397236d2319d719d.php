<?php

/* @Stock/prods.html.twig */
class __TwigTemplate_53dc6f7fcdb87b31c60f04ad2fe1a0314e8993f402c2e3f38935b5c335a7ad03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da0811e0ce8e6c4493131416614d356fdf036655603580a52e02fb68e6d321bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0811e0ce8e6c4493131416614d356fdf036655603580a52e02fb68e6d321bb->enter($__internal_da0811e0ce8e6c4493131416614d356fdf036655603580a52e02fb68e6d321bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Stock/prods.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 2
            echo "    <div class=\"product sf-dress clearfix\">
        <div class=\"product-image\">

            <div class=\"thumbnail\">
                <img data-src=\"holder.js/300x200\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", array()), "html", null, true);
            echo "\"
                     style=\"height: 180px; width: 100%;display: block;\"
                     alt=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
            echo "\">
            </div>


            ";
            // line 12
            if (($this->getAttribute($context["produit"], "promotion", array()) != 0)) {
                // line 13
                echo "                <div class=\"sale-flash\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "promotion", array()), "html", null, true);
                echo "% Off*</div>
            ";
            }
            // line 15
            echo "            <div class=\"product-overlay\">
                ";
            // line 17
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modif_produits", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"
                   class=\"add-to-cart\"><i
                            class=\"icon-wrench\"></i><span> Modifier</span></a>
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supp_produits", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"
                   class=\"add-to-cart\" onclick=\"return confirm('Are you sure?')\"><i
                            class=\"icon-filter\"></i><span> supprimer</span></a>

            </div>
        </div>
        <div class=\"product-desc\">
            <div class=\"product-title\"><h3><a
                            href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_produit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
            echo "</a>
                </h3></div>
            ";
            // line 30
            if (($this->getAttribute($context["produit"], "promotion", array()) != 0)) {
                // line 31
                echo "                <div class=\"product-price\">
                    <del>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " DT ";
                if (($this->getAttribute($context["produit"], "type", array()) == "Sur Commande")) {
                    echo " / Kg  ";
                }
                echo "</del>
                    <ins>";
                // line 33
                echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) - (($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "promotion", array())) / 100)), "html", null, true);
                echo "
                        DT";
                // line 34
                if (($this->getAttribute($context["produit"], "type", array()) == "Sur Commande")) {
                    echo " / Kg ";
                }
                // line 35
                echo "                    </ins>
                </div>
            ";
            } else {
                // line 38
                echo "                <div class=\"product-price\">
                    ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " DT ";
                if (($this->getAttribute($context["produit"], "type", array()) == "Sur Commande")) {
                    echo "  / Kg ";
                }
                // line 40
                echo "                </div>
            ";
            }
            // line 42
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
        
        $__internal_da0811e0ce8e6c4493131416614d356fdf036655603580a52e02fb68e6d321bb->leave($__internal_da0811e0ce8e6c4493131416614d356fdf036655603580a52e02fb68e6d321bb_prof);

    }

    public function getTemplateName()
    {
        return "@Stock/prods.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 42,  116 => 40,  110 => 39,  107 => 38,  102 => 35,  98 => 34,  94 => 33,  86 => 32,  83 => 31,  81 => 30,  74 => 28,  63 => 20,  56 => 17,  53 => 15,  47 => 13,  45 => 12,  38 => 8,  32 => 6,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for produit in produits %}
    <div class=\"product sf-dress clearfix\">
        <div class=\"product-image\">

            <div class=\"thumbnail\">
                <img data-src=\"holder.js/300x200\" src=\"{{ asset('uploads/images/') }}{{ produit.image }}\"
                     style=\"height: 180px; width: 100%;display: block;\"
                     alt=\"{{ produit.libelle }}\">
            </div>


            {% if produit.promotion!=0 %}
                <div class=\"sale-flash\">{{ produit.promotion }}% Off*</div>
            {% endif %}
            <div class=\"product-overlay\">
                {#<!--  <a href=\"{{ path('supp_produits',{'id':produit.id}) }}\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Add to Cart</span></a> -->#}
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
                    <ins>{{ produit.prix-((produit.prix*produit.promotion)/100) }}
                        DT{% if produit.type=='Sur Commande' %} / Kg {% endif %}
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
{% endfor %}", "@Stock/prods.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/StockBundle/Resources/views/prods.html.twig");
    }
}
