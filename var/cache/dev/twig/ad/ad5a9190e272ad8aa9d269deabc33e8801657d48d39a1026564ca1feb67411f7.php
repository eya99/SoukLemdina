<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_818e0a2207603f65c482bd192f1918dc17d8f61e84a242c7f348d4c73b63bdfd extends Twig_Template
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
        $__internal_5034a7cdc163f3fcc6ce462802fdb417451513755cfb75fb65206833d1785b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5034a7cdc163f3fcc6ce462802fdb417451513755cfb75fb65206833d1785b24->enter($__internal_5034a7cdc163f3fcc6ce462802fdb417451513755cfb75fb65206833d1785b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_2a9a95c2b7fff81ebeae28d2e2ac4226ed8098bfd5f08a3adf13b2b1d2d65c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9a95c2b7fff81ebeae28d2e2ac4226ed8098bfd5f08a3adf13b2b1d2d65c9f->enter($__internal_2a9a95c2b7fff81ebeae28d2e2ac4226ed8098bfd5f08a3adf13b2b1d2d65c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_5034a7cdc163f3fcc6ce462802fdb417451513755cfb75fb65206833d1785b24->leave($__internal_5034a7cdc163f3fcc6ce462802fdb417451513755cfb75fb65206833d1785b24_prof);

        
        $__internal_2a9a95c2b7fff81ebeae28d2e2ac4226ed8098bfd5f08a3adf13b2b1d2d65c9f->leave($__internal_2a9a95c2b7fff81ebeae28d2e2ac4226ed8098bfd5f08a3adf13b2b1d2d65c9f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
