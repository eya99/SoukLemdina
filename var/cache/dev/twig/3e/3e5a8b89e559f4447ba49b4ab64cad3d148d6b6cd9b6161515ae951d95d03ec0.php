<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_31e76afde84a91fa9c41b1b72b7bde1cb3b3b7162d1461a82496fcda84add11a extends Twig_Template
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
        $__internal_e77dbd5d15b779ad80226e6ba806fba13a906ce8d7484dbc1e7da9ba774106aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77dbd5d15b779ad80226e6ba806fba13a906ce8d7484dbc1e7da9ba774106aa->enter($__internal_e77dbd5d15b779ad80226e6ba806fba13a906ce8d7484dbc1e7da9ba774106aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_ca6c5466d671fb135d67f59dd22c393814847752a59120584bf218eddeffc51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6c5466d671fb135d67f59dd22c393814847752a59120584bf218eddeffc51d->enter($__internal_ca6c5466d671fb135d67f59dd22c393814847752a59120584bf218eddeffc51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77dbd5d15b779ad80226e6ba806fba13a906ce8d7484dbc1e7da9ba774106aa->leave($__internal_e77dbd5d15b779ad80226e6ba806fba13a906ce8d7484dbc1e7da9ba774106aa_prof);

        
        $__internal_ca6c5466d671fb135d67f59dd22c393814847752a59120584bf218eddeffc51d->leave($__internal_ca6c5466d671fb135d67f59dd22c393814847752a59120584bf218eddeffc51d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02aa2e2473edcf4000d64ae9751c637c40e13245e6eab5b77958cfd15e64ea87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02aa2e2473edcf4000d64ae9751c637c40e13245e6eab5b77958cfd15e64ea87->enter($__internal_02aa2e2473edcf4000d64ae9751c637c40e13245e6eab5b77958cfd15e64ea87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_229745be3fdb04fb5d8edc8e5a52305401deaeeb3dff9e8f18095846c327af08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229745be3fdb04fb5d8edc8e5a52305401deaeeb3dff9e8f18095846c327af08->enter($__internal_229745be3fdb04fb5d8edc8e5a52305401deaeeb3dff9e8f18095846c327af08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_229745be3fdb04fb5d8edc8e5a52305401deaeeb3dff9e8f18095846c327af08->leave($__internal_229745be3fdb04fb5d8edc8e5a52305401deaeeb3dff9e8f18095846c327af08_prof);

        
        $__internal_02aa2e2473edcf4000d64ae9751c637c40e13245e6eab5b77958cfd15e64ea87->leave($__internal_02aa2e2473edcf4000d64ae9751c637c40e13245e6eab5b77958cfd15e64ea87_prof);

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
", "FOSUserBundle:Resetting:request.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
