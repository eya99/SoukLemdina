<?php

/* LocalBundle:Local:ajout.html.twig */
class __TwigTemplate_35ac6b367acc8adff7851f808d92bc321467d6b08361937923b4a1fa7a8f72ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "LocalBundle:Local:ajout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56d09ebe1e443c69401eff284cc2dabdada238713e896188d4d8d2dbc082de0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d09ebe1e443c69401eff284cc2dabdada238713e896188d4d8d2dbc082de0e->enter($__internal_56d09ebe1e443c69401eff284cc2dabdada238713e896188d4d8d2dbc082de0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56d09ebe1e443c69401eff284cc2dabdada238713e896188d4d8d2dbc082de0e->leave($__internal_56d09ebe1e443c69401eff284cc2dabdada238713e896188d4d8d2dbc082de0e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5c1fb40adae86b84fc5a55bee449fb41ffa52d8d87581ebfa9c6693e04d0a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c1fb40adae86b84fc5a55bee449fb41ffa52d8d87581ebfa9c6693e04d0a1f->enter($__internal_d5c1fb40adae86b84fc5a55bee449fb41ffa52d8d87581ebfa9c6693e04d0a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Local";
        
        $__internal_d5c1fb40adae86b84fc5a55bee449fb41ffa52d8d87581ebfa9c6693e04d0a1f->leave($__internal_d5c1fb40adae86b84fc5a55bee449fb41ffa52d8d87581ebfa9c6693e04d0a1f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4429b8148fadb8a1f3502c3360a0910f839ca5152b7deb6e90274b5924f020fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4429b8148fadb8a1f3502c3360a0910f839ca5152b7deb6e90274b5924f020fa->enter($__internal_4429b8148fadb8a1f3502c3360a0910f839ca5152b7deb6e90274b5924f020fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4429b8148fadb8a1f3502c3360a0910f839ca5152b7deb6e90274b5924f020fa->leave($__internal_4429b8148fadb8a1f3502c3360a0910f839ca5152b7deb6e90274b5924f020fa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d7ae5b8b46fd11ffc5bceef068e0fd00f51a772b54a450381b10ed9d6b2c589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7ae5b8b46fd11ffc5bceef068e0fd00f51a772b54a450381b10ed9d6b2c589->enter($__internal_0d7ae5b8b46fd11ffc5bceef068e0fd00f51a772b54a450381b10ed9d6b2c589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Ajouter un local</h1>

        </div>

    </section>
    <section id=\"content\">
        <div class=\"content-wrap \" >
            <div class=\"container clearfix\" style=\"width:30%;\">
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"line line-sm\"></div>
                <div class=\"center\">
                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

                    <input type=\"submit\" value=\"Ajouter\" class=\"button button-3d button-black nomargin\">
                </div>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>

    </section>

";
        
        $__internal_0d7ae5b8b46fd11ffc5bceef068e0fd00f51a772b54a450381b10ed9d6b2c589->leave($__internal_0d7ae5b8b46fd11ffc5bceef068e0fd00f51a772b54a450381b10ed9d6b2c589_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1df5d61c5cf3886fd7f6a3534913389727d3b86fe03fe443ff58ced5a9ff99a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df5d61c5cf3886fd7f6a3534913389727d3b86fe03fe443ff58ced5a9ff99a5->enter($__internal_1df5d61c5cf3886fd7f6a3534913389727d3b86fe03fe443ff58ced5a9ff99a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1df5d61c5cf3886fd7f6a3534913389727d3b86fe03fe443ff58ced5a9ff99a5->leave($__internal_1df5d61c5cf3886fd7f6a3534913389727d3b86fe03fe443ff58ced5a9ff99a5_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Local:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 31,  93 => 24,  86 => 20,  79 => 16,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SUserBundle::layout.html.twig' %}
  {% block title %}Local{% endblock %}
    {% block stylesheets %}{% endblock %}
{% block body %}
    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Ajouter un local</h1>

        </div>

    </section>
    <section id=\"content\">
        <div class=\"content-wrap \" >
            <div class=\"container clearfix\" style=\"width:30%;\">
                {{ form_start(form) }}

                <div class=\"line line-sm\"></div>
                <div class=\"center\">
                    {{ form(form) }}

                    <input type=\"submit\" value=\"Ajouter\" class=\"button button-3d button-black nomargin\">
                </div>
                {{ form_end(form) }}
            </div>
        </div>

    </section>

{% endblock %}
{% block javascripts %}{% endblock %}
", "LocalBundle:Local:ajout.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Local/ajout.html.twig");
    }
}
