<?php

/* CommandeBundle:LigneDeCommande:AjoutLigneDeCommande.html.twig */
class __TwigTemplate_3639a4139900db7b0dce485f5383c852ac1f0d3ab3fad2a80c5fdb56f7f3f132 extends Twig_Template
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
        $__internal_4dc1fdc3e58dab1b3e9a3f3e811d31c70b9fe62e3e3f7912171be005549f198a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc1fdc3e58dab1b3e9a3f3e811d31c70b9fe62e3e3f7912171be005549f198a->enter($__internal_4dc1fdc3e58dab1b3e9a3f3e811d31c70b9fe62e3e3f7912171be005549f198a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:LigneDeCommande:AjoutLigneDeCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dc1fdc3e58dab1b3e9a3f3e811d31c70b9fe62e3e3f7912171be005549f198a->leave($__internal_4dc1fdc3e58dab1b3e9a3f3e811d31c70b9fe62e3e3f7912171be005549f198a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_309fe4ca6cfccf53cd55bfc5606a5e894d1a8ea9442c31c9deec923bf8e451b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309fe4ca6cfccf53cd55bfc5606a5e894d1a8ea9442c31c9deec923bf8e451b8->enter($__internal_309fe4ca6cfccf53cd55bfc5606a5e894d1a8ea9442c31c9deec923bf8e451b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_309fe4ca6cfccf53cd55bfc5606a5e894d1a8ea9442c31c9deec923bf8e451b8->leave($__internal_309fe4ca6cfccf53cd55bfc5606a5e894d1a8ea9442c31c9deec923bf8e451b8_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b6d338f556fcaf654cbeeea6aa49372611d872fec66e244272172d37a56edc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6d338f556fcaf654cbeeea6aa49372611d872fec66e244272172d37a56edc2->enter($__internal_4b6d338f556fcaf654cbeeea6aa49372611d872fec66e244272172d37a56edc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4b6d338f556fcaf654cbeeea6aa49372611d872fec66e244272172d37a56edc2->leave($__internal_4b6d338f556fcaf654cbeeea6aa49372611d872fec66e244272172d37a56edc2_prof);

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
        return array (  118 => 43,  114 => 42,  110 => 41,  106 => 40,  102 => 39,  98 => 38,  94 => 37,  87 => 32,  81 => 31,  59 => 16,  54 => 14,  41 => 3,  35 => 2,  11 => 1,);
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
