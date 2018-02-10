<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ef96e54e3a8afb9df227955af4ba1b0fe88b7ed2a110b1e948da3e03509b1017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_395f6da0d2640f9e461ef7ece72fe03a52f6dc10c07eb5f6bb87efa95b670073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395f6da0d2640f9e461ef7ece72fe03a52f6dc10c07eb5f6bb87efa95b670073->enter($__internal_395f6da0d2640f9e461ef7ece72fe03a52f6dc10c07eb5f6bb87efa95b670073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_9c06da1fd531a6d9339b4c091ec87be9a15cdb58da89689609ced06f73044c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c06da1fd531a6d9339b4c091ec87be9a15cdb58da89689609ced06f73044c47->enter($__internal_9c06da1fd531a6d9339b4c091ec87be9a15cdb58da89689609ced06f73044c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_395f6da0d2640f9e461ef7ece72fe03a52f6dc10c07eb5f6bb87efa95b670073->leave($__internal_395f6da0d2640f9e461ef7ece72fe03a52f6dc10c07eb5f6bb87efa95b670073_prof);

        
        $__internal_9c06da1fd531a6d9339b4c091ec87be9a15cdb58da89689609ced06f73044c47->leave($__internal_9c06da1fd531a6d9339b4c091ec87be9a15cdb58da89689609ced06f73044c47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7ce16542d006ab313e68d51cde79c6ad53c828302b5f85efed0c7ee4a3b9950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ce16542d006ab313e68d51cde79c6ad53c828302b5f85efed0c7ee4a3b9950->enter($__internal_b7ce16542d006ab313e68d51cde79c6ad53c828302b5f85efed0c7ee4a3b9950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f9243921721d337a1e3295b13405ba38de0b5726e1b4c5c222cdcc6040ecbec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9243921721d337a1e3295b13405ba38de0b5726e1b4c5c222cdcc6040ecbec6->enter($__internal_f9243921721d337a1e3295b13405ba38de0b5726e1b4c5c222cdcc6040ecbec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f9243921721d337a1e3295b13405ba38de0b5726e1b4c5c222cdcc6040ecbec6->leave($__internal_f9243921721d337a1e3295b13405ba38de0b5726e1b4c5c222cdcc6040ecbec6_prof);

        
        $__internal_b7ce16542d006ab313e68d51cde79c6ad53c828302b5f85efed0c7ee4a3b9950->leave($__internal_b7ce16542d006ab313e68d51cde79c6ad53c828302b5f85efed0c7ee4a3b9950_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
