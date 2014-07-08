<?php

/* JdrCorpElricBundle:Elric:tableComp.html.twig */
class __TwigTemplate_f58a6becd85f337075c660848fe952e8afdf6639357f291e64142ad4167c129a extends Twig_Template
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
        echo "<div class=\"panel-group\" id=\"accordion\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">
                    Compétences
                </a>
            </h4>
        </div>
        <div id=\"collapseOne\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                <div style=\"max-height:350px;overflow:auto;\">
                    <table class=\"table table-hover\">
                        <thead>
                        <th>Compétences</th>
                        <th>%age de base</th>
                        <th>%age rajouté</th>
                        <th style='text-align: left;'>%age total</th>
                        </thead>
                        <tbody>
  ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 22
            echo "                            <tr>
        ";
            // line 23
            if (twig_in_filter((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), (isset($context["listeCompMetier"]) ? $context["listeCompMetier"] : $this->getContext($context, "listeCompMetier")))) {
                // line 24
                echo "                                <td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "</td>
                                <td class=\"col-md-2\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%</td>
                                <td class=\"col-md-2\"><div class=\"input-group\"><input type=\"text\" class=\"comp form-control col-md-3 \" name=\"comp[";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getId"), "html", null, true);
                echo "]\" value=\"\"  maxlength=\"3\"/><span class=\"input-group-addon\">%</span></div></td>
                                <td  class=\"col-md-4\"style='text-align: left;'></td>
        ";
            } else {
                // line 29
                echo "                                <td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "</td>
                                <td class=\"col-md-2\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%</td>
                                <td class=\"col-md-2\"></td>
                                <td class=\"col-md-4\" style='text-align: left;'></td>
        ";
            }
            // line 34
            echo "                            </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


