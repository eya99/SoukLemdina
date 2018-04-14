<?php

/* LocalBundle:Local:rechercheSuperficie.html.twig */
class __TwigTemplate_776d31b85bb8c3a306bddb8f4cb68bc38ef31c87de84f1601df9a646a4ebee31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "LocalBundle:Local:rechercheSuperficie.html.twig", 1);
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
        $__internal_5f57463ed1d00ef71c55e6b11d41a3216d0e82ce3429e837d73a8d6f4b0060e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f57463ed1d00ef71c55e6b11d41a3216d0e82ce3429e837d73a8d6f4b0060e8->enter($__internal_5f57463ed1d00ef71c55e6b11d41a3216d0e82ce3429e837d73a8d6f4b0060e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:rechercheSuperficie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f57463ed1d00ef71c55e6b11d41a3216d0e82ce3429e837d73a8d6f4b0060e8->leave($__internal_5f57463ed1d00ef71c55e6b11d41a3216d0e82ce3429e837d73a8d6f4b0060e8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6dbb4d7aef9db2261c598fe488dd687208f60c3dbfb75790ad75cd6fa6a2983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dbb4d7aef9db2261c598fe488dd687208f60c3dbfb75790ad75cd6fa6a2983->enter($__internal_b6dbb4d7aef9db2261c598fe488dd687208f60c3dbfb75790ad75cd6fa6a2983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Local";
        
        $__internal_b6dbb4d7aef9db2261c598fe488dd687208f60c3dbfb75790ad75cd6fa6a2983->leave($__internal_b6dbb4d7aef9db2261c598fe488dd687208f60c3dbfb75790ad75cd6fa6a2983_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24b4edf8d8d4606c8915edfe31e14a859d8922b1cc8dd5c8796b0c7bcdcfef71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b4edf8d8d4606c8915edfe31e14a859d8922b1cc8dd5c8796b0c7bcdcfef71->enter($__internal_24b4edf8d8d4606c8915edfe31e14a859d8922b1cc8dd5c8796b0c7bcdcfef71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_24b4edf8d8d4606c8915edfe31e14a859d8922b1cc8dd5c8796b0c7bcdcfef71->leave($__internal_24b4edf8d8d4606c8915edfe31e14a859d8922b1cc8dd5c8796b0c7bcdcfef71_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_43d0cf124d0f6cef968071ce7a96d86e61a7454d934b0905c6e7da8ef2d6b604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d0cf124d0f6cef968071ce7a96d86e61a7454d934b0905c6e7da8ef2d6b604->enter($__internal_43d0cf124d0f6cef968071ce7a96d86e61a7454d934b0905c6e7da8ef2d6b604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Rechercher un local</h1>

        </div>

    </section>
    <section id=\"content\">
        <div class=\"content-wrap \" >
            <div class=\"container clearfix\" style=\"width:30%;\">


                <div class=\"line line-sm\"></div>
                <div class=\"center\">


                </div>


                <div id=\"shop\" class=\"shop grid-container clearfix\" data-layout=\"fitRows\" id=\"d\">
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
            echo "\" style=\"height: 100px; width: 200px\"></a>
                                <a href=\"#\"><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["l"], "image", array()))), "html", null, true);
            echo "\" style=\"height: 100px; width: 200px\"></a>
                                <div class=\"product-overlay\">
                                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_afficheDetail", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\" class=\"icon-book\"><i class=\"\"></i><span>Afficher détails</span></a>

                                </div>
                            </div>
                            <div class=\"product-desc\" >
                                <div class=\"product-title\"><h5><a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_recherche");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "type", array()), "html", null, true);
            echo "</a></h5></div>
                                <div class=\"product-price\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "prix", array()), "html", null, true);
            echo "DT</div>
                                <div class=\"product-price\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "superficie", array()), "html", null, true);
            echo "m²</div>
                                <div class=\"product-price\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "adresse", array()), "html", null, true);
            echo "</div>
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
        // line 52
        echo "                </div>

            </div>
        </div>

    </section>

";
        
        $__internal_43d0cf124d0f6cef968071ce7a96d86e61a7454d934b0905c6e7da8ef2d6b604->leave($__internal_43d0cf124d0f6cef968071ce7a96d86e61a7454d934b0905c6e7da8ef2d6b604_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_904507221ce2bf83511d1bccb750cef5c4caa38ca4f2394a12ac25665fa5b364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904507221ce2bf83511d1bccb750cef5c4caa38ca4f2394a12ac25665fa5b364->enter($__internal_904507221ce2bf83511d1bccb750cef5c4caa38ca4f2394a12ac25665fa5b364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "
";
        
        $__internal_904507221ce2bf83511d1bccb750cef5c4caa38ca4f2394a12ac25665fa5b364->leave($__internal_904507221ce2bf83511d1bccb750cef5c4caa38ca4f2394a12ac25665fa5b364_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Local:rechercheSuperficie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 61,  160 => 60,  146 => 52,  128 => 40,  124 => 39,  120 => 38,  114 => 37,  106 => 32,  101 => 30,  97 => 29,  93 => 27,  89 => 26,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
            <h1>Rechercher un local</h1>

        </div>

    </section>
    <section id=\"content\">
        <div class=\"content-wrap \" >
            <div class=\"container clearfix\" style=\"width:30%;\">


                <div class=\"line line-sm\"></div>
                <div class=\"center\">


                </div>


                <div id=\"shop\" class=\"shop grid-container clearfix\" data-layout=\"fitRows\" id=\"d\">
                    {% for l in local %}
                        <div class=\"product clearfix\">
                            <div class=\"product-image\">
                                <a href=\"#\"><img src=\"{{ asset ('uploads/images/' ~ l.image)}}\" style=\"height: 100px; width: 200px\"></a>
                                <a href=\"#\"><img src=\"{{ asset ('uploads/images/' ~ l.image) }}\" style=\"height: 100px; width: 200px\"></a>
                                <div class=\"product-overlay\">
                                    <a href=\"{{ path('_afficheDetail', {'id':l.id}) }}\" class=\"icon-book\"><i class=\"\"></i><span>Afficher détails</span></a>

                                </div>
                            </div>
                            <div class=\"product-desc\" >
                                <div class=\"product-title\"><h5><a href=\"{{ path('_recherche') }}\">{{ l.type }}</a></h5></div>
                                <div class=\"product-price\">{{ l.prix }}DT</div>
                                <div class=\"product-price\">{{ l.superficie }}m²</div>
                                <div class=\"product-price\">{{ l.adresse}}</div>
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

            </div>
        </div>

    </section>

{% endblock %}
{% block javascripts %}

{% endblock %}", "LocalBundle:Local:rechercheSuperficie.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Local/rechercheSuperficie.html.twig");
    }
}
