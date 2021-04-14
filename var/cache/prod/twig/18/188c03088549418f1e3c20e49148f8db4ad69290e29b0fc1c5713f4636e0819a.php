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

/* matiere/matiere.html.twig */
class __TwigTemplate_b8788c3916c0efc49d6b4d74b1849562cfc3c0d4140b81bf6c4b8aaeebd47fd9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "matiere/matiere.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Matières";
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <script>
        
    </script>
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<div class=\"row  d-flex align-items-center\">
  <div class=\"col-3\">
    <h1 class=\"m-2\"><img src=\"img/TAV-LOGO-RVB_petit.jpg\" id=\"logo\" class=\"mr-5\"/>Matières</h1>
  </div>
  <div class=\"col-3\">
      <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg\">Retour à la liste des chutes</a>
  </div>
  <hr class=\"m-3\">
</div>


<div class=\"row m-3 p-3\" id=\"add-matiere\">
    <h2 class=\"col-6 p-0\">Ajouter une matière</h2>
    <div class=\"form-group col-6\">
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 27), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
</div>

";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "warning"], "method", false, false, false, 33));
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
<div class=\"m-3 matieres-list\">
    <table class=\"table table-hover\">
        <thead>
            <tr>
            <th scope=\"col\">Matière</th>
            <th scope=\"col\">Modifier</th>
            <th scope=\"col\">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["matieres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 50
            echo "            <tr class=\"table-primary\">
            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
            <td>
                <a href=\"#\" data-toggle=\"modal\" data-target=\"";
            // line 53
            echo twig_escape_filter($this->env, ("#edit-matiere" . twig_get_attribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 53)), "html", null, true);
            echo "\" class=\"edit\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
                        <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                        <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                    </svg>
                </a>
                <div class=\"modal\" id=\"";
            // line 59
            echo twig_escape_filter($this->env, ("edit-matiere" . twig_get_attribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 59)), "html", null, true);
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
            // line 69
            echo twig_escape_filter($this->env, ("/edit_matiere/" . twig_get_attribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 69)), "html", null, true);
            echo "\">
                                <input type=\"text\" name=\"modify_matiere\" id=\"modify_matiere\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "\">
                                <button type=\"submit\" class=\"btn btn-primary text-right\">Modifier</button>
                            </form>
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                            ";
            // line 76
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
                        </div>
                      </div>
                    </div>
                </div>
            </td>
            <td>
                <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("delete_matiere/" . twig_get_attribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 83))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "            
        </tbody>
    </table>
</div>



";
    }

    public function getTemplateName()
    {
        return "matiere/matiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 92,  191 => 83,  181 => 76,  172 => 70,  168 => 69,  155 => 59,  146 => 53,  141 => 51,  138 => 50,  134 => 49,  121 => 38,  112 => 35,  109 => 34,  105 => 33,  98 => 29,  93 => 27,  89 => 26,  77 => 17,  70 => 12,  66 => 11,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "matiere/matiere.html.twig", "C:\\ProjetsTAV\\Coupe float\\Chute_Float\\templates\\matiere\\matiere.html.twig");
    }
}
