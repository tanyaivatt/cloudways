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

/* C:\OpenServer\domains\test/themes/salon_of_beauty/pages/photos.htm */
class __TwigTemplate_c758cf26b9e8fe5ec6570e27013bf41d27f851a498945bc87f51333f59fa68b7 extends \Twig\Template
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
        echo "<!-- Gallery -->
<div class=\"container\">
    <div class=\"row_relative\">
        <div class=\"\">
            <div class=\"slides-photos\">
                <div class=\"\">
                    <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-1.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"\">
                    <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-2.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"\">
                    <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-3.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"\">
                    <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-4.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"\">
                    <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-5.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"\">
                    <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ph-6.png");
        echo "\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Gallery -->
  
";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 31
        echo "        
    <script>
        \$('.slides-photos').slick({
          infinite: true,
          dots: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          centerPadding: '40px',
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
        });
    </script>
        
";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/pages/photos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 30,  90 => 31,  88 => 30,  77 => 22,  71 => 19,  65 => 16,  59 => 13,  53 => 10,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Gallery -->
<div class=\"container\">
    <div class=\"row_relative\">
        <div class=\"\">
            <div class=\"slides-photos\">
                <div class=\"\">
                    <img src=\"{{ 'assets/images/ph-1.png'|theme }}\" alt=\"\">
                </div>
                <div class=\"\">
                    <img src=\"{{ 'assets/images/ph-2.png'|theme }}\" alt=\"\">
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
    </div>
</div>
  <!-- Gallery -->
  
{% put scripts %}
        
    <script>
        \$('.slides-photos').slick({
          infinite: true,
          dots: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          centerPadding: '40px',
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
        });
    </script>
        
{% endput %}", "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/pages/photos.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("put" => 30);
        static $filters = array("theme" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put'],
                ['theme'],
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
