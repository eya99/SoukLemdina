<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_18083fa71081d6742988898d5777286571fa6f1da79cfaa7fdee735c06d20ae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_260fdd0799c24c922b44e9163f57e519f80f9d01f47058d034e12fa179aa48b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260fdd0799c24c922b44e9163f57e519f80f9d01f47058d034e12fa179aa48b8->enter($__internal_260fdd0799c24c922b44e9163f57e519f80f9d01f47058d034e12fa179aa48b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_549326d524e4cab40a43a790e8544f6e9b0e763e971a4c0a3ade45a811260179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549326d524e4cab40a43a790e8544f6e9b0e763e971a4c0a3ade45a811260179->enter($__internal_549326d524e4cab40a43a790e8544f6e9b0e763e971a4c0a3ade45a811260179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_260fdd0799c24c922b44e9163f57e519f80f9d01f47058d034e12fa179aa48b8->leave($__internal_260fdd0799c24c922b44e9163f57e519f80f9d01f47058d034e12fa179aa48b8_prof);

        
        $__internal_549326d524e4cab40a43a790e8544f6e9b0e763e971a4c0a3ade45a811260179->leave($__internal_549326d524e4cab40a43a790e8544f6e9b0e763e971a4c0a3ade45a811260179_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_074d5d50f2ec4d72550599b9fd1fcad19b204de8aa943cfb7f2627c9f9b2ef5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074d5d50f2ec4d72550599b9fd1fcad19b204de8aa943cfb7f2627c9f9b2ef5b->enter($__internal_074d5d50f2ec4d72550599b9fd1fcad19b204de8aa943cfb7f2627c9f9b2ef5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fde5a409c09525ac006f7ba3cf87f63e4ed55740befc52c95cf0353003346f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde5a409c09525ac006f7ba3cf87f63e4ed55740befc52c95cf0353003346f94->enter($__internal_fde5a409c09525ac006f7ba3cf87f63e4ed55740befc52c95cf0353003346f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_fde5a409c09525ac006f7ba3cf87f63e4ed55740befc52c95cf0353003346f94->leave($__internal_fde5a409c09525ac006f7ba3cf87f63e4ed55740befc52c95cf0353003346f94_prof);

        
        $__internal_074d5d50f2ec4d72550599b9fd1fcad19b204de8aa943cfb7f2627c9f9b2ef5b->leave($__internal_074d5d50f2ec4d72550599b9fd1fcad19b204de8aa943cfb7f2627c9f9b2ef5b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
