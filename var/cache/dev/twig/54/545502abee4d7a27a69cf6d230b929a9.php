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

/* @EasyAdmin/menu.html.twig */
class __TwigTemplate_5f0c7217b47e02414057a9e32203b6b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/menu.html.twig"));

        // line 2
        echo "<nav id=\"main-menu\">
    ";
        // line 3
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 4
        echo "
    <ul class=\"menu\">
        ";
        // line 6
        $this->displayBlock('main_menu', $context, $blocks);
        // line 27
        echo "    </ul>

    ";
        // line 29
        $this->displayBlock('main_menu_after', $context, $blocks);
        // line 30
        echo "</nav>

";
        // line 37
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main_menu_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_main_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu"));

        // line 7
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 7, $this->source); })()), "mainMenu", [], "any", false, false, false, 7), "items", [], "any", false, false, false, 7));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 8
            echo "                ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 25
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_item"));

        // line 9
        echo "                    <li class=\"";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 9, $this->source); })()), "isMenuSection", [], "any", false, false, false, 9)) ? ("menu-header") : ("menu-item"));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 9, $this->source); })()), "hasSubItems", [], "any", false, false, false, 9)) ? ("has-submenu") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 9, $this->source); })()), "isSelected", [], "any", false, false, false, 9)) ? ("active") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 9, $this->source); })()), "isExpanded", [], "any", false, false, false, 9)) ? ("expanded") : (""));
        echo "\">
                        ";
        // line 10
        echo twig_call_macro($macros["_self"], "macro_render_menu_item", [(isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 10, $this->source); })())], 10, $context, $this->getSourceContext());
        echo "

                        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 12, $this->source); })()), "hasSubItems", [], "any", false, false, false, 12)) {
            // line 13
            echo "                            <ul class=\"submenu\">
                                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 14, $this->source); })()), "subItems", [], "any", false, false, false, 14));
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
            foreach ($context['_seq'] as $context["_key"] => $context["menuSubItem"]) {
                // line 15
                echo "                                    ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 20
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuSubItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                            </ul>
                        ";
        }
        // line 23
        echo "                    </li>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_menu_subitem($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_subitem"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_subitem"));

        // line 16
        echo "                                        <li class=\"";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["menuSubItem"]) || array_key_exists("menuSubItem", $context) ? $context["menuSubItem"] : (function () { throw new RuntimeError('Variable "menuSubItem" does not exist.', 16, $this->source); })()), "isMenuSection", [], "any", false, false, false, 16)) ? ("menu-header") : ("menu-item"));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["menuSubItem"]) || array_key_exists("menuSubItem", $context) ? $context["menuSubItem"] : (function () { throw new RuntimeError('Variable "menuSubItem" does not exist.', 16, $this->source); })()), "isSelected", [], "any", false, false, false, 16)) ? ("active") : (""));
        echo "\">
                                            ";
        // line 17
        echo twig_call_macro($macros["_self"], "macro_render_menu_item", [(isset($context["menuSubItem"]) || array_key_exists("menuSubItem", $context) ? $context["menuSubItem"] : (function () { throw new RuntimeError('Variable "menuSubItem" does not exist.', 17, $this->source); })())], 17, $context, $this->getSourceContext());
        echo "
                                        </li>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_main_menu_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function macro_render_html_attributes($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_html_attributes"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_html_attributes"));

            // line 33
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["attribute_name"] => $context["attribute_value"]) {
                // line 34
                echo "        ";
                echo twig_escape_filter($this->env, $context["attribute_name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attribute_value"], "html_attr");
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute_name'], $context['attribute_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 38
    public function macro_render_menu_item($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 39
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "isMenuSection", [], "any", false, false, false, 39)) {
                // line 40
                echo "        <span class=\"menu-header-contents\" ";
                echo twig_call_macro($macros["_self"], "macro_render_html_attributes", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })())], 40, $context, $this->getSourceContext());
                echo ">
            ";
                // line 41
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "icon", [], "any", false, false, false, 41))) {
                    echo "<i class=\"menu-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "icon", [], "any", false, false, false, 41), "html", null, true);
                    echo "\"></i>";
                }
                // line 42
                echo "            <span class=\"menu-item-label position-relative ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "cssClass", [], "any", false, false, false, 42), "html", null, true);
                echo "\">
                ";
                // line 43
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "label", [], "any", false, false, false, 43));
                echo "
            </span>
            ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "badge", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "                <span class=\"menu-item-badge rounded-pill badge ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "badge", [], "any", false, false, false, 46), "cssClass", [], "any", false, false, false, 46), "html", null, true);
                    echo "\" ";
                    echo twig_call_macro($macros["_self"], "macro_render_html_attributes", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "badge", [], "any", false, false, false, 46)], 46, $context, $this->getSourceContext());
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "badge", [], "any", false, false, false, 46), "htmlStyle", [], "any", false, false, false, 46), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "badge", [], "any", false, false, false, 46), "content", [], "any", false, false, false, 46), "html", null, true);
                    echo "</span>
            ";
                }
                // line 48
                echo "        </span>
    ";
            } else {
                // line 50
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })()), "linkUrl", [], "any", false, false, false, 50), "html", null, true);
                echo "\" class=\"menu-item-contents ";
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })()), "hasSubItems", [], "any", false, false, false, 50)) ? ("submenu-toggle") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })()), "cssClass", [], "any", false, false, false, 50), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })()), "linkTarget", [], "any", false, false, false, 50), "html", null, true);
                echo "\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })()), "linkRel", [], "any", false, false, false, 50), "html", null, true);
                echo "\" referrerpolicy=\"origin-when-cross-origin\" ";
                echo twig_call_macro($macros["_self"], "macro_render_html_attributes", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })())], 50, $context, $this->getSourceContext());
                echo ">
            ";
                // line 51
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "icon", [], "any", false, false, false, 51))) {
                    echo "<i class=\"menu-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "icon", [], "any", false, false, false, 51), "html", null, true);
                    echo "\"></i>";
                }
                // line 52
                echo "            <span class=\"menu-item-label position-relative\">
                ";
                // line 53
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "label", [], "any", false, false, false, 53));
                echo "
            </span>
            ";
                // line 55
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })()), "hasSubItems", [], "any", false, false, false, 55)) {
                    echo "<i class=\"fa fa-fw fa-angle-right submenu-toggle-icon\"></i>";
                }
                // line 56
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "badge", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "                <span class=\"menu-item-badge rounded-pill badge ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "badge", [], "any", false, false, false, 57), "cssClass", [], "any", false, false, false, 57), "html", null, true);
                    echo "\" ";
                    echo twig_call_macro($macros["_self"], "macro_render_html_attributes", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "badge", [], "any", false, false, false, 57)], 57, $context, $this->getSourceContext());
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "badge", [], "any", false, false, false, 57), "htmlStyle", [], "any", false, false, false, 57), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "badge", [], "any", false, false, false, 57), "content", [], "any", false, false, false, 57), "html", null, true);
                    echo "</span>
            ";
                }
                // line 59
                echo "        </a>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/menu.html.twig";
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
        return array (  439 => 59,  427 => 57,  424 => 56,  420 => 55,  415 => 53,  412 => 52,  406 => 51,  391 => 50,  387 => 48,  375 => 46,  373 => 45,  368 => 43,  363 => 42,  357 => 41,  352 => 40,  349 => 39,  330 => 38,  306 => 34,  301 => 33,  282 => 32,  264 => 29,  251 => 17,  244 => 16,  234 => 15,  223 => 23,  219 => 21,  205 => 20,  202 => 15,  185 => 14,  182 => 13,  180 => 12,  175 => 10,  164 => 9,  154 => 8,  144 => 26,  130 => 25,  127 => 8,  109 => 7,  99 => 6,  81 => 3,  70 => 37,  66 => 30,  64 => 29,  60 => 27,  58 => 6,  54 => 4,  52 => 3,  49 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
<nav id=\"main-menu\">
    {% block main_menu_before %}{% endblock %}

    <ul class=\"menu\">
        {% block main_menu %}
            {% for menuItem in ea.mainMenu.items %}
                {% block menu_item %}
                    <li class=\"{{ menuItem.isMenuSection ? 'menu-header' : 'menu-item' }} {{ menuItem.hasSubItems ? 'has-submenu' }} {{ menuItem.isSelected ? 'active' }} {{ menuItem.isExpanded ? 'expanded' }}\">
                        {{ _self.render_menu_item(menuItem) }}

                        {% if menuItem.hasSubItems %}
                            <ul class=\"submenu\">
                                {% for menuSubItem in menuItem.subItems %}
                                    {% block menu_subitem %}
                                        <li class=\"{{ menuSubItem.isMenuSection ? 'menu-header' : 'menu-item' }} {{ menuSubItem.isSelected ? 'active' }}\">
                                            {{ _self.render_menu_item(menuSubItem) }}
                                        </li>
                                    {% endblock menu_subitem %}
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </li>
                {% endblock menu_item %}
            {% endfor %}
        {% endblock main_menu %}
    </ul>

    {% block main_menu_after %}{% endblock %}
</nav>

{% macro render_html_attributes(item) %}
    {% for attribute_name, attribute_value in item.htmlAttributes %}
        {{ attribute_name }}=\"{{ attribute_value|e('html_attr') }}\"
    {% endfor %}
{% endmacro %}

{% macro render_menu_item(item) %}
    {% if item.isMenuSection %}
        <span class=\"menu-header-contents\" {{ _self.render_html_attributes(item) }}>
            {% if item.icon is not empty %}<i class=\"menu-icon fa-fw {{ item.icon }}\"></i>{% endif %}
            <span class=\"menu-item-label position-relative {{ item.cssClass }}\">
                {{ item.label|trans|raw }}
            </span>
            {% if item.badge %}
                <span class=\"menu-item-badge rounded-pill badge {{ item.badge.cssClass }}\" {{ _self.render_html_attributes(item.badge) }} style=\"{{ item.badge.htmlStyle }}\">{{ item.badge.content }}</span>
            {% endif %}
        </span>
    {% else %}
        <a href=\"{{ item.linkUrl }}\" class=\"menu-item-contents {{ item.hasSubItems ? 'submenu-toggle' }} {{ item.cssClass }}\" target=\"{{ item.linkTarget }}\" rel=\"{{ item.linkRel }}\" referrerpolicy=\"origin-when-cross-origin\" {{ _self.render_html_attributes(item) }}>
            {% if item.icon is not empty %}<i class=\"menu-icon fa-fw {{ item.icon }}\"></i>{% endif %}
            <span class=\"menu-item-label position-relative\">
                {{ item.label|trans|raw }}
            </span>
            {% if item.hasSubItems %}<i class=\"fa fa-fw fa-angle-right submenu-toggle-icon\"></i>{% endif %}
            {% if item.badge %}
                <span class=\"menu-item-badge rounded-pill badge {{ item.badge.cssClass }}\" {{ _self.render_html_attributes(item.badge) }} style=\"{{ item.badge.htmlStyle }}\">{{ item.badge.content }}</span>
            {% endif %}
        </a>
    {% endif %}
{% endmacro %}
", "@EasyAdmin/menu.html.twig", "/var/www/html/laboutiquefrancaise/vendor/easycorp/easyadmin-bundle/src/Resources/views/menu.html.twig");
    }
}
