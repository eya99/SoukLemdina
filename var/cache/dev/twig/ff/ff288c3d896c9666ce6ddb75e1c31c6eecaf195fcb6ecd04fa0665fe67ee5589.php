<?php

/* ::base.html.twig */
class __TwigTemplate_56b700c02a8a27161d6425e5824e7211fdfa6b0273db6fd628e615e41bbc5262 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_111897b1c14a40868e6ef6ba23ca13bf71132fe1d3052c4c10dfbf8312c224ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111897b1c14a40868e6ef6ba23ca13bf71132fe1d3052c4c10dfbf8312c224ba->enter($__internal_111897b1c14a40868e6ef6ba23ca13bf71132fe1d3052c4c10dfbf8312c224ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_991c2e7f75873f6ae6bc29c03fc01a27e693a9d29b5b974f38b84171dab3ce21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991c2e7f75873f6ae6bc29c03fc01a27e693a9d29b5b974f38b84171dab3ce21->enter($__internal_991c2e7f75873f6ae6bc29c03fc01a27e693a9d29b5b974f38b84171dab3ce21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_111897b1c14a40868e6ef6ba23ca13bf71132fe1d3052c4c10dfbf8312c224ba->leave($__internal_111897b1c14a40868e6ef6ba23ca13bf71132fe1d3052c4c10dfbf8312c224ba_prof);

        
        $__internal_991c2e7f75873f6ae6bc29c03fc01a27e693a9d29b5b974f38b84171dab3ce21->leave($__internal_991c2e7f75873f6ae6bc29c03fc01a27e693a9d29b5b974f38b84171dab3ce21_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c06de98d29aa27b48ec9e6a6020e22b69a98146621a3139fb5f612a2f300efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c06de98d29aa27b48ec9e6a6020e22b69a98146621a3139fb5f612a2f300efd->enter($__internal_5c06de98d29aa27b48ec9e6a6020e22b69a98146621a3139fb5f612a2f300efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8477d82cb87a6d5c80532355c458ed206f63448115e36d1665cc7802d367f0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8477d82cb87a6d5c80532355c458ed206f63448115e36d1665cc7802d367f0d2->enter($__internal_8477d82cb87a6d5c80532355c458ed206f63448115e36d1665cc7802d367f0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8477d82cb87a6d5c80532355c458ed206f63448115e36d1665cc7802d367f0d2->leave($__internal_8477d82cb87a6d5c80532355c458ed206f63448115e36d1665cc7802d367f0d2_prof);

        
        $__internal_5c06de98d29aa27b48ec9e6a6020e22b69a98146621a3139fb5f612a2f300efd->leave($__internal_5c06de98d29aa27b48ec9e6a6020e22b69a98146621a3139fb5f612a2f300efd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ab2b76484a867ef323a556ceecf4e84770482a16105f784fe779ba38c55157b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab2b76484a867ef323a556ceecf4e84770482a16105f784fe779ba38c55157b->enter($__internal_9ab2b76484a867ef323a556ceecf4e84770482a16105f784fe779ba38c55157b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_074d65bc40697b38890807493cd611300257b4afdedfb5bc53c8c4c13f2cd27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074d65bc40697b38890807493cd611300257b4afdedfb5bc53c8c4c13f2cd27d->enter($__internal_074d65bc40697b38890807493cd611300257b4afdedfb5bc53c8c4c13f2cd27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_074d65bc40697b38890807493cd611300257b4afdedfb5bc53c8c4c13f2cd27d->leave($__internal_074d65bc40697b38890807493cd611300257b4afdedfb5bc53c8c4c13f2cd27d_prof);

        
        $__internal_9ab2b76484a867ef323a556ceecf4e84770482a16105f784fe779ba38c55157b->leave($__internal_9ab2b76484a867ef323a556ceecf4e84770482a16105f784fe779ba38c55157b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa68812e5f490adc993a39f4440b28648866176a567d497a5cfea9284e61632a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa68812e5f490adc993a39f4440b28648866176a567d497a5cfea9284e61632a->enter($__internal_fa68812e5f490adc993a39f4440b28648866176a567d497a5cfea9284e61632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c6e1fe52332ed07ba8f65daaa4d725992ecbf43586349ecc1653bad5ea862fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6e1fe52332ed07ba8f65daaa4d725992ecbf43586349ecc1653bad5ea862fa->enter($__internal_0c6e1fe52332ed07ba8f65daaa4d725992ecbf43586349ecc1653bad5ea862fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0c6e1fe52332ed07ba8f65daaa4d725992ecbf43586349ecc1653bad5ea862fa->leave($__internal_0c6e1fe52332ed07ba8f65daaa4d725992ecbf43586349ecc1653bad5ea862fa_prof);

        
        $__internal_fa68812e5f490adc993a39f4440b28648866176a567d497a5cfea9284e61632a->leave($__internal_fa68812e5f490adc993a39f4440b28648866176a567d497a5cfea9284e61632a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8fcdd47ea33205c0ed70067d7171cad6575917ca470d5aa30d557444bca1eb0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcdd47ea33205c0ed70067d7171cad6575917ca470d5aa30d557444bca1eb0a->enter($__internal_8fcdd47ea33205c0ed70067d7171cad6575917ca470d5aa30d557444bca1eb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4a4efe6a589b5099fbd6e4f06609868956166d16d75199972688e88b66760d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4efe6a589b5099fbd6e4f06609868956166d16d75199972688e88b66760d53->enter($__internal_4a4efe6a589b5099fbd6e4f06609868956166d16d75199972688e88b66760d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a4efe6a589b5099fbd6e4f06609868956166d16d75199972688e88b66760d53->leave($__internal_4a4efe6a589b5099fbd6e4f06609868956166d16d75199972688e88b66760d53_prof);

        
        $__internal_8fcdd47ea33205c0ed70067d7171cad6575917ca470d5aa30d557444bca1eb0a->leave($__internal_8fcdd47ea33205c0ed70067d7171cad6575917ca470d5aa30d557444bca1eb0a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/opt/lampp/htdocs/SoukLemdina/app/Resources/views/base.html.twig");
    }
}
