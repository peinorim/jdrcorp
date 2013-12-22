<?php

/* JdrCorpElricBundle:Elric:tableComp.html.twig */
class __TwigTemplate_f1f0affbd2799f5bbd8cc638bbb4ef4de6ae8827e1dc5dc6f2efb0f1cfafeaaa extends Twig_Template
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
        echo "<div style=\"max-height:300px;overflow:auto;\">
    <table class=\"table table-hover\">
        <thead>
        <th>Compétences</th>
        <th>%age de base</th>
        <th>%age rajouté</th>
        <th style='text-align: center;'>%age total</th>
        </thead>
        <tbody>
  ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 11
            echo "            <tr>
        ";
            // line 12
            if (twig_in_filter((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), (isset($context["listeCompMetier"]) ? $context["listeCompMetier"] : $this->getContext($context, "listeCompMetier")))) {
                // line 13
                echo "                <td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "</td>
                <td class=\"col-md-2\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%</td>
                <td><input type=\"text\" class=\"comp col-md-6\" name=\"comp[";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getId"), "html", null, true);
                echo "]\" value=\"\"/>%</td>
                <td style='text-align: center;'></td>
        ";
            } else {
                // line 18
                echo "                <td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "</td><td class=\"col-md-2\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%</td><td></td>
        ";
            }
            // line 20
            echo "            </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>
</div>

