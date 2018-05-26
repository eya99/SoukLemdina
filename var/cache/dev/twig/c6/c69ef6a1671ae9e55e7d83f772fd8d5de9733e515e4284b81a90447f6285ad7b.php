<?php

/* StockBundle::wishlist.html.twig */
class __TwigTemplate_8b578e0af794d813e25fec30db0300a251169d4936ff08f7a72a42a1168df7b4 extends Twig_Template
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
        $__internal_39a368e8745a4caf35673868368a30aeb31467a915dea7c6642df6a1dfe230c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a368e8745a4caf35673868368a30aeb31467a915dea7c6642df6a1dfe230c1->enter($__internal_39a368e8745a4caf35673868368a30aeb31467a915dea7c6642df6a1dfe230c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::wishlist.html.twig"));

        $__internal_23abc0aa16fcfed6714771cb4c11f9fc25257b05db276d70f983040edff9217b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23abc0aa16fcfed6714771cb4c11f9fc25257b05db276d70f983040edff9217b->enter($__internal_23abc0aa16fcfed6714771cb4c11f9fc25257b05db276d70f983040edff9217b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::wishlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39a368e8745a4caf35673868368a30aeb31467a915dea7c6642df6a1dfe230c1->leave($__internal_39a368e8745a4caf35673868368a30aeb31467a915dea7c6642df6a1dfe230c1_prof);

        
        $__internal_23abc0aa16fcfed6714771cb4c11f9fc25257b05db276d70f983040edff9217b->leave($__internal_23abc0aa16fcfed6714771cb4c11f9fc25257b05db276d70f983040edff9217b_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_df0087661c9907d2d8abaefc79d4aeb8fa8f627ce53be2af45e1261b01938e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0087661c9907d2d8abaefc79d4aeb8fa8f627ce53be2af45e1261b01938e40->enter($__internal_df0087661c9907d2d8abaefc79d4aeb8fa8f627ce53be2af45e1261b01938e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99f511aedd3205bcd27bf6835bda148b0750918bd203dcea2e19ffe1fbada13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f511aedd3205bcd27bf6835bda148b0750918bd203dcea2e19ffe1fbada13d->enter($__internal_99f511aedd3205bcd27bf6835bda148b0750918bd203dcea2e19ffe1fbada13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<title>Wishlist</title>";
        
        $__internal_99f511aedd3205bcd27bf6835bda148b0750918bd203dcea2e19ffe1fbada13d->leave($__internal_99f511aedd3205bcd27bf6835bda148b0750918bd203dcea2e19ffe1fbada13d_prof);

        
        $__internal_df0087661c9907d2d8abaefc79d4aeb8fa8f627ce53be2af45e1261b01938e40->leave($__internal_df0087661c9907d2d8abaefc79d4aeb8fa8f627ce53be2af45e1261b01938e40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee563c67ea6c35416e3131fcd036488e7c172762be3b90e55232f15679db2c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee563c67ea6c35416e3131fcd036488e7c172762be3b90e55232f15679db2c83->enter($__internal_ee563c67ea6c35416e3131fcd036488e7c172762be3b90e55232f15679db2c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3ee5f8a440d0ce17b65134ba5d94ea3a26fb518d35c79d85c718ba0ebbf961d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ee5f8a440d0ce17b65134ba5d94ea3a26fb518d35c79d85c718ba0ebbf961d->enter($__internal_b3ee5f8a440d0ce17b65134ba5d94ea3a26fb518d35c79d85c718ba0ebbf961d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3ee5f8a440d0ce17b65134ba5d94ea3a26fb518d35c79d85c718ba0ebbf961d->leave($__internal_b3ee5f8a440d0ce17b65134ba5d94ea3a26fb518d35c79d85c718ba0ebbf961d_prof);

        
        $__internal_ee563c67ea6c35416e3131fcd036488e7c172762be3b90e55232f15679db2c83->leave($__internal_ee563c67ea6c35416e3131fcd036488e7c172762be3b90e55232f15679db2c83_prof);

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
        return array (  166 => 65,  152 => 57,  145 => 53,  135 => 49,  128 => 45,  121 => 40,  117 => 39,  105 => 29,  96 => 27,  92 => 26,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
