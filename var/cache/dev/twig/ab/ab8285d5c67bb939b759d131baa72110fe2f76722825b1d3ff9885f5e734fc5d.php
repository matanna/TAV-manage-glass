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

/* list/list.html.twig */
class __TwigTemplate_b7b525101b5bdfc7dc9684da5a2ac09ad54a72fba2eda20ab53d4d36e390a5d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "list/list.html.twig", 1);
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

        echo "Stock chute Float TAV 1";
        
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
        echo "<div class=\"row d-flex align-items-center\">
  <div class=\"col-6\">
    <h1 class=\"m-2\"><img src=\"img/TAV-LOGO-RVB_petit.jpg\" id=\"logo\" class=\"mr-5\"/>Stock chutes Float TAV 1</h1>
  </div>
  <div class=\"col-6\">
    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("matiere"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg\">Gérer les matières</a>  
  </div>
</div>
<hr>

<div class=\"m-3\">
  <h2>Ajouter une chute</h2>
  <table class=\"table table-hover\">
    <tbody>
      <tr class=\"table-secondary\">
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
        <td>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "matiere", [], "any", false, false, false, 22), 'row');
        echo "</td>
        <td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "longueur", [], "any", false, false, false, 23), 'row', ["attr" => ["placeholder" => "Longueur"]]);
        echo "</td>
        <td>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "largeur", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Largeur"]]);
        echo "</td>
        <td>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "quantite", [], "any", false, false, false, 25), 'row', ["attr" => ["placeholder" => "Quantité"]]);
        echo "</td>
        <td><button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button></td>
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
      </tr>
    </tbody>
  </table>
</div>

