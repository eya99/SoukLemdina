<?php

/* CommandeBundle:Default:index.html.twig */
class __TwigTemplate_f8f9945ad04ef77eaf225f37921ddf1402129d5698464d0d79a5481e38f823ba extends Twig_Template
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
        $__internal_7e599bc5976ad903c9196f20f50ad7cf9dbdc2ddec4e4784de6fce227c61f52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e599bc5976ad903c9196f20f50ad7cf9dbdc2ddec4e4784de6fce227c61f52d->enter($__internal_7e599bc5976ad903c9196f20f50ad7cf9dbdc2ddec4e4784de6fce227c61f52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Default:index.html.twig"));

        $__internal_3f90afe3b2eb335be6f76b9f8fbae9474f8369eebcd1c2c49a153f262ba4dfd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f90afe3b2eb335be6f76b9f8fbae9474f8369eebcd1c2c49a153f262ba4dfd3->enter($__internal_3f90afe3b2eb335be6f76b9f8fbae9474f8369eebcd1c2c49a153f262ba4dfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_7e599bc5976ad903c9196f20f50ad7cf9dbdc2ddec4e4784de6fce227c61f52d->leave($__internal_7e599bc5976ad903c9196f20f50ad7cf9dbdc2ddec4e4784de6fce227c61f52d_prof);

        
        $__internal_3f90afe3b2eb335be6f76b9f8fbae9474f8369eebcd1c2c49a153f262ba4dfd3->leave($__internal_3f90afe3b2eb335be6f76b9f8fbae9474f8369eebcd1c2c49a153f262ba4dfd3_prof);

    }

    public function getTemplateName()
    {
        return "CommandeBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "CommandeBundle:Default:index.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/CommandeBundle/Resources/views/Default/index.html.twig");
    }
}
