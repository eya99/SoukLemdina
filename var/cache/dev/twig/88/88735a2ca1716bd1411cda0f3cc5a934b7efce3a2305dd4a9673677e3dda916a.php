<?php

/* NomayaSocialBundle:Buttons:pinterestButton.html.twig */
class __TwigTemplate_f60eddd0b8778d1f24f629ed49057d1c8f67d7a525aaa65276af8022b6f25119 extends Twig_Template
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
        $__internal_5632973e19acbe41391636e04af2d06e1d2cd95b58f5091f8731002374b60dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5632973e19acbe41391636e04af2d06e1d2cd95b58f5091f8731002374b60dc6->enter($__internal_5632973e19acbe41391636e04af2d06e1d2cd95b58f5091f8731002374b60dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        $__internal_dcd6189ad51b67b7c6ff274f81855435327955d6e5799c0e659a81eff1ec3378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd6189ad51b67b7c6ff274f81855435327955d6e5799c0e659a81eff1ec3378->enter($__internal_dcd6189ad51b67b7c6ff274f81855435327955d6e5799c0e659a81eff1ec3378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5632973e19acbe41391636e04af2d06e1d2cd95b58f5091f8731002374b60dc6->leave($__internal_5632973e19acbe41391636e04af2d06e1d2cd95b58f5091f8731002374b60dc6_prof);

        
        $__internal_dcd6189ad51b67b7c6ff274f81855435327955d6e5799c0e659a81eff1ec3378->leave($__internal_dcd6189ad51b67b7c6ff274f81855435327955d6e5799c0e659a81eff1ec3378_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:pinterestButton.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
{% endspaceless %}", "NomayaSocialBundle:Buttons:pinterestButton.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/nomaya/social-bundle/Nomaya/SocialBundle/Resources/views/Buttons/pinterestButton.html.twig");
    }
}
