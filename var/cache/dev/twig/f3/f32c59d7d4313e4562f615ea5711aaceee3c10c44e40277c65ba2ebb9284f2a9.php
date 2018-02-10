<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_b49b09150cb62f2c9fbdb473ef02d4fa891096a3b71ab3f46b766e1249b423c0 extends Twig_Template
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
        $__internal_d64fb9e89ad3a79cef52c0784e8c6e986041c003c065c5eee83d82ba37b90ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64fb9e89ad3a79cef52c0784e8c6e986041c003c065c5eee83d82ba37b90ad4->enter($__internal_d64fb9e89ad3a79cef52c0784e8c6e986041c003c065c5eee83d82ba37b90ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_93b5c51ef7e1a8e389fa3f65fef52d1ade68277597e2ee1cbe11fc0e60cf96c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b5c51ef7e1a8e389fa3f65fef52d1ade68277597e2ee1cbe11fc0e60cf96c1->enter($__internal_93b5c51ef7e1a8e389fa3f65fef52d1ade68277597e2ee1cbe11fc0e60cf96c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_d64fb9e89ad3a79cef52c0784e8c6e986041c003c065c5eee83d82ba37b90ad4->leave($__internal_d64fb9e89ad3a79cef52c0784e8c6e986041c003c065c5eee83d82ba37b90ad4_prof);

        
        $__internal_93b5c51ef7e1a8e389fa3f65fef52d1ade68277597e2ee1cbe11fc0e60cf96c1->leave($__internal_93b5c51ef7e1a8e389fa3f65fef52d1ade68277597e2ee1cbe11fc0e60cf96c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d07e04e7fe918a7405c290fed736c0e731dbd01db652910c1ec655f306906c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07e04e7fe918a7405c290fed736c0e731dbd01db652910c1ec655f306906c1a->enter($__internal_d07e04e7fe918a7405c290fed736c0e731dbd01db652910c1ec655f306906c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4a40cf4016abc9349f89b587e0e202cdb3f9ce0d6f24d032242147c70f417fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a40cf4016abc9349f89b587e0e202cdb3f9ce0d6f24d032242147c70f417fe->enter($__internal_f4a40cf4016abc9349f89b587e0e202cdb3f9ce0d6f24d032242147c70f417fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f4a40cf4016abc9349f89b587e0e202cdb3f9ce0d6f24d032242147c70f417fe->leave($__internal_f4a40cf4016abc9349f89b587e0e202cdb3f9ce0d6f24d032242147c70f417fe_prof);

        
        $__internal_d07e04e7fe918a7405c290fed736c0e731dbd01db652910c1ec655f306906c1a->leave($__internal_d07e04e7fe918a7405c290fed736c0e731dbd01db652910c1ec655f306906c1a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7de0f2645ece5181fbe83a71c50d685aac110b73a435a72dad1e3fc2b71a8d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de0f2645ece5181fbe83a71c50d685aac110b73a435a72dad1e3fc2b71a8d59->enter($__internal_7de0f2645ece5181fbe83a71c50d685aac110b73a435a72dad1e3fc2b71a8d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a57e58657d4ea366c865019f7846d6766cc5ec93959d74be519ff42ee5a46846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57e58657d4ea366c865019f7846d6766cc5ec93959d74be519ff42ee5a46846->enter($__internal_a57e58657d4ea366c865019f7846d6766cc5ec93959d74be519ff42ee5a46846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a57e58657d4ea366c865019f7846d6766cc5ec93959d74be519ff42ee5a46846->leave($__internal_a57e58657d4ea366c865019f7846d6766cc5ec93959d74be519ff42ee5a46846_prof);

        
        $__internal_7de0f2645ece5181fbe83a71c50d685aac110b73a435a72dad1e3fc2b71a8d59->leave($__internal_7de0f2645ece5181fbe83a71c50d685aac110b73a435a72dad1e3fc2b71a8d59_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4989a38007bce4a446c1f6baf8b1375b017ade675e5622528c9def7f52882a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4989a38007bce4a446c1f6baf8b1375b017ade675e5622528c9def7f52882a8->enter($__internal_b4989a38007bce4a446c1f6baf8b1375b017ade675e5622528c9def7f52882a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b4c64c7d673774d5771d318e9cbcfaff47a476e1446ee1147385ca1b9d8da50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4c64c7d673774d5771d318e9cbcfaff47a476e1446ee1147385ca1b9d8da50->enter($__internal_9b4c64c7d673774d5771d318e9cbcfaff47a476e1446ee1147385ca1b9d8da50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b4c64c7d673774d5771d318e9cbcfaff47a476e1446ee1147385ca1b9d8da50->leave($__internal_9b4c64c7d673774d5771d318e9cbcfaff47a476e1446ee1147385ca1b9d8da50_prof);

        
        $__internal_b4989a38007bce4a446c1f6baf8b1375b017ade675e5622528c9def7f52882a8->leave($__internal_b4989a38007bce4a446c1f6baf8b1375b017ade675e5622528c9def7f52882a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
