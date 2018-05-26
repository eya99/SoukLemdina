<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_1e06991427784b64dd2044c49bb560d0dbf892787c29390d28093cf28ca144b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f534a85de92abeb2bcf2e8de25a86fd870582e52380642cf4008470db11a178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f534a85de92abeb2bcf2e8de25a86fd870582e52380642cf4008470db11a178->enter($__internal_4f534a85de92abeb2bcf2e8de25a86fd870582e52380642cf4008470db11a178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_b741b75c77591fce72e107bee556aee0c63b55953ff281b3a64dd65eb388fc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b741b75c77591fce72e107bee556aee0c63b55953ff281b3a64dd65eb388fc34->enter($__internal_b741b75c77591fce72e107bee556aee0c63b55953ff281b3a64dd65eb388fc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_b90132c117f7afd8f8b6b54c2d509700cae9a8304f2584dc5832227bded030bb"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
(isset($context["__internal_b90132c117f7afd8f8b6b54c2d509700cae9a8304f2584dc5832227bded030bb"]) ? $context["__internal_b90132c117f7afd8f8b6b54c2d509700cae9a8304f2584dc5832227bded030bb"] : $this->getContext($context, "__internal_b90132c117f7afd8f8b6b54c2d509700cae9a8304f2584dc5832227bded030bb"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
(isset($context["__internal_b90132c117f7afd8f8b6b54c2d509700cae9a8304f2584dc5832227bded030bb"]) ? $context["__internal_b90132c117f7afd8f8b6b54c2d509700cae9a8304f2584dc5832227bded030bb"] : $this->getContext($context, "__internal_b90132c117f7afd8f8b6b54c2d509700cae9a8304f2584dc5832227bded030bb"))), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f534a85de92abeb2bcf2e8de25a86fd870582e52380642cf4008470db11a178->leave($__internal_4f534a85de92abeb2bcf2e8de25a86fd870582e52380642cf4008470db11a178_prof);

        
        $__internal_b741b75c77591fce72e107bee556aee0c63b55953ff281b3a64dd65eb388fc34->leave($__internal_b741b75c77591fce72e107bee556aee0c63b55953ff281b3a64dd65eb388fc34_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e961580730d32404124e4f022886dc6c2ed7bd09ddfebe68bd84a18740b9be17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e961580730d32404124e4f022886dc6c2ed7bd09ddfebe68bd84a18740b9be17->enter($__internal_e961580730d32404124e4f022886dc6c2ed7bd09ddfebe68bd84a18740b9be17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_23d1edf4f0f8aff1cc5b30ef978798660d45263fbc9db1c85354dbf963609ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d1edf4f0f8aff1cc5b30ef978798660d45263fbc9db1c85354dbf963609ccc->enter($__internal_23d1edf4f0f8aff1cc5b30ef978798660d45263fbc9db1c85354dbf963609ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_23d1edf4f0f8aff1cc5b30ef978798660d45263fbc9db1c85354dbf963609ccc->leave($__internal_23d1edf4f0f8aff1cc5b30ef978798660d45263fbc9db1c85354dbf963609ccc_prof);

        
        $__internal_e961580730d32404124e4f022886dc6c2ed7bd09ddfebe68bd84a18740b9be17->leave($__internal_e961580730d32404124e4f022886dc6c2ed7bd09ddfebe68bd84a18740b9be17_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_24ba00d3ac69cb57ca5ff5b0be5116ed0e4d0a216c69e2204015a49cdd9594d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ba00d3ac69cb57ca5ff5b0be5116ed0e4d0a216c69e2204015a49cdd9594d9->enter($__internal_24ba00d3ac69cb57ca5ff5b0be5116ed0e4d0a216c69e2204015a49cdd9594d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_1b8c64f7b60b121cc153bd9aaa12b690d55903dd90bb0563c11001fcff461f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8c64f7b60b121cc153bd9aaa12b690d55903dd90bb0563c11001fcff461f68->enter($__internal_1b8c64f7b60b121cc153bd9aaa12b690d55903dd90bb0563c11001fcff461f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_1b8c64f7b60b121cc153bd9aaa12b690d55903dd90bb0563c11001fcff461f68->leave($__internal_1b8c64f7b60b121cc153bd9aaa12b690d55903dd90bb0563c11001fcff461f68_prof);

        
        $__internal_24ba00d3ac69cb57ca5ff5b0be5116ed0e4d0a216c69e2204015a49cdd9594d9->leave($__internal_24ba00d3ac69cb57ca5ff5b0be5116ed0e4d0a216c69e2204015a49cdd9594d9_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_b8b021f58c41fe6a279716ca2441a9a87b3a8602f8633c32e9fae1a3dd59f080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b021f58c41fe6a279716ca2441a9a87b3a8602f8633c32e9fae1a3dd59f080->enter($__internal_b8b021f58c41fe6a279716ca2441a9a87b3a8602f8633c32e9fae1a3dd59f080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_431abec6e8488ca6bb9e6b27a1f2cee2a5f4359cf7d9bfdc7af3cab39b1e5017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431abec6e8488ca6bb9e6b27a1f2cee2a5f4359cf7d9bfdc7af3cab39b1e5017->enter($__internal_431abec6e8488ca6bb9e6b27a1f2cee2a5f4359cf7d9bfdc7af3cab39b1e5017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 5
(isset($context["__internal_b90132c117f7afd8f8b6b54c2d509700cae9a8304f2584dc5832227bded030bb"]) ? $context["__internal_b90132c117f7afd8f8b6b54c2d509700cae9a8304f2584dc5832227bded030bb"] : $this->getContext($context, "__internal_b90132c117f7afd8f8b6b54c2d509700cae9a8304f2584dc5832227bded030bb")))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_431abec6e8488ca6bb9e6b27a1f2cee2a5f4359cf7d9bfdc7af3cab39b1e5017->leave($__internal_431abec6e8488ca6bb9e6b27a1f2cee2a5f4359cf7d9bfdc7af3cab39b1e5017_prof);

        
        $__internal_b8b021f58c41fe6a279716ca2441a9a87b3a8602f8633c32e9fae1a3dd59f080->leave($__internal_b8b021f58c41fe6a279716ca2441a9a87b3a8602f8633c32e9fae1a3dd59f080_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_d8e1a03386a08aa00d21f8d607989ce666e04110e6b343ca829ac90559f8a912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e1a03386a08aa00d21f8d607989ce666e04110e6b343ca829ac90559f8a912->enter($__internal_d8e1a03386a08aa00d21f8d607989ce666e04110e6b343ca829ac90559f8a912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5b05d5add30f946139c3411aa699d87f4e772e2c442da6b2ca21df1428cf750b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b05d5add30f946139c3411aa699d87f4e772e2c442da6b2ca21df1428cf750b->enter($__internal_5b05d5add30f946139c3411aa699d87f4e772e2c442da6b2ca21df1428cf750b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_5b05d5add30f946139c3411aa699d87f4e772e2c442da6b2ca21df1428cf750b->leave($__internal_5b05d5add30f946139c3411aa699d87f4e772e2c442da6b2ca21df1428cf750b_prof);

        
        $__internal_d8e1a03386a08aa00d21f8d607989ce666e04110e6b343ca829ac90559f8a912->leave($__internal_d8e1a03386a08aa00d21f8d607989ce666e04110e6b343ca829ac90559f8a912_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_5a1db409b697fae6cb75c187f3eb0b61a4f1b7271b8bf65aaae81d5654bcc484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1db409b697fae6cb75c187f3eb0b61a4f1b7271b8bf65aaae81d5654bcc484->enter($__internal_5a1db409b697fae6cb75c187f3eb0b61a4f1b7271b8bf65aaae81d5654bcc484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_c4912cc9548267a9a0d3354193774300afc39ed9c73a8c3c7d34ba27b027a677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4912cc9548267a9a0d3354193774300afc39ed9c73a8c3c7d34ba27b027a677->enter($__internal_c4912cc9548267a9a0d3354193774300afc39ed9c73a8c3c7d34ba27b027a677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_c4912cc9548267a9a0d3354193774300afc39ed9c73a8c3c7d34ba27b027a677->leave($__internal_c4912cc9548267a9a0d3354193774300afc39ed9c73a8c3c7d34ba27b027a677_prof);

        
        $__internal_5a1db409b697fae6cb75c187f3eb0b61a4f1b7271b8bf65aaae81d5654bcc484->leave($__internal_5a1db409b697fae6cb75c187f3eb0b61a4f1b7271b8bf65aaae81d5654bcc484_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_c164ad6f2b87593f5ec2925727d38ca760ce75dc6866e2803c099f119100bfb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c164ad6f2b87593f5ec2925727d38ca760ce75dc6866e2803c099f119100bfb0->enter($__internal_c164ad6f2b87593f5ec2925727d38ca760ce75dc6866e2803c099f119100bfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_a06edd8f5fc457dd070a25f1bbd26bc72790f94a57a231908245684903e7b907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06edd8f5fc457dd070a25f1bbd26bc72790f94a57a231908245684903e7b907->enter($__internal_a06edd8f5fc457dd070a25f1bbd26bc72790f94a57a231908245684903e7b907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_a06edd8f5fc457dd070a25f1bbd26bc72790f94a57a231908245684903e7b907->leave($__internal_a06edd8f5fc457dd070a25f1bbd26bc72790f94a57a231908245684903e7b907_prof);

        
        $__internal_c164ad6f2b87593f5ec2925727d38ca760ce75dc6866e2803c099f119100bfb0->leave($__internal_c164ad6f2b87593f5ec2925727d38ca760ce75dc6866e2803c099f119100bfb0_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_abf512f2c9c4e6b02aad415807fdfca80bbda7cc7b2cada6093a6d14c514991f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf512f2c9c4e6b02aad415807fdfca80bbda7cc7b2cada6093a6d14c514991f->enter($__internal_abf512f2c9c4e6b02aad415807fdfca80bbda7cc7b2cada6093a6d14c514991f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_fff4c0ad5ae5c27e9d9e310900af01686961d07a513e2aaa94a1cf164a4e2be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff4c0ad5ae5c27e9d9e310900af01686961d07a513e2aaa94a1cf164a4e2be4->enter($__internal_fff4c0ad5ae5c27e9d9e310900af01686961d07a513e2aaa94a1cf164a4e2be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_fff4c0ad5ae5c27e9d9e310900af01686961d07a513e2aaa94a1cf164a4e2be4->leave($__internal_fff4c0ad5ae5c27e9d9e310900af01686961d07a513e2aaa94a1cf164a4e2be4_prof);

        
        $__internal_abf512f2c9c4e6b02aad415807fdfca80bbda7cc7b2cada6093a6d14c514991f->leave($__internal_abf512f2c9c4e6b02aad415807fdfca80bbda7cc7b2cada6093a6d14c514991f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:edit.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
