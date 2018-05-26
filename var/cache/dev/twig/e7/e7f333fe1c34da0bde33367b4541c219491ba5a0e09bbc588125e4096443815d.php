<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_bc4d2e7735e66879dbe3b9cae1f56d89113b8ea500a5d6a699a33df7fe562e4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2baf6bf5a410d053bfb2e460f63e58496b98ba4f6c036591a350f52f188f5580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baf6bf5a410d053bfb2e460f63e58496b98ba4f6c036591a350f52f188f5580->enter($__internal_2baf6bf5a410d053bfb2e460f63e58496b98ba4f6c036591a350f52f188f5580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_c73011c33e353244115e072f73bfa25c743881ad37304ea707899e8e7ddde21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73011c33e353244115e072f73bfa25c743881ad37304ea707899e8e7ddde21c->enter($__internal_c73011c33e353244115e072f73bfa25c743881ad37304ea707899e8e7ddde21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_2baf6bf5a410d053bfb2e460f63e58496b98ba4f6c036591a350f52f188f5580->leave($__internal_2baf6bf5a410d053bfb2e460f63e58496b98ba4f6c036591a350f52f188f5580_prof);

        
        $__internal_c73011c33e353244115e072f73bfa25c743881ad37304ea707899e8e7ddde21c->leave($__internal_c73011c33e353244115e072f73bfa25c743881ad37304ea707899e8e7ddde21c_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_6a8b861476af7e31d1a4710ba990c96ce05341984c2bafe66911dfc7c7daf2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8b861476af7e31d1a4710ba990c96ce05341984c2bafe66911dfc7c7daf2bc->enter($__internal_6a8b861476af7e31d1a4710ba990c96ce05341984c2bafe66911dfc7c7daf2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_5df8b64ac0433a07a23c595600448c3b956de2e042b83f73c13bfdee7fecbe9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df8b64ac0433a07a23c595600448c3b956de2e042b83f73c13bfdee7fecbe9c->enter($__internal_5df8b64ac0433a07a23c595600448c3b956de2e042b83f73c13bfdee7fecbe9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5df8b64ac0433a07a23c595600448c3b956de2e042b83f73c13bfdee7fecbe9c->leave($__internal_5df8b64ac0433a07a23c595600448c3b956de2e042b83f73c13bfdee7fecbe9c_prof);

        
        $__internal_6a8b861476af7e31d1a4710ba990c96ce05341984c2bafe66911dfc7c7daf2bc->leave($__internal_6a8b861476af7e31d1a4710ba990c96ce05341984c2bafe66911dfc7c7daf2bc_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_75d7d82c4127bbdf937b910a7b31e7d27349e4694b2fdfd588b87841234a1750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d7d82c4127bbdf937b910a7b31e7d27349e4694b2fdfd588b87841234a1750->enter($__internal_75d7d82c4127bbdf937b910a7b31e7d27349e4694b2fdfd588b87841234a1750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_f776cfdd1ca48396e6b63e4f333a7cab14696c2b031f68161bbf3fc820e8e459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f776cfdd1ca48396e6b63e4f333a7cab14696c2b031f68161bbf3fc820e8e459->enter($__internal_f776cfdd1ca48396e6b63e4f333a7cab14696c2b031f68161bbf3fc820e8e459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f776cfdd1ca48396e6b63e4f333a7cab14696c2b031f68161bbf3fc820e8e459->leave($__internal_f776cfdd1ca48396e6b63e4f333a7cab14696c2b031f68161bbf3fc820e8e459_prof);

        
        $__internal_75d7d82c4127bbdf937b910a7b31e7d27349e4694b2fdfd588b87841234a1750->leave($__internal_75d7d82c4127bbdf937b910a7b31e7d27349e4694b2fdfd588b87841234a1750_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_d467d7b1099ff49d95aa8dd0a4b298487b537cb5142d61a16a6d186d33104fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d467d7b1099ff49d95aa8dd0a4b298487b537cb5142d61a16a6d186d33104fea->enter($__internal_d467d7b1099ff49d95aa8dd0a4b298487b537cb5142d61a16a6d186d33104fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_0b56ec9b197cc2c8f7b785a1cdba54a511a8f21f2db2035799d8b8842d9cf1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b56ec9b197cc2c8f7b785a1cdba54a511a8f21f2db2035799d8b8842d9cf1b0->enter($__internal_0b56ec9b197cc2c8f7b785a1cdba54a511a8f21f2db2035799d8b8842d9cf1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0b56ec9b197cc2c8f7b785a1cdba54a511a8f21f2db2035799d8b8842d9cf1b0->leave($__internal_0b56ec9b197cc2c8f7b785a1cdba54a511a8f21f2db2035799d8b8842d9cf1b0_prof);

        
        $__internal_d467d7b1099ff49d95aa8dd0a4b298487b537cb5142d61a16a6d186d33104fea->leave($__internal_d467d7b1099ff49d95aa8dd0a4b298487b537cb5142d61a16a6d186d33104fea_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_ac0aa93be4f2289530c25468ac58017b9776a010a394480b5fc10110f0c6100d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0aa93be4f2289530c25468ac58017b9776a010a394480b5fc10110f0c6100d->enter($__internal_ac0aa93be4f2289530c25468ac58017b9776a010a394480b5fc10110f0c6100d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_d10fbf6cb52d3662d6aafe765809506f362c40d1c1734c1a5f9ee3be625a8793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10fbf6cb52d3662d6aafe765809506f362c40d1c1734c1a5f9ee3be625a8793->enter($__internal_d10fbf6cb52d3662d6aafe765809506f362c40d1c1734c1a5f9ee3be625a8793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if ((((isset($context["show_download_link"]) ? $context["show_download_link"] : $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d10fbf6cb52d3662d6aafe765809506f362c40d1c1734c1a5f9ee3be625a8793->leave($__internal_d10fbf6cb52d3662d6aafe765809506f362c40d1c1734c1a5f9ee3be625a8793_prof);

        
        $__internal_ac0aa93be4f2289530c25468ac58017b9776a010a394480b5fc10110f0c6100d->leave($__internal_ac0aa93be4f2289530c25468ac58017b9776a010a394480b5fc10110f0c6100d_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
