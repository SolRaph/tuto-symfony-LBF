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

/* account/order.html.twig */
class __TwigTemplate_f7cde6a4229a0efdd49898ef226777a3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes commandes - La Boutique Française";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Mes commandes</h1>   
    C'est dans cet espace que vous pouvez gérer vos commandes.<br>
   <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\">Retourner à mon compte</a>
    <hr>
    ";
        // line 10
        if ((twig_length_filter($this->env, ($context["orders"] ?? null)) == 0)) {
            // line 11
            echo "        <p class=\"text-center mt-5\">Vous n'avez pas encore passé de commande </p>  
        ";
        } else {
            // line 13
            echo "    <table class=\"table\">
        <thead>
            <tr>    
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Statut</th>               
                <th scope=\"col\">Passé le</th>
                <th scope=\"col\">Produits</th>
                <th scope=\"col\">Total</th>
            </tr>
        </thead>
    <tbody>
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 25
                echo "            <tr>                           
                <td><span class='badge bg-secondary'>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 26), "html", null, true);
                echo "</span></td>
                <td>
                    ";
                // line 28
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "state", [], "any", false, false, false, 28) == 1)) {
                    // line 29
                    echo "                    <strong>Paiement accepté</strong>
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 30
$context["order"], "state", [], "any", false, false, false, 30) == 2)) {
                    // line 31
                    echo "                    <strong>Préparation en cours</strong>
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 32
$context["order"], "state", [], "any", false, false, false, 32) == 3)) {
                    // line 33
                    echo "                    <strong>Livraison en cours</strong>
                    ";
                }
                // line 35
                echo "                        
                </td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 38)), "html", null, true);
                echo "</td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrix", [], "any", false, false, false, 39) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 39)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                <td class='text-end'><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">voir ma commande</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    </tbody>
    </table>

        ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "account/order.html.twig";
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
        return array (  139 => 43,  130 => 40,  126 => 39,  122 => 38,  118 => 37,  114 => 35,  110 => 33,  108 => 32,  105 => 31,  103 => 30,  100 => 29,  98 => 28,  93 => 26,  90 => 25,  86 => 24,  73 => 13,  69 => 11,  67 => 10,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order.html.twig", "/var/www/html/laboutiquefrancaise/templates/account/order.html.twig");
    }
}
