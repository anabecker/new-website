<?php

/* modular/text.html.twig */
class __TwigTemplate_277115b393f2f6dd7940396221e9d59fd2e20616fcc3c81a0196ed8fcd853277 extends Twig_Template
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
        echo "<div class=\"modular-row callout\">
    <div class=\"callout-container container\">
    ";
        // line 3
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 4
        echo "    ";
        $context["imagelink"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image_link", array());
        // line 5
        echo "    ";
        if ((isset($context["imagelink"]) ? $context["imagelink"] : null)) {
            // line 6
            echo "    \t\t<a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image_link", array());
            echo "\" target=\"_blank\">
    ";
        }
        // line 8
        echo "    ";
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 9
            echo "        ";
            echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "cropResize", array(0 => 400, 1 => 400), "method"), "html", array(0 => "", 1 => "", 2 => ("align-" . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image_align", array()))), "method");
            echo "
    ";
        }
        // line 11
        echo "    ";
        if ((isset($context["imagelink"]) ? $context["imagelink"] : null)) {
            // line 12
            echo "    \t\t</a>
    ";
        }
        // line 14
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    <div class=\"clearfix\"></div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  49 => 12,  46 => 11,  40 => 9,  37 => 8,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="modular-row callout">*/
/*     <div class="callout-container container">*/
/*     {% set image = page.media.images|first %}*/
/*     {% set imagelink = page.header.image_link %}*/
/*     {% if imagelink %}*/
/*     		<a href="{{ page.header.image_link }}" target="_blank">*/
/*     {% endif %}*/
/*     {% if image %}*/
/*         {{ image.cropResize(400,400).html('','','align-'~page.header.image_align) }}*/
/*     {% endif %}*/
/*     {% if imagelink %}*/
/*     		</a>*/
/*     {% endif %}*/
/* {{ content }}*/
/*     <div class="clearfix"></div>*/
/*     </div>*/
/* </div>*/
/* */
