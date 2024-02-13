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

/* home/index.html.twig */
class __TwigTemplate_fa62af6e2babb0d2016e25a4a7b9e5c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'carousel' => [$this, 'block_carousel'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<h3>Nos meilleurs ventes</h3>
<p>Découvrez nos articles les plus vendus</p>
 <div class=\"row\">
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 10, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "    <div class=\"col-md-3\">
      ";
            // line 12
            $this->loadTemplate("products/single_product.html.twig", "home/index.html.twig", 12)->display($context);
            // line 13
            echo "    </div>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
      <div class=\"col-md-7\">
        <h2 class=\"featurette-heading fw-normal lh-1\">Une équipe de professionnel, <span class=\"text-muted\">avec des professionnels au grand savoir-faire.</span></h2>
        <p class=\"lead\">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class=\"col-md-5\">
        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/067 first.jpg"), "html", null, true);
        echo "\" class='img-fluid' alt=\"un savoir faire français\">
      </div>
    </div>

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
      <div class=\"col-md-7 order-md-2\">
        <h2 class=\"featurette-heading fw-normal lh-1\">Venez à notre rencontres dans nos différentes  <span class=\"text-muted\">boutiques en france.</span></h2>
        <p class=\"lead\">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class=\"col-md-5 order-md-1\">
        <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/067 second.jpg"), "html", null, true);
        echo "\" class='img-fluid' alt=\"une boutique ouverte toute l'année \">
      </div>
    </div>

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
      <div class=\"col-md-7\">
        <h2 class=\"featurette-heading fw-normal lh-1\">And lastly, this one. <span class=\"text-muted\">Checkmate.</span></h2>
        <p class=\"lead\">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class=\"col-md-5\">
      </div>
    </div>

    <hr class=\"featurette-divider\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  159 => 40,  144 => 28,  129 => 15,  114 => 13,  112 => 12,  109 => 11,  92 => 10,  87 => 7,  77 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block carousel %}{% endblock %}
  

{% block content %}
<h3>Nos meilleurs ventes</h3>
<p>Découvrez nos articles les plus vendus</p>
 <div class=\"row\">
  {% for product in products %}
    <div class=\"col-md-3\">
      {% include 'products/single_product.html.twig' %}
    </div>
  {% endfor %}
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
      <div class=\"col-md-7\">
        <h2 class=\"featurette-heading fw-normal lh-1\">Une équipe de professionnel, <span class=\"text-muted\">avec des professionnels au grand savoir-faire.</span></h2>
        <p class=\"lead\">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class=\"col-md-5\">
        <img src=\"{{asset('assets/img/067 first.jpg')}}\" class='img-fluid' alt=\"un savoir faire français\">
      </div>
    </div>

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
      <div class=\"col-md-7 order-md-2\">
        <h2 class=\"featurette-heading fw-normal lh-1\">Venez à notre rencontres dans nos différentes  <span class=\"text-muted\">boutiques en france.</span></h2>
        <p class=\"lead\">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class=\"col-md-5 order-md-1\">
        <img src=\"{{asset('assets/img/067 second.jpg')}}\" class='img-fluid' alt=\"une boutique ouverte toute l'année \">
      </div>
    </div>

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
      <div class=\"col-md-7\">
        <h2 class=\"featurette-heading fw-normal lh-1\">And lastly, this one. <span class=\"text-muted\">Checkmate.</span></h2>
        <p class=\"lead\">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class=\"col-md-5\">
      </div>
    </div>

    <hr class=\"featurette-divider\">
{% endblock %}
", "home/index.html.twig", "/var/www/html/laboutiquefrancaise/templates/home/index.html.twig");
    }
}
