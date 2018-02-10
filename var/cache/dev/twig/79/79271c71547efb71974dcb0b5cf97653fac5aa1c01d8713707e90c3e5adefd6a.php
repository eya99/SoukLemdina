<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5d21476bec7435f236a0a767e3eaa924201b91953989ddecd76f995e186f72a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_8228f3eb34261b09a3517da0aacd3d27a022e56e395419bcbf9028ffb5b949d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8228f3eb34261b09a3517da0aacd3d27a022e56e395419bcbf9028ffb5b949d8->enter($__internal_8228f3eb34261b09a3517da0aacd3d27a022e56e395419bcbf9028ffb5b949d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_d3d9f492a123c8390cb600ca88e0f87949aedfa67cc5e38dc0e229199fbe1281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d9f492a123c8390cb600ca88e0f87949aedfa67cc5e38dc0e229199fbe1281->enter($__internal_d3d9f492a123c8390cb600ca88e0f87949aedfa67cc5e38dc0e229199fbe1281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8228f3eb34261b09a3517da0aacd3d27a022e56e395419bcbf9028ffb5b949d8->leave($__internal_8228f3eb34261b09a3517da0aacd3d27a022e56e395419bcbf9028ffb5b949d8_prof);

        
        $__internal_d3d9f492a123c8390cb600ca88e0f87949aedfa67cc5e38dc0e229199fbe1281->leave($__internal_d3d9f492a123c8390cb600ca88e0f87949aedfa67cc5e38dc0e229199fbe1281_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_437c5c59cb5c818c9936e74d8eb66eb9236acba00283bf3408d28133015f1359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437c5c59cb5c818c9936e74d8eb66eb9236acba00283bf3408d28133015f1359->enter($__internal_437c5c59cb5c818c9936e74d8eb66eb9236acba00283bf3408d28133015f1359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2a1cad537efa15a2354f502b679ae54c7193e9d01635f3e84860730a4634b01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1cad537efa15a2354f502b679ae54c7193e9d01635f3e84860730a4634b01d->enter($__internal_2a1cad537efa15a2354f502b679ae54c7193e9d01635f3e84860730a4634b01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2a1cad537efa15a2354f502b679ae54c7193e9d01635f3e84860730a4634b01d->leave($__internal_2a1cad537efa15a2354f502b679ae54c7193e9d01635f3e84860730a4634b01d_prof);

        
        $__internal_437c5c59cb5c818c9936e74d8eb66eb9236acba00283bf3408d28133015f1359->leave($__internal_437c5c59cb5c818c9936e74d8eb66eb9236acba00283bf3408d28133015f1359_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