";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            echo "    <div class=\"flash-notice\">
        <p class=\"text-warning m-3\">";
            // line 35
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
<div class=\"m-3\">
  <table class=\"table table-hover\">
    <thead>
      <tr>
        <th scope=\"col\">Matière</th>
        <th scope=\"col\">Longueur</th>
        <th scope=\"col\">Largeur</th>
        <th scope=\"col\">Quantité</th>
        <th scope=\"col\">Disponibilté</th>
        <th scope=\"col\">Modifier</th>
        <th scope=\"col\">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chutes"]) || array_key_exists("chutes", $context) ? $context["chutes"] : (function () { throw new RuntimeError('Variable "chutes" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chute"]) {
            // line 54
            echo "      <tr class=\"table-primary\">
        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chute"], "matiere", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chute"], "longueur", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chute"], "largeur", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chute"], "quantite", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
        <td>
          ";
            // line 60
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["chute"], "used", [], "any", false, false, false, 60), true))) {
                // line 61
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("noUse_chute/" . twig_get_attribute($this->env, $this->source, $context["chute"], "id", [], "any", false, false, false, 61))), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-outline-secondary\">Annuler</a>
            <span class=\"ml-3 text-primary\">Non Disponible</span>
          ";
            } else {
                // line 64
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("use_chute/" . twig_get_attribute($this->env, $this->source, $context["chute"], "id", [], "any", false, false, false, 64))), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-success\">Utiliser</a>
            <span class=\"ml-3 text-primary\">Disponible</span>
          ";
            }
            // line 67
            echo "        </td>
        <td>
            <a href=\"#\" data-toggle=\"modal\" data-target=\"";
            // line 69
            echo twig_escape_filter($this->env, ("#edit-chute" . twig_get_attribute($this->env, $this->source, $context["chute"], "id", [], "any", false, false, false, 69)), "html", null, true);
            echo "\" class=\"edit\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
                    <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                    <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                </svg>
            </a>
            <div class=\"modal\" id=\"";
            // line 75
            echo twig_escape_filter($this->env, ("edit-chute" . twig_get_attribute($this->env, $this->source, $context["chute"], "id", [], "any", false, false, false, 75)), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <h5 class=\"modal-title\">Modifier</h5>
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                      </button>
                    </div>
                    <div class=\"modal-body\">
                        <form method=\"post\" action=\"";
            // line 85
            echo twig_escape_filter($this->env, ("/edit_chute/" . twig_get_attribute($this->env, $this->source, $context["chute"], "id", [], "any", false, false, false, 85)), "html", null, true);
            echo "\">
                            <h5 class=\"text-primary\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chute"], "matiere", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86), "html", null, true);
            echo "</h5>
                            <hr>
                            <div class=\"row\">
                              <div class=\"col-3\"><label for=\"modify_longueur\" class=\"mr-4\">Longueur : </label></div>
                              <div class=\"col-3\"><input type=\"text\" name=\"modify_longueur\" id=\"modify_longueur\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chute"], "longueur", [], "any", false, false, false, 90), "html", null, true);
            echo "\"></div>
                            </div>
                            <div class=\"row mt-3\">
                              <div class=\"col-3\"><label for=\"modify_longueur\" class=\"mr-4\">Largeur : </label></div>
                              <div class=\"col-3\"><input type=\"text\" name=\"modify_largeur\" id=\"modify_largeur\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chute"], "largeur", [], "any", false, false, false, 94), "html", null, true);
            echo "\"></div>
                            </div>
                            <div class=\"row mt-3\">
                              <div class=\"col-3\"><label for=\"modify_longueur\" class=\"mr-4\">Quantité : </label></div>
                              <div class=\"col-3\"><input type=\"text\" name=\"modify_quantite\" id=\"modify_quantite\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chute"], "quantite", [], "any", false, false, false, 98), "html", null, true);
            echo "\"></div>
                            </div>
                            <div class=\"row mt-3\">
                              <div class=\"col-3\"><button type=\"submit\" class=\"btn btn-primary text-right\">Modifier</button></div>
                            </div>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        ";
            // line 107
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_end');
            echo "
                    </div>
                  </div>
                </div>
            </div>
        </td>
        <td>
            <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("delete_chute/" . twig_get_attribute($this->env, $this->source, $context["chute"], "id", [], "any", false, false, false, 114))), "html", null, true);
            echo "\" class=\"delete\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                </svg>
            </a>
        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "    </tbody>
  </table>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "list/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 123,  284 => 114,  274 => 107,  262 => 98,  255 => 94,  248 => 90,  241 => 86,  237 => 85,  224 => 75,  215 => 69,  211 => 67,  204 => 64,  197 => 61,  195 => 60,  190 => 58,  186 => 57,  182 => 56,  178 => 55,  175 => 54,  171 => 53,  154 => 38,  145 => 35,  142 => 34,  138 => 33,  129 => 27,  124 => 25,  120 => 24,  116 => 23,  112 => 22,  108 => 21,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Stock chute Float TAV 1{% endblock %}

{% block body %}
<div class=\"row d-flex align-items-center\">
  <div class=\"col-6\">
    <h1 class=\"m-2\"><img src=\"img/TAV-LOGO-RVB_petit.jpg\" id=\"logo\" class=\"mr-5\"/>Stock chutes Float TAV 1</h1>
  </div>
  <div class=\"col-6\">
    <a href=\"{{ asset('matiere') }}\" class=\"btn btn-primary btn-lg\">Gérer les matières</a>  
  </div>
</div>
<hr>

