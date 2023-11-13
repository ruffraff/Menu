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

/* meal/index.html.twig */
class __TwigTemplate_48d55a4412a8500732c64e25a3ddaae4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meal/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meal/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "meal/index.html.twig", 1);
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

        echo "Food List and Macronutrients";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("meal_list"), "html", null, true);
        echo "</h1>
<div class=\"container\">
    <div class=\"col-9\">
        <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("selected_foods"), "html", null, true);
        echo "</h2>
        <table id=\"mealTable\">
            <thead>
                <tr>
                    <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("food"), "html", null, true);
        echo "</th>
                    <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("type"), "html", null, true);
        echo "</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("water"), "html", null, true);
        echo "</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("protein"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fat"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("carbohydrate"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fiber"), "html", null, true);
        echo "</th>
                    <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("slider"), "html", null, true);
        echo "</th>
                    <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedFoods"]) || array_key_exists("selectedFoods", $context) ? $context["selectedFoods"] : (function () { throw new RuntimeError('Variable "selectedFoods" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 27
            echo "                <tr>
                    <td  dataFoodId=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "type", [], "any", false, false, false, 29), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "type", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "water", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "water", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "protein", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "protein", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "fat", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "fat", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "carbohydrate", [], "any", false, false, false, 33), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "carbohydrate", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "fiber", [], "any", false, false, false, 34), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "fiber", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>
                        <input type='range' min='1' max='200' value='100' class='slider' onchange=\"updateFoodPercentage(this.value, '";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "')\">
                    </td>
                    <td>
                        <button onclick=\"deleteFood('";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "')\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cancel"), "html", null, true);
            echo "</button>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>
    <div class=\"col-3\">
        <h2>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("macronutrients"), "html", null, true);
        echo "</h2>
        <table id=\"macronutrientTable\">
            <thead>
                <tr>
                    <th>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("macronutrient"), "html", null, true);
        echo "</th>
                    <th>";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("value_grams"), "html", null, true);
        echo "</th>
                    <th>";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chart"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["macronutrients"]) || array_key_exists("macronutrients", $context) ? $context["macronutrients"] : (function () { throw new RuntimeError('Variable "macronutrients" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["macronutrient"] => $context["value"]) {
            // line 58
            echo "                <tr>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $context["macronutrient"], "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"line-chart\" style=\"width: ";
            // line 62
            echo twig_escape_filter($this->env, ($context["value"] * 5), "html", null, true);
            echo "px; background-color: #007BFF;\"></div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['macronutrient'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </tbody>
        </table>
    </div>
</div>
<div class=\"button-container\">
    <input type=\"button\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("insert_recipe"), "html", null, true);
        echo "\" onclick=\"window.location.href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recipe");
        echo "'\">
<input type=\"button\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("insert_food"), "html", null, true);
        echo "\" onclick=\"window.location.href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_food");
        echo "'\">
<input type=\"button\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("insert_menu"), "html", null, true);
        echo "\" onclick=\"window.location.href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu");
        echo "'\">
</div>

<h1>";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("food_list_and_macronutrients"), "html", null, true);
        echo "</h1>
<div class=\"search-container\">
    <label for=\"type\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter_by_type"), "html", null, true);
        echo "
   
 

