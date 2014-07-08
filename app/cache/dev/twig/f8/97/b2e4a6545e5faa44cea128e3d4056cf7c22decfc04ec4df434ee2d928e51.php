<?php

/* JdrCorpGuildesBundle:Guildes:machinations.html.twig */
class __TwigTemplate_f897b2e4a6545e5faa44cea128e3d4056cf7c22decfc04ec4df434ee2d928e51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_guildes.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_guildes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "JdrCorp - Guildes - Machinations
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"panel-group\" id=\"accordionArmes\">
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeChap"]) ? $context["listeChap"] : $this->getContext($context, "listeChap")));
        foreach ($context['_seq'] as $context["_key"] => $context["chap"]) {
            // line 10
            echo "    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionArmes\" href=\"#collapse";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chap"]) ? $context["chap"] : $this->getContext($context, "chap")), "getId"), "html", null, true);
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chap"]) ? $context["chap"] : $this->getContext($context, "chap")), "getNom"), "html", null, true);
            echo "
                </a>
            </h4>
        </div>
        <div id=\"collapse";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chap"]) ? $context["chap"] : $this->getContext($context, "chap")), "getId"), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeMachination"]) ? $context["listeMachination"] : $this->getContext($context, "listeMachination")));
            foreach ($context['_seq'] as $context["_key"] => $context["machi"]) {
                // line 21
                echo "                ";
                if (($this->getAttribute($this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getChapitre"), "getId") == $this->getAttribute((isset($context["chap"]) ? $context["chap"] : $this->getContext($context, "chap")), "getId"))) {
                    // line 22
                    echo "                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"well\">
                            <h4><b>";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getNom"), "html", null, true);
                    echo "</b></h4>
                            <p><b>Niveau : </b>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getNiveau"), "html", null, true);
                    echo "</p>
                            <p><b>Description : </b>";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getDescription"), "html", null, true);
                    echo "</p>
                            <p><b>Novice : </b> ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getNovice"), "html", null, true);
                    echo "</p>
                            <p><b>Initié : </b> ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getInitie"), "html", null, true);
                    echo "</p>
                            <p><b>Expert : </b> ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getExpert"), "html", null, true);
                    echo "</p>
                            <p><b>Effet pervers : </b> ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getEffetPervers"), "html", null, true);
                    echo "</p>
                        </div>
                    </div>
                </div>
                ";
                }
                // line 36
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:machinations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  119 => 37,  113 => 36,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  76 => 22,  73 => 21,  69 => 20,  64 => 18,  57 => 14,  53 => 13,  48 => 10,  44 => 9,  40 => 7,  37 => 6,  32 => 3,  29 => 2,);
    }
}
