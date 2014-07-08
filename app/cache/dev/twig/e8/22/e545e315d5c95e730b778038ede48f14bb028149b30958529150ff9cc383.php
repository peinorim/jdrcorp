<?php

/* JdrCorpGuildesBundle:Guildes:cdb_maisons.html.twig */
class __TwigTemplate_e822e545e315d5c95e730b778038ede48f14bb028149b30958529150ff9cc383 extends Twig_Template
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
        echo "<div class=\"panel-group\" id=\"accordionMaisons\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listemaison"]) ? $context["listemaison"] : $this->getContext($context, "listemaison")));
        foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
            // line 3
            echo "    ";
            if (($this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getNom") != "Génériques")) {
                // line 4
                echo "    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionMaisons\" href=\"#collapse";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"), "html", null, true);
                echo "\">
                        ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getNom"), "html", null, true);
                echo "
                </a>
            </h4>
        </div>
        <div id=\"collapse";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listecdbmaison"]) ? $context["listecdbmaison"] : $this->getContext($context, "listecdbmaison")));
                foreach ($context['_seq'] as $context["_key"] => $context["cdb"]) {
                    // line 15
                    echo "                ";
                    if (($this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId") == $this->getAttribute($this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getMaison"), "getId"))) {
                        // line 16
                        echo "                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"thumbnail\">
                        <div class=\"caption\">
                            <h4><b>";
                        // line 19
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getTitre"), "html", null, true);
                        echo "</b></h4>
                            <h5><b>Coup de bol</b></h5>
                            <p>";
                        // line 21
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getCdb"), "html", null, true);
                        echo "</p>
                            <p><i>";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getEffet"), "html", null, true);
                        echo "</i></p>
                            <hr></hr>
                            <h5><b>Mésaventure</b></h5>
                            <p>";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getMes"), "html", null, true);
                        echo "</p>
                            <p><i>";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getMesEffet"), "html", null, true);
                        echo "</i></p>
                        </div>
                    </div>
                </div>
                ";
                    }
                    // line 31
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cdb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </div>
        </div>
    </div>
    ";
            }
            // line 36
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:cdb_maisons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  101 => 36,  89 => 31,  81 => 26,  77 => 25,  67 => 21,  62 => 19,  57 => 16,  54 => 15,  50 => 14,  38 => 8,  34 => 7,  26 => 3,  22 => 2,  95 => 32,  84 => 40,  80 => 39,  75 => 36,  71 => 22,  56 => 22,  45 => 12,  41 => 16,  36 => 13,  19 => 1,  76 => 29,  72 => 28,  66 => 24,  64 => 23,  60 => 21,  58 => 20,  53 => 17,  51 => 16,  40 => 7,  37 => 6,  32 => 12,  29 => 4,);
    }
}
