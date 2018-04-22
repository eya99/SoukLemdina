<?php

/* LocalBundle:Local:affTab.html.twig */
class __TwigTemplate_1b9122742b8389fdd96e2566a384d235d0bb83453091d8be4e627636095bf952 extends Twig_Template
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
        $__internal_2fdbd76e1cff9b8fa7cbf55aaf7e41bc596bca91a6a4a2270f6ec79d0db9642a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdbd76e1cff9b8fa7cbf55aaf7e41bc596bca91a6a4a2270f6ec79d0db9642a->enter($__internal_2fdbd76e1cff9b8fa7cbf55aaf7e41bc596bca91a6a4a2270f6ec79d0db9642a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:affTab.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 2
            echo "    <div class=\"product clearfix\">
        <div class=\"product-image\">
            <a href=\"#\"><img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["l"], "image", array()))), "html", null, true);
            echo "\"  style=\"height: 250px;\"></a>

            <div class=\"product-overlay\">
                <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_supprime", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Supprimer</span></a>
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_modifie", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Modifier</span></a>
            </div>
        </div>
        <div class=\"product-desc\">
            <div class=\"product-title\"><h3><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_affiche", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "type", array()), "html", null, true);
            echo "</a></h3></div>
            <div class=\"product-price\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "prix", array()), "html", null, true);
            echo "DT</div>
            <div class=\"product-price\">";
            // line 14
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
        
        $__internal_2fdbd76e1cff9b8fa7cbf55aaf7e41bc596bca91a6a4a2270f6ec79d0db9642a->leave($__internal_2fdbd76e1cff9b8fa7cbf55aaf7e41bc596bca91a6a4a2270f6ec79d0db9642a_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Local:affTab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  53 => 13,  47 => 12,  40 => 8,  36 => 7,  30 => 4,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for l in local %}
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
{% endfor %}", "LocalBundle:Local:affTab.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Local/affTab.html.twig");
    }
}
