<?php

/* @SUser/index.html.twig */
class __TwigTemplate_4c3f70508bebae0f6c6999d8e49ef61c13ed8aedaca62f4a20eac42b24726cba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "@SUser/index.html.twig", 1);
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
        $__internal_66ed9a39a901e955d8e852050aac1cdafaff031eab6fd8a4f03d66c931987294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ed9a39a901e955d8e852050aac1cdafaff031eab6fd8a4f03d66c931987294->enter($__internal_66ed9a39a901e955d8e852050aac1cdafaff031eab6fd8a4f03d66c931987294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SUser/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66ed9a39a901e955d8e852050aac1cdafaff031eab6fd8a4f03d66c931987294->leave($__internal_66ed9a39a901e955d8e852050aac1cdafaff031eab6fd8a4f03d66c931987294_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76ad7af2e13176366b9634a7355badb696285d14b1b0fd8d6717e2dd63468466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ad7af2e13176366b9634a7355badb696285d14b1b0fd8d6717e2dd63468466->enter($__internal_76ad7af2e13176366b9634a7355badb696285d14b1b0fd8d6717e2dd63468466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Welcome to Souk Lemdina!</title>

";
        
        $__internal_76ad7af2e13176366b9634a7355badb696285d14b1b0fd8d6717e2dd63468466->leave($__internal_76ad7af2e13176366b9634a7355badb696285d14b1b0fd8d6717e2dd63468466_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b851ce736396d134f463a918b3623ae7f996b21afbddc968a99bf9637911dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b851ce736396d134f463a918b3623ae7f996b21afbddc968a99bf9637911dad->enter($__internal_4b851ce736396d134f463a918b3623ae7f996b21afbddc968a99bf9637911dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b851ce736396d134f463a918b3623ae7f996b21afbddc968a99bf9637911dad->leave($__internal_4b851ce736396d134f463a918b3623ae7f996b21afbddc968a99bf9637911dad_prof);

    }

    public function getTemplateName()
    {
        return "@SUser/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 187,  267 => 174,  251 => 161,  235 => 148,  219 => 135,  173 => 92,  158 => 80,  142 => 66,  136 => 64,  130 => 62,  128 => 61,  124 => 60,  106 => 45,  92 => 34,  88 => 33,  71 => 19,  67 => 18,  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
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

{% endblock %}", "@SUser/index.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/index.html.twig");
    }
}
