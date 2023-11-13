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

/* recipe/index.html copy.twig */
class __TwigTemplate_853dd042dba9d74e8d847f51918abae4a8e63a033f14cd46a4edbfd0f7806b78 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/index.html copy.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/index.html copy.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipe/index.html copy.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello RecipeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

 
</style>
<div class=\"container\">
<div class=\"col-9\">
        <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("selected_foods"), "html", null, true);
        echo "</h2>
        <table id=\"mealTable\">
            <thead>
                <tr>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("food"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("type"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("water"), "html", null, true);
        echo "</th>
                    <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("protein"), "html", null, true);
        echo "</th>
                    <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fat"), "html", null, true);
        echo "</th>
                    <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("carbohydrate"), "html", null, true);
        echo "</th>
                    <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fiber"), "html", null, true);
        echo "</th>
                    <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("slider"), "html", null, true);
        echo "</th>
                    <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedFoods"]) || array_key_exists("selectedFoods", $context) ? $context["selectedFoods"] : (function () { throw new RuntimeError('Variable "selectedFoods" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 31
            echo "                <tr>
                    <td  dataFoodId=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "type", [], "any", false, false, false, 33), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "type", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "water", [], "any", false, false, false, 34), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "water", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "protein", [], "any", false, false, false, 35), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "protein", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "fat", [], "any", false, false, false, 36), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "fat", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "carbohydrate", [], "any", false, false, false, 37), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "carbohydrate", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "fiber", [], "any", false, false, false, 38), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "fiber", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>
                        <input type='range' min='1' max='200' value='100' class='slider' onchange=\"updateFoodPercentage(this.value, '";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "')\">
                    </td>
                    <td>
                        <button onclick=\"deleteFood('";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 43), "html", null, true);
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
        // line 47
        echo "            </tbody>
        </table>
    </div>
    <div class=\"col-3\">
        <h2>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("macronutrients"), "html", null, true);
        echo "</h2>
        <table id=\"macronutrientTable\">
            <thead>
                <tr>
                    <th>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("macronutrient"), "html", null, true);
        echo "</th>
                    <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("value_grams"), "html", null, true);
        echo "</th>
                    <th>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chart"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["macronutrients"]) || array_key_exists("macronutrients", $context) ? $context["macronutrients"] : (function () { throw new RuntimeError('Variable "macronutrients" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["macronutrient"] => $context["value"]) {
            // line 62
            echo "                <tr>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $context["macronutrient"], "html", null, true);
            echo "</td>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"line-chart\" style=\"width: ";
            // line 66
            echo twig_escape_filter($this->env, ($context["value"] * 5), "html", null, true);
            echo "px; background-color: #007BFF;\"></div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['macronutrient'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/meal.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recipe/index.html copy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 76,  281 => 75,  267 => 70,  257 => 66,  252 => 64,  248 => 63,  245 => 62,  241 => 61,  234 => 57,  230 => 56,  226 => 55,  219 => 51,  213 => 47,  201 => 43,  195 => 40,  188 => 38,  182 => 37,  176 => 36,  170 => 35,  164 => 34,  158 => 33,  152 => 32,  149 => 31,  145 => 30,  138 => 26,  134 => 25,  130 => 24,  126 => 23,  122 => 22,  118 => 21,  114 => 20,  110 => 19,  106 => 18,  99 => 14,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello RecipeController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

 
</style>
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
{% endblock %}
 {% block javascripts %}
            <script src=\"{{ asset('js/meal.js') }}\"></script>
        {% endblock %}
", "recipe/index.html copy.twig", "C:\\wamp64\\www\\Menu\\templates\\recipe\\index.html copy.twig");
    }
}
