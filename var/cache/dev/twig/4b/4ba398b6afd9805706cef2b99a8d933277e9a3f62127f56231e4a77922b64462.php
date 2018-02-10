<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_0fc33afded129d2b6eec5057211689f1772b6bdca400e66140dfb13d59d09496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd716310235ace0b56307ce4389a0773343ecec46129e9fe15d426cfb8cc3606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd716310235ace0b56307ce4389a0773343ecec46129e9fe15d426cfb8cc3606->enter($__internal_bd716310235ace0b56307ce4389a0773343ecec46129e9fe15d426cfb8cc3606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_ed55ccfd9260d78cfe3d0312413bf65a7879f73090c21ec81e577b076497df4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed55ccfd9260d78cfe3d0312413bf65a7879f73090c21ec81e577b076497df4f->enter($__internal_ed55ccfd9260d78cfe3d0312413bf65a7879f73090c21ec81e577b076497df4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd716310235ace0b56307ce4389a0773343ecec46129e9fe15d426cfb8cc3606->leave($__internal_bd716310235ace0b56307ce4389a0773343ecec46129e9fe15d426cfb8cc3606_prof);

        
        $__internal_ed55ccfd9260d78cfe3d0312413bf65a7879f73090c21ec81e577b076497df4f->leave($__internal_ed55ccfd9260d78cfe3d0312413bf65a7879f73090c21ec81e577b076497df4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa7635fc158996a6747cac66ae7066f5d3b7d911daa3bb03e6302efce8cfa43e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7635fc158996a6747cac66ae7066f5d3b7d911daa3bb03e6302efce8cfa43e->enter($__internal_aa7635fc158996a6747cac66ae7066f5d3b7d911daa3bb03e6302efce8cfa43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d28f4b5d485035648cd0c89776f56988aabc4ea5a84a7dc5e5f7c5fa2d14fe8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28f4b5d485035648cd0c89776f56988aabc4ea5a84a7dc5e5f7c5fa2d14fe8c->enter($__internal_d28f4b5d485035648cd0c89776f56988aabc4ea5a84a7dc5e5f7c5fa2d14fe8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_d28f4b5d485035648cd0c89776f56988aabc4ea5a84a7dc5e5f7c5fa2d14fe8c->leave($__internal_d28f4b5d485035648cd0c89776f56988aabc4ea5a84a7dc5e5f7c5fa2d14fe8c_prof);

        
        $__internal_aa7635fc158996a6747cac66ae7066f5d3b7d911daa3bb03e6302efce8cfa43e->leave($__internal_aa7635fc158996a6747cac66ae7066f5d3b7d911daa3bb03e6302efce8cfa43e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
