<?php

/* SocialBundle:Post:modifier.html.twig */
class __TwigTemplate_a5b2c3140fe7b26bbeded74b0a6682c12e663253b5a3ec7e01e1e92bd1f5e77f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "SocialBundle:Post:modifier.html.twig", 1);
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
        $__internal_5e5a87eb6cd61dfb57a89544cbcc2c861e64427c1bbd5f9695025538dd3a8ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e5a87eb6cd61dfb57a89544cbcc2c861e64427c1bbd5f9695025538dd3a8ed2->enter($__internal_5e5a87eb6cd61dfb57a89544cbcc2c861e64427c1bbd5f9695025538dd3a8ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Post:modifier.html.twig"));

        $__internal_20e308e7f48c49744c261ced50f65957c20daa8d0e1b318b6cad5effbd5bc963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e308e7f48c49744c261ced50f65957c20daa8d0e1b318b6cad5effbd5bc963->enter($__internal_20e308e7f48c49744c261ced50f65957c20daa8d0e1b318b6cad5effbd5bc963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Post:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e5a87eb6cd61dfb57a89544cbcc2c861e64427c1bbd5f9695025538dd3a8ed2->leave($__internal_5e5a87eb6cd61dfb57a89544cbcc2c861e64427c1bbd5f9695025538dd3a8ed2_prof);

        
        $__internal_20e308e7f48c49744c261ced50f65957c20daa8d0e1b318b6cad5effbd5bc963->leave($__internal_20e308e7f48c49744c261ced50f65957c20daa8d0e1b318b6cad5effbd5bc963_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_0cc2b86411f351b425235f15c8f274a38ecc14b39bc6b994752829118c6247d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc2b86411f351b425235f15c8f274a38ecc14b39bc6b994752829118c6247d2->enter($__internal_0cc2b86411f351b425235f15c8f274a38ecc14b39bc6b994752829118c6247d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24c7b9db69c797ef36dffdd8b7b28760b761dcdee17d0a59bb47f640596328e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c7b9db69c797ef36dffdd8b7b28760b761dcdee17d0a59bb47f640596328e7->enter($__internal_24c7b9db69c797ef36dffdd8b7b28760b761dcdee17d0a59bb47f640596328e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "        <title>Modification de publication</title>
";
        
        $__internal_24c7b9db69c797ef36dffdd8b7b28760b761dcdee17d0a59bb47f640596328e7->leave($__internal_24c7b9db69c797ef36dffdd8b7b28760b761dcdee17d0a59bb47f640596328e7_prof);

        
        $__internal_0cc2b86411f351b425235f15c8f274a38ecc14b39bc6b994752829118c6247d2->leave($__internal_0cc2b86411f351b425235f15c8f274a38ecc14b39bc6b994752829118c6247d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f1b729bfe26ec73653bf995c884c783e2d210d747228fb8865cb7a5b04e8eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1b729bfe26ec73653bf995c884c783e2d210d747228fb8865cb7a5b04e8eb0->enter($__internal_7f1b729bfe26ec73653bf995c884c783e2d210d747228fb8865cb7a5b04e8eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8acaee3ea4d694c274f8415724d4a10a0a0bcbf7209b22416e65dc131eb628e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acaee3ea4d694c274f8415724d4a10a0a0bcbf7209b22416e65dc131eb628e9->enter($__internal_8acaee3ea4d694c274f8415724d4a10a0a0bcbf7209b22416e65dc131eb628e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">
                                    <h3>Modifier votre publication</h3>
                                <div class=\"col_full\">
                                    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                </div>
                                <a title=\"Retour\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">
                                    Retourner au profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_8acaee3ea4d694c274f8415724d4a10a0a0bcbf7209b22416e65dc131eb628e9->leave($__internal_8acaee3ea4d694c274f8415724d4a10a0a0bcbf7209b22416e65dc131eb628e9_prof);

        
        $__internal_7f1b729bfe26ec73653bf995c884c783e2d210d747228fb8865cb7a5b04e8eb0->leave($__internal_7f1b729bfe26ec73653bf995c884c783e2d210d747228fb8865cb7a5b04e8eb0_prof);

    }

    public function getTemplateName()
    {
        return "SocialBundle:Post:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  87 => 18,  83 => 17,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
        <title>Modification de publication</title>
{% endblock %}
{% block body %}
    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">
                                    <h3>Modifier votre publication</h3>
                                <div class=\"col_full\">
                                    {{ form_start(form) }}
                                    {{ form_end(form) }}
                                </div>
                                <a title=\"Retour\" href=\"{{ path('social_check_profile',{'id':app.user.id}) }}\">
                                    Retourner au profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "SocialBundle:Post:modifier.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SocialBundle/Resources/views/Post/modifier.html.twig");
    }
}
