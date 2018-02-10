<?php

/* base.html.twig */
class __TwigTemplate_de3d05f7f9be6bbd41eeeb5239534af625f8fd2a92cacef65a07c948015fe9c9 extends Twig_Template
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
        $__internal_098e03b6b70ab1955737766e652a5b0fb5bb5aebcbc559308d54e2dd1049aaee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098e03b6b70ab1955737766e652a5b0fb5bb5aebcbc559308d54e2dd1049aaee->enter($__internal_098e03b6b70ab1955737766e652a5b0fb5bb5aebcbc559308d54e2dd1049aaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_09cc5f0946e2200f181698cfaff0d8cf5d88459df605f381362e337d58c39bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09cc5f0946e2200f181698cfaff0d8cf5d88459df605f381362e337d58c39bf6->enter($__internal_09cc5f0946e2200f181698cfaff0d8cf5d88459df605f381362e337d58c39bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_098e03b6b70ab1955737766e652a5b0fb5bb5aebcbc559308d54e2dd1049aaee->leave($__internal_098e03b6b70ab1955737766e652a5b0fb5bb5aebcbc559308d54e2dd1049aaee_prof);

        
        $__internal_09cc5f0946e2200f181698cfaff0d8cf5d88459df605f381362e337d58c39bf6->leave($__internal_09cc5f0946e2200f181698cfaff0d8cf5d88459df605f381362e337d58c39bf6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f727fcfc7e3b5f7b243d534470f6ad5a34652b15852f48b18dbe2fd73bfbab60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f727fcfc7e3b5f7b243d534470f6ad5a34652b15852f48b18dbe2fd73bfbab60->enter($__internal_f727fcfc7e3b5f7b243d534470f6ad5a34652b15852f48b18dbe2fd73bfbab60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7f4764ab2b63724db831dade9ad3e4ee7771985fa5373c4532120c35a62d497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f4764ab2b63724db831dade9ad3e4ee7771985fa5373c4532120c35a62d497->enter($__internal_d7f4764ab2b63724db831dade9ad3e4ee7771985fa5373c4532120c35a62d497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d7f4764ab2b63724db831dade9ad3e4ee7771985fa5373c4532120c35a62d497->leave($__internal_d7f4764ab2b63724db831dade9ad3e4ee7771985fa5373c4532120c35a62d497_prof);

        
        $__internal_f727fcfc7e3b5f7b243d534470f6ad5a34652b15852f48b18dbe2fd73bfbab60->leave($__internal_f727fcfc7e3b5f7b243d534470f6ad5a34652b15852f48b18dbe2fd73bfbab60_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa103afb2c4ca14c986fa6b382ae81411f2c88dfe4da6e9a696c57d8c3c669ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa103afb2c4ca14c986fa6b382ae81411f2c88dfe4da6e9a696c57d8c3c669ea->enter($__internal_fa103afb2c4ca14c986fa6b382ae81411f2c88dfe4da6e9a696c57d8c3c669ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_29987503759a1fb698656f93ebfd179259a3579d7248c868765fc7d3b21e8af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29987503759a1fb698656f93ebfd179259a3579d7248c868765fc7d3b21e8af6->enter($__internal_29987503759a1fb698656f93ebfd179259a3579d7248c868765fc7d3b21e8af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_29987503759a1fb698656f93ebfd179259a3579d7248c868765fc7d3b21e8af6->leave($__internal_29987503759a1fb698656f93ebfd179259a3579d7248c868765fc7d3b21e8af6_prof);

        
        $__internal_fa103afb2c4ca14c986fa6b382ae81411f2c88dfe4da6e9a696c57d8c3c669ea->leave($__internal_fa103afb2c4ca14c986fa6b382ae81411f2c88dfe4da6e9a696c57d8c3c669ea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b3b98d849a17879d8d6030cce705aa3231317c50d8c9f8f8bde45803685b390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3b98d849a17879d8d6030cce705aa3231317c50d8c9f8f8bde45803685b390->enter($__internal_2b3b98d849a17879d8d6030cce705aa3231317c50d8c9f8f8bde45803685b390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_373048451895336a08194d21c314ad7ae78401221b82e3aca29a0c18337c079d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373048451895336a08194d21c314ad7ae78401221b82e3aca29a0c18337c079d->enter($__internal_373048451895336a08194d21c314ad7ae78401221b82e3aca29a0c18337c079d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_373048451895336a08194d21c314ad7ae78401221b82e3aca29a0c18337c079d->leave($__internal_373048451895336a08194d21c314ad7ae78401221b82e3aca29a0c18337c079d_prof);

        
        $__internal_2b3b98d849a17879d8d6030cce705aa3231317c50d8c9f8f8bde45803685b390->leave($__internal_2b3b98d849a17879d8d6030cce705aa3231317c50d8c9f8f8bde45803685b390_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca262e6449a76f985adc2c1e07bc41094973ebe51f5df4bb662cf222fa6e8778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca262e6449a76f985adc2c1e07bc41094973ebe51f5df4bb662cf222fa6e8778->enter($__internal_ca262e6449a76f985adc2c1e07bc41094973ebe51f5df4bb662cf222fa6e8778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9854a45cff806613281c33dc943a3cbc78490e39a85eb7b8c0e7fd4e34f3bd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9854a45cff806613281c33dc943a3cbc78490e39a85eb7b8c0e7fd4e34f3bd06->enter($__internal_9854a45cff806613281c33dc943a3cbc78490e39a85eb7b8c0e7fd4e34f3bd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9854a45cff806613281c33dc943a3cbc78490e39a85eb7b8c0e7fd4e34f3bd06->leave($__internal_9854a45cff806613281c33dc943a3cbc78490e39a85eb7b8c0e7fd4e34f3bd06_prof);

        
        $__internal_ca262e6449a76f985adc2c1e07bc41094973ebe51f5df4bb662cf222fa6e8778->leave($__internal_ca262e6449a76f985adc2c1e07bc41094973ebe51f5df4bb662cf222fa6e8778_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\app\\Resources\\views\\base.html.twig");
    }
}
