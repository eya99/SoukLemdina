<?php

/* StockBundle::newwishlist.html.twig */
class __TwigTemplate_18d685e6ebf1de74744d9779e661bfc684df7df9974209399051fdfb1277cd4f extends Twig_Template
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
        $__internal_758c290bcb0107167e5c85549e84467689099c4e6e361bd1f8488269de2b1e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758c290bcb0107167e5c85549e84467689099c4e6e361bd1f8488269de2b1e9d->enter($__internal_758c290bcb0107167e5c85549e84467689099c4e6e361bd1f8488269de2b1e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::newwishlist.html.twig"));

        $__internal_639dcba1dc96be49d82040db5d8e9a0c4fa9744f436475c406a61195c4e8b6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639dcba1dc96be49d82040db5d8e9a0c4fa9744f436475c406a61195c4e8b6fc->enter($__internal_639dcba1dc96be49d82040db5d8e9a0c4fa9744f436475c406a61195c4e8b6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::newwishlist.html.twig"));

        // line 1
        echo "<div class=\"col-md-4\">
    <div class=\"table-responsive clearfix\">

        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        <table class=\"table cart\">
            <thead>
            <tr>
                <th class=\"cart-product-remove\">&nbsp;</th>
                <th class=\"cart-product-thumbnail\">&nbsp;</th>
                <th class=\"cart-product-name\">Produit</th>
                <th class=\"cart-product-price\">Prix</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lwishlist"]) ? $context["lwishlist"] : $this->getContext($context, "lwishlist")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 18
            echo "


            <tr class=\"cart_item\">
                <td class=\"cart-product-remove\">
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_wishlist", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\" class=\"remove\" title=\"Supprimer ce produit\"><i class=\"icon-trash2\"></i></a>
                </td>

                <td class=\"cart-product-thumbnail\">
                    <a href=\"#\"><img width=\"64\" height=\"64\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "idProduit", array()), "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "idProduit", array()), "libelle", array()), "html", null, true);
            echo "\"></a>
                </td>

                <td class=\"cart-product-name\">
                    <a href=\"#\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "idProduit", array()), "libelle", array()), "html", null, true);
            echo "</a>
                </td>

                <td class=\"cart-product-price\">
                    <span class=\"amount\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "idProduit", array()), "prix", array()), "html", null, true);
            echo " DT </span>
                </td>


            </tr>

            </tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </table>

    </div>


</div>";
        
        $__internal_758c290bcb0107167e5c85549e84467689099c4e6e361bd1f8488269de2b1e9d->leave($__internal_758c290bcb0107167e5c85549e84467689099c4e6e361bd1f8488269de2b1e9d_prof);

        
        $__internal_639dcba1dc96be49d82040db5d8e9a0c4fa9744f436475c406a61195c4e8b6fc->leave($__internal_639dcba1dc96be49d82040db5d8e9a0c4fa9744f436475c406a61195c4e8b6fc_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle::newwishlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 43,  90 => 35,  83 => 31,  73 => 27,  66 => 23,  59 => 18,  55 => 17,  43 => 7,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-4\">
    <div class=\"table-responsive clearfix\">

        {% for flashMessage in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-danger\">{{ flashMessage }}</div>
        {% endfor %}
        <table class=\"table cart\">
            <thead>
            <tr>
                <th class=\"cart-product-remove\">&nbsp;</th>
                <th class=\"cart-product-thumbnail\">&nbsp;</th>
                <th class=\"cart-product-name\">Produit</th>
                <th class=\"cart-product-price\">Prix</th>
            </tr>
            </thead>
            <tbody>
            {% for l in lwishlist %}



            <tr class=\"cart_item\">
                <td class=\"cart-product-remove\">
                    <a href=\"{{ path('supprimer_wishlist',{'id':l.id}) }}\" class=\"remove\" title=\"Supprimer ce produit\"><i class=\"icon-trash2\"></i></a>
                </td>

                <td class=\"cart-product-thumbnail\">
                    <a href=\"#\"><img width=\"64\" height=\"64\" src=\"{{ asset('uploads/images/') }}{{ l.idProduit.image }}\" alt=\"{{ l.idProduit.libelle }}\"></a>
                </td>

                <td class=\"cart-product-name\">
                    <a href=\"#\">{{ l.idProduit.libelle }}</a>
                </td>

                <td class=\"cart-product-price\">
                    <span class=\"amount\">{{ l.idProduit.prix }} DT </span>
                </td>


            </tr>

            </tbody>
            {% endfor %}
        </table>

    </div>


</div>", "StockBundle::newwishlist.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/StockBundle/Resources/views/newwishlist.html.twig");
    }
}
