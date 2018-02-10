<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bb8afd2787e110b4e3306617e010a5187075033fae58256d54cd35af55e19d01 extends Twig_Template
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
        $__internal_0321db530b1019b5e4811eef3e09a6eaa390cc1bd0923e17859cc7ab34b8117a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0321db530b1019b5e4811eef3e09a6eaa390cc1bd0923e17859cc7ab34b8117a->enter($__internal_0321db530b1019b5e4811eef3e09a6eaa390cc1bd0923e17859cc7ab34b8117a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_93073da60737924f6d7d40265e91d356077be58030073ba2464f37ced96940df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93073da60737924f6d7d40265e91d356077be58030073ba2464f37ced96940df->enter($__internal_93073da60737924f6d7d40265e91d356077be58030073ba2464f37ced96940df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0321db530b1019b5e4811eef3e09a6eaa390cc1bd0923e17859cc7ab34b8117a->leave($__internal_0321db530b1019b5e4811eef3e09a6eaa390cc1bd0923e17859cc7ab34b8117a_prof);

        
        $__internal_93073da60737924f6d7d40265e91d356077be58030073ba2464f37ced96940df->leave($__internal_93073da60737924f6d7d40265e91d356077be58030073ba2464f37ced96940df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a049ddb0506099df2de3d26a3642ff0a46eb256e4de4f18e97205d08e928e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a049ddb0506099df2de3d26a3642ff0a46eb256e4de4f18e97205d08e928e31->enter($__internal_8a049ddb0506099df2de3d26a3642ff0a46eb256e4de4f18e97205d08e928e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_74bbbc3fb2882a9ecd1b6591072f65e48fb5e3eae9144289c42f11ed47506604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bbbc3fb2882a9ecd1b6591072f65e48fb5e3eae9144289c42f11ed47506604->enter($__internal_74bbbc3fb2882a9ecd1b6591072f65e48fb5e3eae9144289c42f11ed47506604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_74bbbc3fb2882a9ecd1b6591072f65e48fb5e3eae9144289c42f11ed47506604->leave($__internal_74bbbc3fb2882a9ecd1b6591072f65e48fb5e3eae9144289c42f11ed47506604_prof);

        
        $__internal_8a049ddb0506099df2de3d26a3642ff0a46eb256e4de4f18e97205d08e928e31->leave($__internal_8a049ddb0506099df2de3d26a3642ff0a46eb256e4de4f18e97205d08e928e31_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f015255c39e9ee4ac9e39dce9252e2c24318e02de540bf56c1a683d3e5dcc915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f015255c39e9ee4ac9e39dce9252e2c24318e02de540bf56c1a683d3e5dcc915->enter($__internal_f015255c39e9ee4ac9e39dce9252e2c24318e02de540bf56c1a683d3e5dcc915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_71109afefc50334626695a65a78d17917af2202867e3a08b9192dd704fe99154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71109afefc50334626695a65a78d17917af2202867e3a08b9192dd704fe99154->enter($__internal_71109afefc50334626695a65a78d17917af2202867e3a08b9192dd704fe99154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_71109afefc50334626695a65a78d17917af2202867e3a08b9192dd704fe99154->leave($__internal_71109afefc50334626695a65a78d17917af2202867e3a08b9192dd704fe99154_prof);

        
        $__internal_f015255c39e9ee4ac9e39dce9252e2c24318e02de540bf56c1a683d3e5dcc915->leave($__internal_f015255c39e9ee4ac9e39dce9252e2c24318e02de540bf56c1a683d3e5dcc915_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c572ebbbb5925952d43d3e8ee9e9b51182df7a1667be4bfdb6e10c2c3797a021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c572ebbbb5925952d43d3e8ee9e9b51182df7a1667be4bfdb6e10c2c3797a021->enter($__internal_c572ebbbb5925952d43d3e8ee9e9b51182df7a1667be4bfdb6e10c2c3797a021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b357afd2d88943015d6208403360d221538149a7ffe775d5b97b23d893996b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b357afd2d88943015d6208403360d221538149a7ffe775d5b97b23d893996b2->enter($__internal_8b357afd2d88943015d6208403360d221538149a7ffe775d5b97b23d893996b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b357afd2d88943015d6208403360d221538149a7ffe775d5b97b23d893996b2->leave($__internal_8b357afd2d88943015d6208403360d221538149a7ffe775d5b97b23d893996b2_prof);

        
        $__internal_c572ebbbb5925952d43d3e8ee9e9b51182df7a1667be4bfdb6e10c2c3797a021->leave($__internal_c572ebbbb5925952d43d3e8ee9e9b51182df7a1667be4bfdb6e10c2c3797a021_prof);

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
", "@Twig/layout.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
