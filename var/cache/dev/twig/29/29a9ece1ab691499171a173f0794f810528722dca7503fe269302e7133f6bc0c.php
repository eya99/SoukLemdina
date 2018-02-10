<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a55ceb3b08007be2f1a70139b0934012761a384bd0fd278b18150cd28bd8ce75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_f400ea277bd0f4f924c9a08cbf3c1b63cc113897142b8099721d86c776df9350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f400ea277bd0f4f924c9a08cbf3c1b63cc113897142b8099721d86c776df9350->enter($__internal_f400ea277bd0f4f924c9a08cbf3c1b63cc113897142b8099721d86c776df9350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e9d8bb06184406407835f38e809096b5c242ebade2eca399845ee5d93c1d9a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d8bb06184406407835f38e809096b5c242ebade2eca399845ee5d93c1d9a9e->enter($__internal_e9d8bb06184406407835f38e809096b5c242ebade2eca399845ee5d93c1d9a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f400ea277bd0f4f924c9a08cbf3c1b63cc113897142b8099721d86c776df9350->leave($__internal_f400ea277bd0f4f924c9a08cbf3c1b63cc113897142b8099721d86c776df9350_prof);

        
        $__internal_e9d8bb06184406407835f38e809096b5c242ebade2eca399845ee5d93c1d9a9e->leave($__internal_e9d8bb06184406407835f38e809096b5c242ebade2eca399845ee5d93c1d9a9e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c04f7f4eeb51840541220156c21cfefdfc9fd80755b56404f7b90e4e833b0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c04f7f4eeb51840541220156c21cfefdfc9fd80755b56404f7b90e4e833b0b4->enter($__internal_8c04f7f4eeb51840541220156c21cfefdfc9fd80755b56404f7b90e4e833b0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_97df59c6ef672c1890ad50647da133531b7c04ad15b36e489fc1a4b52be11418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97df59c6ef672c1890ad50647da133531b7c04ad15b36e489fc1a4b52be11418->enter($__internal_97df59c6ef672c1890ad50647da133531b7c04ad15b36e489fc1a4b52be11418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_97df59c6ef672c1890ad50647da133531b7c04ad15b36e489fc1a4b52be11418->leave($__internal_97df59c6ef672c1890ad50647da133531b7c04ad15b36e489fc1a4b52be11418_prof);

        
        $__internal_8c04f7f4eeb51840541220156c21cfefdfc9fd80755b56404f7b90e4e833b0b4->leave($__internal_8c04f7f4eeb51840541220156c21cfefdfc9fd80755b56404f7b90e4e833b0b4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_946f350eb57018c96ebd5170c890e51934948a93e96b7940c30db1e38914c336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946f350eb57018c96ebd5170c890e51934948a93e96b7940c30db1e38914c336->enter($__internal_946f350eb57018c96ebd5170c890e51934948a93e96b7940c30db1e38914c336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_21f38a673b50969dd9c8c75ce3081f086fc64b4f71ca6db700000b921f99a5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f38a673b50969dd9c8c75ce3081f086fc64b4f71ca6db700000b921f99a5d0->enter($__internal_21f38a673b50969dd9c8c75ce3081f086fc64b4f71ca6db700000b921f99a5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_21f38a673b50969dd9c8c75ce3081f086fc64b4f71ca6db700000b921f99a5d0->leave($__internal_21f38a673b50969dd9c8c75ce3081f086fc64b4f71ca6db700000b921f99a5d0_prof);

        
        $__internal_946f350eb57018c96ebd5170c890e51934948a93e96b7940c30db1e38914c336->leave($__internal_946f350eb57018c96ebd5170c890e51934948a93e96b7940c30db1e38914c336_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6aafdc5b28d799d2ef3d17e6b0304b6519538a1de1402b0206c0900bd760581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6aafdc5b28d799d2ef3d17e6b0304b6519538a1de1402b0206c0900bd760581->enter($__internal_f6aafdc5b28d799d2ef3d17e6b0304b6519538a1de1402b0206c0900bd760581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07d9328fa22ccbf300c1abf0892b479584b75f2b27a1a18c37cac3b88bdb967d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d9328fa22ccbf300c1abf0892b479584b75f2b27a1a18c37cac3b88bdb967d->enter($__internal_07d9328fa22ccbf300c1abf0892b479584b75f2b27a1a18c37cac3b88bdb967d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_07d9328fa22ccbf300c1abf0892b479584b75f2b27a1a18c37cac3b88bdb967d->leave($__internal_07d9328fa22ccbf300c1abf0892b479584b75f2b27a1a18c37cac3b88bdb967d_prof);

        
        $__internal_f6aafdc5b28d799d2ef3d17e6b0304b6519538a1de1402b0206c0900bd760581->leave($__internal_f6aafdc5b28d799d2ef3d17e6b0304b6519538a1de1402b0206c0900bd760581_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
