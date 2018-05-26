<?php

/* LocalBundle:Local:recherchePrix.html.twig */
class __TwigTemplate_1538a4fa9111e771d383363ede8e2f461e4570f5b1a7645dde872e57f6e7f4ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "LocalBundle:Local:recherchePrix.html.twig", 1);
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
        $__internal_a0d11c6de730fb9cde95eba30606cdcecff341ea0f974dd7779e4c3c6a775477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d11c6de730fb9cde95eba30606cdcecff341ea0f974dd7779e4c3c6a775477->enter($__internal_a0d11c6de730fb9cde95eba30606cdcecff341ea0f974dd7779e4c3c6a775477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:recherchePrix.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d11c6de730fb9cde95eba30606cdcecff341ea0f974dd7779e4c3c6a775477->leave($__internal_a0d11c6de730fb9cde95eba30606cdcecff341ea0f974dd7779e4c3c6a775477_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c67a770f67cf58d7a994c4b2f58b9e831545cb6dd805dc7b82babee85529eec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67a770f67cf58d7a994c4b2f58b9e831545cb6dd805dc7b82babee85529eec3->enter($__internal_c67a770f67cf58d7a994c4b2f58b9e831545cb6dd805dc7b82babee85529eec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Local";
        
        $__internal_c67a770f67cf58d7a994c4b2f58b9e831545cb6dd805dc7b82babee85529eec3->leave($__internal_c67a770f67cf58d7a994c4b2f58b9e831545cb6dd805dc7b82babee85529eec3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88fc9c93aedf767de30edfc2259e51304d1f13e40d8f5f00ea55e79b1fa96038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fc9c93aedf767de30edfc2259e51304d1f13e40d8f5f00ea55e79b1fa96038->enter($__internal_88fc9c93aedf767de30edfc2259e51304d1f13e40d8f5f00ea55e79b1fa96038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_88fc9c93aedf767de30edfc2259e51304d1f13e40d8f5f00ea55e79b1fa96038->leave($__internal_88fc9c93aedf767de30edfc2259e51304d1f13e40d8f5f00ea55e79b1fa96038_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ba284bf7c75dcf970a5f94a5da5d3688f739e1ed55db8f934dffae65849ede1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba284bf7c75dcf970a5f94a5da5d3688f739e1ed55db8f934dffae65849ede1->enter($__internal_8ba284bf7c75dcf970a5f94a5da5d3688f739e1ed55db8f934dffae65849ede1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\"style=\"height: 100px; width: 200px\" ></a>
                                <a href=\"#\"><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["l"], "image", array()))), "html", null, true);
            echo "\"style=\"height: 100px; width: 200px\" ></a>
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
        
        $__internal_8ba284bf7c75dcf970a5f94a5da5d3688f739e1ed55db8f934dffae65849ede1->leave($__internal_8ba284bf7c75dcf970a5f94a5da5d3688f739e1ed55db8f934dffae65849ede1_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94e0db4517fe62ff7dbd89e64fc3cfd1ac3586326f723630185c38638ad4c9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e0db4517fe62ff7dbd89e64fc3cfd1ac3586326f723630185c38638ad4c9a8->enter($__internal_94e0db4517fe62ff7dbd89e64fc3cfd1ac3586326f723630185c38638ad4c9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "
";
        
        $__internal_94e0db4517fe62ff7dbd89e64fc3cfd1ac3586326f723630185c38638ad4c9a8->leave($__internal_94e0db4517fe62ff7dbd89e64fc3cfd1ac3586326f723630185c38638ad4c9a8_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Local:recherchePrix.html.twig";
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
                                <a href=\"#\"><img src=\"{{ asset ('uploads/images/' ~ l.image)}}\"style=\"height: 100px; width: 200px\" ></a>
                                <a href=\"#\"><img src=\"{{ asset ('uploads/images/' ~ l.image) }}\"style=\"height: 100px; width: 200px\" ></a>
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

{% endblock %}
", "LocalBundle:Local:recherchePrix.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Local/recherchePrix.html.twig");
    }
}
