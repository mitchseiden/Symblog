<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_746be67cbaba935cea221f880f15c5c20e39b9934edc2c18df90b9b76f220a20 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  31 => 5,  25 => 3,  21 => 2,  92 => 21,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  142 => 59,  138 => 57,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  91 => 31,  86 => 28,  69 => 25,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  36 => 7,  27 => 4,  22 => 2,  54 => 21,  43 => 8,  33 => 10,  30 => 3,  193 => 57,  188 => 52,  185 => 51,  180 => 47,  175 => 44,  167 => 39,  159 => 38,  151 => 63,  147 => 30,  143 => 29,  139 => 27,  136 => 56,  132 => 18,  118 => 16,  114 => 13,  110 => 11,  107 => 10,  101 => 24,  96 => 58,  94 => 22,  89 => 20,  87 => 20,  82 => 48,  80 => 19,  76 => 45,  74 => 44,  66 => 15,  62 => 23,  57 => 16,  55 => 13,  44 => 10,  42 => 14,  28 => 1,  51 => 15,  48 => 17,  40 => 8,  37 => 7,  32 => 12,  38 => 13,  35 => 4,  29 => 5,);
    }
}
