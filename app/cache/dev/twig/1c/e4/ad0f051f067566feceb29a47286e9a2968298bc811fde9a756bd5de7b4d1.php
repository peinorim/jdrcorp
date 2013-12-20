<?php

/* JdrCorpElricBundle:Elric:tableComp.html.twig */
class __TwigTemplate_1ce4ad0f051f067566feceb29a47286e9a2968298bc811fde9a756bd5de7b4d1 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeComp"));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 11
            echo "            <tr>
        ";
            // line 12
            if (twig_in_filter($this->getContext($context, "comp"), $this->getContext($context, "listeCompMetier"))) {
                // line 13
                echo "                <td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getNom"), "html", null, true);
                echo "</td>
                <td class=\"col-md-2\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getBase"), "html", null, true);
                echo "%</td>
                <td><input type=\"text\" class=\"comp col-md-6\" name=\"comp[";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getId"), "html", null, true);
                echo "]\" value=\"\"/>%</td>
                <td style='text-align: center;'></td>
        ";
            } else {
                // line 18
                echo "                <td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getNom"), "html", null, true);
                echo "</td><td class=\"col-md-2\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getBase"), "html", null, true);
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
        if (($this->getAttribute($this->getContext($context, "metier"), "getNbContact") > 0)) {
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
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeArmes"));
            foreach ($context['_seq'] as $context["_key"] => $context["arme"]) {
                // line 39
                echo "            ";
                if (($this->getAttribute($this->getContext($context, "arme"), "getType") == "C")) {
                    // line 40
                    echo "            <tr>
                <td>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" id=\"arme_";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getId"), "html", null, true);
                    echo "\" class=\"cb_contact\"/>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getNom"), "html", null, true);
                    echo "
                        </label>
                    </div>
                </td>
                <td class=\"col-md-2\">";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getBase"), "html", null, true);
                    echo "%</td>
                <td class=\"col-md-2\">";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getDegats"), "html", null, true);
                    echo "</td>
                <td class=\"col-md-2\">";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getMains"), "html", null, true);
                    echo "</td>
                <td><input type=\"text\" class=\"armes col-md-6\" name=\"arme[";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getId"), "html", null, true);
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
        if (($this->getAttribute($this->getContext($context, "metier"), "getNbJet") > 0)) {
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
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeArmes"));
            foreach ($context['_seq'] as $context["_key"] => $context["arme"]) {
                // line 73
                echo "            ";
                if (($this->getAttribute($this->getContext($context, "arme"), "getType") == "J")) {
                    // line 74
                    echo "            <tr>
                <td>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" id=\"arme_";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getId"), "html", null, true);
                    echo "\" class=\"cb_jet\"/>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getNom"), "html", null, true);
                    echo "
                        </label>
                    </div>
                </td>
                <td class=\"col-md-2\">";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getBase"), "html", null, true);
                    echo "%</td>
                <td class=\"col-md-2\">";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getDegats"), "html", null, true);
                    echo "</td>
                <td><input type=\"text\" class=\"armes col-md-6\" name=\"arme[";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getId"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metier"), "getNbContact"), "html", null, true);
        echo ");
        var nb_contact_max = 0;
        var jet_max = parseInt(";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metier"), "getNbJet"), "html", null, true);
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
        return array (  218 => 97,  213 => 95,  209 => 93,  203 => 89,  197 => 88,  190 => 84,  186 => 83,  182 => 82,  173 => 78,  167 => 74,  164 => 73,  160 => 72,  148 => 62,  146 => 61,  143 => 60,  137 => 56,  131 => 55,  124 => 51,  120 => 50,  116 => 49,  112 => 48,  103 => 44,  97 => 40,  94 => 39,  90 => 38,  77 => 27,  75 => 26,  69 => 22,  62 => 20,  54 => 18,  48 => 15,  44 => 14,  39 => 13,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
