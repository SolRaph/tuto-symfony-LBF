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
class __TwigTemplate_c5cbc8f5d51e47061b2d698fe056486a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ma commandes - La Boutique Française";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Ma commandes ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>   
   <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\">Retourner à mon compte</a>
<hr><strong></strong>
<strong>Statut de la commande : </strong><br/>
      ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "state", [], "any", false, false, false, 10) == 1)) {
            // line 11
            echo "      <strong>Paiement accepté</strong>
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 12
($context["order"] ?? null), "state", [], "any", false, false, false, 12) == 2)) {
            // line 13
            echo "      <strong>Préparation en cours</strong>
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 14
($context["order"] ?? null), "state", [], "any", false, false, false, 14) == 3)) {
            // line 15
            echo "      <strong>Livraison en cours</strong>
      ";
        }
        // line 17
        echo "commande passée le : <strong>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
        echo "</strong><br/>
Référence de ma commande : <strong>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 18), "html", null, true);
        echo "</strong><br/>
Transporteur choisi : <strong>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carriername", [], "any", false, false, false, 19), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderDetails", [], "any", false, false, false, 32));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 44) / 100), 2, ",", "."), "html", null, true);
        echo " € <br> 
<strong>Livraison : </strong>";
        // line 45
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierprix", [], "any", false, false, false, 45) / 100), 2, ",", "."), "html", null, true);
        echo " € <br> 
<strong>Total : </strong>";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierPrix", [], "any", false, false, false, 46) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 46)) / 100), 2, ",", "."), "html", null, true);
        echo " €
</div>
";
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
        return array (  152 => 46,  148 => 45,  144 => 44,  139 => 41,  130 => 38,  126 => 37,  122 => 36,  118 => 35,  114 => 33,  110 => 32,  94 => 19,  90 => 18,  85 => 17,  81 => 15,  79 => 14,  76 => 13,  74 => 12,  71 => 11,  69 => 10,  63 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order_show.html.twig", "/var/www/html/laboutiquefrancaise/templates/account/order_show.html.twig");
    }
}
