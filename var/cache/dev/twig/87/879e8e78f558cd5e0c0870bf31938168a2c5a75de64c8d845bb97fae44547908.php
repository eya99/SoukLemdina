<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_7b004372e53718f8f0bd4187abdb4e3cf39939c89992d20f30562ff57f7e1c17 extends Twig_Template
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
        $__internal_d1b7f9d17f521c722a385a671af79f9458edc365539778a6389b21af1d4e3e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b7f9d17f521c722a385a671af79f9458edc365539778a6389b21af1d4e3e61->enter($__internal_d1b7f9d17f521c722a385a671af79f9458edc365539778a6389b21af1d4e3e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_35fe5f42b6ab77920c0b70fcc874f20443480ebf16832c83fa5d039b1ffaa447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fe5f42b6ab77920c0b70fcc874f20443480ebf16832c83fa5d039b1ffaa447->enter($__internal_35fe5f42b6ab77920c0b70fcc874f20443480ebf16832c83fa5d039b1ffaa447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_d1b7f9d17f521c722a385a671af79f9458edc365539778a6389b21af1d4e3e61->leave($__internal_d1b7f9d17f521c722a385a671af79f9458edc365539778a6389b21af1d4e3e61_prof);

        
        $__internal_35fe5f42b6ab77920c0b70fcc874f20443480ebf16832c83fa5d039b1ffaa447->leave($__internal_35fe5f42b6ab77920c0b70fcc874f20443480ebf16832c83fa5d039b1ffaa447_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
