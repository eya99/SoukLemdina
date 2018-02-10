<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6cba34a5015a7904190ecad1e877d241fe273799ca2558ab396588b795898d12 extends Twig_Template
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
        $__internal_04e088187da96dafa3454a81e344c64d905a146e29b840152027eb726a1ebcc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e088187da96dafa3454a81e344c64d905a146e29b840152027eb726a1ebcc3->enter($__internal_04e088187da96dafa3454a81e344c64d905a146e29b840152027eb726a1ebcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1c7f99301184807596fa5e75baefd8453d5cec93fe66a8e7ab71c4b669c8184e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7f99301184807596fa5e75baefd8453d5cec93fe66a8e7ab71c4b669c8184e->enter($__internal_1c7f99301184807596fa5e75baefd8453d5cec93fe66a8e7ab71c4b669c8184e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_04e088187da96dafa3454a81e344c64d905a146e29b840152027eb726a1ebcc3->leave($__internal_04e088187da96dafa3454a81e344c64d905a146e29b840152027eb726a1ebcc3_prof);

        
        $__internal_1c7f99301184807596fa5e75baefd8453d5cec93fe66a8e7ab71c4b669c8184e->leave($__internal_1c7f99301184807596fa5e75baefd8453d5cec93fe66a8e7ab71c4b669c8184e_prof);

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
", "TwigBundle:Exception:exception.js.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