<div class=\"m-3\">
  <h2>Ajouter une chute</h2>
  <table class=\"table table-hover\">
    <tbody>
      <tr class=\"table-secondary\">
        {{ form_start(form) }}
        <td>{{ form_row(form.matiere) }}</td>
        <td>{{ form_row(form.longueur, {'attr': {'placeholder': \"Longueur\"}}) }}</td>
        <td>{{ form_row(form.largeur, {'attr': {'placeholder': \"Largeur\"}}) }}</td>
        <td>{{ form_row(form.quantite, {'attr': {'placeholder': \"Quantité\"}}) }}</td>
        <td><button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button></td>
        {{ form_end(form) }}
      </tr>
    </tbody>
  </table>
</div>

{% for message in app.flashes('warning') %}
    <div class=\"flash-notice\">
        <p class=\"text-warning m-3\">{{ message }}</p>
    </div>
{% endfor %}

<div class=\"m-3\">
  <table class=\"table table-hover\">
    <thead>
      <tr>
        <th scope=\"col\">Matière</th>
        <th scope=\"col\">Longueur</th>
        <th scope=\"col\">Largeur</th>
        <th scope=\"col\">Quantité</th>
        <th scope=\"col\">Disponibilté</th>
        <th scope=\"col\">Modifier</th>
        <th scope=\"col\">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      {% for chute in chutes %}
      <tr class=\"table-primary\">
        <td>{{ chute.matiere.name }}</td>
        <td>{{ chute.longueur }}</td>
        <td>{{ chute.largeur }}</td>
        <td>{{ chute.quantite }}</td>
        <td>
          {% if chute.used == true %}
            <a href=\"{{ asset('noUse_chute/' ~ chute.id) }}\" type=\"button\" class=\"btn btn-outline-secondary\">Annuler</a>
            <span class=\"ml-3 text-primary\">Non Disponible</span>
          {% else %}
            <a href=\"{{ asset('use_chute/' ~ chute.id) }}\" type=\"button\" class=\"btn btn-success\">Utiliser</a>
            <span class=\"ml-3 text-primary\">Disponible</span>
          {% endif %}
        </td>
        <td>
            <a href=\"#\" data-toggle=\"modal\" data-target=\"{{ \"#edit-chute\" ~ chute.id }}\" class=\"edit\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
                    <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                    <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                </svg>
            </a>
            <div class=\"modal\" id=\"{{ \"edit-chute\" ~ chute.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <h5 class=\"modal-title\">Modifier</h5>
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                      </button>
                    </div>
                    <div class=\"modal-body\">
                        <form method=\"post\" action=\"{{ \"/edit_chute/\" ~ chute.id }}\">
                            <h5 class=\"text-primary\">{{ chute.matiere.name }}</h5>
                            <hr>
                            <div class=\"row\">
                              <div class=\"col-3\"><label for=\"modify_longueur\" class=\"mr-4\">Longueur : </label></div>
                              <div class=\"col-3\"><input type=\"text\" name=\"modify_longueur\" id=\"modify_longueur\" value=\"{{ chute.longueur }}\"></div>
                            </div>
                            <div class=\"row mt-3\">
                              <div class=\"col-3\"><label for=\"modify_longueur\" class=\"mr-4\">Largeur : </label></div>
                              <div class=\"col-3\"><input type=\"text\" name=\"modify_largeur\" id=\"modify_largeur\" value=\"{{ chute.largeur }}\"></div>
                            </div>
                            <div class=\"row mt-3\">
                              <div class=\"col-3\"><label for=\"modify_longueur\" class=\"mr-4\">Quantité : </label></div>
                              <div class=\"col-3\"><input type=\"text\" name=\"modify_quantite\" id=\"modify_quantite\" value=\"{{ chute.quantite }}\"></div>
                            </div>
                            <div class=\"row mt-3\">
                              <div class=\"col-3\"><button type=\"submit\" class=\"btn btn-primary text-right\">Modifier</button></div>
                            </div>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        {{ form_end(form) }}
                    </div>
                  </div>
                </div>
            </div>
        </td>
        <td>
            <a href=\"{{ asset('delete_chute/' ~ chute.id ) }}\" class=\"delete\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                </svg>
            </a>
        </td>
      </tr>
      {% endfor %}
    </tbody>
  </table>
</div>

{% endblock %}
", "list/list.html.twig", "C:\\ProjetsTAV\\Coupe float\\Chute_Float\\templates\\list\\list.html.twig");
    }
}
