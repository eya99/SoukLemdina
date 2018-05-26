<?php

/* CommandeBundle:LigneDeCommande:AjoutLigneDeCommande.html.twig */
class __TwigTemplate_ceadc28d8d6a61da9d669691bf1078c8796306997127958ecb7bde7affcc7022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "CommandeBundle:LigneDeCommande:AjoutLigneDeCommande.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2f42c63fbc40b351bd12460d4ea4589800816a421859c5c718d6531d3789fce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f42c63fbc40b351bd12460d4ea4589800816a421859c5c718d6531d3789fce->enter($__internal_f2f42c63fbc40b351bd12460d4ea4589800816a421859c5c718d6531d3789fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:LigneDeCommande:AjoutLigneDeCommande.html.twig"));

        $__internal_55909870465f7982cca24fa10f67ee174e2d9e307571c6613ef19cfc7b47c731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55909870465f7982cca24fa10f67ee174e2d9e307571c6613ef19cfc7b47c731->enter($__internal_55909870465f7982cca24fa10f67ee174e2d9e307571c6613ef19cfc7b47c731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:LigneDeCommande:AjoutLigneDeCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f42c63fbc40b351bd12460d4ea4589800816a421859c5c718d6531d3789fce->leave($__internal_f2f42c63fbc40b351bd12460d4ea4589800816a421859c5c718d6531d3789fce_prof);

        
        $__internal_55909870465f7982cca24fa10f67ee174e2d9e307571c6613ef19cfc7b47c731->leave($__internal_55909870465f7982cca24fa10f67ee174e2d9e307571c6613ef19cfc7b47c731_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_54160ea2073d66961afd145385601c0873d16e7159197649938d02e079c23d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54160ea2073d66961afd145385601c0873d16e7159197649938d02e079c23d42->enter($__internal_54160ea2073d66961afd145385601c0873d16e7159197649938d02e079c23d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94fb697b4a761927599821fa40196370d7666f5a32bf5c6a7177e7f3888f43d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fb697b4a761927599821fa40196370d7666f5a32bf5c6a7177e7f3888f43d9->enter($__internal_94fb697b4a761927599821fa40196370d7666f5a32bf5c6a7177e7f3888f43d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">
                                <h1>Ajouter Commande</h1>
                                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                <div class=\"col_two_third nobottommargin col_last\" >

                                    <div id=\"google-map-custom\" class=\"gmap\"></div>
                                    <body onload=\"initialize()\">
                                    <div id=\"map\" style=\"width: 320px; height: 480px;\"></div>
                                    </body></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_94fb697b4a761927599821fa40196370d7666f5a32bf5c6a7177e7f3888f43d9->leave($__internal_94fb697b4a761927599821fa40196370d7666f5a32bf5c6a7177e7f3888f43d9_prof);

        
        $__internal_54160ea2073d66961afd145385601c0873d16e7159197649938d02e079c23d42->leave($__internal_54160ea2073d66961afd145385601c0873d16e7159197649938d02e079c23d42_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db0403280edb0a15e92558d463beffccd58a556049e2daed70fcf590febecbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0403280edb0a15e92558d463beffccd58a556049e2daed70fcf590febecbb1->enter($__internal_db0403280edb0a15e92558d463beffccd58a556049e2daed70fcf590febecbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eb635eee053bd5bdd0c23e0e923b95e9dab1c897390a92759e315fd7dc78767e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb635eee053bd5bdd0c23e0e923b95e9dab1c897390a92759e315fd7dc78767e->enter($__internal_eb635eee053bd5bdd0c23e0e923b95e9dab1c897390a92759e315fd7dc78767e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "    <!-- Include Google Maps JS API -->
    <script type=\"text/javascript\"
            src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCAqHLvNJCGulgPVdwQAGFSilOWXz9U_x0\">
    </script>

    <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/vmap/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/vmap/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/vmap/jquery.vmap.europe.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/vmap/jquery.vmap.germany.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/vmap/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.gmap.js"), "html", null, true);
        echo "\"></script>
    <script>

        google.maps.event.addDomListener(window, 'load', function () {
//            console.log(document.getElementById('commandebundle_lignedecommande_adresse').innerHTML);
            initializeAutocomplete('commandebundle_lignedecommande_adresse');
            //initializeAutocomplete('commandebundle_lignedecommande_adresse2');
        });

        function initializeAutocomplete(id) {
            var element = document.getElementById(id);
            if (element) {
                var autocomplete = new google.maps.places.Autocomplete(element, {types: ['geocode']});
                google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
            }
        }

        function onPlaceChanged() {
            var place = this.getPlace();
            console.log(place);
            console.log(place);  // Uncomment this line to view the full object returned by Google API.
            var ville = document.getElementById('commandebundle_lignedecommande_ville');
            ville.value = place.vicinity;
            var zcode = document.getElementById('commandebundle_lignedecommande_codePostal');
            var spaceLoc = place.name.search(' ');
            console.log(place.name.substr(0, spaceLoc));
            zcode.value = place.name.substr(1, spaceLoc);
            var address = document.getElementById('commandebundle_lignedecommande_adresse').value;
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == 'OK') {
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }


        function initialize() {
            geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(-34.397, 150.644);
            var mapOptions = {
                zoom: 8,
                center: latlng
            }
            map = new google.maps.Map(document.getElementById('map'), mapOptions);
        }


        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: {lat: 40.731, lng: -73.997}
            });
            var geocoder = new google.maps.Geocoder;
            var infowindow = new google.maps.InfoWindow;

            document.getElementById('submit').addEventListener('click', function() {
                geocodeLatLng(geocoder, map, infowindow);
            });
        }

        function geocodeLatLng(geocoder, map, infowindow) {
            var input = document.getElementById('latlng').value;
            var latlngStr = input.split(',', 2);
            var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
            geocoder.geocode({'location': latlng}, function(results, status) {
                if (status === 'OK') {
                    if (results[1]) {
                        map.setZoom(11);
                        var marker = new google.maps.Marker({
                            position: latlng,
                            map: map
                        });
                        infowindow.setContent(results[1].formatted_address);
                        infowindow.open(map, marker);
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
        }


    </script>
";
        
        $__internal_eb635eee053bd5bdd0c23e0e923b95e9dab1c897390a92759e315fd7dc78767e->leave($__internal_eb635eee053bd5bdd0c23e0e923b95e9dab1c897390a92759e315fd7dc78767e_prof);

        
        $__internal_db0403280edb0a15e92558d463beffccd58a556049e2daed70fcf590febecbb1->leave($__internal_db0403280edb0a15e92558d463beffccd58a556049e2daed70fcf590febecbb1_prof);

    }

    public function getTemplateName()
    {
        return "CommandeBundle:LigneDeCommande:AjoutLigneDeCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 43,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  102 => 32,  93 => 31,  68 => 16,  63 => 14,  50 => 3,  41 => 2,  11 => 1,);
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
{% block body %}

    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">
                                <h1>Ajouter Commande</h1>
                                {{ form_start(form) }}

                                {{ form_end(form) }}
                                <div class=\"col_two_third nobottommargin col_last\" >

                                    <div id=\"google-map-custom\" class=\"gmap\"></div>
                                    <body onload=\"initialize()\">
                                    <div id=\"map\" style=\"width: 320px; height: 480px;\"></div>
                                    </body></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <!-- Include Google Maps JS API -->
    <script type=\"text/javascript\"
            src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCAqHLvNJCGulgPVdwQAGFSilOWXz9U_x0\">
    </script>

    <script type=\"text/javascript\" src=\"{{ asset('Template/js/jquery.vmap.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/vmap/jquery.vmap.world.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/vmap/jquery.vmap.usa.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/vmap/jquery.vmap.europe.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/vmap/jquery.vmap.germany.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/vmap/jquery.vmap.sampledata.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/jquery.gmap.js') }}\"></script>
    <script>

        google.maps.event.addDomListener(window, 'load', function () {
//            console.log(document.getElementById('commandebundle_lignedecommande_adresse').innerHTML);
            initializeAutocomplete('commandebundle_lignedecommande_adresse');
            //initializeAutocomplete('commandebundle_lignedecommande_adresse2');
        });

        function initializeAutocomplete(id) {
            var element = document.getElementById(id);
            if (element) {
                var autocomplete = new google.maps.places.Autocomplete(element, {types: ['geocode']});
                google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
            }
        }

        function onPlaceChanged() {
            var place = this.getPlace();
            console.log(place);
            console.log(place);  // Uncomment this line to view the full object returned by Google API.
            var ville = document.getElementById('commandebundle_lignedecommande_ville');
            ville.value = place.vicinity;
            var zcode = document.getElementById('commandebundle_lignedecommande_codePostal');
            var spaceLoc = place.name.search(' ');
            console.log(place.name.substr(0, spaceLoc));
            zcode.value = place.name.substr(1, spaceLoc);
            var address = document.getElementById('commandebundle_lignedecommande_adresse').value;
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == 'OK') {
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }


        function initialize() {
            geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(-34.397, 150.644);
            var mapOptions = {
                zoom: 8,
                center: latlng
            }
            map = new google.maps.Map(document.getElementById('map'), mapOptions);
        }


        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: {lat: 40.731, lng: -73.997}
            });
            var geocoder = new google.maps.Geocoder;
            var infowindow = new google.maps.InfoWindow;

            document.getElementById('submit').addEventListener('click', function() {
                geocodeLatLng(geocoder, map, infowindow);
            });
        }

        function geocodeLatLng(geocoder, map, infowindow) {
            var input = document.getElementById('latlng').value;
            var latlngStr = input.split(',', 2);
            var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
            geocoder.geocode({'location': latlng}, function(results, status) {
                if (status === 'OK') {
                    if (results[1]) {
                        map.setZoom(11);
                        var marker = new google.maps.Marker({
                            position: latlng,
                            map: map
                        });
                        infowindow.setContent(results[1].formatted_address);
                        infowindow.open(map, marker);
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
        }


    </script>
{% endblock %}", "CommandeBundle:LigneDeCommande:AjoutLigneDeCommande.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/CommandeBundle/Resources/views/LigneDeCommande/AjoutLigneDeCommande.html.twig");
    }
}