";
        // line 26
        if (($this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getNbContact") > 0)) {
            // line 27
            echo "<div style=\"max-height:200px;overflow:auto;\">
    <table class=\"table table-hover\" style=\"height:200px;overflow:auto;display: table;\">
        <thead>
        <th>Armes de contact</th>
        <th>Base</th>
        <th>Dégâts</th>
        <th>Mains</th>
        <th>%age rajouté</th>
        <th style='text-align: center;'>%age total</th>
        </thead>
        <tbody>
  ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeArmes"]) ? $context["listeArmes"] : $this->getContext($context, "listeArmes")));
            foreach ($context['_seq'] as $context["_key"] => $context["arme"]) {
                // line 39
                echo "            ";
                if (($this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getType") == "C")) {
                    // line 40
                    echo "            <tr>
                <td>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" id=\"arme_";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getId"), "html", null, true);
                    echo "\" class=\"cb_contact\"/>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getNom"), "html", null, true);
                    echo "
                        </label>
                    </div>
                </td>
                <td class=\"col-md-2\">";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getBase"), "html", null, true);
                    echo "%</td>
                <td class=\"col-md-2\">";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getDegats"), "html", null, true);
                    echo "</td>
                <td class=\"col-md-2\">";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getMains"), "html", null, true);
                    echo "</td>
                <td><input type=\"text\" class=\"armes col-md-6\" name=\"arme[";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getId"), "html", null, true);
                    echo "]\" value=\"\" disabled/>%</td>
                <td style='text-align: center;'></td>
            </tr>
            ";
                }
                // line 55
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </tbody>
    </table>
</div>
";
        }
        // line 60
        echo "
";
        // line 61
        if (($this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getNbJet") > 0)) {
            // line 62
            echo "<div style=\"max-height:200px;overflow:auto;\">
    <table class=\"table table-hover\" style=\"height:200px;overflow:auto;display: table;\">
        <thead>
        <th>Armes de jet</th>
        <th>Base</th>
        <th>Dégâts</th>
        <th>%age rajouté</th>
        <th style='text-align: center;'>%age total</th>
        </thead>
        <tbody>
  ";
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeArmes"]) ? $context["listeArmes"] : $this->getContext($context, "listeArmes")));
            foreach ($context['_seq'] as $context["_key"] => $context["arme"]) {
                // line 73
                echo "            ";
                if (($this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getType") == "J")) {
                    // line 74
                    echo "            <tr>
                <td>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" id=\"arme_";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getId"), "html", null, true);
                    echo "\" class=\"cb_jet\"/>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getNom"), "html", null, true);
                    echo "
                        </label>
                    </div>
                </td>
                <td class=\"col-md-2\">";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getBase"), "html", null, true);
                    echo "%</td>
                <td class=\"col-md-2\">";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getDegats"), "html", null, true);
                    echo "</td>
                <td><input type=\"text\" class=\"armes col-md-6\" name=\"arme[";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getId"), "html", null, true);
                    echo "]\" value=\"\" disabled/>%</td>
                <td style='text-align: center;'></td>
            </tr>
            ";
                }
                // line 88
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "        </tbody>
    </table>
</div>
";
        }
        // line 93
        echo "<script>
    \$(document).ready(function() {
        var contact_max = parseInt(";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getNbContact"), "html", null, true);
        echo ");
        var nb_contact_max = 0;
        var jet_max = parseInt(";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getNbJet"), "html", null, true);
        echo ");
        var nb_jet_max = 0;
        \$(document).on('click', '.cb_contact', function() {
            if (\$(this).prop('checked') === true) {
                nb_contact_max++;
                if (nb_contact_max === contact_max) {
                    \$(\".cb_contact\").each(function() {
                        if (\$(this).prop('checked') === false) {
                            \$(this).attr(\"disabled\", \"disabled\");
                            \$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").val('');
                            \$(this).parent().siblings(\"td:last\").html('');
                        } else {
                            \$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").removeAttr(\"disabled\");
                        }
                    });
                } else {
                    \$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").removeAttr(\"disabled\");
                    \$(\".cb_contact\").each(function() {
                        if (\$(this).prop('checked') === false) {
                            \$(this).removeAttr(\"disabled\");
                            \$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").attr(\"disabled\", \"disabled\");
                        }
                    });
                }
            } else {
                nb_contact_max--;
                \$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").attr(\"disabled\", \"disabled\");
                if (\$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").val() !== \"\") {
                    var newTot = parseInt(\$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").val()) + parseInt(\$('#totPts').text());
                    \$('#totPts').text(newTot);
                }
                \$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").val('');
                \$(this).parent().parent().parent().siblings(\"td:last\").html('');
            }
        });
        \$(document).on('click', '.cb_jet', function() {
            if (\$(this).prop('checked') === true) {
                nb_jet_max++;
                if (nb_jet_max === jet_max) {
                    \$(\".cb_jet\").each(function() {
                        if (\$(this).prop('checked') === false) {
                            \$(this).attr(\"disabled\", \"disabled\");
                            \$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").val('');
                            \$(this).parent().siblings(\"td:last\").html('');
                        } else {
                            \$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").removeAttr(\"disabled\");
                        }
                    });
                } else {
                    \$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").removeAttr(\"disabled\");
                    \$(\".cb_jet\").each(function() {
                        if (\$(this).prop('checked') === false) {
                            \$(this).removeAttr(\"disabled\");
                            \$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").attr(\"disabled\", \"disabled\");
                        }
                    });
                }
            } else {
                nb_jet_max--;
                \$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").attr(\"disabled\", \"disabled\");
                if (\$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").val() !== \"\") {
                    var newTot = parseInt(\$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").val()) + parseInt(\$('#totPts').text());
                    \$('#totPts').text(newTot);
                }
                \$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").val('');
                \$(this).parent().parent().parent().siblings(\"td:last\").html('');
            }
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:tableComp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 97,  213 => 95,  197 => 88,  190 => 84,  186 => 83,  167 => 74,  148 => 62,  137 => 56,  124 => 51,  97 => 40,  77 => 27,  34 => 11,  81 => 28,  192 => 52,  188 => 51,  160 => 72,  146 => 61,  127 => 23,  104 => 19,  161 => 63,  129 => 39,  126 => 38,  118 => 35,  114 => 34,  110 => 35,  90 => 38,  70 => 23,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 60,  135 => 53,  119 => 42,  102 => 33,  71 => 19,  67 => 15,  63 => 22,  59 => 20,  38 => 6,  94 => 39,  89 => 30,  85 => 25,  75 => 26,  68 => 13,  56 => 18,  87 => 16,  21 => 2,  26 => 3,  93 => 28,  88 => 6,  78 => 25,  46 => 15,  27 => 4,  44 => 14,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 32,  163 => 62,  158 => 67,  156 => 66,  151 => 56,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 20,  49 => 10,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 16,  69 => 22,  47 => 8,  40 => 8,  37 => 12,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 55,  123 => 37,  120 => 50,  115 => 43,  111 => 37,  108 => 20,  101 => 18,  98 => 32,  96 => 31,  83 => 25,  74 => 26,  66 => 23,  55 => 19,  52 => 17,  50 => 18,  43 => 8,  41 => 7,  35 => 5,  32 => 12,  29 => 4,  209 => 93,  203 => 89,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 82,  176 => 64,  173 => 78,  168 => 72,  164 => 73,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 25,  133 => 55,  130 => 41,  125 => 44,  122 => 22,  116 => 49,  112 => 48,  109 => 34,  106 => 34,  103 => 44,  99 => 31,  95 => 28,  92 => 31,  86 => 29,  82 => 15,  80 => 19,  73 => 19,  64 => 17,  60 => 19,  57 => 11,  54 => 18,  51 => 14,  48 => 15,  45 => 17,  42 => 15,  39 => 13,  36 => 13,  33 => 4,  30 => 10,);
    }
}
