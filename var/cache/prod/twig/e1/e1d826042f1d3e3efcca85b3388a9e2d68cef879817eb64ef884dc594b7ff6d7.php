<?php

/* NomayaSocialBundle:Buttons:pinterestButton.html.twig */
class __TwigTemplate_87872b0a8beb24539c6512666541cc67fed36532b878baa4c6c6fa1a392249fa extends Twig_Template
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
        $__internal_e8d5fd6ad3dc5a55c30c8025b7ce7564f28c8ca7d4329d49f831ae974b97aae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d5fd6ad3dc5a55c30c8025b7ce7564f28c8ca7d4329d49f831ae974b97aae9->enter($__internal_e8d5fd6ad3dc5a55c30c8025b7ce7564f28c8ca7d4329d49f831ae974b97aae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e8d5fd6ad3dc5a55c30c8025b7ce7564f28c8ca7d4329d49f831ae974b97aae9->leave($__internal_e8d5fd6ad3dc5a55c30c8025b7ce7564f28c8ca7d4329d49f831ae974b97aae9_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:pinterestButton.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
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
