<?php

/* SUserBundle::layout2.html.twig */
class __TwigTemplate_dbaebfae1436d978d61f84e766d0992c5d373bda8d19c16568bb817466956342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb2605d3632aa43cc50813df41fdf2149d4d460651f43f2d48c4e9284579ec20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2605d3632aa43cc50813df41fdf2149d4d460651f43f2d48c4e9284579ec20->enter($__internal_cb2605d3632aa43cc50813df41fdf2149d4d460651f43f2d48c4e9284579ec20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUserBundle::layout2.html.twig"));

        $__internal_3e8ad43b46f562c6d06f94d831b0d779db5824730d544c42620913dbe8ed4fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8ad43b46f562c6d06f94d831b0d779db5824730d544c42620913dbe8ed4fe7->enter($__internal_3e8ad43b46f562c6d06f94d831b0d779db5824730d544c42620913dbe8ed4fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUserBundle::layout2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--Based on Index/Portfolio.2-->
<html dir=\"ltr\" lang=\"en-US\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"author\" content=\"CodeBusters\"/>

    ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "
    <!-- Basic Stylesheets
    ============================================= -->
    <!--link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\"
          rel=\"stylesheet\" type=\"text/css\"/-->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/swiper.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/dark.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/font-icons.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>

    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
</head>
<body class=\"stretched\">

<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">

    <!-- Header
    ============================================= -->
    <br>

    <div>
        ";
        // line 38
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 40
        echo "    </div>

    ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
    <!-- Footer
    ============================================= -->
    <footer id=\"footer\" class=\"dark\">

        <div class=\"container\">

            <!-- Footer Widgets
            ============================================= -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id=\"copyrights\">

            <div class=\"container clearfix\">

                <div class=\"col_half\">
                    Copyrights &copy; 2018 All Rights Reserved by Souk Lemdina Inc.<br>
                    <div class=\"copyright-links\"><a href=\"#\">Terms of Use</a> / <a href=\"#\">Privacy Policy</a></div>
                </div>

                <div class=\"col_half col_last tright\">
                    <div class=\"fright clearfix\">
                        <a href=\"https://github.com/RKayX2/SoukLemdina\"
                           class=\"social-icon si-small si-borderless si-github\">
                            <i class=\"icon-github\"></i>
                            <i class=\"icon-github\"></i>
                        </a>
                    </div>

                    <div class=\"clear\"></div>
                    <i class=\"icon-envelope2\"></i> info@souklemdina.tn <span class=\"middot\">&middot;</span> <i
                            class=\"icon-headphones\"></i> +00216-52-888-256 <span class=\"middot\">&middot;</span> <i
                            class=\"icon-skype2\"></i> SoukLemdinaOnSkype
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/functions.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Switch Plugin -->
<script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/components/bs-switches.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(window).load(function () {
        var swiperParent = new Swiper('.swiper-parent', {
            paginationClickable: false,
            slidesPerView: 4,
            grabCursor: true,
            prevButton: '#slider-arrow-left',
            nextButton: '#slider-arrow-right'
        });

        var swiperNested1 = new Swiper('.swiper-nested-1', {
            direction: 'vertical',
            paginationClickable: false,
            slidesPerView: 3,
            prevButton: '#sw1-arrow-top',
            nextButton: '#sw1-arrow-bottom'
        });

        var swiperNested2 = new Swiper('.swiper-nested-2', {
            direction: 'vertical',
            paginationClickable: false,
            slidesPerView: 2,
            prevButton: '#sw2-arrow-top',
            nextButton: '#sw2-arrow-bottom'
        });

        var swiperNested3 = new Swiper('.swiper-nested-3', {
            direction: 'vertical',
            paginationClickable: false,
            slidesPerView: 2,
            prevButton: '#sw3-arrow-top',
            nextButton: '#sw3-arrow-bottom'
        });
    });
</script>
";
        // line 138
        $this->displayBlock('javascripts', $context, $blocks);
        // line 139
        echo "
</body>
</html>


";
        
        $__internal_cb2605d3632aa43cc50813df41fdf2149d4d460651f43f2d48c4e9284579ec20->leave($__internal_cb2605d3632aa43cc50813df41fdf2149d4d460651f43f2d48c4e9284579ec20_prof);

        
        $__internal_3e8ad43b46f562c6d06f94d831b0d779db5824730d544c42620913dbe8ed4fe7->leave($__internal_3e8ad43b46f562c6d06f94d831b0d779db5824730d544c42620913dbe8ed4fe7_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_6558ca43e062aa6fa3dee57949761a5aa4293864e3bf3b6808270b8cd0d5f24e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6558ca43e062aa6fa3dee57949761a5aa4293864e3bf3b6808270b8cd0d5f24e->enter($__internal_6558ca43e062aa6fa3dee57949761a5aa4293864e3bf3b6808270b8cd0d5f24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a0237d75e3601c367279d3af26e58235d5d7c62cdac23970f073361c5c5d82e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0237d75e3601c367279d3af26e58235d5d7c62cdac23970f073361c5c5d82e7->enter($__internal_a0237d75e3601c367279d3af26e58235d5d7c62cdac23970f073361c5c5d82e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a0237d75e3601c367279d3af26e58235d5d7c62cdac23970f073361c5c5d82e7->leave($__internal_a0237d75e3601c367279d3af26e58235d5d7c62cdac23970f073361c5c5d82e7_prof);

        
        $__internal_6558ca43e062aa6fa3dee57949761a5aa4293864e3bf3b6808270b8cd0d5f24e->leave($__internal_6558ca43e062aa6fa3dee57949761a5aa4293864e3bf3b6808270b8cd0d5f24e_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15f6ec5b2a7f0e12572b014bdfefff46c9fe87553cbb3ff9fc804113173fab3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f6ec5b2a7f0e12572b014bdfefff46c9fe87553cbb3ff9fc804113173fab3c->enter($__internal_15f6ec5b2a7f0e12572b014bdfefff46c9fe87553cbb3ff9fc804113173fab3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6d0f6f92efb19a6eaea4c7cd5970a98197260a707cb7a4436b438f4891645003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0f6f92efb19a6eaea4c7cd5970a98197260a707cb7a4436b438f4891645003->enter($__internal_6d0f6f92efb19a6eaea4c7cd5970a98197260a707cb7a4436b438f4891645003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6d0f6f92efb19a6eaea4c7cd5970a98197260a707cb7a4436b438f4891645003->leave($__internal_6d0f6f92efb19a6eaea4c7cd5970a98197260a707cb7a4436b438f4891645003_prof);

        
        $__internal_15f6ec5b2a7f0e12572b014bdfefff46c9fe87553cbb3ff9fc804113173fab3c->leave($__internal_15f6ec5b2a7f0e12572b014bdfefff46c9fe87553cbb3ff9fc804113173fab3c_prof);

    }

    // line 38
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70183ba964d8c78cf215314a49169f6e3b5d39592b3eb9d11ccbe3764112a293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70183ba964d8c78cf215314a49169f6e3b5d39592b3eb9d11ccbe3764112a293->enter($__internal_70183ba964d8c78cf215314a49169f6e3b5d39592b3eb9d11ccbe3764112a293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4de435cc0d81e008a33dfe22f8ca257829cc4285b7604794aeac66ad3ac9d4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de435cc0d81e008a33dfe22f8ca257829cc4285b7604794aeac66ad3ac9d4a7->enter($__internal_4de435cc0d81e008a33dfe22f8ca257829cc4285b7604794aeac66ad3ac9d4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 39
        echo "        ";
        
        $__internal_4de435cc0d81e008a33dfe22f8ca257829cc4285b7604794aeac66ad3ac9d4a7->leave($__internal_4de435cc0d81e008a33dfe22f8ca257829cc4285b7604794aeac66ad3ac9d4a7_prof);

        
        $__internal_70183ba964d8c78cf215314a49169f6e3b5d39592b3eb9d11ccbe3764112a293->leave($__internal_70183ba964d8c78cf215314a49169f6e3b5d39592b3eb9d11ccbe3764112a293_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1311f261eedfc9abeea5311399afa81535fc14369fa47255d6e235418df7f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1311f261eedfc9abeea5311399afa81535fc14369fa47255d6e235418df7f6a->enter($__internal_e1311f261eedfc9abeea5311399afa81535fc14369fa47255d6e235418df7f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ce95c66f3b0fbdb892d5bf72cda0205ab1ea5c2bdff6b957042a15fe844a5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce95c66f3b0fbdb892d5bf72cda0205ab1ea5c2bdff6b957042a15fe844a5a7->enter($__internal_4ce95c66f3b0fbdb892d5bf72cda0205ab1ea5c2bdff6b957042a15fe844a5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4ce95c66f3b0fbdb892d5bf72cda0205ab1ea5c2bdff6b957042a15fe844a5a7->leave($__internal_4ce95c66f3b0fbdb892d5bf72cda0205ab1ea5c2bdff6b957042a15fe844a5a7_prof);

        
        $__internal_e1311f261eedfc9abeea5311399afa81535fc14369fa47255d6e235418df7f6a->leave($__internal_e1311f261eedfc9abeea5311399afa81535fc14369fa47255d6e235418df7f6a_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd5f70d328056fd2283555ecf73ec1be10c118c648c0b405e3e922753834eb6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5f70d328056fd2283555ecf73ec1be10c118c648c0b405e3e922753834eb6f->enter($__internal_dd5f70d328056fd2283555ecf73ec1be10c118c648c0b405e3e922753834eb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c4cd3c85ce34fd7461554cfed5143bba495ad4c909ebf6125278f6fd635c3ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cd3c85ce34fd7461554cfed5143bba495ad4c909ebf6125278f6fd635c3ae7->enter($__internal_c4cd3c85ce34fd7461554cfed5143bba495ad4c909ebf6125278f6fd635c3ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c4cd3c85ce34fd7461554cfed5143bba495ad4c909ebf6125278f6fd635c3ae7->leave($__internal_c4cd3c85ce34fd7461554cfed5143bba495ad4c909ebf6125278f6fd635c3ae7_prof);

        
        $__internal_dd5f70d328056fd2283555ecf73ec1be10c118c648c0b405e3e922753834eb6f->leave($__internal_dd5f70d328056fd2283555ecf73ec1be10c118c648c0b405e3e922753834eb6f_prof);

    }

    public function getTemplateName()
    {
        return "SUserBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 138,  286 => 42,  276 => 39,  267 => 38,  250 => 24,  233 => 8,  218 => 139,  216 => 138,  177 => 102,  172 => 100,  165 => 96,  161 => 95,  107 => 43,  105 => 42,  101 => 40,  99 => 38,  84 => 25,  82 => 24,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  41 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--Based on Index/Portfolio.2-->
<html dir=\"ltr\" lang=\"en-US\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"author\" content=\"CodeBusters\"/>

    {% block head %}{% endblock %}

    <!-- Basic Stylesheets
    ============================================= -->
    <!--link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\"
          rel=\"stylesheet\" type=\"text/css\"/-->
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/bootstrap.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/style.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/swiper.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/dark.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/font-icons.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/animate.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/magnific-popup.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/responsive.css') }}\" type=\"text/css\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>

    {% block stylesheets %}{% endblock %}

</head>
<body class=\"stretched\">

<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">

    <!-- Header
    ============================================= -->
    <br>

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>

    {% block body %}{% endblock %}

    <!-- Footer
    ============================================= -->
    <footer id=\"footer\" class=\"dark\">

        <div class=\"container\">

            <!-- Footer Widgets
            ============================================= -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id=\"copyrights\">

            <div class=\"container clearfix\">

                <div class=\"col_half\">
                    Copyrights &copy; 2018 All Rights Reserved by Souk Lemdina Inc.<br>
                    <div class=\"copyright-links\"><a href=\"#\">Terms of Use</a> / <a href=\"#\">Privacy Policy</a></div>
                </div>

                <div class=\"col_half col_last tright\">
                    <div class=\"fright clearfix\">
                        <a href=\"https://github.com/RKayX2/SoukLemdina\"
                           class=\"social-icon si-small si-borderless si-github\">
                            <i class=\"icon-github\"></i>
                            <i class=\"icon-github\"></i>
                        </a>
                    </div>

                    <div class=\"clear\"></div>
                    <i class=\"icon-envelope2\"></i> info@souklemdina.tn <span class=\"middot\">&middot;</span> <i
                            class=\"icon-headphones\"></i> +00216-52-888-256 <span class=\"middot\">&middot;</span> <i
                            class=\"icon-skype2\"></i> SoukLemdinaOnSkype
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"{{ asset('Template/js/jquery.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('Template/js/plugins.js') }}\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"{{ asset('Template/js/functions.js') }}\"></script>
<!-- Bootstrap Switch Plugin -->
<script type=\"text/javascript\" src=\"{{ asset('Template/js/components/bs-switches.js') }}\"></script>
<script type=\"text/javascript\">
    jQuery(window).load(function () {
        var swiperParent = new Swiper('.swiper-parent', {
            paginationClickable: false,
            slidesPerView: 4,
            grabCursor: true,
            prevButton: '#slider-arrow-left',
            nextButton: '#slider-arrow-right'
        });

        var swiperNested1 = new Swiper('.swiper-nested-1', {
            direction: 'vertical',
            paginationClickable: false,
            slidesPerView: 3,
            prevButton: '#sw1-arrow-top',
            nextButton: '#sw1-arrow-bottom'
        });

        var swiperNested2 = new Swiper('.swiper-nested-2', {
            direction: 'vertical',
            paginationClickable: false,
            slidesPerView: 2,
            prevButton: '#sw2-arrow-top',
            nextButton: '#sw2-arrow-bottom'
        });

        var swiperNested3 = new Swiper('.swiper-nested-3', {
            direction: 'vertical',
            paginationClickable: false,
            slidesPerView: 2,
            prevButton: '#sw3-arrow-top',
            nextButton: '#sw3-arrow-bottom'
        });
    });
</script>
{% block javascripts %}{% endblock %}

</body>
</html>


", "SUserBundle::layout2.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/layout2.html.twig");
    }
}
