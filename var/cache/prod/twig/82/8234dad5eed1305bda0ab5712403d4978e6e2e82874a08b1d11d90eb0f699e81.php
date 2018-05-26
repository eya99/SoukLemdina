<?php

/* StockBundle::wishlist.html.twig */
class __TwigTemplate_c21ac73074a25147c1534a040273f0d3076caf417df8d64aea5cc46a68792522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "StockBundle::wishlist.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddbd6c759e6797544ce596e144a612ff6cd0b19f228713d9a0791f5b0252336c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbd6c759e6797544ce596e144a612ff6cd0b19f228713d9a0791f5b0252336c->enter($__internal_ddbd6c759e6797544ce596e144a612ff6cd0b19f228713d9a0791f5b0252336c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::wishlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddbd6c759e6797544ce596e144a612ff6cd0b19f228713d9a0791f5b0252336c->leave($__internal_ddbd6c759e6797544ce596e144a612ff6cd0b19f228713d9a0791f5b0252336c_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ffe8bfeb85a68d7948d1e9e520c1015f44b975aa0dd7f06ddbbe27cf31686b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffe8bfeb85a68d7948d1e9e520c1015f44b975aa0dd7f06ddbbe27cf31686b1->enter($__internal_4ffe8bfeb85a68d7948d1e9e520c1015f44b975aa0dd7f06ddbbe27cf31686b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<title>Wishlist</title>";
        
        $__internal_4ffe8bfeb85a68d7948d1e9e520c1015f44b975aa0dd7f06ddbbe27cf31686b1->leave($__internal_4ffe8bfeb85a68d7948d1e9e520c1015f44b975aa0dd7f06ddbbe27cf31686b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fcdc350f09f8ea528f9b011d1a6ba53e891c56d182822ebe900025ec5fcb57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcdc350f09f8ea528f9b011d1a6ba53e891c56d182822ebe900025ec5fcb57f->enter($__internal_4fcdc350f09f8ea528f9b011d1a6ba53e891c56d182822ebe900025ec5fcb57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <section id=\"page-title\">

            <div class=\"container clearfix\">
                <h1>Wishlist</h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Shop</a></li>
                    <li class=\"active\">Wishlist</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <section id=\"content\">

            <div class=\"content-wrap\">

                <div class=\"container clearfix\">
                    <div class=\"col-md-12\">
                        <div class=\"table-responsive clearfix\">
                    <div class=\"table-responsive bottommargin\">
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                        <table class=\"table cart\">
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lwishlist"]) ? $context["lwishlist"] : $this->getContext($context, "lwishlist")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 40
            echo "


        <tr class=\"cart_item\">
                                <td class=\"cart-product-remove\">
                                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_wishlist", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\" class=\"remove\" title=\"Supprimer ce produit\"><i class=\"icon-trash2\"></i></a>
                                </td>

                                <td class=\"cart-product-thumbnail\">
                                    <a href=\"#\"><img width=\"64\" height=\"64\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "idProduit", array()), "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "idProduit", array()), "libelle", array()), "html", null, true);
            echo "\"></a>
                                </td>

                                <td class=\"cart-product-name\">
                                    <a href=\"#\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "idProduit", array()), "libelle", array()), "html", null, true);
            echo "</a>
                                </td>

                                <td class=\"cart-product-price\">
                                    <span class=\"amount\">";
            // line 57
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
        // line 65
        echo "                  </table>

              </div>





              </div>

          </div>

      </div>

  </section><!-- #content end -->


";
        
        $__internal_4fcdc350f09f8ea528f9b011d1a6ba53e891c56d182822ebe900025ec5fcb57f->leave($__internal_4fcdc350f09f8ea528f9b011d1a6ba53e891c56d182822ebe900025ec5fcb57f_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle::wishlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 65,  137 => 57,  130 => 53,  120 => 49,  113 => 45,  106 => 40,  102 => 39,  90 => 29,  81 => 27,  77 => 26,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
 {% block head %}<title>Wishlist</title>{% endblock %}
    {% block body %}

        <section id=\"page-title\">

            <div class=\"container clearfix\">
                <h1>Wishlist</h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Shop</a></li>
                    <li class=\"active\">Wishlist</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <section id=\"content\">

            <div class=\"content-wrap\">

                <div class=\"container clearfix\">
                    <div class=\"col-md-12\">
                        <div class=\"table-responsive clearfix\">
                    <div class=\"table-responsive bottommargin\">
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





              </div>

          </div>

      </div>

  </section><!-- #content end -->


{% endblock %}", "StockBundle::wishlist.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/StockBundle/Resources/views/wishlist.html.twig");
    }
}
