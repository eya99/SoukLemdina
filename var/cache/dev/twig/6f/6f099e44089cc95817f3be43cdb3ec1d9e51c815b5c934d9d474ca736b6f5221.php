<?php

/* NomayaSocialBundle:Links:socialLink.html.twig */
class __TwigTemplate_61aac895ec8df95e87b169e9340fa73b580b4ba529a5f9b90b94ae27cba37943 extends Twig_Template
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
        $__internal_5a6205b276aa46950e6650c8cc09d0521ece20a4c985c6eb000fe13e61b1839b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6205b276aa46950e6650c8cc09d0521ece20a4c985c6eb000fe13e61b1839b->enter($__internal_5a6205b276aa46950e6650c8cc09d0521ece20a4c985c6eb000fe13e61b1839b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Links:socialLink.html.twig"));

        $__internal_31bb8a801335f232fceaa016a950565a0f42c2ac88b4ea7fa21b09e5acc1e360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bb8a801335f232fceaa016a950565a0f42c2ac88b4ea7fa21b09e5acc1e360->enter($__internal_31bb8a801335f232fceaa016a950565a0f42c2ac88b4ea7fa21b09e5acc1e360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Links:socialLink.html.twig"));

        // line 1
        $context["img_src"] = (((("bundles/nomayasocial/images/" . (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme"))) . "/") . (isset($context["network"]) ? $context["network"] : $this->getContext($context, "network"))) . ".png");
        // line 2
        ob_start();
        // line 3
        echo " <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["network"]) ? $context["network"] : $this->getContext($context, "network")), "html", null, true);
        echo "-link col-xs-5\">
 \t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["img_src"]) ? $context["img_src"] : $this->getContext($context, "img_src"))), "html", null, true);
        echo "\" alt =\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" /></a>
 </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5a6205b276aa46950e6650c8cc09d0521ece20a4c985c6eb000fe13e61b1839b->leave($__internal_5a6205b276aa46950e6650c8cc09d0521ece20a4c985c6eb000fe13e61b1839b_prof);

        
        $__internal_31bb8a801335f232fceaa016a950565a0f42c2ac88b4ea7fa21b09e5acc1e360->leave($__internal_31bb8a801335f232fceaa016a950565a0f42c2ac88b4ea7fa21b09e5acc1e360_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Links:socialLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set img_src = 'bundles/nomayasocial/images/' ~ theme ~ '/' ~ network ~ '.png' %}
{% spaceless %}
 <div class=\"{{ network }}-link col-xs-5\">
 \t<a href=\"{{ url }}\" target=\"_blank\" title=\"{{ url }}\"> <img src=\"{{ asset( img_src ) }}\" alt =\"{{ url }}\" /></a>
 </div>
{% endspaceless %}", "NomayaSocialBundle:Links:socialLink.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/nomaya/social-bundle/Nomaya/SocialBundle/Resources/views/Links/socialLink.html.twig");
    }
}
