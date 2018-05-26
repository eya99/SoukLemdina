<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c58c225cc0342ab98c0a43f84ae8332e4396382d1ff496d4b00077c64a67cfd6 extends Twig_Template
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
        $__internal_b9412470bac1d8b3ba8870edf03a8f887f26e9c66a5ab6e52b42ad2e73196996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9412470bac1d8b3ba8870edf03a8f887f26e9c66a5ab6e52b42ad2e73196996->enter($__internal_b9412470bac1d8b3ba8870edf03a8f887f26e9c66a5ab6e52b42ad2e73196996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_0e63dfccba904667502ace0064a7aa1c6d0f90c2b81dd8fb5c6443bf64bb2ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e63dfccba904667502ace0064a7aa1c6d0f90c2b81dd8fb5c6443bf64bb2ca1->enter($__internal_0e63dfccba904667502ace0064a7aa1c6d0f90c2b81dd8fb5c6443bf64bb2ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b9412470bac1d8b3ba8870edf03a8f887f26e9c66a5ab6e52b42ad2e73196996->leave($__internal_b9412470bac1d8b3ba8870edf03a8f887f26e9c66a5ab6e52b42ad2e73196996_prof);

        
        $__internal_0e63dfccba904667502ace0064a7aa1c6d0f90c2b81dd8fb5c6443bf64bb2ca1->leave($__internal_0e63dfccba904667502ace0064a7aa1c6d0f90c2b81dd8fb5c6443bf64bb2ca1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