<select id=\"type\" onchange=\"filterFoods()\">
    <option value=\"all\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("all"), "html", null, true);
        echo "</option>
    <option value=\"1\">";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cereals_and_derivatives"), "html", null, true);
        echo "</option>
    <option value=\"2\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("legumes"), "html", null, true);
        echo "</option>
    <option value=\"3\">";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("vegetables"), "html", null, true);
        echo "</option>
    <option value=\"4\">";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fruit"), "html", null, true);
        echo "</option>
    <option value=\"5\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fresh_meats"), "html", null, true);
        echo "</option>
    <option value=\"6\">";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("processed_meats"), "html", null, true);
        echo "</option>
    <option value=\"7\">";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("meat_based_fast_food"), "html", null, true);
        echo "</option>
    <option value=\"8\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("offal"), "html", null, true);
        echo "</option>
    <option value=\"9\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fish_products"), "html", null, true);
        echo "</option>
    <option value=\"10\">";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("milk_and_yogurt"), "html", null, true);
        echo "</option>
    <option value=\"11\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cheeses"), "html", null, true);
        echo "</option>
    <option value=\"12\">";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("eggs"), "html", null, true);
        echo "</option>
    <option value=\"13\">";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oils_and_fats"), "html", null, true);
        echo "</option>
    <option value=\"14\">";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sweets"), "html", null, true);
        echo "</option>
    <option value=\"15\">";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("various_products"), "html", null, true);
        echo "</option>
    <option value=\"16\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alcoholic_beverages"), "html", null, true);
        echo "</option>
</select>
<label for=\"search\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search_food"), "html", null, true);
        echo ":</label>
<input type=\"text\" id=\"search\" placeholder=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search_food_placeholder"), "html", null, true);
        echo "\" onkeyup=\"filterFoods()\">


    
    ";
        // line 107
        echo "</div>
<table id=\"foodTable\">
    <thead>
        <tr>
            <th>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("food"), "html", null, true);
        echo "</th>
            <th>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("type"), "html", null, true);
        echo "</th>
            <th>";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("water"), "html", null, true);
        echo "</th>
            <th>";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("protein"), "html", null, true);
        echo "</th>
            <th>";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fat"), "html", null, true);
        echo "</th>
            <th>";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("carbohydrate"), "html", null, true);
        echo "</th>
            <th>";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fiber"), "html", null, true);
        echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foodList"]) || array_key_exists("foodList", $context) ? $context["foodList"] : (function () { throw new RuntimeError('Variable "foodList" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 123
            echo "        <tr style=\"\" data-food-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 123), "html", null, true);
            echo "\" data-food-added=\"false\">
  <td datafoodid=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 124), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "getFoodName", [], "method", false, false, false, 124), "html", null, true);
            echo "</td>
  <td data-food-type=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["food"], "getFoodType", [], "method", false, false, false, 125), "getFoodTypeName", [], "method", false, false, false, 125), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["food"], "getFoodType", [], "method", false, false, false, 125), "getFoodTypeName", [], "method", false, false, false, 125), "html", null, true);
            echo "</td>
  <td dataoriginalvalue=\"water\">";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["food"], "getMacroElement", [], "method", false, false, false, 126), "getWater", [], "method", false, false, false, 126), "html", null, true);
            echo "</td>
  <td dataoriginalvalue=\"protein\">";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["food"], "getMacroElement", [], "method", false, false, false, 127), "getProtein", [], "method", false, false, false, 127), "html", null, true);
            echo "</td>
  <td dataoriginalvalue=\"fat\">";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["food"], "getMacroElement", [], "method", false, false, false, 128), "getLipids", [], "method", false, false, false, 128), "html", null, true);
            echo "</td>
  <td dataoriginalvalue=\"carbohydrate\">";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["food"], "getMacroElement", [], "method", false, false, false, 129), "getCarbohydrates", [], "method", false, false, false, 129), "html", null, true);
            echo "</td>
  <td dataoriginalvalue=\"fiber\">";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["food"], "getMacroElement", [], "method", false, false, false, 130), "getFiber", [], "method", false, false, false, 130), "html", null, true);
            echo "</td>
  <td>
    <button onclick=\"addFood(";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 132), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add"), "html", null, true);
            echo "</button>
  </td>
</tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "    </tbody>
 </table> 


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 143
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/meal.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "meal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 143,  492 => 142,  478 => 136,  466 => 132,  461 => 130,  457 => 129,  453 => 128,  449 => 127,  445 => 126,  439 => 125,  433 => 124,  428 => 123,  424 => 122,  416 => 117,  412 => 116,  408 => 115,  404 => 114,  400 => 113,  396 => 112,  392 => 111,  386 => 107,  379 => 102,  375 => 101,  370 => 99,  366 => 98,  362 => 97,  358 => 96,  354 => 95,  350 => 94,  346 => 93,  342 => 92,  338 => 91,  334 => 90,  330 => 89,  326 => 88,  322 => 87,  318 => 86,  314 => 85,  310 => 84,  306 => 83,  298 => 78,  293 => 76,  285 => 73,  279 => 72,  273 => 71,  266 => 66,  256 => 62,  251 => 60,  247 => 59,  244 => 58,  240 => 57,  233 => 53,  229 => 52,  225 => 51,  218 => 47,  212 => 43,  200 => 39,  194 => 36,  187 => 34,  181 => 33,  175 => 32,  169 => 31,  163 => 30,  157 => 29,  151 => 28,  148 => 27,  144 => 26,  137 => 22,  133 => 21,  129 => 20,  125 => 19,  121 => 18,  117 => 17,  113 => 16,  109 => 15,  105 => 14,  98 => 10,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Food List and Macronutrients{% endblock %}

{% block body %}

<h1>{{ 'meal_list'|trans }}</h1>
<div class=\"container\">
    <div class=\"col-9\">
        <h2>{{ 'selected_foods'|trans }}</h2>
        <table id=\"mealTable\">
            <thead>
                <tr>
                    <th>{{ 'food'|trans }}</th>
                    <th>{{ 'type'|trans }}</th>
                    <th>{{ 'water'|trans }}</th>
                    <th>{{ 'protein'|trans }}</th>
                    <th>{{ 'fat'|trans }}</th>
                    <th>{{ 'carbohydrate'|trans }}</th>
                    <th>{{ 'fiber'|trans }}</th>
                    <th>{{ 'slider'|trans }}</th>
                    <th>{{ 'delete'|trans }}</th>
                </tr>
            </thead>
            <tbody>
                {% for food in selectedFoods %}
                <tr>
                    <td  dataFoodId=\"{{ food.id }}\">{{ food.name }}</td>
                    <td dataOriginalValue=\"{{ food.type }}\">{{ food.type }}</td>
                    <td dataOriginalValue=\"{{ food.water }}\">{{ food.water }}</td>
                    <td dataOriginalValue=\"{{ food.protein }}\">{{ food.protein }}</td>
                    <td dataOriginalValue=\"{{ food.fat }}\">{{ food.fat }}</td>
                    <td dataOriginalValue=\"{{ food.carbohydrate }}\">{{ food.carbohydrate }}</td>
                    <td dataOriginalValue=\"{{ food.fiber }}\">{{ food.fiber }}</td>
                    <td>
                        <input type='range' min='1' max='200' value='100' class='slider' onchange=\"updateFoodPercentage(this.value, '{{ food.id }}')\">
                    </td>
                    <td>
                        <button onclick=\"deleteFood('{{ food.id }}')\">{{ 'cancel'|trans }}</button>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    <div class=\"col-3\">
        <h2>{{ 'macronutrients'|trans }}</h2>
        <table id=\"macronutrientTable\">
            <thead>
                <tr>
                    <th>{{ 'macronutrient'|trans }}</th>
                    <th>{{ 'value_grams'|trans }}</th>
                    <th>{{ 'chart'|trans }}</th>
                </tr>
            </thead>
            <tbody>
                {% for macronutrient, value in macronutrients %}
                <tr>
                    <td>{{ macronutrient }}</td>
                    <td>{{ value }}</td>
                    <td>
                        <div class=\"line-chart\" style=\"width: {{ value * 5 }}px; background-color: #007BFF;\"></div>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
<div class=\"button-container\">
    <input type=\"button\" value=\"{{ 'insert_recipe'|trans }}\" onclick=\"window.location.href='{{ path('app_recipe') }}'\">
<input type=\"button\" value=\"{{ 'insert_food'|trans }}\" onclick=\"window.location.href='{{ path('app_food') }}'\">
<input type=\"button\" value=\"{{ 'insert_menu'|trans }}\" onclick=\"window.location.href='{{ path('app_menu') }}'\">
</div>

