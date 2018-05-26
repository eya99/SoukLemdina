<?php

/* SocialBundle:Profile:search.html.twig */
class __TwigTemplate_4e0c103f0cfe708478c3306fc4c58a32aca48e6986f5934c460ac00ae6496cb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "SocialBundle:Profile:search.html.twig", 1);
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
        $__internal_b0fec9036736906245ce05c16af58fbfc86951b3c5ed6bdae517e5af2cfe3f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0fec9036736906245ce05c16af58fbfc86951b3c5ed6bdae517e5af2cfe3f68->enter($__internal_b0fec9036736906245ce05c16af58fbfc86951b3c5ed6bdae517e5af2cfe3f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Profile:search.html.twig"));

        $__internal_46164d71ad68c88d602e7afa4d9ff57564df5f172808d240a6d423840adb567c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46164d71ad68c88d602e7afa4d9ff57564df5f172808d240a6d423840adb567c->enter($__internal_46164d71ad68c88d602e7afa4d9ff57564df5f172808d240a6d423840adb567c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Profile:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0fec9036736906245ce05c16af58fbfc86951b3c5ed6bdae517e5af2cfe3f68->leave($__internal_b0fec9036736906245ce05c16af58fbfc86951b3c5ed6bdae517e5af2cfe3f68_prof);

        
        $__internal_46164d71ad68c88d602e7afa4d9ff57564df5f172808d240a6d423840adb567c->leave($__internal_46164d71ad68c88d602e7afa4d9ff57564df5f172808d240a6d423840adb567c_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_be2bd7df16374b166f25bbee42b67a64247da031619b1b1d3d68b4b56d9ecbf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2bd7df16374b166f25bbee42b67a64247da031619b1b1d3d68b4b56d9ecbf2->enter($__internal_be2bd7df16374b166f25bbee42b67a64247da031619b1b1d3d68b4b56d9ecbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a04f851440edab74ea7dd22ce01c79409c03750c3f5a17003f740b92cbca5efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04f851440edab74ea7dd22ce01c79409c03750c3f5a17003f740b92cbca5efb->enter($__internal_a04f851440edab74ea7dd22ce01c79409c03750c3f5a17003f740b92cbca5efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <title>Recherche des Artisans</title>
";
        
        $__internal_a04f851440edab74ea7dd22ce01c79409c03750c3f5a17003f740b92cbca5efb->leave($__internal_a04f851440edab74ea7dd22ce01c79409c03750c3f5a17003f740b92cbca5efb_prof);

        
        $__internal_be2bd7df16374b166f25bbee42b67a64247da031619b1b1d3d68b4b56d9ecbf2->leave($__internal_be2bd7df16374b166f25bbee42b67a64247da031619b1b1d3d68b4b56d9ecbf2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b020e127aefda24fc25fbaefca6658e684ede2209617886f9e0c772284ea1cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b020e127aefda24fc25fbaefca6658e684ede2209617886f9e0c772284ea1cd3->enter($__internal_b020e127aefda24fc25fbaefca6658e684ede2209617886f9e0c772284ea1cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72dfc76afa855aadef7cad1dc80ef6f1624bce8399668079c0896f54e345df2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72dfc76afa855aadef7cad1dc80ef6f1624bce8399668079c0896f54e345df2f->enter($__internal_72dfc76afa855aadef7cad1dc80ef6f1624bce8399668079c0896f54e345df2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_72dfc76afa855aadef7cad1dc80ef6f1624bce8399668079c0896f54e345df2f->leave($__internal_72dfc76afa855aadef7cad1dc80ef6f1624bce8399668079c0896f54e345df2f_prof);

        
        $__internal_b020e127aefda24fc25fbaefca6658e684ede2209617886f9e0c772284ea1cd3->leave($__internal_b020e127aefda24fc25fbaefca6658e684ede2209617886f9e0c772284ea1cd3_prof);

    }

    public function getTemplateName()
    {
        return "SocialBundle:Profile:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 56,  149 => 55,  140 => 51,  135 => 48,  128 => 44,  123 => 41,  116 => 37,  111 => 34,  109 => 33,  105 => 32,  101 => 30,  98 => 29,  94 => 28,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
{% endblock %}", "SocialBundle:Profile:search.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SocialBundle/Resources/views/Profile/search.html.twig");
    }
}
