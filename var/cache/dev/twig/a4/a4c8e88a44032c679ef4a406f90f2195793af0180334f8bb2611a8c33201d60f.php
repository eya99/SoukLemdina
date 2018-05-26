<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5e01c09c6d6ffe7d1d6086b7f36baf556284d11587a24c4bba48ad4851f31188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf3ad7221abddd1b83fe3d09a49658a4ccd8c78449c512d798044d8ee3a30d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3ad7221abddd1b83fe3d09a49658a4ccd8c78449c512d798044d8ee3a30d95->enter($__internal_cf3ad7221abddd1b83fe3d09a49658a4ccd8c78449c512d798044d8ee3a30d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_9f9b7366d11f5443e67a1873cc7b0c3cde4ccfa762bd8a913564d28211b7c5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9b7366d11f5443e67a1873cc7b0c3cde4ccfa762bd8a913564d28211b7c5d9->enter($__internal_9f9b7366d11f5443e67a1873cc7b0c3cde4ccfa762bd8a913564d28211b7c5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3ad7221abddd1b83fe3d09a49658a4ccd8c78449c512d798044d8ee3a30d95->leave($__internal_cf3ad7221abddd1b83fe3d09a49658a4ccd8c78449c512d798044d8ee3a30d95_prof);

        
        $__internal_9f9b7366d11f5443e67a1873cc7b0c3cde4ccfa762bd8a913564d28211b7c5d9->leave($__internal_9f9b7366d11f5443e67a1873cc7b0c3cde4ccfa762bd8a913564d28211b7c5d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42414e3cccd05f92912733463bf74da4624d402d0b0309a4442761698f70891a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42414e3cccd05f92912733463bf74da4624d402d0b0309a4442761698f70891a->enter($__internal_42414e3cccd05f92912733463bf74da4624d402d0b0309a4442761698f70891a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_45ce7873194eb14957012f6f5798a4ec0e3c1f53ca129f43028947058a629d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ce7873194eb14957012f6f5798a4ec0e3c1f53ca129f43028947058a629d33->enter($__internal_45ce7873194eb14957012f6f5798a4ec0e3c1f53ca129f43028947058a629d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_45ce7873194eb14957012f6f5798a4ec0e3c1f53ca129f43028947058a629d33->leave($__internal_45ce7873194eb14957012f6f5798a4ec0e3c1f53ca129f43028947058a629d33_prof);

        
        $__internal_42414e3cccd05f92912733463bf74da4624d402d0b0309a4442761698f70891a->leave($__internal_42414e3cccd05f92912733463bf74da4624d402d0b0309a4442761698f70891a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ffe73db0d6fffedea0f7c940d06bdf41e1e4ca84163cc259ff86e91e73d6c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ffe73db0d6fffedea0f7c940d06bdf41e1e4ca84163cc259ff86e91e73d6c9f->enter($__internal_9ffe73db0d6fffedea0f7c940d06bdf41e1e4ca84163cc259ff86e91e73d6c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_733d0827ae8cd433ff84f0c0764c1290efa807d2065cb62ce95f1206924bf3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733d0827ae8cd433ff84f0c0764c1290efa807d2065cb62ce95f1206924bf3d8->enter($__internal_733d0827ae8cd433ff84f0c0764c1290efa807d2065cb62ce95f1206924bf3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_733d0827ae8cd433ff84f0c0764c1290efa807d2065cb62ce95f1206924bf3d8->leave($__internal_733d0827ae8cd433ff84f0c0764c1290efa807d2065cb62ce95f1206924bf3d8_prof);

        
        $__internal_9ffe73db0d6fffedea0f7c940d06bdf41e1e4ca84163cc259ff86e91e73d6c9f->leave($__internal_9ffe73db0d6fffedea0f7c940d06bdf41e1e4ca84163cc259ff86e91e73d6c9f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_759b4dd59be8660c9445184e23542960fd20b89869248905730f69bbeeca1737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759b4dd59be8660c9445184e23542960fd20b89869248905730f69bbeeca1737->enter($__internal_759b4dd59be8660c9445184e23542960fd20b89869248905730f69bbeeca1737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4254e022ae0b7a2b0ed447e0024e7a0c365f2e9a8277d21c5825782088849a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4254e022ae0b7a2b0ed447e0024e7a0c365f2e9a8277d21c5825782088849a2e->enter($__internal_4254e022ae0b7a2b0ed447e0024e7a0c365f2e9a8277d21c5825782088849a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_4254e022ae0b7a2b0ed447e0024e7a0c365f2e9a8277d21c5825782088849a2e->leave($__internal_4254e022ae0b7a2b0ed447e0024e7a0c365f2e9a8277d21c5825782088849a2e_prof);

        
        $__internal_759b4dd59be8660c9445184e23542960fd20b89869248905730f69bbeeca1737->leave($__internal_759b4dd59be8660c9445184e23542960fd20b89869248905730f69bbeeca1737_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
