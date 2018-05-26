<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a251b19a4a796e64bb10e065cdd30413413208337643849068e059c85457a5b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_88511ef53d78e83eb07536ff3861c428d00e60ecd34b7bb9f426e67f5b6908a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88511ef53d78e83eb07536ff3861c428d00e60ecd34b7bb9f426e67f5b6908a3->enter($__internal_88511ef53d78e83eb07536ff3861c428d00e60ecd34b7bb9f426e67f5b6908a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_51fe94b5cb964f734e7c013bbfbb44d5fb041f3ff58b739ef69beae186800518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fe94b5cb964f734e7c013bbfbb44d5fb041f3ff58b739ef69beae186800518->enter($__internal_51fe94b5cb964f734e7c013bbfbb44d5fb041f3ff58b739ef69beae186800518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88511ef53d78e83eb07536ff3861c428d00e60ecd34b7bb9f426e67f5b6908a3->leave($__internal_88511ef53d78e83eb07536ff3861c428d00e60ecd34b7bb9f426e67f5b6908a3_prof);

        
        $__internal_51fe94b5cb964f734e7c013bbfbb44d5fb041f3ff58b739ef69beae186800518->leave($__internal_51fe94b5cb964f734e7c013bbfbb44d5fb041f3ff58b739ef69beae186800518_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2907931d0f536e5e1525a54a4bf475f77d12d8e1d7ade3ab6bfa078a180b00c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2907931d0f536e5e1525a54a4bf475f77d12d8e1d7ade3ab6bfa078a180b00c8->enter($__internal_2907931d0f536e5e1525a54a4bf475f77d12d8e1d7ade3ab6bfa078a180b00c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e54a40bd56084273d3f5ef89a0328abe506253b427914972126b0278fbc7ba7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54a40bd56084273d3f5ef89a0328abe506253b427914972126b0278fbc7ba7f->enter($__internal_e54a40bd56084273d3f5ef89a0328abe506253b427914972126b0278fbc7ba7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e54a40bd56084273d3f5ef89a0328abe506253b427914972126b0278fbc7ba7f->leave($__internal_e54a40bd56084273d3f5ef89a0328abe506253b427914972126b0278fbc7ba7f_prof);

        
        $__internal_2907931d0f536e5e1525a54a4bf475f77d12d8e1d7ade3ab6bfa078a180b00c8->leave($__internal_2907931d0f536e5e1525a54a4bf475f77d12d8e1d7ade3ab6bfa078a180b00c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Group/new.html.twig");
    }
}
