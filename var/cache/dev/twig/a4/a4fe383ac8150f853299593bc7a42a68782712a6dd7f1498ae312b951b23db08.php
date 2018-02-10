<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_9306661a804a02dd478f2e5fe9e9817af6346e9d7225597f21e9b1ffc7c2f43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bd61c836f1151957a46914638424017c0d4cebd8e0ad8fc745d0b190befba76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd61c836f1151957a46914638424017c0d4cebd8e0ad8fc745d0b190befba76->enter($__internal_9bd61c836f1151957a46914638424017c0d4cebd8e0ad8fc745d0b190befba76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_aa47d58e762e3284bf945d55ed3a53986345df3238143c77cf9ae2d6dfa1d5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa47d58e762e3284bf945d55ed3a53986345df3238143c77cf9ae2d6dfa1d5ee->enter($__internal_aa47d58e762e3284bf945d55ed3a53986345df3238143c77cf9ae2d6dfa1d5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bd61c836f1151957a46914638424017c0d4cebd8e0ad8fc745d0b190befba76->leave($__internal_9bd61c836f1151957a46914638424017c0d4cebd8e0ad8fc745d0b190befba76_prof);

        
        $__internal_aa47d58e762e3284bf945d55ed3a53986345df3238143c77cf9ae2d6dfa1d5ee->leave($__internal_aa47d58e762e3284bf945d55ed3a53986345df3238143c77cf9ae2d6dfa1d5ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88b397c068c883f198c0af51127e2164892768624727e556dc3c9e119d71ee65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b397c068c883f198c0af51127e2164892768624727e556dc3c9e119d71ee65->enter($__internal_88b397c068c883f198c0af51127e2164892768624727e556dc3c9e119d71ee65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1e76b55c018acec4053cd3feaae7c0e270979ae39edfcd1d6dc8a420bd8248d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e76b55c018acec4053cd3feaae7c0e270979ae39edfcd1d6dc8a420bd8248d1->enter($__internal_1e76b55c018acec4053cd3feaae7c0e270979ae39edfcd1d6dc8a420bd8248d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_1e76b55c018acec4053cd3feaae7c0e270979ae39edfcd1d6dc8a420bd8248d1->leave($__internal_1e76b55c018acec4053cd3feaae7c0e270979ae39edfcd1d6dc8a420bd8248d1_prof);

        
        $__internal_88b397c068c883f198c0af51127e2164892768624727e556dc3c9e119d71ee65->leave($__internal_88b397c068c883f198c0af51127e2164892768624727e556dc3c9e119d71ee65_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