";
        // line 44
        if (($this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getNbContact") > 0)) {
            // line 45
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">
                    Armes de contact
                </a>
            </h4>
        </div>
        <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
            <div style=\"max-height:350px;overflow:auto;\">
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
            // line 65
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeArmes"]) ? $context["listeArmes"] : $this->getContext($context, "listeArmes")));
            foreach ($context['_seq'] as $context["_key"] => $context["arme"]) {
                // line 66
                echo "            ";
                if (($this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getType") == "C")) {
                    // line 67
                    echo "                        <tr>
                            <td>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"arme_";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getId"), "html", null, true);
                    echo "\" class=\"cb_contact\"/>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getNom"), "html", null, true);
                    echo "
                                    </label>
                                </div>
                            </td>
                            <td class=\"col-md-2\">";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getBase"), "html", null, true);
                    echo "%</td>
                            <td class=\"col-md-2\">";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getDegats"), "html", null, true);
                    echo "</td>
                            <td class=\"col-md-2\">";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getMains"), "html", null, true);
                    echo "</td>
                            <td class=\"col-md-2\"><div class=\"input-group\"><input type=\"text\" class=\"armes form-control col-md-3\" name=\"arme[";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getId"), "html", null, true);
                    echo "]\" value=\"\"  maxlength=\"3\" disabled/><span class=\"input-group-addon\">%</span></div></td>
                            <td style='text-align: center;'></td>
                        </tr>
            ";
                }
                // line 82
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        }
        // line 89
        echo "
";
        // line 90
        if (($this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getNbJet") > 0)) {
            // line 91
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">
                    Armes de jet
                </a>
            </h4>
        </div>
        <div id=\"collapseThree\" class=\"panel-collapse collapse\">
            <div style=\"max-height:350px;overflow:auto;\">
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
            // line 110
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeArmes"]) ? $context["listeArmes"] : $this->getContext($context, "listeArmes")));
            foreach ($context['_seq'] as $context["_key"] => $context["arme"]) {
                // line 111
                echo "            ";
                if (($this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getType") == "J")) {
                    // line 112
                    echo "                        <tr>
                            <td>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"arme_";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getId"), "html", null, true);
                    echo "\" class=\"cb_jet\"/>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getNom"), "html", null, true);
                    echo "
                                    </label>
                                </div>
                            </td>
                            <td class=\"col-md-2\">";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getBase"), "html", null, true);
                    echo "%</td>
                            <td class=\"col-md-2\">";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getDegats"), "html", null, true);
                    echo "</td>
                            <td class=\"col-md-2\"><div class=\"input-group\"><input type=\"text\" class=\"armes form-control col-md-3\" name=\"arme[";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getId"), "html", null, true);
                    echo "]\" value=\"\"  maxlength=\"3\" disabled/><span class=\"input-group-addon\">%</span></div></td>
                            <td style='text-align: center;'></td>
                        </tr>
            ";
                }
                // line 126
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        }
        // line 133
        echo "</div>

<script>
    \$(document).ready(function() {
        var contact_max = parseInt(";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getNbContact"), "html", null, true);
        echo ");
        var nb_contact_max = 0;
        var jet_max = parseInt(";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getNbJet"), "html", null, true);
        echo ");
        var nb_jet_max = 0;
        var info = \$('#info_armes');
        if (contact_max > 0 || jet_max > 0) {
            info.addClass('alert alert-info');
            info.html('');
            if (contact_max > 0) {
                info.append(\"<li>Vous pouvez choisir jusqu'à \" + contact_max + \" arme(s) de contact.</li>\");
            }
            if (jet_max > 0) {
                info.append(\"<li>Vous pouvez choisir jusqu'à \" + jet_max + \" arme(s) de jet.</li>\");
            }
        } else {
            info.removeClass('alert alert-info');
            info.html('');
        }
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
                            \$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").children(\":first\").removeAttr(\"disabled\");
                        }
                    });
                } else {
                    \$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").children(\":first\").removeAttr(\"disabled\");
                    \$(\".cb_contact\").each(function() {
                        if (\$(this).prop('checked') === false) {
                            \$(this).removeAttr(\"disabled\");
                            \$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").children(\":first\").attr(\"disabled\", \"disabled\");
                        }
                    });
                }
            } else {
                nb_contact_max--;
                \$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").children(\":first\").attr(\"disabled\", \"disabled\");
                if (\$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").children(\":first\").val() !== \"\") {
                    var newTot = parseInt(\$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").children(\":first\").val()) + parseInt(\$('#totPts').text());
                    \$('#totPts').text(newTot);
                }
                \$(this).parent().parent().parent().siblings(\"td:eq(3)\").children(\":first\").children(\":first\").val('');
                \$(this).parent().parent().parent().siblings(\"td:last\").html('');
                \$(\".cb_contact\").each(function() {
                    if (\$(this).prop('checked') === false) {
                        \$(this).removeAttr(\"disabled\");
                    }
                });
            }
        });
        \$(document).on('click', '.cb_jet', function() {
            if (\$(this).prop('checked') === true) {
                nb_jet_max++;
                if (nb_jet_max === jet_max) {
                    \$(\".cb_jet\").each(function() {
                        if (\$(this).prop('checked') === false) {
                            \$(this).attr(\"disabled\", \"disabled\");
                            \$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").children(\":first\").val('');
                            \$(this).parent().siblings(\"td:last\").html('');
                        } else {
                            \$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").children(\":first\").removeAttr(\"disabled\");
                        }
                    });
                } else {
                    \$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").children(\":first\").removeAttr(\"disabled\");
                    \$(\".cb_jet\").each(function() {
                        if (\$(this).prop('checked') === false) {
                            \$(this).removeAttr(\"disabled\");
                            \$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").children(\":first\").attr(\"disabled\", \"disabled\");
                        }
                    });
                }
            } else {
                nb_jet_max--;
                \$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").children(\":first\").attr(\"disabled\", \"disabled\");
                if (\$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").children(\":first\").val() !== \"\") {
                    var newTot = parseInt(\$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").children(\":first\").val()) + parseInt(\$('#totPts').text());
                    \$('#totPts').text(newTot);
                }
                \$(this).parent().parent().parent().siblings(\"td:eq(2)\").children(\":first\").children(\":first\").val('');
                \$(this).parent().parent().parent().siblings(\"td:last\").html('');
                \$(\".cb_jet\").each(function() {
                    if (\$(this).prop('checked') === false) {
                        \$(this).removeAttr(\"disabled\");
                    }
                });
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
        return array (  256 => 137,  250 => 133,  242 => 127,  236 => 126,  225 => 121,  212 => 116,  206 => 112,  178 => 91,  165 => 83,  148 => 77,  84 => 36,  77 => 34,  65 => 29,  34 => 11,  100 => 40,  81 => 28,  53 => 12,  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 96,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  271 => 66,  265 => 63,  261 => 139,  257 => 61,  253 => 60,  249 => 59,  245 => 58,  237 => 56,  233 => 55,  226 => 50,  218 => 47,  190 => 29,  184 => 4,  152 => 78,  76 => 34,  129 => 39,  126 => 38,  118 => 65,  114 => 20,  110 => 44,  90 => 28,  70 => 30,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 98,  309 => 97,  305 => 87,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 69,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 57,  229 => 122,  220 => 48,  214 => 46,  177 => 65,  169 => 29,  140 => 75,  132 => 40,  128 => 22,  107 => 18,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 120,  219 => 76,  217 => 75,  208 => 68,  204 => 39,  179 => 69,  159 => 82,  143 => 56,  135 => 53,  119 => 42,  102 => 33,  71 => 24,  67 => 15,  63 => 22,  59 => 26,  38 => 6,  94 => 44,  89 => 30,  85 => 25,  75 => 17,  68 => 14,  56 => 13,  87 => 25,  21 => 2,  26 => 3,  93 => 16,  88 => 15,  78 => 25,  46 => 15,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 102,  166 => 28,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 15,  49 => 11,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 18,  69 => 12,  47 => 16,  40 => 8,  37 => 12,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 71,  123 => 37,  120 => 39,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 32,  96 => 45,  83 => 36,  74 => 26,  66 => 23,  55 => 25,  52 => 18,  50 => 24,  43 => 15,  41 => 21,  35 => 6,  32 => 12,  29 => 4,  209 => 82,  203 => 111,  199 => 110,  193 => 30,  189 => 71,  187 => 84,  182 => 66,  176 => 90,  173 => 89,  168 => 72,  164 => 64,  162 => 57,  154 => 57,  149 => 51,  147 => 25,  144 => 76,  141 => 48,  133 => 23,  130 => 41,  125 => 67,  122 => 66,  116 => 41,  112 => 42,  109 => 34,  106 => 34,  103 => 32,  99 => 31,  95 => 28,  92 => 38,  86 => 37,  82 => 33,  80 => 35,  73 => 19,  64 => 17,  60 => 20,  57 => 20,  54 => 19,  51 => 17,  48 => 23,  45 => 22,  42 => 15,  39 => 14,  36 => 13,  33 => 4,  30 => 10,);
    }
}
