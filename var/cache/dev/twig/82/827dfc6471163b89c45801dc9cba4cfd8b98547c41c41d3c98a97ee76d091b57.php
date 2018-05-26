<?php

/* NomayaSocialBundle:Buttons:googleplusButton.html.twig */
class __TwigTemplate_59a2e14c60ca50b6b37aa0ecdf40b0f091720013934af7d0201ec803c2cbea57 extends Twig_Template
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
        $__internal_ec95eb56d1cb18fd71fbf2878e88b7ce3c00e3d1b25da22632ff543797c2a1b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec95eb56d1cb18fd71fbf2878e88b7ce3c00e3d1b25da22632ff543797c2a1b0->enter($__internal_ec95eb56d1cb18fd71fbf2878e88b7ce3c00e3d1b25da22632ff543797c2a1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:googleplusButton.html.twig"));

        $__internal_be2f638e960608a5345904879c2b3202d4483c4347fbfb99043bf026244300e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2f638e960608a5345904879c2b3202d4483c4347fbfb99043bf026244300e9->enter($__internal_be2f638e960608a5345904879c2b3202d4483c4347fbfb99043bf026244300e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:googleplusButton.html.twig"));

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
        echo " <div class=\"g-plusone\" data-size=\"";
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo "\" data-annotation=\"";
        echo twig_escape_filter($this->env, (isset($context["annotation"]) ? $context["annotation"] : $this->getContext($context, "annotation")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" data-href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\"></div>

 <script type=\"text/javascript\">
   window.___gcfg = {lang: '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "'};

   (function() {
     var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
     po.src = 'https://apis.google.com/js/plusone.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
   })();
 </script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ec95eb56d1cb18fd71fbf2878e88b7ce3c00e3d1b25da22632ff543797c2a1b0->leave($__internal_ec95eb56d1cb18fd71fbf2878e88b7ce3c00e3d1b25da22632ff543797c2a1b0_prof);

        
        $__internal_be2f638e960608a5345904879c2b3202d4483c4347fbfb99043bf026244300e9->leave($__internal_be2f638e960608a5345904879c2b3202d4483c4347fbfb99043bf026244300e9_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:googleplusButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
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
 <div class=\"g-plusone\" data-size=\"{{size}}\" data-annotation=\"{{annotation}}\" data-width=\"{{width}}\" data-href=\"{{url}}\"></div>

 <script type=\"text/javascript\">
   window.___gcfg = {lang: '{{locale}}'};

   (function() {
     var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
     po.src = 'https://apis.google.com/js/plusone.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
   })();
 </script>

{% endspaceless %}", "NomayaSocialBundle:Buttons:googleplusButton.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/nomaya/social-bundle/Nomaya/SocialBundle/Resources/views/Buttons/googleplusButton.html.twig");
    }
}
