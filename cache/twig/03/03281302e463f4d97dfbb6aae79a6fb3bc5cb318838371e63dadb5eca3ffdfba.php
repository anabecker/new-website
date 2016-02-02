<?php

/* modular/features.html.twig */
class __TwigTemplate_cfb6204877f3a7cc8ff03f118cf78327218cef8ec0dd843768699a04b3f33f6c extends Twig_Template
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
        echo "<div class=\"modular-row features ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
    ";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    <div class=\"feature-items\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 5
            echo "           <div class=\"feature\">
                       ";
            // line 6
            if ($this->getAttribute($context["feature"], "url", array())) {
                // line 7
                echo "            <a href=\"";
                echo $this->getAttribute($context["feature"], "url", array());
                echo "\" target=\"_blank\">
            ";
            }
            // line 9
            echo "            ";
            if ($this->getAttribute($context["feature"], "icon", array())) {
                // line 10
                echo "            <i class=\"fa fa-fw fa-";
                echo $this->getAttribute($context["feature"], "icon", array());
                echo "\"></i>
            <div class=\"feature-content icon-offset\">
            ";
            } else {
                // line 13
                echo "            <div class=\"feature-content\">
            ";
            }
            // line 15
            echo "            ";
            if ($this->getAttribute($context["feature"], "header", array())) {
                // line 16
                echo "            <h4>";
                echo $this->getAttribute($context["feature"], "header", array());
                echo "</h4>
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            if ($this->getAttribute($context["feature"], "text", array())) {
                // line 20
                echo "            <p>";
                echo $this->getAttribute($context["feature"], "text", array());
                echo "</p>
            ";
            }
            // line 22
            echo "            ";
            if ($this->getAttribute($context["feature"], "url", array())) {
                // line 23
                echo "            </a>
            ";
            }
            // line 25
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  85 => 25,  81 => 23,  78 => 22,  72 => 20,  70 => 19,  67 => 18,  61 => 16,  58 => 15,  54 => 13,  47 => 10,  44 => 9,  38 => 7,  36 => 6,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <div class="modular-row features {{ page.header.class}}">*/
/*     {{ content }}*/
/*     <div class="feature-items">*/
/*     {% for feature in page.header.features %}*/
/*            <div class="feature">*/
/*                        {% if feature.url %}*/
/*             <a href="{{ feature.url }}" target="_blank">*/
/*             {% endif %}*/
/*             {% if feature.icon %}*/
/*             <i class="fa fa-fw fa-{{ feature.icon }}"></i>*/
/*             <div class="feature-content icon-offset">*/
/*             {% else %}*/
/*             <div class="feature-content">*/
/*             {% endif %}*/
/*             {% if feature.header %}*/
/*             <h4>{{ feature.header }}</h4>*/
/*             {% endif %}*/
/* */
/*             {% if feature.text %}*/
/*             <p>{{ feature.text }}</p>*/
/*             {% endif %}*/
/*             {% if feature.url %}*/
/*             </a>*/
/*             {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     </div>*/
/* </div>*/
/* */
