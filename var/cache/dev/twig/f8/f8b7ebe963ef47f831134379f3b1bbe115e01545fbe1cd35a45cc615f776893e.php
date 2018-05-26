<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c4b57601cc4a362c0f6d0d9a15bc282987a00eb3b5dccc24bbfd2cc79e66c2f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_472ed2983ba1be86a430ee75fab0d7e72b280fe62f8af144204b8fcabe7455e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472ed2983ba1be86a430ee75fab0d7e72b280fe62f8af144204b8fcabe7455e7->enter($__internal_472ed2983ba1be86a430ee75fab0d7e72b280fe62f8af144204b8fcabe7455e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_5e87dc74ffa0f402220c704a9f0d6de705f77e085b20d39a5aa1fa314f6d8968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e87dc74ffa0f402220c704a9f0d6de705f77e085b20d39a5aa1fa314f6d8968->enter($__internal_5e87dc74ffa0f402220c704a9f0d6de705f77e085b20d39a5aa1fa314f6d8968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_472ed2983ba1be86a430ee75fab0d7e72b280fe62f8af144204b8fcabe7455e7->leave($__internal_472ed2983ba1be86a430ee75fab0d7e72b280fe62f8af144204b8fcabe7455e7_prof);

        
        $__internal_5e87dc74ffa0f402220c704a9f0d6de705f77e085b20d39a5aa1fa314f6d8968->leave($__internal_5e87dc74ffa0f402220c704a9f0d6de705f77e085b20d39a5aa1fa314f6d8968_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95f851b3bb918c42cf20d47b81835c7b77f74f347ac89e14e42b5867dd084f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f851b3bb918c42cf20d47b81835c7b77f74f347ac89e14e42b5867dd084f76->enter($__internal_95f851b3bb918c42cf20d47b81835c7b77f74f347ac89e14e42b5867dd084f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0f563ef72d8c7ce3f793f0ff1a428b39d9163c39caa650c1021009f03ba6d9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f563ef72d8c7ce3f793f0ff1a428b39d9163c39caa650c1021009f03ba6d9e5->enter($__internal_0f563ef72d8c7ce3f793f0ff1a428b39d9163c39caa650c1021009f03ba6d9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0f563ef72d8c7ce3f793f0ff1a428b39d9163c39caa650c1021009f03ba6d9e5->leave($__internal_0f563ef72d8c7ce3f793f0ff1a428b39d9163c39caa650c1021009f03ba6d9e5_prof);

        
        $__internal_95f851b3bb918c42cf20d47b81835c7b77f74f347ac89e14e42b5867dd084f76->leave($__internal_95f851b3bb918c42cf20d47b81835c7b77f74f347ac89e14e42b5867dd084f76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Resetting/request.html.twig");
    }
}
