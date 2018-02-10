<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_989afe85103c76901c042d7eb27002b3b2da5241e4b92eeda3dcfcedc7aa1129 extends Twig_Template
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
        $__internal_3e72cac3123f5bbd54c3dd07cc9e79c1d2a9fffdbec40451d7fea8c020dfaa29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e72cac3123f5bbd54c3dd07cc9e79c1d2a9fffdbec40451d7fea8c020dfaa29->enter($__internal_3e72cac3123f5bbd54c3dd07cc9e79c1d2a9fffdbec40451d7fea8c020dfaa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_adecd7ea22da23cd115ffd7b8db067c20d18b738766c87b2234cbb630050e35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adecd7ea22da23cd115ffd7b8db067c20d18b738766c87b2234cbb630050e35d->enter($__internal_adecd7ea22da23cd115ffd7b8db067c20d18b738766c87b2234cbb630050e35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_3e72cac3123f5bbd54c3dd07cc9e79c1d2a9fffdbec40451d7fea8c020dfaa29->leave($__internal_3e72cac3123f5bbd54c3dd07cc9e79c1d2a9fffdbec40451d7fea8c020dfaa29_prof);

        
        $__internal_adecd7ea22da23cd115ffd7b8db067c20d18b738766c87b2234cbb630050e35d->leave($__internal_adecd7ea22da23cd115ffd7b8db067c20d18b738766c87b2234cbb630050e35d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
