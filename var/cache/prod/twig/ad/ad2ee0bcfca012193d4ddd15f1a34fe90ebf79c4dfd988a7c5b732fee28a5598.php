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
class __TwigTemplate_3fd4ecea549091011cf8d1bda0df7066212e1b613715c305e60f016ffbe00898 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "list/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Stock chute Float TAV 1";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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

<div class=\"m-3\">
  <h2>Ajouter une chute</h2>
  <table class=\"table table-hover\">
    <tbody>
      <tr class=\"table-secondary\">
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <td>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "matiere", [], "any", false, false, false, 21), 'row');
        echo "</td>
        <td>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "longueur", [], "any", false, false, false, 22), 'row', ["attr" => ["placeholder" => "Longueur"]]);
        echo "</td>
        <td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "largeur", [], "any", false, false, false, 23), 'row', ["attr" => ["placeholder" => "Largeur"]]);
        echo "</td>
        <td>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantite", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Quantité"]]);
        echo "</td>
        <td><button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button></td>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
      </tr>
    </tbody>
  </table>
</div>

";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "warning"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "    <div class=\"flash-notice\">
        <p class=\"text-warning m-3\">";
            // line 34
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chutes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chute"]) {
            // line 53
            echo "      <tr class=\"table-primary\">
        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chute"], "matiere", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chute"], "longueur", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chute"], "largeur", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chute"], "quantite", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
        <td>
          ";
            // line 59
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["chute"], "used", [], "any", false, false, false, 59), true))) {
                // line 60
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("noUse_chute/" . twig_get_attribute($this->env, $this->source, $context["chute"], "id", [], "any", false, false, false, 60))), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-outline-secondary\">Annuler</a>
            <span class=\"ml-3 text-primary\">Non Disponible</span>
          ";
            } else {
                // line 63
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("use_chute/" . twig_get_attribute($this->env, $this->source, $context["chute"], "id", [], "any", false, false, false, 63))), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-success\">Utiliser</a>
            <span class=\"ml-3 text-primary\">Disponible</span>
          ";
            }
            // line 66
            echo "        </td>
        <td>
            <a href=\"#\" data-toggle=\"modal\" data-target=\"";
            // line 68
            echo twig_escape_filter($this->env, ("#edit-chute" . twig_get_attribute($this->env, $this->source, $context["chute"], "id", [], "any", false, false, false, 68)), "html", null, true);
            echo "\" class=\"edit\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
                    <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                    <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                </svg>
            </a>
            <div class=\"modal\" id=\"";
            // line 74
            echo twig_escape_filter($this->env, ("edit-chute" . twig_get_attribute($this->env, $this->source, $context["chute"], "id", [], "any", false, false, false, 74)), "html", null, true);
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
            // line 84
            echo twig_escape_filter($this->env, ("/edit_chute/" . twig_get_attribute($this->env, $this->source, $context["chute"], "id", [], "any", false, false, false, 84)), "html", null, true);
            echo "\">
                            <h5 class=\"text-primary\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chute"], "matiere", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
            echo "</h5>
                            <hr>
                            <div class=\"row\">
                              <div class=\"col-3\"><label for=\"modify_longueur\" class=\"mr-4\">Longueur : </label></div>
                              <div class=\"col-3\"><input type=\"text\" name=\"modify_longueur\" id=\"modify_longueur\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chute"], "longueur", [], "any", false, false, false, 89), "html", null, true);
            echo "\"></div>
                            </div>
                            <div class=\"row mt-3\">
                              <div class=\"col-3\"><label for=\"modify_longueur\" class=\"mr-4\">Largeur : </label></div>
                              <div class=\"col-3\"><input type=\"text\" name=\"modify_largeur\" id=\"modify_largeur\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chute"], "largeur", [], "any", false, false, false, 93), "html", null, true);
            echo "\"></div>
                            </div>
                            <div class=\"row mt-3\">
                              <div class=\"col-3\"><label for=\"modify_longueur\" class=\"mr-4\">Quantité : </label></div>
                              <div class=\"col-3\"><input type=\"text\" name=\"modify_quantite\" id=\"modify_quantite\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chute"], "quantite", [], "any", false, false, false, 97), "html", null, true);
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
            // line 106
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
                    </div>
                  </div>
                </div>
            </div>
        </td>
        <td>
            <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("delete_chute/" . twig_get_attribute($this->env, $this->source, $context["chute"], "id", [], "any", false, false, false, 113))), "html", null, true);
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
        // line 122
        echo "    </tbody>
  </table>
</div>

";
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
        return array (  268 => 122,  253 => 113,  243 => 106,  231 => 97,  224 => 93,  217 => 89,  210 => 85,  206 => 84,  193 => 74,  184 => 68,  180 => 66,  173 => 63,  166 => 60,  164 => 59,  159 => 57,  155 => 56,  151 => 55,  147 => 54,  144 => 53,  140 => 52,  123 => 37,  114 => 34,  111 => 33,  107 => 32,  98 => 26,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "list/list.html.twig", "C:\\ProjetsTAV\\Coupe float\\Chute_Float\\templates\\list\\list.html.twig");
    }
}
