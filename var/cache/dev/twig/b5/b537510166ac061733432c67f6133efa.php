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

/* cart/index.html.twig */
class __TwigTemplate_fd40aa8508e0fab40743280a0175a240 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon panier - La Boutique Française";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"text-center mb-5\">
    <h1>Mon panier</h1>
    Retrouvez l'ensemble de votre panier sur cette page 
</div>
";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 10, $this->source); })())) > 0)) {
            // line 11
            echo "    
      <table class=\"table mt-3\">
    <thead>
      <tr>
      <th scope=\"col\"></th>
        <th scope=\"col\">Produits</th>
        <th scope=\"col\">Prix</th>
        <th scope=\"col\">Quantités</th>
        <th scope=\"col\">Total</th>
        <th scope=\"col\"></th>
      </tr>
    </thead>
    <tbody> 
      ";
            // line 24
            $context["quantitytotal"] = null;
            // line 25
            echo "      ";
            $context["total"] = null;
            // line 26
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 27
                echo "    
      <tr>
        <th>
          <img src=\"/uploads/";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "illustration", [], "any", false, false, false, 30), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
                echo "\"height=\"100px\"><br/>
          
        </th>
        <td>
              ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
                echo "<br/>
              <small>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "subtitle", [], "any", false, false, false, 35), "html", null, true);
                echo "</small>
        </td>
        <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 37), "prix", [], "any", false, false, false, 37) / 100), "2"), "html", null, true);
                echo " €</td>
        <td>
        <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\">
        <img src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/moins.png"), "html", null, true);
                echo "\"height=\"10px\" alt=\"moins\">
        </a>
        (x ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42), "html", null, true);
                echo ")
        <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">
        <img src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/plus.png"), "html", null, true);
                echo "\"height=\"10px\" alt=\"plus\">
        </a>
        </td>
        <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 47), "prix", [], "any", false, false, false, 47) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 47)) / 100), "2"), "html", null, true);
                echo " €</td>
        <td>

          <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\">
            <img src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/delete.png"), "html", null, true);
                echo "\"height=\"30px\" alt=\"supprimer mon produit\">     
          </a>

        </td>
      </tr>
      
          ";
                // line 57
                $context["quantitytotal"] = ((isset($context["quantitytotal"]) || array_key_exists("quantitytotal", $context) ? $context["quantitytotal"] : (function () { throw new RuntimeError('Variable "quantitytotal" does not exist.', 57, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 57));
                // line 58
                echo "          ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 58), "prix", [], "any", false, false, false, 58) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 58)));
                // line 59
                echo "    
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    </tbody>
  </table>
  <div class=\"text-center mb-5\">
      <b>Nombre de produit : </b>";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["quantitytotal"]) || array_key_exists("quantitytotal", $context) ? $context["quantitytotal"] : (function () { throw new RuntimeError('Variable "quantitytotal" does not exist.', 64, $this->source); })()), "html", null, true);
            echo "<br>
      <b>Total de mon panier</b>";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 65, $this->source); })()) / 100), "2"), "html", null, true);
            echo " €<br>
          <div class=\"d-grid mt-3\" >
              <a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            echo "\" class=\"btn btn-success btn-block\">Valider mon panier</a>
          </div>
  </div>
";
        } else {
            // line 71
            echo "<hr>
<p class= \"text-center fs-1\"><b>Votre panier est vide</b></p>
<a href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
            echo "\">Revenir à nos produits </a>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/index.html.twig";
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
        return array (  228 => 73,  224 => 71,  217 => 67,  212 => 65,  208 => 64,  203 => 61,  196 => 59,  193 => 58,  191 => 57,  182 => 51,  178 => 50,  172 => 47,  166 => 44,  162 => 43,  158 => 42,  153 => 40,  149 => 39,  144 => 37,  139 => 35,  135 => 34,  126 => 30,  121 => 27,  116 => 26,  113 => 25,  111 => 24,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier - La Boutique Française{% endblock %}

{% block content %}
<div class=\"text-center mb-5\">
    <h1>Mon panier</h1>
    Retrouvez l'ensemble de votre panier sur cette page 
</div>
{% if cart|length >0 %}
    
      <table class=\"table mt-3\">
    <thead>
      <tr>
      <th scope=\"col\"></th>
        <th scope=\"col\">Produits</th>
        <th scope=\"col\">Prix</th>
        <th scope=\"col\">Quantités</th>
        <th scope=\"col\">Total</th>
        <th scope=\"col\"></th>
      </tr>
    </thead>
    <tbody> 
      {% set quantitytotal = null %}
      {% set total = null %}
      {% for product in cart %}
    
      <tr>
        <th>
          <img src=\"/uploads/{{product.product.illustration}}\" alt=\"{{product.product.name}}\"height=\"100px\"><br/>
          
        </th>
        <td>
              {{product.product.name}}<br/>
              <small>{{product.product.subtitle}}</small>
        </td>
        <td>{{(product.product.prix / 100) |number_format('2')}} €</td>
        <td>
        <a href=\"{{ path('decrease_to_cart',{'id' : product.product.id})}}\">
        <img src=\"{{asset('assets/img/moins.png')}}\"height=\"10px\" alt=\"moins\">
        </a>
        (x {{product.quantity}})
        <a href=\"{{ path('add_to_cart',{'id' : product.product.id})}}\">
        <img src=\"{{asset('assets/img/plus.png')}}\"height=\"10px\" alt=\"plus\">
        </a>
        </td>
        <td>{{ ((product.product.prix * product.quantity)/ 100) |number_format('2') }} €</td>
        <td>

          <a href=\"{{ path('delete_to_cart', {'id' :product.product.id}) }}\">
            <img src=\"{{asset('assets/img/delete.png')}}\"height=\"30px\" alt=\"supprimer mon produit\">     
          </a>

        </td>
      </tr>
      
          {% set quantitytotal = quantitytotal + (product.quantity) %}
          {% set total = total + (product.product.prix * product.quantity) %}
    
    {% endfor %}
    </tbody>
  </table>
  <div class=\"text-center mb-5\">
      <b>Nombre de produit : </b>{{ quantitytotal }}<br>
      <b>Total de mon panier</b>{{ (total/ 100) |number_format('2') }} €<br>
          <div class=\"d-grid mt-3\" >
              <a href=\"{{path('app_order')}}\" class=\"btn btn-success btn-block\">Valider mon panier</a>
          </div>
  </div>
{% else %}
<hr>
<p class= \"text-center fs-1\"><b>Votre panier est vide</b></p>
<a href=\"{{path('app_products')}}\">Revenir à nos produits </a>
{% endif %}
{% endblock %}
", "cart/index.html.twig", "/var/www/html/laboutiquefrancaise/templates/cart/index.html.twig");
    }
}
