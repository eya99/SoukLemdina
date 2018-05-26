<?php

/* NomayaSocialBundle:Buttons:linkedinButton.html.twig */
class __TwigTemplate_bcaf051f0cdd9aaf7bdd93a3d48d9e3c0054196f48942a9e16be29f3a29089e7 extends Twig_Template
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
        $__internal_e18b27f705886ff4f2d8172f723143061cecf3dcbc43f238dff8e69767d825ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18b27f705886ff4f2d8172f723143061cecf3dcbc43f238dff8e69767d825ab->enter($__internal_e18b27f705886ff4f2d8172f723143061cecf3dcbc43f238dff8e69767d825ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:linkedinButton.html.twig"));

        $__internal_a910ea813959ffbeb0c57c5785140df9ce5ace9feb63d2238b45ab416dcbacfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a910ea813959ffbeb0c57c5785140df9ce5ace9feb63d2238b45ab416dcbacfb->enter($__internal_a910ea813959ffbeb0c57c5785140df9ce5ace9feb63d2238b45ab416dcbacfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:linkedinButton.html.twig"));

        // line 1
        if (( !array_key_exists("url", $context) || ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) == null))) {
            // line 2
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array());
        }
        // line 4
        echo "
";
        // line 5
        ob_start();
        // line 6
        echo "
<script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\">
  lang: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "
</script>

 <script type=\"IN/Share\" data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" data-counter=\"";
        echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
        echo "\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e18b27f705886ff4f2d8172f723143061cecf3dcbc43f238dff8e69767d825ab->leave($__internal_e18b27f705886ff4f2d8172f723143061cecf3dcbc43f238dff8e69767d825ab_prof);

        
        $__internal_a910ea813959ffbeb0c57c5785140df9ce5ace9feb63d2238b45ab416dcbacfb->leave($__internal_a910ea813959ffbeb0c57c5785140df9ce5ace9feb63d2238b45ab416dcbacfb_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:linkedinButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if url is not defined or url == null %}
    {% set url = app.request.uri %}
{% endif %}

{% spaceless %}

<script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\">
  lang: {{ locale }}
</script>

 <script type=\"IN/Share\" data-url=\"{{ url }}\" data-counter=\"{{ counter }}\"></script>
{% endspaceless %}
", "NomayaSocialBundle:Buttons:linkedinButton.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/nomaya/social-bundle/Nomaya/SocialBundle/Resources/views/Buttons/linkedinButton.html.twig");
    }
}
