<?php

/* JdrCorpElricBundle:Elric:metier.html.twig */
class __TwigTemplate_244b0556875b46293659171ddcffeb28b012ca9c9d8f1cde0c8204b5efa7a85e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2 class=\"StepTitle\">Métiers & Compétences</h2>
<div class=\"col-md-4\" style=\"margin-top:10px;\">
    <select id=\"metiers\" name=\"metier\" class=\"form-control\">
        <option value=\"0\">Choisissez un métier</option>
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeMet"));
        foreach ($context['_seq'] as $context["_key"] => $context["met"]) {
            // line 6
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "met"), "getId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "met"), "getMetierNom"), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['met'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </select>
    <div class=\"alert alert-warning\">Vous avez <span id=\"totPts\">250</span> points à répartir</div>
</div>
<div id=\"compMetiers\" class=\"col-md-8\" style=\"height:500px;overflow:auto;\">
    <table class=\"table table-hover\" style=\"height:300px;overflow:auto;\">
        <thead>
        <th>Compétences</th>
        <th>%age de base</th>
        </thead>
        <tbody>
  ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeComp"));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 19
            echo "            <tr>
                <td class=\"col-md-4\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getNom"), "html", null, true);
            echo "</td><td class=\"col-md-2\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getBase"), "html", null, true);
            echo "%</td>
            </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>
</div>

<script>
    \$(document).ready(function() {
        \$(\"#metiers\").change(function() {
            var id = parseInt(\$(this).val());
            if (id !== 0) {
                \$.post(\"";
        // line 32
        echo sprintf($this->env->getExtension('url_decode_extension')->urlDecode($this->env->getExtension('routing')->getPath("Elric_Metier_Comp", array("id" => "%s"))), "\"+id+\"");
        echo "\",
                        function(response) {
                            \$('#compMetiers').html(response);
                        });
            } else {
                \$('#compMetiers').html('');
            }
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:metier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 32,  70 => 23,  59 => 20,  56 => 19,  52 => 18,  40 => 8,  29 => 6,  25 => 5,  192 => 52,  188 => 51,  166 => 32,  160 => 28,  146 => 26,  141 => 25,  127 => 23,  122 => 22,  108 => 20,  104 => 19,  101 => 18,  87 => 16,  82 => 15,  68 => 13,  63 => 12,  49 => 10,  44 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
