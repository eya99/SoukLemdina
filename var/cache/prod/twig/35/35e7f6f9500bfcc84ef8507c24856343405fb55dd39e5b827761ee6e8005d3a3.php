<?php

/* @Social/Profile/search.html.twig */
class __TwigTemplate_b964421371f275a7cc616a354e9ce73149ed985e5046682c1bdd640404b00504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "@Social/Profile/search.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a47598d7d3355e2852c1ec5fbd9f3dc0b9fd726f4997c1da33002beb845d831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a47598d7d3355e2852c1ec5fbd9f3dc0b9fd726f4997c1da33002beb845d831->enter($__internal_3a47598d7d3355e2852c1ec5fbd9f3dc0b9fd726f4997c1da33002beb845d831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Social/Profile/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a47598d7d3355e2852c1ec5fbd9f3dc0b9fd726f4997c1da33002beb845d831->leave($__internal_3a47598d7d3355e2852c1ec5fbd9f3dc0b9fd726f4997c1da33002beb845d831_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_79e8dfd67064b484a98775f76c447bf68d02b7af0f3c061293542194af1c92d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e8dfd67064b484a98775f76c447bf68d02b7af0f3c061293542194af1c92d9->enter($__internal_79e8dfd67064b484a98775f76c447bf68d02b7af0f3c061293542194af1c92d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <title>Recherche des Artisans</title>
";
        
        $__internal_79e8dfd67064b484a98775f76c447bf68d02b7af0f3c061293542194af1c92d9->leave($__internal_79e8dfd67064b484a98775f76c447bf68d02b7af0f3c061293542194af1c92d9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fe8ddd21ec093967c719949556990ff8a6c946dbf730684d52b1a2a95498496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe8ddd21ec093967c719949556990ff8a6c946dbf730684d52b1a2a95498496->enter($__internal_3fe8ddd21ec093967c719949556990ff8a6c946dbf730684d52b1a2a95498496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <h3 style=\"text-align: center\">Résultats de la Recherche</h3>
                        <div class=\"panel-body\" style=\"padding: 40px;\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-striped\">
                                    <colgroup>
                                        <col class=\"col-xs-1\">
                                        <col class=\"col-xs-7\">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Artisan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 29
            echo "                                        ";
            if (($this->getAttribute($this->getAttribute($context["profile"], "idUser", array()), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 30
                echo "                                            <tr>
                                                <td>
                                                    <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute($context["profile"], "idUser", array()), "id", array()))), "html", null, true);
                echo "\">
                                                        ";
                // line 33
                if ($this->getAttribute($context["profile"], "image", array())) {
                    // line 34
                    echo "                                                            <img
                                                                    class=\"alignright img-circle img-thumbnail
                                                                                    notopmargin nobottommargin fish\"
                                                                    src=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["profile"], "image", array()))), "html", null, true);
                    echo "\"
                                                                    alt=\"Image du profile\"
                                                                    style=\"max-width: 74px;\">
                                                        ";
                } else {
                    // line 41
                    echo "                                                            <img
                                                                    class=\"alignright img-circle img-thumbnail
                                                                                    notopmargin nobottommargin fish\"
                                                                    src=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/icons/avatar.jpg"), "html", null, true);
                    echo "\"
                                                                    alt=\"Avatar\"
                                                                    style=\"max-width: 74px;\">
                                                        ";
                }
                // line 48
                echo "                                                    </a>
                                                </td>
                                                <td>
                                                    <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute($context["profile"], "idUser", array()), "id", array()))), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["profile"], "idUser", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute($context["profile"], "idUser", array()), "lastname", array())), "html", null, true);
                echo "</strong></a>
                                                </td>
                                            </tr>
                                        ";
            }
            // line 55
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_3fe8ddd21ec093967c719949556990ff8a6c946dbf730684d52b1a2a95498496->leave($__internal_3fe8ddd21ec093967c719949556990ff8a6c946dbf730684d52b1a2a95498496_prof);

    }

    public function getTemplateName()
    {
        return "@Social/Profile/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  134 => 55,  125 => 51,  120 => 48,  113 => 44,  108 => 41,  101 => 37,  96 => 34,  94 => 33,  90 => 32,  86 => 30,  83 => 29,  79 => 28,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SUserBundle::layout.html.twig\" %}
{% block head %}
    <title>Recherche des Artisans</title>
{% endblock %}
{% block body %}
    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <h3 style=\"text-align: center\">Résultats de la Recherche</h3>
                        <div class=\"panel-body\" style=\"padding: 40px;\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-striped\">
                                    <colgroup>
                                        <col class=\"col-xs-1\">
                                        <col class=\"col-xs-7\">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Artisan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for profile in profiles %}
                                        {% if profile.idUser.id != app.user.id %}
                                            <tr>
                                                <td>
                                                    <a href=\"{{ path('social_check_profile',{'id':profile.idUser.id}) }}\">
                                                        {% if profile.image %}
                                                            <img
                                                                    class=\"alignright img-circle img-thumbnail
                                                                                    notopmargin nobottommargin fish\"
                                                                    src=\"{{ asset('uploads/images/' ~ profile.image) }}\"
                                                                    alt=\"Image du profile\"
                                                                    style=\"max-width: 74px;\">
                                                        {% else %}
                                                            <img
                                                                    class=\"alignright img-circle img-thumbnail
                                                                                    notopmargin nobottommargin fish\"
                                                                    src=\"{{ asset('Template/images/icons/avatar.jpg') }}\"
                                                                    alt=\"Avatar\"
                                                                    style=\"max-width: 74px;\">
                                                        {% endif %}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href=\"{{ path('social_check_profile',{'id':profile.idUser.id}) }}\"><strong>{{ profile.idUser.firstname ~' '~ profile.idUser.lastname }}</strong></a>
                                                </td>
                                            </tr>
                                        {% endif %}
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@Social/Profile/search.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SocialBundle/Resources/views/Profile/search.html.twig");
    }
}
