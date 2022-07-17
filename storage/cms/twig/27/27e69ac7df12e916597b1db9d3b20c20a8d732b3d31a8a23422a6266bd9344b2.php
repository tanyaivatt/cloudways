<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\OpenServer\domains\test/themes/salon_of_beauty/pages/product.htm */
class __TwigTemplate_f3d056965fa388df74420920021becca8a50e56b14b4df5d497967e480424162 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        echo "

";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 7
        echo "
<style>

    div.slider{
        margin: 0;
        border: var(--border);
        border-radius: .5rem;
        width: 45rem;
    }

    .slick-slide {
      margin: 0px 10px;
    }

    .slick-slide img {
      width: 80%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
</style>

";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 46
        echo "

<section class=\"details-container\" id=\"home\">

    <div class=\"content\">
        <div class=\"variable slider\">
            <div class=\"\">
                <img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-2.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-1.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-3.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-4.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-5.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-6.png");
        echo "\" alt=\"\">
            </div>
        </div>
    </div>

    <div class=\"image\">
        ";
        // line 74
        if (($context["record"] ?? null)) {
            // line 75
            echo "        <div class=\"details-col\">
            <a href=\"";
            // line 76
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">Послуги</a> > ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
            <br><br>
            <h1>";
            // line 78
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "</h1>
            <br>
            <div class=\"product__price\">
                <del>₴";
            // line 81
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "old_price", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "</del>₴";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
            </div>
        <br>
            <div class=\"text\">
                ";
            // line 85
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "text", [], "any", false, false, true, 85), 85, $this->source);
            echo "
            </div>
        <br>
            <a class=\"btn\" href=\"#popup\" data-fancybox>
                Записатись <span class=\"fas fa-chevron-right\"></span>
            </a> 
        </div>
     
        
            ";
        } else {
            // line 95
            echo "                ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 95, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 97
        echo "
            
    </div>

</section>

<!-- <section class=\"details-container\">
    
    
    <div class=\"variable slider\">
            <div class=\"\">
                <img src=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-2.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-1.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"";
        // line 114
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-3.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-4.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-5.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-6.png");
        echo "\" alt=\"\">
            </div>
    </div>
      <p><img class=\"img\" src=\"";
        // line 126
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "image", [], "any", false, false, true, 126), 126, $this->source));
        echo "\" alt=\"\"></p> 
    
    ";
        // line 128
        if (($context["record"] ?? null)) {
            // line 129
            echo "     <div class=\"details-col\">
        <a href=\"";
            // line 130
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">Послуги</a> > <a>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "</a>
        <br><br>
        <h1>";
            // line 132
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "</h1>
        <br>
        <div class=\"product__price\">
            <del>₴";
            // line 135
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "old_price", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "</del>₴";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "
        </div>
       <br>
            <div class=\"text\">
                ";
            // line 139
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "text", [], "any", false, false, true, 139), 139, $this->source);
            echo "
            </div>
        </div>
     
        
            ";
        } else {
            // line 145
            echo "                ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 145, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 147
        echo "        </div>
</section> -->
    
    <section class=\"detail-services\" id=\"detail-services\">

        <h1 class=\"another-header\"> Інші  <span>  послуги</span> </h1>
        
        <div class=\"box-container\">
            ";
        // line 155
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 155);
        // line 156
        echo "            ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 156);
        // line 157
        echo "            ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 157);
        // line 158
        echo "            ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 158);
        // line 159
        echo "            ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 159);
        // line 160
        echo "            ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 160);
        // line 161
        echo "                
                    ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 163
            echo "            <div class=\"box\">
                <!-- <i class=\"fas fa-notes-medical\"></i> -->
                <h3 class=\"product__title\">
                    <a href=\"";
            // line 166
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 166, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 166)]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "</a>
                </h3>
                <div class=\"another-product__price\">
                    <del> ₴";
            // line 169
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "old_price", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "   </del>₴";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "
                </div>
                <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p> -->
                <a href=\"";
            // line 172
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 172, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 172)]);
            echo "\" class=\"btn\"> Більше.. <span class=\"fas fa-chevron-right\"></span> </a>
            </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 175
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 175, $this->source), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "        </div>
        
    </section>

    ";
        // line 181
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 182
        echo "        
    <script>
        \$(\".variable\").slick({
        dots: true,
        infinite: true,
        variableWidth: true,
        // responsive: [
        //     {
        //       breakpoint: 768,
        //       settings: {
        //         arrows: false,
        //         centerMode: true,
        //         centerPadding: '40px',
        //         slidesToShow: 2
        //       }
        //     },
        //     {
        //       breakpoint: 480,
        //       settings: {
        //         arrows: false,
        //         centerMode: true,
        //         centerPadding: '40px',
        //         slidesToShow: 1
        //       }
        //     }
        //   ]
      });
    </script>

    ";
        // line 181
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/pages/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 181,  364 => 182,  362 => 181,  356 => 177,  347 => 175,  339 => 172,  331 => 169,  323 => 166,  318 => 163,  313 => 162,  310 => 161,  307 => 160,  304 => 159,  301 => 158,  298 => 157,  295 => 156,  293 => 155,  283 => 147,  277 => 145,  268 => 139,  259 => 135,  253 => 132,  246 => 130,  243 => 129,  241 => 128,  236 => 126,  230 => 123,  224 => 120,  218 => 117,  212 => 114,  206 => 111,  200 => 108,  187 => 97,  181 => 95,  168 => 85,  159 => 81,  153 => 78,  146 => 76,  143 => 75,  141 => 74,  132 => 68,  126 => 65,  120 => 62,  114 => 59,  108 => 56,  102 => 53,  93 => 46,  91 => 6,  51 => 7,  49 => 6,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}


