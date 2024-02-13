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
class __TwigTemplate_9c6071a11a9b17d58bfade429d69842d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon panier - La Boutique Française";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"text-center mb-5\">
    <h1>Mon panier</h1>
    Retrouvez l'ensemble de votre panier sur cette page 
</div>
";
        // line 10
        if ((twig_length_filter($this->env, ($context["cart"] ?? null)) > 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
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
                $context["quantitytotal"] = (($context["quantitytotal"] ?? null) + twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 57));
                // line 58
                echo "          ";
                $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 58), "prix", [], "any", false, false, false, 58) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 58)));
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
            echo twig_escape_filter($this->env, ($context["quantitytotal"] ?? null), "html", null, true);
            echo "<br>
      <b>Total de mon panier</b>";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), "2"), "html", null, true);
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
        return array (  198 => 73,  194 => 71,  187 => 67,  182 => 65,  178 => 64,  173 => 61,  166 => 59,  163 => 58,  161 => 57,  152 => 51,  148 => 50,  142 => 47,  136 => 44,  132 => 43,  128 => 42,  123 => 40,  119 => 39,  114 => 37,  109 => 35,  105 => 34,  96 => 30,  91 => 27,  86 => 26,  83 => 25,  81 => 24,  66 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/var/www/html/laboutiquefrancaise/templates/cart/index.html.twig");
    }
}
