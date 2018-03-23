<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_0dd2f8d05fc64b2dad82e4dca118f84b76d45bd7dd25bfea8fa22ef1a82e44ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e2a1809e52b3535febe5cb706cb43236abe85306436368cc8e48873f723871d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2a1809e52b3535febe5cb706cb43236abe85306436368cc8e48873f723871d->enter($__internal_4e2a1809e52b3535febe5cb706cb43236abe85306436368cc8e48873f723871d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e2a1809e52b3535febe5cb706cb43236abe85306436368cc8e48873f723871d->leave($__internal_4e2a1809e52b3535febe5cb706cb43236abe85306436368cc8e48873f723871d_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2e34c1b28997bdc14dbaa5f45198c265a3a059c12ee7c102ca517235bc0318d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e34c1b28997bdc14dbaa5f45198c265a3a059c12ee7c102ca517235bc0318d->enter($__internal_c2e34c1b28997bdc14dbaa5f45198c265a3a059c12ee7c102ca517235bc0318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <meta http-equiv=\"refresh\" content=\"3;url=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_ajout_profile", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\"/>
";
        
        $__internal_c2e34c1b28997bdc14dbaa5f45198c265a3a059c12ee7c102ca517235bc0318d->leave($__internal_c2e34c1b28997bdc14dbaa5f45198c265a3a059c12ee7c102ca517235bc0318d_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_789791166c83f46fa3cfb1f63cf2eac49628b41f5f1e9285d0db61ce5f71c824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789791166c83f46fa3cfb1f63cf2eac49628b41f5f1e9285d0db61ce5f71c824->enter($__internal_789791166c83f46fa3cfb1f63cf2eac49628b41f5f1e9285d0db61ce5f71c824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "    &nbsp;&nbsp;&nbsp;&nbsp;<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 9
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 10
            echo "        &nbsp;&nbsp;&nbsp;&nbsp;<p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_789791166c83f46fa3cfb1f63cf2eac49628b41f5f1e9285d0db61ce5f71c824->leave($__internal_789791166c83f46fa3cfb1f63cf2eac49628b41f5f1e9285d0db61ce5f71c824_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  62 => 9,  57 => 8,  51 => 7,  41 => 3,  35 => 2,  11 => 1,);
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
{% block head %}
    <meta http-equiv=\"refresh\" content=\"3;url={{ path('social_ajout_profile',{'id':app.user.id}) }}\"/>
{% endblock %}
{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    &nbsp;&nbsp;&nbsp;&nbsp;<p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
        &nbsp;&nbsp;&nbsp;&nbsp;<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\src\\SUserBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
