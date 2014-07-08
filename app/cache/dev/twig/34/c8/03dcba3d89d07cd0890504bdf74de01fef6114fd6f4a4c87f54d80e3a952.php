<?php

/* JdrCorpElricBundle:Elric:mySorts.html.twig */
class __TwigTemplate_34c803dcba3d89d07cd0890504bdf74de01fef6114fd6f4a4c87f54d80e3a952 extends Twig_Template
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
        echo "<table id=\"mySorts\">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
  ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mySorts"]) ? $context["mySorts"] : $this->getContext($context, "mySorts")));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 11
            echo "        <tr>
            <td class=\"col-md-2\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "getSortNom"), "html", null, true);
            echo "</td>
        </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:mySorts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  34 => 11,  30 => 10,  61 => 11,  55 => 10,  47 => 8,  29 => 4,  26 => 3,  164 => 64,  154 => 57,  144 => 50,  132 => 40,  129 => 39,  126 => 38,  123 => 37,  120 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  45 => 17,  39 => 6,  37 => 12,  22 => 2,  19 => 1,);
    }
}
