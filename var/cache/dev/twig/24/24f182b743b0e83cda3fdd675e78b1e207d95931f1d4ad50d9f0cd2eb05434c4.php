<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_02c7426a6002d43c4e60e654c35717d57cf02ed07697bb24c0b0c27fef5826d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa3f7ebaf3814f158c26727864ffdd7b7b0c55869935080214e02a017310d790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3f7ebaf3814f158c26727864ffdd7b7b0c55869935080214e02a017310d790->enter($__internal_fa3f7ebaf3814f158c26727864ffdd7b7b0c55869935080214e02a017310d790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2874700b3a924f85b391570a34ed9efa5c3e8bafc16bc73125ccab85d3417efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2874700b3a924f85b391570a34ed9efa5c3e8bafc16bc73125ccab85d3417efa->enter($__internal_2874700b3a924f85b391570a34ed9efa5c3e8bafc16bc73125ccab85d3417efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_fa3f7ebaf3814f158c26727864ffdd7b7b0c55869935080214e02a017310d790->leave($__internal_fa3f7ebaf3814f158c26727864ffdd7b7b0c55869935080214e02a017310d790_prof);

        
        $__internal_2874700b3a924f85b391570a34ed9efa5c3e8bafc16bc73125ccab85d3417efa->leave($__internal_2874700b3a924f85b391570a34ed9efa5c3e8bafc16bc73125ccab85d3417efa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a763bebcc532b4e43b6c19798cb60e616afb9be07f965000e3a124cd81f7ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a763bebcc532b4e43b6c19798cb60e616afb9be07f965000e3a124cd81f7ffa->enter($__internal_3a763bebcc532b4e43b6c19798cb60e616afb9be07f965000e3a124cd81f7ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23fc0bd9348fdda7957c6d718a5a4355113bba5429574c6c200ab1e9ad2e5545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fc0bd9348fdda7957c6d718a5a4355113bba5429574c6c200ab1e9ad2e5545->enter($__internal_23fc0bd9348fdda7957c6d718a5a4355113bba5429574c6c200ab1e9ad2e5545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_23fc0bd9348fdda7957c6d718a5a4355113bba5429574c6c200ab1e9ad2e5545->leave($__internal_23fc0bd9348fdda7957c6d718a5a4355113bba5429574c6c200ab1e9ad2e5545_prof);

        
        $__internal_3a763bebcc532b4e43b6c19798cb60e616afb9be07f965000e3a124cd81f7ffa->leave($__internal_3a763bebcc532b4e43b6c19798cb60e616afb9be07f965000e3a124cd81f7ffa_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_aaa9a269050f25cdcddcbd82265f2715705becccf8c338d6635c6f728d278d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa9a269050f25cdcddcbd82265f2715705becccf8c338d6635c6f728d278d04->enter($__internal_aaa9a269050f25cdcddcbd82265f2715705becccf8c338d6635c6f728d278d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8b2b20e0112281e9a69cd8ac7340ce5c04ccb44ce4c8f6fa58183a988c4c68e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2b20e0112281e9a69cd8ac7340ce5c04ccb44ce4c8f6fa58183a988c4c68e5->enter($__internal_8b2b20e0112281e9a69cd8ac7340ce5c04ccb44ce4c8f6fa58183a988c4c68e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8b2b20e0112281e9a69cd8ac7340ce5c04ccb44ce4c8f6fa58183a988c4c68e5->leave($__internal_8b2b20e0112281e9a69cd8ac7340ce5c04ccb44ce4c8f6fa58183a988c4c68e5_prof);

        
        $__internal_aaa9a269050f25cdcddcbd82265f2715705becccf8c338d6635c6f728d278d04->leave($__internal_aaa9a269050f25cdcddcbd82265f2715705becccf8c338d6635c6f728d278d04_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d26e0d35d941739df5c4cb6d34026d3acb7d4817c00f891ef1961e028eb798ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26e0d35d941739df5c4cb6d34026d3acb7d4817c00f891ef1961e028eb798ae->enter($__internal_d26e0d35d941739df5c4cb6d34026d3acb7d4817c00f891ef1961e028eb798ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccd620aa478ed8c71b20d3c4df2aaadeaa5782ad44d30b57cb4a3b19ea1d565f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd620aa478ed8c71b20d3c4df2aaadeaa5782ad44d30b57cb4a3b19ea1d565f->enter($__internal_ccd620aa478ed8c71b20d3c4df2aaadeaa5782ad44d30b57cb4a3b19ea1d565f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ccd620aa478ed8c71b20d3c4df2aaadeaa5782ad44d30b57cb4a3b19ea1d565f->leave($__internal_ccd620aa478ed8c71b20d3c4df2aaadeaa5782ad44d30b57cb4a3b19ea1d565f_prof);

        
        $__internal_d26e0d35d941739df5c4cb6d34026d3acb7d4817c00f891ef1961e028eb798ae->leave($__internal_d26e0d35d941739df5c4cb6d34026d3acb7d4817c00f891ef1961e028eb798ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
