<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* order/add.html.twig */
class __TwigTemplate_ba0ab89d97d62bf5767c937987b8c6d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 3
        echo "<script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Valider ma commande - La boutique Française";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1>Mon récapitulatif </h1>
    <p>Verifiez vos infos avant la finalisation de commande </p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
           <strong>Mon adresse de livraison</strong><br>
            <div class=\"form-check mt-3\">
                ";
        // line 15
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 15, $this->source); })());
        echo "
            </div>
            
            <hr>
            <strong>Mon transporteur</strong><br>
                <div class=\"form-check\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "<br/>
                    ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
        echo "<br/>
                    ";
        // line 23
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 23, $this->source); })()), "prix", [], "any", false, false, false, 23) / 100), "2"), "html", null, true);
        echo " €            
                </div>

    


        </div>
        <div class=\"col-md-6\">
            <b>Ma commande</b><br>
            <div class=\"order-summary\"> 
            ";
        // line 33
        $context["quantitytotal"] = null;
        // line 34
        echo "            ";
        $context["total"] = null;
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "                <div class=\"row\">
                    <div class=\"col-2\">
                        <img src=\"/uploads/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "illustration", [], "any", false, false, false, 38), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
            echo "\"height=\"100px\"><br/>
                    </div>
                    <div class=\"col-8 my-auto\">
                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
            echo "<br/>
                        <small>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 42), "subtitle", [], "any", false, false, false, 42), "html", null, true);
            echo "
                        <br/>
                        x ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 44), "html", null, true);
            echo "</small>
                    </div>
                    <div class=\"col-2 my-auto\">
                        ";
            // line 47
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 47), "prix", [], "any", false, false, false, 47) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 47)) / 100), "2"), "html", null, true);
            echo " €
                    </div>
                </div>
                ";
            // line 50
            $context["quantitytotal"] = ((isset($context["quantitytotal"]) || array_key_exists("quantitytotal", $context) ? $context["quantitytotal"] : (function () { throw new RuntimeError('Variable "quantitytotal" does not exist.', 50, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 50));
            // line 51
            echo "                ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "prix", [], "any", false, false, false, 51) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 51)));
            echo "        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </div>
            
            <hr>
            <strong>Sous-total : </strong> ";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 56, $this->source); })()) / 100), "2"), "html", null, true);
        echo " €  <br>
            <strong>Livraison : </strong>  ";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 57, $this->source); })()), "prix", [], "any", false, false, false, 57) / 100), "2"), "html", null, true);
        echo " € 
            <hr>
            <strong> Total : ";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 59, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 59, $this->source); })()), "prix", [], "any", false, false, false, 59) / 100)), "2"), "html", null, true);
        echo " €</strong> 

            <a class=\"btn btn-success w-100 mt-3\" id=\"checkout-button\">Payer | ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 61, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 61, $this->source); })()), "prix", [], "any", false, false, false, 61) / 100)), "2"), "html", null, true);
        echo " €</a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 67
        echo "<script type=\"text/javascript\">
        var stripe = Stripe(\"pk_test_51OckepAVEdGJcLuc7E2ViW1FGVL6xTEzT86kNGuM5EkkEujtVg64MbBr6QUaJzlWsa6be5eSbCHlI5XFFUQoKrNw00cnHbMJnR\");
        var checkoutButton = document.getElementById(\"checkout-button\");
        checkoutButton.addEventListener(\"click\", function () {
            fetch(\"/commande/create-session/";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "\", {
                method: \"POST\",
            })
                .then(function (response) {
                    return response.json();
                })
                .then(function (session) {
                    if (session.error == 'order') {
                        window.location.replace('";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
        echo "');
                    } else {
                        return stripe.redirectToCheckout({ sessionId: session.id });
                    }
                })
                .then(function (result) {
                    if(result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function (error) {
                    console.error(\"Error:\", error);
                });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  264 => 79,  253 => 71,  247 => 67,  237 => 66,  223 => 61,  218 => 59,  213 => 57,  209 => 56,  204 => 53,  195 => 51,  193 => 50,  187 => 47,  181 => 44,  176 => 42,  172 => 41,  164 => 38,  160 => 36,  155 => 35,  152 => 34,  150 => 33,  137 => 23,  133 => 22,  129 => 21,  120 => 15,  111 => 8,  101 => 7,  82 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{%block javascript%}
<script src=\"https://js.stripe.com/v3/\"></script>
{% endblock %}
{% block title %}Valider ma commande - La boutique Française{% endblock %}

{% block content%}
    <h1>Mon récapitulatif </h1>
    <p>Verifiez vos infos avant la finalisation de commande </p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
           <strong>Mon adresse de livraison</strong><br>
            <div class=\"form-check mt-3\">
                {{delivery | raw}}
            </div>
            
            <hr>
            <strong>Mon transporteur</strong><br>
                <div class=\"form-check\">
                    {{carrier.name}}<br/>
                    {{carrier.description}}<br/>
                    {{(carrier.prix /100)|number_format('2') }} €            
                </div>

    


        </div>
        <div class=\"col-md-6\">
            <b>Ma commande</b><br>
            <div class=\"order-summary\"> 
            {% set quantitytotal = null %}
            {% set total = null %}
            {% for product in cart %}
                <div class=\"row\">
                    <div class=\"col-2\">
                        <img src=\"/uploads/{{product.product.illustration}}\" alt=\"{{product.product.name}}\"height=\"100px\"><br/>
                    </div>
                    <div class=\"col-8 my-auto\">
                        {{product.product.name}}<br/>
                        <small>{{product.product.subtitle}}
                        <br/>
                        x {{product.quantity}}</small>
                    </div>
                    <div class=\"col-2 my-auto\">
                        {{ ((product.product.prix * product.quantity)/ 100) |number_format('2') }} €
                    </div>
                </div>
                {% set quantitytotal = quantitytotal + (product.quantity) %}
                {% set total = total + (product.product.prix * product.quantity) %}        
            {% endfor %}
            </div>
            
            <hr>
            <strong>Sous-total : </strong> {{ (total/ 100) |number_format('2') }} €  <br>
            <strong>Livraison : </strong>  {{ (carrier.prix / 100) |number_format('2') }} € 
            <hr>
            <strong> Total : {{ ((total/ 100) + carrier.prix /100) |number_format('2') }} €</strong> 

            <a class=\"btn btn-success w-100 mt-3\" id=\"checkout-button\">Payer | {{ ((total/ 100) + carrier.prix /100) |number_format('2') }} €</a>
        </div>
    </div>
{% endblock %}

{%block script%}
<script type=\"text/javascript\">
        var stripe = Stripe(\"pk_test_51OckepAVEdGJcLuc7E2ViW1FGVL6xTEzT86kNGuM5EkkEujtVg64MbBr6QUaJzlWsa6be5eSbCHlI5XFFUQoKrNw00cnHbMJnR\");
        var checkoutButton = document.getElementById(\"checkout-button\");
        checkoutButton.addEventListener(\"click\", function () {
            fetch(\"/commande/create-session/{{reference }}\", {
                method: \"POST\",
            })
                .then(function (response) {
                    return response.json();
                })
                .then(function (session) {
                    if (session.error == 'order') {
                        window.location.replace('{{ path('app_order') }}');
                    } else {
                        return stripe.redirectToCheckout({ sessionId: session.id });
                    }
                })
                .then(function (result) {
                    if(result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function (error) {
                    console.error(\"Error:\", error);
                });
        });
    </script>
{% endblock %}
", "order/add.html.twig", "/var/www/html/laboutiquefrancaise/templates/order/add.html.twig");
    }
}
