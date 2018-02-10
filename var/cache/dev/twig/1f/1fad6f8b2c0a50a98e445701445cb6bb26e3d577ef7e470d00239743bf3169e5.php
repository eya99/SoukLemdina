<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8fa3623f35bfd8ce0ef4b814528dc590e140c55ffbf6ace23ec82b168f713dde extends Twig_Template
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
        $__internal_f41f3f38464a38c5e10c7fa713cb47d574a7f8e4d7434d35dd84331a5ca9cadc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41f3f38464a38c5e10c7fa713cb47d574a7f8e4d7434d35dd84331a5ca9cadc->enter($__internal_f41f3f38464a38c5e10c7fa713cb47d574a7f8e4d7434d35dd84331a5ca9cadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_88f5e3c1e93bbdd9066e3959611cc537c42a7583a06ff4e0cc8703d2f2f8d558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f5e3c1e93bbdd9066e3959611cc537c42a7583a06ff4e0cc8703d2f2f8d558->enter($__internal_88f5e3c1e93bbdd9066e3959611cc537c42a7583a06ff4e0cc8703d2f2f8d558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f41f3f38464a38c5e10c7fa713cb47d574a7f8e4d7434d35dd84331a5ca9cadc->leave($__internal_f41f3f38464a38c5e10c7fa713cb47d574a7f8e4d7434d35dd84331a5ca9cadc_prof);

        
        $__internal_88f5e3c1e93bbdd9066e3959611cc537c42a7583a06ff4e0cc8703d2f2f8d558->leave($__internal_88f5e3c1e93bbdd9066e3959611cc537c42a7583a06ff4e0cc8703d2f2f8d558_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a0f641f76446dfca7dba0d94d4e95c34ba5c72cc5483723c5cc43633f6ad028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0f641f76446dfca7dba0d94d4e95c34ba5c72cc5483723c5cc43633f6ad028->enter($__internal_4a0f641f76446dfca7dba0d94d4e95c34ba5c72cc5483723c5cc43633f6ad028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_74a35724e74dbb7a508609c3c0e071ecea78055031814b2880170494b0b14c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a35724e74dbb7a508609c3c0e071ecea78055031814b2880170494b0b14c77->enter($__internal_74a35724e74dbb7a508609c3c0e071ecea78055031814b2880170494b0b14c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_74a35724e74dbb7a508609c3c0e071ecea78055031814b2880170494b0b14c77->leave($__internal_74a35724e74dbb7a508609c3c0e071ecea78055031814b2880170494b0b14c77_prof);

        
        $__internal_4a0f641f76446dfca7dba0d94d4e95c34ba5c72cc5483723c5cc43633f6ad028->leave($__internal_4a0f641f76446dfca7dba0d94d4e95c34ba5c72cc5483723c5cc43633f6ad028_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b22964cd69a8fea42ab20b2157668c34c955d5fed8115f724a9b2b4e3c671695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22964cd69a8fea42ab20b2157668c34c955d5fed8115f724a9b2b4e3c671695->enter($__internal_b22964cd69a8fea42ab20b2157668c34c955d5fed8115f724a9b2b4e3c671695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59bee4b1c69fa65306021463fa36448eab15a99870725a2769ae3133f8fbb4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bee4b1c69fa65306021463fa36448eab15a99870725a2769ae3133f8fbb4e5->enter($__internal_59bee4b1c69fa65306021463fa36448eab15a99870725a2769ae3133f8fbb4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_59bee4b1c69fa65306021463fa36448eab15a99870725a2769ae3133f8fbb4e5->leave($__internal_59bee4b1c69fa65306021463fa36448eab15a99870725a2769ae3133f8fbb4e5_prof);

        
        $__internal_b22964cd69a8fea42ab20b2157668c34c955d5fed8115f724a9b2b4e3c671695->leave($__internal_b22964cd69a8fea42ab20b2157668c34c955d5fed8115f724a9b2b4e3c671695_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3c4f5014f17288aa4c5055c9bb2f2b7672a768a0f45e7bd7bcc8da75fc5c138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c4f5014f17288aa4c5055c9bb2f2b7672a768a0f45e7bd7bcc8da75fc5c138->enter($__internal_f3c4f5014f17288aa4c5055c9bb2f2b7672a768a0f45e7bd7bcc8da75fc5c138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9342577b1c18c023cd8db7a8b108956a0519879ca9061e7c1626d52eb068ef94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9342577b1c18c023cd8db7a8b108956a0519879ca9061e7c1626d52eb068ef94->enter($__internal_9342577b1c18c023cd8db7a8b108956a0519879ca9061e7c1626d52eb068ef94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_9342577b1c18c023cd8db7a8b108956a0519879ca9061e7c1626d52eb068ef94->leave($__internal_9342577b1c18c023cd8db7a8b108956a0519879ca9061e7c1626d52eb068ef94_prof);

        
        $__internal_f3c4f5014f17288aa4c5055c9bb2f2b7672a768a0f45e7bd7bcc8da75fc5c138->leave($__internal_f3c4f5014f17288aa4c5055c9bb2f2b7672a768a0f45e7bd7bcc8da75fc5c138_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
