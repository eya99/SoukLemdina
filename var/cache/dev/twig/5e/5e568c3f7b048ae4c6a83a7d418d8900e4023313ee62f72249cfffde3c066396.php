<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_f3abe26fbad9495c7a215fd8533edef9403abdc22d48b91ef5e3bdc22b53585c extends Twig_Template
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
        $__internal_fdfdfbcd4c91c473025a04a22399e8e81855fdb677cc69fec1ce464beca9d993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdfdfbcd4c91c473025a04a22399e8e81855fdb677cc69fec1ce464beca9d993->enter($__internal_fdfdfbcd4c91c473025a04a22399e8e81855fdb677cc69fec1ce464beca9d993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_be57d8b9b583906647f7558baeabf87b6b9234ff9dddb1a9db6f1b9b6b9ede81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be57d8b9b583906647f7558baeabf87b6b9234ff9dddb1a9db6f1b9b6b9ede81->enter($__internal_be57d8b9b583906647f7558baeabf87b6b9234ff9dddb1a9db6f1b9b6b9ede81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_fdfdfbcd4c91c473025a04a22399e8e81855fdb677cc69fec1ce464beca9d993->leave($__internal_fdfdfbcd4c91c473025a04a22399e8e81855fdb677cc69fec1ce464beca9d993_prof);

        
        $__internal_be57d8b9b583906647f7558baeabf87b6b9234ff9dddb1a9db6f1b9b6b9ede81->leave($__internal_be57d8b9b583906647f7558baeabf87b6b9234ff9dddb1a9db6f1b9b6b9ede81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
