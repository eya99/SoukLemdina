<?php

/* LocalBundle:Local:recherche.html.twig */
class __TwigTemplate_2c8bdc192e03c59f2f3274d5fcdc91d633146f0a40660cbc6cbfd04d8564ca63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "LocalBundle:Local:recherche.html.twig", 1);
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
        $__internal_e062dcfcbc387ed6496aae9f4db9da40613b493c7fbb4fe199b37265ca4a6c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e062dcfcbc387ed6496aae9f4db9da40613b493c7fbb4fe199b37265ca4a6c43->enter($__internal_e062dcfcbc387ed6496aae9f4db9da40613b493c7fbb4fe199b37265ca4a6c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e062dcfcbc387ed6496aae9f4db9da40613b493c7fbb4fe199b37265ca4a6c43->leave($__internal_e062dcfcbc387ed6496aae9f4db9da40613b493c7fbb4fe199b37265ca4a6c43_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b396222128ed59bbd46f285cdd52bae1f62b3b1b5ba33be8a6a3021209cb021f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b396222128ed59bbd46f285cdd52bae1f62b3b1b5ba33be8a6a3021209cb021f->enter($__internal_b396222128ed59bbd46f285cdd52bae1f62b3b1b5ba33be8a6a3021209cb021f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Local";
        
        $__internal_b396222128ed59bbd46f285cdd52bae1f62b3b1b5ba33be8a6a3021209cb021f->leave($__internal_b396222128ed59bbd46f285cdd52bae1f62b3b1b5ba33be8a6a3021209cb021f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16ef71c9a9e41209640e3eb04268961c27d29aab53e0c77cc9a27008fcb3b82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ef71c9a9e41209640e3eb04268961c27d29aab53e0c77cc9a27008fcb3b82d->enter($__internal_16ef71c9a9e41209640e3eb04268961c27d29aab53e0c77cc9a27008fcb3b82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_16ef71c9a9e41209640e3eb04268961c27d29aab53e0c77cc9a27008fcb3b82d->leave($__internal_16ef71c9a9e41209640e3eb04268961c27d29aab53e0c77cc9a27008fcb3b82d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8d04ae1483ecce6439631f7d36012aed5a8815bc2425f783967e20ab4bd5814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d04ae1483ecce6439631f7d36012aed5a8815bc2425f783967e20ab4bd5814->enter($__internal_e8d04ae1483ecce6439631f7d36012aed5a8815bc2425f783967e20ab4bd5814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Rechercher un local</h1>

        </div>

    </section>
    <section id=\"content\">
        <div class=\"content-wrap \" >
            <div class=\"container clearfix\" style=\"width:30%;\">
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"line line-sm\"></div>
                <div class=\"center\">
                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

                    <input type=\"submit\" value=\"Rechercher\" class=\"button button-3d button-black nomargin\">
                </div>


                <div id=\"shop\" class=\"shop grid-container clearfix\" data-layout=\"fitRows\" id=\"d\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 28
            echo "                        <div class=\"product clearfix\">
                            <div class=\"product-image\">
                                <a href=\"#\"><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["l"], "image", array()))), "html", null, true);
            echo "\" ></a>
                                <a href=\"#\"><img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["l"], "image", array()))), "html", null, true);
            echo "\" ></a>
                                <div class=\"product-overlay\">
                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_afficheDetail", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\" class=\"icon-book\"><i class=\"\"></i><span>Afficher détails</span></a>

                                </div>
                            </div>
                            <div class=\"product-desc\" >
                                <div class=\"product-title\"><h5><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_recherche");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "type", array()), "html", null, true);
            echo "</a></h5></div>
                                <div class=\"product-price\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "prix", array()), "html", null, true);
            echo "DT</div>
                                <div class=\"product-price\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "superficie", array()), "html", null, true);
            echo "m²</div>
                                <div class=\"product-price\">";
            // line 41
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
        // line 53
        echo "                </div>
                ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>

    </section>

";
        
        $__internal_e8d04ae1483ecce6439631f7d36012aed5a8815bc2425f783967e20ab4bd5814->leave($__internal_e8d04ae1483ecce6439631f7d36012aed5a8815bc2425f783967e20ab4bd5814_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f3790fb833417f7da0196ff2efea8a34fb1e450016189967cff735360c916f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3790fb833417f7da0196ff2efea8a34fb1e450016189967cff735360c916f8->enter($__internal_5f3790fb833417f7da0196ff2efea8a34fb1e450016189967cff735360c916f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "
";
        
        $__internal_5f3790fb833417f7da0196ff2efea8a34fb1e450016189967cff735360c916f8->leave($__internal_5f3790fb833417f7da0196ff2efea8a34fb1e450016189967cff735360c916f8_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Local:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 62,  170 => 61,  156 => 54,  153 => 53,  135 => 41,  131 => 40,  127 => 39,  121 => 38,  113 => 33,  108 => 31,  104 => 30,  100 => 28,  96 => 27,  86 => 20,  79 => 16,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
                {{ form_start(form) }}

                <div class=\"line line-sm\"></div>
                <div class=\"center\">
                    {{ form(form) }}

                    <input type=\"submit\" value=\"Rechercher\" class=\"button button-3d button-black nomargin\">
                </div>


                <div id=\"shop\" class=\"shop grid-container clearfix\" data-layout=\"fitRows\" id=\"d\">
                    {% for l in local %}
                        <div class=\"product clearfix\">
                            <div class=\"product-image\">
                                <a href=\"#\"><img src=\"{{ asset ('uploads/images/' ~ l.image)}}\" ></a>
                                <a href=\"#\"><img src=\"{{ asset ('uploads/images/' ~ l.image) }}\" ></a>
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
                {{ form_end(form) }}
            </div>
        </div>

    </section>

{% endblock %}
{% block javascripts %}

{% endblock %}
", "LocalBundle:Local:recherche.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Local/recherche.html.twig");
    }
}
