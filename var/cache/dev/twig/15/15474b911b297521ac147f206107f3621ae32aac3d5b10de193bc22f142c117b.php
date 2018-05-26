<?php

/* SUserBundle::index.html.twig */
class __TwigTemplate_3167bc67e5ef00402b972974b78050ef485b53897bb4714199454c3e22291bed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "SUserBundle::index.html.twig", 1);
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
        $__internal_74cf46dd1cfc21f1deede2b95fcccff41935e4d8dabf61509f0445ed493ba57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74cf46dd1cfc21f1deede2b95fcccff41935e4d8dabf61509f0445ed493ba57e->enter($__internal_74cf46dd1cfc21f1deede2b95fcccff41935e4d8dabf61509f0445ed493ba57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUserBundle::index.html.twig"));

        $__internal_fcfda36a92546e4c18f33d16c9e86126ee6a05fff699a0df3be40ca6b4cd5efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfda36a92546e4c18f33d16c9e86126ee6a05fff699a0df3be40ca6b4cd5efc->enter($__internal_fcfda36a92546e4c18f33d16c9e86126ee6a05fff699a0df3be40ca6b4cd5efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUserBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74cf46dd1cfc21f1deede2b95fcccff41935e4d8dabf61509f0445ed493ba57e->leave($__internal_74cf46dd1cfc21f1deede2b95fcccff41935e4d8dabf61509f0445ed493ba57e_prof);

        
        $__internal_fcfda36a92546e4c18f33d16c9e86126ee6a05fff699a0df3be40ca6b4cd5efc->leave($__internal_fcfda36a92546e4c18f33d16c9e86126ee6a05fff699a0df3be40ca6b4cd5efc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc80d9d477177dcdec5b4c36c0e9cd639d9ec4fbbc24aadac1f1f99b0fc8018c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc80d9d477177dcdec5b4c36c0e9cd639d9ec4fbbc24aadac1f1f99b0fc8018c->enter($__internal_fc80d9d477177dcdec5b4c36c0e9cd639d9ec4fbbc24aadac1f1f99b0fc8018c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ef0bff6c6b5e53378d7b7d30d81d821fb054a23426a7c597267731114a9be96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef0bff6c6b5e53378d7b7d30d81d821fb054a23426a7c597267731114a9be96->enter($__internal_5ef0bff6c6b5e53378d7b7d30d81d821fb054a23426a7c597267731114a9be96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Welcome to Souk Lemdina!</title>

";
        
        $__internal_5ef0bff6c6b5e53378d7b7d30d81d821fb054a23426a7c597267731114a9be96->leave($__internal_5ef0bff6c6b5e53378d7b7d30d81d821fb054a23426a7c597267731114a9be96_prof);

        
        $__internal_fc80d9d477177dcdec5b4c36c0e9cd639d9ec4fbbc24aadac1f1f99b0fc8018c->leave($__internal_fc80d9d477177dcdec5b4c36c0e9cd639d9ec4fbbc24aadac1f1f99b0fc8018c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_459c11dc262957d9e0bdd9508ed210cb4cd97c40559fb84eccd5d84ec6627bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459c11dc262957d9e0bdd9508ed210cb4cd97c40559fb84eccd5d84ec6627bdb->enter($__internal_459c11dc262957d9e0bdd9508ed210cb4cd97c40559fb84eccd5d84ec6627bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24884d961080086fa6d6685fc24595da9ee5473587e053a6d6e3502474043c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24884d961080086fa6d6685fc24595da9ee5473587e053a6d6e3502474043c50->enter($__internal_24884d961080086fa6d6685fc24595da9ee5473587e053a6d6e3502474043c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <section id=\"slider\" class=\"swiper_wrapper customjs with-header canvas-slider canvas-slider-grid clearfix\">

        <div class=\"swiper-container swiper-parent\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\"
                     style=\"background: url('";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/gallerie/1.jpg"), "html", null, true);
        echo "') center center; background-size:cover;\">
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\">
                        <div class=\"overlay\">
                            <div class=\"text-overlay\">
                                <div class=\"text-overlay-title\">
                                    <h3>Accueil</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"swiper-container swiper-nested-2\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\"
                                 style=\"background: url('";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/gallerie/2.jpeg"), "html", null, true);
        echo "') center center; background-size:cover;\">
                                <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_homepage");
        echo "\">
                                    <div class=\"overlay\">
                                        <div class=\"text-overlay\">
                                            <div class=\"text-overlay-title\">
                                                <h3>Hdith ElSouk</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"swiper-slide\"
                                 style=\"background: url('";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/gallerie/2.jpg"), "html", null, true);
        echo "') center center; background-size:cover;\">
                                <a href=\"#\">
                                    <div class=\"overlay\">
                                        <div class=\"text-overlay\">
                                            <div class=\"text-overlay-title\">
                                                <h3>Évènements</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\"
                     style=\"background: url('";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/gallerie/4.jpg"), "html", null, true);
        echo "') center center; background-size:cover;\">
                    ";
        // line 61
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 62
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheWorkshop");
            echo "\">
                        ";
        } else {
            // line 64
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheVisitWorkshop");
            echo "\">
                            ";
        }
        // line 66
        echo "                            <div class=\"overlay\">
                                <div class=\"text-overlay\">
                                    <div class=\"text-overlay-title\">
                                            <h3>Ateliers</h3>
                        </a>
                </div>
            </div>
        </div>
        </a>
        </div>
        <div class=\"swiper-slide\">
            <div class=\"swiper-container swiper-nested-2\">
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\"
                         style=\"background: url('";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/gallerie/5.jpg"), "html", null, true);
        echo "') center center; background-size:cover;\">
                        <a href=\"#\">
                            <div class=\"overlay\">
                                <div class=\"text-overlay\">
                                    <div class=\"text-overlay-title\">
                                        <h3>Explore</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"swiper-slide\"
                         style=\"background: url('";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/gallerie/3.jpg"), "html", null, true);
        echo "') center center; background-size:cover;\">
                        <a href=\"#\">
                            <div class=\"overlay\">
                                <div class=\"text-overlay\">
                                    <div class=\"text-overlay-title\">
                                        <h3>Boutique En Ligne</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>


    </section>

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"section\">
                <div class=\"heading-block center nobottomborder nobottommargin\">
                    <h2>\"سوق المدينة يلمنا الكل\"</h2>
                </div>
            </div>

            <div class=\"container clearfix\">

                <div class=\"col_one_third nobottommargin col_last\" style=\"margin-left: 400px;\">

                    <h4>Que Disent nos Artisans?</h4>

                    <div class=\"fslider testimonial\" data-animation=\"slide\" data-arrows=\"false\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/testimonials/3.jpg"), "html", null, true);
        echo "\"
                                                         alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>والله مشروع هايل، حتى مالدولاب يزيد يدور.</p>
                                        <div class=\"testi-meta\">
                                            Hatem Abrouz
                                            <span>Artisan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/testimonials/2.jpg"), "html", null, true);
        echo "\"
                                                         alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>آفار هايل بصراحة. أعز ماعمل الواحد كي قيد، حتى مالحانوت وماعاش تحتاجو.</p>
                                        <div class=\"testi-meta\">
                                            Hamma Laabidi
                                            <span>Artisan amateur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/testimonials/1.jpg"), "html", null, true);
        echo "\"
                                                         alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>يعطيه الصحة لي خرج الزبدة متع الفكرة. وليت تقولش عليا نهار كامل في السوق.</p>
                                        <div class=\"testi-meta\">
                                            Slim Sahraoui
                                            <span>Bricoleur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/testimonials/4.jpg"), "html", null, true);
        echo "\"
                                                         alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>شعندي نقول؟ يعطيكم الصحة اما مازال ماكملش؟</p>
                                        <div class=\"testi-meta\">
                                            Salah Touzri
                                            <span>Utilisateur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/testimonials/5.jpg"), "html", null, true);
        echo "\"
                                                         alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>مافما مايتقال عالخدمة. أما مش كلي مازال فارغ مالعباد؟</p>
                                        <div class=\"testi-meta\">
                                            Mounir Ben Romdhane
                                            <span>Bijoutier</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

";
        
        $__internal_24884d961080086fa6d6685fc24595da9ee5473587e053a6d6e3502474043c50->leave($__internal_24884d961080086fa6d6685fc24595da9ee5473587e053a6d6e3502474043c50_prof);

        
        $__internal_459c11dc262957d9e0bdd9508ed210cb4cd97c40559fb84eccd5d84ec6627bdb->leave($__internal_459c11dc262957d9e0bdd9508ed210cb4cd97c40559fb84eccd5d84ec6627bdb_prof);

    }

    public function getTemplateName()
    {
        return "SUserBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 187,  282 => 174,  266 => 161,  250 => 148,  234 => 135,  188 => 92,  173 => 80,  157 => 66,  151 => 64,  145 => 62,  143 => 61,  139 => 60,  121 => 45,  107 => 34,  103 => 33,  86 => 19,  82 => 18,  74 => 12,  65 => 11,  50 => 4,  41 => 3,  11 => 1,);
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

{% block head %}

    <!-- Document Title
\t============================================= -->
    <title>Welcome to Souk Lemdina!</title>

{% endblock %}

{% block body %}

    <section id=\"slider\" class=\"swiper_wrapper customjs with-header canvas-slider canvas-slider-grid clearfix\">

        <div class=\"swiper-container swiper-parent\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\"
                     style=\"background: url('{{ asset('Template/images/gallerie/1.jpg') }}') center center; background-size:cover;\">
                    <a href=\"{{ path('fos_visitor_home') }}\">
                        <div class=\"overlay\">
                            <div class=\"text-overlay\">
                                <div class=\"text-overlay-title\">
                                    <h3>Accueil</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"swiper-container swiper-nested-2\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\"
                                 style=\"background: url('{{ asset('Template/images/gallerie/2.jpeg') }}') center center; background-size:cover;\">
                                <a href=\"{{ path('social_homepage') }}\">
                                    <div class=\"overlay\">
                                        <div class=\"text-overlay\">
                                            <div class=\"text-overlay-title\">
                                                <h3>Hdith ElSouk</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"swiper-slide\"
                                 style=\"background: url('{{ asset('Template/images/gallerie/2.jpg') }}') center center; background-size:cover;\">
                                <a href=\"#\">
                                    <div class=\"overlay\">
                                        <div class=\"text-overlay\">
                                            <div class=\"text-overlay-title\">
                                                <h3>Évènements</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\"
                     style=\"background: url('{{ asset('Template/images/gallerie/4.jpg') }}') center center; background-size:cover;\">
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <a href=\"{{ path('_AfficheWorkshop') }}\">
                        {% else %}
                        <a href=\"{{ path('_AfficheVisitWorkshop') }}\">
                            {% endif %}
                            <div class=\"overlay\">
                                <div class=\"text-overlay\">
                                    <div class=\"text-overlay-title\">
                                            <h3>Ateliers</h3>
                        </a>
                </div>
            </div>
        </div>
        </a>
        </div>
        <div class=\"swiper-slide\">
            <div class=\"swiper-container swiper-nested-2\">
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\"
                         style=\"background: url('{{ asset('Template/images/gallerie/5.jpg') }}') center center; background-size:cover;\">
                        <a href=\"#\">
                            <div class=\"overlay\">
                                <div class=\"text-overlay\">
                                    <div class=\"text-overlay-title\">
                                        <h3>Explore</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"swiper-slide\"
                         style=\"background: url('{{ asset('Template/images/gallerie/3.jpg') }}') center center; background-size:cover;\">
                        <a href=\"#\">
                            <div class=\"overlay\">
                                <div class=\"text-overlay\">
                                    <div class=\"text-overlay-title\">
                                        <h3>Boutique En Ligne</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>


    </section>

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"section\">
                <div class=\"heading-block center nobottomborder nobottommargin\">
                    <h2>\"سوق المدينة يلمنا الكل\"</h2>
                </div>
            </div>

            <div class=\"container clearfix\">

                <div class=\"col_one_third nobottommargin col_last\" style=\"margin-left: 400px;\">

                    <h4>Que Disent nos Artisans?</h4>

                    <div class=\"fslider testimonial\" data-animation=\"slide\" data-arrows=\"false\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"{{ asset('Template/images/testimonials/3.jpg') }}\"
                                                         alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>والله مشروع هايل، حتى مالدولاب يزيد يدور.</p>
                                        <div class=\"testi-meta\">
                                            Hatem Abrouz
                                            <span>Artisan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"{{ asset('Template/images/testimonials/2.jpg') }}\"
                                                         alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>آفار هايل بصراحة. أعز ماعمل الواحد كي قيد، حتى مالحانوت وماعاش تحتاجو.</p>
                                        <div class=\"testi-meta\">
                                            Hamma Laabidi
                                            <span>Artisan amateur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"{{ asset('Template/images/testimonials/1.jpg') }}\"
                                                         alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>يعطيه الصحة لي خرج الزبدة متع الفكرة. وليت تقولش عليا نهار كامل في السوق.</p>
                                        <div class=\"testi-meta\">
                                            Slim Sahraoui
                                            <span>Bricoleur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"{{ asset('Template/images/testimonials/4.jpg') }}\"
                                                         alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>شعندي نقول؟ يعطيكم الصحة اما مازال ماكملش؟</p>
                                        <div class=\"testi-meta\">
                                            Salah Touzri
                                            <span>Utilisateur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"{{ asset('Template/images/testimonials/5.jpg') }}\"
                                                         alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>مافما مايتقال عالخدمة. أما مش كلي مازال فارغ مالعباد؟</p>
                                        <div class=\"testi-meta\">
                                            Mounir Ben Romdhane
                                            <span>Bijoutier</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

{% endblock %}", "SUserBundle::index.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/index.html.twig");
    }
}
