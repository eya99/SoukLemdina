<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_b332328f65c07630a07ee3177eb98a5832ff160985f0bdb395c0c872eceeffb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_a374dde1a7dc4620479bbb6352f373ad3946e3664639fb3b3876418902aee6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a374dde1a7dc4620479bbb6352f373ad3946e3664639fb3b3876418902aee6c2->enter($__internal_a374dde1a7dc4620479bbb6352f373ad3946e3664639fb3b3876418902aee6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_0efbfad4020f874bad3591504e3c3c2957550b378264c7708d3be4c7f203bb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0efbfad4020f874bad3591504e3c3c2957550b378264c7708d3be4c7f203bb32->enter($__internal_0efbfad4020f874bad3591504e3c3c2957550b378264c7708d3be4c7f203bb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a374dde1a7dc4620479bbb6352f373ad3946e3664639fb3b3876418902aee6c2->leave($__internal_a374dde1a7dc4620479bbb6352f373ad3946e3664639fb3b3876418902aee6c2_prof);

        
        $__internal_0efbfad4020f874bad3591504e3c3c2957550b378264c7708d3be4c7f203bb32->leave($__internal_0efbfad4020f874bad3591504e3c3c2957550b378264c7708d3be4c7f203bb32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df40d411cd2c5149fe385324e13cb593ada9a1f886a439cac96abc91c91115d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df40d411cd2c5149fe385324e13cb593ada9a1f886a439cac96abc91c91115d2->enter($__internal_df40d411cd2c5149fe385324e13cb593ada9a1f886a439cac96abc91c91115d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_105930a17e9e0ae9e7314c17ed36fc214e3474497b2e3760bec8399d2b4cecb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105930a17e9e0ae9e7314c17ed36fc214e3474497b2e3760bec8399d2b4cecb9->enter($__internal_105930a17e9e0ae9e7314c17ed36fc214e3474497b2e3760bec8399d2b4cecb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_105930a17e9e0ae9e7314c17ed36fc214e3474497b2e3760bec8399d2b4cecb9->leave($__internal_105930a17e9e0ae9e7314c17ed36fc214e3474497b2e3760bec8399d2b4cecb9_prof);

        
        $__internal_df40d411cd2c5149fe385324e13cb593ada9a1f886a439cac96abc91c91115d2->leave($__internal_df40d411cd2c5149fe385324e13cb593ada9a1f886a439cac96abc91c91115d2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
