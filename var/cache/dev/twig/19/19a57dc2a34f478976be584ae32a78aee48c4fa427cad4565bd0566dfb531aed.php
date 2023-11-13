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

/* recipe/index.html.twig */
class __TwigTemplate_26c32eebd5a6b285da4f11898a71f3a8b748299d04b1714044c44c0729eefe77 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipe/index.html.twig", 1);
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

        echo "Crea Ricetta";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/content.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

       .col-12 {
        width: 100%;
    }

.mt-4 {
        margin-top: 4rem;
    }
</style>
<div class=\"container\">
    <div class=\"col-12\">
        <h2>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("selected_foods"), "html", null, true);
        echo "</h2>
        <table id=\"mealTable\">
            <thead>
                <tr>
                    <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("food"), "html", null, true);
        echo "</th>
                    <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("type"), "html", null, true);
        echo "</th>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("water"), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("protein"), "html", null, true);
        echo "</th>
                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fat"), "html", null, true);
        echo "</th>
                    <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("carbohydrate"), "html", null, true);
        echo "</th>
                    <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fiber"), "html", null, true);
        echo "</th>
                    <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("slider"), "html", null, true);
        echo "</th>
                    <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedFoods"]) || array_key_exists("selectedFoods", $context) ? $context["selectedFoods"] : (function () { throw new RuntimeError('Variable "selectedFoods" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 40
            echo "                <tr>
                    <td dataFoodId=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "type", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "type", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "water", [], "any", false, false, false, 43), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "water", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "protein", [], "any", false, false, false, 44), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "protein", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "fat", [], "any", false, false, false, 45), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "fat", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "carbohydrate", [], "any", false, false, false, 46), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "carbohydrate", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td dataOriginalValue=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "fiber", [], "any", false, false, false, 47), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "fiber", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td>
                        <input type='range' min='1' max='200' value='100' class='slider' onchange=\"updateFoodPercentage(this.value, '";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "')\">
                    </td>
                    <td>
                        <button onclick=\"deleteFood('";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 52), "html", null, true);
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
        // line 56
        echo "            </tbody>
        </table>
    </div>
    <div class=\"col-12 mt-4\">
        <h2>Crea Ricetta</h2>
        <div class=\"form-group\">
            <label for=\"nomeRicetta\">Nome Ricetta</label>
            <input type=\"text\" id=\"nomeRicetta\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label for=\"descrizioneRicetta\">Descrizione Ricetta</label>
            <textarea id=\"descrizioneRicetta\" class=\"form-control\"></textarea>
        </div>
        <button onclick=\"inserisciRicetta()\" class=\"btn btn-primary\">Inserisci Ricetta</button>
    </div>
    <div class=\"col-12\">
        <h2>Ricette Inserite</h2>
        <table id=\"ricetteTable\">
            <thead>
                <tr>
                    <th>Nome Ricetta</th>
                    <th>Descrizione Ricetta</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ricetteInserite"]) || array_key_exists("ricetteInserite", $context) ? $context["ricetteInserite"] : (function () { throw new RuntimeError('Variable "ricetteInserite" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ricetta"]) {
            // line 84
            echo "                <tr>
                    <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ricetta"], "nome", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                    <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ricetta"], "descrizione", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                    <td>
                        <button onclick=\"deleteRicetta('";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ricetta"], "id", [], "any", false, false, false, 88), "html", null, true);
            echo "')\">Elimina</button>
</td>
<td>
<button onclick=\"mostraRicetta('";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ricetta"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "')\">Mostra</button>
</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ricetta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</tbody>
</table>
</div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/meal.js"), "html", null, true);
        echo "\"></script>
 
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/recipe.js"), "html", null, true);
        echo "\"></script>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recipe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 104,  333 => 102,  323 => 101,  308 => 95,  298 => 91,  292 => 88,  287 => 86,  283 => 85,  280 => 84,  276 => 83,  247 => 56,  235 => 52,  229 => 49,  222 => 47,  216 => 46,  210 => 45,  204 => 44,  198 => 43,  192 => 42,  186 => 41,  183 => 40,  179 => 39,  172 => 35,  168 => 34,  164 => 33,  160 => 32,  156 => 31,  152 => 30,  148 => 29,  144 => 28,  140 => 27,  133 => 23,  117 => 9,  107 => 8,  95 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Crea Ricetta{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/content.css') }}\">
{% endblock %}
{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

       .col-12 {
        width: 100%;
    }

.mt-4 {
        margin-top: 4rem;
    }
</style>
<div class=\"container\">
    <div class=\"col-12\">
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
                    <td dataFoodId=\"{{ food.id }}\">{{ food.name }}</td>
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
    <div class=\"col-12 mt-4\">
        <h2>Crea Ricetta</h2>
        <div class=\"form-group\">
            <label for=\"nomeRicetta\">Nome Ricetta</label>
            <input type=\"text\" id=\"nomeRicetta\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label for=\"descrizioneRicetta\">Descrizione Ricetta</label>
            <textarea id=\"descrizioneRicetta\" class=\"form-control\"></textarea>
        </div>
        <button onclick=\"inserisciRicetta()\" class=\"btn btn-primary\">Inserisci Ricetta</button>
    </div>
    <div class=\"col-12\">
        <h2>Ricette Inserite</h2>
        <table id=\"ricetteTable\">
            <thead>
                <tr>
                    <th>Nome Ricetta</th>
                    <th>Descrizione Ricetta</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {% for ricetta in ricetteInserite %}
                <tr>
                    <td>{{ ricetta.nome }}</td>
                    <td>{{ ricetta.descrizione }}</td>
                    <td>
                        <button onclick=\"deleteRicetta('{{ ricetta.id }}')\">Elimina</button>
</td>
<td>
<button onclick=\"mostraRicetta('{{ ricetta.id }}')\">Mostra</button>
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
 
<script src=\"{{ asset('js/recipe.js') }}\"></script>
 
{% endblock %}", "recipe/index.html.twig", "C:\\wamp64\\www\\Menu\\templates\\recipe\\index.html.twig");
    }
}
