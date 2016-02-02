<?php

/* modular/gallery.html.twig */
class __TwigTemplate_ae6955c4fa80517cf8bac8e2ee92da029577d94d3d2b9abcaed590d3ab4fc707 extends Twig_Template
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
        echo "<div class=\"modular-row gallery ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
    ";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    <div class=\"gallery-items\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["galleryimage"]) {
            // line 5
            echo "


           <div class=\"gallery-image  img-";
            // line 8
            echo twig_replace_filter($this->getAttribute($context["galleryimage"], "filename", array()), array("." => "-", "_" => "-"));
            echo "\">
            ";
            // line 9
            if ($this->getAttribute($context["galleryimage"], "url", array())) {
                // line 10
                echo "            <div class=\"galleryimg-container\">
                <img src=\"";
                // line 11
                echo $this->getAttribute($context["galleryimage"], "url", array());
                echo "\" >
            </div>
            ";
            }
            // line 14
            echo "            ";
            if ($this->getAttribute($context["galleryimage"], "description", array())) {
                // line 15
                echo "                <!-- <p>";
                echo $this->getAttribute($context["galleryimage"], "description", array());
                echo "</p> -->
            ";
            }
            // line 17
            echo "            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galleryimage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  62 => 17,  56 => 15,  53 => 14,  47 => 11,  44 => 10,  42 => 9,  38 => 8,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <div class="modular-row gallery {{ page.header.class}}">*/
/*     {{ content }}*/
/*     <div class="gallery-items">*/
/*     {% for galleryimage in page.media.images %}*/
/* */
/* */
/* */
/*            <div class="gallery-image  img-{{galleryimage.filename|replace({'.':'-', '_':'-'})}}">*/
/*             {% if galleryimage.url %}*/
/*             <div class="galleryimg-container">*/
/*                 <img src="{{ galleryimage.url }}" >*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if galleryimage.description %}*/
/*                 <!-- <p>{{ galleryimage.description }}</p> -->*/
/*             {% endif %}*/
/*             </div>*/
/*     {% endfor %}*/
/*     </div>*/
/* </div>*/
/* */