{%put styles%}

<style>

    div.slider{
        margin: 0;
        border: var(--border);
        border-radius: .5rem;
        width: 45rem;
    }

    .slick-slide {
      margin: 0px 10px;
    }

    .slick-slide img {
      width: 80%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
</style>

{%endput%}


<section class=\"details-container\" id=\"home\">

    <div class=\"content\">
        <div class=\"variable slider\">
            <div class=\"\">
                <img src=\"{{ 'assets/images/ph-2.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"{{ 'assets/images/ph-1.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"{{ 'assets/images/ph-3.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"{{ 'assets/images/ph-4.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"{{ 'assets/images/ph-5.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"{{ 'assets/images/ph-6.png'|theme }}\" alt=\"\">
            </div>
        </div>
    </div>

    <div class=\"image\">
        {% if record %}
        <div class=\"details-col\">
            <a href=\"{{ 'home'|page }}\">Послуги</a> > {{ record.title }}
            <br><br>
            <h1>{{ record.title }}</h1>
            <br>
            <div class=\"product__price\">
                <del>₴{{ record.old_price }}</del>₴{{ record.price }}
            </div>
        <br>
            <div class=\"text\">
                {{ record.text|raw }}
            </div>
        <br>
            <a class=\"btn\" href=\"#popup\" data-fancybox>
                Записатись <span class=\"fas fa-chevron-right\"></span>
            </a> 
        </div>
     
        
            {% else %}
                {{ notFoundMessage }}
            {% endif %}

            
    </div>

</section>

<!-- <section class=\"details-container\">
    
    
    <div class=\"variable slider\">
            <div class=\"\">
                <img src=\"{{ 'assets/images/ph-2.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"{{ 'assets/images/ph-1.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"{{ 'assets/images/ph-3.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"{{ 'assets/images/ph-4.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"{{ 'assets/images/ph-5.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"\">
                <img src=\"{{ 'assets/images/ph-6.png'|theme }}\" alt=\"\">
            </div>
    </div>
      <p><img class=\"img\" src=\"{{ record.image|media }}\" alt=\"\"></p> 
    
    {% if record %}
     <div class=\"details-col\">
        <a href=\"{{ 'home'|page }}\">Послуги</a> > <a>{{ record.title }}</a>
        <br><br>
        <h1>{{ record.title }}</h1>
        <br>
        <div class=\"product__price\">
            <del>₴{{ record.old_price }}</del>₴{{ record.price }}
        </div>
       <br>
            <div class=\"text\">
                {{ record.text|raw }}
            </div>
        </div>
     
        
            {% else %}
                {{ notFoundMessage }}
            {% endif %}
        </div>
</section> -->
    
    <section class=\"detail-services\" id=\"detail-services\">

        <h1 class=\"another-header\"> Інші  <span>  послуги</span> </h1>
        
        <div class=\"box-container\">
            {% set records = builderList.records %}
            {% set displayColumn = builderList.displayColumn %}
            {% set noRecordsMessage = builderList.noRecordsMessage %}
            {% set detailsPage = builderList.detailsPage %}
            {% set detailsKeyColumn = builderList.detailsKeyColumn %}
            {% set detailsUrlParameter = builderList.detailsUrlParameter %}
                
                    {% for record in records %}
            <div class=\"box\">
                <!-- <i class=\"fas fa-notes-medical\"></i> -->
                <h3 class=\"product__title\">
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">{{ record.title }}</a>
                </h3>
                <div class=\"another-product__price\">
                    <del> ₴{{ record.old_price }}   </del>₴{{ record.price }}
                </div>
                <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p> -->
                <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\" class=\"btn\"> Більше.. <span class=\"fas fa-chevron-right\"></span> </a>
            </div>
            {% else %}
            <p>{{ noRecordsMessage }}</p>
                    {% endfor %}
        </div>
        
    </section>

    {% put scripts %}
        
    <script>
        \$(\".variable\").slick({
        dots: true,
        infinite: true,
        variableWidth: true,
        // responsive: [
        //     {
        //       breakpoint: 768,
        //       settings: {
        //         arrows: false,
        //         centerMode: true,
        //         centerPadding: '40px',
        //         slidesToShow: 2
        //       }
        //     },
        //     {
        //       breakpoint: 480,
        //       settings: {
        //         arrows: false,
        //         centerMode: true,
        //         centerPadding: '40px',
        //         slidesToShow: 1
        //       }
        //     }
        //   ]
      });
    </script>

    {% endput %}", "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/pages/product.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "put" => 6, "if" => 74, "for" => 162);
        static $filters = array("theme" => 53, "page" => 76, "escape" => 76, "raw" => 85, "media" => 126);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'put', 'if', 'for'],
                ['theme', 'page', 'escape', 'raw', 'media'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
