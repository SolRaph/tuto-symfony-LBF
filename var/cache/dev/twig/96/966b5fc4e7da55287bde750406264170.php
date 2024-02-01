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

/* account/order_show.html.twig */
class __TwigTemplate_2cc5709830e457894b85c11958cb4018 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
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

        echo "Ma commandes - La Boutique Française";
        
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
        echo "    <h1>Ma commandes ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "reference", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>   
   <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\">Retourner à mon compte</a>
<hr><strong></strong>
<strong>Statut de la commande : </strong><br/>
      ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "state", [], "any", false, false, false, 10) == 1)) {
            // line 11
            echo "      <strong>Paiement accepté</strong>
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "state", [], "any", false, false, false, 12) == 2)) {
            // line 13
            echo "      <strong>Préparation en cours</strong>
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "state", [], "any", false, false, false, 14) == 3)) {
            // line 15
            echo "      <strong>Livraison en cours</strong>
      ";
        }
        // line 17
        echo "commande passée le : <strong>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "createdAt", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
        echo "</strong><br/>
Référence de ma commande : <strong>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "reference", [], "any", false, false, false, 18), "html", null, true);
        echo "</strong><br/>
Transporteur choisi : <strong>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()), "carriername", [], "any", false, false, false, 19), "html", null, true);
        echo "</strong>

<table class=\"table mt-5\">
  <thead>
    <tr>

      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix unitaire</th>
      <th scope=\"col\">Total</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 32, $this->source); })()), "orderDetails", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "    
    <tr>
      <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
      <td>x";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
      <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 37) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
      <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 38) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
    </tr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  </tbody>
</table>
<div class=\"text-end mt-5\">
<strong>Sous-total : </strong>";
        // line 44
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 44, $this->source); })()), "getTotal", [], "any", false, false, false, 44) / 100), 2, ",", "."), "html", null, true);
        echo " € <br> 
<strong>Livraison : </strong>";
        // line 45
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 45, $this->source); })()), "carrierprix", [], "any", false, false, false, 45) / 100), 2, ",", "."), "html", null, true);
        echo " € <br> 
<strong>Total : </strong>";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "carrierPrix", [], "any", false, false, false, 46) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "getTotal", [], "any", false, false, false, 46)) / 100), 2, ",", "."), "html", null, true);
        echo " €
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "account/order_show.html.twig";
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
        return array (  182 => 46,  178 => 45,  174 => 44,  169 => 41,  160 => 38,  156 => 37,  152 => 36,  148 => 35,  144 => 33,  140 => 32,  124 => 19,  120 => 18,  115 => 17,  111 => 15,  109 => 14,  106 => 13,  104 => 12,  101 => 11,  99 => 10,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ma commandes - La Boutique Française{% endblock %}

{% block content %}
    <h1>Ma commandes {{order.reference}}</h1>   
   <a href=\"{{path('app_account')}}\">Retourner à mon compte</a>
<hr><strong></strong>
<strong>Statut de la commande : </strong><br/>
      {% if order.state == 1 %}
      <strong>Paiement accepté</strong>
      {% elseif order.state == 2 %}
      <strong>Préparation en cours</strong>
      {% elseif order.state == 3 %}
      <strong>Livraison en cours</strong>
      {% endif %}
commande passée le : <strong>{{order.createdAt|date('d/m/Y')}}</strong><br/>
Référence de ma commande : <strong>{{order.reference}}</strong><br/>
Transporteur choisi : <strong>{{order.carriername}}</strong>

<table class=\"table mt-5\">
  <thead>
    <tr>

      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix unitaire</th>
      <th scope=\"col\">Total</th>
    </tr>
  </thead>
  <tbody>
  {% for product in order.orderDetails %}
    
    <tr>
      <td>{{product.product}}</td>
      <td>x{{product.quantity}}</td>
      <td>{{((product.prix) /100) |number_format(2, ',', '.')}} €</td>
      <td>{{((product.total) /100) |number_format(2, ',', '.')}} €</td>
    </tr>
   {% endfor %}
  </tbody>
</table>
<div class=\"text-end mt-5\">
<strong>Sous-total : </strong>{{((order.getTotal) /100) |number_format(2, ',', '.')}} € <br> 
<strong>Livraison : </strong>{{((order.carrierprix) /100) |number_format(2, ',', '.')}} € <br> 
<strong>Total : </strong>{{((order.carrierPrix + order.getTotal) / 100) |number_format(2, ',', '.')}} €
</div>
{% endblock %}", "account/order_show.html.twig", "/var/www/html/laboutiquefrancaise/templates/account/order_show.html.twig");
    }
}
