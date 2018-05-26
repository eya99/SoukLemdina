<?php

/* LocalBundle:Local:affiche.html.twig */
class __TwigTemplate_2042b5d9a8d810cfea398542c9455efb3e6960a4e6c1e5f8641dce54b322a906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "LocalBundle:Local:affiche.html.twig", 1);
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
        $__internal_7a4531507d480efe39d209e7bf1756895313324fc2090f207ffa27a28f8ca526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4531507d480efe39d209e7bf1756895313324fc2090f207ffa27a28f8ca526->enter($__internal_7a4531507d480efe39d209e7bf1756895313324fc2090f207ffa27a28f8ca526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a4531507d480efe39d209e7bf1756895313324fc2090f207ffa27a28f8ca526->leave($__internal_7a4531507d480efe39d209e7bf1756895313324fc2090f207ffa27a28f8ca526_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a342cf36864e935c7e7c7e1857f6c2a27d88d8a4beec4de4c86ccc7db80a1d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a342cf36864e935c7e7c7e1857f6c2a27d88d8a4beec4de4c86ccc7db80a1d7a->enter($__internal_a342cf36864e935c7e7c7e1857f6c2a27d88d8a4beec4de4c86ccc7db80a1d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "
  ";
        
        $__internal_a342cf36864e935c7e7c7e1857f6c2a27d88d8a4beec4de4c86ccc7db80a1d7a->leave($__internal_a342cf36864e935c7e7c7e1857f6c2a27d88d8a4beec4de4c86ccc7db80a1d7a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddf34f7cdb31047d26e11e5c395ce0aa4bbd74b5ba16335e3cba497a583ef20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf34f7cdb31047d26e11e5c395ce0aa4bbd74b5ba16335e3cba497a583ef20e->enter($__internal_ddf34f7cdb31047d26e11e5c395ce0aa4bbd74b5ba16335e3cba497a583ef20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ddf34f7cdb31047d26e11e5c395ce0aa4bbd74b5ba16335e3cba497a583ef20e->leave($__internal_ddf34f7cdb31047d26e11e5c395ce0aa4bbd74b5ba16335e3cba497a583ef20e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eb961066e416ed22bf37fd5f293422d3ad3448d57bf689e688cfb149de6baf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb961066e416ed22bf37fd5f293422d3ad3448d57bf689e688cfb149de6baf6->enter($__internal_8eb961066e416ed22bf37fd5f293422d3ad3448d57bf689e688cfb149de6baf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<section id=\"page-title\">

    <div class=\"container clearfix\">
        <h1>El Souk</h1>
        <span>Vous facilite la vie</span>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_recherche");
        echo "\">Rechercher locaux</a></li>
            <li> <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_recherchePrix");
        echo "\">Rechercher par prix</a></li>
            <li> <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_rechercheSuperficie");
        echo "\">Rechercher par superficie</a></li>
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 30
            echo "                <div class=\"product clearfix\">
                    <div class=\"product-image\">
                        <a href=\"#\"><img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["l"], "image", array()))), "html", null, true);
            echo "\" style=\"height: 250px;\"/></a>

                        ";
            // line 34
            if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) != null)) {
                // line 35
                echo "                        <div class=\"product-overlay\">
                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_afficheDetail", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
                echo "\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Afficher détails</span></a>

                        </div>
                        ";
            }
            // line 40
            echo "                        ";
            if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
                // line 41
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 42
                    echo "
                            <div class=\"alert alert-success\">
                                ";
                    // line 44
                    echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                    echo "
                            </div>

                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                        ";
            }
            // line 49
            echo "                    </div>
                    <div class=\"product-desc\">
                        <div class=\"product-title\"><h3><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_affiche", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "type", array()), "html", null, true);
            echo "</a></h3></div>
                        <div class=\"product-price\"></div>
                        <div class=\"product-price\"></div>
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
        // line 64
        echo "            </div>
        </div></div></section>


";
        
        $__internal_8eb961066e416ed22bf37fd5f293422d3ad3448d57bf689e688cfb149de6baf6->leave($__internal_8eb961066e416ed22bf37fd5f293422d3ad3448d57bf689e688cfb149de6baf6_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8a349dc803faba5fef3a7a2ab9a7c92d3936cbd1a28bd0350d772cbaca3f318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a349dc803faba5fef3a7a2ab9a7c92d3936cbd1a28bd0350d772cbaca3f318->enter($__internal_a8a349dc803faba5fef3a7a2ab9a7c92d3936cbd1a28bd0350d772cbaca3f318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a8a349dc803faba5fef3a7a2ab9a7c92d3936cbd1a28bd0350d772cbaca3f318->leave($__internal_a8a349dc803faba5fef3a7a2ab9a7c92d3936cbd1a28bd0350d772cbaca3f318_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Local:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 69,  176 => 64,  155 => 51,  151 => 49,  148 => 48,  138 => 44,  134 => 42,  129 => 41,  126 => 40,  119 => 36,  116 => 35,  114 => 34,  109 => 32,  105 => 30,  101 => 29,  84 => 15,  80 => 14,  76 => 13,  68 => 7,  62 => 6,  51 => 5,  43 => 3,  37 => 2,  11 => 1,);
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
  {% block title %}

  {% endblock %}
    {% block stylesheets %}{% endblock %}
{% block body %}
<section id=\"page-title\">

    <div class=\"container clearfix\">
        <h1>El Souk</h1>
        <span>Vous facilite la vie</span>
        <ol class=\"breadcrumb\">
            <li><a href=\"{{ path('_recherche') }}\">Rechercher locaux</a></li>
            <li> <a href=\"{{ path('_recherchePrix') }}\">Rechercher par prix</a></li>
            <li> <a href=\"{{ path('_rechercheSuperficie') }}\">Rechercher par superficie</a></li>
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
                        <a href=\"#\"><img src=\"{{ asset ('uploads/images/' ~ l.image) }}\" style=\"height: 250px;\"/></a>

                        {% if user!=null %}
                        <div class=\"product-overlay\">
                            <a href=\"{{ path('_afficheDetail', {'id':l.id}) }}\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Afficher détails</span></a>

                        </div>
                        {% endif %}
                        {% if user==null %}
                        {% for flashMessage in app.session.flashbag.get('notice') %}

                            <div class=\"alert alert-success\">
                                {{ flashMessage }}
                            </div>

                        {% endfor %}
                        {% endif %}
                    </div>
                    <div class=\"product-desc\">
                        <div class=\"product-title\"><h3><a href=\"{{ path('_affiche',{'id':l.id}) }}\">{{ l.type }}</a></h3></div>
                        <div class=\"product-price\"></div>
                        <div class=\"product-price\"></div>
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


", "LocalBundle:Local:affiche.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Local/affiche.html.twig");
    }
}
