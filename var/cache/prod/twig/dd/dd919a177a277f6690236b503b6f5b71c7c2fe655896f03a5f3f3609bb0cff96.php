<?php

/* LocalBundle:Local:afficheUser.html.twig */
class __TwigTemplate_90d0b5f68c1a73e3b8fa95e8f0063d520f1bf7cfa5e0fe32525fc2c183c3c6f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "LocalBundle:Local:afficheUser.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_727b0bb7db616f4cf6b2e64f793b53d4ddf826118e3e61966783b5c76a715d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727b0bb7db616f4cf6b2e64f793b53d4ddf826118e3e61966783b5c76a715d7b->enter($__internal_727b0bb7db616f4cf6b2e64f793b53d4ddf826118e3e61966783b5c76a715d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:afficheUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_727b0bb7db616f4cf6b2e64f793b53d4ddf826118e3e61966783b5c76a715d7b->leave($__internal_727b0bb7db616f4cf6b2e64f793b53d4ddf826118e3e61966783b5c76a715d7b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_306804e57dace318f169457802cd6b0c4b93ec653a9f29ba190532c93c935b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306804e57dace318f169457802cd6b0c4b93ec653a9f29ba190532c93c935b40->enter($__internal_306804e57dace318f169457802cd6b0c4b93ec653a9f29ba190532c93c935b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Local";
        
        $__internal_306804e57dace318f169457802cd6b0c4b93ec653a9f29ba190532c93c935b40->leave($__internal_306804e57dace318f169457802cd6b0c4b93ec653a9f29ba190532c93c935b40_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bfc1f8d3a9eba9cea1ac5c41247592497ba7ded995945f75f7b44c9dcb4e63a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc1f8d3a9eba9cea1ac5c41247592497ba7ded995945f75f7b44c9dcb4e63a4->enter($__internal_bfc1f8d3a9eba9cea1ac5c41247592497ba7ded995945f75f7b44c9dcb4e63a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bfc1f8d3a9eba9cea1ac5c41247592497ba7ded995945f75f7b44c9dcb4e63a4->leave($__internal_bfc1f8d3a9eba9cea1ac5c41247592497ba7ded995945f75f7b44c9dcb4e63a4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b75829f913b19d4b63285f70a509d4c3e658ab7a9d230a619e47c3e148cb4c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75829f913b19d4b63285f70a509d4c3e658ab7a9d230a619e47c3e148cb4c48->enter($__internal_b75829f913b19d4b63285f70a509d4c3e658ab7a9d230a619e47c3e148cb4c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Mes locaux</h1>
            <span></span>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_ajout");
        echo "\">Ajouter un espace</a></li>

            </ol>
        </div>

    </section>
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"container clearfix\">

                <!-- Shop
                ============================================= -->
                <div id=\"shop\" class=\"shop grid-container clearfix\" data-layout=\"fitRows\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 27
            echo "                        <div class=\"product clearfix\">
                            <div class=\"product-image\">
                                <a href=\"#\"><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["l"], "image", array()))), "html", null, true);
            echo "\"  style=\"height: 250px;\"></a>

                                <div class=\"product-overlay\">
                                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_supprime", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Supprimer</span></a>
                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_modifie", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Modifier</span></a>
                                </div>
                            </div>
                            <div class=\"product-desc\">
                                <div class=\"product-title\"><h3><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_affiche", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "type", array()), "html", null, true);
            echo "</a></h3></div>
                                <div class=\"product-price\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "prix", array()), "html", null, true);
            echo "DT</div>
                                <div class=\"product-price\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "superficie", array()), "html", null, true);
            echo "m²</div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </div>
            </div></div></section>

";
        
        $__internal_b75829f913b19d4b63285f70a509d4c3e658ab7a9d230a619e47c3e148cb4c48->leave($__internal_b75829f913b19d4b63285f70a509d4c3e658ab7a9d230a619e47c3e148cb4c48_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db7ef7e6c70168b21f339cdf0a5831ac9e15afa869de96249da7466a24d8038c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7ef7e6c70168b21f339cdf0a5831ac9e15afa869de96249da7466a24d8038c->enter($__internal_db7ef7e6c70168b21f339cdf0a5831ac9e15afa869de96249da7466a24d8038c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_db7ef7e6c70168b21f339cdf0a5831ac9e15afa869de96249da7466a24d8038c->leave($__internal_db7ef7e6c70168b21f339cdf0a5831ac9e15afa869de96249da7466a24d8038c_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Local:afficheUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 54,  144 => 50,  127 => 39,  123 => 38,  117 => 37,  110 => 33,  106 => 32,  100 => 29,  96 => 27,  92 => 26,  74 => 11,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
  {% block title %}Local{% endblock %}
    {% block stylesheets %}{% endblock %}
{% block body %}
    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Mes locaux</h1>
            <span></span>
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('_ajout') }}\">Ajouter un espace</a></li>

            </ol>
        </div>

    </section>
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"container clearfix\">

                <!-- Shop
                ============================================= -->
                <div id=\"shop\" class=\"shop grid-container clearfix\" data-layout=\"fitRows\">
                    {% for l in local %}
                        <div class=\"product clearfix\">
                            <div class=\"product-image\">
                                <a href=\"#\"><img src=\"{{ asset ('uploads/images/' ~ l.image)}}\"  style=\"height: 250px;\"></a>

                                <div class=\"product-overlay\">
                                    <a href=\"{{ path('_supprime', {'id':l.id}) }}\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Supprimer</span></a>
                                    <a href=\"{{ path('_modifie', {'id':l.id}) }}\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Modifier</span></a>
                                </div>
                            </div>
                            <div class=\"product-desc\">
                                <div class=\"product-title\"><h3><a href=\"{{ path('_affiche',{'id':l.id}) }}\">{{ l.type }}</a></h3></div>
                                <div class=\"product-price\">{{ l.prix }}DT</div>
                                <div class=\"product-price\">{{ l.superficie }}m²</div>
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
            </div></div></section>

{% endblock %}
{% block javascripts %}{% endblock %}

", "LocalBundle:Local:afficheUser.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Local/afficheUser.html.twig");
    }
}