<h1>{{ 'food_list_and_macronutrients'|trans }}</h1>
<div class=\"search-container\">
    <label for=\"type\">{{ 'filter_by_type'|trans }}
   
 

<select id=\"type\" onchange=\"filterFoods()\">
    <option value=\"all\">{{ 'all'|trans }}</option>
    <option value=\"1\">{{ 'cereals_and_derivatives'|trans }}</option>
    <option value=\"2\">{{ 'legumes'|trans }}</option>
    <option value=\"3\">{{ 'vegetables'|trans }}</option>
    <option value=\"4\">{{ 'fruit'|trans }}</option>
    <option value=\"5\">{{ 'fresh_meats'|trans }}</option>
    <option value=\"6\">{{ 'processed_meats'|trans }}</option>
    <option value=\"7\">{{ 'meat_based_fast_food'|trans }}</option>
    <option value=\"8\">{{ 'offal'|trans }}</option>
    <option value=\"9\">{{ 'fish_products'|trans }}</option>
    <option value=\"10\">{{ 'milk_and_yogurt'|trans }}</option>
    <option value=\"11\">{{ 'cheeses'|trans }}</option>
    <option value=\"12\">{{ 'eggs'|trans }}</option>
    <option value=\"13\">{{ 'oils_and_fats'|trans }}</option>
    <option value=\"14\">{{ 'sweets'|trans }}</option>
    <option value=\"15\">{{ 'various_products'|trans }}</option>
    <option value=\"16\">{{ 'alcoholic_beverages'|trans }}</option>
</select>
<label for=\"search\">{{ 'search_food'|trans }}:</label>
<input type=\"text\" id=\"search\" placeholder=\"{{ 'search_food_placeholder'|trans }}\" onkeyup=\"filterFoods()\">


    
    {# <input type=\"text\" id=\"search\" placeholder=\"{{ 'search_food_placeholder'|trans }}\"  onkeyup=\"filterFoods()\"  value=\"{{ app.request.get('search') }}\"> #}
</div>
<table id=\"foodTable\">
    <thead>
        <tr>
            <th>{{ 'food'|trans }}</th>
            <th>{{ 'type'|trans }}</th>
            <th>{{ 'water'|trans }}</th>
            <th>{{ 'protein'|trans }}</th>
            <th>{{ 'fat'|trans }}</th>
            <th>{{ 'carbohydrate'|trans }}</th>
            <th>{{ 'fiber'|trans }}</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        {% for food in foodList %}
        <tr style=\"\" data-food-id=\"{{ food.id }}\" data-food-added=\"false\">
  <td datafoodid=\"{{ food.id }}\">{{ food.getFoodName() }}</td>
  <td data-food-type=\"{{ food.getFoodType().getFoodTypeName() }}\">{{ food.getFoodType().getFoodTypeName() }}</td>
  <td dataoriginalvalue=\"water\">{{ food.getMacroElement().getWater() }}</td>
  <td dataoriginalvalue=\"protein\">{{ food.getMacroElement().getProtein() }}</td>
  <td dataoriginalvalue=\"fat\">{{ food.getMacroElement().getLipids() }}</td>
  <td dataoriginalvalue=\"carbohydrate\">{{ food.getMacroElement().getCarbohydrates() }}</td>
  <td dataoriginalvalue=\"fiber\">{{ food.getMacroElement().getFiber() }}</td>
  <td>
    <button onclick=\"addFood({{ food.id }})\">{{ 'add'|trans }}</button>
  </td>
</tr>
        {% endfor %}
    </tbody>
 </table> 


{% endblock %}

 {% block javascripts %}
            <script src=\"{{ asset('js/meal.js') }}\"></script>
        {% endblock %}", "meal/index.html.twig", "C:\\wamp64_3.3\\www\\Menu\\templates\\meal\\index.html.twig");
    }
}
