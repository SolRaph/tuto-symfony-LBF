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

/* base.html.twig */
class __TwigTemplate_4df3ed27294b9cdce0b95f513c662f88 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"La boutique qui ne vend que du made in France\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.108.0\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">

  ";
        // line 14
        $this->displayBlock('javascript', $context, $blocks);
        // line 16
        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
    <link href=\"/docs/5.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">

    <!-- Favicons -->
<link rel=\"apple-touch-icon\" href=\"/docs/5.3/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
<link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
<link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
<link rel=\"manifest\" href=\"/docs/5.3/assets/img/favicons/manifest.json\">
<link rel=\"mask-icon\" href=\"/docs/5.3/assets/img/favicons/safari-pinned-tab.svg\" color=\"#712cf9\">
<link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon.ico\">
<meta name=\"theme-color\" content=\"#712cf9\">


    
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/boutiquefrancaise.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  </head>
  <body>
    
<header>
  <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">La Boutique Française</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        echo "\">Nos Produits</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"\">Qui sommes-nous ?</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Contact</a>
          </li>
        </ul>
        <div class=\"navbar-item-custom\">
        ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Mon Compte <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "firstname", [], "any", false, false, false, 57), "html", null, true);
            echo ")</small></a>  |  <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
        ";
        } else {
            // line 59
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>  |  <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registrer");
            echo "\">Inscription</a>
        ";
        }
        // line 61
        echo "

        </div>
        <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\">
          <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/cart.png"), "html", null, true);
        echo "\" alt=\"Mon panier\" class=\"cart-icon\">
        </a>
      </div>
    </div>
  </nav>
</header>

<main>

  ";
        // line 74
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 75
            echo "  <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
    <div class=\"carousel-indicators\">
      <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
      <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
      <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
    </div>
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\">
        <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
        <div class=\"container\">
          <div class=\"carousel-caption text-start\">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class=\"carousel-item\">
        <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
        <div class=\"container\">
          <div class=\"carousel-caption\">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class=\"carousel-item\">
        <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
        <div class=\"container\">
          <div class=\"carousel-caption text-end\">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Previous</span>
    </button>
    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Next</span>
    </button>
  </div>
";
        }
        // line 123
        echo "
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class=\"container marketing ";
        // line 128
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo " %}\">
    ";
        // line 129
        $this->displayBlock('content', $context, $blocks);
        // line 131
        echo "
  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class=\"footer-custom\">
    <p>&copy; 2017–2022 La Boutique Française <br>
    <small>La boutique 100% made in France.</small> <br>
    <a href=\"#\">Privacy</a>  <a href=\"#\">Terms</a></p>
  </footer>
</main>


    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

      
  </body>
  ";
        // line 148
        $this->displayBlock('script', $context, $blocks);
        // line 150
        echo "</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "La Boutique française - 100% MADE in France ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 15
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 130
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 148
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 149
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  335 => 149,  325 => 148,  315 => 130,  305 => 129,  295 => 15,  285 => 14,  266 => 10,  256 => 150,  254 => 148,  247 => 144,  232 => 131,  230 => 129,  224 => 128,  217 => 123,  167 => 75,  165 => 74,  153 => 65,  149 => 64,  144 => 61,  136 => 59,  126 => 57,  124 => 56,  111 => 46,  101 => 39,  91 => 32,  87 => 31,  70 => 16,  68 => 14,  63 => 12,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"La boutique qui ne vend que du made in France\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.108.0\">
    <title>{% block title %}La Boutique française - 100% MADE in France {% endblock %}</title>

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">

  {% block javascript %}
  {% endblock javascript %}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
    <link href=\"/docs/5.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">

    <!-- Favicons -->
<link rel=\"apple-touch-icon\" href=\"/docs/5.3/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
<link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
<link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
<link rel=\"manifest\" href=\"/docs/5.3/assets/img/favicons/manifest.json\">
<link rel=\"mask-icon\" href=\"/docs/5.3/assets/img/favicons/safari-pinned-tab.svg\" color=\"#712cf9\">
<link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon.ico\">
<meta name=\"theme-color\" content=\"#712cf9\">


    
    <!-- Custom styles for this template -->
    <link href=\"{{ asset('assets/css/carousel.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/boutiquefrancaise.css') }}\" rel=\"stylesheet\">
  </head>
  <body>
    
<header>
  <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand\" href=\"{{path('app_home')}}\">La Boutique Française</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{path('app_products')}}\">Nos Produits</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"\">Qui sommes-nous ?</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Contact</a>
          </li>
        </ul>
        <div class=\"navbar-item-custom\">
        {% if app.user %}
        <a href=\"{{path('app_account')}}\">Mon Compte <small>({{app.user.firstname}})</small></a>  |  <a href=\"{{path('app_logout')}}\">Déconnexion</a>
        {% else %}
        <a href=\"{{path('app_login')}}\">Connexion</a>  |  <a href=\"{{path('app_registrer')}}\">Inscription</a>
        {% endif %}


        </div>
        <a href=\"{{path('app_cart')}}\">
          <img src=\"{{asset('assets/img/cart.png')}}\" alt=\"Mon panier\" class=\"cart-icon\">
        </a>
      </div>
    </div>
  </nav>
</header>

<main>

  {% if block('carousel') is defined %}
  <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
    <div class=\"carousel-indicators\">
      <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
      <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
      <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
    </div>
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\">
        <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
        <div class=\"container\">
          <div class=\"carousel-caption text-start\">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class=\"carousel-item\">
        <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
        <div class=\"container\">
          <div class=\"carousel-caption\">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class=\"carousel-item\">
        <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
        <div class=\"container\">
          <div class=\"carousel-caption text-end\">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Previous</span>
    </button>
    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Next</span>
    </button>
  </div>
{% endif %}

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class=\"container marketing {% if block('carousel') is not defined %}mt-5{% endif %} %}\">
    {% block content %}
    {% endblock %}

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class=\"footer-custom\">
    <p>&copy; 2017–2022 La Boutique Française <br>
    <small>La boutique 100% made in France.</small> <br>
    <a href=\"#\">Privacy</a>  <a href=\"#\">Terms</a></p>
  </footer>
</main>


    <script src=\"{{ asset('assets/js/bootstrap.bundle.min.js') }}\"></script>

      
  </body>
  {% block script %}
  {% endblock %}
</html>", "base.html.twig", "/var/www/html/laboutiquefrancaise/templates/base.html.twig");
    }
}
