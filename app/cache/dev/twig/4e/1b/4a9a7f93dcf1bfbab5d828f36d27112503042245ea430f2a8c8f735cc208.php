<?php

/* JdrCorpElricBundle:Elric:myComp.html.twig */
class __TwigTemplate_4e1b4a9a7f93dcf1bfbab5d828f36d27112503042245ea430f2a8c8f735cc208 extends Twig_Template
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
        echo "<table id=\"myComp\">
    <thead>
    <th></th>
    <th></th>
    <th></th>
</thead>
<tbody>
  ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 9
            echo "    <tr>
        ";
            // line 10
            if ((twig_in_filter((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), (isset($context["myComp"]) ? $context["myComp"] : $this->getContext($context, "myComp"))) && ($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getTotal") != ""))) {
                // line 11
                echo "        <td class=\"col-md-1\"><input type=\"checkbox\" checked=\"checked\"/></td><td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%)</td><td class=\"col-md-2\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getTotal"), "html", null, true);
                echo "%</td>
        ";
            } elseif ((twig_in_filter((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), (isset($context["myComp"]) ? $context["myComp"] : $this->getContext($context, "myComp"))) && ($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getTotal") == ""))) {
                // line 13
                echo "        <td class=\"col-md-1\"><input type=\"checkbox\" checked=\"checked\"/></td><td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%)</td><td class=\"col-md-2\">___%</td>
        ";
            } else {
                // line 15
                echo "        <td class=\"col-md-1\"><input type=\"checkbox\" disabled/></td><td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%)</td><td class=\"col-md-2\">___</td>
        ";
            }
            // line 17
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:myComp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  63 => 17,  55 => 15,  47 => 13,  37 => 11,  35 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
