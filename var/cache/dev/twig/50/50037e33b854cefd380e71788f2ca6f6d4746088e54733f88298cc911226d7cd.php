<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8bdf90cd8358529722f0bf24896cd7c15fefee8cf19471ae07f603c72a09818c extends Twig_Template
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
        $__internal_cdcd582869b15f105c67a112d54fc0966b00516b256916e3fa2d6e8e80759dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcd582869b15f105c67a112d54fc0966b00516b256916e3fa2d6e8e80759dc4->enter($__internal_cdcd582869b15f105c67a112d54fc0966b00516b256916e3fa2d6e8e80759dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_b57008ac78e36e7e188f6e0ba30c3621388ebaafcaa4ec38b0311b13df338d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57008ac78e36e7e188f6e0ba30c3621388ebaafcaa4ec38b0311b13df338d8f->enter($__internal_b57008ac78e36e7e188f6e0ba30c3621388ebaafcaa4ec38b0311b13df338d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_cdcd582869b15f105c67a112d54fc0966b00516b256916e3fa2d6e8e80759dc4->leave($__internal_cdcd582869b15f105c67a112d54fc0966b00516b256916e3fa2d6e8e80759dc4_prof);

        
        $__internal_b57008ac78e36e7e188f6e0ba30c3621388ebaafcaa4ec38b0311b13df338d8f->leave($__internal_b57008ac78e36e7e188f6e0ba30c3621388ebaafcaa4ec38b0311b13df338d8f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
