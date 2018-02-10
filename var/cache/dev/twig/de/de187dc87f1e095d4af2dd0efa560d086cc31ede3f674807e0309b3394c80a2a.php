<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_8ad8fe2881de834a7270dd1dfe276022268f4d074a4cd344aab9ac418c46b328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_3eb7a8da57d2c57677f96f9497b5a60f400c537e1f4566f2ae16237764886d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb7a8da57d2c57677f96f9497b5a60f400c537e1f4566f2ae16237764886d09->enter($__internal_3eb7a8da57d2c57677f96f9497b5a60f400c537e1f4566f2ae16237764886d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_1b940ea25e4518c6436c6c7b161bf167a480f6797b7a746bc95918a0a048ce87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b940ea25e4518c6436c6c7b161bf167a480f6797b7a746bc95918a0a048ce87->enter($__internal_1b940ea25e4518c6436c6c7b161bf167a480f6797b7a746bc95918a0a048ce87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eb7a8da57d2c57677f96f9497b5a60f400c537e1f4566f2ae16237764886d09->leave($__internal_3eb7a8da57d2c57677f96f9497b5a60f400c537e1f4566f2ae16237764886d09_prof);

        
        $__internal_1b940ea25e4518c6436c6c7b161bf167a480f6797b7a746bc95918a0a048ce87->leave($__internal_1b940ea25e4518c6436c6c7b161bf167a480f6797b7a746bc95918a0a048ce87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6177cd471a4002780d853cc9457140da392c8b423e0b19759af03ac64799cdfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6177cd471a4002780d853cc9457140da392c8b423e0b19759af03ac64799cdfd->enter($__internal_6177cd471a4002780d853cc9457140da392c8b423e0b19759af03ac64799cdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2173df20e676bda1deae2c2d8cd8c91d8ff972ca9063ebd5648ee7576ededeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2173df20e676bda1deae2c2d8cd8c91d8ff972ca9063ebd5648ee7576ededeba->enter($__internal_2173df20e676bda1deae2c2d8cd8c91d8ff972ca9063ebd5648ee7576ededeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_2173df20e676bda1deae2c2d8cd8c91d8ff972ca9063ebd5648ee7576ededeba->leave($__internal_2173df20e676bda1deae2c2d8cd8c91d8ff972ca9063ebd5648ee7576ededeba_prof);

        
        $__internal_6177cd471a4002780d853cc9457140da392c8b423e0b19759af03ac64799cdfd->leave($__internal_6177cd471a4002780d853cc9457140da392c8b423e0b19759af03ac64799cdfd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
