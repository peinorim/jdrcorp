<?php

/* JdrCorpElricBundle:Elric:tableComp.html.twig */
class __TwigTemplate_7360eadaf3d7d0726ea81a81c80dddbc8870cc025d2650685aa4aadce534f3e1 extends Twig_Template
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
        return array (  261 => 139,  256 => 137,  250 => 133,  242 => 127,  236 => 126,  229 => 122,  225 => 121,  221 => 120,  212 => 116,  206 => 112,  203 => 111,  199 => 110,  178 => 91,  176 => 90,  173 => 89,  165 => 83,  159 => 82,  152 => 78,  148 => 77,  144 => 76,  140 => 75,  131 => 71,  125 => 67,  122 => 66,  118 => 65,  96 => 45,  94 => 44,  84 => 36,  77 => 34,  70 => 30,  65 => 29,  59 => 26,  55 => 25,  50 => 24,  48 => 23,  45 => 22,  41 => 21,  19 => 1,);
    }
}
