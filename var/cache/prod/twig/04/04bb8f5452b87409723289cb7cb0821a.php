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
class __TwigTemplate_df0a4e271dde8c08125ddb1d118e842a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<script src=\"https://js.stripe.com/v3/\"></script>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Valider ma commande - La boutique Française";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo ($context["delivery"] ?? null);
        echo "
            </div>
            
            <hr>
            <strong>Mon transporteur</strong><br>
                <div class=\"form-check\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "<br/>
                    ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "description", [], "any", false, false, false, 22), "html", null, true);
        echo "<br/>
                    ";
        // line 23
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "prix", [], "any", false, false, false, 23) / 100), "2"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
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
            $context["quantitytotal"] = (($context["quantitytotal"] ?? null) + twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 50));
            // line 51
            echo "                ";
            $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "prix", [], "any", false, false, false, 51) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 51)));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), "2"), "html", null, true);
        echo " €  <br>
            <strong>Livraison : </strong>  ";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "prix", [], "any", false, false, false, 57) / 100), "2"), "html", null, true);
        echo " € 
            <hr>
            <strong> Total : ";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "prix", [], "any", false, false, false, 59) / 100)), "2"), "html", null, true);
        echo " €</strong> 

            <a class=\"btn btn-success w-100 mt-3\" id=\"checkout-button\">Payer | ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "prix", [], "any", false, false, false, 61) / 100)), "2"), "html", null, true);
        echo " €</a>
        </div>
    </div>
";
    }

    // line 66
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "<script type=\"text/javascript\">
        var stripe = Stripe(\"pk_test_51OckepAVEdGJcLuc7E2ViW1FGVL6xTEzT86kNGuM5EkkEujtVg64MbBr6QUaJzlWsa6be5eSbCHlI5XFFUQoKrNw00cnHbMJnR\");
        var checkoutButton = document.getElementById(\"checkout-button\");
        checkoutButton.addEventListener(\"click\", function () {
            fetch(\"/commande/create-session/";
        // line 71
        echo twig_escape_filter($this->env, ($context["reference"] ?? null), "html", null, true);
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
        return array (  210 => 79,  199 => 71,  193 => 67,  189 => 66,  181 => 61,  176 => 59,  171 => 57,  167 => 56,  162 => 53,  153 => 51,  151 => 50,  145 => 47,  139 => 44,  134 => 42,  130 => 41,  122 => 38,  118 => 36,  113 => 35,  110 => 34,  108 => 33,  95 => 23,  91 => 22,  87 => 21,  78 => 15,  69 => 8,  65 => 7,  58 => 5,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/add.html.twig", "/var/www/html/laboutiquefrancaise/templates/order/add.html.twig");
    }
}
